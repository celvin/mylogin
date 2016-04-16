<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_665a1da39a36bf5f07b2851260cf4070a6fe1c9c7ca0176a003d0567a31394e8 extends Twig_Template
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
        $__internal_18c6487a0a03fe0c9ba94e9539665281c4b18185b8daa674ee7a1a4cbaf3b186 = $this->env->getExtension("native_profiler");
        $__internal_18c6487a0a03fe0c9ba94e9539665281c4b18185b8daa674ee7a1a4cbaf3b186->enter($__internal_18c6487a0a03fe0c9ba94e9539665281c4b18185b8daa674ee7a1a4cbaf3b186_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_18c6487a0a03fe0c9ba94e9539665281c4b18185b8daa674ee7a1a4cbaf3b186->leave($__internal_18c6487a0a03fe0c9ba94e9539665281c4b18185b8daa674ee7a1a4cbaf3b186_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
