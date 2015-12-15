<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_8e59600a0de2b9d39791629ea16f4338cfe984a95acc0fe2c4d105df151642d4 extends Twig_Template
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
        $__internal_02ad345c6846449c8de4aa6364aa52b06bad18c5d5f0618ae2d25c5888f124d1 = $this->env->getExtension("native_profiler");
        $__internal_02ad345c6846449c8de4aa6364aa52b06bad18c5d5f0618ae2d25c5888f124d1->enter($__internal_02ad345c6846449c8de4aa6364aa52b06bad18c5d5f0618ae2d25c5888f124d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_02ad345c6846449c8de4aa6364aa52b06bad18c5d5f0618ae2d25c5888f124d1->leave($__internal_02ad345c6846449c8de4aa6364aa52b06bad18c5d5f0618ae2d25c5888f124d1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
