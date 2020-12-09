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
        $tags = array("set" => 3, "if" => 4, "partial" => 9, "page" => 14);
        $filters = array();
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'partial', 'page'],
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
        // line 2
        echo "
";
        // line 3
        $context["sPageTitle"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 3), "title", [], "any", false, false, true, 3);
        // line 4
        if (twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "isNotEmpty", [], "method", false, false, true, 4)) {
            // line 5
            $context["sPageTitle"] = ("Купить " . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "name", [], "any", false, false, true, 5), 5, $this->source));
        } else {
            // line 7
            $context["sPageTitle"] = twig_get_attribute($this->env, $this->source, ($context["obActiveCategory"] ?? null), "name", [], "any", false, false, true, 7);
        }
        // line 9
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['class'] = "myclass"        ;
        $context['__cms_partial_params']['sPageTitle'] = ($context["sPageTitle"] ?? null)        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 10
        echo "\t
\t<section id=\"body-site\">
\t\t<div class=\"mega-menu-wrapper\">
\t\t</div>
\t\t";
        // line 14
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 15
        echo "\t</section>

";
        // line 17
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
        return array (  93 => 17,  89 => 15,  87 => 14,  81 => 10,  75 => 9,  72 => 7,  69 => 5,  67 => 4,  65 => 3,  62 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{##}

{% set sPageTitle = this.page.title %}
{% if obProduct.isNotEmpty() %}
{%  set sPageTitle = \"Купить \"~obProduct.name %}
{% else %}
{% set sPageTitle = obActiveCategory.name %}
{% endif %}
{% partial 'header' class='myclass' sPageTitle = sPageTitle %}
\t
\t<section id=\"body-site\">
\t\t<div class=\"mega-menu-wrapper\">
\t\t</div>
\t\t{% page %}
\t</section>

{% partial 'footer' %}", "Z:\\domains\\hatan.loc/themes/hatan/layouts/default.htm", "");
    }
}
