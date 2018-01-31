<?php

// src/AppBundle/Controller/LuckyController.php
namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class StartpageController
{
    /**
     * @Route("my_crowdin/")
     */
    public function numberAction()
    {
        $number = mt_rand(0, 100);

        return new Response(
            '<html>
              <head>
              <p>lololo</p>
              </head>
              <body>Lucky number: '.$number.'</body>
            </html>'
        );
    }
}
