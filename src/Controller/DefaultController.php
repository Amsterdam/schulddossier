<?php
namespace GemeenteAmsterdam\FixxxSchuldhulp\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction(Request $request)
    {
        return $this->render('Default/index.html.twig');
    }

    /**
     * @Route("/app")
     * @Security("has_role('ROLE_USER')")
     */
    public function appRedirectAction(Request $request)
    {
        if ($this->isGranted('ROLE_APPBEHEER')) {
            return $this->redirectToRoute('gemeenteamsterdam_fixxxschuldhulp_appgebruiker_index');
        }
        return $this->redirectToRoute('gemeenteamsterdam_fixxxschuldhulp_appdossier_index');
    }
}