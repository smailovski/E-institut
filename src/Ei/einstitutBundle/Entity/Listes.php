<?php

namespace Ei\einstitutBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Listes
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Ei\einstitutBundle\Entity\ListesRepository")
 */
class Listes
{


    



    /**
    * @ORM\OneToMany(targetEntity="BaseContacts", mappedBy="base_contact_listes")
    */
    protected $listes_base_contact;


     public function setListesBaseContacts(\Doctrine\Common\Collections\ArrayCollection $values)
    {
        foreach($values as $listes_base_contact){
            $this->addListesBaseContacts($listes_base_contact);
        }
    }

    public function getListesBaseContacts()
    {
        return $this->listes_base_contact;
    }

     public function addListesBaseContacts( $value)
    {
        $this->listes_base_contact[] = $value;
    }

     public function removeListesBaseContacts($value)
    {
        $this->listes_base_contact->removeElement($value);
    } 



     /**
    * @ORM\OneToMany(targetEntity="Envoye", mappedBy="envoye_listes")
    */
    protected $listes_envoye;


    public function setListesEnvoye(\Doctrine\Common\Collections\ArrayCollection $values)
    {
        foreach($values as $listes_envoye){
            $this->addListesBaseContacts($listes_envoye);
        }
    }

    public function getListesEnvoye()
    {
        return $this->listes_envoye;
    }

     public function addListesEnvoye( $value)
    {
        $this->listes_envoye[] = $value;
    }

     public function removeListesEnvoye($value)
    {
        $this->listes_envoye->removeElement($value);
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
     * @return Listes
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

    public function __construct()
    {

        $this->listes_base_contact = new \Doctrine\Common\Collections\ArrayCollection();
        $this->listes_envoye = new \Doctrine\Common\Collections\ArrayCollection();
         
        parent::__construct();
        // your own logic
    }
}
