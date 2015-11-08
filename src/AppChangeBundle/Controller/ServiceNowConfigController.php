<?php

namespace AppChangeBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use AppChangeBundle\Entity\ServiceNowConfig;
use AppChangeBundle\Form\ServiceNowConfigType;

/**
 * ServiceNowConfig controller.
 *
 * @Route("/servicenowconfig")
 */
class ServiceNowConfigController extends Controller
{

    /**
     * Lists all ServiceNowConfig entities.
     *
     * @Route("/", name="servicenowconfig")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AppChangeBundle:ServiceNowConfig')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new ServiceNowConfig entity.
     *
     * @Route("/", name="servicenowconfig_create")
     * @Method("POST")
     * @Template("AppChangeBundle:ServiceNowConfig:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new ServiceNowConfig();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('servicenowconfig_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a ServiceNowConfig entity.
     *
     * @param ServiceNowConfig $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(ServiceNowConfig $entity)
    {
        $form = $this->createForm(new ServiceNowConfigType(), $entity, array(
            'action' => $this->generateUrl('servicenowconfig_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new ServiceNowConfig entity.
     *
     * @Route("/new", name="servicenowconfig_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new ServiceNowConfig();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a ServiceNowConfig entity.
     *
     * @Route("/{id}", name="servicenowconfig_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppChangeBundle:ServiceNowConfig')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ServiceNowConfig entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing ServiceNowConfig entity.
     *
     * @Route("/{id}/edit", name="servicenowconfig_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppChangeBundle:ServiceNowConfig')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ServiceNowConfig entity.');
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
    * Creates a form to edit a ServiceNowConfig entity.
    *
    * @param ServiceNowConfig $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(ServiceNowConfig $entity)
    {
        $form = $this->createForm(new ServiceNowConfigType(), $entity, array(
            'action' => $this->generateUrl('servicenowconfig_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing ServiceNowConfig entity.
     *
     * @Route("/{id}", name="servicenowconfig_update")
     * @Method("PUT")
     * @Template("AppChangeBundle:ServiceNowConfig:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppChangeBundle:ServiceNowConfig')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ServiceNowConfig entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('servicenowconfig_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a ServiceNowConfig entity.
     *
     * @Route("/{id}", name="servicenowconfig_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AppChangeBundle:ServiceNowConfig')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find ServiceNowConfig entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('servicenowconfig'));
    }

    /**
     * Creates a form to delete a ServiceNowConfig entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('servicenowconfig_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
