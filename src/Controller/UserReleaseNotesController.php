<?php
namespace GemeenteAmsterdam\FixxxSchuldhulp\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\Finder\Finder;
use Symfony\Component\HttpFoundation\Session\SessionInterface;


/**
 * @Route("/app/versies")
 * @Security("has_role('ROLE_USER')")
 */
class UserReleaseNotesController extends Controller
{
    private $session;

    public function __construct(SessionInterface $session)
    {
        $this->session = $session;
    }
    /**
     * @Route("/")
     * @Security("has_role('ROLE_USER')")
     */
    public function indexAction(Request $request)
    {
        $finder = new Finder();
        $finder->directories()->in($this->get('kernel')->getRootDir() . '/../templates/UserReleaseNotes/');

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
     * @Security("has_role('ROLE_USER')")
     */
    public function releaseNoteSeenAction(Request $request)
    {

//        $seenReleaseNotes = $request->getSession()->get('seenReleaseNotes');
        $seenReleaseNotes = $this->session->get('seenReleaseNotes');
        $seenReleaseNotes["ts" . $request->query->get('ts')] = 0;


        return new JsonResponse($this->get('json_serializer')->normalize([
            'ts' => $request->query->get('ts'),
            'user' => $this->getUser(),
            'rn' => $seenReleaseNotes,
        ]));
    }
}