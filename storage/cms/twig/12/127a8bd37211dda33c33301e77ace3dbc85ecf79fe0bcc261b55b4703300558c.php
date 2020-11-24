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

/* C:\OSPanel\domains\hatan.loc/themes/hatan/partials/menu/main-menu-wrapper.htm */
class __TwigTemplate_6d14f6c3e9f5a4440f2badf646734f62d2e902c4f41d29e291a0b4024b77dd01 extends \Twig\Template
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
        // line 1
        echo "<div class=\"main-menu-wrapper\">
\t<nav class=\"navbar navbar-expand-lg\">
\t\t
\t\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t  <span class=\"navbar-toggler-icon\"></span>
\t\t</button>
\t  
\t\t<div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
\t\t  <ul class=\"navbar-nav mr-auto\">
\t\t\t<li class=\"nav-item active\">
\t\t\t\t<a class=\"nav-link\" href=\"#\" data-mainmenuitem=\"item1\" >
\t\t\t\t  Женщинам
\t\t\t\t</a>\t\t\t\t\t\t\t\t\t
\t\t\t</li>
\t\t\t<li class=\"nav-item\">
\t\t\t\t<a class=\"nav-link\" href=\"#\" data-mainmenuitem=\"item2\">
\t\t\t\t  Мужчинам
\t\t\t\t</a>
\t\t\t\t
\t\t\t</li>
\t\t\t<li class=\"nav-item\">
\t\t\t  <a class=\"nav-link\" href=\"#\" data-mainmenuitem=\"item3\">
\t\t\t\tДетям
\t\t\t  </a>\t\t\t\t\t\t\t\t  
\t\t\t</li>
\t\t\t
\t\t  </ul>
\t\t  
\t\t</div>
\t  </nav>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\OSPanel\\domains\\hatan.loc/themes/hatan/partials/menu/main-menu-wrapper.htm";
    }

    public function getDebugInfo()
    {
        return array (  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"main-menu-wrapper\">
\t<nav class=\"navbar navbar-expand-lg\">
\t\t
\t\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t  <span class=\"navbar-toggler-icon\"></span>
\t\t</button>
\t  
\t\t<div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
\t\t  <ul class=\"navbar-nav mr-auto\">
\t\t\t<li class=\"nav-item active\">
\t\t\t\t<a class=\"nav-link\" href=\"#\" data-mainmenuitem=\"item1\" >
\t\t\t\t  Женщинам
\t\t\t\t</a>\t\t\t\t\t\t\t\t\t
\t\t\t</li>
\t\t\t<li class=\"nav-item\">
\t\t\t\t<a class=\"nav-link\" href=\"#\" data-mainmenuitem=\"item2\">
\t\t\t\t  Мужчинам
\t\t\t\t</a>
\t\t\t\t
\t\t\t</li>
\t\t\t<li class=\"nav-item\">
\t\t\t  <a class=\"nav-link\" href=\"#\" data-mainmenuitem=\"item3\">
\t\t\t\tДетям
\t\t\t  </a>\t\t\t\t\t\t\t\t  
\t\t\t</li>
\t\t\t
\t\t  </ul>
\t\t  
\t\t</div>
\t  </nav>
</div>", "C:\\OSPanel\\domains\\hatan.loc/themes/hatan/partials/menu/main-menu-wrapper.htm", "");
    }
}
