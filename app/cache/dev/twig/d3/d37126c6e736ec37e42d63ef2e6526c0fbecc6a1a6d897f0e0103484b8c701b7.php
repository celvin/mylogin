<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_6cf5e35d831ebf866d47a6fb2842e7c5854b195ff0b1c8dac24e889df59edb55 extends Twig_Template
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
        $__internal_73b939183e26e88b41d27692428b7af999eafc7dc83518fb8b28d8a71d1d3256 = $this->env->getExtension("native_profiler");
        $__internal_73b939183e26e88b41d27692428b7af999eafc7dc83518fb8b28d8a71d1d3256->enter($__internal_73b939183e26e88b41d27692428b7af999eafc7dc83518fb8b28d8a71d1d3256_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_73b939183e26e88b41d27692428b7af999eafc7dc83518fb8b28d8a71d1d3256->leave($__internal_73b939183e26e88b41d27692428b7af999eafc7dc83518fb8b28d8a71d1d3256_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
