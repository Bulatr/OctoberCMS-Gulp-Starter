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

/* Z:\domains\hatan.loc/themes/hatan/partials/product/product-card/mini-card.htm */
class __TwigTemplate_a726e78bb0e31194a19b52c1b18652815fde374c57bbf57c184580f8e06f644f extends \Twig\Template
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
        $tags = array("set" => 3, "if" => 11, "for" => 56);
        $filters = array("escape" => 6, "theme" => 36);
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
        <div class=\"collected-product__image-wrapper-count-wrap-collected\">
            <div class=\"quantity-wrapper collected-product__image-wrapper-count-wrap-collected\" id=\"product-";
        // line 18
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "id", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
        echo "\">
                <button type=\"button\" 
                    class=\"quantity-down _shopaholic-cart-decrease-quantity\"></button>
                <input type=\"number\" 
                    class=\"quantity _shopaholic-cart-quantity\" 
                    name=\"quantity\" 
                    id=\"quantity\" 
                    max=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "quantity", [], "any", false, false, true, 25), 25, $this->source), "html", null, true);
        echo "\" 
                    min=\"1\" 
                    value=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obCartPosition"] ?? null), "quantity", [], "any", false, false, true, 27), 27, $this->source), "html", null, true);
        echo "\"
                    step=\"1\">
                <button type=\"button\" 
                    class=\"quantity-up _shopaholic-cart-increase-quantity\"></button>
            </div>
        </div>
    </div>
    <div class=\"collected-product__content\">
        <div class=\"collected-product__content-delete-product _shopaholic-cart-remove\" aria-label=\"Remove from cart\">
            <img src=\"";
        // line 36
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/small_close.svg");
        echo "\" alt=\"\">
        </div>
        <div class=\"collected-product__content-pr-title\">
            ";
        // line 39
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "name", [], "any", false, false, true, 39), 39, $this->source), "html", null, true);
        echo "
        </div>
        <div class=\"collected-product__content-pr-price-wrap\">
            ";
        // line 42
        if ((twig_get_attribute($this->env, $this->source, ($context["obOfferItem"] ?? null), "price_value", [], "any", false, false, true, 42) < twig_get_attribute($this->env, $this->source, ($context["obOfferItem"] ?? null), "old_price_value", [], "any", false, false, true, 42))) {
            // line 43
            echo "                <div class=\"old-price\" data-old-price-value = \"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obOfferItem"] ?? null), "old_price_value", [], "any", false, false, true, 43), 43, $this->source), "html", null, true);
            echo "\">
                    ";
            // line 44
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obOfferItem"] ?? null), "old_price", [], "any", false, false, true, 44), 44, $this->source), "html", null, true);
            echo " 
                    <span class=\"rub\" itemprop=\"priceCurrency\" content=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obOfferItem"] ?? null), "currency_code", [], "any", false, false, true, 45), 45, $this->source), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obOfferItem"] ?? null), "currency", [], "any", false, false, true, 45), 45, $this->source), "html", null, true);
            echo "</span>
                </div>
            ";
        }
        // line 48
        echo "            <div class=\"today-price\" data-price-value=\"";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obOfferItem"] ?? null), "price_value", [], "any", false, false, true, 48), 48, $this->source), "html", null, true);
        echo "\">
                ";
        // line 49
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obOfferItem"] ?? null), "price", [], "any", false, false, true, 49), 49, $this->source), "html", null, true);
        echo " <span class=\"rub\" itemprop=\"priceCurrency\" content=\"";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obOfferItem"] ?? null), "currency_code", [], "any", false, false, true, 49), 49, $this->source), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obOfferItem"] ?? null), "currency", [], "any", false, false, true, 49), 49, $this->source), "html", null, true);
        echo "</span>
            </div>
        </div>
        ";
        // line 53
        echo "        ";
        $context["obPropertyList"] = twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "property", [], "any", false, false, true, 53);
        // line 54
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["obPropertyList"] ?? null), "isNotEmpty", [], "method", false, false, true, 54)) {
            // line 55
            echo "        <div class=\"collected-product__content-options\">
            ";
            // line 56
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["obPropertyList"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["obProperty"]) {
                if (twig_get_attribute($this->env, $this->source, $context["obProperty"], "hasValue", [], "method", false, false, true, 56)) {
                    // line 57
                    echo "            <div class=\"option__item\">
                <div class=\"option__item-label-option\" data-property-code=\"";
                    // line 58
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["obProperty"], "code", [], "any", false, false, true, 58), 58, $this->source), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["obProperty"], "name", [], "any", false, false, true, 58), 58, $this->source), "html", null, true);
                    echo "</div>
                <div class=\"option__value-option\" data-property-value=\"";
                    // line 59
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["obProperty"], "property_value", [], "any", false, false, true, 59), "getValueString", [], "method", false, false, true, 59), 59, $this->source), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["obProperty"], "property_value", [], "any", false, false, true, 59), "getValueString", [], "method", false, false, true, 59), 59, $this->source), "html", null, true);
                    echo "</div>
            </div>
            ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['obProperty'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "            
        </div>
        ";
        }
        // line 64
        echo "    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "Z:\\domains\\hatan.loc/themes/hatan/partials/product/product-card/mini-card.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 64,  208 => 61,  196 => 59,  190 => 58,  187 => 57,  182 => 56,  179 => 55,  176 => 54,  173 => 53,  163 => 49,  158 => 48,  150 => 45,  146 => 44,  141 => 43,  139 => 42,  133 => 39,  127 => 36,  115 => 27,  110 => 25,  100 => 18,  96 => 16,  90 => 14,  84 => 12,  82 => 11,  75 => 7,  69 => 6,  66 => 5,  64 => 4,  62 => 3,);
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
        <div class=\"collected-product__image-wrapper-count-wrap-collected\">
            <div class=\"quantity-wrapper collected-product__image-wrapper-count-wrap-collected\" id=\"product-{{obProduct.id}}\">
                <button type=\"button\" 
                    class=\"quantity-down _shopaholic-cart-decrease-quantity\"></button>
                <input type=\"number\" 
                    class=\"quantity _shopaholic-cart-quantity\" 
                    name=\"quantity\" 
                    id=\"quantity\" 
                    max=\"{{ obOffer.quantity }}\" 
                    min=\"1\" 
                    value=\"{{ obCartPosition.quantity }}\"
                    step=\"1\">
                <button type=\"button\" 
                    class=\"quantity-up _shopaholic-cart-increase-quantity\"></button>
            </div>
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
        </div>
        {% endif %}
    </div>
</div>", "Z:\\domains\\hatan.loc/themes/hatan/partials/product/product-card/mini-card.htm", "");
    }
}
