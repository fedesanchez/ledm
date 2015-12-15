<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_7865df61eeb074801c5a8f2290178a7795d32b42242deac1b0bb5b1f3518200b extends Twig_Template
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
        $__internal_2bbca8215c4919ac6888ac052fb5b455b90fcbce1d8720e477e86bdaf8f775af = $this->env->getExtension("native_profiler");
        $__internal_2bbca8215c4919ac6888ac052fb5b455b90fcbce1d8720e477e86bdaf8f775af->enter($__internal_2bbca8215c4919ac6888ac052fb5b455b90fcbce1d8720e477e86bdaf8f775af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_2bbca8215c4919ac6888ac052fb5b455b90fcbce1d8720e477e86bdaf8f775af->leave($__internal_2bbca8215c4919ac6888ac052fb5b455b90fcbce1d8720e477e86bdaf8f775af_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
