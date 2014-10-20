<?php

namespace Ei\einstitutBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RubriquesPage
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Ei\einstitutBundle\Entity\RubriquesPageRepository")
 */
class RubriquesPage
{



    /**
    * @ORM\OneToMany(targetEntity="Pages", mappedBy="rubriques_page")
    */
    private $pages;


    public function setPages(\Doctrine\Common\Collections\ArrayCollection $values)
    {
        foreach($values as $pages){
            $this->addPages($pages);
        }
    }

    public function getPages()
    {
        return $this->pages;
    }

     public function addPages($value)
    {
        $this->pages[] = $value;
    }

     public function removePages($value)
    {
        $this->pages->removeElement($value);
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
     * @return RubriquesPage
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
}
