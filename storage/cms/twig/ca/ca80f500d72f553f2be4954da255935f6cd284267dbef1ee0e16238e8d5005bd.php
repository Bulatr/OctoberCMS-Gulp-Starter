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

/* Z:\domains\hatan.loc/themes/hatan/pages/orders.htm */
class __TwigTemplate_543ea22696cbcbf23aed9ab62fdf3ac32a4c2e450a06a077a0b2a95e194c1ab2 extends \Twig\Template
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
        $tags = array("partial" => 9);
        $filters = array();
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['partial'],
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
        echo "<!--Checkout-->

<div class=\"checkout\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-12 col-md-7 col-lg-7 col-xl-8 col-xxl-8\">
                <div class=\"steps\">
                    ";
        // line 9
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("breadcrumbs/order/steps"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 10
        echo "                </div>
                <div class=\"checkout__container\">
                    <a href=\"\" class=\"btn btn-primary secondary\">Войти в личный кабинет</a>
                    <p class=\"till\">или заполните подробную информацию ниже:</p>
                    <form class=\"steps-form _shopaholic-order-form\" action=\"\" method=\"post\" data-request-validate>
                        <div class='steps-form__item show' id=\"checkout-1\">
                            ";
        // line 16
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("checkout/order-steps/order-step-1"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        echo "                        
                        </div> 
                        <div class='steps-form__item' id=\"checkout-2\">
                            
                        </div>
                        <div class='steps-form__item' id=\"checkout-3\">
                            
                        </div>
                        <div class='steps-form__item' id=\"checkout-4\"> 

                        </div>                    
                    </form>
                </div>
            </div>
            <div class=\"col-sm-12 col-md-5 col-lg-5 col-xl-4 col-xxl-4\">
                <div class=\"block-order-summary\">
                    ";
        // line 32
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("checkout/order-summary"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 33
        echo "                </div>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "Z:\\domains\\hatan.loc/themes/hatan/pages/orders.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 33,  104 => 32,  83 => 16,  75 => 10,  71 => 9,  62 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{##}
<!--Checkout-->

<div class=\"checkout\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-12 col-md-7 col-lg-7 col-xl-8 col-xxl-8\">
                <div class=\"steps\">
                    {% partial \"breadcrumbs/order/steps\" %}
                </div>
                <div class=\"checkout__container\">
                    <a href=\"\" class=\"btn btn-primary secondary\">Войти в личный кабинет</a>
                    <p class=\"till\">или заполните подробную информацию ниже:</p>
                    <form class=\"steps-form _shopaholic-order-form\" action=\"\" method=\"post\" data-request-validate>
                        <div class='steps-form__item show' id=\"checkout-1\">
                            {% partial \"checkout/order-steps/order-step-1\" %}                        
                        </div> 
                        <div class='steps-form__item' id=\"checkout-2\">
                            
                        </div>
                        <div class='steps-form__item' id=\"checkout-3\">
                            
                        </div>
                        <div class='steps-form__item' id=\"checkout-4\"> 

                        </div>                    
                    </form>
                </div>
            </div>
            <div class=\"col-sm-12 col-md-5 col-lg-5 col-xl-4 col-xxl-4\">
                <div class=\"block-order-summary\">
                    {% partial \"checkout/order-summary\" %}
                </div>
            </div>
        </div>
    </div>
</div>", "Z:\\domains\\hatan.loc/themes/hatan/pages/orders.htm", "");
    }
}
