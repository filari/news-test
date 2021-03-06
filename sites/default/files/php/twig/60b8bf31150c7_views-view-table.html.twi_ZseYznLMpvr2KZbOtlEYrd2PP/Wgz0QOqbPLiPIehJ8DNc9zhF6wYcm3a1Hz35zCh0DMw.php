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

/* themes/contrib/gin/templates/views/views-view-table.html.twig */
class __TwigTemplate_b7108295e4c418e7cae9f65cd7ca835fb854ff70c2064c803690adc7c51e791b extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 35, "if" => 45, "for" => 60];
        $filters = ["length" => 38, "escape" => 44, "merge" => 101];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
                ['length', 'escape', 'merge'],
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
        // line 35
        $context["classes"] = [0 => "views-table", 1 => "views-view-table", 2 => ("cols-" . twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(        // line 38
($context["header"] ?? null)))), 3 => ((        // line 39
($context["responsive"] ?? null)) ? ("responsive-enabled") : ("")), 4 => ((        // line 40
($context["sticky"] ?? null)) ? ("sticky-enabled") : (""))];
        // line 43
        echo "<div class=\"gin-table-scroll-wrapper\">
  <table";
        // line 44
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true));
        echo ">
    ";
        // line 45
        if (($context["caption_needed"] ?? null)) {
            // line 46
            echo "      <caption>
      ";
            // line 47
            if (($context["caption"] ?? null)) {
                // line 48
                echo "        ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["caption"] ?? null)), "html", null, true));
                echo "
      ";
            } else {
                // line 50
                echo "        ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null)), "html", null, true));
                echo "
      ";
            }
            // line 52
            echo "      ";
            if ( !twig_test_empty(($context["summary_element"] ?? null))) {
                // line 53
                echo "        ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["summary_element"] ?? null)), "html", null, true));
                echo "
      ";
            }
            // line 55
            echo "      </caption>
    ";
        }
        // line 57
        echo "    ";
        if (($context["header"] ?? null)) {
            // line 58
            echo "      <thead>
        <tr>
          ";
            // line 60
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["header"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["column"]) {
                // line 61
                echo "            ";
                if ($this->getAttribute($context["column"], "default_classes", [])) {
                    // line 62
                    echo "              ";
                    // line 63
                    $context["column_classes"] = [0 => "views-field", 1 => ("views-field-" . $this->sandbox->ensureToStringAllowed($this->getAttribute(                    // line 65
($context["fields"] ?? null), $context["key"], [], "array")))];
                    // line 68
                    echo "            ";
                }
                // line 69
                echo "            <th";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($context["column"], "attributes", []), "addClass", [0 => ($context["column_classes"] ?? null)], "method"), "setAttribute", [0 => "scope", 1 => "col"], "method")), "html", null, true));
                echo ">";
                // line 70
                if ($this->getAttribute($context["column"], "wrapper_element", [])) {
                    // line 71
                    echo "<";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["column"], "wrapper_element", [])), "html", null, true));
                    echo ">";
                    // line 72
                    if ($this->getAttribute($context["column"], "url", [])) {
                        // line 73
                        echo "<a href=\"";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["column"], "url", [])), "html", null, true));
                        echo "\" title=\"";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["column"], "title", [])), "html", null, true));
                        echo "\" rel=\"nofollow\">";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["column"], "content", [])), "html", null, true));
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["column"], "sort_indicator", [])), "html", null, true));
                        echo "</a>";
                    } else {
                        // line 75
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["column"], "content", [])), "html", null, true));
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["column"], "sort_indicator", [])), "html", null, true));
                    }
                    // line 77
                    echo "</";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["column"], "wrapper_element", [])), "html", null, true));
                    echo ">";
                } else {
                    // line 79
                    if ($this->getAttribute($context["column"], "url", [])) {
                        // line 80
                        echo "<a href=\"";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["column"], "url", [])), "html", null, true));
                        echo "\" title=\"";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["column"], "title", [])), "html", null, true));
                        echo "\" rel=\"nofollow\">";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["column"], "content", [])), "html", null, true));
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["column"], "sort_indicator", [])), "html", null, true));
                        echo "</a>";
                    } else {
                        // line 82
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["column"], "content", [])), "html", null, true));
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["column"], "sort_indicator", [])), "html", null, true));
                    }
                }
                // line 85
                echo "</th>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['column'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 87
            echo "        </tr>
      </thead>
    ";
        }
        // line 90
        echo "    <tbody>
      ";
        // line 91
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 92
            echo "        <tr";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["row"], "attributes", [])), "html", null, true));
            echo ">
          ";
            // line 93
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["row"], "columns", []));
            foreach ($context['_seq'] as $context["key"] => $context["column"]) {
                // line 94
                echo "            ";
                if ($this->getAttribute($context["column"], "default_classes", [])) {
                    // line 95
                    echo "              ";
                    // line 96
                    $context["column_classes"] = [0 => "views-field"];
                    // line 100
                    echo "              ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["column"], "fields", []));
                    foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                        // line 101
                        echo "                ";
                        $context["column_classes"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["column_classes"] ?? null)), [0 => ("views-field-" . $this->sandbox->ensureToStringAllowed($context["field"]))]);
                        // line 102
                        echo "              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 103
                    echo "            ";
                }
                // line 104
                echo "            <td";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($context["column"], "attributes", []), "addClass", [0 => ($context["column_classes"] ?? null)], "method")), "html", null, true));
                echo ">";
                // line 105
                if ($this->getAttribute($context["column"], "wrapper_element", [])) {
                    // line 106
                    echo "<";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["column"], "wrapper_element", [])), "html", null, true));
                    echo ">
                ";
                    // line 107
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["column"], "content", []));
                    foreach ($context['_seq'] as $context["_key"] => $context["content"]) {
                        // line 108
                        echo "                  ";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["content"], "separator", [])), "html", null, true));
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["content"], "field_output", [])), "html", null, true));
                        echo "
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['content'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 110
                    echo "                </";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["column"], "wrapper_element", [])), "html", null, true));
                    echo ">";
                } else {
                    // line 112
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["column"], "content", []));
                    foreach ($context['_seq'] as $context["_key"] => $context["content"]) {
                        // line 113
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["content"], "separator", [])), "html", null, true));
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["content"], "field_output", [])), "html", null, true));
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['content'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                }
                // line 116
                echo "            </td>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['column'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 118
            echo "        </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 120
        echo "    </tbody>
  </table>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/gin/templates/views/views-view-table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  277 => 120,  270 => 118,  263 => 116,  255 => 113,  251 => 112,  246 => 110,  236 => 108,  232 => 107,  227 => 106,  225 => 105,  221 => 104,  218 => 103,  212 => 102,  209 => 101,  204 => 100,  202 => 96,  200 => 95,  197 => 94,  193 => 93,  188 => 92,  184 => 91,  181 => 90,  176 => 87,  169 => 85,  164 => 82,  154 => 80,  152 => 79,  147 => 77,  143 => 75,  133 => 73,  131 => 72,  127 => 71,  125 => 70,  121 => 69,  118 => 68,  116 => 65,  115 => 63,  113 => 62,  110 => 61,  106 => 60,  102 => 58,  99 => 57,  95 => 55,  89 => 53,  86 => 52,  80 => 50,  74 => 48,  72 => 47,  69 => 46,  67 => 45,  63 => 44,  60 => 43,  58 => 40,  57 => 39,  56 => 38,  55 => 35,);
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
 * Theme override for displaying a view as a table.
 *
 * Available variables:
 * - attributes: Remaining HTML attributes for the element.
 *   - class: HTML classes that can be used to style contextually through CSS.
 * - title : The title of this group of rows.
 * - header: The table header columns.
 *   - attributes: Remaining HTML attributes for the element.
 *   - content: HTML classes to apply to each header cell, indexed by
 *   the header's key.
 *   - default_classes: A flag indicating whether default classes should be
 *     used.
 * - caption_needed: Is the caption tag needed.
 * - caption: The caption for this table.
 * - accessibility_description: Extended description for the table details.
 * - accessibility_summary: Summary for the table details.
 * - rows: Table row items. Rows are keyed by row number.
 *   - attributes: HTML classes to apply to each row.
 *   - columns: Row column items. Columns are keyed by column number.
 *     - attributes: HTML classes to apply to each column.
 *     - content: The column content.
 *   - default_classes: A flag indicating whether default classes should be
 *     used.
 * - responsive: A flag indicating whether table is responsive.
 * - sticky: A flag indicating whether table header is sticky.
 * - summary_element: A render array with table summary information (if any).
 *
 * @see template_preprocess_views_view_table()
 */
#}
{%
  set classes = [
    'views-table',
    'views-view-table',
    'cols-' ~ header|length,
    responsive ? 'responsive-enabled',
    sticky ? 'sticky-enabled',
  ]
%}
<div class=\"gin-table-scroll-wrapper\">
  <table{{ attributes.addClass(classes) }}>
    {% if caption_needed %}
      <caption>
      {% if caption %}
        {{ caption }}
      {% else %}
        {{ title }}
      {% endif %}
      {% if (summary_element is not empty) %}
        {{ summary_element }}
      {% endif %}
      </caption>
    {% endif %}
    {% if header %}
      <thead>
        <tr>
          {% for key, column in header %}
            {% if column.default_classes %}
              {%
                set column_classes = [
                  'views-field',
                  'views-field-' ~ fields[key],
                ]
              %}
            {% endif %}
            <th{{ column.attributes.addClass(column_classes).setAttribute('scope', 'col') }}>
              {%- if column.wrapper_element -%}
                <{{ column.wrapper_element }}>
                  {%- if column.url -%}
                    <a href=\"{{ column.url }}\" title=\"{{ column.title }}\" rel=\"nofollow\">{{ column.content }}{{ column.sort_indicator }}</a>
                  {%- else -%}
                    {{ column.content }}{{ column.sort_indicator }}
                  {%- endif -%}
                </{{ column.wrapper_element }}>
              {%- else -%}
                {%- if column.url -%}
                  <a href=\"{{ column.url }}\" title=\"{{ column.title }}\" rel=\"nofollow\">{{ column.content }}{{ column.sort_indicator }}</a>
                {%- else -%}
                  {{- column.content }}{{ column.sort_indicator }}
                {%- endif -%}
              {%- endif -%}
            </th>
          {% endfor %}
        </tr>
      </thead>
    {% endif %}
    <tbody>
      {% for row in rows %}
        <tr{{ row.attributes }}>
          {% for key, column in row.columns %}
            {% if column.default_classes %}
              {%
                set column_classes = [
                  'views-field'
                ]
              %}
              {% for field in column.fields %}
                {% set column_classes = column_classes|merge(['views-field-' ~ field]) %}
              {% endfor %}
            {% endif %}
            <td{{ column.attributes.addClass(column_classes) }}>
              {%- if column.wrapper_element -%}
                <{{ column.wrapper_element }}>
                {% for content in column.content %}
                  {{ content.separator }}{{ content.field_output }}
                {% endfor %}
                </{{ column.wrapper_element }}>
              {%- else -%}
                {% for content in column.content %}
                  {{- content.separator }}{{ content.field_output -}}
                {% endfor %}
              {%- endif %}
            </td>
          {% endfor %}
        </tr>
      {% endfor %}
    </tbody>
  </table>
</div>
", "themes/contrib/gin/templates/views/views-view-table.html.twig", "C:\\xampp\\htdocs\\mukesh\\test\\drupal-news\\themes\\contrib\\gin\\templates\\views\\views-view-table.html.twig");
    }
}
