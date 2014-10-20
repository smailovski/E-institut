<?php

namespace Ei\einstitutBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;

class ressourcesController extends Controller
{
	public function ressourcesAction( $page)
    {
	
		$session = new Session();
		$session->set('CurrentMenu', 'Ressources');
                
		$em = $this->getDoctrine()->getManager();
		$request = $this->getRequest();

		//tableau des types
		$TypeArray = array(
			"type1" => "Audio",
			"type2" => "Document",
			"type3" => "Database",
			"type4" => "Excel",
			"type5" => "Flash",			
			"type6" => "PDF",
			"type7" => "Vidéo",
			"type8" => "Word",);
			
		//tableau des domaines
		$DomaineArray = array(
			"domaine1" => "Banque/comptabilité/assurance",
			"domaine2" => "Commerce",
			"domaine3" => "Documentation",
			"domaine4" => " Droit",
			"domaine5" => " Economie",			
			"domaine6" => "Gestion projet/Ressorces humaines",
			"domaine7" => " Informatique",
			"domaine8" => " Marketing",
			"domaine9" => " Santé",
			"domaine10" => " Autre",);
			
		
		$search_ressource = $request->request->get('mot_cle');
		$ordre = $request->request->get('trier');
		if(empty($ordre))
		$ordre = 'dateCreation';
		$test1=0;
		$session->set('ordre', $ordre);
		
		
		
		 $QueryFiche = $this->getDoctrine()
                ->getRepository('EieinstitutBundle:fiche')
                ->createQueryBuilder('f')
				->where( 'f.statut = 1')
                ->addOrderBy('f.'.$session->get('ordre'), 'DESC');
		
		
		$action = $request->request->get('btn_search');
		
		
		if(isset($action))
		{
			for ($i = 1; $i <= count($TypeArray); $i++) {
				$type = $request->request->get('type'.$i);
				$session->set('type'.$i, $type);
				//$array['type$i']
			}
			for ($i = 1; $i <= count($DomaineArray); $i++) {
				$domaine = $request->request->get('domaine'.$i);
				$session->set('domaine'.$i, $domaine);
			}
			$session->set('search_ressource', $search_ressource);
			
		}
		//recherche par mot cle
                
       
		if($session->get('search_ressource'))
		{
			$QueryFiche->andwhere( 'f.titre like :search or f.domaine like :search or f.theme like :search or f.resume like :search or f.url like :search  ')
			->setParameter('search', '%'.$session->get('search_ressource').'%');
			
		}
		
		
		$fields = array(''); 
		$fieldsDomaine = array(''); 
		$ok = false;
		$ok1 = false;
		for ($i = 1; $i <= count($TypeArray); $i++) {
			$type = $session->get('type'.$i);
			if( $type!='' ) 
			{
				$fields[] = $type;
				$ok = true ;
			}
		}
		$i=0;
		for ($i = 1; $i <= count($DomaineArray); $i++) {
			$domaine = $session->get('domaine'.$i);
			
			if( $domaine!='' ) 
			{
				$fieldsDomaine[] = $domaine;
				$ok1 = true ;
				$test1 = 1;
			}
			
		}
		if($ok)
		$QueryFiche->andwhere( 'f.type IN(:type)');
		
		if($ok1)
		$QueryFiche->andwhere( 'f.domaine IN(:domaine)'); 

		if($ok)
		$QueryFiche->setParameter('type', $fields );
		if($ok1)
		$QueryFiche->setParameter('domaine', $fieldsDomaine ); 
		
		
		
		
		 $total = $QueryFiche->getQuery();
		/*la pagination*/
		$articles_per_page = $this->container->getParameter('max_articles_on_listepage');
		$total_articles    = count($total->getResult());
        $total->setFirstResult(($page * $articles_per_page) - $articles_per_page);
		$total->setMaxResults(4);
		$results = $total->getResult();
		$last_page         = ceil($total_articles / $articles_per_page);
        $previous_page     = $page > 1 ? $page - 1 : 1;
        $next_page         = $page < $last_page ? $page + 1 : $last_page; 
		
		/*fin pagination*/
	
		return $this->render('EieinstitutBundle:Ressources:listes_ressources.html.twig', array(
            'Fiches' 		=> $results,
            'last_page' 	=> $last_page,
            'previous_page' => $previous_page,
            'current_page' 	=> $page,
            'next_page' 	=> $next_page,
            'total_articles'=> $total_articles,
			'test1'			=> $test1,
			'ordre'			=> $ordre,
			'mot_cle'		=> $search_ressource,
			'TypeArray'		=> $TypeArray,
			'DomaineArray'	=> $DomaineArray
        ));
        
	}
	public function mes_ressourcesAction($page)
    {
	
		$session = new Session();
		$session->set('CurrentMenu', 'Ressources');
                
		$em = $this->getDoctrine()->getManager();
		$request = $this->getRequest();

		//tableau des types
		$TypeArray = array(
			"type1" => "Audio",
			"type2" => "Document",
			"type3" => "Database",
			"type4" => "Excel",
			"type5" => "Flash",			
			"type6" => "PDF",
			"type7" => "Vidéo",
			"type8" => "Word",);
			
		//tableau des domaines
		$DomaineArray = array(
			"domaine1" => "Banque/comptabilité/assurance",
			"domaine2" => "Commerce",
			"domaine3" => "Documentation",
			"domaine4" => " Droit",
			"domaine5" => " Economie",			
			"domaine6" => "Gestion projet/Ressorces humaines",
			"domaine7" => " Informatique",
			"domaine8" => " Marketing",
			"domaine9" => " Santé",
			"domaine10" => " Autre",);
			
		
		$search_ressource = $request->request->get('mot_cle');
		$ordre = $request->request->get('trier');
		if(empty($ordre))
		$ordre = 'dateCreation';
		$test1=0;
		$session->set('ordre', $ordre);
		$User = $this->get('security.context')->getToken()->getUser();
		//par defaut
		
		
		 $QueryFiche = $this->getDoctrine()
                ->getRepository('EieinstitutBundle:fiche')
                ->createQueryBuilder('f')
				->where( 'f.statut = 1 and f.user ='.$User->getId())
                ->addOrderBy('f.'.$session->get('ordre'), 'DESC');
		
		
		$action = $request->request->get('btn_search');
		
		
		if(isset($action))
		{
			for ($i = 1; $i <= count($TypeArray); $i++) {
				$type = $request->request->get('type'.$i);
				$session->set('type'.$i, $type);
				//$array['type$i']
			}
			for ($i = 1; $i <= count($DomaineArray); $i++) {
				$domaine = $request->request->get('domaine'.$i);
				$session->set('domaine'.$i, $domaine);
			}
			$session->set('search_ressource', $search_ressource);
			
		}
		//recherche par mot cle
                
       
		if($session->get('search_ressource'))
		{
			$QueryFiche->andwhere( 'f.titre like :search or f.domaine like :search or f.theme like :search or f.resume like :search or f.url like :search  ')
			->setParameter('search', '%'.$session->get('search_ressource').'%');
			
		}
		
		
		$fields = array(''); 
		$fieldsDomaine = array(''); 
		$ok = false;
		$ok1 = false;
		for ($i = 1; $i <= count($TypeArray); $i++) {
			$type = $session->get('type'.$i);
			if( $type!='' ) 
			{
				$fields[] = $type;
				$ok = true ;
			}
		}
		$i=0;
		for ($i = 1; $i <= count($DomaineArray); $i++) {
			$domaine = $session->get('domaine'.$i);
			
			if( $domaine!='' ) 
			{
				$fieldsDomaine[] = $domaine;
				$ok1 = true ;
				$test1 = 1;
			}
			
		}
		if($ok)
		$QueryFiche->andwhere( 'f.type IN(:type)');
		
		if($ok1)
		$QueryFiche->andwhere( 'f.domaine IN(:domaine)'); 

		if($ok)
		$QueryFiche->setParameter('type', $fields );
		if($ok1)
		$QueryFiche->setParameter('domaine', $fieldsDomaine ); 
		
		
		
		
		 $total = $QueryFiche->getQuery();
		/*la pagination*/
		$articles_per_page = $this->container->getParameter('max_articles_on_listepage');
		$total_articles    = count($total->getResult());
        $total->setFirstResult(($page * $articles_per_page) - $articles_per_page);
		$total->setMaxResults(4);
		$results = $total->getResult();
		$last_page         = ceil($total_articles / $articles_per_page);
        $previous_page     = $page > 1 ? $page - 1 : 1;
        $next_page         = $page < $last_page ? $page + 1 : $last_page; 
		
		/*fin pagination*/

		return $this->render('EieinstitutBundle:Ressources:listes_ressources.html.twig', array(
            'Fiches' 		=> $results,
            'last_page' 	=> $last_page,
            'previous_page' => $previous_page,
            'current_page' 	=> $page,
            'next_page' 	=> $next_page,
            'total_articles'=> $total_articles,
			'test1'			=> $test1,
			'ordre'			=> $ordre,
			'mot_cle'		=> $search_ressource,
			'TypeArray'		=> $TypeArray,
			'DomaineArray'	=> $DomaineArray
        ));
        
	}


	}