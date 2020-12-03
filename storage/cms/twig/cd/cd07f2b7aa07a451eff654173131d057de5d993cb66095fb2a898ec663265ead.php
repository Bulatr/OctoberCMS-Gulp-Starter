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
        $tags = array("if" => 8, "for" => 11, "partial" => 12);
        $filters = array();
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for', 'partial'],
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
        echo "

";
        // line 6
        echo "

";
        // line 8
        if ( !twig_test_empty(($context["arProductList"] ?? null))) {
            // line 9
            echo "    ";
            // line 10
            echo "    
        ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["arProductList"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["obProduct"]) {
                // line 12
                echo "            ";
                $context['__cms_partial_params'] = [];
                $context['__cms_partial_params']['obProduct'] = $context["obProduct"]                ;
                echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("product/product-card/product-card"                , $context['__cms_partial_params']                , true                );
                unset($context['__cms_partial_params']);
                // line 13
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['obProduct'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "        
    
    ";
            // line 15
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['iCount'] = ($context["iCount"] ?? null)            ;
            $context['__cms_partial_params']['iPage'] = ($context["iPage"] ?? null)            ;
            $context['__cms_partial_params']['iMaxPage'] = ($context["iMaxPage"] ?? null)            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("pagination/pagination"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
        } else {
            // line 17
            echo "    <div>
        Товаров не найдено
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
        return array (  104 => 17,  96 => 15,  87 => 13,  81 => 12,  77 => 11,  74 => 10,  72 => 9,  70 => 8,  66 => 6,  62 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("{##}
{# Get product collection #}


{# Get array with pagination buttons #}


{% if arProductList is not empty %}
    {# Render product list #}
    
        {% for obProduct in arProductList %}
            {% partial 'product/product-card/product-card' obProduct=obProduct %}
        {% endfor %}        
    
    {% partial 'pagination/pagination' iCount=iCount iPage=iPage iMaxPage=iMaxPage %}
{% else %}
    <div>
        Товаров не найдено
    </div>
{% endif %}", "Z:\\domains\\hatan.loc/themes/hatan/partials/product/catalog/product-list.htm", "");
    }
}
