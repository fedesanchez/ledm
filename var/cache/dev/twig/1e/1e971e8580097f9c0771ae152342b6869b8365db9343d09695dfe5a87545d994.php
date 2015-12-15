<?php

/* hecho/show.html.twig */
class __TwigTemplate_3f442cc96c4f2d8d294875301669b3ed6cd189475c65b4b73a15d7a187ccc672 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "hecho/show.html.twig", 1);
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
        $__internal_7a5d42ab614a13c101199da99dbc112ab891a903d8d9e23c55d4306edfe3818a = $this->env->getExtension("native_profiler");
        $__internal_7a5d42ab614a13c101199da99dbc112ab891a903d8d9e23c55d4306edfe3818a->enter($__internal_7a5d42ab614a13c101199da99dbc112ab891a903d8d9e23c55d4306edfe3818a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "hecho/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a5d42ab614a13c101199da99dbc112ab891a903d8d9e23c55d4306edfe3818a->leave($__internal_7a5d42ab614a13c101199da99dbc112ab891a903d8d9e23c55d4306edfe3818a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_030fe87ab05f51c0bd26dff09b23ff7c3eb7c6ac9b8f2251723429d801f1bc45 = $this->env->getExtension("native_profiler");
        $__internal_030fe87ab05f51c0bd26dff09b23ff7c3eb7c6ac9b8f2251723429d801f1bc45->enter($__internal_030fe87ab05f51c0bd26dff09b23ff7c3eb7c6ac9b8f2251723429d801f1bc45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Hecho</h1>

    <table>
        <tbody>
            <tr>
                <th>Fecha</th>
                <td>";
        // line 10
        if ($this->getAttribute((isset($context["hecho"]) ? $context["hecho"] : $this->getContext($context, "hecho")), "fecha", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["hecho"]) ? $context["hecho"] : $this->getContext($context, "hecho")), "fecha", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Titulo</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["hecho"]) ? $context["hecho"] : $this->getContext($context, "hecho")), "titulo", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Fuentes</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["hecho"]) ? $context["hecho"] : $this->getContext($context, "hecho")), "fuentes", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Id</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["hecho"]) ? $context["hecho"] : $this->getContext($context, "hecho")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("hecho_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("hecho_edit", array("id" => $this->getAttribute((isset($context["hecho"]) ? $context["hecho"] : $this->getContext($context, "hecho")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 35
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 37
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_030fe87ab05f51c0bd26dff09b23ff7c3eb7c6ac9b8f2251723429d801f1bc45->leave($__internal_030fe87ab05f51c0bd26dff09b23ff7c3eb7c6ac9b8f2251723429d801f1bc45_prof);

    }

    public function getTemplateName()
    {
        return "hecho/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 37,  93 => 35,  87 => 32,  81 => 29,  71 => 22,  64 => 18,  57 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Hecho</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Fecha</th>*/
/*                 <td>{% if hecho.fecha %}{{ hecho.fecha|date('Y-m-d') }}{% endif %}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Titulo</th>*/
/*                 <td>{{ hecho.titulo }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Fuentes</th>*/
/*                 <td>{{ hecho.fuentes }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ hecho.id }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('hecho_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('hecho_edit', { 'id': hecho.id }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
