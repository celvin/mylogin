<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_0d40ab49e4e4af872dc0277a5d752423e2f2877276d34cf25cf2bbda4fa3e2c7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_cb220d0f1590114a5d64f880b35b888ebac65952d10fc725ed8648b7a6a95b07 = $this->env->getExtension("native_profiler");
        $__internal_cb220d0f1590114a5d64f880b35b888ebac65952d10fc725ed8648b7a6a95b07->enter($__internal_cb220d0f1590114a5d64f880b35b888ebac65952d10fc725ed8648b7a6a95b07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cb220d0f1590114a5d64f880b35b888ebac65952d10fc725ed8648b7a6a95b07->leave($__internal_cb220d0f1590114a5d64f880b35b888ebac65952d10fc725ed8648b7a6a95b07_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_47e406eac2b098b0335c7572ec562bd07a3aa4979a1b01c5286b9e9f97518a14 = $this->env->getExtension("native_profiler");
        $__internal_47e406eac2b098b0335c7572ec562bd07a3aa4979a1b01c5286b9e9f97518a14->enter($__internal_47e406eac2b098b0335c7572ec562bd07a3aa4979a1b01c5286b9e9f97518a14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_47e406eac2b098b0335c7572ec562bd07a3aa4979a1b01c5286b9e9f97518a14->leave($__internal_47e406eac2b098b0335c7572ec562bd07a3aa4979a1b01c5286b9e9f97518a14_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
