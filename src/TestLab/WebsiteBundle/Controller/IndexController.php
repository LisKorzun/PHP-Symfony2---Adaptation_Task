<?php

namespace TestLab\WebsiteBundle\Controller;

use TestLab\CommonBundle\Controller\AbstractController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * @Route(service="testlab.website.controller.index")
 */
class IndexController extends AbstractController
{
    /**
     * @Route("/", name="test_lab_website_homepage")
     */
    public function indexAction()
    {
        return $this->getTemplate()->renderResponse('TestLabWebsiteBundle:Index:index.html.twig');
    }
}
