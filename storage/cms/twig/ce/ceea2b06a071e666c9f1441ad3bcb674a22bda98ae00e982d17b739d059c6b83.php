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

/* Z:\domains\hatan.loc/themes/hatan/partials/checkout/order-steps/order-step-3.htm */
class __TwigTemplate_6454ef391a1679c84b77bd030f8be3d96715d27e8a7592260ea1d1989e0d1f6f extends \Twig\Template
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
        $tags = array("set" => 3, "if" => 4, "for" => 8);
        $filters = array("escape" => 13);
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
        // line 3
        $context["obPaymentMethodList"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["PaymentMethodList"] ?? null), "make", [], "method", false, false, true, 3), "sort", [], "method", false, false, true, 3), "active", [], "method", false, false, true, 3);
        // line 4
        if (twig_get_attribute($this->env, $this->source, ($context["obPaymentMethodList"] ?? null), "isNotEmpty", [], "method", false, false, true, 4)) {
            // line 5
            echo "<h2>3. Оплата</h2>
<h3>Способы оплаты</h3>
<div class=\"table-container hovered\"> 
    ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["obPaymentMethodList"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["obPaymentMethod"]) {
                // line 9
                echo "        <div class=\"table-container__row\">
            <div class=\"table-container-row__col fixed-2\">
                <div class=\"form-check\">
                    <input type=\"radio\" class=\"form-check-input _shopaholic-order-field\"  
                        value=\"";
                // line 13
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["obPaymentMethod"], "id", [], "any", false, false, true, 13), 13, $this->source), "html", null, true);
                echo "\" 
                        id=\"paymentMethodId-";
                // line 14
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["obPaymentMethod"], "id", [], "any", false, false, true, 14), 14, $this->source), "html", null, true);
                echo "\" 
                        name=\"payment_method_id\" 
                        data-id=\"";
                // line 16
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["obPaymentMethod"], "id", [], "any", false, false, true, 16), 16, $this->source), "html", null, true);
                echo "\"
                        data-group=\"order\">
                    <label class=\"form-check-label\" for=\"paymentMethodId-";
                // line 18
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["obPaymentMethod"], "id", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
                echo "\">
                        ";
                // line 19
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["obPaymentMethod"], "name", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
                echo "
                    </label>
                </div>
            </div> 
            <div class=\"table-container-row__col\">
                ";
                // line 24
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["obPaymentMethod"], "preview_text", [], "any", false, false, true, 24), 24, $this->source), "html", null, true);
                echo "
            </div>                                   
        </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['obPaymentMethod'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "</div> \t\t\t\t\t\t\t

";
            // line 78
            echo "                                                         

<div class=\"input-group space-between align-items-center\">
    <a href=\"#сheckout-4\" class=\"btn btn-primary\" id=\"btn-step-3\" data-step-next=\"4\">Продолжить</a>
    <a href=\"#checkout-2\" class=\"btn text\" id=\"btn-return-step-3\" data-step-next=\"2\">Редактировать детали доставки</a>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "Z:\\domains\\hatan.loc/themes/hatan/partials/checkout/order-steps/order-step-3.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 78,  117 => 28,  107 => 24,  99 => 19,  95 => 18,  90 => 16,  85 => 14,  81 => 13,  75 => 9,  71 => 8,  66 => 5,  64 => 4,  62 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("{##}
{# Get PaymentMethodCollection object from PaymentMethodList component #}
{% set obPaymentMethodList = PaymentMethodList.make().sort().active() %}
{% if obPaymentMethodList.isNotEmpty() %}
<h2>3. Оплата</h2>
<h3>Способы оплаты</h3>
<div class=\"table-container hovered\"> 
    {% for obPaymentMethod in obPaymentMethodList %}
        <div class=\"table-container__row\">
            <div class=\"table-container-row__col fixed-2\">
                <div class=\"form-check\">
                    <input type=\"radio\" class=\"form-check-input _shopaholic-order-field\"  
                        value=\"{{ obPaymentMethod.id }}\" 
                        id=\"paymentMethodId-{{ obPaymentMethod.id }}\" 
                        name=\"payment_method_id\" 
                        data-id=\"{{ obPaymentMethod.id }}\"
                        data-group=\"order\">
                    <label class=\"form-check-label\" for=\"paymentMethodId-{{ obPaymentMethod.id }}\">
                        {{ obPaymentMethod.name }}
                    </label>
                </div>
            </div> 
            <div class=\"table-container-row__col\">
                {{ obPaymentMethod.preview_text }}
            </div>                                   
        </div>
    {% endfor %}
</div> \t\t\t\t\t\t\t

{#<h3>Выберите карту для оплаты</h3>
<div class=\"table-container hovered\">                                
    <div class=\"table-container__row\">
        <div class=\"table-container-row__col fixed-2\">
            <div class=\"form-check\">
                <input class=\"form-check-input\" type=\"radio\" value=\"karta-2\" id=\"karta-2\" name=\"karta-oplaty\" checked>
                <label class=\"form-check-label\" for=\"karta-2\">
                    <div class=\"credit-card__icon mastercard\"></div>
                    <div class=\"placeholder-credit-card\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                        <div class=\"placeholder-credit-card__item\"></div>
                        <div class=\"placeholder-credit-card__item\"></div>
                        <div class=\"placeholder-credit-card__item\"></div>
                        <div class=\"placeholder-credit-card__item\"></div>
                    </div>
                    <div class=\"credit-card__number\">7845</div>
                </label>
            </div>
        </div>\t\t\t\t\t\t\t\t\t
    </div>
    <div class=\"table-container__row\">
        <div class=\"table-container-row__col fixed-2\">
            <div class=\"form-check\">
                <input class=\"form-check-input\" type=\"radio\" value=\"karta-1\" id=\"karta-1\" name=\"karta-oplaty\">
                <label class=\"form-check-label\" for=\"karta-1\">
                    <div class=\"credit-card__icon mastercard\"></div>
                    <div class=\"placeholder-credit-card\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                        <div class=\"placeholder-credit-card__item\"></div>
                        <div class=\"placeholder-credit-card__item\"></div>
                        <div class=\"placeholder-credit-card__item\"></div>
                        <div class=\"placeholder-credit-card__item\"></div>
                    </div>
                    <div class=\"credit-card__number\">5466</div>
                </label>
            </div>
        </div>\t\t\t\t\t\t\t\t\t
    </div>
    <div class=\"table-container__row\">
        <div class=\"table-container-row__col fixed-2\">
            <div class=\"form-check\">
                <input class=\"form-check-input\" type=\"radio\" value=\"karta-new\" id=\"karta-new\" name=\"karta-oplaty\">
                <label class=\"form-check-label\" for=\"karta-1\">
                    <div class=\"credit-card__icon mastercard\"></div>
                    
                    <div class=\"credit-card__number\">Новая карта</div>
                </label>
            </div>
        </div>\t\t\t\t\t\t\t\t\t
    </div>
</div>#}                                                         

<div class=\"input-group space-between align-items-center\">
    <a href=\"#сheckout-4\" class=\"btn btn-primary\" id=\"btn-step-3\" data-step-next=\"4\">Продолжить</a>
    <a href=\"#checkout-2\" class=\"btn text\" id=\"btn-return-step-3\" data-step-next=\"2\">Редактировать детали доставки</a>
</div>
{% endif %}", "Z:\\domains\\hatan.loc/themes/hatan/partials/checkout/order-steps/order-step-3.htm", "");
    }
}
