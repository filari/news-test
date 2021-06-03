<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @jbi_digital/layout/includes/_header.html.twig */
class __TwigTemplate_0e28cb485f2db6a2a098872a3d2aacd85ec826ebe1d43f06a941f90d4b132c76 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 13];
        $filters = ["escape" => 7];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!-- Start Header Area -->
<header id=\"header\">
  <div class=\"container\">
    <div class=\"row align-items-center justify-content-between d-flex\">
      <div id=\"logo\">
        ";
        // line 7
        echo "        ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "branding", [])), "html", null, true));
        echo "
      </div>
      <nav id=\"nav-menu-container\">

        ";
        // line 11
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "primary_menu", [])), "html", null, true));
        echo "

        ";
        // line 13
        if ((($context["logged_in"] ?? null) == false)) {
            // line 14
            echo "        <ul class=\"nav-menu\">
          <li><a href=\"#\">Login</a></li>
          <li><a href=\"#\" class=\"btn btn-primary text-white\"><i class=\"fa fa-user-plus\"></i> <em>Signup</em></a></li>
        </ul>
        ";
        }
        // line 19
        echo "        ";
        // line 62
        echo "      </nav>
    </div>
  </div>
</header>
<!-- Start Header Area -->
";
    }

    public function getTemplateName()
    {
        return "@jbi_digital/layout/includes/_header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 62,  84 => 19,  77 => 14,  75 => 13,  70 => 11,  62 => 7,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<!-- Start Header Area -->
<header id=\"header\">
  <div class=\"container\">
    <div class=\"row align-items-center justify-content-between d-flex\">
      <div id=\"logo\">
        {#<a href=\"index.html\"><img src=\"assets/img/logo.png\" alt=\"\" title=\"\"/></a>#}
        {{ page.branding }}
      </div>
      <nav id=\"nav-menu-container\">

        {{ page.primary_menu }}

        {% if logged_in == false %}
        <ul class=\"nav-menu\">
          <li><a href=\"#\">Login</a></li>
          <li><a href=\"#\" class=\"btn btn-primary text-white\"><i class=\"fa fa-user-plus\"></i> <em>Signup</em></a></li>
        </ul>
        {% endif %}
        {#<ul class=\"nav-menu\">
          <li class=\"menu-has-children\">
            <a href=\"#\">Program Abroad</a>
            <ul>
              <li>
                <a href=\"study-abroad.html\">Study Abroad</a>
              </li>
              <li>
                <a href=\"#\">Volunteer Abroad</a>
              </li>
              <li>
                <a href=\"#\">Teach Abroad</a>
              </li>
              <li>
                <a href=\"#\">TEFL Courses</a>
              </li>
              <li>
                <a href=\"#\">Internships Abroad</a>
              </li>
              <li>
                <a href=\"#\">Gap Year Abroad</a>
              </li>
              <li>
                <a href=\"#\">High School Abroad</a>
              </li>
              <li>
                <a href=\"#\">Language Schools</a>
              </li>
              <li>
                <a href=\"#\">Tours &amp; Trips</a>
              </li>
              <li>
                <a href=\"#\">Book With GO</a>
              </li>
            </ul>
          </li>
          <li><a href=\"#\">About</a></li>
          <li><a href=\"#\">Articles</a></li>
          <li><a href=\"#\">Leave a Reviews</a></li>
          <li><a href=\"contact.html\">Contact</a></li>
          <li><a href=\"#\">Login</a></li>
          <li><a href=\"#\" class=\"btn btn-primary text-white\"><i class=\"fa fa-user-plus\"></i> <em>Signup</em></a></li>
        </ul>#}
      </nav>
    </div>
  </div>
</header>
<!-- Start Header Area -->
", "@jbi_digital/layout/includes/_header.html.twig", "C:\\xampp\\htdocs\\mukesh\\test\\drupal-news\\themes\\custom\\jbi_digital\\templates\\layout\\includes\\_header.html.twig");
    }
}
