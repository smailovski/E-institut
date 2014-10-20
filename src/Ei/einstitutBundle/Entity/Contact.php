<?php

namespace Ei\einstitutBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contact
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Ei\einstitutBundle\Entity\ContactRepository")
 */
class Contact
{

    /**
    * @ORM\ManyToOne(targetEntity="User", inversedBy="user_contact1")
    * @ORM\JoinColumn(name="child_user_id", referencedColumnName="id")
    */

    protected $contact_user2;


    public function getContact_user2() {
         return $this->contact_user2;
    }

    public function setContact_user2($u2) {
        $this->contact_user2 = $u2;
    }


    /**
    * @ORM\ManyToOne(targetEntity="User", inversedBy="user_contact")
    * @ORM\JoinColumn(name="parent_user_id", referencedColumnName="id")
    */

    protected $contact_user1;

    
    
    
    
    public function getContact_user1() {
         return $this->contact_user1;
    }

    public function setContact_user1($u1) {
        $this->contact_user1 = $u1;
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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}
