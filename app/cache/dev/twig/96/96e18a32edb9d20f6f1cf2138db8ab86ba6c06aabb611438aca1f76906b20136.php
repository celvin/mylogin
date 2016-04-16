<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_d8bc259344f66b543844604e8c1f3a5c4ed47eca5e41ea3a477ce0a7f9471cc6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_861b19657a46f7ce43dd094177d841f8c6f019b30e2ab5629d91f236803ff876 = $this->env->getExtension("native_profiler");
        $__internal_861b19657a46f7ce43dd094177d841f8c6f019b30e2ab5629d91f236803ff876->enter($__internal_861b19657a46f7ce43dd094177d841f8c6f019b30e2ab5629d91f236803ff876_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_861b19657a46f7ce43dd094177d841f8c6f019b30e2ab5629d91f236803ff876->leave($__internal_861b19657a46f7ce43dd094177d841f8c6f019b30e2ab5629d91f236803ff876_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ba4db3c5abc49fc0021ff5b2fb8f3ff10bec73173c48cb27eed23c74f88d19f9 = $this->env->getExtension("native_profiler");
        $__internal_ba4db3c5abc49fc0021ff5b2fb8f3ff10bec73173c48cb27eed23c74f88d19f9->enter($__internal_ba4db3c5abc49fc0021ff5b2fb8f3ff10bec73173c48cb27eed23c74f88d19f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_ba4db3c5abc49fc0021ff5b2fb8f3ff10bec73173c48cb27eed23c74f88d19f9->leave($__internal_ba4db3c5abc49fc0021ff5b2fb8f3ff10bec73173c48cb27eed23c74f88d19f9_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
