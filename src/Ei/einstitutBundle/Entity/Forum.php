<?php

namespace Ei\einstitutBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Forum
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Ei\einstitutBundle\Entity\ForumRepository")
 */
class Forum
{

     


      /**
    * @ORM\OneToMany(targetEntity="CommentaireForum", mappedBy="forum_comment")
    */
    protected $comment_forum;


     public function setCommentForum(\Doctrine\Common\Collections\ArrayCollection $values)
    {
        foreach($values as $comment_forum){
            $this->addCommentForum($comment_forum);
        }
    }

    public function getCommentForum()
    {
        return $this->comment_forum;
    }

     public function addCommentForum( $value)
    {
        $this->comment_forum[] = $value;
    }

     public function removeCommentForum($value)
    {
        $this->comment_forum->removeElement($value);
    } 


    /**
    * @ORM\ManyToOne(targetEntity="Rubrique", inversedBy="rubrique_forum")
    * @ORM\JoinColumn(name="rubrique_id", referencedColumnName="id")
    */

    protected $forum_rubrique;

    public function getForumRubrique() {
         return $this->forum_rubrique;
    }

    public function setForumRubrique($u2) {
        $this->forum_rubrique = $u2;
    }




     /**
    * @ORM\ManyToOne(targetEntity="User", inversedBy="user_forum")
    * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
    */

    protected $forum_user;


    public function getForumUser() {
         return $this->forum_user;
    }

    public function setForumUser($u2) {
        $this->forum_user = $u2;
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
     * @ORM\Column(name="titre", type="string", length=255)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="contenu", type="string", length=255)
     */
    private $contenu;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_creation", type="datetime")
     */
    private $dateCreation;

    /**
     * @var boolean
     *
     * @ORM\Column(name="statut", type="boolean")
     */
    private $statut;


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
     * Set titre
     *
     * @param string $titre
     * @return Forum
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;
    
        return $this;
    }

    /**
     * Get titre
     *
     * @return string 
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set contenu
     *
     * @param string $contenu
     * @return Forum
     */
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;
    
        return $this;
    }

    /**
     * Get contenu
     *
     * @return string 
     */
    public function getContenu()
    {
        return $this->contenu;
    }

    /**
     * Set dateCreation
     *
     * @param \DateTime $dateCreation
     * @return Forum
     */
    public function setDateCreation($dateCreation)
    {
        $this->dateCreation = $dateCreation;
    
        return $this;
    }

    /**
     * Get dateCreation
     *
     * @return \DateTime 
     */
    public function getDateCreation()
    {
        return $this->dateCreation;
    }

    /**
     * Set statut
     *
     * @param boolean $statut
     * @return Forum
     */
    public function setStatut($statut)
    {
        $this->statut = $statut;
    
        return $this;
    }

    /**
     * Get statut
     *
     * @return boolean 
     */
    public function getStatut()
    {
        return $this->statut;
    }

    public function __construct()
    {
                
        $this->comment_forum = new \Doctrine\Common\Collections\ArrayCollection();
        parent::__construct();
        // your own logic
    }
}
