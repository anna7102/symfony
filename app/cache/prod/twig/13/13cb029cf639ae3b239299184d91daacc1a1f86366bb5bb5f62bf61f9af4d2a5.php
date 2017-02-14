<?php

/* AniaBlogBundle:Posts:post.html.twig */
class __TwigTemplate_b0159ab3521ba645d2a32c5c2d2a52523d077090daa624c71243a3841bb32fe5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AniaBlogBundle::base.html.twig", "AniaBlogBundle:Posts:post.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "title", array()), "html", null, true);
    }

    // line 5
    public function block_contenuTitre($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "title", array()), "html", null, true);
    }

    // line 7
    public function block_contenu($context, array $blocks = array())
    {
        // line 8
        echo "    <div class=\"left-side\">

        <article class=\"post\">
            <header>
                <h1>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "title", array()), "html", null, true);
        echo "</h1>

                <div class=\"meta-data\">
                    <div class=\"author\">Auteur <a href=\"#\">";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "author", array()), "html", null, true);
        echo "</a></div>
                    <div class=\"create-date\">Ajouté le ";
        // line 16
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "publishedDate", array()), "d.m.Y, H:m"), "html", null, true);
        echo "</div>
                </div>
            </header>

            <div class=\"thumbnail\">
                <div class=\"meta-data\">
                    <div class=\"categories\">
                        Catégorie:
                        <a href=\"#\">";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "category", array()), "name", array()), "html", null, true);
        echo "</a>
                    </div>

                    <div class=\"tags\">
                        Tags:
                        ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "tags", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 30
            echo "                        <a href=\"#\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "name", array()), "html", null, true);
            echo "</a>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "                    </div>
                </div>

                <img src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/aniablog/img/default-thumbnail.jpg"), "html", null, true);
        echo "\" alt=\"\">
            </div>


          ";
        // line 39
        echo $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "content", array());
        echo "
        </article>

        <div class=\"notification block\">
            Pour ajouter le commentaire <strong>vous devez <a href=\"#\">vous connectez ou bien créer un compte d'abord</a></strong>
        </div>

        <section class=\"post-comments\">
            <header>
                <h3>Commentaires (22)</h3>
            </header>

            <div class=\"comment\">
                <img class=\"thumbnail\" src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/aniablog/img/default-avatar.jpg"), "html", null, true);
        echo "\" alt=\"\">

                <div class=\"body\">
                    <div class=\"author\">Gucio Brzeczyk</div>
                    <div class=\"create-date\">23/07/2016</div>

                    <div class=\"clearfix\"></div>

                    <form action=\"#\" method=\"post\">
                        <div class=\"form-row error\">
                            <textarea name=\"comment\" id=\"comment-body\"></textarea>
                            <span>Ce champ ne doit pas être vide.</span>
                        </div>
                        <button id=\"save-comment\" class=\"submit btn-green\">Ajouter</button>
                        <div class=\"clearfix\"></div>
                    </form>
                </div>
            </div>

            <div class=\"comment\">
                <img class=\"thumbnail\" src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/aniablog/img/default-avatar.jpg"), "html", null, true);
        echo "\" alt=\"\">

                <div class=\"body\">
                    <div class=\"author\">
                        Pszczolka Maja
                        <div class=\"divider\"></div>
                        <a href=\"#\" class=\"delete\">Supprimer</a>
                    </div>
                    <div class=\"create-date\">23/07/2016</div>

                    <div class=\"clearfix\"></div>

                    <p>
                        Le Lorem Ipsum ainsi obtenu ne contient aucune répétition, ni ne contient des mots farfelus, ou des touches d'humour.
                    </p>
                </div>
            </div>

            <div class=\"comment\">
                <img class=\"thumbnail\" src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/aniablog/img/default-avatar.jpg"), "html", null, true);
        echo "\" alt=\"\">

                <div class=\"body\">
                    <div class=\"author\">
                        Gucio Brzeczyk
                        <div class=\"divider\"></div>
                        <a href=\"#\" class=\"delete\">Supprimer</a>
                    </div>
                    <div class=\"create-date\">23/07/2016</div>

                    <div class=\"clearfix\"></div>

                    <p>
                        Le Lorem Ipsum ainsi obtenu ne contient aucune répétition, ni ne contient des mots farfelus, ou des touches d'humour.
                    </p>
                </div>
            </div>

            <div class=\"comment\">
                <img class=\"thumbnail\" src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/aniablog/img/default-avatar.jpg"), "html", null, true);
        echo "\" alt=\"\">

                <div class=\"body\">
                    <div class=\"author\">
                        Tata Muminka
                        <div class=\"divider\"></div>
                        <a href=\"#\" class=\"delete\">Supprimer</a>
                    </div>
                    <div class=\"create-date\">23/07/2016</div>

                    <div class=\"clearfix\"></div>

                    <p>
                        Le Lorem Ipsum ainsi obtenu ne contient aucune répétition, ni ne contient des mots farfelus, ou des touches d'humour.
                    </p>
                </div>
            </div>
        </section>

    </div> <!-- .left -->
";
    }

    public function getTemplateName()
    {
        return "AniaBlogBundle:Posts:post.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 110,  166 => 91,  144 => 72,  121 => 52,  105 => 39,  98 => 35,  93 => 32,  84 => 30,  80 => 29,  72 => 24,  61 => 16,  57 => 15,  51 => 12,  45 => 8,  42 => 7,  36 => 5,  30 => 3,  11 => 1,);
    }
}
/* {% extends "AniaBlogBundle::base.html.twig" %}*/
/* */
/* {% block pageTitre %}{{ post.title }}{% endblock %}*/
/* */
/* {% block contenuTitre %}{{ post.title }}{% endblock %}*/
/* */
/* {% block contenu %}*/
/*     <div class="left-side">*/
/* */
/*         <article class="post">*/
/*             <header>*/
/*                 <h1>{{ post.title }}</h1>*/
/* */
/*                 <div class="meta-data">*/
/*                     <div class="author">Auteur <a href="#">{{ post.author }}</a></div>*/
/*                     <div class="create-date">Ajouté le {{ post.publishedDate|date('d.m.Y, H:m') }}</div>*/
/*                 </div>*/
/*             </header>*/
/* */
/*             <div class="thumbnail">*/
/*                 <div class="meta-data">*/
/*                     <div class="categories">*/
/*                         Catégorie:*/
/*                         <a href="#">{{ post.category.name }}</a>*/
/*                     </div>*/
/* */
/*                     <div class="tags">*/
/*                         Tags:*/
/*                         {% for tag in post.tags %}*/
/*                         <a href="#">{{ tag.name }}</a>*/
/*                         {% endfor %}*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <img src="{{ asset('bundles/aniablog/img/default-thumbnail.jpg') }}" alt="">*/
/*             </div>*/
/* */
/* */
/*           {{ post.content|raw }}*/
/*         </article>*/
/* */
/*         <div class="notification block">*/
/*             Pour ajouter le commentaire <strong>vous devez <a href="#">vous connectez ou bien créer un compte d'abord</a></strong>*/
/*         </div>*/
/* */
/*         <section class="post-comments">*/
/*             <header>*/
/*                 <h3>Commentaires (22)</h3>*/
/*             </header>*/
/* */
/*             <div class="comment">*/
/*                 <img class="thumbnail" src="{{ asset('bundles/aniablog/img/default-avatar.jpg') }}" alt="">*/
/* */
/*                 <div class="body">*/
/*                     <div class="author">Gucio Brzeczyk</div>*/
/*                     <div class="create-date">23/07/2016</div>*/
/* */
/*                     <div class="clearfix"></div>*/
/* */
/*                     <form action="#" method="post">*/
/*                         <div class="form-row error">*/
/*                             <textarea name="comment" id="comment-body"></textarea>*/
/*                             <span>Ce champ ne doit pas être vide.</span>*/
/*                         </div>*/
/*                         <button id="save-comment" class="submit btn-green">Ajouter</button>*/
/*                         <div class="clearfix"></div>*/
/*                     </form>*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <div class="comment">*/
/*                 <img class="thumbnail" src="{{ asset('bundles/aniablog/img/default-avatar.jpg') }}" alt="">*/
/* */
/*                 <div class="body">*/
/*                     <div class="author">*/
/*                         Pszczolka Maja*/
/*                         <div class="divider"></div>*/
/*                         <a href="#" class="delete">Supprimer</a>*/
/*                     </div>*/
/*                     <div class="create-date">23/07/2016</div>*/
/* */
/*                     <div class="clearfix"></div>*/
/* */
/*                     <p>*/
/*                         Le Lorem Ipsum ainsi obtenu ne contient aucune répétition, ni ne contient des mots farfelus, ou des touches d'humour.*/
/*                     </p>*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <div class="comment">*/
/*                 <img class="thumbnail" src="{{ asset('bundles/aniablog/img/default-avatar.jpg') }}" alt="">*/
/* */
/*                 <div class="body">*/
/*                     <div class="author">*/
/*                         Gucio Brzeczyk*/
/*                         <div class="divider"></div>*/
/*                         <a href="#" class="delete">Supprimer</a>*/
/*                     </div>*/
/*                     <div class="create-date">23/07/2016</div>*/
/* */
/*                     <div class="clearfix"></div>*/
/* */
/*                     <p>*/
/*                         Le Lorem Ipsum ainsi obtenu ne contient aucune répétition, ni ne contient des mots farfelus, ou des touches d'humour.*/
/*                     </p>*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <div class="comment">*/
/*                 <img class="thumbnail" src="{{ asset('bundles/aniablog/img/default-avatar.jpg') }}" alt="">*/
/* */
/*                 <div class="body">*/
/*                     <div class="author">*/
/*                         Tata Muminka*/
/*                         <div class="divider"></div>*/
/*                         <a href="#" class="delete">Supprimer</a>*/
/*                     </div>*/
/*                     <div class="create-date">23/07/2016</div>*/
/* */
/*                     <div class="clearfix"></div>*/
/* */
/*                     <p>*/
/*                         Le Lorem Ipsum ainsi obtenu ne contient aucune répétition, ni ne contient des mots farfelus, ou des touches d'humour.*/
/*                     </p>*/
/*                 </div>*/
/*             </div>*/
/*         </section>*/
/* */
/*     </div> <!-- .left -->*/
/* {% endblock %}*/
/* */
