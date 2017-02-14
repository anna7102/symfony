<?php

/* AniaBlogBundle:Pagination:pagination.html.twig */
class __TwigTemplate_6c98f4c69d2f9a7c4e5faa65860b67b4eee5ae9c009a707eef365eaff4fd3eea extends Twig_Template
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
        $__internal_354d1a1d2729bcb80c39be3bec17a0dca47878a7a9229e18fc00bb18f3b821bd = $this->env->getExtension("native_profiler");
        $__internal_354d1a1d2729bcb80c39be3bec17a0dca47878a7a9229e18fc00bb18f3b821bd->enter($__internal_354d1a1d2729bcb80c39be3bec17a0dca47878a7a9229e18fc00bb18f3b821bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AniaBlogBundle:Pagination:pagination.html.twig"));

        // line 19
        echo "
";
        // line 20
        if (((isset($context["pageCount"]) ? $context["pageCount"] : $this->getContext($context, "pageCount")) > 1)) {
            // line 21
            echo "<div class=\"pagination\">
    <ul>

    ";
            // line 24
            if (array_key_exists("previous", $context)) {
                // line 25
                echo "        <li>
            <a href=\"";
                // line 26
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => (isset($context["previous"]) ? $context["previous"] : $this->getContext($context, "previous"))))), "html", null, true);
                echo "\">&laquo;&nbsp;</a>
        </li>
    ";
            } else {
                // line 29
                echo "        <li class=\"disabled\">
            <a>&laquo;&nbsp;</a>
        </li>
    ";
            }
            // line 33
            echo "
    ";
            // line 34
            if (((isset($context["startPage"]) ? $context["startPage"] : $this->getContext($context, "startPage")) > 1)) {
                // line 35
                echo "        <li>
            <a href=\"";
                // line 36
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => 1))), "html", null, true);
                echo "\">1</a>
        </li>
        ";
                // line 38
                if (((isset($context["startPage"]) ? $context["startPage"] : $this->getContext($context, "startPage")) == 3)) {
                    // line 39
                    echo "            <li>
                <a href=\"";
                    // line 40
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => 2))), "html", null, true);
                    echo "\">2</a>
            </li>
        ";
                } elseif ((                // line 42
(isset($context["startPage"]) ? $context["startPage"] : $this->getContext($context, "startPage")) != 2)) {
                    // line 43
                    echo "        <li class=\"disabled\">
            <a>&hellip;</a>
        </li>
        ";
                }
                // line 47
                echo "    ";
            }
            // line 48
            echo "
    ";
            // line 49
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagesInRange"]) ? $context["pagesInRange"] : $this->getContext($context, "pagesInRange")));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 50
                echo "        ";
                if (($context["page"] != (isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")))) {
                    // line 51
                    echo "            <li>
                <a href=\"";
                    // line 52
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => $context["page"]))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</a>
            </li>
        ";
                } else {
                    // line 55
                    echo "            <li>
                <a class=\"current\">";
                    // line 56
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</a>
            </li>
        ";
                }
                // line 59
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "
    ";
            // line 62
            if (((isset($context["pageCount"]) ? $context["pageCount"] : $this->getContext($context, "pageCount")) > (isset($context["endPage"]) ? $context["endPage"] : $this->getContext($context, "endPage")))) {
                // line 63
                echo "        ";
                if (((isset($context["pageCount"]) ? $context["pageCount"] : $this->getContext($context, "pageCount")) > ((isset($context["endPage"]) ? $context["endPage"] : $this->getContext($context, "endPage")) + 1))) {
                    // line 64
                    echo "            ";
                    if (((isset($context["pageCount"]) ? $context["pageCount"] : $this->getContext($context, "pageCount")) > ((isset($context["endPage"]) ? $context["endPage"] : $this->getContext($context, "endPage")) + 2))) {
                        // line 65
                        echo "                <li class=\"disabled\">
                    <a>&hellip;</a>
                </li>
            ";
                    } else {
                        // line 69
                        echo "                <li>
                    <a href=\"";
                        // line 70
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => ((isset($context["pageCount"]) ? $context["pageCount"] : $this->getContext($context, "pageCount")) - 1)))), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, ((isset($context["pageCount"]) ? $context["pageCount"] : $this->getContext($context, "pageCount")) - 1), "html", null, true);
                        echo "</a>
                </li>
            ";
                    }
                    // line 73
                    echo "        ";
                }
                // line 74
                echo "        <li>
            <a href=\"";
                // line 75
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => (isset($context["pageCount"]) ? $context["pageCount"] : $this->getContext($context, "pageCount"))))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["pageCount"]) ? $context["pageCount"] : $this->getContext($context, "pageCount")), "html", null, true);
                echo "</a>
        </li>
    ";
            }
            // line 78
            echo "
    ";
            // line 79
            if (array_key_exists("next", $context)) {
                // line 80
                echo "        <li>
            <a href=\"";
                // line 81
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => (isset($context["next"]) ? $context["next"] : $this->getContext($context, "next"))))), "html", null, true);
                echo "\">&nbsp;&raquo;</a>
        </li>
    ";
            } else {
                // line 84
                echo "        <li class=\"disabled\">
            <a>&nbsp;&raquo;</a>
        </li>
    ";
            }
            // line 88
            echo "    </ul>
</div>
";
        }
        
        $__internal_354d1a1d2729bcb80c39be3bec17a0dca47878a7a9229e18fc00bb18f3b821bd->leave($__internal_354d1a1d2729bcb80c39be3bec17a0dca47878a7a9229e18fc00bb18f3b821bd_prof);

    }

    public function getTemplateName()
    {
        return "AniaBlogBundle:Pagination:pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 88,  176 => 84,  170 => 81,  167 => 80,  165 => 79,  162 => 78,  154 => 75,  151 => 74,  148 => 73,  140 => 70,  137 => 69,  131 => 65,  128 => 64,  125 => 63,  123 => 62,  120 => 61,  113 => 59,  107 => 56,  104 => 55,  96 => 52,  93 => 51,  90 => 50,  86 => 49,  83 => 48,  80 => 47,  74 => 43,  72 => 42,  67 => 40,  64 => 39,  62 => 38,  57 => 36,  54 => 35,  52 => 34,  49 => 33,  43 => 29,  37 => 26,  34 => 25,  32 => 24,  27 => 21,  25 => 20,  22 => 19,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Twitter Bootstrap Sliding pagination control implementation.*/
/*  **/
/*  * View that can be used with the pagination module*/
/*  * from the Twitter Bootstrap CSS Toolkit*/
/*  * http://twitter.github.com/bootstrap/*/
/*  **/
/*  * This view has been ported from Pagerfanta progect*/
/*  * https://github.com/whiteoctober/Pagerfanta/*/
/*  * https://github.com/whiteoctober/Pagerfanta/blob/master/src/Pagerfanta/View/TwitterBootstrapView.php*/
/*  **/
/*  * @author Pablo Díez <pablodip@gmail.com>*/
/*  * @author Jan Sorgalla <jsorgalla@gmail.com>*/
/*  * @author Artem Ponomarenko <imenem@inbox.ru>*/
/*  *//* */
/* #}*/
/* */
/* {% if pageCount > 1 %}*/
/* <div class="pagination">*/
/*     <ul>*/
/* */
/*     {% if previous is defined %}*/
/*         <li>*/
/*             <a href="{{ path(route, query|merge({(pageParameterName): previous})) }}">&laquo;&nbsp;</a>*/
/*         </li>*/
/*     {% else %}*/
/*         <li class="disabled">*/
/*             <a>&laquo;&nbsp;</a>*/
/*         </li>*/
/*     {% endif %}*/
/* */
/*     {% if startPage > 1 %}*/
/*         <li>*/
/*             <a href="{{ path(route, query|merge({(pageParameterName): 1})) }}">1</a>*/
/*         </li>*/
/*         {% if startPage == 3 %}*/
/*             <li>*/
/*                 <a href="{{ path(route, query|merge({(pageParameterName): 2})) }}">2</a>*/
/*             </li>*/
/*         {% elseif startPage != 2 %}*/
/*         <li class="disabled">*/
/*             <a>&hellip;</a>*/
/*         </li>*/
/*         {% endif %}*/
/*     {% endif %}*/
/* */
/*     {% for page in pagesInRange %}*/
/*         {% if page != current %}*/
/*             <li>*/
/*                 <a href="{{ path(route, query|merge({(pageParameterName): page})) }}">{{ page }}</a>*/
/*             </li>*/
/*         {% else %}*/
/*             <li>*/
/*                 <a class="current">{{ page }}</a>*/
/*             </li>*/
/*         {% endif %}*/
/* */
/*     {% endfor %}*/
/* */
/*     {% if pageCount > endPage %}*/
/*         {% if pageCount > (endPage + 1) %}*/
/*             {% if pageCount > (endPage + 2) %}*/
/*                 <li class="disabled">*/
/*                     <a>&hellip;</a>*/
/*                 </li>*/
/*             {% else %}*/
/*                 <li>*/
/*                     <a href="{{ path(route, query|merge({(pageParameterName): (pageCount - 1)})) }}">{{ pageCount -1 }}</a>*/
/*                 </li>*/
/*             {% endif %}*/
/*         {% endif %}*/
/*         <li>*/
/*             <a href="{{ path(route, query|merge({(pageParameterName): pageCount})) }}">{{ pageCount }}</a>*/
/*         </li>*/
/*     {% endif %}*/
/* */
/*     {% if next is defined %}*/
/*         <li>*/
/*             <a href="{{ path(route, query|merge({(pageParameterName): next})) }}">&nbsp;&raquo;</a>*/
/*         </li>*/
/*     {% else %}*/
/*         <li class="disabled">*/
/*             <a>&nbsp;&raquo;</a>*/
/*         </li>*/
/*     {% endif %}*/
/*     </ul>*/
/* </div>*/
/* {% endif %}*/
/* */
