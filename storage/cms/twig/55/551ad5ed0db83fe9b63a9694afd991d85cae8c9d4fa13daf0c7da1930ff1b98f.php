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

/* C:\OSPanel\domains\hatan.loc/themes/hatan/partials/header-site.htm */
class __TwigTemplate_1c2f434f8b4dda4612fbe5ea674d556026451f0e336f1fc5fa29e7c185a065d0 extends \Twig\Template
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
        $tags = array("partial" => 12);
        $filters = array("theme" => 8);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['partial'],
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
        echo "<div class=\"header\">
\t\t<div class=\"container\" style=\"position: relative;\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col d-flex justify-content-between\">
\t\t\t\t\t<div class=\"logo-wrapper\">
\t\t\t\t\t\t<div class=\"logo\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 8
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/a-logo.svg");
        echo "\" alt=\"\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
        // line 12
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("menu/main-menu-wrapper"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 13
        echo "\t\t\t\t\t<div class=\"search-wrapper\">
\t\t\t\t\t\t<form class=\"form-inline custom d-flex\">
\t\t\t\t\t\t\t<input class=\"form-control mr-sm-2\" type=\"search\" placeholder=\"Поиск\" aria-label=\"Search\">
\t\t\t\t\t\t\t<div class=\"icon-search\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 17
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/Search.svg");
        echo "\" alt=\"\">
\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"icons-wrapper\">
\t\t\t\t\t\t<div class=\"icons-toggle\"></div>
\t\t\t\t\t\t<div class=\"icons account-icon\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 25
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/Account.svg");
        echo "\" alt=\"Личный кабинет\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"icons heart-icon\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 30
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/Outline.svg");
        echo "\" alt=\"Избранное\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"icons cart-icon\" data-cartfilled=\"no\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"cart empty show\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 35
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/Empty Cart.svg");
        echo "\" alt=\"\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a href=\"#\" class=\"cart filled\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 38
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/Added to Cart.svg");
        echo "\" alt=\"\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a href=\"#\" class=\"cart added\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 41
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/Add to Cart.svg");
        echo "\" alt=\"\">
\t\t\t\t\t\t\t</a>\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        // line 47
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("menu/mega-menu"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 48
        echo "\t\t</div>
    </div>";
    }

    public function getTemplateName()
    {
        return "C:\\OSPanel\\domains\\hatan.loc/themes/hatan/partials/header-site.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 48,  136 => 47,  127 => 41,  121 => 38,  115 => 35,  107 => 30,  99 => 25,  88 => 17,  82 => 13,  78 => 12,  71 => 8,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"header\">
\t\t<div class=\"container\" style=\"position: relative;\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col d-flex justify-content-between\">
\t\t\t\t\t<div class=\"logo-wrapper\">
\t\t\t\t\t\t<div class=\"logo\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t<img src=\"{{ 'assets/images/a-logo.svg' | theme}}\" alt=\"\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t{% partial \"menu/main-menu-wrapper\" %}
\t\t\t\t\t<div class=\"search-wrapper\">
\t\t\t\t\t\t<form class=\"form-inline custom d-flex\">
\t\t\t\t\t\t\t<input class=\"form-control mr-sm-2\" type=\"search\" placeholder=\"Поиск\" aria-label=\"Search\">
\t\t\t\t\t\t\t<div class=\"icon-search\">
\t\t\t\t\t\t\t\t<img src=\"{{ 'assets/images/Search.svg' | theme}}\" alt=\"\">
\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"icons-wrapper\">
\t\t\t\t\t\t<div class=\"icons-toggle\"></div>
\t\t\t\t\t\t<div class=\"icons account-icon\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t<img src=\"{{ 'assets/images/Account.svg' | theme}}\" alt=\"Личный кабинет\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"icons heart-icon\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t<img src=\"{{ 'assets/images/Outline.svg' | theme}}\" alt=\"Избранное\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"icons cart-icon\" data-cartfilled=\"no\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"cart empty show\">
\t\t\t\t\t\t\t\t<img src=\"{{ 'assets/images/Empty Cart.svg' | theme}}\" alt=\"\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a href=\"#\" class=\"cart filled\">
\t\t\t\t\t\t\t\t<img src=\"{{ 'assets/images/Added to Cart.svg' | theme}}\" alt=\"\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a href=\"#\" class=\"cart added\">
\t\t\t\t\t\t\t\t<img src=\"{{ 'assets/images/Add to Cart.svg' | theme}}\" alt=\"\">
\t\t\t\t\t\t\t</a>\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t{% partial \"menu/mega-menu\" %}
\t\t</div>
    </div>", "C:\\OSPanel\\domains\\hatan.loc/themes/hatan/partials/header-site.htm", "");
    }
}
