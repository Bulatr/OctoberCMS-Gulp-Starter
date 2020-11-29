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

/* C:\OSPanel\domains\hatan.loc/themes/hatan/partials/category/category-tree/category-list.htm */
class __TwigTemplate_8d6c18b36c16e6cba9645ee516d720af6cd2db34250e98594a51fa33783463b7 extends \Twig\Template
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
        $tags = array("if" => 5, "for" => 7);
        $filters = array("escape" => 8);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
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
        // line 3
        echo "

";
        // line 5
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["obActiveCategory"] ?? null), "children", [], "any", false, false, true, 5), "isNotEmpty", [], "method", false, false, true, 5)) {
            echo "    
    <ul class=\"menu-nav\">
        ";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["obActiveCategory"] ?? null), "children", [], "any", false, false, true, 7));
            foreach ($context['_seq'] as $context["_key"] => $context["obParentCategory"]) {
                if ((twig_get_attribute($this->env, $this->source, $context["obParentCategory"], "product_count", [], "any", false, false, true, 7) > 0)) {
                    // line 8
                    echo "        <li class=\"menu-nav__item\" data-id=\"";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["obParentCategory"], "id", [], "any", false, false, true, 8), 8, $this->source), "html", null, true);
                    echo "\">
            <span class=\"menu-nav__item--main\"><a href=\"";
                    // line 9
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["obParentCategory"], "getPageUrl", [0 => "catalog"], "method", false, false, true, 9), 9, $this->source), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["obParentCategory"], "name", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
                    echo "</a></span>
             ";
                    // line 10
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["obParentCategory"], "children", [], "any", false, false, true, 10), "isNotEmpty", [], "method", false, false, true, 10)) {
                        // line 11
                        echo "            <div class=\"menu-nav__item-submenu\">
                ";
                        // line 12
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["obParentCategory"], "children", [], "any", false, false, true, 12));
                        foreach ($context['_seq'] as $context["_key"] => $context["obChildCategory"]) {
                            if ((twig_get_attribute($this->env, $this->source, $context["obChildCategory"], "product_count", [], "any", false, false, true, 12) > 0)) {
                                // line 13
                                echo "                <a href=\"";
                                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["obChildCategory"], "getPageUrl", [0 => "catalog"], "method", false, false, true, 13), 13, $this->source), "html", null, true);
                                echo "\" class=\"item-submenu__link\">";
                                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["obChildCategory"], "name", [], "any", false, false, true, 13), 13, $this->source), "html", null, true);
                                echo "</a>
                
                ";
                            }
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['obChildCategory'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 16
                        echo "            </div>\t
            ";
                    }
                    // line 17
                    echo "\t\t\t\t\t\t
        </li>
        ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['obParentCategory'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "        
    </ul>
";
        }
    }

    public function getTemplateName()
    {
        return "C:\\OSPanel\\domains\\hatan.loc/themes/hatan/partials/category/category-tree/category-list.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 19,  114 => 17,  110 => 16,  97 => 13,  92 => 12,  89 => 11,  87 => 10,  81 => 9,  76 => 8,  71 => 7,  66 => 5,  62 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("{# @var obActiveCategory \\Lovata\\Shopaholic\\Classes\\Item\\CategoryItem #}
{# Get category list#}


{% if obActiveCategory.children.isNotEmpty() %}    
    <ul class=\"menu-nav\">
        {% for obParentCategory in obActiveCategory.children if obParentCategory.product_count > 0 %}
        <li class=\"menu-nav__item\" data-id=\"{{ obParentCategory.id }}\">
            <span class=\"menu-nav__item--main\"><a href=\"{{ obParentCategory.getPageUrl('catalog') }}\">{{ obParentCategory.name }}</a></span>
             {% if obParentCategory.children.isNotEmpty() %}
            <div class=\"menu-nav__item-submenu\">
                {% for obChildCategory in obParentCategory.children if obChildCategory.product_count > 0 %}
                <a href=\"{{ obChildCategory.getPageUrl('catalog') }}\" class=\"item-submenu__link\">{{ obChildCategory.name }}</a>
                
                {% endfor %}
            </div>\t
            {% endif %}\t\t\t\t\t\t
        </li>
        {% endfor %}        
    </ul>
{% endif %}", "C:\\OSPanel\\domains\\hatan.loc/themes/hatan/partials/category/category-tree/category-list.htm", "");
    }
}
