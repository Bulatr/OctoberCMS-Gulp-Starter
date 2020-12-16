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

/* Z:\domains\hatan.loc/themes/hatan/partials/checkout/block-order-summary.htm */
class __TwigTemplate_1663bfea8b36c4214bc369501ba1e1f07ea1659d75f918237a4a3fe04e2717a6 extends \Twig\Template
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
        $tags = array("set" => 2);
        $filters = array("escape" => 11);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set'],
                ['escape'],
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
        $context["obCartPositionList"] = twig_get_attribute($this->env, $this->source, ($context["Cart"] ?? null), "get", [], "method", false, false, true, 2);
        // line 3
        $context["obCartPositionListCount"] = twig_get_attribute($this->env, $this->source, ($context["obCartPositionList"] ?? null), "count", [], "method", false, false, true, 3);
        // line 4
        $context["obPriceData"] = twig_get_attribute($this->env, $this->source, ($context["Cart"] ?? null), "getTotalPriceData", [], "method", false, false, true, 4);
        // line 5
        echo "
<div class=\"block-order-summary small nobg\">
    <h3>Обзор заказа</h3>
    <div class=\"prise-summary\">
        <div class=\"prise-summary__item\">
            <div class=\"prise-summary-item__label\">Товаров</div>
            <div class=\"prise-summary-item__value\">";
        // line 11
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obCartPositionList"] ?? null), "getTotalQuantity", [], "method", false, false, true, 11), 11, $this->source), "html", null, true);
        echo " шт.</div>
        </div>
        <div class=\"prise-summary__item\">
            <div class=\"prise-summary-item__label\">Сумма с НДС</div>
            <div class=\"prise-summary-item__value\">
                ";
        // line 16
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obPriceData"] ?? null), "price_with_tax", [], "any", false, false, true, 16), 16, $this->source), "html", null, true);
        echo "
                <span class=\"rub\" itemprop=\"priceCurrency\" content=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obCartPositionList"] ?? null), "getCurrencyCode", [], "method", false, false, true, 17), 17, $this->source), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obCartPositionList"] ?? null), "getCurrency", [], "method", false, false, true, 17), 17, $this->source), "html", null, true);
        echo "</span>
            </div>
        </div>
        <div class=\"prise-summary__item\">
            <div class=\"prise-summary-item__label\">НДС 20%</div>
            <div class=\"prise-summary-item__value\">
                ";
        // line 23
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obPriceData"] ?? null), "tax_price", [], "any", false, false, true, 23), 23, $this->source), "html", null, true);
        echo "
                <span class=\"rub\" itemprop=\"priceCurrency\" content=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obCartPositionList"] ?? null), "getCurrencyCode", [], "method", false, false, true, 24), 24, $this->source), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obCartPositionList"] ?? null), "getCurrency", [], "method", false, false, true, 24), 24, $this->source), "html", null, true);
        echo "</span>
            </div>
        </div>
        <div class=\"prise-summary__item\">
            <div class=\"prise-summary-item__label\">Доставка</div>
            <div class=\"prise-summary-item__value\">
                <div class='price-summary__shiping' >
                    0
                </div>
                <span class=\"rub\" itemprop=\"priceCurrency\" content=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obCartPositionList"] ?? null), "getCurrencyCode", [], "method", false, false, true, 33), 33, $this->source), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obCartPositionList"] ?? null), "getCurrency", [], "method", false, false, true, 33), 33, $this->source), "html", null, true);
        echo "</span>
            </div>
        </div>
        <div class=\"divider light-var\"></div>
        <div class=\"prise-summary__item\">
            <div class=\"prise-summary-item__label\">Итого стоимость</div>
            <div class=\"prise-summary-item__value\" data-Position-Total-Price=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obCartPositionList"] ?? null), "getTotalPriceValue", [], "method", false, false, true, 39), 39, $this->source), "html", null, true);
        echo "\">
                <input type=\"hidden\" id=\"total-price-value-order\" value=\"\">
                <div class='price-total__value' >
                    ";
        // line 42
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obCartPositionList"] ?? null), "getTotalPriceValue", [], "method", false, false, true, 42), 42, $this->source), "html", null, true);
        echo "
                </div>                 
                <span class=\"rub\" itemprop=\"priceCurrency\" content=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obCartPositionList"] ?? null), "getCurrencyCode", [], "method", false, false, true, 44), 44, $this->source), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obCartPositionList"] ?? null), "getCurrency", [], "method", false, false, true, 44), 44, $this->source), "html", null, true);
        echo "</span>
            </div>
        </div>
    </div>\t
</div>";
    }

    public function getTemplateName()
    {
        return "Z:\\domains\\hatan.loc/themes/hatan/partials/checkout/block-order-summary.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 44,  134 => 42,  128 => 39,  117 => 33,  103 => 24,  99 => 23,  88 => 17,  84 => 16,  76 => 11,  68 => 5,  66 => 4,  64 => 3,  62 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{##}
{% set obCartPositionList = Cart.get() %}
{% set obCartPositionListCount = obCartPositionList.count() %}
{% set obPriceData = Cart.getTotalPriceData() %}

<div class=\"block-order-summary small nobg\">
    <h3>Обзор заказа</h3>
    <div class=\"prise-summary\">
        <div class=\"prise-summary__item\">
            <div class=\"prise-summary-item__label\">Товаров</div>
            <div class=\"prise-summary-item__value\">{{ obCartPositionList.getTotalQuantity() }} шт.</div>
        </div>
        <div class=\"prise-summary__item\">
            <div class=\"prise-summary-item__label\">Сумма с НДС</div>
            <div class=\"prise-summary-item__value\">
                {{ obPriceData.price_with_tax }}
                <span class=\"rub\" itemprop=\"priceCurrency\" content=\"{{ obCartPositionList.getCurrencyCode() }}\">{{ obCartPositionList.getCurrency() }}</span>
            </div>
        </div>
        <div class=\"prise-summary__item\">
            <div class=\"prise-summary-item__label\">НДС 20%</div>
            <div class=\"prise-summary-item__value\">
                {{ obPriceData.tax_price }}
                <span class=\"rub\" itemprop=\"priceCurrency\" content=\"{{ obCartPositionList.getCurrencyCode() }}\">{{ obCartPositionList.getCurrency() }}</span>
            </div>
        </div>
        <div class=\"prise-summary__item\">
            <div class=\"prise-summary-item__label\">Доставка</div>
            <div class=\"prise-summary-item__value\">
                <div class='price-summary__shiping' >
                    0
                </div>
                <span class=\"rub\" itemprop=\"priceCurrency\" content=\"{{ obCartPositionList.getCurrencyCode() }}\">{{ obCartPositionList.getCurrency() }}</span>
            </div>
        </div>
        <div class=\"divider light-var\"></div>
        <div class=\"prise-summary__item\">
            <div class=\"prise-summary-item__label\">Итого стоимость</div>
            <div class=\"prise-summary-item__value\" data-Position-Total-Price=\"{{ obCartPositionList.getTotalPriceValue() }}\">
                <input type=\"hidden\" id=\"total-price-value-order\" value=\"\">
                <div class='price-total__value' >
                    {{ obCartPositionList.getTotalPriceValue() }}
                </div>                 
                <span class=\"rub\" itemprop=\"priceCurrency\" content=\"{{ obCartPositionList.getCurrencyCode() }}\">{{ obCartPositionList.getCurrency() }}</span>
            </div>
        </div>
    </div>\t
</div>", "Z:\\domains\\hatan.loc/themes/hatan/partials/checkout/block-order-summary.htm", "");
    }
}
