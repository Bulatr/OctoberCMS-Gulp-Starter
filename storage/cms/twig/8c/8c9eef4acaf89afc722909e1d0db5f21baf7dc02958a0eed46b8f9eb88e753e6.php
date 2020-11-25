<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* C:\OSPanel\domains\hatan.loc/themes/hatan/partials/top-bar.htm */
class __TwigTemplate_8d1484476275be691b0484ff2530e085e195aa94507a1b7bda28dbb65eab5a0b extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "<div class=\"top-bar\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col\">
\t\t\t\t<div class=\"top-bar-wrapper\">
\t\t\t\t\t<div class=\"locale-wrapper\">
\t\t\t\t\t\t<div class=\"locale-label\">Ваш город:</div>
\t\t\t\t\t\t<a href=\"#\" class=\"btn text\">
\t\t\t\t\t\t\t\tУлан-Удэ
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"#\" class=\"btn text pl-3\">Изменить город</a>
\t\t\t\t\t</div>
\t\t\t\t\t<a href=\"tel:+79247702321\" class=\"bar-phone\">+7(924) 770-2321</a>
\t\t\t\t\t<div class=\"help-wrapper\">
\t\t\t\t\t\t<a href=\"#\" class=\"btn text\">Помощь</a>
\t\t\t\t\t</div>
\t\t\t\t</div>\t\t\t\t\t
\t\t\t</div>
\t\t</div>
\t</div>\t\t
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\OSPanel\\domains\\hatan.loc/themes/hatan/partials/top-bar.htm";
    }

    public function getDebugInfo()
    {
        return array (  62 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{##}
<div class=\"top-bar\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col\">
\t\t\t\t<div class=\"top-bar-wrapper\">
\t\t\t\t\t<div class=\"locale-wrapper\">
\t\t\t\t\t\t<div class=\"locale-label\">Ваш город:</div>
\t\t\t\t\t\t<a href=\"#\" class=\"btn text\">
\t\t\t\t\t\t\t\tУлан-Удэ
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"#\" class=\"btn text pl-3\">Изменить город</a>
\t\t\t\t\t</div>
\t\t\t\t\t<a href=\"tel:+79247702321\" class=\"bar-phone\">+7(924) 770-2321</a>
\t\t\t\t\t<div class=\"help-wrapper\">
\t\t\t\t\t\t<a href=\"#\" class=\"btn text\">Помощь</a>
\t\t\t\t\t</div>
\t\t\t\t</div>\t\t\t\t\t
\t\t\t</div>
\t\t</div>
\t</div>\t\t
</div>", "C:\\OSPanel\\domains\\hatan.loc/themes/hatan/partials/top-bar.htm", "");
    }
}
