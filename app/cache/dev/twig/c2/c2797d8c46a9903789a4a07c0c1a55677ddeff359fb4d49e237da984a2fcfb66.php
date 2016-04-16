<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_a1ddb66446a71759627c39849e74473941e0951314a45c0009f656c391bc2609 extends Twig_Template
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
        $__internal_87aafe9c553fb0ef9c3d71ca90b32ab8d0ea80b299a1ace8710c5762f9835c8e = $this->env->getExtension("native_profiler");
        $__internal_87aafe9c553fb0ef9c3d71ca90b32ab8d0ea80b299a1ace8710c5762f9835c8e->enter($__internal_87aafe9c553fb0ef9c3d71ca90b32ab8d0ea80b299a1ace8710c5762f9835c8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_87aafe9c553fb0ef9c3d71ca90b32ab8d0ea80b299a1ace8710c5762f9835c8e->leave($__internal_87aafe9c553fb0ef9c3d71ca90b32ab8d0ea80b299a1ace8710c5762f9835c8e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
