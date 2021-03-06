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

/* themes/contrib/gin/templates/navigation/toolbar--gin--secondary.html.twig */
class __TwigTemplate_e1670b9d46230a6a768d042a100dfc2a0b8778b0e5ff5a685c8082011e96c781 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["for" => 27, "set" => 28, "if" => 33];
        $filters = ["escape" => 23, "merge" => 34];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['for', 'set', 'if'],
                ['escape', 'merge'],
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
        // line 23
        echo "<div";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => "toolbar", 1 => "toolbar-meta"], "method")), "html", null, true));
        echo ">
  <nav";
        // line 24
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["toolbar_attributes"] ?? null), "addClass", [0 => "toolbar-bar", 1 => "clearfix"], "method")), "html", null, true));
        echo ">
    <h2 class=\"visually-hidden\">";
        // line 25
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["toolbar_heading"] ?? null)), "html", null, true));
        echo "</h2>

    ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tabs"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["tab"]) {
            // line 28
            echo "      ";
            $context["tray"] = $this->getAttribute(($context["trays"] ?? null), $context["key"], [], "array");
            // line 29
            echo "      ";
            $context["user_menu"] = (($this->getAttribute($this->getAttribute(($context["tray"] ?? null), "links", []), "user_links", [], "array")) ? ("user-menu") : (false));
            // line 30
            echo "      ";
            $context["item_id"] = [];
            // line 31
            echo "
      ";
            // line 32
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($context["tab"], "link", []), "#attributes", [], "array"), "class", [], "array"));
            foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                // line 33
                echo "        ";
                if (twig_in_filter("icon-", $context["item"])) {
                    // line 34
                    echo "          ";
                    $context["item_id"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["item_id"] ?? null)), [0 => ("toolbar-id--" . $this->sandbox->ensureToStringAllowed($context["item"]))]);
                    // line 35
                    echo "        ";
                }
                // line 36
                echo "      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "
      ";
            // line 38
            $context["tab_id"] = (($this->getAttribute($this->getAttribute($context["tab"], "link", []), "#id", [], "array")) ? (("toolbar-tab--" . $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($context["tab"], "link", []), "#id", [], "array")))) : (""));
            // line 39
            echo "      ";
            $context["tab_classes"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["item_id"] ?? null)), [0 => "toolbar-tab", 1 => ($context["user_menu"] ?? null), 2 => ($context["tab_id"] ?? null)]);
            // line 40
            echo "
      ";
            // line 41
            $context["denylist_items"] = [0 => "toolbar-id--toolbar-icon-menu", 1 => "toolbar-id--toolbar-icon-edit"];
            // line 45
            echo "
      ";
            // line 47
            echo "      ";
            if (!twig_in_filter($this->getAttribute(($context["item_id"] ?? null), 0, [], "array"), ($context["denylist_items"] ?? null))) {
                // line 48
                echo "        ";
                $context["has_user_picture"] = (($this->getAttribute(($context["item_id"] ?? null), 0, [], "array") == "toolbar-id--toolbar-icon-user") && ($context["user_picture"] ?? null));
                // line 49
                echo "        ";
                $context["user_class"] = ((($context["has_user_picture"] ?? null)) ? ("has-user-icon") : (false));
                // line 50
                echo "        <div";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($context["tab"], "attributes", []), "addClass", [0 => ($context["tab_classes"] ?? null), 1 => ($context["user_class"] ?? null)], "method")), "html", null, true));
                echo ">
          ";
                // line 51
                if (($context["has_user_picture"] ?? null)) {
                    // line 52
                    echo "            <a href=\"/user/";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["user"] ?? null), "id", [])), "html", null, true));
                    echo "\" class=\"toolbar-item icon-user\" role=\"button\" id=\"toolbar-item-user\">
              <img src=\"";
                    // line 53
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["user_picture"] ?? null)), "html", null, true));
                    echo "\" alt=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["user"] ?? null), "account", []), "name", [])), "html", null, true));
                    echo "\" class=\"icon-user__image\" />
            </a>
          ";
                } else {
                    // line 56
                    echo "            ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["tab"], "link", [])), "html", null, true));
                    echo "
          ";
                }
                // line 58
                echo "          <div";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["tray"] ?? null), "attributes", [])), "html", null, true));
                echo ">
            ";
                // line 59
                if ($this->getAttribute(($context["tray"] ?? null), "label", [])) {
                    // line 60
                    echo "              <nav class=\"toolbar-lining clearfix\" role=\"navigation\" aria-label=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["tray"] ?? null), "label", [])), "html", null, true));
                    echo "\">
                <h3 class=\"toolbar-tray-name visually-hidden\">";
                    // line 61
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["tray"] ?? null), "label", [])), "html", null, true));
                    echo "</h3>
            ";
                } else {
                    // line 63
                    echo "              <nav class=\"toolbar-lining clearfix\" role=\"navigation\">
            ";
                }
                // line 65
                echo "            ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["tray"] ?? null), "links", [])), "html", null, true));
                echo "
            </nav>
          </div>
        </div>
      ";
            }
            // line 70
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['tab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "  </nav>
  ";
        // line 72
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["remainder"] ?? null)), "html", null, true));
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/gin/templates/navigation/toolbar--gin--secondary.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 72,  191 => 71,  185 => 70,  176 => 65,  172 => 63,  167 => 61,  162 => 60,  160 => 59,  155 => 58,  149 => 56,  141 => 53,  136 => 52,  134 => 51,  129 => 50,  126 => 49,  123 => 48,  120 => 47,  117 => 45,  115 => 41,  112 => 40,  109 => 39,  107 => 38,  104 => 37,  98 => 36,  95 => 35,  92 => 34,  89 => 33,  85 => 32,  82 => 31,  79 => 30,  76 => 29,  73 => 28,  69 => 27,  64 => 25,  60 => 24,  55 => 23,);
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
 * Theme override for the administrative toolbar.
 *
 * Available variables:
 * - attributes: HTML attributes for the wrapper.
 * - toolbar_attributes: HTML attributes to apply to the toolbar.
 * - toolbar_heading: The heading or label for the toolbar.
 * - tabs: List of tabs for the toolbar.
 *   - attributes: HTML attributes for the tab container.
 *   - link: Link or button for the menu tab.
 * - trays: Toolbar tray list, each associated with a tab. Each tray in trays
 *   contains:
 *   - attributes: HTML attributes to apply to the tray.
 *   - label: The tray's label.
 *   - links: The tray menu links.
 * - remainder: Any non-tray, non-tab elements left to be rendered.
 *
 * @see template_preprocess_toolbar()
 */
#}
<div{{ attributes.addClass('toolbar', 'toolbar-meta') }}>
  <nav{{ toolbar_attributes.addClass('toolbar-bar', 'clearfix') }}>
    <h2 class=\"visually-hidden\">{{ toolbar_heading }}</h2>

    {% for key, tab in tabs %}
      {% set tray = trays[key] %}
      {% set user_menu = tray.links['user_links'] ? 'user-menu' : false %}
      {% set item_id = [] %}

      {% for key, item in tab.link['#attributes']['class'] %}
        {% if 'icon-' in item %}
          {% set item_id = item_id|merge(['toolbar-id--' ~ item]) %}
        {% endif %}
      {% endfor %}

      {% set tab_id = tab.link['#id'] ? 'toolbar-tab--' ~ tab.link['#id'] %}
      {% set tab_classes = item_id|merge(['toolbar-tab', user_menu, tab_id]) %}

      {% set denylist_items = [
          'toolbar-id--toolbar-icon-menu',
          'toolbar-id--toolbar-icon-edit',
      ] %}

      {# All items except main nav #}
      {% if item_id[0] not in denylist_items %}
        {% set has_user_picture = item_id[0] == 'toolbar-id--toolbar-icon-user' and user_picture %}
        {% set user_class = has_user_picture ? 'has-user-icon' : false %}
        <div{{ tab.attributes.addClass(tab_classes, user_class) }}>
          {% if has_user_picture %}
            <a href=\"/user/{{ user.id }}\" class=\"toolbar-item icon-user\" role=\"button\" id=\"toolbar-item-user\">
              <img src=\"{{ user_picture }}\" alt=\"{{ user.account.name }}\" class=\"icon-user__image\" />
            </a>
          {% else %}
            {{ tab.link }}
          {% endif %}
          <div{{ tray.attributes }}>
            {% if tray.label %}
              <nav class=\"toolbar-lining clearfix\" role=\"navigation\" aria-label=\"{{ tray.label }}\">
                <h3 class=\"toolbar-tray-name visually-hidden\">{{ tray.label }}</h3>
            {% else %}
              <nav class=\"toolbar-lining clearfix\" role=\"navigation\">
            {% endif %}
            {{ tray.links }}
            </nav>
          </div>
        </div>
      {% endif %}
    {% endfor %}
  </nav>
  {{ remainder }}
</div>
", "themes/contrib/gin/templates/navigation/toolbar--gin--secondary.html.twig", "C:\\xampp\\htdocs\\mukesh\\test\\drupal-news\\themes\\contrib\\gin\\templates\\navigation\\toolbar--gin--secondary.html.twig");
    }
}
