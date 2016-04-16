<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_694374754f6b01d0b02d597820246b82e9283e21ff577accbb1ae01785af37c3 extends Twig_Template
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
        $__internal_34169816c257747862591548cc9bae26bd89539f3eefb377895e67c852911e23 = $this->env->getExtension("native_profiler");
        $__internal_34169816c257747862591548cc9bae26bd89539f3eefb377895e67c852911e23->enter($__internal_34169816c257747862591548cc9bae26bd89539f3eefb377895e67c852911e23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_34169816c257747862591548cc9bae26bd89539f3eefb377895e67c852911e23->leave($__internal_34169816c257747862591548cc9bae26bd89539f3eefb377895e67c852911e23_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
