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

/* Z:\domains\hatan.loc/themes/hatan/partials/menu/main-menu-wrapper.htm */
class __TwigTemplate_eec34caad6fee05f203133a24bf724305fe7f52b71e4d1529017dbd32f8f9267 extends \Twig\Template
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
        $tags = array("set" => 9, "if" => 10, "for" => 13);
        $filters = array("escape" => 15);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
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
        echo "<div class=\"main-menu-wrapper\">
\t<nav class=\"navbar navbar-expand-lg\">
\t\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t</button>
\t\t";
        // line 8
        echo "\t\t";
        // line 9
        echo "\t\t";
        $context["obCategoryList"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["CategoryList"] ?? null), "make", [], "method", false, false, true, 9), "active", [], "method", false, false, true, 9), "tree", [], "method", false, false, true, 9);
        // line 10
        echo "\t\t";
        if (twig_get_attribute($this->env, $this->source, ($context["obCategoryList"] ?? null), "isNotEmpty", [], "method", false, false, true, 10)) {
            // line 11
            echo "\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
\t\t\t\t<ul class=\"navbar-nav mr-auto\">
\t\t\t\t\t";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["obCategoryList"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["obCategory"]) {
                if ((twig_get_attribute($this->env, $this->source, $context["obCategory"], "product_count", [], "any", false, false, true, 13) > 0)) {
                    // line 14
                    echo "\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
                    // line 15
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["obCategory"], "getPageUrl", [0 => "catalog"], "method", false, false, true, 15), 15, $this->source), "html", null, true);
                    echo "\"
\t\t\t\t\t\t\t\tdata-mainmenuitem=\"item";
                    // line 16
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["obCategory"], "id", [], "any", false, false, true, 16), 16, $this->source), "html", null, true);
                    echo "\"
\t\t\t\t\t\t\t\tdata-id=\"";
                    // line 17
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["obCategory"], "id", [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t";
                    // line 18
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["obCategory"], "name", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
                    echo "
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['obCategory'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "\t\t\t\t</ul>
\t\t\t</div>
\t\t";
        }
        // line 25
        echo "\t</nav>
</div>";
    }

    public function getTemplateName()
    {
        return "Z:\\domains\\hatan.loc/themes/hatan/partials/menu/main-menu-wrapper.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 25,  112 => 22,  101 => 18,  97 => 17,  93 => 16,  89 => 15,  86 => 14,  81 => 13,  77 => 11,  74 => 10,  71 => 9,  69 => 8,  62 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{##}
<div class=\"main-menu-wrapper\">
\t<nav class=\"navbar navbar-expand-lg\">
\t\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t</button>
\t\t{# @var obCategory \\Lovata\\Shopaholic\\Classes\\Item\\CategoryItem #}
\t\t{# Get category list#}
\t\t{% set obCategoryList = CategoryList.make().active().tree() %}
\t\t{% if obCategoryList.isNotEmpty() %}
\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
\t\t\t\t<ul class=\"navbar-nav mr-auto\">
\t\t\t\t\t{% for obCategory in obCategoryList if obCategory.product_count > 0 %}
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{ obCategory.getPageUrl('catalog') }}\"
\t\t\t\t\t\t\t\tdata-mainmenuitem=\"item{{ obCategory.id }}\"
\t\t\t\t\t\t\t\tdata-id=\"{{ obCategory.id }}\">
\t\t\t\t\t\t\t\t{{ obCategory.name }}
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t{% endfor %}
\t\t\t\t</ul>
\t\t\t</div>
\t\t{% endif %}
\t</nav>
</div>", "Z:\\domains\\hatan.loc/themes/hatan/partials/menu/main-menu-wrapper.htm", "");
    }
}
