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

/* Z:\domains\hatan.loc/themes/hatan/partials/product/catalog/product-list.htm */
class __TwigTemplate_668d6fad5561dfedd782e526b5a174d05dbdcef5f81ea4674919d8d16fde3e10 extends \Twig\Template
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
        $tags = array("set" => 3, "if" => 13, "for" => 16, "partial" => 17);
        $filters = array();
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for', 'partial'],
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
        // line 3
        $context["obProductList"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ProductList"] ?? null), "make", [], "method", false, false, true, 3), "sort", [0 => twig_get_attribute($this->env, $this->source, ($context["ProductList"] ?? null), "getSorting", [], "method", false, false, true, 3)], "method", false, false, true, 3), "active", [], "method", false, false, true, 3), "category", [0 => twig_get_attribute($this->env, $this->source, ($context["obActiveCategory"] ?? null), "id", [], "any", false, false, true, 3), 1 => true], "method", false, false, true, 3);
        // line 4
        echo "
";
        // line 6
        $context["iPage"] = twig_get_attribute($this->env, $this->source, ($context["Pagination"] ?? null), "getPageFromRequest", [], "method", false, false, true, 6);
        // line 7
        $context["iCount"] = twig_get_attribute($this->env, $this->source, ($context["obProductList"] ?? null), "count", [], "method", false, false, true, 7);
        // line 8
        $context["iMaxPage"] = twig_get_attribute($this->env, $this->source, ($context["obProductList"] ?? null), "getMaxPage", [0 => ($context["iCount"] ?? null)], "method", false, false, true, 8);
        // line 9
        echo "
";
        // line 11
        $context["arProductList"] = twig_get_attribute($this->env, $this->source, ($context["obProductList"] ?? null), "page", [0 => ($context["iPage"] ?? null), 1 => twig_get_attribute($this->env, $this->source, ($context["Pagination"] ?? null), "getCountPerPage", [], "method", false, false, true, 11)], "method", false, false, true, 11);
        // line 12
        echo "
";
        // line 13
        if ( !twig_test_empty(($context["arProductList"] ?? null))) {
            // line 14
            echo "    ";
            // line 15
            echo "   
        ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["arProductList"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["obProduct"]) {
                // line 17
                echo "            ";
                $context['__cms_partial_params'] = [];
                $context['__cms_partial_params']['obProduct'] = $context["obProduct"]                ;
                echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("product/product-card/product-card"                , $context['__cms_partial_params']                , true                );
                unset($context['__cms_partial_params']);
                // line 18
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['obProduct'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "    
    
    ";
            // line 21
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['iCount'] = ($context["iCount"] ?? null)            ;
            $context['__cms_partial_params']['iPage'] = ($context["iPage"] ?? null)            ;
            $context['__cms_partial_params']['iMaxPage'] = ($context["iMaxPage"] ?? null)            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("pagination/pagination"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
        } else {
            // line 23
            echo "    <div>
        Products not found
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "Z:\\domains\\hatan.loc/themes/hatan/partials/product/catalog/product-list.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 23,  108 => 21,  104 => 19,  98 => 18,  92 => 17,  88 => 16,  85 => 15,  83 => 14,  81 => 13,  78 => 12,  76 => 11,  73 => 9,  71 => 8,  69 => 7,  67 => 6,  64 => 4,  62 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("{##}
{# Get product collection #}
{% set obProductList = ProductList.make().sort(ProductList.getSorting()).active().category(obActiveCategory.id, true) %}

{# Get array with pagination buttons #}
{% set iPage = Pagination.getPageFromRequest() %}
{% set iCount = obProductList.count() %}
{% set iMaxPage = obProductList.getMaxPage(iCount) %}

{# Apply pagination to product collection and get array with product items #}
{% set arProductList = obProductList.page(iPage, Pagination.getCountPerPage()) %}

{% if arProductList is not empty %}
    {# Render product list #}
   
        {% for obProduct in arProductList %}
            {% partial 'product/product-card/product-card' obProduct=obProduct %}
        {% endfor %}
    
    
    {% partial 'pagination/pagination' iCount=iCount iPage=iPage iMaxPage=iMaxPage %}
{% else %}
    <div>
        Products not found
    </div>
{% endif %}", "Z:\\domains\\hatan.loc/themes/hatan/partials/product/catalog/product-list.htm", "");
    }
}
