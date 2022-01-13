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

/* public/show.html.twig */
class __TwigTemplate_21332d35f4da51570071762010a2ba8c5c2bd40180c2a9dc7cf565e6ed548e60 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "public/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "public/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "public/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\t";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 4, $this->source); })()), "name", [], "any", false, false, false, 4), "html", null, true);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "\t<div class=\"recipe-container  recipe-show\">

\t\t<div class=\"row\">
\t\t\t<div class=\"like-container\">
\t\t\t\t<a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_recipe_like", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12)]), "html", null, true);
        echo "\" class=\"btn btn-link js-like in-recipe\">
\t\t\t\t\t";
        // line 13
        if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "user", [], "any", false, false, false, 13) && twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 13, $this->source); })()), "isLikedByUser", [0 => twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "user", [], "any", false, false, false, 13)], "method", false, false, false, 13))) {
            // line 14
            echo "\t\t\t\t\t\t<i class=\"bi bi-heart-fill\"></i>
\t\t\t\t\t";
        } elseif (twig_get_attribute($this->env, $this->source,         // line 15
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "user", [], "any", false, false, false, 15)) {
            // line 16
            echo "\t\t\t\t\t\t<i class=\"bi bi-heart\"></i>
\t\t\t\t\t";
        }
        // line 18
        echo "\t\t\t\t</a>
\t\t\t</div>

\t\t\t<section class=\"recipe center\">
\t\t\t\t<h1 class=\"center\">";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 22, $this->source); })()), "name", [], "any", false, false, false, 22));
        echo "</h1>

\t\t\t\t<div class=\"metadata \">
\t\t\t\t\t<p>Auteur :
\t\t\t\t\t\t";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 26, $this->source); })()), "author", [], "any", false, false, false, 26), "username", [], "any", false, false, false, 26));
        echo "
\t\t\t\t\t\t<br>
\t\t\t\t\t\tAjoutée le :
\t\t\t\t\t\t";
        // line 29
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 29, $this->source); })()), "createdAt", [], "any", false, false, false, 29), "d/m/Y"), "html", null, true);
        echo "
\t\t\t\t\t\t<br>
\t\t\t\t\t\tCatégorie :
\t\t\t\t\t\t<a class=\"category-link\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category_show", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 32, $this->source); })()), "slug", [], "any", false, false, false, 32)]), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 32, $this->source); })()), "name", [], "any", false, false, false, 32), "html", null, true);
        echo "</a>
\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"Ingredients-list\">
\t\t\t\t\t<h2 class=\"line-decoration\">Ingrédients</h2>
\t\t\t\t\t<ul>
\t\t\t\t\t\t";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ingredientLines"]) || array_key_exists("ingredientLines", $context) ? $context["ingredientLines"] : (function () { throw new RuntimeError('Variable "ingredientLines" does not exist.', 38, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["ingredientLine"]) {
            // line 39
            echo "\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t";
            // line 40
            if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["ingredientLine"], "amount", [], "any", false, false, false, 40), null))) {
                // line 41
                echo "\t\t\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatNumber(twig_get_attribute($this->env, $this->source, $context["ingredientLine"], "amount", [], "any", false, false, false, 41), ["rounding_mode" => "floor"]), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t";
            }
            // line 43
            echo "\t\t\t\t\t\t\t\t";
            ((twig_get_attribute($this->env, $this->source, $context["ingredientLine"], "unity", [], "any", false, false, false, 43)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ingredientLine"], "unity", [], "any", false, false, false, 43), "name", [], "any", false, false, false, 43), "html", null, true))) : (print ("")));
            echo "
\t\t\t\t\t\t\t\t";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ingredientLine"], "ingredient", [], "any", false, false, false, 44), "prefix", [], "any", false, false, false, 44), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t";
            // line 45
            if (((1 === twig_compare(twig_get_attribute($this->env, $this->source, $context["ingredientLine"], "amount", [], "any", false, false, false, 45), 1)) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ingredientLine"], "ingredient", [], "any", false, false, false, 45), "prefix", [], "any", false, false, false, 45), null)))) {
                // line 46
                echo "\t\t\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ingredientLine"], "ingredient", [], "any", false, false, false, 46), "plural", [], "any", false, false, false, 46), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t";
            } else {
                // line 48
                echo "\t\t\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ingredientLine"], "ingredient", [], "any", false, false, false, 48), "name", [], "any", false, false, false, 48), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t";
            }
            // line 50
            echo "\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ingredientLine'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t";
        // line 54
        if ((0 !== twig_compare(twig_length_filter($this->env, (isset($context["stepLines"]) || array_key_exists("stepLines", $context) ? $context["stepLines"] : (function () { throw new RuntimeError('Variable "stepLines" does not exist.', 54, $this->source); })())), 0))) {
            // line 55
            echo "\t\t\t\t\t<div class=\"steps\">
\t\t\t\t\t\t<h2 class=\"line-decoration\">Étapes</h2>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t";
            // line 58
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["stepLines"]) || array_key_exists("stepLines", $context) ? $context["stepLines"] : (function () { throw new RuntimeError('Variable "stepLines" does not exist.', 58, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["stepLine"]) {
                // line 59
                echo "\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t";
                // line 60
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stepLine"], "content", [], "any", false, false, false, 60));
                echo "
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stepLine'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 66
        echo "\t\t\t\t<div class=\"center\">
\t\t\t\t\t";
        // line 67
        if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 67, $this->source); })()), "user", [], "any", false, false, false, 67) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 67, $this->source); })()), "author", [], "any", false, false, false, 67), "username", [], "any", false, false, false, 67) === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 67, $this->source); })()), "user", [], "any", false, false, false, 67), "username", [], "any", false, false, false, 67)))) {
            // line 68
            echo "\t\t\t\t\t\t<a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_recipe_update", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 68, $this->source); })()), "slug", [], "any", false, false, false, 68)]), "html", null, true);
            echo "\" class=\"btn btn-sm btn-warning round\">
\t\t\t\t\t\t\t<i class=\"bi bi-pencil-fill\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-sm btn-danger round onDelete\">
\t\t\t\t\t\t\t<i class=\"bi bi-trash2-fill\"></i>
\t\t\t\t\t\t</button>
\t\t\t\t\t";
        }
        // line 75
        echo "\t\t\t\t</div>
\t\t\t\t";
        // line 76
        $this->loadTemplate("message/_confirmMsg.html.twig", "public/show.html.twig", 76)->display($context);
        // line 77
        echo "\t\t\t</section>
\t\t</div>
\t</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "public/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  247 => 77,  245 => 76,  242 => 75,  231 => 68,  229 => 67,  226 => 66,  221 => 63,  212 => 60,  209 => 59,  205 => 58,  200 => 55,  198 => 54,  194 => 52,  187 => 50,  181 => 48,  175 => 46,  173 => 45,  169 => 44,  164 => 43,  158 => 41,  156 => 40,  153 => 39,  149 => 38,  138 => 32,  132 => 29,  126 => 26,  119 => 22,  113 => 18,  109 => 16,  107 => 15,  104 => 14,  102 => 13,  98 => 12,  92 => 8,  82 => 7,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
\t{{recipe.name}}
{% endblock %}

{% block body %}
\t<div class=\"recipe-container  recipe-show\">

\t\t<div class=\"row\">
\t\t\t<div class=\"like-container\">
\t\t\t\t<a href=\"{{ path('user_recipe_like', {'id' : recipe.id }) }}\" class=\"btn btn-link js-like in-recipe\">
\t\t\t\t\t{% if app.user and recipe.isLikedByUser(app.user) %}
\t\t\t\t\t\t<i class=\"bi bi-heart-fill\"></i>
\t\t\t\t\t{% elseif app.user %}
\t\t\t\t\t\t<i class=\"bi bi-heart\"></i>
\t\t\t\t\t{% endif %}
\t\t\t\t</a>
\t\t\t</div>

\t\t\t<section class=\"recipe center\">
\t\t\t\t<h1 class=\"center\">{{recipe.name|e}}</h1>

\t\t\t\t<div class=\"metadata \">
\t\t\t\t\t<p>Auteur :
\t\t\t\t\t\t{{ recipe.author.username|e}}
\t\t\t\t\t\t<br>
\t\t\t\t\t\tAjoutée le :
\t\t\t\t\t\t{{ recipe.createdAt | date('d/m/Y')}}
\t\t\t\t\t\t<br>
\t\t\t\t\t\tCatégorie :
\t\t\t\t\t\t<a class=\"category-link\" href=\"{{ path('category_show', {'slug' : category.slug }) }}\">{{category.name}}</a>
\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"Ingredients-list\">
\t\t\t\t\t<h2 class=\"line-decoration\">Ingrédients</h2>
\t\t\t\t\t<ul>
\t\t\t\t\t\t{% for ingredientLine in ingredientLines %}
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t{% if ingredientLine.amount != null %}
\t\t\t\t\t\t\t\t\t{{ ingredientLine.amount |format_number({rounding_mode: 'floor'}) }}
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t{{ (ingredientLine.unity) ? ingredientLine.unity.name : '' }}
\t\t\t\t\t\t\t\t{{ ingredientLine.ingredient.prefix }}
\t\t\t\t\t\t\t\t{% if ingredientLine.amount > 1 and ingredientLine.ingredient.prefix == null %}
\t\t\t\t\t\t\t\t\t{{ ingredientLine.ingredient.plural}}
\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t{{ ingredientLine.ingredient.name }}
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t{% if stepLines|length != 0 %}
\t\t\t\t\t<div class=\"steps\">
\t\t\t\t\t\t<h2 class=\"line-decoration\">Étapes</h2>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t{% for stepLine in stepLines %}
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t{{ stepLine.content|e}}
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t{% endif %}
\t\t\t\t<div class=\"center\">
\t\t\t\t\t{% if app.user and recipe.author.username is same as(app.user.username) %}
\t\t\t\t\t\t<a href=\"{{ path('user_recipe_update', {'slug' : recipe.slug }) }}\" class=\"btn btn-sm btn-warning round\">
\t\t\t\t\t\t\t<i class=\"bi bi-pencil-fill\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-sm btn-danger round onDelete\">
\t\t\t\t\t\t\t<i class=\"bi bi-trash2-fill\"></i>
\t\t\t\t\t\t</button>
\t\t\t\t\t{% endif %}
\t\t\t\t</div>
\t\t\t\t{% include \"message/_confirmMsg.html.twig\" %}
\t\t\t</section>
\t\t</div>
\t</div>
{% endblock %}
", "public/show.html.twig", "C:\\laragon\\www\\projet_recettes\\templates\\public\\show.html.twig");
    }
}
