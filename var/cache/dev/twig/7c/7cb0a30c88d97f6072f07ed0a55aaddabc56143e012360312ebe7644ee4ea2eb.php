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

/* admin/users.html.twig */
class __TwigTemplate_7f874f6e9caf17ae2686c45c2c9babce4d80a773beb29fff0304428c6a19a54e extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/users.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/users.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/users.html.twig", 1);
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
\t\t\t\t<th class=\"col-1\">ID</th>
\t\t\t\t<th class=\"col-3\">Nom</th>
\t\t\t\t<th class=\"col-4\">Email</th>
\t\t\t\t<th class=\"col-2\">Rôles</th>
\t\t\t\t<th class=\"col-2\">Actions</th>
\t\t\t</tr>

\t\t</thead>
\t\t<tbody>
\t\t\t";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 23, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 24
            echo "\t\t\t\t<tr class=\"row\">
\t\t\t\t\t";
            // line 25
            if ((array_key_exists("user_edit", $context) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 25), (isset($context["user_edit"]) || array_key_exists("user_edit", $context) ? $context["user_edit"] : (function () { throw new RuntimeError('Variable "user_edit" does not exist.', 25, $this->source); })()))))) {
                // line 26
                echo "\t\t\t\t\t\t<td class=\"col-1\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 26), "html", null, true);
                echo "</td>
\t\t\t\t\t\t";
                // line 27
                echo                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), 'form_start');
                echo "
\t\t\t\t\t\t<td class=\"col-3\">";
                // line 28
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "username", [], "any", false, false, false, 28), 'row');
                echo "</td>
\t\t\t\t\t\t<td class=\"col-4\">";
                // line 29
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "email", [], "any", false, false, false, 29), 'row');
                echo "</td>
\t\t\t\t\t\t<td class=\"col-2\">";
                // line 30
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "roles", [], "any", false, false, false, 30), 'row');
                echo "</td>
\t\t\t\t\t\t<td class=\"inline col-2\">
\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-sm btn-success round\">
\t\t\t\t\t\t\t\t<i class=\"bi bi-check-lg\"></i>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t<a href=\"";
                // line 35
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_users");
                echo "\">
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-sm btn-danger round\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-x-lg\"></i>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t";
                // line 41
                echo                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), 'form_end');
                echo "

\t\t\t\t\t";
            } else {
                // line 44
                echo "\t\t\t\t\t\t<td class=\"col-1\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 44), "html", null, true);
                echo "</td>
\t\t\t\t\t\t<td class=\"col-3\">";
                // line 45
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "username", [], "any", false, false, false, 45));
                echo "</td>
\t\t\t\t\t\t<td class=\"col-4\">";
                // line 46
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 46), "html", null, true);
                echo "</td>
\t\t\t\t\t\t<td class=\"col-2\">
\t\t\t\t\t\t\t";
                // line 48
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 48));
                foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                    // line 49
                    echo "\t\t\t\t\t\t\t\t";
                    if ((0 === twig_compare($context["role"], "ROLE_USER"))) {
                        // line 50
                        echo "\t\t\t\t\t\t\t\t\tuser
\t\t\t\t\t\t\t\t";
                    } elseif ((0 === twig_compare(                    // line 51
$context["role"], "ROLE_ADMIN"))) {
                        // line 52
                        echo "\t\t\t\t\t\t\t\t\tadmin
\t\t\t\t\t\t\t\t";
                    }
                    // line 54
                    echo "\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 55
                echo "\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"inline col-2\">
\t\t\t\t\t\t\t<a href=\"";
                // line 57
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 57)]), "html", null, true);
                echo "\" class=\"btn btn-sm btn-warning round\">
\t\t\t\t\t\t\t\t<i class=\"bi bi-pencil-fill\"></i>
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-sm btn-danger round onDelete\" ";
                // line 61
                if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 61)), 1))) {
                    echo " disabled ";
                }
                echo ">
\t\t\t\t\t\t\t<i class=\"bi bi-trash2-fill\"></i>
\t\t\t\t\t\t\t</button>

\t\t\t\t\t\t</td>
\t\t\t\t\t\t";
                // line 66
                $this->loadTemplate("message/_confirmMsg.html.twig", "admin/users.html.twig", 66)->display($context);
                // line 67
                echo "\t\t\t\t\t";
            }
            // line 68
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "\t\t</tbody>
\t</tbody>
</table>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/users.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  251 => 70,  236 => 68,  233 => 67,  231 => 66,  221 => 61,  214 => 57,  210 => 55,  204 => 54,  200 => 52,  198 => 51,  195 => 50,  192 => 49,  188 => 48,  183 => 46,  179 => 45,  174 => 44,  168 => 41,  159 => 35,  151 => 30,  147 => 29,  143 => 28,  139 => 27,  134 => 26,  132 => 25,  129 => 24,  112 => 23,  95 => 9,  92 => 8,  82 => 7,  69 => 4,  59 => 3,  36 => 1,);
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
\t\t\t\t<th class=\"col-1\">ID</th>
\t\t\t\t<th class=\"col-3\">Nom</th>
\t\t\t\t<th class=\"col-4\">Email</th>
\t\t\t\t<th class=\"col-2\">Rôles</th>
\t\t\t\t<th class=\"col-2\">Actions</th>
\t\t\t</tr>

\t\t</thead>
\t\t<tbody>
\t\t\t{% for user in users %}
\t\t\t\t<tr class=\"row\">
\t\t\t\t\t{% if user_edit is defined and user.id == user_edit %}
\t\t\t\t\t\t<td class=\"col-1\">{{ user.id }}</td>
\t\t\t\t\t\t{{form_start(form)}}
\t\t\t\t\t\t<td class=\"col-3\">{{ form_row(form.username) }}</td>
\t\t\t\t\t\t<td class=\"col-4\">{{ form_row(form.email) }}</td>
\t\t\t\t\t\t<td class=\"col-2\">{{ form_row(form.roles) }}</td>
\t\t\t\t\t\t<td class=\"inline col-2\">
\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-sm btn-success round\">
\t\t\t\t\t\t\t\t<i class=\"bi bi-check-lg\"></i>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t<a href=\"{{ path('admin_users') }}\">
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-sm btn-danger round\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-x-lg\"></i>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t{{form_end(form)}}

\t\t\t\t\t{% else %}
\t\t\t\t\t\t<td class=\"col-1\">{{ user.id }}</td>
\t\t\t\t\t\t<td class=\"col-3\">{{ user.username|e }}</td>
\t\t\t\t\t\t<td class=\"col-4\">{{ user.email }}</td>
\t\t\t\t\t\t<td class=\"col-2\">
\t\t\t\t\t\t\t{% for role in user.roles %}
\t\t\t\t\t\t\t\t{% if role == \"ROLE_USER\" %}
\t\t\t\t\t\t\t\t\tuser
\t\t\t\t\t\t\t\t{% elseif role == \"ROLE_ADMIN\" %}
\t\t\t\t\t\t\t\t\tadmin
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"inline col-2\">
\t\t\t\t\t\t\t<a href=\"{{ path('admin_user_edit', {'id' : user.id}) }}\" class=\"btn btn-sm btn-warning round\">
\t\t\t\t\t\t\t\t<i class=\"bi bi-pencil-fill\"></i>
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-sm btn-danger round onDelete\" {% if user.roles|length > 1 %} disabled {% endif %}>
\t\t\t\t\t\t\t<i class=\"bi bi-trash2-fill\"></i>
\t\t\t\t\t\t\t</button>

\t\t\t\t\t\t</td>
\t\t\t\t\t\t{% include \"message/_confirmMsg.html.twig\" %}
\t\t\t\t\t{% endif %}
\t\t\t\t</tr>
\t\t\t{% endfor %}
\t\t</tbody>
\t</tbody>
</table>{% endblock %}
", "admin/users.html.twig", "C:\\laragon\\www\\projet_recettes\\templates\\admin\\users.html.twig");
    }
}
