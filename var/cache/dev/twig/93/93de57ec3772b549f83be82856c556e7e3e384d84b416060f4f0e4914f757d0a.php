<?php

/* hecho/index.html.twig */
class __TwigTemplate_55086143e505ec71619ac9bd2d66c3b5157cfbf61430a1dad6f30c699c752bf4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "hecho/index.html.twig", 1);
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
        $__internal_763b7fb539986fa098dfaad23ab6d5a3a30383d3d7a6824536bdfb3253a66ab1 = $this->env->getExtension("native_profiler");
        $__internal_763b7fb539986fa098dfaad23ab6d5a3a30383d3d7a6824536bdfb3253a66ab1->enter($__internal_763b7fb539986fa098dfaad23ab6d5a3a30383d3d7a6824536bdfb3253a66ab1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "hecho/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_763b7fb539986fa098dfaad23ab6d5a3a30383d3d7a6824536bdfb3253a66ab1->leave($__internal_763b7fb539986fa098dfaad23ab6d5a3a30383d3d7a6824536bdfb3253a66ab1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a2d214d7687c0599d685df02825b0469695128e5db8cacf6625bbf2770a42697 = $this->env->getExtension("native_profiler");
        $__internal_a2d214d7687c0599d685df02825b0469695128e5db8cacf6625bbf2770a42697->enter($__internal_a2d214d7687c0599d685df02825b0469695128e5db8cacf6625bbf2770a42697_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Hecho list</h1>

    <table>
        <thead>
            <tr>
                <th>Fecha</th>
                <th>Titulo</th>
                <th>Fuentes</th>
                <th>Id</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["hechos"]) ? $context["hechos"] : $this->getContext($context, "hechos")));
        foreach ($context['_seq'] as $context["_key"] => $context["hecho"]) {
            // line 18
            echo "            <tr>
                <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("hecho_show", array("id" => $this->getAttribute($context["hecho"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["hecho"], "fecha", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["hecho"], "titulo", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["hecho"], "fuentes", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["hecho"], "id", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("hecho_show", array("id" => $this->getAttribute($context["hecho"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("hecho_edit", array("id" => $this->getAttribute($context["hecho"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hecho'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("hecho_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_a2d214d7687c0599d685df02825b0469695128e5db8cacf6625bbf2770a42697->leave($__internal_a2d214d7687c0599d685df02825b0469695128e5db8cacf6625bbf2770a42697_prof);

    }

    public function getTemplateName()
    {
        return "hecho/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 40,  101 => 35,  89 => 29,  83 => 26,  76 => 22,  72 => 21,  68 => 20,  62 => 19,  59 => 18,  55 => 17,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Hecho list</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Fecha</th>*/
/*                 <th>Titulo</th>*/
/*                 <th>Fuentes</th>*/
/*                 <th>Id</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for hecho in hechos %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('hecho_show', { 'id': hecho.id }) }}">{{ hecho.fecha }}</a></td>*/
/*                 <td>{{ hecho.titulo }}</td>*/
/*                 <td>{{ hecho.fuentes }}</td>*/
/*                 <td>{{ hecho.id }}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('hecho_show', { 'id': hecho.id }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('hecho_edit', { 'id': hecho.id }) }}">edit</a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('hecho_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
