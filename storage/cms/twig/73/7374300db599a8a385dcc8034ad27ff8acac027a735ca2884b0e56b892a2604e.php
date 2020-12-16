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

/* Z:\domains\hatan.loc/themes/hatan/partials/product/filter-panel/select-sort.htm */
class __TwigTemplate_49dfb2c73507ff37cd27802e5101aabe77bf9137347d07f338c52f5f30ca0a44 extends \Twig\Template
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
        $tags = array("if" => 3);
        $filters = array("theme" => 16);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
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
        // line 2
        echo "<select class=\"sort-select _shopaholic-sorting\" name=\"sort-product\" id=\"sort-product\">
    <option ";
        // line 3
        if ((($context["sActiveSort"] ?? null) == "no")) {
            echo " selected ";
        }
        echo " value=\"no\">По популярности</option>
    <option ";
        // line 4
        if ((($context["sActiveSort"] ?? null) == "price|asc")) {
            echo " selected ";
        }
        echo " value=\"price|asc\">По возрастанию цены</option>
    <option ";
        // line 5
        if ((($context["sActiveSort"] ?? null) == "price|desc")) {
            echo " selected ";
        }
        echo " value=\"price|desc\">По убыванию цены</option>
    <option ";
        // line 6
        if ((($context["sActiveSort"] ?? null) == "new")) {
            echo " selected ";
        }
        echo " value=\"new\">Новые</option>
</select>
<div class='custom-select' id='sort-select-product' >
    <div class='custom-select__value' data-custom-select=\"sort-product\">
        ";
        // line 10
        if ((($context["sActiveSort"] ?? null) == "no")) {
            echo " По популярности ";
        }
        // line 11
        echo "        ";
        if ((($context["sActiveSort"] ?? null) == "price|asc")) {
            echo " По возрастанию цены ";
        }
        // line 12
        echo "        ";
        if ((($context["sActiveSort"] ?? null) == "price|desc")) {
            echo " По убыванию цены ";
        }
        // line 13
        echo "        ";
        if ((($context["sActiveSort"] ?? null) == "new")) {
            echo "Новые";
        }
        // line 14
        echo "    </div>
    <div class='custom-select__icon' >
        <img src=\"";
        // line 16
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/Direction-Down.svg");
        echo "\">
    </div>
</div>
<div class='custom-options-select' id=\"custom-options__sort-product\" >
</div>";
    }

    public function getTemplateName()
    {
        return "Z:\\domains\\hatan.loc/themes/hatan/partials/product/filter-panel/select-sort.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 16,  111 => 14,  106 => 13,  101 => 12,  96 => 11,  92 => 10,  83 => 6,  77 => 5,  71 => 4,  65 => 3,  62 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{##}
<select class=\"sort-select _shopaholic-sorting\" name=\"sort-product\" id=\"sort-product\">
    <option {% if sActiveSort == 'no' %} selected {% endif %} value=\"no\">По популярности</option>
    <option {% if sActiveSort == 'price|asc' %} selected {% endif %} value=\"price|asc\">По возрастанию цены</option>
    <option {% if sActiveSort == 'price|desc' %} selected {% endif %} value=\"price|desc\">По убыванию цены</option>
    <option {% if sActiveSort == 'new' %} selected {% endif %} value=\"new\">Новые</option>
</select>
<div class='custom-select' id='sort-select-product' >
    <div class='custom-select__value' data-custom-select=\"sort-product\">
        {% if sActiveSort == 'no' %} По популярности {% endif %}
        {% if sActiveSort == 'price|asc' %} По возрастанию цены {% endif %}
        {% if sActiveSort == 'price|desc' %} По убыванию цены {% endif %}
        {% if sActiveSort == 'new' %}Новые{% endif %}
    </div>
    <div class='custom-select__icon' >
        <img src=\"{{'assets/images/Direction-Down.svg' | theme }}\">
    </div>
</div>
<div class='custom-options-select' id=\"custom-options__sort-product\" >
</div>", "Z:\\domains\\hatan.loc/themes/hatan/partials/product/filter-panel/select-sort.htm", "");
    }
}
