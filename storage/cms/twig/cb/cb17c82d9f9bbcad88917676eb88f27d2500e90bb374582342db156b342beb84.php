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

/* Z:\domains\hatan.loc/themes/hatan/partials/header/summ_count_header.htm */
class __TwigTemplate_fa4498105289fad1cd923ebb102aa210eb610af6f2e2aed6cf43a9919d1bbe88 extends \Twig\Template
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
        $tags = array("set" => 2, "if" => 4);
        $filters = array("escape" => 5);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
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
        $context["obCartPositionList"] = twig_get_attribute($this->env, $this->source, ($context["Cart"] ?? null), "get", [], "method", false, false, true, 2);
        // line 3
        $context["obCartPositionListCount"] = twig_get_attribute($this->env, $this->source, ($context["obCartPositionList"] ?? null), "getTotalQuantity", [], "method", false, false, true, 3);
        // line 4
        if ((($context["obCartPositionListCount"] ?? null) > 0)) {
            // line 5
            echo "    <div class=\"count\" data-Position-List-Count=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["obCartPositionListCount"] ?? null), 5, $this->source), "html", null, true);
            echo "\" > ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["obCartPositionListCount"] ?? null), 5, $this->source), "html", null, true);
            echo " </div>
";
        }
        // line 7
        if ((twig_get_attribute($this->env, $this->source, ($context["obCartPositionList"] ?? null), "getTotalPriceValue", [], "method", false, false, true, 7) > 0)) {
            // line 8
            echo "    <div class=\"summ\" data-Position-Total-Price=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obCartPositionList"] ?? null), "getTotalPriceValue", [], "method", false, false, true, 8), 8, $this->source), "html", null, true);
            echo "\" > ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obCartPositionList"] ?? null), "getTotalPrice", [], "method", false, false, true, 8), 8, $this->source), "html", null, true);
            echo " <span class=\"rub\"></span> </div>
";
        }
    }

    public function getTemplateName()
    {
        return "Z:\\domains\\hatan.loc/themes/hatan/partials/header/summ_count_header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 8,  76 => 7,  68 => 5,  66 => 4,  64 => 3,  62 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{##}
{% set obCartPositionList = Cart.get() %}
{% set obCartPositionListCount = obCartPositionList.getTotalQuantity() %}
{% if obCartPositionListCount > 0 %}
    <div class=\"count\" data-Position-List-Count=\"{{obCartPositionListCount}}\" > {{obCartPositionListCount}} </div>
{% endif %}
{% if obCartPositionList.getTotalPriceValue() > 0 %}
    <div class=\"summ\" data-Position-Total-Price=\"{{ obCartPositionList.getTotalPriceValue() }}\" > {{ obCartPositionList.getTotalPrice() }} <span class=\"rub\"></span> </div>
{% endif %}", "Z:\\domains\\hatan.loc/themes/hatan/partials/header/summ_count_header.htm", "");
    }
}
