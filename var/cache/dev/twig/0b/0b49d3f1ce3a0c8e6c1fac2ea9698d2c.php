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
    ";
        // line 3
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 3, $this->source); })()), "user", [], "any", false, false, false, 3)) {
            // line 4
            echo "        <li><a href=\"#\">Mi perfil</a></li>
        <li><a href=\"";
            // line 5
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Log Out</a></li>
        ";
            // line 6
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 6, $this->source); })()), "user", [], "any", false, false, false, 6), "activate", [], "any", false, false, false, 6) == 0)) {
                // line 7
                echo "            <h1>Your user is not activated</h1>
        ";
            } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 8
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 8, $this->source); })()), "user", [], "any", false, false, false, 8), "UserTypeID", [], "any", false, false, false, 8), "id", [], "any", false, false, false, 8) == 1)) {
                // line 9
                echo "            <li><a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_offers");
                echo "\">Ofertas</a></li>
            <li><a href=\"";
                // line 10
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_companies");
                echo "\">Companies</a></li>
            <h1>El usuario es un Alumno</h1>
        ";
            } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 12
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "user", [], "any", false, false, false, 12), "UserTypeID", [], "any", false, false, false, 12), "id", [], "any", false, false, false, 12) == 2)) {
                // line 13
                echo "            <li><a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_my_offers");
                echo "\">Mis ofertas</a></li>
            <li><a href=\"";
                // line 14
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_my_company");
                echo "\">Mi compañia</a></li>
            <h1>El usuario es una companyia</h1>
        ";
            } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 16
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "user", [], "any", false, false, false, 16), "UserTypeID", [], "any", false, false, false, 16), "id", [], "any", false, false, false, 16) == 3)) {
                // line 17
                echo "            <h1>EL usuario es un tutor</h1>
        ";
            } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 18
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "user", [], "any", false, false, false, 18), "UserTypeID", [], "any", false, false, false, 18), "id", [], "any", false, false, false, 18) == 4)) {
                // line 19
                echo "            <h1>El usuario es administrador</h1>
        ";
            }
            // line 21
            echo "    ";
        } else {
            // line 22
            echo "        <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_registration");
            echo "\">Registration</a></li>
        <li><a href=\"";
            // line 23
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Login</a></li>
        <h1>El usuario es un invitado</h1>
    ";
        }
        // line 26
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
        return array (  113 => 26,  107 => 23,  102 => 22,  99 => 21,  95 => 19,  93 => 18,  90 => 17,  88 => 16,  83 => 14,  78 => 13,  76 => 12,  71 => 10,  66 => 9,  64 => 8,  61 => 7,  59 => 6,  55 => 5,  52 => 4,  50 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<ul>
    <li><a href=\"{{ path('homepage') }}\">Home Page</a></li>
    {% if app.user %}
        <li><a href=\"#\">Mi perfil</a></li>
        <li><a href=\"{{ path('app_logout') }}\">Log Out</a></li>
        {% if app.user.activate == 0 %}
            <h1>Your user is not activated</h1>
        {% elseif app.user.UserTypeID.id == 1 %}
            <li><a href=\"{{ path('app_offers') }}\">Ofertas</a></li>
            <li><a href=\"{{ path('app_companies') }}\">Companies</a></li>
            <h1>El usuario es un Alumno</h1>
        {% elseif app.user.UserTypeID.id == 2 %}
            <li><a href=\"{{ path('app_my_offers') }}\">Mis ofertas</a></li>
            <li><a href=\"{{ path('app_my_company') }}\">Mi compañia</a></li>
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
