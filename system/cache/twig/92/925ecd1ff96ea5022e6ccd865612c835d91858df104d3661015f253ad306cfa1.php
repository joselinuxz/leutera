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

/* gesior-shop-system/admin-offers.html.twig */
class __TwigTemplate_9ba5d6769df01283ea799f0ae6c9e0214a9fd41836b0612856bb5fcb714da4ee extends \Twig\Template
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
        echo "<div class=\"box\">
\t<div class=\"box-header\">
\t\t<h3 class=\"box-title\">Gifts System</h3>
\t\t<div class=\"box-tools pull-right\">
\t\t\t<a href=\"?p=gifts&action=offer_form\"><span class=\"btn btn-success\">Add Offer</span></a>
\t\t</div>
\t</div>

\t<div class=\"box-body\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-sm-12\">
\t\t\t\t<table class=\"tb_datatable\">
\t\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th width=\"5%\">ID</th>
\t\t\t\t\t\t<th>Name</th>
\t\t\t\t\t\t<th>Type</th>
\t\t\t\t\t\t<th>Price</th>
\t\t\t\t\t\t<th>Information</th>
\t\t\t\t\t\t<th>Description</th>
\t\t\t\t\t\t<th>Hidden</th>
\t\t\t\t\t\t<th style=\"width: 150px;\">Options</th>
\t\t\t\t\t</tr>
\t\t\t\t\t</thead>

\t\t\t\t\t<tbody>
\t\t\t\t\t";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["offers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["offer"]) {
            // line 28
            echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["offer"], "id", []), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["offer"], "name", []), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 31
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($context["offer"], "type", [])), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["offer"], "points", []), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["offer"], "information", []), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 34
            echo $this->getAttribute($context["offer"], "description", []);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 35
            if ($this->getAttribute($context["offer"], "hidden", [])) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a href=\"?p=gifts&action=toggle_hidden&id=";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["offer"], "id", []), "html", null, true);
            echo "\" class=\"ico\" title=\"";
            if (($this->getAttribute($context["offer"], "hidden", []) != 1)) {
                echo "Hide";
            } else {
                echo "Show";
            }
            echo "\">
\t\t\t\t\t\t\t\t\t";
            // line 38
            if (($this->getAttribute($context["offer"], "hidden", []) != 1)) {
                // line 39
                echo "\t\t\t\t\t\t\t\t\t\t<span class=\"btn btn-primary btn-sm btn-flat\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-eye\"></i>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t";
            } else {
                // line 43
                echo "\t\t\t\t\t\t\t\t\t\t<span class=\"btn btn-default btn-sm btn-flat\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-eye-slash\"></i>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t";
            }
            // line 47
            echo "\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t<a href=\"?p=gifts&action=delete&id=";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["offer"], "id", []), "html", null, true);
            echo "\" class=\"ico\" onclick=\"return confirm('Are you sure?');\" title=\"Delete\">
\t\t\t\t\t\t\t\t\t<span class=\"btn btn-danger btn-sm delete btn-flat\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-trash\"></i>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['offer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>
\t\t</div>
\t</div>
</div>

<script>
\t\$(function () {
\t\t\$('.tb_datatable').DataTable({
\t\t\t\"order\": [[ 0, \"asc\" ]]
\t\t});
\t});
</script>";
    }

    public function getTemplateName()
    {
        return "gesior-shop-system/admin-offers.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 57,  126 => 49,  122 => 47,  116 => 43,  110 => 39,  108 => 38,  98 => 37,  89 => 35,  85 => 34,  81 => 33,  77 => 32,  73 => 31,  69 => 30,  65 => 29,  62 => 28,  58 => 27,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "gesior-shop-system/admin-offers.html.twig", "/var/www/html/system/templates/gesior-shop-system/admin-offers.html.twig");
    }
}
