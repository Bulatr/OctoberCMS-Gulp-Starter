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
        $tags = array("if" => 7, "partial" => 14, "set" => 28);
        $filters = array("var_dump" => 3, "escape" => 9, "raw" => 69, "theme" => 162);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'partial', 'set'],
                ['var_dump', 'escape', 'raw', 'theme'],
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
        echo "<pre>
";
        // line 3
        echo call_user_func_array($this->env->getFilter('var_dump')->getCallable(), [$this->sandbox->ensureToStringAllowed(($context["arFilterList"] ?? null), 3, $this->source)]);
        echo "
</pre>
";
        // line 7
        if (twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "isNotEmpty", [], "method", false, false, true, 7)) {
            // line 8
            echo "    ";
            // line 9
            echo "    <div class=\"single-product\" id=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "id", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
            echo "\">
    
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col\">
                    ";
            // line 14
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['arBreadcrumbs'] = twig_get_attribute($this->env, $this->source, ($context["Catalog"] ?? null), "getBreadcrumbs", [], "method", false, false, true, 14)            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("breadcrumbs/breadcrumbs"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 15
            echo "                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-sm-12 col-md-12 col-lg-7 col-xl-7 col-xxl-7\">
                    ";
            // line 19
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['obProduct'] = ($context["obProduct"] ?? null)            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("product/gallery/product-gallery"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 20
            echo "                </div>
                <div class=\"col-sm-12 col-md-12 col-lg-5 col-xl-5 col-xxl-5\">
                    <div class=\"product-overlay\">
                        <div class=\"product-title\">
                            <h2>";
            // line 24
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "name", [], "any", false, false, true, 24), 24, $this->source), "html", null, true);
            echo "</h2>
                        </div>
                        <div class=\"product-short\">
                            ";
            // line 28
            echo "                            ";
            $context["obOfferItem"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "offer", [], "any", false, false, true, 28), "sort", [0 => "price|asc"], "method", false, false, true, 28), "first", [], "method", false, false, true, 28);
            echo " 
                            <div class=\"price\">
                                ";
            // line 30
            if ((twig_get_attribute($this->env, $this->source, ($context["obOfferItem"] ?? null), "price", [], "any", false, false, true, 30) < twig_get_attribute($this->env, $this->source, ($context["obOfferItem"] ?? null), "old_price", [], "any", false, false, true, 30))) {
                // line 31
                echo "                                    <div class=\"old-price\" > ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obOfferItem"] ?? null), "old_price", [], "any", false, false, true, 31), 31, $this->source), "html", null, true);
                echo " </div>
                                ";
            }
            // line 33
            echo "                                <div class=\"current-price\" > ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obOfferItem"] ?? null), "price", [], "any", false, false, true, 33), 33, $this->source), "html", null, true);
            echo "<span class=\"rub\" itemprop=\"priceCurrency\" content=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obOfferItem"] ?? null), "currency_code", [], "any", false, false, true, 33), 33, $this->source), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obOfferItem"] ?? null), "currency", [], "any", false, false, true, 33), 33, $this->source), "html", null, true);
            echo "</span> </div>
                            </div>
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
            // line 69
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "preview_text", [], "any", false, false, true, 69), 69, $this->source);
            echo "\t\t\t\t\t\t\t\t
                                
                        </div>
                        <!--Параметры товара-->
                        
                        <div class=\"product-options\">
                            <form id=\"formProperty-";
            // line 75
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "id", [], "any", false, false, true, 75), 75, $this->source), "html", null, true);
            echo "\">
                                ";
            // line 77
            echo "                                ";
            if (twig_get_attribute($this->env, $this->source, ($context["obOfferPropertyList"] ?? null), "isNotEmpty", [], "method", false, false, true, 77)) {
                // line 78
                echo "                                    ";
                $context['__cms_partial_params'] = [];
                $context['__cms_partial_params']['obPropertyList'] = ($context["obOfferPropertyList"] ?? null)                ;
                $context['__cms_partial_params']['arAppliedPropertyList'] = ($context["arAppliedPropertyList"] ?? null)                ;
                echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("product/filter-panel/product-filter-panel"                , $context['__cms_partial_params']                , true                );
                unset($context['__cms_partial_params']);
                // line 79
                echo "                                ";
            }
            // line 80
            echo "                                ";
            // line 81
            echo "                                ";
            // line 82
            echo "                                
                                
                                ";
            // line 85
            echo "                                ";
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['obOfferList'] = ($context["obOfferList"] ?? null)            ;
            $context['__cms_partial_params']['obOfferListCopy'] = ($context["obOfferListCopy"] ?? null)            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("product/offer/product-offer-list"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 86
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
            // line 121
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "description", [], "any", false, false, true, 121), 121, $this->source);
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
            // line 162
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
            // line 197
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
            // line 230
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
            // line 280
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/Cross.svg");
            echo "\" alt=\"\">
                    </div>
                </div>
                <div class=\"modal-body\">
                    <div class=\"modal-icon left\">
                        <img id=\"modal-image-left\" src=\"";
            // line 285
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/Direction-Left.svg");
            echo "\" alt=\"\">
                    </div>
                    <div class=\"modal-wrap-images\">
                        <img src=\"";
            // line 288
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/dest/1/37416640299.jpg");
            echo "\" alt=\"\" id=\"dataimage-1\" data-modalimageid=\"modal-image-1\" class=\"modal-image show\">
                        <img src=\"";
            // line 289
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/dest/1/37416650299.jpg");
            echo "\" alt=\"\" id=\"dataimage-2\" data-modalimageid=\"modal-image-2\" class=\"modal-image\">
                        <img src=\"";
            // line 290
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/dest/1/37416660299.jpg");
            echo "\" alt=\"\" id=\"dataimage-3\" data-modalimageid=\"modal-image-3\" class=\"modal-image\">
                        <img src=\"";
            // line 291
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/dest/1/37416670299.jpg");
            echo "\" alt=\"\" id=\"dataimage-4\" data-modalimageid=\"modal-image-4\" class=\"modal-image\">
                        
                    </div>
                    <div class=\"modal-icon right\">
                        <img id=\"modal-image-right\" src=\"";
            // line 295
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/Direction-Right.svg");
            echo "\" alt=\"\">
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <div class=\"modal-images-thumbs\">
                        <img src=\"";
            // line 300
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/dest/1/37416640299.jpg");
            echo "\" alt=\"\" id=\"dataimage-1\" data-modalimageid=\"1\" class=\"modal-thumb-image\">
                        <img src=\"";
            // line 301
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/dest/1/37416650299.jpg");
            echo "\" alt=\"\" id=\"dataimage-2\" data-modalimageid=\"2\" class=\"modal-thumb-image\">
                        <img src=\"";
            // line 302
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/dest/1/37416660299.jpg");
            echo "\" alt=\"\" id=\"dataimage-3\" data-modalimageid=\"3\" class=\"modal-thumb-image\">
                        <img src=\"";
            // line 303
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/dest/1/37416670299.jpg");
            echo "\" alt=\"\" id=\"dataimage-4\" data-modalimageid=\"4\" class=\"modal-thumb-image\">
                    </div>
                </div>
            </div>
        </div>
    </div>

    ";
            // line 310
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("similar-products"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 311
            echo "
    ";
            // line 312
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("banners/banner-1"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 313
            echo "
    ";
            // line 314
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("related-products"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
        } else {
            // line 316
            echo "    ";
            // line 317
            echo "    ";
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['obPropertyList'] = ($context["obFilterProductPropertyList"] ?? null)            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("filters/filter-modal"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 318
            echo "
    <!-- Category-->
    <div class=\"category\" data-id=\"";
            // line 320
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obCategory"] ?? null), "id", [], "any", false, false, true, 320), 320, $this->source), "html", null, true);
            echo "\" itemscope itemtype=\"http://schema.org/Category\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col\">
                    ";
            // line 324
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['arBreadcrumbs'] = twig_get_attribute($this->env, $this->source, ($context["Catalog"] ?? null), "getBreadcrumbs", [], "method", false, false, true, 324)            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("breadcrumbs/breadcrumbs"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            echo "                
                    <div class=\"category__row\">
                        <div class=\"sidebar\">
                            <div class=\"sidebar__title\">
                                <h3>";
            // line 328
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obActiveCategory"] ?? null), "name", [], "any", false, false, true, 328), 328, $this->source), "html", null, true);
            echo "</h3>
                            </div>
                            <div class=\"sidebar__content\">
                                <div class=\"sidebar__menu\">
                                    ";
            // line 332
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['obActiveCategory'] = ($context["obActiveCategory"] ?? null)            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("category/category-tree/category-list"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 333
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
            // line 368
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
            // line 381
            if ((($context["sActiveSort"] ?? null) == "no")) {
                echo " selected ";
            }
            echo " value=\"no\">По популярности</option>
                                                <option ";
            // line 382
            if ((($context["sActiveSort"] ?? null) == "price|asc")) {
                echo " selected ";
            }
            echo " value=\"price|asc\">По возрастанию цены</option>
                                                <option ";
            // line 383
            if ((($context["sActiveSort"] ?? null) == "price|desc")) {
                echo " selected ";
            }
            echo " value=\"price|desc\">По убыванию цены</option>
                                                <option ";
            // line 384
            if ((($context["sActiveSort"] ?? null) == "new")) {
                echo " selected ";
            }
            echo " value=\"new\">Новые</option>
                                            </select>
                                        </div>\t\t\t\t\t\t\t\t\t\t
                                    </div>
                                    ";
            // line 388
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['obFilteredProductList'] = ($context["obFilteredProductList"] ?? null)            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("product-count"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 389
            echo "                                </div>
                            </div>
                            <div class=\"wrapper-overlay card-container catalog-wrapper\">
                                ";
            // line 392
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['arProductList'] = ($context["arProductList"] ?? null)            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("product/catalog/product-list"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 393
            echo "                            </div>
                        </div>
                    </div>   
                </div>
            </div>            
        </div>
    </div>

    ";
            // line 401
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("related-products"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 402
            echo "
    ";
            // line 403
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("banners/banner-1"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 404
            echo "
    ";
            // line 405
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
        return array (  660 => 405,  657 => 404,  653 => 403,  650 => 402,  646 => 401,  636 => 393,  631 => 392,  626 => 389,  621 => 388,  612 => 384,  606 => 383,  600 => 382,  594 => 381,  578 => 368,  541 => 333,  536 => 332,  529 => 328,  519 => 324,  512 => 320,  508 => 318,  502 => 317,  500 => 316,  495 => 314,  492 => 313,  488 => 312,  485 => 311,  481 => 310,  471 => 303,  467 => 302,  463 => 301,  459 => 300,  451 => 295,  444 => 291,  440 => 290,  436 => 289,  432 => 288,  426 => 285,  418 => 280,  365 => 230,  329 => 197,  291 => 162,  247 => 121,  210 => 86,  203 => 85,  199 => 82,  197 => 81,  195 => 80,  192 => 79,  185 => 78,  182 => 77,  178 => 75,  169 => 69,  125 => 33,  119 => 31,  117 => 30,  111 => 28,  105 => 24,  99 => 20,  94 => 19,  88 => 15,  83 => 14,  74 => 9,  72 => 8,  70 => 7,  65 => 3,  62 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{##}
<pre>
{{ arFilterList | var_dump}}
</pre>
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
                            {# Get first offer object #}
                            {% set obOfferItem = obProduct.offer.sort('price|asc').first() %} 
                            <div class=\"price\">
                                {% if obOfferItem.price < obOfferItem.old_price %}
                                    <div class=\"old-price\" > {{ obOfferItem.old_price }} </div>
                                {% endif %}
                                <div class=\"current-price\" > {{ obOfferItem.price }}<span class=\"rub\" itemprop=\"priceCurrency\" content=\"{{ obOfferItem.currency_code }}\">{{ obOfferItem.currency }}</span> </div>
                            </div>
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
