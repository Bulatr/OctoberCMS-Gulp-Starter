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
        $tags = array("set" => 4, "for" => 14, "if" => 16);
        $filters = array("theme" => 10, "escape" => 23);
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
                echo "\t\t\t\t\t";
                $context["PropertyFilterName"] = twig_get_attribute($this->env, $this->source, $context["obProperty"], "filter_name", [], "any", false, false, true, 15);
                // line 16
                echo "\t\t\t\t\t";
                if ((($context["PropertyFilterName"] ?? null) == "Цвет")) {
                    // line 17
                    echo "\t\t\t\t\t\t";
                    $context["inputType"] = false;
                    // line 18
                    echo "\t\t\t\t\t\t";
                } else {
                    // line 19
                    echo "\t\t\t\t\t\t";
                    $context["inputType"] = true;
                    // line 20
                    echo "\t\t\t\t\t";
                }
                echo " 
\t\t\t\t\t";
                // line 22
                echo "\t\t\t\t\t<div class=\"modal-options__label\">
\t\t\t\t\t\t<h3>";
                // line 23
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["obProperty"], "filter_name", [], "any", false, false, true, 23), 23, $this->source), "html", null, true);
                echo "</h3>
\t\t\t\t\t</div>
\t\t\t\t\t

\t\t\t\t\t";
                // line 28
                echo "\t\t\t\t\t";
                $context["sFilterType"] = twig_get_attribute($this->env, $this->source, $context["obProperty"], "filter_type", [], "any", false, false, true, 28);
                // line 29
                echo "
\t\t\t\t\t";
                // line 31
                echo "\t\t\t\t\t";
                $context["obPropertyValueList"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["obProperty"], "property_value", [], "any", false, false, true, 31), "sort", [], "method", false, false, true, 31);
                // line 32
                echo "\t\t\t\t\t\t<div class=\"modal-options__wrap\">\t
\t\t\t\t\t\t\t";
                // line 34
                echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
                // line 35
                if ((($context["sFilterType"] ?? null) == "checkbox")) {
                    // line 36
                    echo "\t\t\t\t\t\t\t\t\t";
                    if (($context["inputType"] ?? null)) {
                        // line 37
                        echo "\t\t\t\t\t\t\t\t\t\t<div class=\"_shopaholic-filter-wrapper\" data-filter-type=\"";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["obProperty"], "filter_type", [], "any", false, false, true, 37), 37, $this->source), "html", null, true);
                        echo "\" data-property-id=\"";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["obProperty"], "id", [], "any", false, false, true, 37), 37, $this->source), "html", null, true);
                        echo "\" >  
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 38
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(($context["obPropertyValueList"] ?? null));
                        foreach ($context['_seq'] as $context["_key"] => $context["obValue"]) {
                            echo "\t
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-options__checkout\">\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 41
                            $context["bChecked"] = ( !twig_test_empty((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["arFilterPropertyList"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, $context["obProperty"], "id", [], "any", false, false, true, 41)] ?? null) : null)) && twig_in_filter(twig_get_attribute($this->env, $this->source, $context["obValue"], "slug", [], "any", false, false, true, 41), (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["arFilterPropertyList"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[twig_get_attribute($this->env, $this->source, $context["obProperty"], "id", [], "any", false, false, true, 41)] ?? null) : null)));
                            // line 42
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"form-check-input\" 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttype=\"checkbox\" 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 45
                            if (($context["bChecked"] ?? null)) {
                                echo " checked ";
                            }
                            // line 46
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tid=\"";
                            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["obValue"], "arModelData", [], "any", false, false, true, 46), "id", [], "any", false, false, true, 46), 46, $this->source), "html", null, true);
                            echo "\" 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tvalue=\"";
                            // line 47
                            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["obValue"], "slug", [], "any", false, false, true, 47), 47, $this->source), "html", null, true);
                            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"";
                            // line 48
                            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["obValue"], "arModelData", [], "any", false, false, true, 48), "id", [], "any", false, false, true, 48), 48, $this->source), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["obValue"], "value", [], "any", false, false, true, 48), 48, $this->source), "html", null, true);
                            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['obValue'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 52
                        echo "\t\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 54
                        echo "\t\t\t\t\t\t\t\t\t\t<div class=\"color-radio\" id=\"color-radio\">\t\t\t\t\t\t\t\t\t\t\t                       
\t\t\t\t\t\t\t\t\t\t\t<div class=\"wrapper-radio\" data-filter-type=\"checkbox\" data-property-id=\"";
                        // line 55
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["obProperty"], "id", [], "any", false, false, true, 55), 55, $this->source), "html", null, true);
                        echo "\" >
\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 56
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(($context["obPropertyValueList"] ?? null));
                        foreach ($context['_seq'] as $context["_key"] => $context["obValue"]) {
                            // line 57
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            $context["bChecked"] = ( !twig_test_empty((($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["arFilterPropertyList"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[twig_get_attribute($this->env, $this->source, $context["obProperty"], "id", [], "any", false, false, true, 57)] ?? null) : null)) && twig_in_filter(twig_get_attribute($this->env, $this->source, $context["obValue"], "slug", [], "any", false, false, true, 57), (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["arFilterPropertyList"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[twig_get_attribute($this->env, $this->source, $context["obProperty"], "id", [], "any", false, false, true, 57)] ?? null) : null)));
                            // line 58
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            $context["color_code"] = twig_get_attribute($this->env, $this->source, $context["obValue"], "color_code", [], "any", false, false, true, 58);
                            // line 59
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<label ";
                            if (($context["bChecked"] ?? null)) {
                                echo " class=\"input-checked\" ";
                            }
                            echo " for=\"";
                            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["obValue"], "arModelData", [], "any", false, false, true, 59), "id", [], "any", false, false, true, 59), 59, $this->source), "html", null, true);
                            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"background:";
                            // line 60
                            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_code"] ?? null), 60, $this->source), "html", null, true);
                            echo "\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"color-radio-input\" 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttype=\"radio\" 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tid = \"";
                            // line 64
                            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["obValue"], "arModelData", [], "any", false, false, true, 64), "id", [], "any", false, false, true, 64), 64, $this->source), "html", null, true);
                            echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tvalue=\"";
                            // line 65
                            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["obValue"], "slug", [], "any", false, false, true, 65), 65, $this->source), "html", null, true);
                            echo "\" 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tname=\"property[";
                            // line 66
                            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["obValue"], "id", [], "any", false, false, true, 66), 66, $this->source), "html", null, true);
                            echo "][]\" 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tdata-property-id=\"";
                            // line 67
                            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["obProperty"], "id", [], "any", false, false, true, 67), 67, $this->source), "html", null, true);
                            echo "\" 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 68
                            if (($context["bChecked"] ?? null)) {
                                // line 69
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\"checked\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 70
                            echo " />
\t\t\t\t\t\t\t\t\t\t\t\t\t</label>                                    
\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['obValue'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 73
                        echo "\t\t\t\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 76
                    echo "\t\t\t\t\t\t\t\t";
                }
                // line 77
                echo "
\t\t\t\t\t\t\t\t";
                // line 79
                echo "\t\t\t\t\t\t\t\t";
                if ((($context["sFilterType"] ?? null) == "select")) {
                    // line 80
                    echo "\t\t\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t\t\t";
                    // line 81
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["obPropertyValueList"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["obValue"]) {
                        // line 82
                        echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["obValue"], "slug", [], "any", false, false, true, 82), 82, $this->source), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["obValue"], "value", [], "any", false, false, true, 82), 82, $this->source), "html", null, true);
                        echo "</option>
\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['obValue'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 84
                    echo "\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t";
                }
                // line 86
                echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['obProperty'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        echo "\t\t\t</div>
\t\t\t
\t\t\t<!--Price-->
\t\t\t<div class=\"modal-options_shopaholic-price-filter\">
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
        return array (  296 => 90,  286 => 86,  282 => 84,  271 => 82,  267 => 81,  264 => 80,  261 => 79,  258 => 77,  255 => 76,  250 => 73,  242 => 70,  238 => 69,  236 => 68,  232 => 67,  228 => 66,  224 => 65,  220 => 64,  213 => 60,  204 => 59,  201 => 58,  198 => 57,  194 => 56,  190 => 55,  187 => 54,  183 => 52,  171 => 48,  167 => 47,  162 => 46,  158 => 45,  153 => 42,  151 => 41,  143 => 38,  136 => 37,  133 => 36,  131 => 35,  128 => 34,  125 => 32,  122 => 31,  119 => 29,  116 => 28,  109 => 23,  106 => 22,  101 => 20,  98 => 19,  95 => 18,  92 => 17,  89 => 16,  86 => 15,  81 => 14,  74 => 10,  70 => 8,  68 => 7,  66 => 6,  64 => 5,  62 => 4,);
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
\t\t\t\t\t{% set PropertyFilterName = obProperty.filter_name %}
\t\t\t\t\t{% if PropertyFilterName == \"Цвет\" %}
\t\t\t\t\t\t{% set inputType = false %}
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t{% set inputType = true %}
\t\t\t\t\t{% endif %} 
\t\t\t\t\t{# Render filter name #}
\t\t\t\t\t<div class=\"modal-options__label\">
\t\t\t\t\t\t<h3>{{ obProperty.filter_name }}</h3>
\t\t\t\t\t</div>
\t\t\t\t\t

\t\t\t\t\t{# Get filter type #}
\t\t\t\t\t{% set sFilterType = obProperty.filter_type %}

\t\t\t\t\t{# Get proeprty value list #}
\t\t\t\t\t{% set obPropertyValueList = obProperty.property_value.sort() %}
\t\t\t\t\t\t<div class=\"modal-options__wrap\">\t
\t\t\t\t\t\t\t{# Render filtre with type == checkbox #}
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t{% if sFilterType == 'checkbox' %}
\t\t\t\t\t\t\t\t\t{% if inputType %}
\t\t\t\t\t\t\t\t\t\t<div class=\"_shopaholic-filter-wrapper\" data-filter-type=\"{{obProperty.filter_type}}\" data-property-id=\"{{obProperty.id}}\" >  
\t\t\t\t\t\t\t\t\t\t\t{% for obValue in obPropertyValueList %}\t
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-options__checkout\">\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% set bChecked = arFilterPropertyList[obProperty.id] is not empty and obValue.slug in arFilterPropertyList[obProperty.id] %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"form-check-input\" 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttype=\"checkbox\" 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% if bChecked %} checked {% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tid=\"{{ obValue.arModelData.id }}\" 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tvalue=\"{{ obValue.slug }}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"{{ obValue.arModelData.id }}\">{{ obValue.value }}</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t<div class=\"color-radio\" id=\"color-radio\">\t\t\t\t\t\t\t\t\t\t\t                       
\t\t\t\t\t\t\t\t\t\t\t<div class=\"wrapper-radio\" data-filter-type=\"checkbox\" data-property-id=\"{{obProperty.id}}\" >
\t\t\t\t\t\t\t\t\t\t\t\t{% for obValue in obPropertyValueList %}
\t\t\t\t\t\t\t\t\t\t\t\t\t{% set bChecked = arFilterPropertyList[obProperty.id] is not empty and obValue.slug in arFilterPropertyList[obProperty.id] %}
\t\t\t\t\t\t\t\t\t\t\t\t\t{% set color_code = obValue.color_code %}
\t\t\t\t\t\t\t\t\t\t\t\t\t<label {% if bChecked %} class=\"input-checked\" {% endif %} for=\"{{ obValue.arModelData.id }}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"background:{{color_code}}\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"color-radio-input\" 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttype=\"radio\" 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tid = \"{{ obValue.arModelData.id }}\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tvalue=\"{{obValue.slug}}\" 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tname=\"property[{{ obValue.id }}][]\" 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tdata-property-id=\"{{obProperty.id}}\" 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% if bChecked %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\"checked\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %} />
\t\t\t\t\t\t\t\t\t\t\t\t\t</label>                                    
\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t{% endif %}
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
\t\t\t<div class=\"modal-options_shopaholic-price-filter\">
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
