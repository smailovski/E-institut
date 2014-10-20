<?php

namespace Ei\einstitutBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Evenements
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Ei\einstitutBundle\Entity\EvenementsRepository")
 */
class Evenements
{



    /**
    * @ORM\ManyToMany(targetEntity="User", mappedBy="evenements")
    */
    private $users;



    public function setUsers(\Doctrine\Common\Collections\ArrayCollection $values)
    {
        foreach($values as $users){
            $this->addUsers($users);
        }
    }

    public function getUsers()
    {
        return $this->users;
    }

     public function addUsers( $value)
    {
        $this->users[] = $value;
    }

     public function removeUsers($value)
    {
        $this->users->removeElement($value);
    } 


    /**
    * @ORM\ManyToOne(targetEntity="User", inversedBy="evenements_user")
    * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
    */

    protected $user;

    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set user
     *
     * @param User $value
     */
    public function setUser($value)
    {
        $this->user = $value;
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
     * @var \DateTime
     *
     * @ORM\Column(name="alarme", type="time")
     */
    private $alarme;

    /**
     * @var string
     *
     * @ORM\Column(name="notes", type="string", length=255)
     */
    private $notes;

    /**
     * @var string
     *
     * @ORM\Column(name="localisation", type="string", length=255)
     */
    private $localisation;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=255)
     */
    private $url;


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
     * @return Evenements
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
     * Set dateDebut
     *
     * @param \DateTime $dateDebut
     * @return Evenements
     */
    public function setDateDebut($dateDebut)
    {
        $this->dateDebut = $dateDebut;
    
        return $this;
    }

    /**
     * Get dateDebut
     *
     * @return \DateTime 
     */
    public function getDateDebut()
    {
        return $this->dateDebut;
    }

    /**
     * Set dateFin
     *
     * @param \DateTime $dateFin
     * @return Evenements
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
     * Set alarme
     *
     * @param \DateTime $alarme
     * @return Evenements
     */
    public function setAlarme($alarme)
    {
        $this->alarme = $alarme;
    
        return $this;
    }

    /**
     * Get alarme
     *
     * @return \DateTime 
     */
    public function getAlarme()
    {
        return $this->alarme;
    }

    /**
     * Set notes
     *
     * @param string $notes
     * @return Evenements
     */
    public function setNotes($notes)
    {
        $this->notes = $notes;
    
        return $this;
    }

    /**
     * Get notes
     *
     * @return string 
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * Set localisation
     *
     * @param string $localisation
     * @return Evenements
     */
    public function setLocalisation($localisation)
    {
        $this->localisation = $localisation;
    
        return $this;
    }

    /**
     * Get localisation
     *
     * @return string 
     */
    public function getLocalisation()
    {
        return $this->localisation;
    }

    /**
     * Set url
     *
     * @param string $url
     * @return Evenements
     */
    public function setUrl($url)
    {
        $this->url = $url;
    
        return $this;
    }

    /**
     * Get url
     *
     * @return string 
     */
    public function getUrl()
    {
        return $this->url;
    }


    public function __construct()
    {

        $this->users = new \Doctrine\Common\Collections\ArrayCollection();
        

        parent::__construct();
        // your own logic
    }
}
