<?php

namespace Ei\einstitutBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections;

/**
 * Fiche
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Ei\einstitutBundle\Entity\FicheRepository")
 */
class Fiche
{




    /**
    * @ORM\OneToMany(targetEntity="Preconisation", mappedBy="fiche_preconisation")
    */
    protected $preconisation;


     public function setPreconisation(\Doctrine\Common\Collections\ArrayCollection $values)
    {
        foreach($values as $preconisation){
            $this->addPreconisation($preconisation);
        }
    }

    public function getPreconisation()
    {
        return $this->preconisation;
    }

     public function addPreconisation( $value)
    {
        $this->preconisation[] = $value;
    }

     public function removePreconisation($value)
    {
        $this->preconisation->removeElement($value);
    } 


    /**
    * @ORM\ManyToMany(targetEntity="Tags", inversedBy="tag")
    * @ORM\JoinTable(name="Fiche_has_Tags")
    */

    protected $fiche_tags;


    public function setFicheTags(\Doctrine\Common\Collections\ArrayCollection $values)
    {
        foreach($values as $fiche_tags){
            $this->addFicheTags($fiche_tags);
        }
    }

    public function getFicheTags()
    {
        return $this->fiche_tags;
    }

     public function addFicheTags( $value)
    {
        $this->fiche_tags[] = $value;
    }

     public function removeFicheTags($value)
    {
        $this->fiche_tags->removeElement($value);
    } 


    /**
    * @ORM\ManyToMany(targetEntity="User", mappedBy="fiche")
    */
    private $users;


    /**
    * @ORM\ManyToOne(targetEntity="User", inversedBy="fiches")
    * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
    */

    protected $user;
    
     public function getUser() {
         return $this->user;
    }

    public function setUser($u) {
        $this->user = $u;
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
     * @var \DateTime
     *
     * @ORM\Column(name="date_creation", type="datetime", nullable=true)
     */
    private $dateCreation;

    /**
     * @var text
     *
     * @ORM\Column(name="resume", type="text", nullable=true)
     */
    private $resume;

    /**
     * @var text
     *
     * @ORM\Column(name="url", type="text", nullable=true)
     */
    private $url;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255, nullable=true)
     */
    private $type;

    /**
     * @var boolean
     *
     * @ORM\Column(name="statut", type="boolean", nullable=true)
     */
    private $statut;


    
   
     /**
     * @var string
     *
     * @ORM\Column(name="domaine", type="string", nullable=true)
     */
    private $domaine;
    
    /**
     * @var string
     *
     * @ORM\Column(name="theme", type="string", nullable=true)
     */
    private $theme;
    
     /**
     * Get theme
     *
     * @return string
     */
    public function getTheme()
    {
        return $this->theme;
    }

    /**
     * Set  theme
     *
     * @param string $theme
     * @return Fiche
     */
    public function setTheme($theme)
    {
         $this->theme = $theme;
        return $this->theme;
    }
    

    /**
     * Get id
     *
     * @return integer 
     */
    public function getDomaine()
    {
        return $this->domaine;
    }

    /**
     * Set domaine
     *
     * @param string $domaine
     * @return Fiche
     */
    public function setDomaine($domaine)
    {
        $this->domaine = $domaine;
    
        return $this;
    }

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
     * @return Fiche
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
     * Set dateCreation
     *
     * @param \DateTime $dateCreation
     * @return Fiche
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
     * Set resume
     *
     * @param string $resume
     * @return Fiche
     */
    public function setResume($resume)
    {
        $this->resume = $resume;
    
        return $this;
    }

    /**
     * Get resume
     *
     * @return string 
     */
    public function getResume()
    {
        return $this->resume;
    }

    /**
     * Set url
     *
     * @param string $url
     * @return Fiche
     */
    public function setUrl($url)
    {
        $this->url = $url;
    
        return $this;
    }

    /**
     * Get url
     *
     * @return string 
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return Fiche
     */
    public function setType($type)
    {
        $this->type = $type;
    
        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set statut
     *
     * @param boolean $statut
     * @return Fiche
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
    
    
     /**
     * Set fiche_tags
     *
     * @param boolean $fiche_tags
     * @return Ut
     */
    public function setFiche_tags($fiche_tags)
    {
        $this->fiche_tags = $fiche_tags;
    
    }

    /**
     * Get fiche_tags
     *
     * @return string
     */
    public function getFiche_tags()
    {
        return $this->fiche_tags;
    }
    
    
    
    /**
     * Add fiche_tags
     *
     * @param Tags $$tag
     * @return Ut
     */
    public function addTags(Tags $tag)
    {
        $this->fiche_tags[] = $tag;
    }

     /**
     * Get the paginated list of published articles
     *
     * @param int $page
     * @param int $maxperpage
     * @param string $sortby
     * @return Paginator
     */
    public function getList($page=1, $maxperpage=10)
    {
        $q = $this->_em->createQueryBuilder()
            ->select('fiche')
            ->from('EieinstitutBundle:Entity','fiche')
        ;
 
        $q->setFirstResult(($page-1) * $maxperpage)
            ->setMaxResults($maxperpage);
 
        return new Paginator($q);
    }
    
    
    public function __construct()
    {
        $this->fiche_tags = new \Doctrine\Common\Collections\ArrayCollection();        
        $this->fiche = new \Doctrine\Common\Collections\ArrayCollection();
        $this->preconisation = new \Doctrine\Common\Collections\ArrayCollection();
    
    }

}
