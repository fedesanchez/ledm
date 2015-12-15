<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_c5a35762ac667fd2d1f133e4fc73d859cfeffd0edaca623fbdef4e741a496981 extends Twig_Template
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
        $__internal_015c0d4f5bcd2d63b7afe9f5726cf18dd37e1a253f2866856f326fa1c2885f96 = $this->env->getExtension("native_profiler");
        $__internal_015c0d4f5bcd2d63b7afe9f5726cf18dd37e1a253f2866856f326fa1c2885f96->enter($__internal_015c0d4f5bcd2d63b7afe9f5726cf18dd37e1a253f2866856f326fa1c2885f96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_015c0d4f5bcd2d63b7afe9f5726cf18dd37e1a253f2866856f326fa1c2885f96->leave($__internal_015c0d4f5bcd2d63b7afe9f5726cf18dd37e1a253f2866856f326fa1c2885f96_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
