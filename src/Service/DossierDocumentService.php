<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Service;

use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Document;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Dossier;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\DossierDocument;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class DossierDocumentFileService
{

    public function __construct(
        public ParameterBagInterface $parameterBag,
        public string                $documentBasePath = ''
    )
    {
        $this->documentBasePath = $this->parameterBag->get('kernel.project_dir') . 'var/data';
    }

    public function listDossierFiles(Dossier $dossier): array
    {
        $files = [];
        foreach ($dossier->getDocumenten() as $dossierDocument) {
            $document = $dossierDocument->getDocument();
            if ($document->isInPrullenbak() === false) {
                $files[] = [
                    'id' => $document->getId(),
                    'filename' => $document->getOrigineleBestandsnaam(),
                    'size' => $document->getFile()->getSize(),
                    'mimeType' => $document->getFile()->getMimeType(),
                ];
            }
        }

        return $files;
    }

    public function downloadDossierDocument(
        Dossier $dossier,
        Document $document
    )
    {
        $this->checkDocumentAccess($dossier, $document);

        return new Response(
            $document->getFile()->getContent(),
            Response::HTTP_OK,
            [
                'Content-Transfer-Encoding', 'binary',
                'Content-Type' => $document->getFile()->getMimeType(),
                'Content-Disposition' => 'attachment; filename="' . $document->getOrigineleBestandsnaam() . '"',
                'Content-Length' => $document->getFile()->getSize(),
            ]
        );
    }

    public function showDossierDocument(
        Dossier $dossier,
        Document $document
    ) : Response
    {
        $this->checkDocumentAccess($dossier, $document);

        return new Response(
            $document->getFile()->getContent(),
            Response::HTTP_OK,
            [
                'Content-Transfer-Encoding', 'binary',
                'Content-Type' => $document->getFile()->getMimeType(),
                'Content-Disposition' => 'inline',
                'Content-Length' => $document->getFile()->getSize(),
            ]
        );
    }

    public function storeDocumentFile(
        UploadedFile $file,
        ?string $destinationPath = null,
        ?string $overrideFilename = null
    ): string
    {
        $path = $this->documentBasePath . $destinationPath;
        $filename = $overrideFilename ?? $file->getClientOriginalName();

        try {
            $file->move($path, $filename);
        } catch (\Exception $e) {
            throw new \Exception('Failed to store file');
        }

        return $filename;
    }


    private function checkDocumentAccess(
        Dossier $dossier,
        Document $document
    )
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
    }
}