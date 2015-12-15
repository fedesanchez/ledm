<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_9bc792de884e28e19a87c6a612589a73b57783428d12eba98150717640633603 extends Twig_Template
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
        $__internal_febe40056fed48113a30d645e3d6ee222d2534ffed154e1dfc9ddf2ae88f6760 = $this->env->getExtension("native_profiler");
        $__internal_febe40056fed48113a30d645e3d6ee222d2534ffed154e1dfc9ddf2ae88f6760->enter($__internal_febe40056fed48113a30d645e3d6ee222d2534ffed154e1dfc9ddf2ae88f6760_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_febe40056fed48113a30d645e3d6ee222d2534ffed154e1dfc9ddf2ae88f6760->leave($__internal_febe40056fed48113a30d645e3d6ee222d2534ffed154e1dfc9ddf2ae88f6760_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
