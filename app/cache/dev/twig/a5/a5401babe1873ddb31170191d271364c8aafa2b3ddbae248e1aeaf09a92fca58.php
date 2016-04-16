<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_07f5f7d5fa7c193b9c481b1deb4c3f616f61b5e8d1c90125f24f07fdda4ad794 extends Twig_Template
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
        $__internal_b4636d8c85f02628eaf340c45c366ab300c7e9f30688cca518048238f7833aeb = $this->env->getExtension("native_profiler");
        $__internal_b4636d8c85f02628eaf340c45c366ab300c7e9f30688cca518048238f7833aeb->enter($__internal_b4636d8c85f02628eaf340c45c366ab300c7e9f30688cca518048238f7833aeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_b4636d8c85f02628eaf340c45c366ab300c7e9f30688cca518048238f7833aeb->leave($__internal_b4636d8c85f02628eaf340c45c366ab300c7e9f30688cca518048238f7833aeb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
