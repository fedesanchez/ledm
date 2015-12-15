<?php

/* tag/index.html.twig */
class __TwigTemplate_905274d2ab62d67eaea1730b5d628a6e2c446dbc78927869c467fd741beb094c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "tag/index.html.twig", 1);
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
        $__internal_cb053873b95c3c7a9e6fad0ca9451b01a94df5b1f3fd4e4a68bc49bd7cf3b34a = $this->env->getExtension("native_profiler");
        $__internal_cb053873b95c3c7a9e6fad0ca9451b01a94df5b1f3fd4e4a68bc49bd7cf3b34a->enter($__internal_cb053873b95c3c7a9e6fad0ca9451b01a94df5b1f3fd4e4a68bc49bd7cf3b34a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tag/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cb053873b95c3c7a9e6fad0ca9451b01a94df5b1f3fd4e4a68bc49bd7cf3b34a->leave($__internal_cb053873b95c3c7a9e6fad0ca9451b01a94df5b1f3fd4e4a68bc49bd7cf3b34a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_bba7d9f1db5b9de0f9b7fa8a67f6baffab5c4c51a8c9d92a51c622c1b55fabe7 = $this->env->getExtension("native_profiler");
        $__internal_bba7d9f1db5b9de0f9b7fa8a67f6baffab5c4c51a8c9d92a51c622c1b55fabe7->enter($__internal_bba7d9f1db5b9de0f9b7fa8a67f6baffab5c4c51a8c9d92a51c622c1b55fabe7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Tag list</h1>

    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Id</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tags"]) ? $context["tags"] : $this->getContext($context, "tags")));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 17
            echo "            <tr>
                <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tag_show", array("id" => $this->getAttribute($context["tag"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "nombre", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "descripcion", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "id", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tag_show", array("id" => $this->getAttribute($context["tag"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tag_edit", array("id" => $this->getAttribute($context["tag"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("tag_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_bba7d9f1db5b9de0f9b7fa8a67f6baffab5c4c51a8c9d92a51c622c1b55fabe7->leave($__internal_bba7d9f1db5b9de0f9b7fa8a67f6baffab5c4c51a8c9d92a51c622c1b55fabe7_prof);

    }

    public function getTemplateName()
    {
        return "tag/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 38,  96 => 33,  84 => 27,  78 => 24,  71 => 20,  67 => 19,  61 => 18,  58 => 17,  54 => 16,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Tag list</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Nombre</th>*/
/*                 <th>Descripcion</th>*/
/*                 <th>Id</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for tag in tags %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('tag_show', { 'id': tag.id }) }}">{{ tag.nombre }}</a></td>*/
/*                 <td>{{ tag.descripcion }}</td>*/
/*                 <td>{{ tag.id }}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('tag_show', { 'id': tag.id }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('tag_edit', { 'id': tag.id }) }}">edit</a>*/
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
/*             <a href="{{ path('tag_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
