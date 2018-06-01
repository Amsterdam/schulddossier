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
        return $this->redirectToRoute('gemeenteamsterdam_fixxxschuldhulp_default_appredirect');
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

    /**
     * @Route("/app/mail-test")
     * @Security("has_role('ROLE_USER')")
     */
    public function testAction(Request $request)
    {
        $mailer = $this->get('mailer');
        $from = $this->getParameter('app_mail_from');

        if ($request->query->get('to') !== null) {

            $message = new \Swift_Message();
            $message->getHeaders()->addTextHeader('X-Application', 'Schuldhulp');
            $message->addFrom($from);
            $message->addTo($request->query->get('to'));

            $subject = 'test bericht via schuldhulp ' . date('YmdHis');
            $txt = 'test bericht via schuldhulp ' . date('YmdHis');

            $message->setSubject($subject);
            $message->setBody($txt, 'text/plain');

            $mailer->send($message);

            return new Response('Bericht verstuurd');
        }
        return new Response('Geen to parameter aangetroffen');
    }
}