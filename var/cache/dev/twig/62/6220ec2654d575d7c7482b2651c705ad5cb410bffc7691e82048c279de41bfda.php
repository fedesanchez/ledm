<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_188a8cce486f005845afa9a5550eaaa24670b945a21c4c973a7c2685e7bc4b60 extends Twig_Template
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
        $__internal_fa532aac6907485ec291e03d5a99144aaa4dfec364516108ab37ac4f68eb3098 = $this->env->getExtension("native_profiler");
        $__internal_fa532aac6907485ec291e03d5a99144aaa4dfec364516108ab37ac4f68eb3098->enter($__internal_fa532aac6907485ec291e03d5a99144aaa4dfec364516108ab37ac4f68eb3098_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_fa532aac6907485ec291e03d5a99144aaa4dfec364516108ab37ac4f68eb3098->leave($__internal_fa532aac6907485ec291e03d5a99144aaa4dfec364516108ab37ac4f68eb3098_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
