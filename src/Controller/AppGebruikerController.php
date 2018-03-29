<?php
namespace GemeenteAmsterdam\FixxxSchuldhulp\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Doctrine\ORM\EntityManagerInterface;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Gebruiker;
use GemeenteAmsterdam\FixxxSchuldhulp\Repository\GebruikerRepository;
use GemeenteAmsterdam\FixxxSchuldhulp\Form\Type\GebruikerFormType;

/**
 * @Route("/app/gebruiker")
 * @Security("has_role('ROLE_USER')")
 */
class AppGebruikerController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction(Request $request, EntityManagerInterface $em)
    {
        /** @var $repository GebruikerRepository */
        $repository = $em->getRepository(Gebruiker::class);

        $maxPageSize = 10;

        $gebruikers = $repository->findAll($request->query->getInt('page', 0), $request->query->getInt('pageSize', $maxPageSize));

        return $this->render('Gebruiker/index.html.twig', [
            'gebruikers' => $gebruikers,
            'pagination' => [
                'page' => $request->query->getInt('page', 0),
                'pageSize' => $maxPageSize,
                'numberOfItems' => count($gebruikers),
                'numberOfPages' => ceil(count($gebruikers) / $request->query->getInt('pageSize', $maxPageSize))
            ]
        ]);
    }

    /**
     * @Route("/nieuw")
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
     * @ParamConverter("gebruiker", options={"id"="gebruikerId"})
     */
    public function updateAction(Request $request, EntityManagerInterface $em, Gebruiker $gebruiker)
    {
        $form = $this->createForm(GebruikerFormType::class, $gebruiker, []);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em->flush();
            $this->addFlash('success', 'Opgeslagen');
            return $this->redirectToRoute('gemeenteamsterdam_fixxxschuldhulp_appgebruiker_update', [
                'gebruikerId' => $gebruiker->getId()
            ]);
        }
        return $this->render('Gebruiker/update.html.twig', [
            'gebruiker' => $gebruiker,
            'form' => $form->createView()
        ]);
    }
}