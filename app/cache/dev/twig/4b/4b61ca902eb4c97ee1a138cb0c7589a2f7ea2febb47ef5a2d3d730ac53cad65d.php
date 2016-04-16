<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_154d28b96283a4c5b1a92ab9ee343051157baa360f067d4325c0495894ff08f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_13ef78702e55cc69ee2169c15bc8854be7f9748b1395c1df5a10e79bb1e4d7bc = $this->env->getExtension("native_profiler");
        $__internal_13ef78702e55cc69ee2169c15bc8854be7f9748b1395c1df5a10e79bb1e4d7bc->enter($__internal_13ef78702e55cc69ee2169c15bc8854be7f9748b1395c1df5a10e79bb1e4d7bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_13ef78702e55cc69ee2169c15bc8854be7f9748b1395c1df5a10e79bb1e4d7bc->leave($__internal_13ef78702e55cc69ee2169c15bc8854be7f9748b1395c1df5a10e79bb1e4d7bc_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_74907045605712ce1fba1d53425fcc8880b76e4861d1b4d92863254e9b4d54f1 = $this->env->getExtension("native_profiler");
        $__internal_74907045605712ce1fba1d53425fcc8880b76e4861d1b4d92863254e9b4d54f1->enter($__internal_74907045605712ce1fba1d53425fcc8880b76e4861d1b4d92863254e9b4d54f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_74907045605712ce1fba1d53425fcc8880b76e4861d1b4d92863254e9b4d54f1->leave($__internal_74907045605712ce1fba1d53425fcc8880b76e4861d1b4d92863254e9b4d54f1_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5776d91cc7088b66f6764d7045bf7c549f7c9ca43ee281eeb3f93b6e7fda96be = $this->env->getExtension("native_profiler");
        $__internal_5776d91cc7088b66f6764d7045bf7c549f7c9ca43ee281eeb3f93b6e7fda96be->enter($__internal_5776d91cc7088b66f6764d7045bf7c549f7c9ca43ee281eeb3f93b6e7fda96be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5776d91cc7088b66f6764d7045bf7c549f7c9ca43ee281eeb3f93b6e7fda96be->leave($__internal_5776d91cc7088b66f6764d7045bf7c549f7c9ca43ee281eeb3f93b6e7fda96be_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1f067e085b1c5057780502aa73d9134d7400796a082fc5123e62866943452ec7 = $this->env->getExtension("native_profiler");
        $__internal_1f067e085b1c5057780502aa73d9134d7400796a082fc5123e62866943452ec7->enter($__internal_1f067e085b1c5057780502aa73d9134d7400796a082fc5123e62866943452ec7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_1f067e085b1c5057780502aa73d9134d7400796a082fc5123e62866943452ec7->leave($__internal_1f067e085b1c5057780502aa73d9134d7400796a082fc5123e62866943452ec7_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
