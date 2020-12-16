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

/* Z:\domains\hatan.loc/themes/hatan/partials/modal/modal-microcart.htm */
class __TwigTemplate_3033e0f1d125c406f85aa3dbd7273dca7cd3f56af9d4e19d8485750ceb58ab9f extends \Twig\Template
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
        $tags = array("set" => 2, "if" => 15, "for" => 32, "partial" => 33);
        $filters = array("theme" => 11, "page" => 49);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for', 'partial'],
                ['theme', 'page'],
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
        echo "\t";
        $context["obCartPositionList"] = twig_get_attribute($this->env, $this->source, ($context["Cart"] ?? null), "get", [], "method", false, false, true, 2);
        // line 3
        echo "\t";
        $context["obCartPositionListCount"] = twig_get_attribute($this->env, $this->source, ($context["obCartPositionList"] ?? null), "getTotalQuantity", [], "method", false, false, true, 3);
        // line 4
        echo "\t";
        $context["obPriceData"] = twig_get_attribute($this->env, $this->source, ($context["Cart"] ?? null), "getTotalPriceData", [], "method", false, false, true, 4);
        // line 5
        echo "\t<div class=\"microcart show\">
\t\t<div class=\"cart-dialog\">
\t\t\t<div class=\"cart-content\">
\t\t\t\t<div class=\"cart-header\">
\t\t\t\t\t<div></div>
\t\t\t\t\t<div class=\"close\">
\t\t\t\t\t\t<img src=\"";
        // line 11
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/Close-circle.svg");
        echo "\" alt=\"\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"cart-body\">
\t\t\t\t\t";
        // line 15
        if (twig_get_attribute($this->env, $this->source, ($context["obCartPositionList"] ?? null), "isEmpty", [], "method", false, false, true, 15)) {
            // line 16
            echo "\t\t\t\t\t<div class=\"cart-empty\">
\t\t\t\t\t\t<div class=\"empty-image\">
\t\t\t\t\t\t\t<img src=\"";
            // line 18
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/empty cart image.svg");
            echo "\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"empty-content\">
\t\t\t\t\t\t\t<div class=\"title-empty\">
\t\t\t\t\t\t\t\tВаша корзина пуста
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"subtitle-empty\">
\t\t\t\t\t\t\t\tВыберите понравившиеся товары и добавьте в корзину. Если сейчас не готовы купить, можете рассмотреть товары в корзине позднее
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
        } else {
            // line 30
            echo "\t\t\t\t\t<div class=\"cart-filled show\">
\t\t\t\t\t\t<div class=\"cart-items\">
\t\t\t\t\t\t\t";
            // line 32
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["obCartPositionList"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["obCartPosition"]) {
                // line 33
                echo "\t\t\t\t\t\t\t\t";
                $context['__cms_partial_params'] = [];
                $context['__cms_partial_params']['obCartPosition'] = $context["obCartPosition"]                ;
                echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("product/product-card/mini-card"                , $context['__cms_partial_params']                , true                );
                unset($context['__cms_partial_params']);
                echo "\t
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['obCartPosition'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"cupon-input\">
\t\t\t\t\t\t\t<label for=\"cupon\">Ввести код купона</label>
\t\t\t\t\t\t\t<input id=\"cupon\" class=\"input__cupon\" name=\"cupon\" type=\"text\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"summary\">
\t\t\t\t\t\t\t";
            // line 41
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("cart/microcart/summary"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 42
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 45
        echo "\t\t\t\t</div>
\t\t\t\t<div class=\"cart-footer\">
\t\t\t\t\t<div class=\"cart-footer--center\">
\t\t\t\t\t\t";
        // line 48
        if (twig_get_attribute($this->env, $this->source, ($context["obCartPositionList"] ?? null), "isEmpty", [], "method", false, false, true, 48)) {
            // line 49
            echo "\t\t\t\t\t\t<a href=\"";
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("catalog");
            echo "\" id=\"empty-cart\" class=\"btn btn-primary secondary\">Начать покупки</a>
\t\t\t\t\t\t";
        } else {
            // line 51
            echo "\t\t\t\t\t\t<a href=\"";
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("orders");
            echo "\" id=\"filled-cart\" class=\"btn btn-primary\">Оформить покупку</a>
\t\t\t\t\t\t";
        }
        // line 53
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>";
    }

    public function getTemplateName()
    {
        return "Z:\\domains\\hatan.loc/themes/hatan/partials/modal/modal-microcart.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 53,  157 => 51,  151 => 49,  149 => 48,  144 => 45,  139 => 42,  135 => 41,  127 => 35,  115 => 33,  111 => 32,  107 => 30,  92 => 18,  88 => 16,  86 => 15,  79 => 11,  71 => 5,  68 => 4,  65 => 3,  62 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{##}
\t{% set obCartPositionList = Cart.get() %}
\t{% set obCartPositionListCount = obCartPositionList.getTotalQuantity() %}
\t{% set obPriceData = Cart.getTotalPriceData() %}
\t<div class=\"microcart show\">
\t\t<div class=\"cart-dialog\">
\t\t\t<div class=\"cart-content\">
\t\t\t\t<div class=\"cart-header\">
\t\t\t\t\t<div></div>
\t\t\t\t\t<div class=\"close\">
\t\t\t\t\t\t<img src=\"{{'assets/images/Close-circle.svg' | theme }}\" alt=\"\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"cart-body\">
\t\t\t\t\t{% if obCartPositionList.isEmpty() %}
\t\t\t\t\t<div class=\"cart-empty\">
\t\t\t\t\t\t<div class=\"empty-image\">
\t\t\t\t\t\t\t<img src=\"{{ 'assets/images/empty cart image.svg' | theme }}\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"empty-content\">
\t\t\t\t\t\t\t<div class=\"title-empty\">
\t\t\t\t\t\t\t\tВаша корзина пуста
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"subtitle-empty\">
\t\t\t\t\t\t\t\tВыберите понравившиеся товары и добавьте в корзину. Если сейчас не готовы купить, можете рассмотреть товары в корзине позднее
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t{% else %}
\t\t\t\t\t<div class=\"cart-filled show\">
\t\t\t\t\t\t<div class=\"cart-items\">
\t\t\t\t\t\t\t{% for obCartPosition in obCartPositionList %}
\t\t\t\t\t\t\t\t{% partial \"product/product-card/mini-card\" obCartPosition = obCartPosition %}\t
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"cupon-input\">
\t\t\t\t\t\t\t<label for=\"cupon\">Ввести код купона</label>
\t\t\t\t\t\t\t<input id=\"cupon\" class=\"input__cupon\" name=\"cupon\" type=\"text\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"summary\">
\t\t\t\t\t\t\t{% partial \"cart/microcart/summary\" %}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t{% endif %}
\t\t\t\t</div>
\t\t\t\t<div class=\"cart-footer\">
\t\t\t\t\t<div class=\"cart-footer--center\">
\t\t\t\t\t\t{% if obCartPositionList.isEmpty() %}
\t\t\t\t\t\t<a href=\"{{'catalog' | page }}\" id=\"empty-cart\" class=\"btn btn-primary secondary\">Начать покупки</a>
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t<a href=\"{{'orders' | page }}\" id=\"filled-cart\" class=\"btn btn-primary\">Оформить покупку</a>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>", "Z:\\domains\\hatan.loc/themes/hatan/partials/modal/modal-microcart.htm", "");
    }
}
