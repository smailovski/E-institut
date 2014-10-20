<?php

namespace Ei\einstitutBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Type_Tutoriel
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Ei\einstitutBundle\Entity\TypeTutorielRepository")
 */
class TypeTutoriel
{





     /**
    * @ORM\OneToMany(targetEntity="TutorielsEnLigne", mappedBy="type_tutoriel")
    */
    protected $tuto_en_ligne;


     public function setTutoEnLigne(\Doctrine\Common\Collections\ArrayCollection $values)
    {
        foreach($values as $tuto_en_ligne){
            $this->addTutoEnLigne($tuto_en_ligne);
        }
    }

    public function getTutoEnLigne()
    {
        return $this->tuto_en_ligne;
    }

     public function addTutoEnLigne( $value)
    {
        $this->tuto_en_ligne[] = $value;
    }

     public function removeTutoEnLigne($value)
    {
        $this->tuto_en_ligne->removeElement($value);
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
     * @return Type_Tutoriel
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
     * @return Type_Tutoriel
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

        $this->tuto_en_ligne = new \Doctrine\Common\Collections\ArrayCollection(); 
         
        parent::__construct();
        // your own logic
    }
}
