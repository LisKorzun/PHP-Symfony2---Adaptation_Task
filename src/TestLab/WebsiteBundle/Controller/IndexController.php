<?php

namespace TestLab\WebsiteBundle\Controller;

use TestLab\CommonBundle\Controller\AbstractController;


class IndexController extends AbstractController
{
    public function indexAction()
    {
        return $this->templating->renderResponse('TestLabWebsiteBundle:Index:index.html.twig');
    }
}
