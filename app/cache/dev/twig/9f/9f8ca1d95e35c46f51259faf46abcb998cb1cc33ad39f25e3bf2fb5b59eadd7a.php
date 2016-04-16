<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_07394750567f263ba0b53cb4f7e036e3c566d91447089925bbea612d426fca38 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'hwi_oauth_content' => array($this, 'block_hwi_oauth_content'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6b623aff68142a43efabb752c0b8e7a0a35ed6b5f3b4b05975dffbce2845ddb5 = $this->env->getExtension("native_profiler");
        $__internal_6b623aff68142a43efabb752c0b8e7a0a35ed6b5f3b4b05975dffbce2845ddb5->enter($__internal_6b623aff68142a43efabb752c0b8e7a0a35ed6b5f3b4b05975dffbce2845ddb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6b623aff68142a43efabb752c0b8e7a0a35ed6b5f3b4b05975dffbce2845ddb5->leave($__internal_6b623aff68142a43efabb752c0b8e7a0a35ed6b5f3b4b05975dffbce2845ddb5_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_cf01f952c28c14725aff1140a8340740611bab0d705b64ff16922d04f1b58ed4 = $this->env->getExtension("native_profiler");
        $__internal_cf01f952c28c14725aff1140a8340740611bab0d705b64ff16922d04f1b58ed4->enter($__internal_cf01f952c28c14725aff1140a8340740611bab0d705b64ff16922d04f1b58ed4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
<div class=\"container\">
    ";
        // line 7
        $this->displayBlock('hwi_oauth_content', $context, $blocks);
        // line 82
        echo "</div>
";
        
        $__internal_cf01f952c28c14725aff1140a8340740611bab0d705b64ff16922d04f1b58ed4->leave($__internal_cf01f952c28c14725aff1140a8340740611bab0d705b64ff16922d04f1b58ed4_prof);

    }

    // line 7
    public function block_hwi_oauth_content($context, array $blocks = array())
    {
        $__internal_8a002b678d9215a1a5769068c8011cc4ee6ee579b040f16b9fb614e00a692990 = $this->env->getExtension("native_profiler");
        $__internal_8a002b678d9215a1a5769068c8011cc4ee6ee579b040f16b9fb614e00a692990->enter($__internal_8a002b678d9215a1a5769068c8011cc4ee6ee579b040f16b9fb614e00a692990_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hwi_oauth_content"));

        // line 8
        echo "        <div class=\"omb_login\">
            <h3 class=\"omb_authTitle\">Registration form</h3>

            <div class=\"row omb_row-sm-offset-3 omb_socialButtons\">
                <div class=\"col-xs-6 col-sm-3\">
                    <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
        echo "\" style=\"color: blue\" class=\"\">
                        <i class=\"fa fa-twitter visible-xs\"></i>
                        <span class=\"\"><-- Go back</span>
                    </a>
                </div>
            </div><br>

        <div class=\"row omb_row-sm-offset-3\">
            <div class=\"col-xs-12 col-sm-6\">
                ";
        // line 22
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('routing')->getPath("fos_user_registration_register"), "attr" => array("class" => "fos_user_registration_register omb_loginForm")));
        echo "
";
        // line 24
        echo "
                    <div class=\"input-group\" style=\"display: none\">
                            ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>

                    <div class=\"input-group\">
                            <span class=\"input-group-addon\"><i class=\"fa fa-user\"></i> Full name:</span>
                            ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fullName", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>

                    <div class=\"input-group\">
                            <span class=\"input-group-addon\"><i class=\"fa fa-user\"></i> Phone Number:</span>
                            ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phoneNumber", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                    
                    <div class=\"input-group\">
                            <span class=\"input-group-addon\"><i class=\"fa fa-user\"></i> Email:</span>
                            ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control", "pattern" => "[^ @]*@[^ @]*")));
        echo "
                    </div>
                    
                    <div class=\"input-group\">
                            <span class=\"input-group-addon\"><i class=\"fa fa-user\"></i> Password:</span>
                            ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                    <div class=\"input-group\">
                            <span class=\"input-group-addon\"><i class=\"fa fa-user\"></i> Password confirmation:</span>
                            ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                    
                    

                    ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

                    <div>
                        <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" class=\"btn btn-lg btn-primary btn-block\" />
                    </div>
                ";
        // line 60
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

            </div>
        </div>
    </div>
                
                


    <script>

        \$(function () {

            \$('#fos_user_registration_form_email').on( \"focusout\",function (){
                \$(\"#fos_user_registration_form_username\").val(\$(this).val());
            });

        });
    </script>            
                
                
    ";
        
        $__internal_8a002b678d9215a1a5769068c8011cc4ee6ee579b040f16b9fb614e00a692990->leave($__internal_8a002b678d9215a1a5769068c8011cc4ee6ee579b040f16b9fb614e00a692990_prof);

    }

    // line 89
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9c7a0576149446072f6cc188550f9d0802b28aab0ab4f865250991e35c472552 = $this->env->getExtension("native_profiler");
        $__internal_9c7a0576149446072f6cc188550f9d0802b28aab0ab4f865250991e35c472552->enter($__internal_9c7a0576149446072f6cc188550f9d0802b28aab0ab4f865250991e35c472552_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 90
        echo "<style>

    /*
        Note: It is best to use a less version of this file ( see http://css2less.cc
        For the media queries use @screen-sm-min instead of 768px.
        For .omb_spanOr use @body-bg instead of white.
    */

    @media (min-width: 768px) {
        .omb_row-sm-offset-3 div:first-child[class*=\"col-\"] {
            margin-left: 25%;
        }
    }

    ";
        // line 107
        echo "    
    .omb_login .omb_authTitle {
        text-align: center;
        line-height: 300%;
    }

    .omb_login .omb_socialButtons a {
        color: white; // In yourUse @body-bg 
        opacity:0.9;
    }
    .omb_login .omb_socialButtons a:hover {
        color: white;
        opacity:1;    \t
    }
    .omb_login .omb_socialButtons .omb_btn-facebook {background: #3b5998;}
    .omb_login .omb_socialButtons .omb_btn-twitter {background: #00aced;}
    .omb_login .omb_socialButtons .omb_btn-google {background: #c32f10;}


    .omb_login .omb_loginOr {
        position: relative;
        font-size: 1.5em;
        color: #aaa;
        margin-top: 1em;
        margin-bottom: 1em;
        padding-top: 0.5em;
        padding-bottom: 0.5em;
    }
    .omb_login .omb_loginOr .omb_hrOr {
        background-color: #cdcdcd;
        height: 1px;
        margin-top: 0px !important;
        margin-bottom: 0px !important;
    }
    .omb_login .omb_loginOr .omb_spanOr {
        display: block;
        position: absolute;
        left: 50%;
        top: -0.6em;
        margin-left: -1.5em;
        background-color: white;
        width: 3em;
        text-align: center;
    }\t\t\t

    .omb_login .omb_loginForm .input-group.i {
        width: 2em;
    }
    .omb_login .omb_loginForm  .help-block {
        color: red;
    }


    @media (min-width: 768px) {
        .omb_login .omb_forgotPwd {
            text-align: right;
            margin-top:10px;
        }\t\t
    }
</style>
";
        
        $__internal_9c7a0576149446072f6cc188550f9d0802b28aab0ab4f865250991e35c472552->leave($__internal_9c7a0576149446072f6cc188550f9d0802b28aab0ab4f865250991e35c472552_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 107,  182 => 90,  176 => 89,  147 => 60,  142 => 58,  136 => 55,  128 => 50,  121 => 46,  113 => 41,  105 => 36,  97 => 31,  89 => 26,  85 => 24,  81 => 22,  69 => 13,  62 => 8,  56 => 7,  48 => 82,  46 => 7,  42 => 5,  36 => 4,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block body %}*/
/* */
/* <div class="container">*/
/*     {% block hwi_oauth_content %}*/
/*         <div class="omb_login">*/
/*             <h3 class="omb_authTitle">Registration form</h3>*/
/* */
/*             <div class="row omb_row-sm-offset-3 omb_socialButtons">*/
/*                 <div class="col-xs-6 col-sm-3">*/
/*                     <a href="{{ path("fos_user_security_login") }}" style="color: blue" class="">*/
/*                         <i class="fa fa-twitter visible-xs"></i>*/
/*                         <span class=""><-- Go back</span>*/
/*                     </a>*/
/*                 </div>*/
/*             </div><br>*/
/* */
/*         <div class="row omb_row-sm-offset-3">*/
/*             <div class="col-xs-12 col-sm-6">*/
/*                 {{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'fos_user_registration_register omb_loginForm'}}) }}*/
/* {#                    {{ form_widget(form) }}#}*/
/* */
/*                     <div class="input-group" style="display: none">*/
/*                             {{ form_widget(form.username, { 'attr': {'class': 'form-control'} }) }}*/
/*                     </div>*/
/* */
/*                     <div class="input-group">*/
/*                             <span class="input-group-addon"><i class="fa fa-user"></i> Full name:</span>*/
/*                             {{ form_widget(form.fullName, { 'attr': {'class': 'form-control'} }) }}*/
/*                     </div>*/
/* */
/*                     <div class="input-group">*/
/*                             <span class="input-group-addon"><i class="fa fa-user"></i> Phone Number:</span>*/
/*                             {{ form_widget(form.phoneNumber, { 'attr': {'class': 'form-control'} }) }}*/
/*                     </div>*/
/*                     */
/*                     <div class="input-group">*/
/*                             <span class="input-group-addon"><i class="fa fa-user"></i> Email:</span>*/
/*                             {{ form_widget(form.email, { 'attr': {'class': 'form-control', 'pattern':'[^ @]*@[^ @]*'} }) }}*/
/*                     </div>*/
/*                     */
/*                     <div class="input-group">*/
/*                             <span class="input-group-addon"><i class="fa fa-user"></i> Password:</span>*/
/*                             {{ form_widget(form.plainPassword.first, { 'attr': {'class': 'form-control'} }) }}*/
/*                     </div>*/
/*                     <div class="input-group">*/
/*                             <span class="input-group-addon"><i class="fa fa-user"></i> Password confirmation:</span>*/
/*                             {{ form_widget(form.plainPassword.second, { 'attr': {'class': 'form-control'} }) }}*/
/*                     </div>*/
/*                     */
/*                     */
/* */
/*                     {{ form_rest(form) }}*/
/* */
/*                     <div>*/
/*                         <input type="submit" id="_submit" name="_submit" value="{{ 'registration.submit'|trans }}" class="btn btn-lg btn-primary btn-block" />*/
/*                     </div>*/
/*                 {{ form_end(form) }}*/
/* */
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*                 */
/*                 */
/* */
/* */
/*     <script>*/
/* */
/*         $(function () {*/
/* */
/*             $('#fos_user_registration_form_email').on( "focusout",function (){*/
/*                 $("#fos_user_registration_form_username").val($(this).val());*/
/*             });*/
/* */
/*         });*/
/*     </script>            */
/*                 */
/*                 */
/*     {% endblock hwi_oauth_content %}*/
/* </div>*/
/* {% endblock %}*/
/* */
/* */
/* */
/* */
/* */
/* {% block stylesheets %}*/
/* <style>*/
/* */
/*     /**/
/*         Note: It is best to use a less version of this file ( see http://css2less.cc*/
/*         For the media queries use @screen-sm-min instead of 768px.*/
/*         For .omb_spanOr use @body-bg instead of white.*/
/*     *//* */
/* */
/*     @media (min-width: 768px) {*/
/*         .omb_row-sm-offset-3 div:first-child[class*="col-"] {*/
/*             margin-left: 25%;*/
/*         }*/
/*     }*/
/* */
/*     {##fos_user_registration_form > div:nth-child(2){*/
/*         display: none;*/
/*     }#}*/
/*     */
/*     .omb_login .omb_authTitle {*/
/*         text-align: center;*/
/*         line-height: 300%;*/
/*     }*/
/* */
/*     .omb_login .omb_socialButtons a {*/
/*         color: white; // In yourUse @body-bg */
/*         opacity:0.9;*/
/*     }*/
/*     .omb_login .omb_socialButtons a:hover {*/
/*         color: white;*/
/*         opacity:1;    	*/
/*     }*/
/*     .omb_login .omb_socialButtons .omb_btn-facebook {background: #3b5998;}*/
/*     .omb_login .omb_socialButtons .omb_btn-twitter {background: #00aced;}*/
/*     .omb_login .omb_socialButtons .omb_btn-google {background: #c32f10;}*/
/* */
/* */
/*     .omb_login .omb_loginOr {*/
/*         position: relative;*/
/*         font-size: 1.5em;*/
/*         color: #aaa;*/
/*         margin-top: 1em;*/
/*         margin-bottom: 1em;*/
/*         padding-top: 0.5em;*/
/*         padding-bottom: 0.5em;*/
/*     }*/
/*     .omb_login .omb_loginOr .omb_hrOr {*/
/*         background-color: #cdcdcd;*/
/*         height: 1px;*/
/*         margin-top: 0px !important;*/
/*         margin-bottom: 0px !important;*/
/*     }*/
/*     .omb_login .omb_loginOr .omb_spanOr {*/
/*         display: block;*/
/*         position: absolute;*/
/*         left: 50%;*/
/*         top: -0.6em;*/
/*         margin-left: -1.5em;*/
/*         background-color: white;*/
/*         width: 3em;*/
/*         text-align: center;*/
/*     }			*/
/* */
/*     .omb_login .omb_loginForm .input-group.i {*/
/*         width: 2em;*/
/*     }*/
/*     .omb_login .omb_loginForm  .help-block {*/
/*         color: red;*/
/*     }*/
/* */
/* */
/*     @media (min-width: 768px) {*/
/*         .omb_login .omb_forgotPwd {*/
/*             text-align: right;*/
/*             margin-top:10px;*/
/*         }		*/
/*     }*/
/* </style>*/
/* {% endblock %}*/
/* */
/* */
/* */
/* */
