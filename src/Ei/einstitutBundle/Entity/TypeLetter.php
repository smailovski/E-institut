<?php

namespace Ei\einstitutBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypeLetter
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Ei\einstitutBundle\Entity\TypeLetterRepository")
 */
class TypeLetter
{


    


    /**
    * @ORM\OneToMany(targetEntity="NewsLetters", mappedBy="newsletter_typeletter")
    */
    protected $typeletter_newsletter;



     public function setTypeLetterNewsLetters(\Doctrine\Common\Collections\ArrayCollection $values)
    {
        foreach($values as $typeletter_newsletter){
            $this->addTypeLetterNewsLetters($typeletter_newsletter);
        }
    }

    public function getTypeLetterNewsLetters()
    {
        return $this->typeletter_newsletter;
    }

     public function addTypeLetterNewsLetters( $value)
    {
        $this->typeletter_newsletter[] = $value;
    }

     public function removeTypeLetterNewsLetters($value)
    {
        $this->typeletter_newsletter->removeElement($value);
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
     * @return TypeLetter
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

    public function __construct()
    {

        $this->typeletter_newsletter = new \Doctrine\Common\Collections\ArrayCollection(); 
         
        parent::__construct();
        // your own logic
    }
}
