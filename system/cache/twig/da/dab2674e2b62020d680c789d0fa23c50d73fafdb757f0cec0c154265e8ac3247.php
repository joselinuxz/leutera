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

/* online.form.html.twig */
class __TwigTemplate_c3fc449cdd424fa89f8d9ea13a3ca1608b7251856b016de33d98522c07fb686a extends \Twig\Template
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
        echo "<div class=\"TableContainer\">
\t<div class=\"CaptionContainer\">
\t\t<div class=\"CaptionInnerContainer\">
\t\t\t<span class=\"CaptionEdgeLeftTop\" style=\"background-image:url(templates/tibiacom/images/global/content/box-frame-edge.gif);\"></span>
\t\t\t<span class=\"CaptionEdgeRightTop\" style=\"background-image:url(templates/tibiacom/images/global/content/box-frame-edge.gif);\"></span>
\t\t\t<span class=\"CaptionBorderTop\" style=\"background-image:url(templates/tibiacom/images/global/content/table-headline-border.gif);\"></span>
\t\t\t<span class=\"CaptionVerticalLeft\" style=\"background-image:url(templates/tibiacom/images/global/content/box-frame-vertical.gif);\"></span>
\t\t\t<div class=\"Text\">Search Character</div>
\t\t\t<span class=\"CaptionVerticalRight\" style=\"background-image:url(templates/tibiacom/images/global/content/box-frame-vertical.gif);\"></span>
\t\t\t<span class=\"CaptionBorderBottom\" style=\"background-image:url(templates/tibiacom/images/global/content/table-headline-border.gif);\"></span>
\t\t\t<span class=\"CaptionEdgeLeftBottom\" style=\"background-image:url(templates/tibiacom/images/global/content/box-frame-edge.gif);\"></span>
\t\t\t<span class=\"CaptionEdgeRightBottom\" style=\"background-image:url(templates/tibiacom/images/global/content/box-frame-edge.gif);\"></span>
\t\t</div></div>
\t<table class=\"Table1\" cellpadding=\"0\" cellspacing=\"0\">
\t\t<tbody><tr>
\t\t\t<td>
\t\t\t\t<div class=\"InnerTableContainer\">
\t\t\t\t\t<table style=\"width: 100%\">
\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<form action=\"";
        // line 21
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getLink')->getCallable(), ["characters"]), "html", null, true);
        echo "\" method=post>
\t\t\t\t\t\t\t\t\t<td style=\"vertical-align:middle;\" class=\"LabelV150\">Character Name:</td>
\t\t\t\t\t\t\t\t\t<td style=\"width: 80%\"><input name=\"name\" style=\"width: 100%\" size=29 maxlength=29></td>
\t\t\t\t\t\t\t\t\t<td>";
        // line 24
        $context["button_name"] = "Submit";
        // line 25
        echo "\t\t\t\t\t\t\t\t\t";
        $this->loadTemplate("buttons.base.html.twig", "online.form.html.twig", 25)->display($context);
        echo "</td>
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</tbody>
\t\t\t\t\t</table>
\t\t\t\t</div>
\t\t\t</td>
\t\t</tr></tbody>
\t</table>
</div>
";
    }

    public function getTemplateName()
    {
        return "online.form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 25,  58 => 24,  52 => 21,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "online.form.html.twig", "/var/www/html/system/templates/online.form.html.twig");
    }
}
