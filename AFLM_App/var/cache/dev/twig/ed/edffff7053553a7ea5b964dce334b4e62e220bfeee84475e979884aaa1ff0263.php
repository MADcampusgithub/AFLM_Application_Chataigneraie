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

/* test.html.twig */
class __TwigTemplate_fc6d4862e98312918ee6d07914790424b9db6e64a43a4acc81bf4780f33c638b extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "test.html.twig"));

        // line 1
        echo "<!-- CSS only -->
<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3\" crossorigin=\"anonymous\">
<!-- JavaScript Bundle with Popper -->
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p\" crossorigin=\"anonymous\"></script>
<link href=\"signin.css\" rel=\"stylesheet\">
<body>
  <form class=\"form-signin\" >
    <img class=\"mb-4\" src=\"Logo.png\">
    <h1 class=\"h3 mb-3 fw-normal\">Se connecter</h1>

    <div class=\"form-floating\">
      <input type=\"email\" class=\"form-control\" id=\"floatingInput\" placeholder=\"name@example.com\">
      <label for=\"floatingInput\">Adresse Email</label>
    </div>
    <div class=\"form-floating\">
      <input type=\"password\" class=\"form-control\" id=\"floatingPassword\" placeholder=\"Password\">
      <label for=\"floatingPassword\">Mot de passe</label>
    </div>
    <button class=\"w-100 btn btn-lg btn-primary\" type=\"submit\">Connexion</button>
  </form>
</body>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "test.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- CSS only -->
<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3\" crossorigin=\"anonymous\">
<!-- JavaScript Bundle with Popper -->
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p\" crossorigin=\"anonymous\"></script>
<link href=\"signin.css\" rel=\"stylesheet\">
<body>
  <form class=\"form-signin\" >
    <img class=\"mb-4\" src=\"Logo.png\">
    <h1 class=\"h3 mb-3 fw-normal\">Se connecter</h1>

    <div class=\"form-floating\">
      <input type=\"email\" class=\"form-control\" id=\"floatingInput\" placeholder=\"name@example.com\">
      <label for=\"floatingInput\">Adresse Email</label>
    </div>
    <div class=\"form-floating\">
      <input type=\"password\" class=\"form-control\" id=\"floatingPassword\" placeholder=\"Password\">
      <label for=\"floatingPassword\">Mot de passe</label>
    </div>
    <button class=\"w-100 btn btn-lg btn-primary\" type=\"submit\">Connexion</button>
  </form>
</body>", "test.html.twig", "C:\\Users\\hugol\\ProjetGroupeSymfony\\AFLM_Application_Chataigneraie\\AFLM_App\\templates\\test.html.twig");
    }
}
