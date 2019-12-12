<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Controller;

use Doctrine\ORM\EntityManagerInterface;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Aantekening;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\ActionEvent as ActionEventEntity;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Document;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Dossier;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\DossierDocument;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Gebruiker;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Schuldeiser;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Schuldhulpbureau;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\SchuldItem;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Voorlegger;
use GemeenteAmsterdam\FixxxSchuldhulp\Event\ActionEvent;
use GemeenteAmsterdam\FixxxSchuldhulp\Event\DossierAddedAantekeningEvent;
use GemeenteAmsterdam\FixxxSchuldhulp\Event\DossierAddedCorrespondentie;
use GemeenteAmsterdam\FixxxSchuldhulp\Event\DossierChangedEvent;
use GemeenteAmsterdam\FixxxSchuldhulp\Form\Type\CreateAantekeningFormType;
use GemeenteAmsterdam\FixxxSchuldhulp\Form\Type\CreateDossierFormType;
use GemeenteAmsterdam\FixxxSchuldhulp\Form\Type\DetailDossierAdditionalFormType;
use GemeenteAmsterdam\FixxxSchuldhulp\Form\Type\DetailDossierFormType;
use GemeenteAmsterdam\FixxxSchuldhulp\Form\Type\DocumentFormType;
use GemeenteAmsterdam\FixxxSchuldhulp\Form\Type\SchuldeiserFormType;
use GemeenteAmsterdam\FixxxSchuldhulp\Form\Type\SchuldenFormType;
use GemeenteAmsterdam\FixxxSchuldhulp\Form\Type\SchuldItemFormType;
use GemeenteAmsterdam\FixxxSchuldhulp\Form\Type\SearchDossierFormType;
use GemeenteAmsterdam\FixxxSchuldhulp\Form\Type\VoorleggerFormType;
use GemeenteAmsterdam\FixxxSchuldhulp\Repository\DossierRepository;
use GemeenteAmsterdam\FixxxSchuldhulp\Service\AllegroService;
use GemeenteAmsterdam\FixxxSchuldhulp\Service\FileStorageSelector;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Csv;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;
use Symfony\Component\Validator\Constraints\Valid;
use Symfony\Component\Workflow\Registry as WorkflowRegistry;
use ZipArchive;

/**
 * @Route("/app/dossier")
 * @Security("has_role('ROLE_MADI') || has_role('ROLE_GKA') || has_role('ROLE_GKA_APPBEHEERDER') || has_role('ROLE_MADI_KEYUSER') || has_role('ROLE_ADMIN')")
 */
class AppDossierController extends Controller
{
    /**
     * @Route("/")
     * @throws \Exception
     */
    public function indexAction(Request $request, EntityManagerInterface $em, AuthorizationCheckerInterface $authChecker)
    {
        /** @var $repository DossierRepository */
        $repository = $em->getRepository(Dossier::class);

        $maxPageSize = 20;
        $forcedSchuldhulpbureaus = [];

        $section2status = [
            'madi' => ['bezig_madi', 'compleet_madi', 'gecontroleerd_madi', 'verzonden_madi'],
            'gka' => ['verzonden_madi', 'compleet_gka', 'dossier_gecontroleerd_gka'],
            'archief' => ['afgesloten_gka'],
            'search' => []
        ];
        $section = $request->query->get('section', $this->getUser()->getType() === Gebruiker::TYPE_GKA || $this->getUser()->getType() === Gebruiker::TYPE_GKA_APPBEHEERDER ? 'gka' : 'madi');

        if ($authChecker->isGranted('ROLE_MADI') || $authChecker->isGranted('ROLE_MADI_KEYUSER')) {
            if ($this->getUser()->getSchuldhulpbureaus()->count() === 0) {
                return $this->render('Security/accessDenied.html.twig', [
                    'message' => 'Gebruiker is niet gekoppeld aan een schuldhulpbureau.',
                ]);
            }
            $forcedSchuldhulpbureaus = $this->getUser()->getSchuldhulpbureaus();
        }

        $seachQuery = [
            'section' => $section,
            'naam' => '',
            'status' => $section2status[$section],
            'eersteKeerVerzondenAanGKA' => ($this->getUser()->getType() === Gebruiker::TYPE_GKA || $this->getUser()->getType() === Gebruiker::TYPE_GKA_APPBEHEERDER),
            'schuldhulpbureaus' => !empty($forcedSchuldhulpbureaus) ? $forcedSchuldhulpbureaus : $em->getRepository(Schuldhulpbureau::class)->findAll(),
            'medewerkerSchuldhulpbureau' => $this->getUser()->getType() === Gebruiker::TYPE_MADI || $this->getUser()->getType() === Gebruiker::TYPE_MADI_KEYUSER ? $this->getUser() : null,
            'teamGka' => $this->getUser()->getTeamGka()
        ];

        $searchForm = $this->createForm(SearchDossierFormType::class, $seachQuery, ['method' => 'GET']);
        if ($section === 'search') {
            $searchForm->handleRequest($request);
        }
        $orderBy = 'default';
        if ($section === 'gka') {
            $orderBy = 'gka-verzenddatum';
        }
        // if user is from a madi limit his search results on the user schuldhulpbureaus
        if ($authChecker->isGranted('ROLE_MADI') || $authChecker->isGranted('ROLE_MADI_KEYUSER')) {
            $seachQuery['schuldhulpbureaus'] = $forcedSchuldhulpbureaus;
        }

        $dossiers = $repository->search($searchForm->getData(), $request->query->getInt('page', 0), $request->query->getInt('pageSize', $maxPageSize), $orderBy);

        if ($seachQuery['section'] === 'madi' || $seachQuery['section'] === 'gka') {
            $seachQuery['status'] = [];
            $seachQuery['schuldhulpbureau'] = null;
            $seachQuery['medewerkerSchuldhulpbureau'] = null;
            $seachQuery['teamGka'] = null;
            $searchForm = $this->createForm(SearchDossierFormType::class, $seachQuery, ['method' => 'GET']);
        }

        return $this->render('Dossier/index.html.twig', [
            'dossiers' => $dossiers,
            'searchQuery' => $seachQuery,
            'searchForm' => $searchForm->createView(),
            'pagination' => [
                'reverse' => 'gemeenteamsterdam_fixxxschuldhulp_appdossier_index',
                'reverse_params' => [
                    'section' => $seachQuery['section'],
                    'search_dossier_form' => $request->query->get('search_dossier_form')
                ],
                'page' => $request->query->getInt('page', 0),
                'pageSize' => $maxPageSize,
                'numberOfItems' => count($dossiers),
                'numberOfPages' => ceil(count($dossiers) / $request->query->getInt('pageSize', $maxPageSize))
            ]
        ]);
    }

    /**
     * @Route("/prullenbak")
     * @Security("has_role('ROLE_MADI') || has_role('ROLE_GKA') || has_role('ROLE_GKA_APPBEHEERDER') || has_role('ROLE_MADI_KEYUSER') || has_role('ROLE_ADMIN')")
     */
    public function indexPrullenbakAction(Request $request, EntityManagerInterface $em)
    {
        /** @var $repository DossierRepository */
        $repository = $em->getRepository(Dossier::class);

        $maxPageSize = 20;

        $dossiers = $repository->findInactive($this->getUser(), $request->query->getInt('page', 0), $request->query->getInt('pageSize', $maxPageSize));

        return $this->render('Dossier/indexPrullenbak.html.twig', [
            'dossiers' => $dossiers,
            'pagination' => [
                'reverse' => 'gemeenteamsterdam_fixxxschuldhulp_appdossier_indexprullenbak',
                'reverse_params' => [],
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
    public function createAction(Request $request, EntityManagerInterface $em, EventDispatcherInterface $eventDispatcher, AllegroService $allegroService)
    {
        $dossier = new Dossier();
        $dossier->setAanmaker($this->getUser());
        $dossier->setMedewerkerSchuldhulpbureau($this->getUser());
        $dossier->setSchuldhulpbureau($this->getUser()->getSchuldhulpbureaus()->count() > 0 ? $this->getUser()->getSchuldhulpbureaus()->first() : null);
        $dossier->setTeamGka($this->getUser()->getSchuldhulpbureaus()->count() > 0 ? $this->getUser()->getSchuldhulpbureaus()->first()->getStandaardGkaTeam() : null);
        $dossier->setDossierTemplate('v1');
        $dossier->setStatus('bezig_madi');
        $form = $this->createForm(CreateDossierFormType::class, $dossier);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($dossier);
            $em->flush();

            if (!$form['allegroCheck']->getData()) {
                $this->addFlash('success', 'Dossier aangemaakt');
            } else {
                if (null !== $allegroService->getSRVAanvraagHeader($dossier->getSchuldhulpbureau(), $dossier->getAllegroNummer())) {
                    $this->addFlash('success', 'Dossier aangemaakt en gevonden in allegro');
                } else {
                    $this->addFlash('error', 'Dossier aangemaakt, niet aanwezig in allegro');
                }
            }

            $allegroService->getSRVAanvraagHeader($dossier->getSchuldhulpbureau(), $dossier->getAllegroNummer());



            $eventDispatcher->dispatch(ActionEvent::NAME, ActionEvent::registerDossierAangemaakt($this->getUser(), $dossier));

            return $this->redirectToRoute('gemeenteamsterdam_fixxxschuldhulp_appdossier_createaddtional', [
                'dossierId' => $dossier->getId()
            ]);
        }
        return $this->render('Dossier/create.html.twig', [
            'dossier' => $dossier,
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/nieuw/{dossierId}/")
     * @Security("is_granted('access', dossier)")
     * @ParamConverter("dossier", options={"id"="dossierId"})
     */
    public function createAddtionalAction(Request $request, EntityManagerInterface $em, Dossier $dossier, EventDispatcherInterface $eventDispatcher)
    {
        if ($dossier->getVoorlegger() === null) {
            $dossier->setVoorlegger(new Voorlegger());
        }

        $voorleggerForm = $this->createForm(VoorleggerFormType::class, $dossier->getVoorlegger(), [
            'disabled' => $dossier->isInPrullenbak() === true,
            'disable_group' => $this->getUser()->getType()
        ]);

        $form = $this->createForm(DetailDossierAdditionalFormType::class, $dossier);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($dossier);
            $em->flush();
            $this->addFlash('success', 'Dossier aangemaakt');

            $eventDispatcher->dispatch(ActionEvent::NAME, ActionEvent::registerDossierAangemaakt($this->getUser(), $dossier));

            return $this->redirectToRoute('gemeenteamsterdam_fixxxschuldhulp_appdossier_detailvoorlegger', [
                'dossierId' => $dossier->getId()
            ]);
        }
        return $this->render('Dossier/createAddtional.html.twig', [
            'dossier' => $dossier,
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/detail/{dossierId}/voorlegger")
     * @Security("is_granted('access', dossier)")
     * @ParamConverter("dossier", options={"id"="dossierId"})
     */
    public function detailVoorleggerAction(Request $request, EntityManagerInterface $em, WorkflowRegistry $registry, Dossier $dossier, EventDispatcherInterface $eventDispatcher)
    {
        if ($dossier->getVoorlegger() === null) {
            $dossier->setVoorlegger(new Voorlegger());
        }
        $workflow = $registry->get($dossier);
        $currentStatus = $dossier->getStatus();

        $voorleggerForm = $this->createForm(VoorleggerFormType::class, $dossier->getVoorlegger(), [
            'disabled' => $dossier->isInPrullenbak() === true,
            'disable_group' => $this->getUser()->getType(),
        ]);

        $voorleggerForm->handleRequest($request);
        if ($voorleggerForm->isSubmitted() && $voorleggerForm->isValid()) {
            $sendCorrespondentieNotification = false;
            foreach ($voorleggerForm->all() as $key => $child) {
                if ($child->has('file')) {
                    $files = $child->get('file')->getData();
                    foreach ($files as $document) {
                        /** @var $file Document */
                        if ($document !== null && $document->getFile() !== null) {
                            $document->setMd5Hash(md5($document->getFile()->getRealPath()));
                            $document->setMainTag('dossier-' . $dossier->getId());
                            $document->setGroep('dossier');
                            $document->setUploader($this->getUser());
                            $document->setUploadDatumTijd(new \DateTime());
                            $dossierDocument = new DossierDocument();
                            $dossierDocument->setDocument($document);
                            $dossierDocument->setDossier($dossier);
                            $dossierDocument->setOnderwerp($key);
                            if ($key === 'correspondentie') {
                                $sendCorrespondentieNotification = true;
                            }
                        }
                    }
                }
                if ($child->has('removeFile')) {
                    $removeFiles = $child->get('removeFile')->getData();
                    foreach ($removeFiles as $documentId) {
                        $documentId = intval($documentId);
                        $dossier->getDossierDocumentByDocumentId($documentId)->getDocument()->setInPrullenbak(true);
                    }
                }
                if ($child->has('aantekening') && empty($child->get('aantekening')->get('tekst')->getData()) === false) {
                    $aantekening = new Aantekening();
                    $aantekening->setDossier($dossier);
                    $aantekening->setGebruiker($this->getUser());
                    $aantekening->setOnderwerp($key);
                    $aantekening->setTekst($child->get('aantekening')->get('tekst')->getData());
                    $eventDispatcher->dispatch(DossierAddedAantekeningEvent::NAME, new DossierAddedAantekeningEvent($dossier, $this->getUser()));
                }
            }

            $subForm = $voorleggerForm->get('cdst');
            if (!is_null($subForm['transition']->getData())) {
                $workflow->apply($dossier, $subForm['transition']->getData());
                if ($subForm['transition']->getData() === 'verzenden_madi') {
                    $dossier->setEersteKeerVerzondenAanGKA(true);
                }
                $eventDispatcher->dispatch(ActionEvent::NAME, ActionEvent::registerDossierStatusGewijzigd($this->getUser(), $dossier, $currentStatus, $subForm['transition']->getData()));
                if (!empty($request->get('voorlegger_form')['controleerGebruiker'])) {
                    $this->addFlash('success', 'De status is gewijzigd. Mail is verzonden naar ' . $request->get('voorlegger_form')['controleerGebruiker']);
                } else {
                    $this->addFlash('success', 'De status is gewijzigd');
                }
            }

            $em->flush();
            if ($sendCorrespondentieNotification === true) {
                $eventDispatcher->dispatch(DossierAddedCorrespondentie::NAME, new DossierAddedCorrespondentie($dossier, $this->getUser()));
            }
            $eventDispatcher->dispatch(DossierChangedEvent::NAME, new DossierChangedEvent($dossier, $this->getUser()));
            $voorleggerForm = $this->createForm(VoorleggerFormType::class, $dossier->getVoorlegger());
        }


        $eventDispatcher->dispatch(ActionEvent::NAME, ActionEvent::registerDossierGeopened($this->getUser(), $dossier));

        return $this->render('Dossier/detailVoorlegger.html.twig', [
            'dossier' => $dossier,
            'gebruikers' => $em->getRepository(Gebruiker::class)->findAllGebruikersBySchuldhulpbureau($dossier->getSchuldhulpbureau()->getId()),
            'voorleggerForm' => $voorleggerForm->createView()
        ]);
    }

    /**
     * @Route("/detail/{dossierId}")
     * @Security("is_granted('access', dossier)")
     * @ParamConverter("dossier", options={"id"="dossierId"})
     */
    public function detailAlgemeenAction(Request $request, EntityManagerInterface $em, WorkflowRegistry $registry, Dossier $dossier, EventDispatcherInterface $eventDispatcher)
    {
        $form = $this->createForm(DetailDossierFormType::class, $dossier, [
            'disabled' => $dossier->isInPrullenbak() === true,
            'disable_group' => $this->getUser()->getType()
        ]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->flush();
            $eventDispatcher->dispatch(DossierChangedEvent::NAME, new DossierChangedEvent($dossier, $this->getUser()));

            if ($request->isXmlHttpRequest()) {
                return new JsonResponse(['msg' => 'OK']);
            }

            $this->addFlash('success', 'Opgeslagen');
            return $this->redirectToRoute('gemeenteamsterdam_fixxxschuldhulp_appdossier_detailvoorlegger', [
                'dossierId' => $dossier->getId()
            ]);
        } elseif ($form->isSubmitted() && $request->isXmlHttpRequest()) {
            return new JsonResponse($this->get('json_serializer')->normalize($form->getErrors(true, true)), JsonResponse::HTTP_BAD_REQUEST);
        }

        $eventDispatcher->dispatch(ActionEvent::NAME, ActionEvent::registerDossierGeopened($this->getUser(), $dossier));

        return $this->render('Dossier/detailAlgemeen.html.twig', [
            'dossier' => $dossier,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/detail/{dossierId}/documenten/prullenbak")
     * @Security("is_granted('access', dossier)")
     * @ParamConverter("dossier", options={"id"="dossierId"})
     */
    public function detailPrullenbakAction(Request $request, Dossier $dossier)
    {
        $dossierDocumenten = $dossier->getDocumenten()->filter(function (DossierDocument $dossierDocument) {
            return $dossierDocument->getDocument()->isInPrullenbak();
        });

        $schuldItems = $dossier->getSchuldItems()->filter(function (SchuldItem $schuldItem) {
            return $schuldItem->isVerwijderd();
        });

        return $this->render('Dossier/detailPrullenbak.html.twig', [
            'dossier' => $dossier,
            'dossierDocumenten' => $dossierDocumenten,
            'schuldItems' => $schuldItems
        ]);
    }

    /**
     * @Route("/detail/{dossierId}/documenten/overige-documenten")
     * @Security("is_granted('access', dossier)")
     * @ParamConverter("dossier", options={"id"="dossierId"})
     */
    public function detailOverigeDocumentenAction(Request $request, Dossier $dossier, EntityManagerInterface $em, EventDispatcherInterface $eventDispatcher)
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
        $formBuilder->add('removeFile', CollectionType::class, [
            'mapped' => false,
            'entry_type' => HiddenType::class,
            'entry_options' => ['required' => false],
            'allow_add' => true,
            'prototype_name' => '__name__',
            'by_reference' => false,
        ]);
        $formBuilder->addEventListener(FormEvents::PRE_SUBMIT, function (FormEvent $event) {
            $data = $event->getData();
            unset($data['file']['__name__']);
            unset($data['removeFile']['__name__']);
            $event->setData($data);
        });

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
            $removeFiles = $form->get('removeFile')->getData();
            foreach ($removeFiles as $documentId) {
                $documentId = intval($documentId);
                $dossier->getDossierDocumentByDocumentId($documentId)->getDocument()->setInPrullenbak(true);
            }
            $eventDispatcher->dispatch(DossierChangedEvent::NAME, new DossierChangedEvent($dossier, $this->getUser()));
            $em->flush();

            if ($request->isXmlHttpRequest()) {
                return new JsonResponse(['msg' => 'OK']);
            }

            $this->addFlash('success', 'Document toegevoegd');
            return $this->redirectToRoute('gemeenteamsterdam_fixxxschuldhulp_appdossier_detailoverigedocumenten', ['dossierId' => $dossier->getId()]);
        } else if ($form->isSubmitted() && $request->isXmlHttpRequest()) {
            return new JsonResponse($this->get('json_serializer')->normalize($form->getErrors(true, true)), JsonResponse::HTTP_BAD_REQUEST);
        }

        $eventDispatcher->dispatch(ActionEvent::NAME, ActionEvent::registerDossierGeopened($this->getUser(), $dossier));

        return $this->render('Dossier/detailOverigeDocumenten.html.twig', [
            'dossier' => $dossier,
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/detail/{dossierId}/documenten")
     * @Security("is_granted('access', dossier)")
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
     * @Security("is_granted('access', dossier)")
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
        $fullUrl = $this->getParameter('swift_public_url') . $path . '?temp_url_sig=' . $sign . '&temp_url_expires=' . $timestamp . '&filename=' . urlencode($document->getOrigineleBestandsnaam()) . ($request->query->has('inline') ? '&inline' : '');

        return new RedirectResponse($fullUrl, Response::HTTP_TEMPORARY_REDIRECT);
    }

    /**
     * @Route("/detail/{dossierId}/log")
     * @Security("is_granted('access', dossier)")
     * @ParamConverter("dossier", options={"id"="dossierId"})
     */
    public function logAction(Request $request, Dossier $dossier)
    {
        $logs = $this->getDoctrine()
            ->getRepository(ActionEventEntity::class)
            ->findBy([
                'name' => [
                    'dossier_status_gewijzigd',
                    'dossier_gewijzigd',
                ],
                'dossier' => $dossier
            ], ['datumTijd' => 'DESC'], 30);

        return $this->render('Dossier/detailLogboek.html.twig', ['logs' => $logs, 'dossier' => $dossier]);
    }

    /**
     * @Route("/detail/{dossierId}/schulden")
     * @Security("is_granted('access', dossier)")
     * @ParamConverter("dossier", options={"id"="dossierId"})
     */
    public function detailSchuldenAction(Request $request, Dossier $dossier, EntityManagerInterface $em, EventDispatcherInterface $eventDispatcher)
    {
        $schuldItems = $dossier->getSchuldItems();

        $form = $this->createForm(SchuldenFormType::class, $dossier, [
            'disabled' => $dossier->isInPrullenbak() === true,
            'disable_group' => $this->getUser()->getType()
        ]);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            foreach ($form->get('schuldItems') as $child) {
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
                            $dossierDocument->setOnderwerp('schuldenoverzicht');
                            $dossierDocument->setSchuldItem($child->getData());
                        }
                    }
                }
                $removeFiles = $child->get('removeFile')->getData();
                foreach ($removeFiles as $documentId) {
                    $documentId = intval($documentId);
                    $dossier->getDossierDocumentByDocumentId($documentId)->getDocument()->setInPrullenbak(true);
                }
                if (empty($child->get('aantekening')->get('tekst')->getData()) === false) {
                    $aantekening = new Aantekening();
                    $aantekening->setDossier($dossier);
                    $aantekening->setGebruiker($this->getUser());
                    $aantekening->setOnderwerp('schuldenoverzicht');
                    $aantekening->setSchuldItem($child->getData());
                    $aantekening->setTekst($child->get('aantekening')->get('tekst')->getData());
                    $eventDispatcher->dispatch(DossierAddedAantekeningEvent::NAME, new DossierAddedAantekeningEvent($dossier, $this->getUser()));
                }
            }
            $em->flush();
            $eventDispatcher->dispatch(DossierChangedEvent::NAME, new DossierChangedEvent($dossier, $this->getUser()));
            //if ($request->isXmlHttpRequest()) {
            //    return new JsonResponse(['status' => 'OK']);
            //}
            //$this->addFlash('success', 'Opgeslagen');
            return $this->redirectToRoute('gemeenteamsterdam_fixxxschuldhulp_appdossier_detailschulden', ['dossierId' => $dossier->getId()]);
        }
        //else if ($form->isSubmitted() && $request->isXmlHttpRequest()) {
        //    return new JsonResponse($this->get('json_serializer')->normalize($form->getErrors(true, true)), JsonResponse::HTTP_BAD_REQUEST);
        //}

        $schuldItem = new SchuldItem();
        $createForm = $this->createForm(SchuldItemFormType::class, $schuldItem);
        $createForm->handleRequest($request);
        if ($createForm->isSubmitted() && $createForm->isValid()) {
            $schuldItem->setDossier($dossier);
            $schuldItem->setAanmaker($this->getUser());
            $schuldItem->setBewerker($this->getUser());

            $files = $createForm->get('file')->getData();
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
                    $dossierDocument->setSchuldItem($createForm->getData());
                }
            }
            $removeFiles = $createForm->get('removeFile')->getData();
            foreach ($removeFiles as $documentId) {
                $documentId = intval($documentId);
                $dossier->getDossierDocumentByDocumentId($documentId)->getDocument()->setInPrullenbak(true);
            }
            if (empty($createForm->get('aantekening')->get('tekst')->getData()) === false) {
                $aantekening = new Aantekening();
                $aantekening->setDossier($dossier);
                $aantekening->setGebruiker($this->getUser());
                $aantekening->setOnderwerp('schuldenoverzicht');
                $aantekening->setSchuldItem($schuldItem);
                $aantekening->setTekst($createForm->get('aantekening')->get('tekst')->getData());
                $eventDispatcher->dispatch(DossierAddedAantekeningEvent::NAME, new DossierAddedAantekeningEvent($dossier, $this->getUser()));
            }
            $em->flush();
            $eventDispatcher->dispatch(DossierChangedEvent::NAME, new DossierChangedEvent($dossier, $this->getUser()));
            //$this->addFlash('success', 'Toegevoegd');
            return $this->redirectToRoute('gemeenteamsterdam_fixxxschuldhulp_appdossier_detailschulden', ['dossierId' => $dossier->getId()]);
        } //else if ($createForm->isSubmitted() && $request->isXmlHttpRequest()) {
        //    return new JsonResponse($this->get('json_serializer')->normalize($form->getErrors(true, true)), JsonResponse::HTTP_BAD_REQUEST);
        //}

        $schuldeiser = new Schuldeiser();
        $createSchuldeiserForm = $this->createForm(SchuldeiserFormType::class, $schuldeiser, [
            'action' => $this->generateUrl('gemeenteamsterdam_fixxxschuldhulp_appschuldeiser_create', [])
        ]);

        $eventDispatcher->dispatch(ActionEvent::NAME, ActionEvent::registerDossierGeopened($this->getUser(), $dossier));

        return $this->render('Dossier/detailSchulden.html.twig', [
            'dossier' => $dossier,
            'schuldItems' => $schuldItems,
            'form' => $form->createView(),
            'createForm' => $createForm->createView(),
            'createSchuldeiserForm' => $createSchuldeiserForm->createView()
        ]);
    }

    /**
     * @Route("/detail/{dossierId}/aantekeningen")
     * @Security("is_granted('access', dossier)")
     * @ParamConverter("dossier", options={"id"="dossierId"})
     */
    public function detailAantekeningenAction(Request $request, Dossier $dossier, EntityManagerInterface $em, EventDispatcherInterface $eventDispatcher)
    {
        $aantekening = new Aantekening();

        $form = $this->createForm(CreateAantekeningFormType::class, $aantekening);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $dossier->addAantekening($aantekening);
            $aantekening->setOnderwerp('overige');
            $aantekening->setGebruiker($this->getUser());

            $em->flush();
            $eventDispatcher->dispatch(DossierChangedEvent::NAME, new DossierChangedEvent($dossier, $this->getUser()));
            $eventDispatcher->dispatch(DossierAddedAantekeningEvent::NAME, new DossierAddedAantekeningEvent($dossier, $this->getUser()));

            return $this->redirectToRoute('gemeenteamsterdam_fixxxschuldhulp_appdossier_detailaantekeningen', ['dossierId' => $dossier->getId()]);
        }

        $eventDispatcher->dispatch(ActionEvent::NAME, ActionEvent::registerDossierGeopened($this->getUser(), $dossier));

        return $this->render('Dossier/detailAantekeningen.html.twig', [
            'dossier' => $dossier,
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/allegro/refresh/{dossierId}")
     * @Security("is_granted('access', dossier)")
     * @ParamConverter("dossier", options={"id"="dossierId"})
     * @return RedirectResponse
     */
    public function allegroRefreshAction(Request $request, Dossier $dossier, AllegroService $allegroService)
    {
        $allegroService->updateDossier($dossier);
        return $this->redirect($request->headers->get('referer'));
    }

    /**
     * @Route("/detail/{dossierId}/aantekeningen/{aantekeningId}/verwijder")
     * @Method({"POST"})
     * @Security("user == aantekening.getGebruiker()")
     * @ParamConverter("aantekening", options={"id"="aantekeningId"})
     * @param Request                  $request
     * @param Aantekening              $aantekening
     * @param EntityManagerInterface   $em
     *
     * @return JsonResponse
     */
    public function deleteAantekeningAction(Request $request, Aantekening $aantekening, EntityManagerInterface $em)
    {
        if ($this->isCsrfTokenValid('gemeenteamsterdam_fixxxschuldhulp_appdossier_removeaantekening', $request->request->get('token')) !== true) {
            throw $this->createAccessDeniedException('CSRF token invalid');
        }

        $em->remove($aantekening);
        $em->flush();

        return new JsonResponse([]);
    }

    /**
     * @Route("/detail/{dossierId}/schulden/excel")
     * @Security("is_granted('access', dossier)")
     * @ParamConverter("dossier", options={"id"="dossierId"})
     */
    public function detailSchuldenExcel(Request $request, Dossier $dossier)
    {
        $spreadsheet = $this->schuldenAsExcel($dossier);

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
     * @Security("is_granted('access', dossier)")
     * @ParamConverter("dossier", options={"id"="dossierId"})
     */
    public function changeStatusAction(Request $request, Dossier $dossier, WorkflowRegistry $registry, EntityManagerInterface $em, EventDispatcherInterface $eventDispatcher)
    {
        if ($this->isCsrfTokenValid('gemeenteamsterdam_fixxxschuldhulp_appdossier_changestatus', $request->request->get('token')) === false) {
            throw $this->createAccessDeniedException('CSRF token invalid');
        }

        $workflow = $registry->get($dossier);

        $currentStatus = $dossier->getStatus();

        if ($workflow->can($dossier, $request->get('transition')) === false) {
            throw $this->createNotFoundException('Transition not available');
        }

        $eventDispatcher->dispatch(ActionEvent::NAME, ActionEvent::registerDossierStatusGewijzigd($this->getUser(), $dossier, $currentStatus, $request->get('transition')));

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
     * @Security("is_granted('access', dossier)")
     * @ParamConverter("dossier", options={"id"="dossierId"})
     * @ParamConverter("document", options={"id"="documentId"})
     */
    public function moveDocumentToPrullenbakAction(Request $request, Dossier $dossier, Document $document, EntityManagerInterface $em, EventDispatcherInterface $eventDispatcher)
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
        $eventDispatcher->dispatch(DossierChangedEvent::NAME, new DossierChangedEvent($dossier, $this->getUser()));

        return $this->redirectToRoute('gemeenteamsterdam_fixxxschuldhulp_appdossier_detailvoorlegger', ['dossierId' => $dossier->getId()]);
    }

    /**
     * @Route("/detail/{dossierId}/documenten/detail/{documentId}/verwijderen")
     * @Method("POST")
     * @Security("is_granted('access', dossier)")
     * @ParamConverter("dossier", options={"id"="dossierId"})
     * @ParamConverter("document", options={"id"="documentId"})
     */
    public function removeDocumentAction(Request $request, Dossier $dossier, Document $document, EntityManagerInterface $em, EventDispatcherInterface $eventDispatcher)
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

        $eventDispatcher->dispatch(DossierChangedEvent::NAME, new DossierChangedEvent($dossier, $this->getUser()));
        $em->flush();
        $this->addFlash('success', 'Document definitief verwijderd');

        return $this->redirectToRoute('gemeenteamsterdam_fixxxschuldhulp_appdossier_detailprullenbak', ['dossierId' => $dossier->getId()]);
    }

    /**
     * @Route("/detail/{dossierId}/documenten/detail/{documentId}/herstellen")
     * @Method("POST")
     * @Security("is_granted('access', dossier)")
     * @ParamConverter("dossier", options={"id"="dossierId"})
     * @ParamConverter("document", options={"id"="documentId"})
     */
    public function restoreDocumentAction(Request $request, Dossier $dossier, Document $document, EntityManagerInterface $em, EventDispatcherInterface $eventDispatcher)
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
        $eventDispatcher->dispatch(DossierChangedEvent::NAME, new DossierChangedEvent($dossier, $this->getUser()));
        $this->addFlash('success', 'Document hersteld');

        return $this->redirectToRoute('gemeenteamsterdam_fixxxschuldhulp_appdossier_detailprullenbak', ['dossierId' => $dossier->getId()]);
    }

    /**
     * @Route("/detail/documenten/detail/dummy-html/")
     */
    public function dummyHTMLDocumentAction(Request $request, EntityManagerInterface $em)
    {
        return $this->render('Dossier/documentEmailHTML.html.twig', []);
    }

    /**
     * @Route("/detail/{dossierId}/naar-prullenbak")
     * @Method("POST")
     * @Security("is_granted('access', dossier)")
     * @ParamConverter("dossier", options={"id"="dossierId"})
     */
    public function moveToPrullenbakAction(Request $request, Dossier $dossier, EntityManagerInterface $em, EventDispatcherInterface $eventDispatcher)
    {
        if ($this->isCsrfTokenValid('gemeenteamsterdam_fixxxschuldhulp_appdossier_movetoprullenbak', $request->request->get('token')) === false) {
            throw $this->createAccessDeniedException('CSRF token invalid');
        }

        $dossier->setInPrullenbak(true);
        $em->flush();
        $this->addFlash('success', 'Dossier in prullenbak geplaatst');

        $eventDispatcher->dispatch(ActionEvent::NAME, ActionEvent::registerDossierVerplaatstNaarPrullenbak($this->getUser(), $dossier));

        return $this->redirectToRoute('gemeenteamsterdam_fixxxschuldhulp_appdossier_index');
    }

    /**
     * @Route("/detail/{dossierId}/verwijderen")
     * @Method("POST")
     * @Security("is_granted('access', dossier)")
     * @ParamConverter("dossier", options={"id"="dossierId"})
     */
    public function removeAction(Request $request, Dossier $dossier, EntityManagerInterface $em, EventDispatcherInterface $eventDispatcher)
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

        $eventDispatcher->dispatch(ActionEvent::NAME, ActionEvent::registerDossierVerwijderd($this->getUser(), $dossier));

        return $this->redirectToRoute('gemeenteamsterdam_fixxxschuldhulp_appdossier_index');
    }

    /**
     * @Route("/detail/{dossierId}/herstellen")
     * @Method("POST")
     * @Security("is_granted('access', dossier)")
     * @ParamConverter("dossier", options={"id"="dossierId"})
     */
    public function restoreAction(Request $request, Dossier $dossier, EntityManagerInterface $em, EventDispatcherInterface $eventDispatcher)
    {
        if ($this->isCsrfTokenValid('gemeenteamsterdam_fixxxschuldhulp_appdossier_restore', $request->request->get('token')) === false) {
            throw $this->createAccessDeniedException('CSRF token invalid');
        }

        $dossier->setInPrullenbak(false);

        $em->flush();
        $this->addFlash('success', 'Dossier hersteld');

        $eventDispatcher->dispatch(ActionEvent::NAME, ActionEvent::registerDossierHersteld($this->getUser(), $dossier));

        return $this->redirectToRoute('gemeenteamsterdam_fixxxschuldhulp_appdossier_detailvoorlegger', ['dossierId' => $dossier->getId()]);
    }

    /**
     * @Route("/detail/{dossierId}/schulden/detail/{schuldItemId}/verwijderen")
     * @Method("POST")
     * @Security("is_granted('access', dossier)")
     * @ParamConverter("dossier", options={"id"="dossierId"})
     * @ParamConverter("schuldItem", options={"id"="schuldItemId"})
     */
    public function removeSchuldItemAction(Request $request, Dossier $dossier, SchuldItem $schuldItem, EntityManagerInterface $em, EventDispatcherInterface $eventDispatcher)
    {
        if ($schuldItem->getDossier() !== $dossier) {
            throw new NotFoundHttpException('SchuldItem does not match with dossier');
        }

        if ($schuldItem->isVerwijderd() === false) {
            throw $this->createNotFoundException('SchuldItem not in prullenbak', ['schuldItemId' => $schuldItem->getId()]);
        }

        if ($this->isCsrfTokenValid('gemeenteamsterdam_fixxxschuldhulp_appdossier_removeschulditem', $request->request->get('token')) === false) {
            throw $this->createAccessDeniedException('CSRF token invalid');
        }

        $em->remove($schuldItem);

        $em->flush();
        $eventDispatcher->dispatch(DossierChangedEvent::NAME, new DossierChangedEvent($dossier, $this->getUser()));
        $this->addFlash('success', 'Schuld definitief verwijderd');

        return $this->redirectToRoute('gemeenteamsterdam_fixxxschuldhulp_appdossier_detailprullenbak', ['dossierId' => $dossier->getId()]);
    }

    /**
     * @Route("/detail/{dossierId}/schulden/detail/{schuldItemId}/herstellen")
     * @Method("POST")
     * @Security("is_granted('access', dossier)")
     * @ParamConverter("dossier", options={"id"="dossierId"})
     * @ParamConverter("schuldItem", options={"id"="schuldItemId"})
     */
    public function restoreSchuldItemAction(Request $request, Dossier $dossier, SchuldItem $schuldItem, EntityManagerInterface $em, EventDispatcherInterface $eventDispatcher)
    {
        if ($schuldItem->getDossier() !== $dossier) {
            throw new NotFoundHttpException('SchuldItem does not match with dossier');
        }

        if ($schuldItem->isVerwijderd() === false) {
            throw $this->createNotFoundException('SchuldItem not in prullenbak', ['schuldItemId' => $schuldItem->getId()]);
        }

        if ($this->isCsrfTokenValid('gemeenteamsterdam_fixxxschuldhulp_appdossier_restoreschulditem', $request->request->get('token')) === false) {
            throw $this->createAccessDeniedException('CSRF token invalid');
        }

        $schuldItem->setVerwijderd(false);

        $em->flush();
        $eventDispatcher->dispatch(DossierChangedEvent::NAME, new DossierChangedEvent($dossier, $this->getUser()));
        $this->addFlash('success', 'Schuld hersteld');

        return $this->redirectToRoute('gemeenteamsterdam_fixxxschuldhulp_appdossier_detailprullenbak', ['dossierId' => $dossier->getId()]);
    }

    /**
     * @Route("/detail/{dossierId}/downloadPdf")
     * @Method("GET")
     * @Security("is_granted('access', dossier)")
     * @ParamConverter("dossier", options={"id"="dossierId"})
     * @param Dossier $dossier
     *
     * @return Response
     */
    public function downloadPdf(Dossier $dossier)
    {
        return $this->render('DocumentPlus/export.html.twig', ['dossier' => $dossier]);
    }

    /**
     * @Route("/detail/{dossierId}/downloadCsv")
     * @Method("GET")
     * @Security("is_granted('access', dossier)")
     * @ParamConverter("dossier", options={"id"="dossierId"})
     * @param Dossier             $dossier
     *
     * @param FileStorageSelector $fileStorageSelector
     *
     * @return Response
     * @throws \PhpOffice\PhpSpreadsheet\Exception
     * @throws \PhpOffice\PhpSpreadsheet\Writer\Exception
     */
    public function downloadCsv(Dossier $dossier, FileStorageSelector $fileStorageSelector): Response
    {
        $filesystem = new Filesystem();
        if (!$filesystem->exists($this->container->getParameter('kernel.project_dir') . '/var/tmp')) {
            $filesystem->mkdir($this->container->getParameter('kernel.project_dir') . '/var/tmp');
        }
        $basePath = $this->container->getParameter('kernel.project_dir') . '/var/tmp';

        $zipfileLocation = sprintf('%s/dossier-%s.zip', $basePath, $dossier->getId());
        $dossierCsvFileLocation = sprintf('%s/dossier-%s.csv', $basePath, $dossier->getId());
        $voorleggerCsvFileLocation = sprintf('%s/dossier-%s-voorlegger.csv', $basePath, $dossier->getId());
        $aantekeningenCsvFileLocation = sprintf('%s/dossier-%s-aantekeningen.csv', $basePath, $dossier->getId());
        $logsCsvFileLocation = sprintf('%s/dossier-%s-logs.csv', $basePath, $dossier->getId());
        $schuldenlijstExcelFileLocation = sprintf('%s/dossier-%s-schuldenlijst.xlsx', $basePath, $dossier->getId());

        $filesystemFiles = [
            $zipfileLocation,
            $dossierCsvFileLocation,
            $voorleggerCsvFileLocation,
            $aantekeningenCsvFileLocation,
            $logsCsvFileLocation,
            $schuldenlijstExcelFileLocation
        ];

        $filesystem->touch($filesystemFiles);

        $zipFactory = new ZipArchive();
        $files = $fileStorageSelector->getFileStorageForDossier()->listContents('dossier-' . $dossier->getId());
        $zipFactory->open($zipfileLocation, ZipArchive::CREATE);

        $dossier->getDocumenten()->map(function (DossierDocument $dossierDocument) use ($files, $fileStorageSelector, $zipFactory) {
            $key = array_search($dossierDocument->getDocument()->getBestandsnaam(), array_column($files, 'basename'), true);
            $zipFactory->addEmptyDir($dossierDocument->getOnderwerp());
            $zipFactory->addFromString($dossierDocument->getOnderwerp() . DIRECTORY_SEPARATOR . $dossierDocument->getDocument()->getNaam() . '.' . $dossierDocument->getDocument()->getOrigineleExtensie(), $fileStorageSelector->getFileStorageForDossier()->read($files[$key]['path']));
        });

        $dossierCsvFile = new Csv($dossier->toSpreadsheetCsv());
        $dossierCsvFile->save($dossierCsvFileLocation);
        $zipFactory->addFile($dossierCsvFileLocation, 'dossier-' . $dossier->getId() . '.csv');

        $voorleggerCsvFile = new Csv($dossier->getVoorlegger()->toSpreadsheetCsv());
        $voorleggerCsvFile->save($voorleggerCsvFileLocation);
        $zipFactory->addFile($voorleggerCsvFileLocation, 'dossier-' . $dossier->getId() . '-voorlegger.csv');

        $aantekeningenCsvFile = new Csv($dossier->getAantekeningenAsSpreadsheetCsv());
        $aantekeningenCsvFile->save($aantekeningenCsvFileLocation);
        $zipFactory->addFile($aantekeningenCsvFileLocation, 'dossier-' . $dossier->getId() . '-aantekeningen.csv');

        $logsCsvFile = new Csv($dossier->getLogsAsSpreadsheetCsv());
        $logsCsvFile->save($logsCsvFileLocation);
        $zipFactory->addFile($logsCsvFileLocation, 'dossier-' . $dossier->getId() . '-logs.csv');

        $schuldenlijst = new Xlsx($this->schuldenAsExcel($dossier));
        $schuldenlijst->save($schuldenlijstExcelFileLocation);
        $zipFactory->addFile($schuldenlijstExcelFileLocation, 'dossier-' . $dossier->getId() . '-schuldenlijst.xlsx');

        $zipFactory->close();

        $response = Response::create(file_get_contents($zipfileLocation));
        $response->headers->set('Content-Type', 'application/zip');
        $response->headers->set('Content-Disposition', 'attachment;filename="dossier-' . $dossier->getId() . '.zip"');
        $response->headers->set('Content-length', filesize($zipfileLocation));

        $filesystem->remove($filesystemFiles);

        return $response;
    }

    /**
     * @param Dossier $dossier
     *
     * @return Spreadsheet
     * @throws \PhpOffice\PhpSpreadsheet\Exception
     */
    private function schuldenAsExcel(Dossier $dossier): Spreadsheet
    {
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        $sheet->getPageSetup()->setOrientation(\PhpOffice\PhpSpreadsheet\Worksheet\PageSetup::ORIENTATION_LANDSCAPE);
        $sheet->getPageSetup()->setPaperSize(\PhpOffice\PhpSpreadsheet\Worksheet\PageSetup::PAPERSIZE_A4);


        $sheet->setCellValueByColumnAndRow(1, 1, 'Schuldeiser');
        $sheet->setCellValueByColumnAndRow(2, 1, 'Incassant');
        $sheet->setCellValueByColumnAndRow(3, 1, 'Bedrag');
        $sheet->setCellValueByColumnAndRow(4, 1, 'Oorspronkelijk bedrag');
        $sheet->setCellValueByColumnAndRow(5, 1, 'Ontstaansdatum');
        $sheet->setCellValueByColumnAndRow(6, 1, 'Vaststeldatum');
        $sheet->setCellValueByColumnAndRow(7, 1, 'Referentie');
        $sheet->setCellValueByColumnAndRow(8, 1, 'Type');

        $sheet->getStyleByColumnAndRow(1, 1, 8, 1)->getFont()->setBold(true);

        foreach (array_values($dossier->getSchuldItemsNotInPrullenbak()->toArray()) as $rowIndex => $schuldItem) {
            /** @var $schuldItem SchuldItem */
            $rowIndex = $rowIndex + 2; // one-based instead of zero-based and one for the header
            $sheet->setCellValueByColumnAndRow(1, $rowIndex, $schuldItem->getSchuldeiser() ? $schuldItem->getSchuldeiser()->getBedrijfsnaam() : '');
            $sheet->setCellValueByColumnAndRow(2, $rowIndex, $schuldItem->getIncassant() ? $schuldItem->getIncassant()->getBedrijfsnaam() : '');
            $sheet->setCellValueByColumnAndRow(3, $rowIndex, $schuldItem->getBedrag());
            $sheet->setCellValueByColumnAndRow(4, $rowIndex, $schuldItem->getBedragOorspronkelijk());
            $sheet->setCellValueByColumnAndRow(5, $rowIndex, $schuldItem->getOntstaansDatum() ? \PhpOffice\PhpSpreadsheet\Shared\Date::PHPToExcel($schuldItem->getOntstaansDatum()) : null);
            $sheet->setCellValueByColumnAndRow(6, $rowIndex, $schuldItem->getVaststelDatum() ? \PhpOffice\PhpSpreadsheet\Shared\Date::PHPToExcel($schuldItem->getVaststelDatum()) : null);
            $sheet->setCellValueByColumnAndRow(7, $rowIndex, $schuldItem->getReferentie());
            $sheet->setCellValueByColumnAndRow(8, $rowIndex, $schuldItem->getType());

            if (count($schuldItem->getAantekeningen()) > 0) {
                $opmerking = '';
                foreach ($schuldItem->getAantekeningen() as $aantekening) {
                    /** @var $aantekening Aantekening */
                    $opmerking = $opmerking . $aantekening->getGebruiker()->__toString() . ' ' . $aantekening->getDatumTijd()->format('d-m-Y H:i') . ":\r\n" . $aantekening->getTekst() . "\r\n\r\n";
                }
                $sheet->getCommentByColumnAndRow(7, $rowIndex)->getText()->createText($opmerking);
                $sheet->getCommentByColumnAndRow(7, $rowIndex)->setWidth('200pt');
                $sheet->getCommentByColumnAndRow(7, $rowIndex)->setHeight('100pt');
            }
            $sheet->getStyleByColumnAndRow(3, $rowIndex)->getNumberFormat()->setFormatCode('"€"#,##0.00_-');
            $sheet->getStyleByColumnAndRow(4, $rowIndex)->getNumberFormat()->setFormatCode('"€"#,##0.00_-');
            $sheet->getStyleByColumnAndRow(5, $rowIndex)->getNumberFormat()->setFormatCode('dd mmmm yyyy');
            $sheet->getStyleByColumnAndRow(6, $rowIndex)->getNumberFormat()->setFormatCode('dd mmmm yyyy');
        }

        $sheet->getColumnDimensionByColumn(1)->setAutoSize(true);
        $sheet->getColumnDimensionByColumn(2)->setAutoSize(true);
        $sheet->getColumnDimensionByColumn(3)->setAutoSize(true);
        $sheet->getColumnDimensionByColumn(4)->setAutoSize(true);
        $sheet->getColumnDimensionByColumn(5)->setAutoSize(true);
        $sheet->getColumnDimensionByColumn(6)->setAutoSize(true);
        $sheet->getColumnDimensionByColumn(7)->setAutoSize(true);
        $sheet->getColumnDimensionByColumn(8)->setAutoSize(true);

        $sheet->getHeaderFooter()->setOddHeader('Schuldenlijst: ' . $dossier->getClientNaam());
        $sheet->getHeaderFooter()->setEvenHeader('Schuldenlijst: ' . $dossier->getClientNaam());

        $sheet->getHeaderFooter()->setOddFooter(date('d-m-Y H:i'));
        $sheet->getHeaderFooter()->setEvenFooter(date('d-m-Y H:i'));
        return $spreadsheet;
    }
}
