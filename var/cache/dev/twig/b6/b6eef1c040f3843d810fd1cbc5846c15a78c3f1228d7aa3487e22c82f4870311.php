<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* message/_confirmMsg.html.twig */
class __TwigTemplate_1fab5a77dc7115fc6289b76b76c918c59f060ea046b2db4706f28d232e878d88 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "message/_confirmMsg.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "message/_confirmMsg.html.twig"));

        // line 1
        echo "<div class=\"overlay\" style=\"display: none\">
\t";
        // line 2
        if (array_key_exists("deleteMsg", $context)) {
            // line 3
            echo "\t\t<div class=\"confirmMsg\">
\t\t\t<h3>";
            // line 4
            echo twig_escape_filter($this->env, (isset($context["deleteMsg"]) || array_key_exists("deleteMsg", $context) ? $context["deleteMsg"] : (function () { throw new RuntimeError('Variable "deleteMsg" does not exist.', 4, $this->source); })()), "html", null, true);
            echo "</h3>
\t\t\t<br>
\t\t\t<div>
\t\t\t\t";
            // line 7
            if (array_key_exists("element", $context)) {
                // line 8
                echo "\t\t\t\t\t";
                $this->loadTemplate((("message/_" . (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 8, $this->source); })())) . ".html.twig"), "message/_confirmMsg.html.twig", 8)->display($context);
                // line 9
                echo "\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-sm btn-danger round msgClose\">
\t\t\t\t\t\t\t<i class=\"bi bi-x-lg\"></i>
\t\t\t\t\t\t</button>
\t\t\t\t";
            }
            // line 13
            echo "\t\t\t</div>
\t\t</div>
\t";
        }
        // line 16
        echo "</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "message/_confirmMsg.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 16,  68 => 13,  62 => 9,  59 => 8,  57 => 7,  51 => 4,  48 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"overlay\" style=\"display: none\">
\t{% if deleteMsg is defined %}
\t\t<div class=\"confirmMsg\">
\t\t\t<h3>{{ deleteMsg }}</h3>
\t\t\t<br>
\t\t\t<div>
\t\t\t\t{% if element is defined %}
\t\t\t\t\t{% include 'message/_' ~ element ~'.html.twig' %}
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-sm btn-danger round msgClose\">
\t\t\t\t\t\t\t<i class=\"bi bi-x-lg\"></i>
\t\t\t\t\t\t</button>
\t\t\t\t{% endif %}
\t\t\t</div>
\t\t</div>
\t{% endif %}
</div>
", "message/_confirmMsg.html.twig", "C:\\laragon\\www\\projet_recettes\\templates\\message\\_confirmMsg.html.twig");
    }
}
