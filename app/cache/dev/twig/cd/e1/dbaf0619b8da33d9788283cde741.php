<?php

/* WmdWatchMyDeskBundle:Desk:show.html.twig */
class __TwigTemplate_cde1dbaf0619b8da33d9788283cde741 extends Twig_Template
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
    - Détail du bureau ";
        // line 5
        echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
        echo "
";
    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        // line 9
        echo "    <h1>Détail du bureau n°";
        echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
        echo "</h1>
    <p>
        Description du bureau ...
    </p>
    <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\">Retour à l'accueil</a>
";
    }

    public function getTemplateName()
    {
        return "WmdWatchMyDeskBundle:Desk:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 13,  46 => 9,  43 => 8,  37 => 5,  32 => 4,  29 => 3,);
    }
}
