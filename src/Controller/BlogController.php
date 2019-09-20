<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\ArticleRepository;
use App\Entity\Article;

class BlogController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(ArticleRepository $repo)// c'est une injection de dépendance
    {
        $articles = $repo->findAll();
        
        return $this->render('blog/index.html.twig', [
            'articles' => $articles
        ]);
    }
    
     /**
     * @Route("article/{id}", name="article")
     */
      public function article(Article $article)
    {
        return $this->render('blog/article.html.twig', [
            'article' => $article
        ]);
    }
    
}
