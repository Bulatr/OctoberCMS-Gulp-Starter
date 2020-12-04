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

/* Z:\domains\hatan.loc/themes/hatan/partials/header.htm */
class __TwigTemplate_bfd7447bc08fa91aa5e8dd5bafdf9b1ffff3fe53c4aa516ea2aa8c44fc684c23 extends \Twig\Template
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
        $tags = array("if" => 9, "styles" => 14, "partial" => 21);
        $filters = array("escape" => 8, "striptags" => 9, "theme" => 12);
        $functions = array("str_limit" => 9);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'styles', 'partial'],
                ['escape', 'striptags', 'theme'],
                ['str_limit']
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
        echo "<!DOCTYPE html>
<html lang=\"ru\">

<head>

\t<meta charset=\"utf-8\">
\t<title>";
        // line 8
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["sPageTitle"] ?? null), 8, $this->source), "html", null, true);
        echo " | Хатан - интернет магазин одежды</title>
\t";
        // line 9
        if ((twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "description", [], "any", false, false, true, 9) != null)) {
            echo "<meta name=\"description\" content=\"";
            echo call_user_func_array($this->env->getFunction('str_limit')->getCallable(), ["limit", strip_tags($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "description", [], "any", false, false, true, 9), 9, $this->source)), 120]);
            echo "\">
\t";
        } else {
            // line 10
            echo "<meta name=\"description\" content=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 10), "meta_description", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
            echo "\">";
        }
        // line 11
        echo "\t<meta name=\"viewport\" content=\"width=device-width\">
\t<link rel=\"icon\" href=\"";
        // line 12
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/october.png");
        echo "\">
\t<link href=\"";
        // line 13
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/hatan.min.css");
        echo "\" rel=\"stylesheet\">
\t";
        // line 14
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 15
        echo "\t

</head>

<body class=\"is_";
        // line 19
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 19), "id", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
        ((($context["class"] ?? null)) ? (print (twig_escape_filter($this->env, (" " . ($context["class"] ?? null)), "html", null, true))) : (print ("")));
        echo "\">

";
        // line 21
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("modal-microcart"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 22
        echo "
<div class=\"modal-overlay\"></div>

";
        // line 25
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("top-bar"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 26
        echo "
";
        // line 27
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("header-site"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "Z:\\domains\\hatan.loc/themes/hatan/partials/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 27,  125 => 26,  121 => 25,  116 => 22,  112 => 21,  106 => 19,  100 => 15,  97 => 14,  93 => 13,  89 => 12,  86 => 11,  81 => 10,  74 => 9,  70 => 8,  62 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{##}
<!DOCTYPE html>
<html lang=\"ru\">

<head>

\t<meta charset=\"utf-8\">
\t<title>{{ sPageTitle }} | Хатан - интернет магазин одежды</title>
\t{% if record.description != null %}<meta name=\"description\" content=\"{{ str_limit(record.description | striptags , 120) }}\">
\t{% else %}<meta name=\"description\" content=\"{{ this.page.meta_description }}\">{% endif %}
\t<meta name=\"viewport\" content=\"width=device-width\">
\t<link rel=\"icon\" href=\"{{ 'assets/images/october.png' | theme }}\">
\t<link href=\"{{ 'assets/css/hatan.min.css' | theme }}\" rel=\"stylesheet\">
\t{% styles %}
\t

</head>

<body class=\"is_{{ this.page.id }}{{ class ? ' ' ~ class }}\">

{% partial \"modal-microcart\" %}

<div class=\"modal-overlay\"></div>

{% partial \"top-bar\" %}

{% partial \"header-site\" %}", "Z:\\domains\\hatan.loc/themes/hatan/partials/header.htm", "");
    }
}
