<?php

/* index.twig */
class __TwigTemplate_eaba7149b72942eda6a428b561aefc3e871baabf911e3f64d867d44ed954d924 extends yii\twig\Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"site-index\">

    <div class=\"jumbotron\">
        <h1>";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["pages"]) ? $context["pages"] : null), "getContent", array(), "method"), "h1", array()), "html", null, true);
        echo "</h1>
    
    </div>

    <div class=\"body-content\">
       ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["pages"]) ? $context["pages"] : null), "getContent", array(), "method"), "content", array()), "html", null, true);
        echo "
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 9,  24 => 4,  19 => 1,);
    }
}
