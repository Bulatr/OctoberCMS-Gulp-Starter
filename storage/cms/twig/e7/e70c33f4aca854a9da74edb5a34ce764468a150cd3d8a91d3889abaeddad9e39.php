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

/* Z:\domains\hatan.loc/themes/hatan/partials/product/gallery/product-gallery-modal.htm */
class __TwigTemplate_56d56307ad3bdfa0847a61850b30abbd81149a6cbbeb3ae03c601483cc30a0e2 extends \Twig\Template
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
        $tags = array("if" => 17, "for" => 18);
        $filters = array("theme" => 7, "escape" => 20);
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
        echo "<div class=\"modal-dialog\">
    <div class=\"modal-content\">
        <div class=\"modal-header\">
            <div></div>
            <div class=\"close\">
                <img src=\"";
        // line 7
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/Cross.svg");
        echo "\" alt=\"\">
            </div>
        </div>
        <div class=\"modal-body\">
            <div class=\"modal-icon left\">
                <img id=\"modal-image-left\" src=\"";
        // line 12
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/Direction-Left.svg");
        echo "\" alt=\"\">
            </div>
            <div class=\"modal-wrap-images\">

                ";
        // line 17
        echo "                ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["obOfferItem"] ?? null), "images", [], "any", false, false, true, 17))) {
            // line 18
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["obOfferItem"] ?? null), "images", [], "any", false, false, true, 18));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["obImage"]) {
                // line 19
                echo "                        <img 
                            src=\"";
                // line 20
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["obImage"], "getPath", [], "method", false, false, true, 20), 20, $this->source), "html", null, true);
                echo "\" 
                            alt=\"";
                // line 21
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["obImage"], "description", [], "any", false, false, true, 21), 21, $this->source), "html", null, true);
                echo "\" id=\"dataimage-";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["obImage"], "id", [], "any", false, false, true, 21), 21, $this->source), "html", null, true);
                echo "\" 
                            data-modalimageid=\"modal-image-";
                // line 22
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["obImage"], "id", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
                echo "\" 
                            class=\"modal-image 
                            ";
                // line 24
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, true, 24)) {
                    // line 25
                    echo "                            show
                            ";
                }
                // line 27
                echo "                            \">                        
                    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['obImage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "                ";
        } else {
            // line 30
            echo "                    ";
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "images", [], "any", false, false, true, 30))) {
                // line 31
                echo "                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "images", [], "any", false, false, true, 31));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["obImage"]) {
                    // line 32
                    echo "                        <img 
                            src=\"";
                    // line 33
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["obImage"], "getPath", [], "method", false, false, true, 33), 33, $this->source), "html", null, true);
                    echo "\" 
                            alt=\"";
                    // line 34
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["obImage"], "description", [], "any", false, false, true, 34), 34, $this->source), "html", null, true);
                    echo "\" id=\"dataimage-";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["obImage"], "id", [], "any", false, false, true, 34), 34, $this->source), "html", null, true);
                    echo "\" 
                            data-modalimageid=\"modal-image-";
                    // line 35
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["obImage"], "id", [], "any", false, false, true, 35), 35, $this->source), "html", null, true);
                    echo "\" 
                            class=\"modal-image 
                            ";
                    // line 37
                    if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, true, 37)) {
                        // line 38
                        echo "                            show
                            ";
                    }
                    // line 40
                    echo "                            \">                        
                    ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['obImage'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 42
                echo "                    ";
            }
            // line 43
            echo "                ";
        }
        // line 44
        echo "            </div>
            <div class=\"modal-icon right\">
                <img id=\"modal-image-right\" src=\"";
        // line 46
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/Direction-Right.svg");
        echo "\" alt=\"\">
            </div>
        </div>
        <div class=\"modal-footer\">
            <div class=\"modal-images-thumbs\">

                ";
        // line 53
        echo "                ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["obOfferItem"] ?? null), "images", [], "any", false, false, true, 53))) {
            // line 54
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["obOfferItem"] ?? null), "images", [], "any", false, false, true, 54));
            foreach ($context['_seq'] as $context["_key"] => $context["obImage"]) {
                // line 55
                echo "                        <img 
                            src=\"";
                // line 56
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["obImage"], "getPath", [], "method", false, false, true, 56), 56, $this->source), "html", null, true);
                echo "\" 
                            alt=\"";
                // line 57
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["obImage"], "description", [], "any", false, false, true, 57), 57, $this->source), "html", null, true);
                echo "\" 
                            id=\"dataimage-";
                // line 58
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["obImage"], "id", [], "any", false, false, true, 58), 58, $this->source), "html", null, true);
                echo "\" 
                            data-modalimageid=\"";
                // line 59
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["obImage"], "id", [], "any", false, false, true, 59), 59, $this->source), "html", null, true);
                echo "\" 
                            class=\"modal-thumb-image\">                        
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['obImage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            echo "                ";
        } else {
            // line 63
            echo "                    ";
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "images", [], "any", false, false, true, 63))) {
                // line 64
                echo "                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "images", [], "any", false, false, true, 64));
                foreach ($context['_seq'] as $context["_key"] => $context["obImage"]) {
                    // line 65
                    echo "                            <img 
                            src=\"";
                    // line 66
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["obImage"], "getPath", [], "method", false, false, true, 66), 66, $this->source), "html", null, true);
                    echo "\" 
                            alt=\"";
                    // line 67
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["obImage"], "description", [], "any", false, false, true, 67), 67, $this->source), "html", null, true);
                    echo "\" 
                            id=\"dataimage-";
                    // line 68
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["obImage"], "id", [], "any", false, false, true, 68), 68, $this->source), "html", null, true);
                    echo "\" 
                            data-modalimageid=\"";
                    // line 69
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["obImage"], "id", [], "any", false, false, true, 69), 69, $this->source), "html", null, true);
                    echo "\" 
                            class=\"modal-thumb-image\"> 
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['obImage'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 72
                echo "                    ";
            }
            // line 73
            echo "                ";
        }
        echo "    
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "Z:\\domains\\hatan.loc/themes/hatan/partials/product/gallery/product-gallery-modal.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  296 => 73,  293 => 72,  284 => 69,  280 => 68,  276 => 67,  272 => 66,  269 => 65,  264 => 64,  261 => 63,  258 => 62,  249 => 59,  245 => 58,  241 => 57,  237 => 56,  234 => 55,  229 => 54,  226 => 53,  217 => 46,  213 => 44,  210 => 43,  207 => 42,  192 => 40,  188 => 38,  186 => 37,  181 => 35,  175 => 34,  171 => 33,  168 => 32,  150 => 31,  147 => 30,  144 => 29,  129 => 27,  125 => 25,  123 => 24,  118 => 22,  112 => 21,  108 => 20,  105 => 19,  87 => 18,  84 => 17,  77 => 12,  69 => 7,  62 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{##}
<div class=\"modal-dialog\">
    <div class=\"modal-content\">
        <div class=\"modal-header\">
            <div></div>
            <div class=\"close\">
                <img src=\"{{ 'assets/images/Cross.svg' | theme }}\" alt=\"\">
            </div>
        </div>
        <div class=\"modal-body\">
            <div class=\"modal-icon left\">
                <img id=\"modal-image-left\" src=\"{{ 'assets/images/Direction-Left.svg' | theme }}\" alt=\"\">
            </div>
            <div class=\"modal-wrap-images\">

                {# Цикл вывода #}
                {% if obOfferItem.images is not empty %}
                    {% for obImage in obOfferItem.images %}
                        <img 
                            src=\"{{ obImage.getPath() }}\" 
                            alt=\"{{ obImage.description }}\" id=\"dataimage-{{obImage.id}}\" 
                            data-modalimageid=\"modal-image-{{obImage.id}}\" 
                            class=\"modal-image 
                            {% if loop.first %}
                            show
                            {% endif %}
                            \">                        
                    {% endfor %}
                {% else %}
                    {% if obProduct.images is not empty %}
                        {% for obImage in obProduct.images %}
                        <img 
                            src=\"{{ obImage.getPath() }}\" 
                            alt=\"{{ obImage.description }}\" id=\"dataimage-{{obImage.id}}\" 
                            data-modalimageid=\"modal-image-{{obImage.id}}\" 
                            class=\"modal-image 
                            {% if loop.first %}
                            show
                            {% endif %}
                            \">                        
                    {% endfor %}
                    {% endif %}
                {% endif %}
            </div>
            <div class=\"modal-icon right\">
                <img id=\"modal-image-right\" src=\"{{ 'assets/images/Direction-Right.svg' | theme }}\" alt=\"\">
            </div>
        </div>
        <div class=\"modal-footer\">
            <div class=\"modal-images-thumbs\">

                {# Цикл вывода #}
                {% if obOfferItem.images is not empty %}
                    {% for obImage in obOfferItem.images %}
                        <img 
                            src=\"{{ obImage.getPath() }}\" 
                            alt=\"{{ obImage.description }}\" 
                            id=\"dataimage-{{obImage.id}}\" 
                            data-modalimageid=\"{{obImage.id}}\" 
                            class=\"modal-thumb-image\">                        
                    {% endfor %}
                {% else %}
                    {% if obProduct.images is not empty %}
                        {% for obImage in obProduct.images %}
                            <img 
                            src=\"{{ obImage.getPath() }}\" 
                            alt=\"{{ obImage.description }}\" 
                            id=\"dataimage-{{obImage.id}}\" 
                            data-modalimageid=\"{{obImage.id}}\" 
                            class=\"modal-thumb-image\"> 
                        {% endfor %}
                    {% endif %}
                {% endif %}    
            </div>
        </div>
    </div>
</div>", "Z:\\domains\\hatan.loc/themes/hatan/partials/product/gallery/product-gallery-modal.htm", "");
    }
}
