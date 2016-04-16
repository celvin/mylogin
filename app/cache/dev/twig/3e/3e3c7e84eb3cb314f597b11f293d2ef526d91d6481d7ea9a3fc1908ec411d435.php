<?php

/* HWIOAuthBundle:Connect:connect_success.html.twig */
class __TwigTemplate_f73d7d7f04a61c85c5cdce46a91476ed76a65276ee261039ce7491244e540227 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("HWIOAuthBundle::layout.html.twig", "HWIOAuthBundle:Connect:connect_success.html.twig", 1);
        $this->blocks = array(
            'hwi_oauth_content' => array($this, 'block_hwi_oauth_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "HWIOAuthBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0e9f8510060bf9d00319f976e43221dc4b06dea6041ef01f7e139687a8cfdcbd = $this->env->getExtension("native_profiler");
        $__internal_0e9f8510060bf9d00319f976e43221dc4b06dea6041ef01f7e139687a8cfdcbd->enter($__internal_0e9f8510060bf9d00319f976e43221dc4b06dea6041ef01f7e139687a8cfdcbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HWIOAuthBundle:Connect:connect_success.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e9f8510060bf9d00319f976e43221dc4b06dea6041ef01f7e139687a8cfdcbd->leave($__internal_0e9f8510060bf9d00319f976e43221dc4b06dea6041ef01f7e139687a8cfdcbd_prof);

    }

    // line 3
    public function block_hwi_oauth_content($context, array $blocks = array())
    {
        $__internal_948e4790baaf83ab4ea02b8394de161fa896edc7ce247e1309fea552d02dd044 = $this->env->getExtension("native_profiler");
        $__internal_948e4790baaf83ab4ea02b8394de161fa896edc7ce247e1309fea552d02dd044->enter($__internal_948e4790baaf83ab4ea02b8394de161fa896edc7ce247e1309fea552d02dd044_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hwi_oauth_content"));

        // line 4
        echo "    <h3>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("header.success", array("%name%" => $this->getAttribute((isset($context["userInformation"]) ? $context["userInformation"] : $this->getContext($context, "userInformation")), "realName", array())), "HWIOAuthBundle"), "html", null, true);
        echo "</h3>
";
        
        $__internal_948e4790baaf83ab4ea02b8394de161fa896edc7ce247e1309fea552d02dd044->leave($__internal_948e4790baaf83ab4ea02b8394de161fa896edc7ce247e1309fea552d02dd044_prof);

    }

    public function getTemplateName()
    {
        return "HWIOAuthBundle:Connect:connect_success.html.twig";
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
/* {% extends 'HWIOAuthBundle::layout.html.twig' %}*/
/* */
/* {% block hwi_oauth_content %}*/
/*     <h3>{{ 'header.success' | trans({'%name%': userInformation.realName}, 'HWIOAuthBundle') }}</h3>*/
/* {% endblock hwi_oauth_content %}*/
/* */
