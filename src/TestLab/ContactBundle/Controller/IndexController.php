<?php

namespace TestLab\ContactBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use TestLab\CommonBundle\Controller\AbstractController;

/**
 * @Route(service="testlab.contact.controller.index")
 */
class IndexController extends AbstractController
{
    /**
     * @Route("/create", name="test_lab_contact_createpage")
     * @Template
     */
    public function createAction()
    {
        return [];
    }

    /**
     * @Route("/view", name="test_lab_contact_viewpage")
     * @Template
     */
    public function viewAction()
    {
        return [];
    }
}
