<?php
/**
 * Created by PhpStorm.
 * User: div3r
 * Date: 05.02.2019.
 * Time: 17:23
 */

namespace App\Controller;


use App\Repository\ArticleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomepageController extends AbstractController
{
    private $articleRepository;

    /**
     * HomepageController constructor.
     * @param ArticleRepository $ar
     */
    public function __construct(ArticleRepository $ar)
    {
        $this->articleRepository = $ar;
    }


    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {

        $articles = $this->articleRepository->findAll();
        return $this->render('homepage/index.html.twig', [
            'articles' => $articles
        ]);
    }


}