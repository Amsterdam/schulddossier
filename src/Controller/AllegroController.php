<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Controller;

use Doctrine\ORM\EntityManagerInterface;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Dossier;
use GemeenteAmsterdam\FixxxSchuldhulp\Exception\AllegroServiceException;
use GemeenteAmsterdam\FixxxSchuldhulp\Service\AllegroService;
use Psr\Log\LoggerInterface;
use Symfony\Bridge\Doctrine\Attribute\MapEntity;
use Symfony\Bridge\Twig\Attribute\Template;
use Symfony\Component\ExpressionLanguage\Expression;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Symfony\Contracts\Translation\TranslatorInterface;

#[IsGranted(attribute: new Expression(
    "is_granted('ROLE_SHV') || is_granted('ROLE_GKA') || is_granted('ROLE_GKA_APPBEHEERDER') || is_granted('ROLE_SHV_KEYUSER') || is_granted('ROLE_ADMIN')"
))]
class AllegroController extends AbstractController
{
    #[Route(path: '/app/allegro/srveisers/{dossierId}')]
    #[IsGranted(attribute: new Expression("is_granted('access', subject)"), subject: new Expression('args["dossier"]'))]
    #[Template('allegro/allegro_srveisers.html.twig')]
    public function allegroSrveisers(
        #[MapEntity(id: 'dossierId')]
        Dossier $dossier,
        AllegroService $allegroService
    ): array {
        $header = null;
        $srvEisers = null;
        $aanvraag = null;
        $eisers = [];
        try {
            $header = $allegroService->getSRVAanvraagHeader(
                $dossier->getOrganisatie(),
                $dossier->getAllegroNummer()
            );
            $aanvraag = $allegroService->getSRVAanvraag($dossier->getOrganisatie(), $header);
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

    #[Route(path: '/app/allegro/validate/{dossierId}')]
    #[IsGranted(attribute: new Expression("is_granted('access', subject)"), subject: new Expression('args["dossier"]'))]
    #[IsGranted(attribute: new Expression(
        "is_granted('ROLE_GKA') || is_granted('ROLE_GKA_APPBEHEERDER') || is_granted('ROLE_ADMIN')"
    ))]
    public function validateSendToAllegro(
        #[MapEntity(id: 'dossierId')]
        Dossier $dossier,
        AllegroService $allegroService,
        TranslatorInterface $translator
    ): JsonResponse {
        try {
            $allegroService->validateDossier($dossier);
        } catch (AllegroServiceException $e) {
            return new JsonResponse(['valid' => false, 'message' => $translator->trans($e->getMessage())]);
        }
        return new JsonResponse(['valid' => true]);
    }

    #[Route(path: '/app/allegro/send/{dossierId}', methods: ['POST'])]
    #[IsGranted(attribute: new Expression("is_granted('access', subject)"), subject: new Expression('args["dossier"]'))]
    #[IsGranted(attribute: new Expression(
        "is_granted('ROLE_GKA') || is_granted('ROLE_GKA_APPBEHEERDER') || is_granted('ROLE_ADMIN')"
    ))]
    public function send(
        #[MapEntity(id: 'dossierId')]
        Dossier $dossier,
        AllegroService $allegroService,
        TranslatorInterface $translator,
        EntityManagerInterface $em,
        LoggerInterface $logger
    ): JsonResponse {
        try {
            $response = $allegroService->sendAanvraag($dossier);

            $em->flush();
            $dossier->setSendToAllegro((new \DateTime()));

            if ($response) {
                return new JsonResponse(['send' => true]);
            } else {
                return new JsonResponse(
                    [
                        'send' => false,
                        'message' => 'Er is iets mis gegaan in het contact met allegro, probeer het later nog een keer of neem contact op met het beheer'
                    ]
                );
            }
        } catch (AllegroServiceException $e) {
            return new JsonResponse(['send' => false, 'message' => $translator->trans($e->getMessage())]);
        } catch (\Exception $e) {
            // Logging toevoegen
            $logger->error($e->getMessage(), [AllegroService::LOGGING_CONTEXT]);
            return new JsonResponse(
                [
                    'send' => false,
                    'message' => 'Er is iets mis gegaan in het contact met allegro, probeer het later nog een keer of neem contact op met het beheer'
                ]
            );
        }
    }
}
