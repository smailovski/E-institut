<?php

namespace Ei\einstitutBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ObjetEticket
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Ei\einstitutBundle\Entity\ObjetEticketRepository")
 */
class ObjetEticket
{



    


    /**
    * @ORM\OneToMany(targetEntity="Eticket", mappedBy="eticket_objet")
    */
    protected $objet_eticket;

     public function setObjetEticket(\Doctrine\Common\Collections\ArrayCollection $values)
    {
        foreach($values as $objet_eticket){
            $this->addObjetEticket($objet_eticket);
        }
    }

    public function getObjetEticket()
    {
        return $this->objet_eticket;
    }

     public function addObjetEticket( $value)
    {
        $this->objet_eticket[] = $value;
    }

     public function removeObjetEticket($value)
    {
        $this->objet_eticket->removeElement($value);
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
     * @ORM\Column(name="objet", type="string", length=255)
     */
    private $objet;

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
     * Set objet
     *
     * @param string $objet
     * @return ObjetEticket
     */
    public function setObjet($objet)
    {
        $this->objet = $objet;
    
        return $this;
    }

    /**
     * Get objet
     *
     * @return string 
     */
    public function getObjet()
    {
        return $this->objet;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return ObjetEticket
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

        $this->objet_eticket = new \Doctrine\Common\Collections\ArrayCollection(); 
         
        parent::__construct();
        // your own logic
    }
}
