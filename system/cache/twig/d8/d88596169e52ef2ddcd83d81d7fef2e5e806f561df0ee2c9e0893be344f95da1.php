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

/* admin.reports.html.twig */
class __TwigTemplate_938ed80a59b70b08edcd53c9ccef1decd3a219c6d0a44ee34f340ca67c48182d extends \Twig\Template
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
    <div class=\"box-header\">
        <h3 class=\"box-title\">Reports:</h3>
    </div>
    <div class=\"box-body\">
        <div class=\"row\">
            <div class=\"col-sm-12\">
                <table id=\"tb_reports\">
                    <thead>
                        <tr>
                            <th>Report name</th>
                            <th>Last updated</th>
                        </tr>
                    </thead>
                    <tbody>
                    ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["files"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
            // line 17
            echo "                        <tr>
                            <td>
                                <a href=\"";
            // line 19
            echo twig_escape_filter($this->env, twig_constant("ADMIN_URL"), "html", null, true);
            echo "?p=reports&file=";
            echo twig_escape_filter($this->env, $this->getAttribute($context["file"], "name", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["file"], "name", []), "html", null, true);
            echo "</a>
                            </td>
                            <td>";
            // line 21
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["file"], "mtime", []), "Y-m-d H:i:s"), "html", null, true);
            echo "</td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "                    </tbody>
                    <tfoot>
                    <tr>
                        <th>Report name</th>
                        <th>Last updated</th>
                    </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
<script>
    \$(document).ready(function () {
        \$('#tb_reports').DataTable();

    });
</script>";
    }

    public function getTemplateName()
    {
        return "admin.reports.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 24,  64 => 21,  55 => 19,  51 => 17,  47 => 16,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "admin.reports.html.twig", "/var/www/html/system/templates/admin.reports.html.twig");
    }
}
