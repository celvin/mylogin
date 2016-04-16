<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_c8ae466117f85b78fd0c84ae82cc84ab012935fefd7fd0aa789ca9ae9ea0960b extends Twig_Template
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
        $__internal_568661234b276ebb80e9d1d5119642c97a17bda6dda338495e0b70bef31f3059 = $this->env->getExtension("native_profiler");
        $__internal_568661234b276ebb80e9d1d5119642c97a17bda6dda338495e0b70bef31f3059->enter($__internal_568661234b276ebb80e9d1d5119642c97a17bda6dda338495e0b70bef31f3059_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_568661234b276ebb80e9d1d5119642c97a17bda6dda338495e0b70bef31f3059->leave($__internal_568661234b276ebb80e9d1d5119642c97a17bda6dda338495e0b70bef31f3059_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
