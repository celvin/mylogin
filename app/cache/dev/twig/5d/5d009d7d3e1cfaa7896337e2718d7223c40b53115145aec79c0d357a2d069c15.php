<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_931f12de32d1589e3257a42a1896141e964714206dc0f74b0574fb44cbb2f879 extends Twig_Template
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
        $__internal_09adf9d436e2adf2ea39648a57993776c56c1bd90500fb25eb7c3b938caf9f46 = $this->env->getExtension("native_profiler");
        $__internal_09adf9d436e2adf2ea39648a57993776c56c1bd90500fb25eb7c3b938caf9f46->enter($__internal_09adf9d436e2adf2ea39648a57993776c56c1bd90500fb25eb7c3b938caf9f46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_09adf9d436e2adf2ea39648a57993776c56c1bd90500fb25eb7c3b938caf9f46->leave($__internal_09adf9d436e2adf2ea39648a57993776c56c1bd90500fb25eb7c3b938caf9f46_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 4,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="fos_user_group_show">*/
/*     <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>*/
/* </div>*/
/* */
