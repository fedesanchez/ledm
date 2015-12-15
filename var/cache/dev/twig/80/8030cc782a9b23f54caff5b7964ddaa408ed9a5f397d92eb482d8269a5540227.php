<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_37d234e24f84bc83ac7c70eef801d5221f22fbdcbffc7447a4ae45a7a4cc3ca2 extends Twig_Template
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
        $__internal_d6ebfe66c30926c448510b3acb232b2eb22b8010f27e42335e5b2774026c4e67 = $this->env->getExtension("native_profiler");
        $__internal_d6ebfe66c30926c448510b3acb232b2eb22b8010f27e42335e5b2774026c4e67->enter($__internal_d6ebfe66c30926c448510b3acb232b2eb22b8010f27e42335e5b2774026c4e67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_d6ebfe66c30926c448510b3acb232b2eb22b8010f27e42335e5b2774026c4e67->leave($__internal_d6ebfe66c30926c448510b3acb232b2eb22b8010f27e42335e5b2774026c4e67_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
