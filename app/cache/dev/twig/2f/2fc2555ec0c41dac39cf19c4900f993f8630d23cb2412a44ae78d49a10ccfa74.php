<?php

/* :user:edit.html.twig */
class __TwigTemplate_0e23e8eaea7cb61b66f0a5d5f8abcd09425319f21ddb8cb826504095c93b4586 extends Twig_Template
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
        $__internal_3636a1cddea85c8658b5bb8db0803679ce8624ba8285213a97ae4974faa9fe30 = $this->env->getExtension("native_profiler");
        $__internal_3636a1cddea85c8658b5bb8db0803679ce8624ba8285213a97ae4974faa9fe30->enter($__internal_3636a1cddea85c8658b5bb8db0803679ce8624ba8285213a97ae4974faa9fe30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:edit.html.twig"));

        // line 1
        echo "
<!-- Button trigger modal -->


<!-- Modal -->
<div class = \"modal fade\" id = \"myModal\" tabindex = \"-1\" role = \"dialog\" 
     aria-labelledby = \"myModalLabel\" aria-hidden = \"true\">

    <div class = \"modal-dialog\">
        <div class = \"modal-content\">

            <div class = \"modal-header\">
                ";
        // line 13
        if (((isset($context["cls"]) ? $context["cls"] : $this->getContext($context, "cls")) != 0)) {
            // line 14
            echo "                    ";
            $context["showWin"] = "false";
            // line 15
            echo "                <button type = \"button\" class = \"close\" data-dismiss = \"modal\" aria-hidden = \"true\">
                    ×
                </button>
                ";
        } else {
            // line 19
            echo "                    ";
            $context["showWin"] = "true";
            // line 20
            echo "                ";
        }
        // line 21
        echo "                
                
                <h4 class = \"modal-title\" id = \"myModalLabel\">
                    Please complete your information.
                </h4>
            </div>

            <div class = \"modal-body\">
                <div class=\"row omb_row-sm-offset-3\">
                    <div class=\"col-xs-12 col-sm-6\">
                        ";
        // line 31
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('routing')->getPath("userlocal_edit", array("id" => (isset($context["idLocal"]) ? $context["idLocal"] : $this->getContext($context, "idLocal")))), "attr" => array("class" => "fos_user_registration_register omb_loginForm")));
        echo "

";
        // line 34
        echo "                            
                            <div class=\"input-group\">
                                    <span class=\"input-group-addon\"><i class=\"fa fa-user\"></i> Full Name:</span>
                                    ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "fullName", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            </div>
                            <div class=\"input-group\">
                                    <span class=\"input-group-addon\"><i class=\"fa fa-user\"></i> Phone:</span>
                                    ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "phoneNumber", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            </div>
                            
                            ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'rest');
        echo "
                            
                            
                            <input type=\"submit\" value=\"Edit\" id=\"editUsr\"  style=\"display: none\" />

                        ";
        // line 49
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

                    </div>
                </div>
            </div>

            <div class = \"modal-footer\">
                ";
        // line 56
        if (((isset($context["cls"]) ? $context["cls"] : $this->getContext($context, "cls")) != 0)) {
            // line 57
            echo "                    <button type = \"button\" class = \"btn btn-default\" data-dismiss = \"modal\">
                        Close
                    </button>
                ";
        }
        // line 61
        echo "                
                <button type = \"button\" class = \"btn btn-primary\" id=\"usrSv\" onclick=\"\$('#editUsr').click();\">
                    Submit changes
                </button>
            </div>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->

</div><!-- /.modal -->

<script>
    \$(function () {
        \$('#myModal').modal({
            keyboard: false,
            backdrop: 'static',
            show: ";
        // line 77
        echo twig_escape_filter($this->env, (isset($context["showWin"]) ? $context["showWin"] : $this->getContext($context, "showWin")), "html", null, true);
        echo "
        });
    });
</script>


";
        
        $__internal_3636a1cddea85c8658b5bb8db0803679ce8624ba8285213a97ae4974faa9fe30->leave($__internal_3636a1cddea85c8658b5bb8db0803679ce8624ba8285213a97ae4974faa9fe30_prof);

    }

    public function getTemplateName()
    {
        return ":user:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 77,  114 => 61,  108 => 57,  106 => 56,  96 => 49,  88 => 44,  82 => 41,  75 => 37,  70 => 34,  65 => 31,  53 => 21,  50 => 20,  47 => 19,  41 => 15,  38 => 14,  36 => 13,  22 => 1,);
    }
}
/* */
/* <!-- Button trigger modal -->*/
/* */
/* */
/* <!-- Modal -->*/
/* <div class = "modal fade" id = "myModal" tabindex = "-1" role = "dialog" */
/*      aria-labelledby = "myModalLabel" aria-hidden = "true">*/
/* */
/*     <div class = "modal-dialog">*/
/*         <div class = "modal-content">*/
/* */
/*             <div class = "modal-header">*/
/*                 {% if cls != 0 %}*/
/*                     {%set showWin = 'false' %}*/
/*                 <button type = "button" class = "close" data-dismiss = "modal" aria-hidden = "true">*/
/*                     ×*/
/*                 </button>*/
/*                 {% else %}*/
/*                     {%set showWin = 'true' %}*/
/*                 {% endif %}*/
/*                 */
/*                 */
/*                 <h4 class = "modal-title" id = "myModalLabel">*/
/*                     Please complete your information.*/
/*                 </h4>*/
/*             </div>*/
/* */
/*             <div class = "modal-body">*/
/*                 <div class="row omb_row-sm-offset-3">*/
/*                     <div class="col-xs-12 col-sm-6">*/
/*                         {{ form_start(edit_form, {'method': 'post', 'action': path('userlocal_edit',{id:idLocal}), 'attr': {'class': 'fos_user_registration_register omb_loginForm'}}) }}*/
/* */
/* {#                            {{ form_widget(edit_form) }}#}*/
/*                             */
/*                             <div class="input-group">*/
/*                                     <span class="input-group-addon"><i class="fa fa-user"></i> Full Name:</span>*/
/*                                     {{ form_widget(edit_form.fullName, { 'attr': {'class': 'form-control'} }) }}*/
/*                             </div>*/
/*                             <div class="input-group">*/
/*                                     <span class="input-group-addon"><i class="fa fa-user"></i> Phone:</span>*/
/*                                     {{ form_widget(edit_form.phoneNumber, { 'attr': {'class': 'form-control'} }) }}*/
/*                             </div>*/
/*                             */
/*                             {{ form_rest(edit_form) }}*/
/*                             */
/*                             */
/*                             <input type="submit" value="Edit" id="editUsr"  style="display: none" />*/
/* */
/*                         {{ form_end(edit_form) }}*/
/* */
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <div class = "modal-footer">*/
/*                 {% if cls != 0 %}*/
/*                     <button type = "button" class = "btn btn-default" data-dismiss = "modal">*/
/*                         Close*/
/*                     </button>*/
/*                 {% endif %}*/
/*                 */
/*                 <button type = "button" class = "btn btn-primary" id="usrSv" onclick="$('#editUsr').click();">*/
/*                     Submit changes*/
/*                 </button>*/
/*             </div>*/
/* */
/*         </div><!-- /.modal-content -->*/
/*     </div><!-- /.modal-dialog -->*/
/* */
/* </div><!-- /.modal -->*/
/* */
/* <script>*/
/*     $(function () {*/
/*         $('#myModal').modal({*/
/*             keyboard: false,*/
/*             backdrop: 'static',*/
/*             show: {{showWin}}*/
/*         });*/
/*     });*/
/* </script>*/
/* */
/* */
/* */
