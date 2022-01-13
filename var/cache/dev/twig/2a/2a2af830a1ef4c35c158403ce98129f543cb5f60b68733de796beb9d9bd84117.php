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

/* admin/categories.html.twig */
class __TwigTemplate_db133671baffc04e8573ec54dec4bbc1c5a472b76c91050b3214d75e38ce63b6 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/categories.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/categories.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/categories.html.twig", 1);
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
\t\t\t\t<th class=\"col-7\">Catégorie</th>
\t\t\t\t<th class=\"col-2\">Recettes concernées</th>
\t\t\t\t<th class=\"inline col-3\">Action</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 20, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 21
            echo "\t\t\t\t<tr class=\"row\">
\t\t\t\t\t";
            // line 22
            if ((array_key_exists("category_edit", $context) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 22), (isset($context["category_edit"]) || array_key_exists("category_edit", $context) ? $context["category_edit"] : (function () { throw new RuntimeError('Variable "category_edit" does not exist.', 22, $this->source); })()))))) {
                // line 23
                echo "\t\t\t\t\t\t<td class=\"col-7\">
\t\t\t\t\t\t\t";
                // line 24
                echo                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), 'form_start');
                echo "
\t\t\t\t\t\t\t";
                // line 25
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "name", [], "any", false, false, false, 25), 'row');
                echo "
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"col-2\">";
                // line 27
                echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "recipes", [], "any", false, false, false, 27)), "html", null, true);
                echo "</td>
\t\t\t\t\t\t<td class=\"inline col-3\">
\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-sm btn-success round\">
\t\t\t\t\t\t\t\t<i class=\"bi bi-check-lg\"></i>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t<a href=\"";
                // line 32
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_categories");
                echo "\">
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-sm btn-danger round\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-x-lg\"></i>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
                // line 37
                echo                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), 'form_end');
                echo "
\t\t\t\t\t\t</td>
\t\t\t\t\t";
            } else {
                // line 40
                echo "\t\t\t\t\t\t<td class=\"col-7\">
\t\t\t\t\t\t\t";
                // line 41
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 41), "html", null, true);
                echo "
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"col-2\">";
                // line 43
                echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "recipes", [], "any", false, false, false, 43)), "html", null, true);
                echo "</td>
\t\t\t\t\t\t<td class=\"inline col-3\">
\t\t\t\t\t\t\t<a href=\"";
                // line 45
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_category_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 45)]), "html", null, true);
                echo "\" class=\"btn btn-sm btn-warning round\">
\t\t\t\t\t\t\t\t<i class=\"bi bi-pencil-fill\"></i>
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-sm btn-danger round onDelete\" ";
                // line 49
                if ((0 !== twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "recipes", [], "any", false, false, false, 49)), 0))) {
                    echo " disabled ";
                }
                echo ">
\t\t\t\t\t\t\t\t<i class=\"bi bi-trash2-fill\"></i>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t";
                // line 53
                $this->loadTemplate("message/_confirmMsg.html.twig", "admin/categories.html.twig", 53)->display($context);
                // line 54
                echo "\t\t\t\t\t";
            }
            // line 55
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "\t\t\t";
        if ((array_key_exists("action", $context) && (0 === twig_compare((isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 57, $this->source); })()), "new")))) {
            // line 58
            echo "\t\t\t\t<tr class=\"row\">
\t\t\t\t\t<td class=\"col-7\">
\t\t\t\t\t\t";
            // line 60
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), 'form_start');
            echo "
\t\t\t\t\t\t";
            // line 61
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "name", [], "any", false, false, false, 61), 'row');
            echo "
\t\t\t\t\t</td>
\t\t\t\t\t<td class=\"col-2\"></td>
\t\t\t\t\t<td class=\"inline col-3\">
\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-sm btn-success round\">
\t\t\t\t\t\t\t<i class=\"bi bi-check-lg\"></i>
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<a href=\"";
            // line 68
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_categories");
            echo "\">
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-sm btn-danger round\">
\t\t\t\t\t\t\t\t<i class=\"bi bi-x-lg\"></i>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t";
            // line 73
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), 'form_end');
            echo "
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t";
        }
        // line 77
        echo "\t\t</tbody>
\t</table>
\t<div class=\"row center\">
\t\t<a href=\" ";
        // line 80
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_category_add");
        echo "\" class=\"btn btn-sm btn-dark btn-new-admin round\">
\t\t\t<i class=\"bi bi-plus-lg\"></i>
\t\t</a>
\t</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/categories.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  255 => 80,  250 => 77,  243 => 73,  235 => 68,  225 => 61,  221 => 60,  217 => 58,  214 => 57,  199 => 55,  196 => 54,  194 => 53,  185 => 49,  178 => 45,  173 => 43,  168 => 41,  165 => 40,  159 => 37,  151 => 32,  143 => 27,  138 => 25,  134 => 24,  131 => 23,  129 => 22,  126 => 21,  109 => 20,  95 => 9,  92 => 8,  82 => 7,  69 => 4,  59 => 3,  36 => 1,);
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
\t\t\t\t<th class=\"col-7\">Catégorie</th>
\t\t\t\t<th class=\"col-2\">Recettes concernées</th>
\t\t\t\t<th class=\"inline col-3\">Action</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t{% for category in categories %}
\t\t\t\t<tr class=\"row\">
\t\t\t\t\t{% if category_edit is defined and category.id == category_edit %}
\t\t\t\t\t\t<td class=\"col-7\">
\t\t\t\t\t\t\t{{form_start(form)}}
\t\t\t\t\t\t\t{{ form_row(form.name) }}
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"col-2\">{{ category.recipes|length}}</td>
\t\t\t\t\t\t<td class=\"inline col-3\">
\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-sm btn-success round\">
\t\t\t\t\t\t\t\t<i class=\"bi bi-check-lg\"></i>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t<a href=\"{{ path('admin_categories') }}\">
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-sm btn-danger round\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-x-lg\"></i>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t{{form_end(form)}}
\t\t\t\t\t\t</td>
\t\t\t\t\t{% else %}
\t\t\t\t\t\t<td class=\"col-7\">
\t\t\t\t\t\t\t{{ category.name }}
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"col-2\">{{ category.recipes|length}}</td>
\t\t\t\t\t\t<td class=\"inline col-3\">
\t\t\t\t\t\t\t<a href=\"{{ path('admin_category_edit', {'id' : category.id}) }}\" class=\"btn btn-sm btn-warning round\">
\t\t\t\t\t\t\t\t<i class=\"bi bi-pencil-fill\"></i>
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-sm btn-danger round onDelete\" {% if category.recipes|length != 0 %} disabled {% endif %}>
\t\t\t\t\t\t\t\t<i class=\"bi bi-trash2-fill\"></i>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t{% include \"message/_confirmMsg.html.twig\" %}
\t\t\t\t\t{% endif %}
\t\t\t\t</tr>
\t\t\t{% endfor %}
\t\t\t{% if action is defined and action == 'new'%}
\t\t\t\t<tr class=\"row\">
\t\t\t\t\t<td class=\"col-7\">
\t\t\t\t\t\t{{ form_start(form) }}
\t\t\t\t\t\t{{ form_row(form.name) }}
\t\t\t\t\t</td>
\t\t\t\t\t<td class=\"col-2\"></td>
\t\t\t\t\t<td class=\"inline col-3\">
\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-sm btn-success round\">
\t\t\t\t\t\t\t<i class=\"bi bi-check-lg\"></i>
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<a href=\"{{ path('admin_categories') }}\">
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
\t\t<a href=\" {{ path('admin_category_add') }}\" class=\"btn btn-sm btn-dark btn-new-admin round\">
\t\t\t<i class=\"bi bi-plus-lg\"></i>
\t\t</a>
\t</div>
{% endblock %}
", "admin/categories.html.twig", "C:\\laragon\\www\\projet_recettes\\templates\\admin\\categories.html.twig");
    }
}
