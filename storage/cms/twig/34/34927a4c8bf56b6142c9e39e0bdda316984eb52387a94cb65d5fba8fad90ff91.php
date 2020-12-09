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

/* Z:\domains\hatan.loc/themes/hatan/partials/product/price/price-product.htm */
class __TwigTemplate_cfa094cd8c78958874600915547f5d76e95888e406e3ba82027bdd64490a8200 extends \Twig\Template
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
        $tags = array("if" => 3);
        $filters = array("escape" => 4);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
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
        echo "<div class=\"price\">
    ";
        // line 3
        if ((twig_get_attribute($this->env, $this->source, ($context["obOfferItem"] ?? null), "price_value", [], "any", false, false, true, 3) < twig_get_attribute($this->env, $this->source, ($context["obOfferItem"] ?? null), "old_price_value", [], "any", false, false, true, 3))) {
            // line 4
            echo "        <div class=\"old-price\" data-old-price-value = \"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obOfferItem"] ?? null), "old_price_value", [], "any", false, false, true, 4), 4, $this->source), "html", null, true);
            echo "\" > ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obOfferItem"] ?? null), "old_price", [], "any", false, false, true, 4), 4, $this->source), "html", null, true);
            echo " </div>
    ";
        }
        // line 6
        echo "    <div class=\"current-price\" data-price-value=\"";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obOfferItem"] ?? null), "price_value", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
        echo "\" > 
        ";
        // line 7
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obOfferItem"] ?? null), "price", [], "any", false, false, true, 7), 7, $this->source), "html", null, true);
        echo "
        <span class=\"rub\" itemprop=\"priceCurrency\" content=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obOfferItem"] ?? null), "currency_code", [], "any", false, false, true, 8), 8, $this->source), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obOfferItem"] ?? null), "currency", [], "any", false, false, true, 8), 8, $this->source), "html", null, true);
        echo "</span> 
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "Z:\\domains\\hatan.loc/themes/hatan/partials/product/price/price-product.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 8,  80 => 7,  75 => 6,  67 => 4,  65 => 3,  62 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{##}
<div class=\"price\">
    {% if obOfferItem.price_value < obOfferItem.old_price_value %}
        <div class=\"old-price\" data-old-price-value = \"{{ obOfferItem.old_price_value }}\" > {{ obOfferItem.old_price }} </div>
    {% endif %}
    <div class=\"current-price\" data-price-value=\"{{ obOfferItem.price_value }}\" > 
        {{ obOfferItem.price }}
        <span class=\"rub\" itemprop=\"priceCurrency\" content=\"{{ obOfferItem.currency_code }}\">{{ obOfferItem.currency }}</span> 
    </div>
</div>", "Z:\\domains\\hatan.loc/themes/hatan/partials/product/price/price-product.htm", "");
    }
}
