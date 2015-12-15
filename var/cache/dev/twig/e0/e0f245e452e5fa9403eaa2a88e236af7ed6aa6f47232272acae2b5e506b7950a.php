<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_8cfe2558806b7d719f30b9f8f09f277a97ebe6ce2b8d2af02313705d05c89537 extends Twig_Template
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
        $__internal_c9ab1e025306d4efb600f9d3ebeb31f97290398409347fdf9a24f0af989ef064 = $this->env->getExtension("native_profiler");
        $__internal_c9ab1e025306d4efb600f9d3ebeb31f97290398409347fdf9a24f0af989ef064->enter($__internal_c9ab1e025306d4efb600f9d3ebeb31f97290398409347fdf9a24f0af989ef064_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_c9ab1e025306d4efb600f9d3ebeb31f97290398409347fdf9a24f0af989ef064->leave($__internal_c9ab1e025306d4efb600f9d3ebeb31f97290398409347fdf9a24f0af989ef064_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
