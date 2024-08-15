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
class __TwigTemplate_a44242dc65f1ab06526bbc24608add343d03844b0f001ff1a9e311e581502fd0 extends \Twig\Template
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
        echo "<h3 style=\"text-align: center;\">Welcome to Leutera 1.0</h3>
<h3 style=\"text-align: center;\">We are glad to anounce our first version of Leutera.</h3>
<h3 style=\"text-align: center;\"><br />Experience: 2x<br />Skills: 1x<br />Magic: 1x<br />Loot: 1x<br style=\"box-sizing: border-box; font-family: arial; font-size: 12px; background-color: #fcecd3;\" /><br /></h3>
<p style=\"text-align: center;\"> </p>
<p> </p>
<p> </p>
<p> </p>
<p> </p>
<p style=\"text-align: center;\"> </p>";
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
