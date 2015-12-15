<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_d76580f032ebc8845f5f9d6e761d713274bc2aa80e5e5044b86f00a21ae4ef68 extends Twig_Template
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
        $__internal_39abb6a889ac8ff374e88096f0dc0778fc8a888b27ab71e875b23e86f5608c09 = $this->env->getExtension("native_profiler");
        $__internal_39abb6a889ac8ff374e88096f0dc0778fc8a888b27ab71e875b23e86f5608c09->enter($__internal_39abb6a889ac8ff374e88096f0dc0778fc8a888b27ab71e875b23e86f5608c09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_39abb6a889ac8ff374e88096f0dc0778fc8a888b27ab71e875b23e86f5608c09->leave($__internal_39abb6a889ac8ff374e88096f0dc0778fc8a888b27ab71e875b23e86f5608c09_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
