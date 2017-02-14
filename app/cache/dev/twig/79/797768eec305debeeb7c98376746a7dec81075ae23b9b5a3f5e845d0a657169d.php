<?php

/* AniaBlogBundle::base.html.twig */
class __TwigTemplate_0b8ca16323dec536978a178b5b106c5233fd19b19241b8b349f8d1d5d5e8a496 extends Twig_Template
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
        $__internal_70810a1da560192300a50b7af86ed1ac2672af9b8a4e3394b0a82890737701ef = $this->env->getExtension("native_profiler");
        $__internal_70810a1da560192300a50b7af86ed1ac2672af9b8a4e3394b0a82890737701ef->enter($__internal_70810a1da560192300a50b7af86ed1ac2672af9b8a4e3394b0a82890737701ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AniaBlogBundle::base.html.twig"));

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
            echo twig_escape_filter($this->env, ((array_key_exists("searchParam", $context)) ? ((isset($context["searchParam"]) ? $context["searchParam"] : $this->getContext($context, "searchParam"))) : ("")), "html", null, true);
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
        
        $__internal_70810a1da560192300a50b7af86ed1ac2672af9b8a4e3394b0a82890737701ef->leave($__internal_70810a1da560192300a50b7af86ed1ac2672af9b8a4e3394b0a82890737701ef_prof);

    }

    // line 6
    public function block_pageTitre($context, array $blocks = array())
    {
        $__internal_8d772d0730c94f35dc79dd38a4bfe2d291de6d264855b2123c4cc2ae91a8cd14 = $this->env->getExtension("native_profiler");
        $__internal_8d772d0730c94f35dc79dd38a4bfe2d291de6d264855b2123c4cc2ae91a8cd14->enter($__internal_8d772d0730c94f35dc79dd38a4bfe2d291de6d264855b2123c4cc2ae91a8cd14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitre"));

        echo "Page d'accueil";
        
        $__internal_8d772d0730c94f35dc79dd38a4bfe2d291de6d264855b2123c4cc2ae91a8cd14->leave($__internal_8d772d0730c94f35dc79dd38a4bfe2d291de6d264855b2123c4cc2ae91a8cd14_prof);

    }

    // line 8
    public function block_pageDescription($context, array $blocks = array())
    {
        $__internal_8c486eb7284ffe0152ea8587923fab35fdcad9a804b9283403835bedc3aff052 = $this->env->getExtension("native_profiler");
        $__internal_8c486eb7284ffe0152ea8587923fab35fdcad9a804b9283403835bedc3aff052->enter($__internal_8c486eb7284ffe0152ea8587923fab35fdcad9a804b9283403835bedc3aff052_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageDescription"));

        
        $__internal_8c486eb7284ffe0152ea8587923fab35fdcad9a804b9283403835bedc3aff052->leave($__internal_8c486eb7284ffe0152ea8587923fab35fdcad9a804b9283403835bedc3aff052_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_bd232f7a1aba43206e5d71dfc745fcd76724b181a172827acee4829f832355d1 = $this->env->getExtension("native_profiler");
        $__internal_bd232f7a1aba43206e5d71dfc745fcd76724b181a172827acee4829f832355d1->enter($__internal_bd232f7a1aba43206e5d71dfc745fcd76724b181a172827acee4829f832355d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_bd232f7a1aba43206e5d71dfc745fcd76724b181a172827acee4829f832355d1->leave($__internal_bd232f7a1aba43206e5d71dfc745fcd76724b181a172827acee4829f832355d1_prof);

    }

    // line 77
    public function block_topCarrousel($context, array $blocks = array())
    {
        $__internal_93d2a42e8611d322b5fbe0616fe055011475e32cd4ce59549918a73a23853e88 = $this->env->getExtension("native_profiler");
        $__internal_93d2a42e8611d322b5fbe0616fe055011475e32cd4ce59549918a73a23853e88->enter($__internal_93d2a42e8611d322b5fbe0616fe055011475e32cd4ce59549918a73a23853e88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "topCarrousel"));

        // line 78
        echo "    <div class=\"top-image\"></div>
    ";
        
        $__internal_93d2a42e8611d322b5fbe0616fe055011475e32cd4ce59549918a73a23853e88->leave($__internal_93d2a42e8611d322b5fbe0616fe055011475e32cd4ce59549918a73a23853e88_prof);

    }

    // line 86
    public function block_contenuTitre($context, array $blocks = array())
    {
        $__internal_b1a7fe03b17934e9c30912420305ce2d9361c623cb0d24dfdbfff360a3f012e5 = $this->env->getExtension("native_profiler");
        $__internal_b1a7fe03b17934e9c30912420305ce2d9361c623cb0d24dfdbfff360a3f012e5->enter($__internal_b1a7fe03b17934e9c30912420305ce2d9361c623cb0d24dfdbfff360a3f012e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenuTitre"));

        
        $__internal_b1a7fe03b17934e9c30912420305ce2d9361c623cb0d24dfdbfff360a3f012e5->leave($__internal_b1a7fe03b17934e9c30912420305ce2d9361c623cb0d24dfdbfff360a3f012e5_prof);

    }

    // line 97
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_cb89c3a48f4d0c60cf675151e618267a1addd2c9ecf6cb875a1d9baef1ab7a32 = $this->env->getExtension("native_profiler");
        $__internal_cb89c3a48f4d0c60cf675151e618267a1addd2c9ecf6cb875a1d9baef1ab7a32->enter($__internal_cb89c3a48f4d0c60cf675151e618267a1addd2c9ecf6cb875a1d9baef1ab7a32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        
        $__internal_cb89c3a48f4d0c60cf675151e618267a1addd2c9ecf6cb875a1d9baef1ab7a32->leave($__internal_cb89c3a48f4d0c60cf675151e618267a1addd2c9ecf6cb875a1d9baef1ab7a32_prof);

    }

    // line 171
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9545e9f9d6b5f611c19bce9543a5697fd4025392ef29402f8658cafe81eed9fb = $this->env->getExtension("native_profiler");
        $__internal_9545e9f9d6b5f611c19bce9543a5697fd4025392ef29402f8658cafe81eed9fb->enter($__internal_9545e9f9d6b5f611c19bce9543a5697fd4025392ef29402f8658cafe81eed9fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_9545e9f9d6b5f611c19bce9543a5697fd4025392ef29402f8658cafe81eed9fb->leave($__internal_9545e9f9d6b5f611c19bce9543a5697fd4025392ef29402f8658cafe81eed9fb_prof);

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
        return array (  327 => 187,  323 => 186,  319 => 185,  315 => 184,  312 => 183,  309 => 172,  303 => 171,  292 => 97,  281 => 86,  273 => 78,  267 => 77,  257 => 24,  253 => 23,  250 => 22,  246 => 12,  240 => 11,  229 => 8,  217 => 6,  208 => 189,  206 => 171,  188 => 157,  177 => 142,  161 => 129,  158 => 128,  154 => 111,  150 => 103,  145 => 100,  143 => 99,  140 => 98,  138 => 97,  131 => 92,  125 => 89,  120 => 88,  118 => 87,  112 => 86,  104 => 80,  102 => 77,  80 => 57,  76 => 49,  69 => 46,  53 => 27,  51 => 11,  43 => 8,  36 => 6,  29 => 1,);
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
