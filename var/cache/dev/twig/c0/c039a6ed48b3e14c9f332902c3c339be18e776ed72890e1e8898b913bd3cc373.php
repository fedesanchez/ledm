<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_e04540d96109041ea39512ad640c8c2d48e3b02d6daabe948cb6cfe96b2abeb5 extends Twig_Template
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
        $__internal_0d93be8333fbdda3c8a8cd7d69be0b7015375db5a35d1f6c047591ec77df9a54 = $this->env->getExtension("native_profiler");
        $__internal_0d93be8333fbdda3c8a8cd7d69be0b7015375db5a35d1f6c047591ec77df9a54->enter($__internal_0d93be8333fbdda3c8a8cd7d69be0b7015375db5a35d1f6c047591ec77df9a54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_0d93be8333fbdda3c8a8cd7d69be0b7015375db5a35d1f6c047591ec77df9a54->leave($__internal_0d93be8333fbdda3c8a8cd7d69be0b7015375db5a35d1f6c047591ec77df9a54_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
