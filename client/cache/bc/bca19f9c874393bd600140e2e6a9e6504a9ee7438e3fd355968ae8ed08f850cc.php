<?php

/* /indexFront/index.html.twig */
class __TwigTemplate_3ea13c7765c626f8799c26550dbddd22055a97b6fa3bbfc35fda01fb1429ca99 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\" />
    <title>LPO</title>
</head>
<body>

<div>
    ";
        // line 10
        echo twig_escape_filter($this->env, ($context["Nichoirs"] ?? null), "html", null, true);
        echo "
</div>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "/indexFront/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 10,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/indexFront/index.html.twig", "C:\\Users\\gcalori\\Documents\\LPO\\client\\app\\templates\\indexFront\\index.html.twig");
    }
}
