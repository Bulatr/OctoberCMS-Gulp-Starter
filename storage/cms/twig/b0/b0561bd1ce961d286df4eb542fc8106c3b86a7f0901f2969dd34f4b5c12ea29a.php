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
        $tags = array("partial" => 2, "page" => 7);
        $filters = array();
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['partial', 'page'],
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
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['class'] = "myclass"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 3
        echo "
\t<section id=\"body-site\">
\t\t<div class=\"mega-menu-wrapper\">
\t\t</div>
\t\t";
        // line 7
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 8
        echo "\t</section>

";
        // line 10
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
        return array (  79 => 10,  75 => 8,  73 => 7,  67 => 3,  62 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{##}
{% partial 'header' class='myclass' %}

\t<section id=\"body-site\">
\t\t<div class=\"mega-menu-wrapper\">
\t\t</div>
\t\t{% page %}
\t</section>

{% partial 'footer' %}", "Z:\\domains\\hatan.loc/themes/hatan/layouts/default.htm", "");
    }
}
