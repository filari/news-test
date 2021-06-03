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

/* themes/custom/jbi_digital/templates/view-mode/node--news--teaser.html.twig */
class __TwigTemplate_154ff02c6e7aaf6158234581e75a5384f2c4fd47166f1bfb6d68377c48cb0d17 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = [];
        $filters = ["escape" => 73, "safe_join" => 84, "field_value" => 84, "t" => 100];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape', 'safe_join', 'field_value', 't'],
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
        // line 62
        echo "

<div class=\"col-12\">
  <div class=\"single-cause cause-list-style bg-white\">
    <div class=\"d-sm-flex\">
      <div class=\"col-12 col-sm-4 col-md-3 col-lg-4 p-0\">
                                   ";
        // line 72
        echo "       ";
        // line 73
        echo "        ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_image", [])), "html", null, true));
        echo "
      </div>
      <div class=\"caption col-12 col-sm-8 col-md-9 col-lg-8 py-2\">
        ";
        // line 79
        echo "        <a href=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null)), "html", null, true));
        echo "\">
          <h3>";
        // line 80
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null)), "html", null, true));
        echo "</h3>
        </a>
        <p class=\"text-muted small\">
                                        <span class=\"pull-left\">
                                          ";
        // line 84
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->safeJoin($this->env, $this->env->getExtension('Drupal\twig_field_value\Twig\Extension\FieldValueExtension')->getFieldValue($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_tags", []))), ", ")));
        echo "
                                        </span>
         ";
        // line 87
        echo "        </p>
        <p class=\"caption_text\">
          ";
        // line 89
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "body", [])), "html", null, true));
        echo "
        </p>
        <p class=\"caption_text text-muted small\">
          <i class=\"fa fa-calendar text-info\"></i> ";
        // line 92
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["date"] ?? null)), "html", null, true));
        echo " <br>
          ";
        // line 93
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "flag_bookmark", [])), "html", null, true));
        echo "
        </p>
        <footer class=\"text-right\">

         ";
        // line 100
        echo "          <a href=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null)), "html", null, true));
        echo "\" class=\"btn btn-primary btn-sm\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("View")));
        echo "</a>
        </footer>
      </div>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/jbi_digital/templates/view-mode/node--news--teaser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 100,  103 => 93,  99 => 92,  93 => 89,  89 => 87,  84 => 84,  77 => 80,  72 => 79,  65 => 73,  63 => 72,  55 => 62,);
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
 * Bootstrap Barrio's theme implementation to display a node.
 *
 * Available variables:
 * - node: The node entity with limited access to object properties and methods.
     Only \"getter\" methods (method names starting with \"get\", \"has\", or \"is\")
     and a few common methods such as \"id\" and \"label\" are available. Calling
     other methods (such as node.delete) will result in an exception.
 * - label: The title of the node.
 * - content: All node items. Use {{ content }} to print them all,
 *   or print a subset such as {{ content.field_example }}. Use
 *   {{ content|without('field_example') }} to temporarily suppress the printing
 *   of a given child element.
 * - author_picture: The node author user entity, rendered using the \"compact\"
 *   view mode.
 * - metadata: Metadata for this node.
 * - date: Themed creation date field.
 * - author_name: Themed author name field.
 * - url: Direct URL of the current node.
 * - display_submitted: Whether submission information should be displayed.
 * - attributes: HTML attributes for the containing element.
 *   The attributes.class element may contain one or more of the following
 *   classes:
 *   - node: The current template type (also known as a \"theming hook\").
 *   - node--type-[type]: The current node type. For example, if the node is an
 *     \"Article\" it would result in \"node--type-article\". Note that the machine
 *     name will often be in a short form of the human readable label.
 *   - node--view-mode-[view_mode]: The View Mode of the node; for example, a
 *     teaser would result in: \"node--view-mode-teaser\", and
 *     full: \"node--view-mode-full\".
 *   The following are controlled through the node publishing options.
 *   - node--promoted: Appears on nodes promoted to the front page.
 *   - node--sticky: Appears on nodes ordered above other non-sticky nodes in
 *     teaser listings.
 *   - node--unpublished: Appears on unpublished nodes visible only to site
 *     admins.
 * - title_attributes: Same as attributes, except applied to the main title
 *   tag that appears in the template.
 * - content_attributes: Same as attributes, except applied to the main
 *   content tag that appears in the template.
 * - author_attributes: Same as attributes, except applied to the author of
 *   the node tag that appears in the template.
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the main title tag that appears in the template.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the main title tag that appears in the template.
 * - view_mode: View mode; for example, \"teaser\" or \"full\".
 * - teaser: Flag for the teaser state. Will be true if view_mode is 'teaser'.
 * - page: Flag for the full page state. Will be true if view_mode is 'full'.
 * - readmore: Flag for more state. Will be true if the teaser content of the
 *   node cannot hold the main body content.
 * - logged_in: Flag for authenticated user status. Will be true when the
 *   current user is a logged-in member.
 * - is_admin: Flag for admin user status. Will be true when the current user
 *   is an administrator.
 *
 * @see template_preprocess_node()
 */
#}


<div class=\"col-12\">
  <div class=\"single-cause cause-list-style bg-white\">
    <div class=\"d-sm-flex\">
      <div class=\"col-12 col-sm-4 col-md-3 col-lg-4 p-0\">
                                   {# <span class=\"wishlist_on_thumb\" data-toggle=\"tooltip\" title=\"\"
                                          data-original-title=\"Add to Wishlist\">
                                        <i class=\"fa fa-heart-o\" aria-hidden=\"true\"></i>
                                    </span>#}
       {# <img class=\"img-fluid\" src=\"dump/sp.jpg\" alt=\"study\">#}
        {{ content.field_image }}
      </div>
      <div class=\"caption col-12 col-sm-8 col-md-9 col-lg-8 py-2\">
        {#<p class=\"text-muted small\">
          ISA (International Studies Abroad)  <i data-toggle=\"tooltip\" title=\"This provider has been reviewed by 100+ alumni.\" class=\"fa fa-certificate text-warning\"></i>
        </p>#}
        <a href=\"{{ url }}\">
          <h3>{{ label}}</h3>
        </a>
        <p class=\"text-muted small\">
                                        <span class=\"pull-left\">
                                          {{ content.field_tags|field_value|safe_join(', ') }}
                                        </span>
         {# <span class=\"badge badge-info pull-right\">26 reviews</span>#}
        </p>
        <p class=\"caption_text\">
          {{ content.body }}
        </p>
        <p class=\"caption_text text-muted small\">
          <i class=\"fa fa-calendar text-info\"></i> {{ date }} <br>
          {{ content.flag_bookmark }}
        </p>
        <footer class=\"text-right\">

         {# <strong class=\"mr-lg-3 text-info\">
            <small>{{ content.flag_bookmark }}</small>
          </strong>#}
          <a href=\"{{ url }}\" class=\"btn btn-primary btn-sm\">{{ 'View'|t }}</a>
        </footer>
      </div>
    </div>
  </div>
</div>
", "themes/custom/jbi_digital/templates/view-mode/node--news--teaser.html.twig", "C:\\xampp\\htdocs\\mukesh\\test\\drupal-news\\themes\\custom\\jbi_digital\\templates\\view-mode\\node--news--teaser.html.twig");
    }
}
