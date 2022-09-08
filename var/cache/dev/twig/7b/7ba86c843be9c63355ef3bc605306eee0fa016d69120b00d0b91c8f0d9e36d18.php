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

/* base.html.twig */
class __TwigTemplate_cc4f353829dbba8025383c7cf5f0ef3e1c9f9f9045cd9b14a3e1a93b7e1a1836 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>

<html>

    <head>

        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"description\" content=\"site d'annonces immobilières\">
        <meta name=\"author\" content=\"Manel BENALI\">

        <title>SUBL'IMMO - ";
        // line 12
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

        <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\">
        <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">

        ";
        // line 17
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 18
        echo "        
    </head>

    <body>

        ";
        // line 23
        $this->displayBlock('body', $context, $blocks);
        // line 24
        echo "
        <footer class=\"container-fluid bg-light\">
            <div class=\"row text-center p-5\">
                <div class=\"col-4\">
                    <h5>QUELQUES LIENS</h5>
                    <div class=\"dropdown-divider\"></div>
                    <p><a href=\"";
        // line 30
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Accueil</a></p> ";
        // line 31
        echo "                    <p><a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("maisons");
        echo "\">Maisons</a></p>
                    <p><a href=\"#\">Contact</a></p>
                    <p><a href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
        echo "\">Admin</a></p>
                </div>
                <div class=\"col-4 my-auto\">
                    <img src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo.png"), "html", null, true);
        echo "\" alt=\"logo SUBLi'IMMO\" class=\"w-100\">
                </div>
                <div class=\"col-4\">
                    <h5>COORDONNÉES</h5>
                    <div class=\"dropdown-divider\"></div>
                    <p>";
        // line 41
        echo twig_escape_filter($this->env, (isset($context["contact_address"]) || array_key_exists("contact_address", $context) ? $context["contact_address"] : (function () { throw new RuntimeError('Variable "contact_address" does not exist.', 41, $this->source); })()), "html", null, true);
        echo "</p>
                    <p>";
        // line 42
        echo twig_escape_filter($this->env, (isset($context["contact_zip"]) || array_key_exists("contact_zip", $context) ? $context["contact_zip"] : (function () { throw new RuntimeError('Variable "contact_zip" does not exist.', 42, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["contact_city"]) || array_key_exists("contact_city", $context) ? $context["contact_city"] : (function () { throw new RuntimeError('Variable "contact_city" does not exist.', 42, $this->source); })()), "html", null, true);
        echo "</p>
                    <p>";
        // line 43
        echo twig_escape_filter($this->env, (isset($context["contact_phone"]) || array_key_exists("contact_phone", $context) ? $context["contact_phone"] : (function () { throw new RuntimeError('Variable "contact_phone" does not exist.', 43, $this->source); })()), "html", null, true);
        echo "</p>
                    <p>";
        // line 44
        echo twig_escape_filter($this->env, (isset($context["contact_email"]) || array_key_exists("contact_email", $context) ? $context["contact_email"] : (function () { throw new RuntimeError('Variable "contact_email" does not exist.', 44, $this->source); })()), "html", null, true);
        echo "</p>
                </div>
            </div>
            <div class=\"row\" id=\"copyright\">
                <div class=\"col-12 text-center\">
                    <p>";
        // line 49
        echo twig_escape_filter($this->env, (isset($context["copyright"]) || array_key_exists("copyright", $context) ? $context["copyright"] : (function () { throw new RuntimeError('Variable "copyright" does not exist.', 49, $this->source); })()), "html", null, true);
        echo "</p>
                </div>
            </div>
        </footer>

        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js\"></script>
        <script src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/script.js"), "html", null, true);
        echo "\"></script>

        
        ";
        // line 59
        $this->displayBlock('javascripts', $context, $blocks);
        // line 60
        echo "
    </body>

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 12
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "base";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 17
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 23
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 59
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 59,  203 => 23,  185 => 17,  166 => 12,  153 => 60,  151 => 59,  145 => 56,  135 => 49,  127 => 44,  123 => 43,  117 => 42,  113 => 41,  105 => 36,  99 => 33,  93 => 31,  90 => 30,  82 => 24,  80 => 23,  73 => 18,  71 => 17,  66 => 15,  60 => 12,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>

<html>

    <head>

        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"description\" content=\"site d'annonces immobilières\">
        <meta name=\"author\" content=\"Manel BENALI\">

        <title>SUBL'IMMO - {% block title %}base{% endblock %}</title>

        <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\">

        {% block stylesheets %}{% endblock %}
        
    </head>

    <body>

        {% block body %}{% endblock %}

        <footer class=\"container-fluid bg-light\">
            <div class=\"row text-center p-5\">
                <div class=\"col-4\">
                    <h5>QUELQUES LIENS</h5>
                    <div class=\"dropdown-divider\"></div>
                    <p><a href=\"{{ path('home') }}\">Accueil</a></p> {# {{ path('home') }} AVANT cetait # #}
                    <p><a href=\"{{ path('maisons') }}\">Maisons</a></p>
                    <p><a href=\"#\">Contact</a></p>
                    <p><a href=\"{{ path('admin') }}\">Admin</a></p>
                </div>
                <div class=\"col-4 my-auto\">
                    <img src=\"{{ asset('img/logo.png') }}\" alt=\"logo SUBLi'IMMO\" class=\"w-100\">
                </div>
                <div class=\"col-4\">
                    <h5>COORDONNÉES</h5>
                    <div class=\"dropdown-divider\"></div>
                    <p>{{ contact_address }}</p>
                    <p>{{ contact_zip }} {{ contact_city }}</p>
                    <p>{{ contact_phone }}</p>
                    <p>{{ contact_email }}</p>
                </div>
            </div>
            <div class=\"row\" id=\"copyright\">
                <div class=\"col-12 text-center\">
                    <p>{{ copyright }}</p>
                </div>
            </div>
        </footer>

        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js\"></script>
        <script src=\"{{ asset('js/script.js') }}\"></script>

        
        {% block javascripts %}{% endblock %}

    </body>

</html>", "base.html.twig", "C:\\wamp64\\www\\symfony\\sublimmo\\templates\\base.html.twig");
    }
}
