<?php

namespace Ei\einstitutBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Preconisation
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Ei\einstitutBundle\Entity\PreconisationRepository")
 */
class Preconisation
{




    /**
    * @ORM\ManyToOne(targetEntity="Fiche", inversedBy="preconisation")
    * @ORM\JoinColumn(name="fiche_id", referencedColumnName="id")
    */

    protected $fiche_preconisation;



    public function getFichePreconisation() {
         return $this->fiche_preconisation;
    }

    public function setFichePreconisation($u2) {
        $this->fiche_preconisation = $u2;
    }



    /**
    * @ORM\ManyToOne(targetEntity="User", inversedBy="preconisation")
    * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
    */

    protected $user_preconisation;

    public function getUserPreconisation() {
         return $this->user_preconisation;
    }

    public function setUserPreconisation($u2) {
        $this->user_preconisation = $u2;
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
     * Set date
     *
     * @param \DateTime $date
     * @return Preconisation
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
