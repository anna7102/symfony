<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_c675a6b0a24e4d6832575cfb24e78494e1d925419a91243863b4d807b0be74c1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_98ace119bd9ab0757bfd6871d4f50bf033a3dbef1c0b8b7790db9da0bdb03f9d = $this->env->getExtension("native_profiler");
        $__internal_98ace119bd9ab0757bfd6871d4f50bf033a3dbef1c0b8b7790db9da0bdb03f9d->enter($__internal_98ace119bd9ab0757bfd6871d4f50bf033a3dbef1c0b8b7790db9da0bdb03f9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_98ace119bd9ab0757bfd6871d4f50bf033a3dbef1c0b8b7790db9da0bdb03f9d->leave($__internal_98ace119bd9ab0757bfd6871d4f50bf033a3dbef1c0b8b7790db9da0bdb03f9d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_77ab965e1289e2e4a97edad279748064e2589b8e4537ab12c747ced7d19c636f = $this->env->getExtension("native_profiler");
        $__internal_77ab965e1289e2e4a97edad279748064e2589b8e4537ab12c747ced7d19c636f->enter($__internal_77ab965e1289e2e4a97edad279748064e2589b8e4537ab12c747ced7d19c636f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_77ab965e1289e2e4a97edad279748064e2589b8e4537ab12c747ced7d19c636f->leave($__internal_77ab965e1289e2e4a97edad279748064e2589b8e4537ab12c747ced7d19c636f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0cbd408cf479f1d4697bd1dd3877cc4ae6fedcacdb4fb897234f621dfe70818f = $this->env->getExtension("native_profiler");
        $__internal_0cbd408cf479f1d4697bd1dd3877cc4ae6fedcacdb4fb897234f621dfe70818f->enter($__internal_0cbd408cf479f1d4697bd1dd3877cc4ae6fedcacdb4fb897234f621dfe70818f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_0cbd408cf479f1d4697bd1dd3877cc4ae6fedcacdb4fb897234f621dfe70818f->leave($__internal_0cbd408cf479f1d4697bd1dd3877cc4ae6fedcacdb4fb897234f621dfe70818f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7216d3ec9d28d10c9d105bd19eee135029e1aebd251015c09d1b9574b66e0641 = $this->env->getExtension("native_profiler");
        $__internal_7216d3ec9d28d10c9d105bd19eee135029e1aebd251015c09d1b9574b66e0641->enter($__internal_7216d3ec9d28d10c9d105bd19eee135029e1aebd251015c09d1b9574b66e0641_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_7216d3ec9d28d10c9d105bd19eee135029e1aebd251015c09d1b9574b66e0641->leave($__internal_7216d3ec9d28d10c9d105bd19eee135029e1aebd251015c09d1b9574b66e0641_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
