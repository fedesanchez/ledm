<?php

/* :hecho:edit.html.twig */
class __TwigTemplate_0070baeb31b2424f6edfdb6285c83a426c08366b76025ff0580cdb709441ef05 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":hecho:edit.html.twig", 1);
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
        $__internal_accd117f8eaa037f0b9d66b921a03ab790624361d6e8de3392730574e73ef7ca = $this->env->getExtension("native_profiler");
        $__internal_accd117f8eaa037f0b9d66b921a03ab790624361d6e8de3392730574e73ef7ca->enter($__internal_accd117f8eaa037f0b9d66b921a03ab790624361d6e8de3392730574e73ef7ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":hecho:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_accd117f8eaa037f0b9d66b921a03ab790624361d6e8de3392730574e73ef7ca->leave($__internal_accd117f8eaa037f0b9d66b921a03ab790624361d6e8de3392730574e73ef7ca_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_895c3e1a5b2fff507d6d0548e80feaf6c94000b7df66ede13fbbb4fe49e96f66 = $this->env->getExtension("native_profiler");
        $__internal_895c3e1a5b2fff507d6d0548e80feaf6c94000b7df66ede13fbbb4fe49e96f66->enter($__internal_895c3e1a5b2fff507d6d0548e80feaf6c94000b7df66ede13fbbb4fe49e96f66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Hecho edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("hecho_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_895c3e1a5b2fff507d6d0548e80feaf6c94000b7df66ede13fbbb4fe49e96f66->leave($__internal_895c3e1a5b2fff507d6d0548e80feaf6c94000b7df66ede13fbbb4fe49e96f66_prof);

    }

    public function getTemplateName()
    {
        return ":hecho:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 18,  66 => 16,  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Hecho edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('hecho_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
