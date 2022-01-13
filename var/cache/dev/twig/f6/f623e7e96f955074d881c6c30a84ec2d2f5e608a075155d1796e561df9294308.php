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

/* user/_form.html.twig */
class __TwigTemplate_fe7d396a31421db7152ae1ebf142d835719d98aefb85a4c503d1f27ed34f00e5 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/_form.html.twig"));

        // line 1
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), "_token", [], "any", false, false, false, 1), 'widget');
        echo "
";
        // line 2
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()), 'errors');
        echo "
";
        // line 3
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), "name", [], "any", false, false, false, 3), 'row');
        echo "
";
        // line 4
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), "category", [], "any", false, false, false, 4), 'row');
        echo "
";
        // line 5
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), "isPrivate", [], "any", false, false, false, 5), 'row');
        echo "

<div>
\t<h2 class=\"line-decoration\">Ingrédients</h2>
\t<ul id=\"ingredientLines\" data-index=\"";
        // line 9
        (((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "ingredientLines", [], "any", false, false, false, 9)), 0))) ? (print (twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_last($this->env, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "ingredientLines", [], "any", false, false, false, 9)), "vars", [], "any", false, false, false, 9), "name", [], "any", false, false, false, 9) + 1), "html", null, true))) : (print (0)));
        echo "\" data-prototype=\"";
        echo twig_escape_filter($this->env, twig_include($this->env, $context, "user/_ingredientLine.html.twig", ["form" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "ingredientLines", [], "any", false, false, false, 9), "vars", [], "any", false, false, false, 9), "prototype", [], "any", false, false, false, 9)]), "html_attr");
        echo "\">
\t\t";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "ingredientLines", [], "any", false, false, false, 10));
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
        foreach ($context['_seq'] as $context["_key"] => $context["ingredientLine"]) {
            // line 11
            echo "\t\t\t<li class=\"inline\">
\t\t\t\t";
            // line 12
            echo twig_include($this->env, $context, "user/_ingredientLine.html.twig", ["form" => $context["ingredientLine"]]);
            echo "
\t\t\t</li>
\t\t";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ingredientLine'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "\t</ul>
</div>
<div class=\"row center\">
\t<button type=\"button\" class=\"btn btn-sm btn-dark btn-new round\" data-collection=\"#ingredientLines\">
\t\t<i class=\"bi bi-plus-lg\"></i>
\t</button>
</div>
";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "ingredientLines", [], "any", false, false, false, 22), 'errors');
        echo "


<div>
\t<h2 class=\"line-decoration\">Étapes</h2>
\t<ol id=\"stepLines\" data-index=\"";
        // line 27
        (((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "stepLines", [], "any", false, false, false, 27)), 0))) ? (print (twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_last($this->env, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "stepLines", [], "any", false, false, false, 27)), "vars", [], "any", false, false, false, 27), "name", [], "any", false, false, false, 27) + 1), "html", null, true))) : (print (0)));
        echo "\" data-prototype=\"";
        echo twig_escape_filter($this->env, twig_include($this->env, $context, "user/_stepLine.html.twig", ["form" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "stepLines", [], "any", false, false, false, 27), "vars", [], "any", false, false, false, 27), "prototype", [], "any", false, false, false, 27)]), "html_attr");
        echo "\">
\t\t";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "stepLines", [], "any", false, false, false, 28));
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
        foreach ($context['_seq'] as $context["_key"] => $context["stepLine"]) {
            // line 29
            echo "\t\t\t<li class=\"inline\">
\t\t\t\t";
            // line 30
            echo twig_include($this->env, $context, "user/_stepLine.html.twig", ["form" => $context["stepLine"]]);
            echo "
\t\t\t</li>
\t\t";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stepLine'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "\t</ol>
</div>
<div class=\"row center\">
\t<button type=\"button\" class=\"btn btn-sm btn-dark btn-new round\" data-collection=\"#stepLines\">
\t\t<i class=\"bi bi-plus-lg\"></i>
\t</button>
</div>
";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "stepLines", [], "any", false, false, false, 40), 'errors');
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "user/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 40,  169 => 33,  152 => 30,  149 => 29,  132 => 28,  126 => 27,  118 => 22,  109 => 15,  92 => 12,  89 => 11,  72 => 10,  66 => 9,  59 => 5,  55 => 4,  51 => 3,  47 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{form_widget(form._token)}}
{{ form_errors(form) }}
{{ form_row(form.name) }}
{{ form_row(form.category) }}
{{ form_row(form.isPrivate) }}

<div>
\t<h2 class=\"line-decoration\">Ingrédients</h2>
\t<ul id=\"ingredientLines\" data-index=\"{{ form.ingredientLines|length > 0 ? form.ingredientLines|last.vars.name + 1 : 0 }}\" data-prototype=\"{{ include('user/_ingredientLine.html.twig', {form: form.ingredientLines.vars.prototype}) |e('html_attr') }}\">
\t\t{% for ingredientLine in form.ingredientLines %}
\t\t\t<li class=\"inline\">
\t\t\t\t{{ include('user/_ingredientLine.html.twig', {form: ingredientLine} )}}
\t\t\t</li>
\t\t{% endfor %}
\t</ul>
</div>
<div class=\"row center\">
\t<button type=\"button\" class=\"btn btn-sm btn-dark btn-new round\" data-collection=\"#ingredientLines\">
\t\t<i class=\"bi bi-plus-lg\"></i>
\t</button>
</div>
{{ form_errors(form.ingredientLines)}}


<div>
\t<h2 class=\"line-decoration\">Étapes</h2>
\t<ol id=\"stepLines\" data-index=\"{{ form.stepLines|length > 0 ? form.stepLines|last.vars.name + 1 : 0 }}\" data-prototype=\"{{ include('user/_stepLine.html.twig', {form: form.stepLines.vars.prototype}) |e('html_attr') }}\">
\t\t{% for stepLine in form.stepLines %}
\t\t\t<li class=\"inline\">
\t\t\t\t{{ include('user/_stepLine.html.twig', {form: stepLine} )}}
\t\t\t</li>
\t\t{% endfor %}
\t</ol>
</div>
<div class=\"row center\">
\t<button type=\"button\" class=\"btn btn-sm btn-dark btn-new round\" data-collection=\"#stepLines\">
\t\t<i class=\"bi bi-plus-lg\"></i>
\t</button>
</div>
{{ form_errors(form.stepLines)}}
", "user/_form.html.twig", "C:\\laragon\\www\\projet_recettes\\templates\\user\\_form.html.twig");
    }
}
