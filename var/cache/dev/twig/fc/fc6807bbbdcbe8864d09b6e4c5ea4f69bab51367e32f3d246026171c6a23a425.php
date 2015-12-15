<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_4bec825667008cccf73f491587d175b6d2f4d16cbb7bbe229ab5d20da42c7887 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_b239ffc0c4d37902a8511137d16c54643ef72b5a6d839081f50cd762519ec158 = $this->env->getExtension("native_profiler");
        $__internal_b239ffc0c4d37902a8511137d16c54643ef72b5a6d839081f50cd762519ec158->enter($__internal_b239ffc0c4d37902a8511137d16c54643ef72b5a6d839081f50cd762519ec158_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b239ffc0c4d37902a8511137d16c54643ef72b5a6d839081f50cd762519ec158->leave($__internal_b239ffc0c4d37902a8511137d16c54643ef72b5a6d839081f50cd762519ec158_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3f2f0b34a86eece2939da5a92d16eb9147e5af830f5bd68a8f1b01932e17966d = $this->env->getExtension("native_profiler");
        $__internal_3f2f0b34a86eece2939da5a92d16eb9147e5af830f5bd68a8f1b01932e17966d->enter($__internal_3f2f0b34a86eece2939da5a92d16eb9147e5af830f5bd68a8f1b01932e17966d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_3f2f0b34a86eece2939da5a92d16eb9147e5af830f5bd68a8f1b01932e17966d->leave($__internal_3f2f0b34a86eece2939da5a92d16eb9147e5af830f5bd68a8f1b01932e17966d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_7bf0e36a4e931703e56e086fbc33683f82bd2b928dd90430e9683d09afc148dd = $this->env->getExtension("native_profiler");
        $__internal_7bf0e36a4e931703e56e086fbc33683f82bd2b928dd90430e9683d09afc148dd->enter($__internal_7bf0e36a4e931703e56e086fbc33683f82bd2b928dd90430e9683d09afc148dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_7bf0e36a4e931703e56e086fbc33683f82bd2b928dd90430e9683d09afc148dd->leave($__internal_7bf0e36a4e931703e56e086fbc33683f82bd2b928dd90430e9683d09afc148dd_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_b37b4acd30cdce0da88b3faf371daa85bb509c152da1d12d430773039507025e = $this->env->getExtension("native_profiler");
        $__internal_b37b4acd30cdce0da88b3faf371daa85bb509c152da1d12d430773039507025e->enter($__internal_b37b4acd30cdce0da88b3faf371daa85bb509c152da1d12d430773039507025e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_b37b4acd30cdce0da88b3faf371daa85bb509c152da1d12d430773039507025e->leave($__internal_b37b4acd30cdce0da88b3faf371daa85bb509c152da1d12d430773039507025e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
