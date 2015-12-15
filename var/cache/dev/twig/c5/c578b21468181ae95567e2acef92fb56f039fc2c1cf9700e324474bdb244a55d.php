<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_8249c0d86c6c93cc3d4784535f1f88ebd441ba3dfa7b3769257ff9cd7603212b extends Twig_Template
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
        $__internal_1718bff9531b331573ec3f5454153bfc8d1f8051673b776dd278cb6425dc5456 = $this->env->getExtension("native_profiler");
        $__internal_1718bff9531b331573ec3f5454153bfc8d1f8051673b776dd278cb6425dc5456->enter($__internal_1718bff9531b331573ec3f5454153bfc8d1f8051673b776dd278cb6425dc5456_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_1718bff9531b331573ec3f5454153bfc8d1f8051673b776dd278cb6425dc5456->leave($__internal_1718bff9531b331573ec3f5454153bfc8d1f8051673b776dd278cb6425dc5456_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
