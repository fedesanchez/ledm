<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_f533a9f444b6760799c45fb84c70285839c934c62f37463d966719b1513c93f7 extends Twig_Template
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
        $__internal_3cdb3881926d4ecd48d804fdf69f16690ae38467b89fd9d0508736a53562fefc = $this->env->getExtension("native_profiler");
        $__internal_3cdb3881926d4ecd48d804fdf69f16690ae38467b89fd9d0508736a53562fefc->enter($__internal_3cdb3881926d4ecd48d804fdf69f16690ae38467b89fd9d0508736a53562fefc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_3cdb3881926d4ecd48d804fdf69f16690ae38467b89fd9d0508736a53562fefc->leave($__internal_3cdb3881926d4ecd48d804fdf69f16690ae38467b89fd9d0508736a53562fefc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
