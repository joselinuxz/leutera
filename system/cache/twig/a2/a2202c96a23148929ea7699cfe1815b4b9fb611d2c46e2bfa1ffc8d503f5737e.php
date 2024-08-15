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

/* downloads.html.twig */
class __TwigTemplate_bbd97181960b24850e94bcbf7775a8451ecce28f89c24fd8dc6386a3a787f22f extends \Twig\Template
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
        echo "
  <div class=\"TableContainer\">
\t\t\t<table class=\"Table4\" cellpadding=\"0\" cellspacing=\"0\">
\t\t\t\t<div class=\"CaptionContainer\">
\t\t\t\t\t<div class=\"CaptionInnerContainer\">
\t\t\t\t\t\t<span class=\"CaptionEdgeLeftTop\" style=\"background-image:url(images/global/content/box-frame-edge.gif)\"/></span>
\t\t\t\t\t\t<span class=\"CaptionEdgeRightTop\" style=\"background-image:url(images/global/content/box-frame-edge.gif)\"/></span>
\t\t\t\t\t\t<span class=\"CaptionBorderTop\" style=\"background-image:url(images/global/content/table-headline-border.gif)\"></span>
\t\t\t\t\t\t<span class=\"CaptionVerticalLeft\" style=\"background-image:url(images/global/content/box-frame-vertical.gif)\"/></span>
\t\t\t\t\t\t<div class=\"Text\">Download Client</div>
\t\t\t\t\t\t<span class=\"CaptionVerticalRight\" style=\"background-image:url(images/global/content/box-frame-vertical.gif)\"/></span>
\t\t\t\t\t\t<span class=\"CaptionBorderBottom\" style=\"background-image:url(images/global/content/table-headline-border.gif)\"></span>
\t\t\t\t\t\t<span class=\"CaptionEdgeLeftBottom\" style=\"background-image:url(images/global/content/box-frame-edge.gif)\"/></span>
\t\t\t\t\t\t<span class=\"CaptionEdgeRightBottom\" style=\"background-image:url(images/global/content/box-frame-edge.gif)\"/></span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t\t<div class=\"InnerTableContainer\">
\t\t\t\t\t\t\t<table style=\"width:100%\">
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<table width=\"100%\" cellpadding=0 cellspacing=0>
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td style=\"vertical-align:top\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"TableShadowContainerRightTop\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"TableShadowRightTop\" style=\"background-image:url(images/global/content/table-shadow-rt.gif)\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"TableContentAndRightShadow\" style=\"background-image:url(images/global/content/table-shadow-rm.gif)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"TableContentContainer\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table class=\"TableContent\" width=\"100%\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table style=\"width:100%;text-align:center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td><a type=\"application/octet-stream\" target=\"_top\"><img style=\"width:180px;height:180px;border:0px\" src=\"images/account/download_windows.png\"/></a></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 37
        if (($this->getAttribute(($context["downloads_config"] ?? null), "ip_changer", [], "any", true, true) && ($this->getAttribute(($context["downloads_config"] ?? null), "ip_changer", []) != false))) {
            // line 38
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td><a type=\"application/octet-stream\" target=\"_top\"><img style=\"width:180px;height:180px;border:0px\" src=\"images/account/download_ipchanger.png\"/><br/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 41
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td valign=\"top\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 44
        $context["count"] = twig_length_filter($this->env, $this->getAttribute(($context["downloads_config"] ?? null), "clients", []));
        // line 45
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        $context["i"] = 0;
        // line 46
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["downloads_config"] ?? null), "clients", []));
        foreach ($context['_seq'] as $context["name"] => $context["link"]) {
            // line 47
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            $context["i"] = (($context["i"] ?? null) + 1);
            // line 48
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            echo twig_escape_filter($this->env, $context["link"], "html", null, true);
            echo "\" target=\"_blank\" type=\"application/octet-stream\" target=\"_top\">";
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "</a>";
            if ((($context["i"] ?? null) < ($context["count"] ?? null))) {
                echo " |";
            }
            // line 49
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        if ($this->getAttribute(($context["downloads_config"] ?? null), "minimap", [])) {
            // line 51
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://tibiamaps.io/downloads\" target=\"_blank\" type=\"application/octet-stream\" target=\"_top\"> Minimap</a></br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 54
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 55
        if (($this->getAttribute(($context["downloads_config"] ?? null), "ip_changer", [], "any", true, true) && ($this->getAttribute(($context["downloads_config"] ?? null), "ip_changer", []) != false))) {
            // line 56
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td valign=\"top\"><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["downloads_config"] ?? null), "ip_changer", []), "html", null, true);
            echo "\" target=\"_blank\" type=\"application/octet-stream\" target=\"_top\">Standalone IP Changer</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 58
        echo "\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td colspan=\"";
        // line 61
        if (($this->getAttribute(($context["downloads_config"] ?? null), "ip_changer", [], "any", true, true) && ($this->getAttribute(($context["downloads_config"] ?? null), "ip_changer", []) != false))) {
            echo "2";
        } else {
            echo "1";
        }
        echo "\" >[<span class=\"HelpLink\" style=\"width: 18px; height: 18px;\" ><a href=\"#\"><span class=\"HelperDivIndicator\" onMouseOver=\"ActivateHelperDiv(\$(this), 'Requirements:', '<p><b>Windows:</b><ul><li>Windows XP (Service Pack 2 or higher)/Vista/7</li><li>DirectX version 5.0 or later, or OpenGL</li><li>147 MB free space on your hard disk</li><li>A connection to the internet</li></ul><b>Linux:</b><ul><li>Linux with libc version 6 or later</li><li>X-Window system installed</li><li>Hardware accelerated graphics driver</li><li>146 MB free hard disk space</li><li>A connection to the internet</li><ul></ul>', '');\" onMouseOut=\"\$('#HelperDivContainer').hide();\" >system requirements</span></a></span>]</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"TableShadowContainer\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"TableBottomShadow\" style=\"background-image:url(images/global/content/table-shadow-bm.gif)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"TableBottomLeftShadow\" style=\"background-image:url(images/global/content/table-shadow-bl.gif)\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"TableBottomRightShadow\" style=\"background-image:url(images/global/content/table-shadow-br.gif)\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td style=\"vertical-align:top\"><div class=\"TableShadowContainerRightTop\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"TableShadowRightTop\" style=\"background-image:url(images/global/content/table-shadow-rt.gif)\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"TableContentAndRightShadow\" style=\"background-image:url(images/global/content/table-shadow-rm.gif)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"TableContentContainer\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table class=\"TableContent\" width=\"100%\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td style=\"text-align:center\"><img style=\"width:254px;height:218px;margin:7px\" src=\"images/account/successful_download.jpg\"/></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"TableShadowContainer\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"TableBottomShadow\" style=\"background-image:url(images/global/content/table-shadow-bm.gif)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"TableBottomLeftShadow\" style=\"background-image:url(images/global/content/table-shadow-bl.gif)\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"TableBottomRightShadow\" style=\"background-image:url(images/global/content/table-shadow-br.gif)\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<div class=\"TableShadowContainerRightTop\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"TableShadowRightTop\" style=\"background-image:url(images/global/content/table-shadow-rt.gif)\"></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"TableContentAndRightShadow\" style=\"background-image:url(images/global/content/table-shadow-rm.gif)\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"TableContentContainer\">
\t\t\t\t\t\t\t\t\t\t\t\t<table class=\"TableContent\" width=\"100%\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"LabelV\">Disclaimer</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>The software and any related documentation is provided \"as is\" without warranty of any kind. The entire risk arising out of use of the software remains with you. In no event shall ";
        // line 109
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["config"] ?? null), "lua", []), "serverName", []), "html", null, true);
        echo " be liable for any damages to your computer or loss of data.</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"TableShadowContainer\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"TableBottomShadow\" style=\"background-image:url(images/global/content/table-shadow-bm.gif)\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"TableBottomLeftShadow\" style=\"background-image:url(images/global/content/table-shadow-bl.gif)\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"TableBottomRightShadow\" style=\"background-image:url(images/global/content/table-shadow-br.gif)\"></div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t</div>
\t\t\t\t\t</table>
\t\t\t\t</div>
\t\t\t</td>
\t\t</tr>
<style type=\"text/css\">
/* helper div */
.HelperDivIndicator {
  position: relative;
  cursor: help;
}
#HelperDivContainer {
  display: none;
  position: absolute;
  width: 225px;
  z-index: 1000;
  color: #5A2800;
  font-family: Verdana,Arial,Times New Roman,sans-serif;
  font-size: 9pt;
  text-align: left;
  padding: 10px;
  border: 1px double #5A2800;
  margin-left: 8px;
}
#HelperDivContainer .HelperDivArrow {
  position: absolute;
  top: -1px;
  left: -8px;
  width: 8px;
  height: 13px;
}
#HelperDivContainer #HelperDivHeadline {
  font-size: 12pt;
  font-weight: bold;
}
#HelperDivContainer #HelperDivHeadline {
  position: relative;
  white-space: normal;
  text-align: justify;
  margin-top: 0px;
  margin-bottom: 15px;
}
#HelperDivContainer .Ornament {
  width: 220px;
}
#HelperDivContainer #HelperDivText {
  text-align: justify;
}
#HelperDivContainer #HelperDivText ul {
  padding-left: 20px;
}
</style>
<script type=\"text/javascript\">
// displays a helper div at the current mause position
function ActivateHelperDiv(a_Object, a_Title, a_Text, a_HelperDivPositionID)
{
  // initialize variables
  var l_Left = 0;
  var l_Top = 0;
  var l_WindowHeight = \$(window).height();
  var l_PageHeight = \$(document).height();
  var l_ScrollTop = \$(document).scrollTop();
  // set the new content of the tool tip
  \$('#HelperDivHeadline').html(a_Title);
  \$('#HelperDivText').html(a_Text);
  // check additional parameter and set the position
  if (a_HelperDivPositionID.length > 0) {
    l_Left = \$('#' + a_HelperDivPositionID).offset().left;
    l_Top = \$('#' + a_HelperDivPositionID).offset().top;
  } else {
    l_Left = (a_Object.offset().left + a_Object.width());
    l_Top = a_Object.offset().top;
  }
  // get new tool tip height
  var l_ToolTipHeight = \$('#HelperDivContainer').outerHeight();
  // check if the tool tip fits in the browser window
  if ((l_Top - l_ScrollTop + l_ToolTipHeight) > l_WindowHeight) {
    var l_TopBefore = l_Top;
    l_Top = (l_ScrollTop + l_WindowHeight - l_ToolTipHeight);
    if (l_Top < l_ScrollTop) {
      l_Top = l_ScrollTop;
    }
    \$('.HelperDivArrow').css('top', (l_TopBefore - l_Top));
  } else {
    console.log('# FIT#');
    \$('.HelperDivArrow').css('top', -1);
  }
  // set position and display the tool tip
  \$('#HelperDivContainer').css('top', l_Top);
  \$('#HelperDivContainer').css('left', l_Left);
  \$('#HelperDivContainer').show();
}
</script>";
    }

    public function getTemplateName()
    {
        return "downloads.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 109,  132 => 61,  127 => 58,  121 => 56,  119 => 55,  116 => 54,  111 => 51,  108 => 50,  102 => 49,  93 => 48,  90 => 47,  85 => 46,  82 => 45,  80 => 44,  75 => 41,  70 => 38,  68 => 37,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "downloads.html.twig", "/var/www/html/system/templates/downloads.html.twig");
    }
}
