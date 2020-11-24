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

/* C:\OSPanel\domains\hatan.loc/themes/hatan/partials/header.htm */
class __TwigTemplate_6ff9cbd2aa757bd96091080c6872c6f5c8bd24bc233add56c9ef713ee01bd42d extends \Twig\Template
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
        $tags = array("if" => 8, "styles" => 13, "partial" => 20);
        $filters = array("escape" => 7, "striptags" => 8, "theme" => 11);
        $functions = array("str_limit" => 8);

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
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"ru\">

<head>

\t<meta charset=\"utf-8\">
\t<title>";
        // line 7
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 7), "title", [], "any", false, false, true, 7), 7, $this->source), "html", null, true);
        echo " | Хатан - интернет магазин одежды</title>
\t";
        // line 8
        if ((twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "description", [], "any", false, false, true, 8) != null)) {
            echo "<meta name=\"description\" content=\"";
            echo call_user_func_array($this->env->getFunction('str_limit')->getCallable(), ["limit", strip_tags($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "description", [], "any", false, false, true, 8), 8, $this->source)), 120]);
            echo "\">
\t";
        } else {
            // line 9
            echo "<meta name=\"description\" content=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 9), "meta_description", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
            echo "\">";
        }
        // line 10
        echo "\t<meta name=\"viewport\" content=\"width=device-width\">
\t<link rel=\"icon\" href=\"";
        // line 11
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/october.png");
        echo "\">
\t<link href=\"";
        // line 12
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/app.min.css");
        echo "\" rel=\"stylesheet\">
\t";
        // line 13
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 14
        echo "\t

</head>

<body class=\"is_";
        // line 18
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 18), "id", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
        ((($context["class"] ?? null)) ? (print (twig_escape_filter($this->env, (" " . ($context["class"] ?? null)), "html", null, true))) : (print ("")));
        echo "\">

";
        // line 20
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("modal-microcart"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 21
        echo "
<div class=\"modal-overlay\"></div>

";
        // line 24
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("top-bar"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 25
        echo "
";
        // line 26
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("header-site"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "C:\\OSPanel\\domains\\hatan.loc/themes/hatan/partials/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 26,  125 => 25,  121 => 24,  116 => 21,  112 => 20,  106 => 18,  100 => 14,  97 => 13,  93 => 12,  89 => 11,  86 => 10,  81 => 9,  74 => 8,  70 => 7,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"ru\">

<head>

\t<meta charset=\"utf-8\">
\t<title>{{ this.page.title }} | Хатан - интернет магазин одежды</title>
\t{% if record.description != null %}<meta name=\"description\" content=\"{{ str_limit(record.description | striptags , 120) }}\">
\t{% else %}<meta name=\"description\" content=\"{{ this.page.meta_description }}\">{% endif %}
\t<meta name=\"viewport\" content=\"width=device-width\">
\t<link rel=\"icon\" href=\"{{ 'assets/images/october.png' | theme }}\">
\t<link href=\"{{ 'assets/css/app.min.css' | theme }}\" rel=\"stylesheet\">
\t{% styles %}
\t

</head>

<body class=\"is_{{ this.page.id }}{{ class ? ' ' ~ class }}\">

{% partial \"modal-microcart\" %}

<div class=\"modal-overlay\"></div>

{% partial \"top-bar\" %}

{% partial \"header-site\" %}", "C:\\OSPanel\\domains\\hatan.loc/themes/hatan/partials/header.htm", "");
    }
}
