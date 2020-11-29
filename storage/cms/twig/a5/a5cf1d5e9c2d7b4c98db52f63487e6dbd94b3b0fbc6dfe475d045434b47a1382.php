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
        $tags = array("set" => 1, "partial" => 43);
        $filters = array("theme" => 16);
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
        // line 1
        $context["obPopularProductList"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ProductList"] ?? null), "make", [], "method", false, false, true, 1), "active", [], "method", false, false, true, 1), "popularityItems", [], "method", false, false, true, 1), "take", [0 => 8], "method", false, false, true, 1);
        // line 2
        echo "<pre></pre>
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
        // line 16
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
        // line 43
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("banners/main-banner"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 44
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
        // line 63
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("bestsellers"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 64
        echo "

";
        // line 66
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("lookbook"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
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
        return array (  143 => 66,  139 => 64,  135 => 63,  114 => 44,  110 => 43,  80 => 16,  64 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set obPopularProductList = ProductList.make().active().popularityItems().take(8) %}
<pre></pre>
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


{% partial \"lookbook\" %}", "C:\\OSPanel\\domains\\hatan.loc/themes/hatan/pages/home.htm", "");
    }
}
