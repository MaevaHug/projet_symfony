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

/* security/login.html.twig */
class __TwigTemplate_dc8974156b94c295f623b2bebeff96c5ce2480a412a8f578b9e9c55ad0ba6dcd extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        // line 1
        echo "<div class=\"overlay\">
\t<a href=\"";
        // line 2
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\" class=\"close\" id=\"close\">
\t\t<i class=\"bi bi-x-circle-fill\"></i>
\t</a>
\t<div class=\"popup\">
\t\t<h1>Connexion</h1>
\t\t";
        // line 7
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 7, $this->source); })())) {
            // line 8
            echo "\t\t\t<div class=\"alert alert-danger\">
\t\t\t\t";
            // line 9
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 9, $this->source); })()), "messageKey", [], "any", false, false, false, 9), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 9, $this->source); })()), "messageData", [], "any", false, false, false, 9), "security"), "html", null, true);
            echo "
\t\t\t</div>
\t\t";
        }
        // line 12
        echo "
\t\t<form action=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_login");
        echo "\" method=\"post\">
\t\t\t<div class=\"form-group\">
\t\t\t\t<input type=\"text\" placeholder=\"Email\" required name=\"_username\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 15, $this->source); })()), "html", null, true);
        echo "\" class=\"form-control\">
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t\t<input type=\"password\" placeholder=\"Mot de passe\" required name=\"_password\" class=\"form-control\">
\t\t\t</div>
\t\t\t<input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">
\t\t\t<div class=\"form-group\">
\t\t\t\t<button type=\"submit\" class=\"btn btn-success\">Se connecter</button>
\t\t\t\t<a href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_registration");
        echo " \" class=\"btn btn-primary\">Créer un compte</a>
\t\t\t</div>
\t\t</div>
\t</div>
</form>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 23,  81 => 20,  73 => 15,  68 => 13,  65 => 12,  59 => 9,  56 => 8,  54 => 7,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"overlay\">
\t<a href=\"{{ path('home') }}\" class=\"close\" id=\"close\">
\t\t<i class=\"bi bi-x-circle-fill\"></i>
\t</a>
\t<div class=\"popup\">
\t\t<h1>Connexion</h1>
\t\t{% if error %}
\t\t\t<div class=\"alert alert-danger\">
\t\t\t\t{{ error.messageKey | trans(error.messageData, 'security')}}
\t\t\t</div>
\t\t{% endif %}

\t\t<form action=\"{{ path('security_login') }}\" method=\"post\">
\t\t\t<div class=\"form-group\">
\t\t\t\t<input type=\"text\" placeholder=\"Email\" required name=\"_username\" value=\"{{ last_username }}\" class=\"form-control\">
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t\t<input type=\"password\" placeholder=\"Mot de passe\" required name=\"_password\" class=\"form-control\">
\t\t\t</div>
\t\t\t<input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">
\t\t\t<div class=\"form-group\">
\t\t\t\t<button type=\"submit\" class=\"btn btn-success\">Se connecter</button>
\t\t\t\t<a href=\"{{ path('security_registration') }} \" class=\"btn btn-primary\">Créer un compte</a>
\t\t\t</div>
\t\t</div>
\t</div>
</form>
", "security/login.html.twig", "C:\\laragon\\www\\projet_recettes\\templates\\security\\login.html.twig");
    }
}
