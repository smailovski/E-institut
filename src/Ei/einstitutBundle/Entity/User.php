<?php
// src/Acme/UserBundle/Entity/User.php

namespace Ei\einstitutBundle\Entity;

use FOS\UserBundle\Entity\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="utilisateur")
 */
class User extends BaseUser
{

    
    




    /**
    * @ORM\OneToMany(targetEntity="CommentaireForum", mappedBy="comment_user")
    */
    protected $comentforum;

    public function setCommentaireForum(\Doctrine\Common\Collections\ArrayCollection $values)
    {
        foreach($values as $comentforum){
            $this->addCommentaireForum($comentforum);
        }
    }

    public function getCommentaireForum()
    {
        return $this->comentforum;
    }

     public function addCommentaireForum( $value)
    {
        $this->comentforum[] = $value;
    }

     public function removeCommentaireForum($value)
    {
        $this->comentforum->removeElement($value);
    } 

    /**
    * @ORM\OneToMany(targetEntity="Forum", mappedBy="forum_user")
    */
    protected $user_forum;


    public function setForum(\Doctrine\Common\Collections\ArrayCollection $values)
    {
        foreach($values as $user_forum){
            $this->addForum($user_forum);
        }
    }

    public function getForum()
    {
        return $this->user_forum;
    }

     public function addForum( $value)
    {
        $this->user_forum[] = $value;
    }

     public function removeForum($value)
    {
        $this->user_forum->removeElement($value);
    } 

    /**
    * @ORM\OneToMany(targetEntity="Contact", mappedBy="contact_user2")
    */
    protected $user_contact1;

     public function setContact1(\Doctrine\Common\Collections\ArrayCollection $values)
    {
        foreach($values as $user_contact1){
            $this->addContact1($user_contact1);
        }
    }

    public function getContact1()
    {
        return $this->user_contact1;
    }

     public function addContact1( $value)
    {
        $this->user_contact1[] = $value;
    }

     public function removeContact1($value)
    {
        $this->user_contact1->removeElement($value);
    } 

     /**
    * @ORM\OneToMany(targetEntity="Contact", mappedBy="contact_user1")
    */
    protected $user_contact;


    public function setContacts(\Doctrine\Common\Collections\ArrayCollection $values)
    {
        foreach($values as $user_contact){
            $this->addContact($user_contact);
        }
    }

    public function getContacts()
    {
        return $this->user_contact;
    }

     public function addContact( $value)
    {
        $this->user_contact[] = $value;
    }

     public function removeContact($value)
    {
        $this->user_contact->removeElement($value);
    } 


     /**
    * @ORM\OneToMany(targetEntity="Actualites", mappedBy="user")
    */
    protected $actualites;




    public function setActualites(\Doctrine\Common\Collections\ArrayCollection $values)
    {
        foreach($values as $actualite){
            $this->addActualite($actualite);
        }
    }

    public function getActualites()
    {
        return $this->actualites;
    }

     public function addActualite( $value)
    {
        $this->actualites[] = $value;
    }

     public function removeActualite($value)
    {
        $this->actualites->removeElement($value);
    } 
   





    /**
    * @ORM\OneToMany(targetEntity="Messages", mappedBy="messages_user")
    */
    protected $user_messages;


    public function setMessage(\Doctrine\Common\Collections\ArrayCollection $values)
    {
        foreach($values as $user_messages){
            $this->addMessage($user_messages);
        }
    }

    public function getMessage()
    {
        return $this->user_messages;
    }

     public function addMessage( $value)
    {
        $this->user_messages[] = $value;
    }

     public function removeMessage($value)
    {
        $this->user_messages->removeElement($value);
    } 


    /**
    * @ORM\OneToMany(targetEntity="Eticket", mappedBy="eticket_user")
    */
    protected $user_eticket;


    public function setEtickets(\Doctrine\Common\Collections\ArrayCollection $values)
    {
        foreach($values as $user_eticket){
            $this->addEticket($user_eticket);
        }
    }

    public function getEtickets()
    {
        return $this->user_eticket;
    }

     public function addEticket( $value)
    {
        $this->user_eticket[] = $value;
    }

     public function removeEticket($value)
    {
        $this->user_eticket->removeElement($value);
    } 



    /**
    * @ORM\OneToMany(targetEntity="Cercles", mappedBy="cercles_user")
    */
    protected $user_cercles;


     public function setCercles(\Doctrine\Common\Collections\ArrayCollection $values)
    {
        foreach($values as $user_cercles){
            $this->addCercles($user_cercles);
        }
    }

    public function getCercles()
    {
        return $this->user_cercles;
    }

     public function addCercles( $value)
    {
        $this->user_cercles[] = $value;
    }

     public function removeCercles($value)
    {
        $this->user_cercles->removeElement($value);
    } 



    /**
    * @ORM\ManyToMany(targetEntity="Cercles", inversedBy="users")
    * @ORM\JoinTable(name="Partage_Utilisateurs_Cercles")
    */

    protected $cercle;


    
    public function setCercle(\Doctrine\Common\Collections\ArrayCollection $values)
    {
        foreach($values as $cercle){
            $this->addCercle($cercle);
        }
    }

    public function getCercle()
    {
        return $this->cercle;
    }

     public function addCercle($value)
    {
        $this->cercle[] = $value;
    }

     public function removeCercle($value)
    {
        $this->cercle->removeElement($value);
    } 



    /**
    * @ORM\ManyToMany(targetEntity="Messages", inversedBy="users")
    * @ORM\JoinTable(name="To_Users")
    */

    protected $message;


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
    * @ORM\ManyToMany(targetEntity="Evenements", inversedBy="users")
    * @ORM\JoinTable(name="Partage_evenements_Utilisateurs")
    */

    protected $evenements;


    public function setEvenements(\Doctrine\Common\Collections\ArrayCollection $values)
    {
        foreach($values as $evenements){
            $this->addEvenement($evenements);
        }
    }

    public function getEvenements()
    {
        return $this->evenements;
    }

     public function addEvenement( $value)
    {
        $this->evenements[] = $value;
    }

     public function removeEvenements($value)
    {
        $this->evenements->removeElement($value);
    } 


    /**
    * @ORM\OneToMany(targetEntity="Evenements", mappedBy="user")
    */
    private $evenements_user;


    public function setEvenementsUser(\Doctrine\Common\Collections\ArrayCollection $values)
    {
        foreach($values as $evenements_user){
            $this->addEvenementsUser($evenements_user);
        }
    }

    public function getEvenementsUser()
    {
        return $this->evenements_user;
    }

     public function addEvenementsUser($value)
    {
        $this->evenements_user[] = $value;
    }

     public function removeEvenementsUser($value)
    {
        $this->evenements_user->removeElement($value);
    } 




    /**
    * @ORM\OneToMany(targetEntity="TutorielsEnLigne", mappedBy="user_tuto")
    */
    protected $user_tuto_en_ligne;

    public function setTutorielsEnLigne(\Doctrine\Common\Collections\ArrayCollection $values)
    {
        foreach($values as $user_tuto_en_ligne){
            $this->addEvenementsUser($user_tuto_en_ligne);
        }
    }

    public function getTutorielsEnLigne()
    {
        return $this->user_tuto_en_ligne;
    }

     public function addTutorielsEnLigne($value)
    {
        $this->user_tuto_en_ligne[] = $value;
    }

     public function removeTutorielsEnLigne($value)
    {
        $this->user_tuto_en_ligne->removeElement($value);
    } 


    /**
    * @ORM\OneToMany(targetEntity="Preconisation", mappedBy="user_preconisation")
    */
    protected $preconisation;

    



    
    /**
    * @ORM\ManyToMany(targetEntity="Fiche", inversedBy="users")
    * @ORM\JoinTable(name="Favoris")
    */

    protected $fiche;


    public function setFiche(\Doctrine\Common\Collections\ArrayCollection $values)
    {
        foreach($values as $fiche){
            $this->addFiche($fiche);
        }
    }

    public function getFiche()
    {
        return $this->fiche;
    }

     public function addFiche( $value)
    {
        $this->fiche[] = $value;
    }

     public function removeFiche($value)
    {
        $this->fiche->removeElement($value);
    } 
    
   

    /**
    * @ORM\OneToMany(targetEntity="Fiche", mappedBy="user")
    */
    protected $fiches;
    
    

    public function setFiches(\Doctrine\Common\Collections\ArrayCollection $values)
    {
        foreach($values as $fiches){
            $this->addFiches($fiches);
        }
    }

    public function getFiches()
    {
        return $this->fiches;
    }

     public function addFiches( $value)
    {
        $this->fiches[] = $value;
    }

     public function removeFiches($value)
    {
        $this->fiches->removeElement($value);
    } 



    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
     /**
     * @var string
     *
     * @ORM\Column(name="Avatar", type="string", length=255, nullable=true)
     */
    private $avatar;
    
    /**
     * @var string
     *
     * @ORM\Column(name="Nom", type="string", length=255, nullable=true)
     */
    private $nom;
    
    /**
     * @var string
     *
     * @ORM\Column(name="Prenom", type="string", length=255, nullable=true)
     */
    private $prenom;
    
    
    
    /**
     * @var string
     *
     * @ORM\Column(name="Sexe", type="string", length=255, nullable=true)
     */
    private $sexe;

    /**
     * @var string
     *
     * @ORM\Column(name="Tel", type="string", length=255, nullable=true)
     */
    private $tel;

    /**
     * @var string
     *
     * @ORM\Column(name="Pays", type="string", length=255, nullable=true)
     */
    private $pays;

    /**
     * @var string
     *
     * @ORM\Column(name="Ville", type="string", length=255, nullable=true)
     */
    private $ville;

    /**
     * @var string
     *
     * @ORM\Column(name="Adresse", type="string", length=300 , nullable=true)
     */
    private $adresse;


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
     * Set avatar
     *
     * @param string $avatar
     * @return Ut
     */
    public function setAvatar($avatar)
    {
        $this->avatar = $avatar;
    
        return $this;
    }

    /**
     * Get avatar
     *
     * @return string 
     */
    public function getAvatar()
    {
        return $this->avatar;
    }
    
    /**
     * Set nom
     *
     * @param string $nom
     * @return Ut
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
     * Set prenom
     *
     * @param string $prenom
     * @return Ut
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    
        return $this;
    }

    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom()
    {
        return $this->prenom;
    }
    
    

    /**
     * Set sexe
     *
     * @param string $sexe
     * @return Ut
     */
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;
    
        return $this;
    }

    /**
     * Get sexe
     *
     * @return string 
     */
    public function getSexe()
    {
        return $this->sexe;
    }

    /**
     * Set tel
     *
     * @param string $tel
     * @return Ut
     */
    public function setTel($tel)
    {
        $this->tel = $tel;
    
        return $this;
    }

    /**
     * Get tel
     *
     * @return string 
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * Set pays
     *
     * @param string $pays
     * @return Ut
     */
    public function setPays($pays)
    {
        $this->pays = $pays;
    
        return $this;
    }

    /**
     * Get pays
     *
     * @return string 
     */
    public function getPays()
    {
        return $this->pays;
    }

    /**
     * Set ville
     *
     * @param string $ville
     * @return Ut
     */
    public function setVille($ville)
    {
        $this->ville = $ville;
    
        return $this;
    }

    /**
     * Get ville
     *
     * @return string 
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     * @return Ut
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    
        return $this;
    }

    /**
     * Get adresse
     *
     * @return string 
     */
    public function getAdresse()
    {
        return $this->adresse;
    }
    
    
    
    

    

    
    
    


    public function __construct()
    {

        $this->evenements = new \Doctrine\Common\Collections\ArrayCollection();
        $this->message = new \Doctrine\Common\Collections\ArrayCollection();
        $this->cercle = new \Doctrine\Common\Collections\ArrayCollection();
        $this->fiche = new \Doctrine\Common\Collections\ArrayCollection();
        $this->comentforum = new \Doctrine\Common\Collections\ArrayCollection();
        $this->user_forum = new \Doctrine\Common\Collections\ArrayCollection();
        $this->user_contact1 = new \Doctrine\Common\Collections\ArrayCollection();
        $this->user_contact = new \Doctrine\Common\Collections\ArrayCollection();
        $this->actualites = new \Doctrine\Common\Collections\ArrayCollection();
        $this->user_messages = new \Doctrine\Common\Collections\ArrayCollection();
        $this->user_eticket = new \Doctrine\Common\Collections\ArrayCollection();
        $this->user_cercles = new \Doctrine\Common\Collections\ArrayCollection(); 

        parent::__construct();
        // your own logic
    }


    
}