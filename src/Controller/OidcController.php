<?php
namespace GemeenteAmsterdam\FixxxSchuldhulp\Controller;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Dossier;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Voorlegger;
use GemeenteAmsterdam\FixxxSchuldhulp\Repository\DossierRepository;
use GemeenteAmsterdam\FixxxSchuldhulp\Form\Type\CreateDossierFormType;
use GemeenteAmsterdam\FixxxSchuldhulp\Form\Type\DetailDossierFormType;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\DossierDocument;
use GemeenteAmsterdam\FixxxSchuldhulp\Form\Type\DossierDocumentFormType;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Form\FormError;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Document;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpFoundation\RedirectResponse;
use GemeenteAmsterdam\FixxxSchuldhulp\Form\Type\SchuldItemFormType;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\SchuldItem;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Schuldeiser;
use GemeenteAmsterdam\FixxxSchuldhulp\Form\Type\SchuldeiserFormType;
use Symfony\Component\HttpFoundation\File\File;
use GemeenteAmsterdam\FixxxSchuldhulp\Form\Type\VoorleggerLegitimatieFormType;
use GemeenteAmsterdam\FixxxSchuldhulp\Form\Type\VoorleggerAlimentatieEchtscheidingsconvenantFormType;
use GemeenteAmsterdam\FixxxSchuldhulp\Form\Type\VoorleggerAlimentatieFormType;
use GemeenteAmsterdam\FixxxSchuldhulp\Form\Type\VoorleggerArbeidsovereenkomstFormType;
use GemeenteAmsterdam\FixxxSchuldhulp\Form\Type\VoorleggerAutolastenKmWoonwerkverkeerFormType;
use GemeenteAmsterdam\FixxxSchuldhulp\Form\Type\VoorleggerAutoTaxatieFormType;
use GemeenteAmsterdam\FixxxSchuldhulp\Form\Type\VoorleggerBeschikkingOnderBewindstellingFormType;
use GemeenteAmsterdam\FixxxSchuldhulp\Form\Type\VoorleggerBeschikkingUwvFormType;
use GemeenteAmsterdam\FixxxSchuldhulp\Form\Type\VoorleggerBudgetbeheerFormType;
use GemeenteAmsterdam\FixxxSchuldhulp\Form\Type\VoorleggerCjibFormType;
use GemeenteAmsterdam\FixxxSchuldhulp\Form\Type\VoorleggerGereserveerdeGeldenFormType;
use GemeenteAmsterdam\FixxxSchuldhulp\Form\Type\VoorleggerHuurspecificatieFormType;
use GemeenteAmsterdam\FixxxSchuldhulp\Form\Type\VoorleggerInkomstenspecificatieFormType;
use GemeenteAmsterdam\FixxxSchuldhulp\Form\Type\VoorleggerInzageToetsingBkrFormType;
use GemeenteAmsterdam\FixxxSchuldhulp\Form\Type\VoorleggerKostgeldFormType;
use GemeenteAmsterdam\FixxxSchuldhulp\Form\Type\VoorleggerKwijtscheldingGemeenteBelastingFormType;
use GemeenteAmsterdam\FixxxSchuldhulp\Form\Type\VoorleggerMeterstandenEnergieFormType;
use GemeenteAmsterdam\FixxxSchuldhulp\Form\Type\VoorleggerOndertekendAanvraagFormulierFormType;
use GemeenteAmsterdam\FixxxSchuldhulp\Form\Type\VoorleggerOvereenkomstKinderopvangFormType;
use GemeenteAmsterdam\FixxxSchuldhulp\Form\Type\VoorleggerPolisbladZorgverzekeringFormType;
use GemeenteAmsterdam\FixxxSchuldhulp\Form\Type\VoorleggerRetourbewijsModemFormType;
use GemeenteAmsterdam\FixxxSchuldhulp\Form\Type\VoorleggerStabilisatieovereenkomstFormType;
use GemeenteAmsterdam\FixxxSchuldhulp\Form\Type\VoorleggerToelichtingAanvraagSchuldsaneringClientFormType;
use GemeenteAmsterdam\FixxxSchuldhulp\Form\Type\VoorleggerToelichtingAanvraagSchuldsaneringMadiFormType;
use GemeenteAmsterdam\FixxxSchuldhulp\Form\Type\VoorleggerVerklaringWerkgeverFormType;
use GemeenteAmsterdam\FixxxSchuldhulp\Form\Type\VoorleggerVoorlopigeTeruggaafBelastingdienstFormType;
use GemeenteAmsterdam\FixxxSchuldhulp\Form\Type\VoorleggerVrijwaringsbewijsFormType;
use GemeenteAmsterdam\FixxxSchuldhulp\Form\Type\VoorleggerVtlbFormType;
use GemeenteAmsterdam\FixxxSchuldhulp\Form\Type\VoorleggerWaternetFormType;
use GemeenteAmsterdam\FixxxSchuldhulp\Form\Type\VoorleggerSchuldenoverzichtFormType;
use Symfony\Component\Workflow\Registry as WorkflowRegistry;
use Symfony\Component\Workflow\Dumper\GraphvizDumper;
use GemeenteAmsterdam\FixxxSchuldhulp\Form\Type\SearchDossierFormType;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Gebruiker;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use GemeenteAmsterdam\FixxxSchuldhulp\Form\Type\DocumentFormType;
use Symfony\Component\Validator\Constraints\Valid;
use GemeenteAmsterdam\FixxxSchuldhulp\Form\Type\VoorleggerFormType;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use GemeenteAmsterdam\FixxxSchuldhulp\Form\Type\SchuldenFormType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormEvent;
use GemeenteAmsterdam\FixxxSchuldhulp\Form\Type\CreateAantekeningFormType;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Aantekening;
use Doctrine\ORM\EntityManager;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use GemeenteAmsterdam\FixxxSchuldhulp\Event\DossierChangedEvent;

/**
 * @Route("/oidc")
 */
class OidcController extends Controller
{
    /**
     * @Route("/test")
     */
    public function index(Request $request)
    {
        return new Response('<html><head></head><boyd>OK! ' . json_encode([$this->getUser()->getId(), $this->getUser()->getEmail()]) . '</body></html>');
    }

    /**
     * @Route("/return")
     */
    public function return(Request $request)
    {
        return new Response('<html><head></head><boyd>OK! ' . json_encode([$this->getUser()->getId(), $this->getUser()->getEmail()]) . '</body></html>');
    }
}