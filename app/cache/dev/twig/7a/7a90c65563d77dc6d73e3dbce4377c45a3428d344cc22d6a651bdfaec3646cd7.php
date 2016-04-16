<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_b33e9e1f103ff37585808d4f890c0eae86cafbb9f3b82c9fd914db671c4ce939 extends Twig_Template
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
        $__internal_ad27c1dd6304f22370186749f0ff422cdf2bff99da36ea6f83bbfb8ccb0f4e62 = $this->env->getExtension("native_profiler");
        $__internal_ad27c1dd6304f22370186749f0ff422cdf2bff99da36ea6f83bbfb8ccb0f4e62->enter($__internal_ad27c1dd6304f22370186749f0ff422cdf2bff99da36ea6f83bbfb8ccb0f4e62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_ad27c1dd6304f22370186749f0ff422cdf2bff99da36ea6f83bbfb8ccb0f4e62->leave($__internal_ad27c1dd6304f22370186749f0ff422cdf2bff99da36ea6f83bbfb8ccb0f4e62_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
