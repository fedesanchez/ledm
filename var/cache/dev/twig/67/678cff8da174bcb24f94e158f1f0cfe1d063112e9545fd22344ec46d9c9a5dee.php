<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_19def7583271ffcdb32137f4c8d6a4be81b081e1c7d11ac5651375dc2b229e86 extends Twig_Template
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
        $__internal_d98dde47bc5ae305d5e2e5f6a749485ee408c46309efb08f90e0010acc820bf1 = $this->env->getExtension("native_profiler");
        $__internal_d98dde47bc5ae305d5e2e5f6a749485ee408c46309efb08f90e0010acc820bf1->enter($__internal_d98dde47bc5ae305d5e2e5f6a749485ee408c46309efb08f90e0010acc820bf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_d98dde47bc5ae305d5e2e5f6a749485ee408c46309efb08f90e0010acc820bf1->leave($__internal_d98dde47bc5ae305d5e2e5f6a749485ee408c46309efb08f90e0010acc820bf1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
