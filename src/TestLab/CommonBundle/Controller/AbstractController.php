<?php

namespace TestLab\CommonBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Templating\EngineInterface;

/**
 * @Route(service="testlab.common.controller.abstract")
 */
abstract class AbstractController
{
    /**
     * @var EngineInterface
     */
    private  $templating;

    /**
     * Set templating
     * @param EngineInterface $templating
     */
    public function setTemplate(EngineInterface $templating)
    {
        $this->templating = $templating;
    }

    /**
     * Get templating
     * @return EngineInterface
     */
    public function getTemplate()
    {
        return $this->templating;
    }
}
