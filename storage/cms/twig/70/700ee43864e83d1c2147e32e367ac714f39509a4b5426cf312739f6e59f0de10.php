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

/* Z:\domains\hatan.loc/themes/hatan/partials/menu/mega-menu.htm */
class __TwigTemplate_8b8c1c18ef16015d338d3076645f9ef8e0ae97b228d689e1ea8546d0d433856d extends \Twig\Template
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
        $tags = array("set" => 4, "if" => 5, "for" => 11);
        $filters = array("escape" => 15, "theme" => 35);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
                ['escape', 'theme'],
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
        $context["obCategoryList"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["CategoryList"] ?? null), "make", [0 => [0 => ($context["categoryId"] ?? null)]], "method", false, false, true, 4), "tree", [], "method", false, false, true, 4);
        // line 5
        if (twig_get_attribute($this->env, $this->source, ($context["obCategoryList"] ?? null), "isNotEmpty", [], "method", false, false, true, 5)) {
            // line 6
            echo "\t<div id=\"item1\" data-menuid=\"1\" class=\"megamenu show\">
\t\t<div class=\"container\">
\t\t\t<div class=\"block-menu\">
\t\t\t\t<div class=\"nav-megamenu\">
\t\t\t\t\t<div class='nav-megamenu-column' >
\t\t\t\t\t\t";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["obCategoryList"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["obCategory"]) {
                if ((twig_get_attribute($this->env, $this->source, $context["obCategory"], "product_count", [], "any", false, false, true, 11) > 0)) {
                    // line 12
                    echo "\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["obCategory"], "children", [], "any", false, false, true, 12), "isNotEmpty", [], "method", false, false, true, 12)) {
                        // line 13
                        echo "\t\t\t\t\t\t\t\t";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["obCategory"], "children", [], "any", false, false, true, 13));
                        foreach ($context['_seq'] as $context["_key"] => $context["obChildCategory"]) {
                            if ((twig_get_attribute($this->env, $this->source, $context["obChildCategory"], "product_count", [], "any", false, false, true, 13) > 0)) {
                                // line 14
                                echo "\t\t\t\t\t\t\t\t\t<div class=\"nav-item-megamenu\">
\t\t\t\t\t\t\t\t\t\t<span class=\"main-link-megamenu\" data-id=\"";
                                // line 15
                                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["obChildCategory"], "id", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
                                echo "\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                                // line 16
                                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["obChildCategory"], "getPageUrl", [0 => "catalog"], "method", false, false, true, 16), 16, $this->source), "html", null, true);
                                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                                // line 17
                                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["obChildCategory"], "name", [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
                                echo "
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<div class=\"overlay-menu-links\">
\t\t\t\t\t\t\t\t\t\t\t";
                                // line 21
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["obChildCategory"], "children", [], "any", false, false, true, 21));
                                foreach ($context['_seq'] as $context["_key"] => $context["obChildChildCategory"]) {
                                    if ((twig_get_attribute($this->env, $this->source, $context["obChildChildCategory"], "product_count", [], "any", false, false, true, 21) > 0)) {
                                        // line 22
                                        echo "\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["obChildChildCategory"], "getPageUrl", [0 => "catalog"], "method", false, false, true, 22), 22, $this->source), "html", null, true);
                                        echo "\" class=\"nav-item-link\">";
                                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["obChildChildCategory"], "name", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
                                        echo "</a>
\t\t\t\t\t\t\t\t\t\t\t";
                                    }
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['obChildChildCategory'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 24
                                echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                            }
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['obChildCategory'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 27
                        echo "\t\t\t\t\t\t\t";
                    }
                    // line 28
                    echo "\t\t\t\t\t\t";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['obCategory'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "\t\t\t\t\t</div>
\t\t\t\t\t<div class='nav-megamenu-column' >
\t\t\t\t\t\t<div class=\"nav-item-megamenu width-banners\">
\t\t\t\t\t\t\t<span class=\"main-link-megamenu\">Акции</span>
\t\t\t\t\t\t\t<div class=\"banner-wrapper\">
\t\t\t\t\t\t\t\t<div class=\"banner square small\">
\t\t\t\t\t\t\t\t\t<img src=\"";
            // line 35
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/dest/Banner1.png");
            echo "\" alt=\"\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"banner square small\">
\t\t\t\t\t\t\t\t\t<img src=\"";
            // line 38
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/dest/Bannerbig.png");
            echo "\" alt=\"\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
";
        }
    }

    public function getTemplateName()
    {
        return "Z:\\domains\\hatan.loc/themes/hatan/partials/menu/mega-menu.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 38,  149 => 35,  141 => 29,  134 => 28,  131 => 27,  122 => 24,  110 => 22,  105 => 21,  98 => 17,  94 => 16,  90 => 15,  87 => 14,  81 => 13,  78 => 12,  73 => 11,  66 => 6,  64 => 5,  62 => 4,);
    }

    public function getSourceContext()
    {
        return new Source("{##}
{# @var obCategory \\Lovata\\Shopaholic\\Classes\\Item\\CategoryItem #}
{# Get category list#}
{% set obCategoryList = CategoryList.make([categoryId]).tree() %}
{% if obCategoryList.isNotEmpty() %}
\t<div id=\"item1\" data-menuid=\"1\" class=\"megamenu show\">
\t\t<div class=\"container\">
\t\t\t<div class=\"block-menu\">
\t\t\t\t<div class=\"nav-megamenu\">
\t\t\t\t\t<div class='nav-megamenu-column' >
\t\t\t\t\t\t{% for obCategory in obCategoryList if obCategory.product_count > 0 %}
\t\t\t\t\t\t\t{% if obCategory.children.isNotEmpty() %}
\t\t\t\t\t\t\t\t{% for obChildCategory in obCategory.children if obChildCategory.product_count > 0 %}
\t\t\t\t\t\t\t\t\t<div class=\"nav-item-megamenu\">
\t\t\t\t\t\t\t\t\t\t<span class=\"main-link-megamenu\" data-id=\"{{ obChildCategory.id }}\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ obChildCategory.getPageUrl('catalog') }}\">
\t\t\t\t\t\t\t\t\t\t\t\t{{ obChildCategory.name }}
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<div class=\"overlay-menu-links\">
\t\t\t\t\t\t\t\t\t\t\t{% for obChildChildCategory in obChildCategory.children if obChildChildCategory.product_count > 0 %}
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ obChildChildCategory.getPageUrl('catalog') }}\" class=\"nav-item-link\">{{ obChildChildCategory.name }}</a>
\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</div>
\t\t\t\t\t<div class='nav-megamenu-column' >
\t\t\t\t\t\t<div class=\"nav-item-megamenu width-banners\">
\t\t\t\t\t\t\t<span class=\"main-link-megamenu\">Акции</span>
\t\t\t\t\t\t\t<div class=\"banner-wrapper\">
\t\t\t\t\t\t\t\t<div class=\"banner square small\">
\t\t\t\t\t\t\t\t\t<img src=\"{{ 'assets/images/dest/Banner1.png' | theme }}\" alt=\"\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"banner square small\">
\t\t\t\t\t\t\t\t\t<img src=\"{{ 'assets/images/dest/Bannerbig.png' | theme }}\" alt=\"\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
{% endif %}", "Z:\\domains\\hatan.loc/themes/hatan/partials/menu/mega-menu.htm", "");
    }
}
