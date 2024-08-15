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

/* downloads.agreement.html.twig */
class __TwigTemplate_a01e918e9d819f9e0102446b90a9d9999be152c9dacf4f5fc84cc12402dc4a68 extends \Twig\Template
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
        echo "<p>Before you can download the client program please read the ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["config"] ?? null), "lua", []), "serverName", []), "html", null, true);
        echo " Service Agreement and state if you agree to it by clicking on the appropriate button below.</p>
\t\t<div class=\"TableContainer\" >
\t\t\t<table class=\"Table1\" cellpadding=\"0\" cellspacing=\"0\">
\t\t\t\t<div class=\"CaptionContainer\" >
\t\t\t\t\t<div class=\"CaptionInnerContainer\" > 
\t\t\t\t\t\t<span class=\"CaptionEdgeLeftTop\" style=\"background-image:url(images/global/content/box-frame-edge.gif);\" /></span>
\t\t\t\t\t\t<span class=\"CaptionEdgeRightTop\" style=\"background-image:url(images/global/content/box-frame-edge.gif);\" /></span>
\t\t\t\t\t\t<span class=\"CaptionBorderTop\" style=\"background-image:url(images/global/content/table-headline-border.gif);\" ></span> 
\t\t\t\t\t\t<span class=\"CaptionVerticalLeft\" style=\"background-image:url(images/global/content/box-frame-vertical.gif);\" /></span>\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"Text\" >";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["config"] ?? null), "lua", []), "serverName", []), "html", null, true);
        echo " Service Agreement</div>
\t\t\t\t\t\t<span class=\"CaptionVerticalRight\" style=\"background-image:url(images/global/content/box-frame-vertical.gif);\" /></span>
\t\t\t\t\t\t<span class=\"CaptionBorderBottom\" style=\"background-image:url(images/global/content/table-headline-border.gif);\" ></span> 
\t\t\t\t\t\t<span class=\"CaptionEdgeLeftBottom\" style=\"background-image:url(images/global/content/box-frame-edge.gif);\" /></span>
\t\t\t\t\t\t<span class=\"CaptionEdgeRightBottom\" style=\"background-image:url(images/global/content/box-frame-edge.gif);\" /></span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t\t<div class=\"InnerTableContainer\" >
\t\t\t\t\t\t\t<table style=\"width:100%;\" >
\t\t\t\t\t\t\t\t<p>This agreement describes the terms on which ";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["config"] ?? null), "lua", []), "serverName", []), "html", null, true);
        echo " offers you access to an account for being able to play the online role playing game ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["config"] ?? null), "lua", []), "serverName", []), "html", null, true);
        echo " Server. By creating an account or downloading the client software you accept the terms and conditions below and state that you are of full legal age in your country or have the permission of your parents to play this game.</p>
\t\t\t\t\t\t\t\t<p>You agree that the use of the software is at your sole risk. We provide the software, the game, and all other services \"as is\". We disclaim all warranties or conditions of any kind, expressed, implied or statutory, including without limitation the implied warranties of title, non-infringement, merchantability and fitness for a particular purpose. We do not ensure continuous, error-free, secure or virus-free operation of the software, the game, or your account.</p>
\t\t\t\t\t\t\t\t<p>We are not liable for any lost profits or special, incidental or consequential damages arising out of or in connection with the game, including, but not limited to, loss of data, items, accounts, or characters from errors, system downtime, or adjustments of the gameplay.</p>
\t\t\t\t\t\t\t\t<p>While you are playing ";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["config"] ?? null), "lua", []), "serverName", []), "html", null, true);
        echo " Server, you must abide by some rules (\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["config"] ?? null), "lua", []), "serverName", []), "html", null, true);
        echo " Rules\") that are stated on this homepage. If you break any of these rules, your account may be removed and all other services terminated immediately.</p>
\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t</div>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>
\t\t</div>
\t\t<br/>
\t\t<center>
\t\t\t<form action=\"?subtopic=downloads&step=download\" method=\"post\" style=\"padding:0px;margin:0px;\">
\t\t\t\t<div class=\"BigButton\" style=\"background-image:url(images/global/buttons/sbutton.gif)\" >
\t\t\t\t\t<div onMouseOver=\"MouseOverBigButton(this);\" onMouseOut=\"MouseOutBigButton(this);\" >
\t\t\t\t\t\t<div onMouseOver=\"MouseOverBigButton(this);\" onMouseOut=\"MouseOutBigButton(this);\" ><div class=\"BigButtonOver\" style=\"background-image:url(images/global/buttons/sbutton_over.gif);\" ></div>
\t\t\t\t\t\t<input class=\"ButtonText\" type=\"image\" name=\"I agree\" alt=\"I agree\" src=\"images/global/buttons/_sbutton_iagree.gif\" >
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</form>
\t\t</center>";
    }

    public function getTemplateName()
    {
        return "downloads.agreement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 24,  57 => 21,  43 => 10,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "downloads.agreement.html.twig", "/var/www/html/system/templates/downloads.agreement.html.twig");
    }
}
