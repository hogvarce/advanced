<?php

/* top-menu.twig */
class __TwigTemplate_b3fff1fc87a6c2f3dded4128f7cf8aed2462ee87f858bf2ef779f99d3af066b0 extends yii\twig\Template
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
        $this->env->getExtension('yii2-twig')->addUses("yii/bootstrap/Nav");
        echo "
";
        // line 2
        $this->env->getExtension('yii2-twig')->addUses("yii/bootstrap/NavBar");
        echo "
";
        // line 3
        $this->env->getExtension('yii2-twig')->addUses("yii/widgets/Breadcrumbs");
        echo "
";
        // line 4
        $this->env->getExtension('yii2-twig')->addUses("frontend/widgets/Alert");
        echo "


";
        // line 7
        echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "beginPage", array(), "method");
        echo "
<!DOCTYPE html>
<html lang=\"ru\">
\t<head>
\t    <meta charset=\"utf-8\">
\t    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t    <title>";
        // line 14
        echo $this->getAttribute((isset($context["html"]) ? $context["html"] : null), "encode", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "title", array())), "method");
        echo "</title>
  \t\t";
        // line 15
        echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "head", array(), "method");
        echo "
\t</head>
\t<body>
\t\t";
        // line 18
        echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "beginPage", array(), "method");
        echo "
\t\t<div class=\"container\">
\t\t\t<nav class=\"row\">
\t\t\t\t";
        // line 21
        echo $this->env->getExtension('yii2-twig')->widget("nav", array("options" => array("class" => "navbar-nav navbar-right"), "items" => $this->getAttribute(        // line 25
(isset($context["pages"]) ? $context["pages"] : null), "getMenu", array(), "method")));
        // line 26
        echo "
\t\t\t</nav>
\t\t</div>
\t\t\t";
        // line 29
        echo (isset($context["content"]) ? $context["content"] : null);
        echo "
\t\t";
        // line 30
        echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "endBody", array(), "method");
        echo "
\t</body>
</html>
";
        // line 33
        echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "beginBody", array(), "method");
    }

    public function getTemplateName()
    {
        return "top-menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 33,  75 => 30,  71 => 29,  66 => 26,  64 => 25,  63 => 21,  57 => 18,  51 => 15,  47 => 14,  37 => 7,  31 => 4,  27 => 3,  23 => 2,  19 => 1,);
    }
}
