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

/* Z:\domains\hatan.loc/themes/hatan/partials/checkout/order-steps/order-step-2.htm */
class __TwigTemplate_3d0bf892e9b95e03ae482a9313da9df4289575200684fa49e6228d4eb6d87e30 extends \Twig\Template
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
        $tags = array("set" => 67, "if" => 68, "for" => 87);
        $filters = array("escape" => 92);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
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
        echo "<h2>2. Доставка</h2>
<div class=\"form-check\">
    <input class=\"form-check-input\" type=\"checkbox\" value=\"default-adress\" id=\"default-adress\" name=\"default-adress\" checked>
    <label class=\"form-check-label\" for=\"default-adress\">
        Доставка по моему адресу по умолчанию
    </label>
</div>
<div class=\"form-group\">
    <label for=\"full-address\">Полный адрес*</label>
    <input type=\"text\" 
        class=\"form-control _shopaholic-order-field\" 
        name=\"full-adress\" 
        id=\"full-address\" 
        data-group=\"shipping_address\" 
        data-field=\"address1\"
        placeholder=\"Регион, город, улица, дом, квартира\">
    <div class='form-info small' >
        Введите полный адрес. Формат: Регион, город, улица, дом, квартира
    </div>
</div>
<div class='input-hidden address' >
    <input type=\"hidden\" class=\"_shopaholic-order-field\" id=\"type\" name=\"type\" data-group=\"shipping_address\" value=\"billing\">
    <div class=\"form-group\">
        <label for=\"region\">Регион*</label>
        <input type=\"text\" class=\"form-control _shopaholic-order-field\" name=\"state\" id=\"state\" data-group=\"shipping_address\" placeholder=\"Регион\">
    </div>
    <div class=\"input-group\">
        <div class=\"form-group\">
            <label for=\"city\">Населенный пункт*</label>
            <input type=\"text\" class=\"form-control _shopaholic-order-field\" name=\"city\" id=\"city\" data-group=\"shipping_address\" placeholder=\"Название населенного пункта\">
        </div>
        <div class=\"form-group\">
            <label for=\"street\">Улица*</label>
            <input type=\"text\" class=\"form-control _shopaholic-order-field\" name=\"street\" id=\"street\" data-group=\"shipping_address\" placeholder=\"Улица\">
        </div>
    </div>                          
    <div class=\"input-group\">
        <div class=\"form-group\">
            <label for=\"house\">Номер дома*</label>
            <input type=\"text\" class=\"form-control _shopaholic-order-field\" name=\"house\" id=\"house\" 
                data-group=\"shipping_address\" 
                placeholder=\"Номер дома\">
        </div>
        <div class=\"form-group\">
            <label for=\"flat\">Квартира</label>
            <input type=\"text\" class=\"form-control _shopaholic-order-field\" name=\"flat\" id=\"flat\" 
                data-group=\"shipping_address\" 
                placeholder=\"Номер квартиры\">
        </div>
    </div>
    <div class=\"form-group\">
        <label for=\"postal_code\">Почтовый индекс*</label>
        <input type=\"text\" class=\"form-control _shopaholic-order-field\" name=\"postcode\" id=\"postcode\" 
            data-group=\"shipping_address\" 
            placeholder=\"000000\">
    </div>
</div>
<div class=\"form-group\">
    <label for=\"phone\">Номер телефона*</label>
    <input type=\"text\" class=\"form-control _shopaholic-order-field\" name=\"phone\" id=\"phone\" 
        data-group=\"user\" 
        placeholder=\"+7(___) ___-____\">
</div>

";
        // line 67
        $context["obShippingTypeList"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ShippingTypeList"] ?? null), "make", [], "method", false, false, true, 67), "sort", [], "method", false, false, true, 67), "active", [], "method", false, false, true, 67);
        // line 68
        if (twig_get_attribute($this->env, $this->source, ($context["obShippingTypeList"] ?? null), "isNotEmpty", [], "method", false, false, true, 68)) {
            // line 69
            echo "    <h3>Способ доставки</h3>

    <div class=\"table-container hovered\">
        
        <div class=\"table-container__row\">
            <div class=\"table-container-row__col fixed-1\">
                Наименование
            </div>
            <div class=\"table-container-row__col fixed-1\">
                Срок доставки
            </div>
            <div class=\"table-container-row__col fixed-1\">
                Стоимость
            </div>
            <div class=\"table-container-row__col fixed-2\">
                Описание
            </div>
        </div>
        ";
            // line 87
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["obShippingTypeList"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["obShippingType"]) {
                // line 88
                echo "        <div class=\"table-container__row\">
            <div class=\"table-container-row__col fixed-1\">
                <div class=\"form-check\">
                    <input type=\"radio\" class=\"form-check-input _shopaholic-order-field\" 
                        value=\"";
                // line 92
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["obShippingType"], "id", [], "any", false, false, true, 92), 92, $this->source), "html", null, true);
                echo "\" 
                        id=\"shipping-type-";
                // line 93
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["obShippingType"], "id", [], "any", false, false, true, 93), 93, $this->source), "html", null, true);
                echo "\" 
                        data-group=\"order\"
                        name=\"shipping_type_id\">
                    <label class=\"form-check-label\" for=\"shipping-type-";
                // line 96
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["obShippingType"], "id", [], "any", false, false, true, 96), 96, $this->source), "html", null, true);
                echo "\">
                        ";
                // line 97
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["obShippingType"], "name", [], "any", false, false, true, 97), 97, $this->source), "html", null, true);
                echo "
                    </label>
                </div>
            </div>
            <div class=\"table-container-row__col fixed-1\">
                ";
                // line 102
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["obShippingType"], "srok_dostavki", [], "any", false, false, true, 102), 102, $this->source), "html", null, true);
                echo "
            </div>
            <div class=\"table-container-row__col fixed-1\">
                <input type=\"hidden\" 
                    class=\"shiping-value _shopaholic-order-field\" 
                    id=\"shiping-value-";
                // line 107
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["obShippingType"], "id", [], "any", false, false, true, 107), 107, $this->source), "html", null, true);
                echo "\"
                    data-group=\"order\" 
                    data-shiping-id=\"shipping-type-";
                // line 109
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["obShippingType"], "id", [], "any", false, false, true, 109), 109, $this->source), "html", null, true);
                echo "\"
                    name=\"shipping_price\" 
                    value=\"";
                // line 111
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["obShippingType"], "price_value", [], "any", false, false, true, 111), 111, $this->source), "html", null, true);
                echo "\" 
                    data-shiping-price=\"";
                // line 112
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["obShippingType"], "price", [], "any", false, false, true, 112), 112, $this->source), "html", null, true);
                echo "\">
                ";
                // line 113
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["obShippingType"], "price", [], "any", false, false, true, 113), 113, $this->source), "html", null, true);
                echo "<span class=\"rub\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["obShippingType"], "currency", [], "any", false, false, true, 113), 113, $this->source), "html", null, true);
                echo "</span>
            </div>
            <div class=\"table-container-row__col fixed-2\">
                ";
                // line 116
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["obShippingType"], "preview_text", [], "any", false, false, true, 116), 116, $this->source), "html", null, true);
                echo "
            </div>
        </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['obShippingType'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 119
            echo "        
    </div>                            
";
        }
        // line 122
        echo "<div class=\"input-group align-items-center\">

    <a href=\"#checkout-3\" class=\"btn btn-primary\" id=\"btn-step-2\" data-step-next=\"3\">Продолжить</a> 

    <a href=\"#checkout-1\" class=\"btn text return\" id=\"btn-return-step-2\" data-step-next=\"1\">Редактировать детали покупателя</a>

</div>";
    }

    public function getTemplateName()
    {
        return "Z:\\domains\\hatan.loc/themes/hatan/partials/checkout/order-steps/order-step-2.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  233 => 122,  228 => 119,  218 => 116,  210 => 113,  206 => 112,  202 => 111,  197 => 109,  192 => 107,  184 => 102,  176 => 97,  172 => 96,  166 => 93,  162 => 92,  156 => 88,  152 => 87,  132 => 69,  130 => 68,  128 => 67,  62 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{##}
<h2>2. Доставка</h2>
<div class=\"form-check\">
    <input class=\"form-check-input\" type=\"checkbox\" value=\"default-adress\" id=\"default-adress\" name=\"default-adress\" checked>
    <label class=\"form-check-label\" for=\"default-adress\">
        Доставка по моему адресу по умолчанию
    </label>
</div>
<div class=\"form-group\">
    <label for=\"full-address\">Полный адрес*</label>
    <input type=\"text\" 
        class=\"form-control _shopaholic-order-field\" 
        name=\"full-adress\" 
        id=\"full-address\" 
        data-group=\"shipping_address\" 
        data-field=\"address1\"
        placeholder=\"Регион, город, улица, дом, квартира\">
    <div class='form-info small' >
        Введите полный адрес. Формат: Регион, город, улица, дом, квартира
    </div>
</div>
<div class='input-hidden address' >
    <input type=\"hidden\" class=\"_shopaholic-order-field\" id=\"type\" name=\"type\" data-group=\"shipping_address\" value=\"billing\">
    <div class=\"form-group\">
        <label for=\"region\">Регион*</label>
        <input type=\"text\" class=\"form-control _shopaholic-order-field\" name=\"state\" id=\"state\" data-group=\"shipping_address\" placeholder=\"Регион\">
    </div>
    <div class=\"input-group\">
        <div class=\"form-group\">
            <label for=\"city\">Населенный пункт*</label>
            <input type=\"text\" class=\"form-control _shopaholic-order-field\" name=\"city\" id=\"city\" data-group=\"shipping_address\" placeholder=\"Название населенного пункта\">
        </div>
        <div class=\"form-group\">
            <label for=\"street\">Улица*</label>
            <input type=\"text\" class=\"form-control _shopaholic-order-field\" name=\"street\" id=\"street\" data-group=\"shipping_address\" placeholder=\"Улица\">
        </div>
    </div>                          
    <div class=\"input-group\">
        <div class=\"form-group\">
            <label for=\"house\">Номер дома*</label>
            <input type=\"text\" class=\"form-control _shopaholic-order-field\" name=\"house\" id=\"house\" 
                data-group=\"shipping_address\" 
                placeholder=\"Номер дома\">
        </div>
        <div class=\"form-group\">
            <label for=\"flat\">Квартира</label>
            <input type=\"text\" class=\"form-control _shopaholic-order-field\" name=\"flat\" id=\"flat\" 
                data-group=\"shipping_address\" 
                placeholder=\"Номер квартиры\">
        </div>
    </div>
    <div class=\"form-group\">
        <label for=\"postal_code\">Почтовый индекс*</label>
        <input type=\"text\" class=\"form-control _shopaholic-order-field\" name=\"postcode\" id=\"postcode\" 
            data-group=\"shipping_address\" 
            placeholder=\"000000\">
    </div>
</div>
<div class=\"form-group\">
    <label for=\"phone\">Номер телефона*</label>
    <input type=\"text\" class=\"form-control _shopaholic-order-field\" name=\"phone\" id=\"phone\" 
        data-group=\"user\" 
        placeholder=\"+7(___) ___-____\">
</div>

{# Render shipping types #}
{% set obShippingTypeList = ShippingTypeList.make().sort().active() %}
{% if obShippingTypeList.isNotEmpty() %}
    <h3>Способ доставки</h3>

    <div class=\"table-container hovered\">
        
        <div class=\"table-container__row\">
            <div class=\"table-container-row__col fixed-1\">
                Наименование
            </div>
            <div class=\"table-container-row__col fixed-1\">
                Срок доставки
            </div>
            <div class=\"table-container-row__col fixed-1\">
                Стоимость
            </div>
            <div class=\"table-container-row__col fixed-2\">
                Описание
            </div>
        </div>
        {% for obShippingType in obShippingTypeList %}
        <div class=\"table-container__row\">
            <div class=\"table-container-row__col fixed-1\">
                <div class=\"form-check\">
                    <input type=\"radio\" class=\"form-check-input _shopaholic-order-field\" 
                        value=\"{{ obShippingType.id }}\" 
                        id=\"shipping-type-{{ obShippingType.id }}\" 
                        data-group=\"order\"
                        name=\"shipping_type_id\">
                    <label class=\"form-check-label\" for=\"shipping-type-{{ obShippingType.id }}\">
                        {{ obShippingType.name }}
                    </label>
                </div>
            </div>
            <div class=\"table-container-row__col fixed-1\">
                {{obShippingType.srok_dostavki}}
            </div>
            <div class=\"table-container-row__col fixed-1\">
                <input type=\"hidden\" 
                    class=\"shiping-value _shopaholic-order-field\" 
                    id=\"shiping-value-{{ obShippingType.id }}\"
                    data-group=\"order\" 
                    data-shiping-id=\"shipping-type-{{ obShippingType.id }}\"
                    name=\"shipping_price\" 
                    value=\"{{obShippingType.price_value}}\" 
                    data-shiping-price=\"{{obShippingType.price}}\">
                {{obShippingType.price}}<span class=\"rub\">{{obShippingType.currency}}</span>
            </div>
            <div class=\"table-container-row__col fixed-2\">
                {{obShippingType.preview_text}}
            </div>
        </div>
        {% endfor %}        
    </div>                            
{% endif %}
<div class=\"input-group align-items-center\">

    <a href=\"#checkout-3\" class=\"btn btn-primary\" id=\"btn-step-2\" data-step-next=\"3\">Продолжить</a> 

    <a href=\"#checkout-1\" class=\"btn text return\" id=\"btn-return-step-2\" data-step-next=\"1\">Редактировать детали покупателя</a>

</div>", "Z:\\domains\\hatan.loc/themes/hatan/partials/checkout/order-steps/order-step-2.htm", "");
    }
}
