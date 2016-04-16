<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_2861450a758ad8e8271ce4d9bbc6e1fa7b2224395d0640a7d4b17aababc5a077 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_047b69d03a4e4a352dcef9cba8e8c0c93f461909ed4b13d956bab47269df8eaa = $this->env->getExtension("native_profiler");
        $__internal_047b69d03a4e4a352dcef9cba8e8c0c93f461909ed4b13d956bab47269df8eaa->enter($__internal_047b69d03a4e4a352dcef9cba8e8c0c93f461909ed4b13d956bab47269df8eaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_047b69d03a4e4a352dcef9cba8e8c0c93f461909ed4b13d956bab47269df8eaa->leave($__internal_047b69d03a4e4a352dcef9cba8e8c0c93f461909ed4b13d956bab47269df8eaa_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_46aa6d6a42c6251308554e1cb13d9c97122aeab2ee622a8a518437b85845e624 = $this->env->getExtension("native_profiler");
        $__internal_46aa6d6a42c6251308554e1cb13d9c97122aeab2ee622a8a518437b85845e624->enter($__internal_46aa6d6a42c6251308554e1cb13d9c97122aeab2ee622a8a518437b85845e624_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_46aa6d6a42c6251308554e1cb13d9c97122aeab2ee622a8a518437b85845e624->leave($__internal_46aa6d6a42c6251308554e1cb13d9c97122aeab2ee622a8a518437b85845e624_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
