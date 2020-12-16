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

/* Z:\domains\hatan.loc/themes/hatan/partials/similar-products.htm */
class __TwigTemplate_33f28f360fab31e9071c1bf5febb56b66a0e2c76c129541fe1efe36f29bdcbb1 extends \Twig\Template
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
        $tags = array("set" => 2, "if" => 4, "for" => 22, "partial" => 36);
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
        // line 2
        $context["obProductList"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ProductList"] ?? null), "make", [], "method", false, false, true, 2), "sort", [0 => twig_get_attribute($this->env, $this->source, ($context["ProductList"] ?? null), "getSorting", [], "method", false, false, true, 2)], "method", false, false, true, 2), "active", [], "method", false, false, true, 2), "category", [0 => twig_get_attribute($this->env, $this->source, ($context["obActiveCategory"] ?? null), "id", [], "any", false, false, true, 2), 1 => true], "method", false, false, true, 2);
        // line 3
        $context["arProductList"] = twig_get_attribute($this->env, $this->source, ($context["obProductList"] ?? null), "page", [0 => ($context["iPage"] ?? null), 1 => twig_get_attribute($this->env, $this->source, ($context["Pagination"] ?? null), "getCountPerPage", [], "method", false, false, true, 3)], "method", false, false, true, 3);
        // line 4
        if ( !twig_test_empty(($context["arProductList"] ?? null))) {
            // line 5
            echo "    ";
            // line 6
            echo "
<div class=\"section\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col d-flex justify-content-center\">
                <div class=\"title\">
                    <h2>Похожие товары</h2>
                </div>\t\t\t\t\t
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col\">
                <div id=\"carousel-similar-product\" class=\"carousel slide products\">
                    
                    <div class=\"carousel-inner\">

\t\t\t\t\t\t";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["arProductList"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["key"] => $context["obProduct"]) {
                // line 23
                echo "\t\t\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, true, 23)) {
                    // line 24
                    echo "\t\t\t\t\t\t\t\t<div class=\"carousel-item active\" >
\t\t\t\t\t\t\t\t\t<div class=\"product-wrapper\">
\t\t\t\t\t\t\t";
                }
                // line 27
                echo "\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 27) == 5)) {
                    // line 28
                    echo "\t\t\t\t\t\t\t\t<div class=\"carousel-item \" >
\t\t\t\t\t\t\t\t\t<div class=\"product-wrapper\">
\t\t\t\t\t\t\t";
                }
                // line 31
                echo "\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 31) == 9)) {
                    // line 32
                    echo "\t\t\t\t\t\t\t\t<div class=\"carousel-item\" >
\t\t\t\t\t\t\t\t\t<div class=\"product-wrapper\">
\t\t\t\t\t\t\t";
                }
                // line 35
                echo "
\t\t\t\t\t\t\t\t ";
                // line 36
                $context['__cms_partial_params'] = [];
                $context['__cms_partial_params']['obProduct'] = $context["obProduct"]                ;
                echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("product/product-card/product-card"                , $context['__cms_partial_params']                , true                );
                unset($context['__cms_partial_params']);
                // line 37
                echo "
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
                // line 39
                if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 39) == 4)) {
                    // line 40
                    echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                }
                // line 43
                echo "\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 43) == 8)) {
                    // line 44
                    echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                }
                // line 47
                echo "\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 47) == 12)) {
                    // line 48
                    echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                }
                // line 51
                echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['obProduct'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "                    </div>
                    <a class=\"carousel-control-prev\" href=\"#carousel-similar-product\" role=\"button\" data-slide=\"prev\">
                          <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                    </a>
                    <a class=\"carousel-control-next\" href=\"#carousel-similar-product\" role=\"button\" data-slide=\"next\">
                          <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                    </a>
                  </div>
            </div>
        </div>
    </div>

</div>
";
        }
    }

    public function getTemplateName()
    {
        return "Z:\\domains\\hatan.loc/themes/hatan/partials/similar-products.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 54,  164 => 51,  159 => 48,  156 => 47,  151 => 44,  148 => 43,  143 => 40,  141 => 39,  137 => 37,  132 => 36,  129 => 35,  124 => 32,  121 => 31,  116 => 28,  113 => 27,  108 => 24,  105 => 23,  88 => 22,  70 => 6,  68 => 5,  66 => 4,  64 => 3,  62 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{##}
{% set obProductList = ProductList.make().sort(ProductList.getSorting()).active().category(obActiveCategory.id, true) %}
{% set arProductList = obProductList.page(iPage, Pagination.getCountPerPage()) %}
{% if arProductList is not empty %}
    {# Render product list #}

<div class=\"section\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col d-flex justify-content-center\">
                <div class=\"title\">
                    <h2>Похожие товары</h2>
                </div>\t\t\t\t\t
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col\">
                <div id=\"carousel-similar-product\" class=\"carousel slide products\">
                    
                    <div class=\"carousel-inner\">

\t\t\t\t\t\t{% for key, obProduct in arProductList %}
\t\t\t\t\t\t\t{% if loop.first %}
\t\t\t\t\t\t\t\t<div class=\"carousel-item active\" >
\t\t\t\t\t\t\t\t\t<div class=\"product-wrapper\">
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t{% if loop.index == 5 %}
\t\t\t\t\t\t\t\t<div class=\"carousel-item \" >
\t\t\t\t\t\t\t\t\t<div class=\"product-wrapper\">
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t{% if loop.index == 9 %}
\t\t\t\t\t\t\t\t<div class=\"carousel-item\" >
\t\t\t\t\t\t\t\t\t<div class=\"product-wrapper\">
\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t\t\t {% partial 'product/product-card/product-card' obProduct=obProduct %}

\t\t\t\t\t\t\t
\t\t\t\t\t\t\t{% if loop.index == 4 %}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t{% if loop.index == 8 %}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t{% if loop.index == 12 %}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t{% endfor %}
                    </div>
                    <a class=\"carousel-control-prev\" href=\"#carousel-similar-product\" role=\"button\" data-slide=\"prev\">
                          <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                    </a>
                    <a class=\"carousel-control-next\" href=\"#carousel-similar-product\" role=\"button\" data-slide=\"next\">
                          <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                    </a>
                  </div>
            </div>
        </div>
    </div>

</div>
{% endif %}", "Z:\\domains\\hatan.loc/themes/hatan/partials/similar-products.htm", "");
    }
}
