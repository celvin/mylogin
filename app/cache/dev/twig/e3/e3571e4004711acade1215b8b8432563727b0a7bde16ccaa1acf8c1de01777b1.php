<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_5de220cd13d00375d537b0e177474b6f1189b4a87db680b5980b1111359a8fab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ec10c9db52ef534051a1a91837abdceb25c659da965f560774d1aa0738b1fc47 = $this->env->getExtension("native_profiler");
        $__internal_ec10c9db52ef534051a1a91837abdceb25c659da965f560774d1aa0738b1fc47->enter($__internal_ec10c9db52ef534051a1a91837abdceb25c659da965f560774d1aa0738b1fc47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        // line 12
        echo "
<script>
    window.location=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\";
    
    
</script>
";
        
        $__internal_ec10c9db52ef534051a1a91837abdceb25c659da965f560774d1aa0738b1fc47->leave($__internal_ec10c9db52ef534051a1a91837abdceb25c659da965f560774d1aa0738b1fc47_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 14,  22 => 12,);
    }
}
/* {#{% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>*/
/*     {% if targetUrl %}*/
/*     <p><a href="{{ targetUrl }}">{{ 'registration.back'|trans }}</a></p>*/
/*     {% endif %}*/
/* {% endblock fos_user_content %}*/
/* #}*/
/* */
/* <script>*/
/*     window.location="{{path('homepage')}}";*/
/*     */
/*     */
/* </script>*/
/* */
