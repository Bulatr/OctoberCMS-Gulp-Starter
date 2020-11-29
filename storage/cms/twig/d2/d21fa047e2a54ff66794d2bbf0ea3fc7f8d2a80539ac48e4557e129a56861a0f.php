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

/* C:\OSPanel\domains\hatan.loc/themes/hatan/partials/filter-modal.htm */
class __TwigTemplate_38bfe95ca22c34e9bd479d2b2ebc6497b21d48e324ce64342fc42aa81c899441 extends \Twig\Template
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
        $filters = array("theme" => 3);
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
        echo "<div class=\"filter-modal\">
\t\t<div class=\"close\"><img src=\"";
        // line 3
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/Close-circle.svg");
        echo "\" alt=\"\"></div>
\t\t<div class=\"filter-modal__col\">
\t\t\t<!--Color-->
\t\t\t<div class=\"color-radio column\" id=\"color-radio\">
\t\t\t\t<div class=\"label-radio\">Цвет</div>
\t\t\t\t<div class=\"wrapper-radio\">
\t\t\t\t\t<label><span style=\"background:blue\"></span><input type=\"radio\" value=\"blue\" name=\"same\" />
\t\t\t\t\t</label>
\t\t\t\t\t<label><span style=\"background:green\"></span><input type=\"radio\" value=\"green\" name=\"same\" />
\t\t\t\t\t</label>
\t\t\t\t\t<label><span style=\"background:red\"></span><input type=\"radio\" value=\"red\" name=\"same\" />
\t\t\t\t\t</label>
\t\t\t\t</div>\t
\t\t\t</div>
\t\t\t<!--Size-->
\t\t\t<div class=\"modal-options\">
\t\t\t\t<div class=\"modal-options__label\">
\t\t\t\t\t<h3>Размер</h3>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-options__wrap\">
\t\t\t\t\t<div class=\"modal-options__checkout\">
\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" name=\"size\" value=\"size-M\" id=\"size-filter-m\">
\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"size-filter-m\">
\t\t\t\t\t\t\t\tM
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"modal-options-checkout__value\" id=\"size-filter-m\">
\t\t\t\t\t\t\t10
\t\t\t\t\t\t</div>\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"modal-options__checkout\">
\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" name=\"size\" value=\"size-S\" id=\"size-filter-s\">
\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"size-filter-s\">
\t\t\t\t\t\t\t\tS
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"modal-options-checkout__value\" id=\"size-filter-s\">
\t\t\t\t\t\t\t10
\t\t\t\t\t\t</div>\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"modal-options__checkout\">
\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" name=\"size\" value=\"size-l\" id=\"size-filter-l\">
\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"size-filter-l\">
\t\t\t\t\t\t\t\tL
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"modal-options-checkout__value\" id=\"size-filter-l\">
\t\t\t\t\t\t\t10
\t\t\t\t\t\t</div>\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>\t
\t\t\t</div>
\t\t\t<!--Price-->
\t\t\t<div class=\"modal-options\">
\t\t\t\t<div class=\"modal-options__label\">
\t\t\t\t\t<h3>Стоимость</h3>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-options__wrap\">
\t\t\t\t\t<div class=\"modal-options__checkout\">
\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" name=\"price\" value=\"price-low\" id=\"price-filter-low\">
\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"price-filter-low\">
\t\t\t\t\t\t\t\tдо 1500 руб
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"modal-options-checkout__value\" id=\"price-filter-low\">
\t\t\t\t\t\t\t18
\t\t\t\t\t\t</div>\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"modal-options__checkout\">
\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" name=\"price\" value=\"price-middle\" id=\"price-filter-middle\">
\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"price-filter-middle\">
\t\t\t\t\t\t\t\tот 1500 до 5000 руб
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"modal-options-checkout__value\" id=\"price-filter-middle\">
\t\t\t\t\t\t\t10
\t\t\t\t\t\t</div>\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"modal-options__checkout\">
\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" name=\"price\" value=\"price-hight\" id=\"price-filter-hight\">
\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"price-filter-hight\">
\t\t\t\t\t\t\t\tот 5000 руб
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"modal-options-checkout__value\" id=\"price-filter-hight\">
\t\t\t\t\t\t\t8
\t\t\t\t\t\t</div>\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>\t
\t\t\t</div>

\t\t</div>
\t\t<div class=\"filter-modal__col\">
\t\t\t<div class=\"filter-modal-buttons\">
\t\t\t\t<a href=\"#\" id=\"show\" class=\"btn btn-primary\">Показать результаты</a>
\t\t\t\t<a href=\"#\" id=\"clear\" class=\"btn btn-primary secondary\">Очистить фильтр</a>
\t\t\t</div>
\t\t</div>
\t</div>";
    }

    public function getTemplateName()
    {
        return "C:\\OSPanel\\domains\\hatan.loc/themes/hatan/partials/filter-modal.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 3,  62 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{##}
<div class=\"filter-modal\">
\t\t<div class=\"close\"><img src=\"{{ 'assets/images/Close-circle.svg' | theme }}\" alt=\"\"></div>
\t\t<div class=\"filter-modal__col\">
\t\t\t<!--Color-->
\t\t\t<div class=\"color-radio column\" id=\"color-radio\">
\t\t\t\t<div class=\"label-radio\">Цвет</div>
\t\t\t\t<div class=\"wrapper-radio\">
\t\t\t\t\t<label><span style=\"background:blue\"></span><input type=\"radio\" value=\"blue\" name=\"same\" />
\t\t\t\t\t</label>
\t\t\t\t\t<label><span style=\"background:green\"></span><input type=\"radio\" value=\"green\" name=\"same\" />
\t\t\t\t\t</label>
\t\t\t\t\t<label><span style=\"background:red\"></span><input type=\"radio\" value=\"red\" name=\"same\" />
\t\t\t\t\t</label>
\t\t\t\t</div>\t
\t\t\t</div>
\t\t\t<!--Size-->
\t\t\t<div class=\"modal-options\">
\t\t\t\t<div class=\"modal-options__label\">
\t\t\t\t\t<h3>Размер</h3>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-options__wrap\">
\t\t\t\t\t<div class=\"modal-options__checkout\">
\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" name=\"size\" value=\"size-M\" id=\"size-filter-m\">
\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"size-filter-m\">
\t\t\t\t\t\t\t\tM
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"modal-options-checkout__value\" id=\"size-filter-m\">
\t\t\t\t\t\t\t10
\t\t\t\t\t\t</div>\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"modal-options__checkout\">
\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" name=\"size\" value=\"size-S\" id=\"size-filter-s\">
\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"size-filter-s\">
\t\t\t\t\t\t\t\tS
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"modal-options-checkout__value\" id=\"size-filter-s\">
\t\t\t\t\t\t\t10
\t\t\t\t\t\t</div>\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"modal-options__checkout\">
\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" name=\"size\" value=\"size-l\" id=\"size-filter-l\">
\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"size-filter-l\">
\t\t\t\t\t\t\t\tL
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"modal-options-checkout__value\" id=\"size-filter-l\">
\t\t\t\t\t\t\t10
\t\t\t\t\t\t</div>\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>\t
\t\t\t</div>
\t\t\t<!--Price-->
\t\t\t<div class=\"modal-options\">
\t\t\t\t<div class=\"modal-options__label\">
\t\t\t\t\t<h3>Стоимость</h3>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-options__wrap\">
\t\t\t\t\t<div class=\"modal-options__checkout\">
\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" name=\"price\" value=\"price-low\" id=\"price-filter-low\">
\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"price-filter-low\">
\t\t\t\t\t\t\t\tдо 1500 руб
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"modal-options-checkout__value\" id=\"price-filter-low\">
\t\t\t\t\t\t\t18
\t\t\t\t\t\t</div>\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"modal-options__checkout\">
\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" name=\"price\" value=\"price-middle\" id=\"price-filter-middle\">
\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"price-filter-middle\">
\t\t\t\t\t\t\t\tот 1500 до 5000 руб
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"modal-options-checkout__value\" id=\"price-filter-middle\">
\t\t\t\t\t\t\t10
\t\t\t\t\t\t</div>\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"modal-options__checkout\">
\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" name=\"price\" value=\"price-hight\" id=\"price-filter-hight\">
\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"price-filter-hight\">
\t\t\t\t\t\t\t\tот 5000 руб
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"modal-options-checkout__value\" id=\"price-filter-hight\">
\t\t\t\t\t\t\t8
\t\t\t\t\t\t</div>\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>\t
\t\t\t</div>

\t\t</div>
\t\t<div class=\"filter-modal__col\">
\t\t\t<div class=\"filter-modal-buttons\">
\t\t\t\t<a href=\"#\" id=\"show\" class=\"btn btn-primary\">Показать результаты</a>
\t\t\t\t<a href=\"#\" id=\"clear\" class=\"btn btn-primary secondary\">Очистить фильтр</a>
\t\t\t</div>
\t\t</div>
\t</div>", "C:\\OSPanel\\domains\\hatan.loc/themes/hatan/partials/filter-modal.htm", "");
    }
}
