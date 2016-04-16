<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_f0bf137adf01fdd9facd12213c9b4a10db6d4b98e7895d870a5f54ef99374736 extends Twig_Template
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
        $__internal_629fb739dbc5549a1c7d5347ab1c0ae2c19a0fa971dca483afba9abe27e731ee = $this->env->getExtension("native_profiler");
        $__internal_629fb739dbc5549a1c7d5347ab1c0ae2c19a0fa971dca483afba9abe27e731ee->enter($__internal_629fb739dbc5549a1c7d5347ab1c0ae2c19a0fa971dca483afba9abe27e731ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_629fb739dbc5549a1c7d5347ab1c0ae2c19a0fa971dca483afba9abe27e731ee->leave($__internal_629fb739dbc5549a1c7d5347ab1c0ae2c19a0fa971dca483afba9abe27e731ee_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
