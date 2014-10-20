<?php

namespace Ei\AdministrationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Ei\einstitutBundle\Entity\User;
use Ei\einstitutBundle\Entity\Pages;
use Ei\einstitutBundle\Entity\Fiche;
use Ei\einstitutBundle\Entity\Criteres;
use Ei\einstitutBundle\Entity\Notes;
use Ei\einstitutBundle\Entity\Messages;
use Ei\einstitutBundle\Entity\Actualites;
use Ei\einstitutBundle\Entity\TutorielsEnLigne;
use Ei\einstitutBundle\Entity\Tags;

class DefaultController extends Controller {

    public function indexAction() {
        $em = $this->getDoctrine()->getManager();
        $Now = new \dateTime("now");
        //$Now->format("Y-m-d");
        /*$fiche = $em
                ->createQuery('SELECT f FROM EieinstitutBundle:Fiche f WHERE  (f.dateCreation = :date )')
                ->setParameter('date', $Now)
                ->getResult();*/
        $tuto = $em->getRepository('EieinstitutBundle:TutorielsEnligne')->findAll();
        $fiche = $em->getRepository('EieinstitutBundle:Fiche')->findAll();
        //Lister les utilisateur en ligne
        //$users = $em->getRepository('EieinstitutBundle:User')->getActive();
        ////http://www.symfony-grenoble.fr/238/lister-les-utilisateurs-en-ligne/
        $user = $em->getRepository('EieinstitutBundle:User')->findAll();
        return $this->render('EiAdministrationBundle:admin:tbd_admin.html.twig',array('tutos' => $tuto,'Fiches' => $fiche,'users' => $user ));
    }

   
    public function contributeurAction() {
        return $this->render('EiAdministrationBundle:Contributor:tbd_contribu.html.twig');
    }

    public function pageAction() {
        $em = $this->getDoctrine()->getManager();
        $pg = $em->getRepository('EieinstitutBundle:Pages')->findAll();
        return $this->render('EiAdministrationBundle:admin:a_liste_page.html.twig', array(
                    'pages' => $pg
                        )
        );
    }
public function ajoute_pageAction() {
        $em = $this->getDoctrine()->getManager();
        $request = $this->getRequest();    
        $actionUpdate = $request->request->get('btn_save');
        $RubriquePage = $em->getRepository('EieinstitutBundle:RubriquesPage')->findAll();
        $Page = null;     
            if (isset($actionUpdate)) {
            $etat = $request->request->get('etat');
            $titre = $request->request->get('titre');
            $description = $request->request->get('description');
            $contenu = $request->request->get('contenu');
            $IDrubriquesPage = $request->request->get('rubriquesPage');
            $RPage = $em->getRepository('EieinstitutBundle:RubriquesPage')->findOneBy(array("id" => $IDrubriquesPage));
            $Page = new Pages;
            $Page->setTitre($titre);
            $Page->setDescription($description);
            $Page->setContenu($contenu);
            $Page->setDateCreation(new \dateTime());
            $Page->setEtat($etat);
            $Page->setrubriquesPage($RPage);
            $em->persist($Page);
            $em->flush();
            
            return $this->redirect($this->generateUrl('ei_administration_page'));
        }
        return $this->render('EiAdministrationBundle:admin:a_ajouter_page.html.twig', array('RubriquePage'=>$RubriquePage));
    }
    
    public function modifier_pageAction($id) {
        $em = $this->getDoctrine()->getManager();
        $request = $this->getRequest();
        $idpage = $request->request->get('id');
        $Page = $em->getRepository('EieinstitutBundle:Pages')->findOneBy(array("id" => $id));
        $RubriquePage = $em->getRepository('EieinstitutBundle:RubriquesPage')->findAll();
        $actionUpdate = $request->request->get('btn_save');

        if (isset($actionUpdate)) {

            $etat = $request->request->get('etat');
            $titre = $request->request->get('titre');
            $description = $request->request->get('description');
            $contenu = $request->request->get('contenu');
            $IDrubriquesPage = $request->request->get('rubriquesPage');
            $RPage = $em->getRepository('EieinstitutBundle:RubriquesPage')->findOneBy(array("id" => $IDrubriquesPage));
            $Page->setTitre($titre);
            $Page->setDescription($description);
            $Page->setContenu($contenu);
            $Page->setEtat($etat);
            $Page->setrubriquesPage($RPage);
            $em->flush();
            return $this->redirect($this->generateUrl('ei_administration_page', array('id' => $id)));
        }
        return $this->render('EiAdministrationBundle:admin:a_modifier_page.html.twig', array("page" => $Page,'RubriquePage'=>$RubriquePage));
    }

    public function supprimer_pageAction() {
        $em = $this->getDoctrine()->getManager();
        $request = $this->getRequest();
        $idpg = $request->request->get('idPage');
        $pg = $em->getRepository('EieinstitutBundle:Pages')->findOneBy(array('id' => $idpg));
        $em->remove($pg);
        $em->flush();

        return $this->redirect($this->generateUrl('ei_administration_page'));
    }

    public function ressourcesAction() {
        $em = $this->getDoctrine()->getManager();
        $rs = $em->getRepository('EieinstitutBundle:Fiche')->findAll();
        return $this->render('EiAdministrationBundle:admin:a_liste_ressource.html.twig', array(
                    'ressource' => $rs
                        )
        );
    }
    
    public function ajouter_ressourceAction() {

        $em = $this->getDoctrine()->getManager();
        $request = $this->getRequest();
        $action = $request->request->get('btn_add');
        $action1 = $request->request->get('add_tags_fiche');
        $request = $this->getRequest();
        $date = new \DateTime('now');
        $titre = $request->request->get('titre');
        $tags = $request->request->get('tags');
        $domaine = $request->request->get('domaine');
        $theme = $request->request->get('theme');
        $url = $request->request->get('url');
        $type = $request->request->get('type');
        $tabtag[] = "";
        $description = $request->request->get('description');
        $User = $this->get('security.context')->getToken()->getUser();
        if (isset($action)) {
            $fiche = new Fiche();
            $fiche->setTitre($titre);
            $fiche->setDomaine($domaine);
            $fiche->setUser($User);
            $fiche->setUrl($url);
            $fiche->setType($type);
            $fiche->setResume($description);
            $fiche->setStatut(1);
            $fiche->setDateCreation($date);
            $fiche->setTheme($theme);
            $em->persist($fiche);
            $em->flush();
            return $this->redirect($this->generateUrl('ei_administration_ressource'));
        }
        /* else
          if(isset($action1))
          {
          $tag=new Tags();
          $tag->setLibelle($tags);
          $tag->setEtat(1);
          $em->persist($tag);
          $result = count($movies);
          $long=$tabtag->length();
          $em->flush();

          } */
        $lastvalue = '';
        $lastvalue = $tags[0];
        
        return $this->render('EiAdministrationBundle:admin:a_ajouter_ressource.html.twig', array("lastvalue" => $lastvalue,));
    }

    public function modifier_ressourceAction($id) {
        $em = $this->getDoctrine()->getManager();
        $request = $this->getRequest();
        $action1 = $request->request->get('add_tags_fiche');    
        
        $date = new \DateTime('now');
        $titre = $request->request->get('titre');
        $tags = $request->request->get('tags');
        $domaine = $request->request->get('domaine');
        $theme = $request->request->get('theme');
        $url = $request->request->get('url');
        $type = $request->request->get('type');
        $tabtag[] = "";
        $description = $request->request->get('description');
        
        $Fiche = $em->getRepository('EieinstitutBundle:Fiche')->findOneBy(array("id" => $id));
 
        $actionUpdate = $request->request->get('btn_save');

        if (isset($actionUpdate)) {

            $Fiche->setTitre($titre);
            $Fiche->setDomaine($domaine);
            $Fiche->setUrl($url);
            $Fiche->setType($type);
            $Fiche->setResume($description);
            $Fiche->setStatut(1);
            $Fiche->setDateCreation($date);
            $Fiche->setTheme($theme);
   
            $em->flush();
            return $this->redirect($this->generateUrl('ei_administration_ressource', array('id' => $id)));
        }
        return $this->render('EiAdministrationBundle:admin:a_modifier_ressource.html.twig', array("Fiche" => $Fiche,));
    }
    
    public function supprimer_ressourceAction() {
        $em = $this->getDoctrine()->getManager();
        $request = $this->getRequest();
        $idFiche = $request->request->get('idFiche');
        if ($idFiche) {
            $rs = $em->getRepository('EieinstitutBundle:Fiche')->findOneBy(array('id' => $idFiche));
            $em->remove($rs);
            $em->flush();
        }
        return $this->redirect($this->generateUrl('ei_administration_ressource'));
    }

    public function listeuserAction() {
        $em = $this->getDoctrine()->getManager();
        $Users = $em->getRepository('EieinstitutBundle:User')->findall();
        return $this->render('EiAdministrationBundle:admin:a_liste_user.html.twig', array('Users' => $Users));
    }

    public function gerer_utilisateurAction($id) {
        $em = $this->getDoctrine()->getManager();
        $request = $this->getRequest();
        $User = null;
        if ($id != 'add') {
            $User = $em->getRepository('EieinstitutBundle:User')->findOneBy(array("id" => $id));
        }

        $actionAdd = $request->request->get('btn_valider');
        $actionUpdate = $request->request->get('btn_save');
        $actionRetour = $request->request->get('btn_preview');
        $actionSupprimer = $request->request->get('btn_delete');



        if (isset($actionAdd)) {
            $User = new User();

            $nom = $request->request->get('nom');
            $prenom = $request->request->get('prenom');
            $adresse = $request->request->get('adresse');
            $pays = $request->request->get('pays');
            $ville = $request->request->get('ville');
            $telephone = $request->request->get('telephone');
            $sexe = $request->request->get('sexe');
            //$role = $request->request->get('role');
            $email = $request->request->get('email');
            $validation = $request->request->get('validation');
            $login = $request->request->get('login');
            $password = $request->request->get('password');
            $confpassword = $request->request->get('confpassword');
            if ($password == $confpassword && $password != '') {
                $User->setNom($nom);
                $User->setPrenom($prenom);
                $User->setAdresse($adresse);
                $User->setPays($pays);
                $User->setVille($ville);
                $User->setTel($telephone);
                $User->setSexe($sexe);
                // $User->addRole($role);
                $User->set($validation);
                $User->setUsername($login);
                $User->setEmail($email);
                $User->setEmailCanonical($User->getEmail());
                $User->setEnabled(true);
                $User->setPassword($password);
                $factory = $this->get('security.encoder_factory');
                $encoder = $factory->getEncoder($User);
                $password = $encoder->encodePassword($User->getPassword(), $User->getSalt());
                $User->setPassword($password);

                $em->persist($User);
                $em->flush();
                //suppression
                //$em->remove($User);
                //$em->flush();
                return $this->redirect($this->generateUrl('ei_administration_listeuser', array('id' => '')));
            }
        } else if (isset($actionUpdate)) {

            $nom = $request->request->get('nom');
            $prenom = $request->request->get('prenom');
            $adresse = $request->request->get('adresse');
            $pays = $request->request->get('pays');
            $ville = $request->request->get('ville');
            $telephone = $request->request->get('telephone');
            $sexe = $request->request->get('sexe');
            //$role = $request->request->get('role');
            $email = $request->request->get('email');
            $validation = $request->request->get('validation');
            $login = $request->request->get('login');
            $password = $request->request->get('password');
            $confpassword = $request->request->get('confpassword');
            $enabled = $request->request->get('enabled');
            
            if ($password == $confpassword) {

                $User->setNom($nom);
                $User->setPrenom($prenom);
                $User->setAdresse($adresse);
                $User->setPays($pays);
                $User->setVille($ville);
                $User->setTel($telephone);
                $User->setSexe($sexe);
                // $User->addRole($role);
                //$User->set($validation);
                $User->setUsername($login);
                $User->setEmail($email);
                $User->setEmailCanonical($User->getEmail());
                if($enabled==1)
                 {$User->setEnabled(true);}
                else
                  {$User->setEnabled(false);} 
                $User->setPassword($password);
                $factory = $this->get('security.encoder_factory');
                $encoder = $factory->getEncoder($User);
                $password = $encoder->encodePassword($User->getPassword(), $User->getSalt());
                $User->setPassword($password);

                $em->persist($User);
                $em->flush();
                return $this->redirect($this->generateUrl('ei_administration_listeuser', array('id' => '')));
            } else if ($password = '' && $confpassword = '') {

                $User->setNom($nom);
                $User->setPrenom($prenom);
                $User->setAdresse($adresse);
                $User->setPays($pays);
                $User->setVille($ville);
                $User->setTel($telephone);
                $User->setSexe($sexe);
                // $User->addRole($role);
                $User->set($validation);
                $User->setUsername($login);
                $User->setEmail($email);
                $User->setEmailCanonical($User->getEmail());
                $User->setEnabled(true);
                $em->persist($User);
                $em->flush();
                return $this->redirect($this->generateUrl('ei_administration_listeuser', array('id' => '')));
            }
        } else if (isset($actionRetour)) {
            return $this->redirect($this->generateUrl('ei_administration_listeuser', array('id' => '')));
        } else if (isset($actionSupprimer)) {

            $em = $this->getDoctrine()->getManager();
            $request = $this->getRequest();
            if ($id != 'add') {

                $em->remove($User);
                $em->flush();
            }
            return $this->redirect($this->generateUrl('ei_administration_listeuser', array('id' => '')));
        }

        return $this->render('EiAdministrationBundle:admin:gerer_utilisateur.html.twig', array("User" => $User, "id" => $id));
    }

    public function supprimer_utilisateurAction() {
        $em = $this->getDoctrine()->getManager();
        $request = $this->getRequest();
        $id = $request->request->get('param_id');
        $User = $em->getRepository('EieinstitutBundle:User')->findOneBy(array("id" => $id));
        $em->remove($User);
        $em->flush();
        return $this->redirect($this->generateUrl('ei_administration_listeuser', array('id' => '')));
    }

   

    public function newsletterAction() {
        return $this->render('EiAdministrationBundle:admin:a_liste_newsletter.html.twig');
    }

    public function ajouter_actualiteAction() {

        $em = $this->getDoctrine()->getManager();
        $request = $this->getRequest();
        //$id = $request->request->get('id');
        $titre = $request->request->get('txt_titre');
        //$description=$request->request->get('txt_description');
        $contenu = $request->request->get('contenu');
        //$datedebut=$request->request->get('date_debut');
        //$datefin=$request->request->get('date_fin');
        $url_image = $request->request->get('txt_url');
        
         $actionAdd = $request->request->get('btn_Add');
        if(isset($actionAdd)){
        //$UserChild = $em->getRepository('EieinstitutBundle:User')->findOneBy(array('id'=> $id));
        $UserParent = $this->get('security.context')->getToken()->getUser();

        $actualite = new Actualites();
        $actualite->setUser($UserParent);
        $actualite->setTitre($titre);
        $actualite->setStatut(0);
        $actualite->setContenu($contenu);
        $actualite->setDateActualite(new \dateTime());
        $actualite->setDateExpiration(new \dateTime());
        $actualite->setUrlImage($url_image);
        $em->persist($actualite);
        $em->flush();
        }
        return $this->render('EiAdministrationBundle:Contributor:c_ajouter_actualite.html.twig');
    }

    public function liste_actualiteAction() {
        $em = $this->getDoctrine()->getManager();
        $actualite = $em->getRepository('EieinstitutBundle:Actualites')->findAll();

        return $this->render('EiAdministrationBundle:Contributor:c_liste_actualite.html.twig', array("actualite" => $actualite));
    }

    public function supprimer_actualiteAction() {

        $em = $this->getDoctrine()->getManager();
        $request = $this->getRequest();
        $idActualite = $request->request->get('idActualite');
        if ($idActualite) {
            $Actualite = $em->getRepository('EieinstitutBundle:Actualites')->findOneBy(array('id' => $idActualite));
            $em->remove($Actualite);
            $em->flush();
            $msge = "Actualité Supprimer";
        }
        return $this->redirect($this->generateUrl('liste_actualite', array("msge" => $msge)));
    }

    public function modifier_actualiteAction($actualite) {

        $em = $this->getDoctrine()->getManager();
        $request = $this->getRequest();
        $actualit = $request->request->get('actualite');

        /* if($actualite)
          { */
        $actualites = $em
                ->createQuery('SELECT a FROM EieinstitutBundle:Actualites a WHERE  (a.id = :actualite)')
                ->setParameter('actualite', $actualite)
                ->getResult();
        
        
        
        
        return $this->render('EiAdministrationBundle:Contributor:c_modifier_actualite.html.twig', array("actualites" => $actualites));
        /* }
          else{
          return $this->redirect($this->generateUrl('liste_actualite'));
          } */
    }

    public function detail_actualiteAction($actualite) {
        $em = $this->getDoctrine()->getManager();
        $request = $this->getRequest();
        $actualit = $request->request->get('actualite');
        $actualites = $em
                ->createQuery('SELECT a FROM EieinstitutBundle:Actualites a WHERE  (a.id = :actualite)')
                ->setParameter('actualite', $actualite)
                ->getResult();

        return $this->render('EiAdministrationBundle:Contributor:detail_actualite.html.twig', array("actualites" => $actualites));
    }
    
    #############preconisation critere et note
    
    public function preconisationAction() {
        $em = $this->getDoctrine()->getManager();
        $ct = $em->getRepository('EieinstitutBundle:Criteres')->findAll();
        $nt = $em->getRepository('EieinstitutBundle:Notes')->findAll();
        return $this->render('EiAdministrationBundle:admin:a_liste_critere.html.twig', array('criteres' => $ct,'notes' => $nt));
    }
    public function ajouter_preconisationAction($id) {
        $em = $this->getDoctrine()->getManager();
        $request = $this->getRequest();    
        $actionUpdate = $request->request->get('btn_save');
        if ($id =="critere" ){   
            if (isset($actionUpdate)) {
            $Critere = new Criteres;    
            $lb = $request->request->get('libelle');
            $Critere->setLibelle($lb);
            $em->persist($Critere);
            $em->flush();            
            return $this->redirect($this->generateUrl('ei_administration_preconisation'));
        }}
        if ($id =="note"){    
            if (isset($actionUpdate)) {
            $Note = new Notes;     
            $lb = $request->request->get('libelle');
            $an = $request->request->get('annotation');
            $Note->setLibelle($lb);
            $Note->setAnnotation($an);
            $em->persist($Note);
            $em->flush();            
            return $this->redirect($this->generateUrl('ei_administration_preconisation'));
            
        }}
        return $this->render('EiAdministrationBundle:admin:a_ajouter_critere.html.twig',array("action" => $id));
    }
    
    public function modifier_preconisationAction($id) {
        $em = $this->getDoctrine()->getManager();
        $request = $this->getRequest();
        $idcritere = $request->request->get('id');     
        $Critere = $em->getRepository('EieinstitutBundle:Criteres')->findOneBy(array("id" => $id));
        $actionUpdate = $request->request->get('btn_save');
        if (isset($actionUpdate)) {
            $libelle = $request->request->get('libelle');
            $Critere->setLibelle($libelle);
            $em->flush();
            return $this->redirect($this->generateUrl('ei_administration_preconisation'));
        }     
          return $this->render('EiAdministrationBundle:admin:a_modifier_critere.html.twig', array("critere" => $Critere,"note"=> null));   
}
    public function modifier_noteAction($id) {
        $em = $this->getDoctrine()->getManager();
        $request = $this->getRequest();
        $idnote = $request->request->get('id');
        $Note = $em->getRepository('EieinstitutBundle:Notes')->findOneBy(array("id" => $id));
        $actionUpdate = $request->request->get('btn_save');
        if (isset($actionUpdate)) {
            $libelle = $request->request->get('libelle');
            $annotation = $request->request->get('annotation');
            $Note->setLibelle($libelle);
            $Note->setAnnotation($annotation);
            $em->flush();
            return $this->redirect($this->generateUrl('ei_administration_preconisation'));
        }    
          return $this->render('EiAdministrationBundle:admin:a_modifier_critere.html.twig', array("critere" => null,"note" => $Note));   
}
    public function supprimer_preconisationAction() {
        $em = $this->getDoctrine()->getManager();
        $request = $this->getRequest();
        $idct = $request->request->get('idCritere');
        $idnt = $request->request->get('idNote');
        if($idct!= null )
        {
            $ct = $em->getRepository('EieinstitutBundle:Criteres')->findOneBy(array('id' => $idct));
            $em->remove($ct);
        }
        if($idnt!= null )
        {
            $nt = $em->getRepository('EieinstitutBundle:Notes')->findOneBy(array('id' => $idnt));
            $em->remove($nt);
        }
        $em->flush();

        return $this->redirect($this->generateUrl('ei_administration_preconisation'));
    }
    
####messagerie
     public function repondre_messageAction() {
        $em = $this->getDoctrine()->getManager();
        $request = $this->getRequest();
        $action = $request->request->get('submit');

        if (isset($action)) {
            $UserConnected = $this->get('security.context')->getToken()->getUser();
            $Objet = $request->request->get('Objet');
            $Message = $request->request->get('message');
            $Dest = $request->request->get('A');

            $Messages = new Messages;
            $Messages->setObjet($Objet);
            $Messages->setMessage($Message);
            $Messages->setDateMessage(new \DateTime());
            $Messages->setEtat(0);
            $FromUser = $UserConnected;
            $Messages->setMessagesUser($FromUser);


            $ToUser1 = $em->getRepository('EieinstitutBundle:User')->findOneBy(array('username' => $Dest));
            $ToUser1->addMessages($Messages);
            $Messages->addUsers($ToUser1);
            $em->persist($ToUser1);


            $em->persist($Messages);
            $em->flush();
        }


        return $this->render('EiAdministrationBundle:Messaging:repondre_message.html.twig');
    }

    public function messages_recusAction() {
        $em = $this->getDoctrine()->getManager();
        $UserConnected = $this->get('security.context')->getToken()->getUser();
        $messages_recus = $em->getRepository('EieinstitutBundle:Messages')->MessageRecu($UserConnected->getId());



        return $this->render('EiAdministrationBundle:Messaging:Messages_recus.html.twig', array('messagesrecus' => $messages_recus));
    }

    public function supprimer_messagesAction() {
        $em = $this->getDoctrine()->getManager();
        $request = $this->getRequest();
        $idmessage = $request->request->get('param_idmessage');
        $messages_recus = $em->getRepository('EieinstitutBundle:Messages')->findOneBy(array('id' => $idmessage));
        $em->remove($messages_recus);
        $em->flush();
        /* $em->getRepository('EieinstitutBundle:Messages')->SupprimerMessage(5);

          if(isset($idmessage))
          {

          } */
        return $this->redirect($this->generateUrl('Recus'));
        // return $this->render('EiAdministrationBundle:Messaging:supprimer_messages.html.twig', array('messagesrecus'=> $messages_recus));
    }

    public function messages_envoyesAction() {
        $em = $this->getDoctrine()->getManager();
        $UserConnected = $this->get('security.context')->getToken()->getUser();
        $messages_envoyes = $em->getRepository('EieinstitutBundle:Messages')->MessageEnvoyee($UserConnected->getId());
        return $this->render('EiAdministrationBundle:Messaging:messages_envoyes.html.twig', array('messagesenvoyes' => $messages_envoyes));
    }

    public function brouillonAction() {
        return $this->render('EiAdministrationBundle:Messaging:brouillon.html.twig');
    }

    public function nouveau_messageAction() {

        $em = $this->getDoctrine()->getManager();
        $request = $this->getRequest();
        $action = $request->request->get('submit');

        if (isset($action)) {
            $UserConnected = $this->get('security.context')->getToken()->getUser();
            $Objet = $request->request->get('Objet');
            $Message = $request->request->get('message');
            $Dest = $request->request->get('A');

            $Messages = new Messages;
            $Messages->setObjet($Objet);
            $Messages->setMessage($Message);
            $Messages->setDateMessage(new \DateTime());
            $Messages->setEtat(0);
            $FromUser = $UserConnected; //$em->getRepository('EiAdministrationBundle:User')->findOneBy(array('id'=>1));
            $Messages->setMessagesUser($FromUser);


            $ToUser1 = $em->getRepository('EieinstitutBundle:User')->findOneBy(array('username' => $Dest));
            $ToUser1->addMessages($Messages);
            $Messages->addUsers($ToUser1);
            $em->persist($ToUser1);



            /*
              $ToUser2 = $em->getRepository('EiAdministrationBundle:User')->findOneBy(array('id'=>5));
              $Messages->addUsers($ToUser2);
              $ToUser2->addMessages($Messages);
              $em->persist($ToUser2);
             */
            $em->persist($Messages);
            $em->flush();
        }

        return $this->render('EiAdministrationBundle:Messaging:nouveau_message.html.twig');
    }

    public function details_messageAction($message) {
        $em = $this->getDoctrine()->getEntityManager();


        $details_message = $em->getRepository('EieinstitutBundle:Messages')->findOneBy(array('id' => $message));

        return $this->render('EiAdministrationBundle:Messaging:details_message.html.twig', array('detailsmessage' => $details_message));
    }

    public function details_message1Action($message) {
        $em = $this->getDoctrine()->getEntityManager();


        $details_message1 = $em->getRepository('EieinstitutBundle:Messages')->findOneBy(array('id' => $message));

        return $this->render('EiAdministrationBundle:Messaging:details_message1.html.twig', array('detailsmessage1' => $details_message1));
    }
    
    
     public function ajouter_tutoAction()
    {

        $em = $this->getDoctrine()->getManager();
        $request = $this->getRequest();
        $UserConnected = $this->get('security.context')->getToken()->getUser();
        

        $action = $request->request->get('btn_save'); 

        if (isset($action)) {
      
        $titre = $request->request->get('titre');
        $description = $request->request->get('description');
        $tags = $request->request->get('tags');
        $Domaine = $request->request->get('Domaine');
        $theme = $request->request->get('theme');
        $TypeTuto = $request->request->get('TypeTuto');
        $Type = $em->getRepository('EieinstitutBundle:TypeTutoriel')->findOneBy(array('id'=> $TypeTuto));

        $TutorielsEnLigne = new TutorielsEnLigne();

        $Tags = new Tags();
        $Tags->setLibelle($tags);
        $Tags->setEtat(1);
        $TutorielsEnLigne->addTutorielsEnLigneTags($Tags);
        
        $em->persist($Tags);
        

        $Tags = new Tags();
        $Tags->setLibelle("Test ".$tags);
        $Tags->setEtat(1);
        $TutorielsEnLigne->addTutorielsEnLigneTags($Tags);

        $em->persist($Tags);

        $TutorielsEnLigne->setTitre($titre);
        $TutorielsEnLigne->setDescriptif($description);
        $TutorielsEnLigne->setDateDebut(new \DateTime());
        $TutorielsEnLigne->setDateFin(new \DateTime());
        $TutorielsEnLigne->setStatut(true);
        $TutorielsEnLigne->setUserTuto($UserConnected);
        $TutorielsEnLigne->setTypeTutoriel($Type);
        
       

        //$Tags->setTagTutoriel($tags);
        
        $em->persist($TutorielsEnLigne);
        //$em->persist($TypeTuto);
       
        $em->flush();

        }


        return $this->render('EiAdministrationBundle:admin:a_ajouter_tuto.html.twig');
    } 
    
    public function liste_tutoAction()
    {
        
        $em = $this->getDoctrine()->getManager();
      
       
        $Date = new \DateTime();
        
        $tuto = $em->createQuery('
                       SELECT t 
                       FROM EieinstitutBundle:TutorielsEnLigne t 
                       WHERE t.dateDebut >= :dateDebut AND t.statut=1')
                ->setParameter('dateDebut', $Date)
                ->getResult();
      
        $total    = count($tuto);
        return $this->render('EiAdministrationBundle:admin:a_liste_tuto.html.twig',array('tutoriels'=> $tuto, 'nombre' => $total) );
    } 
}
