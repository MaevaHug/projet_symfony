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

/* admin/recipes.html.twig */
class __TwigTemplate_bbb972f100cc5cd5172f888ae2d6cca727396a47d99e009f950103b9a7f5d0bc extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/recipes.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/recipes.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/recipes.html.twig", 1);
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
\t\t\t\t<th class=\"col-5\">Titre</th>
\t\t\t\t<th class=\"col-2\">Auteur</th>
                <th class=\"col-2\">Date de création</th>
\t\t\t\t<th class=\"inline col-3\">Action</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["recipes"]) || array_key_exists("recipes", $context) ? $context["recipes"] : (function () { throw new RuntimeError('Variable "recipes" does not exist.', 21, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["recipe"]) {
            // line 22
            echo "\t\t\t\t<tr class=\"row\">
\t\t\t\t\t\t<td class=\"col-5\">
\t\t\t\t\t\t\t";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["recipe"], "name", [], "any", false, false, false, 24));
            echo "
\t\t\t\t\t\t</td>
                        <td class=\"col-2\">";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["recipe"], "author", [], "any", false, false, false, 26), "username", [], "any", false, false, false, 26));
            echo "</td>
\t\t\t\t\t\t<td class=\"col-2\">";
            // line 27
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["recipe"], "createdAt", [], "any", false, false, false, 27), "d/m/Y"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td class=\"inline col-3\">
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-sm btn-danger round onDelete\">
\t\t\t\t\t\t\t\t<i class=\"bi bi-trash2-fill\"></i>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t";
            // line 33
            $this->loadTemplate("message/_confirmMsg.html.twig", "admin/recipes.html.twig", 33)->display($context);
            // line 34
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recipe'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "\t\t\t";
        if ((array_key_exists("action", $context) && (0 === twig_compare((isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 36, $this->source); })()), "new")))) {
            // line 37
            echo "\t\t\t\t<tr class=\"row\">
\t\t\t\t\t<td class=\"col-5\">
\t\t\t\t\t\t";
            // line 39
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), 'form_start');
            echo "
\t\t\t\t\t\t";
            // line 40
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "name", [], "any", false, false, false, 40), 'row');
            echo "
\t\t\t\t\t</td>
\t\t\t\t\t<td class=\"col-2\"></td>
\t\t\t\t\t<td class=\"inline col-3\">
\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-sm btn-success round\">
\t\t\t\t\t\t\t<i class=\"bi bi-check-lg\"></i>
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<a href=\"";
            // line 47
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_categories");
            echo "\">
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-sm btn-danger round\">
\t\t\t\t\t\t\t\t<i class=\"bi bi-x-lg\"></i>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t";
            // line 52
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), 'form_end');
            echo "
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t";
        }
        // line 56
        echo "\t\t</tbody>
\t</table>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/recipes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 56,  195 => 52,  187 => 47,  177 => 40,  173 => 39,  169 => 37,  166 => 36,  151 => 34,  149 => 33,  140 => 27,  136 => 26,  131 => 24,  127 => 22,  110 => 21,  95 => 9,  92 => 8,  82 => 7,  69 => 4,  59 => 3,  36 => 1,);
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
\t\t\t\t<th class=\"col-5\">Titre</th>
\t\t\t\t<th class=\"col-2\">Auteur</th>
                <th class=\"col-2\">Date de création</th>
\t\t\t\t<th class=\"inline col-3\">Action</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t{% for recipe in recipes %}
\t\t\t\t<tr class=\"row\">
\t\t\t\t\t\t<td class=\"col-5\">
\t\t\t\t\t\t\t{{ recipe.name|e }}
\t\t\t\t\t\t</td>
                        <td class=\"col-2\">{{ recipe.author.username|e }}</td>
\t\t\t\t\t\t<td class=\"col-2\">{{ recipe.createdAt|date('d/m/Y') }}</td>
\t\t\t\t\t\t<td class=\"inline col-3\">
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-sm btn-danger round onDelete\">
\t\t\t\t\t\t\t\t<i class=\"bi bi-trash2-fill\"></i>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t{% include \"message/_confirmMsg.html.twig\" %}
\t\t\t\t</tr>
\t\t\t{% endfor %}
\t\t\t{% if action is defined and action == 'new'%}
\t\t\t\t<tr class=\"row\">
\t\t\t\t\t<td class=\"col-5\">
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

{% endblock %}", "admin/recipes.html.twig", "C:\\laragon\\www\\projet_recettes\\templates\\admin\\recipes.html.twig");
    }
}
