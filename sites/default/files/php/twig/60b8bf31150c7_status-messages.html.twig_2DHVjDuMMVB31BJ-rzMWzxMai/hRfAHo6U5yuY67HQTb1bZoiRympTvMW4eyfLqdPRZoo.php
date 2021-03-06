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

/* themes/contrib/gin/templates/misc/status-messages.html.twig */
class __TwigTemplate_18acb76927cd2efbb7e9ef5b0f1fe2472eccad9f18069f873b5e34a5944f30b5 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["for" => 28, "set" => 30, "if" => 44];
        $filters = ["escape" => 25, "without" => 43, "length" => 58, "first" => 65];
        $functions = ["attach_library" => 25];

        try {
            $this->sandbox->checkSecurity(
                ['for', 'set', 'if'],
                ['escape', 'without', 'length', 'first'],
                ['attach_library']
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
        // line 25
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("gin/gin_messages"), "html", null, true));
        echo "
<div data-drupal-messages class=\"messages-list\">
  <div class=\"messages__wrapper\">
    ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["message_list"] ?? null));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 29
            echo "      ";
            // line 30
            $context["classes"] = [0 => "messages-list__item", 1 => "messages", 2 => ("messages--" . $this->sandbox->ensureToStringAllowed(            // line 33
$context["type"]))];
            // line 36
            echo "      ";
            // line 37
            $context["is_message_with_title"] = $this->getAttribute(($context["status_headings"] ?? null), $context["type"], [], "array");
            // line 39
            echo "      ";
            // line 40
            $context["is_message_with_icon"] = twig_in_filter($context["type"], [0 => "error", 1 => "status", 2 => "warning"]);
            // line 42
            echo "
      <div role=\"contentinfo\" aria-labelledby=\"";
            // line 43
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["title_ids"] ?? null), $context["type"], [], "array")), "html", null, true));
            echo "\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->withoutFilter($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "role", "aria-label"), "html", null, true));
            echo ">
        ";
            // line 44
            if (($context["type"] == "error")) {
                // line 45
                echo "          <div role=\"alert\">
        ";
            }
            // line 47
            echo "          ";
            if ((($context["is_message_with_title"] ?? null) || ($context["is_message_with_icon"] ?? null))) {
                // line 48
                echo "            <div class=\"messages__header\">
              ";
                // line 49
                if (($context["is_message_with_title"] ?? null)) {
                    // line 50
                    echo "                <h2 id=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["title_ids"] ?? null), $context["type"], [], "array")), "html", null, true));
                    echo "\" class=\"messages__title\">
                  ";
                    // line 51
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["status_headings"] ?? null), $context["type"], [], "array")), "html", null, true));
                    echo "
                </h2>
              ";
                }
                // line 54
                echo "            </div>
          ";
            }
            // line 56
            echo "          <button type=\"button\" class=\"button button--dismiss\" title=\"Dismiss\"><span class=\"icon-close\"></span>Close</button>
          <div class=\"messages__content\">
            ";
            // line 58
            if ((twig_length_filter($this->env, $context["messages"]) > 1)) {
                // line 59
                echo "              <ul class=\"messages__list\">
                ";
                // line 60
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 61
                    echo "                  <li class=\"messages__item\">";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["message"]), "html", null, true));
                    echo "</li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 63
                echo "              </ul>
            ";
            } else {
                // line 65
                echo "              ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, twig_first($this->env, $this->sandbox->ensureToStringAllowed($context["messages"])), "html", null, true));
                echo "
            ";
            }
            // line 67
            echo "          </div>
        ";
            // line 68
            if (($context["type"] == "error")) {
                // line 69
                echo "          </div>
        ";
            }
            // line 71
            echo "      </div>
      ";
            // line 73
            echo "      ";
            $context["attributes"] = $this->getAttribute(($context["attributes"] ?? null), "removeClass", [0 => ($context["classes"] ?? null)], "method");
            // line 74
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/gin/templates/misc/status-messages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 75,  163 => 74,  160 => 73,  157 => 71,  153 => 69,  151 => 68,  148 => 67,  142 => 65,  138 => 63,  129 => 61,  125 => 60,  122 => 59,  120 => 58,  116 => 56,  112 => 54,  106 => 51,  101 => 50,  99 => 49,  96 => 48,  93 => 47,  89 => 45,  87 => 44,  81 => 43,  78 => 42,  76 => 40,  74 => 39,  72 => 37,  70 => 36,  68 => 33,  67 => 30,  65 => 29,  61 => 28,  55 => 25,);
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
 * Theme override for status messages.
 *
 * Displays status, error, and warning messages, grouped by type.
 *
 * An invisible heading identifies the messages for assistive technology.
 * Sighted users see a colored box. See http://www.w3.org/TR/WCAG-TECHS/H69.html
 * for info.
 *
 * Add an ARIA label to the contentinfo area so that assistive technology
 * user agents will better describe this landmark.
 *
 * Available variables:
 * - message_list: List of messages to be displayed, grouped by type.
 * - status_headings: List of all status types.
 * - attributes: HTML attributes for the element, including:
 *   - class: HTML classes.
 * - title_ids: A list of unique ids keyed by message type.
 *
 * @see claro_preprocess_status_messages().
 */
#}
{{ attach_library('gin/gin_messages') }}
<div data-drupal-messages class=\"messages-list\">
  <div class=\"messages__wrapper\">
    {% for type, messages in message_list %}
      {%
        set classes = [
          'messages-list__item',
          'messages',
          'messages--' ~ type,
        ]
      %}
      {%
        set is_message_with_title = status_headings[type]
      %}
      {%
        set is_message_with_icon = type in ['error', 'status', 'warning']
      %}

      <div role=\"contentinfo\" aria-labelledby=\"{{ title_ids[type] }}\"{{ attributes.addClass(classes)|without('role', 'aria-label') }}>
        {% if type == 'error' %}
          <div role=\"alert\">
        {% endif %}
          {% if is_message_with_title or is_message_with_icon %}
            <div class=\"messages__header\">
              {% if is_message_with_title %}
                <h2 id=\"{{ title_ids[type] }}\" class=\"messages__title\">
                  {{ status_headings[type] }}
                </h2>
              {% endif %}
            </div>
          {% endif %}
          <button type=\"button\" class=\"button button--dismiss\" title=\"Dismiss\"><span class=\"icon-close\"></span>Close</button>
          <div class=\"messages__content\">
            {% if messages|length > 1 %}
              <ul class=\"messages__list\">
                {% for message in messages %}
                  <li class=\"messages__item\">{{ message }}</li>
                {% endfor %}
              </ul>
            {% else %}
              {{ messages|first }}
            {% endif %}
          </div>
        {% if type == 'error' %}
          </div>
        {% endif %}
      </div>
      {# Remove type specific classes. #}
      {% set attributes = attributes.removeClass(classes) %}
    {% endfor %}
  </div>
</div>
", "themes/contrib/gin/templates/misc/status-messages.html.twig", "C:\\xampp\\htdocs\\mukesh\\test\\drupal-news\\themes\\contrib\\gin\\templates\\misc\\status-messages.html.twig");
    }
}
