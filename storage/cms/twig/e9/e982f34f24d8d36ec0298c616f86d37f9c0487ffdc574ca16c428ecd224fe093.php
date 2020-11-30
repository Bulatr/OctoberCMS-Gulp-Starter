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

/* Z:\domains\hatan.loc/themes/hatan/partials/pagination/pagination.htm */
class __TwigTemplate_f1ac5b69d0245f3473c6fd805a638d7e7842ea3fa3d7ae9fca1b071db4d330fd extends \Twig\Template
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
        $tags = array("set" => 2, "if" => 5, "for" => 13);
        $filters = array("escape" => 9, "theme" => 10);
        $functions = array("url_current" => 14);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
                ['escape', 'theme'],
                ['url_current']
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
        $context["arPaginationList"] = twig_get_attribute($this->env, $this->source, ($context["Pagination"] ?? null), "get", [0 => ($context["iPage"] ?? null), 1 => ($context["iCount"] ?? null)], "method", false, false, true, 2);
        // line 3
        echo "
";
        // line 5
        if ( !twig_test_empty(($context["arPaginationList"] ?? null))) {
            // line 6
            echo "    <div class=\"pagination\">
    
    ";
            // line 8
            if ((($context["iPage"] ?? null) > 1)) {
                // line 9
                echo "        <a href=\"#\" class=\"pagination-item _shopaholic-pagination\" data-page=\"";
                echo twig_escape_filter($this->env, (($context["iPage"] ?? null) - 1), "html", null, true);
                echo "\">
            <img src=\"";
                // line 10
                echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/Direction-Left.svg");
                echo "\" alt=\"\">
        </a>
    ";
            }
            // line 13
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["arPaginationList"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["arPagination"]) {
                // line 14
                echo "        <a href=\"";
                echo call_user_func_array($this->env->getFunction('url_current')->getCallable(), ["current"]);
                echo "?page=";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["arPagination"], "value", [], "any", false, false, true, 14), 14, $this->source), "html", null, true);
                echo "\" class=\"pagination-item ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["arPagination"], "code", [], "any", false, false, true, 14), 14, $this->source), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["arPagination"], "class", [], "any", false, false, true, 14), 14, $this->source), "html", null, true);
                echo " _shopaholic-pagination\" data-page=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["arPagination"], "value", [], "any", false, false, true, 14), 14, $this->source), "html", null, true);
                echo "\">
            ";
                // line 15
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["arPagination"], "name", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
                echo "
        </a>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['arPagination'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "    ";
            if ((($context["iPage"] ?? null) > ($context["iMaxPage"] ?? null))) {
                // line 19
                echo "        <a href=\"#\" class=\"pagination-item _shopaholic-pagination\" data-page=\"";
                echo twig_escape_filter($this->env, (($context["iPage"] ?? null) + 1), "html", null, true);
                echo "\">
            <img src=\"";
                // line 20
                echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/Direction-Right.svg");
                echo "\" alt=\"\">
        </a>
    ";
            }
            // line 23
            echo "    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "Z:\\domains\\hatan.loc/themes/hatan/partials/pagination/pagination.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 23,  121 => 20,  116 => 19,  113 => 18,  104 => 15,  91 => 14,  86 => 13,  80 => 10,  75 => 9,  73 => 8,  69 => 6,  67 => 5,  64 => 3,  62 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{##}
{% set arPaginationList = Pagination.get(iPage, iCount) %}

{# Render pagination buttons #}
{% if arPaginationList is not empty %}
    <div class=\"pagination\">
    
    {% if iPage > 1 %}
        <a href=\"#\" class=\"pagination-item _shopaholic-pagination\" data-page=\"{{ iPage-1 }}\">
            <img src=\"{{ 'assets/images/Direction-Left.svg' | theme }}\" alt=\"\">
        </a>
    {% endif %}
    {% for arPagination in arPaginationList %}
        <a href=\"{{ url_current() }}?page={{ arPagination.value }}\" class=\"pagination-item {{ arPagination.code }} {{ arPagination.class }} _shopaholic-pagination\" data-page=\"{{ arPagination.value }}\">
            {{ arPagination.name }}
        </a>
    {% endfor %}
    {% if iPage > iMaxPage %}
        <a href=\"#\" class=\"pagination-item _shopaholic-pagination\" data-page=\"{{ iPage+1 }}\">
            <img src=\"{{ 'assets/images/Direction-Right.svg' | theme }}\" alt=\"\">
        </a>
    {% endif %}
    </div>
{% endif %}", "Z:\\domains\\hatan.loc/themes/hatan/partials/pagination/pagination.htm", "");
    }
}
