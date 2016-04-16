<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_e6d3cbd12c3464b962d8b6dd94f6914dfa9168861d72bb86fd138ae721e174df extends Twig_Template
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
        $__internal_d2d1c93c8324eb10c17ff657ca3f8e454fca37856aaee904391fa475e65d6dbb = $this->env->getExtension("native_profiler");
        $__internal_d2d1c93c8324eb10c17ff657ca3f8e454fca37856aaee904391fa475e65d6dbb->enter($__internal_d2d1c93c8324eb10c17ff657ca3f8e454fca37856aaee904391fa475e65d6dbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_d2d1c93c8324eb10c17ff657ca3f8e454fca37856aaee904391fa475e65d6dbb->leave($__internal_d2d1c93c8324eb10c17ff657ca3f8e454fca37856aaee904391fa475e65d6dbb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
