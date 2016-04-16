<?php

/* HWIOAuthBundle:Connect:registration.html.twig */
class __TwigTemplate_46697025d14bcdba5eaaa50d4b50e96bbf8950e602615cf955f751de83b4cd0f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("HWIOAuthBundle::layout.html.twig", "HWIOAuthBundle:Connect:registration.html.twig", 1);
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
        $__internal_74866c02061104ec7caa7832e914b9c0efdc7f3968417e87099ac24cf09959a4 = $this->env->getExtension("native_profiler");
        $__internal_74866c02061104ec7caa7832e914b9c0efdc7f3968417e87099ac24cf09959a4->enter($__internal_74866c02061104ec7caa7832e914b9c0efdc7f3968417e87099ac24cf09959a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HWIOAuthBundle:Connect:registration.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_74866c02061104ec7caa7832e914b9c0efdc7f3968417e87099ac24cf09959a4->leave($__internal_74866c02061104ec7caa7832e914b9c0efdc7f3968417e87099ac24cf09959a4_prof);

    }

    // line 3
    public function block_hwi_oauth_content($context, array $blocks = array())
    {
        $__internal_8e8ab1f057bb566c5e1495bf0c7d4135a62a033f3e0d0b67065b6f372b09eb62 = $this->env->getExtension("native_profiler");
        $__internal_8e8ab1f057bb566c5e1495bf0c7d4135a62a033f3e0d0b67065b6f372b09eb62->enter($__internal_8e8ab1f057bb566c5e1495bf0c7d4135a62a033f3e0d0b67065b6f372b09eb62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hwi_oauth_content"));

        // line 4
        echo "    <h3>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("header.register", array("%name%" => $this->getAttribute((isset($context["userInformation"]) ? $context["userInformation"] : $this->getContext($context, "userInformation")), "realName", array())), "HWIOAuthBundle"), "html", null, true);
        echo "</h3>
    <div class=\"row\">
        <div class=\"span6\">
            ";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('routing')->getPath("hwi_oauth_connect_registration", array("key" => (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")))), "attr" => array("class" => "hwi_oauth_registration_register")));
        echo "
                ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                <div>
                    <button type=\"submit\" class=\"btn btn-primary\">";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("connect.registration.submit", array(), "HWIOAuthBundle"), "html", null, true);
        echo "</button>
                    <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("hwi_oauth_connect");
        echo "\" class=\"btn\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("connect.registration.cancel", array(), "HWIOAuthBundle"), "html", null, true);
        echo "</a>
                </div>
            ";
        // line 13
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
        </div>
        <div class=\"span6\">
            ";
        // line 16
        if ( !twig_test_empty($this->getAttribute((isset($context["userInformation"]) ? $context["userInformation"] : $this->getContext($context, "userInformation")), "profilePicture", array()))) {
            // line 17
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userInformation"]) ? $context["userInformation"] : $this->getContext($context, "userInformation")), "profilePicture", array()), "html", null, true);
            echo "\" />
            ";
        }
        // line 19
        echo "        </div>
    </div>

";
        
        $__internal_8e8ab1f057bb566c5e1495bf0c7d4135a62a033f3e0d0b67065b6f372b09eb62->leave($__internal_8e8ab1f057bb566c5e1495bf0c7d4135a62a033f3e0d0b67065b6f372b09eb62_prof);

    }

    public function getTemplateName()
    {
        return "HWIOAuthBundle:Connect:registration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 19,  75 => 17,  73 => 16,  67 => 13,  60 => 11,  56 => 10,  51 => 8,  47 => 7,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'HWIOAuthBundle::layout.html.twig' %}*/
/* */
/* {% block hwi_oauth_content %}*/
/*     <h3>{{ 'header.register' | trans({'%name%': userInformation.realName}, 'HWIOAuthBundle') }}</h3>*/
/*     <div class="row">*/
/*         <div class="span6">*/
/*             {{ form_start(form, {'action': path('hwi_oauth_connect_registration', {'key': key}), 'attr': {'class': 'hwi_oauth_registration_register'}}) }}*/
/*                 {{ form_widget(form) }}*/
/*                 <div>*/
/*                     <button type="submit" class="btn btn-primary">{{ 'connect.registration.submit'|trans({}, 'HWIOAuthBundle') }}</button>*/
/*                     <a href="{{ path('hwi_oauth_connect') }}" class="btn">{{ 'connect.registration.cancel' | trans({}, 'HWIOAuthBundle') }}</a>*/
/*                 </div>*/
/*             {{ form_end(form) }}*/
/*         </div>*/
/*         <div class="span6">*/
/*             {% if userInformation.profilePicture is not empty %}*/
/*                 <img src="{{ userInformation.profilePicture }}" />*/
/*             {% endif %}*/
/*         </div>*/
/*     </div>*/
/* */
/* {% endblock hwi_oauth_content %}*/
/* */
