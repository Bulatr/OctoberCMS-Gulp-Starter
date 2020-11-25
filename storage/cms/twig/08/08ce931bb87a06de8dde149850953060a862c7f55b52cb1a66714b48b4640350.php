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

/* C:\OSPanel\domains\hatan.loc/themes/hatan/partials/modal-microcart.htm */
class __TwigTemplate_0c26b869ba790f9b8de79fade092412c9e6e08ad9471d4e3ef6378bf4c502084 extends \Twig\Template
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
        $tags = array();
        $filters = array("theme" => 8);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
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
        echo "<div class=\"microcart\">
\t\t<div class=\"cart-dialog\">
\t\t\t<div class=\"cart-content\">
\t\t\t\t<div class=\"cart-header\">
\t\t\t\t\t<div></div>
\t\t\t\t\t<div class=\"close\">
\t\t\t\t\t\t<img src=\"";
        // line 8
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/Close-circle.svg");
        echo "\" alt=\"\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"cart-body\">
\t\t\t\t\t<div class=\"cart-empty show\">
\t\t\t\t\t\t<div class=\"empty-image\">
\t\t\t\t\t\t\t<img src=\"";
        // line 14
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
\t\t\t\t\t<div class=\"cart-filled\">
\t\t\t\t\t\t<div class=\"cart-items\">
\t\t\t\t\t\t\t<div class=\"collected-product\">
\t\t\t\t\t\t\t\t<div class=\"collected-product__image-wrapper\">
\t\t\t\t\t\t\t\t\t<div class=\"collected-product__image-wrapper-image\"><img src=\"";
        // line 29
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/dest/1/37416640299.jpg");
        echo "\" alt=\"\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"collected-product__image-wrapper-count-wrap-collected\">
\t\t\t\t\t\t\t\t\t\t<div class=\"count-wrap\" id=\"product-123\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"count-up\">+</div>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control amount-product\" id=\"count-1\" placeholder=\"1\" value=\"1\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"count-down\">-</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"collected-product__content\">
\t\t\t\t\t\t\t\t\t<div class=\"collected-product__content-delete-product\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 40
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/small_close.svg");
        echo "\" alt=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"collected-product__content-pr-title\">
\t\t\t\t\t\t\t\t\t\tДжемпер вязки «косы» с воротником-стойкой
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"collected-product__content-pr-price-wrap\">
\t\t\t\t\t\t\t\t\t\t<div class=\"old-price\">5999<span class=\"rub\"><img src=\"";
        // line 46
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/Rub.svg");
        echo "\" alt=\"\"></span></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"today-price\">
\t\t\t\t\t\t\t\t\t\t\t4800 <span class=\"rub\"><img src=\"";
        // line 48
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/Rub.svg");
        echo "\" alt=\"\"></span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"collected-product__content-options\">
\t\t\t\t\t\t\t\t\t\t<div class=\"option__item\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"option__item-label-option\">Размер</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"option__value-option\">L</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"option__item\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"option__item-label-option\">Цвет</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"option__value-option\">Голубой</div>\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"collected-product\">
\t\t\t\t\t\t\t\t<div class=\"collected-product__image-wrapper\">
\t\t\t\t\t\t\t\t\t<div class=\"collected-product__image-wrapper-image\"><img src=\"";
        // line 65
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/dest/1/37416640299.jpg");
        echo "\" alt=\"\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"collected-product__image-wrapper-count-wrap-collected\">
\t\t\t\t\t\t\t\t\t\t<div class=\"count-wrap\" id=\"product-123\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"count-up\">+</div>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control amount-product\" id=\"count-2\" placeholder=\"1\" value=\"1\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"count-down\">-</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"collected-product__content\">
\t\t\t\t\t\t\t\t\t<div class=\"collected-product__content-delete-product\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 76
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/small_close.svg");
        echo "\" alt=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"collected-product__content-pr-title\">
\t\t\t\t\t\t\t\t\t\tДжемпер вязки «косы» с воротником-стойкой
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"collected-product__content-pr-price-wrap\">
\t\t\t\t\t\t\t\t\t\t<div class=\"old-price\">5999<span class=\"rub\"><img src=\"";
        // line 82
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/Rub.svg");
        echo "\" alt=\"\"></span></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"today-price\">
\t\t\t\t\t\t\t\t\t\t\t4800 <span class=\"rub\"><img src=\"";
        // line 84
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/Rub.svg");
        echo "\" alt=\"\"></span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"collected-product__content-options\">
\t\t\t\t\t\t\t\t\t\t<div class=\"option__item\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"option__item-label-option\">Размер</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"option__value-option\">L</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"option__item\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"option__item-label-option\">Цвет</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"option__value-option\">Голубой</div>\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"cupon-input\">
\t\t\t\t\t\t\t<label for=\"cupon\">Ввести код купона</label>
\t\t\t\t\t\t\t<input id=\"cupon\" class=\"input__cupon\" name=\"cupon\" type=\"text\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"summary\">
\t\t\t\t\t\t\t<div class=\"summary__item\">
\t\t\t\t\t\t\t\t<div class=\"summary-label\">Стоимость</div>
\t\t\t\t\t\t\t\t<div class=\"summary-value\">4800<span class=\"rub\"><img src=\"";
        // line 107
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/Rub.svg");
        echo "\" alt=\"\"></span></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"summary__item\">
\t\t\t\t\t\t\t\t<div class=\"summary-label\">НДС</div>
\t\t\t\t\t\t\t\t<div class=\"summary-value\">0<span class=\"rub\"><img src=\"";
        // line 111
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/Rub.svg");
        echo "\" alt=\"\"></span></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"summary__item\">
\t\t\t\t\t\t\t\t<div class=\"summary-label\">Скидка</div>
\t\t\t\t\t\t\t\t<div class=\"summary-value\">0<span class=\"rub\"><img src=\"";
        // line 115
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/Rub.svg");
        echo "\" alt=\"\"></span></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"summary__item\">
\t\t\t\t\t\t\t\t<div class=\"summary-label\">Скидка по купону</div>
\t\t\t\t\t\t\t\t<div class=\"summary-value\">0<span class=\"rub\"><img src=\"";
        // line 119
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/Rub.svg");
        echo "\" alt=\"\"></span></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"summary__item summ\">
\t\t\t\t\t\t\t\t<div class=\"summary-label\">Итого стоимость</div>
\t\t\t\t\t\t\t\t<div class=\"summary-value\">4800<span class=\"rub\"><img src=\"";
        // line 123
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/Rub.svg");
        echo "\" alt=\"\"></span></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"cart-footer\">
\t\t\t\t\t<div class=\"cart-footer--center\">
\t\t\t\t\t\t<a href=\"#\" id=\"empty-cart\" class=\"btn btn-primary secondary cartevent show\">Начать покупки</a>
\t\t\t\t\t\t<a href=\"#\" id=\"filled-cart\" class=\"btn btn-primary secondary cartevent\">Оформить покупку</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>";
    }

    public function getTemplateName()
    {
        return "C:\\OSPanel\\domains\\hatan.loc/themes/hatan/partials/modal-microcart.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 123,  220 => 119,  213 => 115,  206 => 111,  199 => 107,  173 => 84,  168 => 82,  159 => 76,  145 => 65,  125 => 48,  120 => 46,  111 => 40,  97 => 29,  79 => 14,  70 => 8,  62 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{##}
<div class=\"microcart\">
\t\t<div class=\"cart-dialog\">
\t\t\t<div class=\"cart-content\">
\t\t\t\t<div class=\"cart-header\">
\t\t\t\t\t<div></div>
\t\t\t\t\t<div class=\"close\">
\t\t\t\t\t\t<img src=\"{{'assets/images/Close-circle.svg' | theme }}\" alt=\"\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"cart-body\">
\t\t\t\t\t<div class=\"cart-empty show\">
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
\t\t\t\t\t<div class=\"cart-filled\">
\t\t\t\t\t\t<div class=\"cart-items\">
\t\t\t\t\t\t\t<div class=\"collected-product\">
\t\t\t\t\t\t\t\t<div class=\"collected-product__image-wrapper\">
\t\t\t\t\t\t\t\t\t<div class=\"collected-product__image-wrapper-image\"><img src=\"{{ 'assets/images/dest/1/37416640299.jpg' | theme }}\" alt=\"\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"collected-product__image-wrapper-count-wrap-collected\">
\t\t\t\t\t\t\t\t\t\t<div class=\"count-wrap\" id=\"product-123\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"count-up\">+</div>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control amount-product\" id=\"count-1\" placeholder=\"1\" value=\"1\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"count-down\">-</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"collected-product__content\">
\t\t\t\t\t\t\t\t\t<div class=\"collected-product__content-delete-product\">
\t\t\t\t\t\t\t\t\t\t<img src=\"{{ 'assets/images/small_close.svg' | theme }}\" alt=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"collected-product__content-pr-title\">
\t\t\t\t\t\t\t\t\t\tДжемпер вязки «косы» с воротником-стойкой
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"collected-product__content-pr-price-wrap\">
\t\t\t\t\t\t\t\t\t\t<div class=\"old-price\">5999<span class=\"rub\"><img src=\"{{ 'assets/images/Rub.svg' | theme }}\" alt=\"\"></span></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"today-price\">
\t\t\t\t\t\t\t\t\t\t\t4800 <span class=\"rub\"><img src=\"{{'assets/images/Rub.svg' | theme }}\" alt=\"\"></span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"collected-product__content-options\">
\t\t\t\t\t\t\t\t\t\t<div class=\"option__item\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"option__item-label-option\">Размер</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"option__value-option\">L</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"option__item\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"option__item-label-option\">Цвет</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"option__value-option\">Голубой</div>\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"collected-product\">
\t\t\t\t\t\t\t\t<div class=\"collected-product__image-wrapper\">
\t\t\t\t\t\t\t\t\t<div class=\"collected-product__image-wrapper-image\"><img src=\"{{ 'assets/images/dest/1/37416640299.jpg' | theme }}\" alt=\"\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"collected-product__image-wrapper-count-wrap-collected\">
\t\t\t\t\t\t\t\t\t\t<div class=\"count-wrap\" id=\"product-123\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"count-up\">+</div>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control amount-product\" id=\"count-2\" placeholder=\"1\" value=\"1\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"count-down\">-</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"collected-product__content\">
\t\t\t\t\t\t\t\t\t<div class=\"collected-product__content-delete-product\">
\t\t\t\t\t\t\t\t\t\t<img src=\"{{ 'assets/images/small_close.svg' | theme }}\" alt=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"collected-product__content-pr-title\">
\t\t\t\t\t\t\t\t\t\tДжемпер вязки «косы» с воротником-стойкой
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"collected-product__content-pr-price-wrap\">
\t\t\t\t\t\t\t\t\t\t<div class=\"old-price\">5999<span class=\"rub\"><img src=\"{{ 'assets/images/Rub.svg' |theme }}\" alt=\"\"></span></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"today-price\">
\t\t\t\t\t\t\t\t\t\t\t4800 <span class=\"rub\"><img src=\"{{ 'assets/images/Rub.svg' | theme }}\" alt=\"\"></span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"collected-product__content-options\">
\t\t\t\t\t\t\t\t\t\t<div class=\"option__item\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"option__item-label-option\">Размер</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"option__value-option\">L</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"option__item\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"option__item-label-option\">Цвет</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"option__value-option\">Голубой</div>\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"cupon-input\">
\t\t\t\t\t\t\t<label for=\"cupon\">Ввести код купона</label>
\t\t\t\t\t\t\t<input id=\"cupon\" class=\"input__cupon\" name=\"cupon\" type=\"text\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"summary\">
\t\t\t\t\t\t\t<div class=\"summary__item\">
\t\t\t\t\t\t\t\t<div class=\"summary-label\">Стоимость</div>
\t\t\t\t\t\t\t\t<div class=\"summary-value\">4800<span class=\"rub\"><img src=\"{{ 'assets/images/Rub.svg' | theme }}\" alt=\"\"></span></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"summary__item\">
\t\t\t\t\t\t\t\t<div class=\"summary-label\">НДС</div>
\t\t\t\t\t\t\t\t<div class=\"summary-value\">0<span class=\"rub\"><img src=\"{{ 'assets/images/Rub.svg' | theme }}\" alt=\"\"></span></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"summary__item\">
\t\t\t\t\t\t\t\t<div class=\"summary-label\">Скидка</div>
\t\t\t\t\t\t\t\t<div class=\"summary-value\">0<span class=\"rub\"><img src=\"{{ 'assets/images/Rub.svg' | theme }}\" alt=\"\"></span></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"summary__item\">
\t\t\t\t\t\t\t\t<div class=\"summary-label\">Скидка по купону</div>
\t\t\t\t\t\t\t\t<div class=\"summary-value\">0<span class=\"rub\"><img src=\"{{ 'assets/images/Rub.svg' | theme }}\" alt=\"\"></span></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"summary__item summ\">
\t\t\t\t\t\t\t\t<div class=\"summary-label\">Итого стоимость</div>
\t\t\t\t\t\t\t\t<div class=\"summary-value\">4800<span class=\"rub\"><img src=\"{{ 'assets/images/Rub.svg' | theme }}\" alt=\"\"></span></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"cart-footer\">
\t\t\t\t\t<div class=\"cart-footer--center\">
\t\t\t\t\t\t<a href=\"#\" id=\"empty-cart\" class=\"btn btn-primary secondary cartevent show\">Начать покупки</a>
\t\t\t\t\t\t<a href=\"#\" id=\"filled-cart\" class=\"btn btn-primary secondary cartevent\">Оформить покупку</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>", "C:\\OSPanel\\domains\\hatan.loc/themes/hatan/partials/modal-microcart.htm", "");
    }
}
