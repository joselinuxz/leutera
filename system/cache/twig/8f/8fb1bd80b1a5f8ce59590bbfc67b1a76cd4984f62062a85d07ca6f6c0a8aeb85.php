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

/* gesior-shop-system/paypal-terms.html.twig */
class __TwigTemplate_5914b1ced82ab3291134efe2fe37e2032a9ce44238abdb433a4c5d5f4a7b0a96 extends \Twig\Template
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
        echo "<style type=\"text/css\">
.small-text {
\tfont-size: x-small;
\tfont-weight: bold;
}
</style>
<div align=\"center\">
\t<table width=\"383\">
\t  <tbody>
\t\t<tr >
\t\t  <td width=\"50%\"><b>Terms and agreements.</b><br />
\t\t\t<span class=\"small-text\">If you do not agree with these terms you are not allowed to donate.</span></td>
\t\t  </tr>
\t\t<tr >
\t\t  <td><div >
\t\t\t<textarea name=\"textarea\" cols=\"60\" rows=\"12\" readonly=\"true\" wrap=\"physical\" font-family=\"verdana\">* If you are under 18 years old you need to have your parents permission.
* You are not allowed to donate with money that does not belong to you.
* We do not sell items or points, this is a donation.
* If you lose any donation items you will not get it back.
* We have the rights to modify any of the donation items.
* We have the rights to change the prices whenever we want.
* We have the rights to reset the server whenever we want.
* We have the rights to change the terms and agreements whenever we want.
* We do not refund any payments, donations.</textarea>
\t\t\t<center>
\t\t\t\t<form action=\"?subtopic=points&system=paypal\" method=\"post\">
\t\t\t\t\t<input type=\"hidden\" name=\"agree\" value=\"1\" />
\t\t\t\t\t<input value=\"I Agree\" type=\"submit\">
\t\t\t\t</form>
\t\t\t</center>
\t\t</div>
\t\t</td>
\t\t</tr>
\t  </tbody>
\t</table>
</div>";
    }

    public function getTemplateName()
    {
        return "gesior-shop-system/paypal-terms.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "gesior-shop-system/paypal-terms.html.twig", "/var/www/html/system/templates/gesior-shop-system/paypal-terms.html.twig");
    }
}
