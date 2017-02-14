<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_4237a9671cbfe1df946b5a8e65bda0efeee15f5f5841c99dcf11dfdeff53fa4b extends Twig_Template
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
        $__internal_0dbd83ed8e65c8f8cb77e4487052c45bd38c45fbdef539ba998bc9e2afc479c9 = $this->env->getExtension("native_profiler");
        $__internal_0dbd83ed8e65c8f8cb77e4487052c45bd38c45fbdef539ba998bc9e2afc479c9->enter($__internal_0dbd83ed8e65c8f8cb77e4487052c45bd38c45fbdef539ba998bc9e2afc479c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0dbd83ed8e65c8f8cb77e4487052c45bd38c45fbdef539ba998bc9e2afc479c9->leave($__internal_0dbd83ed8e65c8f8cb77e4487052c45bd38c45fbdef539ba998bc9e2afc479c9_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f1c7108ddb15e9e1100e5e50a3e2ecd27b6ee7d18389e5ea6c938b6ec87cfb0d = $this->env->getExtension("native_profiler");
        $__internal_f1c7108ddb15e9e1100e5e50a3e2ecd27b6ee7d18389e5ea6c938b6ec87cfb0d->enter($__internal_f1c7108ddb15e9e1100e5e50a3e2ecd27b6ee7d18389e5ea6c938b6ec87cfb0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f1c7108ddb15e9e1100e5e50a3e2ecd27b6ee7d18389e5ea6c938b6ec87cfb0d->leave($__internal_f1c7108ddb15e9e1100e5e50a3e2ecd27b6ee7d18389e5ea6c938b6ec87cfb0d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9ade2cc6fda61d50eb30bbe6638c6f39b5c2acf922be35778eebf6a49c716313 = $this->env->getExtension("native_profiler");
        $__internal_9ade2cc6fda61d50eb30bbe6638c6f39b5c2acf922be35778eebf6a49c716313->enter($__internal_9ade2cc6fda61d50eb30bbe6638c6f39b5c2acf922be35778eebf6a49c716313_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9ade2cc6fda61d50eb30bbe6638c6f39b5c2acf922be35778eebf6a49c716313->leave($__internal_9ade2cc6fda61d50eb30bbe6638c6f39b5c2acf922be35778eebf6a49c716313_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6f139a0ee911c200cfd24cc1ac5131872200fada18b83bce5784219f68ceade4 = $this->env->getExtension("native_profiler");
        $__internal_6f139a0ee911c200cfd24cc1ac5131872200fada18b83bce5784219f68ceade4->enter($__internal_6f139a0ee911c200cfd24cc1ac5131872200fada18b83bce5784219f68ceade4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_6f139a0ee911c200cfd24cc1ac5131872200fada18b83bce5784219f68ceade4->leave($__internal_6f139a0ee911c200cfd24cc1ac5131872200fada18b83bce5784219f68ceade4_prof);

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
