<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_0c457f6ba96b840a22f8fa7cfc803e0752765c9191bbd79d4fe140088db8fa4c extends Twig_Template
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
        $__internal_28ae880bc6d6f30276b3dfa9bb915fec550b1f630c6c38acb23e7ad919457046 = $this->env->getExtension("native_profiler");
        $__internal_28ae880bc6d6f30276b3dfa9bb915fec550b1f630c6c38acb23e7ad919457046->enter($__internal_28ae880bc6d6f30276b3dfa9bb915fec550b1f630c6c38acb23e7ad919457046_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_28ae880bc6d6f30276b3dfa9bb915fec550b1f630c6c38acb23e7ad919457046->leave($__internal_28ae880bc6d6f30276b3dfa9bb915fec550b1f630c6c38acb23e7ad919457046_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
