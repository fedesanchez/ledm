<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_847849bac603fab4f2b4aff9aa5b15865a26719317c620e259cf19129d1960c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5ff9614fe90519b95ce911d5c0f9bd25bacad45a24277b3d0fce14cc8131c999 = $this->env->getExtension("native_profiler");
        $__internal_5ff9614fe90519b95ce911d5c0f9bd25bacad45a24277b3d0fce14cc8131c999->enter($__internal_5ff9614fe90519b95ce911d5c0f9bd25bacad45a24277b3d0fce14cc8131c999_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_5ff9614fe90519b95ce911d5c0f9bd25bacad45a24277b3d0fce14cc8131c999->leave($__internal_5ff9614fe90519b95ce911d5c0f9bd25bacad45a24277b3d0fce14cc8131c999_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_2bdce1047fc0597d23bcd29aabfee8df865a1a039ca0cf9bbfb0c14dce1c0723 = $this->env->getExtension("native_profiler");
        $__internal_2bdce1047fc0597d23bcd29aabfee8df865a1a039ca0cf9bbfb0c14dce1c0723->enter($__internal_2bdce1047fc0597d23bcd29aabfee8df865a1a039ca0cf9bbfb0c14dce1c0723_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_2bdce1047fc0597d23bcd29aabfee8df865a1a039ca0cf9bbfb0c14dce1c0723->leave($__internal_2bdce1047fc0597d23bcd29aabfee8df865a1a039ca0cf9bbfb0c14dce1c0723_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
