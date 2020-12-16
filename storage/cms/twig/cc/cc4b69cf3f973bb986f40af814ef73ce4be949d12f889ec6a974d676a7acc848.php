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

/* Z:\domains\hatan.loc/themes/hatan/partials/footer.htm */
class __TwigTemplate_cb57290d2a999f4b1ed8ae2202ddef0712998aa9ac4ce7105caff684f9c8be12 extends \Twig\Template
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
        $tags = array("scripts" => 170);
        $filters = array("theme" => 98);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['scripts'],
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
        // line 98
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/icons8-instagram.svg");
        echo "\" alt=\"instagram\">
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"footer-submenu-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"footer-submenu-item-link\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 103
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/icons8-facebook.svg");
        echo "\" alt=\"facebook\">
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"footer-submenu-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"footer-submenu-item-link\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 108
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/icons8-vkontakte.svg");
        echo "\" alt=\"VK\">
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>\t
\t\t\t\t\t\t\t\t\t<li class=\"footer-submenu-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"footer-submenu-item-link\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 113
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
\t<div class=\"mobile-menu\" >  
\t\t<div class=\"mobile-menu__wrapper\">
\t\t\t<div class='item-mobile-menu' >
\t\t\t\t<a href=\"#\" class='link-mobile-menu'>
\t\t\t\t\t<img src=\"";
        // line 128
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/Icon-Home-Outlined.svg");
        echo "\" alt=\"Домой\">
\t\t\t\t\t<div class='link-mobile-menu__title' >
\t\t\t\t\t\tДомой
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<div class='item-mobile-menu' >
\t\t\t\t<a href=\"#\" class='link-mobile-menu'>
\t\t\t\t\t<img src=\"";
        // line 136
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/Menu-Outline.svg");
        echo "\" alt=\"Меню\">
\t\t\t\t\t<div class='link-mobile-menu__title' >
\t\t\t\t\t\tМеню
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<div class='item-mobile-menu' >
\t\t\t\t<a href=\"#\" class='link-mobile-menu'>
\t\t\t\t\t<img src=\"";
        // line 144
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/Thin-hearth.svg");
        echo "\" alt=\"Избранное\">
\t\t\t\t\t<div class='link-mobile-menu__title' >
\t\t\t\t\t\tИзбранное
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<div class='item-mobile-menu' >
\t\t\t\t<a href=\"#\" class='link-mobile-menu'>
\t\t\t\t\t<img src=\"";
        // line 152
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/Icon-Profile-Outline.svg");
        echo "\" alt=\"Профиль\">
\t\t\t\t\t<div class='link-mobile-menu__title' >
\t\t\t\t\t\tПрофиль
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<div class='item-mobile-menu cart-icon' >
\t\t\t\t<img src=\"";
        // line 159
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/Circle-cart-icon.svg");
        echo "\" alt=\"Корзина\">
\t\t\t\t<a href=\"#\" class='link-mobile-menu'>\t\t\t\t\t
\t\t\t\t\t<div class='link-mobile-menu__title' >
\t\t\t\t\t\tКорзина
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</div>
\t\t</div>\t\t
\t</div>
\t<script src=\"";
        // line 168
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/hatan.min.js");
        echo "\"></script>\t
\t<script src=\"";
        // line 169
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery.suggestions.min.js");
        echo "\"></script>\t
\t";
        // line 170
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 171
        echo "\t
\t
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "Z:\\domains\\hatan.loc/themes/hatan/partials/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  268 => 171,  265 => 170,  261 => 169,  257 => 168,  245 => 159,  235 => 152,  224 => 144,  213 => 136,  202 => 128,  184 => 113,  176 => 108,  168 => 103,  160 => 98,  62 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{##}
<div class=\"footer\">
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
\t<div class=\"mobile-menu\" >  
\t\t<div class=\"mobile-menu__wrapper\">
\t\t\t<div class='item-mobile-menu' >
\t\t\t\t<a href=\"#\" class='link-mobile-menu'>
\t\t\t\t\t<img src=\"{{ 'assets/images/Icon-Home-Outlined.svg'| theme }}\" alt=\"Домой\">
\t\t\t\t\t<div class='link-mobile-menu__title' >
\t\t\t\t\t\tДомой
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<div class='item-mobile-menu' >
\t\t\t\t<a href=\"#\" class='link-mobile-menu'>
\t\t\t\t\t<img src=\"{{ 'assets/images/Menu-Outline.svg'| theme }}\" alt=\"Меню\">
\t\t\t\t\t<div class='link-mobile-menu__title' >
\t\t\t\t\t\tМеню
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<div class='item-mobile-menu' >
\t\t\t\t<a href=\"#\" class='link-mobile-menu'>
\t\t\t\t\t<img src=\"{{ 'assets/images/Thin-hearth.svg'| theme }}\" alt=\"Избранное\">
\t\t\t\t\t<div class='link-mobile-menu__title' >
\t\t\t\t\t\tИзбранное
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<div class='item-mobile-menu' >
\t\t\t\t<a href=\"#\" class='link-mobile-menu'>
\t\t\t\t\t<img src=\"{{ 'assets/images/Icon-Profile-Outline.svg'| theme }}\" alt=\"Профиль\">
\t\t\t\t\t<div class='link-mobile-menu__title' >
\t\t\t\t\t\tПрофиль
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<div class='item-mobile-menu cart-icon' >
\t\t\t\t<img src=\"{{ 'assets/images/Circle-cart-icon.svg'| theme }}\" alt=\"Корзина\">
\t\t\t\t<a href=\"#\" class='link-mobile-menu'>\t\t\t\t\t
\t\t\t\t\t<div class='link-mobile-menu__title' >
\t\t\t\t\t\tКорзина
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</div>
\t\t</div>\t\t
\t</div>
\t<script src=\"{{ 'assets/js/hatan.min.js' | theme }}\"></script>\t
\t<script src=\"{{ 'assets/js/jquery.suggestions.min.js' | theme }}\"></script>\t
\t{% scripts %}
\t
\t
</body>
</html>", "Z:\\domains\\hatan.loc/themes/hatan/partials/footer.htm", "");
    }
}
