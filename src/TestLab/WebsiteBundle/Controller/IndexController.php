<?php

namespace TestLab\WebsiteBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use TestLab\CommonBundle\Controller\AbstractController;

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
        $form = $this->getFormFactory()->create('website_contact');
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();
            $session = $request->getSession();
            foreach($data as $key => $value){
                $session->set($key, $value);
            }
            return new RedirectResponse('view');
        }
        return ['form' => $form->createView()];
    }

    /**
     * @Route("/view", name="test_lab_website_viewpage")
     * @Template
     */
    public function viewAction()
    {
        return [];
    }
}
