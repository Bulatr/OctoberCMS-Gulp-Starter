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

/* Z:\domains\hatan.loc/themes/hatan/partials/product/product-card/product-card.htm */
class __TwigTemplate_7ccf430f15b52e62e62667f0e4a293c8e02e364e381322b5c616d177d7dbcaf0 extends \Twig\Template
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
        $tags = array("set" => 4, "if" => 9);
        $filters = array("escape" => 6, "theme" => 18);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape', 'theme'],
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
        // line 4
        $context["obOffer"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "offer", [], "any", false, false, true, 4), "sort", [0 => "price|asc"], "method", false, false, true, 4), "first", [], "method", false, false, true, 4);
        // line 5
        echo "
<div class=\"product-card _shopaholic-product-wrapper\" data-product-id=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "id", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
        echo "\">
    <div class=\"card-img-wrapper\">
        <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "getPageUrl", [0 => "catalog"], "method", false, false, true, 8), 8, $this->source), "html", null, true);
        echo "\">
            ";
        // line 9
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "preview_image", [], "any", false, false, true, 9))) {
            // line 10
            echo "                <img
                class=\"card-img-top\"
                src=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "preview_image", [], "any", false, false, true, 12), "path", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
            echo "\"
                itemprop=\"image\"
                alt=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "preview_image", [], "any", false, false, true, 14), "description", [], "any", false, false, true, 14), 14, $this->source), "html", null, true);
            echo "\"
                title=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "preview_image", [], "any", false, false, true, 15), "title", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
            echo "\"
                >
            ";
        } else {
            // line 18
            echo "                <img src=\"";
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/dest/3/37488640299.jpg");
            echo "\" alt=\"\" class=\"card-img-top\">
            ";
        }
        // line 20
        echo "        </a>\t\t\t\t\t\t\t\t\t\t
    </div>
    <div class=\"card-content-wrapper\">
        <div class=\"product-title\">
            <a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "getPageUrl", [0 => "catalog"], "method", false, false, true, 24), 24, $this->source), "html", null, true);
        echo "\">
                <h4>";
        // line 25
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "name", [], "any", false, false, true, 25), 25, $this->source), "html", null, true);
        echo "</h4>
            </a>\t\t\t\t\t\t\t\t\t\t\t
        </div>
        <div class=\"price\" data-price=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "price_value", [], "any", false, false, true, 28), 28, $this->source), "html", null, true);
        echo "\">
            ";
        // line 29
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "price", [], "any", false, false, true, 29), 29, $this->source), "html", null, true);
        echo "<span class=\"rub\"><img src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/Rub.svg");
        echo "\" alt=\"\"></span>
        </div>
        <div class=\"raiting-wrapper\">
            <div class=\"star-wrapper\">
                <a href=\"#\">
                    <div class=\"star\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                    </div>
                </a>
                <a href=\"#\">
                    <div class=\"star\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                    </div>
                </a>
                <a href=\"#\">
                    <div class=\"star\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                    </div>
                </a>
                <a href=\"#\">
                    <div class=\"star\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                    </div>
                </a>
                <a href=\"#\">
                    <div class=\"star none\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                    </div>
                </a>
            </div>
            <div class=\"star-count\">
                (8)
            </div>
        </div>
    </div>\t
    <div class=\"cart\">
        <img src=\"";
        // line 60
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/Cart-icon.svg");
        echo "\" alt=\"\">\t\t\t\t\t\t\t\t\t\t
    </div>\t
    <div class=\"badje\">
        <div class=\"content\">
            15%
        </div>
    </div>\t\t\t\t\t\t\t
</div>";
    }

    public function getTemplateName()
    {
        return "Z:\\domains\\hatan.loc/themes/hatan/partials/product/product-card/product-card.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 60,  123 => 29,  119 => 28,  113 => 25,  109 => 24,  103 => 20,  97 => 18,  91 => 15,  87 => 14,  82 => 12,  78 => 10,  76 => 9,  72 => 8,  67 => 6,  64 => 5,  62 => 4,);
    }

    public function getSourceContext()
    {
        return new Source("{##}
{# @var obProduct \\Lovata\\Shopaholic\\Classes\\Item\\ProductItem #}
{# Get first offer object #}
{% set obOffer = obProduct.offer.sort('price|asc').first() %}

<div class=\"product-card _shopaholic-product-wrapper\" data-product-id=\"{{ obProduct.id }}\">
    <div class=\"card-img-wrapper\">
        <a href=\"{{ obProduct.getPageUrl('catalog') }}\">
            {% if obProduct.preview_image is not empty %}
                <img
                class=\"card-img-top\"
                src=\"{{ obProduct.preview_image.path }}\"
                itemprop=\"image\"
                alt=\"{{ obProduct.preview_image.description }}\"
                title=\"{{ obProduct.preview_image.title }}\"
                >
            {% else %}
                <img src=\"{{ 'assets/images/dest/3/37488640299.jpg' | theme }}\" alt=\"\" class=\"card-img-top\">
            {% endif %}
        </a>\t\t\t\t\t\t\t\t\t\t
    </div>
    <div class=\"card-content-wrapper\">
        <div class=\"product-title\">
            <a href=\"{{ obProduct.getPageUrl('catalog') }}\">
                <h4>{{ obProduct.name }}</h4>
            </a>\t\t\t\t\t\t\t\t\t\t\t
        </div>
        <div class=\"price\" data-price=\"{{obOffer.price_value}}\">
            {{obOffer.price}}<span class=\"rub\"><img src=\"{{ 'assets/images/Rub.svg' | theme }}\" alt=\"\"></span>
        </div>
        <div class=\"raiting-wrapper\">
            <div class=\"star-wrapper\">
                <a href=\"#\">
                    <div class=\"star\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                    </div>
                </a>
                <a href=\"#\">
                    <div class=\"star\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                    </div>
                </a>
                <a href=\"#\">
                    <div class=\"star\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                    </div>
                </a>
                <a href=\"#\">
                    <div class=\"star\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                    </div>
                </a>
                <a href=\"#\">
                    <div class=\"star none\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                    </div>
                </a>
            </div>
            <div class=\"star-count\">
                (8)
            </div>
        </div>
    </div>\t
    <div class=\"cart\">
        <img src=\"{{ 'assets/images/Cart-icon.svg' | theme }}\" alt=\"\">\t\t\t\t\t\t\t\t\t\t
    </div>\t
    <div class=\"badje\">
        <div class=\"content\">
            15%
        </div>
    </div>\t\t\t\t\t\t\t
</div>", "Z:\\domains\\hatan.loc/themes/hatan/partials/product/product-card/product-card.htm", "");
    }
}
