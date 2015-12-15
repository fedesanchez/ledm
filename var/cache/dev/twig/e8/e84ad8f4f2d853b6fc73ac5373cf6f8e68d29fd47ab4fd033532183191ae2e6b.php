<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_1a492db6609a88444728c44d0194a6a1af3c8ed03f8ec80b0cf27b979286f84e extends Twig_Template
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
        $__internal_226cdf8980b693529a9bbb4d37d461562d73c075f4a42269d9256b9840cd51f1 = $this->env->getExtension("native_profiler");
        $__internal_226cdf8980b693529a9bbb4d37d461562d73c075f4a42269d9256b9840cd51f1->enter($__internal_226cdf8980b693529a9bbb4d37d461562d73c075f4a42269d9256b9840cd51f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_226cdf8980b693529a9bbb4d37d461562d73c075f4a42269d9256b9840cd51f1->leave($__internal_226cdf8980b693529a9bbb4d37d461562d73c075f4a42269d9256b9840cd51f1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
