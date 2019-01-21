<?php
namespace GemeenteAmsterdam\FixxxSchuldhulp\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Doctrine\ORM\EntityManagerInterface;
use GemeenteAmsterdam\FixxxSchuldhulp\Form\Type\GebruikerChangePasswordFormType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

class AppSecurityController extends Controller
{
    /**
     * @Route("/app/login")
     */
    public function loginAction(Request $request, AuthenticationUtils $authenticationUtils)
    {
        return $this->redirectToRoute('gemeenteamsterdam_fixxxschuldhulp_appdossier_index');
    }

    /**
     * @Route("/app/logout")
     */
    public function logoutAction()
    {
        //
    }

    /**
     * @Route("/app/wachtwoord-veranderen")
     * @Security("has_role('ROLE_USER')")
     */
    public function changePasswordAction(Request $request, EntityManagerInterface $em)
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