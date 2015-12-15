<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_262bc9096e94faecebff3c20258ef0b48dcda267bcdaf148fae39d23a0ba40e3 extends Twig_Template
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
        $__internal_843cd7d0f7dfefef633b0bea12b6bb61afcab1667a93c4ce7100a4a1949c6ed0 = $this->env->getExtension("native_profiler");
        $__internal_843cd7d0f7dfefef633b0bea12b6bb61afcab1667a93c4ce7100a4a1949c6ed0->enter($__internal_843cd7d0f7dfefef633b0bea12b6bb61afcab1667a93c4ce7100a4a1949c6ed0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_843cd7d0f7dfefef633b0bea12b6bb61afcab1667a93c4ce7100a4a1949c6ed0->leave($__internal_843cd7d0f7dfefef633b0bea12b6bb61afcab1667a93c4ce7100a4a1949c6ed0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
