<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_d0c57fe125da6d2ff25da10d8618580ca7deb19be1404402c5a7153138caaa08 extends Twig_Template
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
        $__internal_5c243fd738f63a28aa87e93f54d7c8f3ebcd07a1e2a8a754a9d010b4aeba36cb = $this->env->getExtension("native_profiler");
        $__internal_5c243fd738f63a28aa87e93f54d7c8f3ebcd07a1e2a8a754a9d010b4aeba36cb->enter($__internal_5c243fd738f63a28aa87e93f54d7c8f3ebcd07a1e2a8a754a9d010b4aeba36cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_5c243fd738f63a28aa87e93f54d7c8f3ebcd07a1e2a8a754a9d010b4aeba36cb->leave($__internal_5c243fd738f63a28aa87e93f54d7c8f3ebcd07a1e2a8a754a9d010b4aeba36cb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
