<?php

/* HWIOAuthBundle:Connect:login.html.twig */
class __TwigTemplate_2d6e3f12a94e598912243da39ce39524c06c36530bf5a025d957d5565d5ed9cc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("HWIOAuthBundle::layout.html.twig", "HWIOAuthBundle:Connect:login.html.twig", 1);
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
        $__internal_7ba2b00a5365fba633e08c2d67f6852b1438db3b1445b4aa3a915130531f66f9 = $this->env->getExtension("native_profiler");
        $__internal_7ba2b00a5365fba633e08c2d67f6852b1438db3b1445b4aa3a915130531f66f9->enter($__internal_7ba2b00a5365fba633e08c2d67f6852b1438db3b1445b4aa3a915130531f66f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HWIOAuthBundle:Connect:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7ba2b00a5365fba633e08c2d67f6852b1438db3b1445b4aa3a915130531f66f9->leave($__internal_7ba2b00a5365fba633e08c2d67f6852b1438db3b1445b4aa3a915130531f66f9_prof);

    }

    // line 3
    public function block_hwi_oauth_content($context, array $blocks = array())
    {
        $__internal_14cc81d8d2711a75e8c667f544320958c2834e54cf38ed2274609799517a5b0a = $this->env->getExtension("native_profiler");
        $__internal_14cc81d8d2711a75e8c667f544320958c2834e54cf38ed2274609799517a5b0a->enter($__internal_14cc81d8d2711a75e8c667f544320958c2834e54cf38ed2274609799517a5b0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hwi_oauth_content"));

        // line 4
        echo "    ";
        if ((array_key_exists("error", $context) && (isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")))) {
            // line 5
            echo "        <span>";
            echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "html", null, true);
            echo "</span>
    ";
        }
        // line 7
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('hwi_oauth')->getResourceOwners());
        foreach ($context['_seq'] as $context["_key"] => $context["owner"]) {
            // line 8
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('hwi_oauth')->getLoginUrl($context["owner"]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["owner"], array(), "HWIOAuthBundle"), "html", null, true);
            echo "</a> <br />
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['owner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_14cc81d8d2711a75e8c667f544320958c2834e54cf38ed2274609799517a5b0a->leave($__internal_14cc81d8d2711a75e8c667f544320958c2834e54cf38ed2274609799517a5b0a_prof);

    }

    public function getTemplateName()
    {
        return "HWIOAuthBundle:Connect:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 8,  49 => 7,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'HWIOAuthBundle::layout.html.twig' %}*/
/* */
/* {% block hwi_oauth_content %}*/
/*     {% if error is defined and error %}*/
/*         <span>{{ error }}</span>*/
/*     {% endif %}*/
/*     {% for owner in hwi_oauth_resource_owners() %}*/
/*     <a href="{{ hwi_oauth_login_url(owner) }}">{{ owner | trans({}, 'HWIOAuthBundle') }}</a> <br />*/
/*     {% endfor %}*/
/* {% endblock hwi_oauth_content %}*/
/* */
