<?php

/* :user:new.html.twig */
class __TwigTemplate_e32969c19cc00214272f6d2c4ac5a6d2ff29a1e4e875bc02542aa567da64a84a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":user:new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_55d500600bace6e19b1efb5242ecf2d81dd339590a9dcd3a1f4ebea0827522e7 = $this->env->getExtension("native_profiler");
        $__internal_55d500600bace6e19b1efb5242ecf2d81dd339590a9dcd3a1f4ebea0827522e7->enter($__internal_55d500600bace6e19b1efb5242ecf2d81dd339590a9dcd3a1f4ebea0827522e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_55d500600bace6e19b1efb5242ecf2d81dd339590a9dcd3a1f4ebea0827522e7->leave($__internal_55d500600bace6e19b1efb5242ecf2d81dd339590a9dcd3a1f4ebea0827522e7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4aad259ee54b3ee70cfe20a1ede30a483ab45980cd5c27c40e379764740624b8 = $this->env->getExtension("native_profiler");
        $__internal_4aad259ee54b3ee70cfe20a1ede30a483ab45980cd5c27c40e379764740624b8->enter($__internal_4aad259ee54b3ee70cfe20a1ede30a483ab45980cd5c27c40e379764740624b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>User creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("userlocal_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_4aad259ee54b3ee70cfe20a1ede30a483ab45980cd5c27c40e379764740624b8->leave($__internal_4aad259ee54b3ee70cfe20a1ede30a483ab45980cd5c27c40e379764740624b8_prof);

    }

    public function getTemplateName()
    {
        return ":user:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>User creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('userlocal_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
