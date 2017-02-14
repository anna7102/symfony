<?php

/* AniaBlogBundle::base.html.twig */
class __TwigTemplate_eb163a67423c35e598b66ceeda6300a0e67c58d665ab63784014595d8e7e723b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'pageTitre' => array($this, 'block_pageTitre'),
            'pageDescription' => array($this, 'block_pageDescription'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'topCarrousel' => array($this, 'block_topCarrousel'),
            'contenuTitre' => array($this, 'block_contenuTitre'),
            'contenu' => array($this, 'block_contenu'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html class=\"no-js\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>";
        // line 6
        ob_start();
        $this->displayBlock('pageTitre', $context, $blocks);
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        echo " | AniaBlog</title>
    <link rel=\"icon\" type=\"image/png\" href=\"/favicon.png\">
    <meta name=\"description\" content=\"";
        // line 8
        ob_start();
        $this->displayBlock('pageDescription', $context, $blocks);
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        echo "\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 27
        echo "</head>
<body>
<header id=\"header\">
    <div class=\"top\">
        <div class=\"pos-center\">

            <a class=\"mobile-menu-trigger\" href=\"#\">
                <span class=\"bar\"></span>
                <span class=\"bar\"></span>
                <span class=\"bar\"></span>
            </a>

            <div class=\"menu\">
                <nav>
                   ";
        // line 46
        echo "                    ";
        echo $this->env->getExtension('ania_blog_extension')->printMainMenu();
        echo "
                </nav>

                ";
        // line 49
        echo $this->env->getExtension('ania_blog_extension')->printCategoriesList();
        echo "
              ";
        // line 57
        echo "
                <!--
                <div class=\"user-panel\">
                    <span class=\"user-name\">Connecté : <a href=\"#\">macq</a></span>
                    <a class=\"btn-green\" href=\"#\">Déconnecter</a>
                </div>
                 -->

                <div class=\"user-panel\">
                    <div class=\"btn-group\">
                        <a class=\"btn-green\" href=\"#\">Connectez-vous</a>
                        <a class=\"btn-green\" href=\"#\">Créer votre compte</a>
                    </div>
                </div>

            </div>
            <div class=\"clearfix\"></div>
        </div>
    </div>

    ";
        // line 77
        $this->displayBlock('topCarrousel', $context, $blocks);
        // line 80
        echo "</header>

<div id=\"main\">

    <div class=\"header\">
        <div class=\"pos-center\">
            <h2 class=\"left-side\">";
        // line 86
        ob_start();
        $this->displayBlock('contenuTitre', $context, $blocks);
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        echo "</h2>
            ";
        // line 87
        if ( !array_key_exists("cacheRecherche", $context)) {
            // line 88
            echo "            <form class=\"right-side\" action=\"";
            echo $this->env->getExtension('routing')->getPath("blog_search");
            echo "\">
                <input type=\"text\" name=\"search\" value=\"";
            // line 89
            echo twig_escape_filter($this->env, ((array_key_exists("searchParam", $context)) ? ((isset($context["searchParam"]) ? $context["searchParam"] : null)) : ("")), "html", null, true);
            echo "\" placeholder=\"Recherche\">
            </form>
            ";
        }
        // line 92
        echo "        </div>
    </div>

    <div class=\"content\">
        <div class=\"pos-center\">
            ";
        // line 97
        $this->displayBlock('contenu', $context, $blocks);
        // line 98
        echo "
            ";
        // line 99
        if ( !array_key_exists("cacheSidebar", $context)) {
            // line 100
            echo "            <div class=\"right-side sidebar\">
                <div class=\"menu\">
                    <h3>Catégories</h3>
                    ";
            // line 103
            echo $this->env->getExtension('ania_blog_extension')->printCategoriesList();
            echo "
                   ";
            // line 111
            echo "                </div>

               ";
            // line 128
            echo "
                ";
            // line 129
            echo $this->env->getExtension('ania_blog_extension')->TagsCloud();
            echo "

                <div class=\"list-widget\">
                    <h3>Les plus commentés</h3>
                    <ul>
                        <li><a href=\"#\">Lorem Ipsum (13)</a></li>
                        <li><a href=\"#\">Ipsum Lorem (76)</a></li>
                        <li><a href=\"#\">Ipsum Lorem Ipsum Lorem (53)</a></li>
                    </ul>
                </div>

            </div> <!-- .right-side -->
            ";
        }
        // line 142
        echo "        </div> <!-- .content -->

        <div class=\"clearfix\"></div>
    </div> <!-- .pos-center -->
</div> <!-- #main -->

<footer id=\"footer\">
    <div class=\"top\">
        <div class=\"pos-center\">
           ";
        // line 157
        echo "            ";
        echo $this->env->getExtension('ania_blog_extension')->printMainMenu();
        echo "
        </div>
    </div>

    <div class=\"bottom\">
        <div class=\"pos-center\">
            <div class=\"copyrights\">
                <p>&copy; 2016 All rights reserved.</p>
                <span>Ania Wojcik</span>
            </div>
        </div>
    </div>
</footer>

";
        // line 171
        $this->displayBlock('javascripts', $context, $blocks);
        // line 189
        echo "</body>
</html>
";
    }

    // line 6
    public function block_pageTitre($context, array $blocks = array())
    {
        echo "Page d'accueil";
    }

    // line 8
    public function block_pageDescription($context, array $blocks = array())
    {
    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 12
        echo "    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700&subset=latin-ext,latin' rel='stylesheet' type='text/css'>

       ";
        // line 22
        echo "
         <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/aniablog/css/normalize.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/aniablog/css/main.css"), "html", null, true);
        echo "\">

    ";
    }

    // line 77
    public function block_topCarrousel($context, array $blocks = array())
    {
        // line 78
        echo "    <div class=\"top-image\"></div>
    ";
    }

    // line 86
    public function block_contenuTitre($context, array $blocks = array())
    {
    }

    // line 97
    public function block_contenu($context, array $blocks = array())
    {
    }

    // line 171
    public function block_javascripts($context, array $blocks = array())
    {
        // line 172
        echo "
    ";
        // line 183
        echo "
<script src=\"";
        // line 184
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/aniablog/js/vendor/jquery-1.10.2.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 185
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/aniablog/js/vendor/jquery.responsiSlider.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 186
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/aniablog/js/plugins.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 187
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/aniablog/js/main.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "AniaBlogBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  282 => 187,  278 => 186,  274 => 185,  270 => 184,  267 => 183,  264 => 172,  261 => 171,  256 => 97,  251 => 86,  246 => 78,  243 => 77,  236 => 24,  232 => 23,  229 => 22,  225 => 12,  222 => 11,  217 => 8,  211 => 6,  205 => 189,  203 => 171,  185 => 157,  174 => 142,  158 => 129,  155 => 128,  151 => 111,  147 => 103,  142 => 100,  140 => 99,  137 => 98,  135 => 97,  128 => 92,  122 => 89,  117 => 88,  115 => 87,  109 => 86,  101 => 80,  99 => 77,  77 => 57,  73 => 49,  66 => 46,  50 => 27,  48 => 11,  40 => 8,  33 => 6,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html class="no-js">*/
/* <head>*/
/*     <meta charset="utf-8">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <title>{% spaceless %}{% block pageTitre %}Page d'accueil{% endblock %}{% endspaceless %} | AniaBlog</title>*/
/*     <link rel="icon" type="image/png" href="/favicon.png">*/
/*     <meta name="description" content="{% spaceless %}{% block pageDescription %}{% endblock %}{% endspaceless %}">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/* */
/*     {% block stylesheets %}*/
/*     <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700&subset=latin-ext,latin' rel='stylesheet' type='text/css'>*/
/* */
/*        {#{% stylesheets*/
/*             'bundles/aniablog/css/normalize.css'*/
/*             'bundles/aniablog/css/main.css'*/
/*             filter='cssrewrite,?yui_css'*/
/*             output = 'assets/css/compiled.css'*/
/*         %}*/
/*             <link rel="stylesheet" href="{{ asset_url }}">*/
/*         {% endstylesheets %}#}*/
/* */
/*          <link rel="stylesheet" href="{{ asset('bundles/aniablog/css/normalize.css') }}">*/
/*     <link rel="stylesheet" href="{{ asset('bundles/aniablog/css/main.css') }}">*/
/* */
/*     {% endblock %}*/
/* </head>*/
/* <body>*/
/* <header id="header">*/
/*     <div class="top">*/
/*         <div class="pos-center">*/
/* */
/*             <a class="mobile-menu-trigger" href="#">*/
/*                 <span class="bar"></span>*/
/*                 <span class="bar"></span>*/
/*                 <span class="bar"></span>*/
/*             </a>*/
/* */
/*             <div class="menu">*/
/*                 <nav>*/
/*                    {# <ul>*/
/*                         <li><a href="#">ACCUEIL</a></li>*/
/*                         <li><a href="#">A PROPOS DE MOI</a></li>*/
/*                         <li><a href="#">CONTACT</a></li>*/
/*                     </ul>#}*/
/*                     {{ print_main_menu() }}*/
/*                 </nav>*/
/* */
/*                 {{ print_categories_list() }}*/
/*               {#  <ul class="categories">*/
/*                     <li><a href="#">HTML & CSS</a></li>*/
/*                     <li><a class="active" href="#">JavaScript</a></li>*/
/*                     <li><a href="#">PHP</a></li>*/
/*                     <li><a href="#">Symfony</a></li>*/
/*                     <li><a href="#">Angular JS</a></li>*/
/*                 </ul>#}*/
/* */
/*                 <!--*/
/*                 <div class="user-panel">*/
/*                     <span class="user-name">Connecté : <a href="#">macq</a></span>*/
/*                     <a class="btn-green" href="#">Déconnecter</a>*/
/*                 </div>*/
/*                  -->*/
/* */
/*                 <div class="user-panel">*/
/*                     <div class="btn-group">*/
/*                         <a class="btn-green" href="#">Connectez-vous</a>*/
/*                         <a class="btn-green" href="#">Créer votre compte</a>*/
/*                     </div>*/
/*                 </div>*/
/* */
/*             </div>*/
/*             <div class="clearfix"></div>*/
/*         </div>*/
/*     </div>*/
/* */
/*     {% block topCarrousel %}*/
/*     <div class="top-image"></div>*/
/*     {% endblock %}*/
/* </header>*/
/* */
/* <div id="main">*/
/* */
/*     <div class="header">*/
/*         <div class="pos-center">*/
/*             <h2 class="left-side">{% spaceless %}{% block contenuTitre %}{% endblock %}{% endspaceless %}</h2>*/
/*             {% if cacheRecherche is not defined %}*/
/*             <form class="right-side" action="{{ path('blog_search') }}">*/
/*                 <input type="text" name="search" value="{{ searchParam is defined ? searchParam : '' }}" placeholder="Recherche">*/
/*             </form>*/
/*             {% endif %}*/
/*         </div>*/
/*     </div>*/
/* */
/*     <div class="content">*/
/*         <div class="pos-center">*/
/*             {% block contenu %}{% endblock %}*/
/* */
/*             {% if cacheSidebar is not defined %}*/
/*             <div class="right-side sidebar">*/
/*                 <div class="menu">*/
/*                     <h3>Catégories</h3>*/
/*                     {{ print_categories_list() }}*/
/*                    {# <ul>*/
/*                         <li><a href="#">HTML & CSS</a></li>*/
/*                         <li><a class="active" href="#">JavaScript</a></li>*/
/*                         <li><a href="#">PHP</a></li>*/
/*                         <li><a href="#">Symfony</a></li>*/
/*                         <li><a href="#">Angular JS</a></li>*/
/*                     </ul>#}*/
/*                 </div>*/
/* */
/*                {# <div class="tag-cloud">*/
/*                     <h3>Tag Cloud</h3>*/
/*                     <div class="tags">*/
/*                         <a style="font-size: 1.5rem" href="#">Sass</a>*/
/*                         <a style="font-size: 2.3rem" href="#">Less</a>*/
/*                         <a style="font-size: 1.3rem" href="#">Js</a>*/
/*                         <a style="font-size: 2.3rem" href="#">Ajax</a>*/
/*                         <a style="font-size: 2.3rem" href="#">JQuery</a>*/
/*                         <a style="font-size: 2rem" href="#">ReactJs</a>*/
/*                         <a style="font-size: 1.5rem" href="#">Css</a>*/
/*                         <a style="font-size: 1.3rem" href="#">Html</a>*/
/*                         <a style="font-size: 1.1rem" href="#">Bootstrap</a>*/
/*                         <a style="font-size: 1.8rem" href="#">Foundation</a>*/
/*                     </div>*/
/*                 </div>#}*/
/* */
/*                 {{ print_tags_cloud() }}*/
/* */
/*                 <div class="list-widget">*/
/*                     <h3>Les plus commentés</h3>*/
/*                     <ul>*/
/*                         <li><a href="#">Lorem Ipsum (13)</a></li>*/
/*                         <li><a href="#">Ipsum Lorem (76)</a></li>*/
/*                         <li><a href="#">Ipsum Lorem Ipsum Lorem (53)</a></li>*/
/*                     </ul>*/
/*                 </div>*/
/* */
/*             </div> <!-- .right-side -->*/
/*             {% endif %}*/
/*         </div> <!-- .content -->*/
/* */
/*         <div class="clearfix"></div>*/
/*     </div> <!-- .pos-center -->*/
/* </div> <!-- #main -->*/
/* */
/* <footer id="footer">*/
/*     <div class="top">*/
/*         <div class="pos-center">*/
/*            {# <ul>*/
/*                 <li><a href="#">ACCUEIL</a></li>*/
/*                 <li><a href="#">A PROPOS DE MOI</a></li>*/
/*                 <li><a href="#">CONTACT</a></li>*/
/*                 <li><a href="#">ADMIN</a></li>*/
/*             </ul>#}*/
/*             {{ print_main_menu() }}*/
/*         </div>*/
/*     </div>*/
/* */
/*     <div class="bottom">*/
/*         <div class="pos-center">*/
/*             <div class="copyrights">*/
/*                 <p>&copy; 2016 All rights reserved.</p>*/
/*                 <span>Ania Wojcik</span>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </footer>*/
/* */
/* {% block javascripts %}*/
/* */
/*     {#{% javascripts*/
/*     '@AniaBlogBundle/Resources/public/js/vendor/jquery-1.10.2.min.js'*/
/*     '@AniaBlogBundle/Resources/public/js/vendor/*'*/
/*     '@AniaBlogBundle/Resources/public/js/plugins.js'*/
/*     '@AniaBlogBundle/Resources/public/js/main.js'*/
/*     filter = '?yui_js'*/
/*     output = 'assets/js/compiled.js'*/
/*     %}*/
/*     <script src="{{ asset_url }}"></script>*/
/*     {% endjavascripts %}#}*/
/* */
/* <script src="{{ asset('bundles/aniablog/js/vendor/jquery-1.10.2.min.js') }}"></script>*/
/* <script src="{{ asset('bundles/aniablog/js/vendor/jquery.responsiSlider.js') }}"></script>*/
/* <script src="{{ asset('bundles/aniablog/js/plugins.js') }}"></script>*/
/* <script src="{{ asset('bundles/aniablog/js/main.js') }}"></script>*/
/* {% endblock %}*/
/* </body>*/
/* </html>*/
/* */
