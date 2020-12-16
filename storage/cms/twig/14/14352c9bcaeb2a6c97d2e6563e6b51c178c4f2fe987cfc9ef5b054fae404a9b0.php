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

/* Z:\domains\hatan.loc/themes/hatan/layouts/order-layout.htm */
class __TwigTemplate_fec2c7bfba8fb0f1e8b5361f7e9d95bce830d5303294cf9d8ccdc0e024a87dbf extends \Twig\Template
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
        $tags = array("set" => 3, "if" => 4, "partial" => 11, "page" => 16);
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
            echo "\t";
            $context["sPageTitle"] = ("Купить " . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "name", [], "any", false, false, true, 5), 5, $this->source));
        } else {
            // line 7
            echo "\t";
            if (twig_get_attribute($this->env, $this->source, ($context["obActiveCategory"] ?? null), "isNotEmpty", [], "method", false, false, true, 7)) {
                // line 8
                echo "\t\t";
                $context["sPageTitle"] = twig_get_attribute($this->env, $this->source, ($context["obActiveCategory"] ?? null), "name", [], "any", false, false, true, 8);
                // line 9
                echo "\t";
            }
        }
        // line 11
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['class'] = "myclass"        ;
        $context['__cms_partial_params']['sPageTitle'] = ($context["sPageTitle"] ?? null)        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("header/header-minimal"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 12
        echo "\t
\t<section id=\"body-site\">
\t\t<div class=\"mega-menu-wrapper\">
\t\t</div>
\t\t";
        // line 16
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 17
        echo "\t</section>

";
        // line 19
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "Z:\\domains\\hatan.loc/themes/hatan/layouts/order-layout.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 19,  97 => 17,  95 => 16,  89 => 12,  83 => 11,  79 => 9,  76 => 8,  73 => 7,  69 => 5,  67 => 4,  65 => 3,  62 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{##}

{% set sPageTitle = this.page.title %}
{% if obProduct.isNotEmpty() %}
\t{%  set sPageTitle = \"Купить \"~obProduct.name %}
{% else %}
\t{% if obActiveCategory.isNotEmpty() %}
\t\t{% set sPageTitle = obActiveCategory.name %}
\t{% endif %}
{% endif %}
{% partial 'header/header-minimal' class='myclass' sPageTitle = sPageTitle %}
\t
\t<section id=\"body-site\">
\t\t<div class=\"mega-menu-wrapper\">
\t\t</div>
\t\t{% page %}
\t</section>

{% partial 'footer' %}", "Z:\\domains\\hatan.loc/themes/hatan/layouts/order-layout.htm", "");
    }
}
