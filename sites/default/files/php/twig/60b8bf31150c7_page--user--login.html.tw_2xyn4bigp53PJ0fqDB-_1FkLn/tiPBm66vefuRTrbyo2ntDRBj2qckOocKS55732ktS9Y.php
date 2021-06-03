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

/* modules/contrib/gin_login/templates/page--user--login.html.twig */
class __TwigTemplate_93d75013d30a8667bdb4d99231cb4f99b0391d01c36ef2c2a07c8a0ec0b1123d extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["block" => 56, "if" => 60];
        $filters = ["escape" => 47, "without" => 53, "t" => 57];
        $functions = ["url" => 46];

        try {
            $this->sandbox->checkSecurity(
                ['block', 'if'],
                ['escape', 'without', 't'],
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
        // line 42
        echo "<div class=\"user-form-page\">
  <div class=\"user-form-page__user-form\">
    <header class=\"content-header clearfix\">
      <div class=\"layout-container\">
       <a href=\"";
        // line 46
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("<front>")));
        echo "\">
        <img src=\"";
        // line 47
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["logo"] ?? null)), "html", null, true));
        echo "\" alt=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_name"] ?? null)), "html", null, true));
        echo "\" />
      </a>
      </div>
    </header>

    <div class=\"layout-container\">
      ";
        // line 53
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->withoutFilter($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "pre_content", [])), "claro_primary_local_tasks", "gin_primary_local_tasks"), "html", null, true));
        echo "
      <main class=\"page-content clearfix\" role=\"main\">
        <div class=\"visually-hidden\"><a id=\"main-content\" tabindex=\"-1\"></a></div>
        ";
        // line 56
        $this->displayBlock('title', $context, $blocks);
        // line 59
        echo "        ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "highlighted", [])), "html", null, true));
        echo "
        ";
        // line 60
        if ($this->getAttribute(($context["page"] ?? null), "help", [])) {
            // line 61
            echo "          <div class=\"help\">
            ";
            // line 62
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "help", [])), "html", null, true));
            echo "
          </div>
        ";
        }
        // line 65
        echo "        ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->withoutFilter($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "claro_primary_local_tasks", "gin_primary_local_tasks"), "html", null, true));
        echo "
      </main>

    </div>
  </div>

  <div class=\"user-form-page__wallpaper\">
    <!-- Wallpaper goes here -->
    <img src=\"";
        // line 73
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["brand_image"] ?? null)), "html", null, true));
        echo "\" alt=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["brand_alt"] ?? null)), "html", null, true));
        echo "\" />
  </div>
</div>
";
    }

    // line 56
    public function block_title($context, array $blocks = [])
    {
        // line 57
        echo "          <h1 class=\"page-title user-form-page__page-title\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Log in")));
        echo "</h1>
        ";
    }

    public function getTemplateName()
    {
        return "modules/contrib/gin_login/templates/page--user--login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 57,  123 => 56,  113 => 73,  101 => 65,  95 => 62,  92 => 61,  90 => 60,  85 => 59,  83 => 56,  77 => 53,  66 => 47,  62 => 46,  56 => 42,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 *  's theme implementation to display a single Drupal page.
 *
 * The doctype, html, head, and body tags are not in this template. Instead
 * they can be found in the html.html.twig template normally located in the
 * core/modules/system directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - base_path: The base URL path of the Drupal installation. Will usually be
 *   \"/\" unless you have installed Drupal in a sub-directory.
 * - is_front: A flag indicating if the current page is the front page.
 * - logged_in: A flag indicating if the user is registered and signed in.
 * - is_admin: A flag indicating if the user has permission to access
 *   administration pages.
 *
 * Site identity:
 * - front_page: The URL of the front page. Use this instead of base_path when
 *   linking to the front page. This includes the language domain or prefix.
 *
 * Page content (in order of occurrence in the default page.html.twig):
 * - node: Fully loaded node, if there is an automatically-loaded node
 *   associated with the page and the node ID is the second argument in the
 *   page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - page.header: Items for the header region.
 * - page.pre_content: Items for the pre-content region.
 * - page.breadcrumb: Items for the breadcrumb region.
 * - page.highlighted: Items for the highlighted region.
 * - page.help: Dynamic help text, mostly for admin pages.
 * - page.content: The main content of the current page.
 *
 * @see template_preprocess_page()
 * @see html.html.twig
 */
#}
<div class=\"user-form-page\">
  <div class=\"user-form-page__user-form\">
    <header class=\"content-header clearfix\">
      <div class=\"layout-container\">
       <a href=\"{{ url('<front>') }}\">
        <img src=\"{{ logo }}\" alt=\"{{ site_name }}\" />
      </a>
      </div>
    </header>

    <div class=\"layout-container\">
      {{ page.pre_content|without('claro_primary_local_tasks', 'gin_primary_local_tasks') }}
      <main class=\"page-content clearfix\" role=\"main\">
        <div class=\"visually-hidden\"><a id=\"main-content\" tabindex=\"-1\"></a></div>
        {% block title %}
          <h1 class=\"page-title user-form-page__page-title\">{{ 'Log in'|t }}</h1>
        {% endblock %}
        {{ page.highlighted }}
        {% if page.help %}
          <div class=\"help\">
            {{ page.help }}
          </div>
        {% endif %}
        {{ page.content|without('claro_primary_local_tasks', 'gin_primary_local_tasks') }}
      </main>

    </div>
  </div>

  <div class=\"user-form-page__wallpaper\">
    <!-- Wallpaper goes here -->
    <img src=\"{{ brand_image }}\" alt=\"{{ brand_alt }}\" />
  </div>
</div>
", "modules/contrib/gin_login/templates/page--user--login.html.twig", "C:\\xampp\\htdocs\\mukesh\\test\\drupal-news\\modules\\contrib\\gin_login\\templates\\page--user--login.html.twig");
    }
}
