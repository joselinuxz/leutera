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

/* content.html */
class __TwigTemplate_1a7e93a2afa1e73b41174cbbcd86c717efca7363ec8142765b90bfb5b27b4e46 extends \Twig\Template
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
        echo "<table style=\"height: 57px; width: 87.8471%; border-collapse: collapse; margin-left: auto; margin-right: auto;\" border=\"1\">
<tbody>
<tr style=\"height: 18px;\">
<td style=\"width: 33.3333%; background-color: #505050; height: 18px;\"><span style=\"color: #ffffff;\"><strong>Words</strong></span></td>
<td style=\"width: 33.3333%; background-color: #505050; height: 18px;\"><span style=\"color: #ffffff;\"><strong>Description</strong></span></td>
</tr>
<tr style=\"height: 18px; background-color: #f1e0c6;\">
<td style=\"width: 33.3333%; height: 18px;\"><em>!serverinfo</em></td>
<td style=\"width: 33.3333%; height: 18px;\">Information about the server</td>
</tr>
<tr style=\"height: 18px; background-color: #d4c0a1;\">
<td style=\"width: 33.3333%; height: 18px;\"><em>!buyhouse</em></td>
<td style=\"width: 33.3333%; height: 18px;\">Buy house you are looking at</td>
</tr>
<tr style=\"height: 18px; background-color: #f1e0c6;\">
<td style=\"width: 33.3333%; height: 18px;\"><em>!leavehouse</em></td>
<td style=\"width: 33.3333%; height: 18px;\">Leave the house you bought</td>
</tr>
<tr style=\"height: 18px; background-color: f1e0c6;\">
<td style=\"width: 33.3333%; height: 18px; background-color: #d4c0a1;\"><em>!frags</em></td>
<td style=\"width: 33.3333%; height: 18px; background-color: #d4c0a1;\">Information about frags</td>
</tr>
<tr style=\"background-color: f1e0c6; height: 18px;\">
<td style=\"width: 33.3333%; height: 18px; background-color: #f1e0c6;\"><em>!share</em></td>
<td style=\"width: 33.3333%; height: 18px; background-color: #f1e0c6;\">Share experience in party</td>
</tr>
<tr style=\"height: 36px; background-color: #d4c0a1;\">
<td style=\"width: 33.3333%; height: 36px;\"><em>!spells emote</em></td>
<td style=\"width: 33.3333%; height: 36px;\">Enable emote spells (orange color)</td>
</tr>
<tr style=\"height: 18px; background-color: #f1e0c6;\">
<td style=\"width: 33.3333%; height: 18px;\"><em>!spells normal</em></td>
<td style=\"width: 33.3333%; height: 18px;\">Disable emote spells</td>
</tr>
<tr style=\"height: 18px; background-color: #d4c0a1;\">
<td style=\"width: 33.3333%; height: 18px;\"><em>!tasks</em></td>
<td style=\"width: 33.3333%; height: 18px;\">Show the tasks in progress</td>
</tr>
<tr style=\"background-color: #f1e0c6;\">
<td style=\"width: 33.3333%; height: 18px;\"><em>!cast on</em></td>
<td style=\"width: 33.3333%; height: 18px;\">Enable cast system<br /><br /></td>
</tr>
</tbody>
</table>";
    }

    public function getTemplateName()
    {
        return "content.html";
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
        return new Source("", "content.html", "");
    }
}
