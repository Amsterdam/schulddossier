<?php
namespace GemeenteAmsterdam\FixxxSchuldhulp\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\Finder\Finder;
use Symfony\Component\HttpFoundation\Session\SessionInterface;


/**
 * @Route("/app/help")
 * @Security("is_granted('ROLE_USER')")
 */
class HelpController extends AbstractController
{
    private $session;

    public function __construct(SessionInterface $session)
    {
        $this->session = $session;
    }
    /**
     * @Route("/")
     * @Security("is_granted('ROLE_USER')")
     */
    public function indexAction(Request $request)
    {
        return $this->render('Help/index.html.twig');
    }
}
