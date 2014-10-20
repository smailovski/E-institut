<?php

namespace Ei\einstitutBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Critere_has_preconisation
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Ei\einstitutBundle\Entity\CriterePreconisationRepository")
 */
class CriterePreconisation
{




    
 
    /**
     * @ORM\ManyToOne(targetEntity="Criteres")
     * @ORM\JoinColumn(name="criteres_id", referencedColumnName="id")
    **/
        private $criteres;

     public function getCriteres() {
         return $this->criteres;
    }

    public function setCriteres($u2) {
        $this->criteres = $u2;
    }   


    /**
     * @ORM\ManyToOne(targetEntity="Notes")
     * @ORM\JoinColumn(name="notes_id", referencedColumnName="id")
    **/
         private $notes;


    public function getNotes() {
         return $this->notes;
    }

    public function setNotes($u2) {
        $this->notes = $u2;
    } 

     
    /**
     * @ORM\ManyToOne(targetEntity="Preconisation")
     * @ORM\JoinColumn(name="preconisation_id", referencedColumnName="id")
    **/     
         private $preconisation;

    public function getPreconisation() {
         return $this->preconisation;
    }

    public function setPreconisation($u2) {
        $this->preconisation = $u2;
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
    
     public function __construct()
    {

       // $this->preconisation = new \Doctrine\Common\Collections\ArrayCollection();

     
    }
}
