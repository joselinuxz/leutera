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

/* creatures.back_button.html.twig */
class __TwigTemplate_fb01de02202a7baa82bd89e19beddf15d7d7683a09cd9f3de14a31d01a907d8f extends \Twig\Template
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
        echo "<br/></br>
<div style=\"text-align:center\">
\t<form action=\"";
        // line 3
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getLink')->getCallable(), ["creatures"]), "html", null, true);
        echo "\" method=\"post\">
\t\t";
        // line 4
        echo twig_include($this->env, $context, "buttons.back.html.twig");
        echo "
\t</form>
</div>";
    }

    public function getTemplateName()
    {
        return "creatures.back_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 4,  34 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "creatures.back_button.html.twig", "/var/www/html/system/templates/creatures.back_button.html.twig");
    }
}
