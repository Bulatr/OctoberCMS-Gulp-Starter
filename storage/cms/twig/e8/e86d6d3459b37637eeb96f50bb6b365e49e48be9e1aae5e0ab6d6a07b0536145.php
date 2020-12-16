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

/* Z:\domains\hatan.loc/themes/hatan/partials/modal/filters/filter-modal.htm */
class __TwigTemplate_eb56638f68366f1d5851707923ee244cec7c9769bc53f68c67f502c6d5af6a2e extends \Twig\Template
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
        $tags = array("set" => 4, "for" => 12, "if" => 14);
        $filters = array("theme" => 9, "escape" => 21);
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
\t<div class=\"close\"><img src=\"";
        // line 9
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/Close-circle.svg");
        echo "\" alt=\"\"></div>
\t\t<div class=\"filter-modal__col\">
\t\t\t<div class=\"modal-options property\">
\t\t\t\t";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["obPropertyList"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["obProperty"]) {
            if (twig_get_attribute($this->env, $this->source, $context["obProperty"], "hasValue", [], "method", false, false, true, 12)) {
                // line 13
                echo "\t\t\t\t\t";
                $context["PropertyFilterName"] = twig_get_attribute($this->env, $this->source, $context["obProperty"], "filter_name", [], "any", false, false, true, 13);
                // line 14
                echo "\t\t\t\t\t";
                if ((($context["PropertyFilterName"] ?? null) == "Цвет")) {
                    // line 15
                    echo "\t\t\t\t\t\t";
                    $context["inputType"] = false;
                    // line 16
                    echo "\t\t\t\t\t\t";
                } else {
                    // line 17
                    echo "\t\t\t\t\t\t";
                    $context["inputType"] = true;
                    // line 18
                    echo "\t\t\t\t\t";
                }
                // line 19
                echo "\t\t\t\t\t";
                // line 20
                echo "\t\t\t\t\t<div class=\"modal-options__label\">
\t\t\t\t\t\t<h3>";
                // line 21
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["obProperty"], "filter_name", [], "any", false, false, true, 21), 21, $this->source), "html", null, true);
                echo "</h3>
\t\t\t\t\t</div>

\t\t\t\t\t";
                // line 25
                echo "\t\t\t\t\t";
                $context["sFilterType"] = twig_get_attribute($this->env, $this->source, $context["obProperty"], "filter_type", [], "any", false, false, true, 25);
                // line 26
                echo "
\t\t\t\t\t";
                // line 28
                echo "\t\t\t\t\t";
                $context["obPropertyValueList"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["obProperty"], "property_value", [], "any", false, false, true, 28), "sort", [], "method", false, false, true, 28);
                // line 29
                echo "\t\t\t\t\t\t<div 
\t\t\t\t\t\t\tclass=\"modal-options__wrap _shopaholic-filter-wrapper\"
\t\t\t\t\t\t\tdata-filter-type=\"";
                // line 31
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["obProperty"], "filter_type", [], "any", false, false, true, 31), 31, $this->source), "html", null, true);
                echo "\"
\t\t\t\t\t\t\tdata-property-id=\"";
                // line 32
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["obProperty"], "id", [], "any", false, false, true, 32), 32, $this->source), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t";
                // line 34
                echo "\t\t\t\t\t\t\t\t";
                if ((($context["sFilterType"] ?? null) == "checkbox")) {
                    // line 35
                    echo "\t\t\t\t\t\t\t\t\t";
                    if (($context["inputType"] ?? null)) {
                        // line 36
                        echo "\t\t\t\t\t\t\t\t\t\t<div class=\"_shopaholic-filter\" >
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 37
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(($context["obPropertyValueList"] ?? null));
                        foreach ($context['_seq'] as $context["_key"] => $context["obValue"]) {
                            // line 38
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-options__checkout\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 40
                            $context["bChecked"] = ( !twig_test_empty((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["arFilterPropertyList"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, $context["obProperty"], "id", [], "any", false, false, true, 40)] ?? null) : null)) && twig_in_filter(twig_get_attribute($this->env, $this->source, $context["obValue"], "slug", [], "any", false, false, true, 40), (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["arFilterPropertyList"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[twig_get_attribute($this->env, $this->source, $context["obProperty"], "id", [], "any", false, false, true, 40)] ?? null) : null)));
                            // line 41
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"form-check-input\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttype=\"checkbox\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 44
                            if (($context["bChecked"] ?? null)) {
                                echo " checked ";
                            }
                            // line 45
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tid=\"";
                            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["obValue"], "arModelData", [], "any", false, false, true, 45), "id", [], "any", false, false, true, 45), 45, $this->source), "html", null, true);
                            echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tvalue=\"";
                            // line 46
                            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["obValue"], "slug", [], "any", false, false, true, 46), 46, $this->source), "html", null, true);
                            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"";
                            // line 47
                            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["obValue"], "arModelData", [], "any", false, false, true, 47), "id", [], "any", false, false, true, 47), 47, $this->source), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["obValue"], "value", [], "any", false, false, true, 47), 47, $this->source), "html", null, true);
                            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['obValue'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 51
                        echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 53
                        echo "\t\t\t\t\t\t\t\t\t\t<div class=\"color-radio-list\" id=\"color-radio-list\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"_wrapper-color-list\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 55
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(($context["obPropertyValueList"] ?? null));
                        foreach ($context['_seq'] as $context["_key"] => $context["obValue"]) {
                            // line 56
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            $context["bChecked"] = ( !twig_test_empty((($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["arFilterPropertyList"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[twig_get_attribute($this->env, $this->source, $context["obProperty"], "id", [], "any", false, false, true, 56)] ?? null) : null)) && twig_in_filter(twig_get_attribute($this->env, $this->source, $context["obValue"], "slug", [], "any", false, false, true, 56), (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["arFilterPropertyList"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[twig_get_attribute($this->env, $this->source, $context["obProperty"], "id", [], "any", false, false, true, 56)] ?? null) : null)));
                            // line 57
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            $context["color_code"] = twig_get_attribute($this->env, $this->source, $context["obValue"], "color_code", [], "any", false, false, true, 57);
                            // line 58
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"color-wrapper-check\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"color-check-input\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttype=\"checkbox\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tid = \"";
                            // line 62
                            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["obValue"], "arModelData", [], "any", false, false, true, 62), "id", [], "any", false, false, true, 62), 62, $this->source), "html", null, true);
                            echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tvalue=\"";
                            // line 63
                            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["obValue"], "slug", [], "any", false, false, true, 63), 63, $this->source), "html", null, true);
                            echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tname=\"property[";
                            // line 64
                            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["obValue"], "id", [], "any", false, false, true, 64), 64, $this->source), "html", null, true);
                            echo "][]\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 65
                            if (($context["bChecked"] ?? null)) {
                                // line 66
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tchecked
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 67
                            echo " />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"color-code-image\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 70
                            if (($context["bChecked"] ?? null)) {
                                echo " class=\"color-input-checked\" ";
                            }
                            // line 71
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tfor=\"";
                            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["obValue"], "arModelData", [], "any", false, false, true, 71), "id", [], "any", false, false, true, 71), 71, $this->source), "html", null, true);
                            echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"background:";
                            // line 72
                            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_code"] ?? null), 72, $this->source), "html", null, true);
                            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['obValue'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 76
                        echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 79
                    echo "\t\t\t\t\t\t\t\t";
                }
                // line 80
                echo "
\t\t\t\t\t\t\t\t";
                // line 82
                echo "\t\t\t\t\t\t\t\t";
                if ((($context["sFilterType"] ?? null) == "select")) {
                    // line 83
                    echo "\t\t\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t\t\t";
                    // line 84
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["obPropertyValueList"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["obValue"]) {
                        // line 85
                        echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["obValue"], "slug", [], "any", false, false, true, 85), 85, $this->source), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["obValue"], "value", [], "any", false, false, true, 85), 85, $this->source), "html", null, true);
                        echo "</option>
\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['obValue'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 87
                    echo "\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t";
                }
                // line 89
                echo "\t\t\t\t\t\t</div>
\t\t\t\t";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['obProperty'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        echo "\t\t\t</div>
\t\t\t<!--Price-->
\t\t\t
\t\t\t";
        // line 95
        echo "\t\t\t";
        $context["obOfferMinPrice"] = twig_get_attribute($this->env, $this->source, ($context["obProductList"] ?? null), "getOfferMinPrice", [], "method", false, false, true, 95);
        // line 96
        echo "\t\t\t";
        $context["obOfferMaxPrice"] = twig_get_attribute($this->env, $this->source, ($context["obProductList"] ?? null), "getOfferMaxPrice", [], "method", false, false, true, 96);
        // line 97
        echo "\t\t\t<div class=\"modal-options\">
\t\t\t\t<div class=\"modal-options__label\">
\t\t\t\t\t<h3>Стоимость</h3>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-options__wrap\">
\t\t\t\t\t<div class=\"modal-options__checkout\">
\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" name=\"price\" value=\"price-low\" id=\"price-filter-1\" data-price-filter=\"1\" data-price-min=\"0\" data-price-max=\"1500\">
\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"price-filter-low\">
\t\t\t\t\t\t\t\tдо 1500 руб
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"modal-options-checkout__value\" id=\"price-filter-low\">
\t\t\t\t\t\t\t";
        // line 110
        $context["obListLow"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["obProductList"] ?? null), "make", [], "method", false, false, true, 110), "filterByPrice", [0 => 0, 1 => 1500], "method", false, false, true, 110), "count", [], "method", false, false, true, 110);
        // line 111
        echo "\t\t\t\t\t\t\t";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["obListLow"] ?? null), 111, $this->source), "html", null, true);
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"modal-options__checkout\">
\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" name=\"price\" value=\"price-middle\" id=\"price-filter-2\" data-price-filter=\"2\" data-price-min=\"1501\" data-price-max=\"5000\">
\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"price-filter-middle\">
\t\t\t\t\t\t\t\tот 1500 до 5000 руб
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"modal-options-checkout__value\" id=\"price-filter-middle\">
\t\t\t\t\t\t\t";
        // line 122
        $context["obListMiddle"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["obProductList"] ?? null), "make", [], "method", false, false, true, 122), "filterByPrice", [0 => 1501, 1 => 5000], "method", false, false, true, 122), "count", [], "method", false, false, true, 122);
        // line 123
        echo "\t\t\t\t\t\t\t";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["obListMiddle"] ?? null), 123, $this->source), "html", null, true);
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"modal-options__checkout\">
\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" name=\"price\" value=\"price-hight\" id=\"price-filter-3\" data-price-filter=\"3\" data-price-min=\"5001\" data-price-max=\"100000\">
\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"price-filter-hight\">
\t\t\t\t\t\t\t\tот 5000 руб
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"modal-options-checkout__value\" id=\"price-filter-hight\">
\t\t\t\t\t\t\t";
        // line 134
        $context["obListHight"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["obProductList"] ?? null), "make", [], "method", false, false, true, 134), "filterByPrice", [0 => 5001, 1 => 100000], "method", false, false, true, 134), "count", [], "method", false, false, true, 134);
        // line 135
        echo "\t\t\t\t\t\t\t";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["obListHight"] ?? null), 135, $this->source), "html", null, true);
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class='_shopaholic-price-filter' >
\t\t\t\t\t<input
\t\t\t\t\t\ttype=\"hidden\"
\t\t\t\t\t\tname=\"filter-min-price\"
\t\t\t\t\t\tplaceholder=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obOfferMinPrice"] ?? null), "price", [], "any", false, false, true, 143), 143, $this->source), "html", null, true);
        echo "\"
\t\t\t\t\t\tvalue=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obOfferMinPrice"] ?? null), "price_value", [], "any", false, false, true, 144), 144, $this->source), "html", null, true);
        echo "\"
\t\t\t\t\t\tmin=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obOfferMinPrice"] ?? null), "price_value", [], "any", false, false, true, 145), 145, $this->source), "html", null, true);
        echo "\"
\t\t\t\t\t\tmax=\"";
        // line 146
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obOfferMaxPrice"] ?? null), "price_value", [], "any", false, false, true, 146), 146, $this->source), "html", null, true);
        echo "\">
\t\t\t\t\t<input
\t\t\t\t\t\tname=\"filter-max-price\"
\t\t\t\t\t\ttype=\"hidden\"
\t\t\t\t\t\tplaceholder=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obOfferMaxPrice"] ?? null), "price", [], "any", false, false, true, 150), 150, $this->source), "html", null, true);
        echo "\"
\t\t\t\t\t\tvalue=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obOfferMaxPrice"] ?? null), "price_value", [], "any", false, false, true, 151), 151, $this->source), "html", null, true);
        echo "\"
\t\t\t\t\t\tmin=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obOfferMinPrice"] ?? null), "price_value", [], "any", false, false, true, 152), 152, $this->source), "html", null, true);
        echo "\"
\t\t\t\t\t\tmax=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obOfferMaxPrice"] ?? null), "price_value", [], "any", false, false, true, 153), 153, $this->source), "html", null, true);
        echo "\">
\t\t\t\t</div>
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
        return "Z:\\domains\\hatan.loc/themes/hatan/partials/modal/filters/filter-modal.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  398 => 153,  394 => 152,  390 => 151,  386 => 150,  379 => 146,  375 => 145,  371 => 144,  367 => 143,  355 => 135,  353 => 134,  338 => 123,  336 => 122,  321 => 111,  319 => 110,  304 => 97,  301 => 96,  298 => 95,  293 => 91,  285 => 89,  281 => 87,  270 => 85,  266 => 84,  263 => 83,  260 => 82,  257 => 80,  254 => 79,  249 => 76,  239 => 72,  234 => 71,  230 => 70,  225 => 67,  221 => 66,  219 => 65,  215 => 64,  211 => 63,  207 => 62,  201 => 58,  198 => 57,  195 => 56,  191 => 55,  187 => 53,  183 => 51,  171 => 47,  167 => 46,  162 => 45,  158 => 44,  153 => 41,  151 => 40,  147 => 38,  143 => 37,  140 => 36,  137 => 35,  134 => 34,  130 => 32,  126 => 31,  122 => 29,  119 => 28,  116 => 26,  113 => 25,  107 => 21,  104 => 20,  102 => 19,  99 => 18,  96 => 17,  93 => 16,  90 => 15,  87 => 14,  84 => 13,  79 => 12,  73 => 9,  70 => 8,  68 => 7,  66 => 6,  64 => 5,  62 => 4,);
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
\t<div class=\"close\"><img src=\"{{ 'assets/images/Close-circle.svg' | theme }}\" alt=\"\"></div>
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

\t\t\t\t\t{# Get filter type #}
\t\t\t\t\t{% set sFilterType = obProperty.filter_type %}

\t\t\t\t\t{# Get proeprty value list #}
\t\t\t\t\t{% set obPropertyValueList = obProperty.property_value.sort() %}
\t\t\t\t\t\t<div 
\t\t\t\t\t\t\tclass=\"modal-options__wrap _shopaholic-filter-wrapper\"
\t\t\t\t\t\t\tdata-filter-type=\"{{obProperty.filter_type}}\"
\t\t\t\t\t\t\tdata-property-id=\"{{obProperty.id}}\">
\t\t\t\t\t\t\t{# Render filtre with type == checkbox #}
\t\t\t\t\t\t\t\t{% if sFilterType == 'checkbox' %}
\t\t\t\t\t\t\t\t\t{% if inputType %}
\t\t\t\t\t\t\t\t\t\t<div class=\"_shopaholic-filter\" >
\t\t\t\t\t\t\t\t\t\t\t{% for obValue in obPropertyValueList %}
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-options__checkout\">
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
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t<div class=\"color-radio-list\" id=\"color-radio-list\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"_wrapper-color-list\">
\t\t\t\t\t\t\t\t\t\t\t\t{% for obValue in obPropertyValueList %}
\t\t\t\t\t\t\t\t\t\t\t\t\t{% set bChecked = arFilterPropertyList[obProperty.id] is not empty and obValue.slug in arFilterPropertyList[obProperty.id] %}
\t\t\t\t\t\t\t\t\t\t\t\t\t{% set color_code = obValue.color_code %}
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"color-wrapper-check\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"color-check-input\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttype=\"checkbox\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tid = \"{{ obValue.arModelData.id }}\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tvalue=\"{{obValue.slug}}\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tname=\"property[{{ obValue.id }}][]\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% if bChecked %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tchecked
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %} />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"color-code-image\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% if bChecked %} class=\"color-input-checked\" {% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tfor=\"{{ obValue.arModelData.id }}\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"background:{{color_code}}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t</div>
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
\t\t\t\t\t\t</div>
\t\t\t\t{% endfor %}
\t\t\t</div>
\t\t\t<!--Price-->
\t\t\t
\t\t\t{# Get offers with min and max prices #}
\t\t\t{% set obOfferMinPrice = obProductList.getOfferMinPrice() %}
\t\t\t{% set obOfferMaxPrice = obProductList.getOfferMaxPrice() %}
\t\t\t<div class=\"modal-options\">
\t\t\t\t<div class=\"modal-options__label\">
\t\t\t\t\t<h3>Стоимость</h3>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-options__wrap\">
\t\t\t\t\t<div class=\"modal-options__checkout\">
\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" name=\"price\" value=\"price-low\" id=\"price-filter-1\" data-price-filter=\"1\" data-price-min=\"0\" data-price-max=\"1500\">
\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"price-filter-low\">
\t\t\t\t\t\t\t\tдо 1500 руб
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"modal-options-checkout__value\" id=\"price-filter-low\">
\t\t\t\t\t\t\t{% set obListLow = obProductList.make().filterByPrice(0, 1500).count() %}
\t\t\t\t\t\t\t{{obListLow}}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"modal-options__checkout\">
\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" name=\"price\" value=\"price-middle\" id=\"price-filter-2\" data-price-filter=\"2\" data-price-min=\"1501\" data-price-max=\"5000\">
\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"price-filter-middle\">
\t\t\t\t\t\t\t\tот 1500 до 5000 руб
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"modal-options-checkout__value\" id=\"price-filter-middle\">
\t\t\t\t\t\t\t{% set obListMiddle = obProductList.make().filterByPrice(1501, 5000).count() %}
\t\t\t\t\t\t\t{{obListMiddle}}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"modal-options__checkout\">
\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" name=\"price\" value=\"price-hight\" id=\"price-filter-3\" data-price-filter=\"3\" data-price-min=\"5001\" data-price-max=\"100000\">
\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"price-filter-hight\">
\t\t\t\t\t\t\t\tот 5000 руб
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"modal-options-checkout__value\" id=\"price-filter-hight\">
\t\t\t\t\t\t\t{% set obListHight = obProductList.make().filterByPrice(5001, 100000).count()  %}
\t\t\t\t\t\t\t{{obListHight}}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class='_shopaholic-price-filter' >
\t\t\t\t\t<input
\t\t\t\t\t\ttype=\"hidden\"
\t\t\t\t\t\tname=\"filter-min-price\"
\t\t\t\t\t\tplaceholder=\"{{ obOfferMinPrice.price }}\"
\t\t\t\t\t\tvalue=\"{{ obOfferMinPrice.price_value }}\"
\t\t\t\t\t\tmin=\"{{ obOfferMinPrice.price_value }}\"
\t\t\t\t\t\tmax=\"{{ obOfferMaxPrice.price_value }}\">
\t\t\t\t\t<input
\t\t\t\t\t\tname=\"filter-max-price\"
\t\t\t\t\t\ttype=\"hidden\"
\t\t\t\t\t\tplaceholder=\"{{ obOfferMaxPrice.price }}\"
\t\t\t\t\t\tvalue=\"{{ obOfferMaxPrice.price_value }}\"
\t\t\t\t\t\tmin=\"{{ obOfferMinPrice.price_value }}\"
\t\t\t\t\t\tmax=\"{{ obOfferMaxPrice.price_value }}\">
\t\t\t\t</div>
\t\t\t</div>

\t\t</div>
\t\t<div class=\"filter-modal__col\">
\t\t\t<div class=\"filter-modal-buttons\">
\t\t\t\t<a href=\"#\" id=\"show\" class=\"btn btn-primary\">Показать результаты</a>
\t\t\t\t<a href=\"#\" id=\"clear\" class=\"btn btn-primary secondary\">Очистить фильтр</a>
\t\t\t</div>
\t\t</div>
\t
</div>", "Z:\\domains\\hatan.loc/themes/hatan/partials/modal/filters/filter-modal.htm", "");
    }
}
