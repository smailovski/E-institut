<?php

namespace Ei\einstitutBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Roles
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Ei\einstitutBundle\Entity\RolesRepository")
 */
class Roles
{



   



    /**
    * @ORM\OneToMany(targetEntity="Privileges", mappedBy="privileges_roles")
    */
    protected $roles_privileges;


     public function setRolesPrivileges(\Doctrine\Common\Collections\ArrayCollection $values)
    {
        foreach($values as $roles_privileges){
            $this->addRolesPrivileges($roles_privileges);
        }
    }

    public function getRolesPrivileges()
    {
        return $this->roles_privileges;
    }

     public function addRolesPrivileges( $value)
    {
        $this->roles_privileges[] = $value;
    }

     public function removeRolesPrivileges($value)
    {
        $this->roles_privileges->removeElement($value);
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
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=255)
     */
    private $libelle;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;


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
     * Set nom
     *
     * @param string $nom
     * @return Roles
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
     * Set libelle
     *
     * @param string $libelle
     * @return Roles
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;
    
        return $this;
    }

    /**
     * Get libelle
     *
     * @return string 
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Roles
     */
    public function setDescription($description)
    {
        $this->description = $description;
    
        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

     public function __construct()
    {

        $this->roles_privileges = new \Doctrine\Common\Collections\ArrayCollection();
         
        parent::__construct();
        // your own logic
    }
}
