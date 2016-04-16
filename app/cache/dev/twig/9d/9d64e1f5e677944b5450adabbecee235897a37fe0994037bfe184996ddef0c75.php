<?php

/* :default:index.html.twig */
class __TwigTemplate_2ca942cc270eafe7d64f9f7c3bf71e6e34a0eea5968113717b0cdb9addeae7b3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":default:index.html.twig", 1);
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
        $__internal_8655cd69a1b71e9779b15871cba2aa3739bde3872de2251c1b1afafece7527af = $this->env->getExtension("native_profiler");
        $__internal_8655cd69a1b71e9779b15871cba2aa3739bde3872de2251c1b1afafece7527af->enter($__internal_8655cd69a1b71e9779b15871cba2aa3739bde3872de2251c1b1afafece7527af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8655cd69a1b71e9779b15871cba2aa3739bde3872de2251c1b1afafece7527af->leave($__internal_8655cd69a1b71e9779b15871cba2aa3739bde3872de2251c1b1afafece7527af_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_8c76525de476b14aacb9eb437cf62fbfc3027916122ac1965bb7abb817614163 = $this->env->getExtension("native_profiler");
        $__internal_8c76525de476b14aacb9eb437cf62fbfc3027916122ac1965bb7abb817614163->enter($__internal_8c76525de476b14aacb9eb437cf62fbfc3027916122ac1965bb7abb817614163_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"container\">
        <div class=\"row\">
            <p></p>
            <!-- code start -->
            <div class=\"twPc-div\">
                <a class=\"twPc-bg twPc-block\" style=\"padding: 5px; color: white; font-size: 20px; text-transform: uppercase\">";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "</a>

                <div>
                    <div class=\"twPc-button\" style=\"color: white\">
                       
                        
                        <button class = \"btn btn-primary btn-lg\" data-toggle = \"modal\" data-target = \"#myModal\">
                            Edit
                        </button>
                        
                         <a class = \"btn btn-danger btn-lg\" href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\">Logout!</a>
                        
                    </div>

                    <a title=\"User X\" href=\"#\" class=\"twPc-avatarLink\">
                        <img alt=\"\" src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "getProfilePicture", array(), "method"), "html", null, true);
        echo "\" class=\"twPc-avatarImg\">
                    </a>

                    

                    <div class=\"twPc-divStats\">
                        <ul class=\"twPc-Arrange\">
                            <li class=\"twPc-ArrangeSizeFit\">
                                <a href=\"#\" title=\"\">
                                    <span class=\"twPc-StatLabel twPc-block\">Email</span>
                                    <span class=\"twPc-StatValue\">";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "email", array()), "html", null, true);
        echo "</span>
                                </a>
                            </li>
                            <li class=\"twPc-ArrangeSizeFit\">
                                <a href=\"#/name\" title=\"\">
                                    <span class=\"twPc-StatLabel twPc-block\">Full Name</span>
                                    <span class=\"twPc-StatValue\">";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "getFullName", array(), "method"), "html", null, true);
        echo "</span>
                                </a>
                            </li>
                            <li class=\"twPc-ArrangeSizeFit\">
                                <a href=\"#/phone\" title=\"\">
                                    <span class=\"twPc-StatLabel twPc-block\">Phone</span>
                                    <span class=\"twPc-StatValue\">";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "getPhoneNumber", array(), "method"), "html", null, true);
        echo "</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- code end -->
        </div>
    </div>
    
    
";
        // line 61
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("AppBundle:User:edit", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()), "cls" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "getFullyFilled", array(), "method"))));
        echo "        
";
        // line 63
        echo "    
    
    
    
    <div id=\"status\">
                
            </div>
    
    
    
    
    
    
     <style>
                .twPc-div {
                    background: #fff none repeat scroll 0 0;
                    border: 1px solid #e1e8ed;
                    border-radius: 6px;
                    height: 200px;
";
        // line 83
        echo "                }
                .twPc-bg {
                    background-image: url(\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/bac.jpg"), "html", null, true);
        echo "\");
                    background-position: 0 50%;
                    background-size: 100% auto;
                    border-bottom: 1px solid #e1e8ed;
                    border-radius: 4px 4px 0 0;
                    height: 95px;
                    width: 100%;
                }
                .twPc-block {
                    display: block !important;
                }
                .twPc-button {
                    margin: -35px -10px 0;
                    text-align: right;
                    width: 100%;
                }
                .twPc-avatarLink {
                    background-color: #fff;
                    border-radius: 6px;
                    display: inline-block !important;
                    float: left;
                    margin: -30px 5px 0 8px;
                    max-width: 100%;
                    padding: 1px;
                    vertical-align: bottom;
                }
                .twPc-avatarImg {
                    border: 2px solid #fff;
                    border-radius: 7px;
                    box-sizing: border-box;
                    color: #fff;
                    height: 72px;
                    width: 72px;
                }
                .twPc-divUser {
                    margin: 5px 0 0;
                }
                .twPc-divName {
                    font-size: 18px;
                    font-weight: 700;
                    line-height: 21px;
                }
                .twPc-divName a {
                    color: inherit !important;
                }
                .twPc-divStats {
                    margin-left: 11px;
                    padding: 10px 0;
                }
                .twPc-Arrange {
                    box-sizing: border-box;
                    display: table;
                    margin: 0;
                    min-width: 100%;
                    padding: 0;
                    table-layout: auto;
                }
                ul.twPc-Arrange {
                    list-style: outside none none;
                    margin: 0;
                    padding: 0;
                }
                .twPc-ArrangeSizeFit {
                    display: table-cell;
                    padding: 0;
                    vertical-align: top;
                }
                .twPc-ArrangeSizeFit a:hover {
                    text-decoration: none;
                }
                .twPc-StatValue {
                    display: block;
                    font-size: 18px;
                    font-weight: 500;
                    transition: color 0.15s ease-in-out 0s;
                }
                .twPc-StatLabel {
                    color: #8899a6;
                    font-size: 10px;
                    letter-spacing: 0.02em;
                    overflow: hidden;
                    text-transform: uppercase;
                    transition: color 0.15s ease-in-out 0s;
                }
            </style>
                
";
        
        $__internal_8c76525de476b14aacb9eb437cf62fbfc3027916122ac1965bb7abb817614163->leave($__internal_8c76525de476b14aacb9eb437cf62fbfc3027916122ac1965bb7abb817614163_prof);

    }

    public function getTemplateName()
    {
        return ":default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 85,  140 => 83,  119 => 63,  114 => 61,  99 => 48,  90 => 42,  81 => 36,  68 => 26,  60 => 21,  47 => 11,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/*    {#                        <img src="https://graph.facebook.com/{{app.user.getFacebookID()}}/picture?width=260&height=260">#}*/
/* */
/* {% block body %}*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <p></p>*/
/*             <!-- code start -->*/
/*             <div class="twPc-div">*/
/*                 <a class="twPc-bg twPc-block" style="padding: 5px; color: white; font-size: 20px; text-transform: uppercase">{{app.user.username}}</a>*/
/* */
/*                 <div>*/
/*                     <div class="twPc-button" style="color: white">*/
/*                        */
/*                         */
/*                         <button class = "btn btn-primary btn-lg" data-toggle = "modal" data-target = "#myModal">*/
/*                             Edit*/
/*                         </button>*/
/*                         */
/*                          <a class = "btn btn-danger btn-lg" href="{{ path("fos_user_security_logout") }}">Logout!</a>*/
/*                         */
/*                     </div>*/
/* */
/*                     <a title="User X" href="#" class="twPc-avatarLink">*/
/*                         <img alt="" src="{{ app.user.getProfilePicture() }}" class="twPc-avatarImg">*/
/*                     </a>*/
/* */
/*                     */
/* */
/*                     <div class="twPc-divStats">*/
/*                         <ul class="twPc-Arrange">*/
/*                             <li class="twPc-ArrangeSizeFit">*/
/*                                 <a href="#" title="">*/
/*                                     <span class="twPc-StatLabel twPc-block">Email</span>*/
/*                                     <span class="twPc-StatValue">{{app.user.email}}</span>*/
/*                                 </a>*/
/*                             </li>*/
/*                             <li class="twPc-ArrangeSizeFit">*/
/*                                 <a href="#/name" title="">*/
/*                                     <span class="twPc-StatLabel twPc-block">Full Name</span>*/
/*                                     <span class="twPc-StatValue">{{ app.user.getFullName() }}</span>*/
/*                                 </a>*/
/*                             </li>*/
/*                             <li class="twPc-ArrangeSizeFit">*/
/*                                 <a href="#/phone" title="">*/
/*                                     <span class="twPc-StatLabel twPc-block">Phone</span>*/
/*                                     <span class="twPc-StatValue">{{ app.user.getPhoneNumber() }}</span>*/
/*                                 </a>*/
/*                             </li>*/
/*                         </ul>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <!-- code end -->*/
/*         </div>*/
/*     </div>*/
/*     */
/*     */
/* {#{% if app.user.getFullyFilled()==0 %}#}*/
/*     {{ render(controller('AppBundle:User:edit', { 'id': app.user.id, 'cls': app.user.getFullyFilled() })) }}        */
/* {#{% endif %}   #}*/
/*     */
/*     */
/*     */
/*     */
/*     <div id="status">*/
/*                 */
/*             </div>*/
/*     */
/*     */
/*     */
/*     */
/*     */
/*     */
/*      <style>*/
/*                 .twPc-div {*/
/*                     background: #fff none repeat scroll 0 0;*/
/*                     border: 1px solid #e1e8ed;*/
/*                     border-radius: 6px;*/
/*                     height: 200px;*/
/* {#                    max-width: 340px; #}*/
/*                 }*/
/*                 .twPc-bg {*/
/*                     background-image: url("{{ asset('img/bac.jpg')}}");*/
/*                     background-position: 0 50%;*/
/*                     background-size: 100% auto;*/
/*                     border-bottom: 1px solid #e1e8ed;*/
/*                     border-radius: 4px 4px 0 0;*/
/*                     height: 95px;*/
/*                     width: 100%;*/
/*                 }*/
/*                 .twPc-block {*/
/*                     display: block !important;*/
/*                 }*/
/*                 .twPc-button {*/
/*                     margin: -35px -10px 0;*/
/*                     text-align: right;*/
/*                     width: 100%;*/
/*                 }*/
/*                 .twPc-avatarLink {*/
/*                     background-color: #fff;*/
/*                     border-radius: 6px;*/
/*                     display: inline-block !important;*/
/*                     float: left;*/
/*                     margin: -30px 5px 0 8px;*/
/*                     max-width: 100%;*/
/*                     padding: 1px;*/
/*                     vertical-align: bottom;*/
/*                 }*/
/*                 .twPc-avatarImg {*/
/*                     border: 2px solid #fff;*/
/*                     border-radius: 7px;*/
/*                     box-sizing: border-box;*/
/*                     color: #fff;*/
/*                     height: 72px;*/
/*                     width: 72px;*/
/*                 }*/
/*                 .twPc-divUser {*/
/*                     margin: 5px 0 0;*/
/*                 }*/
/*                 .twPc-divName {*/
/*                     font-size: 18px;*/
/*                     font-weight: 700;*/
/*                     line-height: 21px;*/
/*                 }*/
/*                 .twPc-divName a {*/
/*                     color: inherit !important;*/
/*                 }*/
/*                 .twPc-divStats {*/
/*                     margin-left: 11px;*/
/*                     padding: 10px 0;*/
/*                 }*/
/*                 .twPc-Arrange {*/
/*                     box-sizing: border-box;*/
/*                     display: table;*/
/*                     margin: 0;*/
/*                     min-width: 100%;*/
/*                     padding: 0;*/
/*                     table-layout: auto;*/
/*                 }*/
/*                 ul.twPc-Arrange {*/
/*                     list-style: outside none none;*/
/*                     margin: 0;*/
/*                     padding: 0;*/
/*                 }*/
/*                 .twPc-ArrangeSizeFit {*/
/*                     display: table-cell;*/
/*                     padding: 0;*/
/*                     vertical-align: top;*/
/*                 }*/
/*                 .twPc-ArrangeSizeFit a:hover {*/
/*                     text-decoration: none;*/
/*                 }*/
/*                 .twPc-StatValue {*/
/*                     display: block;*/
/*                     font-size: 18px;*/
/*                     font-weight: 500;*/
/*                     transition: color 0.15s ease-in-out 0s;*/
/*                 }*/
/*                 .twPc-StatLabel {*/
/*                     color: #8899a6;*/
/*                     font-size: 10px;*/
/*                     letter-spacing: 0.02em;*/
/*                     overflow: hidden;*/
/*                     text-transform: uppercase;*/
/*                     transition: color 0.15s ease-in-out 0s;*/
/*                 }*/
/*             </style>*/
/*                 */
/* {% endblock %}*/
/* */
