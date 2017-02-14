<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_9106aed6af7a7bed9f39d8800960249bf041d5091a8f002a493873ebb31de689 extends Twig_Template
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
        $__internal_4c52bd7be8abac17fa34559a85ca12de19a963303d44db40718320c1638f1719 = $this->env->getExtension("native_profiler");
        $__internal_4c52bd7be8abac17fa34559a85ca12de19a963303d44db40718320c1638f1719->enter($__internal_4c52bd7be8abac17fa34559a85ca12de19a963303d44db40718320c1638f1719_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4c52bd7be8abac17fa34559a85ca12de19a963303d44db40718320c1638f1719->leave($__internal_4c52bd7be8abac17fa34559a85ca12de19a963303d44db40718320c1638f1719_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1a22c09253c934b30c009df8952464027a911793e97ba5b0d544c2b94079e7e5 = $this->env->getExtension("native_profiler");
        $__internal_1a22c09253c934b30c009df8952464027a911793e97ba5b0d544c2b94079e7e5->enter($__internal_1a22c09253c934b30c009df8952464027a911793e97ba5b0d544c2b94079e7e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_1a22c09253c934b30c009df8952464027a911793e97ba5b0d544c2b94079e7e5->leave($__internal_1a22c09253c934b30c009df8952464027a911793e97ba5b0d544c2b94079e7e5_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_bb1b814281d2b9e73fecb1d4d0b9491f6db29ecda09458e41f82ae08fd5bfd5f = $this->env->getExtension("native_profiler");
        $__internal_bb1b814281d2b9e73fecb1d4d0b9491f6db29ecda09458e41f82ae08fd5bfd5f->enter($__internal_bb1b814281d2b9e73fecb1d4d0b9491f6db29ecda09458e41f82ae08fd5bfd5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_bb1b814281d2b9e73fecb1d4d0b9491f6db29ecda09458e41f82ae08fd5bfd5f->leave($__internal_bb1b814281d2b9e73fecb1d4d0b9491f6db29ecda09458e41f82ae08fd5bfd5f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_8f7db93ba42857a1905ec80392bfe2a85a954aa109b6cca1b35e8158591d6f24 = $this->env->getExtension("native_profiler");
        $__internal_8f7db93ba42857a1905ec80392bfe2a85a954aa109b6cca1b35e8158591d6f24->enter($__internal_8f7db93ba42857a1905ec80392bfe2a85a954aa109b6cca1b35e8158591d6f24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_8f7db93ba42857a1905ec80392bfe2a85a954aa109b6cca1b35e8158591d6f24->leave($__internal_8f7db93ba42857a1905ec80392bfe2a85a954aa109b6cca1b35e8158591d6f24_prof);

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
