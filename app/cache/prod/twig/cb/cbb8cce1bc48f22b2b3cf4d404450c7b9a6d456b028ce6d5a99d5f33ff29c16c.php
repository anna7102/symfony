<?php

/* AniaBlogBundle:Pages:about.html.twig */
class __TwigTemplate_6c7e3293f23e72d4cd13dd9821f70abc0ad6e0aea88e0972dadcde41b5840dbc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AniaBlogBundle::base.html.twig", "AniaBlogBundle:Pages:about.html.twig", 1);
        $this->blocks = array(
            'pageTitre' => array($this, 'block_pageTitre'),
            'contenuTitre' => array($this, 'block_contenuTitre'),
            'contenu' => array($this, 'block_contenu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AniaBlogBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_pageTitre($context, array $blocks = array())
    {
        echo "A propos de moi";
    }

    // line 5
    public function block_contenuTitre($context, array $blocks = array())
    {
        echo "A propos de moi";
    }

    // line 7
    public function block_contenu($context, array $blocks = array())
    {
        // line 8
        echo "  <div class=\"left-side\">
      <p>
          De nombreuses suites logicielles de mise en page ou éditeurs de sites Web ont fait du Lorem Ipsum leur faux texte par défaut, et une recherche pour 'Lorem Ipsum' vous conduira vers de nombreux sites qui n'en sont encore qu'à leur phase de construction.
      </p>
      <p>
          De nombreuses suites logicielles de mise en page ou éditeurs de sites Web ont fait du Lorem Ipsum leur faux texte par défaut, et une recherche pour 'Lorem Ipsum' vous conduira vers de nombreux sites qui n'en sont encore qu'à leur phase de construction.
      </p>
      <p>
          De nombreuses suites logicielles de mise en page ou éditeurs de sites Web ont fait du Lorem Ipsum leur faux texte par défaut, et une recherche pour 'Lorem Ipsum' vous conduira vers de nombreux sites qui n'en sont encore qu'à leur phase de construction.
      </p>
      <p>
          De nombreuses suites logicielles de mise en page ou éditeurs de sites Web ont fait du Lorem Ipsum leur faux texte par défaut, et une recherche pour 'Lorem Ipsum' vous conduira vers de nombreux sites qui n'en sont encore qu'à leur phase de construction.
      </p>
      <p>
          De nombreuses suites logicielles de mise en page ou éditeurs de sites Web ont fait du Lorem Ipsum leur faux texte par défaut, et une recherche pour 'Lorem Ipsum' vous conduira vers de nombreux sites qui n'en sont encore qu'à leur phase de construction.
      </p>
  </div> <!-- .left-side -->
";
    }

    public function getTemplateName()
    {
        return "AniaBlogBundle:Pages:about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  42 => 7,  36 => 5,  30 => 3,  11 => 1,);
    }
}
/* {% extends "AniaBlogBundle::base.html.twig" %}*/
/* */
/* {% block pageTitre %}A propos de moi{% endblock %}*/
/* */
/* {% block contenuTitre %}A propos de moi{% endblock %}*/
/* */
/* {% block contenu %}*/
/*   <div class="left-side">*/
/*       <p>*/
/*           De nombreuses suites logicielles de mise en page ou éditeurs de sites Web ont fait du Lorem Ipsum leur faux texte par défaut, et une recherche pour 'Lorem Ipsum' vous conduira vers de nombreux sites qui n'en sont encore qu'à leur phase de construction.*/
/*       </p>*/
/*       <p>*/
/*           De nombreuses suites logicielles de mise en page ou éditeurs de sites Web ont fait du Lorem Ipsum leur faux texte par défaut, et une recherche pour 'Lorem Ipsum' vous conduira vers de nombreux sites qui n'en sont encore qu'à leur phase de construction.*/
/*       </p>*/
/*       <p>*/
/*           De nombreuses suites logicielles de mise en page ou éditeurs de sites Web ont fait du Lorem Ipsum leur faux texte par défaut, et une recherche pour 'Lorem Ipsum' vous conduira vers de nombreux sites qui n'en sont encore qu'à leur phase de construction.*/
/*       </p>*/
/*       <p>*/
/*           De nombreuses suites logicielles de mise en page ou éditeurs de sites Web ont fait du Lorem Ipsum leur faux texte par défaut, et une recherche pour 'Lorem Ipsum' vous conduira vers de nombreux sites qui n'en sont encore qu'à leur phase de construction.*/
/*       </p>*/
/*       <p>*/
/*           De nombreuses suites logicielles de mise en page ou éditeurs de sites Web ont fait du Lorem Ipsum leur faux texte par défaut, et une recherche pour 'Lorem Ipsum' vous conduira vers de nombreux sites qui n'en sont encore qu'à leur phase de construction.*/
/*       </p>*/
/*   </div> <!-- .left-side -->*/
/* {% endblock %}*/
/* */
