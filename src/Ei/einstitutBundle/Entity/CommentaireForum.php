<?php

namespace Ei\einstitutBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CommentaireForum
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Ei\einstitutBundle\Entity\CommentaireForumRepository")
 */
class CommentaireForum
{


    /**
    * @ORM\ManyToOne(targetEntity="Forum", inversedBy="comment_forum")
    * @ORM\JoinColumn(name="forum_id", referencedColumnName="id")
    */

    private $forum_comment;

    public function getForumComment() {
         return $this->forum_comment;
    }

    public function setForumComment($u2) {
        $this->forum_comment = $u2;
    }



     /**
    * @ORM\ManyToOne(targetEntity="User", inversedBy="comentforum")
    * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
    */

    private $comment_user;

    public function getCommentUser() {
         return $this->comment_user;
    }

    public function setCommentUser($u2) {
        $this->comment_user = $u2;
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
     * @ORM\Column(name="commentaire", type="text")
     */
    private $commentaire;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

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
     * Set commentaire
     *
     * @param string $commentaire
     * @return CommentaireForum
     */
    public function setCommentaire($commentaire)
    {
        $this->commentaire = $commentaire;
    
        return $this;
    }

    /**
     * Get commentaire
     *
     * @return string 
     */
    public function getCommentaire()
    {
        return $this->commentaire;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return CommentaireForum
     */
    public function setDate($date)
    {
        $this->date = $date;
    
        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set statut
     *
     * @param boolean $statut
     * @return CommentaireForum
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
}
