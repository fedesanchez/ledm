<?php

/* hecho/new.html.twig */
class __TwigTemplate_29e76bd413dc72b6abb651c5a56700634e93667891e16c4908cb3508c68de7a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "hecho/new.html.twig", 1);
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
        $__internal_76c94216b5567e7d15379702ad27714f5597ab39a632be881fb50b8dbf4c40a8 = $this->env->getExtension("native_profiler");
        $__internal_76c94216b5567e7d15379702ad27714f5597ab39a632be881fb50b8dbf4c40a8->enter($__internal_76c94216b5567e7d15379702ad27714f5597ab39a632be881fb50b8dbf4c40a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "hecho/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_76c94216b5567e7d15379702ad27714f5597ab39a632be881fb50b8dbf4c40a8->leave($__internal_76c94216b5567e7d15379702ad27714f5597ab39a632be881fb50b8dbf4c40a8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5910d092ff6d3f491a9d20531fa56dab7eec43a3a542c296a6bc0bff067dae46 = $this->env->getExtension("native_profiler");
        $__internal_5910d092ff6d3f491a9d20531fa56dab7eec43a3a542c296a6bc0bff067dae46->enter($__internal_5910d092ff6d3f491a9d20531fa56dab7eec43a3a542c296a6bc0bff067dae46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Hecho creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />

        <h3>Tags</h3>
        <ul class=\"tags\">
            ";
        // line 13
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tags", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 14
            echo "                <li>";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["tag"], "nombre", array()), 'row');
            echo "</li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "        </ul>

    ";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("hecho_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_5910d092ff6d3f491a9d20531fa56dab7eec43a3a542c296a6bc0bff067dae46->leave($__internal_5910d092ff6d3f491a9d20531fa56dab7eec43a3a542c296a6bc0bff067dae46_prof);

    }

    public function getTemplateName()
    {
        return "hecho/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 22,  74 => 18,  70 => 16,  61 => 14,  56 => 13,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Hecho creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/* */
/*         <h3>Tags</h3>*/
/*         <ul class="tags">*/
/*             {# iterate over each existing tag and render its only field: name #}*/
/*             {% for tag in form.tags %}*/
/*                 <li>{{ form_row(tag.nombre) }}</li>*/
/*             {% endfor %}*/
/*         </ul>*/
/* */
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('hecho_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
