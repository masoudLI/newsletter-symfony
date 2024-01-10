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

/* emails/newsletter.html.twig */
class __TwigTemplate_6c046a60e46b77eb6a582455fa5f7ff4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/newsletter.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/newsletter.html.twig"));

        // line 1
        echo "<h1>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["newsletter"]) || array_key_exists("newsletter", $context) ? $context["newsletter"] : (function () { throw new RuntimeError('Variable "newsletter" does not exist.', 1, $this->source); })()), "name", [], "any", false, false, false, 1), "html", null, true);
        echo "</h1>

<div>
    ";
        // line 4
        echo twig_get_attribute($this->env, $this->source, (isset($context["newsletter"]) || array_key_exists("newsletter", $context) ? $context["newsletter"] : (function () { throw new RuntimeError('Variable "newsletter" does not exist.', 4, $this->source); })()), "content", [], "any", false, false, false, 4);
        echo "
</div>

<p>Pour vous désinscrire, cliquez sur ce lien 

<a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("newsletters_unsubscribe", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 9, $this->source); })()), "id", [], "any", false, false, false, 9), "newsletter" => twig_get_attribute($this->env, $this->source, (isset($context["newsletter"]) || array_key_exists("newsletter", $context) ? $context["newsletter"] : (function () { throw new RuntimeError('Variable "newsletter" does not exist.', 9, $this->source); })()), "id", [], "any", false, false, false, 9), "token" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 9, $this->source); })()), "validationToken", [], "any", false, false, false, 9)])), "html", null, true);
        echo "\">
";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("newsletters_unsubscribe", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 10, $this->source); })()), "id", [], "any", false, false, false, 10), "newsletter" => twig_get_attribute($this->env, $this->source, (isset($context["newsletter"]) || array_key_exists("newsletter", $context) ? $context["newsletter"] : (function () { throw new RuntimeError('Variable "newsletter" does not exist.', 10, $this->source); })()), "id", [], "any", false, false, false, 10), "token" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 10, $this->source); })()), "validationToken", [], "any", false, false, false, 10)])), "html", null, true);
        echo "


</a>


</p>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "emails/newsletter.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  62 => 10,  58 => 9,  50 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h1>{{newsletter.name}}</h1>

<div>
    {{newsletter.content|raw}}
</div>

<p>Pour vous désinscrire, cliquez sur ce lien 

<a href=\"{{ absolute_url(path('newsletters_unsubscribe', {id: user.id, newsletter:newsletter.id, token: user.validationToken})) }}\">
{{ absolute_url(path('newsletters_unsubscribe', {id: user.id, newsletter:newsletter.id, token: user.validationToken})) }}


</a>


</p>", "emails/newsletter.html.twig", "/home/massoud/www/Symfony/Newsletter/templates/emails/newsletter.html.twig");
    }
}
