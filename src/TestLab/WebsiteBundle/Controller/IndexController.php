<?php

namespace TestLab\WebsiteBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use TestLab\CommonBundle\Controller\AbstractController;
use TestLab\WebsiteBundle\Entity\Contact;

/**
 * @Route(service="testlab.website.controller.index")
 */
class IndexController extends AbstractController
{
    /**
     * @Route("/", name="test_lab_website_createpage")
     * @Template
     */
    public function createAction(Request $request)
    {
        $entity = new Contact();
        $form = $this->createForm('website_contact', $entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $this->getContactRepository()->save($entity);
            return $this->redirect('view');
        }
        return ['form' => $form->createView()];
    }

    /**
     * @Route("/view", name="test_lab_website_viewpage")
     * @Template
     */
    public function viewAction(Request $request)
    {
        $session = $request->getSession();
        $data = $session->all();
        return ['data' => $data];
    }
}
