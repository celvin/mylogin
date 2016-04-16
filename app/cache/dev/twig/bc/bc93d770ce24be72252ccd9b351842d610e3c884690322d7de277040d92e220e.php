<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_ce17e0974d19718ab884f850421f79f2171719568e7c1397292e35bfba974e64 extends Twig_Template
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
        $__internal_c67816b9667d4597c284d3e72c4e692d1b3a6e8cb1beca796bf203f0c6d64e69 = $this->env->getExtension("native_profiler");
        $__internal_c67816b9667d4597c284d3e72c4e692d1b3a6e8cb1beca796bf203f0c6d64e69->enter($__internal_c67816b9667d4597c284d3e72c4e692d1b3a6e8cb1beca796bf203f0c6d64e69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_c67816b9667d4597c284d3e72c4e692d1b3a6e8cb1beca796bf203f0c6d64e69->leave($__internal_c67816b9667d4597c284d3e72c4e692d1b3a6e8cb1beca796bf203f0c6d64e69_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
