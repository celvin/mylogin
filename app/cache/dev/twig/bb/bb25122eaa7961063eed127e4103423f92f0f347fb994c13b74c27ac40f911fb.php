<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_2cd924164e0b69d71c5587fae1b9cd03757000e726607eb57761792706c02bd2 extends Twig_Template
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
        $__internal_662321c14c485cf0d36f56ad57bf92575816cac798738fc6faabb0f04b69a471 = $this->env->getExtension("native_profiler");
        $__internal_662321c14c485cf0d36f56ad57bf92575816cac798738fc6faabb0f04b69a471->enter($__internal_662321c14c485cf0d36f56ad57bf92575816cac798738fc6faabb0f04b69a471_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_662321c14c485cf0d36f56ad57bf92575816cac798738fc6faabb0f04b69a471->leave($__internal_662321c14c485cf0d36f56ad57bf92575816cac798738fc6faabb0f04b69a471_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
