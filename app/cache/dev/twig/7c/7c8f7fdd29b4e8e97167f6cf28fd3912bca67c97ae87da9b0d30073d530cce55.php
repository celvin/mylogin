<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_810c46fb91cfcb923a68c806559988f096b081ce19ff22d7ecd8f157b63e4f13 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_4138f8979f45344f8c8aefd5c191a273f9baf1ceeb25fa48fd54f7da67ff3e3b = $this->env->getExtension("native_profiler");
        $__internal_4138f8979f45344f8c8aefd5c191a273f9baf1ceeb25fa48fd54f7da67ff3e3b->enter($__internal_4138f8979f45344f8c8aefd5c191a273f9baf1ceeb25fa48fd54f7da67ff3e3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4138f8979f45344f8c8aefd5c191a273f9baf1ceeb25fa48fd54f7da67ff3e3b->leave($__internal_4138f8979f45344f8c8aefd5c191a273f9baf1ceeb25fa48fd54f7da67ff3e3b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_66af901480ec28e6706629baa0b69c4373ee1783e47bdc349f5d1a0b1a91b3ff = $this->env->getExtension("native_profiler");
        $__internal_66af901480ec28e6706629baa0b69c4373ee1783e47bdc349f5d1a0b1a91b3ff->enter($__internal_66af901480ec28e6706629baa0b69c4373ee1783e47bdc349f5d1a0b1a91b3ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_66af901480ec28e6706629baa0b69c4373ee1783e47bdc349f5d1a0b1a91b3ff->leave($__internal_66af901480ec28e6706629baa0b69c4373ee1783e47bdc349f5d1a0b1a91b3ff_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_03090a44d60c3e3edf85cbc90271c76ee609adcc3dc4eca96032481274b7e1d7 = $this->env->getExtension("native_profiler");
        $__internal_03090a44d60c3e3edf85cbc90271c76ee609adcc3dc4eca96032481274b7e1d7->enter($__internal_03090a44d60c3e3edf85cbc90271c76ee609adcc3dc4eca96032481274b7e1d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_03090a44d60c3e3edf85cbc90271c76ee609adcc3dc4eca96032481274b7e1d7->leave($__internal_03090a44d60c3e3edf85cbc90271c76ee609adcc3dc4eca96032481274b7e1d7_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_f7598374ca63ed5330444610d2afaef600b91912e602bdb73d0e8e48d1ed6e2e = $this->env->getExtension("native_profiler");
        $__internal_f7598374ca63ed5330444610d2afaef600b91912e602bdb73d0e8e48d1ed6e2e->enter($__internal_f7598374ca63ed5330444610d2afaef600b91912e602bdb73d0e8e48d1ed6e2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_f7598374ca63ed5330444610d2afaef600b91912e602bdb73d0e8e48d1ed6e2e->leave($__internal_f7598374ca63ed5330444610d2afaef600b91912e602bdb73d0e8e48d1ed6e2e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
