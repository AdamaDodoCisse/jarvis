<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class IndexController
 * @package App\Controller
 *
 * @author Adama dodo cisse <adama.dodo.cisse@gmail.com>
 */
class IndexController extends AbstractController
{
    /**
     * Home page
     *
     * @Route("/", name="index")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index()
    {
        return $this->render('index/index.html.twig');
    }
}
