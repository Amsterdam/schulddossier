<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Controller;

use _HumbugBox6e20aa8b1e92\Symfony\Component\ExpressionLanguage\Expression;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Finder\Finder;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Security\Http\Attribute\IsGranted;


#[IsGranted(attribute: new Expression("is_granted('ROLE_USER')"))]
class HelpController extends AbstractController
{
    private $session;

    public function __construct(RequestStack $requestStack)
    {
        $this->session = $requestStack->getSession();
    }

    #[Route(path: '/app/help/')]
    #[IsGranted(attribute: new Expression("is_granted('ROLE_USER')"))]
    public function index(): Response
    {
        return $this->render('Help/index.html.twig');
    }
}
