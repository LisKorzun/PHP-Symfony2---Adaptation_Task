<?php

namespace TestLab\WebsiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Contact
 * @ORM\Entity(repositoryClass="TestLab\WebsiteBundle\Repository\ContactRepository")
 * @ORM\Table()
 */
class Contact
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=50)
     * @Assert\NotBlank(message = "Name is required")
     * @Assert\Length(
     *      min = 3,
     *      max = 50
     * )
     * @Assert\Regex(
     *     pattern="/^[a-zA-Z0-9_]+$/i",
     *     message="Your name can contain numbers, letters and _"
     * )
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=50)
     * @Assert\NotBlank(message = "Email is required")
     * @Assert\Email(
     *     message = "The email '{{ value }}' is not a valid email.",
     *     checkMX = true
     * )
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="subject", type="string", length=200)
     * @Assert\NotBlank(message = "Subject is required")
     * @Assert\Length(
     *      min = 3,
     *      max = 200
     * )
     */
    private $subject;

    /**
     * @var string
     *
     * @ORM\Column(name="body", type="text", length=1000)
     * @Assert\NotBlank(message = "Body is required")
     * @Assert\Length(
     *      min = 3,
     *      max = 1000
     * )
     */
    private $body;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Contact
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Contact
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set subject
     *
     * @param string $subject
     * @return Contact
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;

        return $this;
    }

    /**
     * Get subject
     *
     * @return string 
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Set body
     *
     * @param string $body
     * @return Contact
     */
    public function setBody($body)
    {
        $this->body = $body;

        return $this;
    }

    /**
     * Get body
     *
     * @return string 
     */
    public function getBody()
    {
        return $this->body;
    }
}
