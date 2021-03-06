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

      $hechos = $em->getRepository('AppBundle:Hecho')->findBy(
          array(),
          array('fecha'=>'desc'),
          10,
          null
      );

      return $this->render('home.html.twig', array(
          'hechos' => $hechos,
          'current'=>'',
      ));
    }

    /**
     * @Route("/timeline", name="timeline")
     */
    public function timelineAction(Request $request)
    {
      $em = $this->getDoctrine()->getManager();

      $hechos = $em->getRepository('AppBundle:Hecho')->findBy(
          array(),
          array('fecha'=>'desc'),
          null,
          null
      );


      return $this->render('timeline.html.twig', array(
          'hechos' => $hechos,
          'current'=>'',
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
        if( $titulo == $hecho->getSlug() && $fecha == $hecho->getFecha()->format('d-m-Y')){
          $item=$hecho;
          break;
        }
      }

      if(!$item){
        echo "error: No se encontró el articulo buscado";

      }
      $relacionados=array();
      //vuelvo a iterar para traer los relacionados
      foreach ($hechos as $hecho) {
        $encomun = array_intersect($item->getTags()->toArray(), $hecho->getTags()->toArray());
        if($encomun && $hecho->getId()!==$item->getId())$relacionados[]=$hecho;
      }

      return $this->render('hecho.html.twig', array(
          'hecho' => $item,
          'relacionados'=>$relacionados,
          'current'=>'',
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

    /**
     * @Route("/tags/{tag}/", name="tags")
     */
    public function tagsAction($tag)
    {
      $em = $this->getDoctrine()->getManager();

      $hechos = $em->getRepository('AppBundle:Hecho')->findAll();
      $hechosTag=array();

      foreach ($hechos as $hecho) {
        if( in_array('#'.$tag,$hecho->getTags()->toArray())){
          $hechosTag[]=$hecho;
        }
      }


      return $this->render('timeline.html.twig', array(
          'hechos' => $hechosTag,
          'current'=>'',
      ));
    }



}
