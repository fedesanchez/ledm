<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_e91250cf2142fd491b5acf9d09455d0e1eb3b3c04914d3aebe4be63d2b3a4be2 extends Twig_Template
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
        $__internal_31b18113ad4fc86db3ae7847cd13645c23ab2e3a64fc32fcbbd3b5b0ec37a881 = $this->env->getExtension("native_profiler");
        $__internal_31b18113ad4fc86db3ae7847cd13645c23ab2e3a64fc32fcbbd3b5b0ec37a881->enter($__internal_31b18113ad4fc86db3ae7847cd13645c23ab2e3a64fc32fcbbd3b5b0ec37a881_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_31b18113ad4fc86db3ae7847cd13645c23ab2e3a64fc32fcbbd3b5b0ec37a881->leave($__internal_31b18113ad4fc86db3ae7847cd13645c23ab2e3a64fc32fcbbd3b5b0ec37a881_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
