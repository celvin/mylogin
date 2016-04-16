<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_a11954298dbee4864b771c6e3a9bfac0ae7ad81a0843e442486a9801a882c3ba extends Twig_Template
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
        $__internal_839478f1a79492e84991cb2921cc1c52dfc6bf89a67eee4ece8ce8497a723bdc = $this->env->getExtension("native_profiler");
        $__internal_839478f1a79492e84991cb2921cc1c52dfc6bf89a67eee4ece8ce8497a723bdc->enter($__internal_839478f1a79492e84991cb2921cc1c52dfc6bf89a67eee4ece8ce8497a723bdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_839478f1a79492e84991cb2921cc1c52dfc6bf89a67eee4ece8ce8497a723bdc->leave($__internal_839478f1a79492e84991cb2921cc1c52dfc6bf89a67eee4ece8ce8497a723bdc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
