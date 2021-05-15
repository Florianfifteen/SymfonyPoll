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

/* topbar.html.twig */
class __TwigTemplate_021608f6c19e754a0052691cfc333bff183e1fcb3f01b28f4910728e0b26721a extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "topbar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "topbar.html.twig"));

        // line 1
        echo "<nav class=\"sb-topnav navbar navbar-expand navbar-dark bg-dark\">
    <a class=\"navbar-brand\" href=\"index.html\">Start Bootstrap</a>
    <button class=\"btn btn-link btn-sm order-1 order-lg-0\" id=\"sidebarToggle\" href=\"#\"><i class=\"fas fa-bars\"></i></button>
    <!-- Navbar Search-->
    <form class=\"d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0\">
        <div class=\"input-group\">
            <input class=\"form-control\" type=\"text\" placeholder=\"Search for...\" aria-label=\"Search\" aria-describedby=\"basic-addon2\" />
            <div class=\"input-group-append\">
                <button class=\"btn btn-primary\" type=\"button\"><i class=\"fas fa-search\"></i></button>
            </div>
        </div>
    </form>
    <!-- Navbar-->
    <ul class=\"navbar-nav ml-auto ml-md-0\">
        <li class=\"nav-item dropdown\">
            <a class=\"nav-link dropdown-toggle\" id=\"userDropdown\" href=\"#\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"><i class=\"fas fa-user fa-fw\"></i></a>
            <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"userDropdown\">
                <a class=\"dropdown-item\" href=\"/users\">Settings</a>
                <a class=\"dropdown-item\" href=\"#\">Activity Log</a>
                <div class=\"dropdown-divider\"></div>
                <a class=\"dropdown-item\" href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\">Logout</a>
            </div>
        </li>
    </ul>
</nav>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "topbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 21,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"sb-topnav navbar navbar-expand navbar-dark bg-dark\">
    <a class=\"navbar-brand\" href=\"index.html\">Start Bootstrap</a>
    <button class=\"btn btn-link btn-sm order-1 order-lg-0\" id=\"sidebarToggle\" href=\"#\"><i class=\"fas fa-bars\"></i></button>
    <!-- Navbar Search-->
    <form class=\"d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0\">
        <div class=\"input-group\">
            <input class=\"form-control\" type=\"text\" placeholder=\"Search for...\" aria-label=\"Search\" aria-describedby=\"basic-addon2\" />
            <div class=\"input-group-append\">
                <button class=\"btn btn-primary\" type=\"button\"><i class=\"fas fa-search\"></i></button>
            </div>
        </div>
    </form>
    <!-- Navbar-->
    <ul class=\"navbar-nav ml-auto ml-md-0\">
        <li class=\"nav-item dropdown\">
            <a class=\"nav-link dropdown-toggle\" id=\"userDropdown\" href=\"#\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"><i class=\"fas fa-user fa-fw\"></i></a>
            <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"userDropdown\">
                <a class=\"dropdown-item\" href=\"/users\">Settings</a>
                <a class=\"dropdown-item\" href=\"#\">Activity Log</a>
                <div class=\"dropdown-divider\"></div>
                <a class=\"dropdown-item\" href=\"{{ path('app_logout') }}\">Logout</a>
            </div>
        </li>
    </ul>
</nav>", "topbar.html.twig", "D:\\Users\\flo59\\Documents\\ETUDE\\LP_DIM\\SymfonyPoll\\templates\\topbar.html.twig");
    }
}
