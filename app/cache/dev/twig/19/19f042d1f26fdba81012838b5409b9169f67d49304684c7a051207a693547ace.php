<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_4bb4470bb06fa5fa23d7b45625a488f1393d4439c18d9c23e86ba6b3cb861886 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_650f1482e19376cb0f0a3b9df01ca59a83960b37b8534f21322f4409de210366 = $this->env->getExtension("native_profiler");
        $__internal_650f1482e19376cb0f0a3b9df01ca59a83960b37b8534f21322f4409de210366->enter($__internal_650f1482e19376cb0f0a3b9df01ca59a83960b37b8534f21322f4409de210366_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_650f1482e19376cb0f0a3b9df01ca59a83960b37b8534f21322f4409de210366->leave($__internal_650f1482e19376cb0f0a3b9df01ca59a83960b37b8534f21322f4409de210366_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_135d5951cfb90b4363dada9088b8a74806949de18345cc4d7fba05fb9beea835 = $this->env->getExtension("native_profiler");
        $__internal_135d5951cfb90b4363dada9088b8a74806949de18345cc4d7fba05fb9beea835->enter($__internal_135d5951cfb90b4363dada9088b8a74806949de18345cc4d7fba05fb9beea835_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_135d5951cfb90b4363dada9088b8a74806949de18345cc4d7fba05fb9beea835->leave($__internal_135d5951cfb90b4363dada9088b8a74806949de18345cc4d7fba05fb9beea835_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_7aa1bee05f10180e5c431719ebf077a45560ced7586e436b4e4fabc9991725ad = $this->env->getExtension("native_profiler");
        $__internal_7aa1bee05f10180e5c431719ebf077a45560ced7586e436b4e4fabc9991725ad->enter($__internal_7aa1bee05f10180e5c431719ebf077a45560ced7586e436b4e4fabc9991725ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_7aa1bee05f10180e5c431719ebf077a45560ced7586e436b4e4fabc9991725ad->leave($__internal_7aa1bee05f10180e5c431719ebf077a45560ced7586e436b4e4fabc9991725ad_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_67fb1fbb1ff3c720bbdab381c097345efa84f3f75408fc0718c7b89b232e6034 = $this->env->getExtension("native_profiler");
        $__internal_67fb1fbb1ff3c720bbdab381c097345efa84f3f75408fc0718c7b89b232e6034->enter($__internal_67fb1fbb1ff3c720bbdab381c097345efa84f3f75408fc0718c7b89b232e6034_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_67fb1fbb1ff3c720bbdab381c097345efa84f3f75408fc0718c7b89b232e6034->leave($__internal_67fb1fbb1ff3c720bbdab381c097345efa84f3f75408fc0718c7b89b232e6034_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.subject'|trans({'%username%': user.username}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
