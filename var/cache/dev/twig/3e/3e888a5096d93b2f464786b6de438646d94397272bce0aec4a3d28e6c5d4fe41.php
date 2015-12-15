<?php

/* tag/new.html.twig */
class __TwigTemplate_7e0e5980b758061eee38aee53746e0286ad2b3812d1d1d6d7e9ebda0fd83654f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "tag/new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3ed9a51732710f5ba0c06fb26c6537f0a73adefc173f38366b49a6675921830d = $this->env->getExtension("native_profiler");
        $__internal_3ed9a51732710f5ba0c06fb26c6537f0a73adefc173f38366b49a6675921830d->enter($__internal_3ed9a51732710f5ba0c06fb26c6537f0a73adefc173f38366b49a6675921830d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tag/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3ed9a51732710f5ba0c06fb26c6537f0a73adefc173f38366b49a6675921830d->leave($__internal_3ed9a51732710f5ba0c06fb26c6537f0a73adefc173f38366b49a6675921830d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_15f204b854ebb47f6579c268cec1af2e0cb3aae84efb7ad3eb39a2cf82bcfff3 = $this->env->getExtension("native_profiler");
        $__internal_15f204b854ebb47f6579c268cec1af2e0cb3aae84efb7ad3eb39a2cf82bcfff3->enter($__internal_15f204b854ebb47f6579c268cec1af2e0cb3aae84efb7ad3eb39a2cf82bcfff3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Tag creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("tag_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_15f204b854ebb47f6579c268cec1af2e0cb3aae84efb7ad3eb39a2cf82bcfff3->leave($__internal_15f204b854ebb47f6579c268cec1af2e0cb3aae84efb7ad3eb39a2cf82bcfff3_prof);

    }

    public function getTemplateName()
    {
        return "tag/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Tag creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('tag_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
