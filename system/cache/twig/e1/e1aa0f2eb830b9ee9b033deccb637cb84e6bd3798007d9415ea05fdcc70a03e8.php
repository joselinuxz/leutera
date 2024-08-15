<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* gesior-shop-system/points.html.twig */
class __TwigTemplate_f05879e3b6ce670f8a05c77f48574e60b2d95d708ffee1c5138fa030110c0c03 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<div class=\"main-box\">
\t";
        // line 2
        if ($this->getAttribute(($context["enabled"] ?? null), "paypal", [])) {
            // line 3
            echo "\t\t<div class=\"floating-box\">
\t\t\t<div class=\"floating-logo-box\">
\t\t\t\t<a href=\"?subtopic=points&system=paypal\" title=\"Gain with PayPal\"><img class=\"floating-logo\" src=\"images/shop-system/paypal.gif\" border=\"0\" /></a><br/>
\t\t\t</div>
\t\t\t<div class=\"info-box\">
\t\t\t\tCredit card, paypal.<br/>
\t\t\t\t<b>";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["config"] ?? null), "paypal", []), "currency_code", []), "html", null, true);
            echo "</b>
\t\t\t</div>
\t\t\t<div class=\"info-box\">
\t\t\t\tALL COUNTRIES!
\t\t\t</div>
\t\t</div>
\t";
        }
        // line 16
        echo "\t";
        if ($this->getAttribute(($context["enabled"] ?? null), "fortumo", [])) {
            // line 17
            echo "\t\t<div class=\"floating-box\">
\t\t\t<div class=\"floating-logo-box\">
\t\t\t\t<script src=\"https://assets.fortumo.com/fmp/fortumopay.js\" type=\"text/javascript\"></script>
\t\t\t\t<a id=\"fmp-button\" href=\"#\" rel=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["config"] ?? null), "fortumo", []), "service_id", []), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["account_logged"] ?? null), "getId", [], "method"), "html", null, true);
            echo "\">
\t\t\t\t\t<img class=\"floating-logo\" src=\"https://assets.fortumo.com/fmp/fortumopay_150x50_red.png\" width=\"150\" height=\"50\" alt=\"Mobile Payments by Fortumo\" border=\"0\" />
\t\t\t\t</a><br/>
\t\t\t</div>
\t\t\t<div class=\"info-box\">
\t\t\t\tSMS.<br/>
\t\t\t\t<b>ALL CURRENCIES</b>
\t\t\t</div>
\t\t\t<div class=\"info-box\">
\t\t\t\tALL COUNTRIES!
\t\t\t</div>
\t\t</div>
\t";
        }
        // line 33
        echo "\t";
        if ($this->getAttribute(($context["enabled"] ?? null), "cryptobox", [])) {
            // line 34
            echo "\t\t<div class=\"floating-box\">
\t\t\t<div class=\"floating-logo-box\">
\t\t\t\t<a href=\"?subtopic=points&system=cryptobox\" title=\"Pay with Crypto Coins\"><img class=\"floating-logo\" src=\"images/shop-system/gourl.png\" border=\"0\" /></a><br/>
\t\t\t</div>
\t\t\t<div class=\"info-box\">
\t\t\t\t<b>BitCoins</b>
\t\t\t</div>
\t\t\t<div class=\"info-box\">
\t\t\t\tALL COUNTRIES!
\t\t\t</div>
\t\t</div>
\t";
        }
        // line 46
        echo "\t";
        if ($this->getAttribute(($context["enabled"] ?? null), "daopay", [])) {
            // line 47
            echo "\t\t<div class=\"floating-box\">
\t\t\t<div class=\"floating-logo-box\">
\t\t\t\t<a href=\"?subtopic=points&system=daopay\" title=\"Gain with DaoPay (EUR)\"><img class=\"floating-logo\" src=\"images/shop-system/daopay.gif\" border=\"0\" /></a><br/>
\t\t\t</div>
\t\t\t<div class=\"info-box\">
\t\t\t\tSMS, phone call.<br/>
\t\t\t\t<b>EUR</b>
\t\t\t</div>
\t\t\t<div class=\"info-box\">
\t\t\t\tALL COUNTRIES!
\t\t\t</div>
\t\t</div>
\t";
        }
        // line 60
        echo "\t";
        if ($this->getAttribute(($context["enabled"] ?? null), "pagseguro", [])) {
            // line 61
            echo "\t\t<div class=\"floating-box\">
\t\t\t<div class=\"floating-logo-box\">
\t\t\t\t<a href=\"?subtopic=points&system=pagseguro\" title=\"Pay with PagSeguro (BRL)\"><img class=\"floating-logo\" src=\"images/shop-system/pagseguro.png\" style=\"width: 260px; heigth: 80px;\" border=\"0\" /></a><br/>
\t\t\t</div>
\t\t\t<div class=\"info-box\">
\t\t\t\t<b>BRL</b>
\t\t\t</div>
\t\t\t<div class=\"info-box\">
\t\t\t\tBRAZIL!
\t\t\t</div>
\t\t</div>
\t";
        }
        // line 73
        echo "\t";
        if ($this->getAttribute(($context["enabled"] ?? null), "dotpay", [])) {
            // line 74
            echo "\t\t<div class=\"floating-box\">
\t\t\t<div class=\"floating-logo-box\">
\t\t\t\t<a href=\"?subtopic=points&system=dotpay\" title=\"Zapłać poprzez SMS lub przelewem - POLSKA/POLAND (PLN)\"><img class=\"floating-logo\" src=\"images/shop-system/dotpay.png\" border=\"0\" /></a><br/>
\t\t\t</div>
\t\t\t<div class=\"info-box\">
\t\t\t\tSMS, przelew.<br/>
\t\t\t\t<b>PLN</b><br/>
\t\t\t\tDla graczy z Polski.
\t\t\t</div>
\t\t\t<div class=\"info-box\">
\t\t\t\tONLY POLAND!
\t\t\t</div>
\t\t</div>
\t";
        }
        // line 88
        echo "</div>
<style>
.main-box {
\tmargin: 0 auto;
\t display: inline-block;
    height: 100%;
}
.floating-box {
\tfloat: left;
\tmargin-left: 30px;
}
.floating-logo-box {
\theight: 120px;
\tline-height:8em;
}
.floating-logo {
\tvertical-align: bottom;
}
.info-box {
\theight: 70px;
\ttext-align: center;
}
</style>";
    }

    public function getTemplateName()
    {
        return "gesior-shop-system/points.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 88,  134 => 74,  131 => 73,  117 => 61,  114 => 60,  99 => 47,  96 => 46,  82 => 34,  79 => 33,  61 => 20,  56 => 17,  53 => 16,  43 => 9,  35 => 3,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "gesior-shop-system/points.html.twig", "/var/www/html/system/templates/gesior-shop-system/points.html.twig");
    }
}
