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

/* news.html.twig */
class __TwigTemplate_74cf0766d46878357717da9e9af09e86a1cf4d60d06e6476aa55f2bf3ba81eed extends \Twig\Template
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
        echo "<tr>
\t<td class=\"zheadline\" colspan=\"2\">&nbsp;&nbsp;<span class=\"znewsdate\">";
        // line 2
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["date"] ?? null), ($context["news_date_format"] ?? null)), "html", null, true);
        echo " - </span><b>";
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "</b></td>
</tr>
<tr>
\t<td class=\"znewsbody\" colspan=\"2\">";
        // line 5
        echo ($context["content"] ?? null);
        echo "</td>
</tr>
<tr>
\t<td class=\"znewsdate\">
\t\t<span style=\"color:#5a2800\">&nbsp;&nbsp;</span>";
        // line 9
        if ( !twig_test_empty(($context["author"] ?? null))) {
            echo " by ";
            echo twig_escape_filter($this->env, ($context["author"] ?? null), "html", null, true);
        }
        echo "</td>
\t<td class=\"znewsdate\"></td>
</tr>
<tr>
\t<td class=\"znewsdate\" colspan=\"2\">
\t\t";
        // line 14
        if ( !(null === ($context["comments"] ?? null))) {
            // line 15
            echo "\t\t\t<div style=\"text-align: right; margin-right: 10px;\"><a href=\"";
            echo twig_escape_filter($this->env, ($context["comments"] ?? null), "html", null, true);
            echo "\">» Comment on this news</a></div>
\t\t";
        }
        // line 17
        echo "\t</td>
</tr>
";
    }

    public function getTemplateName()
    {
        return "news.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 17,  61 => 15,  59 => 14,  48 => 9,  41 => 5,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "news.html.twig", "/var/www/html/templates/tibiana/news.html.twig");
    }
}
