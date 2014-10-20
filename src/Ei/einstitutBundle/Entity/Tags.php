<?php

namespace Ei\einstitutBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * Tags
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Ei\einstitutBundle\Entity\TagsRepository")
 */
class Tags
{



    /**
    * @ORM\ManyToMany(targetEntity="Fiche", mappedBy="fiche_tags")
    */
    private $tag;

     public function setTag(\Doctrine\Common\Collections\ArrayCollection $values)
    {
        foreach($values as $tag){
            $this->addTag($tag);
        }
    }

    public function getTag()
    {
        return $this->tag;
    }

     public function addTag( $value)
    {
        $this->tag[] = $value;
    }

     public function removeTag($value)
    {
        $this->tag->removeElement($value);
    } 

    /**
    * @ORM\ManyToMany(targetEntity="TutorielsEnLigne", mappedBy="tutoriel_enligne_tag")
    */
    private $tag_tutoriel;


     public function setTagTutoriel(\Doctrine\Common\Collections\ArrayCollection $values)
    {
        foreach($values as $tag_tutoriel){
            $this->addTagTutoriel($tag_tutoriel);
        }
    }

    public function getTagTutoriel()
    {
        return $this->tag_tutoriel;
    }

     public function addTagTutoriel( $value)
    {
        $this->tag_tutoriel[] = $value;
    }

     public function removeTagTutoriel($value)
    {
        $this->tag_tutoriel->removeElement($value);
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
     * Set libelle
     *
     * @param string $libelle
     * @return Tags
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
     * Set etat
     *
     * @param boolean $etat
     * @return Tags
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
}
