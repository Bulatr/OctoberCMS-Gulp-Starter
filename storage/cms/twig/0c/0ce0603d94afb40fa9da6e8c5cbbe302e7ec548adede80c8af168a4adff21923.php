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

/* Z:\domains\hatan.loc/themes/hatan/partials/product/filter-panel/product-filter-panel.htm */
class __TwigTemplate_c341f8ad5cbc9b844efad17405f772f2fa39716e08f0128d3100c49a8e7f0807 extends \Twig\Template
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
        $tags = array("if" => 2, "for" => 5, "set" => 8);
        $filters = array("escape" => 18);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for', 'set'],
                ['escape'],
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
        if (twig_get_attribute($this->env, $this->source, ($context["obPropertyList"] ?? null), "isNotEmpty", [], "method", false, false, true, 2)) {
            // line 3
            echo "    ";
            // line 4
            echo "    <div class=\"property-wrapper\" >  
        ";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["obPropertyList"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["obProperty"]) {
                if (twig_get_attribute($this->env, $this->source, $context["obProperty"], "hasValue", [], "method", false, false, true, 5)) {
                    // line 6
                    echo "            ";
                    // line 7
                    echo "            <div class=\"property-values-wrapper\"> 
                ";
                    // line 8
                    $context["PropertyFilterName"] = twig_get_attribute($this->env, $this->source, $context["obProperty"], "filter_name", [], "any", false, false, true, 8);
                    // line 9
                    echo "                ";
                    if ((($context["PropertyFilterName"] ?? null) == "Цвет")) {
                        // line 10
                        echo "                    ";
                        $context["inputType"] = false;
                        // line 11
                        echo "                    ";
                    } else {
                        // line 12
                        echo "                    ";
                        $context["inputType"] = true;
                        // line 13
                        echo "                ";
                    }
                    echo "                
                
                ";
                    // line 15
                    if ((twig_get_attribute($this->env, $this->source, $context["obProperty"], "filter_type", [], "any", false, false, true, 15) == "checkbox")) {
                        // line 16
                        echo "                    ";
                        if (($context["inputType"] ?? null)) {
                            // line 17
                            echo "                        
                        <div class=\"form-group product-property\" data-filter-type=\"select\" data-property-id=\"";
                            // line 18
                            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["obProperty"], "id", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
                            echo "\">
                            <label for=\"property-razmer\"> ";
                            // line 19
                            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["obProperty"], "filter_name", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
                            echo " </label>
                            <select class=\"form-control property-values__select\" id=\"property-razmer\" name=\"property-razmer\" data-property-id=\"";
                            // line 20
                            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["obProperty"], "id", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
                            echo "\">
                                ";
                            // line 21
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["obProperty"], "property_value", [], "any", false, false, true, 21));
                            foreach ($context['_seq'] as $context["_key"] => $context["obPropertyValue"]) {
                                echo " 
                                    <option ";
                                // line 22
                                if (( !twig_test_empty((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["arAppliedPropertyList"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, $context["obProperty"], "id", [], "any", false, false, true, 22)] ?? null) : null)) && twig_in_filter(twig_get_attribute($this->env, $this->source, $context["obPropertyValue"], "slug", [], "any", false, false, true, 22), (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["arAppliedPropertyList"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[twig_get_attribute($this->env, $this->source, $context["obProperty"], "id", [], "any", false, false, true, 22)] ?? null) : null)))) {
                                    // line 23
                                    echo "                                        selected=\"selected\"
                                    ";
                                }
                                // line 24
                                echo " value=\"";
                                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["obPropertyValue"], "slug", [], "any", false, false, true, 24), 24, $this->source), "html", null, true);
                                echo "\">";
                                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["obPropertyValue"], "value", [], "any", false, false, true, 24), 24, $this->source), "html", null, true);
                                echo "</option>                                
                                ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['obPropertyValue'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 26
                            echo "                            </select>
                        </div>
                        
                    ";
                        } else {
                            // line 30
                            echo "                        <div class=\"color-radio\" id=\"color-radio\">
                            <div class=\"property-title\" >
                                ";
                            // line 32
                            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["obProperty"], "filter_name", [], "any", false, false, true, 32), 32, $this->source), "html", null, true);
                            echo "
                            </div>                        
                            <div class=\"wrapper-radio\">
                                ";
                            // line 35
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["obProperty"], "property_value", [], "any", false, false, true, 35));
                            foreach ($context['_seq'] as $context["_key"] => $context["obPropertyValue"]) {
                                // line 36
                                echo "                                    ";
                                $context["color_code"] = twig_get_attribute($this->env, $this->source, $context["obPropertyValue"], "color_code", [], "any", false, false, true, 36);
                                // line 37
                                echo "                                    <label ";
                                if (( !twig_test_empty((($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["arAppliedPropertyList"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[twig_get_attribute($this->env, $this->source, $context["obProperty"], "id", [], "any", false, false, true, 37)] ?? null) : null)) && twig_in_filter(twig_get_attribute($this->env, $this->source, $context["obPropertyValue"], "slug", [], "any", false, false, true, 37), (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["arAppliedPropertyList"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[twig_get_attribute($this->env, $this->source, $context["obProperty"], "id", [], "any", false, false, true, 37)] ?? null) : null)))) {
                                    echo " class=\"input-checked\" ";
                                }
                                echo " >
                                        <span style=\"background:";
                                // line 38
                                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_code"] ?? null), 38, $this->source), "html", null, true);
                                echo "\"></span>
                                        <input type=\"radio\" value=\"";
                                // line 39
                                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["obPropertyValue"], "slug", [], "any", false, false, true, 39), 39, $this->source), "html", null, true);
                                echo "\" name=\"property[";
                                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["obPropertyValue"], "id", [], "any", false, false, true, 39), 39, $this->source), "html", null, true);
                                echo "][]\" data-property-id=\"";
                                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["obProperty"], "id", [], "any", false, false, true, 39), 39, $this->source), "html", null, true);
                                echo "\" ";
                                if (( !twig_test_empty((($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["arAppliedPropertyList"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[twig_get_attribute($this->env, $this->source, $context["obProperty"], "id", [], "any", false, false, true, 39)] ?? null) : null)) && twig_in_filter(twig_get_attribute($this->env, $this->source, $context["obPropertyValue"], "slug", [], "any", false, false, true, 39), (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["arAppliedPropertyList"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[twig_get_attribute($this->env, $this->source, $context["obProperty"], "id", [], "any", false, false, true, 39)] ?? null) : null)))) {
                                    // line 40
                                    echo "                                        \"checked\"
                                    ";
                                }
                                // line 41
                                echo " />
                                    </label>                                    
                                ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['obPropertyValue'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 44
                            echo "                            </div>\t
                        </div>
                    ";
                        }
                        // line 47
                        echo "                ";
                    } elseif ((twig_get_attribute($this->env, $this->source, $context["obProperty"], "filter_type", [], "any", false, false, true, 47) == "select")) {
                        // line 48
                        echo "                    <div class=\"property-values-wrapper__item\">
                        <select 
                            class=\"property-values__select\"
                            name=\"property[";
                        // line 51
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["obProperty"], "id", [], "any", false, false, true, 51), 51, $this->source), "html", null, true);
                        echo "][]\">
                                ";
                        // line 52
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["obProperty"], "property_value", [], "any", false, false, true, 52));
                        foreach ($context['_seq'] as $context["_key"] => $context["obPropertyValue"]) {
                            // line 53
                            echo "                                    <option
                                        ";
                            // line 54
                            if (( !twig_test_empty((($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = ($context["arAppliedPropertyList"] ?? null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e[twig_get_attribute($this->env, $this->source, $context["obProperty"], "id", [], "any", false, false, true, 54)] ?? null) : null)) && twig_in_filter(twig_get_attribute($this->env, $this->source, $context["obPropertyValue"], "slug", [], "any", false, false, true, 54), (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = ($context["arAppliedPropertyList"] ?? null)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52[twig_get_attribute($this->env, $this->source, $context["obProperty"], "id", [], "any", false, false, true, 54)] ?? null) : null)))) {
                                // line 55
                                echo "                                            selected=\"selected\"
                                        ";
                            }
                            // line 57
                            echo "                                        value=\"";
                            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["obPropertyValue"], "slug", [], "any", false, false, true, 57), 57, $this->source), "html", null, true);
                            echo "\">
                                        ";
                            // line 58
                            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["obPropertyValue"], "value", [], "any", false, false, true, 58), 58, $this->source), "html", null, true);
                            echo "
                                    </option>
                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['obPropertyValue'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 61
                        echo "                        </select>
                    </div>
                ";
                    }
                    // line 64
                    echo "            </div>
        ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['obProperty'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 66
            echo "    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "Z:\\domains\\hatan.loc/themes/hatan/partials/product/filter-panel/product-filter-panel.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  253 => 66,  245 => 64,  240 => 61,  231 => 58,  226 => 57,  222 => 55,  220 => 54,  217 => 53,  213 => 52,  209 => 51,  204 => 48,  201 => 47,  196 => 44,  188 => 41,  184 => 40,  176 => 39,  172 => 38,  165 => 37,  162 => 36,  158 => 35,  152 => 32,  148 => 30,  142 => 26,  131 => 24,  127 => 23,  125 => 22,  119 => 21,  115 => 20,  111 => 19,  107 => 18,  104 => 17,  101 => 16,  99 => 15,  93 => 13,  90 => 12,  87 => 11,  84 => 10,  81 => 9,  79 => 8,  76 => 7,  74 => 6,  69 => 5,  66 => 4,  64 => 3,  62 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{##}
{% if obPropertyList.isNotEmpty() %}
    {# Render proeprty list #}
    <div class=\"property-wrapper\" >  
        {% for obProperty in obPropertyList if obProperty.hasValue() %}
            {# Render property name #}
            <div class=\"property-values-wrapper\"> 
                {% set PropertyFilterName = obProperty.filter_name %}
                {% if PropertyFilterName == \"Цвет\" %}
                    {% set inputType = false %}
                    {% else %}
                    {% set inputType = true %}
                {% endif %}                
                
                {% if obProperty.filter_type == 'checkbox' %}
                    {% if inputType %}
                        
                        <div class=\"form-group product-property\" data-filter-type=\"select\" data-property-id=\"{{obProperty.id}}\">
                            <label for=\"property-razmer\"> {{ obProperty.filter_name }} </label>
                            <select class=\"form-control property-values__select\" id=\"property-razmer\" name=\"property-razmer\" data-property-id=\"{{obProperty.id}}\">
                                {% for obPropertyValue in obProperty.property_value %} 
                                    <option {% if arAppliedPropertyList[obProperty.id] is not empty and obPropertyValue.slug in arAppliedPropertyList[obProperty.id] %}
                                        selected=\"selected\"
                                    {% endif %} value=\"{{ obPropertyValue.slug }}\">{{ obPropertyValue.value }}</option>                                
                                {% endfor %}
                            </select>
                        </div>
                        
                    {% else %}
                        <div class=\"color-radio\" id=\"color-radio\">
                            <div class=\"property-title\" >
                                {{ obProperty.filter_name }}
                            </div>                        
                            <div class=\"wrapper-radio\">
                                {% for obPropertyValue in obProperty.property_value %}
                                    {% set color_code = obPropertyValue.color_code %}
                                    <label {% if arAppliedPropertyList[obProperty.id] is not empty and obPropertyValue.slug in arAppliedPropertyList[obProperty.id] %} class=\"input-checked\" {% endif %} >
                                        <span style=\"background:{{color_code}}\"></span>
                                        <input type=\"radio\" value=\"{{obPropertyValue.slug}}\" name=\"property[{{ obPropertyValue.id }}][]\" data-property-id=\"{{obProperty.id}}\" {% if arAppliedPropertyList[obProperty.id] is not empty and obPropertyValue.slug in arAppliedPropertyList[obProperty.id] %}
                                        \"checked\"
                                    {% endif %} />
                                    </label>                                    
                                {% endfor %}
                            </div>\t
                        </div>
                    {% endif %}
                {% elseif obProperty.filter_type == 'select' %}
                    <div class=\"property-values-wrapper__item\">
                        <select 
                            class=\"property-values__select\"
                            name=\"property[{{ obProperty.id }}][]\">
                                {% for obPropertyValue in obProperty.property_value %}
                                    <option
                                        {% if arAppliedPropertyList[obProperty.id] is not empty and obPropertyValue.slug in arAppliedPropertyList[obProperty.id] %}
                                            selected=\"selected\"
                                        {% endif %}
                                        value=\"{{ obPropertyValue.slug }}\">
                                        {{ obPropertyValue.value }}
                                    </option>
                                {% endfor %}
                        </select>
                    </div>
                {% endif %}
            </div>
        {% endfor %}
    </div>
{% endif %}", "Z:\\domains\\hatan.loc/themes/hatan/partials/product/filter-panel/product-filter-panel.htm", "");
    }
}
