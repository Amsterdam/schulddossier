<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Controller;

use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\ExpressionLanguage\Expression;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Doctrine\ORM\EntityManagerInterface;
use GemeenteAmsterdam\FixxxSchuldhulp\Form\Type\GebruikerChangePasswordFormType;

class AppSecurityController extends AbstractController
{
    #[\Symfony\Component\Routing\Attribute\Route(path: '/app/login')]
    public function login(AuthenticationUtils $authenticationUtils, Security $security)
    {
        if ($security->isGranted('ROLE_USER')) {
            return $this->redirectToRoute('gemeenteamsterdam_fixxxschuldhulp_appdossier_index');
        }

        $error = $authenticationUtils->getLastAuthenticationError();
        $lastUsername = $authenticationUtils->getLastUsername();

        return new Response($this->render('Security/login.html.twig', [
            'last_username' => $lastUsername,
            'error' => $error
        ]));
    }

    #[\Symfony\Component\Routing\Attribute\Route(path: '/app/logout')]
    public function logout()
    {
        //
    }

    #[\Symfony\Component\Routing\Attribute\Route(path: '/app/wachtwoord-veranderen')]
    #[IsGranted(attribute: new Expression("is_granted('ROLE_USER')"))]
    public function changePassword(Request $request, EntityManagerInterface $em)
    {
        $gebruiker = $this->getUser();

        $form = $this->createForm(GebruikerChangePasswordFormType::class, $gebruiker);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->flush();
            $this->addFlash('success', 'Wachtwoord aangepast!');
            return $this->redirectToRoute('gemeenteamsterdam_fixxxschuldhulp_default_appredirect', []);
        }

        return $this->render('Security/changePassword.html.twig', [
            'gebruiker' => $gebruiker,
            'form' => $form->createView(),
        ]);
    }
}
