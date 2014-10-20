<?php

namespace Ei\einstitutBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BaseContacts
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Ei\einstitutBundle\Entity\BaseContactsRepository")
 */
class BaseContacts
{





    /**
    * @ORM\ManyToOne(targetEntity="Listes", inversedBy="listes_base_contact")
    * @ORM\JoinColumn(name="listes_id", referencedColumnName="id")
    */

    private $base_contact_listes;

    public function getBaseContactListes() {
         return $this->base_contact_listes;
    }

    public function setBaseContactListes($u2) {
        $this->base_contact_listes = $u2;
    }


    /**
    * @ORM\OneToMany(targetEntity="Clics", mappedBy="clic_base_contacts")
    */
    private $base_contacts_clic;

    


    
    
    public function setBaseContactClics(\Doctrine\Common\Collections\ArrayCollection $values)
    {
        foreach($values as $base_contacts_clic){
            $this->addBaseContactClics($base_contacts_clic);
        }
    }

    public function getBaseContactClics()
    {
        return $this->base_contacts_clic;
    }

     public function addBaseContactClics( $value)
    {
        $this->base_contacts_clic[] = $value;
    }

     public function removeBaseContactClics($value)
    {
        $this->base_contacts_clic->removeElement($value);
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
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="pays", type="string", length=255)
     */
    private $pays;

    /**
     * @var string
     *
     * @ORM\Column(name="organisme", type="string", length=255)
     */
    private $organisme;

    /**
     * @var boolean
     *
     * @ORM\Column(name="abonne", type="boolean")
     */
    private $abonne;

    /**
     * @var boolean
     *
     * @ORM\Column(name="blacklist", type="boolean")
     */
    private $blacklist;

    /**
     * @var boolean
     *
     * @ORM\Column(name="etat", type="boolean")
     */
    private $etat;


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
     * Set email
     *
     * @param string $email
     * @return BaseContacts
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
     * Set nom
     *
     * @param string $nom
     * @return BaseContacts
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    
        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     * @return BaseContacts
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    
        return $this;
    }

    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set pays
     *
     * @param string $pays
     * @return BaseContacts
     */
    public function setPays($pays)
    {
        $this->pays = $pays;
    
        return $this;
    }

    /**
     * Get pays
     *
     * @return string 
     */
    public function getPays()
    {
        return $this->pays;
    }

    /**
     * Set organisme
     *
     * @param string $organisme
     * @return BaseContacts
     */
    public function setOrganisme($organisme)
    {
        $this->organisme = $organisme;
    
        return $this;
    }

    /**
     * Get organisme
     *
     * @return string 
     */
    public function getOrganisme()
    {
        return $this->organisme;
    }

    /**
     * Set abonne
     *
     * @param boolean $abonne
     * @return BaseContacts
     */
    public function setAbonne($abonne)
    {
        $this->abonne = $abonne;
    
        return $this;
    }

    /**
     * Get abonne
     *
     * @return boolean 
     */
    public function getAbonne()
    {
        return $this->abonne;
    }

    /**
     * Set blacklist
     *
     * @param boolean $blacklist
     * @return BaseContacts
     */
    public function setBlacklist($blacklist)
    {
        $this->blacklist = $blacklist;
    
        return $this;
    }

    /**
     * Get blacklist
     *
     * @return boolean 
     */
    public function getBlacklist()
    {
        return $this->blacklist;
    }

    /**
     * Set etat
     *
     * @param boolean $etat
     * @return BaseContacts
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;
    
        return $this;
    }

    /**
     * Get etat
     *
     * @return boolean 
     */
    public function getEtat()
    {
        return $this->etat;
    }

     public function __construct()
    {

        $this->base_contacts_clic = new \Doctrine\Common\Collections\ArrayCollection();
         
        parent::__construct();
        // your own logic
    }


}
