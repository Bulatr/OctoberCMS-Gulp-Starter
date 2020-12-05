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

/* Z:\domains\hatan.loc/themes/hatan/pages/home.htm */
class __TwigTemplate_f9221f0bf78740f1f95ecaf03ded330d4cf1e530f95bac9396d4abf58af21e2b extends \Twig\Template
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
        $tags = array("set" => 2, "partial" => 44);
        $filters = array("theme" => 17);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'partial'],
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
        $context["obPopularProductList"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ProductList"] ?? null), "make", [], "method", false, false, true, 2), "active", [], "method", false, false, true, 2), "popularityItems", [], "method", false, false, true, 2), "take", [0 => 8], "method", false, false, true, 2);
        // line 3
        echo "
<div class=\"carousel-wrapper\">
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
        // line 17
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

";
        // line 44
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("banners/main-banner"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 45
        echo "
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

";
        // line 64
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("bestsellers"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 65
        echo "

";
        // line 67
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("lookbook"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "Z:\\domains\\hatan.loc/themes/hatan/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 67,  139 => 65,  135 => 64,  114 => 45,  110 => 44,  80 => 17,  64 => 3,  62 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{##}
{% set obPopularProductList = ProductList.make().active().popularityItems().take(8) %}

<div class=\"carousel-wrapper\">
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

{% partial \"banners/main-banner\" %}

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

{% partial \"bestsellers\" %}


{% partial \"lookbook\" %}", "Z:\\domains\\hatan.loc/themes/hatan/pages/home.htm", "");
    }
}