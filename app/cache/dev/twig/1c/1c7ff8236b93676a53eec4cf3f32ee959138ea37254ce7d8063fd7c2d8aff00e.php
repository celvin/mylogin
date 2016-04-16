<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_02feaf006e6c55fcac5bc8029bed0a320be1b538055093443e5a229ca699564f extends Twig_Template
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
        $__internal_cae90281d9b27d2c5fa020c122b86c630ace08564ecba5c808df5d1946f6d78d = $this->env->getExtension("native_profiler");
        $__internal_cae90281d9b27d2c5fa020c122b86c630ace08564ecba5c808df5d1946f6d78d->enter($__internal_cae90281d9b27d2c5fa020c122b86c630ace08564ecba5c808df5d1946f6d78d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_cae90281d9b27d2c5fa020c122b86c630ace08564ecba5c808df5d1946f6d78d->leave($__internal_cae90281d9b27d2c5fa020c122b86c630ace08564ecba5c808df5d1946f6d78d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
