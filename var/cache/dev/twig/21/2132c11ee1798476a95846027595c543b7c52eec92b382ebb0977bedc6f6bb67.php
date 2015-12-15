<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_5f1cd6d5f419aca66521d171e16ee7302321c8e1a84ffc66e29c1149e49a9c31 extends Twig_Template
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
        $__internal_9098f5df770148f00a3e6544193014b14382a915097e0d0a0235ea9f3fc8d67e = $this->env->getExtension("native_profiler");
        $__internal_9098f5df770148f00a3e6544193014b14382a915097e0d0a0235ea9f3fc8d67e->enter($__internal_9098f5df770148f00a3e6544193014b14382a915097e0d0a0235ea9f3fc8d67e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_9098f5df770148f00a3e6544193014b14382a915097e0d0a0235ea9f3fc8d67e->leave($__internal_9098f5df770148f00a3e6544193014b14382a915097e0d0a0235ea9f3fc8d67e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
