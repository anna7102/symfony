<?php

/* AniaBlogBundle:Pages:contact.html.twig */
class __TwigTemplate_7982d5f6105dccb1d881c2d9cbf42a1d8f00b03305871f4f266bead65ae60b82 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AniaBlogBundle::base.html.twig", "AniaBlogBundle:Pages:contact.html.twig", 1);
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
        echo "Contact";
    }

    // line 5
    public function block_contenuTitre($context, array $blocks = array())
    {
        echo "Contact";
    }

    // line 7
    public function block_contenu($context, array $blocks = array())
    {
        // line 8
        echo "    <div class=\"contact-page left-side\">

        <div class=\"notification success\">
           Le message a bien été <strong>envoyé!</strong>
        </div>

        <form action=\"#\" method=\"post\">
            <div class=\"form-row\">
                <label for=\"name\" class=\"required\">Nom / Prénom</label>
                <input type=\"text\" id=\"name\">
            </div>

            <div class=\"form-row error\">
                <label for=\"email\" class=\"required\">Adresse e-mail</label>
                <input type=\"text\" id=\"email\">
                <span>Merci de remplir ce champ</span>
            </div>

            <div class=\"form-row error\">
                <label for=\"message\" class=\"required\">Votre message</label>
                <textarea name=\"message\" id=\"message\"></textarea>
                <span>Merci de remplir ce champ</span>
            </div>

            <button class=\"btn-green submit\">Envoyer</button>
        </form>

    </div> <!-- .left -->
";
    }

    public function getTemplateName()
    {
        return "AniaBlogBundle:Pages:contact.html.twig";
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
/* {% block pageTitre %}Contact{% endblock %}*/
/* */
/* {% block contenuTitre %}Contact{% endblock %}*/
/* */
/* {% block contenu %}*/
/*     <div class="contact-page left-side">*/
/* */
/*         <div class="notification success">*/
/*            Le message a bien été <strong>envoyé!</strong>*/
/*         </div>*/
/* */
/*         <form action="#" method="post">*/
/*             <div class="form-row">*/
/*                 <label for="name" class="required">Nom / Prénom</label>*/
/*                 <input type="text" id="name">*/
/*             </div>*/
/* */
/*             <div class="form-row error">*/
/*                 <label for="email" class="required">Adresse e-mail</label>*/
/*                 <input type="text" id="email">*/
/*                 <span>Merci de remplir ce champ</span>*/
/*             </div>*/
/* */
/*             <div class="form-row error">*/
/*                 <label for="message" class="required">Votre message</label>*/
/*                 <textarea name="message" id="message"></textarea>*/
/*                 <span>Merci de remplir ce champ</span>*/
/*             </div>*/
/* */
/*             <button class="btn-green submit">Envoyer</button>*/
/*         </form>*/
/* */
/*     </div> <!-- .left -->*/
/* {% endblock %}*/
/* */
