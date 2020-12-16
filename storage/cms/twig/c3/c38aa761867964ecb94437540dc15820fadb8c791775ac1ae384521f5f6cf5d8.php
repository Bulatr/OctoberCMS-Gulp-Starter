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

/* Z:\domains\hatan.loc/themes/hatan/partials/header-site.htm */
class __TwigTemplate_901fa2bb68174a77854f327a2f034c8176134815f9fd7de2dcbb511eba8aa9c1 extends \Twig\Template
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
        $tags = array("partial" => 14, "if" => 37);
        $filters = array("theme" => 10);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['partial', 'if'],
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
        echo "<div class=\"header\">
\t<div class=\"container\" style=\"position: relative;\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col d-flex justify-content-between\">
\t\t\t\t<div class=\"d-flex justify-content-start\">
\t\t\t\t\t<div class=\"logo-wrapper\">
\t\t\t\t\t\t<div class=\"logo\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 10
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/a-logo.svg");
        echo "\" alt=\"\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
        // line 14
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("menu/main-menu-wrapper"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 15
        echo "\t\t\t\t</div>
\t\t\t\t<div class=\"search-wrapper\">
\t\t\t\t\t<form class=\"form-inline custom d-flex\">
\t\t\t\t\t\t<input class=\"form-control mr-sm-2\" type=\"search\" placeholder=\"Поиск\" aria-label=\"Search\">
\t\t\t\t\t\t<div class=\"icon-search\">
\t\t\t\t\t\t\t<img src=\"";
        // line 20
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/Search.svg");
        echo "\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t\t<div class=\"icons-wrapper\">
\t\t\t\t\t<div class=\"icons account-icon\">
\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t<img src=\"";
        // line 27
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/Account.svg");
        echo "\" alt=\"Личный кабинет\">
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"icons heart-icon\">
\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t<img src=\"";
        // line 32
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/Outline.svg");
        echo "\" alt=\"Избранное\">
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div
\t\t\t\t\t\tclass=\"icons cart-icon\"
\t\t\t\t\t\t";
        // line 37
        if ((($context["obCartPositionListCount"] ?? null) > 0)) {
            // line 38
            echo "\t\t\t\t\t\t\tdata-cartfilled=\"yes\"
\t\t\t\t\t\t\t";
        } else {
            // line 40
            echo "\t\t\t\t\t\t\tdata-cartfilled=\"no\"
\t\t\t\t\t\t";
        }
        // line 41
        echo " >
\t\t\t\t\t\t<a href=\"#\" class=\"cart empty
\t\t\t\t\t\t\t";
        // line 43
        if ((($context["obCartPositionListCount"] ?? null) == 0)) {
            // line 44
            echo "\t\t\t\t\t\t\t\tshow
\t\t\t\t\t\t\t";
        }
        // line 45
        echo "\">
\t\t\t\t\t\t\t<img src=\"";
        // line 46
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/Empty Cart.svg");
        echo "\" alt=\"\">
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"#\" class=\"cart filled
\t\t\t\t\t\t\t";
        // line 49
        if ((($context["obCartPositionListCount"] ?? null) > 0)) {
            // line 50
            echo "\t\t\t\t\t\t\t\tshow
\t\t\t\t\t\t\t";
        }
        // line 52
        echo "\t\t\t\t\t\t\">
\t\t\t\t\t\t\t<img src=\"";
        // line 53
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/Added to Cart.svg");
        echo "\" alt=\"\">
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"#\" class=\"cart added\">
\t\t\t\t\t\t\t<img src=\"";
        // line 56
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/Add to Cart.svg");
        echo "\" alt=\"\">
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class='summ_count_wrapper' >
\t\t\t\t\t\t";
        // line 60
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("header/summ_count_header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 61
        echo "\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"icons-toggle\"></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "Z:\\domains\\hatan.loc/themes/hatan/partials/header-site.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 61,  167 => 60,  160 => 56,  154 => 53,  151 => 52,  147 => 50,  145 => 49,  139 => 46,  136 => 45,  132 => 44,  130 => 43,  126 => 41,  122 => 40,  118 => 38,  116 => 37,  108 => 32,  100 => 27,  90 => 20,  83 => 15,  79 => 14,  72 => 10,  62 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{##}
<div class=\"header\">
\t<div class=\"container\" style=\"position: relative;\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col d-flex justify-content-between\">
\t\t\t\t<div class=\"d-flex justify-content-start\">
\t\t\t\t\t<div class=\"logo-wrapper\">
\t\t\t\t\t\t<div class=\"logo\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t<img src=\"{{ 'assets/images/a-logo.svg' | theme}}\" alt=\"\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t{% partial \"menu/main-menu-wrapper\" %}
\t\t\t\t</div>
\t\t\t\t<div class=\"search-wrapper\">
\t\t\t\t\t<form class=\"form-inline custom d-flex\">
\t\t\t\t\t\t<input class=\"form-control mr-sm-2\" type=\"search\" placeholder=\"Поиск\" aria-label=\"Search\">
\t\t\t\t\t\t<div class=\"icon-search\">
\t\t\t\t\t\t\t<img src=\"{{ 'assets/images/Search.svg' | theme}}\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t\t<div class=\"icons-wrapper\">
\t\t\t\t\t<div class=\"icons account-icon\">
\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t<img src=\"{{ 'assets/images/Account.svg' | theme}}\" alt=\"Личный кабинет\">
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"icons heart-icon\">
\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t<img src=\"{{ 'assets/images/Outline.svg' | theme}}\" alt=\"Избранное\">
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div
\t\t\t\t\t\tclass=\"icons cart-icon\"
\t\t\t\t\t\t{% if obCartPositionListCount > 0 %}
\t\t\t\t\t\t\tdata-cartfilled=\"yes\"
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\tdata-cartfilled=\"no\"
\t\t\t\t\t\t{% endif %} >
\t\t\t\t\t\t<a href=\"#\" class=\"cart empty
\t\t\t\t\t\t\t{% if obCartPositionListCount == 0 %}
\t\t\t\t\t\t\t\tshow
\t\t\t\t\t\t\t{% endif %}\">
\t\t\t\t\t\t\t<img src=\"{{ 'assets/images/Empty Cart.svg' | theme}}\" alt=\"\">
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"#\" class=\"cart filled
\t\t\t\t\t\t\t{% if obCartPositionListCount > 0 %}
\t\t\t\t\t\t\t\tshow
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\">
\t\t\t\t\t\t\t<img src=\"{{ 'assets/images/Added to Cart.svg' | theme}}\" alt=\"\">
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"#\" class=\"cart added\">
\t\t\t\t\t\t\t<img src=\"{{ 'assets/images/Add to Cart.svg' | theme}}\" alt=\"\">
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class='summ_count_wrapper' >
\t\t\t\t\t\t{% partial \"header/summ_count_header\" %}
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"icons-toggle\"></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>", "Z:\\domains\\hatan.loc/themes/hatan/partials/header-site.htm", "");
    }
}
