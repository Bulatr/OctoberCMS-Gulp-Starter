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

/* Z:\domains\hatan.loc/themes/hatan/partials/related-products.htm */
class __TwigTemplate_5e5af60843c59b20f05ca6f5bd737668a4cfdee0f0b12ee3924563bd603b9166 extends \Twig\Template
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
        $filters = array("page" => 24, "theme" => 25);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
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
        echo "<div class=\"section\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col d-flex justify-content-center\">
                <div class=\"title\">
                    <h2>Товары, которые могут вам понравиться</h2>
                </div>\t\t\t\t\t
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col\">
                <div id=\"carouselExampleIndicators\" class=\"carousel slide products\" data-ride=\"carousel\">
                    <ol class=\"carousel-indicators\">
                          <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"0\" class=\"active\"></li>
                          <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"1\"></li>
                          <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"2\"></li>
                    </ol>
                    <div class=\"carousel-inner\">
                          <div class=\"carousel-item active\" >
                            <div class=\"product-wrapper\">
\t\t\t\t\t\t\t\t<div class=\"product-card\">
\t\t\t\t\t\t\t\t\t<div class=\"card-img-wrapper\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 24
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("product-single");
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 25
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
        // line 35
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
        // line 66
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
        // line 77
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
        // line 87
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
        // line 118
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
        // line 129
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
        // line 139
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
        // line 170
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
        // line 181
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
        // line 191
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
        // line 222
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
                          </div>\t\t\t\t\t\t  \t
                    </div>
                    <a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">
                          <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>\t\t\t\t\t\t  \t
                    </a>
                    <a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">
                          <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>\t\t\t\t\t\t  \t
                    </a>
                  </div>
            </div>
        </div>
    </div>

</div>";
    }

    public function getTemplateName()
    {
        return "Z:\\domains\\hatan.loc/themes/hatan/partials/related-products.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  320 => 222,  286 => 191,  273 => 181,  259 => 170,  225 => 139,  212 => 129,  198 => 118,  164 => 87,  151 => 77,  137 => 66,  103 => 35,  90 => 25,  86 => 24,  62 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{##}
<div class=\"section\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col d-flex justify-content-center\">
                <div class=\"title\">
                    <h2>Товары, которые могут вам понравиться</h2>
                </div>\t\t\t\t\t
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col\">
                <div id=\"carouselExampleIndicators\" class=\"carousel slide products\" data-ride=\"carousel\">
                    <ol class=\"carousel-indicators\">
                          <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"0\" class=\"active\"></li>
                          <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"1\"></li>
                          <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"2\"></li>
                    </ol>
                    <div class=\"carousel-inner\">
                          <div class=\"carousel-item active\" >
                            <div class=\"product-wrapper\">
\t\t\t\t\t\t\t\t<div class=\"product-card\">
\t\t\t\t\t\t\t\t\t<div class=\"card-img-wrapper\">
\t\t\t\t\t\t\t\t\t\t<a href=\"{{\"product-single\" | page }}\">
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
                          </div>\t\t\t\t\t\t  \t
                    </div>
                    <a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">
                          <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>\t\t\t\t\t\t  \t
                    </a>
                    <a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">
                          <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>\t\t\t\t\t\t  \t
                    </a>
                  </div>
            </div>
        </div>
    </div>

</div>", "Z:\\domains\\hatan.loc/themes/hatan/partials/related-products.htm", "");
    }
}
