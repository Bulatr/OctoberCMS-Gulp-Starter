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

/* Z:\domains\hatan.loc/themes/hatan/partials/product/offer/product-offer-list.htm */
class __TwigTemplate_cd3dba22bff3b27430b9220a9544e16918f652bcef2a57461f3291ecadddb040 extends \Twig\Template
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
        $tags = array("if" => 3, "for" => 10);
        $filters = array("var_dump" => 11, "escape" => 12);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['var_dump', 'escape'],
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
        if (twig_get_attribute($this->env, $this->source, ($context["obOfferList"] ?? null), "isNotEmpty", [], "method", false, false, true, 3)) {
            // line 4
            echo "    <div class=\"form-group product-property\" >  
        <label class=\"property-values__label\" for=\"offersProduct\">Выберите вариант</label>
        <select
            class=\"form-control property-values__select offers\"                                            
            name=\"offer\"
            id=\"offersProduct\">
            ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["obOfferListCopy"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["obOffer"]) {
                // line 11
                echo "                ";
                echo call_user_func_array($this->env->getFilter('var_dump')->getCallable(), [$this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["obOffer"], "price", [], "any", false, false, true, 11), 11, $this->source)]);
                echo "                                        
                <option value=\"";
                // line 12
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["obOffer"], "id", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
                echo "\" >";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["obOffer"], "name", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
                echo "</option>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['obOffer'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "        </select>
    </div>
    
";
        }
    }

    public function getTemplateName()
    {
        return "Z:\\domains\\hatan.loc/themes/hatan/partials/product/offer/product-offer-list.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 14,  84 => 12,  79 => 11,  75 => 10,  67 => 4,  65 => 3,  62 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{##}

{% if obOfferList.isNotEmpty() %}
    <div class=\"form-group product-property\" >  
        <label class=\"property-values__label\" for=\"offersProduct\">Выберите вариант</label>
        <select
            class=\"form-control property-values__select offers\"                                            
            name=\"offer\"
            id=\"offersProduct\">
            {% for obOffer in obOfferListCopy %}
                {{ obOffer.price | var_dump}}                                        
                <option value=\"{{ obOffer.id }}\" >{{ obOffer.name }}</option>
            {% endfor %}
        </select>
    </div>
    
{% endif %}", "Z:\\domains\\hatan.loc/themes/hatan/partials/product/offer/product-offer-list.htm", "");
    }
}
