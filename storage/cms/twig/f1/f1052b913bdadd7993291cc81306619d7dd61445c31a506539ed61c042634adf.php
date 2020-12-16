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

/* Z:\domains\hatan.loc/themes/hatan/partials/checkout/order-summary.htm */
class __TwigTemplate_2db5100d19a2654fdf543da7a16c84ccd62f485f2b7f3986bee755856793e1b1 extends \Twig\Template
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
        $filters = array("escape" => 11, "theme" => 53);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set'],
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
        // line 2
        $context["obCartPositionList"] = twig_get_attribute($this->env, $this->source, ($context["Cart"] ?? null), "get", [], "method", false, false, true, 2);
        // line 3
        $context["obCartPositionListCount"] = twig_get_attribute($this->env, $this->source, ($context["obCartPositionList"] ?? null), "count", [], "method", false, false, true, 3);
        // line 4
        $context["obPriceData"] = twig_get_attribute($this->env, $this->source, ($context["Cart"] ?? null), "getTotalPriceData", [], "method", false, false, true, 4);
        // line 5
        echo "

<h3>Детали заказа</h3>
<div class=\"prise-summary\">
    <div class=\"prise-summary__item\">
        <div class=\"prise-summary-item__label\">Товаров</div>
        <div class=\"prise-summary-item__value\">";
        // line 11
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obCartPositionList"] ?? null), "getTotalQuantity", [], "method", false, false, true, 11), 11, $this->source), "html", null, true);
        echo " шт.</div>
    </div>    
    <div class=\"prise-summary__item\">
        <div class=\"prise-summary-item__label\">НДС 20%</div>
        <div class=\"prise-summary-item__value\">
            ";
        // line 16
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obPriceData"] ?? null), "tax_price", [], "any", false, false, true, 16), 16, $this->source), "html", null, true);
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
        <div class=\"prise-summary-item__label\">Сумма с НДС</div>
        <div class=\"prise-summary-item__value\" id=\"price-summary-total-value\" data-position-total-price=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obCartPositionList"] ?? null), "getTotalPriceValue", [], "method", false, false, true, 22), 22, $this->source), "html", null, true);
        echo "\">
            ";
        // line 23
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obPriceData"] ?? null), "price_with_tax", [], "any", false, false, true, 23), 23, $this->source), "html", null, true);
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
    <div class=\"prise-summary__item\">
        <div class=\"prise-summary-item__label\">Скидка по купону</div>
        <div class=\"prise-summary-item__value\">0<span class=\"rub\" itemprop=\"priceCurrency\" content=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obCartPositionList"] ?? null), "getCurrencyCode", [], "method", false, false, true, 38), 38, $this->source), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obCartPositionList"] ?? null), "getCurrency", [], "method", false, false, true, 38), 38, $this->source), "html", null, true);
        echo "</span></div>
    </div>
    <div class=\"divider light\"></div>
    <div class=\"prise-summary__item\">
        <div class=\"prise-summary-item__label\">Итого стоимость</div>
        <div class=\"prise-summary-item__value\">
            <div class='price-summary__value' >
                ";
        // line 45
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obCartPositionList"] ?? null), "getTotalPrice", [], "method", false, false, true, 45), 45, $this->source), "html", null, true);
        echo "  
            </div>            
            <span class=\"rub\" itemprop=\"priceCurrency\" content=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obCartPositionList"] ?? null), "getCurrencyCode", [], "method", false, false, true, 47), 47, $this->source), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obCartPositionList"] ?? null), "getCurrency", [], "method", false, false, true, 47), 47, $this->source), "html", null, true);
        echo "</span>
        </div>
    </div>
</div>
<div class=\"form-filled\">
    <input class=\"filled\" type=\"text\" id=\"kod-cupona\" name=\"kod-cupona\" placeholder=\"Код купона\">
    <div class=\"icon-cupon\"><img src=\"";
        // line 53
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/Circle Icon ok.svg");
        echo "\" alt=\"\"></div>
</div>
<div class=\"block-order-info\">
    <div class=\"block-order-info__item\">
        <div class=\"block-order-info-item__icon\"><img src=\"";
        // line 57
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/Safety-accent.svg");
        echo "\" alt=\"\"></div>
        <div class=\"block-order-info-item__content\">
            <div class=\"block-order-info-item__content--title\">
                Безопасность
            </div>
            <div class=\"block-order-info-item__content--subtitle\">
                Товар тщательно упаковываем, для сохранности при доставке
            </div>
        </div>
    </div>
    <div class=\"block-order-info__item\">
        <div class=\"block-order-info-item__icon\"><img src=\"";
        // line 68
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/Shipping.svg");
        echo "\" alt=\"\"></div>
        <div class=\"block-order-info-item__content\">
            <div class=\"block-order-info-item__content--title\">
                Доставка
            </div>
            <div class=\"block-order-info-item__content--subtitle\">
                Следите за доставкой с помощью трек-кода
            </div>
        </div>
    </div>
    <div class=\"block-order-info__item\">
        <div class=\"block-order-info-item__icon\"><img src=\"";
        // line 79
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/Return.svg");
        echo "\" alt=\"\"></div>
        <div class=\"block-order-info-item__content\">
            <div class=\"block-order-info-item__content--title\">
                Возврат товара
            </div>
            <div class=\"block-order-info-item__content--subtitle\">
                Мы предлагаем бесплатный возврат в течение 30 дней
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "Z:\\domains\\hatan.loc/themes/hatan/partials/checkout/order-summary.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 79,  179 => 68,  165 => 57,  158 => 53,  147 => 47,  142 => 45,  130 => 38,  120 => 33,  106 => 24,  102 => 23,  98 => 22,  88 => 17,  84 => 16,  76 => 11,  68 => 5,  66 => 4,  64 => 3,  62 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{##}
{% set obCartPositionList = Cart.get() %}
{% set obCartPositionListCount = obCartPositionList.count() %}
{% set obPriceData = Cart.getTotalPriceData() %}


<h3>Детали заказа</h3>
<div class=\"prise-summary\">
    <div class=\"prise-summary__item\">
        <div class=\"prise-summary-item__label\">Товаров</div>
        <div class=\"prise-summary-item__value\">{{ obCartPositionList.getTotalQuantity() }} шт.</div>
    </div>    
    <div class=\"prise-summary__item\">
        <div class=\"prise-summary-item__label\">НДС 20%</div>
        <div class=\"prise-summary-item__value\">
            {{ obPriceData.tax_price }}
            <span class=\"rub\" itemprop=\"priceCurrency\" content=\"{{ obCartPositionList.getCurrencyCode() }}\">{{ obCartPositionList.getCurrency() }}</span>
        </div>
    </div>
    <div class=\"prise-summary__item\">
        <div class=\"prise-summary-item__label\">Сумма с НДС</div>
        <div class=\"prise-summary-item__value\" id=\"price-summary-total-value\" data-position-total-price=\"{{ obCartPositionList.getTotalPriceValue() }}\">
            {{ obPriceData.price_with_tax }}
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
    <div class=\"prise-summary__item\">
        <div class=\"prise-summary-item__label\">Скидка по купону</div>
        <div class=\"prise-summary-item__value\">0<span class=\"rub\" itemprop=\"priceCurrency\" content=\"{{ obCartPositionList.getCurrencyCode() }}\">{{ obCartPositionList.getCurrency() }}</span></div>
    </div>
    <div class=\"divider light\"></div>
    <div class=\"prise-summary__item\">
        <div class=\"prise-summary-item__label\">Итого стоимость</div>
        <div class=\"prise-summary-item__value\">
            <div class='price-summary__value' >
                {{ obCartPositionList.getTotalPrice() }}  
            </div>            
            <span class=\"rub\" itemprop=\"priceCurrency\" content=\"{{ obCartPositionList.getCurrencyCode() }}\">{{ obCartPositionList.getCurrency() }}</span>
        </div>
    </div>
</div>
<div class=\"form-filled\">
    <input class=\"filled\" type=\"text\" id=\"kod-cupona\" name=\"kod-cupona\" placeholder=\"Код купона\">
    <div class=\"icon-cupon\"><img src=\"{{'assets/images/Circle Icon ok.svg' | theme }}\" alt=\"\"></div>
</div>
<div class=\"block-order-info\">
    <div class=\"block-order-info__item\">
        <div class=\"block-order-info-item__icon\"><img src=\"{{'assets/images/Safety-accent.svg' | theme }}\" alt=\"\"></div>
        <div class=\"block-order-info-item__content\">
            <div class=\"block-order-info-item__content--title\">
                Безопасность
            </div>
            <div class=\"block-order-info-item__content--subtitle\">
                Товар тщательно упаковываем, для сохранности при доставке
            </div>
        </div>
    </div>
    <div class=\"block-order-info__item\">
        <div class=\"block-order-info-item__icon\"><img src=\"{{'assets/images/Shipping.svg' | theme }}\" alt=\"\"></div>
        <div class=\"block-order-info-item__content\">
            <div class=\"block-order-info-item__content--title\">
                Доставка
            </div>
            <div class=\"block-order-info-item__content--subtitle\">
                Следите за доставкой с помощью трек-кода
            </div>
        </div>
    </div>
    <div class=\"block-order-info__item\">
        <div class=\"block-order-info-item__icon\"><img src=\"{{ 'assets/images/Return.svg' | theme }}\" alt=\"\"></div>
        <div class=\"block-order-info-item__content\">
            <div class=\"block-order-info-item__content--title\">
                Возврат товара
            </div>
            <div class=\"block-order-info-item__content--subtitle\">
                Мы предлагаем бесплатный возврат в течение 30 дней
            </div>
        </div>
    </div>
</div>", "Z:\\domains\\hatan.loc/themes/hatan/partials/checkout/order-summary.htm", "");
    }
}
