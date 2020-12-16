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

/* Z:\domains\hatan.loc/themes/hatan/pages/catalog.htm */
class __TwigTemplate_73e43c371f308cc06d3e249c03a631d9ba3fc784433fb84f0b6559aaddcd4fca extends \Twig\Template
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
        $tags = array("if" => 4, "partial" => 11);
        $filters = array("escape" => 6, "raw" => 61, "theme" => 164);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'partial'],
                ['escape', 'raw', 'theme'],
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
        // line 4
        if (twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "isNotEmpty", [], "method", false, false, true, 4)) {
            // line 5
            echo "    ";
            // line 6
            echo "    <div class=\"single-product _shopaholic-product-wrapper\" id=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "id", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
            echo "\" data-product-id=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "id", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
            echo "\">
    
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col\">
                    ";
            // line 11
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['arBreadcrumbs'] = twig_get_attribute($this->env, $this->source, ($context["Catalog"] ?? null), "getBreadcrumbs", [], "method", false, false, true, 11)            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("breadcrumbs/breadcrumbs"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 12
            echo "                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-sm-12 col-md-12 col-lg-7 col-xl-7 col-xxl-7\">
                    ";
            // line 16
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['obProduct'] = ($context["obProduct"] ?? null)            ;
            $context['__cms_partial_params']['obOfferItem'] = ($context["obOfferItem"] ?? null)            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("product/gallery/product-gallery"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 17
            echo "                </div>
                <div class=\"col-sm-12 col-md-12 col-lg-5 col-xl-5 col-xxl-5\">
                    <div class=\"product-overlay\">
                        <div class=\"product-title\">
                            <h2>";
            // line 21
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "name", [], "any", false, false, true, 21), 21, $this->source), "html", null, true);
            echo "</h2>
                        </div>
                        <div class=\"product-short\">
                            
                            ";
            // line 25
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['obOfferItem'] = ($context["obOfferItem"] ?? null)            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("product/price/price-product"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 26
            echo "                            
                            <div class=\"raiting-overlay\">
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
                                <div class=\"add-reviews\">
                                    <a href=\"\">Добавить отзыв</a>
                                </div>
                            </div>
                        </div>
                        <div class=\"product-text\">
                            ";
            // line 61
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "preview_text", [], "any", false, false, true, 61), 61, $this->source);
            echo "\t\t\t\t\t\t\t\t
                                
                        </div>
                        <!--Параметры товара-->
                        
                        <div class=\"product-options\">
                            <form id=\"formProperty-";
            // line 67
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "id", [], "any", false, false, true, 67), 67, $this->source), "html", null, true);
            echo "\">
                                ";
            // line 69
            echo "                                ";
            if (twig_get_attribute($this->env, $this->source, ($context["obOfferPropertyList"] ?? null), "isNotEmpty", [], "method", false, false, true, 69)) {
                // line 70
                echo "                                    ";
                $context['__cms_partial_params'] = [];
                $context['__cms_partial_params']['obPropertyList'] = ($context["obOfferPropertyList"] ?? null)                ;
                $context['__cms_partial_params']['arAppliedPropertyList'] = ($context["arAppliedPropertyList"] ?? null)                ;
                echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("product/filter-panel/product-filter-panel"                , $context['__cms_partial_params']                , true                );
                unset($context['__cms_partial_params']);
                // line 71
                echo "                                ";
            }
            // line 72
            echo "
                                ";
            // line 73
            echo "                                
                                ";
            // line 75
            echo "                                ";
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['obOfferList'] = ($context["obOfferList"] ?? null)            ;
            $context['__cms_partial_params']['obOfferListCopy'] = ($context["obOfferListCopy"] ?? null)            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("product/offer/product-offer-list"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 76
            echo "                                <!-- Количество -->
                                <div class=\"kol-wrapper\">
                                    <div class=\"group-kol\">
                                        <div class=\"form-group\">
                                            <div class=\"count-wrap\" id=\"product-single-count\">
                                                <div class=\"count-up\">+</div>
                                                <input 
                                                    type=\"number\" 
                                                    class=\"form-control amount-product\" 
                                                    id=\"count\" 
                                                    name=\"quantity\" 
                                                    step=\"1\"
                                                    min=\"1\"
                                                    max=\"";
            // line 89
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obOfferItem"] ?? null), "quantity", [], "any", false, false, true, 89), 89, $this->source), "html", null, true);
            echo "\"
                                                    value=\"1\">
                                                <div class=\"count-down\">-</div>
                                            </div>\t\t\t\t\t\t\t\t
                                        </div>\t\t\t\t\t\t\t\t\t\t
                                    </div>
                                    <!--Добавить в корзину-->
                                    <button 
                                        type=\"button\" 
                                        id=\"addtocart\" 
                                        class=\"btn btn-primary _shopaholic-cart-add\"
                                        aria-label=\"Add to cart\">
                                            Добавить в корзину
                                    </button>
                                </div>
                                <!-- Остаток -->
                                ";
            // line 105
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("product/offer/offer-quantity"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            echo "                                
                            </form>
                        </div>                        
                    </div>\t\t\t\t\t
                </div>
            </div>
            <div class=\"row\" > 
                <div class=\"col-sm-12 col-md-8 col-lg-7 col-xl-7 col-xxl-7\" >  
                    <div class=\"reviews\">
                        <div class=\"tab\">
                            <ul>
                                <li class=\"tab-item\" id=\"tab1\" data-tab=\"tab1\"><a href=\"#tab1\">Описание</a></li>
                                <li class=\"tab-item active\" id=\"tab2\" data-tab=\"tab2\"><a href=\"#tab2\">Отзывы</a></li>
                            </ul>
                        </div>
                        <div class=\"tab-content\">
                            <div class=\"tab-content-item\" id=\"tab1\" data-tabcontent=\"tab1\">
                                <div class=\"product-text\">
                                    ";
            // line 123
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "description", [], "any", false, false, true, 123), 123, $this->source);
            echo "
                                </div>\t\t\t\t\t\t\t\t\t
                            </div>
                            <div class=\"tab-content-item show\" id=\"tab2\" data-tabcontent=\"tab2\">
                                <div class=\"title-wrap\">
                                    <div class=\"title\">
                                        <div class=\"count-r\">2</div>
                                        <h3>\t\t\t\t\t\t\t\t\t\t\t\t
                                            Отзыва
                                        </h3>\t\t\t\t\t\t\t\t\t\t\t
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
                                    </div>\t\t\t\t\t\t\t\t\t\t
                                </div>
                                <div class=\"review-content-wrap\">
                                    <div class=\"review\">
                                        <div class=\"review-title\"><span><img src=\"";
            // line 164
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/Verified.svg");
            echo "\" alt=\"\" class=\"icon-verified\"></span> Оксана</div>
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
                                            <div class=\"star-count data-review\">
                                                Декабрь 2020
                                            </div>\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                        </div>
                                        <div class=\"review-content\">
                                            <p>Очень понравился этот джемпер вязки «косы». Мой любимый, безумно нежный цвет, поднимающий настроение. Теплый и уютный)) Качество супер и длина та, которую я люблю) Советую его всем приобрести, не пожалеете))))</p>
                                        </div>
                                    </div>
                                    <div class=\"read-more\"><a href=\"#\" data-eventclick=\"open\" class=\"button text\">Читать далее</a></div>
                                    <div class=\"review-all-collapse\">
                                        <div class=\"review\">
                                            <div class=\"review-title\"><span><img src=\"";
            // line 199
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/Verified.svg");
            echo "\" alt=\"\" class=\"icon-verified\"></span> Оксана</div>
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
                                                <div class=\"star-count data-review\">
                                                    Декабрь 2020
                                                </div>\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                            </div>
                                            <div class=\"review-content\">
                                                <p>Очень понравился этот джемпер вязки «косы». Мой любимый, безумно нежный цвет, поднимающий настроение. Теплый и уютный)) Качество супер и длина та, которую я люблю) Советую его всем приобрести, не пожалеете))))</p>
                                            </div>
                                        </div>
                                        <div class=\"review\">
                                            <div class=\"review-title\"><span><img src=\"";
            // line 232
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/Verified.svg");
            echo "\" alt=\"\" class=\"icon-verified\"></span> Оксана</div>
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
                                                <div class=\"star-count data-review\">
                                                    Декабрь 2020
                                                </div>\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                            </div>
                                            <div class=\"review-content\">
                                                <p>Очень понравился этот джемпер вязки «косы». Мой любимый, безумно нежный цвет, поднимающий настроение. Теплый и уютный)) Качество супер и длина та, которую я люблю) Советую его всем приобрести, не пожалеете))))</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal images -->
    <div class=\"modal\" data-modal=\"1\">
        ";
            // line 276
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['obProduct'] = ($context["obProduct"] ?? null)            ;
            $context['__cms_partial_params']['obOfferItem'] = ($context["obOfferItem"] ?? null)            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("product/gallery/product-gallery-modal"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 277
            echo "    </div>
    ";
            // line 278
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['obActiveCategory'] = ($context["obActiveCategory"] ?? null)            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("similar-products"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 279
            echo "
    ";
            // line 280
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("banners/banner-1"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 281
            echo "
    ";
            // line 282
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("related-products"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
        } else {
            // line 284
            echo "    ";
            // line 285
            echo "    ";
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['obPropertyList'] = ($context["obFilterProductPropertyList"] ?? null)            ;
            $context['__cms_partial_params']['obProductList'] = ($context["obFilteredProductList"] ?? null)            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("modal/filters/filter-modal"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 286
            echo "
    <!-- Category-->
    <div class=\"category\" data-id=\"";
            // line 288
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obCategory"] ?? null), "id", [], "any", false, false, true, 288), 288, $this->source), "html", null, true);
            echo "\" itemscope itemtype=\"http://schema.org/Category\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col\">
                    ";
            // line 292
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['arBreadcrumbs'] = twig_get_attribute($this->env, $this->source, ($context["Catalog"] ?? null), "getBreadcrumbs", [], "method", false, false, true, 292)            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("breadcrumbs/breadcrumbs"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            echo "                
                    <div class=\"category__row\">
                        <div class=\"sidebar\">
                            <div class=\"sidebar__title\">
                                <h3>";
            // line 296
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obActiveCategory"] ?? null), "name", [], "any", false, false, true, 296), 296, $this->source), "html", null, true);
            echo "</h3>
                            </div>
                            <div class=\"sidebar__content\">
                                <div class=\"sidebar__menu\">
                                    ";
            // line 300
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['obActiveCategory'] = ($context["obActiveCategory"] ?? null)            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("category/category-tree/category-list"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 301
            echo "                                </div>
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
                                            <img src=\"";
            // line 336
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/Filter.svg");
            echo "\" alt=\"\">
                                        </div>
                                        <div class=\"filter-icon__label\">
                                            Фильтр
                                        </div>
                                    </div>
                                </div>
                                <div class=\"filter-bar-col\">
                                    <!-- Sort -->
                                    <div class=\"filter-sort\">
                                        <div class=\"filter-sort__label\">Сортировка:</div>
                                        <div class=\"filter-sort__select\">
                                            ";
            // line 348
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['sActiveSort'] = ($context["sActiveSort"] ?? null)            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("product/filter-panel/select-sort"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 349
            echo "                                        </div>
                                    </div>
                                    ";
            // line 351
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['obFilteredProductList'] = ($context["obFilteredProductList"] ?? null)            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("product-count"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 352
            echo "                                </div>
                            </div>
                            <div class=\"wrapper-overlay card-container catalog-wrapper\">
                                ";
            // line 355
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['arProductList'] = ($context["arProductList"] ?? null)            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("product/catalog/product-list"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 356
            echo "                            </div>
                        </div>
                    </div>   
                </div>
            </div>            
        </div>
    </div>

    ";
            // line 364
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("related-products"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 365
            echo "
    ";
            // line 366
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("banners/banner-1"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 367
            echo "
    ";
            // line 368
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("lookbook"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
        }
    }

    public function getTemplateName()
    {
        return "Z:\\domains\\hatan.loc/themes/hatan/pages/catalog.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  581 => 368,  578 => 367,  574 => 366,  571 => 365,  567 => 364,  557 => 356,  552 => 355,  547 => 352,  542 => 351,  538 => 349,  533 => 348,  518 => 336,  481 => 301,  476 => 300,  469 => 296,  459 => 292,  452 => 288,  448 => 286,  441 => 285,  439 => 284,  434 => 282,  431 => 281,  427 => 280,  424 => 279,  419 => 278,  416 => 277,  410 => 276,  363 => 232,  327 => 199,  289 => 164,  245 => 123,  222 => 105,  203 => 89,  188 => 76,  181 => 75,  178 => 73,  175 => 72,  172 => 71,  165 => 70,  162 => 69,  158 => 67,  149 => 61,  112 => 26,  107 => 25,  100 => 21,  94 => 17,  88 => 16,  82 => 12,  77 => 11,  66 => 6,  64 => 5,  62 => 4,);
    }

    public function getSourceContext()
    {
        return new Source("{##}
{# @var obCategory \\Lovata\\Shopaholic\\Classes\\Item\\CategoryItem #}
{# Get category item #}
{% if obProduct.isNotEmpty() %}
    {# Render product page #}
    <div class=\"single-product _shopaholic-product-wrapper\" id=\"{{obProduct.id}}\" data-product-id=\"{{ obProduct.id }}\">
    
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col\">
                    {% partial \"breadcrumbs/breadcrumbs\" arBreadcrumbs=Catalog.getBreadcrumbs() %}
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-sm-12 col-md-12 col-lg-7 col-xl-7 col-xxl-7\">
                    {% partial \"product/gallery/product-gallery\" obProduct = obProduct obOfferItem = obOfferItem %}
                </div>
                <div class=\"col-sm-12 col-md-12 col-lg-5 col-xl-5 col-xxl-5\">
                    <div class=\"product-overlay\">
                        <div class=\"product-title\">
                            <h2>{{obProduct.name}}</h2>
                        </div>
                        <div class=\"product-short\">
                            
                            {% partial \"product/price/price-product\" obOfferItem = obOfferItem %}
                            
                            <div class=\"raiting-overlay\">
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
                                <div class=\"add-reviews\">
                                    <a href=\"\">Добавить отзыв</a>
                                </div>
                            </div>
                        </div>
                        <div class=\"product-text\">
                            {{obProduct.preview_text | raw}}\t\t\t\t\t\t\t\t
                                
                        </div>
                        <!--Параметры товара-->
                        
                        <div class=\"product-options\">
                            <form id=\"formProperty-{{obProduct.id}}\">
                                {# Фильтр свойств товара #}
                                {% if obOfferPropertyList.isNotEmpty() %}
                                    {% partial \"product/filter-panel/product-filter-panel\" obPropertyList = obOfferPropertyList arAppliedPropertyList = arAppliedPropertyList %}
                                {% endif %}

                                {# Выводим офферы #}                                
                                {# Render select with offers #}
                                {% partial \"product/offer/product-offer-list\" obOfferList = obOfferList obOfferListCopy = obOfferListCopy %}
                                <!-- Количество -->
                                <div class=\"kol-wrapper\">
                                    <div class=\"group-kol\">
                                        <div class=\"form-group\">
                                            <div class=\"count-wrap\" id=\"product-single-count\">
                                                <div class=\"count-up\">+</div>
                                                <input 
                                                    type=\"number\" 
                                                    class=\"form-control amount-product\" 
                                                    id=\"count\" 
                                                    name=\"quantity\" 
                                                    step=\"1\"
                                                    min=\"1\"
                                                    max=\"{{obOfferItem.quantity}}\"
                                                    value=\"1\">
                                                <div class=\"count-down\">-</div>
                                            </div>\t\t\t\t\t\t\t\t
                                        </div>\t\t\t\t\t\t\t\t\t\t
                                    </div>
                                    <!--Добавить в корзину-->
                                    <button 
                                        type=\"button\" 
                                        id=\"addtocart\" 
                                        class=\"btn btn-primary _shopaholic-cart-add\"
                                        aria-label=\"Add to cart\">
                                            Добавить в корзину
                                    </button>
                                </div>
                                <!-- Остаток -->
                                {% partial \"product/offer/offer-quantity\" %}                                
                            </form>
                        </div>                        
                    </div>\t\t\t\t\t
                </div>
            </div>
            <div class=\"row\" > 
                <div class=\"col-sm-12 col-md-8 col-lg-7 col-xl-7 col-xxl-7\" >  
                    <div class=\"reviews\">
                        <div class=\"tab\">
                            <ul>
                                <li class=\"tab-item\" id=\"tab1\" data-tab=\"tab1\"><a href=\"#tab1\">Описание</a></li>
                                <li class=\"tab-item active\" id=\"tab2\" data-tab=\"tab2\"><a href=\"#tab2\">Отзывы</a></li>
                            </ul>
                        </div>
                        <div class=\"tab-content\">
                            <div class=\"tab-content-item\" id=\"tab1\" data-tabcontent=\"tab1\">
                                <div class=\"product-text\">
                                    {{obProduct.description | raw}}
                                </div>\t\t\t\t\t\t\t\t\t
                            </div>
                            <div class=\"tab-content-item show\" id=\"tab2\" data-tabcontent=\"tab2\">
                                <div class=\"title-wrap\">
                                    <div class=\"title\">
                                        <div class=\"count-r\">2</div>
                                        <h3>\t\t\t\t\t\t\t\t\t\t\t\t
                                            Отзыва
                                        </h3>\t\t\t\t\t\t\t\t\t\t\t
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
                                    </div>\t\t\t\t\t\t\t\t\t\t
                                </div>
                                <div class=\"review-content-wrap\">
                                    <div class=\"review\">
                                        <div class=\"review-title\"><span><img src=\"{{ 'assets/images/Verified.svg' | theme }}\" alt=\"\" class=\"icon-verified\"></span> Оксана</div>
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
                                            <div class=\"star-count data-review\">
                                                Декабрь 2020
                                            </div>\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                        </div>
                                        <div class=\"review-content\">
                                            <p>Очень понравился этот джемпер вязки «косы». Мой любимый, безумно нежный цвет, поднимающий настроение. Теплый и уютный)) Качество супер и длина та, которую я люблю) Советую его всем приобрести, не пожалеете))))</p>
                                        </div>
                                    </div>
                                    <div class=\"read-more\"><a href=\"#\" data-eventclick=\"open\" class=\"button text\">Читать далее</a></div>
                                    <div class=\"review-all-collapse\">
                                        <div class=\"review\">
                                            <div class=\"review-title\"><span><img src=\"{{ 'assets/images/Verified.svg' | theme }}\" alt=\"\" class=\"icon-verified\"></span> Оксана</div>
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
                                                <div class=\"star-count data-review\">
                                                    Декабрь 2020
                                                </div>\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                            </div>
                                            <div class=\"review-content\">
                                                <p>Очень понравился этот джемпер вязки «косы». Мой любимый, безумно нежный цвет, поднимающий настроение. Теплый и уютный)) Качество супер и длина та, которую я люблю) Советую его всем приобрести, не пожалеете))))</p>
                                            </div>
                                        </div>
                                        <div class=\"review\">
                                            <div class=\"review-title\"><span><img src=\"{{ 'assets/images/Verified.svg' | theme }}\" alt=\"\" class=\"icon-verified\"></span> Оксана</div>
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
                                                <div class=\"star-count data-review\">
                                                    Декабрь 2020
                                                </div>\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                            </div>
                                            <div class=\"review-content\">
                                                <p>Очень понравился этот джемпер вязки «косы». Мой любимый, безумно нежный цвет, поднимающий настроение. Теплый и уютный)) Качество супер и длина та, которую я люблю) Советую его всем приобрести, не пожалеете))))</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal images -->
    <div class=\"modal\" data-modal=\"1\">
        {% partial \"product/gallery/product-gallery-modal\" obProduct = obProduct obOfferItem = obOfferItem %}
    </div>
    {% partial \"similar-products\" obActiveCategory = obActiveCategory %}

    {% partial \"banners/banner-1\" %}

    {% partial \"related-products\" %}
{% else %}
    {# Render catalog page #}
    {% partial \"modal/filters/filter-modal\" obPropertyList = obFilterProductPropertyList obProductList = obFilteredProductList %}

    <!-- Category-->
    <div class=\"category\" data-id=\"{{ obCategory.id }}\" itemscope itemtype=\"http://schema.org/Category\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col\">
                    {% partial \"breadcrumbs/breadcrumbs\" arBreadcrumbs=Catalog.getBreadcrumbs() %}                
                    <div class=\"category__row\">
                        <div class=\"sidebar\">
                            <div class=\"sidebar__title\">
                                <h3>{{ obActiveCategory.name }}</h3>
                            </div>
                            <div class=\"sidebar__content\">
                                <div class=\"sidebar__menu\">
                                    {% partial \"category/category-tree/category-list\" obActiveCategory = obActiveCategory  %}
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
                                            <img src=\"{{'assets/images/Filter.svg' | theme }}\" alt=\"\">
                                        </div>
                                        <div class=\"filter-icon__label\">
                                            Фильтр
                                        </div>
                                    </div>
                                </div>
                                <div class=\"filter-bar-col\">
                                    <!-- Sort -->
                                    <div class=\"filter-sort\">
                                        <div class=\"filter-sort__label\">Сортировка:</div>
                                        <div class=\"filter-sort__select\">
                                            {% partial \"product/filter-panel/select-sort\" sActiveSort = sActiveSort %}
                                        </div>
                                    </div>
                                    {% partial \"product-count\" obFilteredProductList = obFilteredProductList%}
                                </div>
                            </div>
                            <div class=\"wrapper-overlay card-container catalog-wrapper\">
                                {% partial 'product/catalog/product-list' arProductList = arProductList  %}
                            </div>
                        </div>
                    </div>   
                </div>
            </div>            
        </div>
    </div>

    {% partial \"related-products\" %}

    {% partial \"banners/banner-1\" %}

    {% partial \"lookbook\" %}
{% endif %}", "Z:\\domains\\hatan.loc/themes/hatan/pages/catalog.htm", "");
    }
}
