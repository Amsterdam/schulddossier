<?php

declare(strict_types=1);

namespace GemeenteAmsterdam\FixxxSchuldhulp\EventListener;

use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Event\ResponseEvent;

class FallbackFileListener
{
  public function __construct(private readonly string $publicDir)
  {
  }

  public function onKernelResponse(ResponseEvent $event): void
  {
    $response = $event->getResponse();
    if ($response->getStatusCode() !== Response::HTTP_NOT_FOUND) {
      return;
    }

    $request = $event->getRequest();
    $path = $request->getPathInfo();

    $filePath = $this->publicDir . $path;

    // Check if the file exists in the public directory
    if (file_exists($filePath) && is_file($filePath)) {
      // Serve the file and set the appropriate response
      $file = new File($filePath);
      $newResponse = new Response(file_get_contents($filePath), Response::HTTP_OK);

      // Determine the MIME type to set
      $mimeType = $file->getMimeType();
      if ($file->getExtension() === 'js') {
        $mimeType = 'application/javascript';
      }

      if ($file->getExtension() === 'css') {
        $mimeType = 'text/css';
      }

      $newResponse->headers->set('Content-Type', $mimeType);
      $event->setResponse($newResponse);
    }
  }
}
