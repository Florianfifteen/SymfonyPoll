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

/* security/login.html.twig */
class __TwigTemplate_64c9f90fa9e5e24e7049c827c4fbe60081a5cb7569a469c51e28e39a10a6f64b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
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

        echo "Log in!";
        
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
        echo "<body class=\"bg-primary\">
   
        <div id=\"layoutAuthentication_content\">
            <main>
                <div class=\"container\">
                    <div class=\"row justify-content-center\">
                        <div class=\"col-lg-5\">
                            <div class=\"card shadow-lg border-0 rounded-lg mt-5\">
                                <div class=\"card-header\"><h3 class=\"text-center font-weight-light my-4\">Login</h3></div>
                                <div class=\"card-body\">
                                    <form method=\"post\">
                                        ";
        // line 17
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 17, $this->source); })())) {
            // line 18
            echo "                                        <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 18, $this->source); })()), "messageKey", [], "any", false, false, false, 18), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 18, $this->source); })()), "messageData", [], "any", false, false, false, 18), "security"), "html", null, true);
            echo "</div>
                                         ";
        }
        // line 20
        echo "                                
                                         ";
        // line 21
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "user", [], "any", false, false, false, 21)) {
            // line 22
            echo "                                        <div class=\"mb-3\">
                                            You are logged in as ";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 23, $this->source); })()), "user", [], "any", false, false, false, 23), "username", [], "any", false, false, false, 23), "html", null, true);
            echo ", <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Logout</a>
                                        </div>
                                        ";
        }
        // line 26
        echo "                                   
                                        <div class=\"form-group\">
                                            <label class=\"small mb-1\" for=\"inputEmail\">Email</label>
                                            <input class=\"form-control py-4\" id=\"inputEmail\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 29, $this->source); })()), "html", null, true);
        echo "\" name=\"email\" type=\"email\" placeholder=\"Enter email address\" />
                                        </div>
                                        <div class=\"form-group\">
                                            <label class=\"small mb-1\" for=\"inputPassword\">Password</label>
                                            <input class=\"form-control py-4\" id=\"inputPassword\" type=\"password\" name=\"password\"  placeholder=\"Enter password\" />
                                        </div>
                                        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">
                                        <div class=\"form-group\">
                                            <div class=\"custom-control custom-checkbox\">
                                                <input class=\"custom-control-input\" id=\"rememberPasswordCheck\" type=\"checkbox\" />
                                                <label class=\"custom-control-label\" for=\"rememberPasswordCheck\">Remember password</label>
                                            </div>
                                        </div>
                                        <div class=\"form-group d-flex align-items-center justify-content-between mt-4 mb-0\">
                                            <a class=\"small\" href=\"";
        // line 43
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forgot_password_request");
        echo "\">Forgot Password?</a>
                                            <button class=\"btn btn-primary\"  type=\"submit\">Login</button>
                                        </div>
                                    </form>
                                </div>
                                <div class=\"card-footer text-center\">
                                    <div class=\"small\"><a href=\"";
        // line 49
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo "\">Need an account? Sign up!</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
       
  
    <script src=\"https://code.jquery.com/jquery-3.5.1.slim.min.js\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js\" crossorigin=\"anonymous\"></script>
    <script src=\"js/scripts.js\"></script>
</body>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 49,  150 => 43,  139 => 35,  130 => 29,  125 => 26,  117 => 23,  114 => 22,  112 => 21,  109 => 20,  103 => 18,  101 => 17,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Log in!{% endblock %}

{% block body %}
<body class=\"bg-primary\">
   
        <div id=\"layoutAuthentication_content\">
            <main>
                <div class=\"container\">
                    <div class=\"row justify-content-center\">
                        <div class=\"col-lg-5\">
                            <div class=\"card shadow-lg border-0 rounded-lg mt-5\">
                                <div class=\"card-header\"><h3 class=\"text-center font-weight-light my-4\">Login</h3></div>
                                <div class=\"card-body\">
                                    <form method=\"post\">
                                        {% if error %}
                                        <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
                                         {% endif %}
                                
                                         {% if app.user %}
                                        <div class=\"mb-3\">
                                            You are logged in as {{ app.user.username }}, <a href=\"{{ path('app_logout') }}\">Logout</a>
                                        </div>
                                        {% endif %}
                                   
                                        <div class=\"form-group\">
                                            <label class=\"small mb-1\" for=\"inputEmail\">Email</label>
                                            <input class=\"form-control py-4\" id=\"inputEmail\" value=\"{{ last_username }}\" name=\"email\" type=\"email\" placeholder=\"Enter email address\" />
                                        </div>
                                        <div class=\"form-group\">
                                            <label class=\"small mb-1\" for=\"inputPassword\">Password</label>
                                            <input class=\"form-control py-4\" id=\"inputPassword\" type=\"password\" name=\"password\"  placeholder=\"Enter password\" />
                                        </div>
                                        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">
                                        <div class=\"form-group\">
                                            <div class=\"custom-control custom-checkbox\">
                                                <input class=\"custom-control-input\" id=\"rememberPasswordCheck\" type=\"checkbox\" />
                                                <label class=\"custom-control-label\" for=\"rememberPasswordCheck\">Remember password</label>
                                            </div>
                                        </div>
                                        <div class=\"form-group d-flex align-items-center justify-content-between mt-4 mb-0\">
                                            <a class=\"small\" href=\"{{path('app_forgot_password_request')}}\">Forgot Password?</a>
                                            <button class=\"btn btn-primary\"  type=\"submit\">Login</button>
                                        </div>
                                    </form>
                                </div>
                                <div class=\"card-footer text-center\">
                                    <div class=\"small\"><a href=\"{{path('app_register')}}\">Need an account? Sign up!</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
       
  
    <script src=\"https://code.jquery.com/jquery-3.5.1.slim.min.js\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js\" crossorigin=\"anonymous\"></script>
    <script src=\"js/scripts.js\"></script>
</body>

{% endblock %}
", "security/login.html.twig", "D:\\Users\\flo59\\Documents\\ETUDE\\LP_DIM\\SymfonyPoll\\templates\\security\\login.html.twig");
    }
}
