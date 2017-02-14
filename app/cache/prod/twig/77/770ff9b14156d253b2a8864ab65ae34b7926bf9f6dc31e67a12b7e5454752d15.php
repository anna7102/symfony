<?php

/* AniaBlogBundle:Template:categoriesList.html.twig */
class __TwigTemplate_0afaf4491f5c959ccd26f86bf1a0d62c0f1f5b0dc901174419a0a27929ba8667 extends Twig_Template
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
        echo "<ul class=\"categories\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categoriesList"]) ? $context["categoriesList"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 3
            echo "    ";
            if ((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "_route"), "method") == "blog_category") && ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "slug"), "method") == $this->getAttribute($context["category"], "slug", array())))) {
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
        return array (  52 => 13,  42 => 9,  37 => 8,  33 => 6,  29 => 4,  26 => 3,  22 => 2,  19 => 1,);
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
