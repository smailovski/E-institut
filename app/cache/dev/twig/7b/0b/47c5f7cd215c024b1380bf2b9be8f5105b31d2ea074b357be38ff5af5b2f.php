<?php

/* EieinstitutBundle::include/Header.html.twig */
class __TwigTemplate_7b0b47c5f7cd215c024b1380bf2b9be8f5105b31d2ea074b357be38ff5af5b2f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "\t<!-- Header -->
\t<a href=\"";
        // line 2
        echo $this->env->getExtension('routing')->getPath("eieinstitut_homepage");
        echo "\"><img style=\"float:left;padding-left:10%;padding-top:5px;\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/logo_s2.png"), "html", null, true);
        echo "\" width=\"231\" height=\"91\"></a>
\t<!-- Server status -->
\t<header>
            
\t\t<div class=\"container_12\">
\t\t\t<div class=\"server-info\"><a href=\"https://www.facebook.com/pages/E-Institut-Espace-Num%C3%A9rique-Acad%C3%A9mique-Unifi%C3%A9-ENAU/212028762219064\" target=\"_blank\"><img src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/social/fb.png"), "html", null, true);
        echo "\" width=\"24\" height=\"24\"></a></div>
\t\t\t<div class=\"server-info\"><a href=\"https://twitter.com/EInstitut\"target=\"_blank\"><img src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/social/tw.png"), "html", null, true);
        echo "\" width=\"24\" height=\"24\"></a></div>
\t\t\t<div class=\"server-info\"><a href=\"http://www.linkedin.com/pub/e-institut/45/a43/168\" target=\"_blank\"><img src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/social/ln.png"), "html", null, true);
        echo "\" width=\"24\" height=\"24\"></a> </div>
\t\t\t<div class=\"server-info\"><a href=\"http://www.youtube.com/channel/UCNJWFhvZoYW_Qx-GoHHRBcw\" target=\"_blank\"><img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/social/yt.png"), "html", null, true);
        echo "\" width=\"24\" height=\"24\"></a></div>
\t\t\t<div class=\"server-info\"><a href=\"https://plus.google.com/112849304228527795761/posts\" target=\"_blank\"><img src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/social/goo.png"), "html", null, true);
        echo "\" width=\"24\" height=\"24\"></a></div>
\t\t\t<div class=\"server-info\"><a href=\"#\" target=\"_blank\"><img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/social/rss.png"), "html", null, true);
        echo "\" width=\"24\" height=\"24\"></a></div>
                        <div class=\"server-info\" style=\"padding:0;\"><center><div style=\"font-weight:Bold; background-color:#373737; color:#f8b332;\">Accéder à RAMSES :</div> </center><a href=\"http://www.reseau-ramses.org/\" target=\"_blank\"><img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/logo_ramses.png"), "html", null, true);
        echo "\" width=\"219\" height=\"69\"></a></div>
\t\t</div>
\t</header>
\t<!-- End server status -->
\t
\t
\t<nav id=\"main-nav\">
\t\t<ul class=\"container_12\">
                        ";
        // line 21
        $context["CurrentMenu"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "CurrentMenu"), "method");
        // line 22
        echo "                        ";
        $context["index"] = "";
        // line 23
        echo "                        ";
        $context["EspacePersonnel"] = "";
        // line 24
        echo "                        ";
        $context["Ressources"] = "";
        // line 25
        echo "                        ";
        $context["TutorielsEnLigne"] = "";
        // line 26
        echo "                        ";
        $context["Annuaire"] = "";
        // line 27
        echo "                        ";
        $context["Forum"] = "";
        // line 28
        echo "                        ";
        $context["Actualites"] = "";
        // line 29
        echo "                        
                        ";
        // line 30
        if (((isset($context["CurrentMenu"]) ? $context["CurrentMenu"] : $this->getContext($context, "CurrentMenu")) == "index")) {
            // line 31
            echo "                            ";
            $context["index"] = "current";
            // line 32
            echo "                        ";
        } elseif (((isset($context["CurrentMenu"]) ? $context["CurrentMenu"] : $this->getContext($context, "CurrentMenu")) == "EspacePersonnel")) {
            // line 33
            echo "                            ";
            $context["EspacePersonnel"] = "current";
            // line 34
            echo "                        ";
        } elseif (((isset($context["CurrentMenu"]) ? $context["CurrentMenu"] : $this->getContext($context, "CurrentMenu")) == "Ressources")) {
            // line 35
            echo "                            ";
            $context["Ressources"] = "current";
            // line 36
            echo "                        ";
        } elseif (((isset($context["CurrentMenu"]) ? $context["CurrentMenu"] : $this->getContext($context, "CurrentMenu")) == "TutorielsEnLigne")) {
            // line 37
            echo "                            ";
            $context["TutorielsEnLigne"] = "current";
            // line 38
            echo "                        ";
        } elseif (((isset($context["CurrentMenu"]) ? $context["CurrentMenu"] : $this->getContext($context, "CurrentMenu")) == "Annuaire")) {
            // line 39
            echo "                            ";
            $context["Annuaire"] = "current";
            // line 40
            echo "                        ";
        } elseif (((isset($context["CurrentMenu"]) ? $context["CurrentMenu"] : $this->getContext($context, "CurrentMenu")) == "Forum")) {
            // line 41
            echo "                            ";
            $context["Forum"] = "current";
            // line 42
            echo "                        ";
        } elseif (((isset($context["CurrentMenu"]) ? $context["CurrentMenu"] : $this->getContext($context, "CurrentMenu")) == "Actualites")) {
            // line 43
            echo "                            ";
            $context["Actualites"] = "current";
            // line 44
            echo "                        
                        ";
        }
        // line 46
        echo "\t\t\t<li class=\"accueil ";
        echo twig_escape_filter($this->env, (isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")), "html", null, true);
        echo "\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("eieinstitut_homepage");
        echo "\" title=\"\">Accueil</a></li>
                        ";
        // line 47
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user")) {
            // line 48
            echo "\t\t\t<li class=\"users ";
            echo twig_escape_filter($this->env, (isset($context["EspacePersonnel"]) ? $context["EspacePersonnel"] : $this->getContext($context, "EspacePersonnel")), "html", null, true);
            echo "\" title=\"Espace personnel\"><a href=\"";
            echo $this->env->getExtension('routing')->getPath("Espace_Personnel");
            echo "\" title=\"\">Espace personnel</a></li>
                        ";
        }
        // line 50
        echo "\t\t\t<li class=\"medias ";
        echo twig_escape_filter($this->env, (isset($context["Ressources"]) ? $context["Ressources"] : $this->getContext($context, "Ressources")), "html", null, true);
        echo "\" title=\"Ressources\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("Ressources");
        echo "\" title=\"\">Ressources</a>
                           <!-- <ul>
                                <li><a href=\"#\" title=\"Articles\">Ressources</a></li>
                                <li><a href=\"#\" title=\"Add article\">Ajouter Ressource</a></li>
                            </ul>-->
                        </li>
                        ";
        // line 56
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user")) {
            // line 57
            echo "\t\t\t<li class=\"settings  ";
            echo twig_escape_filter($this->env, (isset($context["TutorielsEnLigne"]) ? $context["TutorielsEnLigne"] : $this->getContext($context, "TutorielsEnLigne")), "html", null, true);
            echo "\" title=\"Tutoriels en ligne\"><a href=\"#\" title=\"\">Tutoriels en ligne</a>
                            <!--<ul>
                                <li><a href=\"#\" title=\"Articles\">TBI & Visio</a></li>
                                <li><a href=\"#\" title=\"Add article\">Tutoriels en cours</a></li>
                                <li><a href=\"#\" title=\"Add article\">Demande en cours</a></li>
                            </ul>-->
                        </li>
\t\t\t<li class=\"contacts ";
            // line 64
            echo twig_escape_filter($this->env, (isset($context["Annuaire"]) ? $context["Annuaire"] : $this->getContext($context, "Annuaire")), "html", null, true);
            echo "\" title=\"Annuaire\"><a href=\"";
            echo $this->env->getExtension('routing')->getPath("Annuaire");
            echo "\" title=\"\">Annuaire</a></li>
                        ";
        }
        // line 66
        echo "\t\t\t<li class=\"comments ";
        echo twig_escape_filter($this->env, (isset($context["Forum"]) ? $context["Forum"] : $this->getContext($context, "Forum")), "html", null, true);
        echo "\" title=\"Forum\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("Forum");
        echo "\" title=\"\">Forum</a></li>
                        <li class=\"write ";
        // line 67
        echo twig_escape_filter($this->env, (isset($context["Actualites"]) ? $context["Actualites"] : $this->getContext($context, "Actualites")), "html", null, true);
        echo "\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("actualite");
        echo "\" title=\"Actualités\">Actualités</a></li>
\t\t</ul>
\t</nav>
\t\t
\t\t\t
\t<!-- End main nav -->
\t
\t<!-- Sub nav -->
\t<div id=\"sub-nav\"><div class=\"container_12\">
\t\t
\t\t<a href=\"#\" title=\"Aide\" class=\"nav-button\"><b>Rechercher</b></a>
\t
\t\t<form id=\"search-form\" name=\"search-form\" method=\"post\" action=\"search.html\">
\t\t\t<input type=\"text\" name=\"s\" id=\"s\" value=\"\" title=\"Search admin...\" autocomplete=\"off\">
\t\t</form>
\t
\t</div></div>
\t<!-- End sub nav -->
\t
\t<!-- Status bar -->
\t<div id=\"status-bar\">
\t\t<div class=\"container_12\">
                        ";
        // line 89
        $context["messages"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "messages"), "method");
        // line 90
        echo "\t\t\t<ul id=\"status-infos\">
                            ";
        // line 91
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user")) {
            // line 92
            echo "                                
                            <li class=\"spaced\">Bonjour  <strong>";
            // line 93
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "username"), "html", null, true);
            echo "</strong></li>
                            ";
            // line 94
            if (($this->env->getExtension('security')->isGranted("ROLE_ADMIN") || $this->env->getExtension('security')->isGranted("ROLE_CONTRIBUTEUR"))) {
                // line 95
                echo "                            <li class=\"spaced\">
                                <a href=\"";
                // line 96
                echo $this->env->getExtension('routing')->getPath("ei_administration_homepage");
                echo "\" id=\"breadcrumb\"><img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/application-blog.png"), "html", null, true);
                echo "\" width=\"16\" height=\"16\"> <font color=\"#FFFFFF\">Administration</font></a>
\t\t\t
                            </li>
                            ";
            }
            // line 100
            echo "                           
                                
\t\t\t<li>
\t\t\t\t<a href=\"#\" class=\"button\" title=\"";
            // line 103
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages"))), "html", null, true);
            echo " messages\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/mail.png"), "html", null, true);
            echo "\" width=\"16\" height=\"16\"> <strong>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "msg"), "method"), "html", null, true);
            echo "</strong></a>
\t\t\t\t<div id=\"messages-list\" class=\"result-block\" style=\"display: none;\">
\t\t\t\t\t<span class=\"arrow\"><span></span></span>
\t\t\t\t\t
\t\t\t\t\t<ul class=\"small-files-list icon-mail relative\" style=\"overflow: hidden;\">
\t\t\t\t\t\t";
            // line 108
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")));
            foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                // line 109
                echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
                // line 110
                echo $this->env->getExtension('routing')->getPath("messages_recus");
                echo "\">
\t\t\t\t\t\t\t<strong>";
                // line 111
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["msg"]) ? $context["msg"] : $this->getContext($context, "msg")), "dateMessage"), "H:II"), "html", null, true);
                echo "</strong>
\t\t\t\t\t\t\t";
                // line 112
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["msg"]) ? $context["msg"] : $this->getContext($context, "msg")), "objet"), "html", null, true);
                echo "<br>
\t\t\t\t\t\t\t<small>De : ";
                // line 113
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["msg"]) ? $context["msg"] : $this->getContext($context, "msg")), "messagesuser"), "username"), "html", null, true);
                echo "</small></a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 116
            echo "\t\t\t\t\t\t
\t\t\t\t\t</ul>
\t\t\t\t\t
\t\t\t\t\t<p id=\"messages-info\" class=\"result-info\"><a href=\"#\">Boîte de réception</a></p>
\t\t\t\t</div>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\" class=\"button\" title=\"2 comments\"><img src=\"";
            // line 123
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/balloon.png"), "html", null, true);
            echo "\" width=\"16\" height=\"16\"> <strong>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "notif"), "method"), "html", null, true);
            echo "</strong></a>
\t\t\t\t<div id=\"comments-list\" class=\"result-block\">
\t\t\t\t\t<span class=\"arrow\"><span></span></span>
\t\t\t\t\t
\t\t\t\t\t<!--<ul class=\"small-files-list icon-comment\">
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\"><strong>Jane</strong>: I don't think so<br>
\t\t\t\t\t\t\t<small>On <strong>Post title</strong></small></a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\"><strong>Ken_54</strong>: What about using a different...<br>
\t\t\t\t\t\t\t<small>On <strong>Post title</strong></small></a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t</ul>-->
\t\t\t\t\t
\t\t\t\t\t<p id=\"comments-info\" class=\"result-info\"><a href=\"#\">Voir tous les notifications</a></p>
\t\t\t\t</div>
\t\t\t</li>
\t\t\t
                        <li><a href=\"";
            // line 143
            echo $this->env->getExtension('routing')->getPath("logout");
            echo "\" class=\"button red\" title=\"Déconnexion\"><span class=\"smaller\">Déconnexion</span></a></li>
                        ";
        } else {
            // line 145
            echo "                            <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("inscription");
            echo "\"  class=\"button gray\" title=\"Inscription\"><span class=\"smaller\">Inscription</span></a></li>
                            <li><a href=\"";
            // line 146
            echo $this->env->getExtension('routing')->getPath("login");
            echo "\"  class=\"button green\" title=\"Connexion\"><span class=\"smaller\">Connexion</span></a></li>
                         ";
        }
        // line 148
        echo "\t\t</ul>
\t\t\t
\t\t\t<ul id=\"breadcrumb\">
\t\t\t\t<li><a href=\"#\" title=\"Accueil\">Accueil</a></li>
\t\t\t</ul>
\t\t</div>
\t</div>
\t<!-- End status bar -->
\t
\t<div id=\"header-shadow\"></div>
\t<!-- End header -->

\t
\t<!-- Always visible control bar 
\t<div id=\"control-bar\" class=\"grey-bg clearfix\"><div class=\"container_12\">
\t
\t\t<div class=\"float-left\">
\t\t\t<button type=\"button\"><img src=\"\" width=\"16\" height=\"16\"> Accueil E-INSTITUT</button>
\t\t</div>
\t\t
\t\t<div class=\"float-right\"> 
\t\t\t
\t\t</div>
\t\t\t
\t</div></div>-->";
    }

    public function getTemplateName()
    {
        return "EieinstitutBundle::include/Header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  338 => 146,  333 => 145,  328 => 143,  303 => 123,  294 => 116,  285 => 113,  281 => 112,  277 => 111,  273 => 110,  270 => 109,  254 => 103,  240 => 96,  235 => 94,  231 => 93,  228 => 92,  223 => 90,  221 => 89,  194 => 67,  187 => 66,  180 => 64,  169 => 57,  167 => 56,  155 => 50,  147 => 48,  145 => 47,  138 => 46,  134 => 44,  131 => 43,  128 => 42,  125 => 41,  122 => 40,  119 => 39,  116 => 38,  113 => 37,  110 => 36,  107 => 35,  104 => 34,  93 => 30,  84 => 27,  81 => 26,  78 => 25,  72 => 23,  69 => 22,  67 => 21,  56 => 13,  52 => 12,  48 => 11,  44 => 10,  36 => 8,  32 => 7,  22 => 2,  19 => 1,  683 => 508,  680 => 507,  675 => 97,  664 => 87,  648 => 10,  642 => 510,  493 => 363,  488 => 361,  484 => 360,  253 => 132,  249 => 100,  243 => 128,  237 => 95,  233 => 124,  229 => 123,  224 => 121,  216 => 119,  212 => 118,  206 => 115,  198 => 113,  186 => 103,  179 => 99,  177 => 96,  170 => 92,  163 => 87,  161 => 84,  154 => 80,  117 => 46,  111 => 43,  105 => 40,  101 => 33,  95 => 31,  91 => 35,  87 => 28,  83 => 33,  79 => 32,  75 => 24,  71 => 30,  64 => 26,  57 => 22,  53 => 21,  49 => 20,  45 => 19,  37 => 13,  35 => 10,  24 => 1,  946 => 475,  942 => 474,  938 => 473,  935 => 472,  932 => 471,  911 => 453,  897 => 441,  887 => 438,  883 => 437,  857 => 413,  841 => 405,  835 => 404,  829 => 403,  825 => 402,  821 => 401,  816 => 398,  812 => 397,  792 => 380,  780 => 370,  757 => 352,  755 => 351,  752 => 350,  746 => 348,  743 => 347,  736 => 345,  733 => 344,  730 => 343,  728 => 342,  718 => 340,  715 => 339,  712 => 338,  709 => 337,  706 => 336,  704 => 335,  701 => 334,  696 => 333,  694 => 332,  690 => 330,  685 => 326,  678 => 323,  674 => 321,  672 => 96,  669 => 319,  667 => 88,  659 => 85,  656 => 84,  653 => 312,  651 => 11,  646 => 308,  643 => 307,  640 => 507,  637 => 305,  634 => 304,  631 => 303,  628 => 302,  625 => 301,  622 => 300,  619 => 299,  616 => 298,  614 => 297,  611 => 296,  606 => 295,  603 => 294,  600 => 293,  597 => 292,  594 => 291,  591 => 290,  589 => 289,  560 => 262,  550 => 258,  544 => 255,  540 => 254,  534 => 251,  530 => 250,  520 => 243,  517 => 242,  510 => 239,  504 => 237,  498 => 235,  492 => 233,  486 => 231,  480 => 229,  474 => 227,  468 => 225,  462 => 223,  456 => 221,  450 => 219,  444 => 217,  442 => 216,  434 => 210,  430 => 209,  423 => 204,  413 => 200,  407 => 197,  403 => 196,  397 => 193,  393 => 192,  383 => 185,  380 => 184,  373 => 181,  367 => 179,  361 => 177,  355 => 175,  349 => 173,  343 => 148,  337 => 169,  331 => 167,  325 => 165,  319 => 163,  313 => 161,  307 => 159,  305 => 158,  297 => 152,  293 => 151,  282 => 142,  272 => 138,  266 => 108,  262 => 134,  256 => 131,  252 => 130,  242 => 123,  239 => 122,  232 => 119,  226 => 91,  220 => 120,  214 => 113,  208 => 111,  202 => 114,  196 => 107,  190 => 105,  184 => 102,  178 => 101,  172 => 93,  166 => 90,  164 => 96,  156 => 90,  152 => 89,  98 => 32,  90 => 29,  80 => 32,  70 => 27,  60 => 22,  43 => 7,  40 => 9,  33 => 4,  30 => 3,);
    }
}
