<?php

/* FOSUserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_8e5f08658af82ec87eacb00f2dd146aa67187e47a34d267d2a5f10b135d53ee9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:checkEmail.html.twig", 1);
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
        $__internal_d5adecc8e85c199bb320e09f7fe5109b711cd47b521e835f0d15341b0e5c5493 = $this->env->getExtension("native_profiler");
        $__internal_d5adecc8e85c199bb320e09f7fe5109b711cd47b521e835f0d15341b0e5c5493->enter($__internal_d5adecc8e85c199bb320e09f7fe5109b711cd47b521e835f0d15341b0e5c5493_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d5adecc8e85c199bb320e09f7fe5109b711cd47b521e835f0d15341b0e5c5493->leave($__internal_d5adecc8e85c199bb320e09f7fe5109b711cd47b521e835f0d15341b0e5c5493_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e5abcb90ac916137bc8f0cb2745e04aa5d3f12b55325bc2416705a134b987b54 = $this->env->getExtension("native_profiler");
        $__internal_e5abcb90ac916137bc8f0cb2745e04aa5d3f12b55325bc2416705a134b987b54->enter($__internal_e5abcb90ac916137bc8f0cb2745e04aa5d3f12b55325bc2416705a134b987b54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_e5abcb90ac916137bc8f0cb2745e04aa5d3f12b55325bc2416705a134b987b54->leave($__internal_e5abcb90ac916137bc8f0cb2745e04aa5d3f12b55325bc2416705a134b987b54_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
