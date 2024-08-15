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

/* admin.logs.view.html.twig */
class __TwigTemplate_5df352686deebde94fcd0a98619a13cf2b50d9c0b7002b347102a40d5b2e4163 extends \Twig\Template
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
\t\t<h3 class=\"box-title\"><b>";
        // line 3
        echo twig_escape_filter($this->env, ($context["file"] ?? null), "html", null, true);
        echo "</b></h3>
\t</div>
\t<div class=\"box-body\">
        ";
        // line 6
        echo ($context["content"] ?? null);
        echo "
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "admin.logs.view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "admin.logs.view.html.twig", "/var/www/html/system/templates/admin.logs.view.html.twig");
    }
}
