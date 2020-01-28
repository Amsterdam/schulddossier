<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Controller;

use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Dossier;
use GemeenteAmsterdam\FixxxSchuldhulp\Service\AllegroService;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * @Route("/app/allegro")
 * @Security("has_role('ROLE_MADI') || has_role('ROLE_GKA') || has_role('ROLE_GKA_APPBEHEERDER') || has_role('ROLE_MADI_KEYUSER') || has_role('ROLE_ADMIN')")
 */
class AllegroController extends Controller
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
}
