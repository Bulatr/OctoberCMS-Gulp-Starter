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

/* C:\OSPanel\domains\hatan.loc/themes/hatan/pages/catalog.htm */
class __TwigTemplate_db1ad12a9139fe1fb8bacabefe10fc78ec935f7796c2e8b546e128a35ce8a6b1 extends \Twig\Template
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
        $tags = array("partial" => 2);
        $filters = array("page" => 114, "theme" => 115);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['partial'],
                ['page', 'theme'],
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
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("filter-modal"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 3
        echo "
<!-- Category-->
<div class=\"category\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col\">
                <ul class=\"breadcrumbs\">
                    <li class=\"item-breadcrumbs\"><a href=\"\">Женщинам</a></li>
                    <li class=\"item-breadcrumbs\"><a href=\"\">Одежда</a> </li>
                    <li class=\"item-breadcrumbs\"><a href=\"\">Джемперы и кардиганы</a> </li>
                    <li class=\"item-breadcrumbs main\"><a href=\"\"></a> Джемпер с воротником и стойкой</li>
                </ul>
                <div class=\"category__row\">
                    <div class=\"sidebar\">
                        <div class=\"sidebar__title\">
                            <h3>Категории</h3>
                        </div>
                        <div class=\"sidebar__content\">
                            <div class=\"sidebar__menu\">
                                <ul class=\"menu-nav\">
                                    <li class=\"menu-nav__item\">
                                        <span class=\"menu-nav__item--main\"><a href=\"\"> Одежда</a></span>
                                        <div class=\"menu-nav__item-submenu\">
                                            <a href=\"\" class=\"item-submenu__link\">Верхняя одежда</a>
                                            <a href=\"\" class=\"item-submenu__link\">Джемперы</a>
                                            <a href=\"\" class=\"item-submenu__link\">Рубашки</a>
                                            <a href=\"\" class=\"item-submenu__link\">Брюки</a>
                                            <a href=\"\" class=\"item-submenu__link\">Джинсы</a>
                                            <a href=\"\" class=\"item-submenu__link\">Нижнее белье</a>
                                        </div>\t\t\t\t\t\t\t
                                    </li>
                                    <li class=\"menu-nav__item\">
                                        <span class=\"menu-nav__item--main\"><a href=\"\">Обувь</a></span>
                                        <div class=\"menu-nav__item-submenu\">
                                            <a href=\"\" class=\"item-submenu__link\">Кроссовки</a>
                                            <a href=\"\" class=\"item-submenu__link\">Туфли</a>
                                            <a href=\"\" class=\"item-submenu__link\">Сапоги</a>
                                            <a href=\"\" class=\"item-submenu__link\">Ботинки</a>
                                        </div>\t\t\t\t\t\t\t
                                    </li>
                                    <li class=\"menu-nav__item\">
                                        <span class=\"menu-nav__item--main\"><a href=\"\">Аксессуары</a></span>
                                        <div class=\"menu-nav__item-submenu\">
                                            <a href=\"\" class=\"item-submenu__link\">Ремни</a>
                                            <a href=\"\" class=\"item-submenu__link\">Сумки</a>
                                        </div>\t\t\t\t\t\t\t
                                    </li>
                                    
                                </ul>
                            </div>
                            <div class=\"sidebar__filter\">
                                <div class=\"sidebar-filter-item\">
                                    <div class=\"sidebar-filter-item__label\">
                                        <a href=\"#\">Посмотреть все</a>
                                    </div>
                                    <div class=\"sidebar-filter-item__value\">
                                        20
                                    </div>\t\t\t\t\t\t\t\t\t\t
                                </div>
                                <div class=\"sidebar-filter-item\">
                                    <div class=\"sidebar-filter-item__label\">
                                        <a href=\"#\">Осень</a>
                                    </div>
                                    <div class=\"sidebar-filter-item__value\">
                                        10
                                    </div>\t\t\t\t\t\t\t\t\t\t
                                </div>
                                <div class=\"sidebar-filter-item\">
                                    <div class=\"sidebar-filter-item__label\">
                                        <a href=\"#\">Зима</a>
                                    </div>
                                    <div class=\"sidebar-filter-item__value\">
                                        10
                                    </div>\t\t\t\t\t\t\t\t\t\t
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"main-container\">
                        <div class=\"filter-bar\">\t\t\t\t\t\t\t\t
                            <div class=\"filter-bar-col-small\">
                                <div class=\"filter-icon\">
                                    <div class=\"filter-icon__image\">
                                        <img src=\"images/Filter.svg\" alt=\"\">
                                    </div>\t\t\t\t\t\t\t\t\t
                                    <div class=\"filter-icon__label\">
                                        Фильтр
                                    </div>\t\t\t\t\t\t\t\t\t
                                </div>
                            </div>
                            <div class=\"filter-bar-col\">
                                <div class=\"filter-sort\">
                                    <div class=\"filter-sort__label\">Сортировка</div>
                                    <div class=\"filter-sort__select\">
                                        <select class=\"sort-select\" name=\"sort-product\" id=\"sort-product\">
                                            <option value=\"priceup\">Возрастанию цены</option>
                                            <option value=\"pricedown\">Убыванию цены</option>
                                            <option value=\"news\">Новизне</option>
                                        </select>
                                    </div>\t\t\t\t\t\t\t\t\t\t
                                </div>
                                <div class=\"kol-item\">
                                    <div class=\"kol-item__label\">Товаров</div>
                                    <div class=\"kol-item__value\">25</div>
                                    
                                </div>
                            </div>
                        </div>
                        <div class=\"wrapper-overlay card-container\">
                            <div class=\"product-card\">
                                <div class=\"card-img-wrapper\">
                                    <a href=\"";
        // line 114
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("product-single");
        echo "\">
                                        <img src=\"";
        // line 115
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/dest/1/37416640299.jpg");
        echo "\" alt=\"\" class=\"card-img-top\">
                                    </a>\t\t\t\t\t\t\t\t\t\t
                                </div>
                                <div class=\"card-content-wrapper\">
                                    <div class=\"product-title\">
                                        <a href=\"\">
                                            <h4>Джемпер структурной вязки</h4>
                                        </a>\t\t\t\t\t\t\t\t\t\t\t
                                    </div>
                                    <div class=\"price\">
                                        4800<span class=\"rub\"><img src=\"";
        // line 125
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/Rub.svg");
        echo "\" alt=\"\"></span>
                                    </div>
                                    <div class=\"raiting-wrapper\">
                                        <div class=\"star-wrapper\">
                                            <a href=\"#\">
                                                <div class=\"star\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                </div>
                                            </a>
                                            <a href=\"#\">
                                                <div class=\"star\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                </div>
                                            </a>
                                            <a href=\"#\">
                                                <div class=\"star\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                </div>
                                            </a>
                                            <a href=\"#\">
                                                <div class=\"star\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                </div>
                                            </a>
                                            <a href=\"#\">
                                                <div class=\"star none\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                </div>
                                            </a>
                                        </div>
                                        <div class=\"star-count\">
                                            (8)
                                        </div>
                                    </div>
                                </div>\t
                                <div class=\"cart\">
                                    <img src=\"";
        // line 156
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/Cart-icon.svg");
        echo "\" alt=\"\">\t\t\t\t\t\t\t\t\t\t
                                </div>\t
                                <div class=\"badje\">
                                    <div class=\"content\">
                                        15%
                                    </div>
                                </div>\t\t\t\t\t\t\t
                            </div>
                            <div class=\"product-card\">
                                <div class=\"card-img-wrapper\">
                                    <a href=\"product-single.html\">
                                        <img src=\"";
        // line 167
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/dest/2/37375710299.jpg");
        echo "\" alt=\"\" class=\"card-img-top\">
                                    </a>\t\t\t\t\t\t\t\t\t\t
                                </div>
                                <div class=\"card-content-wrapper\">
                                    <div class=\"product-title\">
                                        <a href=\"\">
                                            <h4>Джемпер структурной вязки</h4>
                                        </a>\t\t\t\t\t\t\t\t\t\t\t
                                    </div>
                                    <div class=\"price\">
                                        4800<span class=\"rub\"><img src=\"";
        // line 177
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/Rub.svg");
        echo "\" alt=\"\"></span>
                                    </div>
                                    <div class=\"raiting-wrapper\">
                                        <div class=\"star-wrapper\">
                                            <a href=\"#\">
                                                <div class=\"star\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                </div>
                                            </a>
                                            <a href=\"#\">
                                                <div class=\"star\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                </div>
                                            </a>
                                            <a href=\"#\">
                                                <div class=\"star\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                </div>
                                            </a>
                                            <a href=\"#\">
                                                <div class=\"star\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                </div>
                                            </a>
                                            <a href=\"#\">
                                                <div class=\"star none\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                </div>
                                            </a>
                                        </div>
                                        <div class=\"star-count\">
                                            (8)
                                        </div>
                                    </div>
                                </div>\t
                                <div class=\"cart\">
                                    <img src=\"";
        // line 208
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/Cart-icon.svg");
        echo "\" alt=\"\">\t\t\t\t\t\t\t\t\t\t
                                </div>\t
                                <div class=\"badje active\">
                                    <div class=\"content\">
                                        15%
                                    </div>
                                </div>\t\t\t\t\t\t\t
                            </div>
                            <div class=\"product-card\">
                                <div class=\"card-img-wrapper\">
                                    <a href=\"product-single.html\">
                                        <img src=\"";
        // line 219
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/dest/3/37488640299.jpg");
        echo "\" alt=\"\" class=\"card-img-top\">
                                    </a>\t\t\t\t\t\t\t\t\t\t
                                </div>
                                <div class=\"card-content-wrapper\">
                                    <div class=\"product-title\">
                                        <a href=\"\">
                                            <h4>Джемпер структурной вязки</h4>
                                        </a>\t\t\t\t\t\t\t\t\t\t\t
                                    </div>
                                    <div class=\"price\">
                                        4800<span class=\"rub\"><img src=\"";
        // line 229
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/Rub.svg");
        echo "\" alt=\"\"></span>
                                    </div>
                                    <div class=\"raiting-wrapper\">
                                        <div class=\"star-wrapper\">
                                            <a href=\"#\">
                                                <div class=\"star\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                </div>
                                            </a>
                                            <a href=\"#\">
                                                <div class=\"star\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                </div>
                                            </a>
                                            <a href=\"#\">
                                                <div class=\"star\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                </div>
                                            </a>
                                            <a href=\"#\">
                                                <div class=\"star\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                </div>
                                            </a>
                                            <a href=\"#\">
                                                <div class=\"star none\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                </div>
                                            </a>
                                        </div>
                                        <div class=\"star-count\">
                                            (8)
                                        </div>
                                    </div>
                                </div>\t
                                <div class=\"cart\">
                                    <img src=\"";
        // line 260
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/Cart-icon.svg");
        echo "\" alt=\"\">\t\t\t\t\t\t\t\t\t\t
                                </div>\t
                                <div class=\"badje\">
                                    <div class=\"content\">
                                        15%
                                    </div>
                                </div>\t\t\t\t\t\t\t
                            </div>
                            <div class=\"product-card\">
                                <div class=\"card-img-wrapper\">
                                    <a href=\"product-single.html\">
                                        <img src=\"";
        // line 271
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/dest/1/37416640299.jpg");
        echo "\" alt=\"\" class=\"card-img-top\">
                                    </a>\t\t\t\t\t\t\t\t\t\t
                                </div>
                                <div class=\"card-content-wrapper\">
                                    <div class=\"product-title\">
                                        <a href=\"\">
                                            <h4>Джемпер структурной вязки</h4>
                                        </a>\t\t\t\t\t\t\t\t\t\t\t
                                    </div>
                                    <div class=\"price\">
                                        4800<span class=\"rub\"><img src=\"";
        // line 281
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/Rub.svg");
        echo "\" alt=\"\"></span>
                                    </div>
                                    <div class=\"raiting-wrapper\">
                                        <div class=\"star-wrapper\">
                                            <a href=\"#\">
                                                <div class=\"star\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                </div>
                                            </a>
                                            <a href=\"#\">
                                                <div class=\"star\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                </div>
                                            </a>
                                            <a href=\"#\">
                                                <div class=\"star\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                </div>
                                            </a>
                                            <a href=\"#\">
                                                <div class=\"star\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                </div>
                                            </a>
                                            <a href=\"#\">
                                                <div class=\"star none\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                </div>
                                            </a>
                                        </div>
                                        <div class=\"star-count\">
                                            (8)
                                        </div>
                                    </div>
                                </div>\t
                                <div class=\"cart\">
                                    <img src=\"";
        // line 312
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/Cart-icon.svg");
        echo "\" alt=\"\">\t\t\t\t\t\t\t\t\t\t
                                </div>\t
                                <div class=\"badje\">
                                    <div class=\"content\">
                                        15%
                                    </div>
                                </div>\t\t\t\t\t\t\t
                            </div>
                            <div class=\"product-card\">
                                <div class=\"card-img-wrapper\">
                                    <a href=\"";
        // line 322
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("product-single");
        echo "\">
                                        <img src=\"";
        // line 323
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/dest/1/37416640299.jpg");
        echo "\" alt=\"\" class=\"card-img-top\">
                                    </a>\t\t\t\t\t\t\t\t\t\t
                                </div>
                                <div class=\"card-content-wrapper\">
                                    <div class=\"product-title\">
                                        <a href=\"\">
                                            <h4>Джемпер структурной вязки</h4>
                                        </a>\t\t\t\t\t\t\t\t\t\t\t
                                    </div>
                                    <div class=\"price\">
                                        4800<span class=\"rub\"><img src=\"";
        // line 333
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/Rub.svg");
        echo "\" alt=\"\"></span>
                                    </div>
                                    <div class=\"raiting-wrapper\">
                                        <div class=\"star-wrapper\">
                                            <a href=\"#\">
                                                <div class=\"star\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                </div>
                                            </a>
                                            <a href=\"#\">
                                                <div class=\"star\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                </div>
                                            </a>
                                            <a href=\"#\">
                                                <div class=\"star\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                </div>
                                            </a>
                                            <a href=\"#\">
                                                <div class=\"star\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                </div>
                                            </a>
                                            <a href=\"#\">
                                                <div class=\"star none\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                </div>
                                            </a>
                                        </div>
                                        <div class=\"star-count\">
                                            (8)
                                        </div>
                                    </div>
                                </div>\t
                                <div class=\"cart\">
                                    <img src=\"";
        // line 364
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/Cart-icon.svg");
        echo "\" alt=\"\">\t\t\t\t\t\t\t\t\t\t
                                </div>\t
                                <div class=\"badje\">
                                    <div class=\"content\">
                                        15%
                                    </div>
                                </div>\t\t\t\t\t\t\t
                            </div>
                            <div class=\"product-card\">
                                <div class=\"card-img-wrapper\">
                                    <a href=\"product-single.html\">
                                        <img src=\"";
        // line 375
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/dest/2/37375710299.jpg");
        echo "\" alt=\"\" class=\"card-img-top\">
                                    </a>\t\t\t\t\t\t\t\t\t\t
                                </div>
                                <div class=\"card-content-wrapper\">
                                    <div class=\"product-title\">
                                        <a href=\"\">
                                            <h4>Джемпер структурной вязки</h4>
                                        </a>\t\t\t\t\t\t\t\t\t\t\t
                                    </div>
                                    <div class=\"price\">
                                        4800<span class=\"rub\"><img src=\"";
        // line 385
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/Rub.svg");
        echo "\" alt=\"\"></span>
                                    </div>
                                    <div class=\"raiting-wrapper\">
                                        <div class=\"star-wrapper\">
                                            <a href=\"#\">
                                                <div class=\"star\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                </div>
                                            </a>
                                            <a href=\"#\">
                                                <div class=\"star\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                </div>
                                            </a>
                                            <a href=\"#\">
                                                <div class=\"star\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                </div>
                                            </a>
                                            <a href=\"#\">
                                                <div class=\"star\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                </div>
                                            </a>
                                            <a href=\"#\">
                                                <div class=\"star none\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                </div>
                                            </a>
                                        </div>
                                        <div class=\"star-count\">
                                            (8)
                                        </div>
                                    </div>
                                </div>\t
                                <div class=\"cart\">
                                    <img src=\"";
        // line 416
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/Cart-icon.svg");
        echo "\" alt=\"\">\t\t\t\t\t\t\t\t\t\t
                                </div>\t
                                <div class=\"badje active\">
                                    <div class=\"content\">
                                        15%
                                    </div>
                                </div>\t\t\t\t\t\t\t
                            </div>
                            <div class=\"product-card\">
                                <div class=\"card-img-wrapper\">
                                    <a href=\"product-single.html\">
                                        <img src=\"";
        // line 427
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/dest/3/37488640299.jpg");
        echo "\" alt=\"\" class=\"card-img-top\">
                                    </a>\t\t\t\t\t\t\t\t\t\t
                                </div>
                                <div class=\"card-content-wrapper\">
                                    <div class=\"product-title\">
                                        <a href=\"\">
                                            <h4>Джемпер структурной вязки</h4>
                                        </a>\t\t\t\t\t\t\t\t\t\t\t
                                    </div>
                                    <div class=\"price\">
                                        4800<span class=\"rub\"><img src=\"";
        // line 437
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/Rub.svg");
        echo "\" alt=\"\"></span>
                                    </div>
                                    <div class=\"raiting-wrapper\">
                                        <div class=\"star-wrapper\">
                                            <a href=\"#\">
                                                <div class=\"star\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                </div>
                                            </a>
                                            <a href=\"#\">
                                                <div class=\"star\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                </div>
                                            </a>
                                            <a href=\"#\">
                                                <div class=\"star\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                </div>
                                            </a>
                                            <a href=\"#\">
                                                <div class=\"star\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                </div>
                                            </a>
                                            <a href=\"#\">
                                                <div class=\"star none\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                </div>
                                            </a>
                                        </div>
                                        <div class=\"star-count\">
                                            (8)
                                        </div>
                                    </div>
                                </div>\t
                                <div class=\"cart\">
                                    <img src=\"";
        // line 468
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/Cart-icon.svg");
        echo "\" alt=\"\">\t\t\t\t\t\t\t\t\t\t
                                </div>\t
                                <div class=\"badje\">
                                    <div class=\"content\">
                                        15%
                                    </div>
                                </div>\t\t\t\t\t\t\t
                            </div>
                            <div class=\"product-card\">
                                <div class=\"card-img-wrapper\">
                                    <a href=\"product-single.html\">
                                        <img src=\"";
        // line 479
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/dest/1/37416640299.jpg");
        echo "\" alt=\"\" class=\"card-img-top\">
                                    </a>\t\t\t\t\t\t\t\t\t\t
                                </div>
                                <div class=\"card-content-wrapper\">
                                    <div class=\"product-title\">
                                        <a href=\"\">
                                            <h4>Джемпер структурной вязки</h4>
                                        </a>\t\t\t\t\t\t\t\t\t\t\t
                                    </div>
                                    <div class=\"price\">
                                        4800<span class=\"rub\"><img src=\"";
        // line 489
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/Rub.svg");
        echo "\" alt=\"\"></span>
                                    </div>
                                    <div class=\"raiting-wrapper\">
                                        <div class=\"star-wrapper\">
                                            <a href=\"#\">
                                                <div class=\"star\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                </div>
                                            </a>
                                            <a href=\"#\">
                                                <div class=\"star\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                </div>
                                            </a>
                                            <a href=\"#\">
                                                <div class=\"star\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                </div>
                                            </a>
                                            <a href=\"#\">
                                                <div class=\"star\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                </div>
                                            </a>
                                            <a href=\"#\">
                                                <div class=\"star none\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                </div>
                                            </a>
                                        </div>
                                        <div class=\"star-count\">
                                            (8)
                                        </div>
                                    </div>
                                </div>\t
                                <div class=\"cart\">
                                    <img src=\"";
        // line 520
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/Cart-icon.svg");
        echo "\" alt=\"\">\t\t\t\t\t\t\t\t\t\t
                                </div>\t
                                <div class=\"badje\">
                                    <div class=\"content\">
                                        15%
                                    </div>
                                </div>\t\t\t\t\t\t\t
                            </div>
                        </div>
                    </div>
                </div>   
            </div>
        </div>            
    </div>
</div>

";
        // line 536
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("related-products"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 537
        echo "
";
        // line 538
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("banners/banner-1"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 539
        echo "
";
        // line 540
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("lookbook"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "C:\\OSPanel\\domains\\hatan.loc/themes/hatan/pages/catalog.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  693 => 540,  690 => 539,  686 => 538,  683 => 537,  679 => 536,  660 => 520,  626 => 489,  613 => 479,  599 => 468,  565 => 437,  552 => 427,  538 => 416,  504 => 385,  491 => 375,  477 => 364,  443 => 333,  430 => 323,  426 => 322,  413 => 312,  379 => 281,  366 => 271,  352 => 260,  318 => 229,  305 => 219,  291 => 208,  257 => 177,  244 => 167,  230 => 156,  196 => 125,  183 => 115,  179 => 114,  66 => 3,  62 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{##}
{% partial \"filter-modal\" %}

<!-- Category-->
<div class=\"category\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col\">
                <ul class=\"breadcrumbs\">
                    <li class=\"item-breadcrumbs\"><a href=\"\">Женщинам</a></li>
                    <li class=\"item-breadcrumbs\"><a href=\"\">Одежда</a> </li>
                    <li class=\"item-breadcrumbs\"><a href=\"\">Джемперы и кардиганы</a> </li>
                    <li class=\"item-breadcrumbs main\"><a href=\"\"></a> Джемпер с воротником и стойкой</li>
                </ul>
                <div class=\"category__row\">
                    <div class=\"sidebar\">
                        <div class=\"sidebar__title\">
                            <h3>Категории</h3>
                        </div>
                        <div class=\"sidebar__content\">
                            <div class=\"sidebar__menu\">
                                <ul class=\"menu-nav\">
                                    <li class=\"menu-nav__item\">
                                        <span class=\"menu-nav__item--main\"><a href=\"\"> Одежда</a></span>
                                        <div class=\"menu-nav__item-submenu\">
                                            <a href=\"\" class=\"item-submenu__link\">Верхняя одежда</a>
                                            <a href=\"\" class=\"item-submenu__link\">Джемперы</a>
                                            <a href=\"\" class=\"item-submenu__link\">Рубашки</a>
                                            <a href=\"\" class=\"item-submenu__link\">Брюки</a>
                                            <a href=\"\" class=\"item-submenu__link\">Джинсы</a>
                                            <a href=\"\" class=\"item-submenu__link\">Нижнее белье</a>
                                        </div>\t\t\t\t\t\t\t
                                    </li>
                                    <li class=\"menu-nav__item\">
                                        <span class=\"menu-nav__item--main\"><a href=\"\">Обувь</a></span>
                                        <div class=\"menu-nav__item-submenu\">
                                            <a href=\"\" class=\"item-submenu__link\">Кроссовки</a>
                                            <a href=\"\" class=\"item-submenu__link\">Туфли</a>
                                            <a href=\"\" class=\"item-submenu__link\">Сапоги</a>
                                            <a href=\"\" class=\"item-submenu__link\">Ботинки</a>
                                        </div>\t\t\t\t\t\t\t
                                    </li>
                                    <li class=\"menu-nav__item\">
                                        <span class=\"menu-nav__item--main\"><a href=\"\">Аксессуары</a></span>
                                        <div class=\"menu-nav__item-submenu\">
                                            <a href=\"\" class=\"item-submenu__link\">Ремни</a>
                                            <a href=\"\" class=\"item-submenu__link\">Сумки</a>
                                        </div>\t\t\t\t\t\t\t
                                    </li>
                                    
                                </ul>
                            </div>
                            <div class=\"sidebar__filter\">
                                <div class=\"sidebar-filter-item\">
                                    <div class=\"sidebar-filter-item__label\">
                                        <a href=\"#\">Посмотреть все</a>
                                    </div>
                                    <div class=\"sidebar-filter-item__value\">
                                        20
                                    </div>\t\t\t\t\t\t\t\t\t\t
                                </div>
                                <div class=\"sidebar-filter-item\">
                                    <div class=\"sidebar-filter-item__label\">
                                        <a href=\"#\">Осень</a>
                                    </div>
                                    <div class=\"sidebar-filter-item__value\">
                                        10
                                    </div>\t\t\t\t\t\t\t\t\t\t
                                </div>
                                <div class=\"sidebar-filter-item\">
                                    <div class=\"sidebar-filter-item__label\">
                                        <a href=\"#\">Зима</a>
                                    </div>
                                    <div class=\"sidebar-filter-item__value\">
                                        10
                                    </div>\t\t\t\t\t\t\t\t\t\t
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"main-container\">
                        <div class=\"filter-bar\">\t\t\t\t\t\t\t\t
                            <div class=\"filter-bar-col-small\">
                                <div class=\"filter-icon\">
                                    <div class=\"filter-icon__image\">
                                        <img src=\"images/Filter.svg\" alt=\"\">
                                    </div>\t\t\t\t\t\t\t\t\t
                                    <div class=\"filter-icon__label\">
                                        Фильтр
                                    </div>\t\t\t\t\t\t\t\t\t
                                </div>
                            </div>
                            <div class=\"filter-bar-col\">
                                <div class=\"filter-sort\">
                                    <div class=\"filter-sort__label\">Сортировка</div>
                                    <div class=\"filter-sort__select\">
                                        <select class=\"sort-select\" name=\"sort-product\" id=\"sort-product\">
                                            <option value=\"priceup\">Возрастанию цены</option>
                                            <option value=\"pricedown\">Убыванию цены</option>
                                            <option value=\"news\">Новизне</option>
                                        </select>
                                    </div>\t\t\t\t\t\t\t\t\t\t
                                </div>
                                <div class=\"kol-item\">
                                    <div class=\"kol-item__label\">Товаров</div>
                                    <div class=\"kol-item__value\">25</div>
                                    
                                </div>
                            </div>
                        </div>
                        <div class=\"wrapper-overlay card-container\">
                            <div class=\"product-card\">
                                <div class=\"card-img-wrapper\">
                                    <a href=\"{{\"product-single\" | page }}\">
                                        <img src=\"{{ 'assets/images/dest/1/37416640299.jpg' | theme }}\" alt=\"\" class=\"card-img-top\">
                                    </a>\t\t\t\t\t\t\t\t\t\t
                                </div>
                                <div class=\"card-content-wrapper\">
                                    <div class=\"product-title\">
                                        <a href=\"\">
                                            <h4>Джемпер структурной вязки</h4>
                                        </a>\t\t\t\t\t\t\t\t\t\t\t
                                    </div>
                                    <div class=\"price\">
                                        4800<span class=\"rub\"><img src=\"{{ 'assets/images/Rub.svg' | theme }}\" alt=\"\"></span>
                                    </div>
                                    <div class=\"raiting-wrapper\">
                                        <div class=\"star-wrapper\">
                                            <a href=\"#\">
                                                <div class=\"star\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                </div>
                                            </a>
                                            <a href=\"#\">
                                                <div class=\"star\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                </div>
                                            </a>
                                            <a href=\"#\">
                                                <div class=\"star\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                </div>
                                            </a>
                                            <a href=\"#\">
                                                <div class=\"star\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                </div>
                                            </a>
                                            <a href=\"#\">
                                                <div class=\"star none\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                </div>
                                            </a>
                                        </div>
                                        <div class=\"star-count\">
                                            (8)
                                        </div>
                                    </div>
                                </div>\t
                                <div class=\"cart\">
                                    <img src=\"{{ 'assets/images/Cart-icon.svg' | theme }}\" alt=\"\">\t\t\t\t\t\t\t\t\t\t
                                </div>\t
                                <div class=\"badje\">
                                    <div class=\"content\">
                                        15%
                                    </div>
                                </div>\t\t\t\t\t\t\t
                            </div>
                            <div class=\"product-card\">
                                <div class=\"card-img-wrapper\">
                                    <a href=\"product-single.html\">
                                        <img src=\"{{ 'assets/images/dest/2/37375710299.jpg' | theme }}\" alt=\"\" class=\"card-img-top\">
                                    </a>\t\t\t\t\t\t\t\t\t\t
                                </div>
                                <div class=\"card-content-wrapper\">
                                    <div class=\"product-title\">
                                        <a href=\"\">
                                            <h4>Джемпер структурной вязки</h4>
                                        </a>\t\t\t\t\t\t\t\t\t\t\t
                                    </div>
                                    <div class=\"price\">
                                        4800<span class=\"rub\"><img src=\"{{ 'assets/images/Rub.svg' | theme }}\" alt=\"\"></span>
                                    </div>
                                    <div class=\"raiting-wrapper\">
                                        <div class=\"star-wrapper\">
                                            <a href=\"#\">
                                                <div class=\"star\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                </div>
                                            </a>
                                            <a href=\"#\">
                                                <div class=\"star\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                </div>
                                            </a>
                                            <a href=\"#\">
                                                <div class=\"star\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                </div>
                                            </a>
                                            <a href=\"#\">
                                                <div class=\"star\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                </div>
                                            </a>
                                            <a href=\"#\">
                                                <div class=\"star none\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                </div>
                                            </a>
                                        </div>
                                        <div class=\"star-count\">
                                            (8)
                                        </div>
                                    </div>
                                </div>\t
                                <div class=\"cart\">
                                    <img src=\"{{ 'assets/images/Cart-icon.svg' | theme }}\" alt=\"\">\t\t\t\t\t\t\t\t\t\t
                                </div>\t
                                <div class=\"badje active\">
                                    <div class=\"content\">
                                        15%
                                    </div>
                                </div>\t\t\t\t\t\t\t
                            </div>
                            <div class=\"product-card\">
                                <div class=\"card-img-wrapper\">
                                    <a href=\"product-single.html\">
                                        <img src=\"{{ 'assets/images/dest/3/37488640299.jpg' | theme }}\" alt=\"\" class=\"card-img-top\">
                                    </a>\t\t\t\t\t\t\t\t\t\t
                                </div>
                                <div class=\"card-content-wrapper\">
                                    <div class=\"product-title\">
                                        <a href=\"\">
                                            <h4>Джемпер структурной вязки</h4>
                                        </a>\t\t\t\t\t\t\t\t\t\t\t
                                    </div>
                                    <div class=\"price\">
                                        4800<span class=\"rub\"><img src=\"{{ 'assets/images/Rub.svg' | theme }}\" alt=\"\"></span>
                                    </div>
                                    <div class=\"raiting-wrapper\">
                                        <div class=\"star-wrapper\">
                                            <a href=\"#\">
                                                <div class=\"star\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                </div>
                                            </a>
                                            <a href=\"#\">
                                                <div class=\"star\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                </div>
                                            </a>
                                            <a href=\"#\">
                                                <div class=\"star\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                </div>
                                            </a>
                                            <a href=\"#\">
                                                <div class=\"star\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                </div>
                                            </a>
                                            <a href=\"#\">
                                                <div class=\"star none\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                </div>
                                            </a>
                                        </div>
                                        <div class=\"star-count\">
                                            (8)
                                        </div>
                                    </div>
                                </div>\t
                                <div class=\"cart\">
                                    <img src=\"{{ 'assets/images/Cart-icon.svg' | theme }}\" alt=\"\">\t\t\t\t\t\t\t\t\t\t
                                </div>\t
                                <div class=\"badje\">
                                    <div class=\"content\">
                                        15%
                                    </div>
                                </div>\t\t\t\t\t\t\t
                            </div>
                            <div class=\"product-card\">
                                <div class=\"card-img-wrapper\">
                                    <a href=\"product-single.html\">
                                        <img src=\"{{ 'assets/images/dest/1/37416640299.jpg' | theme }}\" alt=\"\" class=\"card-img-top\">
                                    </a>\t\t\t\t\t\t\t\t\t\t
                                </div>
                                <div class=\"card-content-wrapper\">
                                    <div class=\"product-title\">
                                        <a href=\"\">
                                            <h4>Джемпер структурной вязки</h4>
                                        </a>\t\t\t\t\t\t\t\t\t\t\t
                                    </div>
                                    <div class=\"price\">
                                        4800<span class=\"rub\"><img src=\"{{ 'assets/images/Rub.svg' | theme }}\" alt=\"\"></span>
                                    </div>
                                    <div class=\"raiting-wrapper\">
                                        <div class=\"star-wrapper\">
                                            <a href=\"#\">
                                                <div class=\"star\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                </div>
                                            </a>
                                            <a href=\"#\">
                                                <div class=\"star\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                </div>
                                            </a>
                                            <a href=\"#\">
                                                <div class=\"star\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                </div>
                                            </a>
                                            <a href=\"#\">
                                                <div class=\"star\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                </div>
                                            </a>
                                            <a href=\"#\">
                                                <div class=\"star none\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                </div>
                                            </a>
                                        </div>
                                        <div class=\"star-count\">
                                            (8)
                                        </div>
                                    </div>
                                </div>\t
                                <div class=\"cart\">
                                    <img src=\"{{ 'assets/images/Cart-icon.svg' | theme }}\" alt=\"\">\t\t\t\t\t\t\t\t\t\t
                                </div>\t
                                <div class=\"badje\">
                                    <div class=\"content\">
                                        15%
                                    </div>
                                </div>\t\t\t\t\t\t\t
                            </div>
                            <div class=\"product-card\">
                                <div class=\"card-img-wrapper\">
                                    <a href=\"{{\"product-single\" | page }}\">
                                        <img src=\"{{ 'assets/images/dest/1/37416640299.jpg' | theme }}\" alt=\"\" class=\"card-img-top\">
                                    </a>\t\t\t\t\t\t\t\t\t\t
                                </div>
                                <div class=\"card-content-wrapper\">
                                    <div class=\"product-title\">
                                        <a href=\"\">
                                            <h4>Джемпер структурной вязки</h4>
                                        </a>\t\t\t\t\t\t\t\t\t\t\t
                                    </div>
                                    <div class=\"price\">
                                        4800<span class=\"rub\"><img src=\"{{ 'assets/images/Rub.svg' | theme }}\" alt=\"\"></span>
                                    </div>
                                    <div class=\"raiting-wrapper\">
                                        <div class=\"star-wrapper\">
                                            <a href=\"#\">
                                                <div class=\"star\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                </div>
                                            </a>
                                            <a href=\"#\">
                                                <div class=\"star\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                </div>
                                            </a>
                                            <a href=\"#\">
                                                <div class=\"star\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                </div>
                                            </a>
                                            <a href=\"#\">
                                                <div class=\"star\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                </div>
                                            </a>
                                            <a href=\"#\">
                                                <div class=\"star none\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                </div>
                                            </a>
                                        </div>
                                        <div class=\"star-count\">
                                            (8)
                                        </div>
                                    </div>
                                </div>\t
                                <div class=\"cart\">
                                    <img src=\"{{ 'assets/images/Cart-icon.svg' | theme }}\" alt=\"\">\t\t\t\t\t\t\t\t\t\t
                                </div>\t
                                <div class=\"badje\">
                                    <div class=\"content\">
                                        15%
                                    </div>
                                </div>\t\t\t\t\t\t\t
                            </div>
                            <div class=\"product-card\">
                                <div class=\"card-img-wrapper\">
                                    <a href=\"product-single.html\">
                                        <img src=\"{{ 'assets/images/dest/2/37375710299.jpg' | theme }}\" alt=\"\" class=\"card-img-top\">
                                    </a>\t\t\t\t\t\t\t\t\t\t
                                </div>
                                <div class=\"card-content-wrapper\">
                                    <div class=\"product-title\">
                                        <a href=\"\">
                                            <h4>Джемпер структурной вязки</h4>
                                        </a>\t\t\t\t\t\t\t\t\t\t\t
                                    </div>
                                    <div class=\"price\">
                                        4800<span class=\"rub\"><img src=\"{{ 'assets/images/Rub.svg' | theme }}\" alt=\"\"></span>
                                    </div>
                                    <div class=\"raiting-wrapper\">
                                        <div class=\"star-wrapper\">
                                            <a href=\"#\">
                                                <div class=\"star\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                </div>
                                            </a>
                                            <a href=\"#\">
                                                <div class=\"star\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                </div>
                                            </a>
                                            <a href=\"#\">
                                                <div class=\"star\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                </div>
                                            </a>
                                            <a href=\"#\">
                                                <div class=\"star\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                </div>
                                            </a>
                                            <a href=\"#\">
                                                <div class=\"star none\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                </div>
                                            </a>
                                        </div>
                                        <div class=\"star-count\">
                                            (8)
                                        </div>
                                    </div>
                                </div>\t
                                <div class=\"cart\">
                                    <img src=\"{{ 'assets/images/Cart-icon.svg' | theme }}\" alt=\"\">\t\t\t\t\t\t\t\t\t\t
                                </div>\t
                                <div class=\"badje active\">
                                    <div class=\"content\">
                                        15%
                                    </div>
                                </div>\t\t\t\t\t\t\t
                            </div>
                            <div class=\"product-card\">
                                <div class=\"card-img-wrapper\">
                                    <a href=\"product-single.html\">
                                        <img src=\"{{ 'assets/images/dest/3/37488640299.jpg' | theme }}\" alt=\"\" class=\"card-img-top\">
                                    </a>\t\t\t\t\t\t\t\t\t\t
                                </div>
                                <div class=\"card-content-wrapper\">
                                    <div class=\"product-title\">
                                        <a href=\"\">
                                            <h4>Джемпер структурной вязки</h4>
                                        </a>\t\t\t\t\t\t\t\t\t\t\t
                                    </div>
                                    <div class=\"price\">
                                        4800<span class=\"rub\"><img src=\"{{ 'assets/images/Rub.svg' | theme }}\" alt=\"\"></span>
                                    </div>
                                    <div class=\"raiting-wrapper\">
                                        <div class=\"star-wrapper\">
                                            <a href=\"#\">
                                                <div class=\"star\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                </div>
                                            </a>
                                            <a href=\"#\">
                                                <div class=\"star\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                </div>
                                            </a>
                                            <a href=\"#\">
                                                <div class=\"star\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                </div>
                                            </a>
                                            <a href=\"#\">
                                                <div class=\"star\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                </div>
                                            </a>
                                            <a href=\"#\">
                                                <div class=\"star none\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                </div>
                                            </a>
                                        </div>
                                        <div class=\"star-count\">
                                            (8)
                                        </div>
                                    </div>
                                </div>\t
                                <div class=\"cart\">
                                    <img src=\"{{ 'assets/images/Cart-icon.svg' | theme }}\" alt=\"\">\t\t\t\t\t\t\t\t\t\t
                                </div>\t
                                <div class=\"badje\">
                                    <div class=\"content\">
                                        15%
                                    </div>
                                </div>\t\t\t\t\t\t\t
                            </div>
                            <div class=\"product-card\">
                                <div class=\"card-img-wrapper\">
                                    <a href=\"product-single.html\">
                                        <img src=\"{{ 'assets/images/dest/1/37416640299.jpg' | theme }}\" alt=\"\" class=\"card-img-top\">
                                    </a>\t\t\t\t\t\t\t\t\t\t
                                </div>
                                <div class=\"card-content-wrapper\">
                                    <div class=\"product-title\">
                                        <a href=\"\">
                                            <h4>Джемпер структурной вязки</h4>
                                        </a>\t\t\t\t\t\t\t\t\t\t\t
                                    </div>
                                    <div class=\"price\">
                                        4800<span class=\"rub\"><img src=\"{{ 'assets/images/Rub.svg' | theme }}\" alt=\"\"></span>
                                    </div>
                                    <div class=\"raiting-wrapper\">
                                        <div class=\"star-wrapper\">
                                            <a href=\"#\">
                                                <div class=\"star\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                </div>
                                            </a>
                                            <a href=\"#\">
                                                <div class=\"star\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                </div>
                                            </a>
                                            <a href=\"#\">
                                                <div class=\"star\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                </div>
                                            </a>
                                            <a href=\"#\">
                                                <div class=\"star\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                </div>
                                            </a>
                                            <a href=\"#\">
                                                <div class=\"star none\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                </div>
                                            </a>
                                        </div>
                                        <div class=\"star-count\">
                                            (8)
                                        </div>
                                    </div>
                                </div>\t
                                <div class=\"cart\">
                                    <img src=\"{{ 'assets/images/Cart-icon.svg' | theme }}\" alt=\"\">\t\t\t\t\t\t\t\t\t\t
                                </div>\t
                                <div class=\"badje\">
                                    <div class=\"content\">
                                        15%
                                    </div>
                                </div>\t\t\t\t\t\t\t
                            </div>
                        </div>
                    </div>
                </div>   
            </div>
        </div>            
    </div>
</div>

{% partial \"related-products\" %}

{% partial \"banners/banner-1\" %}

{% partial \"lookbook\" %}", "C:\\OSPanel\\domains\\hatan.loc/themes/hatan/pages/catalog.htm", "");
    }
}
