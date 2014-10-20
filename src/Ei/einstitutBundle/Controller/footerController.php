<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Ei\einstitutBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class footerController extends Controller
{
    public function Aide_FAQAction()
    {
        return $this->render('EieinstitutBundle:Pages/Aide:F.A.Q.html.twig');
    }
    public function Aide_ContactAction()
    {
        return $this->render('EieinstitutBundle:Pages/Aide:Contact.html.twig');
    }
    public function Aide_SecurityAction()
    {
        return $this->render('EieinstitutBundle:Pages/Aide:Security.html.twig');
    }
    public function Aide_CharteAction()
    {
        return $this->render('EieinstitutBundle:Pages/Aide:Charte_utilisation.html.twig');
    } 
    
    public function Legal_ConditionAction()
    {
        return $this->render('EieinstitutBundle:Pages/Legal:Condition_utilisation.html.twig');
    } 
    public function Legal_LicenceAction()
    {
        return $this->render('EieinstitutBundle:Pages/Legal:Licence.html.twig');
    } 
    public function Legal_MentionAction()
    {
        return $this->render('EieinstitutBundle:Pages/Legal:Mention_legal.html.twig');
    } 
    public function Legal_SignalerAction()
    {
        return $this->render('EieinstitutBundle:Pages/Legal:Signaler.html.twig');
    } 
    public function Legal_Vie_priveeAction()
    {
        return $this->render('EieinstitutBundle:Pages/Legal:vie_privee.html.twig');
    } 
    public function A_proposAction()
    {
        return $this->render('EieinstitutBundle:Pages:A_propos.html.twig');
    } 
    public function ConceptAction()
    {
        return $this->render('EieinstitutBundle:Pages:Concept.html.twig');
    } 
}
?>
