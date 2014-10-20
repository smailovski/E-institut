<?php

namespace Ei\einstitutBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cercles
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Ei\einstitutBundle\Entity\CerclesRepository")
 */
class Cercles
{



    /**
    * @ORM\ManyToOne(targetEntity="User", inversedBy="user_cercles")
    * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
    */

    private $cercles_user;


    public function getCerclesUser() {
         return $this->cercles_user;
    }

    public function setCerclesUser($u2) {
        $this->cercles_user = $u2;
    }


    /**
    * @ORM\ManyToMany(targetEntity="User", mappedBy="cercle")
    */
    private $users;
    
     public function setUser(\Doctrine\Common\Collections\ArrayCollection $values)
    {
        foreach($values as $users){
            $this->addUser($users);
        }
    }

    public function getUser()
    {
        return $this->users;
    }

     public function addUser( $value)
    {
        $this->users[] = $value;
    }

     public function removeUser($value)
    {
        $this->users->removeElement($value);
    } 


    /**
    * @ORM\ManyToMany(targetEntity="Messages", inversedBy="cercle")
    * @ORM\JoinTable(name="To_Cercles")
    */

    private $message;
    
    
    
     public function setMessages(\Doctrine\Common\Collections\ArrayCollection $values)
    {
        foreach($values as $message){
            $this->addMessages($message);
        }
    }

    public function getMessages()
    {
        return $this->message;
    }

     public function addMessages( $value)
    {
        $this->message[] = $value;
    }

     public function removeMessages($value)
    {
        $this->message->removeElement($value);
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
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="visibilite", type="integer")
     */
    private $visibilite;


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
     * @return Cercles
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
     * Set description
     *
     * @param string $description
     * @return Cercles
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

    /**
     * Set visibilite
     *
     * @param integer $visibilite
     * @return Cercles
     */
    public function setVisibilite($visibilite)
    {
        $this->visibilite = $visibilite;
    
        return $this;
    }

    /**
     * Get visibilite
     *
     * @return integer 
     */
    public function getVisibilite()
    {
        return $this->visibilite;
    }
}
