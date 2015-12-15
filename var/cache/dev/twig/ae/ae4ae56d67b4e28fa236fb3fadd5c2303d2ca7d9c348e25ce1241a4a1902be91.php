<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_5c65f26261cab1f83b23e61c7d1c5a657b662eb5dab0bf27546c052fb92de92b extends Twig_Template
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
        $__internal_534b04f7adb62d17285722fb6690b21aa39a46aba842ea9617dadbd8593c1352 = $this->env->getExtension("native_profiler");
        $__internal_534b04f7adb62d17285722fb6690b21aa39a46aba842ea9617dadbd8593c1352->enter($__internal_534b04f7adb62d17285722fb6690b21aa39a46aba842ea9617dadbd8593c1352_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_534b04f7adb62d17285722fb6690b21aa39a46aba842ea9617dadbd8593c1352->leave($__internal_534b04f7adb62d17285722fb6690b21aa39a46aba842ea9617dadbd8593c1352_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
