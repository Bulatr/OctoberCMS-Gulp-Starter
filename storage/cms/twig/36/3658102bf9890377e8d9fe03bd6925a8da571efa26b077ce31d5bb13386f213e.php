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
        $tags = array("partial" => 5, "if" => 69);
        $filters = array("escape" => 8, "theme" => 56);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['partial', 'if'],
                ['escape', 'theme'],
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
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['obProductList'] = ($context["obProductList"] ?? null)        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("filters/filter-modal"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 6
        echo "
<!-- Category-->
<div class=\"category\" data-id=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obCategory"] ?? null), "id", [], "any", false, false, true, 8), 8, $this->source), "html", null, true);
        echo "\" itemscope itemtype=\"http://schema.org/Category\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col\">
                ";
        // line 12
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['arBreadcrumbs'] = ($context["arBreadcrumbs"] ?? null)        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("breadcrumbs/breadcrumbs"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        echo "                
                <div class=\"category__row\">
                    <div class=\"sidebar\">
                        <div class=\"sidebar__title\">
                            <h3>";
        // line 16
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obActiveCategory"] ?? null), "name", [], "any", false, false, true, 16), 16, $this->source), "html", null, true);
        echo "</h3>
                        </div>
                        <div class=\"sidebar__content\">
                            <div class=\"sidebar__menu\">
                                ";
        // line 20
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['obActiveCategory'] = ($context["obActiveCategory"] ?? null)        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("category/category-tree/category-list"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 21
        echo "                            </div>
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
        // line 56
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
        // line 69
        if ((($context["sActiveSort"] ?? null) == "no")) {
            echo " selected ";
        }
        echo " value=\"no\">По популярности</option>
                                            <option ";
        // line 70
        if ((($context["sActiveSort"] ?? null) == "price|asc")) {
            echo " selected ";
        }
        echo " value=\"price|asc\">Дешевые</option>
                                            <option ";
        // line 71
        if ((($context["sActiveSort"] ?? null) == "price|desc")) {
            echo " selected ";
        }
        echo " value=\"price|desc\">Дорогие</option>
                                            <option ";
        // line 72
        if ((($context["sActiveSort"] ?? null) == "new")) {
            echo " selected ";
        }
        echo " value=\"new\">Новые</option>
                                        </select>
                                    </div>\t\t\t\t\t\t\t\t\t\t
                                </div>
                                <div class=\"kol-item\">
                                    <div class=\"kol-item__label\">Товаров</div>
                                    <div class=\"kol-item__value\">";
        // line 78
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obProductList"] ?? null), "count", [], "method", false, false, true, 78), 78, $this->source), "html", null, true);
        echo "</div>
                                    
                                </div>
                            </div>
                        </div>
                        <div class=\"wrapper-overlay card-container catalog-wrapper\">
                            ";
        // line 84
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['obActiveCategory'] = ($context["obActiveCategory"] ?? null)        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("product/catalog/product-list"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 85
        echo "                        </div>
                    </div>
                </div>   
            </div>
        </div>            
    </div>
</div>

";
        // line 93
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("related-products"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 94
        echo "
";
        // line 95
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("banners/banner-1"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 96
        echo "
";
        // line 97
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("lookbook"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
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
        return array (  223 => 97,  220 => 96,  216 => 95,  213 => 94,  209 => 93,  199 => 85,  194 => 84,  185 => 78,  174 => 72,  168 => 71,  162 => 70,  156 => 69,  140 => 56,  103 => 21,  98 => 20,  91 => 16,  81 => 12,  74 => 8,  70 => 6,  65 => 5,  62 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{##}

{# @var obCategory \\Lovata\\Shopaholic\\Classes\\Item\\CategoryItem #}
{# Get category item #}
{% partial \"filters/filter-modal\" obProductList = obProductList %}

<!-- Category-->
<div class=\"category\" data-id=\"{{ obCategory.id }}\" itemscope itemtype=\"http://schema.org/Category\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col\">
                {% partial \"breadcrumbs/breadcrumbs\" arBreadcrumbs=arBreadcrumbs %}                
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
                                            <option {% if sActiveSort == 'price|asc' %} selected {% endif %} value=\"price|asc\">Дешевые</option>
                                            <option {% if sActiveSort == 'price|desc' %} selected {% endif %} value=\"price|desc\">Дорогие</option>
                                            <option {% if sActiveSort == 'new' %} selected {% endif %} value=\"new\">Новые</option>
                                        </select>
                                    </div>\t\t\t\t\t\t\t\t\t\t
                                </div>
                                <div class=\"kol-item\">
                                    <div class=\"kol-item__label\">Товаров</div>
                                    <div class=\"kol-item__value\">{{obProductList.count()}}</div>
                                    
                                </div>
                            </div>
                        </div>
                        <div class=\"wrapper-overlay card-container catalog-wrapper\">
                            {% partial 'product/catalog/product-list' obActiveCategory=obActiveCategory  %}
                        </div>
                    </div>
                </div>   
            </div>
        </div>            
    </div>
</div>

{% partial \"related-products\" %}

{% partial \"banners/banner-1\" %}

{% partial \"lookbook\" %}", "Z:\\domains\\hatan.loc/themes/hatan/pages/catalog.htm", "");
    }
}
