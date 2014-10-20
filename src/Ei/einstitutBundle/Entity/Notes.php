<?php

namespace Ei\einstitutBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Notes
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Ei\einstitutBundle\Entity\NotesRepository")
 */
class Notes
{





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
     * @return Notes
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
     * @var integer
     *
     * @ORM\Column(name="annotation", type="integer")
     */
    private $annotation;
    
    /**
     * Get annotation
     *
     * @return integer 
     */
    public function getAnnotation()
    {
        return $this->annotation;
    }
     /**
     * Set annotation
     *
     * @param integer $value
     * @return Notes
     */
    public function setAnnotation($value)
    {
        $this->annotation = $value;
    
        return $this;
    }
}
