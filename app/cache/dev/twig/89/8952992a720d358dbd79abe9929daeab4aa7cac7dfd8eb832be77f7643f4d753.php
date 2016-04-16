<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_d9e23ae0b58f0fb88084bda9b5539aacc93419c4af23ce41d3fdc4c01b474470 extends Twig_Template
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
        $__internal_d62157af5c422e2990747306d327e985b11a695b694dc96a3b7f16918d8aa230 = $this->env->getExtension("native_profiler");
        $__internal_d62157af5c422e2990747306d327e985b11a695b694dc96a3b7f16918d8aa230->enter($__internal_d62157af5c422e2990747306d327e985b11a695b694dc96a3b7f16918d8aa230_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_d62157af5c422e2990747306d327e985b11a695b694dc96a3b7f16918d8aa230->leave($__internal_d62157af5c422e2990747306d327e985b11a695b694dc96a3b7f16918d8aa230_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
