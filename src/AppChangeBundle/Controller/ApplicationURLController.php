<?php

namespace AppChangeBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use AppChangeBundle\Entity\ApplicationURL;
use AppChangeBundle\Form\ApplicationURLType;

/**
 * ApplicationURL controller.
 *
 * @Route("/applicationurl")
 */
class ApplicationURLController extends Controller
{

    /**
     * Lists all ApplicationURL entities.
     *
     * @Route("/", name="applicationurl")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AppChangeBundle:ApplicationURL')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new ApplicationURL entity.
     *
     * @Route("/", name="applicationurl_create")
     * @Method("POST")
     * @Template("AppChangeBundle:ApplicationURL:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new ApplicationURL();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('applicationurl_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a ApplicationURL entity.
     *
     * @param ApplicationURL $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(ApplicationURL $entity)
    {
        $form = $this->createForm(new ApplicationURLType(), $entity, array(
            'action' => $this->generateUrl('applicationurl_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new ApplicationURL entity.
     *
     * @Route("/new", name="applicationurl_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new ApplicationURL();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a ApplicationURL entity.
     *
     * @Route("/{id}", name="applicationurl_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppChangeBundle:ApplicationURL')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ApplicationURL entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing ApplicationURL entity.
     *
     * @Route("/{id}/edit", name="applicationurl_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppChangeBundle:ApplicationURL')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ApplicationURL entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
    * Creates a form to edit a ApplicationURL entity.
    *
    * @param ApplicationURL $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(ApplicationURL $entity)
    {
        $form = $this->createForm(new ApplicationURLType(), $entity, array(
            'action' => $this->generateUrl('applicationurl_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing ApplicationURL entity.
     *
     * @Route("/{id}", name="applicationurl_update")
     * @Method("PUT")
     * @Template("AppChangeBundle:ApplicationURL:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppChangeBundle:ApplicationURL')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ApplicationURL entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('applicationurl_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a ApplicationURL entity.
     *
     * @Route("/{id}", name="applicationurl_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AppChangeBundle:ApplicationURL')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find ApplicationURL entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('applicationurl'));
    }

    /**
     * Creates a form to delete a ApplicationURL entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('applicationurl_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
