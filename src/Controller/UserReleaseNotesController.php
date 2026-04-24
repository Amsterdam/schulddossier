<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\Finder\Finder;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Serializer\Serializer;

/**
 * @Route("/app/versies")
 * @Security("is_granted('ROLE_USER')")
 */
class UserReleaseNotesController extends AbstractController
{
    private $session;

    public function __construct(SessionInterface $session)
    {
        $this->session = $session;
    }

    #[\Symfony\Component\Routing\Attribute\Route(path: '/app/versies/')]
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
            $o = [];
            $title = new Finder();
            $content = new Finder();
            $title->files()->in($dir->getRealPath())->name('title.html.twig');
            $content->files()->in($dir->getRealPath())->name('content.html.twig');
            if ($title->hasResults()) {
                $o['title'] = $dir->getRelativePathname() . '/' . iterator_to_array($title, false)[0]->getRelativePathname();
            }
            if ($content->hasResults()) {
                $o['content'] = $dir->getRelativePathname() . '/' . iterator_to_array($content, false)[0]->getRelativePathname();
            }
            if (count($o) == 2) {
                $o['id'] = $dir->getRelativePathname();
                $templates[$dir->getRelativePathname()] = $o;
            }
        }
        return $this->render('UserReleaseNotes/index.html.twig', ['templates' => $templates]);
    }

    #[\Symfony\Component\Routing\Attribute\Route(path: '/app/versies/seen')]
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
