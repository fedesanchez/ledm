<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
      $em = $this->getDoctrine()->getManager();

      $hechos = $em->getRepository('AppBundle:Hecho')->findAll();

      return $this->render('home.html.twig', array(
          'hechos' => $hechos,
          'current'=>'timeline',
      ));
    }


    /**
     * @Route("/mostrar/{fecha}/{titulo}", name="mostrar")
     */
    public function mostrarAction($fecha,$titulo)
    {
      $em = $this->getDoctrine()->getManager();

      $hechos = $em->getRepository('AppBundle:Hecho')->findAll();

      foreach ($hechos as $hecho) {
        if( $titulo == $hecho->getSlug() && $fecha == $hecho->getFecha()->format('d-m-Y')) $item=$hecho;
      }

      if(!$item){
        echo "error:";

      }

      return $this->render('hecho.html.twig', array(
          'hecho' => $item,
          'current'=>'timeline',
      ));
    }


    /**
     * @Route("/historia", name="historia")
     */
    public function historiaAction()
    {
      return $this->render('historia.html.twig', array('current'=>'historia',));


    }

    /**
     * @Route("/contacto", name="contacto")
     */
    public function contactoAction()
    {
      return $this->render('contacto.html.twig', array('current'=>'contacto',));


    }



}
