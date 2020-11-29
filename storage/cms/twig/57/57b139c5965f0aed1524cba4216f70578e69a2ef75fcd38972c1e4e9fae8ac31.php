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

/* C:\OSPanel\domains\hatan.loc/themes/hatan/partials/product/catalog/product-list.htm */
class __TwigTemplate_45477d61899c281ebfbba1cb79ac5db4fdf1820588b64ab4918f6d3f583e1339 extends \Twig\Template
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
        $tags = array("set" => 3, "if" => 12, "for" => 15, "partial" => 16);
        $filters = array("var_dump" => 19);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for', 'partial'],
                ['var_dump'],
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
        echo "
";
        // line 10
        $context["arProductList"] = twig_get_attribute($this->env, $this->source, ($context["obProductList"] ?? null), "page", [0 => ($context["iPage"] ?? null), 1 => twig_get_attribute($this->env, $this->source, ($context["Pagination"] ?? null), "getCountPerPage", [], "method", false, false, true, 10)], "method", false, false, true, 10);
        // line 11
        echo "
";
        // line 12
        if ( !twig_test_empty(($context["arProductList"] ?? null))) {
            // line 13
            echo "    ";
            // line 14
            echo "   
        ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["arProductList"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["obProduct"]) {
                // line 16
                echo "            ";
                $context['__cms_partial_params'] = [];
                $context['__cms_partial_params']['obProduct'] = $context["obProduct"]                ;
                echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("product/product-card/product-card"                , $context['__cms_partial_params']                , true                );
                unset($context['__cms_partial_params']);
                // line 17
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['obProduct'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "    
    ";
            // line 19
            echo call_user_func_array($this->env->getFilter('var_dump')->getCallable(), [$this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obProductList"] ?? null), "count", [], "method", false, false, true, 19), 19, $this->source)]);
            echo "
    ";
            // line 20
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['iCount'] = ($context["iCount"] ?? null)            ;
            $context['__cms_partial_params']['iPage'] = ($context["iPage"] ?? null)            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("pagination/pagination"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
        } else {
            // line 22
            echo "    <div>
        Products not found
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "C:\\OSPanel\\domains\\hatan.loc/themes/hatan/partials/product/catalog/product-list.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 22,  109 => 20,  105 => 19,  102 => 18,  96 => 17,  90 => 16,  86 => 15,  83 => 14,  81 => 13,  79 => 12,  76 => 11,  74 => 10,  71 => 8,  69 => 7,  67 => 6,  64 => 4,  62 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("{##}
{# Get product collection #}
{% set obProductList = ProductList.make().sort(ProductList.getSorting()).active().category(obActiveCategory.id, true) %}

{# Get array with pagination buttons #}
{% set iPage = Pagination.getPageFromRequest() %}
{% set iCount = obProductList.count() %}

{# Apply pagination to product collection and get array with product items #}
{% set arProductList = obProductList.page(iPage, Pagination.getCountPerPage()) %}

{% if arProductList is not empty %}
    {# Render product list #}
   
        {% for obProduct in arProductList %}
            {% partial 'product/product-card/product-card' obProduct=obProduct %}
        {% endfor %}
    
    {{obProductList.count()|var_dump}}
    {% partial 'pagination/pagination' iCount=iCount iPage=iPage %}
{% else %}
    <div>
        Products not found
    </div>
{% endif %}", "C:\\OSPanel\\domains\\hatan.loc/themes/hatan/partials/product/catalog/product-list.htm", "");
    }
}
