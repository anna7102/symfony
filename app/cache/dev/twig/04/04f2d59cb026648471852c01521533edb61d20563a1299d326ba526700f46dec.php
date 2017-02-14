<?php

/* AniaBlogBundle:Posts:postsList.html.twig */
class __TwigTemplate_652a70275c279dc88d0780b227ca9c64f5e2bbb2fe9ea159fe1774e7bc0b13ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AniaBlogBundle::base.html.twig", "AniaBlogBundle:Posts:postsList.html.twig", 1);
        $this->blocks = array(
            'pageTitre' => array($this, 'block_pageTitre'),
            'topCarrousel' => array($this, 'block_topCarrousel'),
            'contenuTitre' => array($this, 'block_contenuTitre'),
            'contenu' => array($this, 'block_contenu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AniaBlogBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a9ca7f1b3da40e93217ccb3d82d6724c2e5e6bf7e27f8a731db09ca0c62aadff = $this->env->getExtension("native_profiler");
        $__internal_a9ca7f1b3da40e93217ccb3d82d6724c2e5e6bf7e27f8a731db09ca0c62aadff->enter($__internal_a9ca7f1b3da40e93217ccb3d82d6724c2e5e6bf7e27f8a731db09ca0c62aadff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AniaBlogBundle:Posts:postsList.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a9ca7f1b3da40e93217ccb3d82d6724c2e5e6bf7e27f8a731db09ca0c62aadff->leave($__internal_a9ca7f1b3da40e93217ccb3d82d6724c2e5e6bf7e27f8a731db09ca0c62aadff_prof);

    }

    // line 3
    public function block_pageTitre($context, array $blocks = array())
    {
        $__internal_4cc5812aeb997479d8418692fdc743bedc3475cb6198a0db2c38a704dcf49288 = $this->env->getExtension("native_profiler");
        $__internal_4cc5812aeb997479d8418692fdc743bedc3475cb6198a0db2c38a704dcf49288->enter($__internal_4cc5812aeb997479d8418692fdc743bedc3475cb6198a0db2c38a704dcf49288_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitre"));

        echo twig_escape_filter($this->env, (isset($context["listTitle"]) ? $context["listTitle"] : $this->getContext($context, "listTitle")), "html", null, true);
        
        $__internal_4cc5812aeb997479d8418692fdc743bedc3475cb6198a0db2c38a704dcf49288->leave($__internal_4cc5812aeb997479d8418692fdc743bedc3475cb6198a0db2c38a704dcf49288_prof);

    }

    // line 5
    public function block_topCarrousel($context, array $blocks = array())
    {
        $__internal_0b540a869917f458690e72ed1bdda3b928d4cefc329f31eeb51d349c2f01719b = $this->env->getExtension("native_profiler");
        $__internal_0b540a869917f458690e72ed1bdda3b928d4cefc329f31eeb51d349c2f01719b->enter($__internal_0b540a869917f458690e72ed1bdda3b928d4cefc329f31eeb51d349c2f01719b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "topCarrousel"));

        // line 6
        echo "    <div class=\"slider\">
        <div class=\"viewport\">
            <div class=\"slides-container\">
                <div style=\"background-image: url('";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/aniablog/img/slide-1.jpg"), "html", null, true);
        echo "')\" class=\"slide\"></div>
                <div style=\"background-image: url('";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/aniablog/img/slide-2.jpg"), "html", null, true);
        echo "')\" class=\"slide\"></div>
                <div style=\"background-image: url('";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/aniablog/img/slide-3.jpg"), "html", null, true);
        echo "')\" class=\"slide\"></div>
            </div>
        </div>

        <span class=\"nav prev\"></span>
        <span class=\"nav next\"></span>
    </div>
";
        
        $__internal_0b540a869917f458690e72ed1bdda3b928d4cefc329f31eeb51d349c2f01719b->leave($__internal_0b540a869917f458690e72ed1bdda3b928d4cefc329f31eeb51d349c2f01719b_prof);

    }

    // line 20
    public function block_contenuTitre($context, array $blocks = array())
    {
        $__internal_edabe13afa445d854ab5febfa38dcdccc58c2693d584614618f72c3e63646f70 = $this->env->getExtension("native_profiler");
        $__internal_edabe13afa445d854ab5febfa38dcdccc58c2693d584614618f72c3e63646f70->enter($__internal_edabe13afa445d854ab5febfa38dcdccc58c2693d584614618f72c3e63646f70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenuTitre"));

        echo twig_escape_filter($this->env, (isset($context["listTitle"]) ? $context["listTitle"] : $this->getContext($context, "listTitle")), "html", null, true);
        
        $__internal_edabe13afa445d854ab5febfa38dcdccc58c2693d584614618f72c3e63646f70->leave($__internal_edabe13afa445d854ab5febfa38dcdccc58c2693d584614618f72c3e63646f70_prof);

    }

    // line 22
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_7890b43401623c8412518b2e9f49d4f66725fbbc4bca70c4a1e780053c63626d = $this->env->getExtension("native_profiler");
        $__internal_7890b43401623c8412518b2e9f49d4f66725fbbc4bca70c4a1e780053c63626d->enter($__internal_7890b43401623c8412518b2e9f49d4f66725fbbc4bca70c4a1e780053c63626d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 23
        echo "  <div class=\"left-side\">

      ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 26
            echo "      <article class=\"post\">
          <header>
              <h1><a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_post", array("slug" => $this->getAttribute($context["post"], "slug", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
            echo "</a></h1>

              <div class=\"meta-data\">
                  <div class=\"author\">Auteur <a href=\"#\">";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "author", array()), "html", null, true);
            echo "</a></div>
                  <div class=\"create-date\">";
            // line 32
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["post"], "publishedDate", array()), "d.m.y, H:m"), "html", null, true);
            echo "</div>
              </div>
          </header>

          <div class=\"thumbnail\">
              <div class=\"meta-data\">
                  <div class=\"categories\">
                      Catégorie:
                      <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_category", array("slug" => $this->getAttribute($this->getAttribute($context["post"], "category", array()), "slug", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["post"], "category", array()), "name", array()), "html", null, true);
            echo "</a>
                  </div>

                  <div class=\"tags\">
                      Tags:
                      ";
            // line 45
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["post"], "tags", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 46
                echo "                      <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_tag", array("slug" => $this->getAttribute($context["tag"], "slug", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "name", array()), "html", null, true);
                echo "</a>
                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "                  </div>
              </div>

              <img src=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/aniablog/img/default-thumbnail.jpg"), "html", null, true);
            echo "\" alt=\"\">
          </div>

          ";
            // line 54
            echo $this->env->getExtension('ania_blog_extension')->shorten($this->getAttribute($context["post"], "content", array()), 250);
            echo "

          <footer>
              <a class=\"comments\" href=\"#\">Commentaires (14)</a>
              <a href=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_post", array("slug" => $this->getAttribute($context["post"], "slug", array()))), "html", null, true);
            echo "\" class=\"btn-green\">Lire la totalité</a>
          </footer>
      </article> <!-- .post -->
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "

      ";
        // line 64
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "AniaBlogBundle:Pagination:pagination.html.twig");
        echo "


";
        // line 75
        echo "  </div> <!-- .left-side -->
";
        
        $__internal_7890b43401623c8412518b2e9f49d4f66725fbbc4bca70c4a1e780053c63626d->leave($__internal_7890b43401623c8412518b2e9f49d4f66725fbbc4bca70c4a1e780053c63626d_prof);

    }

    public function getTemplateName()
    {
        return "AniaBlogBundle:Posts:postsList.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 75,  193 => 64,  189 => 62,  179 => 58,  172 => 54,  166 => 51,  161 => 48,  150 => 46,  146 => 45,  136 => 40,  125 => 32,  121 => 31,  113 => 28,  109 => 26,  105 => 25,  101 => 23,  95 => 22,  83 => 20,  68 => 11,  64 => 10,  60 => 9,  55 => 6,  49 => 5,  37 => 3,  11 => 1,);
    }
}
/* {% extends "AniaBlogBundle::base.html.twig" %}*/
/* */
/* {% block pageTitre %}{{ listTitle }}{% endblock %}*/
/* */
/* {% block topCarrousel %}*/
/*     <div class="slider">*/
/*         <div class="viewport">*/
/*             <div class="slides-container">*/
/*                 <div style="background-image: url('{{ asset('bundles/aniablog/img/slide-1.jpg') }}')" class="slide"></div>*/
/*                 <div style="background-image: url('{{ asset('bundles/aniablog/img/slide-2.jpg') }}')" class="slide"></div>*/
/*                 <div style="background-image: url('{{ asset('bundles/aniablog/img/slide-3.jpg') }}')" class="slide"></div>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <span class="nav prev"></span>*/
/*         <span class="nav next"></span>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block contenuTitre %}{{ listTitle }}{% endblock %}*/
/* */
/* {% block contenu %}*/
/*   <div class="left-side">*/
/* */
/*       {% for post in pagination %}*/
/*       <article class="post">*/
/*           <header>*/
/*               <h1><a href="{{ path('blog_post', {'slug': post.slug}) }}">{{ post.title }}</a></h1>*/
/* */
/*               <div class="meta-data">*/
/*                   <div class="author">Auteur <a href="#">{{ post.author }}</a></div>*/
/*                   <div class="create-date">{{ post.publishedDate|date('d.m.y, H:m') }}</div>*/
/*               </div>*/
/*           </header>*/
/* */
/*           <div class="thumbnail">*/
/*               <div class="meta-data">*/
/*                   <div class="categories">*/
/*                       Catégorie:*/
/*                       <a href="{{ path('blog_category', {'slug': post.category.slug}) }}">{{ post.category.name }}</a>*/
/*                   </div>*/
/* */
/*                   <div class="tags">*/
/*                       Tags:*/
/*                       {% for tag in post.tags %}*/
/*                       <a href="{{ path('blog_tag', {'slug': tag.slug}) }}">{{ tag.name }}</a>*/
/*                       {% endfor %}*/
/*                   </div>*/
/*               </div>*/
/* */
/*               <img src="{{ asset('bundles/aniablog/img/default-thumbnail.jpg') }}" alt="">*/
/*           </div>*/
/* */
/*           {{ post.content|ab_shorten(250)}}*/
/* */
/*           <footer>*/
/*               <a class="comments" href="#">Commentaires (14)</a>*/
/*               <a href="{{ path('blog_post', {'slug': post.slug}) }}" class="btn-green">Lire la totalité</a>*/
/*           </footer>*/
/*       </article> <!-- .post -->*/
/*       {% endfor %}*/
/* */
/* */
/*       {{ knp_pagination_render(pagination, 'AniaBlogBundle:Pagination:pagination.html.twig') }}*/
/* */
/* */
/* {#      <div class="pagination">*/
/*           <ul>*/
/*               <li><a href="#">1</a></li>*/
/*               <li><a href="#">2</a></li>*/
/*               <li><a class="current" href="#">3</a></li>*/
/*               <li><a href="#">4</a></li>*/
/*           </ul>*/
/*       </div> <!-- .pagination -->#}*/
/*   </div> <!-- .left-side -->*/
/* {% endblock %}*/
/* */
