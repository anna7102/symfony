<?php

/* AniaBlogBundle:Template:mainMenu.html.twig */
class __TwigTemplate_fcb8872932a84fc9df50ffb676deb11bf88f2b3d56ee660755aa7ab7d57b8e69 extends Twig_Template
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
        $__internal_b0d4e31a318c0b36698190fa59f69175384eb3a9867114d1fc95e2e88b38a746 = $this->env->getExtension("native_profiler");
        $__internal_b0d4e31a318c0b36698190fa59f69175384eb3a9867114d1fc95e2e88b38a746->enter($__internal_b0d4e31a318c0b36698190fa59f69175384eb3a9867114d1fc95e2e88b38a746_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AniaBlogBundle:Template:mainMenu.html.twig"));

        // line 1
        echo "<ul>
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["mainMenu"]) ? $context["mainMenu"] : $this->getContext($context, "mainMenu")));
        foreach ($context['_seq'] as $context["name"] => $context["route"]) {
            // line 3
            echo "    ";
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") == $context["route"])) {
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
        
        $__internal_b0d4e31a318c0b36698190fa59f69175384eb3a9867114d1fc95e2e88b38a746->leave($__internal_b0d4e31a318c0b36698190fa59f69175384eb3a9867114d1fc95e2e88b38a746_prof);

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
        return array (  55 => 13,  45 => 9,  40 => 8,  36 => 6,  32 => 4,  29 => 3,  25 => 2,  22 => 1,);
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
