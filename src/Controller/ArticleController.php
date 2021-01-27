<?php

namespace App\Controller;

use App\Repository\ArticleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/article", name="article_")
 */
class ArticleController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index(): Response
    {
        $articleRepository = new ArticleRepository();

        return $this->render('article/index.html.twig', [
            'articles' => $articleRepository->getAll(),
        ]);
    }

    /**
     * @Route("/{slug}", name="show")
     *
     * @param string $slug
     *
     * @return Response
     */
    public function show(string $slug): Response
    {
        $articleRepository = new ArticleRepository();
        $article = $articleRepository->getBySlug($slug);

        if (null === $article) {
            throw $this->createNotFoundException('Article Not Found !!!');
        }

        return $this->render('article/show.html.twig', [
            'article' => $article,
        ]);
    }
}
