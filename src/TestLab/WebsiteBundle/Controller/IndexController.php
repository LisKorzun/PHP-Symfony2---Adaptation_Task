<?php

namespace TestLab\WebsiteBundle\Controller;

use TestLab\CommonBundle\Controller\AbstractController;
use Symfony\Bundle\FrameworkBundle\Templating\EngineInterface;

class IndexController extends AbstractController
{
    private $templating;

    public function __construct(EngineInterface $templating)
    {
        $this->templating = $templating;
    }
    public function indexAction()
    {
        return $this->templating->renderResponse('TestLabWebsiteBundle:Index:index.html.twig');
    }
}
