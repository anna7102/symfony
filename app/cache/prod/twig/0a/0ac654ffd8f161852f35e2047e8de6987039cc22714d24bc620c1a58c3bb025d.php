<?php

/* AniaBlogBundle:Posts:postsList.html.twig */
class __TwigTemplate_40293ede22899987a1c947400778f08ae5e2f1958ef999a4b9b02ac091e3815f extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_pageTitre($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, (isset($context["listTitle"]) ? $context["listTitle"] : null), "html", null, true);
    }

    // line 5
    public function block_topCarrousel($context, array $blocks = array())
    {
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
    }

    // line 20
    public function block_contenuTitre($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, (isset($context["listTitle"]) ? $context["listTitle"] : null), "html", null, true);
    }

    // line 22
    public function block_contenu($context, array $blocks = array())
    {
        // line 23
        echo "  <div class=\"left-side\">

      ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : null));
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
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : null), "AniaBlogBundle:Pagination:pagination.html.twig");
        echo "


";
        // line 75
        echo "  </div> <!-- .left-side -->
";
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
        return array (  172 => 75,  166 => 64,  162 => 62,  152 => 58,  145 => 54,  139 => 51,  134 => 48,  123 => 46,  119 => 45,  109 => 40,  98 => 32,  94 => 31,  86 => 28,  82 => 26,  78 => 25,  74 => 23,  71 => 22,  65 => 20,  53 => 11,  49 => 10,  45 => 9,  40 => 6,  37 => 5,  31 => 3,  11 => 1,);
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
