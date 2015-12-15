<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_5a6e9342af3de60c9bc443e2d4d379b19a4a0d4bc95e8adc602fff23ff404346 extends Twig_Template
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
        $__internal_aa8321bb710cf437c36880074289ca408f3ce010ee4c8a3ffd7b605264d45747 = $this->env->getExtension("native_profiler");
        $__internal_aa8321bb710cf437c36880074289ca408f3ce010ee4c8a3ffd7b605264d45747->enter($__internal_aa8321bb710cf437c36880074289ca408f3ce010ee4c8a3ffd7b605264d45747_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_aa8321bb710cf437c36880074289ca408f3ce010ee4c8a3ffd7b605264d45747->leave($__internal_aa8321bb710cf437c36880074289ca408f3ce010ee4c8a3ffd7b605264d45747_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
