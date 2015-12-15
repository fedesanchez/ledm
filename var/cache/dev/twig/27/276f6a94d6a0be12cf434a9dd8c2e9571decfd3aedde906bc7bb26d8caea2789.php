<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_2d027e00514b4be35cbd4a4dadbec60aab1eb187a8f802e9d9119154fa9b6382 extends Twig_Template
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
        $__internal_acbf982f6d4be77c2fb913e9c043bd4aaa6eccfb6bc805ad6db963b8dc9cf868 = $this->env->getExtension("native_profiler");
        $__internal_acbf982f6d4be77c2fb913e9c043bd4aaa6eccfb6bc805ad6db963b8dc9cf868->enter($__internal_acbf982f6d4be77c2fb913e9c043bd4aaa6eccfb6bc805ad6db963b8dc9cf868_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_acbf982f6d4be77c2fb913e9c043bd4aaa6eccfb6bc805ad6db963b8dc9cf868->leave($__internal_acbf982f6d4be77c2fb913e9c043bd4aaa6eccfb6bc805ad6db963b8dc9cf868_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
