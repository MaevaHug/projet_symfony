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

/* public/home.html.twig */
class __TwigTemplate_1a62920a98ee019ae056727630270cc10b4fbcdaa514427a836704008c165051 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "public/home.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "public/home.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "public/home.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
\t<div class=\"test\">
\t\t<img src=\"";
        // line 5
        echo "\" alt=\"\">
\t</div>
\t<!--<div id=\"section-landing\">
\t
\t\t\t<div class=\"wrapper-landing\">
\t\t\t\t<h1>Ceci est un titre</h1>
\t\t\t</div>
\t\t</div>-->
\t";
        // line 13
        if ((array_key_exists("displayLogin", $context) && (0 === twig_compare((isset($context["displayLogin"]) || array_key_exists("displayLogin", $context) ? $context["displayLogin"] : (function () { throw new RuntimeError('Variable "displayLogin" does not exist.', 13, $this->source); })()), true)))) {
            // line 14
            echo "\t\t";
            $this->loadTemplate("security/login.html.twig", "public/home.html.twig", 14)->display($context);
            // line 15
            echo "\t";
        } elseif ((array_key_exists("displayRegistration", $context) && (0 === twig_compare((isset($context["displayRegistration"]) || array_key_exists("displayRegistration", $context) ? $context["displayRegistration"] : (function () { throw new RuntimeError('Variable "displayRegistration" does not exist.', 15, $this->source); })()), true)))) {
            // line 16
            echo "\t\t";
            $this->loadTemplate("security/registration.html.twig", "public/home.html.twig", 16)->display($context);
            // line 17
            echo "\t";
        }
        // line 18
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "public/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 18,  93 => 17,  90 => 16,  87 => 15,  84 => 14,  82 => 13,  72 => 5,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}

\t<div class=\"test\">
\t\t<img src=\"{#{ asset('build/img/logo.png')}#}\" alt=\"\">
\t</div>
\t<!--<div id=\"section-landing\">
\t
\t\t\t<div class=\"wrapper-landing\">
\t\t\t\t<h1>Ceci est un titre</h1>
\t\t\t</div>
\t\t</div>-->
\t{% if displayLogin is defined and displayLogin == true %}
\t\t{% include 'security/login.html.twig' %}
\t{% elseif displayRegistration is defined and displayRegistration == true %}
\t\t{% include 'security/registration.html.twig' %}
\t{% endif %}


{% endblock %}
", "public/home.html.twig", "C:\\laragon\\www\\projet_recettes\\templates\\public\\home.html.twig");
    }
}
