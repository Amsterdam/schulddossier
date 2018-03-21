<?php
namespace GemeenteAmsterdam\FixxxSchuldhulp\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction(Request $request)
    {
        return new Response($request->query->has('msg') === false ? 'Hoi' : $request->query->get('msg'));
    }

    /**
     * @Route("/app/special/for/ppk")
     */
    public function uploadTestAction(Request $request)
    {
        return $this->render('Dossier/schuldenlijst/index.html.twig', [

		]);
        if ($request->getMethod() === 'POST') {
            $data = [];
            foreach ($request->files->all() as $form) {
                foreach ($form as $file) {
                    /** @var $file UploadedFile */
                    $data[] = [
                        'errorInt' => $file->getError(),
                        'errorMsg' => $file->getErrorMessage(),
                        'name' => $file->getClientOriginalName(),
                        'ext' => $file->getClientOriginalExtension(),
                        'mime' => $file->getClientMimeType(),
                        'size' => $file->getClientSize()
                    ];
                }
            }
            return new JsonResponse($data);
        }
        return new Response('<html><body><form method="post" enctype="multipart/form-data"><input type="file" name="specialFormForPpk[eenBestand]"><button type="submit">Stuur op</button></form></body></html>');
    }
}