<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_0018efadd9312d8de8a339ed7306fc9f7e5494c80dcddd305e7d31911559edfe extends Twig_Template
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
        $__internal_c80e7fb976500e28458a70655480dd243e505340f9c0aec4e80761f69f08185f = $this->env->getExtension("native_profiler");
        $__internal_c80e7fb976500e28458a70655480dd243e505340f9c0aec4e80761f69f08185f->enter($__internal_c80e7fb976500e28458a70655480dd243e505340f9c0aec4e80761f69f08185f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_c80e7fb976500e28458a70655480dd243e505340f9c0aec4e80761f69f08185f->leave($__internal_c80e7fb976500e28458a70655480dd243e505340f9c0aec4e80761f69f08185f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
