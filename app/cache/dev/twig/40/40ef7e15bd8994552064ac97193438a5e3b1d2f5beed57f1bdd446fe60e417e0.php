<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_08a2439d0c889c80d3fec668490a55af25dc91bcac649d0dbf066993f2c37432 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_b1afe66840c8afe9e510bba066221b1a5cd4297bfdc52fc33a4ae4632df6243f = $this->env->getExtension("native_profiler");
        $__internal_b1afe66840c8afe9e510bba066221b1a5cd4297bfdc52fc33a4ae4632df6243f->enter($__internal_b1afe66840c8afe9e510bba066221b1a5cd4297bfdc52fc33a4ae4632df6243f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b1afe66840c8afe9e510bba066221b1a5cd4297bfdc52fc33a4ae4632df6243f->leave($__internal_b1afe66840c8afe9e510bba066221b1a5cd4297bfdc52fc33a4ae4632df6243f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6142d38eae77cfce6cc890fd64b4f49435859605ebf3263710dfae5d254a04f9 = $this->env->getExtension("native_profiler");
        $__internal_6142d38eae77cfce6cc890fd64b4f49435859605ebf3263710dfae5d254a04f9->enter($__internal_6142d38eae77cfce6cc890fd64b4f49435859605ebf3263710dfae5d254a04f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_6142d38eae77cfce6cc890fd64b4f49435859605ebf3263710dfae5d254a04f9->leave($__internal_6142d38eae77cfce6cc890fd64b4f49435859605ebf3263710dfae5d254a04f9_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
