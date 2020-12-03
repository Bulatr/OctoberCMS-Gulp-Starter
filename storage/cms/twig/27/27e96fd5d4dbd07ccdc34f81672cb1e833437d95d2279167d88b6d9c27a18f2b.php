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

/* Z:\domains\hatan.loc/themes/hatan/pages/product-page.htm */
class __TwigTemplate_df51dbef40f705608c69d123fd2099fde6b2aeba48c7a7a8bc432205f2acf072 extends \Twig\Template
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
        $tags = array("partial" => 351);
        $filters = array("theme" => 20);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['partial'],
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
        echo "<div class=\"single-product\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col\">
\t\t\t\t<ul class=\"breadcrumbs\">
\t\t\t\t\t<li class=\"item-breadcrumbs\"><a href=\"\">Женщинам</a></li>
\t\t\t\t\t<li class=\"item-breadcrumbs\"><a href=\"\">Одежда</a> </li>
\t\t\t\t\t<li class=\"item-breadcrumbs\"><a href=\"\">Джемперы и кардиганы</a> </li>
\t\t\t\t\t<li class=\"item-breadcrumbs main\"><a href=\"\"></a> Джемпер с воротником и стойкой</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-sm-12 col-md-12 col-lg-7 col-xl-7 col-xxl-7\">
\t\t\t\t<div class=\"product-gallery\">
\t\t\t\t\t<div class=\"product-gallery-wrapper\">
\t\t\t\t\t\t<div class=\"wishlist\">
\t\t\t\t\t\t\t<div class=\"hearth outline show\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 20
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/Hearth_Outline.svg");
        echo "\" alt=\"\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"hearth filled\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 23
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/Hearth_Filled.svg");
        echo "\" alt=\"\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"product-main active\" id=\"dataimage-1\" data-imageid=\"1\">
\t\t\t\t\t\t\t<img src=\"";
        // line 27
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/dest/1/37416640299.jpg");
        echo "\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"product-main\" id=\"dataimage-2\" data-imageid=\"2\">
\t\t\t\t\t\t\t<img src=\"";
        // line 30
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/dest/1/37416650299.jpg");
        echo "\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"product-main\" id=\"dataimage-3\" data-imageid=\"3\">
\t\t\t\t\t\t\t<img src=\"";
        // line 33
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/dest/1/37416660299.jpg");
        echo "\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"product-main\" id=\"dataimage-4\" data-imageid=\"4\">
\t\t\t\t\t\t\t<img src=\"";
        // line 36
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/dest/1/37416670299.jpg");
        echo "\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<ul class=\"product-gallery-trumb\">
\t\t\t\t\t\t<li class=\"product-gallery-trumbnail\" data-trumbid=\"dataimage-1\">
\t\t\t\t\t\t\t<img src=\"";
        // line 41
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/dest/1/37416640299.jpg");
        echo "\" alt=\"\">
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"product-gallery-trumbnail\" data-trumbid=\"dataimage-2\">
\t\t\t\t\t\t\t<img src=\"";
        // line 44
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/dest/1/37416650299.jpg");
        echo "\" alt=\"\">
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"product-gallery-trumbnail\" data-trumbid=\"dataimage-3\">
\t\t\t\t\t\t\t<img src=\"";
        // line 47
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/dest/1/37416660299.jpg");
        echo "\" alt=\"\">
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"product-gallery-trumbnail\" data-trumbid=\"dataimage-4\">
\t\t\t\t\t\t\t<img src=\"";
        // line 50
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/dest/1/37416670299.jpg");
        echo "\" alt=\"\">
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>\t\t\t\t\t
\t\t\t</div>
\t\t\t<div class=\"col-sm-12 col-md-12 col-lg-5 col-xl-5 col-xxl-5\">
\t\t\t\t<div class=\"product-overlay\">
\t\t\t\t\t<div class=\"product-title\">
\t\t\t\t\t\t<h2>Джемпер с воротником-стойкой</h2>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"product-short\">
\t\t\t\t\t\t<div class=\"price\">5800 <span><img src=\"";
        // line 61
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/Rub.svg");
        echo "\" alt=\"\"></span></div>
\t\t\t\t\t\t<div class=\"raiting-overlay\">
\t\t\t\t\t\t\t<div class=\"raiting-wrapper\">
\t\t\t\t\t\t\t\t<div class=\"star-wrapper\">
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<div class=\"star\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<div class=\"star\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<div class=\"star\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<div class=\"star\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<div class=\"star none\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"star-count\">
\t\t\t\t\t\t\t\t\t(8)
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"add-reviews\">
\t\t\t\t\t\t\t\t<a href=\"\">Добавить отзыв</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"product-text\">
\t\t\t\t\t\t<p>Джемпер вязки «косы» с воротником-стойкой</p>
\t\t\t\t\t\t<p>- Джемпер выполнен из мягкой смесовой пряжи с содержанием шерсти<br>
\t\t\t\t\t\t\t- Длинные рукава</p>\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t<!--Параметры товара-->
\t\t\t\t\t<div class=\"product-options\">
\t\t\t\t\t\t<form>
\t\t\t\t\t\t\t<!--Выбор размера-->
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"size\">Размер</label>
\t\t\t\t\t\t\t\t<select class=\"form-control\" id=\"size\">
\t\t\t\t\t\t\t\t\t<option value=\"L\">L</option>
\t\t\t\t\t\t\t\t\t<option value=\"XL\">XL</option>
\t\t\t\t\t\t\t\t\t<option value=\"XXL\">XXL</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!--Выбор цвета-->
\t\t\t\t\t\t\t<div class=\"color-radio\" id=\"color-radio\">
\t\t\t\t\t\t\t\t<div class=\"label-radio\">Цвет</div>
\t\t\t\t\t\t\t\t<div class=\"wrapper-radio\">
\t\t\t\t\t\t\t\t\t<label><span style=\"background:blue\"></span><input type=\"radio\" value=\"blue\" name=\"color\" />
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t<label><span style=\"background:green\"></span><input type=\"radio\" value=\"green\" name=\"color\" />
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t<label><span style=\"background:red\"></span><input type=\"radio\" value=\"red\" name=\"color\" />
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- Количество -->
\t\t\t\t\t\t\t<div class=\"kol-wrapper\">
\t\t\t\t\t\t\t\t<div class=\"group-kol\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<div class=\"count-wrap\" id=\"product-single-count\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"count-up\">+</div>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control amount-product\" id=\"count\" name=\"amount-product\" placeholder=\"1\" value=\"1\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"count-down\">-</div>
\t\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!--Добавить в корзину-->
\t\t\t\t\t\t\t\t<button type=\"submit\" id=\"addtocart\" class=\"btn btn-primary\">Добавить корзину</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- Остаток -->
\t\t\t\t\t\t\t<div class=\"ostatok\">
\t\t\t\t\t\t\t\t<div class=\"label-ostatok\">
\t\t\t\t\t\t\t\t\tОстаток:
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"value-ostatok\">
\t\t\t\t\t\t\t\t\t25
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"reviews\">
\t\t\t\t\t\t<div class=\"tab\">
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li class=\"tab-item\" id=\"tab1\" data-tab=\"tab1\"><a href=\"#tab1\">Описание</a></li>
\t\t\t\t\t\t\t\t<li class=\"tab-item active\" id=\"tab2\" data-tab=\"tab2\"><a href=\"#tab2\">Отзывы</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t<div class=\"tab-content-item\" id=\"tab1\" data-tabcontent=\"tab1\">
\t\t\t\t\t\t\t\t<div class=\"product-text\">
\t\t\t\t\t\t\t\t\t<p>Джемпер вязки «косы» с воротником-стойкой</p>
\t\t\t\t\t\t\t\t\t<p>- Джемпер выполнен из мягкой смесовой пряжи с содержанием шерсти<br>
\t\t\t\t\t\t\t\t\t- Длинные рукава</p>
\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"tab-content-item show\" id=\"tab2\" data-tabcontent=\"tab2\">
\t\t\t\t\t\t\t\t<div class=\"title-wrap\">
\t\t\t\t\t\t\t\t\t<div class=\"title\">
\t\t\t\t\t\t\t\t\t\t<div class=\"count-r\">2</div>
\t\t\t\t\t\t\t\t\t\t<h3>\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\tОтзыва
\t\t\t\t\t\t\t\t\t\t</h3>\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"raiting-wrapper\">
\t\t\t\t\t\t\t\t\t\t<div class=\"star-wrapper\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"star\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"star\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"star\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"star\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"star none\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"star-count\">
\t\t\t\t\t\t\t\t\t\t\t(8)
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"review-content-wrap\">
\t\t\t\t\t\t\t\t\t<div class=\"review\">
\t\t\t\t\t\t\t\t\t\t<div class=\"review-title\"><span><img src=\"";
        // line 203
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/Verified.svg");
        echo "\" alt=\"\" class=\"icon-verified\"></span> Оксана</div>
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
\t\t\t\t\t\t\t\t\t\t\t<div class=\"star-count data-review\">
\t\t\t\t\t\t\t\t\t\t\t\tДекабрь 2020
\t\t\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"review-content\">
\t\t\t\t\t\t\t\t\t\t\t<p>Очень понравился этот джемпер вязки «косы». Мой любимый, безумно нежный цвет, поднимающий настроение. Теплый и уютный)) Качество супер и длина та, которую я люблю) Советую его всем приобрести, не пожалеете))))</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"read-more\"><a href=\"#\" data-eventclick=\"open\" class=\"button text\">Читать далее</a></div>
\t\t\t\t\t\t\t\t\t<div class=\"review-all-collapse\">
\t\t\t\t\t\t\t\t\t\t<div class=\"review\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"review-title\"><span><img src=\"";
        // line 238
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/Verified.svg");
        echo "\" alt=\"\" class=\"icon-verified\"></span> Оксана</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"raiting-wrapper\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"star-wrapper\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"star\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"star\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"star\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"star\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"star none\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"star-count data-review\">
\t\t\t\t\t\t\t\t\t\t\t\t\tДекабрь 2020
\t\t\t\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"review-content\">
\t\t\t\t\t\t\t\t\t\t\t\t<p>Очень понравился этот джемпер вязки «косы». Мой любимый, безумно нежный цвет, поднимающий настроение. Теплый и уютный)) Качество супер и длина та, которую я люблю) Советую его всем приобрести, не пожалеете))))</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"review\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"review-title\"><span><img src=\"";
        // line 271
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/Verified.svg");
        echo "\" alt=\"\" class=\"icon-verified\"></span> Оксана</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"raiting-wrapper\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"star-wrapper\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"star\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"star\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"star\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"star\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"star none\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"star-count data-review\">
\t\t\t\t\t\t\t\t\t\t\t\t\tДекабрь 2020
\t\t\t\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"review-content\">
\t\t\t\t\t\t\t\t\t\t\t\t<p>Очень понравился этот джемпер вязки «косы». Мой любимый, безумно нежный цвет, поднимающий настроение. Теплый и уютный)) Качество супер и длина та, которую я люблю) Советую его всем приобрести, не пожалеете))))</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>\t\t\t\t\t
\t\t\t</div>
\t\t</div>
\t</div>
</div>

<!-- Modal images -->
<div class=\"modal\" data-modal=\"1\">
\t<div class=\"modal-dialog\">
\t\t<div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<div></div>
\t\t\t\t<div class=\"close\">
\t\t\t\t\t<img src=\"";
        // line 321
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/Cross.svg");
        echo "\" alt=\"\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"modal-body\">
\t\t\t\t<div class=\"modal-icon left\">
\t\t\t\t\t<img id=\"modal-image-left\" src=\"";
        // line 326
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/Direction-Left.svg");
        echo "\" alt=\"\">
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-wrap-images\">
\t\t\t\t\t<img src=\"";
        // line 329
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/dest/1/37416640299.jpg");
        echo "\" alt=\"\" id=\"dataimage-1\" data-modalimageid=\"modal-image-1\" class=\"modal-image show\">
\t\t\t\t\t<img src=\"";
        // line 330
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/dest/1/37416650299.jpg");
        echo "\" alt=\"\" id=\"dataimage-2\" data-modalimageid=\"modal-image-2\" class=\"modal-image\">
\t\t\t\t\t<img src=\"";
        // line 331
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/dest/1/37416660299.jpg");
        echo "\" alt=\"\" id=\"dataimage-3\" data-modalimageid=\"modal-image-3\" class=\"modal-image\">
\t\t\t\t\t<img src=\"";
        // line 332
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/dest/1/37416670299.jpg");
        echo "\" alt=\"\" id=\"dataimage-4\" data-modalimageid=\"modal-image-4\" class=\"modal-image\">
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-icon right\">
\t\t\t\t\t<img id=\"modal-image-right\" src=\"";
        // line 336
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/Direction-Right.svg");
        echo "\" alt=\"\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"modal-footer\">
\t\t\t\t<div class=\"modal-images-thumbs\">
\t\t\t\t\t<img src=\"";
        // line 341
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/dest/1/37416640299.jpg");
        echo "\" alt=\"\" id=\"dataimage-1\" data-modalimageid=\"1\" class=\"modal-thumb-image\">
\t\t\t\t\t<img src=\"";
        // line 342
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/dest/1/37416650299.jpg");
        echo "\" alt=\"\" id=\"dataimage-2\" data-modalimageid=\"2\" class=\"modal-thumb-image\">
\t\t\t\t\t<img src=\"";
        // line 343
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/dest/1/37416660299.jpg");
        echo "\" alt=\"\" id=\"dataimage-3\" data-modalimageid=\"3\" class=\"modal-thumb-image\">
\t\t\t\t\t<img src=\"";
        // line 344
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/dest/1/37416670299.jpg");
        echo "\" alt=\"\" id=\"dataimage-4\" data-modalimageid=\"4\" class=\"modal-thumb-image\">
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>

";
        // line 351
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("similar-products"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 352
        echo "
";
        // line 353
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("banners/banner-1"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 354
        echo "
";
        // line 355
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("related-products"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "Z:\\domains\\hatan.loc/themes/hatan/pages/product-page.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  502 => 355,  499 => 354,  495 => 353,  492 => 352,  488 => 351,  478 => 344,  474 => 343,  470 => 342,  466 => 341,  458 => 336,  451 => 332,  447 => 331,  443 => 330,  439 => 329,  433 => 326,  425 => 321,  372 => 271,  336 => 238,  298 => 203,  153 => 61,  139 => 50,  133 => 47,  127 => 44,  121 => 41,  113 => 36,  107 => 33,  101 => 30,  95 => 27,  88 => 23,  82 => 20,  62 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{##}
<div class=\"single-product\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col\">
\t\t\t\t<ul class=\"breadcrumbs\">
\t\t\t\t\t<li class=\"item-breadcrumbs\"><a href=\"\">Женщинам</a></li>
\t\t\t\t\t<li class=\"item-breadcrumbs\"><a href=\"\">Одежда</a> </li>
\t\t\t\t\t<li class=\"item-breadcrumbs\"><a href=\"\">Джемперы и кардиганы</a> </li>
\t\t\t\t\t<li class=\"item-breadcrumbs main\"><a href=\"\"></a> Джемпер с воротником и стойкой</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-sm-12 col-md-12 col-lg-7 col-xl-7 col-xxl-7\">
\t\t\t\t<div class=\"product-gallery\">
\t\t\t\t\t<div class=\"product-gallery-wrapper\">
\t\t\t\t\t\t<div class=\"wishlist\">
\t\t\t\t\t\t\t<div class=\"hearth outline show\">
\t\t\t\t\t\t\t\t<img src=\"{{'assets/images/Hearth_Outline.svg' | theme }}\" alt=\"\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"hearth filled\">
\t\t\t\t\t\t\t\t<img src=\"{{ 'assets/images/Hearth_Filled.svg' | theme }}\" alt=\"\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"product-main active\" id=\"dataimage-1\" data-imageid=\"1\">
\t\t\t\t\t\t\t<img src=\"{{ 'assets/images/dest/1/37416640299.jpg' | theme }}\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"product-main\" id=\"dataimage-2\" data-imageid=\"2\">
\t\t\t\t\t\t\t<img src=\"{{ 'assets/images/dest/1/37416650299.jpg' | theme }}\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"product-main\" id=\"dataimage-3\" data-imageid=\"3\">
\t\t\t\t\t\t\t<img src=\"{{ 'assets/images/dest/1/37416660299.jpg' | theme }}\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"product-main\" id=\"dataimage-4\" data-imageid=\"4\">
\t\t\t\t\t\t\t<img src=\"{{ 'assets/images/dest/1/37416670299.jpg' | theme }}\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<ul class=\"product-gallery-trumb\">
\t\t\t\t\t\t<li class=\"product-gallery-trumbnail\" data-trumbid=\"dataimage-1\">
\t\t\t\t\t\t\t<img src=\"{{ 'assets/images/dest/1/37416640299.jpg' | theme }}\" alt=\"\">
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"product-gallery-trumbnail\" data-trumbid=\"dataimage-2\">
\t\t\t\t\t\t\t<img src=\"{{ 'assets/images/dest/1/37416650299.jpg' | theme }}\" alt=\"\">
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"product-gallery-trumbnail\" data-trumbid=\"dataimage-3\">
\t\t\t\t\t\t\t<img src=\"{{ 'assets/images/dest/1/37416660299.jpg' | theme }}\" alt=\"\">
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"product-gallery-trumbnail\" data-trumbid=\"dataimage-4\">
\t\t\t\t\t\t\t<img src=\"{{ 'assets/images/dest/1/37416670299.jpg' | theme }}\" alt=\"\">
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>\t\t\t\t\t
\t\t\t</div>
\t\t\t<div class=\"col-sm-12 col-md-12 col-lg-5 col-xl-5 col-xxl-5\">
\t\t\t\t<div class=\"product-overlay\">
\t\t\t\t\t<div class=\"product-title\">
\t\t\t\t\t\t<h2>Джемпер с воротником-стойкой</h2>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"product-short\">
\t\t\t\t\t\t<div class=\"price\">5800 <span><img src=\"{{ 'assets/images/Rub.svg' | theme }}\" alt=\"\"></span></div>
\t\t\t\t\t\t<div class=\"raiting-overlay\">
\t\t\t\t\t\t\t<div class=\"raiting-wrapper\">
\t\t\t\t\t\t\t\t<div class=\"star-wrapper\">
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<div class=\"star\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<div class=\"star\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<div class=\"star\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<div class=\"star\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<div class=\"star none\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"star-count\">
\t\t\t\t\t\t\t\t\t(8)
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"add-reviews\">
\t\t\t\t\t\t\t\t<a href=\"\">Добавить отзыв</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"product-text\">
\t\t\t\t\t\t<p>Джемпер вязки «косы» с воротником-стойкой</p>
\t\t\t\t\t\t<p>- Джемпер выполнен из мягкой смесовой пряжи с содержанием шерсти<br>
\t\t\t\t\t\t\t- Длинные рукава</p>\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t<!--Параметры товара-->
\t\t\t\t\t<div class=\"product-options\">
\t\t\t\t\t\t<form>
\t\t\t\t\t\t\t<!--Выбор размера-->
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"size\">Размер</label>
\t\t\t\t\t\t\t\t<select class=\"form-control\" id=\"size\">
\t\t\t\t\t\t\t\t\t<option value=\"L\">L</option>
\t\t\t\t\t\t\t\t\t<option value=\"XL\">XL</option>
\t\t\t\t\t\t\t\t\t<option value=\"XXL\">XXL</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!--Выбор цвета-->
\t\t\t\t\t\t\t<div class=\"color-radio\" id=\"color-radio\">
\t\t\t\t\t\t\t\t<div class=\"label-radio\">Цвет</div>
\t\t\t\t\t\t\t\t<div class=\"wrapper-radio\">
\t\t\t\t\t\t\t\t\t<label><span style=\"background:blue\"></span><input type=\"radio\" value=\"blue\" name=\"color\" />
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t<label><span style=\"background:green\"></span><input type=\"radio\" value=\"green\" name=\"color\" />
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t<label><span style=\"background:red\"></span><input type=\"radio\" value=\"red\" name=\"color\" />
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- Количество -->
\t\t\t\t\t\t\t<div class=\"kol-wrapper\">
\t\t\t\t\t\t\t\t<div class=\"group-kol\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<div class=\"count-wrap\" id=\"product-single-count\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"count-up\">+</div>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control amount-product\" id=\"count\" name=\"amount-product\" placeholder=\"1\" value=\"1\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"count-down\">-</div>
\t\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!--Добавить в корзину-->
\t\t\t\t\t\t\t\t<button type=\"submit\" id=\"addtocart\" class=\"btn btn-primary\">Добавить корзину</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- Остаток -->
\t\t\t\t\t\t\t<div class=\"ostatok\">
\t\t\t\t\t\t\t\t<div class=\"label-ostatok\">
\t\t\t\t\t\t\t\t\tОстаток:
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"value-ostatok\">
\t\t\t\t\t\t\t\t\t25
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"reviews\">
\t\t\t\t\t\t<div class=\"tab\">
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li class=\"tab-item\" id=\"tab1\" data-tab=\"tab1\"><a href=\"#tab1\">Описание</a></li>
\t\t\t\t\t\t\t\t<li class=\"tab-item active\" id=\"tab2\" data-tab=\"tab2\"><a href=\"#tab2\">Отзывы</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t<div class=\"tab-content-item\" id=\"tab1\" data-tabcontent=\"tab1\">
\t\t\t\t\t\t\t\t<div class=\"product-text\">
\t\t\t\t\t\t\t\t\t<p>Джемпер вязки «косы» с воротником-стойкой</p>
\t\t\t\t\t\t\t\t\t<p>- Джемпер выполнен из мягкой смесовой пряжи с содержанием шерсти<br>
\t\t\t\t\t\t\t\t\t- Длинные рукава</p>
\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"tab-content-item show\" id=\"tab2\" data-tabcontent=\"tab2\">
\t\t\t\t\t\t\t\t<div class=\"title-wrap\">
\t\t\t\t\t\t\t\t\t<div class=\"title\">
\t\t\t\t\t\t\t\t\t\t<div class=\"count-r\">2</div>
\t\t\t\t\t\t\t\t\t\t<h3>\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\tОтзыва
\t\t\t\t\t\t\t\t\t\t</h3>\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"raiting-wrapper\">
\t\t\t\t\t\t\t\t\t\t<div class=\"star-wrapper\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"star\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"star\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"star\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"star\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"star none\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"star-count\">
\t\t\t\t\t\t\t\t\t\t\t(8)
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"review-content-wrap\">
\t\t\t\t\t\t\t\t\t<div class=\"review\">
\t\t\t\t\t\t\t\t\t\t<div class=\"review-title\"><span><img src=\"{{ 'assets/images/Verified.svg' | theme }}\" alt=\"\" class=\"icon-verified\"></span> Оксана</div>
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
\t\t\t\t\t\t\t\t\t\t\t<div class=\"star-count data-review\">
\t\t\t\t\t\t\t\t\t\t\t\tДекабрь 2020
\t\t\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"review-content\">
\t\t\t\t\t\t\t\t\t\t\t<p>Очень понравился этот джемпер вязки «косы». Мой любимый, безумно нежный цвет, поднимающий настроение. Теплый и уютный)) Качество супер и длина та, которую я люблю) Советую его всем приобрести, не пожалеете))))</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"read-more\"><a href=\"#\" data-eventclick=\"open\" class=\"button text\">Читать далее</a></div>
\t\t\t\t\t\t\t\t\t<div class=\"review-all-collapse\">
\t\t\t\t\t\t\t\t\t\t<div class=\"review\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"review-title\"><span><img src=\"{{ 'assets/images/Verified.svg' | theme }}\" alt=\"\" class=\"icon-verified\"></span> Оксана</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"raiting-wrapper\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"star-wrapper\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"star\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"star\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"star\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"star\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"star none\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"star-count data-review\">
\t\t\t\t\t\t\t\t\t\t\t\t\tДекабрь 2020
\t\t\t\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"review-content\">
\t\t\t\t\t\t\t\t\t\t\t\t<p>Очень понравился этот джемпер вязки «косы». Мой любимый, безумно нежный цвет, поднимающий настроение. Теплый и уютный)) Качество супер и длина та, которую я люблю) Советую его всем приобрести, не пожалеете))))</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"review\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"review-title\"><span><img src=\"{{ 'assets/images/Verified.svg' | theme }}\" alt=\"\" class=\"icon-verified\"></span> Оксана</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"raiting-wrapper\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"star-wrapper\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"star\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"star\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"star\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"star\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"star none\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"star-count data-review\">
\t\t\t\t\t\t\t\t\t\t\t\t\tДекабрь 2020
\t\t\t\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"review-content\">
\t\t\t\t\t\t\t\t\t\t\t\t<p>Очень понравился этот джемпер вязки «косы». Мой любимый, безумно нежный цвет, поднимающий настроение. Теплый и уютный)) Качество супер и длина та, которую я люблю) Советую его всем приобрести, не пожалеете))))</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>\t\t\t\t\t
\t\t\t</div>
\t\t</div>
\t</div>
</div>

<!-- Modal images -->
<div class=\"modal\" data-modal=\"1\">
\t<div class=\"modal-dialog\">
\t\t<div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<div></div>
\t\t\t\t<div class=\"close\">
\t\t\t\t\t<img src=\"{{ 'assets/images/Cross.svg' | theme }}\" alt=\"\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"modal-body\">
\t\t\t\t<div class=\"modal-icon left\">
\t\t\t\t\t<img id=\"modal-image-left\" src=\"{{ 'assets/images/Direction-Left.svg' | theme }}\" alt=\"\">
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-wrap-images\">
\t\t\t\t\t<img src=\"{{ 'assets/images/dest/1/37416640299.jpg' | theme }}\" alt=\"\" id=\"dataimage-1\" data-modalimageid=\"modal-image-1\" class=\"modal-image show\">
\t\t\t\t\t<img src=\"{{ 'assets/images/dest/1/37416650299.jpg' | theme }}\" alt=\"\" id=\"dataimage-2\" data-modalimageid=\"modal-image-2\" class=\"modal-image\">
\t\t\t\t\t<img src=\"{{ 'assets/images/dest/1/37416660299.jpg' | theme }}\" alt=\"\" id=\"dataimage-3\" data-modalimageid=\"modal-image-3\" class=\"modal-image\">
\t\t\t\t\t<img src=\"{{ 'assets/images/dest/1/37416670299.jpg' | theme }}\" alt=\"\" id=\"dataimage-4\" data-modalimageid=\"modal-image-4\" class=\"modal-image\">
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-icon right\">
\t\t\t\t\t<img id=\"modal-image-right\" src=\"{{ 'assets/images/Direction-Right.svg' | theme }}\" alt=\"\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"modal-footer\">
\t\t\t\t<div class=\"modal-images-thumbs\">
\t\t\t\t\t<img src=\"{{ 'assets/images/dest/1/37416640299.jpg' | theme }}\" alt=\"\" id=\"dataimage-1\" data-modalimageid=\"1\" class=\"modal-thumb-image\">
\t\t\t\t\t<img src=\"{{ 'assets/images/dest/1/37416650299.jpg' | theme }}\" alt=\"\" id=\"dataimage-2\" data-modalimageid=\"2\" class=\"modal-thumb-image\">
\t\t\t\t\t<img src=\"{{ 'assets/images/dest/1/37416660299.jpg' | theme }}\" alt=\"\" id=\"dataimage-3\" data-modalimageid=\"3\" class=\"modal-thumb-image\">
\t\t\t\t\t<img src=\"{{ 'assets/images/dest/1/37416670299.jpg' | theme }}\" alt=\"\" id=\"dataimage-4\" data-modalimageid=\"4\" class=\"modal-thumb-image\">
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>

{% partial \"similar-products\" %}

{% partial \"banners/banner-1\" %}

{% partial \"related-products\" %}", "Z:\\domains\\hatan.loc/themes/hatan/pages/product-page.htm", "");
    }
}
