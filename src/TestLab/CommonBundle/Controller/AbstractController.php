<?php

namespace TestLab\CommonBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Templating\EngineInterface;

/**
 * @Route(service="testlab.common.controller.abstract")
 */
abstract class AbstractController
{
    protected $templating;

    public function __construct(EngineInterface $templating)
    {
        $this->templating = $templating;
    }
}

