<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Controller;

use Doctrine\ORM\EntityManagerInterface;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Dossier;
use GemeenteAmsterdam\FixxxSchuldhulp\Exception\AllegroServiceException;
use GemeenteAmsterdam\FixxxSchuldhulp\Service\AllegroService;
use Psr\Log\LoggerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Translation\TranslatorInterface;

/**
 * @Route("/app/allegro")
 * @Security("is_granted('ROLE_MADI') || is_granted('ROLE_GKA') || is_granted('ROLE_GKA_APPBEHEERDER') || is_granted('ROLE_MADI_KEYUSER') || is_granted('ROLE_ADMIN')")
 */
class AllegroController extends AbstractController
{
    /**
     * @Route("/srveisers/{dossierId}")
     * @Security("is_granted('access', dossier)")
     * @ParamConverter("dossier", options={"id"="dossierId"})
     * @Template()
     */
    public function allegroSrveisers(Request $request, Dossier $dossier, AllegroService $allegroService)
    {
        $header = null;
        $srvEisers = null;
        $aanvraag = null;
        $eisers = [];
        try {
            $header = $allegroService->getSRVAanvraagHeader($dossier->getSchuldhulpbureau(),
                $dossier->getAllegroNummer());
            $aanvraag = $allegroService->getSRVAanvraag($dossier->getSchuldhulpbureau(), $header);
            $srvEisers = $allegroService->getSRVEisers($dossier, $header);
            // $sbOaverzicht = $allegroService->getSBOverzicht($dossier); Geen response
            $eisers = $srvEisers->getEisers()->getTSRVEiser();
        } catch (\Exception|\Error $e) {
            // Geen eisers gevonden
        }

        $compareDate = \DateTime::createFromFormat('Y', '2000');

        return [
            'dossier' => $dossier,
            'header' => $header,
            'aanvraag' => $aanvraag,
            'srvEisers' => $srvEisers,
            'eisers' => $eisers,
            'compareDate' => $compareDate,
        ];
    }

    /**
     * @Route("/validate/{dossierId}")
     * @Security("is_granted('access', dossier)")
     * @IsGranted({"ROLE_ADMIN","ROLE_GKA","ROLE_GKA_APPBEHEERDER"})
     * @ParamConverter("dossier", options={"id"="dossierId"})
     */
    public function validateSendToAllegro(Request $request, Dossier $dossier, AllegroService $allegroService, TranslatorInterface $translator): JsonResponse {
        try {
            $allegroService->validateDossier($dossier);
        } catch (AllegroServiceException $e) {
            return new JsonResponse(['valid' => false, 'message' => $translator->trans($e->getMessage())]);
        }
        return new JsonResponse(['valid' => true]);
    }

    /**
     * @Route("/send/{dossierId}", methods={"POST"})
     * @Security("is_granted('access', dossier)")
     * @IsGranted({"ROLE_ADMIN","ROLE_GKA","ROLE_GKA_APPBEHEERDER"})
     * @ParamConverter("dossier", options={"id"="dossierId"})
     */
    public function send(Dossier $dossier, AllegroService $allegroService, TranslatorInterface $translator, EntityManagerInterface $em, LoggerInterface $logger): JsonResponse {
        try {
            $response = $allegroService->sendAanvraag($dossier);
            $dossier->setSendToAllegro((new \DateTime()));
            $em->flush();
            if ($response) {
                return new JsonResponse(['send' => true]);
            } else {
                return new JsonResponse(['send' => false, 'message' => 'Er is iets mis gegaan in het contact met allegro, probeer het later nog een keer of neem contact op met het beheer']);
            }
        } catch (AllegroServiceException $e) {
            return new JsonResponse(['send' => false, 'message' => $translator->trans($e->getMessage())]);
        } catch (\Exception $e) {
            // Logging toevoegen
            $logger->error($e->getMessage(),[AllegroService::LOGGING_CONTEXT]);
            return new JsonResponse(['send' => false, 'message' => 'Er is iets mis gegaan in het contact met allegro, probeer het later nog een keer of neem contact op met het beheer']);
        }
    }
}
