<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Controller;

use Doctrine\ORM\EntityManagerInterface;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Gebruiker;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\NewsItem;
use GemeenteAmsterdam\FixxxSchuldhulp\Repository\NewsItemRepository;
use Knp\Component\Pager\PaginatorInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/app/news")
 */
class NewsController extends AbstractController
{
    const ALLOWED_TAGS = ['br','p','strong','h1','h2', 'em', 'u'];

    /**
     * @Route("/add")
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function addAction(Request $request, EntityManagerInterface $em)
    {
        if (Request::METHOD_POST === $request->getMethod()) {
            $item = new NewsItem();
            $item->setTitle($request->request->get('title'));
            if (0 === strlen($item->getTitle())) {
                return new JsonResponse(['success'=>false]);
            }
            $item->setContent(strip_tags($request->request->get('content'), self::ALLOWED_TAGS));
            $now = new \DateTime();
            $item->setCreatedAt($now);
            $item->setCreatedBy($this->getUser());
            if ('false' !== $request->request->get('publish')) {
                $item->setPublishedAt($now);
            }
            $item->setVisibleGka('false' !== $request->request->get('visibleGka'));
            $item->setVisibleMadi('false' !== $request->request->get('visibleMadi'));

            $em->persist($item);
            $em->flush();

            return new JsonResponse(['success'=>'ok']);
        }
        return $this->render('News/add.html.twig', []);
    }

    /**
     * @Route("")
     * @IsGranted("IS_AUTHENTICATED_FULLY")
     */
    public function indexAction(PaginatorInterface $paginator, NewsItemRepository $repository, Request $request)
    {
        $user = $this->getUser();
        /**
         * @var Gebruiker $user
         */
        switch ($user->getType()) {
            case Gebruiker::TYPE_ADMIN:
                $query = $repository->generatePaginationQuery();
                break;

            case Gebruiker::TYPE_GKA:
            case Gebruiker::TYPE_GKA_APPBEHEERDER:
                $query = $repository->generatePaginationQueryForGka();
                break;

            case Gebruiker::TYPE_MADI:
            case Gebruiker::TYPE_MADI_KEYUSER:
                $query = $repository->generatePaginationQueryForMadi();
                break;

            default:
                throw new \Exception(sprintf('News query not implemented for unknown user type: %s', $user->getType()));
        }


        $pagination = $paginator->paginate(
            $query,
            $request->query->getInt('page', 1),
            10
        );

        return $this->render('News/index.html.twig', [
            'pagination' => $pagination
        ]);
    }

    /**
     * @Route("/{item}")
     * @IsGranted("IS_AUTHENTICATED_FULLY")
     */
    public function showAction(NewsItem $item, EntityManagerInterface $em)
    {
        $type = $this->getUser()->getType();

        if (in_array($type, [Gebruiker::TYPE_GKA, Gebruiker::TYPE_GKA_APPBEHEERDER]) && false === $item->isVisibleGka()) {
            throw new AccessDeniedHttpException();
        }

        if (in_array($type, [Gebruiker::TYPE_MADI, Gebruiker::TYPE_MADI_KEYUSER]) && false === $item->isVisibleMadi()) {
            throw new AccessDeniedHttpException();
        }

        $user = $this->getUser();

        /**
         * @var Gebruiker $user
         */
        $now = new \DateTime();
        $user->setLastNewsView($now);
        $em->flush();

        return $this->render('News/show.html.twig', [
            'item' => $item
        ]);
    }

    /**
     * @Route("/edit/{item}")
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function editAction(NewsItem $item, Request $request, EntityManagerInterface $em)
    {
        if (Request::METHOD_POST === $request->getMethod()) {
            $item->setTitle($request->request->get('title'));
            if (0 === strlen($item->getTitle())) {
                return new JsonResponse(['success'=>false]);
            }
            $item->setContent(strip_tags($request->request->get('content'), self::ALLOWED_TAGS));
            $now = new \DateTime();
            $item->setLastUpdatedAt($now);
            $item->setLastUpdatedBy($this->getUser());
            if ('false' !== $request->request->get('publish') && null === $item->getPublishedAt()) {
                $item->setPublishedAt($now);
            }

            if ('false' === $request->request->get('publish')) {
                $item->setPublishedAt(null);
            }

            $item->setVisibleGka('false' !== $request->request->get('visibleGka'));
            $item->setVisibleMadi('false' !== $request->request->get('visibleMadi'));

            $em->flush();

            return new JsonResponse(['success'=>'ok']);
        }
        return $this->render('News/edit.html.twig', ['item'=>$item]);
    }
}
