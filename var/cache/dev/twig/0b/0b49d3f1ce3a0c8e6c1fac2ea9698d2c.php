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

/* navigation.html.twig */
class __TwigTemplate_a5bbdb9259187490156606a036410bf4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "navigation.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "navigation.html.twig"));

        // line 1
        echo "<ul>
    <li><a href=\"";
        // line 2
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        echo "\">Home Page</a></li>
    <li><a href=\"";
        // line 3
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_offers");
        echo "\">Ofertas</a></li>
    <li><a href=\"";
        // line 4
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_company");
        echo "\">Companies</a></li>
    ";
        // line 5
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 5, $this->source); })()), "user", [], "any", false, false, false, 5)) {
            // line 6
            echo "        <li><a href=\"#\">Mi perfil</a></li>
        <li><a href=\"";
            // line 7
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Log Out</a></li>
        ";
            // line 8
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 8, $this->source); })()), "user", [], "any", false, false, false, 8), "activate", [], "any", false, false, false, 8) == 0)) {
                // line 9
                echo "            <h1>Your user is not activated</h1>
        ";
            } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 10
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "user", [], "any", false, false, false, 10), "UserTypeID", [], "any", false, false, false, 10), "id", [], "any", false, false, false, 10) == 1)) {
                // line 11
                echo "            <h1>El usuario es un Alumno</h1>
        ";
            } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 12
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "user", [], "any", false, false, false, 12), "UserTypeID", [], "any", false, false, false, 12), "id", [], "any", false, false, false, 12) == 2)) {
                // line 13
                echo "            <h1>El usuario es una companyia</h1>
        ";
            } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 14
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "user", [], "any", false, false, false, 14), "UserTypeID", [], "any", false, false, false, 14), "id", [], "any", false, false, false, 14) == 3)) {
                // line 15
                echo "            <h1>EL usuario es un tutor</h1>
        ";
            } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 16
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "user", [], "any", false, false, false, 16), "UserTypeID", [], "any", false, false, false, 16), "id", [], "any", false, false, false, 16) == 4)) {
                // line 17
                echo "            <h1>El usuario es administrador</h1>
        ";
            }
            // line 19
            echo "    ";
        } else {
            // line 20
            echo "        <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_registration");
            echo "\">Registration</a></li>
        <li><a href=\"";
            // line 21
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Login</a></li>
        <h1>El usuario es un invitado</h1>
    ";
        }
        // line 24
        echo "</ul>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 24,  101 => 21,  96 => 20,  93 => 19,  89 => 17,  87 => 16,  84 => 15,  82 => 14,  79 => 13,  77 => 12,  74 => 11,  72 => 10,  69 => 9,  67 => 8,  63 => 7,  60 => 6,  58 => 5,  54 => 4,  50 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<ul>
    <li><a href=\"{{ path('homepage') }}\">Home Page</a></li>
    <li><a href=\"{{ path('app_offers') }}\">Ofertas</a></li>
    <li><a href=\"{{ path('app_company') }}\">Companies</a></li>
    {% if app.user %}
        <li><a href=\"#\">Mi perfil</a></li>
        <li><a href=\"{{ path('app_logout') }}\">Log Out</a></li>
        {% if app.user.activate == 0 %}
            <h1>Your user is not activated</h1>
        {% elseif app.user.UserTypeID.id == 1 %}
            <h1>El usuario es un Alumno</h1>
        {% elseif app.user.UserTypeID.id == 2 %}
            <h1>El usuario es una companyia</h1>
        {% elseif app.user.UserTypeID.id == 3 %}
            <h1>EL usuario es un tutor</h1>
        {% elseif app.user.UserTypeID.id == 4 %}
            <h1>El usuario es administrador</h1>
        {% endif %}
    {% else %}
        <li><a href=\"{{ path('app_registration') }}\">Registration</a></li>
        <li><a href=\"{{ path('app_login') }}\">Login</a></li>
        <h1>El usuario es un invitado</h1>
    {% endif %}
</ul>", "navigation.html.twig", "C:\\laragon\\www\\The-Campus-Connection\\templates\\navigation.html.twig");
    }
}
