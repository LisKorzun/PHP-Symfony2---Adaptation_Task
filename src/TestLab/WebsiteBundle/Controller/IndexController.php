<?php

namespace TestLab\WebsiteBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use TestLab\CommonBundle\Controller\AbstractController;

/**
 * @Route(service="testlab.website.controller.index")
 */
class IndexController extends AbstractController
{
    /**
     * @Route("/", name="test_lab_website_homepage")
     * @Template("TestLabWebsiteBundle:Index:index.html.twig")
     */
    public function indexAction()
    {
        return array();
    }
}
