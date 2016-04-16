<?php

/* HWIOAuthBundle:Connect:registration_success.html.twig */
class __TwigTemplate_7946e6fb7a0f62619ecb84a06a96ee202dc7a37524f41f656c4bf6397a37e1ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("HWIOAuthBundle::layout.html.twig", "HWIOAuthBundle:Connect:registration_success.html.twig", 1);
        $this->blocks = array(
            'hwi_oauth_content' => array($this, 'block_hwi_oauth_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "HWIOAuthBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_35b32bb7172e64f34baf35bd7bc9bc5597cbaee32fbe689bedb88906d539308e = $this->env->getExtension("native_profiler");
        $__internal_35b32bb7172e64f34baf35bd7bc9bc5597cbaee32fbe689bedb88906d539308e->enter($__internal_35b32bb7172e64f34baf35bd7bc9bc5597cbaee32fbe689bedb88906d539308e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HWIOAuthBundle:Connect:registration_success.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_35b32bb7172e64f34baf35bd7bc9bc5597cbaee32fbe689bedb88906d539308e->leave($__internal_35b32bb7172e64f34baf35bd7bc9bc5597cbaee32fbe689bedb88906d539308e_prof);

    }

    // line 3
    public function block_hwi_oauth_content($context, array $blocks = array())
    {
        $__internal_35870c2fd033d887d22d01415e9ef9b08ec32bdfce620c6c9d1c1326c1f30f4a = $this->env->getExtension("native_profiler");
        $__internal_35870c2fd033d887d22d01415e9ef9b08ec32bdfce620c6c9d1c1326c1f30f4a->enter($__internal_35870c2fd033d887d22d01415e9ef9b08ec32bdfce620c6c9d1c1326c1f30f4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hwi_oauth_content"));

        // line 4
        echo "    <h3>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("header.registration_success", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "HWIOAuthBundle"), "html", null, true);
        echo "</h3>
";
        
        $__internal_35870c2fd033d887d22d01415e9ef9b08ec32bdfce620c6c9d1c1326c1f30f4a->leave($__internal_35870c2fd033d887d22d01415e9ef9b08ec32bdfce620c6c9d1c1326c1f30f4a_prof);

    }

    public function getTemplateName()
    {
        return "HWIOAuthBundle:Connect:registration_success.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'HWIOAuthBundle::layout.html.twig' %}*/
/* */
/* {% block hwi_oauth_content %}*/
/*     <h3>{{ 'header.registration_success' | trans({'%username%': app.user.username}, 'HWIOAuthBundle') }}</h3>*/
/* {% endblock hwi_oauth_content %}*/
/* */
