<?php
namespace GemeenteAmsterdam\FixxxSchuldhulp\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Doctrine\ORM\EntityManagerInterface;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Schuldhulpbureau;
use GemeenteAmsterdam\FixxxSchuldhulp\Form\Type\SchuldhulpbureauFormType;

/**
 * @Route("/app/schuldhulpbureau")
 * @Security("has_role('ROLE_USER')")
 */
class AppSchuldhulpbureauController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction(Request $request, EntityManagerInterface $em)
    {
        /** @var $repository SchuldhulpbureauRepository */
        $repository = $em->getRepository(Schuldhulpbureau::class);

        $maxPageSize = 10;

        $schuldhulpbureaus = $repository->findAll($request->query->getInt('page', 0), $request->query->getInt('pageSize', $maxPageSize));

        return $this->render('Schuldhulpbureau/index.html.twig', [
            'schuldhulpbureaus' => $schuldhulpbureaus,
            'pagination' => [
                'page' => $request->query->getInt('page', 0),
                'pageSize' => $maxPageSize,
                'numberOfItems' => count($schuldhulpbureaus),
                'numberOfPages' => ceil(count($schuldhulpbureaus) / $request->query->getInt('pageSize', $maxPageSize))
            ]
        ]);
    }

    /**
     * @Route("/nieuw")
     */
    public function createAction(Request $request, EntityManagerInterface $em)
    {
        $schuldhulpbureau = new Schuldhulpbureau();
        $form = $this->createForm(SchuldhulpbureauFormType::class, $schuldhulpbureau);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($schuldhulpbureau);
            $em->flush();
            $this->addFlash('success', 'Schuldhulpbureau aangemaakt');
            return $this->redirectToRoute('gemeenteamsterdam_fixxxschuldhulp_appschuldhulpbureau_update', [
                'schuldhulpbureauId' => $schuldhulpbureau->getId()
            ]);
        }
        return $this->render('Schuldhulpbureau/create.html.twig', [
            'schuldhulpbureau' => $schuldhulpbureau,
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/detail/{schuldhulpbureauId}/bewerken")
     * @ParamConverter("schuldhulpbureau", options={"id"="schuldhulpbureauId"})
     */
    public function updateAction(Request $request, EntityManagerInterface $em, Schuldhulpbureau $schuldhulpbureau)
    {
        $form = $this->createForm(SchuldhulpbureauFormType::class, $schuldhulpbureau, []);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em->flush();
            $this->addFlash('success', 'Opgeslagen');
            return $this->redirectToRoute('gemeenteamsterdam_fixxxschuldhulp_appschuldhulpbureau_update', [
                'schuldhulpbureauId' => $schuldhulpbureau->getId()
            ]);
        }
        return $this->render('Schuldhulpbureau/update.html.twig', [
            'schuldhulpbureau' => $schuldhulpbureau,
            'form' => $form->createView()
        ]);
    }
}