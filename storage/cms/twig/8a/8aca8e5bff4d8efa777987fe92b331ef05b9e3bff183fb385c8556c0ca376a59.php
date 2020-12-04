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

/* Z:\domains\hatan.loc/themes/hatan/partials/banners/main-banner.htm */
class __TwigTemplate_f582d472d16429e779704702948baf1b00efbb5445ac967e89674437883ff9fb extends \Twig\Template
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
        $filters = array("theme" => 6);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
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
        echo "<div class=\"main-banners\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-sm-12 col-md-4 col-lg-3 col-xl-3 col-xxl-3\">
\t\t\t\t<div class=\"banner type-f\">
\t\t\t\t\t<img src=\"";
        // line 6
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/dest/bannerF.jpg");
        echo "\" alt=\"Бонусы по акции\">
\t\t\t\t\t<div class=\"content-banner\">
\t\t\t\t\t\t<div class=\"subtitle\">
\t\t\t\t\t\t\tАкции
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"title\">
\t\t\t\t\t\t\t<h2>Бонусы по акции</h2>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tОплатите до 30% стоимости товара бонусами. Торопитесь оплатить бонусами
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-primary secondary\">Подробнее</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-sm-12 col-md-4 col-lg-6 col-xl-6 col-xxl-6\">
\t\t\t\t<div class=\"banner type-e dark\">
\t\t\t\t\t<img src=\"";
        // line 25
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/dest/bannerE.jpg");
        echo "\" alt=\"Бонусы по акции\">
\t\t\t\t\t<div class=\"content-banner\">
\t\t\t\t\t\t<div class=\"subtitle\">
\t\t\t\t\t\t\tАкции
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"title\">
\t\t\t\t\t\t\t<h2>Всемирный день шопинга</h2>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t11.11 Всемирный день шопинга. Соберите корзину уже сейчас
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-primary secondary\">Начать шопинг</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-sm-12 col-md-4 col-lg-3 col-xl-3 col-xxl-3\">
\t\t\t\t<div class=\"banner type-f small\">
\t\t\t\t\t<a href=\"\"><img src=\"";
        // line 44
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/dest/bannerE_small.jpg");
        echo "\" alt=\"Бонусы по акции\"></a>\t\t\t\t\t\t
\t\t\t\t\t<div class=\"content-banner\">
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"title\">
\t\t\t\t\t\t\t<h2>Для нее</h2>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"banner type-f small dark\">
\t\t\t\t\t<a href=\"\"><img src=\"";
        // line 54
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/dest/bannerF_small.jpg");
        echo "\" alt=\"Бонусы по акции\"></a>
\t\t\t\t\t<div class=\"content-banner\">
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"title\">
\t\t\t\t\t\t\t<h2>Для него</h2>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "Z:\\domains\\hatan.loc/themes/hatan/partials/banners/main-banner.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 54,  113 => 44,  91 => 25,  69 => 6,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"main-banners\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-sm-12 col-md-4 col-lg-3 col-xl-3 col-xxl-3\">
\t\t\t\t<div class=\"banner type-f\">
\t\t\t\t\t<img src=\"{{ 'assets/images/dest/bannerF.jpg' | theme }}\" alt=\"Бонусы по акции\">
\t\t\t\t\t<div class=\"content-banner\">
\t\t\t\t\t\t<div class=\"subtitle\">
\t\t\t\t\t\t\tАкции
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"title\">
\t\t\t\t\t\t\t<h2>Бонусы по акции</h2>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tОплатите до 30% стоимости товара бонусами. Торопитесь оплатить бонусами
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-primary secondary\">Подробнее</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-sm-12 col-md-4 col-lg-6 col-xl-6 col-xxl-6\">
\t\t\t\t<div class=\"banner type-e dark\">
\t\t\t\t\t<img src=\"{{ 'assets/images/dest/bannerE.jpg' | theme }}\" alt=\"Бонусы по акции\">
\t\t\t\t\t<div class=\"content-banner\">
\t\t\t\t\t\t<div class=\"subtitle\">
\t\t\t\t\t\t\tАкции
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"title\">
\t\t\t\t\t\t\t<h2>Всемирный день шопинга</h2>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t11.11 Всемирный день шопинга. Соберите корзину уже сейчас
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-primary secondary\">Начать шопинг</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-sm-12 col-md-4 col-lg-3 col-xl-3 col-xxl-3\">
\t\t\t\t<div class=\"banner type-f small\">
\t\t\t\t\t<a href=\"\"><img src=\"{{ 'assets/images/dest/bannerE_small.jpg' | theme }}\" alt=\"Бонусы по акции\"></a>\t\t\t\t\t\t
\t\t\t\t\t<div class=\"content-banner\">
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"title\">
\t\t\t\t\t\t\t<h2>Для нее</h2>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"banner type-f small dark\">
\t\t\t\t\t<a href=\"\"><img src=\"{{ 'assets/images/dest/bannerF_small.jpg' | theme }}\" alt=\"Бонусы по акции\"></a>
\t\t\t\t\t<div class=\"content-banner\">
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"title\">
\t\t\t\t\t\t\t<h2>Для него</h2>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>", "Z:\\domains\\hatan.loc/themes/hatan/partials/banners/main-banner.htm", "");
    }
}
