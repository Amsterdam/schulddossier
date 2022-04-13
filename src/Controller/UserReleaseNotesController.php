<?php
namespace GemeenteAmsterdam\FixxxSchuldhulp\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\File\UploadedFile;
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
    /**
     * @Route("/")
     * @Security("is_granted('ROLE_USER')")
     */
    public function indexAction(Request $request)
    {
        $finder = new Finder();
        $finder->directories()->in($this->get('kernel')->getRootDir() . '/../templates/UserReleaseNotes/');
        $finder->sort(function ($a, $b) { return strcmp($b->getRelativePathname(), $a->getRelativePathname()); });
        
        $templates = [];

        foreach ($finder as $dir) {
            $dirPath = $dir->getRealPath();
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
    /**
     * @Route("/seen")
     * @Security("is_granted('ROLE_USER')")
     */
    public function releaseNoteSeenAction(Request $request, Serializer $jsonSerializer)
    {

//        $seenReleaseNotes = $request->getSession()->get('seenReleaseNotes');
        $seenReleaseNotes = $this->session->get('seenReleaseNotes');
        $seenReleaseNotes["ts" . $request->query->get('ts')] = 0;


        return new JsonResponse($jsonSerializer->normalize([
            'ts' => $request->query->get('ts'),
            'user' => $this->getUser(),
            'rn' => $seenReleaseNotes,
        ]));
    }
}
