<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_e59f619db31b364af4aee2cd18a5279e9f50bf9471d1c3e6f8e07daac1e0f61c extends Twig_Template
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
        $__internal_baa7a8d29ad52fa5dc3cb8a35d85a81be91a8c7b06294b638b82c715b820a685 = $this->env->getExtension("native_profiler");
        $__internal_baa7a8d29ad52fa5dc3cb8a35d85a81be91a8c7b06294b638b82c715b820a685->enter($__internal_baa7a8d29ad52fa5dc3cb8a35d85a81be91a8c7b06294b638b82c715b820a685_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_baa7a8d29ad52fa5dc3cb8a35d85a81be91a8c7b06294b638b82c715b820a685->leave($__internal_baa7a8d29ad52fa5dc3cb8a35d85a81be91a8c7b06294b638b82c715b820a685_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
