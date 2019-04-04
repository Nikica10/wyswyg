<?php
/**
 * Created by PhpStorm.
 * User: div3r
 * Date: 05.02.2019.
 * Time: 17:23
 */

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomepageController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
        return $this->render('homepage/index.html.twig');
    }


}