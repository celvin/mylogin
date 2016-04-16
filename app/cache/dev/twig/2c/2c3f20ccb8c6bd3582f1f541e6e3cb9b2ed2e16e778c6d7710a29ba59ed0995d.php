<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_f338ca7fe2958cc0cc6a59c14ffcac8fe3da6b32072be079dd6779619c9001e1 extends Twig_Template
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
        $__internal_b377d37cb26c039a12f6b6d8ba6ec69e3d3dfd44f89f645c6a8efdb96fed993c = $this->env->getExtension("native_profiler");
        $__internal_b377d37cb26c039a12f6b6d8ba6ec69e3d3dfd44f89f645c6a8efdb96fed993c->enter($__internal_b377d37cb26c039a12f6b6d8ba6ec69e3d3dfd44f89f645c6a8efdb96fed993c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_b377d37cb26c039a12f6b6d8ba6ec69e3d3dfd44f89f645c6a8efdb96fed993c->leave($__internal_b377d37cb26c039a12f6b6d8ba6ec69e3d3dfd44f89f645c6a8efdb96fed993c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
