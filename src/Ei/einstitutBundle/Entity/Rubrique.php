<?php

namespace Ei\einstitutBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Rubrique
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Ei\einstitutBundle\Entity\RubriqueRepository")
 */
class Rubrique
{


    



      /**
    * @ORM\OneToMany(targetEntity="Forum", mappedBy="forum_rubrique")
    */
    protected $rubrique_forum;

    
     public function setRubriqueForum(\Doctrine\Common\Collections\ArrayCollection $values)
    {
        foreach($values as $rubrique_forum){
            $this->addRubriqueForum($rubrique_forum);
        }
    }

    public function getRubriqueForum()
    {
        return $this->rubrique_forum;
    }

     public function addRubriqueForum( $value)
    {
        $this->rubrique_forum[] = $value;
    }

     public function removeRubriqueForum($value)
    {
        $this->rubrique_forum->removeElement($value);
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
     * Set libelle
     *
     * @param string $libelle
     * @return Rubrique
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
     * @return Rubrique
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

        $this->rubrique_forum = new \Doctrine\Common\Collections\ArrayCollection();
         
        parent::__construct();
        // your own logic
    }
}
