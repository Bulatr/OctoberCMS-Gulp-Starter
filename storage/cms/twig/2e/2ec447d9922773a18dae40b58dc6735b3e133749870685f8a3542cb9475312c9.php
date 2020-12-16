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

/* Z:\domains\hatan.loc/themes/hatan/partials/breadcrumbs/order/steps.htm */
class __TwigTemplate_9c7474d836a26d95f06efc5bcda5d5ec0b575d9085f509791c6f3d8da42e1f55 extends \Twig\Template
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
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
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
<div class=\"steps__item active\" id=\"step-1\"><a href=\"\">Личные данные</a></div>
<div class=\"steps__item\" id=\"step-2\"><a href=\"\">Доставка</a></div>
<div class=\"steps__item\" id=\"step-3\"><a href=\"\">Оплата</a></div>
<div class=\"steps__item\" id=\"step-4\"><a href=\"\">Подтверждение заказа</a></div>";
    }

    public function getTemplateName()
    {
        return "Z:\\domains\\hatan.loc/themes/hatan/partials/breadcrumbs/order/steps.htm";
    }

    public function getDebugInfo()
    {
        return array (  62 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{##}

<div class=\"steps__item active\" id=\"step-1\"><a href=\"\">Личные данные</a></div>
<div class=\"steps__item\" id=\"step-2\"><a href=\"\">Доставка</a></div>
<div class=\"steps__item\" id=\"step-3\"><a href=\"\">Оплата</a></div>
<div class=\"steps__item\" id=\"step-4\"><a href=\"\">Подтверждение заказа</a></div>", "Z:\\domains\\hatan.loc/themes/hatan/partials/breadcrumbs/order/steps.htm", "");
    }
}
