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

/* Z:\domains\hatan.loc/themes/hatan/partials/filters/filter-modal.htm */
class __TwigTemplate_b1328bcc627173276d400a7734bdda2d21da7789975a18e15dc439d721766e6c extends \Twig\Template
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
        $tags = array("for" => 12, "set" => 21, "if" => 28);
        $filters = array("theme" => 8, "escape" => 16);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for', 'set', 'if'],
                ['theme', 'escape'],
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
        // line 4
        echo "

<div class=\"filter-modal\">
\t
\t<div class=\"close\"><img src=\"";
        // line 8
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/Close-circle.svg");
        echo "\" alt=\"\"></div>
\t
\t\t<div class=\"filter-modal__col\">
\t\t\t<div class=\"modal-options property\">
\t\t\t\t";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["obPropertyList"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["obProperty"]) {
            // line 13
            echo "\t\t\t\t\t
\t\t\t\t\t";
            // line 15
            echo "\t\t\t\t\t<div class=\"modal-options__label\">
\t\t\t\t\t\t<h3>";
            // line 16
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["obProperty"], "filter_name", [], "any", false, false, true, 16), 16, $this->source), "html", null, true);
            echo "</h3>
\t\t\t\t\t</div>
\t\t\t\t\t

\t\t\t\t\t";
            // line 21
            echo "\t\t\t\t\t";
            $context["sFilterType"] = twig_get_attribute($this->env, $this->source, $context["obProperty"], "filter_type", [], "any", false, false, true, 21);
            // line 22
            echo "
\t\t\t\t\t";
            // line 24
            echo "\t\t\t\t\t";
            $context["obPropertyValueList"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["obProperty"], "property_value", [], "any", false, false, true, 24), "sort", [], "method", false, false, true, 24);
            // line 25
            echo "\t\t\t\t\t\t<div class=\"modal-options__wrap _shopaholic-filter-wrapper\" data-filter-type=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["obProperty"], "filter_type", [], "any", false, false, true, 25), 25, $this->source), "html", null, true);
            echo "\" data-property-id=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["obProperty"], "id", [], "any", false, false, true, 25), 25, $this->source), "html", null, true);
            echo "\">\t
\t\t\t\t\t\t\t";
            // line 27
            echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
            // line 28
            if ((($context["sFilterType"] ?? null) == "checkbox")) {
                // line 29
                echo "\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t";
                // line 30
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["obPropertyValueList"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["obValue"]) {
                    echo "\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-options__checkout\">\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" id=\"";
                    // line 33
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["obValue"], "arModelData", [], "any", false, false, true, 33), "id", [], "any", false, false, true, 33), 33, $this->source), "html", null, true);
                    echo "\" value=\"";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["obValue"], "slug", [], "any", false, false, true, 33), 33, $this->source), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"\"";
                    // line 34
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["obValue"], "arModelData", [], "any", false, false, true, 34), "id", [], "any", false, false, true, 34), 34, $this->source), "html", null, true);
                    echo "\"\">";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["obValue"], "value", [], "any", false, false, true, 34), 34, $this->source), "html", null, true);
                    echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['obValue'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 38
                echo "\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
            }
            // line 40
            echo "
\t\t\t\t\t\t\t\t";
            // line 42
            echo "\t\t\t\t\t\t\t\t";
            if ((($context["sFilterType"] ?? null) == "select")) {
                // line 43
                echo "\t\t\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t\t\t";
                // line 44
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["obPropertyValueList"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["obValue"]) {
                    // line 45
                    echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["obValue"], "slug", [], "any", false, false, true, 45), 45, $this->source), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["obValue"], "value", [], "any", false, false, true, 45), 45, $this->source), "html", null, true);
                    echo "</option>
\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['obValue'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 47
                echo "\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t";
            }
            // line 49
            echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['obProperty'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "\t\t\t</div>
\t\t\t
\t\t\t<!--Price-->
\t\t\t<div class=\"modal-options price _shopaholic-price-filter\">
\t\t\t\t<div class=\"modal-options__label\">
\t\t\t\t\t<h3>Стоимость</h3>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-options__wrap\">
\t\t\t\t\t<div class=\"modal-options__checkout\">
\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" name=\"price\" value=\"price-low\" id=\"price-filter-low\">
\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"price-filter-low\">
\t\t\t\t\t\t\t\tдо 1500 руб
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"modal-options-checkout__value\" id=\"price-filter-low\">
\t\t\t\t\t\t\t18
\t\t\t\t\t\t</div>\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"modal-options__checkout\">
\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" name=\"price\" value=\"price-middle\" id=\"price-filter-middle\">
\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"price-filter-middle\">
\t\t\t\t\t\t\t\tот 1500 до 5000 руб
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"modal-options-checkout__value\" id=\"price-filter-middle\">
\t\t\t\t\t\t\t10
\t\t\t\t\t\t</div>\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"modal-options__checkout\">
\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" name=\"price\" value=\"price-hight\" id=\"price-filter-hight\">
\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"price-filter-hight\">
\t\t\t\t\t\t\t\tот 5000 руб
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"modal-options-checkout__value\" id=\"price-filter-hight\">
\t\t\t\t\t\t\t8
\t\t\t\t\t\t</div>\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>\t
\t\t\t</div>

\t\t</div>
\t\t<div class=\"filter-modal__col\">
\t\t\t<div class=\"filter-modal-buttons\">
\t\t\t\t<a href=\"#\" id=\"show\" class=\"btn btn-primary\">Показать результаты</a>
\t\t\t\t<a href=\"#\" id=\"clear\" class=\"btn btn-primary secondary\">Очистить фильтр</a>
\t\t\t</div>
\t\t</div>
\t
</div>";
    }

    public function getTemplateName()
    {
        return "Z:\\domains\\hatan.loc/themes/hatan/partials/filters/filter-modal.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 53,  174 => 49,  170 => 47,  159 => 45,  155 => 44,  152 => 43,  149 => 42,  146 => 40,  142 => 38,  130 => 34,  124 => 33,  116 => 30,  113 => 29,  111 => 28,  108 => 27,  101 => 25,  98 => 24,  95 => 22,  92 => 21,  85 => 16,  82 => 15,  79 => 13,  75 => 12,  68 => 8,  62 => 4,);
    }

    public function getSourceContext()
    {
        return new Source("{##}
{# @var obActiveCategory \\Lovata\\Shopaholic\\Classes\\Item\\CategoryItem #}
{# Get products proeprty list for property sets with code 'main', enabled how filters #}


<div class=\"filter-modal\">
\t
\t<div class=\"close\"><img src=\"{{ 'assets/images/Close-circle.svg' | theme }}\" alt=\"\"></div>
\t
\t\t<div class=\"filter-modal__col\">
\t\t\t<div class=\"modal-options property\">
\t\t\t\t{% for obProperty in obPropertyList  %}
\t\t\t\t\t
\t\t\t\t\t{# Render filter name #}
\t\t\t\t\t<div class=\"modal-options__label\">
\t\t\t\t\t\t<h3>{{ obProperty.filter_name }}</h3>
\t\t\t\t\t</div>
\t\t\t\t\t

\t\t\t\t\t{# Get filter type #}
\t\t\t\t\t{% set sFilterType = obProperty.filter_type %}

\t\t\t\t\t{# Get proeprty value list #}
\t\t\t\t\t{% set obPropertyValueList = obProperty.property_value.sort() %}
\t\t\t\t\t\t<div class=\"modal-options__wrap _shopaholic-filter-wrapper\" data-filter-type=\"{{obProperty.filter_type}}\" data-property-id=\"{{obProperty.id}}\">\t
\t\t\t\t\t\t\t{# Render filtre with type == checkbox #}
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t{% if sFilterType == 'checkbox' %}
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t{% for obValue in obPropertyValueList %}\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-options__checkout\">\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" id=\"{{ obValue.arModelData.id }}\" value=\"{{ obValue.slug }}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"\"{{ obValue.arModelData.id }}\"\">{{ obValue.value }}</label>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t{% endfor%}
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t\t\t{# Render filtre with type == select #}
\t\t\t\t\t\t\t\t{% if sFilterType == 'select' %}
\t\t\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t\t\t{% for obValue in obPropertyValueList %}
\t\t\t\t\t\t\t\t\t\t\t<option value=\"{{ obValue.slug }}\">{{ obValue.value }}</option>
\t\t\t\t\t\t\t\t\t\t{% endfor%}
\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t{% endfor %}
\t\t\t</div>
\t\t\t
\t\t\t<!--Price-->
\t\t\t<div class=\"modal-options price _shopaholic-price-filter\">
\t\t\t\t<div class=\"modal-options__label\">
\t\t\t\t\t<h3>Стоимость</h3>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-options__wrap\">
\t\t\t\t\t<div class=\"modal-options__checkout\">
\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" name=\"price\" value=\"price-low\" id=\"price-filter-low\">
\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"price-filter-low\">
\t\t\t\t\t\t\t\tдо 1500 руб
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"modal-options-checkout__value\" id=\"price-filter-low\">
\t\t\t\t\t\t\t18
\t\t\t\t\t\t</div>\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"modal-options__checkout\">
\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" name=\"price\" value=\"price-middle\" id=\"price-filter-middle\">
\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"price-filter-middle\">
\t\t\t\t\t\t\t\tот 1500 до 5000 руб
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"modal-options-checkout__value\" id=\"price-filter-middle\">
\t\t\t\t\t\t\t10
\t\t\t\t\t\t</div>\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"modal-options__checkout\">
\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" name=\"price\" value=\"price-hight\" id=\"price-filter-hight\">
\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"price-filter-hight\">
\t\t\t\t\t\t\t\tот 5000 руб
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"modal-options-checkout__value\" id=\"price-filter-hight\">
\t\t\t\t\t\t\t8
\t\t\t\t\t\t</div>\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>\t
\t\t\t</div>

\t\t</div>
\t\t<div class=\"filter-modal__col\">
\t\t\t<div class=\"filter-modal-buttons\">
\t\t\t\t<a href=\"#\" id=\"show\" class=\"btn btn-primary\">Показать результаты</a>
\t\t\t\t<a href=\"#\" id=\"clear\" class=\"btn btn-primary secondary\">Очистить фильтр</a>
\t\t\t</div>
\t\t</div>
\t
</div>", "Z:\\domains\\hatan.loc/themes/hatan/partials/filters/filter-modal.htm", "");
    }
}
