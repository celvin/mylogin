<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_2f4496a66646a79ed5032991b3c868eb07d12980f4e4c3ae2718eabe116f5b35 extends Twig_Template
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
        $__internal_85b3edff38dfc86884342b772072224b9babaf14f80725f83728aa5ae52e525c = $this->env->getExtension("native_profiler");
        $__internal_85b3edff38dfc86884342b772072224b9babaf14f80725f83728aa5ae52e525c->enter($__internal_85b3edff38dfc86884342b772072224b9babaf14f80725f83728aa5ae52e525c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_85b3edff38dfc86884342b772072224b9babaf14f80725f83728aa5ae52e525c->leave($__internal_85b3edff38dfc86884342b772072224b9babaf14f80725f83728aa5ae52e525c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
