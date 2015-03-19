<?php

namespace TestLab\CommonBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Templating\EngineInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
/**
 * @Route(service="testlab.common.controller.abstract")
 */
abstract class AbstractController
{
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
