<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_aaca8587d402b06d7569a73ed55e20c12f553b4bd09198a9f454547fba2d45fc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_10621397903020097970fa67b27d50db4fe1626b598b3ff193beb4ee9df5f237 = $this->env->getExtension("native_profiler");
        $__internal_10621397903020097970fa67b27d50db4fe1626b598b3ff193beb4ee9df5f237->enter($__internal_10621397903020097970fa67b27d50db4fe1626b598b3ff193beb4ee9df5f237_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_10621397903020097970fa67b27d50db4fe1626b598b3ff193beb4ee9df5f237->leave($__internal_10621397903020097970fa67b27d50db4fe1626b598b3ff193beb4ee9df5f237_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c5e7ae7216d80ec177c8e3374cae0399e15b4af708f22a36d8f9536f5e7ee21f = $this->env->getExtension("native_profiler");
        $__internal_c5e7ae7216d80ec177c8e3374cae0399e15b4af708f22a36d8f9536f5e7ee21f->enter($__internal_c5e7ae7216d80ec177c8e3374cae0399e15b4af708f22a36d8f9536f5e7ee21f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_c5e7ae7216d80ec177c8e3374cae0399e15b4af708f22a36d8f9536f5e7ee21f->leave($__internal_c5e7ae7216d80ec177c8e3374cae0399e15b4af708f22a36d8f9536f5e7ee21f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
