<?php

/* AmcontrolBundle:Listas:show.html.twig */
class __TwigTemplate_f051514900d6410d23f7ce4027aec322 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        echo "<h1>Listas</h1>

<table class=\"record_properties\">
    <tbody>
        <tr>
            <th>Id</th>
            <td>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'entity'), "id", array(), "any", false), "html");
        echo "</td>
        </tr>
        <tr>
            <th>Mu</th>
            <td>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'entity'), "mu", array(), "any", false), "html");
        echo "</td>
        </tr>
        <tr>
            <th>Descripcion</th>
            <td>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'entity'), "descripcion", array(), "any", false), "html");
        echo "</td>
        </tr>
        <tr>
            <th>Actividad</th>
            <td>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'entity'), "actividad", array(), "any", false), "html");
        echo "</td>
        </tr>
        <tr>
            <th>Comentarios</th>
            <td>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'entity'), "comentarios", array(), "any", false), "html");
        echo "</td>
        </tr>
        <tr>
            <th>Sd</th>
            <td>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'entity'), "sd", array(), "any", false), "html");
        echo "</td>
        </tr>
        <tr>
            <th>Tipo</th>
            <td>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'entity'), "tipo", array(), "any", false), "html");
        echo "</td>
        </tr>
        <tr>
            <th>Nivel</th>
            <td>";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'entity'), "nivel", array(), "any", false), "html");
        echo "</td>
        </tr>
        <tr>
            <th>Responsable</th>
            <td>";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'entity'), "responsable", array(), "any", false), "html");
        echo "</td>
        </tr>
    </tbody>
</table>

<ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("listas"), "html");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("listas_edit", array("id" => $this->getAttribute($this->getContext($context, 'entity'), "id", array(), "any", false))), "html");
        echo "\">
            Edit
        </a>
    </li>
    <li>
        <form action=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("listas_delete", array("id" => $this->getAttribute($this->getContext($context, 'entity'), "id", array(), "any", false))), "html");
        echo "\" method=\"post\">
            ";
        // line 57
        echo $this->env->getExtension('form')->renderWidget($this->getContext($context, 'delete_form'));
        echo "
            <button type=\"submit\">Delete</button>
        </form>
    </li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "AmcontrolBundle:Listas:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
