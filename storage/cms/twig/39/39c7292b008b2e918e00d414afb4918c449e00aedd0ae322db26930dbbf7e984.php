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

/* Z:\domains\hatan.loc/themes/hatan/partials/product/gallery/product-gallery.htm */
class __TwigTemplate_d8de786ea86e016eccadd6ca53553bf42d2ce5b7317b82535ccfe9b9553b775f extends \Twig\Template
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
        $tags = array("if" => 13, "for" => 14);
        $filters = array("theme" => 7, "escape" => 15);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['theme', 'escape'],
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
    <div class=\"product-gallery\">
        <div class=\"product-gallery-wrapper\">
            <div class=\"wishlist\">
                <div class=\"hearth outline show\">
                    <img src=\"";
        // line 7
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/Hearth_Outline.svg");
        echo "\" alt=\"\">
                </div>
                <div class=\"hearth filled\">
                    <img src=\"";
        // line 10
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/Hearth_Filled.svg");
        echo "\" alt=\"\">
                </div>
            </div>     
            ";
        // line 13
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["obOfferItem"] ?? null), "images", [], "any", false, false, true, 13))) {
            // line 14
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["obOfferItem"] ?? null), "images", [], "any", false, false, true, 14));
            foreach ($context['_seq'] as $context["_key"] => $context["obImage"]) {
                // line 15
                echo "                    <div class=\"product-main active\" id=\"dataimage-";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["obImage"], "id", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
                echo "\" data-imageid=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["obImage"], "id", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
                echo "\">
                        <img src=\"";
                // line 16
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["obImage"], "getPath", [], "method", false, false, true, 16), 16, $this->source), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["obImage"], "description", [], "any", false, false, true, 16), 16, $this->source), "html", null, true);
                echo "\">
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['obImage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "            ";
        } else {
            // line 20
            echo "                ";
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "images", [], "any", false, false, true, 20))) {
                // line 21
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "images", [], "any", false, false, true, 21));
                foreach ($context['_seq'] as $context["_key"] => $context["obImage"]) {
                    // line 22
                    echo "                        <div class=\"product-main active\" id=\"dataimage-";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["obImage"], "id", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
                    echo "\" data-imageid=\"";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["obImage"], "id", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
                    echo "\">
                            <img src=\"";
                    // line 23
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["obImage"], "getPath", [], "method", false, false, true, 23), 23, $this->source), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["obImage"], "description", [], "any", false, false, true, 23), 23, $this->source), "html", null, true);
                    echo "\">
                        </div>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['obImage'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 26
                echo "                ";
            }
            // line 27
            echo "            ";
        }
        // line 28
        echo "        </div>
        <ul class=\"product-gallery-trumb\">
            ";
        // line 30
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["obOfferItem"] ?? null), "images", [], "any", false, false, true, 30))) {
            // line 31
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["obOfferItem"] ?? null), "images", [], "any", false, false, true, 31));
            foreach ($context['_seq'] as $context["_key"] => $context["obImage"]) {
                // line 32
                echo "                    <li class=\"product-gallery-trumbnail\" data-trumbid=\"dataimage-";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["obImage"], "id", [], "any", false, false, true, 32), 32, $this->source), "html", null, true);
                echo "\">
                        <img src=\"";
                // line 33
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["obImage"], "getPath", [], "method", false, false, true, 33), 33, $this->source), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["obImage"], "description", [], "any", false, false, true, 33), 33, $this->source), "html", null, true);
                echo "\">
                    </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['obImage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "            ";
        } else {
            // line 37
            echo "                ";
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "images", [], "any", false, false, true, 37))) {
                // line 38
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "images", [], "any", false, false, true, 38));
                foreach ($context['_seq'] as $context["_key"] => $context["obImage"]) {
                    // line 39
                    echo "                        <li class=\"product-gallery-trumbnail\" data-trumbid=\"dataimage-";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["obImage"], "id", [], "any", false, false, true, 39), 39, $this->source), "html", null, true);
                    echo "\">
                            <img src=\"";
                    // line 40
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["obImage"], "getPath", [], "method", false, false, true, 40), 40, $this->source), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["obImage"], "description", [], "any", false, false, true, 40), 40, $this->source), "html", null, true);
                    echo "\">
                        </li>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['obImage'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 43
                echo "                ";
            }
            echo " 
            ";
        }
        // line 45
        echo "        </ul>
    </div>";
    }

    public function getTemplateName()
    {
        return "Z:\\domains\\hatan.loc/themes/hatan/partials/product/gallery/product-gallery.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 45,  195 => 43,  184 => 40,  179 => 39,  174 => 38,  171 => 37,  168 => 36,  157 => 33,  152 => 32,  147 => 31,  145 => 30,  141 => 28,  138 => 27,  135 => 26,  124 => 23,  117 => 22,  112 => 21,  109 => 20,  106 => 19,  95 => 16,  88 => 15,  83 => 14,  81 => 13,  75 => 10,  69 => 7,  62 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{##}

    <div class=\"product-gallery\">
        <div class=\"product-gallery-wrapper\">
            <div class=\"wishlist\">
                <div class=\"hearth outline show\">
                    <img src=\"{{'assets/images/Hearth_Outline.svg' | theme }}\" alt=\"\">
                </div>
                <div class=\"hearth filled\">
                    <img src=\"{{ 'assets/images/Hearth_Filled.svg' | theme }}\" alt=\"\">
                </div>
            </div>     
            {% if obOfferItem.images is not empty %}
                {% for obImage in obOfferItem.images %}
                    <div class=\"product-main active\" id=\"dataimage-{{obImage.id}}\" data-imageid=\"{{obImage.id}}\">
                        <img src=\"{{ obImage.getPath() }}\" alt=\"{{ obImage.description }}\">
                    </div>
                {% endfor %}
            {% else %}
                {% if obProduct.images is not empty %}
                    {% for obImage in obProduct.images %}
                        <div class=\"product-main active\" id=\"dataimage-{{obImage.id}}\" data-imageid=\"{{obImage.id}}\">
                            <img src=\"{{ obImage.getPath() }}\" alt=\"{{ obImage.description }}\">
                        </div>
                    {% endfor %}
                {% endif %}
            {% endif %}
        </div>
        <ul class=\"product-gallery-trumb\">
            {% if obOfferItem.images is not empty %}
                {% for obImage in obOfferItem.images %}
                    <li class=\"product-gallery-trumbnail\" data-trumbid=\"dataimage-{{obImage.id}}\">
                        <img src=\"{{ obImage.getPath() }}\" alt=\"{{ obImage.description }}\">
                    </li>
                {% endfor %}
            {% else %}
                {% if obProduct.images is not empty %}
                    {% for obImage in obProduct.images %}
                        <li class=\"product-gallery-trumbnail\" data-trumbid=\"dataimage-{{obImage.id}}\">
                            <img src=\"{{ obImage.getPath() }}\" alt=\"{{ obImage.description }}\">
                        </li>
                    {% endfor %}
                {% endif %} 
            {% endif %}
        </ul>
    </div>", "Z:\\domains\\hatan.loc/themes/hatan/partials/product/gallery/product-gallery.htm", "");
    }
}
