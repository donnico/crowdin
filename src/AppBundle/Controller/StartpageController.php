<?php

// src/AppBundle/Controller/LuckyController.php
namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class StartpageController extends Controller
{
  /**
   * @Route("/", name="homepage")
   */
    public function startAction(Request $request)
    {
        return $this->render('default/startPage.html.twig');
    }
}
