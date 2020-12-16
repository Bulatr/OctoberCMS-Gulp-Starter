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

/* Z:\domains\hatan.loc/themes/hatan/partials/checkout/order-steps/order-step-4.htm */
class __TwigTemplate_f4d3b95ad94fe95e13bd3bc9d62e3d9a406eab6da0392f135f9a307c357b4ec2 extends \Twig\Template
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
        $tags = array("set" => 2, "for" => 6, "partial" => 7);
        $filters = array("theme" => 26);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'partial'],
                ['theme'],
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
        echo "<h2>4. Подтверждение заказа</h2>
<h3>Список товаров</h3>
<div class=\"cart-items\">
    ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["obCartPositionList"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["obCartPosition"]) {
            // line 7
            echo "        ";
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['obCartPosition'] = $context["obCartPosition"]            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("product/product-card/checkout-card"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            echo "\t
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['obCartPosition'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "</div>
<div class=\"table-container\">
    
        <div class=\"table-container__row\">
            <div class=\"table-container-row__col\">
                <div class=\"container-fluid\">
                    <div class=\"row\">
                        <div class=\"form-check\">
                            <input class=\"form-check-input\" type=\"checkbox\" value=\"default-adress\" id=\"default-adress\" name=\"default-adress\" checked>
                            <label class=\"form-check-label\" for=\"default-adress\">
                                Доставка по моему адресу по умолчанию
                            </label>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"form-filled gray\">
                            <input class=\"filled\" type=\"text\" id=\"kod-cupona\" name=\"kod-cupona\" placeholder=\"Код купона\">
                            <div class=\"icon-cupon\"><img src=\"";
        // line 26
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/Circle Icon ok.svg");
        echo "\" alt=\"\"></div>
                        </div>
                    </div>

                </div>\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
            </div>
            <div class=\"table-container-row__col\">
                <div class='block-order-summary__wrapper' >
                    ";
        // line 34
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("checkout/block-order-summary"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 35
        echo "                </div>                
            </div>
        </div>
    
</div>
<div class=\"input-group align-items-center\">
    <a type=\"submit\" href=\"#Checkout-5.html#\" class=\"btn btn-primary\" id=\"submit-order\">Оформить заказ</a>
    <a href=\"#checkout-3\" class=\"btn text\" id=\"btn-return-step-4\" data-step-next=\"3\">Назад к оплате</a>
</div>";
    }

    public function getTemplateName()
    {
        return "Z:\\domains\\hatan.loc/themes/hatan/partials/checkout/order-steps/order-step-4.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 35,  115 => 34,  104 => 26,  85 => 9,  73 => 7,  69 => 6,  64 => 3,  62 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{##}
{% set obCartPositionList = Cart.get() %}
<h2>4. Подтверждение заказа</h2>
<h3>Список товаров</h3>
<div class=\"cart-items\">
    {% for obCartPosition in obCartPositionList %}
        {% partial \"product/product-card/checkout-card\" obCartPosition = obCartPosition %}\t
    {% endfor %}
</div>
<div class=\"table-container\">
    
        <div class=\"table-container__row\">
            <div class=\"table-container-row__col\">
                <div class=\"container-fluid\">
                    <div class=\"row\">
                        <div class=\"form-check\">
                            <input class=\"form-check-input\" type=\"checkbox\" value=\"default-adress\" id=\"default-adress\" name=\"default-adress\" checked>
                            <label class=\"form-check-label\" for=\"default-adress\">
                                Доставка по моему адресу по умолчанию
                            </label>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"form-filled gray\">
                            <input class=\"filled\" type=\"text\" id=\"kod-cupona\" name=\"kod-cupona\" placeholder=\"Код купона\">
                            <div class=\"icon-cupon\"><img src=\"{{'assets/images/Circle Icon ok.svg' | theme }}\" alt=\"\"></div>
                        </div>
                    </div>

                </div>\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
            </div>
            <div class=\"table-container-row__col\">
                <div class='block-order-summary__wrapper' >
                    {% partial \"checkout/block-order-summary\" %}
                </div>                
            </div>
        </div>
    
</div>
<div class=\"input-group align-items-center\">
    <a type=\"submit\" href=\"#Checkout-5.html#\" class=\"btn btn-primary\" id=\"submit-order\">Оформить заказ</a>
    <a href=\"#checkout-3\" class=\"btn text\" id=\"btn-return-step-4\" data-step-next=\"3\">Назад к оплате</a>
</div>", "Z:\\domains\\hatan.loc/themes/hatan/partials/checkout/order-steps/order-step-4.htm", "");
    }
}
