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

/* Z:\domains\hatan.loc/themes/hatan/partials/header/header-site-minimal.htm */
class __TwigTemplate_9ffb97d46ac12e8f91307821f5faf327aea4633ca8da3b43ca3f1441876bfe7a extends \Twig\Template
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
        $filters = array("page" => 10, "theme" => 11);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['page', 'theme'],
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
        echo "<!--Header minimal-->

<div class=\"header\">
    <div class=\"container\" style=\"position: relative;\">
        <div class=\"row\">
            <div class=\"col d-flex justify-content-center\">
                <div class=\"logo-wrapper\">
                    <div class=\"logo\">
                        <a href=\"";
        // line 10
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">
                            <img src=\"";
        // line 11
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/a-logo.svg");
        echo "\" alt=\"\">
                        </a>
                    </div>
                </div>
                
            </div>
        </div>\t\t\t
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "Z:\\domains\\hatan.loc/themes/hatan/partials/header/header-site-minimal.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 11,  72 => 10,  62 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{##}
<!--Header minimal-->

<div class=\"header\">
    <div class=\"container\" style=\"position: relative;\">
        <div class=\"row\">
            <div class=\"col d-flex justify-content-center\">
                <div class=\"logo-wrapper\">
                    <div class=\"logo\">
                        <a href=\"{{ 'home' | page}}\">
                            <img src=\"{{'assets/images/a-logo.svg' | theme }}\" alt=\"\">
                        </a>
                    </div>
                </div>
                
            </div>
        </div>\t\t\t
    </div>
</div>", "Z:\\domains\\hatan.loc/themes/hatan/partials/header/header-site-minimal.htm", "");
    }
}
