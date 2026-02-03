<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Controller;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\EntityManagerInterface;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Gebruiker;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Organisatie;
use GemeenteAmsterdam\FixxxSchuldhulp\Event\ActionEvent;
use GemeenteAmsterdam\FixxxSchuldhulp\Form\Type\GebruikerFormType;
use GemeenteAmsterdam\FixxxSchuldhulp\Repository\GebruikerRepository;
use GemeenteAmsterdam\FixxxSchuldhulp\Traits\FilterAble;
use Knp\Component\Pager\PaginatorInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\StreamedResponse;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;

/**
 * @Route("/app/gebruiker")
 * @Security("is_granted('ROLE_GKA_APPBEHEERDER') || is_granted('ROLE_SHV_KEYUSER') || is_granted('ROLE_ADMIN')")
 */
class AppGebruikerController extends AbstractController
{
    use FilterAble;

    /**
     * @Route("/")
     * @Route("/inactive", name="gebruikers_inactive")
     */
    public function indexAction(Request $request, PaginatorInterface $paginator, GebruikerRepository $repository)
    {
        $inactive = 'gebruikers_inactive' === $request->get('_route');

        if ($this->containsForbiddenFilterFields($request)) {
            return new RedirectResponse($this->generateUnfilteredUrl($request));
        }

        $pagination = $paginator->paginate(
            $repository->generatePaginationQueryForUser($this->getUser(), $inactive, false),
            $request->query->getInt('page', 1),
            10
        );

        $onbekendeGebruikers = $repository->findAllOnbekendeGebruikers()->getQuery()->getResult();

        return $this->render('Gebruiker/index.html.twig', [
            'pagination' => $pagination,
            'onbekendeGebruikers' => $onbekendeGebruikers,
            'inactive' => $inactive
        ]);
    }

    /**
     * @Route("/nieuw")
     * @Security("is_granted('ROLE_GKA_APPBEHEERDER') || is_granted('ROLE_SHV_KEYUSER') || is_granted('ROLE_ADMIN')")
     */
    public function createAction(Request $request, EntityManagerInterface $em)
    {
        $gebruiker = new Gebruiker();
        $form = $this->createForm(GebruikerFormType::class, $gebruiker);
        $form->remove('enabled');
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($gebruiker);
            $em->flush();
            $this->addFlash('success', 'Gebruiker aangemaakt');
            return $this->redirectToRoute('gemeenteamsterdam_fixxxschuldhulp_appgebruiker_update', [
                'gebruikerId' => $gebruiker->getId()
            ]);
        }
        return $this->render('Gebruiker/create.html.twig', [
            'gebruiker' => $gebruiker,
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/detail/{gebruikerId}/bewerken")
     * @Security("is_granted('ROLE_GKA_APPBEHEERDER') || is_granted('ROLE_SHV_KEYUSER') || is_granted('ROLE_ADMIN')")
     * @ParamConverter("gebruiker", options={"id"="gebruikerId"})
     */
    public function updateAction(
        Request $request,
        EntityManagerInterface $em,
        Gebruiker $gebruiker,
        EventDispatcherInterface $eventDispatcher
    ) {
        if ($this->getUser()->getType() === Gebruiker::TYPE_SHV_KEYUSER) {
            if (
                !$gebruiker->getOrganisaties()->isEmpty() && empty(
                    array_intersect(
                        $this->getUser()->getOrganisaties()->toArray(),
                        $gebruiker->getOrganisaties()->toArray()
                    )
                )
            ) {
                throw $this->createAccessDeniedException();
            }
        }

        $form = $this->createForm(GebruikerFormType::class, $gebruiker, []);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em->flush();
            $this->addFlash('success', 'Opgeslagen');

            $currentGebruiker = $this->getUser();
            $eventDispatcher->dispatch(
                ActionEvent::registerGebruikerGewijzigd($currentGebruiker, $gebruiker),
                ActionEvent::NAME
            );
            return $this->redirectToRoute('gemeenteamsterdam_fixxxschuldhulp_appgebruiker_update', [
                'gebruikerId' => $gebruiker->getId()
            ]);
        }
        return $this->render('Gebruiker/update.html.twig', [
            'gebruiker' => $gebruiker,
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/detail/{gebruikerId}/verwijder")
     * @Method({"POST"})
     * @Security("is_granted('ROLE_GKA_APPBEHEERDER') || is_granted('ROLE_ADMIN')")
     * @ParamConverter("gebruiker", options={"id"="gebruikerId"})
     */
    public function deleteAction(
        Request $request,
        EntityManagerInterface $em,
        Gebruiker $gebruiker,
        EventDispatcherInterface $eventDispatcher
    ) {
        // TODO Dit punt is in opverleg met de kredietbank uitgeschakeld om te refinen welke gegevens er moeten worden geanonimiseerd
        // TODO Weergave is ook weg gehaald in schulddossier/templates/Gebruiker/update.html.twig
        throw $this->createAccessDeniedException('Deze functionaliteit is uitgeschakeld');

        if (
            $this->isCsrfTokenValid(
                'gemeenteamsterdam_fixxxschuldhulp_appgebruiker_delete',
                $request->request->get('token')
            ) === false
        ) {
            throw $this->createAccessDeniedException('CSRF token invalid');
        }

        $currentGebruiker = $this->getUser();
        $eventDispatcher->dispatch(
            ActionEvent::registerGebruikerVerwijderd($currentGebruiker, $gebruiker),
            ActionEvent::NAME
        );

        $gebruiker->setVerwijderd(new \DateTime());
        $gebruiker->anonymize();
        $em->persist($gebruiker);
        $this->addFlash('success', 'Gebruiker verwijderd en geanonimiseerd');
        $em->flush();

        return new RedirectResponse('/app/gebruiker');
    }

    /**
     * @Route("/download-gebruikers-csv", name="get_gebruikers_csv", methods={"GET"})
     * @Security("is_granted('ROLE_GKA_APPBEHEERDER') || is_granted('ROLE_ADMIN')")
     */
    public function getGebruikersCsv(GebruikerRepository $repository): StreamedResponse
    {
        $gebruikers = $repository->findAll(0, 100000);

        $response = new StreamedResponse(function () use ($gebruikers) {
            $handle = fopen('php://output', 'w+');

            fputcsv($handle, ['naam', 'e-mail', 'organisatie', 'laatste login datum', 'enabled/disabled'], ';');

            foreach ($gebruikers as $gebruiker) {
                $lastLogin = $gebruiker->getLastLogin() !== null
                    ? $gebruiker->getLastLogin()->format('Y-m-d H:i:s')
                    : 'Nooit';

                $isEnabled = $gebruiker->isEnabled() ? 'enabled' : 'disabled';

                /**
                 * @var $organisatieCollection Organisatie[]
                 */
                $organisatieCollection = $gebruiker->getOrganisaties()->toArray();
                $organisatieNames = array_map(fn(Organisatie $org) => $org->getNaam(), $organisatieCollection);

                $organisaties = implode(',', $organisatieNames);

                fputcsv($handle, [$gebruiker->getNaam(), $gebruiker->getEmail(), $organisaties, $lastLogin, $isEnabled], ';');
            }
            fclose($handle);
        });

        $response->headers->set('Content-Type', 'text/csv');
        $response->headers->set('Content-Disposition', 'attachment; filename="gebruikerslijst.csv"');

        return $response;
    }
}
