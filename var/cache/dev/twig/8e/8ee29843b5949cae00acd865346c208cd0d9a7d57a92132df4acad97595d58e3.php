<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_1e23c605437a5dd88e3796cc722da0d83758cd09aba61f546f7cd74d6156bd78 extends Twig_Template
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
        $__internal_c5aec8fb991ee02cde6ce8e9a8f1d7d2c4dfdd8dd24f3a504089888577d77197 = $this->env->getExtension("native_profiler");
        $__internal_c5aec8fb991ee02cde6ce8e9a8f1d7d2c4dfdd8dd24f3a504089888577d77197->enter($__internal_c5aec8fb991ee02cde6ce8e9a8f1d7d2c4dfdd8dd24f3a504089888577d77197_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_c5aec8fb991ee02cde6ce8e9a8f1d7d2c4dfdd8dd24f3a504089888577d77197->leave($__internal_c5aec8fb991ee02cde6ce8e9a8f1d7d2c4dfdd8dd24f3a504089888577d77197_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
