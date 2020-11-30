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

/* Z:\domains\hatan.loc/themes/hatan/partials/banners/banner-1.htm */
class __TwigTemplate_902d4970004118398a11c0359385f312d9da54b5cf4c48fd3c4cf67de813d10a extends \Twig\Template
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
        $filters = array("theme" => 9);
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
        echo "<div class=\"banner-section\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col d-flex flex-column\">
                <div class=\"banner-horizontal\">
                    <div class=\"banner-horizontal__col\">
                        <div class=\"banner-horizontal__image\">
                            <img src=\"";
        // line 9
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/dest/full_width_banner.jpg");
        echo "\" alt=\"\">
                        </div>
                    </div>
                    <div class=\"banner-horizontal__col\">
                        <div class=\"banner-horizontal__content\">
                            <div class=\"banner-horizontal__subtitle\">
                                Акция
                            </div>
                            <div class=\"banner-horizontal__title\">
                                <a href=\"#\"><h2>Вещи сезона</h2></a>
                            </div>\t\t\t\t\t\t\t\t
                        </div>
                    </div>
                </div>
                <div class=\"banner-horizontal invert\">
                    <div class=\"banner-horizontal__col\">
                        <div class=\"banner-horizontal__image\">
                            <img src=\"";
        // line 26
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/dest/4nulm-JUYFo.jpg");
        echo "\" alt=\"\">
                        </div>
                    </div>
                    <div class=\"banner-horizontal__col\">
                        <div class=\"banner-horizontal__content\">
                            <div class=\"banner-horizontal__subtitle\">
                                Черная пятница
                            </div>
                            <div class=\"banner-horizontal__title\">
                                <a href=\"#\"><h2>Внимание конкурс</h2></a>
                            </div>
                            <div class=\"banner-horizontal__text\">
                                Конкурс к черной пятнице. Все подробности на нашем аккаунте инстаграм
                            </div>
                                                            
                        </div>
                    </div>
                </div>
            </div>\t\t\t\t
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "Z:\\domains\\hatan.loc/themes/hatan/partials/banners/banner-1.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 26,  71 => 9,  62 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{##}
<div class=\"banner-section\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col d-flex flex-column\">
                <div class=\"banner-horizontal\">
                    <div class=\"banner-horizontal__col\">
                        <div class=\"banner-horizontal__image\">
                            <img src=\"{{ 'assets/images/dest/full_width_banner.jpg' | theme }}\" alt=\"\">
                        </div>
                    </div>
                    <div class=\"banner-horizontal__col\">
                        <div class=\"banner-horizontal__content\">
                            <div class=\"banner-horizontal__subtitle\">
                                Акция
                            </div>
                            <div class=\"banner-horizontal__title\">
                                <a href=\"#\"><h2>Вещи сезона</h2></a>
                            </div>\t\t\t\t\t\t\t\t
                        </div>
                    </div>
                </div>
                <div class=\"banner-horizontal invert\">
                    <div class=\"banner-horizontal__col\">
                        <div class=\"banner-horizontal__image\">
                            <img src=\"{{ 'assets/images/dest/4nulm-JUYFo.jpg' | theme }}\" alt=\"\">
                        </div>
                    </div>
                    <div class=\"banner-horizontal__col\">
                        <div class=\"banner-horizontal__content\">
                            <div class=\"banner-horizontal__subtitle\">
                                Черная пятница
                            </div>
                            <div class=\"banner-horizontal__title\">
                                <a href=\"#\"><h2>Внимание конкурс</h2></a>
                            </div>
                            <div class=\"banner-horizontal__text\">
                                Конкурс к черной пятнице. Все подробности на нашем аккаунте инстаграм
                            </div>
                                                            
                        </div>
                    </div>
                </div>
            </div>\t\t\t\t
        </div>
    </div>
</div>", "Z:\\domains\\hatan.loc/themes/hatan/partials/banners/banner-1.htm", "");
    }
}
