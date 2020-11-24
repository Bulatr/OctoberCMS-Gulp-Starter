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

/* C:\OSPanel\domains\hatan.loc/themes/hatan/partials/footer.htm */
class __TwigTemplate_8a11e69f1359f4e4ebcacaa53b1104d9e509246934826eaae5e40ee7aaa042e7 extends \Twig\Template
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
        $tags = array("framework" => 125, "scripts" => 126);
        $filters = array("theme" => 97);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['framework', 'scripts'],
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
        // line 1
        echo "<div class=\"footer\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<div class=\"footer-menu-wrapper\">
\t\t\t\t\t\t<ul class=\"nav-footer\">
\t\t\t\t\t\t\t<li class=\"footer-menu-item\">
\t\t\t\t\t\t\t\t<a href=\"\" class=\"footer-menu-link\">
\t\t\t\t\t\t\t\t\tО магазине
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<ul class=\"footer-menu-item-submenu\">
\t\t\t\t\t\t\t\t\t<li class=\"footer-submenu-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"footer-submenu-item-link\">
\t\t\t\t\t\t\t\t\t\t\tО нас
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"footer-submenu-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"footer-submenu-item-link\">
\t\t\t\t\t\t\t\t\t\t\tЗащита данных
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"footer-submenu-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"footer-submenu-item-link\">
\t\t\t\t\t\t\t\t\t\t\tПрава покупателей
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"footer-menu-item\">
\t\t\t\t\t\t\t\t<a href=\"\" class=\"footer-menu-link\">
\t\t\t\t\t\t\t\t\tМагазин
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<ul class=\"footer-menu-item-submenu\">
\t\t\t\t\t\t\t\t\t<li class=\"footer-submenu-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"footer-submenu-item-link\">
\t\t\t\t\t\t\t\t\t\t\tЖенщинам
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"footer-submenu-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"footer-submenu-item-link\">
\t\t\t\t\t\t\t\t\t\t\tМужчинам
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"footer-submenu-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"footer-submenu-item-link\">
\t\t\t\t\t\t\t\t\t\t\tДетям
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"footer-menu-item\">
\t\t\t\t\t\t\t\t<a href=\"\" class=\"footer-menu-link\">
\t\t\t\t\t\t\t\t\tПомощь
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<ul class=\"footer-menu-item-submenu\">
\t\t\t\t\t\t\t\t\t<li class=\"footer-submenu-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"footer-submenu-item-link\">
\t\t\t\t\t\t\t\t\t\t\tОбмен и возврат
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"footer-submenu-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"footer-submenu-item-link\">
\t\t\t\t\t\t\t\t\t\t\tГарантии
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"footer-submenu-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"footer-submenu-item-link\">
\t\t\t\t\t\t\t\t\t\t\tДоставка
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"footer-menu-item\">
\t\t\t\t\t\t\t\t<a href=\"\" class=\"footer-menu-link\">
\t\t\t\t\t\t\t\t\tОплата
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<ul class=\"footer-menu-item-submenu\">
\t\t\t\t\t\t\t\t\t<li class=\"footer-submenu-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"footer-submenu-item-link\">
\t\t\t\t\t\t\t\t\t\t\tСпособы оплаты
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"footer-submenu-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"footer-submenu-item-link\">
\t\t\t\t\t\t\t\t\t\t\tПубличная оферта
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"footer-menu-item\">
\t\t\t\t\t\t\t\t<a href=\"\" class=\"footer-menu-link\">
\t\t\t\t\t\t\t\t\tСоцсети
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<ul class=\"footer-menu-item-submenu icons\">
\t\t\t\t\t\t\t\t\t<li class=\"footer-submenu-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"footer-submenu-item-link\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 97
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/icons8-instagram.svg");
        echo "\" alt=\"instagram\">
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"footer-submenu-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"footer-submenu-item-link\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 102
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/icons8-facebook.svg");
        echo "\" alt=\"facebook\">
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"footer-submenu-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"footer-submenu-item-link\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 107
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/icons8-vkontakte.svg");
        echo "\" alt=\"VK\">
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>\t
\t\t\t\t\t\t\t\t\t<li class=\"footer-submenu-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"footer-submenu-item-link\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 112
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/icons8-youtube-squared.svg");
        echo "\" alt=\"youtube\">
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<script src=\"";
        // line 123
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/app.min.js");
        echo "\"></script>

\t";
        // line 125
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        if ($_minify) {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.combined-min.js"></script>'.PHP_EOL;
        }
        else {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        }
        echo '<link rel="stylesheet" property="stylesheet" href="' . Request::getBasePath() .'/modules/system/assets/css/framework.extras'.($_minify ? '-min' : '').'.css">'.PHP_EOL;
        unset($_minify);
        // line 126
        echo "\t";
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 127
        echo "\t
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "C:\\OSPanel\\domains\\hatan.loc/themes/hatan/partials/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 127,  214 => 126,  203 => 125,  198 => 123,  184 => 112,  176 => 107,  168 => 102,  160 => 97,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"footer\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<div class=\"footer-menu-wrapper\">
\t\t\t\t\t\t<ul class=\"nav-footer\">
\t\t\t\t\t\t\t<li class=\"footer-menu-item\">
\t\t\t\t\t\t\t\t<a href=\"\" class=\"footer-menu-link\">
\t\t\t\t\t\t\t\t\tО магазине
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<ul class=\"footer-menu-item-submenu\">
\t\t\t\t\t\t\t\t\t<li class=\"footer-submenu-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"footer-submenu-item-link\">
\t\t\t\t\t\t\t\t\t\t\tО нас
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"footer-submenu-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"footer-submenu-item-link\">
\t\t\t\t\t\t\t\t\t\t\tЗащита данных
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"footer-submenu-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"footer-submenu-item-link\">
\t\t\t\t\t\t\t\t\t\t\tПрава покупателей
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"footer-menu-item\">
\t\t\t\t\t\t\t\t<a href=\"\" class=\"footer-menu-link\">
\t\t\t\t\t\t\t\t\tМагазин
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<ul class=\"footer-menu-item-submenu\">
\t\t\t\t\t\t\t\t\t<li class=\"footer-submenu-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"footer-submenu-item-link\">
\t\t\t\t\t\t\t\t\t\t\tЖенщинам
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"footer-submenu-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"footer-submenu-item-link\">
\t\t\t\t\t\t\t\t\t\t\tМужчинам
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"footer-submenu-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"footer-submenu-item-link\">
\t\t\t\t\t\t\t\t\t\t\tДетям
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"footer-menu-item\">
\t\t\t\t\t\t\t\t<a href=\"\" class=\"footer-menu-link\">
\t\t\t\t\t\t\t\t\tПомощь
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<ul class=\"footer-menu-item-submenu\">
\t\t\t\t\t\t\t\t\t<li class=\"footer-submenu-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"footer-submenu-item-link\">
\t\t\t\t\t\t\t\t\t\t\tОбмен и возврат
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"footer-submenu-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"footer-submenu-item-link\">
\t\t\t\t\t\t\t\t\t\t\tГарантии
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"footer-submenu-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"footer-submenu-item-link\">
\t\t\t\t\t\t\t\t\t\t\tДоставка
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"footer-menu-item\">
\t\t\t\t\t\t\t\t<a href=\"\" class=\"footer-menu-link\">
\t\t\t\t\t\t\t\t\tОплата
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<ul class=\"footer-menu-item-submenu\">
\t\t\t\t\t\t\t\t\t<li class=\"footer-submenu-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"footer-submenu-item-link\">
\t\t\t\t\t\t\t\t\t\t\tСпособы оплаты
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"footer-submenu-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"footer-submenu-item-link\">
\t\t\t\t\t\t\t\t\t\t\tПубличная оферта
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"footer-menu-item\">
\t\t\t\t\t\t\t\t<a href=\"\" class=\"footer-menu-link\">
\t\t\t\t\t\t\t\t\tСоцсети
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<ul class=\"footer-menu-item-submenu icons\">
\t\t\t\t\t\t\t\t\t<li class=\"footer-submenu-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"footer-submenu-item-link\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{ 'assets/images/icons8-instagram.svg'| theme }}\" alt=\"instagram\">
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"footer-submenu-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"footer-submenu-item-link\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{ 'assets/images/icons8-facebook.svg'| theme }}\" alt=\"facebook\">
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"footer-submenu-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"footer-submenu-item-link\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{ 'assets/images/icons8-vkontakte.svg'| theme }}\" alt=\"VK\">
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>\t
\t\t\t\t\t\t\t\t\t<li class=\"footer-submenu-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"footer-submenu-item-link\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{ 'assets/images/icons8-youtube-squared.svg'| theme }}\" alt=\"youtube\">
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<script src=\"{{ 'assets/js/app.min.js' | theme }}\"></script>

\t{% framework extras %}
\t{% scripts %}
\t
</body>
</html>", "C:\\OSPanel\\domains\\hatan.loc/themes/hatan/partials/footer.htm", "");
    }
}
