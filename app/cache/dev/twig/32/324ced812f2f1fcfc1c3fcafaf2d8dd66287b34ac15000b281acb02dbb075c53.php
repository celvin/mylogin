<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_5d7355fcdaa7d57cd9b050bafdb87f3a9902727525feb76e053b7c8d50f7572d extends Twig_Template
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
        $__internal_533bf9524f14e422f338fb601d7491ea7f287f0ab7ff72e58516179b5c0cd73d = $this->env->getExtension("native_profiler");
        $__internal_533bf9524f14e422f338fb601d7491ea7f287f0ab7ff72e58516179b5c0cd73d->enter($__internal_533bf9524f14e422f338fb601d7491ea7f287f0ab7ff72e58516179b5c0cd73d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_533bf9524f14e422f338fb601d7491ea7f287f0ab7ff72e58516179b5c0cd73d->leave($__internal_533bf9524f14e422f338fb601d7491ea7f287f0ab7ff72e58516179b5c0cd73d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
