<?php

/* base.html.twig */
class __TwigTemplate_88aec6a304b8e50f3c4f2844f5de5e92a999a0fdd5ac5713fe6c015920d33322 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_eb0983c261c3a5550db81b674a9679255efb3c975fe303c3374db9c574a2aa7c = $this->env->getExtension("native_profiler");
        $__internal_eb0983c261c3a5550db81b674a9679255efb3c975fe303c3374db9c574a2aa7c->enter($__internal_eb0983c261c3a5550db81b674a9679255efb3c975fe303c3374db9c574a2aa7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        
        <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("../bower_components/bootstrap/dist/css/bootstrap.min.css"), "html", null, true);
        echo "\" integrity=\"sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7\" crossorigin=\"anonymous\">

        <!-- Latest compiled and minified JavaScript -->
        <script src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("../bower_components/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\" crossorigin=\"anonymous\"></script>
        <script src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("../bower_components/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\" integrity=\"sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS\" crossorigin=\"anonymous\"></script>
        
        

    </head>
    <body>
        ";
        // line 19
        $this->displayBlock('body', $context, $blocks);
        // line 20
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 21
        echo "    </body>
</html>
";
        
        $__internal_eb0983c261c3a5550db81b674a9679255efb3c975fe303c3374db9c574a2aa7c->leave($__internal_eb0983c261c3a5550db81b674a9679255efb3c975fe303c3374db9c574a2aa7c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_874fbfcb88fd253094b257fb3eb1ddfac3e03acc6b41f62eb26abb4f7a946e27 = $this->env->getExtension("native_profiler");
        $__internal_874fbfcb88fd253094b257fb3eb1ddfac3e03acc6b41f62eb26abb4f7a946e27->enter($__internal_874fbfcb88fd253094b257fb3eb1ddfac3e03acc6b41f62eb26abb4f7a946e27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_874fbfcb88fd253094b257fb3eb1ddfac3e03acc6b41f62eb26abb4f7a946e27->leave($__internal_874fbfcb88fd253094b257fb3eb1ddfac3e03acc6b41f62eb26abb4f7a946e27_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_92f0012008c07bbade372e2b08cc974fef0164ef59148543ee8a18e857b7de08 = $this->env->getExtension("native_profiler");
        $__internal_92f0012008c07bbade372e2b08cc974fef0164ef59148543ee8a18e857b7de08->enter($__internal_92f0012008c07bbade372e2b08cc974fef0164ef59148543ee8a18e857b7de08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_92f0012008c07bbade372e2b08cc974fef0164ef59148543ee8a18e857b7de08->leave($__internal_92f0012008c07bbade372e2b08cc974fef0164ef59148543ee8a18e857b7de08_prof);

    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
        $__internal_784898fcca9faa19156aa7cdf3cae729c60a93fa2ba8b889cb2c7e8636f80d37 = $this->env->getExtension("native_profiler");
        $__internal_784898fcca9faa19156aa7cdf3cae729c60a93fa2ba8b889cb2c7e8636f80d37->enter($__internal_784898fcca9faa19156aa7cdf3cae729c60a93fa2ba8b889cb2c7e8636f80d37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_784898fcca9faa19156aa7cdf3cae729c60a93fa2ba8b889cb2c7e8636f80d37->leave($__internal_784898fcca9faa19156aa7cdf3cae729c60a93fa2ba8b889cb2c7e8636f80d37_prof);

    }

    // line 20
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_92d76d3a59c0fc50d3c2fce6d768245564e1ddd77d088a265b088e60918b92a1 = $this->env->getExtension("native_profiler");
        $__internal_92d76d3a59c0fc50d3c2fce6d768245564e1ddd77d088a265b088e60918b92a1->enter($__internal_92d76d3a59c0fc50d3c2fce6d768245564e1ddd77d088a265b088e60918b92a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_92d76d3a59c0fc50d3c2fce6d768245564e1ddd77d088a265b088e60918b92a1->leave($__internal_92d76d3a59c0fc50d3c2fce6d768245564e1ddd77d088a265b088e60918b92a1_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 20,  100 => 19,  89 => 6,  77 => 5,  68 => 21,  65 => 20,  63 => 19,  54 => 13,  50 => 12,  44 => 9,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*         */
/*         <link rel="stylesheet" href="{{ asset('../bower_components/bootstrap/dist/css/bootstrap.min.css') }}" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">*/
/* */
/*         <!-- Latest compiled and minified JavaScript -->*/
/*         <script src="{{ asset('../bower_components/jquery/dist/jquery.min.js') }}" crossorigin="anonymous"></script>*/
/*         <script src="{{ asset('../bower_components/bootstrap/dist/js/bootstrap.min.js') }}" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>*/
/*         */
/*         */
/* */
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
