<?php

/* AmcontrolBundle:Lista:index.html.twig */
class __TwigTemplate_35aaf376be322b9e9932d4cdeff302b4 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        echo "Lista de tareas

";
        // line 3
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, 'lista'));
        foreach ($context['_seq'] as $context['_key'] => $context['list']) {
            // line 4
            echo " <h2>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'list'), "mu", array(), "any", false), "html");
            echo "</h2>
 <p>";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'list'), "descripcion", array(), "any", false), "html");
            echo "</p>
 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['list'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
    }

    public function getTemplateName()
    {
        return "AmcontrolBundle:Lista:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
