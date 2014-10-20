<?php

namespace Ei\einstitutBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Ei\einstitutBundle\Entity\User;

class AdminController extends Controller {

    public function utilisateursAction() {
        $em = $this->getDoctrine()->getManager();
        $Users = $em->getRepository('EieinstitutBundle:User')->findall();
        return $this->render('EieinstitutBundle:Pages:utilisateurs.html.twig', array('Users' => $Users));
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
            //$validation = $request->request->get('validation');
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
                //$User->set($validation);
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
            //$validation = $request->request->get('validation');
            $login = $request->request->get('login');
            $password = $request->request->get('password');
            $confpassword = $request->request->get('confpassword');

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
                $User->setEnabled(true);
                $User->setPassword($password);
                $factory = $this->get('security.encoder_factory');
                $encoder = $factory->getEncoder($User);
                $password = $encoder->encodePassword($User->getPassword(), $User->getSalt());
                $User->setPassword($password);

                $em->persist($User);
                $em->flush();
                return $this->redirect($this->generateUrl('new_utilisateur', array('id' => $id)));
            } else if ($password = '' && $confpassword = '') {

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
                $User->setEnabled(true);
                $em->persist($User);
                $em->flush();
            }
        } else if (isset($actionRetour)) {

            return $this->redirect($this->generateUrl('Utilisateurs', array('id' => '')));
        } else if (isset($actionSupprimer)) {

            $em = $this->getDoctrine()->getManager();
            $request = $this->getRequest();
            if ($id != 'add') {

                $em->remove($User);
                $em->flush();
                $msge = "Actualité Supprimer";
            }
            return $this->redirect($this->generateUrl('Utilisateurs', array('id' => '')));
        }



        return $this->render('EieinstitutBundle:Pages:gerer_utilisateur.html.twig', array("User" => $User, "id" => $id));
    }

    public function supprimer_utilisateurAction() {
        $em = $this->getDoctrine()->getManager();
        $request = $this->getRequest();
        $id = $request->request->get('param_id');
        $User = $em->getRepository('EieinstitutBundle:User')->findOneBy(array("id" => $id));
        $em->remove($User);
        $em->flush();
        return $this->redirect($this->generateUrl('Utilisateurs', array('id' => '')));
    }

}
