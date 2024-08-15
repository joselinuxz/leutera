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

/* gesior-shop-system/admin-offers-add.html.twig */
class __TwigTemplate_1df2031d69625b82e82990b56f530912dbe9ca8476dad622399065b64485fe40 extends \Twig\Template
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
        echo "<div class=\"row\">
\t<form method=\"post\" action=\"?p=gifts&action=add_form\">
\t\t<input type=\"hidden\" name=\"action\" value=\"add\"/>

\t\t<div class=\"col-md-8\">
\t\t\t<div class=\"box box-info\">
\t\t\t\t<div class=\"box-header with-border\">
\t\t\t\t\t<h3 class=\"box-title\">Add Offer</h3>
\t\t\t\t</div>

\t\t\t\t<div class=\"box-body\">

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"type\" class=\"col-sm-2 control-label\">Type</label>

\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t";
        // line 17
        if ((twig_length_filter($this->env, ($context["categories"] ?? null)) <= 0)) {
            // line 18
            echo "\t\t\t\t\t\t\t\t<label name=\"type\" class=\"form-control\">No categories in database</label>
\t\t\t\t\t\t\t";
        } else {
            // line 20
            echo "\t\t\t\t\t\t\t\t<select name=\"type\" class=\"form-control\" id=\"type\">
\t\t\t\t\t\t\t\t\t";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 22
                echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", []), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "description", []), "html", null, true);
                echo "</option>
\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t";
        }
        // line 26
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"points\" class=\"col-sm-2 control-label\">Points</label>

\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<input type=\"number\" class=\"form-control\" name=\"points\" placeholder=\"Points\" required/>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"offer_name\" class=\"col-sm-2 control-label\">Offer Name</label>

\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"offer_name\" placeholder=\"Offer Name\" required/>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"description\" class=\"col-sm-2 control-label\">Description</label>

\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<textarea class=\"form-control\" name=\"description\" rows=\"5\" cols=\"50\" placeholder=\"Offer Description (you can use HTML) (can be empty)\"></textarea>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">Extra</label>

\t\t\t\t\t\t<div id=\"extra\" class=\"col-sm-10\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"box-footer\">
\t\t\t\t\t<td align=\"right\"><input type=\"submit\" class=\"btn btn-info pull-right\" value=\"Save\"/></td>
\t\t\t\t\t<td align=\"left\">
\t\t\t\t\t\t<input type=\"button\" onclick=\"window.location = '";
        // line 63
        echo twig_escape_filter($this->env, twig_constant("ADMIN_URL"), "html", null, true);
        echo "?p=gifts';\" class=\"btn btn-default\" value=\"Cancel\"/>
\t\t\t\t\t</td>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</form>
</div>

<script type=\"text/javascript\">
\t\$(function() {
\t\t\$('#type').change(function() {
\t\t\tupdateFields();
\t\t});

\t\tupdateFields();
\t});

\tfunction updateFields() {
\t\tvar value = \$('#type').val();
\t\t\$('#extra').empty();

\t\tif(value == 'item' || value == 'armor') {
\t\t\t\$('#extra').append('<div class=\"input-group\"><input class=\"form-control\" type=\"number\" name=\"item_id\" min=\"100\" placeholder=\"Item ID\" required/><input class=\"form-control\" type=\"number\" name=\"item_count\" min=\"1\" max=\"100\" placeholder=\"Item Count\" required/></div>');
\t\t} else if(value == 'container') {
\t\t\t\$('#extra').append('<div class=\"input-group\"><input class=\"form-control\" type=\"number\" name=\"item_id\" min=\"100\" placeholder=\"Item ID\" required/><input class=\"form-control\" type=\"number\" name=\"item_count\" min=\"1\" max=\"100\" placeholder=\"Item Count\" required/></div><br/>');
\t\t\t\$('#extra').append('<div class=\"input-group\"><input class=\"form-control\" type=\"number\" name=\"container_id\" min=\"100\" placeholder=\"Container ID\" required/><input class=\"form-control\" type=\"number\" name=\"container_count\" min=\"1\" max=\"100\" placeholder=\"Container Count\" required/></div>');
\t\t} else if(value == 'addon') {
\t\t\t\$('#extra').append('<div class=\"input-group\"><input class=\"form-control\" type=\"number\" name=\"look_female\" min=\"1\" placeholder=\"Female (girl) Look Type\" required/><input class=\"form-control\" type=\"number\" name=\"addons_female\" min=\"1\" max=\"3\" placeholder=\"Female Addons (1, 2 or 3 for both)\" required/></div><br/>');
\t\t\t\$('#extra').append('<div class=\"input-group\"><input class=\"form-control\" type=\"number\" name=\"look_male\" min=\"1\" placeholder=\"Male (boy) Look Type\" required/><input class=\"form-control\" type=\"number\" name=\"addons_male\" min=\"1\" max=\"3\" placeholder=\"Male Addons (1, 2 or 3 for both)\" required/></div>');
\t\t} else if(value == 'mount') {
\t\t\t\$('#extra').append('<input class=\"form-control\" type=\"number\" name=\"mount_id\" min=\"1\" placeholder=\"Mount ID (take from mounts.xml)\" required/>');
\t\t} else if(value == 'pacc') {
\t\t\t\$('#extra').append('<input class=\"form-control\" type=\"number\" name=\"days\" min=\"1\" placeholder=\"Premium Days\" required/>');
\t\t}
\t}
</script>
";
    }

    public function getTemplateName()
    {
        return "gesior-shop-system/admin-offers-add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 63,  76 => 26,  72 => 24,  61 => 22,  57 => 21,  54 => 20,  50 => 18,  48 => 17,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "gesior-shop-system/admin-offers-add.html.twig", "/var/www/html/system/templates/gesior-shop-system/admin-offers-add.html.twig");
    }
}
