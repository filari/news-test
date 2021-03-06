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

/* themes/custom/jbi_digital/templates/layout/page.html.twig */
class __TwigTemplate_75e08eb25b360a96f964c77405cfbbff04a17f789528876ffc6db064f693f155 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["include" => 71];
        $filters = ["escape" => 79];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['include'],
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
        // line 70
        echo "
";
        // line 71
        $this->loadTemplate("@jbi_digital/layout/includes/_header.html.twig", "themes/custom/jbi_digital/templates/layout/page.html.twig", 71)->display($context);
        // line 72
        echo "
";
        // line 74
        echo "

<nav aria-label=\"breadcrumb\" class=\"custom_breadcrumb\">
  <div class=\"container\">
    <div class=\"row\">
      ";
        // line 79
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "breadcrumb", [])), "html", null, true));
        echo "
     ";
        // line 85
        echo "    </div>
  </div>
</nav>




<!-- Start category Area -->
<section class=\"cause-area bg-gray py-5\">
  <div class=\"container\">

    <div class=\"row\">
      <div class=\"col-12 col-lg-9\"><!--left S Program listide Colloum-->
        <div class=\"row\">

          <div class=\"col-12\">
            <h2 class=\"border-bottom mb-2\">";
        // line 101
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "page_title", [])), "html", null, true));
        echo "</h2>
          </div>
          <div class=\"col-12 mb-3 d-flex flex-wrap align-items-center space-between\">

            ";
        // line 117
        echo "          </div>

          ";
        // line 119
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true));
        echo "


        </div>
      </div><!--End Program list left Side Colloum-->


      <aside class=\"col-12 col-lg-3\"> <!--Right Side Colloum-->
        <div class=\"row sticky_style\">

          <div class=\"col-12 px-2 pt-2 bg-white \">
          ";
        // line 130
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])), "html", null, true));
        echo "
          </div>
         ";
        // line 171
        echo "
        </div>
      </aside><!--End Right Side Colloum-->
    </div>

  </div>
  </div>
</section>
<!-- end category Area -->





";
        // line 185
        $this->loadTemplate("@jbi_digital/layout/includes/_footer.html.twig", "themes/custom/jbi_digital/templates/layout/page.html.twig", 185)->display($context);
        // line 186
        echo "
";
    }

    public function getTemplateName()
    {
        return "themes/custom/jbi_digital/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 186,  138 => 185,  122 => 171,  117 => 130,  103 => 119,  99 => 117,  92 => 101,  74 => 85,  70 => 79,  63 => 74,  60 => 72,  58 => 71,  55 => 70,);
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
 * Bootstrap Barrio's theme implementation to display a single page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.html.twig template normally located in the
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
 * - logo: The url of the logo image, as defined in theme settings.
 * - site_name: The name of the site. This is empty when displaying the site
 *   name has been disabled in the theme settings.
 * - site_slogan: The slogan of the site. This is empty when displaying the site
 *   slogan has been disabled in theme settings.

 * Page content (in order of occurrence in the default page.html.twig):
 * - node: Fully loaded node, if there is an automatically-loaded node
 *   associated with the page and the node ID is the second argument in the
 *   page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - page.top_header: Items for the top header region.
 * - page.top_header_form: Items for the top header form region.
 * - page.header: Items for the header region.
 * - page.header_form: Items for the header form region.
 * - page.highlighted: Items for the highlighted region.
 * - page.primary_menu: Items for the primary menu region.
 * - page.secondary_menu: Items for the secondary menu region.
 * - page.featured_top: Items for the featured top region.
 * - page.content: The main content of the current page.
 * - page.sidebar_first: Items for the first sidebar.
 * - page.sidebar_second: Items for the second sidebar.
 * - page.featured_bottom_first: Items for the first featured bottom region.
 * - page.featured_bottom_second: Items for the second featured bottom region.
 * - page.featured_bottom_third: Items for the third featured bottom region.
 * - page.footer_first: Items for the first footer column.
 * - page.footer_second: Items for the second footer column.
 * - page.footer_third: Items for the third footer column.
 * - page.footer_fourth: Items for the fourth footer column.
 * - page.footer_fifth: Items for the fifth footer column.
 * - page.breadcrumb: Items for the breadcrumb region.
 *
 * Theme variables:
 * - navbar_top_attributes: Items for the header region.
 * - navbar_attributes: Items for the header region.
 * - content_attributes: Items for the header region.
 * - sidebar_first_attributes: Items for the highlighted region.
 * - sidebar_second_attributes: Items for the primary menu region.
 * - sidebar_collapse: If the sidebar_first will collapse.
 *
 * @see template_preprocess_page()
 * @see bootstrap_barrio_preprocess_page()
 * @see html.html.twig
 */
#}

{% include '@jbi_digital/layout/includes/_header.html.twig' %}

{#{{ page.content }}#}


<nav aria-label=\"breadcrumb\" class=\"custom_breadcrumb\">
  <div class=\"container\">
    <div class=\"row\">
      {{ page.breadcrumb }}
     {# <ol class=\"breadcrumb\">
        <li class=\"breadcrumb-item\"><a href=\"#\">Home</a></li>
        <li class=\"breadcrumb-item\"><a href=\"#\">Study Aborad</a></li>
        <li class=\"breadcrumb-item active\" aria-current=\"page\">Spain</li>
      </ol>#}
    </div>
  </div>
</nav>




<!-- Start category Area -->
<section class=\"cause-area bg-gray py-5\">
  <div class=\"container\">

    <div class=\"row\">
      <div class=\"col-12 col-lg-9\"><!--left S Program listide Colloum-->
        <div class=\"row\">

          <div class=\"col-12\">
            <h2 class=\"border-bottom mb-2\">{{ page.page_title }}</h2>
          </div>
          <div class=\"col-12 mb-3 d-flex flex-wrap align-items-center space-between\">

            {#<div class=\"float-right d-flex align-items-center\">
              <span class=\"small text-nowrap mr-1\">Sort By</span>
              <span class=\"default-select\" id=\"default-select\">
                                <select>
                                    <option value=\" 1\">1</option>
                                    <option value=\"1\">2</option>
                                    <option value=\"1\">3</option>
                                    <option value=\"1\">4</option>
                                    <option value=\"1\">5</option>
                                </select>
                            </span>
            </div>#}
          </div>

          {{ page.content }}


        </div>
      </div><!--End Program list left Side Colloum-->


      <aside class=\"col-12 col-lg-3\"> <!--Right Side Colloum-->
        <div class=\"row sticky_style\">

          <div class=\"col-12 px-2 pt-2 bg-white \">
          {{ page.sidebar_first }}
          </div>
         {# <h3>Related Articles</h3>
          <div class=\"col-12 px-2 pt-2 bg-white \">
            <div class=\"media post_item mb-2\">
              <img src=\"dump/blog_post1.jpeg\" alt=\"post\">
              <div class=\"media-body pl-1\">
                <a href=\"#\">
                  <h4>The 10 Best Places to Study...</h4>
                </a>
                <p class=\"small\">02 Hours ago</p>
              </div>
            </div>
            <div class=\"media post_item mb-2\">
              <img src=\"dump/blog.jpg\" alt=\"post\">
              <div class=\"media-body pl-1 mb-2\">
                <a href=\"#\">
                  <h4>The 10 Best Places to Study...</h4>
                </a>
                <p class=\"small\">02 Hours ago</p>
              </div>
            </div>
            <div class=\"media post_item mb-2\">
              <img src=\"dump/blog_post1.jpeg\" alt=\"post\">
              <div class=\"media-body pl-1\">
                <a href=\"#\">
                  <h4>The 10 Best Places to Study...</h4>
                </a>
                <p class=\"small\">02 Hours ago</p>
              </div>
            </div>
            <div class=\"media post_item mb-2\">
              <img src=\"dump/blog.jpg\" alt=\"post\">
              <div class=\"media-body pl-1 mb-2\">
                <a href=\"#\">
                  <h4>The 10 Best Places to Study...</h4>
                </a>
                <p class=\"small\">02 Hours ago</p>
              </div>
            </div>
          </div>#}

        </div>
      </aside><!--End Right Side Colloum-->
    </div>

  </div>
  </div>
</section>
<!-- end category Area -->





{% include '@jbi_digital/layout/includes/_footer.html.twig' %}

{#<div id=\"page-wrapper\">
  <div id=\"page\">
    <header id=\"header\" class=\"header\" role=\"banner\" aria-label=\"{{ 'Site header'|t}}\">
      {% block head %}
        {% if page.secondary_menu or page.top_header or page.top_header_form %}
          <nav{{ navbar_top_attributes }}>
            {% if container_navbar %}
            <div class=\"container\">
              {% endif %}
              {{ page.secondary_menu }}
              {{ page.top_header }}
              {% if page.top_header_form %}
                <div class=\"form-inline navbar-form ml-auto\">
                  {{ page.top_header_form }}
                </div>
              {% endif %}
              {% if container_navbar %}
            </div>
            {% endif %}
          </nav>
        {% endif %}
        <nav{{ navbar_attributes }}>
          {% if container_navbar %}
          <div class=\"container\">
            {% endif %}
            {{ page.header }}
            {% if page.primary_menu or page.header_form %}
              <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#CollapsingNavbar\" aria-controls=\"CollapsingNavbar\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"><span class=\"navbar-toggler-icon\"></span></button>
              <div class=\"collapse navbar-collapse justify-content-end\" id=\"CollapsingNavbar\">
                {{ page.primary_menu }}
                {% if page.header_form %}
                  <div class=\"form-inline navbar-form justify-content-end\">
                    {{ page.header_form }}
                  </div>
                {% endif %}
              </div>
            {% endif %}
            {% if sidebar_collapse %}
              <button class=\"navbar-toggler navbar-toggler-left collapsed\" type=\"button\" data-toggle=\"collapse\" data-target=\"#CollapsingLeft\" aria-controls=\"CollapsingLeft\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"></button>
            {% endif %}
            {% if container_navbar %}
          </div>
          {% endif %}
        </nav>
      {% endblock %}
    </header>
    {% if page.highlighted %}
      <div class=\"highlighted\">
        <aside class=\"{{ container }} section clearfix\" role=\"complementary\">
          {{ page.highlighted }}
        </aside>
      </div>
    {% endif %}
    {% if page.featured_top %}
      {% block featured %}
        <div class=\"featured-top\">
          <aside class=\"featured-top__inner section {{ container }} clearfix\" role=\"complementary\">
            {{ page.featured_top }}
          </aside>
        </div>
      {% endblock %}
    {% endif %}
    <div id=\"main-wrapper\" class=\"layout-main-wrapper clearfix\">
      {% block content %}
        <div id=\"main\" class=\"{{ container }}\">
          {{ page.breadcrumb }}
          <div class=\"row row-offcanvas row-offcanvas-left clearfix\">
            <main{{ content_attributes }}>
              <section class=\"section\">
                <a id=\"main-content\" tabindex=\"-1\"></a>
                {{ page.content }}
              </section>
            </main>
            {% if page.sidebar_first %}
              <div{{ sidebar_first_attributes }}>
                <aside class=\"section\" role=\"complementary\">
                  {{ page.sidebar_first }}
                </aside>
              </div>
            {% endif %}
            {% if page.sidebar_second %}
              <div{{ sidebar_second_attributes }}>
                <aside class=\"section\" role=\"complementary\">
                  {{ page.sidebar_second }}
                </aside>
              </div>
            {% endif %}
          </div>
        </div>
      {% endblock %}
    </div>
    {% if page.featured_bottom_first or page.featured_bottom_second or page.featured_bottom_third %}
      <div class=\"featured-bottom\">
        <aside class=\"{{ container }} clearfix\" role=\"complementary\">
          {{ page.featured_bottom_first }}
          {{ page.featured_bottom_second }}
          {{ page.featured_bottom_third }}
        </aside>
      </div>
    {% endif %}
    <footer class=\"site-footer\">
      {% block footer %}
        <div class=\"{{ container }}\">
          {% if page.footer_first or page.footer_second or page.footer_third or page.footer_fourth %}
            <div class=\"site-footer__top clearfix\">
              {{ page.footer_first }}
              {{ page.footer_second }}
              {{ page.footer_third }}
              {{ page.footer_fourth }}
            </div>
          {% endif %}
          {% if page.footer_fifth %}
            <div class=\"site-footer__bottom\">
              {{ page.footer_fifth }}
            </div>
          {% endif %}
        </div>
      {% endblock %}
    </footer>
  </div>
</div>#}
", "themes/custom/jbi_digital/templates/layout/page.html.twig", "C:\\xampp\\htdocs\\mukesh\\test\\drupal-news\\themes\\custom\\jbi_digital\\templates\\layout\\page.html.twig");
    }
}
