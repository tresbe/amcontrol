<?php

namespace Amcontrol\AmcontrolBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Amcontrol\AmcontrolBundle\Entity\Listas;
use Amcontrol\AmcontrolBundle\Form\ListasType;

/**
 * Listas controller.
 *
 */
class ListasController extends Controller
{
    /**
     * Lists all Listas entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entities = $em->getRepository('AmcontrolBundle:Listas')->findAll();

        return $this->render('AmcontrolBundle:Listas:index.html.twig', array(
            'entities' => $entities
        ));
    }

    /**
     * Finds and displays a Listas entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('AmcontrolBundle:Listas')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Listas entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AmcontrolBundle:Listas:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),

        ));
    }

    /**
     * Displays a form to create a new Listas entity.
     *
     */
    public function newAction()
    {
        $entity = new Listas();
        $form   = $this->createForm(new ListasType(), $entity);

        return $this->render('AmcontrolBundle:Listas:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
    }

    /**
     * Creates a new Listas entity.
     *
     */
    public function createAction()
    {
        $entity  = new Listas();
        $request = $this->getRequest();
        $form    = $this->createForm(new ListasType(), $entity);
        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('listas_show', array('id' => $entity->getId())));
            
        }

        return $this->render('AmcontrolBundle:Listas:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
    }

    /**
     * Displays a form to edit an existing Listas entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('AmcontrolBundle:Listas')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Listas entity.');
        }

        $editForm = $this->createForm(new ListasType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AmcontrolBundle:Listas:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Listas entity.
     *
     */
    public function updateAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('AmcontrolBundle:Listas')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Listas entity.');
        }

        $editForm   = $this->createForm(new ListasType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        $request = $this->getRequest();

        $editForm->bindRequest($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('listas_edit', array('id' => $id)));
        }

        return $this->render('AmcontrolBundle:Listas:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Listas entity.
     *
     */
    public function deleteAction($id)
    {
        $form = $this->createDeleteForm($id);
        $request = $this->getRequest();

        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $entity = $em->getRepository('AmcontrolBundle:Listas')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Listas entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('listas'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
