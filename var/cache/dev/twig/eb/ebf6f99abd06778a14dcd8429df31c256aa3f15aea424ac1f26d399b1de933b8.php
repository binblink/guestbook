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

/* conference/show.html.twig */
class __TwigTemplate_dfba75338c638d4d395171d1bd66873877a06470ed61393917d6387b3cf7f841 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "conference/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "conference/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "conference/show.html.twig", 1);
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

        echo "Conference Guestbook - ";
        echo twig_escape_filter($this->env, (isset($context["conference"]) || array_key_exists("conference", $context) ? $context["conference"] : (function () { throw new RuntimeError('Variable "conference" does not exist.', 3, $this->source); })()), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h2>";
        echo twig_escape_filter($this->env, (isset($context["conference"]) || array_key_exists("conference", $context) ? $context["conference"] : (function () { throw new RuntimeError('Variable "conference" does not exist.', 6, $this->source); })()), "html", null, true);
        echo " Conference</h2>

    ";
        // line 8
        if ((twig_length_filter($this->env, (isset($context["comments"]) || array_key_exists("comments", $context) ? $context["comments"] : (function () { throw new RuntimeError('Variable "comments" does not exist.', 8, $this->source); })())) > 0)) {
            // line 9
            echo "        <div>There are ";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["comments"]) || array_key_exists("comments", $context) ? $context["comments"] : (function () { throw new RuntimeError('Variable "comments" does not exist.', 9, $this->source); })())), "html", null, true);
            echo " comments.</div>
        ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) || array_key_exists("comments", $context) ? $context["comments"] : (function () { throw new RuntimeError('Variable "comments" does not exist.', 10, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                // line 11
                echo "            ";
                if (twig_get_attribute($this->env, $this->source, $context["comment"], "photofilename", [], "any", false, false, false, 11)) {
                    // line 12
                    echo "                <img src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/photos/" . twig_get_attribute($this->env, $this->source, $context["comment"], "photofilename", [], "any", false, false, false, 12))), "html", null, true);
                    echo "\" />
            ";
                }
                // line 14
                echo "
            <h4>";
                // line 15
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "author", [], "any", false, false, false, 15), "html", null, true);
                echo "</h4>
            <small>
                ";
                // line 17
                echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDateTime($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "createdAt", [], "any", false, false, false, 17), "medium", "short"), "html", null, true);
                echo "
            </small>

            <p>";
                // line 20
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "text", [], "any", false, false, false, 20), "html", null, true);
                echo "</p>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "
        ";
            // line 23
            if (((isset($context["previous"]) || array_key_exists("previous", $context) ? $context["previous"] : (function () { throw new RuntimeError('Variable "previous" does not exist.', 23, $this->source); })()) >= 0)) {
                // line 24
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("conference", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["conference"]) || array_key_exists("conference", $context) ? $context["conference"] : (function () { throw new RuntimeError('Variable "conference" does not exist.', 24, $this->source); })()), "slug", [], "any", false, false, false, 24), "offset" => (isset($context["previous"]) || array_key_exists("previous", $context) ? $context["previous"] : (function () { throw new RuntimeError('Variable "previous" does not exist.', 24, $this->source); })())]), "html", null, true);
                echo "\">Previous</a>
        ";
            }
            // line 26
            echo "        ";
            if (((isset($context["next"]) || array_key_exists("next", $context) ? $context["next"] : (function () { throw new RuntimeError('Variable "next" does not exist.', 26, $this->source); })()) < twig_length_filter($this->env, (isset($context["comments"]) || array_key_exists("comments", $context) ? $context["comments"] : (function () { throw new RuntimeError('Variable "comments" does not exist.', 26, $this->source); })())))) {
                // line 27
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("conference", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["conference"]) || array_key_exists("conference", $context) ? $context["conference"] : (function () { throw new RuntimeError('Variable "conference" does not exist.', 27, $this->source); })()), "slug", [], "any", false, false, false, 27), "offset" => (isset($context["next"]) || array_key_exists("next", $context) ? $context["next"] : (function () { throw new RuntimeError('Variable "next" does not exist.', 27, $this->source); })())]), "html", null, true);
                echo "\">Next</a>
        ";
            }
            // line 29
            echo "
    ";
        } else {
            // line 31
            echo "        <div>No comments have been posted yet for this conference.</div>
    ";
        }
        // line 33
        echo "
    <h2>Add your own feedback</h2>

    ";
        // line 36
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["comment_form"]) || array_key_exists("comment_form", $context) ? $context["comment_form"] : (function () { throw new RuntimeError('Variable "comment_form" does not exist.', 36, $this->source); })()), 'form');
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "conference/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 36,  165 => 33,  161 => 31,  157 => 29,  151 => 27,  148 => 26,  142 => 24,  140 => 23,  137 => 22,  129 => 20,  123 => 17,  118 => 15,  115 => 14,  109 => 12,  106 => 11,  102 => 10,  97 => 9,  95 => 8,  89 => 6,  79 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Conference Guestbook - {{ conference }}{% endblock %}

{% block body %}
    <h2>{{ conference }} Conference</h2>

    {% if comments|length > 0 %}
        <div>There are {{ comments|length }} comments.</div>
        {% for comment in comments %}
            {% if comment.photofilename %}
                <img src=\"{{ asset('uploads/photos/' ~ comment.photofilename) }}\" />
            {% endif %}

            <h4>{{ comment.author }}</h4>
            <small>
                {{ comment.createdAt|format_datetime('medium', 'short') }}
            </small>

            <p>{{ comment.text }}</p>
        {% endfor %}

        {% if previous >= 0 %}
            <a href=\"{{ path('conference', { slug: conference.slug, offset: previous }) }}\">Previous</a>
        {% endif %}
        {% if next < comments|length %}
            <a href=\"{{ path('conference', { slug: conference.slug, offset: next }) }}\">Next</a>
        {% endif %}

    {% else %}
        <div>No comments have been posted yet for this conference.</div>
    {% endif %}

    <h2>Add your own feedback</h2>

    {{ form(comment_form) }}

{% endblock %}", "conference/show.html.twig", "/var/www/templates/conference/show.html.twig");
    }
}
