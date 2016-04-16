<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_0c42e1d5346daa8a3766694cd2b6e9546024b11b63e21eff56d6822626b3515b extends Twig_Template
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
        $__internal_e5436e53eac880deb2558b2da452fc0faae3da13b5a5584fe441f6c40e822222 = $this->env->getExtension("native_profiler");
        $__internal_e5436e53eac880deb2558b2da452fc0faae3da13b5a5584fe441f6c40e822222->enter($__internal_e5436e53eac880deb2558b2da452fc0faae3da13b5a5584fe441f6c40e822222_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_e5436e53eac880deb2558b2da452fc0faae3da13b5a5584fe441f6c40e822222->leave($__internal_e5436e53eac880deb2558b2da452fc0faae3da13b5a5584fe441f6c40e822222_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
