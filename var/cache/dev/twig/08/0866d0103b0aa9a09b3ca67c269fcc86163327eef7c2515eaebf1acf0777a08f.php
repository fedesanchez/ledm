<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_d6c68ee6708860f7974cd9fe58edcb1f6d71d60e61ac5976f2e191c594b990dd extends Twig_Template
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
        $__internal_1c3f745bab99562b88f7ea8213bbdee7f18268ccbb6c9e09ffef18e969d66fbc = $this->env->getExtension("native_profiler");
        $__internal_1c3f745bab99562b88f7ea8213bbdee7f18268ccbb6c9e09ffef18e969d66fbc->enter($__internal_1c3f745bab99562b88f7ea8213bbdee7f18268ccbb6c9e09ffef18e969d66fbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_1c3f745bab99562b88f7ea8213bbdee7f18268ccbb6c9e09ffef18e969d66fbc->leave($__internal_1c3f745bab99562b88f7ea8213bbdee7f18268ccbb6c9e09ffef18e969d66fbc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
