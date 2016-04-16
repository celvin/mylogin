<?php

/* FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_88369935b7a5c826fef2c0e4ecbde5f98f6ff0b24102111789aee2c3eeb4b175 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig", 1);
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
        $__internal_e6e712769c729eca9875f1ab64b41731a1964b3a9cd0e0e4d611237969489258 = $this->env->getExtension("native_profiler");
        $__internal_e6e712769c729eca9875f1ab64b41731a1964b3a9cd0e0e4d611237969489258->enter($__internal_e6e712769c729eca9875f1ab64b41731a1964b3a9cd0e0e4d611237969489258_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e6e712769c729eca9875f1ab64b41731a1964b3a9cd0e0e4d611237969489258->leave($__internal_e6e712769c729eca9875f1ab64b41731a1964b3a9cd0e0e4d611237969489258_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a39c917417b543b37a0d1da063bd6befb2a78415bc104d294b16e4323c784918 = $this->env->getExtension("native_profiler");
        $__internal_a39c917417b543b37a0d1da063bd6befb2a78415bc104d294b16e4323c784918->enter($__internal_a39c917417b543b37a0d1da063bd6befb2a78415bc104d294b16e4323c784918_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_a39c917417b543b37a0d1da063bd6befb2a78415bc104d294b16e4323c784918->leave($__internal_a39c917417b543b37a0d1da063bd6befb2a78415bc104d294b16e4323c784918_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>{{ 'resetting.password_already_requested'|trans }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
