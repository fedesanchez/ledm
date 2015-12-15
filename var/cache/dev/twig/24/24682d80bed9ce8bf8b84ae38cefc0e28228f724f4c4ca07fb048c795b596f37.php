<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_87d86a0cf15d87effb2d1e0f75353fb09646c7028b133865bad71a5eb0c9170a extends Twig_Template
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
        $__internal_84f10869e81621dd091587aaecd727e0e1e66c0ca428f594a7371f01c8e7e026 = $this->env->getExtension("native_profiler");
        $__internal_84f10869e81621dd091587aaecd727e0e1e66c0ca428f594a7371f01c8e7e026->enter($__internal_84f10869e81621dd091587aaecd727e0e1e66c0ca428f594a7371f01c8e7e026_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_84f10869e81621dd091587aaecd727e0e1e66c0ca428f594a7371f01c8e7e026->leave($__internal_84f10869e81621dd091587aaecd727e0e1e66c0ca428f594a7371f01c8e7e026_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
