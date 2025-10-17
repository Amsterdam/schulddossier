<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Controller\React;

use Symfony\Component\ExpressionLanguage\Expression;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

class DossierController extends AbstractController
{
    #[\Symfony\Component\Routing\Attribute\Route(path: '/dossiers/')]
    #[IsGranted(attribute: new Expression("is_granted('ROLE_ADMIN')"))]
    public function index()
    {
        return $this->render('React/Dossier/index.html.twig');
    }
}
