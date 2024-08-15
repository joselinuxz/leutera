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

/* admin.notepad.html.twig */
class __TwigTemplate_1dbaee6f51870c35c3e4151b6606b8fa6d0ee3277325ddca1af74e799344c28b extends \Twig\Template
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
\t<div class=\"col-md-6\">
\t\t<div class=\"box box-danger\">
\t\t\t<div class=\"box-header with-border\">
\t\t\t\t<h3 class=\"box-title\">Notepad</h3>
\t\t\t</div>
\t\t\t<form method=\"post\">
\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label>This is your personal notepad. Be sure to save it each time you modify something.</label>
\t\t\t\t\t\t<textarea class=\"form-control\" style=\"text-align: left;\" name=\"content\" cols=\"50\" rows=\"15\"
\t\t\t\t\t\t\t\t  onchange=\"notepad_onchange(this);\">";
        // line 12
        if ( !(null === ($context["content"] ?? null))) {
            echo twig_escape_filter($this->env, ($context["content"] ?? null), "html", null, true);
        }
        echo "</textarea>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"box-footer\">
\t\t\t\t\t<button name=\"submit\" onclick=\"notepad_save(this);\" value=\"Save\" class=\"btn btn-primary\">Save
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t</form>
\t\t</div>
\t</div>
</div>

";
        // line 25
        echo "
";
        // line 27
        echo "
<script type=\"text/javascript\">
\tvar original_value = document.getElementsByName(\"content\")[0].value;

\tfunction confirm_exit(e) {
\t\tvar e = e || window.event;
\t\tvar message = 'Are you sure you want to quit? Remaining changes will be unsaved.';

\t\t// for IE and Firefox prior to version 4
\t\tif (e) {
\t\t\te.returnValue = message;
\t\t}

\t\t// for Safari
\t\treturn message;
\t}

\tfunction notepad_onchange(e) {
\t\tif (original_value != e.value) {
\t\t\twindow.onbeforeunload = confirm_exit;
\t\t}
\t\treturn true;
\t}

\tfunction notepad_save(e) {
\t\twindow.onbeforeunload = function (e) {
\t\t};
\t\treturn true;
\t}
</script>";
    }

    public function getTemplateName()
    {
        return "admin.notepad.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 27,  60 => 25,  43 => 12,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "admin.notepad.html.twig", "/var/www/html/system/templates/admin.notepad.html.twig");
    }
}
