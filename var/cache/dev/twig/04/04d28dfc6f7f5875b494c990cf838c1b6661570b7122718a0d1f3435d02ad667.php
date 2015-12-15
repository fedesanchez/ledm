<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_85d4fbbd3c3cc9ebf0c94feb292028a4d19e2e5eb0434bd4b107bc9bcaf758bd extends Twig_Template
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
        $__internal_38969f44a4291e46431963b05c1a1ad3e0d104b3a7a7aadaa978479b82bdb8c8 = $this->env->getExtension("native_profiler");
        $__internal_38969f44a4291e46431963b05c1a1ad3e0d104b3a7a7aadaa978479b82bdb8c8->enter($__internal_38969f44a4291e46431963b05c1a1ad3e0d104b3a7a7aadaa978479b82bdb8c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_38969f44a4291e46431963b05c1a1ad3e0d104b3a7a7aadaa978479b82bdb8c8->leave($__internal_38969f44a4291e46431963b05c1a1ad3e0d104b3a7a7aadaa978479b82bdb8c8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
