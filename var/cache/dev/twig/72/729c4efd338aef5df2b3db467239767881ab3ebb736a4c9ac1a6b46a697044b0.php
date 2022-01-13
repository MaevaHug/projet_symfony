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

/* admin/ingredients.html.twig */
class __TwigTemplate_edbc0eb6210163f1d7a3eb423c86f3e311cea16caec39ae17e5fc1dfbbd8fbec extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/ingredients.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/ingredients.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/ingredients.html.twig", 1);
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
        echo "
\t<h1>";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 9, $this->source); })()), "html", null, true);
        echo "</h1>

\t<table class=\"table\">
\t\t<thead>
\t\t\t<tr class=\"row\">
\t\t\t\t<th class=\"col-2\">Pfx</th>
\t\t\t\t<th class=\"col-3\">Ingrédient</th>
\t\t\t\t<th class=\"col-3\">Pluriel</th>
\t\t\t\t<th class=\"col-1\">recettes concernées</th>
\t\t\t\t<th class=\"inline col-3\">Action</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ingredients"]) || array_key_exists("ingredients", $context) ? $context["ingredients"] : (function () { throw new RuntimeError('Variable "ingredients" does not exist.', 22, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["ingredient"]) {
            // line 23
            echo "\t\t\t\t<tr class=\"row\">
\t\t\t\t\t";
            // line 24
            if ((array_key_exists("ingredient_edit", $context) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["ingredient"], "id", [], "any", false, false, false, 24), (isset($context["ingredient_edit"]) || array_key_exists("ingredient_edit", $context) ? $context["ingredient_edit"] : (function () { throw new RuntimeError('Variable "ingredient_edit" does not exist.', 24, $this->source); })()))))) {
                // line 25
                echo "\t\t\t\t\t\t";
                echo                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), 'form_start');
                echo "
\t\t\t\t\t\t<td class=\"col-2\">
\t\t\t\t\t\t\t";
                // line 27
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "prefix", [], "any", false, false, false, 27), 'row');
                echo "</td>
\t\t\t\t\t\t<td class=\"col-3\">
\t\t\t\t\t\t\t";
                // line 29
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "name", [], "any", false, false, false, 29), 'row');
                echo "
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"col-3\">";
                // line 31
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "plural", [], "any", false, false, false, 31), 'row');
                echo "</td>
\t\t\t\t\t\t<td class=\"col-1\">";
                // line 32
                echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ingredient"], "ingredientLines", [], "any", false, false, false, 32)), "html", null, true);
                echo "</td>
\t\t\t\t\t\t<td class=\"inline col-3\">
\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-sm btn-success round\">
\t\t\t\t\t\t\t\t<i class=\"bi bi-check-lg\"></i>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t<a href=\"";
                // line 37
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_ingredients");
                echo "\">
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-sm btn-danger round\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-x-lg\"></i>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
                // line 42
                echo                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), 'form_end');
                echo "
\t\t\t\t\t\t</td>

\t\t\t\t\t";
            } else {
                // line 46
                echo "\t\t\t\t\t\t<td class=\"col-2\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ingredient"], "prefix", [], "any", false, false, false, 46), "html", null, true);
                echo "</td>
\t\t\t\t\t\t<td class=\"col-3\">
\t\t\t\t\t\t\t";
                // line 48
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ingredient"], "name", [], "any", false, false, false, 48), "html", null, true);
                echo "
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"col-3\">";
                // line 50
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ingredient"], "plural", [], "any", false, false, false, 50), "html", null, true);
                echo "</td>
\t\t\t\t\t\t<td class=\"col-1\">";
                // line 51
                echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ingredient"], "ingredientLines", [], "any", false, false, false, 51)), "html", null, true);
                echo "</td>
\t\t\t\t\t\t<td class=\"inline col-3\">
\t\t\t\t\t\t\t<a href=\"";
                // line 53
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_ingredient_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["ingredient"], "id", [], "any", false, false, false, 53)]), "html", null, true);
                echo "\" class=\"btn btn-sm btn-warning round\">
\t\t\t\t\t\t\t\t<i class=\"bi bi-pencil-fill\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-sm btn-danger round onDelete\" ";
                // line 56
                if ((0 !== twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ingredient"], "ingredientLines", [], "any", false, false, false, 56)), 0))) {
                    echo " disabled ";
                }
                echo ">
\t\t\t\t\t\t\t<i class=\"bi bi-trash2-fill\"></i>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t";
                // line 60
                $this->loadTemplate("message/_confirmMsg.html.twig", "admin/ingredients.html.twig", 60)->display($context);
                // line 61
                echo "
\t\t\t\t\t";
            }
            // line 63
            echo "\t\t\t\t</tr>
\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ingredient'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "\t\t\t";
        if ((array_key_exists("action", $context) && (0 === twig_compare((isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 65, $this->source); })()), "new")))) {
            // line 66
            echo "\t\t\t\t<tr class=\"row\">
\t\t\t\t\t<td class=\"col-2\">
\t\t\t\t\t\t";
            // line 68
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), 'form_start');
            echo "
\t\t\t\t\t\t";
            // line 69
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "prefix", [], "any", false, false, false, 69), 'row');
            echo "
\t\t\t\t\t</td>
\t\t\t\t\t<td class=\"col-3\">
\t\t\t\t\t\t";
            // line 72
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "name", [], "any", false, false, false, 72), 'row');
            echo "
\t\t\t\t\t</td>
\t\t\t\t\t<td class=\"col-3\">
\t\t\t\t\t\t";
            // line 75
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), "plural", [], "any", false, false, false, 75), 'row');
            echo "
\t\t\t\t\t</td>
\t\t\t\t\t<td class=\"col-1\"></td>
\t\t\t\t\t<td class=\"inline col-3\">
\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-sm btn-success round\">
\t\t\t\t\t\t\t<i class=\"bi bi-check-lg\"></i>
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<a href=\"";
            // line 82
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_ingredients");
            echo "\">
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-sm btn-danger round\">
\t\t\t\t\t\t\t\t<i class=\"bi bi-x-lg\"></i>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t";
            // line 87
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 87, $this->source); })()), 'form_end');
            echo "
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t";
        }
        // line 91
        echo "\t\t</tbody>
\t</table>
\t<div class=\"row center\">
\t\t<a href=\" ";
        // line 94
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_ingredient_add");
        echo "\" class=\"btn btn-sm btn-dark btn-new-admin round\">
\t\t\t<i class=\"bi bi-plus-lg\"></i>
\t\t</a>
\t</div>

\t
\t
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/ingredients.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  285 => 94,  280 => 91,  273 => 87,  265 => 82,  255 => 75,  249 => 72,  243 => 69,  239 => 68,  235 => 66,  232 => 65,  217 => 63,  213 => 61,  211 => 60,  202 => 56,  196 => 53,  191 => 51,  187 => 50,  182 => 48,  176 => 46,  169 => 42,  161 => 37,  153 => 32,  149 => 31,  144 => 29,  139 => 27,  133 => 25,  131 => 24,  128 => 23,  111 => 22,  95 => 9,  92 => 8,  82 => 7,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
\t{{ title }}
{% endblock %}

{% block body %}

\t<h1>{{ title }}</h1>

\t<table class=\"table\">
\t\t<thead>
\t\t\t<tr class=\"row\">
\t\t\t\t<th class=\"col-2\">Pfx</th>
\t\t\t\t<th class=\"col-3\">Ingrédient</th>
\t\t\t\t<th class=\"col-3\">Pluriel</th>
\t\t\t\t<th class=\"col-1\">recettes concernées</th>
\t\t\t\t<th class=\"inline col-3\">Action</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t{% for ingredient in ingredients %}
\t\t\t\t<tr class=\"row\">
\t\t\t\t\t{% if ingredient_edit is defined and ingredient.id == ingredient_edit %}
\t\t\t\t\t\t{{form_start(form)}}
\t\t\t\t\t\t<td class=\"col-2\">
\t\t\t\t\t\t\t{{ form_row(form.prefix) }}</td>
\t\t\t\t\t\t<td class=\"col-3\">
\t\t\t\t\t\t\t{{ form_row(form.name) }}
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"col-3\">{{ form_row(form.plural) }}</td>
\t\t\t\t\t\t<td class=\"col-1\">{{ ingredient.ingredientLines|length}}</td>
\t\t\t\t\t\t<td class=\"inline col-3\">
\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-sm btn-success round\">
\t\t\t\t\t\t\t\t<i class=\"bi bi-check-lg\"></i>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t<a href=\"{{ path('admin_ingredients') }}\">
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-sm btn-danger round\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-x-lg\"></i>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t{{form_end(form)}}
\t\t\t\t\t\t</td>

\t\t\t\t\t{% else %}
\t\t\t\t\t\t<td class=\"col-2\">{{ ingredient.prefix }}</td>
\t\t\t\t\t\t<td class=\"col-3\">
\t\t\t\t\t\t\t{{ ingredient.name }}
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"col-3\">{{ ingredient.plural }}</td>
\t\t\t\t\t\t<td class=\"col-1\">{{ ingredient.ingredientLines|length}}</td>
\t\t\t\t\t\t<td class=\"inline col-3\">
\t\t\t\t\t\t\t<a href=\"{{ path('admin_ingredient_edit', {'id' : ingredient.id}) }}\" class=\"btn btn-sm btn-warning round\">
\t\t\t\t\t\t\t\t<i class=\"bi bi-pencil-fill\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-sm btn-danger round onDelete\" {% if ingredient.ingredientLines|length != 0 %} disabled {% endif %}>
\t\t\t\t\t\t\t<i class=\"bi bi-trash2-fill\"></i>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t{% include \"message/_confirmMsg.html.twig\" %}

\t\t\t\t\t{% endif %}
\t\t\t\t</tr>
\t\t\t{% endfor %}
\t\t\t{% if action is defined and action == 'new'%}
\t\t\t\t<tr class=\"row\">
\t\t\t\t\t<td class=\"col-2\">
\t\t\t\t\t\t{{ form_start(form) }}
\t\t\t\t\t\t{{ form_row(form.prefix) }}
\t\t\t\t\t</td>
\t\t\t\t\t<td class=\"col-3\">
\t\t\t\t\t\t{{ form_row(form.name) }}
\t\t\t\t\t</td>
\t\t\t\t\t<td class=\"col-3\">
\t\t\t\t\t\t{{ form_row(form.plural) }}
\t\t\t\t\t</td>
\t\t\t\t\t<td class=\"col-1\"></td>
\t\t\t\t\t<td class=\"inline col-3\">
\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-sm btn-success round\">
\t\t\t\t\t\t\t<i class=\"bi bi-check-lg\"></i>
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<a href=\"{{ path('admin_ingredients') }}\">
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-sm btn-danger round\">
\t\t\t\t\t\t\t\t<i class=\"bi bi-x-lg\"></i>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t{{form_end(form)}}
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t{% endif %}
\t\t</tbody>
\t</table>
\t<div class=\"row center\">
\t\t<a href=\" {{ path('admin_ingredient_add') }}\" class=\"btn btn-sm btn-dark btn-new-admin round\">
\t\t\t<i class=\"bi bi-plus-lg\"></i>
\t\t</a>
\t</div>

\t
\t
{% endblock %}
", "admin/ingredients.html.twig", "C:\\laragon\\www\\projet_recettes\\templates\\admin\\ingredients.html.twig");
    }
}
