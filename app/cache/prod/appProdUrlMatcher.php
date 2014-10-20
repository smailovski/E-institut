<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);

        if (0 === strpos($pathinfo, '/admin')) {
            // ei_administration_homepage
            if ($pathinfo === '/admin/index') {
                return array (  '_controller' => 'Ei\\AdministrationBundle\\Controller\\DefaultController::indexAction',  '_route' => 'ei_administration_homepage',);
            }

            // ei_administration_page
            if ($pathinfo === '/admin/page') {
                return array (  '_controller' => 'Ei\\AdministrationBundle\\Controller\\DefaultController::pageAction',  '_route' => 'ei_administration_page',);
            }

            // new_page
            if (rtrim($pathinfo, '/') === '/admin/ajoute_page') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'new_page');
                }

                return array (  '_controller' => 'Ei\\AdministrationBundle\\Controller\\DefaultController::ajoute_pageAction',  '_route' => 'new_page',);
            }

            // modifier_page
            if (0 === strpos($pathinfo, '/admin/modifier_page') && preg_match('#^/admin/modifier_page/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'modifier_page')), array (  '_controller' => 'Ei\\AdministrationBundle\\Controller\\DefaultController::modifier_pageAction',));
            }

            // ei_administration_supprimer_page
            if (rtrim($pathinfo, '/') === '/admin/supprimer_page') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'ei_administration_supprimer_page');
                }

                return array (  '_controller' => 'Ei\\AdministrationBundle\\Controller\\DefaultController::supprimer_pageAction',  '_route' => 'ei_administration_supprimer_page',);
            }

            // ei_administration_ressource
            if ($pathinfo === '/admin/ressources') {
                return array (  '_controller' => 'Ei\\AdministrationBundle\\Controller\\DefaultController::ressourcesAction',  '_route' => 'ei_administration_ressource',);
            }

            // ei_administration_ajouter_ressource
            if ($pathinfo === '/admin/ajouter_ressource') {
                return array (  '_controller' => 'Ei\\AdministrationBundle\\Controller\\DefaultController::ajouter_ressourceAction',  '_route' => 'ei_administration_ajouter_ressource',);
            }

            // ei_administration_supprimer_ressource
            if (rtrim($pathinfo, '/') === '/admin/supprimer_ressource') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'ei_administration_supprimer_ressource');
                }

                return array (  '_controller' => 'Ei\\AdministrationBundle\\Controller\\DefaultController::supprimer_ressourceAction',  '_route' => 'ei_administration_supprimer_ressource',);
            }

            // ei_administration_modifier_ressource
            if (0 === strpos($pathinfo, '/admin/modifier_ressource') && preg_match('#^/admin/modifier_ressource/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ei_administration_modifier_ressource')), array (  '_controller' => 'Ei\\AdministrationBundle\\Controller\\DefaultController::modifier_ressourceAction',));
            }

            // ei_administration_listeuser
            if ($pathinfo === '/admin/users') {
                return array (  '_controller' => 'Ei\\AdministrationBundle\\Controller\\DefaultController::listeuserAction',  '_route' => 'ei_administration_listeuser',);
            }

            // ei_administration_newsletter
            if ($pathinfo === '/admin/newsletter') {
                return array (  '_controller' => 'Ei\\AdministrationBundle\\Controller\\DefaultController::newsletterAction',  '_route' => 'ei_administration_newsletter',);
            }

            // ajouter_actualite
            if ($pathinfo === '/admin/ajouter_actualite') {
                return array (  '_controller' => 'Ei\\AdministrationBundle\\Controller\\DefaultController::ajouter_actualiteAction',  '_route' => 'ajouter_actualite',);
            }

            // liste_actualite
            if ($pathinfo === '/admin/liste_actualite') {
                return array (  '_controller' => 'Ei\\AdministrationBundle\\Controller\\DefaultController::liste_actualiteAction',  '_route' => 'liste_actualite',);
            }

            // supprimer_actualite
            if ($pathinfo === '/admin/supprimer_actualite') {
                return array (  '_controller' => 'Ei\\AdministrationBundle\\Controller\\DefaultController::supprimer_actualiteAction',  '_route' => 'supprimer_actualite',);
            }

            // modifier_actualite
            if (0 === strpos($pathinfo, '/admin/modifier_actualite') && preg_match('#^/admin/modifier_actualite/(?P<actualite>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'modifier_actualite')), array (  '_controller' => 'Ei\\AdministrationBundle\\Controller\\DefaultController::modifier_actualiteAction',));
            }

            // ei_administration_preconisation
            if ($pathinfo === '/admin/preconisation') {
                return array (  '_controller' => 'Ei\\AdministrationBundle\\Controller\\DefaultController::preconisationAction',  '_route' => 'ei_administration_preconisation',);
            }

            // ei_administration_ajouter_preconisation
            if (0 === strpos($pathinfo, '/admin/ajouter_preconisation') && preg_match('#^/admin/ajouter_preconisation(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ei_administration_ajouter_preconisation')), array (  '_controller' => 'Ei\\AdministrationBundle\\Controller\\DefaultController::ajouter_preconisationAction',));
            }

            // ei_administration_supprimer_preconisation
            if (rtrim($pathinfo, '/') === '/admin/supprimer_preconisation') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'ei_administration_supprimer_preconisation');
                }

                return array (  '_controller' => 'Ei\\AdministrationBundle\\Controller\\DefaultController::supprimer_preconisationAction',  '_route' => 'ei_administration_supprimer_preconisation',);
            }

            if (0 === strpos($pathinfo, '/admin/m')) {
                if (0 === strpos($pathinfo, '/admin/modifier_')) {
                    // ei_administration_modifier_preconisation
                    if (0 === strpos($pathinfo, '/admin/modifier_preconisation') && preg_match('#^/admin/modifier_preconisation/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ei_administration_modifier_preconisation')), array (  '_controller' => 'Ei\\AdministrationBundle\\Controller\\DefaultController::modifier_preconisationAction',));
                    }

                    // ei_administration_modifier_note
                    if (0 === strpos($pathinfo, '/admin/modifier_note') && preg_match('#^/admin/modifier_note/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ei_administration_modifier_note')), array (  '_controller' => 'Ei\\AdministrationBundle\\Controller\\DefaultController::modifier_noteAction',));
                    }

                }

                if (0 === strpos($pathinfo, '/admin/messages_')) {
                    // ei_administration_Recus
                    if ($pathinfo === '/admin/messages_recus') {
                        return array (  '_controller' => 'Ei\\AdministrationBundle\\Controller\\DefaultController::messages_recusAction',  '_route' => 'ei_administration_Recus',);
                    }

                    // ei_administration_Envoyes
                    if ($pathinfo === '/admin/messages_envoyes') {
                        return array (  '_controller' => 'Ei\\AdministrationBundle\\Controller\\DefaultController::messages_envoyesAction',  '_route' => 'ei_administration_Envoyes',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/admin/details_message')) {
                // ei_administration_details_message
                if (preg_match('#^/admin/details_message/(?P<message>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ei_administration_details_message')), array (  '_controller' => 'Ei\\AdministrationBundle\\Controller\\DefaultController::details_messageAction',));
                }

                // ei_administration_details_message1
                if (0 === strpos($pathinfo, '/admin/details_message1') && preg_match('#^/admin/details_message1/(?P<message>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ei_administration_details_message1')), array (  '_controller' => 'Ei\\AdministrationBundle\\Controller\\DefaultController::details_message1Action',));
                }

            }

            // ei_administration_Nouveau_message
            if ($pathinfo === '/admin/nouveau_message') {
                return array (  '_controller' => 'Ei\\AdministrationBundle\\Controller\\DefaultController::nouveau_messageAction',  '_route' => 'ei_administration_Nouveau_message',);
            }

            // ei_administration_Repondre
            if ($pathinfo === '/admin/repondre_message') {
                return array (  '_controller' => 'Ei\\AdministrationBundle\\Controller\\DefaultController::repondre_messageAction',  '_route' => 'ei_administration_Repondre',);
            }

            // ei_administration_supprimer_messages
            if ($pathinfo === '/admin/supprimer_messages') {
                return array (  '_controller' => 'Ei\\AdministrationBundle\\Controller\\DefaultController::supprimer_messagesAction',  '_route' => 'ei_administration_supprimer_messages',);
            }

            // Ajouter_tuto
            if ($pathinfo === '/admin/ajouter_tuto') {
                return array (  '_controller' => 'Ei\\AdministrationBundle\\Controller\\DefaultController::ajouter_tutoAction',  '_route' => 'Ajouter_tuto',);
            }

            // Liste_tuto
            if ($pathinfo === '/admin/liste_tuto') {
                return array (  '_controller' => 'Ei\\AdministrationBundle\\Controller\\DefaultController::liste_tutoAction',  '_route' => 'Liste_tuto',);
            }

        }

        // eieinstitut_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'eieinstitut_homepage');
            }

            return array (  '_controller' => 'Ei\\einstitutBundle\\Controller\\DefaultController::indexAction',  '_route' => 'eieinstitut_homepage',);
        }

        // Espace_Personnel
        if ($pathinfo === '/user/espace_personnel') {
            return array (  '_controller' => 'Ei\\einstitutBundle\\Controller\\DefaultController::espace_PersonnelAction',  '_route' => 'Espace_Personnel',);
        }

        // Forum
        if ($pathinfo === '/forum') {
            return array (  '_controller' => 'Ei\\einstitutBundle\\Controller\\DefaultController::forumAction',  '_route' => 'Forum',);
        }

        // Annuaire
        if ($pathinfo === '/user/annuaire') {
            return array (  '_controller' => 'Ei\\einstitutBundle\\Controller\\DefaultController::annuaireAction',  '_route' => 'Annuaire',);
        }

        if (0 === strpos($pathinfo, '/messages_')) {
            // Recus
            if ($pathinfo === '/messages_recus') {
                return array (  '_controller' => 'Ei\\einstitutBundle\\Controller\\DefaultController::messages_recusAction',  '_route' => 'Recus',);
            }

            // Envoyes
            if ($pathinfo === '/messages_envoyes') {
                return array (  '_controller' => 'Ei\\einstitutBundle\\Controller\\DefaultController::messages_envoyesAction',  '_route' => 'Envoyes',);
            }

        }

        if (0 === strpos($pathinfo, '/supprimer_messages')) {
            // supprimer_messages
            if ($pathinfo === '/supprimer_messages') {
                return array (  '_controller' => 'Ei\\einstitutBundle\\Controller\\DefaultController::supprimer_messagesAction',  '_route' => 'supprimer_messages',);
            }

            // supprimer_messages1
            if (0 === strpos($pathinfo, '/supprimer_messages1') && preg_match('#^/supprimer_messages1/(?P<message>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'supprimer_messages1')), array (  '_controller' => 'Ei\\einstitutBundle\\Controller\\DefaultController::supprimer_messages1Action',));
            }

        }

        if (0 === strpos($pathinfo, '/details_message')) {
            // details_message
            if (preg_match('#^/details_message/(?P<message>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'details_message')), array (  '_controller' => 'Ei\\einstitutBundle\\Controller\\DefaultController::details_messageAction',));
            }

            // details_message1
            if (0 === strpos($pathinfo, '/details_message1') && preg_match('#^/details_message1/(?P<message>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'details_message1')), array (  '_controller' => 'Ei\\einstitutBundle\\Controller\\DefaultController::details_message1Action',));
            }

        }

        // Nouveau_message
        if ($pathinfo === '/nouveau_message') {
            return array (  '_controller' => 'Ei\\einstitutBundle\\Controller\\DefaultController::nouveau_messageAction',  '_route' => 'Nouveau_message',);
        }

        // Repondre
        if ($pathinfo === '/repondre_message') {
            return array (  '_controller' => 'Ei\\einstitutBundle\\Controller\\DefaultController::repondre_messageAction',  '_route' => 'Repondre',);
        }

        if (0 === strpos($pathinfo, '/Aide_')) {
            // AIDE_FAQ
            if ($pathinfo === '/Aide_FAQ') {
                return array (  '_controller' => 'Ei\\einstitutBundle\\Controller\\footerController::Aide_FAQAction',  '_route' => 'AIDE_FAQ',);
            }

            // AIDE_Charte
            if ($pathinfo === '/Aide_Charte') {
                return array (  '_controller' => 'Ei\\einstitutBundle\\Controller\\footerController::Aide_CharteAction',  '_route' => 'AIDE_Charte',);
            }

            // AIDE_Security
            if ($pathinfo === '/Aide_Security') {
                return array (  '_controller' => 'Ei\\einstitutBundle\\Controller\\footerController::Aide_SecurityAction',  '_route' => 'AIDE_Security',);
            }

            // AIDE_Contact
            if ($pathinfo === '/Aide_Contact') {
                return array (  '_controller' => 'Ei\\einstitutBundle\\Controller\\footerController::Aide_ContactAction',  '_route' => 'AIDE_Contact',);
            }

        }

        if (0 === strpos($pathinfo, '/Legal_')) {
            // Legal_Condition
            if ($pathinfo === '/Legal_Condition') {
                return array (  '_controller' => 'Ei\\einstitutBundle\\Controller\\footerController::Legal_ConditionAction',  '_route' => 'Legal_Condition',);
            }

            // Legal_Licence
            if ($pathinfo === '/Legal_Licence') {
                return array (  '_controller' => 'Ei\\einstitutBundle\\Controller\\footerController::Legal_LicenceAction',  '_route' => 'Legal_Licence',);
            }

            // Legal_Mention
            if ($pathinfo === '/Legal_Mention') {
                return array (  '_controller' => 'Ei\\einstitutBundle\\Controller\\footerController::Legal_MentionAction',  '_route' => 'Legal_Mention',);
            }

            // Legal_Signaler
            if ($pathinfo === '/Legal_Signaler') {
                return array (  '_controller' => 'Ei\\einstitutBundle\\Controller\\footerController::Legal_SignalerAction',  '_route' => 'Legal_Signaler',);
            }

            // Legal_Vie_privee
            if ($pathinfo === '/Legal_Vie_privee') {
                return array (  '_controller' => 'Ei\\einstitutBundle\\Controller\\footerController::Legal_Vie_priveeAction',  '_route' => 'Legal_Vie_privee',);
            }

        }

        // A_propos
        if ($pathinfo === '/A_propos') {
            return array (  '_controller' => 'Ei\\einstitutBundle\\Controller\\footerController::A_proposAction',  '_route' => 'A_propos',);
        }

        // Concept
        if ($pathinfo === '/Concept') {
            return array (  '_controller' => 'Ei\\einstitutBundle\\Controller\\footerController::ConceptAction',  '_route' => 'Concept',);
        }

        // Utilisateurs
        if ($pathinfo === '/utilisateurs') {
            return array (  '_controller' => 'Ei\\einstitutBundle\\Controller\\AdminController::utilisateursAction',  '_route' => 'Utilisateurs',);
        }

        // new_utilisateur
        if (0 === strpos($pathinfo, '/new_utilisateur') && preg_match('#^/new_utilisateur/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'new_utilisateur')), array (  '_controller' => 'Ei\\einstitutBundle\\Controller\\AdminController::gerer_utilisateurAction',));
        }

        // modifier_utilisateur
        if (0 === strpos($pathinfo, '/modifier_utilisateur') && preg_match('#^/modifier_utilisateur/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'modifier_utilisateur')), array (  '_controller' => 'Ei\\einstitutBundle\\Controller\\AdminController::gerer_utilisateurAction',));
        }

        // supprimer_utilisateur
        if ($pathinfo === '/supprimer_utilisateur') {
            return array (  '_controller' => 'Ei\\einstitutBundle\\Controller\\AdminController::supprimer_utilisateurAction',  '_route' => 'supprimer_utilisateur',);
        }

        // detail_ressource
        if (0 === strpos($pathinfo, '/detail_ressource') && preg_match('#^/detail_ressource/(?P<fiche>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'detail_ressource')), array (  '_controller' => 'Ei\\einstitutBundle\\Controller\\DefaultController::detail_ressourceAction',));
        }

        if (0 === strpos($pathinfo, '/re')) {
            // recherche_ressource
            if ($pathinfo === '/recherche_ressource') {
                return array (  '_controller' => 'Ei\\einstitutBundle\\Controller\\DefaultController::recherche_ressourceAction',  '_route' => 'recherche_ressource',);
            }

            // Ressources
            if (0 === strpos($pathinfo, '/ressources') && preg_match('#^/ressources(?:/(?P<page>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'Ressources')), array (  '_controller' => 'Ei\\einstitutBundle\\Controller\\ressourcesController::ressourcesAction',  'page' => 1,));
            }

        }

        // mes_ressources
        if (0 === strpos($pathinfo, '/mes_ressources') && preg_match('#^/mes_ressources(?:/(?P<page>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'mes_ressources')), array (  '_controller' => 'Ei\\einstitutBundle\\Controller\\ressourcesController::mes_ressourcesAction',  'page' => 1,));
        }

        // action_fiche
        if ($pathinfo === '/action_fiche') {
            return array (  '_controller' => 'Ei\\einstitutBundle\\Controller\\DefaultController::action_ficheAction',  '_route' => 'action_fiche',);
        }

        if (0 === strpos($pathinfo, '/user')) {
            // Ressources_Ajouter
            if ($pathinfo === '/user/ajouter_ressource') {
                return array (  '_controller' => 'Ei\\einstitutBundle\\Controller\\DefaultController::ajouter_ressourceAction',  '_route' => 'Ressources_Ajouter',);
            }

            // preconiser_ressource
            if (0 === strpos($pathinfo, '/user/preconiser_ressource') && preg_match('#^/user/preconiser_ressource/(?P<fiche>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'preconiser_ressource')), array (  '_controller' => 'Ei\\einstitutBundle\\Controller\\DefaultController::preconiser_ressourceAction',));
            }

            // list_contact
            if ($pathinfo === '/user/liste_contact') {
                return array (  '_controller' => 'Ei\\einstitutBundle\\Controller\\UsagerController::liste_contactAction',  '_route' => 'list_contact',);
            }

            // supprimer_contact
            if (rtrim($pathinfo, '/') === '/user/supprimer_contact') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'supprimer_contact');
                }

                return array (  '_controller' => 'Ei\\einstitutBundle\\Controller\\UsagerController::supprimer_contactAction',  '_route' => 'supprimer_contact',);
            }

            // demande_contact
            if ($pathinfo === '/user/demande_contact') {
                return array (  '_controller' => 'Ei\\einstitutBundle\\Controller\\UsagerController::demande_contactAction',  '_route' => 'demande_contact',);
            }

            // ajouter_contact
            if ($pathinfo === '/user/ajouter_contact') {
                return array (  '_controller' => 'Ei\\einstitutBundle\\Controller\\UsagerController::ajouter_contactAction',  '_route' => 'ajouter_contact',);
            }

            // profile_contact
            if (0 === strpos($pathinfo, '/user/profile_contact') && preg_match('#^/user/profile_contact/(?P<profile>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'profile_contact')), array (  '_controller' => 'Ei\\einstitutBundle\\Controller\\UsagerController::profile_contactAction',));
            }

        }

        // mon_compte
        if ($pathinfo === '/mon_compte') {
            return array (  '_controller' => 'Ei\\einstitutBundle\\Controller\\DefaultController::mon_compteAction',  '_route' => 'mon_compte',);
        }

        // profil
        if ($pathinfo === '/profil') {
            return array (  '_controller' => 'Ei\\einstitutBundle\\Controller\\DefaultController::profilAction',  '_route' => 'profil',);
        }

        if (0 === strpos($pathinfo, '/user/agenda')) {
            // _agenda
            if ($pathinfo === '/user/agenda') {
                return array (  '_controller' => 'Ei\\einstitutBundle\\Controller\\UsagerController::agendaAction',  '_route' => '_agenda',);
            }

            // Navigation_agenda
            if (preg_match('#^/user/agenda/(?P<annee>[^/]++)/(?P<mois>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'Navigation_agenda')), array (  '_controller' => 'Ei\\einstitutBundle\\Controller\\UsagerController::navigation_agendaAction',));
            }

            // Ajouter_evenement
            if ($pathinfo === '/user/agenda/ajouter_evenement') {
                return array (  '_controller' => 'Ei\\einstitutBundle\\Controller\\UsagerController::ajouter_evenementAction',  '_route' => 'Ajouter_evenement',);
            }

        }

        // nouveau_message
        if ($pathinfo === '/nouveau_message') {
            return array (  '_controller' => 'Ei\\einstitutBundle\\Controller\\DefaultController::nouveau_messageAction',  '_route' => 'nouveau_message',);
        }

        if (0 === strpos($pathinfo, '/messages_')) {
            // messages_envoyes
            if ($pathinfo === '/messages_envoyes') {
                return array (  '_controller' => 'Ei\\einstitutBundle\\Controller\\DefaultController::messages_envoyesAction',  '_route' => 'messages_envoyes',);
            }

            // messages_recus
            if ($pathinfo === '/messages_recus') {
                return array (  '_controller' => 'Ei\\einstitutBundle\\Controller\\DefaultController::messages_recusAction',  '_route' => 'messages_recus',);
            }

        }

        // brouillon
        if ($pathinfo === '/brouillon') {
            return array (  '_controller' => 'Ei\\einstitutBundle\\Controller\\DefaultController::brouillonAction',  '_route' => 'brouillon',);
        }

        if (0 === strpos($pathinfo, '/actualite')) {
            // detail_actualite
            if (0 === strpos($pathinfo, '/actualite/detail_actualite') && preg_match('#^/actualite/detail_actualite/(?P<actualite>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'detail_actualite')), array (  '_controller' => 'Ei\\einstitutBundle\\Controller\\DefaultController::detail_actualiteAction',));
            }

            // actualite
            if ($pathinfo === '/actualite') {
                return array (  '_controller' => 'Ei\\einstitutBundle\\Controller\\DefaultController::actualiteAction',  '_route' => 'actualite',);
            }

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        if (0 === strpos($pathinfo, '/log')) {
            // logout
            if ($pathinfo === '/logout') {
                return array('_route' => 'logout');
            }

            // login
            if ($pathinfo === '/login') {
                return array('_route' => 'login');
            }

        }

        // inscription
        if ($pathinfo === '/inscription') {
            return array (  '_controller' => 'Ei\\einstitutBundle\\Controller\\DefaultController::inscriptionAction',  '_route' => 'inscription',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
