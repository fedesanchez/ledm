<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_9c7936ba0cd9f4e1dcf8076ca584a5bc62aba220fd833f7cd24cc13423f8e2aa extends Twig_Template
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
        $__internal_cf53b225f5191ef4a60347112f07510624846cc7f8473de977b7e6550e838245 = $this->env->getExtension("native_profiler");
        $__internal_cf53b225f5191ef4a60347112f07510624846cc7f8473de977b7e6550e838245->enter($__internal_cf53b225f5191ef4a60347112f07510624846cc7f8473de977b7e6550e838245_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_cf53b225f5191ef4a60347112f07510624846cc7f8473de977b7e6550e838245->leave($__internal_cf53b225f5191ef4a60347112f07510624846cc7f8473de977b7e6550e838245_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
