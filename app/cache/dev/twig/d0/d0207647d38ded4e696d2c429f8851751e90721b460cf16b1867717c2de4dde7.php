<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_a09b79b62d3e3203834b33d5bdddd4e8e64af8d375ccdf0f9b7f7b32dd8549b4 extends Twig_Template
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
        $__internal_33e2e22cf5b1a402b43e7492ff0cc91a0c7f011bac13c5720bbc40b0b3fd2e08 = $this->env->getExtension("native_profiler");
        $__internal_33e2e22cf5b1a402b43e7492ff0cc91a0c7f011bac13c5720bbc40b0b3fd2e08->enter($__internal_33e2e22cf5b1a402b43e7492ff0cc91a0c7f011bac13c5720bbc40b0b3fd2e08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_33e2e22cf5b1a402b43e7492ff0cc91a0c7f011bac13c5720bbc40b0b3fd2e08->leave($__internal_33e2e22cf5b1a402b43e7492ff0cc91a0c7f011bac13c5720bbc40b0b3fd2e08_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
