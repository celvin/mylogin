<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_3a5649665855ce92a7295b0ffd8d837ffb7003d09052207bb0dcd1e04535bb8a extends Twig_Template
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
        $__internal_72fc0321b6442251145f2f0b3290794a1fb574c65ff10ab89329d88ca9b42de1 = $this->env->getExtension("native_profiler");
        $__internal_72fc0321b6442251145f2f0b3290794a1fb574c65ff10ab89329d88ca9b42de1->enter($__internal_72fc0321b6442251145f2f0b3290794a1fb574c65ff10ab89329d88ca9b42de1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_72fc0321b6442251145f2f0b3290794a1fb574c65ff10ab89329d88ca9b42de1->leave($__internal_72fc0321b6442251145f2f0b3290794a1fb574c65ff10ab89329d88ca9b42de1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
