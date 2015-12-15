<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_a932c0a1a46923032c3f820da93754b5ecbb964682c96d594545d5768c76509f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_93e74edcca17603b47cac09b746f1b834a170a2f5bd09412592b9ec05fca4084 = $this->env->getExtension("native_profiler");
        $__internal_93e74edcca17603b47cac09b746f1b834a170a2f5bd09412592b9ec05fca4084->enter($__internal_93e74edcca17603b47cac09b746f1b834a170a2f5bd09412592b9ec05fca4084_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_93e74edcca17603b47cac09b746f1b834a170a2f5bd09412592b9ec05fca4084->leave($__internal_93e74edcca17603b47cac09b746f1b834a170a2f5bd09412592b9ec05fca4084_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e5b45f61c1ab27473cb43ec9272c9778f01eaf38f7a7cce7c6fa03ea856177ab = $this->env->getExtension("native_profiler");
        $__internal_e5b45f61c1ab27473cb43ec9272c9778f01eaf38f7a7cce7c6fa03ea856177ab->enter($__internal_e5b45f61c1ab27473cb43ec9272c9778f01eaf38f7a7cce7c6fa03ea856177ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_e5b45f61c1ab27473cb43ec9272c9778f01eaf38f7a7cce7c6fa03ea856177ab->leave($__internal_e5b45f61c1ab27473cb43ec9272c9778f01eaf38f7a7cce7c6fa03ea856177ab_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_07641b39d77a69edcf51bbf44ab73db98575b53aab7c68be0c2e07081d0d5a70 = $this->env->getExtension("native_profiler");
        $__internal_07641b39d77a69edcf51bbf44ab73db98575b53aab7c68be0c2e07081d0d5a70->enter($__internal_07641b39d77a69edcf51bbf44ab73db98575b53aab7c68be0c2e07081d0d5a70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_07641b39d77a69edcf51bbf44ab73db98575b53aab7c68be0c2e07081d0d5a70->leave($__internal_07641b39d77a69edcf51bbf44ab73db98575b53aab7c68be0c2e07081d0d5a70_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
