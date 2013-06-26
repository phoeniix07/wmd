<?php

/* WmdWatchMyDeskBundle:Default:index.html.twig */
class __TwigTemplate_90328cb453b0cd4d835f665b65c170bd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
    - Bienvenue !
";
    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        // line 9
        echo "    Hello les fermiers !
    <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\">Accueil</a> - <a href=\"";
        echo $this->env->getExtension('routing')->getPath("desk_show", array("deskId" => 5));
        echo "\">Bureau n°5</a>
";
    }

    public function getTemplateName()
    {
        return "WmdWatchMyDeskBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 10,  43 => 9,  40 => 8,  32 => 4,  29 => 3,);
    }
}
