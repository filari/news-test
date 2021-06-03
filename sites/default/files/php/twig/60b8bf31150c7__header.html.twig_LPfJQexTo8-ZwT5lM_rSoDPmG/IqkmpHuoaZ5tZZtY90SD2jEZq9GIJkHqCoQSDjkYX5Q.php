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
        $filters = ["escape" => 7, "t" => 16];
        $functions = ["url" => 16];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 't'],
                ['url']
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
         
          <li><a href=\"";
            // line 16
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("<front>") . "user/login"), "html", null, true));
            echo "\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Login")));
            echo "</a></li>
          <li><a href=\"";
            // line 17
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("<front>") . "user/register"), "html", null, true));
            echo "\" class=\"btn btn-primary text-white\"><i class=\"fa fa-user-plus\"></i> <em>";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Signup")));
            echo "</em></a></li>
        </ul>
        ";
        }
        // line 20
        echo "
      </nav>
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
        return array (  95 => 20,  87 => 17,  81 => 16,  77 => 14,  75 => 13,  70 => 11,  62 => 7,  55 => 1,);
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
         
          <li><a href=\"{{ url('<front>') ~ 'user/login' }}\">{{ 'Login'|t }}</a></li>
          <li><a href=\"{{ url('<front>') ~ 'user/register' }}\" class=\"btn btn-primary text-white\"><i class=\"fa fa-user-plus\"></i> <em>{{ 'Signup'|t }}</em></a></li>
        </ul>
        {% endif %}

      </nav>
    </div>
  </div>
</header>
<!-- Start Header Area -->


", "@jbi_digital/layout/includes/_header.html.twig", "C:\\xampp\\htdocs\\mukesh\\test\\drupal-news\\themes\\custom\\jbi_digital\\templates\\layout\\includes\\_header.html.twig");
    }
}
