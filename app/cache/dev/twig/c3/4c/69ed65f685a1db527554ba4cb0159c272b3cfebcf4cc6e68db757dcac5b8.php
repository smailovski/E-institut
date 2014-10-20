<?php

/* EieinstitutBundle::include/Footer.html.twig */
class __TwigTemplate_c34c69ed65f685a1db527554ba4cb0159c272b3cfebcf4cc6e68db757dcac5b8 extends Twig_Template
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
        echo "<article class=\"container_12\">
\t
\t\t<div class=\"clear\"></div>
\t<!-- content footer-->
\t\t<section class=\"grid_12\">

\t\t\t<div class=\"block-border\">
                   <div class=\"block-content\">
\t\t\t\t   <div class=\"block-controls\">
\t\t\t\t\t
\t\t\t\t   <!-- list of members -->
\t\t\t
\t\t\t\t    <ul class=\"gallery   float-left\" >
\t\t\t\t\t<legend> Membres</legend>
\t\t\t\t\t <li title=\"Université de Ouagadougou\"> 
\t\t\t\t\t\t\t<a href=\"http://www.univ-ouaga.bf/\" target=\"_blank\"><img src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/logo/logo_univ-ouagadougou.gif"), "html", null, true);
        echo "\" width=\"64\" height=\"43\"></a>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"clear\"></div>
\t\t\t\t\t\t
\t\t\t\t\t</li>
\t\t\t\t\t
\t\t\t\t\t <li title=\"Université de Bamako\">
\t\t\t\t\t\t\t<a href=\"http://u-bamako.ml.refer.org/\" target=\"_blank\"><img src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/logo/logo_univ-bamako.gif"), "html", null, true);
        echo "\" width=\"64\" height=\"45\"></a>
\t\t\t\t\t\t<div class=\"clear\"></div>
\t\t\t\t\t
\t\t\t\t\t</li>
\t\t\t\t\t
\t\t\t\t\t <li title=\"Université Marien Ngouabi\">
\t\t\t\t\t\t\t<a href=\"http://www.univ-mngb.net/\" target=\"_blank\"><img src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/logo/logo_univ-marien-ngouabi.gif"), "html", null, true);
        echo "\" width=\"64\" height=\"50\"></a>
\t\t\t\t\t\t<div class=\"clear\"></div>
\t\t\t\t\t\t
\t\t\t\t\t</li>
\t\t\t\t\t
\t\t\t\t\t <li title=\"Université de Ndjamena\"> 
\t\t\t\t\t\t\t<a href=\"http://universite-ndjamena.org/\" target=\"_blank\"><img src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/logo/logo_univ-ndjamena.gif"), "html", null, true);
        echo "\" width=\"64\" height=\"48\"></a>
\t\t\t\t\t\t<div class=\"clear\"></div>
\t\t\t\t\t\t
\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t\t
\t\t\t\t\t<!-- end list-->
\t\t\t\t\t
\t\t\t\t\t <ul class=\"gallery   float-right\" >
\t\t\t\t\t<legend> Partenaires</legend>
\t\t\t\t\t<!-- list of partners -->
\t\t\t\t     <li title=\"acp\"> 
\t\t\t\t\t\t\t<a href=\"http://www.acp.int/\" target=\"_blank\"><img src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/logo/logo_acp.gif"), "html", null, true);
        echo "\" width=\"64\" height=\"43\"></a>
\t\t\t\t\t\t<div class=\"clear \"></div>
\t\t\t\t\t
\t\t\t\t\t</li>
\t\t\t\t\t
\t\t\t\t\t <li title=\"Université Blaise Pascal\">
\t\t\t\t\t\t\t<a href=\"http://www.univ-bpclermont.fr/\" target=\"_blank\"><img src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/logo/logo_ubp.gif"), "html", null, true);
        echo "\" width=\"64\" height=\"43\"></a>
\t\t\t\t\t\t<div class=\"clear\"></div>
\t\t\t\t\t\t
\t\t\t\t\t</li>
\t\t\t\t\t<!-- end list-->
\t\t\t\t
                      </ul> 
\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t      <div class=\"grid_3\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<h2 id=\"step7\">E-institut</h2>
\t\t\t\t\t\t\t    <ul class=\"bullet-list\">
\t\t\t\t\t\t\t   
\t\t\t\t\t\t\t\t   <li><a href=\"";
        // line 67
        echo $this->env->getExtension('routing')->getPath("A_propos");
        echo "\">À propos</a></li>
\t\t\t\t\t\t\t\t   <li><a href=\"";
        // line 68
        echo $this->env->getExtension('routing')->getPath("Concept");
        echo "\">Concept</a></li>
\t\t\t\t\t\t\t\t   <li><a href=\"#\">Presse</a></li>
\t\t\t\t\t\t\t\t   <li><a href=\"#\">Le blog</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<div class=\"clear\"></div>
                       </div>
                       <div class=\"grid_3\">
\t\t\t\t\t    
\t\t\t\t\t\t
\t\t\t\t\t\t<h2 id=\"step7\">Aide</h2>
\t\t\t\t\t\t <ul class=\"bullet-list\">
\t\t\t\t\t\t\t<li><a href=\"";
        // line 79
        echo $this->env->getExtension('routing')->getPath("AIDE_FAQ");
        echo "\">F.A.Q</a></li> 
                                                        
                                                        <li><a href=\"";
        // line 81
        echo $this->env->getExtension('routing')->getPath("AIDE_Security");
        echo "\">Sécurité </a></li>
                                                        <li><a href=\"";
        // line 82
        echo $this->env->getExtension('routing')->getPath("AIDE_Contact");
        echo "\">Contact </a></li> 
\t\t\t\t\t   </ul>
\t\t\t\t\t\t<div class=\"clear\"></div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>\t
                       <div class=\"grid_3\">
                        \t\t<h2 id=\"step7\">Légal</h2>\t\t\t\t\t   \t
\t\t\t\t\t\t\t <ul class=\"bullet-list\">
\t\t\t\t\t\t\t   \t\t\t\t\t
\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 91
        echo $this->env->getExtension('routing')->getPath("AIDE_Charte");
        echo "\">Conditions d'utilisation</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 92
        echo $this->env->getExtension('routing')->getPath("Legal_Vie_privee");
        echo "\">Vie privée</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 93
        echo $this->env->getExtension('routing')->getPath("Legal_Licence");
        echo "\">Licences ouvertures</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 94
        echo $this->env->getExtension('routing')->getPath("Legal_Signaler");
        echo "\">Signaler</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 95
        echo $this->env->getExtension('routing')->getPath("Legal_Mention");
        echo "\">Mentions légales</a></li>\t\t\t\t\t\t\t\t
                            </ul>
\t\t\t\t\t\t\t<div class=\"clear\"></div>
                       </div>
                    
                       <div class=\"grid_3 form\">
                              <ul class=\"controls-buttons\">
\t\t\t\t\t\t\t\t<li><a href=\"https://www.facebook.com/pages/E-Institut-Espace-Num%C3%A9rique-Acad%C3%A9mique-Unifi%C3%A9-ENAU/212028762219064\" target=\"_blank\"><img src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/social/fb.png"), "html", null, true);
        echo "\" width=\"24\" height=\"24\"></a></li>
\t\t\t\t\t\t\t\t<li><a href=\"https://twitter.com/EInstitut\"target=\"_blank\"><img src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/social/tw.png"), "html", null, true);
        echo "\" width=\"24\" height=\"24\"></a></li>
\t\t\t\t\t\t\t\t<li><a href=\"http://www.linkedin.com/pub/e-institut/45/a43/168\" target=\"_blank\"><img src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/social/ln.png"), "html", null, true);
        echo "\" width=\"24\" height=\"24\"></a></li>
\t\t\t\t\t\t\t\t<li><a href=\"http://www.youtube.com/channel/UCNJWFhvZoYW_Qx-GoHHRBcw\" target=\"_blank\"><img src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/social/yt.png"), "html", null, true);
        echo "\" width=\"24\" height=\"24\"></a></li>
\t\t\t\t\t\t\t\t<li><a href=\"https://plus.google.com/112849304228527795761/posts\" target=\"_blank\"><img src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/social/goo.png"), "html", null, true);
        echo "\" width=\"24\" height=\"24\"></a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\" target=\"_blank\"><img src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/social/rss.png"), "html", null, true);
        echo "\" width=\"24\" height=\"24\"></a></li>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t        <legend>Newsletter</legend>
\t\t\t\t\t\t        <p></p>
\t\t\t\t\t\t        <p>
\t\t\t\t\t\t<label for=\"simple-calendar\">Votre adresse email :</label>
\t\t\t\t\t\t<span class=\"input-type-text margin-right relative\"><input type=\"text\" name=\"simple-calendar\" id=\"simple-calendar\" value=\"\" class=\"datepicker hasDatepick\"><img src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/mail.png"), "html", null, true);
        echo "\" width=\"16\" height=\"16\">
\t\t\t\t\t\t
\t\t\t\t\t\t</span> 
\t\t\t\t\t\t<button type=\"button\" class=\"grey\">S'inscrire</button>
\t\t\t\t\t</p>
\t\t\t\t\t\t    </fieldset>
\t\t\t\t\t\t<div class=\"clear\"></div>
                       </div>
\t\t\t\t\t\t
                       <div class=\"clear\"></div>
                       <!-- Footer block -->
                       <div class=\"block-footer\">
                           <!--<div class=\"float-right\">-->
                               Copyright E-institut © 2014 · Tous droits réservés
                          <!-- </div>-->
                           
\t\t\t\t\t\t   
                       </div>
\t\t\t\t\t   
                       </div>
                   </div>
\t\t</section>

\t</article>
\t<!-- End content footer-->
\t\t
\t

\t<footer>
\t\t
\t\t<div class=\"float-left\">
\t\t\t<div  class=\"button\">Copyright E-institut © 2014 · All rights reserved</div>
\t\t\t<a href=\"#\" class=\"button red\">Aide!</a>
\t\t\t<a href=\"#\" class=\"button grey\">À propos</a>
\t\t</div>
\t\t
\t\t<div class=\"float-right\">
\t\t\t<a href=\"#top\" class=\"button\"><img src=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/navigation-090.png"), "html", null, true);
        echo "\" width=\"16\" height=\"16\">Haut de page</a>
\t\t</div>
\t\t
\t</footer>";
    }

    public function getTemplateName()
    {
        return "EieinstitutBundle::include/Footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  241 => 152,  201 => 115,  182 => 105,  174 => 103,  160 => 95,  148 => 92,  144 => 91,  132 => 82,  123 => 79,  109 => 68,  88 => 53,  55 => 29,  46 => 23,  338 => 146,  333 => 145,  328 => 143,  303 => 123,  294 => 116,  285 => 113,  281 => 112,  277 => 111,  273 => 110,  270 => 109,  254 => 103,  240 => 96,  235 => 94,  231 => 93,  228 => 92,  223 => 90,  221 => 89,  194 => 67,  187 => 66,  180 => 64,  169 => 57,  167 => 56,  155 => 50,  147 => 48,  145 => 47,  138 => 46,  134 => 44,  131 => 43,  128 => 81,  125 => 41,  122 => 40,  119 => 39,  116 => 38,  113 => 37,  110 => 36,  107 => 35,  104 => 34,  93 => 30,  84 => 27,  81 => 26,  78 => 25,  72 => 23,  69 => 22,  67 => 21,  56 => 13,  52 => 12,  48 => 11,  44 => 10,  36 => 16,  32 => 7,  22 => 2,  19 => 1,  683 => 508,  680 => 507,  675 => 97,  664 => 87,  648 => 10,  642 => 510,  493 => 363,  488 => 361,  484 => 360,  253 => 132,  249 => 100,  243 => 128,  237 => 95,  233 => 124,  229 => 123,  224 => 121,  216 => 119,  212 => 118,  206 => 115,  198 => 113,  186 => 106,  179 => 99,  177 => 96,  170 => 102,  163 => 87,  161 => 84,  154 => 80,  117 => 46,  111 => 43,  105 => 67,  101 => 33,  95 => 31,  91 => 35,  87 => 28,  83 => 33,  79 => 47,  75 => 24,  71 => 30,  64 => 35,  57 => 22,  53 => 21,  49 => 20,  45 => 19,  37 => 13,  35 => 10,  24 => 1,  946 => 475,  942 => 474,  938 => 473,  935 => 472,  932 => 471,  911 => 453,  897 => 441,  887 => 438,  883 => 437,  857 => 413,  841 => 405,  835 => 404,  829 => 403,  825 => 402,  821 => 401,  816 => 398,  812 => 397,  792 => 380,  780 => 370,  757 => 352,  755 => 351,  752 => 350,  746 => 348,  743 => 347,  736 => 345,  733 => 344,  730 => 343,  728 => 342,  718 => 340,  715 => 339,  712 => 338,  709 => 337,  706 => 336,  704 => 335,  701 => 334,  696 => 333,  694 => 332,  690 => 330,  685 => 326,  678 => 323,  674 => 321,  672 => 96,  669 => 319,  667 => 88,  659 => 85,  656 => 84,  653 => 312,  651 => 11,  646 => 308,  643 => 307,  640 => 507,  637 => 305,  634 => 304,  631 => 303,  628 => 302,  625 => 301,  622 => 300,  619 => 299,  616 => 298,  614 => 297,  611 => 296,  606 => 295,  603 => 294,  600 => 293,  597 => 292,  594 => 291,  591 => 290,  589 => 289,  560 => 262,  550 => 258,  544 => 255,  540 => 254,  534 => 251,  530 => 250,  520 => 243,  517 => 242,  510 => 239,  504 => 237,  498 => 235,  492 => 233,  486 => 231,  480 => 229,  474 => 227,  468 => 225,  462 => 223,  456 => 221,  450 => 219,  444 => 217,  442 => 216,  434 => 210,  430 => 209,  423 => 204,  413 => 200,  407 => 197,  403 => 196,  397 => 193,  393 => 192,  383 => 185,  380 => 184,  373 => 181,  367 => 179,  361 => 177,  355 => 175,  349 => 173,  343 => 148,  337 => 169,  331 => 167,  325 => 165,  319 => 163,  313 => 161,  307 => 159,  305 => 158,  297 => 152,  293 => 151,  282 => 142,  272 => 138,  266 => 108,  262 => 134,  256 => 131,  252 => 130,  242 => 123,  239 => 122,  232 => 119,  226 => 91,  220 => 120,  214 => 113,  208 => 111,  202 => 114,  196 => 107,  190 => 107,  184 => 102,  178 => 104,  172 => 93,  166 => 90,  164 => 96,  156 => 94,  152 => 93,  98 => 32,  90 => 29,  80 => 32,  70 => 27,  60 => 22,  43 => 7,  40 => 9,  33 => 4,  30 => 3,);
    }
}
