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
        $tags = array("partial" => 41);
        $filters = array("theme" => 14);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['partial'],
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
        echo "<div class=\"carousel-wrapper\">
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
        // line 14
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
        // line 41
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("main-banner"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 42
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
        // line 61
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("bestsellers"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 62
        echo "

<div class=\"lookbook\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col d-flex flex-column align-items-center justify-content-center\">
\t\t\t\t<div class=\"title\">
\t\t\t\t\t<h2>Осенняя коллекция</h2>
\t\t\t\t</div>
\t\t\t\t<div class=\"subtitle\">
\t\t\t\t\t<h6>LOOKBOOK</h6>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-sm-12 cl-md-6 col-lg-6 col-xl-6 col-xxl-6 d-flex flex-column align-items-end\">
\t\t\t\t<div class=\"card-gallery big\">
\t\t\t\t\t<img src=\"";
        // line 79
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/dest/2/37375710299.jpg");
        echo "\" alt=\"\">
\t\t\t\t\t<div class=\"overlay\"></div>
\t\t\t\t\t<div class=\"title-gallery\">
\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t<h6>Смотреть</h6>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"card-gallery\">
\t\t\t\t\t<img src=\"";
        // line 88
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/dest/3/37488640299.jpg");
        echo "\" alt=\"\">
\t\t\t\t\t<div class=\"overlay\"></div>
\t\t\t\t\t<div class=\"title-gallery\">
\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t<h6>Смотреть</h6>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-sm-12 cl-md-6 col-lg-6 col-xl-6 col-xxl-6 d-flex flex-column align-items-start\">
\t\t\t\t<div class=\"card-gallery\">
\t\t\t\t\t<img src=\"";
        // line 99
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/dest/4/37917310299.jpg");
        echo "\" alt=\"\">
\t\t\t\t\t<div class=\"overlay\"></div>
\t\t\t\t\t<div class=\"title-gallery\">
\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t<h6>Смотреть</h6>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"card-gallery big\">
\t\t\t\t\t<img src=\"";
        // line 108
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/dest/5/38359520299.jpg");
        echo "\" alt=\"\">
\t\t\t\t\t<div class=\"overlay\"></div>
\t\t\t\t\t<div class=\"title-gallery\">
\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t<h6>Смотреть</h6>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>\t\t\t\t\t
\t\t\t</div>
\t\t</div>
\t</div>
</div>";
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
        return array (  193 => 108,  181 => 99,  167 => 88,  155 => 79,  136 => 62,  132 => 61,  111 => 42,  107 => 41,  77 => 14,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"carousel-wrapper\">
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

{% partial \"main-banner\" %}

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


<div class=\"lookbook\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col d-flex flex-column align-items-center justify-content-center\">
\t\t\t\t<div class=\"title\">
\t\t\t\t\t<h2>Осенняя коллекция</h2>
\t\t\t\t</div>
\t\t\t\t<div class=\"subtitle\">
\t\t\t\t\t<h6>LOOKBOOK</h6>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-sm-12 cl-md-6 col-lg-6 col-xl-6 col-xxl-6 d-flex flex-column align-items-end\">
\t\t\t\t<div class=\"card-gallery big\">
\t\t\t\t\t<img src=\"{{ 'assets/images/dest/2/37375710299.jpg' | theme }}\" alt=\"\">
\t\t\t\t\t<div class=\"overlay\"></div>
\t\t\t\t\t<div class=\"title-gallery\">
\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t<h6>Смотреть</h6>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"card-gallery\">
\t\t\t\t\t<img src=\"{{ 'assets/images/dest/3/37488640299.jpg' | theme }}\" alt=\"\">
\t\t\t\t\t<div class=\"overlay\"></div>
\t\t\t\t\t<div class=\"title-gallery\">
\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t<h6>Смотреть</h6>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-sm-12 cl-md-6 col-lg-6 col-xl-6 col-xxl-6 d-flex flex-column align-items-start\">
\t\t\t\t<div class=\"card-gallery\">
\t\t\t\t\t<img src=\"{{ 'assets/images/dest/4/37917310299.jpg' | theme }}\" alt=\"\">
\t\t\t\t\t<div class=\"overlay\"></div>
\t\t\t\t\t<div class=\"title-gallery\">
\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t<h6>Смотреть</h6>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"card-gallery big\">
\t\t\t\t\t<img src=\"{{ 'assets/images/dest/5/38359520299.jpg' | theme }}\" alt=\"\">
\t\t\t\t\t<div class=\"overlay\"></div>
\t\t\t\t\t<div class=\"title-gallery\">
\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t<h6>Смотреть</h6>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>\t\t\t\t\t
\t\t\t</div>
\t\t</div>
\t</div>
</div>", "C:\\OSPanel\\domains\\hatan.loc/themes/hatan/pages/home.htm", "");
    }
}
