<?php

namespace TestLab\CommonBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Templating\EngineInterface;
use Symfony\Component\Form\FormFactory;

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
     * @var FormFactory
     */
    private $formFactory;

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

    /**
     * Set formFactory
     * @param FormFactory $formFactory
     */
    public function setFormFactory(FormFactory $formFactory)
    {
        $this->formFactory = $formFactory;
    }

    /**
     * Get formFactory
     * @return FormFactory
     */
    public function getFormFactory()
    {
        return $this->formFactory;
    }
}
