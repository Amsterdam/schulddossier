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
use GemeenteAmsterdam\FixxxSchuldhulp\Form\Type\VoorleggerBewindstellingOfBudgetbeheerFormType;
use GemeenteAmsterdam\FixxxSchuldhulp\Form\Type\VoorleggerBudgetbeheerFormType;
use GemeenteAmsterdam\FixxxSchuldhulp\Form\Type\VoorleggerCjibFormType;
use GemeenteAmsterdam\FixxxSchuldhulp\Form\Type\VoorleggerCorrigerenGemeenteBelastingFormType;
use GemeenteAmsterdam\FixxxSchuldhulp\Form\Type\VoorleggerGereserveerdeGeldenFormType;
use GemeenteAmsterdam\FixxxSchuldhulp\Form\Type\VoorleggerHuurtoeslagFormType;
use GemeenteAmsterdam\FixxxSchuldhulp\Form\Type\VoorleggerHuurspecificatieFormType;
use GemeenteAmsterdam\FixxxSchuldhulp\Form\Type\VoorleggerInkomstenspecificatieFormType;
use GemeenteAmsterdam\FixxxSchuldhulp\Form\Type\VoorleggerInzageToetsingBkrFormType;
use GemeenteAmsterdam\FixxxSchuldhulp\Form\Type\VoorleggerKinderopvangtoeslagFormType;
use GemeenteAmsterdam\FixxxSchuldhulp\Form\Type\VoorleggerKindgebondenBudgetFormType;
use GemeenteAmsterdam\FixxxSchuldhulp\Form\Type\VoorleggerKostgeldFormType;
use GemeenteAmsterdam\FixxxSchuldhulp\Form\Type\VoorleggerKwijtscheldingGemeenteBelastingFormType;
use GemeenteAmsterdam\FixxxSchuldhulp\Form\Type\VoorleggerMeterstandenEnergieFormType;
use GemeenteAmsterdam\FixxxSchuldhulp\Form\Type\VoorleggerMeterstandenFormType;
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
use GemeenteAmsterdam\FixxxSchuldhulp\Form\Type\VoorleggerZorgtoeslagFormType;

/**
 * @Route("/app/dossier")
 * @Security("has_role('ROLE_USER')")
 */
class AppDossierController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction(Request $request, EntityManagerInterface $em)
    {
        /** @var $repository DossierRepository */
        $repository = $em->getRepository(Dossier::class);

        $maxPageSize = 10;

        $dossiers = $repository->findActive($request->query->getInt('page', 0), $request->query->getInt('pageSize', $maxPageSize));

        return $this->render('Dossier/index.html.twig', [
            'dossiers' => $dossiers,
            'pagination' => [
                'page' => $request->query->getInt('page', 0),
                'pageSize' => $maxPageSize,
                'numberOfItems' => count($dossiers),
                'numberOfPages' => ceil(count($dossiers) / $request->query->getInt('pageSize', $maxPageSize))
            ]
        ]);
    }

    /**
     * @Route("/prullenbak")
     */
    public function indexPrullenbakAction(Request $request, EntityManagerInterface $em)
    {
        /** @var $repository DossierRepository */
        $repository = $em->getRepository(Dossier::class);

        $maxPageSize = 10;

        $dossiers = $repository->findInactive($request->query->getInt('page', 0), $request->query->getInt('pageSize', $maxPageSize));

        return $this->render('Dossier/indexPrullenbak.html.twig', [
            'dossiers' => $dossiers,
            'pagination' => [
                'page' => $request->query->getInt('page', 0),
                'pageSize' => $maxPageSize,
                'numberOfItems' => count($dossiers),
                'numberOfPages' => ceil(count($dossiers) / $request->query->getInt('pageSize', $maxPageSize))
            ]
        ]);
    }

    /**
     * @Route("/nieuw")
     */
    public function createAction(Request $request, EntityManagerInterface $em)
    {
        $dossier = new Dossier();
        $dossier->setAanmaker($this->getUser());
        $dossier->setDossierTemplate('v1');
        $dossier->setStatus(Dossier::STATUS_MADI);
        $form = $this->createForm(CreateDossierFormType::class, $dossier);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($dossier);
            $em->flush();
            $this->addFlash('success', 'Dossier aangemaakt');
            return $this->redirectToRoute('gemeenteamsterdam_fixxxschuldhulp_appdossier_detail', [
                'dossierId' => $dossier->getId()
            ]);
        }
        return $this->render('Dossier/create.html.twig', [
            'dossier' => $dossier,
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/detail/{dossierId}")
     * @ParamConverter("dossier", options={"id"="dossierId"})
     */
    public function detailAction(Request $request, EntityManagerInterface $em, Dossier $dossier)
    {
        if ($dossier->getVoorlegger() === null) {
            $dossier->setVoorlegger(new Voorlegger());
        }

        $form = $this->createForm(DetailDossierFormType::class, $dossier, [
            'disabled' => $dossier->isInPrullenbak() === true,
            'disable_group' => $this->getUser()->getType()
        ]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->flush();
            $this->addFlash('success', 'Opgeslagen');
            return $this->redirectToRoute('gemeenteamsterdam_fixxxschuldhulp_appdossier_detail', [
                'dossierId' => $dossier->getId()
            ]);
        }

        $voorleggerForms = [];
        $voorleggerForms['alimentatieEchtscheidingsconvenant'] = $this->createForm(VoorleggerAlimentatieEchtscheidingsconvenantFormType::class, $dossier->getVoorlegger());
        $voorleggerForms['alimentatie'] = $this->createForm(VoorleggerAlimentatieFormType::class, $dossier->getVoorlegger());
        $voorleggerForms['arbeidsovereenkomst'] = $this->createForm(VoorleggerArbeidsovereenkomstFormType::class, $dossier->getVoorlegger());
        $voorleggerForms['autolastenKmWoonwerkverkeer'] = $this->createForm(VoorleggerAutolastenKmWoonwerkverkeerFormType::class, $dossier->getVoorlegger());
        $voorleggerForms['autoTaxatie'] = $this->createForm(VoorleggerAutoTaxatieFormType::class, $dossier->getVoorlegger());
        $voorleggerForms['beschikkingOnderBewindstelling'] = $this->createForm(VoorleggerBeschikkingOnderBewindstellingFormType::class, $dossier->getVoorlegger());
        $voorleggerForms['beschikkingUwv'] = $this->createForm(VoorleggerBeschikkingUwvFormType::class, $dossier->getVoorlegger());
        $voorleggerForms['bewindstellingOfBudgetbeheer'] = $this->createForm(VoorleggerBewindstellingOfBudgetbeheerFormType::class, $dossier->getVoorlegger());
        $voorleggerForms['budgetbeheer'] = $this->createForm(VoorleggerBudgetbeheerFormType::class, $dossier->getVoorlegger());
        $voorleggerForms['cjib'] = $this->createForm(VoorleggerCjibFormType::class, $dossier->getVoorlegger());
        $voorleggerForms['corrigerenGemeenteBelasting'] = $this->createForm(VoorleggerCorrigerenGemeenteBelastingFormType::class, $dossier->getVoorlegger());
        $voorleggerForms['gereserveerdeGelden'] = $this->createForm(VoorleggerGereserveerdeGeldenFormType::class, $dossier->getVoorlegger());
        $voorleggerForms['huurspecificatie'] = $this->createForm(VoorleggerHuurspecificatieFormType::class, $dossier->getVoorlegger());
        $voorleggerForms['huurtoeslag'] = $this->createForm(VoorleggerHuurtoeslagFormType::class, $dossier->getVoorlegger());
        $voorleggerForms['inkomstenspecificatie'] = $this->createForm(VoorleggerInkomstenspecificatieFormType::class, $dossier->getVoorlegger());
        $voorleggerForms['inzageToetsingBkr'] = $this->createForm(VoorleggerInzageToetsingBkrFormType::class, $dossier->getVoorlegger());
        $voorleggerForms['kinderopvangtoeslag'] = $this->createForm(VoorleggerKinderopvangtoeslagFormType::class, $dossier->getVoorlegger());
        $voorleggerForms['kindgebondenBudget'] = $this->createForm(VoorleggerKindgebondenBudgetFormType::class, $dossier->getVoorlegger());
        $voorleggerForms['kostgeld'] = $this->createForm(VoorleggerKostgeldFormType::class, $dossier->getVoorlegger());
        $voorleggerForms['kwijtscheldingGemeenteBelasting'] = $this->createForm(VoorleggerKwijtscheldingGemeenteBelastingFormType::class, $dossier->getVoorlegger());
        $voorleggerForms['legitimatie'] = $this->createForm(VoorleggerLegitimatieFormType::class, $dossier->getVoorlegger());
        $voorleggerForms['meterstandenEnergie'] = $this->createForm(VoorleggerMeterstandenEnergieFormType::class, $dossier->getVoorlegger());
        $voorleggerForms['meterstanden'] = $this->createForm(VoorleggerMeterstandenFormType::class, $dossier->getVoorlegger());
        $voorleggerForms['ondertekendAanvraagFormulier'] = $this->createForm(VoorleggerOndertekendAanvraagFormulierFormType::class, $dossier->getVoorlegger());
        $voorleggerForms['overeenkomstKinderopvang'] = $this->createForm(VoorleggerOvereenkomstKinderopvangFormType::class, $dossier->getVoorlegger());
        $voorleggerForms['polisbladZorgverzekering'] = $this->createForm(VoorleggerPolisbladZorgverzekeringFormType::class, $dossier->getVoorlegger());
        $voorleggerForms['retourbewijsModem'] = $this->createForm(VoorleggerRetourbewijsModemFormType::class, $dossier->getVoorlegger());
        $voorleggerForms['stabilisatieovereenkomst'] = $this->createForm(VoorleggerStabilisatieovereenkomstFormType::class, $dossier->getVoorlegger());
        $voorleggerForms['toelichtingAanvraagSchuldsaneringClient'] = $this->createForm(VoorleggerToelichtingAanvraagSchuldsaneringClientFormType::class, $dossier->getVoorlegger());
        $voorleggerForms['toelichtingAanvraagSchuldsaneringMadi'] = $this->createForm(VoorleggerToelichtingAanvraagSchuldsaneringMadiFormType::class, $dossier->getVoorlegger());
        $voorleggerForms['verklaringWerkgever'] = $this->createForm(VoorleggerVerklaringWerkgeverFormType::class, $dossier->getVoorlegger());
        $voorleggerForms['voorlopigeTeruggaafBelastingdienst'] = $this->createForm(VoorleggerVoorlopigeTeruggaafBelastingdienstFormType::class, $dossier->getVoorlegger());
        $voorleggerForms['vrijwaringsbewijs'] = $this->createForm(VoorleggerVrijwaringsbewijsFormType::class, $dossier->getVoorlegger());
        $voorleggerForms['vtlb'] = $this->createForm(VoorleggerVtlbFormType::class, $dossier->getVoorlegger());
        $voorleggerForms['waternet'] = $this->createForm(VoorleggerWaternetFormType::class, $dossier->getVoorlegger());
        $voorleggerForms['zorgtoeslag'] = $this->createForm(VoorleggerZorgtoeslagFormType::class, $dossier->getVoorlegger());

        foreach ($voorleggerForms as $key => $voorleggerForm) {
            $voorleggerForm->handleRequest($request);
            if ($voorleggerForm->isSubmitted() && $voorleggerForm->isValid()) {

                $file = $voorleggerForm->get('file')->getData();
                $document = null;
                if ($file !== null) {
                    /** @var $file File */
                    $document = new Document();
                    $document->setFile($file);
                    $document->setMd5Hash(md5($document->getFile()->getRealPath()));
                    $document->setMainTag('dossier-' . $dossier->getId());
                    $document->setNaam($voorleggerForm->get('fileNaam')->getData());
                    $document->setGroep('dossier');
                    $document->setUploader($this->getUser());
                    $document->setUploadDatumTijd(new \DateTime());
                    $dossierDocument = new DossierDocument();
                    $dossierDocument->setDocument($document);
                    $dossierDocument->setDossier($dossier);
                    $dossierDocument->setOnderwerp($key);
                }

                $em->flush();

                if ($request->isXmlHttpRequest()) {
                    return new JsonResponse(['state' => 'OK', 'document' => $document !== null ? [
                        'id' => $document->getId(),
                        'url' => $this->generateUrl('gemeenteamsterdam_fixxxschuldhulp_appdossier_detaildocument', ['dossierId' => $dossier->getId(), 'documentId' => $document->getId()])
                    ] : null]);
                }
            } elseif ($voorleggerForm->isSubmitted() && $voorleggerForm->isValid() === false) {
                return new JsonResponse($this->get('json_serializer')->normalize($voorleggerForm->getErrors(true, true)), JsonResponse::HTTP_BAD_REQUEST);
            }
        }

        return $this->render('Dossier/detail.html.twig', [
            'dossier' => $dossier,
            'form' => $form->createView(),
            'voorleggerForms' => array_map(function ($form) { return $form->createView(); }, $voorleggerForms)
        ]);
    }

    /**
     * @Route("/detail/{dossierId}/documenten/nieuw")
     * @ParamConverter("dossier", options={"id"="dossierId"})
     */
    public function addDocumentAction(Request $request, EntityManagerInterface $em, Dossier $dossier)
    {
        $dossierDocument = new DossierDocument();
        $form = $this->createForm(DossierDocumentFormType::class, $dossierDocument);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $dossierDocument->setDossier($dossier);
            $dossierDocument->getDocument()->setUploader($this->getUser());
            $dossierDocument->getDocument()->setMainTag('dossier-' . $dossier->getId());
            $dossierDocument->getDocument()->setGroep('dossier');

            $em->persist($dossierDocument);
            $em->flush();

            if ($request->isXmlHttpRequest()) {
                return new JsonResponse($this->get('json_serializer')->normalize($dossierDocument), JsonResponse::HTTP_CREATED);
            }

            $this->addFlash('success', 'Document toegevoegd');
            return $this->redirectToRoute('gemeenteamsterdam_fixxxschuldhulp_appdossier_detail', [
                'dossierId' => $dossier->getId()
            ]);
        }

        if ($request->isXmlHttpRequest() && $form->isSubmitted()) {
            return new JsonResponse($this->get('json_serializer')->normalize($form->getErrors(true, true)), JsonResponse::HTTP_BAD_REQUEST);
        }

        return $this->render('Dossier/addDocument.html.twig', [
            'dossier' => $dossier,
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/detail/{dossierId}/documenten/nieuw-wizard")
     * @ParamConverter("dossier", options={"id"="dossierId"})
     */
    public function addDocumentViaWizardAction(Request $request, EntityManagerInterface $em, Dossier $dossier)
    {
        $dossierDocument = new DossierDocument();

        $form = $this->createForm(DossierDocumentFormType::class, $dossierDocument);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $dossierDocument->setDossier($dossier);
            $dossierDocument->getDocument()->setUploader($this->getUser());
            $dossierDocument->getDocument()->setMainTag('dossier-' . $dossier->getId());
            $dossierDocument->getDocument()->setGroep('dossier');

            $em->persist($dossierDocument);
            $em->flush();

            if ($request->isXmlHttpRequest()) {
                return new JsonResponse($this->get('json_serializer')->normalize($dossierDocument), JsonResponse::HTTP_CREATED);
            }
            return $this->redirectToRoute('gemeenteamsterdam_fixxxschuldhulp_appdossier_detaildocument', [
                'dossierId' => $dossier->getId(),
                'documentId' => $dossierDocument->getDocument()->getId()
            ]);
        }

        if ($request->isXmlHttpRequest() && $form->isSubmitted()) {
            return new JsonResponse($this->get('json_serializer')->normalize($form->getErrors(true, true)), JsonResponse::HTTP_BAD_REQUEST);
        }

        return $this->render('Dossier/addDocumentViaWizard.html.twig', [
            'dossier' => $dossier,
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/detail/{dossierId}/documenten/prullenbak")
     * @ParamConverter("dossier", options={"id"="dossierId"})
     */
    public function indexDocumentenInPrullenbak(Request $request, Dossier $dossier)
    {
        $dossierDocumenten = $dossier->getDocumenten()->filter(function (DossierDocument $dossierDocument) {
            return $dossierDocument->getDocument()->isInPrullenbak();
        });

        return $this->render('Dossier/indexDocumentenInPrullenbak.html.twig', [
            'dossier' => $dossier,
            'dossierDocumenten' => $dossierDocumenten,
        ]);
    }

    /**
     * @Route("/detail/{dossierId}/documenten/detail/{documentId}")
     * @ParamConverter("dossier", options={"id"="dossierId"})
     * @ParamConverter("document", options={"id"="documentId"})
     */
    public function detailDocumentAction(Request $request, Dossier $dossier, Document $document)
    {
        $dossierDocumenten = $dossier->getDocumenten()->filter(function (DossierDocument $dossierDocument) use ($document) {
            return $dossierDocument->getDocument() === $document;
        });
        if ($dossierDocumenten->count() === 0) {
            throw new NotFoundHttpException('Document does not match with dossier');
        }

        if ($document->isInPrullenbak() === true) {
            throw $this->createNotFoundException('Document not available');
        }

        $timestamp = intval(time() + 30);
        $path = '/' . $this->getParameter('swift_container_prefix') . $document->getGroep() . '/' . $document->getDirectory() . '/' . $document->getBestandsnaam();
        $sign = hash_hmac('sha1', "GET\n" . $timestamp . "\n" . $path, $this->getParameter('swift_temp_url_key'));
        $fullUrl = $this->getParameter('swift_public_url') . $path . '?temp_url_sig=' . $sign . '&temp_url_expires=' . $timestamp;

        return new RedirectResponse($fullUrl, Response::HTTP_TEMPORARY_REDIRECT);
    }

    /**
     * @Route("/detail/{dossierId}/documenten/detail/{documentId}/naar-prullenbak")
     * @Method("POST")
     * @ParamConverter("dossier", options={"id"="dossierId"})
     * @ParamConverter("document", options={"id"="documentId"})
     */
    public function moveDocumentToPrullenbakAction(Request $request, Dossier $dossier, Document $document, EntityManagerInterface $em)
    {
        $dossierDocumenten = $dossier->getDocumenten()->filter(function (DossierDocument $dossierDocument) use ($document) {
            return $dossierDocument->getDocument() === $document;
        });
        if ($dossierDocumenten->count() === 0) {
            throw new NotFoundHttpException('Document does not match with dossier');
        }

        if ($this->isCsrfTokenValid('gemeenteamsterdam_fixxxschuldhulp_appdossier_movedocumenttoprullenbak', $request->request->get('token')) === false) {
            throw $this->createAccessDeniedException('CSRF token invalid');
        }

        $document->setInPrullenbak(true);
        $this->addFlash('success', 'Document in prullenbak geplaatst');

        $em->flush();

        return $this->redirectToRoute('gemeenteamsterdam_fixxxschuldhulp_appdossier_detail', ['dossierId' => $dossier->getId()]);
    }

    /**
     * @Route("/detail/{dossierId}/documenten/detail/{documentId}/verwijderen")
     * @Method("POST")
     * @ParamConverter("dossier", options={"id"="dossierId"})
     * @ParamConverter("document", options={"id"="documentId"})
     */
    public function removeDocumentAction(Request $request, Dossier $dossier, Document $document, EntityManagerInterface $em)
    {
        $dossierDocumenten = $dossier->getDocumenten()->filter(function (DossierDocument $dossierDocument) use ($document) {
            return $dossierDocument->getDocument() === $document;
        });
        if ($dossierDocumenten->count() === 0) {
            throw new NotFoundHttpException('Document does not match with dossier');
        }

        if ($document->isInPrullenbak() === false) {
            throw $this->createNotFoundException('Document not in prullenbak already', ['documentId' => $document->getId()]);
        }

        if ($this->isCsrfTokenValid('gemeenteamsterdam_fixxxschuldhulp_appdossier_removedocument', $request->request->get('token')) === false) {
            throw $this->createAccessDeniedException('CSRF token invalid');
        }

        $em->remove($document);

        $em->flush();
        $this->addFlash('success', 'Document definitief verwijderd');

        return $this->redirectToRoute('gemeenteamsterdam_fixxxschuldhulp_appdossier_detail', ['dossierId' => $dossier->getId()]);
    }

    /**
     * @Route("/detail/{dossierId}/documenten/detail/{documentId}/herstellen")
     * @Method("POST")
     * @ParamConverter("dossier", options={"id"="dossierId"})
     * @ParamConverter("document", options={"id"="documentId"})
     */
    public function restoreDocumentAction(Request $request, Dossier $dossier, Document $document, EntityManagerInterface $em)
    {
        $dossierDocumenten = $dossier->getDocumenten()->filter(function (DossierDocument $dossierDocument) use ($document) {
            return $dossierDocument->getDocument() === $document;
        });
        if ($dossierDocumenten->count() === 0) {
            throw new NotFoundHttpException('Document does not match with dossier');
        }

        if ($document->isInPrullenbak() === false) {
            throw $this->createNotFoundException('Document not in prullenbak already', ['documentId' => $document->getId()]);
        }

        if ($this->isCsrfTokenValid('gemeenteamsterdam_fixxxschuldhulp_appdossier_restoredocument', $request->request->get('token')) === false) {
            throw $this->createAccessDeniedException('CSRF token invalid');
        }

        $document->setInPrullenbak(false);

        $em->flush();
        $this->addFlash('success', 'Document hersteld');

        return $this->redirectToRoute('gemeenteamsterdam_fixxxschuldhulp_appdossier_detail', ['dossierId' => $dossier->getId()]);
    }

    /**
     * @Route("/detail/{dossierId}/naar-prullenbak")
     * @Method("POST")
     * @ParamConverter("dossier", options={"id"="dossierId"})
     */
    public function moveToPrullenbakAction(Request $request, Dossier $dossier, EntityManagerInterface $em)
    {
        if ($this->isCsrfTokenValid('gemeenteamsterdam_fixxxschuldhulp_appdossier_movetoprullenbak', $request->request->get('token')) === false) {
            throw $this->createAccessDeniedException('CSRF token invalid');
        }

        $dossier->setInPrullenbak(true);
        $em->flush();
        $this->addFlash('success', 'Dossier in prullenbak geplaatst');

        return $this->redirectToRoute('gemeenteamsterdam_fixxxschuldhulp_appdossier_index');
    }

    /**
     * @Route("/detail/{dossierId}/verwijderen")
     * @Method("POST")
     * @ParamConverter("dossier", options={"id"="dossierId"})
     */
    public function removeAction(Request $request, Dossier $dossier, EntityManagerInterface $em)
    {
        if ($dossier->isInPrullenbak() === false) {
            throw $this->createNotFoundException('Dossier not in prullenbak, dossierId=' . $dossier->getId());
        }

        if ($this->isCsrfTokenValid('gemeenteamsterdam_fixxxschuldhulp_appdossier_remove', $request->request->get('token')) === false) {
            throw $this->createAccessDeniedException('CSRF token invalid');
        }

        foreach ($dossier->getDocumenten() as $dossierDocument) {
            $em->remove($dossierDocument->getDocument());
            $em->remove($dossierDocument);
        }
        $em->remove($dossier);

        $em->flush();
        $this->addFlash('success', 'Dossier definitief verwijderd');

        return $this->redirectToRoute('gemeenteamsterdam_fixxxschuldhulp_appdossier_index');
    }

    /**
     * @Route("/detail/{dossierId}/herstellen")
     * @Method("POST")
     * @ParamConverter("dossier", options={"id"="dossierId"})
     */
    public function restoreAction(Request $request, Dossier $dossier, EntityManagerInterface $em)
    {
        if ($this->isCsrfTokenValid('gemeenteamsterdam_fixxxschuldhulp_appdossier_restore', $request->request->get('token')) === false) {
            throw $this->createAccessDeniedException('CSRF token invalid');
        }

        $dossier->setInPrullenbak(false);

        $em->flush();
        $this->addFlash('success', 'Dossier hersteld');

        return $this->redirectToRoute('gemeenteamsterdam_fixxxschuldhulp_appdossier_detail', ['dossierId' => $dossier->getId()]);
    }

    /**
     * @Route("/detail/{dossierId}/schulden")
     * @ParamConverter("dossier", options={"id"="dossierId"})
     */
    public function detailSchuldenAction(Request $request, Dossier $dossier)
    {
        $schuldItems = $dossier->getSchuldItems();

        $form = $this->createForm(DetailDossierFormType::class, $dossier, [
            'disabled' => $dossier->isInPrullenbak() === true,
            'disable_group' => $this->getUser()->getType()
        ]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->flush();
            $this->addFlash('success', 'Opgeslagen');
            return $this->redirectToRoute('gemeenteamsterdam_fixxxschuldhulp_appdossier_detailschulden', [
                'dossierId' => $dossier->getId()
            ]);
        }

        $updateForms = [];
        foreach ($schuldItems as $schuldItem) {
            $updateForms[$schuldItem->getId()] = $this->createForm(SchuldItemFormType::class, $schuldItem, [
                'action' => $this->generateUrl('gemeenteamsterdam_fixxxschuldhulp_appdossier_updateschulditem', [
                    'dossierId' => $dossier->getId(),
                    'schuldItemId' => $schuldItem->getId()
                ])
            ]);
        }

        $schuldItem = new SchuldItem();
        $createForm = $this->createForm(SchuldItemFormType::class, $schuldItem, [
            'action' => $this->generateUrl('gemeenteamsterdam_fixxxschuldhulp_appdossier_addschulditem', [
                'dossierId' => $dossier->getId()
            ])
        ]);

        $schuldeiser = new Schuldeiser();
        $createSchuldeiserForm = $this->createForm(SchuldeiserFormType::class, $schuldeiser, [
            'action' => $this->generateUrl('gemeenteamsterdam_fixxxschuldhulp_appschuldeiser_create', [])
        ]);

        return $this->render('Dossier/detailSchulden.html.twig', [
            'dossier' => $dossier,
            'form' => $form->createView(),
            'schuldItems' => $schuldItems,
            'updateForms' => array_map(function ($form) {
                    return $form->createView();
                }, $updateForms),
            'createForm' => $createForm->createView(),
            'createSchuldeiserForm' => $createSchuldeiserForm->createView()
        ]);
    }

    /**
     * @Route("/detail/{dossierId}/schulden/nieuw")
     * @ParamConverter("dossier", options={"id"="dossierId"})
     */
    public function addSchuldItemAction(Request $request, Dossier $dossier, EntityManagerInterface $em)
    {
        $schuldItem = new SchuldItem();
        $schuldItem->setAanmaker($this->getUser());
        $schuldItem->setBewerker($this->getUser());
        $dossier->addSchuldItem($schuldItem);

        $form = $this->createForm(SchuldItemFormType::class, $schuldItem);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $files = $form->get('file')->getData();
            foreach ($files as $file) {
                /** @var $file File */
                if ($file !== null) {
                    $document = new Document();
                    $document->setFile($file);
                    $document->setMd5Hash(md5($document->getFile()->getRealPath()));
                    $document->setMainTag('dossier-' . $dossier->getId());
                    $document->setNaam('naamloos');
                    $document->setGroep('dossier');
                    $document->setUploader($this->getUser());
                    $document->setUploadDatumTijd(new \DateTime());
                    $dossierDocument = new DossierDocument();
                    $dossierDocument->setDocument($document);
                    $dossierDocument->setDossier($dossier);
                    $dossierDocument->setOnderwerp('schuldenoverzicht');
                    $dossierDocument->setSchuldItem($schuldItem);
                }
            }

            $em->persist($schuldItem);
            $em->flush();

            return new JsonResponse($this->get('json_serializer')->normalize($schuldItem));
        } elseif ($form->isSubmitted() && $form->isValid() === false) {
            if ($request->isXmlHttpRequest()) {
                return new JsonResponse($this->get('json_serializer')->normalize($form->getErrors(true, true)), JsonResponse::HTTP_BAD_REQUEST);
            }
        }

        return; // 500
    }

    /**
     * @Route("/detail/{dossierId}/schulden/{schuldItemId}/bijwerken")
     * @ParamConverter("dossier", options={"id"="dossierId"})
     * @ParamConverter("schuldItem", options={"id"="schuldItemId"})
     */
    public function updateSchuldItemAction(Request $request, Dossier $dossier, SchuldItem $schuldItem, EntityManagerInterface $em)
    {
        $schuldItem->setBewerker($this->getUser());
        $schuldItem->setBewerkDatumTijd(new \DateTime());

        $form = $this->createForm(SchuldItemFormType::class, $schuldItem);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $files = $form->get('file')->getData();
            foreach ($files as $file) {
                /** @var $file File */
                if ($file !== null) {
                    $document = new Document();
                    $document->setFile($file);
                    $document->setMd5Hash(md5($document->getFile()->getRealPath()));
                    $document->setMainTag('dossier-' . $dossier->getId());
                    $document->setNaam('naamloos');
                    $document->setGroep('dossier');
                    $document->setUploader($this->getUser());
                    $document->setUploadDatumTijd(new \DateTime());
                    $dossierDocument = new DossierDocument();
                    $dossierDocument->setDocument($document);
                    $dossierDocument->setDossier($dossier);
                    $dossierDocument->setOnderwerp('schuldenoverzicht');
                    $dossierDocument->setSchuldItem($schuldItem);
                }
            }

            $em->flush();

            return new JsonResponse($this->get('json_serializer')->normalize($schuldItem));
        } elseif ($form->isSubmitted() && $form->isValid() === false) {
            if ($request->isXmlHttpRequest()) {
                return new JsonResponse($this->get('json_serializer')->normalize($form->getErrors(true, true)), JsonResponse::HTTP_BAD_REQUEST);
            }
        }

        return; // 500
    }
}