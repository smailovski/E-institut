<?php

namespace Ei\einstitutBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Clics
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Ei\einstitutBundle\Entity\ClicsRepository")
 */
class Clics
{



    /**
    * @ORM\ManyToOne(targetEntity="NewsLetters", inversedBy="newsletter_clic")
    * @ORM\JoinColumn(name="newsletters_id", referencedColumnName="id")
    */

    private $clic_newsletter;


    public function getClicsNewsLetters() {
         return $this->clic_newsletter;
    }

    public function setClicsNewsLetters($u2) {
        $this->clic_newsletter = $u2;
    }



    /**
    * @ORM\ManyToOne(targetEntity="BaseContacts", inversedBy="base_contacts_clic")
    * @ORM\JoinColumn(name="base_contact_id", referencedColumnName="id")
    */

    private $clic_base_contacts;

    public function getClicsBaseContacts() {
         return $this->clic_base_contacts;
    }

    public function setClicsBaseContacts($u2) {
        $this->clic_base_contacts = $u2;
    }


    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_clic", type="datetime")
     */
    private $dateClic;


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
     * Set dateClic
     *
     * @param \DateTime $dateClic
     * @return Clics
     */
    public function setDateClic($dateClic)
    {
        $this->dateClic = $dateClic;
    
        return $this;
    }

    /**
     * Get dateClic
     *
     * @return \DateTime 
     */
    public function getDateClic()
    {
        return $this->dateClic;
    }
}
