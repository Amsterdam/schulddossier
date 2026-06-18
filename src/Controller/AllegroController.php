<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Controller;

use Exception;
use Error;
use DateTime;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Dossier;
use GemeenteAmsterdam\FixxxSchuldhulp\Service\AllegroService;

use Symfony\Component\ExpressionLanguage\Expression;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Symfony\Bridge\Doctrine\Attribute\MapEntity;
use Symfony\Bridge\Twig\Attribute\Template;


#[IsGranted(attribute: new Expression(
    "is_granted('ROLE_SHV') || is_granted('ROLE_GKA') || is_granted('ROLE_GKA_APPBEHEERDER') || is_granted('ROLE_SHV_KEYUSER') || is_granted('ROLE_ADMIN')"
))]
class AllegroController extends AbstractController
{
    #[\Symfony\Component\Routing\Attribute\Route(path: '/app/allegro/srveisers/{dossierId}')]
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
            $eisers = $srvEisers->getEisers()->getTSRVEiser();
        } catch (Exception | Error $e) {
            // Geen eisers gevonden
        }

        $compareDate = DateTime::createFromFormat('Y', '2000');

        return [
            'dossier' => $dossier,
            'header' => $header,
            'aanvraag' => $aanvraag,
            'srvEisers' => $srvEisers,
            'eisers' => $eisers,
            'compareDate' => $compareDate,
        ];
    }
}
