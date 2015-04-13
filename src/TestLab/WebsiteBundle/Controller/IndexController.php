<?php

namespace TestLab\WebsiteBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use TestLab\CommonBundle\Controller\AbstractController;
use TestLab\WebsiteBundle\Entity\Contact;
use TestLab\WebsiteBundle\Repository\ContactRepository;

/**
 * @Route(service="testlab.website.controller.index")
 */
class IndexController extends AbstractController
{
    /**
     * @var ContactRepository
     */
    private $contactRepository;

    /**
     * Set contactRepository
     * @param ContactRepository $contactRepository
     */
    public function setContactRepository(ContactRepository $contactRepository)
    {
        $this->contactRepository = $contactRepository;
    }

    /**
     * @Route("/", name="test_lab_website_createpage")
     * @Template
     */
    public function createAction(Request $request)
    {
        $entity = new Contact();
        $form = $this->createForm('website_contact', $entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $this->contactRepository->save($entity);
            return $this->redirect('view');
        }
        return ['form' => $form->createView()];
    }

    /**
     * @Route("/view", name="test_lab_website_viewpage")
     * @Template
     */
    public function viewAction()
    {
        $data = $this->contactRepository->findAllContactsOrderedByIdDesc();
        return ['data' => $data];
    }
}
