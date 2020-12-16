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

/* Z:\domains\hatan.loc/themes/hatan/partials/product/product-card/checkout-card.htm */
class __TwigTemplate_298d3d3320558cb9a67048ea9e679821b429639dcba8ebd8c45d6a49b4625dca extends \Twig\Template
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
        $tags = array("set" => 3, "if" => 11, "for" => 40);
        $filters = array("escape" => 6, "theme" => 20);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
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
        // line 3
        $context["obOffer"] = twig_get_attribute($this->env, $this->source, ($context["obCartPosition"] ?? null), "item", [], "any", false, false, true, 3);
        // line 4
        $context["obProduct"] = twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "product", [], "any", false, false, true, 4);
        // line 5
        echo "
<div class=\"collected-product _shopaholic-product-wrapper\" data-product-id=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "id", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
        echo "\" data-position-id=\"";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obCartPosition"] ?? null), "id", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
        echo "\">
    <input type=\"hidden\" name=\"offer_id\" id=\"offer_id\" value=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "id", [], "any", false, false, true, 7), 7, $this->source), "html", null, true);
        echo "\">
    <div class=\"collected-product__image-wrapper\">
        <div class=\"collected-product__image-wrapper-image\">
        
            ";
        // line 11
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "preview_image", [], "any", false, false, true, 11))) {
            // line 12
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "preview_image", [], "any", false, false, true, 12), "getPath", [], "method", false, false, true, 12), 12, $this->source), "html", null, true);
            echo "\" alt=\"\">
                ";
        } else {
            // line 14
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "preview_image", [], "any", false, false, true, 14), "getPath", [], "method", false, false, true, 14), 14, $this->source), "html", null, true);
            echo "\" alt=\"\">
            ";
        }
        // line 16
        echo "        </div>        
    </div>
    <div class=\"collected-product__content\">
        <div class=\"collected-product__content-delete-product _shopaholic-cart-remove\" aria-label=\"Remove from cart\">
            <img src=\"";
        // line 20
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/small_close.svg");
        echo "\" alt=\"\">
        </div>
        <div class=\"collected-product__content-pr-title\">
            ";
        // line 23
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "name", [], "any", false, false, true, 23), 23, $this->source), "html", null, true);
        echo "
        </div>
        <div class=\"collected-product__content-pr-price-wrap\">
            ";
        // line 26
        if ((twig_get_attribute($this->env, $this->source, ($context["obOfferItem"] ?? null), "price_value", [], "any", false, false, true, 26) < twig_get_attribute($this->env, $this->source, ($context["obOfferItem"] ?? null), "old_price_value", [], "any", false, false, true, 26))) {
            // line 27
            echo "                <div class=\"old-price\" data-old-price-value = \"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obOfferItem"] ?? null), "old_price_value", [], "any", false, false, true, 27), 27, $this->source), "html", null, true);
            echo "\">
                    ";
            // line 28
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obOfferItem"] ?? null), "old_price", [], "any", false, false, true, 28), 28, $this->source), "html", null, true);
            echo " 
                    <span class=\"rub\" itemprop=\"priceCurrency\" content=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obOfferItem"] ?? null), "currency_code", [], "any", false, false, true, 29), 29, $this->source), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obOfferItem"] ?? null), "currency", [], "any", false, false, true, 29), 29, $this->source), "html", null, true);
            echo "</span>
                </div>
            ";
        }
        // line 32
        echo "            <div class=\"today-price\" data-price-value=\"";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obOfferItem"] ?? null), "price_value", [], "any", false, false, true, 32), 32, $this->source), "html", null, true);
        echo "\">
                ";
        // line 33
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obOfferItem"] ?? null), "price", [], "any", false, false, true, 33), 33, $this->source), "html", null, true);
        echo " <span class=\"rub\" itemprop=\"priceCurrency\" content=\"";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obOfferItem"] ?? null), "currency_code", [], "any", false, false, true, 33), 33, $this->source), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obOfferItem"] ?? null), "currency", [], "any", false, false, true, 33), 33, $this->source), "html", null, true);
        echo "</span>
            </div>
        </div>
        ";
        // line 37
        echo "        ";
        $context["obPropertyList"] = twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "property", [], "any", false, false, true, 37);
        // line 38
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["obPropertyList"] ?? null), "isNotEmpty", [], "method", false, false, true, 38)) {
            // line 39
            echo "        <div class=\"collected-product__content-options\">
            ";
            // line 40
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["obPropertyList"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["obProperty"]) {
                if (twig_get_attribute($this->env, $this->source, $context["obProperty"], "hasValue", [], "method", false, false, true, 40)) {
                    // line 41
                    echo "            <div class=\"option__item\">
                <div class=\"option__item-label-option\" data-property-code=\"";
                    // line 42
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["obProperty"], "code", [], "any", false, false, true, 42), 42, $this->source), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["obProperty"], "name", [], "any", false, false, true, 42), 42, $this->source), "html", null, true);
                    echo "</div>
                <div class=\"option__value-option\" data-property-value=\"";
                    // line 43
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["obProperty"], "property_value", [], "any", false, false, true, 43), "getValueString", [], "method", false, false, true, 43), 43, $this->source), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["obProperty"], "property_value", [], "any", false, false, true, 43), "getValueString", [], "method", false, false, true, 43), 43, $this->source), "html", null, true);
                    echo "</div>
            </div>
            ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['obProperty'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "  
            <div class=\"option__item\">
                <div class=\"option__item-label-option\">Количество</div>
                <div class=\"option__value-option\" data-offer-quantity=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obCartPosition"] ?? null), "quantity", [], "any", false, false, true, 48), 48, $this->source), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obCartPosition"] ?? null), "quantity", [], "any", false, false, true, 48), 48, $this->source), "html", null, true);
            echo "</div>
            </div>
        </div>
        ";
        }
        // line 52
        echo "    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "Z:\\domains\\hatan.loc/themes/hatan/partials/product/product-card/checkout-card.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 52,  188 => 48,  183 => 45,  171 => 43,  165 => 42,  162 => 41,  157 => 40,  154 => 39,  151 => 38,  148 => 37,  138 => 33,  133 => 32,  125 => 29,  121 => 28,  116 => 27,  114 => 26,  108 => 23,  102 => 20,  96 => 16,  90 => 14,  84 => 12,  82 => 11,  75 => 7,  69 => 6,  66 => 5,  64 => 4,  62 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("{##}
{# Get offer and product objects #}
{% set obOffer = obCartPosition.item %}
{% set obProduct = obOffer.product %}

<div class=\"collected-product _shopaholic-product-wrapper\" data-product-id=\"{{ obProduct.id }}\" data-position-id=\"{{ obCartPosition.id }}\">
    <input type=\"hidden\" name=\"offer_id\" id=\"offer_id\" value=\"{{obOffer.id}}\">
    <div class=\"collected-product__image-wrapper\">
        <div class=\"collected-product__image-wrapper-image\">
        
            {% if obOffer.preview_image is not empty %}
                <img src=\"{{obOffer.preview_image.getPath() }}\" alt=\"\">
                {% else %}
                <img src=\"{{obProduct.preview_image.getPath() }}\" alt=\"\">
            {% endif %}
        </div>        
    </div>
    <div class=\"collected-product__content\">
        <div class=\"collected-product__content-delete-product _shopaholic-cart-remove\" aria-label=\"Remove from cart\">
            <img src=\"{{ 'assets/images/small_close.svg' | theme }}\" alt=\"\">
        </div>
        <div class=\"collected-product__content-pr-title\">
            {{obProduct.name}}
        </div>
        <div class=\"collected-product__content-pr-price-wrap\">
            {% if obOfferItem.price_value < obOfferItem.old_price_value %}
                <div class=\"old-price\" data-old-price-value = \"{{ obOfferItem.old_price_value }}\">
                    {{ obOfferItem.old_price }} 
                    <span class=\"rub\" itemprop=\"priceCurrency\" content=\"{{ obOfferItem.currency_code }}\">{{ obOfferItem.currency }}</span>
                </div>
            {% endif %}
            <div class=\"today-price\" data-price-value=\"{{ obOfferItem.price_value }}\">
                {{ obOfferItem.price }} <span class=\"rub\" itemprop=\"priceCurrency\" content=\"{{ obOfferItem.currency_code }}\">{{ obOfferItem.currency }}</span>
            </div>
        </div>
        {# Get propert list #}
        {% set obPropertyList = obOffer.property %}
        {% if obPropertyList.isNotEmpty() %}
        <div class=\"collected-product__content-options\">
            {% for obProperty in obPropertyList if obProperty.hasValue() %}
            <div class=\"option__item\">
                <div class=\"option__item-label-option\" data-property-code=\"{{obProperty.code}}\">{{ obProperty.name }}</div>
                <div class=\"option__value-option\" data-property-value=\"{{obProperty.property_value.getValueString()}}\">{{ obProperty.property_value.getValueString() }}</div>
            </div>
            {% endfor %}  
            <div class=\"option__item\">
                <div class=\"option__item-label-option\">Количество</div>
                <div class=\"option__value-option\" data-offer-quantity=\"{{obCartPosition.quantity}}\">{{ obCartPosition.quantity }}</div>
            </div>
        </div>
        {% endif %}
    </div>
</div>", "Z:\\domains\\hatan.loc/themes/hatan/partials/product/product-card/checkout-card.htm", "");
    }
}
