<?php

/* AmcontrolBundle::layout.html.twig */
class __TwigTemplate_4bd2b7f7cf9f41793121b73e17135e23 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = array();
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />

\t";
        // line 6
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "b2f47c9_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b2f47c9_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/b2f47c9_main_1.css");
            // line 9
            echo "
        <link rel=\"stylesheet\" href=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->getContext($context, 'asset_url'), "html");
            echo "\" type=\"text/css\" media=\"all\" />

\t";
        } else {
            // asset "b2f47c9"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b2f47c9") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/b2f47c9.css");
            // line 9
            echo "
        <link rel=\"stylesheet\" href=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->getContext($context, 'asset_url'), "html");
            echo "\" type=\"text/css\" media=\"all\" />

\t";
        }
        unset($context["asset_url"]);
        // line 13
        echo "
        <title>";
        // line 14
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
       
    </head>
    <body>
        <div id=\"symfony-wrapper\">
            <div id=\"symfony-header\">
               
            </div>



           

            <div class=\"symfony-content\">
                ";
        // line 28
        $this->displayBlock('content', $context, $blocks);
        // line 30
        echo "            </div>

            ";
        // line 32
        if (array_key_exists("code", $context)) {
            // line 33
            echo "                
            ";
        }
        // line 35
        echo "        </div>
    </body>
</html>
";
    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        echo "AMControl";
    }

    // line 28
    public function block_content($context, array $blocks = array())
    {
        // line 29
        echo "                ";
    }

    public function getTemplateName()
    {
        return "AmcontrolBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
