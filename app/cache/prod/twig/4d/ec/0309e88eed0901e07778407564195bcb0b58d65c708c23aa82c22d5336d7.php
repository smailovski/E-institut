<?php

/* EieinstitutBundle::Master-Base.html.twig */
class __TwigTemplate_4dec0309e88eed0901e07778407564195bcb0b58d65c708c23aa82c22d5336d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'content' => array($this, 'block_content'),
            'javascripts_Bottom' => array($this, 'block_javascripts_Bottom'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!doctype html>
<!--[if lt IE 8 ]><html lang=\"en\" class=\"no-js ie ie7\"><![endif]-->
<!--[if IE 8 ]><html lang=\"en\" class=\"no-js ie\"><![endif]-->
<!--[if (gt IE 8)|!(IE)]><!-->
<html lang=\"en\" class=\"no-js\"><!--<![endif]-->
<head>
\t<meta charset=\"UTF-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
\t<title>
            ";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        // line 13
        echo "\t</title>
\t<meta name=\"description\" content=\"\">
\t<meta name=\"author\" content=\"\">
        
        
        <!-- Global stylesheets -->
\t<link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/css/reset.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
\t<link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/css/common.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
\t<link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/css/form.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
\t<link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/css/standard.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
\t
\t<!-- Comment/uncomment one of these files to toggle between fixed and fluid layout -->
\t<!--<link href=\"css/960.gs.css\" rel=\"stylesheet\" type=\"text/css\">-->
\t<link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/css/960.gs.fluid.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
\t
\t<!-- Custom styles -->
        
\t<link href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/css/simple-lists.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
\t<link href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/css/block-lists.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
\t<link href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/css/planning.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
\t<link href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/css/table.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
\t<link href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/css/calendars.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
\t<link href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/css/wizard.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
\t<link href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/css/gallery.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
\t
\t<!-- Favicon -->
\t<link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/favicon.ico"), "html", null, true);
        echo "\">
\t<link rel=\"icon\" type=\"image/png\" href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/favicon-large.png"), "html", null, true);
        echo "\">
\t
\t<!-- Modernizr for support detection, all javascript libs are moved right above </body> for better performance -->
\t<script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/js/libs/modernizr.custom.min.js"), "html", null, true);
        echo "\"></script>
        
        <!-- js tinymce editeur textareaavec id editable -->
        <script type=\"text/javascript\" src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/js/tinymce/tinymce.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\">
tinymce.init({
        selector: \"textarea#editable\",
        toolbar_items_size: 'small',
        plugins: [
                \"advlist autolink autosave link image lists charmap print preview hr anchor pagebreak spellchecker\",
                \"searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking\",
                \"table contextmenu directionality emoticons template textcolor paste textcolor\"
        ],
        toolbar1: \"bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | styleselect formatselect fontselect fontsizeselect\",
        toolbar2: \"cut copy paste | searchreplace | bullist numlist | outdent indent blockquote | undo redo | code | forecolor backcolor\",
        toolbar3: \"table | hr removeformat | subscript superscript  | ltr rtl | spellchecker | visualchars visualblocks nonbreaking template pagebreak restoredraft\",
        force_p_newlines : false,
        menubar: false,
        toolbar_items_size: 'small',
        style_formats: [
                {title: 'Bold text', inline: 'b'},
                {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
                {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
                {title: 'Example 1', inline: 'span', classes: 'example1'},
                {title: 'Example 2', inline: 'span', classes: 'example2'},
                {title: 'Table styles'},
        ],
        language : 'fr_FR',

});</script>   
\t
\t<!--///////////////////////////////////////////////////////////////////////////////////////////////////
        //
        //\t\tStyles Camera Slide
        //
        ///////////////////////////////////////////////////////////////////////////////////////////////////-->
        
        <link rel='stylesheet' id='camera-css'  href='";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/css/camera.css"), "html", null, true);
        echo "' type='text/css' media='all'>
 

        
        ";
        // line 84
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 87
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 90
        echo "</head>
<body>
    ";
        // line 92
        $this->env->loadTemplate("EieinstitutBundle::include/Header.html.twig")->display($context);
        // line 93
        echo "
\t<article class=\"container_12\">

\t";
        // line 96
        $this->displayBlock('content', $context, $blocks);
        // line 99
        echo "
\t</article>
\t
    ";
        // line 102
        $this->env->loadTemplate("EieinstitutBundle::include/Footer.html.twig")->display($context);
        // line 103
        echo "    
         
     <!--
\t
\tUpdated as v1.5:
\tLibs are moved here to improve performance
\t
\t-->
\t
\t<!-- Generic libs -->
\t<script src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/js/libs/jquery-1.6.3.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/js/old-browsers.js"), "html", null, true);
        echo "\"></script>\t\t<!-- remove if you do not need older browsers detection -->
\t<script src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/js/libs/jquery.hashchange.js"), "html", null, true);
        echo "\"></script>
\t
\t<!-- Template libs -->
\t<script src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/js/jquery.accessibleList.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/js/searchField.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/js/common.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/js/standard.js"), "html", null, true);
        echo "\"></script>
\t<!--[if lte IE 8]><script src=\"js/standard.ie.js\"></script><![endif]-->
\t<script src=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/js/jquery.tip.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/js/jquery.contextMenu.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/js/jquery.modal.js"), "html", null, true);
        echo "\"></script>
\t
\t<!-- Custom styles lib -->
\t<script src=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/js/list.js"), "html", null, true);
        echo "\"></script>
\t
\t<!-- Plugins -->
\t<script src=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/js/libs/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/js/libs/jquery.datepick/jquery.datepick.min.js"), "html", null, true);
        echo "\"></script>
\t


\t

\t<!-- Charts library -->
\t<!--Load the AJAX API-->
\t<script src=\"http://www.google.com/jsapi\"></script>
       
        
        
        <script>
\t\t
\t\t/*
\t\t * This script shows how to setup the various template plugins and functions
\t\t */
\t\t
\t\t\$(document).ready(function()
\t\t{
\t\t\t/*
\t\t\t * Example context menu
\t\t\t */
\t\t\t
\t\t\t// Context menu for all favorites
\t\t\t\$('.favorites li').bind('contextMenu', function(event, list)
\t\t\t{
\t\t\t\tvar li = \$(this);
\t\t\t\t
\t\t\t\t// Add links to the menu
\t\t\t\tif (li.prev().length > 0)
\t\t\t\t{
\t\t\t\t\tlist.push({ text: 'Move up', link:'#', icon:'up' });
\t\t\t\t}
\t\t\t\tif (li.next().length > 0)
\t\t\t\t{
\t\t\t\t\tlist.push({ text: 'Move down', link:'#', icon:'down' });
\t\t\t\t}
\t\t\t\tlist.push(false);\t// Separator
\t\t\t\tlist.push({ text: 'Delete', link:'#', icon:'delete' });
\t\t\t\tlist.push({ text: 'Edit', link:'#', icon:'edit' });
\t\t\t});
\t\t\t
\t\t\t// Extra options for the first one
\t\t\t\$('.favorites li:first').bind('contextMenu', function(event, list)
\t\t\t{
\t\t\t\tlist.push(false);\t// Separator
\t\t\t\tlist.push({ text: 'Settings', icon:'terminal', link:'#', subs:[
\t\t\t\t\t{ text: 'General settings', link: '#', icon: 'blog' },
\t\t\t\t\t{ text: 'System settings', link: '#', icon: 'server' },
\t\t\t\t\t{ text: 'Website settings', link: '#', icon: 'network' }
\t\t\t\t] });
\t\t\t});
\t\t\t
\t\t\t/*
\t\t\t * Dynamic tab content loading
\t\t\t */
\t\t\t
\t\t\t\$('#tab-comments').onTabShow(function()
\t\t\t{
\t\t\t\t\$(this).loadWithEffect('ajax-tab.html', function()
\t\t\t\t{
\t\t\t\t\tnotify('Content loaded via ajax');
\t\t\t\t});
\t\t\t}, true);
\t\t\t
\t\t\t/*
\t\t\t * Table sorting
\t\t\t */
\t\t\t
\t\t\t// A small classes setup...
\t\t\t\$.fn.dataTableExt.oStdClasses.sWrapper = 'no-margin last-child';
\t\t\t\$.fn.dataTableExt.oStdClasses.sInfo = 'message no-margin';
\t\t\t\$.fn.dataTableExt.oStdClasses.sLength = 'float-left';
\t\t\t\$.fn.dataTableExt.oStdClasses.sFilter = 'float-right';
\t\t\t\$.fn.dataTableExt.oStdClasses.sPaging = 'sub-hover paging_';
\t\t\t\$.fn.dataTableExt.oStdClasses.sPagePrevEnabled = 'control-prev';
\t\t\t\$.fn.dataTableExt.oStdClasses.sPagePrevDisabled = 'control-prev disabled';
\t\t\t\$.fn.dataTableExt.oStdClasses.sPageNextEnabled = 'control-next';
\t\t\t\$.fn.dataTableExt.oStdClasses.sPageNextDisabled = 'control-next disabled';
\t\t\t\$.fn.dataTableExt.oStdClasses.sPageFirst = 'control-first';
\t\t\t\$.fn.dataTableExt.oStdClasses.sPagePrevious = 'control-prev';
\t\t\t\$.fn.dataTableExt.oStdClasses.sPageNext = 'control-next';
\t\t\t\$.fn.dataTableExt.oStdClasses.sPageLast = 'control-last';
\t\t\t
\t\t\t// Apply to table
\t\t\t\$('.sortable').each(function(i)
\t\t\t{
\t\t\t\t// DataTable config
\t\t\t\tvar table = \$(this),
\t\t\t\t\toTable = table.dataTable({
\t\t\t\t\t\t/*
\t\t\t\t\t\t * We set specific options for each columns here. Some columns contain raw data to enable correct sorting, so we convert it for display
\t\t\t\t\t\t * @url http://www.datatables.net/usage/columns
\t\t\t\t\t\t */
\t\t\t\t\t\taoColumns: [
\t\t\t\t\t\t\t{ bSortable: false },\t// No sorting for this columns, as it only contains checkboxes
\t\t\t\t\t\t\t{ sType: 'string' },
\t\t\t\t\t\t\t{ bSortable: false },
\t\t\t\t\t\t\t{ sType: 'numeric', bUseRendered: false, fnRender: function(obj) // Append unit and add icon
\t\t\t\t\t\t\t\t{
\t\t\t\t\t\t\t\t\treturn '<small><img src=\"images/icons/fugue/image.png\" width=\"16\" height=\"16\" class=\"picto\"> '+obj.aData[obj.iDataColumn]+' Ko</small>';
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t{ sType: 'date' },
\t\t\t\t\t\t\t{ sType: 'numeric', bUseRendered: false, fnRender: function(obj) // Size is given as float for sorting, convert to format 000 x 000
\t\t\t\t\t\t\t\t{
\t\t\t\t\t\t\t\t\treturn obj.aData[obj.iDataColumn].split('.').join(' x ');
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t{ bSortable: false }\t// No sorting for actions column
\t\t\t\t\t\t],
\t\t\t\t\t\t
\t\t\t\t\t\t/*
\t\t\t\t\t\t * Set DOM structure for table controls
\t\t\t\t\t\t * @url http://www.datatables.net/examples/basic_init/dom.html
\t\t\t\t\t\t */
\t\t\t\t\t\tsDom: '<\"block-controls\"<\"controls-buttons\"p>>rti<\"block-footer clearfix\"lf>',
\t\t\t\t\t\t
\t\t\t\t\t\t/*
\t\t\t\t\t\t * Callback to apply template setup
\t\t\t\t\t\t */
\t\t\t\t\t\tfnDrawCallback: function()
\t\t\t\t\t\t{
\t\t\t\t\t\t\tthis.parent().applyTemplateSetup();
\t\t\t\t\t\t},
\t\t\t\t\t\tfnInitComplete: function()
\t\t\t\t\t\t{
\t\t\t\t\t\t\tthis.parent().applyTemplateSetup();
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t
\t\t\t\t// Sorting arrows behaviour
\t\t\t\ttable.find('thead .sort-up').click(function(event)
\t\t\t\t{
\t\t\t\t\t// Stop link behaviour
\t\t\t\t\tevent.preventDefault();
\t\t\t\t\t
\t\t\t\t\t// Find column index
\t\t\t\t\tvar column = \$(this).closest('th'),
\t\t\t\t\t\tcolumnIndex = column.parent().children().index(column.get(0));
\t\t\t\t\t
\t\t\t\t\t// Send command
\t\t\t\t\toTable.fnSort([[columnIndex, 'asc']]);
\t\t\t\t\t
\t\t\t\t\t// Prevent bubbling
\t\t\t\t\treturn false;
\t\t\t\t});
\t\t\t\ttable.find('thead .sort-down').click(function(event)
\t\t\t\t{
\t\t\t\t\t// Stop link behaviour
\t\t\t\t\tevent.preventDefault();
\t\t\t\t\t
\t\t\t\t\t// Find column index
\t\t\t\t\tvar column = \$(this).closest('th'),
\t\t\t\t\t\tcolumnIndex = column.parent().children().index(column.get(0));
\t\t\t\t\t
\t\t\t\t\t// Send command
\t\t\t\t\toTable.fnSort([[columnIndex, 'desc']]);
\t\t\t\t\t
\t\t\t\t\t// Prevent bubbling
\t\t\t\t\treturn false;
\t\t\t\t});
\t\t\t});
\t\t\t
\t\t\t/*
\t\t\t * Datepicker
\t\t\t * Thanks to sbkyle! http://themeforest.net/user/sbkyle
\t\t\t */
\t\t\t\$('.datepicker').datepick({
\t\t\t\talignment: 'bottom',
\t\t\t\tshowOtherMonths: true,
\t\t\t\tselectOtherMonths: true,
\t\t\t\trenderer: {
\t\t\t\t\tpicker: '<div class=\"datepick block-border clearfix form\"><div class=\"mini-calendar clearfix\">' +
\t\t\t\t\t\t\t'{months}</div></div>',
\t\t\t\t\tmonthRow: '{months}', 
\t\t\t\t\tmonth: '<div class=\"calendar-controls\" style=\"white-space: nowrap\">' +
\t\t\t\t\t\t\t\t'{monthHeader:M yyyy}' +
\t\t\t\t\t\t\t'</div>' +
\t\t\t\t\t\t\t'<table cellspacing=\"0\">' +
\t\t\t\t\t\t\t\t'<thead>{weekHeader}</thead>' +
\t\t\t\t\t\t\t\t'<tbody>{weeks}</tbody></table>', 
\t\t\t\t\tweekHeader: '<tr>{days}</tr>', 
\t\t\t\t\tdayHeader: '<th>{day}</th>', 
\t\t\t\t\tweek: '<tr>{days}</tr>', 
\t\t\t\t\tday: '<td>{day}</td>', 
\t\t\t\t\tmonthSelector: '.month', 
\t\t\t\t\tdaySelector: 'td', 
\t\t\t\t\trtlClass: 'rtl', 
\t\t\t\t\tmultiClass: 'multi', 
\t\t\t\t\tdefaultClass: 'default', 
\t\t\t\t\tselectedClass: 'selected', 
\t\t\t\t\thighlightedClass: 'highlight', 
\t\t\t\t\ttodayClass: 'today', 
\t\t\t\t\totherMonthClass: 'other-month', 
\t\t\t\t\tweekendClass: 'week-end', 
\t\t\t\t\tcommandClass: 'calendar', 
\t\t\t\t\tcommandLinkClass: 'button',
\t\t\t\t\tdisabledClass: 'unavailable'
\t\t\t\t}
\t\t\t});
\t\t});
\t\t
\t\t// Demo modal
\t\tfunction openModal()
\t\t{
\t\t\t\$.modal({
\t\t\t\tcontent: '<p>This is an example of modal window. You can open several at the same time (click button below!), move them and resize them.</p>'+
\t\t\t\t\t\t  '<p>The plugin provides several other functions to control them, try below:</p>'+
\t\t\t\t\t\t  '<ul class=\"simple-list with-icon\">'+
\t\t\t\t\t\t  '    <li><a href=\"javascript:void(0)\" onclick=\"\$(this).getModalWindow().setModalTitle(\\'\\')\">Remove title</a></li>'+
\t\t\t\t\t\t  '    <li><a href=\"javascript:void(0)\" onclick=\"\$(this).getModalWindow().setModalTitle(\\'New title\\')\">Change title</a></li>'+
\t\t\t\t\t\t  '    <li><a href=\"javascript:void(0)\" onclick=\"\$(this).getModalWindow().loadModalContent(\\'ajax-modal.html\\')\">Load Ajax content</a></li>'+
\t\t\t\t\t\t  '</ul>',
\t\t\t\ttitle: 'Example modal window',
\t\t\t\tmaxWidth: 500,
\t\t\t\tbuttons: {
\t\t\t\t\t'Open new modal': function(win) { openModal(); },
\t\t\t\t\t'Close': function(win) { win.closeModal(); }
\t\t\t\t}
\t\t\t});
\t\t}
\t\t
\t\t//login Modal
\t\tfunction login()
\t\t{
\t\t\t\$.modal({
\t\t\t\tcontent: '<form action=\"";
        // line 360
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">'+
    \t\t\t\t\t\t'<label for=\"username\">";
        // line 361
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>'+
    \t\t\t\t\t\t'<input type=\"text\" id=\"username\" name=\"_username\" required=\"required\" />'+
\t\t\t\t\t\t    '<label for=\"password\">";
        // line 363
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>'+
\t\t\t\t\t\t    '<input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />'+

\t\t\t\t\t\t    '<input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />'+
\t\t\t\t\t\t    '<label for=\"remember_me\">Maintenire la connexion</label>'+

\t\t\t\t\t\t    '<input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"Connexion\" />'+
\t\t\t\t\t\t'</form>'
\t\t\t\t\t\t  ,
\t\t\t\ttitle: 'Connexion',
\t\t\t\tmaxWidth: 300,
\t\t\t\tbuttons: {
\t\t\t\t\t'Se connecter': function(win) { 
\t\t\t\t\t// Action login
\t\t\t\t\t },
\t\t\t\t\t'Fermer': function(win) { win.closeModal(); }
\t\t\t\t}
\t\t\t});
\t\t}
\t\t
\t\t
\t\t//Mot de passe oublié
\t\t
\t\t/*function ForgetMdp() 
\t\t{
\t\t\t\t
\t\t\t\t\$.modal({
\t\t\t\t\t
\t\t\t\t\tcontent: '<div class=\"form\">'+
\t\t\t\t
\t\t\t\t'<fieldset class=\"grey-bg\">'+
\t\t\t\t\t\t\t'<legend>Entrez votre email</legend>'+
\t\t\t\t\t\t\t'<div class=\"colx4-left-double required\">'+
\t\t\t\t\t\t\t\t\t\t'<label for=\"complex-fr-title\">Email</label>'+
\t\t\t\t\t\t\t\t\t\t'<span class=\"relative\">'+
\t\t\t\t\t\t\t\t\t\t'<input type=\"text\" name=\"nom\" id=\"complex-fr-title\" value=\"Email\" class=\"full-width\">'+
\t\t\t\t\t\t\t\t\t'<span class=\"check-ok\"></span>'+
\t\t\t\t\t\t\t\t'</span>'+
\t\t\t\t\t\t\t'</div><br>'+
\t\t\t\t\t\t'</fieldset>'+
\t\t\t\t\t\t
\t\t\t\t\t\t'',
\t\t\t\t\t\ttitle: 'Mot de passe oublié',
\t\t\t\t\t\tmaxWidth: 500,
\t\t\t\t\t\tbuttons: {
\t\t\t\t\t\t\t'Validé': function(win) { 
\t\t\t\t\t\t\t//action ici
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t'Annuler': function(win) { win.closeModal(); }
\t\t\t\t\t\t}
\t\t\t\t});
\t\t} */
\t\t
\t\t
\t\t\t// inscription modal
\t\tfunction inscriptionModal()
\t\t{
\t\t\t\$.modal({
\t\t\t\tcontent: '<div class=\"form\">'+
\t\t\t\t
\t\t\t\t'<fieldset class=\"grey-bg\">'+
\t\t\t\t\t\t\t'<legend>Vos informations</legend>'+
\t\t\t\t\t\t\t'<div class=\"colx4-left-double required\">'+
\t\t\t\t\t\t\t\t\t\t'<label for=\"complex-fr-title\">Nom</label>'+
\t\t\t\t\t\t\t\t\t\t'<span class=\"relative\">'+
\t\t\t\t\t\t\t\t\t\t'<input type=\"text\" name=\"nom\" id=\"complex-fr-title\" value=\"Votre nom\" class=\"full-width\">'+
\t\t\t\t\t\t\t\t\t'<span class=\"check-ok\"></span>'+
\t\t\t\t\t\t\t\t'</span>'+
\t\t\t\t\t\t\t'</div><br>'+
\t\t\t\t\t\t\t'<div class=\"colx4-right-double required\">'+
\t\t\t\t\t\t\t\t\t\t'<label for=\"complex-fr-title\">Prénom</label>'+
\t\t\t\t\t\t\t\t\t\t'<span class=\"relative\">'+
\t\t\t\t\t\t\t\t\t\t'<input type=\"text\" name=\"prenom\" id=\"complex-fr-title\" value=\"Votre prénom\" class=\"full-width\">'+
\t\t\t\t\t\t\t\t\t'<span class=\"check-ok\"></span>'+
\t\t\t\t\t\t\t\t'</span>'+
\t\t\t\t\t\t\t'</div><br>'+
\t\t\t\t\t\t\t'<div class=\" required\">'+
\t\t\t\t\t\t\t\t\t\t'<label for=\"complex-fr-title\">Adresse mail</label>'+
\t\t\t\t\t\t\t\t\t\t'<span class=\"relative\">'+
\t\t\t\t\t\t\t\t\t\t'<input type=\"text\" name=\"nom\" id=\"complex-fr-title\" value=\"Votre adresse mail\" class=\"full-width\">'+
\t\t\t\t\t\t\t\t\t'<span class=\"check-ok\"></span>'+
\t\t\t\t\t\t\t\t'</span>'+
\t\t\t\t\t\t\t'</div>'+
\t\t\t\t\t'</fieldset>'+
\t\t\t\t\t
\t\t\t\t\t'<fieldset class=\"grey-bg\">'+
\t\t\t\t\t\t\t'<legend>Votre compte</legend>'+
\t\t\t\t\t\t\t'<div class=\" required\">'+
\t\t\t\t\t\t\t\t\t\t'<label for=\"complex-fr-title\">Identifiant</label>'+
\t\t\t\t\t\t\t\t\t\t'<span class=\"relative\">'+
\t\t\t\t\t\t\t\t\t\t'<input type=\"text\" name=\"nom\" id=\"complex-fr-title\" value=\"votre identifiant\" class=\"full-width\">'+
\t\t\t\t\t\t\t\t\t'<span class=\"check-ok\"></span>'+
\t\t\t\t\t\t\t\t'</span>'+
\t\t\t\t\t\t\t'</div><br>'+
\t\t\t\t\t\t\t'<div class=\" required\">'+
\t\t\t\t\t\t\t\t\t\t'<label for=\"complex-fr-title\">Mot de passe</label>'+
\t\t\t\t\t\t\t\t\t\t'<span class=\"relative\">'+
\t\t\t\t\t\t\t\t\t\t'<input type=\"text\" name=\"prenom\" id=\"complex-fr-title\" value=\"Votre mot de passe\" class=\"full-width\">'+
\t\t\t\t\t\t\t\t\t'<span class=\"check-ok\"></span>'+
\t\t\t\t\t\t\t\t'</span>'+
\t\t\t\t\t\t\t'</div><br>'+
\t\t\t\t\t\t\t'<div class=\" required\">'+
\t\t\t\t\t\t\t\t\t\t'<label for=\"complex-fr-title\">Saisir à nouveau le mot de passe</label>'+
\t\t\t\t\t\t\t\t\t\t'<span class=\"relative\">'+
\t\t\t\t\t\t\t\t\t\t'<input type=\"text\" name=\"nom\" id=\"complex-fr-title\" value=\"Votre mot de passe\" class=\"full-width\">'+
\t\t\t\t\t\t\t\t\t'<span class=\"check-ok\"></span>'+
\t\t\t\t\t\t\t\t'</span>'+
\t\t\t\t\t\t\t'</div>'+
\t\t\t\t\t'</fieldset>'+
\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t'<fieldset class=\"grey-bg with-legend\">'+
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t'<input type=\"checkbox\" name=\"simple-checkbox[]\" id=\"simple-checkbox-1\" value=\"1\">'+
\t\t\t\t\t\t\t\t\t\t '&nbsp;' + '<label for=\"simple-checkbox-1\">J\\'ai lu et j\\'accepte les <a href=\"#\" > Conditions d\\'utilisations </a></label> <br><br><br>'+
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t'<div id=\"captcha\"> <img src=\"images/captcha.jpg\"> </div>'+

\t\t\t\t\t\t
\t\t\t\t\t\t\t'</fieldset>'+

\t\t\t\t\t\t\t
\t\t\t\t\t\t\t



\t\t\t    \t  
\t\t\t\t'',
\t\t\t\ttitle: 'Inscription',
\t\t\t\tmaxWidth: 500,
\t\t\t\tbuttons: {
\t\t\t\t\t'Validé': function(win) { 
\t\t\t\t\t\t//action ici
\t\t\t\t\t },
\t\t\t\t\t'Annuler': function(win) { win.closeModal(); }
\t\t\t\t}
\t\t\t});
\t\t}
\t
\t</script>
        
     ";
        // line 507
        $this->displayBlock('javascripts_Bottom', $context, $blocks);
        // line 510
        echo "        
</body>
</html>";
    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        // line 11
        echo "                E-institut 
            ";
    }

    // line 84
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 85
        echo "
        ";
    }

    // line 87
    public function block_javascripts($context, array $blocks = array())
    {
        // line 88
        echo "
        ";
    }

    // line 96
    public function block_content($context, array $blocks = array())
    {
        // line 97
        echo "
\t";
    }

    // line 507
    public function block_javascripts_Bottom($context, array $blocks = array())
    {
        // line 508
        echo "
     ";
    }

    public function getTemplateName()
    {
        return "EieinstitutBundle::Master-Base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  683 => 508,  680 => 507,  675 => 97,  664 => 87,  648 => 10,  642 => 510,  493 => 363,  488 => 361,  484 => 360,  253 => 132,  249 => 131,  243 => 128,  237 => 125,  233 => 124,  229 => 123,  224 => 121,  216 => 119,  212 => 118,  206 => 115,  198 => 113,  186 => 103,  179 => 99,  177 => 96,  170 => 92,  163 => 87,  161 => 84,  154 => 80,  117 => 46,  111 => 43,  105 => 40,  101 => 39,  95 => 36,  91 => 35,  87 => 34,  83 => 33,  79 => 32,  75 => 31,  71 => 30,  64 => 26,  57 => 22,  53 => 21,  49 => 20,  45 => 19,  37 => 13,  35 => 10,  24 => 1,  946 => 475,  942 => 474,  938 => 473,  935 => 472,  932 => 471,  911 => 453,  897 => 441,  887 => 438,  883 => 437,  857 => 413,  841 => 405,  835 => 404,  829 => 403,  825 => 402,  821 => 401,  816 => 398,  812 => 397,  792 => 380,  780 => 370,  757 => 352,  755 => 351,  752 => 350,  746 => 348,  743 => 347,  736 => 345,  733 => 344,  730 => 343,  728 => 342,  718 => 340,  715 => 339,  712 => 338,  709 => 337,  706 => 336,  704 => 335,  701 => 334,  696 => 333,  694 => 332,  690 => 330,  685 => 326,  678 => 323,  674 => 321,  672 => 96,  669 => 319,  667 => 88,  659 => 85,  656 => 84,  653 => 312,  651 => 11,  646 => 308,  643 => 307,  640 => 507,  637 => 305,  634 => 304,  631 => 303,  628 => 302,  625 => 301,  622 => 300,  619 => 299,  616 => 298,  614 => 297,  611 => 296,  606 => 295,  603 => 294,  600 => 293,  597 => 292,  594 => 291,  591 => 290,  589 => 289,  560 => 262,  550 => 258,  544 => 255,  540 => 254,  534 => 251,  530 => 250,  520 => 243,  517 => 242,  510 => 239,  504 => 237,  498 => 235,  492 => 233,  486 => 231,  480 => 229,  474 => 227,  468 => 225,  462 => 223,  456 => 221,  450 => 219,  444 => 217,  442 => 216,  434 => 210,  430 => 209,  423 => 204,  413 => 200,  407 => 197,  403 => 196,  397 => 193,  393 => 192,  383 => 185,  380 => 184,  373 => 181,  367 => 179,  361 => 177,  355 => 175,  349 => 173,  343 => 171,  337 => 169,  331 => 167,  325 => 165,  319 => 163,  313 => 161,  307 => 159,  305 => 158,  297 => 152,  293 => 151,  282 => 142,  272 => 138,  266 => 135,  262 => 134,  256 => 131,  252 => 130,  242 => 123,  239 => 122,  232 => 119,  226 => 117,  220 => 120,  214 => 113,  208 => 111,  202 => 114,  196 => 107,  190 => 105,  184 => 102,  178 => 101,  172 => 93,  166 => 90,  164 => 96,  156 => 90,  152 => 89,  98 => 40,  90 => 37,  80 => 32,  70 => 27,  60 => 22,  43 => 7,  40 => 6,  33 => 4,  30 => 3,);
    }
}
