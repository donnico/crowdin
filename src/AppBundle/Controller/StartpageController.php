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
    public function startAction()
    {
        return new Response(
            '<html>
              <head>

              </head>
              <body>
                <center>
                  <p>
                  Welcome to my_crowdin project
                  </p>
                  <p>
                  Would you like to be part of our amazing community of devoted translaters ? </br>
                  <p>
                  Don&#145t hesitate and join us now !
                  </p>
                  </p>

                </center>
              </body>
            </html>'
        );
    }
}
