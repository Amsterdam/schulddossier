<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Twig;

use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Document;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Thumbnail;
use GemeenteAmsterdam\FixxxSchuldhulp\Service\ThumbnailGenerationService;

class DocumentThumbnailExtension extends \Twig_Extension
{
    /**
     * @var ThumbnailGenerationService
     */
    private $thumbnailGenerationService;

    /**
     * @var string
     */
    private $swiftContainerPrefix;

    /**
     * @var string
     */
    private $swiftTempUrlKey;

    /**
     * @var string
     */
    private $swiftPublicUrl;

    public function __construct(ThumbnailGenerationService $thumbnailGenerationService, $swiftContainerPrefix, $swiftTempUrlKey, $swiftPublicUrl)
    {
        $this->thumbnailGenerationService = $thumbnailGenerationService;
        $this->swiftContainerPrefix = $swiftContainerPrefix;
        $this->swiftTempUrlKey = $swiftTempUrlKey;
        $this->swiftPublicUrl = $swiftPublicUrl;
    }

    public function getFilters()
    {
        return [
            new \Twig_Filter('app_document_thumbnails', function (Document $document) {
                $supported = ['pdf', 'docx'];
                if (in_array(strtolower($document->getOrigineleExtensie()), $supported)) {
                    if ($document->getThumbnails()->count() === 0) {
                        $this->thumbnailGenerationService->push($document);
                        return [];
                    } else {
                        return $document->getThumbnails()->map(function (Thumbnail $thumbnail) {
                            $timestamp = time() + 120;
                            $path = '/' . $this->swiftContainerPrefix . 'thumbnail' . '/' . $thumbnail->getBestandsnaam();
                            $sign = hash_hmac('sha1', "GET\n" . $timestamp . "\n" . $path, $this->swiftTempUrlKey);
                            return $this->swiftPublicUrl . $path . '?temp_url_sig=' . $sign . '&temp_url_expires=' . $timestamp;
                        });
                    }
                }
                return null;
            })
        ];
    }
}