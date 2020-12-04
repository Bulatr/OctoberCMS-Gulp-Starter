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

/* Z:\domains\hatan.loc/themes/hatan/partials/lookbook.htm */
class __TwigTemplate_32e15472d5729fe2ea5caaa21498259bd919b20676b0dda88a4ce878305e7492 extends \Twig\Template
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
        $filters = array("theme" => 17);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['theme'],
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
        echo "<div class=\"lookbook\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col d-flex flex-column align-items-center justify-content-center\">
\t\t\t\t<div class=\"title\">
\t\t\t\t\t<h2>Осенняя коллекция</h2>
\t\t\t\t</div>
\t\t\t\t<div class=\"subtitle\">
\t\t\t\t\t<h6>LOOKBOOK</h6>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-sm-12 cl-md-6 col-lg-6 col-xl-6 col-xxl-6 d-flex flex-column align-items-end\">
\t\t\t\t<div class=\"card-gallery big\">
\t\t\t\t\t<img src=\"";
        // line 17
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/dest/2/37375710299.jpg");
        echo "\" alt=\"\">
\t\t\t\t\t<div class=\"overlay\"></div>
\t\t\t\t\t<div class=\"title-gallery\">
\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t<h6>Смотреть</h6>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"card-gallery\">
\t\t\t\t\t<img src=\"";
        // line 26
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/dest/3/37488640299.jpg");
        echo "\" alt=\"\">
\t\t\t\t\t<div class=\"overlay\"></div>
\t\t\t\t\t<div class=\"title-gallery\">
\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t<h6>Смотреть</h6>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-sm-12 cl-md-6 col-lg-6 col-xl-6 col-xxl-6 d-flex flex-column align-items-start\">
\t\t\t\t<div class=\"card-gallery\">
\t\t\t\t\t<img src=\"";
        // line 37
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/dest/4/37917310299.jpg");
        echo "\" alt=\"\">
\t\t\t\t\t<div class=\"overlay\"></div>
\t\t\t\t\t<div class=\"title-gallery\">
\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t<h6>Смотреть</h6>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"card-gallery big\">
\t\t\t\t\t<img src=\"";
        // line 46
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/dest/5/38359520299.jpg");
        echo "\" alt=\"\">
\t\t\t\t\t<div class=\"overlay\"></div>
\t\t\t\t\t<div class=\"title-gallery\">
\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t<h6>Смотреть</h6>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>\t\t\t\t\t
\t\t\t</div>
\t\t</div>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "Z:\\domains\\hatan.loc/themes/hatan/partials/lookbook.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 46,  105 => 37,  91 => 26,  79 => 17,  62 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{##}
<div class=\"lookbook\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col d-flex flex-column align-items-center justify-content-center\">
\t\t\t\t<div class=\"title\">
\t\t\t\t\t<h2>Осенняя коллекция</h2>
\t\t\t\t</div>
\t\t\t\t<div class=\"subtitle\">
\t\t\t\t\t<h6>LOOKBOOK</h6>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-sm-12 cl-md-6 col-lg-6 col-xl-6 col-xxl-6 d-flex flex-column align-items-end\">
\t\t\t\t<div class=\"card-gallery big\">
\t\t\t\t\t<img src=\"{{ 'assets/images/dest/2/37375710299.jpg' | theme }}\" alt=\"\">
\t\t\t\t\t<div class=\"overlay\"></div>
\t\t\t\t\t<div class=\"title-gallery\">
\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t<h6>Смотреть</h6>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"card-gallery\">
\t\t\t\t\t<img src=\"{{ 'assets/images/dest/3/37488640299.jpg' | theme }}\" alt=\"\">
\t\t\t\t\t<div class=\"overlay\"></div>
\t\t\t\t\t<div class=\"title-gallery\">
\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t<h6>Смотреть</h6>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-sm-12 cl-md-6 col-lg-6 col-xl-6 col-xxl-6 d-flex flex-column align-items-start\">
\t\t\t\t<div class=\"card-gallery\">
\t\t\t\t\t<img src=\"{{ 'assets/images/dest/4/37917310299.jpg' | theme }}\" alt=\"\">
\t\t\t\t\t<div class=\"overlay\"></div>
\t\t\t\t\t<div class=\"title-gallery\">
\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t<h6>Смотреть</h6>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"card-gallery big\">
\t\t\t\t\t<img src=\"{{ 'assets/images/dest/5/38359520299.jpg' | theme }}\" alt=\"\">
\t\t\t\t\t<div class=\"overlay\"></div>
\t\t\t\t\t<div class=\"title-gallery\">
\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t<h6>Смотреть</h6>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>\t\t\t\t\t
\t\t\t</div>
\t\t</div>
\t</div>
</div>", "Z:\\domains\\hatan.loc/themes/hatan/partials/lookbook.htm", "");
    }
}
