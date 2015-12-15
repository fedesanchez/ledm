<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_d62815123172905363b556be4606ef1e414bdb11568731098eea62e424e995d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_749604f866fcfdb96459f657ff266608f498ea07a35950c98dc5114af3b8f9c7 = $this->env->getExtension("native_profiler");
        $__internal_749604f866fcfdb96459f657ff266608f498ea07a35950c98dc5114af3b8f9c7->enter($__internal_749604f866fcfdb96459f657ff266608f498ea07a35950c98dc5114af3b8f9c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_749604f866fcfdb96459f657ff266608f498ea07a35950c98dc5114af3b8f9c7->leave($__internal_749604f866fcfdb96459f657ff266608f498ea07a35950c98dc5114af3b8f9c7_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_21230b4845ed376c61efec3691c1d9570d363d923fcb833fcce0456ac1e1b077 = $this->env->getExtension("native_profiler");
        $__internal_21230b4845ed376c61efec3691c1d9570d363d923fcb833fcce0456ac1e1b077->enter($__internal_21230b4845ed376c61efec3691c1d9570d363d923fcb833fcce0456ac1e1b077_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_21230b4845ed376c61efec3691c1d9570d363d923fcb833fcce0456ac1e1b077->leave($__internal_21230b4845ed376c61efec3691c1d9570d363d923fcb833fcce0456ac1e1b077_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_bd049a20417d2700ea720ee5c6ee4dd994d6989fe3f4ed06120aa24c2564395e = $this->env->getExtension("native_profiler");
        $__internal_bd049a20417d2700ea720ee5c6ee4dd994d6989fe3f4ed06120aa24c2564395e->enter($__internal_bd049a20417d2700ea720ee5c6ee4dd994d6989fe3f4ed06120aa24c2564395e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_bd049a20417d2700ea720ee5c6ee4dd994d6989fe3f4ed06120aa24c2564395e->leave($__internal_bd049a20417d2700ea720ee5c6ee4dd994d6989fe3f4ed06120aa24c2564395e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ed5e79d3790b0b92088db686bf427e1ef18e83ad5561bb35d12a1833c1577cef = $this->env->getExtension("native_profiler");
        $__internal_ed5e79d3790b0b92088db686bf427e1ef18e83ad5561bb35d12a1833c1577cef->enter($__internal_ed5e79d3790b0b92088db686bf427e1ef18e83ad5561bb35d12a1833c1577cef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ed5e79d3790b0b92088db686bf427e1ef18e83ad5561bb35d12a1833c1577cef->leave($__internal_ed5e79d3790b0b92088db686bf427e1ef18e83ad5561bb35d12a1833c1577cef_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
