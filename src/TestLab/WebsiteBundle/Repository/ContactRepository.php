<?php

namespace TestLab\WebsiteBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Mapping as ORM;
use TestLab\WebsiteBundle\Entity\Contact as Contact;

class ContactRepository extends EntityRepository
{
    /**
     * Return all from Contact-table ordered by Id DESC
     * @return array
     */
    public function findAllContactsOrderedByIdDesc()
    {
        return $this->getEntityManager()
            ->createQuery('SELECT contact FROM TestLabWebsiteBundle:Contact contact ORDER BY contact.id DESC ')
            ->getResult();
    }

    /**
     * Save Contact object
     * @param $contact
     */
    public function save(Contact $contact)
    {
        $em = $this->getEntityManager();
        $em->persist($contact);
        $em->flush();
    }
}
