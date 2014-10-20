<?php

namespace Ei\einstitutBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections;

/**
 * Tutoriels_EnLigne
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Ei\einstitutBundle\Entity\TutorielsEnLigneRepository")
 */
class TutorielsEnLigne
{





    /**
    * @ORM\ManyToOne(targetEntity="TypeTutoriel", inversedBy="tuto_en_ligne")
    * @ORM\JoinColumn(name="type_tutoriel_id", referencedColumnName="id")
    */

    protected $type_tutoriel;


    public function getTypeTutoriel() {
         return $this->type_tutoriel;
    }

    public function setTypeTutoriel($u2) {
        $this->type_tutoriel = $u2;
    }




    /**
    * @ORM\ManyToOne(targetEntity="User", inversedBy="user_tuto_en_ligne")
    * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
    */

    protected $user_tuto;


    public function getUserTuto() {
         return $this->user_tuto;
    }

    public function setUserTuto($u2) {
        $this->user_tuto = $u2;
    }



    /**
    * @ORM\ManyToMany(targetEntity="Tags", inversedBy="tag_tutoriel")
    * @ORM\JoinTable(name="Tutoriel_EnLigne_has_Tags")
    */

    protected $tutoriel_enligne_tag;


     public function setTutorielsEnLigneTags(\Doctrine\Common\Collections\ArrayCollection $values)
    {
        foreach($values as $tutoriel_enligne_tag){
            $this->addTutorielsEnLigneTags($tutoriel_enligne_tag);
        }
    }

    public function getTutorielsEnLigneTags()
    {
        return $this->tutoriel_enligne_tag;
    }

     public function addTutorielsEnLigneTags( $value)
    {
        $this->tutoriel_enligne_tag[] = $value;
    }

     public function removeTutorielsEnLigneTags($value)
    {
        $this->tutoriel_enligne_tag->removeElement($value);
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
     * @ORM\Column(name="titre", type="string", length=255)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="descriptif", type="string", length=255)
     */
    private $descriptif;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_debut", type="datetime")
     */
    private $dateDebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_fin", type="datetime")
     */
    private $dateFin;

    /**
     * @var boolean
     *
     * @ORM\Column(name="statut", type="boolean")
     */
    private $statut;


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
     * Set titre
     *
     * @param string $titre
     * @return Tutoriels_EnLigne
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;
    
        return $this;
    }

    /**
     * Get titre
     *
     * @return string 
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set descriptif
     *
     * @param string $descriptif
     * @return Tutoriels_EnLigne
     */
    public function setDescriptif($descriptif)
    {
        $this->descriptif = $descriptif;
    
        return $this;
    }

    /**
     * Get descriptif
     *
     * @return string 
     */
    public function getDescriptif()
    {
        return $this->descriptif;
    }

    /**
     * Set dateDebut
     *
     * @param \DateTime $dateFin
     * @return Tutoriels_EnLigne
     */
    public function setDateDebut($dateDebut)
    {
        $this->dateDebut = $dateDebut;
    
        return $this;
    }

    /**
     * Get dateDebut
     *
     * @return string 
     */
    public function getDateDebut()
    {
        return $this->dateDebut;
    }

    /**
     * Set dateFin
     *
     * @param \DateTime $dateFin
     * @return Tutoriels_EnLigne
     */
    public function setDateFin($dateFin)
    {
        $this->dateFin = $dateFin;
    
        return $this;
    }

    /**
     * Get dateFin
     *
     * @return \DateTime 
     */
    public function getDateFin()
    {
        return $this->dateFin;
    }

    /**
     * Set statut
     *
     * @param boolean $statut
     * @return Tutoriels_EnLigne
     */
    public function setStatut($statut)
    {
        $this->statut = $statut;
    
        return $this;
    }

    /**
     * Get statut
     *
     * @return boolean 
     */
    public function getStatut()
    {
        return $this->statut;
    }


     public function __construct()
    {

        $this->tutoriel_enligne_tag = new \Doctrine\Common\Collections\ArrayCollection();  
    }
}
