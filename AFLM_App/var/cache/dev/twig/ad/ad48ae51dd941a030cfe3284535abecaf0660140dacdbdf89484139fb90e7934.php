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
class __TwigTemplate_3f1e5078f5c4aec9410219b5cca436ae22fa91b4c8b09ed4f2984d79900d1abe extends Template
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
            'styles' => [$this, 'block_styles'],
            'utilisateur' => [$this, 'block_utilisateur'],
            'content' => [$this, 'block_content'],
            'scripts' => [$this, 'block_scripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
    <meta charset=\"UTF-8\"/>
    <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <link rel=\"stylesheet\" href=\"assets/bootstrap.min.css\" />
    ";
        // line 8
        $this->displayBlock('styles', $context, $blocks);
        // line 9
        echo "</head>

<body>
<nav class=\"navbar navbar-expand-sm navbar-dark bg-dark\">
  <div class=\"container-fluid\">
    <a class=\"navbar-brand\" href=\"\">GSB</a>
    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
      <ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
        <li class=\"nav-item\">
          <a class=\"nav-link active\" aria-current=\"page\" href=\"#\">Entreprises</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"#\">Professionnels</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"#\">Utilisateurs</a>
        </li>
      </ul>
      <span class=\"navbar-text dropdown\">
        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownMenuLink\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
          ";
        // line 32
        $this->displayBlock('utilisateur', $context, $blocks);
        // line 33
        echo "        </a>
        <ul class=\"dropdown-menu dropdown-menu-dark dropdown-menu-lg-end\" aria-labelledby=\"navbarDropdownMenuLink\">
          <li><a class=\"dropdown-item\" href=\"#\">Deconnexion</a></li>
        </ul>
      </span>
      <img src=\"imgs/defaut_utilisateur.png\" alt=\"\" width=\"30\" height=\"30\">
    </div>
  </div>
</nav>

<div class=\"container\">
  <div class=\"text-center py-5 px-3\">
    ";
        // line 45
        $this->displayBlock('content', $context, $blocks);
        // line 46
        echo "  </div>
</div>

<script src=\"assets/bootstrap.bundle.min.js\"></script>
";
        // line 50
        $this->displayBlock('scripts', $context, $blocks);
        // line 51
        echo "
</body>
</html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 8
    public function block_styles($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "styles"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 32
    public function block_utilisateur($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "utilisateur"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 45
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 50
    public function block_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "scripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  168 => 50,  156 => 45,  144 => 32,  132 => 8,  120 => 6,  110 => 51,  108 => 50,  102 => 46,  100 => 45,  86 => 33,  84 => 32,  59 => 9,  57 => 8,  52 => 6,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
    <meta charset=\"UTF-8\"/>
    <title>{% block title %}{% endblock %}</title>
    <link rel=\"stylesheet\" href=\"assets/bootstrap.min.css\" />
    {% block styles %}{% endblock %}
</head>

<body>
<nav class=\"navbar navbar-expand-sm navbar-dark bg-dark\">
  <div class=\"container-fluid\">
    <a class=\"navbar-brand\" href=\"\">GSB</a>
    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
      <ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
        <li class=\"nav-item\">
          <a class=\"nav-link active\" aria-current=\"page\" href=\"#\">Entreprises</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"#\">Professionnels</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"#\">Utilisateurs</a>
        </li>
      </ul>
      <span class=\"navbar-text dropdown\">
        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownMenuLink\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
          {% block utilisateur %}{% endblock %}
        </a>
        <ul class=\"dropdown-menu dropdown-menu-dark dropdown-menu-lg-end\" aria-labelledby=\"navbarDropdownMenuLink\">
          <li><a class=\"dropdown-item\" href=\"#\">Deconnexion</a></li>
        </ul>
      </span>
      <img src=\"imgs/defaut_utilisateur.png\" alt=\"\" width=\"30\" height=\"30\">
    </div>
  </div>
</nav>

<div class=\"container\">
  <div class=\"text-center py-5 px-3\">
    {% block content %}{% endblock %}
  </div>
</div>

<script src=\"assets/bootstrap.bundle.min.js\"></script>
{% block scripts %}{% endblock %}

</body>
</html>
", "base.html.twig", "C:\\Users\\Laptop Adler\\Documents\\ProjetSymfony\\AFLM_Application_Chataigneraie_App\\AFLM_App\\templates\\base.html.twig");
    }
}
