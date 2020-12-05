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

/* Z:\domains\hatan.loc/themes/hatan/layouts/default.htm */
class __TwigTemplate_d162eb68792f8bcf1c9507e18b16951200f11d562d9508a1fc8f666468f18b07 extends \Twig\Template
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
        $tags = array("component" => 1, "set" => 2, "if" => 3, "partial" => 8, "page" => 13);
        $filters = array();
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['component', 'set', 'if', 'partial', 'page'],
                [],
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
        // line 1
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("Cart"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 2
        $context["sPageTitle"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 2), "title", [], "any", false, false, true, 2);
        // line 3
        if (twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "isNotEmpty", [], "method", false, false, true, 3)) {
            // line 4
            $context["sPageTitle"] = ("Купить " . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "name", [], "any", false, false, true, 4), 4, $this->source));
        } else {
            // line 6
            $context["sPageTitle"] = twig_get_attribute($this->env, $this->source, ($context["obActiveCategory"] ?? null), "name", [], "any", false, false, true, 6);
        }
        // line 8
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['class'] = "myclass"        ;
        $context['__cms_partial_params']['sPageTitle'] = ($context["sPageTitle"] ?? null)        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 9
        echo "\t
\t<section id=\"body-site\">
\t\t<div class=\"mega-menu-wrapper\">
\t\t</div>
\t\t";
        // line 13
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 14
        echo "\t</section>

";
        // line 16
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "Z:\\domains\\hatan.loc/themes/hatan/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 16,  90 => 14,  88 => 13,  82 => 9,  76 => 8,  73 => 6,  70 => 4,  68 => 3,  66 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% component 'Cart' %}{##}
{% set sPageTitle = this.page.title %}
{% if obProduct.isNotEmpty() %}
{%  set sPageTitle = \"Купить \"~obProduct.name %}
{% else %}
{% set sPageTitle = obActiveCategory.name %}
{% endif %}
{% partial 'header' class='myclass' sPageTitle=sPageTitle %}
\t
\t<section id=\"body-site\">
\t\t<div class=\"mega-menu-wrapper\">
\t\t</div>
\t\t{% page %}
\t</section>

{% partial 'footer' %}", "Z:\\domains\\hatan.loc/themes/hatan/layouts/default.htm", "");
    }
}
