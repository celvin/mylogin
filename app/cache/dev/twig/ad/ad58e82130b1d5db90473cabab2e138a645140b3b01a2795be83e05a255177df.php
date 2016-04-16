<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_f598c1e8c021bae5d39104debd9a9ce49fdaae8e982cc996bf90ba8cdfc9c703 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_2c1a9d4c78be48032e18958a054f857c66327cae5822664094086beffabbfb74 = $this->env->getExtension("native_profiler");
        $__internal_2c1a9d4c78be48032e18958a054f857c66327cae5822664094086beffabbfb74->enter($__internal_2c1a9d4c78be48032e18958a054f857c66327cae5822664094086beffabbfb74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2c1a9d4c78be48032e18958a054f857c66327cae5822664094086beffabbfb74->leave($__internal_2c1a9d4c78be48032e18958a054f857c66327cae5822664094086beffabbfb74_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8bef2ba903541396a4f659a86b0a7f461e70fdacaa65fb942898b18cfd6bdf9b = $this->env->getExtension("native_profiler");
        $__internal_8bef2ba903541396a4f659a86b0a7f461e70fdacaa65fb942898b18cfd6bdf9b->enter($__internal_8bef2ba903541396a4f659a86b0a7f461e70fdacaa65fb942898b18cfd6bdf9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_8bef2ba903541396a4f659a86b0a7f461e70fdacaa65fb942898b18cfd6bdf9b->leave($__internal_8bef2ba903541396a4f659a86b0a7f461e70fdacaa65fb942898b18cfd6bdf9b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
