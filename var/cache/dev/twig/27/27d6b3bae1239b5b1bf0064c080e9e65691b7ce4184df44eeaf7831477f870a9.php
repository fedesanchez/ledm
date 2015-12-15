<?php

/* base.html.twig */
class __TwigTemplate_0d176e0bf54fd2391ae993f1555a3e9be2dec2d44227205acb94dbf134a7ac2c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4cd6afd6fe282772f908e49c6deb506341ce5ad52773eb7799a0295720b058ec = $this->env->getExtension("native_profiler");
        $__internal_4cd6afd6fe282772f908e49c6deb506341ce5ad52773eb7799a0295720b058ec->enter($__internal_4cd6afd6fe282772f908e49c6deb506341ce5ad52773eb7799a0295720b058ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_4cd6afd6fe282772f908e49c6deb506341ce5ad52773eb7799a0295720b058ec->leave($__internal_4cd6afd6fe282772f908e49c6deb506341ce5ad52773eb7799a0295720b058ec_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_64299c4344010a2a100ab2857627eeca4b63f210a0b865cbb2c2a0d9a9f24ce7 = $this->env->getExtension("native_profiler");
        $__internal_64299c4344010a2a100ab2857627eeca4b63f210a0b865cbb2c2a0d9a9f24ce7->enter($__internal_64299c4344010a2a100ab2857627eeca4b63f210a0b865cbb2c2a0d9a9f24ce7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_64299c4344010a2a100ab2857627eeca4b63f210a0b865cbb2c2a0d9a9f24ce7->leave($__internal_64299c4344010a2a100ab2857627eeca4b63f210a0b865cbb2c2a0d9a9f24ce7_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8cb6e33bf2bc8ab1dc472da93cc87ddcc2bb50d3dc8936fd70470e13c0bec3a0 = $this->env->getExtension("native_profiler");
        $__internal_8cb6e33bf2bc8ab1dc472da93cc87ddcc2bb50d3dc8936fd70470e13c0bec3a0->enter($__internal_8cb6e33bf2bc8ab1dc472da93cc87ddcc2bb50d3dc8936fd70470e13c0bec3a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_8cb6e33bf2bc8ab1dc472da93cc87ddcc2bb50d3dc8936fd70470e13c0bec3a0->leave($__internal_8cb6e33bf2bc8ab1dc472da93cc87ddcc2bb50d3dc8936fd70470e13c0bec3a0_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_3760b59156e0bc9a7aff130d1ebc5623a84e099bb9473f9075820b543e44d272 = $this->env->getExtension("native_profiler");
        $__internal_3760b59156e0bc9a7aff130d1ebc5623a84e099bb9473f9075820b543e44d272->enter($__internal_3760b59156e0bc9a7aff130d1ebc5623a84e099bb9473f9075820b543e44d272_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_3760b59156e0bc9a7aff130d1ebc5623a84e099bb9473f9075820b543e44d272->leave($__internal_3760b59156e0bc9a7aff130d1ebc5623a84e099bb9473f9075820b543e44d272_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_06e98fc694d784f7c3dca1f3dd62793905285aa0b4e7e17c65b8b29d8d684cca = $this->env->getExtension("native_profiler");
        $__internal_06e98fc694d784f7c3dca1f3dd62793905285aa0b4e7e17c65b8b29d8d684cca->enter($__internal_06e98fc694d784f7c3dca1f3dd62793905285aa0b4e7e17c65b8b29d8d684cca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_06e98fc694d784f7c3dca1f3dd62793905285aa0b4e7e17c65b8b29d8d684cca->leave($__internal_06e98fc694d784f7c3dca1f3dd62793905285aa0b4e7e17c65b8b29d8d684cca_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
