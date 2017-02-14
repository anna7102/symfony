<?php

/* AniaBlogBundle:Template:tagsCloud.html.twig */
class __TwigTemplate_0c288c6dcb2b8daa3cda863611e0a5110481fb75f874d27ce6086aa8245a8fa9 extends Twig_Template
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
        echo "<div class=\"tag-cloud\">
    <h3>Chmura tagów</h3>
    <div class=\"tags\">
        ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tagsList"]) ? $context["tagsList"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 5
            echo "            <a style=\"font-size: ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "fontSize", array(), "array"), "html", null, true);
            echo "rem\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_tag", array("slug" => $this->getAttribute($context["tag"], "slug", array(), "array"))), "html", null, true);
            echo "\">
                ";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "name", array(), "array"), "html", null, true);
            echo "
            </a>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "AniaBlogBundle:Template:tagsCloud.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 9,  35 => 6,  28 => 5,  24 => 4,  19 => 1,);
    }
}
/* <div class="tag-cloud">*/
/*     <h3>Chmura tagów</h3>*/
/*     <div class="tags">*/
/*         {% for tag in tagsList %}*/
/*             <a style="font-size: {{ tag['fontSize'] }}rem" href="{{ path('blog_tag', {'slug': tag['slug']}) }}">*/
/*                 {{ tag['name'] }}*/
/*             </a>*/
/*         {% endfor %}*/
/*     </div>*/
/* </div>*/
