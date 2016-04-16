<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_2fd95c1722758ca838f8e72c5a54885b8f3e6fa6a349212c052312d2879cb2ed extends Twig_Template
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
        $__internal_18eca5cfde9c58c405dc4ba5523239a221cf1bb0dfb10019c944c06fce2eda6d = $this->env->getExtension("native_profiler");
        $__internal_18eca5cfde9c58c405dc4ba5523239a221cf1bb0dfb10019c944c06fce2eda6d->enter($__internal_18eca5cfde9c58c405dc4ba5523239a221cf1bb0dfb10019c944c06fce2eda6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_18eca5cfde9c58c405dc4ba5523239a221cf1bb0dfb10019c944c06fce2eda6d->leave($__internal_18eca5cfde9c58c405dc4ba5523239a221cf1bb0dfb10019c944c06fce2eda6d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo $view['form']->start($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* <?php echo $view['form']->end($form) ?>*/
/* */
