<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_dd15b2919909865bd44c64c1ad5765d85c98f4cf6a286cc9e676f0e12070a958 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_5b0c553de0e197c8c0742f34a9b8daa45db67cb0b60107f10b0ae24eccfa31a5 = $this->env->getExtension("native_profiler");
        $__internal_5b0c553de0e197c8c0742f34a9b8daa45db67cb0b60107f10b0ae24eccfa31a5->enter($__internal_5b0c553de0e197c8c0742f34a9b8daa45db67cb0b60107f10b0ae24eccfa31a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5b0c553de0e197c8c0742f34a9b8daa45db67cb0b60107f10b0ae24eccfa31a5->leave($__internal_5b0c553de0e197c8c0742f34a9b8daa45db67cb0b60107f10b0ae24eccfa31a5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1d2c6cbd2bd01937686fd629f22b7d4673fa17e7f4837ec93b71a89cfde62a4d = $this->env->getExtension("native_profiler");
        $__internal_1d2c6cbd2bd01937686fd629f22b7d4673fa17e7f4837ec93b71a89cfde62a4d->enter($__internal_1d2c6cbd2bd01937686fd629f22b7d4673fa17e7f4837ec93b71a89cfde62a4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_1d2c6cbd2bd01937686fd629f22b7d4673fa17e7f4837ec93b71a89cfde62a4d->leave($__internal_1d2c6cbd2bd01937686fd629f22b7d4673fa17e7f4837ec93b71a89cfde62a4d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
