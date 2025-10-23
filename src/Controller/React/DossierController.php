<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Controller\React;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\ExpressionLanguage\Expression;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[IsGranted(attribute: new Expression("is_granted('ROLE_ADMIN')"))]
class DossierController extends AbstractController
{
    #[Route(path: '/dossiers/')]
    public function index()
    {
        return $this->render('React/Dossier/index.html.twig');
    }
}
