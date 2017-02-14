<?php

/* AniaBlogBundle:Template:categoriesList.html.twig */
class __TwigTemplate_c9834ae60a9cb24576317d449de97047b9d4e885d823a30caf2cae2c9666da28 extends Twig_Template
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
        $__internal_e0106658c1207c3256c71a1109e0a67f600abe66207cd5ee090ddc9fae1debea = $this->env->getExtension("native_profiler");
        $__internal_e0106658c1207c3256c71a1109e0a67f600abe66207cd5ee090ddc9fae1debea->enter($__internal_e0106658c1207c3256c71a1109e0a67f600abe66207cd5ee090ddc9fae1debea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AniaBlogBundle:Template:categoriesList.html.twig"));

        // line 1
        echo "<ul class=\"categories\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categoriesList"]) ? $context["categoriesList"] : $this->getContext($context, "categoriesList")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 3
            echo "    ";
            if ((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") == "blog_category") && ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "slug"), "method") == $this->getAttribute($context["category"], "slug", array())))) {
                // line 4
                echo "        <li class=\"active\" >
    ";
            } else {
                // line 6
                echo "    <li>
    ";
            }
            // line 8
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_category", array("slug" => $this->getAttribute($context["category"], "slug", array()))), "html", null, true);
            echo "\">
            ";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
            echo "
        </a>
    </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "</ul>";
        
        $__internal_e0106658c1207c3256c71a1109e0a67f600abe66207cd5ee090ddc9fae1debea->leave($__internal_e0106658c1207c3256c71a1109e0a67f600abe66207cd5ee090ddc9fae1debea_prof);

    }

    public function getTemplateName()
    {
        return "AniaBlogBundle:Template:categoriesList.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 13,  45 => 9,  40 => 8,  36 => 6,  32 => 4,  29 => 3,  25 => 2,  22 => 1,);
    }
}
/* <ul class="categories">*/
/*     {% for category in categoriesList %}*/
/*     {% if app.request.get('_route') == 'blog_category' and app.request.get('slug') == category.slug %}*/
/*         <li class="active" >*/
/*     {% else %}*/
/*     <li>*/
/*     {% endif %}*/
/*         <a href="{{ path('blog_category', {'slug': category.slug}) }}">*/
/*             {{ category.name }}*/
/*         </a>*/
/*     </li>*/
/*     {% endfor %}*/
/* </ul>*/
