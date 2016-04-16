<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_ce05212a4d29cc3f5bc85fab28ccef791f485c150f9e748e41a89fbbf92ddebe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f4dbf87e85b2960d272d6d0a7cc5245ee706c3d2e060e3f98ac1e9eb93948496 = $this->env->getExtension("native_profiler");
        $__internal_f4dbf87e85b2960d272d6d0a7cc5245ee706c3d2e060e3f98ac1e9eb93948496->enter($__internal_f4dbf87e85b2960d272d6d0a7cc5245ee706c3d2e060e3f98ac1e9eb93948496_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_f4dbf87e85b2960d272d6d0a7cc5245ee706c3d2e060e3f98ac1e9eb93948496->leave($__internal_f4dbf87e85b2960d272d6d0a7cc5245ee706c3d2e060e3f98ac1e9eb93948496_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_4783905a166ff13445d935f004a9c6b84952631b897ac84f05284b67f0fec0e3 = $this->env->getExtension("native_profiler");
        $__internal_4783905a166ff13445d935f004a9c6b84952631b897ac84f05284b67f0fec0e3->enter($__internal_4783905a166ff13445d935f004a9c6b84952631b897ac84f05284b67f0fec0e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_4783905a166ff13445d935f004a9c6b84952631b897ac84f05284b67f0fec0e3->leave($__internal_4783905a166ff13445d935f004a9c6b84952631b897ac84f05284b67f0fec0e3_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_e8c2dd69ccacd3240604d3bd7fe50675295d4eb24327bdb6caa40ad628e5dbd9 = $this->env->getExtension("native_profiler");
        $__internal_e8c2dd69ccacd3240604d3bd7fe50675295d4eb24327bdb6caa40ad628e5dbd9->enter($__internal_e8c2dd69ccacd3240604d3bd7fe50675295d4eb24327bdb6caa40ad628e5dbd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_e8c2dd69ccacd3240604d3bd7fe50675295d4eb24327bdb6caa40ad628e5dbd9->leave($__internal_e8c2dd69ccacd3240604d3bd7fe50675295d4eb24327bdb6caa40ad628e5dbd9_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_8e1e4bfa7fe4862b79846633cbc68601bf3dd4d8b542973e0671273ff8efb050 = $this->env->getExtension("native_profiler");
        $__internal_8e1e4bfa7fe4862b79846633cbc68601bf3dd4d8b542973e0671273ff8efb050->enter($__internal_8e1e4bfa7fe4862b79846633cbc68601bf3dd4d8b542973e0671273ff8efb050_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_8e1e4bfa7fe4862b79846633cbc68601bf3dd4d8b542973e0671273ff8efb050->leave($__internal_8e1e4bfa7fe4862b79846633cbc68601bf3dd4d8b542973e0671273ff8efb050_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
