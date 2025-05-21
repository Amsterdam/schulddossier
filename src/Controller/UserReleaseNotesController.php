<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Controller;

use Symfony\Component\ExpressionLanguage\Expression;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Finder\Finder;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Symfony\Component\Serializer\Serializer;


#[IsGranted(attribute: new Expression("is_granted('ROLE_USER')"))]
class UserReleaseNotesController extends AbstractController
{
    private $session;

    public function __construct(RequestStack $requestStack)
    {
        $this->session = $requestStack->getSession();
    }

    #[Route(path: '/app/versies/')]
    #[IsGranted(attribute: new Expression("is_granted('ROLE_USER')"))]
    public function index(): Response
    {
        $finder = new Finder();
        $finder->directories()->in($this->getParameter('kernel.project_dir') . '/templates/UserReleaseNotes/');
        $finder->sort(function ($a, $b) {
            return strcmp($b->getRelativePathname(), $a->getRelativePathname());
        });
        $templates = [];
        foreach ($finder as $dir) {
            $dirPath = $dir->getRealPath();
            $o = [];
            $title = new Finder();
            $content = new Finder();
            $title->files()->in($dir->getRealPath())->name('title.html.twig');
            $content->files()->in($dir->getRealPath())->name('content.html.twig');
            if ($title->hasResults()) {
                $o['title'] = $dir->getRelativePathname() . '/' . iterator_to_array(
                        $title,
                        false
                    )[0]->getRelativePathname();
            }
            if ($content->hasResults()) {
                $o['content'] = $dir->getRelativePathname() . '/' . iterator_to_array(
                        $content,
                        false
                    )[0]->getRelativePathname();
            }
            if (count($o) == 2) {
                $o['id'] = $dir->getRelativePathname();
                $templates[$dir->getRelativePathname()] = $o;
            }
        }
        return $this->render('UserReleaseNotes/index.html.twig', ['templates' => $templates]);
    }

    #[Route(path: '/app/versies/seen')]
    #[IsGranted(attribute: new Expression("is_granted('ROLE_USER')"))]
    public function releaseNoteSeen(
        Request $request,
        Serializer $jsonSerializer
    ): JsonResponse {
//        $seenReleaseNotes = $request->getSession()->get('seenReleaseNotes');
        $seenReleaseNotes = $this->session->get('seenReleaseNotes');
        $seenReleaseNotes["ts" . $request->query->all('ts')] = 0;


        return new JsonResponse($jsonSerializer->normalize([
            'ts' => $request->query->get('ts'),
            'user' => $this->getUser(),
            'rn' => $seenReleaseNotes,
        ]));
    }
}
