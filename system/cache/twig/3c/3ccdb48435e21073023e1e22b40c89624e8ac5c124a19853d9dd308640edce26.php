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

/* admin.menus.js.html.twig */
class __TwigTemplate_924d35b45a678b26758aeb80c8cccf3e3164091d356d607ff30e0a7918c64915 extends \Twig\Template
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
        echo "<link type=\"text/css\" rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, twig_constant("BASE_URL"), "html", null, true);
        echo "tools/css/jquery-ui.min.css\">
<script src=\"";
        // line 2
        echo twig_escape_filter($this->env, twig_constant("BASE_URL"), "html", null, true);
        echo "tools/js/jquery-ui.min.js\"></script>
<script>
\tvar last_id = [];
\t";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["menus"] ?? null));
        foreach ($context['_seq'] as $context["cat"] => $context["menu"]) {
            // line 6
            echo "\tlast_id[";
            echo twig_escape_filter($this->env, $context["cat"], "html", null, true);
            echo "] = ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["last_id"] ?? null), $context["cat"], [], "array"), "html", null, true);
            echo ";
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['cat'], $context['menu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "\t\$(function () {
\t\t\$(\".sortable\").sortable();
\t\t\$(\".sortable\").disableSelection();

\t\t\$(\".remove-button\").click(function () {
\t\t\tvar id = \$(this).attr(\"id\");
\t\t\t\$('#list-' + id.replace('remove-button-', '')).remove();
\t\t});

\t\t\$(\".add-button\").click(function () {
\t\t\tvar cat = \$(this).attr(\"id\").replace('add-button-', '');
\t\t\tvar id = last_id[cat];
\t\t\tlast_id[cat]++;
\t\t\t\$('#sortable-' + cat).append('<li class=\"ui-state-default\" id=\"list-' + cat + '-' + id + '\"><label>Name:</label><input type=\"text\" name=\"menu[' + cat + '][]\" value=\"\"/> <label>Link:</label><input type=\"text\" name=\"menu_link[' + cat + '][]\" value=\"\"/><input type=\"hidden\" name=\"menu_blank[' + cat + '][]\" value=\"0\" /> <label><input class=\"blank-checkbox\" type=\"checkbox\"/><span title=\"Open in New Window\">Open in New Window</span></label> <input class=\"color-picker\" type=\"text\" name=\"menu_color[' + cat + '][]\" value=\"#ffffff\" /><a class=\"remove-button\" id=\"remove-button-' + cat + '-' + id + '\"><img src=\"";
        // line 21
        echo twig_escape_filter($this->env, twig_constant("BASE_URL"), "html", null, true);
        echo "images/del.png\"/></a></li>'); //add input bo
\t\t\t\$('#remove-button-' + cat + '-' + id).click(function () {
\t\t\t\t\$('#list-' + \$(this).attr(\"id\").replace('remove-button-', '')).remove();
\t\t\t});

\t\t\tinitialiceSpectrum();
\t\t});

\t\t\$(\"#menus-form\").submit(function (e) {
\t\t\t\$('.blank-checkbox:not(:checked)').each(function (i, obj) {
\t\t\t\t\$(obj).parent().prev().val(\"off\");
\t\t\t});

\t\t\t\$('.blank-checkbox:checked').each(function (i, obj) {
\t\t\t\t\$(obj).parent().prev().val(\"on\");
\t\t\t});
\t\t});

\t});
</script>
<style type=\"text/css\">
\t.sortable {
\t\tlist-style-type: none;
\t\tmargin: 0;
\t\tpadding: 0;
\t\twidth: 100%;
\t}

\t.remove-button, .add-button {
\t\tcursor: pointer;
\t}
</style>
<script type=\"text/javascript\" src=\"";
        // line 53
        echo twig_escape_filter($this->env, twig_constant("BASE_URL"), "html", null, true);
        echo "tools/js/spectrum.js\"></script>
<link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 54
        echo twig_escape_filter($this->env, twig_constant("BASE_URL"), "html", null, true);
        echo "tools/css/spectrum.css\"/>
<script type=\"text/javascript\">
\t\$(document).ready(function () {
\t\tinitialiceSpectrum();
\t});

\tfunction initialiceSpectrum() {
\t\t\$(\".color-picker\").spectrum({
\t\t\tpreferredFormat: \"hex\",
\t\t\tshowInput: true,
\t\t\tshowPalette: true,
\t\t\tpalette: [
\t\t\t\t['black', 'white', 'blanchedalmond',
\t\t\t\t\t'rgb(255, 128, 0);', 'hsv 100 70 50'],
\t\t\t\t['red', 'yellow', 'green', 'blue', 'violet']
\t\t\t]
\t\t});
\t}
</script>";
    }

    public function getTemplateName()
    {
        return "admin.menus.js.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 54,  106 => 53,  71 => 21,  56 => 8,  45 => 6,  41 => 5,  35 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "admin.menus.js.html.twig", "/var/www/html/system/templates/admin.menus.js.html.twig");
    }
}
