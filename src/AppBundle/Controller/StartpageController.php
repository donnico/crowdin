<?php

// src/AppBundle/Controller/LuckyController.php
namespace AppBundle\Controller;


use AppBundle\Entity\Document;
use AppBundle\Form\DocumentType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;


class StartpageController extends Controller
{
  /**
   * @Route("/", name="homepage")
   */
    public function startAction(Request $request)
    {
        $id = 5;
        return $this->render('appbundle/startPage.html.twig');
    }

    /**
     * @Route("/dashboard", name="dashboard")
     */
    public function testDashboard(Request $request)
    {
        $document = new Document();
        $form = $this->createForm(DocumentType::class, $document);
        return $this->render('appbundle/dashboard.html.twig', array('form' => $form->createView(),
        ));
    }

    /**
     * @Route("/choice", name="choice")
     */
    public function choicePageAction( Request $request)
    {
        $listDocuments = array(
            array('id' => 2, 'title' => 'Recherche développeur Symfony'),
            array('id' => 5, 'title' => 'Mission de webmaster'),
            array('id' => 9, 'title' => 'Offre de stage webdesigner')
        );

        return $this->render('appbundle/choice.html.twig',array(

            'listDocuments' => array()
        ));
    }

    /**
     *@Route("/translation", name="translation")
     */
    public function tradAction(Request $request)
    {
        return $this->render('appbundle/traduction.html.twig');
    }

    /**
     * @Route("/summary", name="summary")
     */
    public function summaryTradAction(Request $request)
    {
        return $this->render('appbundle/summary.html.twig');
    }



}
