<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_bda8120138f4e3bed59b155206897416ee486b3b2df01f8ddcb1a33529999c9c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dc27f60352f601f167d017667aaf33e13241ab42a10d044c11c88570d65bfbf4 = $this->env->getExtension("native_profiler");
        $__internal_dc27f60352f601f167d017667aaf33e13241ab42a10d044c11c88570d65bfbf4->enter($__internal_dc27f60352f601f167d017667aaf33e13241ab42a10d044c11c88570d65bfbf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dc27f60352f601f167d017667aaf33e13241ab42a10d044c11c88570d65bfbf4->leave($__internal_dc27f60352f601f167d017667aaf33e13241ab42a10d044c11c88570d65bfbf4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b4f76f9a3c7b07ed20fff167672b839e1eeb980da24c03212620f5813247cd88 = $this->env->getExtension("native_profiler");
        $__internal_b4f76f9a3c7b07ed20fff167672b839e1eeb980da24c03212620f5813247cd88->enter($__internal_b4f76f9a3c7b07ed20fff167672b839e1eeb980da24c03212620f5813247cd88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_b4f76f9a3c7b07ed20fff167672b839e1eeb980da24c03212620f5813247cd88->leave($__internal_b4f76f9a3c7b07ed20fff167672b839e1eeb980da24c03212620f5813247cd88_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f2ff79d16b701256935e1568c0ffe8d808c8d57df89845df36a7804a5c23c242 = $this->env->getExtension("native_profiler");
        $__internal_f2ff79d16b701256935e1568c0ffe8d808c8d57df89845df36a7804a5c23c242->enter($__internal_f2ff79d16b701256935e1568c0ffe8d808c8d57df89845df36a7804a5c23c242_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_f2ff79d16b701256935e1568c0ffe8d808c8d57df89845df36a7804a5c23c242->leave($__internal_f2ff79d16b701256935e1568c0ffe8d808c8d57df89845df36a7804a5c23c242_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_94c70836a6832979060de0e1390fa61c5994ee981941fc7b68f31e6ca0354d02 = $this->env->getExtension("native_profiler");
        $__internal_94c70836a6832979060de0e1390fa61c5994ee981941fc7b68f31e6ca0354d02->enter($__internal_94c70836a6832979060de0e1390fa61c5994ee981941fc7b68f31e6ca0354d02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_94c70836a6832979060de0e1390fa61c5994ee981941fc7b68f31e6ca0354d02->leave($__internal_94c70836a6832979060de0e1390fa61c5994ee981941fc7b68f31e6ca0354d02_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
