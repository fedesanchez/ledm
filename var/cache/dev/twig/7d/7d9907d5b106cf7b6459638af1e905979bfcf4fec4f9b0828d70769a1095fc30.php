<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_cbdbd5418b74b53bd6cbc9d227c0908902cd5a9b7ee48ecefc7ddf46dc5ad548 extends Twig_Template
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
        $__internal_bbfa2ae3f51eb4ca3d35c9116a698523d4b26e828ba4b17256e58ac0048d14fb = $this->env->getExtension("native_profiler");
        $__internal_bbfa2ae3f51eb4ca3d35c9116a698523d4b26e828ba4b17256e58ac0048d14fb->enter($__internal_bbfa2ae3f51eb4ca3d35c9116a698523d4b26e828ba4b17256e58ac0048d14fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_bbfa2ae3f51eb4ca3d35c9116a698523d4b26e828ba4b17256e58ac0048d14fb->leave($__internal_bbfa2ae3f51eb4ca3d35c9116a698523d4b26e828ba4b17256e58ac0048d14fb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
