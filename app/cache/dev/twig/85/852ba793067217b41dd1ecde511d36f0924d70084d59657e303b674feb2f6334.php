<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_1fe211e56d015fa8f585484cc0dd0569d6af7f1801dae139803f880756a7673b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8540bf9a618a091e49cafc3a8ccfafef37858c53a27faab6843394eb64ce0091 = $this->env->getExtension("native_profiler");
        $__internal_8540bf9a618a091e49cafc3a8ccfafef37858c53a27faab6843394eb64ce0091->enter($__internal_8540bf9a618a091e49cafc3a8ccfafef37858c53a27faab6843394eb64ce0091_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8540bf9a618a091e49cafc3a8ccfafef37858c53a27faab6843394eb64ce0091->leave($__internal_8540bf9a618a091e49cafc3a8ccfafef37858c53a27faab6843394eb64ce0091_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d378ca335a8cfc44c83ee5f19a0e210a7192230abe30b51e67f5b04aad618adb = $this->env->getExtension("native_profiler");
        $__internal_d378ca335a8cfc44c83ee5f19a0e210a7192230abe30b51e67f5b04aad618adb->enter($__internal_d378ca335a8cfc44c83ee5f19a0e210a7192230abe30b51e67f5b04aad618adb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_d378ca335a8cfc44c83ee5f19a0e210a7192230abe30b51e67f5b04aad618adb->leave($__internal_d378ca335a8cfc44c83ee5f19a0e210a7192230abe30b51e67f5b04aad618adb_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_37d61ec3482b8d862229b0babb7960f5cdbffc7ce6a245ef7ea8d90b1e5afd76 = $this->env->getExtension("native_profiler");
        $__internal_37d61ec3482b8d862229b0babb7960f5cdbffc7ce6a245ef7ea8d90b1e5afd76->enter($__internal_37d61ec3482b8d862229b0babb7960f5cdbffc7ce6a245ef7ea8d90b1e5afd76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_37d61ec3482b8d862229b0babb7960f5cdbffc7ce6a245ef7ea8d90b1e5afd76->leave($__internal_37d61ec3482b8d862229b0babb7960f5cdbffc7ce6a245ef7ea8d90b1e5afd76_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
