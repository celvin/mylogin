<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_56217d1ec1e3a9539579e40ad96bd2acfc3b603e8489e94bd0b8e56406d471ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_75a8a02fd802aacfe6c531e002b9a83bd4bc66d04ac8749acedf2c53165fc3cc = $this->env->getExtension("native_profiler");
        $__internal_75a8a02fd802aacfe6c531e002b9a83bd4bc66d04ac8749acedf2c53165fc3cc->enter($__internal_75a8a02fd802aacfe6c531e002b9a83bd4bc66d04ac8749acedf2c53165fc3cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_75a8a02fd802aacfe6c531e002b9a83bd4bc66d04ac8749acedf2c53165fc3cc->leave($__internal_75a8a02fd802aacfe6c531e002b9a83bd4bc66d04ac8749acedf2c53165fc3cc_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_4de687757bf3704e66de78bee713752ba23f10855fb50e69dc516c990e5b2a3d = $this->env->getExtension("native_profiler");
        $__internal_4de687757bf3704e66de78bee713752ba23f10855fb50e69dc516c990e5b2a3d->enter($__internal_4de687757bf3704e66de78bee713752ba23f10855fb50e69dc516c990e5b2a3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_4de687757bf3704e66de78bee713752ba23f10855fb50e69dc516c990e5b2a3d->leave($__internal_4de687757bf3704e66de78bee713752ba23f10855fb50e69dc516c990e5b2a3d_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
