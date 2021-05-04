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

/* left-navbar.html.twig */
class __TwigTemplate_78469d9332531e28d06fee94909bcb0646128f09f2d76575cb45e6395d169d98 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "left-navbar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "left-navbar.html.twig"));

        // line 1
        echo "<nav class=\"sb-sidenav accordion sb-sidenav-dark\" id=\"sidenavAccordion\">
    <div class=\"sb-sidenav-menu\">
        <div class=\"nav\">
            <div class=\"sb-sidenav-menu-heading\">Core</div>
            <a class=\"nav-link\" href=\"index.html\">
                <div class=\"sb-nav-link-icon\"><i class=\"fas fa-tachometer-alt\"></i></div>
                Dashboard
            </a>
            <div class=\"sb-sidenav-menu-heading\">Interface</div>
            <a class=\"nav-link collapsed\" href=\"#\" data-toggle=\"collapse\" data-target=\"#collapseQuestions\" aria-expanded=\"false\" aria-controls=\"collapseQuestions\">
                <div class=\"sb-nav-link-icon\"><i class=\"fas fa-columns\"></i></div>
                Questions
                <div class=\"sb-sidenav-collapse-arrow\"><i class=\"fas fa-angle-down\"></i></div>
            </a>
            <div class=\"collapse\" id=\"collapseQuestions\" aria-labelledby=\"headingOne\" data-parent=\"#sidenavAccordion\">
                <nav class=\"sb-sidenav-menu-nested nav\">
                    <a class=\"nav-link\" href=\"/questions\">Liste de toutes les questions</a>
                    ";
        // line 18
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "user", [], "any", false, false, false, 18)) {
            // line 19
            echo "                    <a class=\"nav-link\" href=\"/users/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "user", [], "any", false, false, false, 19), "id", [], "any", false, false, false, 19), "html", null, true);
            echo "/questions\">Liste de tes questions</a>
                    <a class=\"nav-link\" href=\"/questions/new\">Ajouter une question</a>
                    ";
        }
        // line 22
        echo "                </nav>
            </div>

            <a class=\"nav-link collapsed\" href=\"#\" data-toggle=\"collapse\" data-target=\"#collapseAnswers\" aria-expanded=\"false\" aria-controls=\"collapseAnswers\">
                <div class=\"sb-nav-link-icon\"><i class=\"fas fa-columns\"></i></div>
                Réponses
                <div class=\"sb-sidenav-collapse-arrow\"><i class=\"fas fa-angle-down\"></i></div>
            </a>
            <div class=\"collapse\" id=\"collapseAnswers\" aria-labelledby=\"headingOne\" data-parent=\"#sidenavAccordion\">
                <nav class=\"sb-sidenav-menu-nested nav\">
                    <a class=\"nav-link\" href=\"/answers\">Liste de toutes les réponses</a>
                    ";
        // line 33
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 33, $this->source); })()), "user", [], "any", false, false, false, 33)) {
            // line 34
            echo "                    <a class=\"nav-link\" href=\"/users/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 34, $this->source); })()), "user", [], "any", false, false, false, 34), "id", [], "any", false, false, false, 34), "html", null, true);
            echo "/answers\">Liste de tes réponses</a>
                    <a class=\"nav-link\" href=\"/answers/new\">Ajouter une réponse</a>
                    ";
        }
        // line 37
        echo "                </nav>
            </div>
            <a class=\"nav-link collapsed\" href=\"#\" data-toggle=\"collapse\" data-target=\"#collapsePages\" aria-expanded=\"false\" aria-controls=\"collapsePages\">
                <div class=\"sb-nav-link-icon\"><i class=\"fas fa-book-open\"></i></div>
                Ajouter une réponse
                <div class=\"sb-sidenav-collapse-arrow\"><i class=\"fas fa-angle-down\"></i></div>
            </a>
            <div class=\"collapse\" id=\"collapsePages\" aria-labelledby=\"headingTwo\" data-parent=\"#sidenavAccordion\">
                <nav class=\"sb-sidenav-menu-nested nav accordion\" id=\"sidenavAccordionPages\">
                    <a class=\"nav-link collapsed\" href=\"#\" data-toggle=\"collapse\" data-target=\"#pagesCollapseAuth\" aria-expanded=\"false\" aria-controls=\"pagesCollapseAuth\">
                        Authentication
                        <div class=\"sb-sidenav-collapse-arrow\"><i class=\"fas fa-angle-down\"></i></div>
                    </a>
                    <div class=\"collapse\" id=\"pagesCollapseAuth\" aria-labelledby=\"headingOne\" data-parent=\"#sidenavAccordionPages\">
                        <nav class=\"sb-sidenav-menu-nested nav\">
                            <a class=\"nav-link\" href=\"";
        // line 52
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\">Login</a>
                            <a class=\"nav-link\" href=\"";
        // line 53
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo "\">Register</a>
                            <a class=\"nav-link\" href=\"";
        // line 54
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forgot_password_request");
        echo "\">Forgot Password</a>
                        </nav>
                    </div>
                    <a class=\"nav-link collapsed\" href=\"#\" data-toggle=\"collapse\" data-target=\"#pagesCollapseError\" aria-expanded=\"false\" aria-controls=\"pagesCollapseError\">
                        Error
                        <div class=\"sb-sidenav-collapse-arrow\"><i class=\"fas fa-angle-down\"></i></div>
                    </a>
                    <div class=\"collapse\" id=\"pagesCollapseError\" aria-labelledby=\"headingOne\" data-parent=\"#sidenavAccordionPages\">
                        <nav class=\"sb-sidenav-menu-nested nav\">
                            <a class=\"nav-link\" href=\"401.html\">401 Page</a>
                            <a class=\"nav-link\" href=\"404.html\">404 Page</a>
                            <a class=\"nav-link\" href=\"500.html\">500 Page</a>
                        </nav>
                    </div>
                </nav>
            </div>
            <div class=\"sb-sidenav-menu-heading\">Addons</div>
            <a class=\"nav-link\" href=\"charts.html\">
                <div class=\"sb-nav-link-icon\"><i class=\"fas fa-chart-area\"></i></div>
                Charts
            </a>
            <a class=\"nav-link\" href=\"tables.html\">
                <div class=\"sb-nav-link-icon\"><i class=\"fas fa-table\"></i></div>
                Tables
            </a>
        </div>
    </div>
    ";
        // line 81
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 81, $this->source); })()), "user", [], "any", false, false, false, 81)) {
            // line 82
            echo "    <div class=\"sb-sidenav-footer\">
        <div class=\"small\">Logged in as: ";
            // line 83
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 83, $this->source); })()), "user", [], "any", false, false, false, 83), "username", [], "any", false, false, false, 83), "html", null, true);
            echo "</div>
        Start Bootstrap
    </div>
    ";
        }
        // line 87
        echo "</nav>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "left-navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 87,  153 => 83,  150 => 82,  148 => 81,  118 => 54,  114 => 53,  110 => 52,  93 => 37,  86 => 34,  84 => 33,  71 => 22,  64 => 19,  62 => 18,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"sb-sidenav accordion sb-sidenav-dark\" id=\"sidenavAccordion\">
    <div class=\"sb-sidenav-menu\">
        <div class=\"nav\">
            <div class=\"sb-sidenav-menu-heading\">Core</div>
            <a class=\"nav-link\" href=\"index.html\">
                <div class=\"sb-nav-link-icon\"><i class=\"fas fa-tachometer-alt\"></i></div>
                Dashboard
            </a>
            <div class=\"sb-sidenav-menu-heading\">Interface</div>
            <a class=\"nav-link collapsed\" href=\"#\" data-toggle=\"collapse\" data-target=\"#collapseQuestions\" aria-expanded=\"false\" aria-controls=\"collapseQuestions\">
                <div class=\"sb-nav-link-icon\"><i class=\"fas fa-columns\"></i></div>
                Questions
                <div class=\"sb-sidenav-collapse-arrow\"><i class=\"fas fa-angle-down\"></i></div>
            </a>
            <div class=\"collapse\" id=\"collapseQuestions\" aria-labelledby=\"headingOne\" data-parent=\"#sidenavAccordion\">
                <nav class=\"sb-sidenav-menu-nested nav\">
                    <a class=\"nav-link\" href=\"/questions\">Liste de toutes les questions</a>
                    {% if app.user %}
                    <a class=\"nav-link\" href=\"/users/{{app.user.id }}/questions\">Liste de tes questions</a>
                    <a class=\"nav-link\" href=\"/questions/new\">Ajouter une question</a>
                    {% endif %}
                </nav>
            </div>

            <a class=\"nav-link collapsed\" href=\"#\" data-toggle=\"collapse\" data-target=\"#collapseAnswers\" aria-expanded=\"false\" aria-controls=\"collapseAnswers\">
                <div class=\"sb-nav-link-icon\"><i class=\"fas fa-columns\"></i></div>
                Réponses
                <div class=\"sb-sidenav-collapse-arrow\"><i class=\"fas fa-angle-down\"></i></div>
            </a>
            <div class=\"collapse\" id=\"collapseAnswers\" aria-labelledby=\"headingOne\" data-parent=\"#sidenavAccordion\">
                <nav class=\"sb-sidenav-menu-nested nav\">
                    <a class=\"nav-link\" href=\"/answers\">Liste de toutes les réponses</a>
                    {% if app.user %}
                    <a class=\"nav-link\" href=\"/users/{{app.user.id }}/answers\">Liste de tes réponses</a>
                    <a class=\"nav-link\" href=\"/answers/new\">Ajouter une réponse</a>
                    {% endif %}
                </nav>
            </div>
            <a class=\"nav-link collapsed\" href=\"#\" data-toggle=\"collapse\" data-target=\"#collapsePages\" aria-expanded=\"false\" aria-controls=\"collapsePages\">
                <div class=\"sb-nav-link-icon\"><i class=\"fas fa-book-open\"></i></div>
                Ajouter une réponse
                <div class=\"sb-sidenav-collapse-arrow\"><i class=\"fas fa-angle-down\"></i></div>
            </a>
            <div class=\"collapse\" id=\"collapsePages\" aria-labelledby=\"headingTwo\" data-parent=\"#sidenavAccordion\">
                <nav class=\"sb-sidenav-menu-nested nav accordion\" id=\"sidenavAccordionPages\">
                    <a class=\"nav-link collapsed\" href=\"#\" data-toggle=\"collapse\" data-target=\"#pagesCollapseAuth\" aria-expanded=\"false\" aria-controls=\"pagesCollapseAuth\">
                        Authentication
                        <div class=\"sb-sidenav-collapse-arrow\"><i class=\"fas fa-angle-down\"></i></div>
                    </a>
                    <div class=\"collapse\" id=\"pagesCollapseAuth\" aria-labelledby=\"headingOne\" data-parent=\"#sidenavAccordionPages\">
                        <nav class=\"sb-sidenav-menu-nested nav\">
                            <a class=\"nav-link\" href=\"{{ path('app_login') }}\">Login</a>
                            <a class=\"nav-link\" href=\"{{ path('app_register') }}\">Register</a>
                            <a class=\"nav-link\" href=\"{{path('app_forgot_password_request')}}\">Forgot Password</a>
                        </nav>
                    </div>
                    <a class=\"nav-link collapsed\" href=\"#\" data-toggle=\"collapse\" data-target=\"#pagesCollapseError\" aria-expanded=\"false\" aria-controls=\"pagesCollapseError\">
                        Error
                        <div class=\"sb-sidenav-collapse-arrow\"><i class=\"fas fa-angle-down\"></i></div>
                    </a>
                    <div class=\"collapse\" id=\"pagesCollapseError\" aria-labelledby=\"headingOne\" data-parent=\"#sidenavAccordionPages\">
                        <nav class=\"sb-sidenav-menu-nested nav\">
                            <a class=\"nav-link\" href=\"401.html\">401 Page</a>
                            <a class=\"nav-link\" href=\"404.html\">404 Page</a>
                            <a class=\"nav-link\" href=\"500.html\">500 Page</a>
                        </nav>
                    </div>
                </nav>
            </div>
            <div class=\"sb-sidenav-menu-heading\">Addons</div>
            <a class=\"nav-link\" href=\"charts.html\">
                <div class=\"sb-nav-link-icon\"><i class=\"fas fa-chart-area\"></i></div>
                Charts
            </a>
            <a class=\"nav-link\" href=\"tables.html\">
                <div class=\"sb-nav-link-icon\"><i class=\"fas fa-table\"></i></div>
                Tables
            </a>
        </div>
    </div>
    {% if app.user %}
    <div class=\"sb-sidenav-footer\">
        <div class=\"small\">Logged in as: {{ app.user.username }}</div>
        Start Bootstrap
    </div>
    {% endif %}
</nav>", "left-navbar.html.twig", "D:\\Users\\flo59\\Documents\\ETUDE\\LP_DIM\\PollsSymfony\\Poll\\templates\\left-navbar.html.twig");
    }
}
