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

/* themes/contrib/bootstrap_barrio/templates/misc/status-messages.html.twig */
class __TwigTemplate_1842430b8c2845a80f5304a657d403c427f3bb8233c212ce4f7843c382c39641 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["for" => 31, "set" => 33, "if" => 57];
        $filters = ["escape" => 28, "without" => 53];
        $functions = ["attach_library" => 28];

        try {
            $this->sandbox->checkSecurity(
                ['for', 'set', 'if'],
                ['escape', 'without'],
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
        // line 28
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("bootstrap_barrio/alerts"), "html", null, true));
        echo "

<div data-drupal-messages>
";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["message_list"] ?? null));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 32
            echo "  ";
            // line 33
            $context["classes"] = [0 => "alert", 1 => "alert-dismissible", 2 => "fade", 3 => "show", 4 => "col-12", 5 => (((            // line 39
$context["type"] == "status")) ? ("alert-success") : ("")), 6 => (((            // line 40
$context["type"] == "warning")) ? ("alert-warning") : ("")), 7 => (((            // line 41
$context["type"] == "error")) ? ("alert-danger") : ("")), 8 => (((            // line 42
$context["type"] == "info")) ? ("alert-info") : (""))];
            // line 45
            echo "  ";
            // line 46
            $context["role"] = ["status" => "status", "error" => "alert", "warning" => "alert", "info" => "status"];
            // line 53
            echo "  <div aria-label=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["status_headings"] ?? null), $context["type"], [], "array")), "html", null, true));
            echo "\" ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->withoutFilter($this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null)), "role", "aria-label"), "addClass", [0 => ($context["classes"] ?? null)], "method"), "setAttribute", [0 => "role", 1 => $this->getAttribute(($context["role"] ?? null), $context["type"], [], "array")], "method")), "html", null, true));
            echo ">
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
      <span aria-hidden=\"true\">&times;</span>
    </button>
    ";
            // line 57
            if ((($context["is_message_with_title"] ?? null) || ($context["is_message_with_icon"] ?? null))) {
                // line 58
                echo "      ";
                if (($context["is_message_with_title"] ?? null)) {
                    // line 59
                    echo "        <h4 id=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["title_ids"] ?? null), $context["type"], [], "array")), "html", null, true));
                    echo "\" class=\"alert-heading\">
          ";
                    // line 60
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["status_headings"] ?? null), $context["type"], [], "array")), "html", null, true));
                    echo "
        </h4>
      ";
                }
                // line 63
                echo "    ";
            }
            // line 64
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 65
                echo "      ";
                if ($this->getAttribute($context["loop"], "last", [])) {
                    // line 66
                    echo "        ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["message"]), "html", null, true));
                    echo "
      ";
                } else {
                    // line 68
                    echo "        ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["message"]), "html", null, true));
                    echo "
        <hr>
      ";
                }
                // line 71
                echo "    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 72
            echo "  </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/bootstrap_barrio/templates/misc/status-messages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 74,  154 => 72,  140 => 71,  133 => 68,  127 => 66,  124 => 65,  106 => 64,  103 => 63,  97 => 60,  92 => 59,  89 => 58,  87 => 57,  77 => 53,  75 => 46,  73 => 45,  71 => 42,  70 => 41,  69 => 40,  68 => 39,  67 => 33,  65 => 32,  61 => 31,  55 => 28,);
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
 * Default theme implementation for status messages.
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
 * - display: (optional) May have a value of 'status' or 'error' when only
 *   displaying messages of that specific type.
 * - attributes: HTML attributes for the element, including:
 *   - class: HTML classes.
 *
 * @see template_preprocess_status_messages()
 *
 * @ingroup themeable
 */
#}
{{ attach_library('bootstrap_barrio/alerts') }}

<div data-drupal-messages>
{% for type, messages in message_list %}
  {%
    set classes = [
      'alert',
      'alert-dismissible',
      'fade',
      'show',
      'col-12',
      type == 'status' ? 'alert-success',
      type == 'warning' ? 'alert-warning',
      type == 'error' ? 'alert-danger',
      type == 'info' ? 'alert-info',
    ]
  %}
  {%
    set role = {
      'status': 'status',
      'error': 'alert',
      'warning': 'alert',
      'info': 'status',
    }
  %}
  <div aria-label=\"{{ status_headings[type] }}\" {{ attributes|without('role', 'aria-label').addClass(classes).setAttribute('role', role[type]) }}>
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
      <span aria-hidden=\"true\">&times;</span>
    </button>
    {% if is_message_with_title or is_message_with_icon %}
      {% if is_message_with_title %}
        <h4 id=\"{{ title_ids[type] }}\" class=\"alert-heading\">
          {{ status_headings[type] }}
        </h4>
      {% endif %}
    {% endif %}
    {% for message in messages %}
      {% if loop.last %}
        {{ message }}
      {% else %}
        {{ message }}
        <hr>
      {% endif %}
    {% endfor %}
  </div>
{% endfor %}
</div>
", "themes/contrib/bootstrap_barrio/templates/misc/status-messages.html.twig", "C:\\xampp\\htdocs\\mukesh\\test\\drupal-news\\themes\\contrib\\bootstrap_barrio\\templates\\misc\\status-messages.html.twig");
    }
}
