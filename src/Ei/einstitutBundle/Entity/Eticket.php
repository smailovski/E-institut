<?php

namespace Ei\einstitutBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Eticket
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Ei\einstitutBundle\Entity\EticketRepository")
 */
class Eticket
{



    /**
    * @ORM\ManyToOne(targetEntity="ObjetEticket", inversedBy="objet_eticket")
    * @ORM\JoinColumn(name="objet_eticket_id", referencedColumnName="id")
    */

    protected $eticket_objet;


    public function getEticketObjet() {
         return $this->eticket_objet;
    }

    public function setEticketObjet($u2) {
        $this->eticket_objet = $u2;
    }


    /**
    * @ORM\ManyToOne(targetEntity="User", inversedBy="user_eticket")
    * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
    */

    protected $eticket_user;

    public function getEticketUser() {
         return $this->eticket_user;
    }

    public function setEticketUser($u2) {
        $this->eticket_user = $u2;
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
     * @var string
     *
     * @ORM\Column(name="numero_ticket", type="string", length=255)
     */
    private $numeroTicket;

    /**
     * @var string
     *
     * @ORM\Column(name="resume", type="string", length=255)
     */
    private $resume;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;


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
     * Set numeroTicket
     *
     * @param string $numeroTicket
     * @return Eticket
     */
    public function setNumeroTicket($numeroTicket)
    {
        $this->numeroTicket = $numeroTicket;
    
        return $this;
    }

    /**
     * Get numeroTicket
     *
     * @return string 
     */
    public function getNumeroTicket()
    {
        return $this->numeroTicket;
    }

    /**
     * Set resume
     *
     * @param string $resume
     * @return Eticket
     */
    public function setResume($resume)
    {
        $this->resume = $resume;
    
        return $this;
    }

    /**
     * Get resume
     *
     * @return string 
     */
    public function getResume()
    {
        return $this->resume;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Eticket
     */
    public function setDate($date)
    {
        $this->date = $date;
    
        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }
}
