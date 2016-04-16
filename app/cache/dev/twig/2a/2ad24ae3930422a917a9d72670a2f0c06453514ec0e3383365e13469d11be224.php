<?php

/* HWIOAuthBundle::layout.html.twig */
class __TwigTemplate_ed4d75a92b8183ade0bee4d504eac424b0e0d13acae90463a90ed02b2275b9c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'hwi_oauth_content' => array($this, 'block_hwi_oauth_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c2f42ad8485695a9ad9f18e4f5179aadcde2abe34ce6b6ca81deb849360ceb40 = $this->env->getExtension("native_profiler");
        $__internal_c2f42ad8485695a9ad9f18e4f5179aadcde2abe34ce6b6ca81deb849360ceb40->enter($__internal_c2f42ad8485695a9ad9f18e4f5179aadcde2abe34ce6b6ca81deb849360ceb40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HWIOAuthBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
    </head>
    <body>
        <div>
            ";
        // line 8
        $this->displayBlock('hwi_oauth_content', $context, $blocks);
        // line 10
        echo "        </div>
    </body>
</html>
";
        
        $__internal_c2f42ad8485695a9ad9f18e4f5179aadcde2abe34ce6b6ca81deb849360ceb40->leave($__internal_c2f42ad8485695a9ad9f18e4f5179aadcde2abe34ce6b6ca81deb849360ceb40_prof);

    }

    // line 8
    public function block_hwi_oauth_content($context, array $blocks = array())
    {
        $__internal_f35b0802ceccc66668c597925cd2b071eaed02e1df7b4a4d3b47cf51e37e2945 = $this->env->getExtension("native_profiler");
        $__internal_f35b0802ceccc66668c597925cd2b071eaed02e1df7b4a4d3b47cf51e37e2945->enter($__internal_f35b0802ceccc66668c597925cd2b071eaed02e1df7b4a4d3b47cf51e37e2945_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hwi_oauth_content"));

        // line 9
        echo "            ";
        
        $__internal_f35b0802ceccc66668c597925cd2b071eaed02e1df7b4a4d3b47cf51e37e2945->leave($__internal_f35b0802ceccc66668c597925cd2b071eaed02e1df7b4a4d3b47cf51e37e2945_prof);

    }

    public function getTemplateName()
    {
        return "HWIOAuthBundle::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  50 => 9,  44 => 8,  34 => 10,  32 => 8,  23 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*     </head>*/
/*     <body>*/
/*         <div>*/
/*             {% block hwi_oauth_content %}*/
/*             {% endblock hwi_oauth_content %}*/
/*         </div>*/
/*     </body>*/
/* </html>*/
/* */
