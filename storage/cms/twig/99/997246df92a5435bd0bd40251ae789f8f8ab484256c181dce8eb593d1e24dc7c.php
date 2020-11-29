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

/* C:\OSPanel\domains\hatan.loc/themes/hatan/partials/breadcrumbs/breadcrumbs.htm */
class __TwigTemplate_938be8b5abae0071ccc2ace50615233ce01bd9efaa3aac0e48803069c663152f extends \Twig\Template
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
        $tags = array("for" => 2, "if" => 3);
        $filters = array("escape" => 5);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if'],
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
        // line 1
        echo "<ul class=\"breadcrumbs\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["arBreadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 3
            echo "        ";
            if (( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, true, 3)) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 3)))) {
                // line 4
                echo "            ";
                if (twig_get_attribute($this->env, $this->source, $context["item"], "active", [], "any", false, false, true, 4)) {
                    // line 5
                    echo "                <li class=\"item-breadcrumbs active\">";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, true, 5), 5, $this->source), "html", null, true);
                    echo "</li>                
            ";
                } else {
                    // line 7
                    echo "                <li class=\"item-breadcrumbs\"><a href=\"";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 7), 7, $this->source), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, true, 7), 7, $this->source), "html", null, true);
                    echo "</a> </li>                
            ";
                }
                // line 9
                echo "        ";
            }
            // line 10
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "  
</ul>";
    }

    public function getTemplateName()
    {
        return "C:\\OSPanel\\domains\\hatan.loc/themes/hatan/partials/breadcrumbs/breadcrumbs.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 10,  89 => 9,  81 => 7,  75 => 5,  72 => 4,  69 => 3,  65 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<ul class=\"breadcrumbs\">
    {% for item in arBreadcrumbs %}
        {% if item.name is not empty and item.url is not empty %}
            {% if item.active %}
                <li class=\"item-breadcrumbs active\">{{ item.name }}</li>                
            {% else %}
                <li class=\"item-breadcrumbs\"><a href=\"{{ item.url }}\">{{ item.name }}</a> </li>                
            {% endif %}
        {% endif %}
    {% endfor %}  
</ul>", "C:\\OSPanel\\domains\\hatan.loc/themes/hatan/partials/breadcrumbs/breadcrumbs.htm", "");
    }
}
