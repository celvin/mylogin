<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_4292c2b8be9b2c8d489ec5f4a3e33f3a750292e4f0ad99d099cc721af6cb153f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 1);
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
        $__internal_e100b2982eec9ae53ca5b95cfa64a9f91193192450ed736cf7ef4852e8286bc5 = $this->env->getExtension("native_profiler");
        $__internal_e100b2982eec9ae53ca5b95cfa64a9f91193192450ed736cf7ef4852e8286bc5->enter($__internal_e100b2982eec9ae53ca5b95cfa64a9f91193192450ed736cf7ef4852e8286bc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e100b2982eec9ae53ca5b95cfa64a9f91193192450ed736cf7ef4852e8286bc5->leave($__internal_e100b2982eec9ae53ca5b95cfa64a9f91193192450ed736cf7ef4852e8286bc5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ba2afcae3ffd375d7b467f20c5b0a681d693f8f16ce43aefef6d74f118e28763 = $this->env->getExtension("native_profiler");
        $__internal_ba2afcae3ffd375d7b467f20c5b0a681d693f8f16ce43aefef6d74f118e28763->enter($__internal_ba2afcae3ffd375d7b467f20c5b0a681d693f8f16ce43aefef6d74f118e28763_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_ba2afcae3ffd375d7b467f20c5b0a681d693f8f16ce43aefef6d74f118e28763->leave($__internal_ba2afcae3ffd375d7b467f20c5b0a681d693f8f16ce43aefef6d74f118e28763_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword.html.twig";
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
/* {% include "FOSUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
