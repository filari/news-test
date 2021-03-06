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

/* core/themes/stable/templates/admin/system-themes-page.html.twig */
class __TwigTemplate_966e2ef369c55ea384dde3f935e2d326595d21f1cdd1c8f93a7f23ed33f59e49 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["for" => 33, "set" => 35, "if" => 53];
        $filters = ["escape" => 32, "safe_join" => 60, "t" => 66, "render" => 66];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['for', 'set', 'if'],
                ['escape', 'safe_join', 't', 'render'],
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
        // line 32
        echo "<div";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null)), "html", null, true));
        echo ">
  ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["theme_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["theme_group"]) {
            // line 34
            echo "    ";
            // line 35
            $context["theme_group_classes"] = [0 => "system-themes-list", 1 => ("system-themes-list-" . $this->sandbox->ensureToStringAllowed($this->getAttribute(            // line 37
$context["theme_group"], "state", []))), 2 => "clearfix"];
            // line 41
            echo "    <div";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($context["theme_group"], "attributes", []), "addClass", [0 => ($context["theme_group_classes"] ?? null)], "method")), "html", null, true));
            echo ">
      <h2 class=\"system-themes-list__header\">";
            // line 42
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["theme_group"], "title", [])), "html", null, true));
            echo "</h2>
      ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["theme_group"], "themes", []));
            foreach ($context['_seq'] as $context["_key"] => $context["theme"]) {
                // line 44
                echo "        ";
                // line 45
                $context["theme_classes"] = [0 => (($this->getAttribute(                // line 46
$context["theme"], "is_default", [])) ? ("theme-default") : ("")), 1 => (($this->getAttribute(                // line 47
$context["theme"], "is_admin", [])) ? ("theme-admin") : ("")), 2 => "theme-selector", 3 => "clearfix"];
                // line 52
                echo "        <div";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($context["theme"], "attributes", []), "addClass", [0 => ($context["theme_classes"] ?? null)], "method")), "html", null, true));
                echo ">
          ";
                // line 53
                if ($this->getAttribute($context["theme"], "screenshot", [])) {
                    // line 54
                    echo "            ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["theme"], "screenshot", [])), "html", null, true));
                    echo "
          ";
                }
                // line 56
                echo "          <div class=\"theme-info\">
            <h3 class=\"theme-info__header\">";
                // line 58
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["theme"], "name", [])), "html", null, true));
                echo " ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["theme"], "version", [])), "html", null, true));
                // line 59
                if ($this->getAttribute($context["theme"], "notes", [])) {
                    // line 60
                    echo "                (";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->safeJoin($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["theme"], "notes", [])), ", ")));
                    echo ")";
                }
                // line 62
                echo "</h3>
            <div class=\"theme-info__description\">";
                // line 63
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["theme"], "description", [])), "html", null, true));
                echo "</div>
            ";
                // line 64
                if ($this->getAttribute($context["theme"], "module_dependencies", [])) {
                    // line 65
                    echo "              <div class=\"theme-info__requires\">
                ";
                    // line 66
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Requires: @module_dependencies", ["@module_dependencies" => $this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute($context["theme"], "module_dependencies", [])))])));
                    echo "
              </div>
            ";
                }
                // line 69
                echo "            ";
                // line 70
                echo "            ";
                if ($this->getAttribute($context["theme"], "incompatible", [])) {
                    // line 71
                    echo "              <div class=\"incompatible\">";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["theme"], "incompatible", [])), "html", null, true));
                    echo "</div>
            ";
                } else {
                    // line 73
                    echo "              ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["theme"], "operations", [])), "html", null, true));
                    echo "
            ";
                }
                // line 75
                echo "          </div>
        </div>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['theme'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 78
            echo "    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['theme_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "core/themes/stable/templates/admin/system-themes-page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 80,  158 => 78,  150 => 75,  144 => 73,  138 => 71,  135 => 70,  133 => 69,  127 => 66,  124 => 65,  122 => 64,  118 => 63,  115 => 62,  110 => 60,  108 => 59,  104 => 58,  101 => 56,  95 => 54,  93 => 53,  88 => 52,  86 => 47,  85 => 46,  84 => 45,  82 => 44,  78 => 43,  74 => 42,  69 => 41,  67 => 37,  66 => 35,  64 => 34,  60 => 33,  55 => 32,);
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
 * Theme override for the Appearance page.
 *
 * Available variables:
 * - attributes: HTML attributes for the main container.
 * - theme_groups: A list of theme groups. Each theme group contains:
 *   - attributes: HTML attributes specific to this theme group.
 *   - title: Title for the theme group.
 *   - state: State of the theme group, e.g. installed or uninstalled.
 *   - themes: A list of themes within the theme group. Each theme contains:
 *     - attributes: HTML attributes specific to this theme.
 *     - screenshot: A screenshot representing the theme.
 *     - description: Description of the theme.
 *     - name: Theme name.
 *     - version: The theme's version number.
 *     - is_default: Boolean indicating whether the theme is the default theme
 *       or not.
 *     - is_admin: Boolean indicating whether the theme is the admin theme or
 *       not.
 *     - notes: Identifies what context this theme is being used in, e.g.,
 *       default theme, admin theme.
 *     - incompatible: Text describing any compatibility issues.
 *     - module_dependencies: A list of modules that this theme requires.
 *     - operations: A list of operation links, e.g., Settings, Enable, Disable,
 *       etc. these links should only be displayed if the theme is compatible.
 *
 * @see template_preprocess_system_themes_page()
 */
#}
<div{{ attributes }}>
  {% for theme_group in theme_groups %}
    {%
      set theme_group_classes = [
        'system-themes-list',
        'system-themes-list-' ~ theme_group.state,
        'clearfix',
      ]
    %}
    <div{{ theme_group.attributes.addClass(theme_group_classes) }}>
      <h2 class=\"system-themes-list__header\">{{ theme_group.title }}</h2>
      {% for theme in theme_group.themes %}
        {%
          set theme_classes = [
            theme.is_default ? 'theme-default',
            theme.is_admin ? 'theme-admin',
            'theme-selector',
            'clearfix',
          ]
        %}
        <div{{ theme.attributes.addClass(theme_classes) }}>
          {% if theme.screenshot %}
            {{ theme.screenshot }}
          {% endif %}
          <div class=\"theme-info\">
            <h3 class=\"theme-info__header\">
              {{- theme.name }} {{ theme.version -}}
              {% if theme.notes %}
                ({{ theme.notes|safe_join(', ') }})
              {%- endif -%}
            </h3>
            <div class=\"theme-info__description\">{{ theme.description }}</div>
            {% if theme.module_dependencies %}
              <div class=\"theme-info__requires\">
                {{ 'Requires: @module_dependencies'|t({ '@module_dependencies': theme.module_dependencies|render }) }}
              </div>
            {% endif %}
            {# Display operation links if the theme is compatible. #}
            {% if theme.incompatible %}
              <div class=\"incompatible\">{{ theme.incompatible }}</div>
            {% else %}
              {{ theme.operations }}
            {% endif %}
          </div>
        </div>
      {% endfor %}
    </div>
  {% endfor %}
</div>
", "core/themes/stable/templates/admin/system-themes-page.html.twig", "C:\\xampp\\htdocs\\mukesh\\test\\drupal-news\\core\\themes\\stable\\templates\\admin\\system-themes-page.html.twig");
    }
}
