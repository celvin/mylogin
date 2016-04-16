<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_0037b5c23fa5aaeddc90749dc7cd0a2702eeecd9d9e1b329a168ae611b88c02c extends Twig_Template
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
        $__internal_95e33ba1fe8c8dbfcaaca6aa5ece45bdd136edb21e5dd81ab25f6a9366f0f1a0 = $this->env->getExtension("native_profiler");
        $__internal_95e33ba1fe8c8dbfcaaca6aa5ece45bdd136edb21e5dd81ab25f6a9366f0f1a0->enter($__internal_95e33ba1fe8c8dbfcaaca6aa5ece45bdd136edb21e5dd81ab25f6a9366f0f1a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_95e33ba1fe8c8dbfcaaca6aa5ece45bdd136edb21e5dd81ab25f6a9366f0f1a0->leave($__internal_95e33ba1fe8c8dbfcaaca6aa5ece45bdd136edb21e5dd81ab25f6a9366f0f1a0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
