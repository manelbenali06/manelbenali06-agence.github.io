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

/* home/index.html.twig */
class __TwigTemplate_b56fb397134825937cdf8888b7167f3269a02fc1aca353b61f9629e1500c91dc extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
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

        echo "accueil";
        
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
        echo "
    <header id=\"home-header\">
        <div id=\"header-img\"></div>
        <h1>SUBL'IMMO</h1>
        <h2>L'agence immobilière 100 % en ligne</h2>
    </header>

    <main class=\"container-fluid p-5\">

        <div class=\"row\">
            <div class=\"col-12\">
                <h2>Les logements</h2>
            </div>
        </div>

        <div class=\"row\">
            ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["maisons"]) || array_key_exists("maisons", $context) ? $context["maisons"] : (function () { throw new RuntimeError('Variable "maisons" does not exist.', 22, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["maison"]) {
            // line 23
            echo "                ";
            // line 24
            echo "                    <div class=\"col-4 p-3\">
                        <div class=\"card\">
                            <img src=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img/maison/" . twig_get_attribute($this->env, $this->source, $context["maison"], "img1", [], "any", false, false, false, 26))), "html", null, true);
            echo "\" class=\"card-img-top\" alt=\"photo principale de ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["maison"], "title", [], "any", false, false, false, 26), "html", null, true);
            echo "\">
                            <div class=\"card-body\">
                                <h5 class=\"card-title\">";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["maison"], "title", [], "any", false, false, false, 28), "html", null, true);
            echo "</h5>
                                <p class=\"card-text\">";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(twig_get_attribute($this->env, $this->source, $context["maison"], "description", [], "any", false, false, false, 29)), "truncate", [0 => 90, 1 => "...", 2 => false], "method", false, false, false, 29), "html", null, true);
            echo "</p>
                            </div>
                            <ul class=\"list-group list-group-flush\">
                                <li class=\"list-group-item\">Surface : ";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["maison"], "surface", [], "any", false, false, false, 32), "html", null, true);
            echo " m<sup>2</sup></li>
                                <li class=\"list-group-item\">Pièces : ";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["maison"], "rooms", [], "any", false, false, false, 33), "html", null, true);
            echo " dont ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["maison"], "bedrooms", [], "any", false, false, false, 33), "html", null, true);
            echo " chambre(s)</li>
                                <li class=\"list-group-item\">Prix : ";
            // line 34
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["maison"], "price", [], "any", false, false, false, 34), 0, ",", " "), "html", null, true);
            echo " €</li>
                            </ul>
                            <div class=\"card-body text-center\">
                                <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("maison", ["id" => twig_get_attribute($this->env, $this->source, $context["maison"], "id", [], "any", false, false, false, 37)]), "html", null, true);
            echo "\" class=\"btn btn-secondary\">Voir plus</a>
                            </div>
                        </div>
                    </div>
                ";
            // line 42
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['maison'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "        </div>

        <div class=\"row\">
            <div class=\"col-12 text-center pt-5\">
                <a href=\"";
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("maisons");
        echo "\" class=\"btn btn-secondary\">Voir tout</a>
            </div>
        </div>

    </main>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 47,  162 => 43,  156 => 42,  149 => 37,  143 => 34,  137 => 33,  133 => 32,  127 => 29,  123 => 28,  116 => 26,  112 => 24,  110 => 23,  106 => 22,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}accueil{% endblock %}

{% block body %}

    <header id=\"home-header\">
        <div id=\"header-img\"></div>
        <h1>SUBL'IMMO</h1>
        <h2>L'agence immobilière 100 % en ligne</h2>
    </header>

    <main class=\"container-fluid p-5\">

        <div class=\"row\">
            <div class=\"col-12\">
                <h2>Les logements</h2>
            </div>
        </div>

        <div class=\"row\">
            {% for maison in maisons %}
                {# {% if loop.index <= 6 %} #}
                    <div class=\"col-4 p-3\">
                        <div class=\"card\">
                            <img src=\"{{ asset('img/maison/' ~ maison.img1) }}\" class=\"card-img-top\" alt=\"photo principale de {{ maison.title }}\">
                            <div class=\"card-body\">
                                <h5 class=\"card-title\">{{ maison.title }}</h5>
                                <p class=\"card-text\">{{ maison.description|u.truncate(90, '...', false) }}</p>
                            </div>
                            <ul class=\"list-group list-group-flush\">
                                <li class=\"list-group-item\">Surface : {{ maison.surface }} m<sup>2</sup></li>
                                <li class=\"list-group-item\">Pièces : {{ maison.rooms }} dont {{ maison.bedrooms }} chambre(s)</li>
                                <li class=\"list-group-item\">Prix : {{ maison.price|number_format(0, ',', ' ') }} €</li>
                            </ul>
                            <div class=\"card-body text-center\">
                                <a href=\"{{ path('maison', {'id': maison.id}) }}\" class=\"btn btn-secondary\">Voir plus</a>
                            </div>
                        </div>
                    </div>
                {# {% endif %} #}
            {% endfor %}
        </div>

        <div class=\"row\">
            <div class=\"col-12 text-center pt-5\">
                <a href=\"{{ path('maisons') }}\" class=\"btn btn-secondary\">Voir tout</a>
            </div>
        </div>

    </main>

{% endblock %}", "home/index.html.twig", "C:\\wamp64\\www\\symfony\\sublimmo\\templates\\home\\index.html.twig");
    }
}
