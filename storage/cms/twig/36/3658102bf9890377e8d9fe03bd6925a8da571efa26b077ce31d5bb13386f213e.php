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
        $tags = array("if" => 5, "partial" => 12);
        $filters = array("escape" => 7, "raw" => 62, "theme" => 155);
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
        // line 2
        echo "
";
        // line 5
        if (twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "isNotEmpty", [], "method", false, false, true, 5)) {
            // line 6
            echo "    ";
            // line 7
            echo "    <div class=\"single-product\" id=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "id", [], "any", false, false, true, 7), 7, $this->source), "html", null, true);
            echo "\">
    
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col\">
                    ";
            // line 12
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['arBreadcrumbs'] = twig_get_attribute($this->env, $this->source, ($context["Catalog"] ?? null), "getBreadcrumbs", [], "method", false, false, true, 12)            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("breadcrumbs/breadcrumbs"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 13
            echo "                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-sm-12 col-md-12 col-lg-7 col-xl-7 col-xxl-7\">
                    ";
            // line 17
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['obProduct'] = ($context["obProduct"] ?? null)            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("product/gallery/product-gallery"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 18
            echo "                </div>
                <div class=\"col-sm-12 col-md-12 col-lg-5 col-xl-5 col-xxl-5\">
                    <div class=\"product-overlay\">
                        <div class=\"product-title\">
                            <h2>";
            // line 22
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "name", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
            echo "</h2>
                        </div>
                        <div class=\"product-short\">
                            
                            ";
            // line 26
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['obOfferItem'] = ($context["obOfferItem"] ?? null)            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("product/price/price-product"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 27
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
            // line 62
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "preview_text", [], "any", false, false, true, 62), 62, $this->source);
            echo "\t\t\t\t\t\t\t\t
                                
                        </div>
                        <!--Параметры товара-->
                        
                        <div class=\"product-options\">
                            <form id=\"formProperty-";
            // line 68
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "id", [], "any", false, false, true, 68), 68, $this->source), "html", null, true);
            echo "\">
                                ";
            // line 70
            echo "                                ";
            if (twig_get_attribute($this->env, $this->source, ($context["obOfferPropertyList"] ?? null), "isNotEmpty", [], "method", false, false, true, 70)) {
                // line 71
                echo "                                    ";
                $context['__cms_partial_params'] = [];
                $context['__cms_partial_params']['obPropertyList'] = ($context["obOfferPropertyList"] ?? null)                ;
                $context['__cms_partial_params']['arAppliedPropertyList'] = ($context["arAppliedPropertyList"] ?? null)                ;
                echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("product/filter-panel/product-filter-panel"                , $context['__cms_partial_params']                , true                );
                unset($context['__cms_partial_params']);
                // line 72
                echo "                                ";
            }
            // line 73
            echo "                                ";
            // line 74
            echo "                                ";
            // line 75
            echo "                                
                                
                                ";
            // line 78
            echo "                                ";
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['obOfferList'] = ($context["obOfferList"] ?? null)            ;
            $context['__cms_partial_params']['obOfferListCopy'] = ($context["obOfferListCopy"] ?? null)            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("product/offer/product-offer-list"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 79
            echo "                                <!-- Количество -->
                                <div class=\"kol-wrapper\">
                                    <div class=\"group-kol\">
                                        <div class=\"form-group\">
                                            <div class=\"count-wrap\" id=\"product-single-count\">
                                                <div class=\"count-up\">+</div>
                                                <input type=\"text\" class=\"form-control amount-product\" id=\"count\" name=\"amount-product\" placeholder=\"1\" value=\"1\">
                                                <div class=\"count-down\">-</div>
                                            </div>\t\t\t\t\t\t\t\t
                                        </div>\t\t\t\t\t\t\t\t\t\t
                                    </div>
                                    <!--Добавить в корзину-->
                                    <button type=\"submit\" id=\"addtocart\" class=\"btn btn-primary\">Добавить корзину</button>
                                </div>
                                <!-- Остаток -->
                                <div class=\"ostatok\">
                                    <div class=\"label-ostatok\">
                                        Остаток:
                                    </div>
                                    <div class=\"value-ostatok\">
                                        25
                                    </div>
                                </div>
                            </form>
                        </div>
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
            // line 114
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "description", [], "any", false, false, true, 114), 114, $this->source);
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
            // line 155
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
            // line 190
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
            // line 223
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
                    </div>\t\t\t\t\t
                </div>
            </div>
        </div>
    </div>

    <!-- Modal images -->
    <div class=\"modal\" data-modal=\"1\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <div></div>
                    <div class=\"close\">
                        <img src=\"";
            // line 273
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/Cross.svg");
            echo "\" alt=\"\">
                    </div>
                </div>
                <div class=\"modal-body\">
                    <div class=\"modal-icon left\">
                        <img id=\"modal-image-left\" src=\"";
            // line 278
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/Direction-Left.svg");
            echo "\" alt=\"\">
                    </div>
                    <div class=\"modal-wrap-images\">
                        <img src=\"";
            // line 281
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/dest/1/37416640299.jpg");
            echo "\" alt=\"\" id=\"dataimage-1\" data-modalimageid=\"modal-image-1\" class=\"modal-image show\">
                        <img src=\"";
            // line 282
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/dest/1/37416650299.jpg");
            echo "\" alt=\"\" id=\"dataimage-2\" data-modalimageid=\"modal-image-2\" class=\"modal-image\">
                        <img src=\"";
            // line 283
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/dest/1/37416660299.jpg");
            echo "\" alt=\"\" id=\"dataimage-3\" data-modalimageid=\"modal-image-3\" class=\"modal-image\">
                        <img src=\"";
            // line 284
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/dest/1/37416670299.jpg");
            echo "\" alt=\"\" id=\"dataimage-4\" data-modalimageid=\"modal-image-4\" class=\"modal-image\">
                        
                    </div>
                    <div class=\"modal-icon right\">
                        <img id=\"modal-image-right\" src=\"";
            // line 288
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/Direction-Right.svg");
            echo "\" alt=\"\">
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <div class=\"modal-images-thumbs\">
                        <img src=\"";
            // line 293
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/dest/1/37416640299.jpg");
            echo "\" alt=\"\" id=\"dataimage-1\" data-modalimageid=\"1\" class=\"modal-thumb-image\">
                        <img src=\"";
            // line 294
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/dest/1/37416650299.jpg");
            echo "\" alt=\"\" id=\"dataimage-2\" data-modalimageid=\"2\" class=\"modal-thumb-image\">
                        <img src=\"";
            // line 295
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/dest/1/37416660299.jpg");
            echo "\" alt=\"\" id=\"dataimage-3\" data-modalimageid=\"3\" class=\"modal-thumb-image\">
                        <img src=\"";
            // line 296
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/dest/1/37416670299.jpg");
            echo "\" alt=\"\" id=\"dataimage-4\" data-modalimageid=\"4\" class=\"modal-thumb-image\">
                    </div>
                </div>
            </div>
        </div>
    </div>

    ";
            // line 303
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("similar-products"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 304
            echo "
    ";
            // line 305
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("banners/banner-1"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 306
            echo "
    ";
            // line 307
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("related-products"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
        } else {
            // line 309
            echo "    ";
            // line 310
            echo "    ";
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['obPropertyList'] = ($context["obFilterProductPropertyList"] ?? null)            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("filters/filter-modal"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 311
            echo "
    <!-- Category-->
    <div class=\"category\" data-id=\"";
            // line 313
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obCategory"] ?? null), "id", [], "any", false, false, true, 313), 313, $this->source), "html", null, true);
            echo "\" itemscope itemtype=\"http://schema.org/Category\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col\">
                    ";
            // line 317
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['arBreadcrumbs'] = twig_get_attribute($this->env, $this->source, ($context["Catalog"] ?? null), "getBreadcrumbs", [], "method", false, false, true, 317)            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("breadcrumbs/breadcrumbs"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            echo "                
                    <div class=\"category__row\">
                        <div class=\"sidebar\">
                            <div class=\"sidebar__title\">
                                <h3>";
            // line 321
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obActiveCategory"] ?? null), "name", [], "any", false, false, true, 321), 321, $this->source), "html", null, true);
            echo "</h3>
                            </div>
                            <div class=\"sidebar__content\">
                                <div class=\"sidebar__menu\">
                                    ";
            // line 325
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['obActiveCategory'] = ($context["obActiveCategory"] ?? null)            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("category/category-tree/category-list"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 326
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
            // line 361
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/Filter.svg");
            echo "\" alt=\"\">
                                        </div>\t\t\t\t\t\t\t\t\t
                                        <div class=\"filter-icon__label\">
                                            Фильтр
                                        </div>\t\t\t\t\t\t\t\t\t
                                    </div>
                                </div>
                                <div class=\"filter-bar-col\">
                                    <!-- Sort -->
                                    <div class=\"filter-sort\">
                                        <div class=\"filter-sort__label\">Сортировка</div>
                                        <div class=\"filter-sort__select\">
                                            <select class=\"sort-select _shopaholic-sorting\" name=\"sort-product\" id=\"sort-product\">
                                                <option ";
            // line 374
            if ((($context["sActiveSort"] ?? null) == "no")) {
                echo " selected ";
            }
            echo " value=\"no\">По популярности</option>
                                                <option ";
            // line 375
            if ((($context["sActiveSort"] ?? null) == "price|asc")) {
                echo " selected ";
            }
            echo " value=\"price|asc\">По возрастанию цены</option>
                                                <option ";
            // line 376
            if ((($context["sActiveSort"] ?? null) == "price|desc")) {
                echo " selected ";
            }
            echo " value=\"price|desc\">По убыванию цены</option>
                                                <option ";
            // line 377
            if ((($context["sActiveSort"] ?? null) == "new")) {
                echo " selected ";
            }
            echo " value=\"new\">Новые</option>
                                            </select>
                                        </div>\t\t\t\t\t\t\t\t\t\t
                                    </div>
                                    ";
            // line 381
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['obFilteredProductList'] = ($context["obFilteredProductList"] ?? null)            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("product-count"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 382
            echo "                                </div>
                            </div>
                            <div class=\"wrapper-overlay card-container catalog-wrapper\">
                                ";
            // line 385
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['arProductList'] = ($context["arProductList"] ?? null)            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("product/catalog/product-list"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 386
            echo "                            </div>
                        </div>
                    </div>   
                </div>
            </div>            
        </div>
    </div>

    ";
            // line 394
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("related-products"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 395
            echo "
    ";
            // line 396
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("banners/banner-1"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 397
            echo "
    ";
            // line 398
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
        return array (  640 => 398,  637 => 397,  633 => 396,  630 => 395,  626 => 394,  616 => 386,  611 => 385,  606 => 382,  601 => 381,  592 => 377,  586 => 376,  580 => 375,  574 => 374,  558 => 361,  521 => 326,  516 => 325,  509 => 321,  499 => 317,  492 => 313,  488 => 311,  482 => 310,  480 => 309,  475 => 307,  472 => 306,  468 => 305,  465 => 304,  461 => 303,  451 => 296,  447 => 295,  443 => 294,  439 => 293,  431 => 288,  424 => 284,  420 => 283,  416 => 282,  412 => 281,  406 => 278,  398 => 273,  345 => 223,  309 => 190,  271 => 155,  227 => 114,  190 => 79,  183 => 78,  179 => 75,  177 => 74,  175 => 73,  172 => 72,  165 => 71,  162 => 70,  158 => 68,  149 => 62,  112 => 27,  107 => 26,  100 => 22,  94 => 18,  89 => 17,  83 => 13,  78 => 12,  69 => 7,  67 => 6,  65 => 5,  62 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{##}

{# @var obCategory \\Lovata\\Shopaholic\\Classes\\Item\\CategoryItem #}
{# Get category item #}
{% if obProduct.isNotEmpty() %}
    {# Render product page #}
    <div class=\"single-product\" id=\"{{obProduct.id}}\">
    
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col\">
                    {% partial \"breadcrumbs/breadcrumbs\" arBreadcrumbs=Catalog.getBreadcrumbs() %}
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-sm-12 col-md-12 col-lg-7 col-xl-7 col-xxl-7\">
                    {% partial \"product/gallery/product-gallery\" obProduct = obProduct %}
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
                                {# Get offer list #}
                                
                                
                                {# Render select with offers #}
                                {% partial \"product/offer/product-offer-list\" obOfferList = obOfferList obOfferListCopy = obOfferListCopy %}
                                <!-- Количество -->
                                <div class=\"kol-wrapper\">
                                    <div class=\"group-kol\">
                                        <div class=\"form-group\">
                                            <div class=\"count-wrap\" id=\"product-single-count\">
                                                <div class=\"count-up\">+</div>
                                                <input type=\"text\" class=\"form-control amount-product\" id=\"count\" name=\"amount-product\" placeholder=\"1\" value=\"1\">
                                                <div class=\"count-down\">-</div>
                                            </div>\t\t\t\t\t\t\t\t
                                        </div>\t\t\t\t\t\t\t\t\t\t
                                    </div>
                                    <!--Добавить в корзину-->
                                    <button type=\"submit\" id=\"addtocart\" class=\"btn btn-primary\">Добавить корзину</button>
                                </div>
                                <!-- Остаток -->
                                <div class=\"ostatok\">
                                    <div class=\"label-ostatok\">
                                        Остаток:
                                    </div>
                                    <div class=\"value-ostatok\">
                                        25
                                    </div>
                                </div>
                            </form>
                        </div>
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
                    </div>\t\t\t\t\t
                </div>
            </div>
        </div>
    </div>

    <!-- Modal images -->
    <div class=\"modal\" data-modal=\"1\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <div></div>
                    <div class=\"close\">
                        <img src=\"{{ 'assets/images/Cross.svg' | theme }}\" alt=\"\">
                    </div>
                </div>
                <div class=\"modal-body\">
                    <div class=\"modal-icon left\">
                        <img id=\"modal-image-left\" src=\"{{ 'assets/images/Direction-Left.svg' | theme }}\" alt=\"\">
                    </div>
                    <div class=\"modal-wrap-images\">
                        <img src=\"{{ 'assets/images/dest/1/37416640299.jpg' | theme }}\" alt=\"\" id=\"dataimage-1\" data-modalimageid=\"modal-image-1\" class=\"modal-image show\">
                        <img src=\"{{ 'assets/images/dest/1/37416650299.jpg' | theme }}\" alt=\"\" id=\"dataimage-2\" data-modalimageid=\"modal-image-2\" class=\"modal-image\">
                        <img src=\"{{ 'assets/images/dest/1/37416660299.jpg' | theme }}\" alt=\"\" id=\"dataimage-3\" data-modalimageid=\"modal-image-3\" class=\"modal-image\">
                        <img src=\"{{ 'assets/images/dest/1/37416670299.jpg' | theme }}\" alt=\"\" id=\"dataimage-4\" data-modalimageid=\"modal-image-4\" class=\"modal-image\">
                        
                    </div>
                    <div class=\"modal-icon right\">
                        <img id=\"modal-image-right\" src=\"{{ 'assets/images/Direction-Right.svg' | theme }}\" alt=\"\">
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <div class=\"modal-images-thumbs\">
                        <img src=\"{{ 'assets/images/dest/1/37416640299.jpg' | theme }}\" alt=\"\" id=\"dataimage-1\" data-modalimageid=\"1\" class=\"modal-thumb-image\">
                        <img src=\"{{ 'assets/images/dest/1/37416650299.jpg' | theme }}\" alt=\"\" id=\"dataimage-2\" data-modalimageid=\"2\" class=\"modal-thumb-image\">
                        <img src=\"{{ 'assets/images/dest/1/37416660299.jpg' | theme }}\" alt=\"\" id=\"dataimage-3\" data-modalimageid=\"3\" class=\"modal-thumb-image\">
                        <img src=\"{{ 'assets/images/dest/1/37416670299.jpg' | theme }}\" alt=\"\" id=\"dataimage-4\" data-modalimageid=\"4\" class=\"modal-thumb-image\">
                    </div>
                </div>
            </div>
        </div>
    </div>

    {% partial \"similar-products\" %}

    {% partial \"banners/banner-1\" %}

    {% partial \"related-products\" %}
{% else %}
    {# Render catalog page #}
    {% partial \"filters/filter-modal\" obPropertyList = obFilterProductPropertyList %}

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
                                        </div>\t\t\t\t\t\t\t\t\t
                                        <div class=\"filter-icon__label\">
                                            Фильтр
                                        </div>\t\t\t\t\t\t\t\t\t
                                    </div>
                                </div>
                                <div class=\"filter-bar-col\">
                                    <!-- Sort -->
                                    <div class=\"filter-sort\">
                                        <div class=\"filter-sort__label\">Сортировка</div>
                                        <div class=\"filter-sort__select\">
                                            <select class=\"sort-select _shopaholic-sorting\" name=\"sort-product\" id=\"sort-product\">
                                                <option {% if sActiveSort == 'no' %} selected {% endif %} value=\"no\">По популярности</option>
                                                <option {% if sActiveSort == 'price|asc' %} selected {% endif %} value=\"price|asc\">По возрастанию цены</option>
                                                <option {% if sActiveSort == 'price|desc' %} selected {% endif %} value=\"price|desc\">По убыванию цены</option>
                                                <option {% if sActiveSort == 'new' %} selected {% endif %} value=\"new\">Новые</option>
                                            </select>
                                        </div>\t\t\t\t\t\t\t\t\t\t
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
