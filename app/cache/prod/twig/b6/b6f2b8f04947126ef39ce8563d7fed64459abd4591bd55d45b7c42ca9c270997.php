<?php

/* AniaBlogBundle:Template:mainMenu.html.twig */
class __TwigTemplate_85606b36dab1ab891163cb4f0dd1e4bcf05c3449e7e7dc630ba01688b62fa1ea extends Twig_Template
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
        echo "<ul>
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["mainMenu"]) ? $context["mainMenu"] : null));
        foreach ($context['_seq'] as $context["name"] => $context["route"]) {
            // line 3
            echo "    ";
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "_route"), "method") == $context["route"])) {
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
            echo $this->env->getExtension('routing')->getPath($context["route"]);
            echo "\">
            ";
            // line 9
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "
        </a>
    </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['route'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "</ul>";
    }

    public function getTemplateName()
    {
        return "AniaBlogBundle:Template:mainMenu.html.twig";
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
/* <ul>*/
/*     {% for name,route in mainMenu %}*/
/*     {% if app.request.get('_route') == route %}*/
/*         <li class="active" >*/
/*     {% else %}*/
/*     <li>*/
/*     {% endif %}*/
/*         <a href="{{ path(route) }}">*/
/*             {{ name }}*/
/*         </a>*/
/*     </li>*/
/*     {% endfor %}*/
/* </ul>*/
