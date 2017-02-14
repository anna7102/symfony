<?php

/* AniaBlogBundle:Template:tagsCloud.html.twig */
class __TwigTemplate_4107db7c35fc58b23b6d13c778dd348c1b6e93e53bd75efcea6031c55a201a8b extends Twig_Template
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
        $__internal_29341f4ce09f2500747ef60aebbaed128e57bc3e25c48feaeef31edd305563d0 = $this->env->getExtension("native_profiler");
        $__internal_29341f4ce09f2500747ef60aebbaed128e57bc3e25c48feaeef31edd305563d0->enter($__internal_29341f4ce09f2500747ef60aebbaed128e57bc3e25c48feaeef31edd305563d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AniaBlogBundle:Template:tagsCloud.html.twig"));

        // line 1
        echo "<div class=\"tag-cloud\">
    <h3>Chmura tagów</h3>
    <div class=\"tags\">
        ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tagsList"]) ? $context["tagsList"] : $this->getContext($context, "tagsList")));
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
        
        $__internal_29341f4ce09f2500747ef60aebbaed128e57bc3e25c48feaeef31edd305563d0->leave($__internal_29341f4ce09f2500747ef60aebbaed128e57bc3e25c48feaeef31edd305563d0_prof);

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
        return array (  47 => 9,  38 => 6,  31 => 5,  27 => 4,  22 => 1,);
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
