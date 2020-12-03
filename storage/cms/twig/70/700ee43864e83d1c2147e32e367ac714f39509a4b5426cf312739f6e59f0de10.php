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

/* Z:\domains\hatan.loc/themes/hatan/partials/menu/mega-menu.htm */
class __TwigTemplate_8b8c1c18ef16015d338d3076645f9ef8e0ae97b228d689e1ea8546d0d433856d extends \Twig\Template
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
        $filters = array("theme" => 36);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['theme'],
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
        echo "<div id=\"item1\" data-menuid=\"1\" class=\"megamenu show\">
\t<div class=\"container\">
\t\t<div class=\"block-menu\">
\t\t\t<ul class=\"nav-megamenu\">
\t\t\t\t<li class=\"nav-item-megamenu\">
\t\t\t\t\t<span class=\"main-link-megamenu\">Одежда</span>
\t\t\t\t\t<div class=\"overlay-menu-links\">
\t\t\t\t\t\t<a href=\"\" class=\"nav-item-link\">Верхняя одежда</a>
\t\t\t\t\t\t<a href=\"\" class=\"nav-item-link\">Джемперы</a>
\t\t\t\t\t\t<a href=\"\" class=\"nav-item-link\">Рубашки</a>
\t\t\t\t\t\t<a href=\"\" class=\"nav-item-link\">Брюки</a>
\t\t\t\t\t\t<a href=\"\" class=\"nav-item-link\">Джинсы</a>
\t\t\t\t\t\t<a href=\"\" class=\"nav-item-link\">Нижнее белье</a>
\t\t\t\t\t</div>\t\t\t\t\t\t\t
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item-megamenu\">
\t\t\t\t\t<span class=\"main-link-megamenu\">Обувь</span>
\t\t\t\t\t<div class=\"overlay-menu-links\">
\t\t\t\t\t\t<a href=\"\" class=\"nav-item-link\">Кроссовки</a>
\t\t\t\t\t\t<a href=\"\" class=\"nav-item-link\">Туфли</a>
\t\t\t\t\t\t<a href=\"\" class=\"nav-item-link\">Сапоги</a>
\t\t\t\t\t\t<a href=\"\" class=\"nav-item-link\">Ботинки</a>
\t\t\t\t\t</div>\t\t\t\t\t\t\t
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item-megamenu\">
\t\t\t\t\t<span class=\"main-link-megamenu\">Аксессуары</span>
\t\t\t\t\t<div class=\"overlay-menu-links\">
\t\t\t\t\t\t<a href=\"\" class=\"nav-item-link\">Ремни</a>
\t\t\t\t\t\t<a href=\"\" class=\"nav-item-link\">Сумки</a>
\t\t\t\t\t</div>\t\t\t\t\t\t\t
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item-megamenu\">
\t\t\t\t\t<span class=\"main-link-megamenu\">Акции</span>
\t\t\t\t\t<div class=\"banner-wrapper\">
\t\t\t\t\t\t<div class=\"banner square small\">
\t\t\t\t\t\t\t<img src=\"";
        // line 36
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/dest/Banner1.png");
        echo "\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"banner square small\">
\t\t\t\t\t\t\t<img src=\"";
        // line 39
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/dest/Bannerbig.png");
        echo "\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>
\t</div>\t\t\t\t
</div>";
    }

    public function getTemplateName()
    {
        return "Z:\\domains\\hatan.loc/themes/hatan/partials/menu/mega-menu.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 39,  99 => 36,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"item1\" data-menuid=\"1\" class=\"megamenu show\">
\t<div class=\"container\">
\t\t<div class=\"block-menu\">
\t\t\t<ul class=\"nav-megamenu\">
\t\t\t\t<li class=\"nav-item-megamenu\">
\t\t\t\t\t<span class=\"main-link-megamenu\">Одежда</span>
\t\t\t\t\t<div class=\"overlay-menu-links\">
\t\t\t\t\t\t<a href=\"\" class=\"nav-item-link\">Верхняя одежда</a>
\t\t\t\t\t\t<a href=\"\" class=\"nav-item-link\">Джемперы</a>
\t\t\t\t\t\t<a href=\"\" class=\"nav-item-link\">Рубашки</a>
\t\t\t\t\t\t<a href=\"\" class=\"nav-item-link\">Брюки</a>
\t\t\t\t\t\t<a href=\"\" class=\"nav-item-link\">Джинсы</a>
\t\t\t\t\t\t<a href=\"\" class=\"nav-item-link\">Нижнее белье</a>
\t\t\t\t\t</div>\t\t\t\t\t\t\t
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item-megamenu\">
\t\t\t\t\t<span class=\"main-link-megamenu\">Обувь</span>
\t\t\t\t\t<div class=\"overlay-menu-links\">
\t\t\t\t\t\t<a href=\"\" class=\"nav-item-link\">Кроссовки</a>
\t\t\t\t\t\t<a href=\"\" class=\"nav-item-link\">Туфли</a>
\t\t\t\t\t\t<a href=\"\" class=\"nav-item-link\">Сапоги</a>
\t\t\t\t\t\t<a href=\"\" class=\"nav-item-link\">Ботинки</a>
\t\t\t\t\t</div>\t\t\t\t\t\t\t
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item-megamenu\">
\t\t\t\t\t<span class=\"main-link-megamenu\">Аксессуары</span>
\t\t\t\t\t<div class=\"overlay-menu-links\">
\t\t\t\t\t\t<a href=\"\" class=\"nav-item-link\">Ремни</a>
\t\t\t\t\t\t<a href=\"\" class=\"nav-item-link\">Сумки</a>
\t\t\t\t\t</div>\t\t\t\t\t\t\t
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item-megamenu\">
\t\t\t\t\t<span class=\"main-link-megamenu\">Акции</span>
\t\t\t\t\t<div class=\"banner-wrapper\">
\t\t\t\t\t\t<div class=\"banner square small\">
\t\t\t\t\t\t\t<img src=\"{{ 'assets/images/dest/Banner1.png' | theme }}\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"banner square small\">
\t\t\t\t\t\t\t<img src=\"{{ 'assets/images/dest/Bannerbig.png' | theme }}\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>
\t</div>\t\t\t\t
</div>", "Z:\\domains\\hatan.loc/themes/hatan/partials/menu/mega-menu.htm", "");
    }
}
