<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_22e58c135c9bbd999a4fd0f46c21ef04e25c90b9870c249c64910fbb47f86225 extends Twig_Template
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
        $__internal_8ab36551741293464a8509f7373bd88664186d700cf8b7c815d2b2199fb59cfa = $this->env->getExtension("native_profiler");
        $__internal_8ab36551741293464a8509f7373bd88664186d700cf8b7c815d2b2199fb59cfa->enter($__internal_8ab36551741293464a8509f7373bd88664186d700cf8b7c815d2b2199fb59cfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_8ab36551741293464a8509f7373bd88664186d700cf8b7c815d2b2199fb59cfa->leave($__internal_8ab36551741293464a8509f7373bd88664186d700cf8b7c815d2b2199fb59cfa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
