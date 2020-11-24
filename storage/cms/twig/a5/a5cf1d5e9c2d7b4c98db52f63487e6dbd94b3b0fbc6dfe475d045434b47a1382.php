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

/* C:\OSPanel\domains\hatan.loc/themes/hatan/pages/home.htm */
class __TwigTemplate_f22fd7bb3ae9c71617b2a7437767330ba21b7bea57a2311f06050892fd0471d9 extends \Twig\Template
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
        $filters = array("theme" => 14);
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
        // line 1
        echo "<div class=\"carousel-wrapper\">
\t<div class=\"container\">
\t\t<div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\">
\t\t\t<ol class=\"carousel-indicators\">
\t\t\t  <li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"></li>
\t\t\t  <li data-target=\"#myCarousel\" data-slide-to=\"1\"></li>
\t\t\t  <li data-target=\"#myCarousel\" data-slide-to=\"2\"></li>
\t\t\t</ol>
\t\t\t<div class=\"carousel-inner\">
\t\t\t  \t<div class=\"carousel-item active\">
\t\t\t\t  
\t\t\t\t\t<div class=\"content-slide dark\">
\t\t\t\t\t\t<div class=\"img-slide\">
\t\t\t\t\t\t\t<img src=\"";
        // line 14
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/dest/Photo.png");
        echo "\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"slide-content\">
\t\t\t\t\t\t\t<div class=\"subtitle\">
\t\t\t\t\t\t\t\tЗима 2020
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"title-slide\">
\t\t\t\t\t\t\t\t<h2>Встречай зиму легко!<br>Пуховики от 5999 руб.</h2>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"btn-slide\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-primary\">Смотреть коллекцию</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t  \t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t
\t\t\t<a class=\"carousel-control-prev\" href=\"#myCarousel\" role=\"button\" data-slide=\"prev\">
\t\t\t  \t<span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>\t\t\t\t  
\t\t\t</a>
\t\t\t<a class=\"carousel-control-next\" href=\"#myCarousel\" role=\"button\" data-slide=\"next\">
\t\t\t  \t<span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>\t\t\t\t  
\t\t\t</a>
\t\t</div>
\t</div>\t\t
</div>\t
<div class=\"main-banners\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-sm-12 col-md-4 col-lg-3 col-xl-3 col-xxl-3\">
\t\t\t\t<div class=\"banner type-f\">
\t\t\t\t\t<img src=\"";
        // line 45
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/dest/bannerF.jpg");
        echo "\" alt=\"Бонусы по акции\">
\t\t\t\t\t<div class=\"content-banner\">
\t\t\t\t\t\t<div class=\"subtitle\">
\t\t\t\t\t\t\tАкции
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"title\">
\t\t\t\t\t\t\t<h2>Бонусы по акции</h2>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tОплатите до 30% стоимости товара бонусами. Торопитесь оплатить бонусами
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-primary secondary\">Подробнее</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-sm-12 col-md-4 col-lg-6 col-xl-6 col-xxl-6\">
\t\t\t\t<div class=\"banner type-e dark\">
\t\t\t\t\t<img src=\"";
        // line 64
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/dest/bannerE.jpg");
        echo "\" alt=\"Бонусы по акции\">
\t\t\t\t\t<div class=\"content-banner\">
\t\t\t\t\t\t<div class=\"subtitle\">
\t\t\t\t\t\t\tАкции
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"title\">
\t\t\t\t\t\t\t<h2>Всемирный день шопинга</h2>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t11.11 Всемирный день шопинга. Соберите корзину уже сейчас
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-primary secondary\">Начать шопинг</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-sm-12 col-md-4 col-lg-3 col-xl-3 col-xxl-3\">
\t\t\t\t<div class=\"banner type-f small\">
\t\t\t\t\t<a href=\"\"><img src=\"";
        // line 83
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/dest/bannerE_small.jpg");
        echo "\" alt=\"Бонусы по акции\"></a>\t\t\t\t\t\t
\t\t\t\t\t<div class=\"content-banner\">
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"title\">
\t\t\t\t\t\t\t<h2>Для нее</h2>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"banner type-f small dark\">
\t\t\t\t\t<a href=\"\"><img src=\"";
        // line 93
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/dest/bannerF_small.jpg");
        echo "\" alt=\"Бонусы по акции\"></a>
\t\t\t\t\t<div class=\"content-banner\">
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"title\">
\t\t\t\t\t\t\t<h2>Для него</h2>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<div class=\"call-to-action\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col\">
\t\t\t\t<div class=\"call-to-action-wrapper\">
\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t<h2>Подпишитесь на рассылку</h2>
\t\t\t\t\t\t<p>Будьте в курсе всех обновлений и акций нашего магазина</p>
\t\t\t\t\t</div>
\t\t\t\t\t<a href=\"\" class=\"btn btn-primary\">
\t\t\t\t\t\tПодписаться
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<div class=\"bestsellers\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col d-flex justify-content-center\">
\t\t\t\t<div class=\"title\">
\t\t\t\t\t<h2>Популярные товары</h2>
\t\t\t\t</div>\t\t\t\t\t
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t<div class=\"col\">
\t\t\t\t<div id=\"carouselExampleIndicators\" class=\"carousel slide products\" data-ride=\"carousel\">
\t\t\t\t\t<ol class=\"carousel-indicators\">
\t\t\t\t\t  \t<li data-target=\"#carouselExampleIndicators\" data-slide-to=\"0\" class=\"active\"></li>
\t\t\t\t\t  \t<li data-target=\"#carouselExampleIndicators\" data-slide-to=\"1\"></li>
\t\t\t\t\t  \t<li data-target=\"#carouselExampleIndicators\" data-slide-to=\"2\"></li>
\t\t\t\t\t</ol>
\t\t\t\t\t<div class=\"carousel-inner\">
\t\t\t\t\t  \t<div class=\"carousel-item active\" >
\t\t\t\t\t\t\t<div class=\"product-wrapper\">
\t\t\t\t\t\t\t\t<div class=\"product-card\">
\t\t\t\t\t\t\t\t\t<div class=\"card-img-wrapper\">
\t\t\t\t\t\t\t\t\t\t<a href=\"product-single.html\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 146
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/dest/1/37416640299.jpg");
        echo "\" alt=\"\" class=\"card-img-top\">
\t\t\t\t\t\t\t\t\t\t</a>\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"card-content-wrapper\">
\t\t\t\t\t\t\t\t\t\t<div class=\"product-title\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t<h4>Джемпер структурной вязки</h4>
\t\t\t\t\t\t\t\t\t\t\t</a>\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"price\">
\t\t\t\t\t\t\t\t\t\t\t4800<span class=\"rub\"><img src=\"";
        // line 156
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/Rub.svg");
        echo "\" alt=\"\"></span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"raiting-wrapper\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"star-wrapper\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"star\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"star\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"star\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"star\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"star none\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"star-count\">
\t\t\t\t\t\t\t\t\t\t\t\t(8)
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t\t<div class=\"cart\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 187
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/Cart-icon.svg");
        echo "\" alt=\"\">\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t\t<div class=\"badje\">
\t\t\t\t\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t\t\t\t\t15%
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product-card\">
\t\t\t\t\t\t\t\t\t<div class=\"card-img-wrapper\">
\t\t\t\t\t\t\t\t\t\t<a href=\"product-single.html\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 198
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/dest/2/37375710299.jpg");
        echo "\" alt=\"\" class=\"card-img-top\">
\t\t\t\t\t\t\t\t\t\t</a>\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"card-content-wrapper\">
\t\t\t\t\t\t\t\t\t\t<div class=\"product-title\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t<h4>Джемпер структурной вязки</h4>
\t\t\t\t\t\t\t\t\t\t\t</a>\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"price\">
\t\t\t\t\t\t\t\t\t\t\t4800<span class=\"rub\"><img src=\"";
        // line 208
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/Rub.svg");
        echo "\" alt=\"\"></span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"raiting-wrapper\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"star-wrapper\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"star\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"star\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"star\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"star\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"star none\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"star-count\">
\t\t\t\t\t\t\t\t\t\t\t\t(8)
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t\t<div class=\"cart\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 239
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/Cart-icon.svg");
        echo "\" alt=\"\">\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t\t<div class=\"badje active\">
\t\t\t\t\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t\t\t\t\t15%
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product-card\">
\t\t\t\t\t\t\t\t\t<div class=\"card-img-wrapper\">
\t\t\t\t\t\t\t\t\t\t<a href=\"product-single.html\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 250
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/dest/3/37488640299.jpg");
        echo "\" alt=\"\" class=\"card-img-top\">
\t\t\t\t\t\t\t\t\t\t</a>\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"card-content-wrapper\">
\t\t\t\t\t\t\t\t\t\t<div class=\"product-title\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t<h4>Джемпер структурной вязки</h4>
\t\t\t\t\t\t\t\t\t\t\t</a>\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"price\">
\t\t\t\t\t\t\t\t\t\t\t4800<span class=\"rub\"><img src=\"";
        // line 260
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/Rub.svg");
        echo "\" alt=\"\"></span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"raiting-wrapper\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"star-wrapper\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"star\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"star\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"star\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"star\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"star none\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"star-count\">
\t\t\t\t\t\t\t\t\t\t\t\t(8)
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t\t<div class=\"cart\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 291
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/Cart-icon.svg");
        echo "\" alt=\"\">\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t\t<div class=\"badje\">
\t\t\t\t\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t\t\t\t\t15%
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product-card\">
\t\t\t\t\t\t\t\t\t<div class=\"card-img-wrapper\">
\t\t\t\t\t\t\t\t\t\t<a href=\"product-single.html\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 302
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/dest/1/37416640299.jpg");
        echo "\" alt=\"\" class=\"card-img-top\">
\t\t\t\t\t\t\t\t\t\t</a>\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"card-content-wrapper\">
\t\t\t\t\t\t\t\t\t\t<div class=\"product-title\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t<h4>Джемпер структурной вязки</h4>
\t\t\t\t\t\t\t\t\t\t\t</a>\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"price\">
\t\t\t\t\t\t\t\t\t\t\t4800<span class=\"rub\"><img src=\"";
        // line 312
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/Rub.svg");
        echo "\" alt=\"\"></span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"raiting-wrapper\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"star-wrapper\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"star\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"star\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"star\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"star\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"star none\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"star-count\">
\t\t\t\t\t\t\t\t\t\t\t\t(8)
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t\t<div class=\"cart\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 343
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/Cart-icon.svg");
        echo "\" alt=\"\">\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t\t<div class=\"badje\">
\t\t\t\t\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t\t\t\t\t15%
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t\t
\t\t\t\t\t  \t</div>\t\t\t\t\t\t  \t
\t\t\t\t\t</div>
\t\t\t\t\t<a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">
\t\t\t\t\t  \t<span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>\t\t\t\t\t\t  \t
\t\t\t\t\t</a>
\t\t\t\t\t<a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">
\t\t\t\t\t  \t<span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>\t\t\t\t\t\t  \t
\t\t\t\t\t</a>
\t\t\t\t  </div>
\t\t\t</div>
\t\t</div>
\t</div>

</div>
<div class=\"lookbook\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col d-flex flex-column align-items-center justify-content-center\">
\t\t\t\t<div class=\"title\">
\t\t\t\t\t<h2>Осенняя коллекция</h2>
\t\t\t\t</div>
\t\t\t\t<div class=\"subtitle\">
\t\t\t\t\t<h6>LOOKBOOK</h6>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-sm-12 cl-md-6 col-lg-6 col-xl-6 col-xxl-6 d-flex flex-column align-items-end\">
\t\t\t\t<div class=\"card-gallery big\">
\t\t\t\t\t<img src=\"";
        // line 381
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/dest/2/37375710299.jpg");
        echo "\" alt=\"\">
\t\t\t\t\t<div class=\"overlay\"></div>
\t\t\t\t\t<div class=\"title-gallery\">
\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t<h6>Смотреть</h6>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"card-gallery\">
\t\t\t\t\t<img src=\"";
        // line 390
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/dest/3/37488640299.jpg");
        echo "\" alt=\"\">
\t\t\t\t\t<div class=\"overlay\"></div>
\t\t\t\t\t<div class=\"title-gallery\">
\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t<h6>Смотреть</h6>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-sm-12 cl-md-6 col-lg-6 col-xl-6 col-xxl-6 d-flex flex-column align-items-start\">
\t\t\t\t<div class=\"card-gallery\">
\t\t\t\t\t<img src=\"";
        // line 401
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/dest/4/37917310299.jpg");
        echo "\" alt=\"\">
\t\t\t\t\t<div class=\"overlay\"></div>
\t\t\t\t\t<div class=\"title-gallery\">
\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t<h6>Смотреть</h6>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"card-gallery big\">
\t\t\t\t\t<img src=\"";
        // line 410
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/dest/5/38359520299.jpg");
        echo "\" alt=\"\">
\t\t\t\t\t<div class=\"overlay\"></div>
\t\t\t\t\t<div class=\"title-gallery\">
\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t<h6>Смотреть</h6>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>\t\t\t\t\t
\t\t\t</div>
\t\t</div>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\OSPanel\\domains\\hatan.loc/themes/hatan/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  533 => 410,  521 => 401,  507 => 390,  495 => 381,  454 => 343,  420 => 312,  407 => 302,  393 => 291,  359 => 260,  346 => 250,  332 => 239,  298 => 208,  285 => 198,  271 => 187,  237 => 156,  224 => 146,  168 => 93,  155 => 83,  133 => 64,  111 => 45,  77 => 14,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"carousel-wrapper\">
\t<div class=\"container\">
\t\t<div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\">
\t\t\t<ol class=\"carousel-indicators\">
\t\t\t  <li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"></li>
\t\t\t  <li data-target=\"#myCarousel\" data-slide-to=\"1\"></li>
\t\t\t  <li data-target=\"#myCarousel\" data-slide-to=\"2\"></li>
\t\t\t</ol>
\t\t\t<div class=\"carousel-inner\">
\t\t\t  \t<div class=\"carousel-item active\">
\t\t\t\t  
\t\t\t\t\t<div class=\"content-slide dark\">
\t\t\t\t\t\t<div class=\"img-slide\">
\t\t\t\t\t\t\t<img src=\"{{ 'assets/images/dest/Photo.png' | theme }}\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"slide-content\">
\t\t\t\t\t\t\t<div class=\"subtitle\">
\t\t\t\t\t\t\t\tЗима 2020
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"title-slide\">
\t\t\t\t\t\t\t\t<h2>Встречай зиму легко!<br>Пуховики от 5999 руб.</h2>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"btn-slide\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-primary\">Смотреть коллекцию</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t  \t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t
\t\t\t<a class=\"carousel-control-prev\" href=\"#myCarousel\" role=\"button\" data-slide=\"prev\">
\t\t\t  \t<span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>\t\t\t\t  
\t\t\t</a>
\t\t\t<a class=\"carousel-control-next\" href=\"#myCarousel\" role=\"button\" data-slide=\"next\">
\t\t\t  \t<span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>\t\t\t\t  
\t\t\t</a>
\t\t</div>
\t</div>\t\t
</div>\t
<div class=\"main-banners\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-sm-12 col-md-4 col-lg-3 col-xl-3 col-xxl-3\">
\t\t\t\t<div class=\"banner type-f\">
\t\t\t\t\t<img src=\"{{ 'assets/images/dest/bannerF.jpg' | theme }}\" alt=\"Бонусы по акции\">
\t\t\t\t\t<div class=\"content-banner\">
\t\t\t\t\t\t<div class=\"subtitle\">
\t\t\t\t\t\t\tАкции
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"title\">
\t\t\t\t\t\t\t<h2>Бонусы по акции</h2>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tОплатите до 30% стоимости товара бонусами. Торопитесь оплатить бонусами
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-primary secondary\">Подробнее</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-sm-12 col-md-4 col-lg-6 col-xl-6 col-xxl-6\">
\t\t\t\t<div class=\"banner type-e dark\">
\t\t\t\t\t<img src=\"{{ 'assets/images/dest/bannerE.jpg' | theme }}\" alt=\"Бонусы по акции\">
\t\t\t\t\t<div class=\"content-banner\">
\t\t\t\t\t\t<div class=\"subtitle\">
\t\t\t\t\t\t\tАкции
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"title\">
\t\t\t\t\t\t\t<h2>Всемирный день шопинга</h2>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t11.11 Всемирный день шопинга. Соберите корзину уже сейчас
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-primary secondary\">Начать шопинг</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-sm-12 col-md-4 col-lg-3 col-xl-3 col-xxl-3\">
\t\t\t\t<div class=\"banner type-f small\">
\t\t\t\t\t<a href=\"\"><img src=\"{{ 'assets/images/dest/bannerE_small.jpg' | theme }}\" alt=\"Бонусы по акции\"></a>\t\t\t\t\t\t
\t\t\t\t\t<div class=\"content-banner\">
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"title\">
\t\t\t\t\t\t\t<h2>Для нее</h2>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"banner type-f small dark\">
\t\t\t\t\t<a href=\"\"><img src=\"{{ 'assets/images/dest/bannerF_small.jpg' | theme }}\" alt=\"Бонусы по акции\"></a>
\t\t\t\t\t<div class=\"content-banner\">
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"title\">
\t\t\t\t\t\t\t<h2>Для него</h2>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<div class=\"call-to-action\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col\">
\t\t\t\t<div class=\"call-to-action-wrapper\">
\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t<h2>Подпишитесь на рассылку</h2>
\t\t\t\t\t\t<p>Будьте в курсе всех обновлений и акций нашего магазина</p>
\t\t\t\t\t</div>
\t\t\t\t\t<a href=\"\" class=\"btn btn-primary\">
\t\t\t\t\t\tПодписаться
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<div class=\"bestsellers\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col d-flex justify-content-center\">
\t\t\t\t<div class=\"title\">
\t\t\t\t\t<h2>Популярные товары</h2>
\t\t\t\t</div>\t\t\t\t\t
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t<div class=\"col\">
\t\t\t\t<div id=\"carouselExampleIndicators\" class=\"carousel slide products\" data-ride=\"carousel\">
\t\t\t\t\t<ol class=\"carousel-indicators\">
\t\t\t\t\t  \t<li data-target=\"#carouselExampleIndicators\" data-slide-to=\"0\" class=\"active\"></li>
\t\t\t\t\t  \t<li data-target=\"#carouselExampleIndicators\" data-slide-to=\"1\"></li>
\t\t\t\t\t  \t<li data-target=\"#carouselExampleIndicators\" data-slide-to=\"2\"></li>
\t\t\t\t\t</ol>
\t\t\t\t\t<div class=\"carousel-inner\">
\t\t\t\t\t  \t<div class=\"carousel-item active\" >
\t\t\t\t\t\t\t<div class=\"product-wrapper\">
\t\t\t\t\t\t\t\t<div class=\"product-card\">
\t\t\t\t\t\t\t\t\t<div class=\"card-img-wrapper\">
\t\t\t\t\t\t\t\t\t\t<a href=\"product-single.html\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{ 'assets/images/dest/1/37416640299.jpg' | theme }}\" alt=\"\" class=\"card-img-top\">
\t\t\t\t\t\t\t\t\t\t</a>\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"card-content-wrapper\">
\t\t\t\t\t\t\t\t\t\t<div class=\"product-title\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t<h4>Джемпер структурной вязки</h4>
\t\t\t\t\t\t\t\t\t\t\t</a>\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"price\">
\t\t\t\t\t\t\t\t\t\t\t4800<span class=\"rub\"><img src=\"{{ 'assets/images/Rub.svg' | theme }}\" alt=\"\"></span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"raiting-wrapper\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"star-wrapper\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"star\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"star\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"star\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"star\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"star none\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"star-count\">
\t\t\t\t\t\t\t\t\t\t\t\t(8)
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t\t<div class=\"cart\">
\t\t\t\t\t\t\t\t\t\t<img src=\"{{ 'assets/images/Cart-icon.svg' | theme }}\" alt=\"\">\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t\t<div class=\"badje\">
\t\t\t\t\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t\t\t\t\t15%
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product-card\">
\t\t\t\t\t\t\t\t\t<div class=\"card-img-wrapper\">
\t\t\t\t\t\t\t\t\t\t<a href=\"product-single.html\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{ 'assets/images/dest/2/37375710299.jpg' | theme }}\" alt=\"\" class=\"card-img-top\">
\t\t\t\t\t\t\t\t\t\t</a>\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"card-content-wrapper\">
\t\t\t\t\t\t\t\t\t\t<div class=\"product-title\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t<h4>Джемпер структурной вязки</h4>
\t\t\t\t\t\t\t\t\t\t\t</a>\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"price\">
\t\t\t\t\t\t\t\t\t\t\t4800<span class=\"rub\"><img src=\"{{ 'assets/images/Rub.svg' | theme }}\" alt=\"\"></span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"raiting-wrapper\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"star-wrapper\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"star\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"star\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"star\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"star\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"star none\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"star-count\">
\t\t\t\t\t\t\t\t\t\t\t\t(8)
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t\t<div class=\"cart\">
\t\t\t\t\t\t\t\t\t\t<img src=\"{{ 'assets/images/Cart-icon.svg' | theme }}\" alt=\"\">\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t\t<div class=\"badje active\">
\t\t\t\t\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t\t\t\t\t15%
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product-card\">
\t\t\t\t\t\t\t\t\t<div class=\"card-img-wrapper\">
\t\t\t\t\t\t\t\t\t\t<a href=\"product-single.html\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{ 'assets/images/dest/3/37488640299.jpg' | theme }}\" alt=\"\" class=\"card-img-top\">
\t\t\t\t\t\t\t\t\t\t</a>\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"card-content-wrapper\">
\t\t\t\t\t\t\t\t\t\t<div class=\"product-title\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t<h4>Джемпер структурной вязки</h4>
\t\t\t\t\t\t\t\t\t\t\t</a>\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"price\">
\t\t\t\t\t\t\t\t\t\t\t4800<span class=\"rub\"><img src=\"{{ 'assets/images/Rub.svg' | theme }}\" alt=\"\"></span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"raiting-wrapper\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"star-wrapper\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"star\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"star\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"star\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"star\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"star none\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"star-count\">
\t\t\t\t\t\t\t\t\t\t\t\t(8)
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t\t<div class=\"cart\">
\t\t\t\t\t\t\t\t\t\t<img src=\"{{ 'assets/images/Cart-icon.svg' | theme }}\" alt=\"\">\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t\t<div class=\"badje\">
\t\t\t\t\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t\t\t\t\t15%
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product-card\">
\t\t\t\t\t\t\t\t\t<div class=\"card-img-wrapper\">
\t\t\t\t\t\t\t\t\t\t<a href=\"product-single.html\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{ 'assets/images/dest/1/37416640299.jpg' | theme }}\" alt=\"\" class=\"card-img-top\">
\t\t\t\t\t\t\t\t\t\t</a>\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"card-content-wrapper\">
\t\t\t\t\t\t\t\t\t\t<div class=\"product-title\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t<h4>Джемпер структурной вязки</h4>
\t\t\t\t\t\t\t\t\t\t\t</a>\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"price\">
\t\t\t\t\t\t\t\t\t\t\t4800<span class=\"rub\"><img src=\"{{ 'assets/images/Rub.svg' | theme }}\" alt=\"\"></span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"raiting-wrapper\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"star-wrapper\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"star\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"star\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"star\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"star\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"star none\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"star-count\">
\t\t\t\t\t\t\t\t\t\t\t\t(8)
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t\t<div class=\"cart\">
\t\t\t\t\t\t\t\t\t\t<img src=\"{{ 'assets/images/Cart-icon.svg' | theme }}\" alt=\"\">\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t\t<div class=\"badje\">
\t\t\t\t\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t\t\t\t\t15%
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t\t
\t\t\t\t\t  \t</div>\t\t\t\t\t\t  \t
\t\t\t\t\t</div>
\t\t\t\t\t<a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">
\t\t\t\t\t  \t<span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>\t\t\t\t\t\t  \t
\t\t\t\t\t</a>
\t\t\t\t\t<a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">
\t\t\t\t\t  \t<span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>\t\t\t\t\t\t  \t
\t\t\t\t\t</a>
\t\t\t\t  </div>
\t\t\t</div>
\t\t</div>
\t</div>

</div>
<div class=\"lookbook\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col d-flex flex-column align-items-center justify-content-center\">
\t\t\t\t<div class=\"title\">
\t\t\t\t\t<h2>Осенняя коллекция</h2>
\t\t\t\t</div>
\t\t\t\t<div class=\"subtitle\">
\t\t\t\t\t<h6>LOOKBOOK</h6>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-sm-12 cl-md-6 col-lg-6 col-xl-6 col-xxl-6 d-flex flex-column align-items-end\">
\t\t\t\t<div class=\"card-gallery big\">
\t\t\t\t\t<img src=\"{{ 'assets/images/dest/2/37375710299.jpg' | theme }}\" alt=\"\">
\t\t\t\t\t<div class=\"overlay\"></div>
\t\t\t\t\t<div class=\"title-gallery\">
\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t<h6>Смотреть</h6>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"card-gallery\">
\t\t\t\t\t<img src=\"{{ 'assets/images/dest/3/37488640299.jpg' | theme }}\" alt=\"\">
\t\t\t\t\t<div class=\"overlay\"></div>
\t\t\t\t\t<div class=\"title-gallery\">
\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t<h6>Смотреть</h6>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-sm-12 cl-md-6 col-lg-6 col-xl-6 col-xxl-6 d-flex flex-column align-items-start\">
\t\t\t\t<div class=\"card-gallery\">
\t\t\t\t\t<img src=\"{{ 'assets/images/dest/4/37917310299.jpg' | theme }}\" alt=\"\">
\t\t\t\t\t<div class=\"overlay\"></div>
\t\t\t\t\t<div class=\"title-gallery\">
\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t<h6>Смотреть</h6>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"card-gallery big\">
\t\t\t\t\t<img src=\"{{ 'assets/images/dest/5/38359520299.jpg' | theme }}\" alt=\"\">
\t\t\t\t\t<div class=\"overlay\"></div>
\t\t\t\t\t<div class=\"title-gallery\">
\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t<h6>Смотреть</h6>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>\t\t\t\t\t
\t\t\t</div>
\t\t</div>
\t</div>
</div>", "C:\\OSPanel\\domains\\hatan.loc/themes/hatan/pages/home.htm", "");
    }
}
