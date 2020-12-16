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

/* Z:\domains\hatan.loc/themes/hatan/partials/cart/microcart/summary.htm */
class __TwigTemplate_fc8e8a51cf2b4cdf9ac9f2d50027a79cdffaf01a956dd232cb9ed4962432b447 extends \Twig\Template
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
        $filters = array("escape" => 7);
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
        echo "<div class=\"summary__item\">
    <div class=\"summary-label\">Всего товаров</div>
    <div class=\"summary-value\">";
        // line 7
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obCartPositionList"] ?? null), "getTotalQuantity", [], "method", false, false, true, 7), 7, $this->source), "html", null, true);
        echo " шт.</div> 
</div>
<div class=\"summary__item\">
    <div class=\"summary-label\">НДС 20%</div>
    <div class=\"summary-value\">";
        // line 11
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obPriceData"] ?? null), "tax_price", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
        echo "<span class=\"rub\" itemprop=\"priceCurrency\" content=\"";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obOfferItem"] ?? null), "currency_code", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obOfferItem"] ?? null), "currency", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
        echo "</span></div>
</div>
<div class=\"summary__item\">
    <div class=\"summary-label\">Сумма с НДС</div>
    <div class=\"summary-value\">";
        // line 15
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obPriceData"] ?? null), "price_with_tax", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
        echo "<span class=\"rub\" itemprop=\"priceCurrency\" content=\"";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obOfferItem"] ?? null), "currency_code", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obOfferItem"] ?? null), "currency", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
        echo "</span></div>
</div>
<div class=\"summary__item shiping\">
    <div class=\"summary-label\">Доставка</div>
    <div class=\"summary-value\">
        <div class='shiping_value' >
            0
        </div>
        <span class=\"rub\" itemprop=\"priceCurrency\" content=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obOfferItem"] ?? null), "currency_code", [], "any", false, false, true, 23), 23, $this->source), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obOfferItem"] ?? null), "currency", [], "any", false, false, true, 23), 23, $this->source), "html", null, true);
        echo "</span>
    </div>
</div>
<div class=\"summary__item summ\">
    <div class=\"summary-label\">Итого стоимость</div>
    <div class=\"summary-value\" data-Position-Total-Price=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obCartPositionList"] ?? null), "getTotalPriceValue", [], "method", false, false, true, 28), 28, $this->source), "html", null, true);
        echo "\">
        <div class='summary__value' >
            ";
        // line 30
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obCartPositionList"] ?? null), "getTotalPriceValue", [], "method", false, false, true, 30), 30, $this->source), "html", null, true);
        echo "
        </div>        
        <span class=\"rub\" itemprop=\"priceCurrency\" content=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obOfferItem"] ?? null), "currency_code", [], "any", false, false, true, 32), 32, $this->source), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obOfferItem"] ?? null), "currency", [], "any", false, false, true, 32), 32, $this->source), "html", null, true);
        echo "</span>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "Z:\\domains\\hatan.loc/themes/hatan/partials/cart/microcart/summary.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 32,  120 => 30,  115 => 28,  105 => 23,  90 => 15,  79 => 11,  72 => 7,  68 => 5,  66 => 4,  64 => 3,  62 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{##}
{% set obCartPositionList = Cart.get() %}
{% set obCartPositionListCount = obCartPositionList.count() %}
{% set obPriceData = Cart.getTotalPriceData() %}
<div class=\"summary__item\">
    <div class=\"summary-label\">Всего товаров</div>
    <div class=\"summary-value\">{{ obCartPositionList.getTotalQuantity() }} шт.</div> 
</div>
<div class=\"summary__item\">
    <div class=\"summary-label\">НДС 20%</div>
    <div class=\"summary-value\">{{ obPriceData.tax_price }}<span class=\"rub\" itemprop=\"priceCurrency\" content=\"{{ obOfferItem.currency_code }}\">{{ obOfferItem.currency }}</span></div>
</div>
<div class=\"summary__item\">
    <div class=\"summary-label\">Сумма с НДС</div>
    <div class=\"summary-value\">{{ obPriceData.price_with_tax }}<span class=\"rub\" itemprop=\"priceCurrency\" content=\"{{ obOfferItem.currency_code }}\">{{ obOfferItem.currency }}</span></div>
</div>
<div class=\"summary__item shiping\">
    <div class=\"summary-label\">Доставка</div>
    <div class=\"summary-value\">
        <div class='shiping_value' >
            0
        </div>
        <span class=\"rub\" itemprop=\"priceCurrency\" content=\"{{ obOfferItem.currency_code }}\">{{ obOfferItem.currency }}</span>
    </div>
</div>
<div class=\"summary__item summ\">
    <div class=\"summary-label\">Итого стоимость</div>
    <div class=\"summary-value\" data-Position-Total-Price=\"{{ obCartPositionList.getTotalPriceValue() }}\">
        <div class='summary__value' >
            {{ obCartPositionList.getTotalPriceValue() }}
        </div>        
        <span class=\"rub\" itemprop=\"priceCurrency\" content=\"{{ obOfferItem.currency_code }}\">{{ obOfferItem.currency }}</span>
    </div>
</div>", "Z:\\domains\\hatan.loc/themes/hatan/partials/cart/microcart/summary.htm", "");
    }
}
