<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use AppBundle\Entity\Hecho;
use AppBundle\Entity\Tag;
use AppBundle\Form\HechoType;

/**
 * Hecho controller.
 *
 */
class HechoController extends Controller
{
    /**
     * Lists all Hecho entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $hechos = $em->getRepository('AppBundle:Hecho')->findAll();

        return $this->render('hecho/index.html.twig', array(
            'hechos' => $hechos,
        ));
    }

    /**
     * Creates a new Hecho entity.
     *
     */
    public function newAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
       
        $hecho = new Hecho();
        
        // dummy code - this is here just so that the Task has some tags
        // otherwise, this isn't an interesting example
        /*$tag1 = new Tag();
        $tag1->setNombre('uno');
        $hecho->getTags()->add($tag1);
        $tag2 = new Tag();
        $tag2->setNombre('dos');
        $hecho->getTags()->add($tag2);*/
        // end dummy code

        $form = $this->createForm(HechoType::class,$hecho);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {            
            
            dump($form);
            //$em->persist($hecho);
            //$em->flush();

            return $this->redirectToRoute('hecho_show', array('id' => $hecho->getId()));
        }

        return $this->render('hecho/new.html.twig', array(
            'hecho' => $hecho,           
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Hecho entity.
     *
     */
    public function showAction(Hecho $hecho)
    {
        $deleteForm = $this->createDeleteForm($hecho);

        return $this->render('hecho/show.html.twig', array(
            'hecho' => $hecho,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Hecho entity.
     *
     */
    public function editAction(Request $request, Hecho $hecho)
    {
        $deleteForm = $this->createDeleteForm($hecho);
        $editForm = $this->createForm(new HechoType(), $hecho);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($hecho);
            $em->flush();

            return $this->redirectToRoute('hecho_edit', array('id' => $hecho->getId()));
        }

        return $this->render('hecho/edit.html.twig', array(
            'hecho' => $hecho,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Hecho entity.
     *
     */
    public function deleteAction(Request $request, Hecho $hecho)
    {
        $form = $this->createDeleteForm($hecho);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($hecho);
            $em->flush();
        }

        return $this->redirectToRoute('hecho_index');
    }

    /**
     * Creates a form to delete a Hecho entity.
     *
     * @param Hecho $hecho The Hecho entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Hecho $hecho)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('hecho_delete', array('id' => $hecho->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
