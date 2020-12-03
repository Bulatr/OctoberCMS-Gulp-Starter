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
        $tags = array("set" => 4, "for" => 14, "if" => 30);
        $filters = array("theme" => 10, "escape" => 18);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'if'],
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
        $context["obGroupList"] = twig_get_attribute($this->env, $this->source, ($context["obFilterProductPropertyList"] ?? null), "groupList", [], "method", false, false, true, 4);
        // line 5
        $context["obOdezhdaList"] = twig_get_attribute($this->env, $this->source, ($context["obGroupList"] ?? null), "getByCode", [0 => "odezhda"], "method", false, false, true, 5);
        // line 6
        $context["obObuvList"] = twig_get_attribute($this->env, $this->source, ($context["obGroupList"] ?? null), "getByCode", [0 => "obuv"], "method", false, false, true, 6);
        // line 7
        $context["arFilterPropertyList"] = twig_get_attribute($this->env, $this->source, ($context["Catalog"] ?? null), "getFilterPropertyList", [], "method", false, false, true, 7);
        // line 8
        echo "<div class=\"filter-modal\">
\t
\t<div class=\"close\"><img src=\"";
        // line 10
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/Close-circle.svg");
        echo "\" alt=\"\"></div>
\t
\t\t<div class=\"filter-modal__col\">
\t\t\t<div class=\"modal-options property\">
\t\t\t\t";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["obPropertyList"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["obProperty"]) {
            if (twig_get_attribute($this->env, $this->source, $context["obProperty"], "hasValue", [], "method", false, false, true, 14)) {
                // line 15
                echo "\t\t\t\t\t
\t\t\t\t\t";
                // line 17
                echo "\t\t\t\t\t<div class=\"modal-options__label\">
\t\t\t\t\t\t<h3>";
                // line 18
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["obProperty"], "filter_name", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
                echo "</h3>
\t\t\t\t\t</div>
\t\t\t\t\t

\t\t\t\t\t";
                // line 23
                echo "\t\t\t\t\t";
                $context["sFilterType"] = twig_get_attribute($this->env, $this->source, $context["obProperty"], "filter_type", [], "any", false, false, true, 23);
                // line 24
                echo "
\t\t\t\t\t";
                // line 26
                echo "\t\t\t\t\t";
                $context["obPropertyValueList"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["obProperty"], "property_value", [], "any", false, false, true, 26), "sort", [], "method", false, false, true, 26);
                // line 27
                echo "\t\t\t\t\t\t<div class=\"modal-options__wrap _shopaholic-filter-wrapper\" data-filter-type=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["obProperty"], "filter_type", [], "any", false, false, true, 27), 27, $this->source), "html", null, true);
                echo "\" data-property-id=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["obProperty"], "id", [], "any", false, false, true, 27), 27, $this->source), "html", null, true);
                echo "\">\t
\t\t\t\t\t\t\t";
                // line 29
                echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
                // line 30
                if ((($context["sFilterType"] ?? null) == "checkbox")) {
                    // line 31
                    echo "\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t";
                    // line 32
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["obPropertyValueList"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["obValue"]) {
                        echo "\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-options__checkout\">\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 35
                        $context["bChecked"] = ( !twig_test_empty((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["arFilterPropertyList"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, $context["obProperty"], "id", [], "any", false, false, true, 35)] ?? null) : null)) && twig_in_filter(twig_get_attribute($this->env, $this->source, $context["obValue"], "slug", [], "any", false, false, true, 35), (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["arFilterPropertyList"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[twig_get_attribute($this->env, $this->source, $context["obProperty"], "id", [], "any", false, false, true, 35)] ?? null) : null)));
                        // line 36
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<input 
\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"form-check-input\" 
\t\t\t\t\t\t\t\t\t\t\t\t\ttype=\"checkbox\" 
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 39
                        if (($context["bChecked"] ?? null)) {
                            echo " checked ";
                        }
                        // line 40
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\tid=\"";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["obValue"], "arModelData", [], "any", false, false, true, 40), "id", [], "any", false, false, true, 40), 40, $this->source), "html", null, true);
                        echo "\" 
\t\t\t\t\t\t\t\t\t\t\t\t\tvalue=\"";
                        // line 41
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["obValue"], "slug", [], "any", false, false, true, 41), 41, $this->source), "html", null, true);
                        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"\"";
                        // line 42
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["obValue"], "arModelData", [], "any", false, false, true, 42), "id", [], "any", false, false, true, 42), 42, $this->source), "html", null, true);
                        echo "\"\">";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["obValue"], "value", [], "any", false, false, true, 42), 42, $this->source), "html", null, true);
                        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['obValue'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 46
                    echo "\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
                }
                // line 48
                echo "
\t\t\t\t\t\t\t\t";
                // line 50
                echo "\t\t\t\t\t\t\t\t";
                if ((($context["sFilterType"] ?? null) == "select")) {
                    // line 51
                    echo "\t\t\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t\t\t";
                    // line 52
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["obPropertyValueList"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["obValue"]) {
                        // line 53
                        echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["obValue"], "slug", [], "any", false, false, true, 53), 53, $this->source), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["obValue"], "value", [], "any", false, false, true, 53), 53, $this->source), "html", null, true);
                        echo "</option>
\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['obValue'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 55
                    echo "\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t";
                }
                // line 57
                echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['obProperty'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
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
        return array (  205 => 61,  195 => 57,  191 => 55,  180 => 53,  176 => 52,  173 => 51,  170 => 50,  167 => 48,  163 => 46,  151 => 42,  147 => 41,  142 => 40,  138 => 39,  133 => 36,  131 => 35,  123 => 32,  120 => 31,  118 => 30,  115 => 29,  108 => 27,  105 => 26,  102 => 24,  99 => 23,  92 => 18,  89 => 17,  86 => 15,  81 => 14,  74 => 10,  70 => 8,  68 => 7,  66 => 6,  64 => 5,  62 => 4,);
    }

    public function getSourceContext()
    {
        return new Source("{##}
{# @var obActiveCategory \\Lovata\\Shopaholic\\Classes\\Item\\CategoryItem #}
{# Get products proeprty list for property sets with code 'main', enabled how filters #}
{% set obGroupList = obFilterProductPropertyList.groupList() %}
{% set obOdezhdaList = obGroupList.getByCode('odezhda') %}
{% set obObuvList = obGroupList.getByCode('obuv') %}
{% set arFilterPropertyList = Catalog.getFilterPropertyList() %}
<div class=\"filter-modal\">
\t
\t<div class=\"close\"><img src=\"{{ 'assets/images/Close-circle.svg' | theme }}\" alt=\"\"></div>
\t
\t\t<div class=\"filter-modal__col\">
\t\t\t<div class=\"modal-options property\">
\t\t\t\t{% for obProperty in obPropertyList  if obProperty.hasValue() %}
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
\t\t\t\t\t\t\t\t\t\t\t\t\t{% set bChecked = arFilterPropertyList[obProperty.id] is not empty and obValue.slug in arFilterPropertyList[obProperty.id] %}
\t\t\t\t\t\t\t\t\t\t\t\t\t<input 
\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"form-check-input\" 
\t\t\t\t\t\t\t\t\t\t\t\t\ttype=\"checkbox\" 
\t\t\t\t\t\t\t\t\t\t\t\t\t{% if bChecked %} checked {% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t\tid=\"{{ obValue.arModelData.id }}\" 
\t\t\t\t\t\t\t\t\t\t\t\t\tvalue=\"{{ obValue.slug }}\">
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
