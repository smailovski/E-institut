<?php

namespace Ei\einstitutBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use \Ei\einstitutBundle\Entity\Contact;
use Symfony\Component\HttpFoundation\Session\Session;
class UsagerController extends Controller {

    public function liste_contactAction() {
        $session = new Session();
        $session->set('CurrentMenu', 'EspacePersonnel');
        $em = $this->getDoctrine()->getManager();


        $User = $this->get('security.context')->getToken()->getUser();

        $Contacts = $em->getRepository('EieinstitutBundle:Contact')->findBy(array('contact_user1' => $User));


        return $this->render('EieinstitutBundle:Contact:liste_contact.html.twig', array("Contacts" => $Contacts));
    }

    public function demande_contactAction() {
        $session = new Session();
        $session->set('CurrentMenu', 'EspacePersonnel');
        /* $Contacts = $em->getRepository('EieinstitutBundle:Contact')->findBy(array('contact_user1' => $User ));
         */
        $em = $this->getDoctrine()->getManager();
        $Userconnecte = $this->get('security.context')->getToken()->getUser();
        $request = $this->getRequest();
        $btn_search = $request->request->get('search');
        $btn_ajout = $request->request->get('ajout');
        $txt_nom = "";
        $Contacts = "";
        $Users = "";
        if (isset($btn_search)) {
            $txt_nom = $request->request->get('txt_nom');
            $txt_prenom = $request->request->get('txt_prenom');
            $txt_email = $request->request->get('txt_email');



            //$Users = $em->getRepository('EieinstitutBundle:User')->findall();
            /* $ContactsConnecte = $em->createQuery('SELECT c FROM  EieinstitutBundle:Contact c WHERE c.parent_user_id = :idcontact')
              ->setParameter('idcontact', '%'. $Userconnecte.'%')
              ->getResult(); */
            $Contacts = $em->getRepository('EieinstitutBundle:Contact')->findBy(array('contact_user1' => $Userconnecte));

            $Users = $em
                    ->createQuery('SELECT u FROM EieinstitutBundle:User u WHERE  (u.nom LIKE :nom or u.prenom LIKE :prenom or u.email LIKE :email)')
                    ->setParameter('nom', '%' . $txt_nom . '%')
                    ->setParameter('prenom', '%' . $txt_nom . '%')
                    ->setParameter('email', '%' . $txt_nom . '%')
                    ->getResult();
        }
        /* if(isset($btn_ajout)){
          $UserChild = $em->getRepository('EieinstitutBundle:User')->findOneBy(array('id'=> $id));
          $UserParent = $this->get('security.context')->getToken()->getUser();
          $contact = new Contact;
          $contact->setContact_user2($UserChild);
          $contact->setContact_user1($UserParent);
          $em->persist($contact);
          $em->flush();


          } */


        return $this->render('EieinstitutBundle:Contact:demande_contact.html.twig', array("Users" => $Users, "mots" => $txt_nom, "Contacts" => $Contacts));
    }

    public function supprimer_contactAction() {

        $em = $this->getDoctrine()->getManager();
        $request = $this->getRequest();
        $idContact = $request->request->get('idContact');
        if ($idContact) {
            $Contact = $em->getRepository('EieinstitutBundle:Contact')->findOneBy(array('id' => $idContact));
            $em->remove($Contact);
            $em->flush();
        }
        return $this->redirect($this->generateUrl('list_contact'));
    }

    public function ajouter_contactAction() {
        $em = $this->getDoctrine()->getManager();
        $request = $this->getRequest();
        $id = $request->request->get('id');
        $UserChild = $em->getRepository('EieinstitutBundle:User')->findOneBy(array('id' => $id));
        $UserParent = $this->get('security.context')->getToken()->getUser();
        $contact = new Contact;
        $contact->setContact_user2($UserChild);
        $contact->setContact_user1($UserParent);
        $em->persist($contact);
        $em->flush();

        //demande_contact         
    }

    public function profile_contactAction($profile) {

        $em = $this->getDoctrine()->getManager();
        $request = $this->getRequest();


        $profil = $request->request->get('profile');

        if ($profile) {
            $Profiles = $em
                    ->createQuery('SELECT u FROM EieinstitutBundle:User u WHERE  (u.id = :profile)')
                    ->setParameter('profile', $profile)
                    ->getResult();
            return $this->render('EieinstitutBundle:Contact:profile_contact.html.twig', array("Profiles" => $Profiles));
        } else {
            return $this->redirect($this->generateUrl('list_contact'));
        }
    }

    public function agendaAction() {
        /* $em = $this->getDoctrine()->getEntityManager();


          $User = $this->get('security.context')->getToken()->getUser();
          //By(array('evenements_user' => $User )
          $Evenements = $em->getRepository('EieinstitutBundle:Evenements')->findBy(array('evenements_user' => $User ));
          $annee = new \DateTime("Y");
          //$annee = (string)$annee;
          $mois = new \DateTime("m");
          //$mois = (string)$mois; */

        return $this->redirect($this->generateUrl('Navigation_agenda', array('annee' => "2014", 'mois' => "01")));
        //$this->render('EieinstitutBundle:Pages:agenda.html.twig', array('Evenements' => $Evenements,'annee'=>$annee, 'mois'=>$mois));
    }

    public function navigation_agendaAction($annee, $mois) {
        $em = $this->getDoctrine()->getManager();



        $User = $this->get('security.context')->getToken()->getUser();
        //By(array('evenements_user' => $User )
        $Evenements = $em->getRepository('EieinstitutBundle:Evenements')->findBy(array('user' => $User));

        //die($date->format("Y-m-d H:i:s")); 

        return $this->render('EieinstitutBundle:Portefolio:agenda.html.twig', array('Evenements' => $Evenements, 'annee' => $annee, 'mois' => $mois));
    }

    public function ajouter_evenementAction() {
        //EntityManager
        $em = $this->getDoctrine()->getManager();
        //request
        $request = $this->getRequest();

        /* @var $User type */
        $User = $this->get('security.context')->getToken()->getUser();
        //Récupération
        $param_date = $request->request->get('param_date');
        $param_Titre = $request->request->get('param_Titre');

        $evenement = new Evenements();
        $evenement->setTitre($param_Titre);
        $evenement->setDateDebut(new \DateTime($param_date . " 10:30:00"));
        $evenement->setDateFin(new \DateTime("01-01-2014 10:30:00"));

        /* $evenement->setAlarme($param_Titre);
          $evenement->setTitre($param_Titre);
          $evenement->setTitre($param_Titre);
          $evenement->setTitre($param_Titre); */
        $evenement->setEvenements_user($User);
        $em->persist($evenement);
        $em->flush();

        return $this->redirect($this->generateUrl('Navigation_agenda', array('annee' => "2014", 'mois' => "01")));

        // return new Response('Bien Ajouter ' );
    }

}
