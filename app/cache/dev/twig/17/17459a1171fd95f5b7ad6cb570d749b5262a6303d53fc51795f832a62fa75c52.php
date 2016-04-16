<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_278ffb0220959d0948064a029b01931b6971a38abc11b913f3d4b23176cd9735 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_2ecc145263d0d27a4cefdb19d62093849ee0db31f4c7005d0b0d010b13327c5d = $this->env->getExtension("native_profiler");
        $__internal_2ecc145263d0d27a4cefdb19d62093849ee0db31f4c7005d0b0d010b13327c5d->enter($__internal_2ecc145263d0d27a4cefdb19d62093849ee0db31f4c7005d0b0d010b13327c5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2ecc145263d0d27a4cefdb19d62093849ee0db31f4c7005d0b0d010b13327c5d->leave($__internal_2ecc145263d0d27a4cefdb19d62093849ee0db31f4c7005d0b0d010b13327c5d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e12b33d49869192f6e19e0e8bf62d6f9a3d185467c0ab52899256f1640f26a34 = $this->env->getExtension("native_profiler");
        $__internal_e12b33d49869192f6e19e0e8bf62d6f9a3d185467c0ab52899256f1640f26a34->enter($__internal_e12b33d49869192f6e19e0e8bf62d6f9a3d185467c0ab52899256f1640f26a34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_e12b33d49869192f6e19e0e8bf62d6f9a3d185467c0ab52899256f1640f26a34->leave($__internal_e12b33d49869192f6e19e0e8bf62d6f9a3d185467c0ab52899256f1640f26a34_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
