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
        $tags = array("if" => 5, "partial" => 12, "set" => 26, "for" => 98);
        $filters = array("escape" => 7, "raw" => 67, "theme" => 180);
        $functions = array("input" => 77);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'partial', 'set', 'for'],
                ['escape', 'raw', 'theme'],
                ['input']
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
            echo "                            ";
            $context["obOffer"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "offer", [], "any", false, false, true, 26), "sort", [0 => "price|asc"], "method", false, false, true, 26), "first", [], "method", false, false, true, 26);
            echo " 
                            <div class=\"price\">
                                ";
            // line 28
            if ((twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "price", [], "any", false, false, true, 28) < twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "old_price", [], "any", false, false, true, 28))) {
                // line 29
                echo "                                    <div class=\"old-price\" > ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "old_price", [], "any", false, false, true, 29), 29, $this->source), "html", null, true);
                echo " </div>
                                ";
            }
            // line 31
            echo "                                <div class=\"current-price\" > ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "price", [], "any", false, false, true, 31), 31, $this->source), "html", null, true);
            echo "<span class=\"rub\" itemprop=\"priceCurrency\" content=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "currency_code", [], "any", false, false, true, 31), 31, $this->source), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "currency", [], "any", false, false, true, 31), 31, $this->source), "html", null, true);
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
            // line 67
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "preview_text", [], "any", false, false, true, 67), 67, $this->source);
            echo "\t\t\t\t\t\t\t\t
                                
                        </div>
                        <!--Параметры товара-->
                        ";
            // line 72
            echo "                        ";
            $context["obOfferList"] = twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "offer", [], "any", false, false, true, 72);
            // line 73
            echo "
                        ";
            // line 75
            echo "                        ";
            // line 76
            echo "                        ";
            $context["obItemProductList"] = twig_get_attribute($this->env, $this->source, ($context["ProductList"] ?? null), "make", [0 => [0 => twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "id", [], "any", false, false, true, 76)]], "method", false, false, true, 76);
            // line 77
            echo "                        ";
            $context["arAppliedPropertyList"] = input("property");
            // line 78
            echo "                        ";
            // line 79
            echo "                        ";
            $context["obOfferPropertyList"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["obMainCategoryItem"] ?? null), "offer_filter_property", [], "any", false, false, true, 79), "setCategory", [0 => null], "method", false, false, true, 79), "setProductList", [0 => ($context["obItemProductList"] ?? null)], "method", false, false, true, 79);
            // line 80
            echo "                        
                        <div class=\"product-options\">
                            <form id=\"formProperty-";
            // line 82
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "id", [], "any", false, false, true, 82), 82, $this->source), "html", null, true);
            echo "\">
                                ";
            // line 84
            echo "                                ";
            if (twig_get_attribute($this->env, $this->source, ($context["obOfferPropertyList"] ?? null), "isNotEmpty", [], "method", false, false, true, 84)) {
                // line 85
                echo "                                    ";
                $context['__cms_partial_params'] = [];
                $context['__cms_partial_params']['obPropertyList'] = ($context["obOfferPropertyList"] ?? null)                ;
                $context['__cms_partial_params']['arAppliedPropertyList'] = ($context["arAppliedPropertyList"] ?? null)                ;
                echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("product/filter-panel/product-filter-panel"                , $context['__cms_partial_params']                , true                );
                unset($context['__cms_partial_params']);
                // line 86
                echo "                                ";
            }
            // line 87
            echo "                                ";
            // line 88
            echo "                                ";
            // line 89
            echo "                                ";
            $context["obOfferList"] = twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "offer", [], "any", false, false, true, 89);
            // line 90
            echo "                                ";
            // line 91
            echo "                                ";
            if (twig_get_attribute($this->env, $this->source, ($context["obOfferList"] ?? null), "isNotEmpty", [], "method", false, false, true, 91)) {
                // line 92
                echo "                                    <div class=\"form-group product-property\" >  
                                        <label class=\"property-values__label\" for=\"offersProduct\">Выберите предложение</label>
                                        <select
                                            class=\"form-control property-values__select\"                                            
                                            name=\"offer\"
                                            id=\"offersProduct\">
                                            ";
                // line 98
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["obOfferList"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["obOffer"]) {
                    echo "                                        
                                                <option value=\"";
                    // line 99
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["obOffer"], "id", [], "any", false, false, true, 99), 99, $this->source), "html", null, true);
                    echo "\" >";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["obOffer"], "name", [], "any", false, false, true, 99), 99, $this->source), "html", null, true);
                    echo "</option>
                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['obOffer'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 101
                echo "                                        </select>
                                    </div>
                                ";
            }
            // line 104
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
            // line 139
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "description", [], "any", false, false, true, 139), 139, $this->source);
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
            // line 180
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
            // line 215
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
            // line 248
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
            // line 298
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/Cross.svg");
            echo "\" alt=\"\">
                    </div>
                </div>
                <div class=\"modal-body\">
                    <div class=\"modal-icon left\">
                        <img id=\"modal-image-left\" src=\"";
            // line 303
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/Direction-Left.svg");
            echo "\" alt=\"\">
                    </div>
                    <div class=\"modal-wrap-images\">
                        <img src=\"";
            // line 306
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/dest/1/37416640299.jpg");
            echo "\" alt=\"\" id=\"dataimage-1\" data-modalimageid=\"modal-image-1\" class=\"modal-image show\">
                        <img src=\"";
            // line 307
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/dest/1/37416650299.jpg");
            echo "\" alt=\"\" id=\"dataimage-2\" data-modalimageid=\"modal-image-2\" class=\"modal-image\">
                        <img src=\"";
            // line 308
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/dest/1/37416660299.jpg");
            echo "\" alt=\"\" id=\"dataimage-3\" data-modalimageid=\"modal-image-3\" class=\"modal-image\">
                        <img src=\"";
            // line 309
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/dest/1/37416670299.jpg");
            echo "\" alt=\"\" id=\"dataimage-4\" data-modalimageid=\"modal-image-4\" class=\"modal-image\">
                        
                    </div>
                    <div class=\"modal-icon right\">
                        <img id=\"modal-image-right\" src=\"";
            // line 313
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/Direction-Right.svg");
            echo "\" alt=\"\">
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <div class=\"modal-images-thumbs\">
                        <img src=\"";
            // line 318
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/dest/1/37416640299.jpg");
            echo "\" alt=\"\" id=\"dataimage-1\" data-modalimageid=\"1\" class=\"modal-thumb-image\">
                        <img src=\"";
            // line 319
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/dest/1/37416650299.jpg");
            echo "\" alt=\"\" id=\"dataimage-2\" data-modalimageid=\"2\" class=\"modal-thumb-image\">
                        <img src=\"";
            // line 320
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/dest/1/37416660299.jpg");
            echo "\" alt=\"\" id=\"dataimage-3\" data-modalimageid=\"3\" class=\"modal-thumb-image\">
                        <img src=\"";
            // line 321
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/dest/1/37416670299.jpg");
            echo "\" alt=\"\" id=\"dataimage-4\" data-modalimageid=\"4\" class=\"modal-thumb-image\">
                    </div>
                </div>
            </div>
        </div>
    </div>

    ";
            // line 328
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("similar-products"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 329
            echo "
    ";
            // line 330
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("banners/banner-1"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 331
            echo "
    ";
            // line 332
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("related-products"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
        } else {
            // line 334
            echo "    ";
            // line 335
            echo "    ";
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['obPropertyList'] = ($context["obFilterProductPropertyList"] ?? null)            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("filters/filter-modal"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 336
            echo "
    <!-- Category-->
    <div class=\"category\" data-id=\"";
            // line 338
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obCategory"] ?? null), "id", [], "any", false, false, true, 338), 338, $this->source), "html", null, true);
            echo "\" itemscope itemtype=\"http://schema.org/Category\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col\">
                    ";
            // line 342
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['arBreadcrumbs'] = twig_get_attribute($this->env, $this->source, ($context["Catalog"] ?? null), "getBreadcrumbs", [], "method", false, false, true, 342)            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("breadcrumbs/breadcrumbs"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            echo "                
                    <div class=\"category__row\">
                        <div class=\"sidebar\">
                            <div class=\"sidebar__title\">
                                <h3>";
            // line 346
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obActiveCategory"] ?? null), "name", [], "any", false, false, true, 346), 346, $this->source), "html", null, true);
            echo "</h3>
                            </div>
                            <div class=\"sidebar__content\">
                                <div class=\"sidebar__menu\">
                                    ";
            // line 350
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['obActiveCategory'] = ($context["obActiveCategory"] ?? null)            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("category/category-tree/category-list"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 351
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
            // line 386
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
            // line 399
            if ((($context["sActiveSort"] ?? null) == "no")) {
                echo " selected ";
            }
            echo " value=\"no\">По популярности</option>
                                                <option ";
            // line 400
            if ((($context["sActiveSort"] ?? null) == "price|asc")) {
                echo " selected ";
            }
            echo " value=\"price|asc\">По возрастанию цены</option>
                                                <option ";
            // line 401
            if ((($context["sActiveSort"] ?? null) == "price|desc")) {
                echo " selected ";
            }
            echo " value=\"price|desc\">По убыванию цены</option>
                                                <option ";
            // line 402
            if ((($context["sActiveSort"] ?? null) == "new")) {
                echo " selected ";
            }
            echo " value=\"new\">Новые</option>
                                            </select>
                                        </div>\t\t\t\t\t\t\t\t\t\t
                                    </div>
                                    ";
            // line 406
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['obFilteredProductList'] = ($context["obFilteredProductList"] ?? null)            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("product-count"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 407
            echo "                                </div>
                            </div>
                            <div class=\"wrapper-overlay card-container catalog-wrapper\">
                                ";
            // line 410
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['arProductList'] = ($context["arProductList"] ?? null)            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("product/catalog/product-list"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 411
            echo "                            </div>
                        </div>
                    </div>   
                </div>
            </div>            
        </div>
    </div>

    ";
            // line 419
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("related-products"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 420
            echo "
    ";
            // line 421
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("banners/banner-1"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 422
            echo "
    ";
            // line 423
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
        return array (  702 => 423,  699 => 422,  695 => 421,  692 => 420,  688 => 419,  678 => 411,  673 => 410,  668 => 407,  663 => 406,  654 => 402,  648 => 401,  642 => 400,  636 => 399,  620 => 386,  583 => 351,  578 => 350,  571 => 346,  561 => 342,  554 => 338,  550 => 336,  544 => 335,  542 => 334,  537 => 332,  534 => 331,  530 => 330,  527 => 329,  523 => 328,  513 => 321,  509 => 320,  505 => 319,  501 => 318,  493 => 313,  486 => 309,  482 => 308,  478 => 307,  474 => 306,  468 => 303,  460 => 298,  407 => 248,  371 => 215,  333 => 180,  289 => 139,  252 => 104,  247 => 101,  237 => 99,  231 => 98,  223 => 92,  220 => 91,  218 => 90,  215 => 89,  213 => 88,  211 => 87,  208 => 86,  201 => 85,  198 => 84,  194 => 82,  190 => 80,  187 => 79,  185 => 78,  182 => 77,  179 => 76,  177 => 75,  174 => 73,  171 => 72,  164 => 67,  120 => 31,  114 => 29,  112 => 28,  106 => 26,  100 => 22,  94 => 18,  89 => 17,  83 => 13,  78 => 12,  69 => 7,  67 => 6,  65 => 5,  62 => 2,);
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
                            {# Get first offer object #}
                            {% set obOffer = obProduct.offer.sort('price|asc').first() %} 
                            <div class=\"price\">
                                {% if obOffer.price < obOffer.old_price %}
                                    <div class=\"old-price\" > {{ obOffer.old_price }} </div>
                                {% endif %}
                                <div class=\"current-price\" > {{ obOffer.price }}<span class=\"rub\" itemprop=\"priceCurrency\" content=\"{{ obOffer.currency_code }}\">{{ obOffer.currency }}</span> </div>
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
                        {# Get offer list #}
                        {% set obOfferList = obProduct.offer %}

                        {# Нужно сделать фильтр по офферам #}
                        {# Get product collection #}
                        {% set obItemProductList = ProductList.make([obProduct.id]) %}
                        {% set arAppliedPropertyList = input('property') %}
                        {# Get offer proeprties for property sets with code 'main', enabled how filters #}
                        {% set obOfferPropertyList = obMainCategoryItem.offer_filter_property.setCategory(null).setProductList(obItemProductList) %}
                        
                        <div class=\"product-options\">
                            <form id=\"formProperty-{{obProduct.id}}\">
                                {# Фильтр свойств товара #}
                                {% if obOfferPropertyList.isNotEmpty() %}
                                    {% partial \"product/filter-panel/product-filter-panel\" obPropertyList = obOfferPropertyList arAppliedPropertyList = arAppliedPropertyList %}
                                {% endif %}
                                {# Выводим офферы #}
                                {# Get offer list #}
                                {% set obOfferList = obProduct.offer %}
                                {# Render select with offers #}
                                {% if obOfferList.isNotEmpty() %}
                                    <div class=\"form-group product-property\" >  
                                        <label class=\"property-values__label\" for=\"offersProduct\">Выберите предложение</label>
                                        <select
                                            class=\"form-control property-values__select\"                                            
                                            name=\"offer\"
                                            id=\"offersProduct\">
                                            {% for obOffer in obOfferList %}                                        
                                                <option value=\"{{ obOffer.id }}\" >{{ obOffer.name }}</option>
                                            {% endfor %}
                                        </select>
                                    </div>
                                {% endif %}
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
