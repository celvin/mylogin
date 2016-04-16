<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_773ece9573898f38a7ae6ad3edd257e11b96c35b0e2f16074db9399a426b6716 extends Twig_Template
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
        $__internal_fd3a255f4ef662006afc3a12fe2bd5b5022d183d01cb41c432d53038c3c71c62 = $this->env->getExtension("native_profiler");
        $__internal_fd3a255f4ef662006afc3a12fe2bd5b5022d183d01cb41c432d53038c3c71c62->enter($__internal_fd3a255f4ef662006afc3a12fe2bd5b5022d183d01cb41c432d53038c3c71c62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_fd3a255f4ef662006afc3a12fe2bd5b5022d183d01cb41c432d53038c3c71c62->leave($__internal_fd3a255f4ef662006afc3a12fe2bd5b5022d183d01cb41c432d53038c3c71c62_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
