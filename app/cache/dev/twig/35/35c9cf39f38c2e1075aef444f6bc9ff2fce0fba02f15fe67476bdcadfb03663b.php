<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_89dbd2e4b499ca966f7e4b110cccf4f07301d9c64f73870e5f20d50cb4f14893 extends Twig_Template
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
        $__internal_eafa8e6b9481b0dfedb51da8e5657dcdd8f5d7452d8aa10c747a8a4a8d280dc5 = $this->env->getExtension("native_profiler");
        $__internal_eafa8e6b9481b0dfedb51da8e5657dcdd8f5d7452d8aa10c747a8a4a8d280dc5->enter($__internal_eafa8e6b9481b0dfedb51da8e5657dcdd8f5d7452d8aa10c747a8a4a8d280dc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_eafa8e6b9481b0dfedb51da8e5657dcdd8f5d7452d8aa10c747a8a4a8d280dc5->leave($__internal_eafa8e6b9481b0dfedb51da8e5657dcdd8f5d7452d8aa10c747a8a4a8d280dc5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
