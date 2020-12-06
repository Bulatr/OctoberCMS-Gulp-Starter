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

/* Z:\domains\hatan.loc/themes/hatan/partials/header-site.htm */
class __TwigTemplate_901fa2bb68174a77854f327a2f034c8176134815f9fd7de2dcbb511eba8aa9c1 extends \Twig\Template
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
        $tags = array("partial" => 13, "set" => 33, "if" => 36);
        $filters = array("theme" => 9, "escape" => 59);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['partial', 'set', 'if'],
                ['theme', 'escape'],
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
        echo "<div class=\"header\">
\t<div class=\"container\" style=\"position: relative;\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col d-flex justify-content-between\">
\t\t\t\t<div class=\"logo-wrapper\">
\t\t\t\t\t<div class=\"logo\">
\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t<img src=\"";
        // line 9
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/a-logo.svg");
        echo "\" alt=\"\">
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
        // line 13
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("menu/main-menu-wrapper"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 14
        echo "\t\t\t\t<div class=\"search-wrapper\">
\t\t\t\t\t<form class=\"form-inline custom d-flex\">
\t\t\t\t\t\t<input class=\"form-control mr-sm-2\" type=\"search\" placeholder=\"Поиск\" aria-label=\"Search\">
\t\t\t\t\t\t<div class=\"icon-search\">
\t\t\t\t\t\t\t<img src=\"";
        // line 18
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/Search.svg");
        echo "\" alt=\"\">
\t\t\t\t\t\t</div>\t\t\t\t\t\t\t
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t\t<div class=\"icons-wrapper\">\t\t\t\t\t
\t\t\t\t\t<div class=\"icons account-icon\">
\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t<img src=\"";
        // line 25
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/Account.svg");
        echo "\" alt=\"Личный кабинет\">
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"icons heart-icon\">
\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t<img src=\"";
        // line 30
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/Outline.svg");
        echo "\" alt=\"Избранное\">
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t";
        // line 33
        $context["obCartPositionList"] = twig_get_attribute($this->env, $this->source, ($context["Cart"] ?? null), "get", [], "method", false, false, true, 33);
        // line 34
        echo "\t\t\t\t\t<div 
\t\t\t\t\t\tclass=\"icons cart-icon\" 
\t\t\t\t\t\t";
        // line 36
        if ((twig_get_attribute($this->env, $this->source, ($context["obCartPositionList"] ?? null), "count", [], "method", false, false, true, 36) > 0)) {
            // line 37
            echo "\t\t\t\t\t\t\tdata-cartfilled=\"yes\"
\t\t\t\t\t\t\t";
        } else {
            // line 39
            echo "\t\t\t\t\t\t\tdata-cartfilled=\"no\"
\t\t\t\t\t\t";
        }
        // line 40
        echo " >
\t\t\t\t\t\t<a href=\"#\" class=\"cart empty 
\t\t\t\t\t\t\t";
        // line 42
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["obCartPositionList"] ?? null), "count", [], "method", false, false, true, 42), "isEmpty", [], "method", false, false, true, 42)) {
            // line 43
            echo "\t\t\t\t\t\t\t\tshow
\t\t\t\t\t\t\t";
        }
        // line 44
        echo "\">
\t\t\t\t\t\t\t<img src=\"";
        // line 45
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/Empty Cart.svg");
        echo "\" alt=\"\">
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"#\" class=\"cart filled
\t\t\t\t\t\t\t";
        // line 48
        if ((twig_get_attribute($this->env, $this->source, ($context["obCartPositionList"] ?? null), "count", [], "method", false, false, true, 48) > 0)) {
            // line 49
            echo "\t\t\t\t\t\t\t\tshow
\t\t\t\t\t\t\t";
        }
        // line 51
        echo "\t\t\t\t\t\t\">
\t\t\t\t\t\t\t<img src=\"";
        // line 52
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/Added to Cart.svg");
        echo "\" alt=\"\">
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"#\" class=\"cart added\">
\t\t\t\t\t\t\t<img src=\"";
        // line 55
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/Add to Cart.svg");
        echo "\" alt=\"\">
\t\t\t\t\t\t</a>\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t";
        // line 58
        if ((twig_get_attribute($this->env, $this->source, ($context["obCartPositionList"] ?? null), "count", [], "method", false, false, true, 58) > 0)) {
            // line 59
            echo "\t\t\t\t\t\t<div class=\"count\" > ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obCartPositionList"] ?? null), "count", [], "method", false, false, true, 59), 59, $this->source), "html", null, true);
            echo " </div>
\t\t\t\t\t";
        }
        // line 61
        echo "\t\t\t\t\t";
        if ((twig_get_attribute($this->env, $this->source, ($context["obCartPositionList"] ?? null), "getTotalPriceValue", [], "method", false, false, true, 61) > 0)) {
            // line 62
            echo "\t\t\t\t\t\t<div class=\"summ\" > ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obCartPositionList"] ?? null), "getTotalPrice", [], "method", false, false, true, 62), 62, $this->source), "html", null, true);
            echo " <span class=\"rub\"></span> </div>
\t\t\t\t\t";
        }
        // line 64
        echo "\t\t\t\t\t<div class=\"icons-toggle\"></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>\t\t\t\t\t
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "Z:\\domains\\hatan.loc/themes/hatan/partials/header-site.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 64,  179 => 62,  176 => 61,  170 => 59,  168 => 58,  162 => 55,  156 => 52,  153 => 51,  149 => 49,  147 => 48,  141 => 45,  138 => 44,  134 => 43,  132 => 42,  128 => 40,  124 => 39,  120 => 37,  118 => 36,  114 => 34,  112 => 33,  106 => 30,  98 => 25,  88 => 18,  82 => 14,  78 => 13,  71 => 9,  62 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{##}
<div class=\"header\">
\t<div class=\"container\" style=\"position: relative;\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col d-flex justify-content-between\">
\t\t\t\t<div class=\"logo-wrapper\">
\t\t\t\t\t<div class=\"logo\">
\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t<img src=\"{{ 'assets/images/a-logo.svg' | theme}}\" alt=\"\">
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t{% partial \"menu/main-menu-wrapper\" %}
\t\t\t\t<div class=\"search-wrapper\">
\t\t\t\t\t<form class=\"form-inline custom d-flex\">
\t\t\t\t\t\t<input class=\"form-control mr-sm-2\" type=\"search\" placeholder=\"Поиск\" aria-label=\"Search\">
\t\t\t\t\t\t<div class=\"icon-search\">
\t\t\t\t\t\t\t<img src=\"{{ 'assets/images/Search.svg' | theme}}\" alt=\"\">
\t\t\t\t\t\t</div>\t\t\t\t\t\t\t
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t\t<div class=\"icons-wrapper\">\t\t\t\t\t
\t\t\t\t\t<div class=\"icons account-icon\">
\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t<img src=\"{{ 'assets/images/Account.svg' | theme}}\" alt=\"Личный кабинет\">
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"icons heart-icon\">
\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t<img src=\"{{ 'assets/images/Outline.svg' | theme}}\" alt=\"Избранное\">
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t{% set obCartPositionList = Cart.get() %}
\t\t\t\t\t<div 
\t\t\t\t\t\tclass=\"icons cart-icon\" 
\t\t\t\t\t\t{% if obCartPositionList.count()>0 %}
\t\t\t\t\t\t\tdata-cartfilled=\"yes\"
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\tdata-cartfilled=\"no\"
\t\t\t\t\t\t{% endif %} >
\t\t\t\t\t\t<a href=\"#\" class=\"cart empty 
\t\t\t\t\t\t\t{% if obCartPositionList.count().isEmpty() %}
\t\t\t\t\t\t\t\tshow
\t\t\t\t\t\t\t{% endif %}\">
\t\t\t\t\t\t\t<img src=\"{{ 'assets/images/Empty Cart.svg' | theme}}\" alt=\"\">
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"#\" class=\"cart filled
\t\t\t\t\t\t\t{% if obCartPositionList.count()>0 %}
\t\t\t\t\t\t\t\tshow
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\">
\t\t\t\t\t\t\t<img src=\"{{ 'assets/images/Added to Cart.svg' | theme}}\" alt=\"\">
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"#\" class=\"cart added\">
\t\t\t\t\t\t\t<img src=\"{{ 'assets/images/Add to Cart.svg' | theme}}\" alt=\"\">
\t\t\t\t\t\t</a>\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t{% if obCartPositionList.count()>0 %}
\t\t\t\t\t\t<div class=\"count\" > {{obCartPositionList.count()}} </div>
\t\t\t\t\t{% endif %}
\t\t\t\t\t{% if obCartPositionList.getTotalPriceValue() > 0 %}
\t\t\t\t\t\t<div class=\"summ\" > {{ obCartPositionList.getTotalPrice() }} <span class=\"rub\"></span> </div>
\t\t\t\t\t{% endif %}
\t\t\t\t\t<div class=\"icons-toggle\"></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>\t\t\t\t\t
\t</div>
</div>", "Z:\\domains\\hatan.loc/themes/hatan/partials/header-site.htm", "");
    }
}
