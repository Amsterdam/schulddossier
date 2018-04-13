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

        $seachQuery = [
            'naam' => '',
            'status' => $this->getUser()->getType() === Gebruiker::TYPE_MADI ? ['bezig_madi', 'compleet_madi', 'gecontroleerd_madi', 'verzonden_madi'] : ($this->getUser()->getType() === Gebruiker::TYPE_GKA ? ['verzonden_madi', 'bezig_gka', 'compleet_gka', 'dossier_gecontroleerd_gka', 'geactualiseerd_gka'] : []),
            'schuldhulpbureau' => $this->getUser()->getSchuldhulpbureau(),
            'medewerkerSchuldhulpbureau' => $this->getUser()->getType() === Gebruiker::TYPE_MADI ? $this->getUser() : null,
            'teamGka' => $this->getUser()->getTeamGka()
        ];

        $searchForm = $this->createForm(SearchDossierFormType::class, $seachQuery, ['method' => 'GET']);
        $searchForm->handleRequest($request);

        $dossiers = $repository->search($searchForm->getData(), $request->query->getInt('page', 0), $request->query->getInt('pageSize', $maxPageSize));

        return $this->render('Dossier/index.html.twig', [
            'dossiers' => $dossiers,
            'searchQuery' => $seachQuery,
            'searchForm' => $searchForm->createView(),
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
        $dossier->setStatus('bezig_madi');
        $form = $this->createForm(CreateDossierFormType::class, $dossier);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($dossier);
            $em->flush();
            $this->addFlash('success', 'Dossier aangemaakt');
            return $this->redirectToRoute('gemeenteamsterdam_fixxxschuldhulp_appdossier_detailvoorlegger', [
                'dossierId' => $dossier->getId()
            ]);
        }
        return $this->render('Dossier/create.html.twig', [
            'dossier' => $dossier,
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/detail/{dossierId}/voorlegger")
     * @ParamConverter("dossier", options={"id"="dossierId"})
     */
    public function detailVoorleggerAction(Request $request, EntityManagerInterface $em, WorkflowRegistry $registry, Dossier $dossier)
    {
        if ($dossier->getVoorlegger() === null) {
            $dossier->setVoorlegger(new Voorlegger());
        }

        $voorleggerForm = $this->createForm(VoorleggerFormType::class, $dossier->getVoorlegger());
        $voorleggerForm->handleRequest($request);
        if ($voorleggerForm->isSubmitted() && $voorleggerForm->isValid()) {
            foreach ($voorleggerForm->all() as $child) {
                if ($child->has('file')) {
                    $files = $child->get('file')->getData();
                    foreach ($files as $document) {
                        /** @var $file Document */
                        if ($document !== null) {
                            $document->setMd5Hash(md5($document->getFile()->getRealPath()));
                            $document->setMainTag('dossier-' . $dossier->getId());
                            $document->setGroep('dossier');
                            $document->setUploader($this->getUser());
                            $document->setUploadDatumTijd(new \DateTime());
                            $dossierDocument = new DossierDocument();
                            $dossierDocument->setDocument($document);
                            $dossierDocument->setDossier($dossier);
                            $dossierDocument->setOnderwerp($key);
                        }
                    }
                }
            }
            $em->flush();
        }

        $workflow = $registry->get($dossier);

        return $this->render('Dossier/detailVoorlegger.html.twig', [
            'dossier' => $dossier,
            'voorleggerForm' => $voorleggerForm->createView(),
        ]);
    }

    /**
     * @Route("/detail/{dossierId}")
     * @ParamConverter("dossier", options={"id"="dossierId"})
     */
    public function detailAlgemeenAction(Request $request, EntityManagerInterface $em, WorkflowRegistry $registry, Dossier $dossier)
    {
        $form = $this->createForm(DetailDossierFormType::class, $dossier, [
            'disabled' => $dossier->isInPrullenbak() === true,
            'disable_group' => $this->getUser()->getType()
        ]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->flush();

            if ($request->isXmlHttpRequest()) {
                return new JsonResponse(['msg' => 'OK']);
            }

            $this->addFlash('success', 'Opgeslagen');
            return $this->redirectToRoute('gemeenteamsterdam_fixxxschuldhulp_appdossier_detailalgemeen', [
                'dossierId' => $dossier->getId()
            ]);
        } elseif ($form->isSubmitted() && $request->isXmlHttpRequest()) {
            return new JsonResponse($this->get('json_serializer')->normalize($form->getErrors(true, true)), JsonResponse::HTTP_BAD_REQUEST);
        }

        return $this->render('Dossier/detailAlgemeen.html.twig', [
            'dossier' => $dossier,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/detail/{dossierId}/documenten/prullenbak")
     * @ParamConverter("dossier", options={"id"="dossierId"})
     */
    public function detailPrullenbakAction(Request $request, Dossier $dossier)
    {
        $dossierDocumenten = $dossier->getDocumenten()->filter(function (DossierDocument $dossierDocument) {
            return $dossierDocument->getDocument()->isInPrullenbak();
        });

        return $this->render('Dossier/detailPrullenbak.html.twig', [
            'dossier' => $dossier,
            'dossierDocumenten' => $dossierDocumenten,
        ]);
    }

    /**
     * @Route("/detail/{dossierId}/documenten/overige-documenten")
     * @ParamConverter("dossier", options={"id"="dossierId"})
     */
    public function detailOverigeDocumentenAction(Request $request, Dossier $dossier, EntityManagerInterface $em)
    {
        $formBuilder = $this->createFormBuilder(['file' => []]);
        $formBuilder->add('file', CollectionType::class, [
            'mapped' => false,
            'entry_type' => DocumentFormType::class,
            'entry_options' => ['required' => false],
            'allow_add' => true,
            'allow_delete' => true,
            'prototype_name' => '__name__',
            'by_reference' => false,
            'constraints' => [
                new Valid()
            ]
        ]);

        $form = $formBuilder->getForm();
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $files = $form->get('file')->getData();
            foreach ($files as $document) {
                /** @var $file Document */
                if ($document !== null) {
                    $document->setMd5Hash(md5($document->getFile()->getRealPath()));
                    $document->setMainTag('dossier-' . $dossier->getId());
                    $document->setGroep('dossier');
                    $document->setUploader($this->getUser());
                    $document->setUploadDatumTijd(new \DateTime());
                    $dossierDocument = new DossierDocument();
                    $dossierDocument->setDocument($document);
                    $dossierDocument->setDossier($dossier);
                    $dossierDocument->setOnderwerp('overige');
                }
            }
            $em->flush();

            if ($request->isXmlHttpRequest()) {
                return new JsonResponse(['msg' => 'OK']);
            }

            $this->addFlash('success', 'Document toegevoegd');
            return $this->redirectToRoute('gemeenteamsterdam_fixxxschuldhulp_appdossier_detailoverigedocumenten', ['dossierId' => $dossier->getId()]);
        } else if ($form->isSubmitted() && $request->isXmlHttpRequest()) {
            return new JsonResponse($this->get('json_serializer')->normalize($form->getErrors(true, true)), JsonResponse::HTTP_BAD_REQUEST);
        }

        return $this->render('Dossier/detailOverigeDocumenten.html.twig', [
            'dossier' => $dossier,
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/detail/{dossierId}/documenten")
     * @ParamConverter("dossier", options={"id"="dossierId"})
     */
    public function detailDocumentenAction(Request $request, Dossier $dossier)
    {
        return $this->render('Dossier/detailDocumenten.html.twig', [
            'dossier' => $dossier
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
     * @Route("/detail/{dossierId}/schulden")
     * @ParamConverter("dossier", options={"id"="dossierId"})
     */
    public function detailSchuldenAction(Request $request, Dossier $dossier, EntityManagerInterface $em)
    {
        $schuldItems = $dossier->getSchuldItems();

        $schuldenoverzichtForm = $this->createForm(VoorleggerSchuldenoverzichtFormType::class, $dossier->getVoorlegger(), [
            'disable_group' => $this->getUser()->getType()
        ]);
        $schuldenoverzichtForm->handleRequest($request);

        if ($schuldenoverzichtForm->isSubmitted() && $schuldenoverzichtForm->isValid()) {
            $em->flush();

            if ($request->isXmlHttpRequest()) {
                return new JsonResponse(['msg' => 'OK']);
            }

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
            'schuldItems' => $schuldItems,
            'schuldenoverzichtForm' => $schuldenoverzichtForm->createView(),
            'updateForms' => array_map(function ($form) {
            return $form->createView();
            }, $updateForms),
            'createForm' => $createForm->createView(),
            'createSchuldeiserForm' => $createSchuldeiserForm->createView()
            ]);
    }

    /**
     * @Route("/detail/{dossierId}/schulden/excel")
     * @ParamConverter("dossier", options={"id"="dossierId"})
     */
    public function detailSchuldenExcel(Request $request, Dossier $dossier)
    {
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        $sheet->getPageSetup()->setOrientation(\PhpOffice\PhpSpreadsheet\Worksheet\PageSetup::ORIENTATION_LANDSCAPE);
        $sheet->getPageSetup()->setPaperSize(\PhpOffice\PhpSpreadsheet\Worksheet\PageSetup::PAPERSIZE_A4);


        $sheet->setCellValueByColumnAndRow(1, 1, 'Schuldeiser');
        $sheet->setCellValueByColumnAndRow(2, 1, 'Incassant');
        $sheet->setCellValueByColumnAndRow(3, 1, 'Bedrag');
        $sheet->setCellValueByColumnAndRow(4, 1, 'Ontstaansdatum');
        $sheet->setCellValueByColumnAndRow(5, 1, 'Vaststeldatum');
        $sheet->setCellValueByColumnAndRow(6, 1, 'Referentie');
        $sheet->setCellValueByColumnAndRow(7, 1, 'Type');

        $sheet->getStyleByColumnAndRow(1, 1, 7, 1)->getFont()->setBold(true);

        foreach ($dossier->getSchuldItems() as $rowIndex => $schuldItem) {
            $rowIndex = $rowIndex + 2; // one-based instead of zero-based and one for the header
            $sheet->setCellValueByColumnAndRow(1, $rowIndex, $schuldItem->getSchuldeiser() ? $schuldItem->getSchuldeiser()->getBedrijfsnaam() : '');
            $sheet->setCellValueByColumnAndRow(2, $rowIndex, $schuldItem->getIncassant() ? $schuldItem->getIncassant()->getBedrijfsnaam() : '');
            $sheet->setCellValueByColumnAndRow(3, $rowIndex, $schuldItem->getBedrag());
            $sheet->setCellValueByColumnAndRow(4, $rowIndex, $schuldItem->getOntstaansDatum() ? \PhpOffice\PhpSpreadsheet\Shared\Date::PHPToExcel($schuldItem->getOntstaansDatum()) : null);
            $sheet->setCellValueByColumnAndRow(5, $rowIndex, $schuldItem->getVaststelDatum() ? \PhpOffice\PhpSpreadsheet\Shared\Date::PHPToExcel($schuldItem->getVaststelDatum()) : null);
            $sheet->setCellValueByColumnAndRow(6, $rowIndex, $schuldItem->getReferentie());
            $sheet->setCellValueByColumnAndRow(7, $rowIndex, $schuldItem->getType());

            if (empty($schuldItem->getOpmerkingen()) === false) {
                $sheet->getCommentByColumnAndRow(6, $rowIndex)->getText()->createText($schuldItem->getOpmerkingen());
            }

            $sheet->getStyleByColumnAndRow(3, $rowIndex)->getNumberFormat()->setFormatCode('"€"#,##0.00_-');
            $sheet->getStyleByColumnAndRow(4, $rowIndex)->getNumberFormat()->setFormatCode('dd mmmm yyyy');
            $sheet->getStyleByColumnAndRow(5, $rowIndex)->getNumberFormat()->setFormatCode('dd mmmm yyyy');
        }

        $sheet->getColumnDimensionByColumn(1)->setAutoSize(true);
        $sheet->getColumnDimensionByColumn(2)->setAutoSize(true);
        $sheet->getColumnDimensionByColumn(3)->setAutoSize(true);
        $sheet->getColumnDimensionByColumn(4)->setAutoSize(true);
        $sheet->getColumnDimensionByColumn(5)->setAutoSize(true);
        $sheet->getColumnDimensionByColumn(6)->setAutoSize(true);
        $sheet->getColumnDimensionByColumn(7)->setAutoSize(true);

        $sheet->getHeaderFooter()->setOddHeader('Schuldenlijst: ' . $dossier->getClientNaam());
        $sheet->getHeaderFooter()->setEvenHeader('Schuldenlijst: ' . $dossier->getClientNaam());

        $sheet->getHeaderFooter()->setOddFooter(date('d-m-Y H:i'));
        $sheet->getHeaderFooter()->setEvenFooter(date('d-m-Y H:i'));

        $fs = new Filesystem();
        $fs->mkdir($this->container->getParameter('kernel.project_dir') . '/var/tmp');
        $tmpName = $this->container->getParameter('kernel.project_dir') . '/var/tmp/schuldenlijst-excel-' . $dossier->getId() . '.xlsx';
        $fs->touch($tmpName);
        $writer = new Xlsx($spreadsheet);
        $writer->save($tmpName);

        $response = new BinaryFileResponse($tmpName, BinaryFileResponse::HTTP_OK, [
            'Content-Type' => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
            'Cache-Control' => 'max-age=0'
        ], false, 'attachment');
        $response->deleteFileAfterSend(true);
        return $response;
    }



    /**
     * @Method("POST")
     * @Route("/detail/{dossierId}/status")
     * @ParamConverter("dossier", options={"id"="dossierId"})
     */
    public function changeStatusAction(Request $request, Dossier $dossier, WorkflowRegistry $registry, EntityManagerInterface $em)
    {
        if ($this->isCsrfTokenValid('gemeenteamsterdam_fixxxschuldhulp_appdossier_changestatus', $request->request->get('token')) === false) {
            throw $this->createAccessDeniedException('CSRF token invalid');
        }

        $workflow = $registry->get($dossier);

        if ($workflow->can($dossier, $request->get('transition')) === false) {
            throw $this->createNotFoundException('Transition not available');
        }

        $workflow->apply($dossier, $request->get('transition'));
        $em->flush();

        if ($request->isXmlHttpRequest()) {
            return new JsonResponse(['status' => 'OK', 'status' => $workflow->getMarking($dossier)->getPlaces()]);
        }

        return $this->redirectToRoute('gemeenteamsterdam_fixxxschuldhulp_appdossier_index');
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

        return $this->redirectToRoute('gemeenteamsterdam_fixxxschuldhulp_appdossier_detailvoorlegger', ['dossierId' => $dossier->getId()]);
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

        return $this->redirectToRoute('gemeenteamsterdam_fixxxschuldhulp_appdossier_detailprullenbak', ['dossierId' => $dossier->getId()]);
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

        return $this->redirectToRoute('gemeenteamsterdam_fixxxschuldhulp_appdossier_detailprullenbak', ['dossierId' => $dossier->getId()]);
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

        return $this->redirectToRoute('gemeenteamsterdam_fixxxschuldhulp_appdossier_detailalgemeen', ['dossierId' => $dossier->getId()]);
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
            foreach ($files as $document) {
                /** @var $file Document */
                if ($document !== null) {
                    $document->setMd5Hash(md5($document->getFile()->getRealPath()));
                    $document->setMainTag('dossier-' . $dossier->getId());
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

            $newUpdateForm = $this->createForm(SchuldItemFormType::class, $schuldItem, [
                'action' => $this->generateUrl('gemeenteamsterdam_fixxxschuldhulp_appdossier_updateschulditem', ['dossierId' => $dossier->getId(), 'schuldItemId' => $schuldItem->getId()])
            ]);

            return $this->render('Dossier/updateSchuldItem.html.twig', [
                'dossier' => $dossier,
                'schuldItem' => $schuldItem,
                'form' => $newUpdateForm->createView()
            ]);
        } elseif ($form->isSubmitted() && $form->isValid() === false) {
            //if ($request->isXmlHttpRequest()) {
                return new JsonResponse($this->get('json_serializer')->normalize($form->getErrors(true, true)), JsonResponse::HTTP_BAD_REQUEST);
            //}
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
            foreach ($files as $document) {
                /** @var $file Document */
                if ($document !== null) {
                    $document->setMd5Hash(md5($document->getFile()->getRealPath()));
                    $document->setMainTag('dossier-' . $dossier->getId());
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

            $newUpdateForm = $this->createForm(SchuldItemFormType::class, $schuldItem, [
                'action' => $this->generateUrl('gemeenteamsterdam_fixxxschuldhulp_appdossier_updateschulditem', ['dossierId' => $dossier->getId(), 'schuldItemId' => $schuldItem->getId()])
            ]);

            return $this->render('Dossier/updateSchuldItem.html.twig', [
                'dossier' => $dossier,
                'schuldItem' => $schuldItem,
                'form' => $newUpdateForm->createView()
            ]);
        } elseif ($form->isSubmitted() && $form->isValid() === false) {
            if ($request->isXmlHttpRequest()) {
                return new JsonResponse($this->get('json_serializer')->normalize($form->getErrors(true, true)), JsonResponse::HTTP_BAD_REQUEST);
            }
        }

        return; // 500
    }
}