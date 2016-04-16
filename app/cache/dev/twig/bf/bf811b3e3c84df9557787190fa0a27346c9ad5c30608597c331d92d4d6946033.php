<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_4f97c82d7a945f9c97eb6fbdcf0ef1168a6521a81c56da3dc6763cfe81658ad4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_a50fd65723bd5924a1e590e2554bcfd34890c51c3e926058ae8ec82dbd6d8560 = $this->env->getExtension("native_profiler");
        $__internal_a50fd65723bd5924a1e590e2554bcfd34890c51c3e926058ae8ec82dbd6d8560->enter($__internal_a50fd65723bd5924a1e590e2554bcfd34890c51c3e926058ae8ec82dbd6d8560_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a50fd65723bd5924a1e590e2554bcfd34890c51c3e926058ae8ec82dbd6d8560->leave($__internal_a50fd65723bd5924a1e590e2554bcfd34890c51c3e926058ae8ec82dbd6d8560_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d952e425f3ec207098c3adcdcbfc5bf889270f5f555f1a35289f27aa941aec14 = $this->env->getExtension("native_profiler");
        $__internal_d952e425f3ec207098c3adcdcbfc5bf889270f5f555f1a35289f27aa941aec14->enter($__internal_d952e425f3ec207098c3adcdcbfc5bf889270f5f555f1a35289f27aa941aec14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    
    

<div class=\"container\">
    
    ";
        // line 9
        $this->displayBlock('hwi_oauth_content', $context, $blocks);
        // line 76
        echo "

</div>
    
      
    
";
        
        $__internal_d952e425f3ec207098c3adcdcbfc5bf889270f5f555f1a35289f27aa941aec14->leave($__internal_d952e425f3ec207098c3adcdcbfc5bf889270f5f555f1a35289f27aa941aec14_prof);

    }

    // line 9
    public function block_hwi_oauth_content($context, array $blocks = array())
    {
        $__internal_54c06b44362008eee216d17b8c84567682450d2d14d6647a6a18c53cdf75240a = $this->env->getExtension("native_profiler");
        $__internal_54c06b44362008eee216d17b8c84567682450d2d14d6647a6a18c53cdf75240a->enter($__internal_54c06b44362008eee216d17b8c84567682450d2d14d6647a6a18c53cdf75240a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hwi_oauth_content"));

        // line 10
        echo "    <div class=\"omb_login\">
    \t<h3 class=\"omb_authTitle\">Welcome</h3>
        
            <div class=\"row omb_row-sm-offset-3 omb_socialButtons\">
            ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('hwi_oauth')->getResourceOwners());
        foreach ($context['_seq'] as $context["_key"] => $context["owner"]) {
            // line 15
            echo "            
                <div class=\"col-xs-6 col-sm-3\">
                    <a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('hwi_oauth')->getLoginUrl($context["owner"]), "html", null, true);
            echo "\" class=\"btn btn-lg btn-block omb_btn-facebook\">
                        <i class=\"fa fa-facebook visible-xs\"></i>
                        <span class=\"\">";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["owner"], array(), "HWIOAuthBundle"), "html", null, true);
            echo "</span>
                    </a>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['owner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "        
                <div class=\"col-xs-6 col-sm-3\">
                    <a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\" class=\"btn btn-lg btn-block omb_btn-twitter\">
                        <i class=\"fa fa-twitter visible-xs\"></i>
                        <span class=\"\">registration</span>
                    </a>
                </div>
            </div>

\t\t<div class=\"row omb_row-sm-offset-3 omb_loginOr\">
\t\t\t<div class=\"col-xs-12 col-sm-6\">
\t\t\t\t<hr class=\"omb_hrOr\">
\t\t\t\t<span class=\"omb_spanOr\">or</span>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"row omb_row-sm-offset-3\">
\t\t\t<div class=\"col-xs-12 col-sm-6\">\t
\t\t\t    <form class=\"omb_loginForm\" action=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" autocomplete=\"off\" method=\"POST\">
                                
                                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 43
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
                                
                                <div class=\"input-group\">
                                        <span class=\"input-group-addon\"><i class=\"fa fa-user\"></i></span>
                                        <input type=\"email\" pattern=\"[^ @]*@[^ @]*\" class=\"form-control\" id=\"username\" name=\"_username\" value=\"";
        // line 47
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" placeholder=\"email address\" />
                                </div>
                                <span class=\"help-block\"></span>

                                <div class=\"input-group\">
                                        <span class=\"input-group-addon\"><i class=\"fa fa-lock\"></i></span>
                                        <input type=\"password\" class=\"form-control\" id=\"password\" name=\"_password\" required=\"required\"  placeholder=\"Password\" />
                                </div>
                                <div class=\"input-group\">
                                    <label class=\"checkbox\">
                                        <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                                        Remember Me
                                    </label>
                                </div>
                                
                                        
                                    ";
        // line 63
        if ((array_key_exists("error", $context) && (isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")))) {
            // line 64
            echo "                                        <p>
                                            <span class=\"help-block\">";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message", array()), "html", null, true);
            echo "</span>
                                        </p>        
                                    ";
        }
        // line 67
        echo "                    
                    
                                    <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"Local Login\" class=\"btn btn-lg btn-primary btn-block\" />
                            </form>
\t\t\t</div>
    \t</div>
\t\t\t    \t
\t</div>
    ";
        
        $__internal_54c06b44362008eee216d17b8c84567682450d2d14d6647a6a18c53cdf75240a->leave($__internal_54c06b44362008eee216d17b8c84567682450d2d14d6647a6a18c53cdf75240a_prof);

    }

    // line 86
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d87b46a28a1c8b5bd081e7b179b94cd539394db710353d4a1ec171422851add9 = $this->env->getExtension("native_profiler");
        $__internal_d87b46a28a1c8b5bd081e7b179b94cd539394db710353d4a1ec171422851add9->enter($__internal_d87b46a28a1c8b5bd081e7b179b94cd539394db710353d4a1ec171422851add9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 87
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
        
        $__internal_d87b46a28a1c8b5bd081e7b179b94cd539394db710353d4a1ec171422851add9->leave($__internal_d87b46a28a1c8b5bd081e7b179b94cd539394db710353d4a1ec171422851add9_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 87,  179 => 86,  164 => 67,  158 => 65,  155 => 64,  153 => 63,  134 => 47,  127 => 43,  122 => 41,  103 => 25,  99 => 23,  89 => 19,  84 => 17,  80 => 15,  76 => 14,  70 => 10,  64 => 9,  51 => 76,  49 => 9,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     */
/*     */
/* */
/* <div class="container">*/
/*     */
/*     {% block hwi_oauth_content %}*/
/*     <div class="omb_login">*/
/*     	<h3 class="omb_authTitle">Welcome</h3>*/
/*         */
/*             <div class="row omb_row-sm-offset-3 omb_socialButtons">*/
/*             {% for owner in hwi_oauth_resource_owners() %}*/
/*             */
/*                 <div class="col-xs-6 col-sm-3">*/
/*                     <a href="{{ hwi_oauth_login_url(owner) }}" class="btn btn-lg btn-block omb_btn-facebook">*/
/*                         <i class="fa fa-facebook visible-xs"></i>*/
/*                         <span class="">{{ owner | trans({}, 'HWIOAuthBundle') }}</span>*/
/*                     </a>*/
/*                 </div>*/
/*             {% endfor %}*/
/*         */
/*                 <div class="col-xs-6 col-sm-3">*/
/*                     <a href="{{ path("fos_user_registration_register") }}" class="btn btn-lg btn-block omb_btn-twitter">*/
/*                         <i class="fa fa-twitter visible-xs"></i>*/
/*                         <span class="">registration</span>*/
/*                     </a>*/
/*                 </div>*/
/*             </div>*/
/* */
/* 		<div class="row omb_row-sm-offset-3 omb_loginOr">*/
/* 			<div class="col-xs-12 col-sm-6">*/
/* 				<hr class="omb_hrOr">*/
/* 				<span class="omb_spanOr">or</span>*/
/* 			</div>*/
/* 		</div>*/
/* */
/* 		<div class="row omb_row-sm-offset-3">*/
/* 			<div class="col-xs-12 col-sm-6">	*/
/* 			    <form class="omb_loginForm" action="{{ path("fos_user_security_check") }}" autocomplete="off" method="POST">*/
/*                                 */
/*                                 <input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/*                                 */
/*                                 <div class="input-group">*/
/*                                         <span class="input-group-addon"><i class="fa fa-user"></i></span>*/
/*                                         <input type="email" pattern="[^ @]*@[^ @]*" class="form-control" id="username" name="_username" value="{{ last_username }}" required="required" placeholder="email address" />*/
/*                                 </div>*/
/*                                 <span class="help-block"></span>*/
/* */
/*                                 <div class="input-group">*/
/*                                         <span class="input-group-addon"><i class="fa fa-lock"></i></span>*/
/*                                         <input type="password" class="form-control" id="password" name="_password" required="required"  placeholder="Password" />*/
/*                                 </div>*/
/*                                 <div class="input-group">*/
/*                                     <label class="checkbox">*/
/*                                         <input type="checkbox" id="remember_me" name="_remember_me" value="on" />*/
/*                                         Remember Me*/
/*                                     </label>*/
/*                                 </div>*/
/*                                 */
/*                                         */
/*                                     {% if error is defined and error %}*/
/*                                         <p>*/
/*                                             <span class="help-block">{{ error.message }}</span>*/
/*                                         </p>        */
/*                                     {% endif %}                    */
/*                     */
/*                                     <input type="submit" id="_submit" name="_submit" value="Local Login" class="btn btn-lg btn-primary btn-block" />*/
/*                             </form>*/
/* 			</div>*/
/*     	</div>*/
/* 			    	*/
/* 	</div>*/
/*     {% endblock hwi_oauth_content %}*/
/* */
/* */
/* </div>*/
/*     */
/*       */
/*     */
/* {% endblock %}*/
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
