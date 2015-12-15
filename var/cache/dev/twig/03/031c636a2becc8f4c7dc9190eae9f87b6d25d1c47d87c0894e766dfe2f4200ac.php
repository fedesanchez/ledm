<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_a15aa46ee2b61c16336bf21e10cadbf72f9775a3d36fa2818de06a75ac258f02 extends Twig_Template
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
        $__internal_1eda089e8d5a6cc3fc648a8685d7dc77c696672554ac85d43788d966e393e114 = $this->env->getExtension("native_profiler");
        $__internal_1eda089e8d5a6cc3fc648a8685d7dc77c696672554ac85d43788d966e393e114->enter($__internal_1eda089e8d5a6cc3fc648a8685d7dc77c696672554ac85d43788d966e393e114_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_1eda089e8d5a6cc3fc648a8685d7dc77c696672554ac85d43788d966e393e114->leave($__internal_1eda089e8d5a6cc3fc648a8685d7dc77c696672554ac85d43788d966e393e114_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
