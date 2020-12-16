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

/* Z:\domains\hatan.loc/themes/hatan/partials/checkout/order-steps/order-step-1.htm */
class __TwigTemplate_e24eb4f9d0c68ff75b276daaf4a3ab538d0594491b2b33eea96f14d230ad3d54 extends \Twig\Template
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
        $filters = array("theme" => 42);
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
        echo "<h2>1. Детали заказа</h2>
<div class=\"form-group\">
    <label for=\"fio\">Фамилия Имя Отчество*</label>
    <input type=\"text\" class=\"form-control _shopaholic-order-field\" 
        name=\"fio\" 
        id=\"fio\" 
        data-group=\"user\"
        data-field=\"name\"
        placeholder=\"Введите фамилию имя отчество\" 
        data-block-hidden=\"fio\"
        required>
    <div class='info small' >
    </div>
</div>
<div class='input-hidden fio'>
    <div class=\"input-group\">
        <div class=\"form-group\">
            <label for=\"fam\">Фамилия*</label>
            <input type=\"text\" class=\"form-control _shopaholic-order-field\" name=\"fam\" id=\"fam\" data-group=\"order.property\" placeholder=\"Фамилия\" required>
        </div>
        <div class=\"form-group\">
            <label for=\"name\">Имя*</label>
            <input type=\"text\" class=\"form-control _shopaholic-order-field\" name=\"name\" id=\"name\" data-group=\"order.property\" placeholder=\"Имя\" required>
        </div>        
    </div>
    <div class='input-group' >
        <div class=\"form-group\">
            <label for=\"otchestvo\">Отчество*</label>
            <input type=\"text\" class=\"form-control _shopaholic-order-field\" name=\"otchestvo\" id=\"otchestvo\" data-group=\"order.property\" placeholder=\"Отчество\" required>
        </div>
    </div>
</div>
<div class=\"form-group\">
    <label for=\"email\">E-mail*</label>
    <input type=\"text\" class=\"form-control _shopaholic-order-field\" name=\"email\" id=\"email\" data-group=\"user\" placeholder=\"Ваш адрес электронной почты\" required>
</div>
<div class=\"info\">
    <p>Привилегии бесплатного аккаунта</p>
    <div class=\"info__item\">
        <div class=\"info-item__icon\">
            <img src=\"";
        // line 42
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/Empty_Cart_accent.svg");
        echo "\" alt=\"\">
        </div>
        <div class=\"info-item__content\">Управление вашими заказами</div>
    </div>
    <div class=\"info__item\">
        <div class=\"info-item__icon\">
            <img src=\"";
        // line 48
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/Rewards.svg");
        echo "\" alt=\"\">
        </div>
        <div class=\"info-item__content\">Программа вознаграждений</div>
    </div>
    <div class=\"info__item\">
        <div class=\"info-item__icon\">
            <img src=\"";
        // line 54
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/Coins.svg");
        echo "\" alt=\"\">
        </div>
        <div class=\"info-item__content\">Зарабатывайте баллы с каждой покупкой. 1 балл = 1 рубль.</div>
    </div>
    <div class=\"info__item\">
        <div class=\"info-item__icon\">
            <img src=\"";
        // line 60
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/Outline-heart.svg");
        echo "\" alt=\"\">
        </div>
        <div class=\"info-item__content\">Управляйте списком своих желаний</div>
    </div>
    <div class=\"form-check register\">
        <input class=\"form-check-input\" type=\"checkbox\" value=\"iwantregister\" id=\"iwantregister\" checked>
        <label class=\"form-check-label\" for=\"iwantregister\">
            Регистрируясь на сайте я принимаю условия обработки персональных данных
        </label>
    </div>
</div>
<div class=\"form-group\">
    <label for=\"password\">Пароль*</label>
    <input type=\"text\" class=\"form-control\" id=\"password\" placeholder=\"******\">
</div>
<div class=\"form-group\">
    <label for=\"password-repeat\">Повторите пароль*</label>
    <input type=\"text\" class=\"form-control\" id=\"password-repeat\" placeholder=\"******\">
</div>
<a href=\"#checkout-2\" class=\"btn btn-primary\" id=\"btn-step-1\" data-step-next=\"2\">Продолжить</a>";
    }

    public function getTemplateName()
    {
        return "Z:\\domains\\hatan.loc/themes/hatan/partials/checkout/order-steps/order-step-1.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 60,  122 => 54,  113 => 48,  104 => 42,  62 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{##}
<h2>1. Детали заказа</h2>
<div class=\"form-group\">
    <label for=\"fio\">Фамилия Имя Отчество*</label>
    <input type=\"text\" class=\"form-control _shopaholic-order-field\" 
        name=\"fio\" 
        id=\"fio\" 
        data-group=\"user\"
        data-field=\"name\"
        placeholder=\"Введите фамилию имя отчество\" 
        data-block-hidden=\"fio\"
        required>
    <div class='info small' >
    </div>
</div>
<div class='input-hidden fio'>
    <div class=\"input-group\">
        <div class=\"form-group\">
            <label for=\"fam\">Фамилия*</label>
            <input type=\"text\" class=\"form-control _shopaholic-order-field\" name=\"fam\" id=\"fam\" data-group=\"order.property\" placeholder=\"Фамилия\" required>
        </div>
        <div class=\"form-group\">
            <label for=\"name\">Имя*</label>
            <input type=\"text\" class=\"form-control _shopaholic-order-field\" name=\"name\" id=\"name\" data-group=\"order.property\" placeholder=\"Имя\" required>
        </div>        
    </div>
    <div class='input-group' >
        <div class=\"form-group\">
            <label for=\"otchestvo\">Отчество*</label>
            <input type=\"text\" class=\"form-control _shopaholic-order-field\" name=\"otchestvo\" id=\"otchestvo\" data-group=\"order.property\" placeholder=\"Отчество\" required>
        </div>
    </div>
</div>
<div class=\"form-group\">
    <label for=\"email\">E-mail*</label>
    <input type=\"text\" class=\"form-control _shopaholic-order-field\" name=\"email\" id=\"email\" data-group=\"user\" placeholder=\"Ваш адрес электронной почты\" required>
</div>
<div class=\"info\">
    <p>Привилегии бесплатного аккаунта</p>
    <div class=\"info__item\">
        <div class=\"info-item__icon\">
            <img src=\"{{'assets/images/Empty_Cart_accent.svg' | theme }}\" alt=\"\">
        </div>
        <div class=\"info-item__content\">Управление вашими заказами</div>
    </div>
    <div class=\"info__item\">
        <div class=\"info-item__icon\">
            <img src=\"{{'assets/images/Rewards.svg' | theme }}\" alt=\"\">
        </div>
        <div class=\"info-item__content\">Программа вознаграждений</div>
    </div>
    <div class=\"info__item\">
        <div class=\"info-item__icon\">
            <img src=\"{{'assets/images/Coins.svg' | theme }}\" alt=\"\">
        </div>
        <div class=\"info-item__content\">Зарабатывайте баллы с каждой покупкой. 1 балл = 1 рубль.</div>
    </div>
    <div class=\"info__item\">
        <div class=\"info-item__icon\">
            <img src=\"{{'assets/images/Outline-heart.svg' | theme }}\" alt=\"\">
        </div>
        <div class=\"info-item__content\">Управляйте списком своих желаний</div>
    </div>
    <div class=\"form-check register\">
        <input class=\"form-check-input\" type=\"checkbox\" value=\"iwantregister\" id=\"iwantregister\" checked>
        <label class=\"form-check-label\" for=\"iwantregister\">
            Регистрируясь на сайте я принимаю условия обработки персональных данных
        </label>
    </div>
</div>
<div class=\"form-group\">
    <label for=\"password\">Пароль*</label>
    <input type=\"text\" class=\"form-control\" id=\"password\" placeholder=\"******\">
</div>
<div class=\"form-group\">
    <label for=\"password-repeat\">Повторите пароль*</label>
    <input type=\"text\" class=\"form-control\" id=\"password-repeat\" placeholder=\"******\">
</div>
<a href=\"#checkout-2\" class=\"btn btn-primary\" id=\"btn-step-1\" data-step-next=\"2\">Продолжить</a>", "Z:\\domains\\hatan.loc/themes/hatan/partials/checkout/order-steps/order-step-1.htm", "");
    }
}
