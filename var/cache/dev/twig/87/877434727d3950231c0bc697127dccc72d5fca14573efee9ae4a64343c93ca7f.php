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

/* public/list.html.twig */
class __TwigTemplate_b68f6dc33e79962761c699bb61b779d1c9931e72cc12b3f9a75f7058128f1391 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "public/list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "public/list.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "public/list.html.twig", 1);
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
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 4, $this->source); })()), "html", null, true);
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
        echo "\t<h1>";
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 8, $this->source); })()), "html", null, true);
        echo "
\t\t";
        // line 9
        ((array_key_exists("filter", $context)) ? (print (twig_escape_filter($this->env, (isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 9, $this->source); })()), "html", null, true))) : (print ("")));
        echo "</h1>
\t<section class=\"row recipes \">
\t\t";
        // line 11
        if ((0 === twig_compare(twig_length_filter($this->env, (isset($context["recipes"]) || array_key_exists("recipes", $context) ? $context["recipes"] : (function () { throw new RuntimeError('Variable "recipes" does not exist.', 11, $this->source); })())), 0))) {
            // line 12
            echo "\t\t\t<p>Aucun résultat associé à votre recherche</p>
\t\t";
        } else {
            // line 14
            echo "\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["recipes"]) || array_key_exists("recipes", $context) ? $context["recipes"] : (function () { throw new RuntimeError('Variable "recipes" does not exist.', 14, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["recipe"]) {
                // line 15
                echo "\t\t\t\t";
                if (((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["recipe"], "isPrivate", [], "any", false, false, false, 15), false)) || (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "user", [], "any", false, false, false, 15) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["recipe"], "author", [], "any", false, false, false, 15), "username", [], "any", false, false, false, 15) === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "user", [], "any", false, false, false, 15), "username", [], "any", false, false, false, 15))))) {
                    // line 16
                    echo "\t\t\t\t\t<div class=\"recipe-container col-lg-4 col-sm-6 col-12\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-10\">
\t\t\t\t\t\t\t\t<a style=\"display:block\" href=\"";
                    // line 19
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recipe_show", ["slug" => twig_get_attribute($this->env, $this->source, $context["recipe"], "slug", [], "any", false, false, false, 19)]), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t\t<div class=\"recipe\">
\t\t\t\t\t\t\t\t\t\t<h2>";
                    // line 21
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["recipe"], "name", [], "any", false, false, false, 21));
                    echo "</h2>
\t\t\t\t\t\t\t\t\t\t<p>Par:
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 23
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["recipe"], "author", [], "any", false, false, false, 23), "username", [], "any", false, false, false, 23));
                    echo "
\t\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"like-container col\">
\t\t\t\t\t\t\t\t<a href=\"";
                    // line 30
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_recipe_like", ["id" => twig_get_attribute($this->env, $this->source, $context["recipe"], "id", [], "any", false, false, false, 30)]), "html", null, true);
                    echo "\" class=\"btn btn-link js-like\">
\t\t\t\t\t\t\t\t\t";
                    // line 31
                    if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 31, $this->source); })()), "user", [], "any", false, false, false, 31) && twig_get_attribute($this->env, $this->source, $context["recipe"], "isLikedByUser", [0 => twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 31, $this->source); })()), "user", [], "any", false, false, false, 31)], "method", false, false, false, 31))) {
                        // line 32
                        echo "\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-heart-fill\"></i>
\t\t\t\t\t\t\t\t\t";
                    } elseif (twig_get_attribute($this->env, $this->source,                     // line 33
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 33, $this->source); })()), "user", [], "any", false, false, false, 33)) {
                        // line 34
                        echo "\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-heart\"></i>
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 36
                    echo "\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
                }
                // line 41
                echo "\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recipe'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "\t\t";
        }
        // line 43
        echo "\t</section>
\t";
        // line 44
        $context["queryParams"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 44, $this->source); })()), "request", [], "any", false, false, false, 44), "query", [], "any", false, false, false, 44), "all", [], "any", false, false, false, 44);
        // line 45
        echo "\t";
        $context["queryString"] = twig_urlencode_filter(twig_array_filter($this->env, (isset($context["queryParams"]) || array_key_exists("queryParams", $context) ? $context["queryParams"] : (function () { throw new RuntimeError('Variable "queryParams" does not exist.', 45, $this->source); })()), function ($__v__, $__k__) use ($context, $macros) { $context["v"] = $__v__; $context["k"] = $__k__; return (0 !== twig_compare((isset($context["k"]) || array_key_exists("k", $context) ? $context["k"] : (function () { throw new RuntimeError('Variable "k" does not exist.', 45, $this->source); })()), "page")); }));
        // line 46
        echo "
\t<ul class=\"pagination center\">
\t\t";
        // line 48
        if ((array_key_exists("total", $context) && (0 !== twig_compare((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 48, $this->source); })()), 0)))) {
            // line 49
            echo "\t\t\t<a href=\"?page=";
            echo twig_escape_filter($this->env, ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 49, $this->source); })()) - 1), "html", null, true);
            echo "&";
            echo twig_escape_filter($this->env, (isset($context["queryString"]) || array_key_exists("queryString", $context) ? $context["queryString"] : (function () { throw new RuntimeError('Variable "queryString" does not exist.', 49, $this->source); })()), "html", null, true);
            echo "\" class=\"btn btn-sm btn-dark round ";
            echo (((0 === twig_compare((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 49, $this->source); })()), 1))) ? ("disabled") : (""));
            echo "\">
\t\t\t\t<i class=\"bi bi-arrow-left\"></i>
\t\t\t</a>
\t\t\t";
            // line 52
            $context["pages"] = twig_round(((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 52, $this->source); })()) / (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 52, $this->source); })())), 0, "ceil");
            // line 53
            echo "\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 53, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 54
                echo "\t\t\t\t<li class=\"";
                echo (((0 === twig_compare((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 54, $this->source); })()), $context["item"]))) ? ("active") : (""));
                echo "\">
\t\t\t\t\t<a href=\"?page=";
                // line 55
                echo twig_escape_filter($this->env, $context["item"], "html", null, true);
                echo "&";
                echo twig_escape_filter($this->env, (isset($context["queryString"]) || array_key_exists("queryString", $context) ? $context["queryString"] : (function () { throw new RuntimeError('Variable "queryString" does not exist.', 55, $this->source); })()), "html", null, true);
                echo "\" class=\"";
                echo (((0 === twig_compare((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 55, $this->source); })()), $context["item"]))) ? ("disabled") : (""));
                echo "\">";
                echo twig_escape_filter($this->env, $context["item"], "html", null, true);
                echo "</a>
\t\t\t\t</li>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "\t\t\t<a href=\"?page=";
            echo twig_escape_filter($this->env, ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 58, $this->source); })()) + 1), "html", null, true);
            echo "&";
            echo twig_escape_filter($this->env, (isset($context["queryString"]) || array_key_exists("queryString", $context) ? $context["queryString"] : (function () { throw new RuntimeError('Variable "queryString" does not exist.', 58, $this->source); })()), "html", null, true);
            echo "\" class=\"btn btn-sm btn-dark round ";
            echo (((0 === twig_compare((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 58, $this->source); })()), (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 58, $this->source); })())))) ? ("disabled") : (""));
            echo "\">
\t\t\t\t<i class=\"bi bi-arrow-right\"></i>
\t\t\t</a>
\t\t";
        }
        // line 62
        echo "\t</ul>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "public/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  236 => 62,  224 => 58,  209 => 55,  204 => 54,  199 => 53,  197 => 52,  186 => 49,  184 => 48,  180 => 46,  177 => 45,  175 => 44,  172 => 43,  169 => 42,  163 => 41,  156 => 36,  152 => 34,  150 => 33,  147 => 32,  145 => 31,  141 => 30,  131 => 23,  126 => 21,  121 => 19,  116 => 16,  113 => 15,  108 => 14,  104 => 12,  102 => 11,  97 => 9,  92 => 8,  82 => 7,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
\t{{title}}
{% endblock %}

{% block body %}
\t<h1>{{title}}
\t\t{{ (filter is defined) ? filter : '' }}</h1>
\t<section class=\"row recipes \">
\t\t{%  if recipes|length == 0 %}
\t\t\t<p>Aucun résultat associé à votre recherche</p>
\t\t{% else %}
\t\t\t{% for recipe in recipes %}
\t\t\t\t{% if recipe.isPrivate == false or (app.user and recipe.author.username is same as(app.user.username)) %}
\t\t\t\t\t<div class=\"recipe-container col-lg-4 col-sm-6 col-12\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-10\">
\t\t\t\t\t\t\t\t<a style=\"display:block\" href=\"{{ path('recipe_show', {'slug' : recipe.slug}) }}\">
\t\t\t\t\t\t\t\t\t<div class=\"recipe\">
\t\t\t\t\t\t\t\t\t\t<h2>{{recipe.name|e}}</h2>
\t\t\t\t\t\t\t\t\t\t<p>Par:
\t\t\t\t\t\t\t\t\t\t\t{{ recipe.author.username|e}}
\t\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"like-container col\">
\t\t\t\t\t\t\t\t<a href=\"{{ path('user_recipe_like', {'id' : recipe.id }) }}\" class=\"btn btn-link js-like\">
\t\t\t\t\t\t\t\t\t{% if app.user and recipe.isLikedByUser(app.user) %}
\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-heart-fill\"></i>
\t\t\t\t\t\t\t\t\t{% elseif app.user %}
\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-heart\"></i>
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t{% endif %}
\t\t\t{% endfor %}
\t\t{% endif %}
\t</section>
\t{% set queryParams = app.request.query.all %}
\t{% set queryString = queryParams|filter((v, k) => k != \"page\")|url_encode %}

\t<ul class=\"pagination center\">
\t\t{% if total is defined and total != 0 %}
\t\t\t<a href=\"?page={{ page - 1}}&{{queryString}}\" class=\"btn btn-sm btn-dark round {{ (page == 1) ? 'disabled' : ''}}\">
\t\t\t\t<i class=\"bi bi-arrow-left\"></i>
\t\t\t</a>
\t\t\t{% set pages = (total / limit)|round(0, 'ceil') %}
\t\t\t{% for item in 1..pages %}
\t\t\t\t<li class=\"{{ (page == item) ? 'active' : '' }}\">
\t\t\t\t\t<a href=\"?page={{ item }}&{{queryString}}\" class=\"{{ (page == item) ? 'disabled' : '' }}\">{{ item }}</a>
\t\t\t\t</li>
\t\t\t{% endfor %}
\t\t\t<a href=\"?page={{ page + 1}}&{{queryString}}\" class=\"btn btn-sm btn-dark round {{ (page == pages) ? 'disabled' : ''}}\">
\t\t\t\t<i class=\"bi bi-arrow-right\"></i>
\t\t\t</a>
\t\t{% endif %}
\t</ul>
{% endblock %}
", "public/list.html.twig", "C:\\laragon\\www\\projet_recettes\\templates\\public\\list.html.twig");
    }
}
