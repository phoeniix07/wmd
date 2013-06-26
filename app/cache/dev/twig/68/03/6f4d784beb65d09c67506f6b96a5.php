<?php

/* ::base.html.twig */
class __TwigTemplate_68036f4d784beb65d09c67506f6b96a5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
\t\t";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "        <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 12
        $this->displayBlock('body', $context, $blocks);
        // line 13
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 14
        echo "    </body>
</html>";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Watch My Desk";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "\t\t        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/wmdwatchmydesk/css/style.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
\t\t";
    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  68 => 12,  61 => 7,  58 => 6,  52 => 5,  47 => 14,  44 => 13,  42 => 12,  35 => 9,  33 => 6,  29 => 5,  23 => 1,);
    }
}
