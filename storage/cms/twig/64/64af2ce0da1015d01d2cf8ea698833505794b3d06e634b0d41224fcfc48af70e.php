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

/* Z:\domains\hatan.loc/themes/hatan/partials/category/category-tree/category-list.htm */
class __TwigTemplate_377bb6afaeeb84febfe33d0b073f45234aff5e04e0302110e3d4722a2cf5d71c extends \Twig\Template
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
        $tags = array("if" => 6, "for" => 8);
        $filters = array("escape" => 9);
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
        // line 4
        echo "

";
        // line 6
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["obActiveCategory"] ?? null), "children", [], "any", false, false, true, 6), "isNotEmpty", [], "method", false, false, true, 6)) {
            echo "    
    <ul class=\"menu-nav\">
        ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["obActiveCategory"] ?? null), "children", [], "any", false, false, true, 8));
            foreach ($context['_seq'] as $context["_key"] => $context["obParentCategory"]) {
                if ((twig_get_attribute($this->env, $this->source, $context["obParentCategory"], "product_count", [], "any", false, false, true, 8) > 0)) {
                    // line 9
                    echo "        <li class=\"menu-nav__item\" data-id=\"";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["obParentCategory"], "id", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
                    echo "\">
            <span class=\"menu-nav__item--main\"><a href=\"";
                    // line 10
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["obParentCategory"], "getPageUrl", [0 => "catalog"], "method", false, false, true, 10), 10, $this->source), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["obParentCategory"], "name", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
                    echo "</a></span>
             ";
                    // line 11
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["obParentCategory"], "children", [], "any", false, false, true, 11), "isNotEmpty", [], "method", false, false, true, 11)) {
                        // line 12
                        echo "            <div class=\"menu-nav__item-submenu\">
                ";
                        // line 13
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["obParentCategory"], "children", [], "any", false, false, true, 13));
                        foreach ($context['_seq'] as $context["_key"] => $context["obChildCategory"]) {
                            if ((twig_get_attribute($this->env, $this->source, $context["obChildCategory"], "product_count", [], "any", false, false, true, 13) > 0)) {
                                // line 14
                                echo "                <a href=\"";
                                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["obChildCategory"], "getPageUrl", [0 => "catalog"], "method", false, false, true, 14), 14, $this->source), "html", null, true);
                                echo "\" class=\"item-submenu__link\">";
                                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["obChildCategory"], "name", [], "any", false, false, true, 14), 14, $this->source), "html", null, true);
                                echo "</a>
                
                ";
                            }
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['obChildCategory'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 17
                        echo "            </div>\t
            ";
                    }
                    // line 18
                    echo "\t\t\t\t\t\t
        </li>
        ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['obParentCategory'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "        
    </ul>
";
        }
    }

    public function getTemplateName()
    {
        return "Z:\\domains\\hatan.loc/themes/hatan/partials/category/category-tree/category-list.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 20,  114 => 18,  110 => 17,  97 => 14,  92 => 13,  89 => 12,  87 => 11,  81 => 10,  76 => 9,  71 => 8,  66 => 6,  62 => 4,);
    }

    public function getSourceContext()
    {
        return new Source("{##}
{# @var obActiveCategory \\Lovata\\Shopaholic\\Classes\\Item\\CategoryItem #}
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
{% endif %}", "Z:\\domains\\hatan.loc/themes/hatan/partials/category/category-tree/category-list.htm", "");
    }
}
