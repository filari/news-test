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

/* themes/contrib/gin/templates/navigation/menu--toolbar--gin.html.twig */
class __TwigTemplate_40bf99938a16600292740ce389a5e6a2db9c14a22ac06618c6924c85190197df extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["import" => 23, "macro" => 31, "if" => 33, "for" => 39, "set" => 41];
        $filters = ["escape" => 35, "t" => 59];
        $functions = ["path" => 54, "file_url" => 55, "link" => 100];

        try {
            $this->sandbox->checkSecurity(
                ['import', 'macro', 'if', 'for', 'set'],
                ['escape', 't'],
                ['path', 'file_url', 'link']
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
        $context["menus"] = $this;
        // line 24
        echo "
";
        // line 29
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($context["menus"]->getmenu_links(($context["items"] ?? null), ($context["attributes"] ?? null), 0, false, ($context["menu_name"] ?? null), ($context["icon_default"] ?? null), ($context["icon_path"] ?? null), ($context["toolbar_variant"] ?? null))));
        echo "

";
    }

    // line 31
    public function getmenu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, $__parent__ = null, $__menu_name__ = null, $__icon_default__ = null, $__icon_path__ = null, $__toolbar_variant__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "parent" => $__parent__,
            "menu_name" => $__menu_name__,
            "icon_default" => $__icon_default__,
            "icon_path" => $__icon_path__,
            "toolbar_variant" => $__toolbar_variant__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 32
            echo "  ";
            $context["menus"] = $this;
            // line 33
            echo "  ";
            if (($context["items"] ?? null)) {
                // line 34
                echo "    ";
                if ((($context["menu_level"] ?? null) == 0)) {
                    // line 35
                    echo "      <ul";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => "toolbar-menu"], "method")), "html", null, true));
                    echo ">
    ";
                } else {
                    // line 37
                    echo "      <ul class=\"toolbar-menu\">
    ";
                }
                // line 39
                echo "    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
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
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 40
                    echo "      ";
                    // line 41
                    $context["classes"] = [0 => "menu-item", 1 => (($this->getAttribute(                    // line 43
$context["item"], "is_expanded", [])) ? ("menu-item--expanded") : ("")), 2 => (($this->getAttribute(                    // line 44
$context["item"], "is_collapsed", [])) ? ("menu-item--collapsed") : ("")), 3 => (($this->getAttribute(                    // line 45
$context["item"], "in_active_trail", [])) ? ("menu-item--active-trail") : ("")), 4 => (($this->getAttribute(                    // line 46
$context["item"], "gin_id", [])) ? (("menu-item__" . $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "gin_id", [])))) : (""))];
                    // line 49
                    echo "
      ";
                    // line 51
                    echo "      ";
                    if ((((($context["menu_level"] ?? null) == 0) && ($this->getAttribute($context["loop"], "index", []) == 1)) && ($this->getAttribute($context["item"], "gin_id", []) != "admin_toolbar_tools-help"))) {
                        // line 52
                        echo "        <li class=\"menu-item menu-item--expanded menu-item__tools\">
          ";
                        // line 53
                        if (((($context["icon_default"] ?? null) == false) && (($context["icon_path"] ?? null) != ""))) {
                            // line 54
                            echo "            <a href=\"";
                            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("<front>")));
                            echo "\" class=\"toolbar-logo\" data-drupal-link-system-path=\"<front>\">
              <img src=\"";
                            // line 55
                            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), [$this->sandbox->ensureToStringAllowed(($context["icon_path"] ?? null))]), "html", null, true));
                            echo "\" class=\"toolbar-icon-home\" />
            </a>
          ";
                        } else {
                            // line 58
                            echo "            <a href=\"";
                            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("<front>")));
                            echo "\" class=\"toolbar-icon toolbar-icon-admin-toolbar-tools-help toolbar-icon-default\" data-drupal-link-system-path=\"<front>\">
              ";
                            // line 59
                            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Home")));
                            echo "
            </a>
          ";
                        }
                        // line 62
                        echo "        </li>
      ";
                    }
                    // line 64
                    echo "
      ";
                    // line 65
                    if (((($context["menu_level"] ?? null) == 0) && ($this->getAttribute($context["item"], "gin_id", []) == "system-admin_reports"))) {
                        // line 66
                        echo "        <li class=\"menu-item menu-item__spacer menu-item--no-link\"></li>
      ";
                    }
                    // line 68
                    echo "
      ";
                    // line 70
                    echo "      ";
                    if (((($context["menu_level"] ?? null) == 1) && ($this->getAttribute($context["loop"], "index", []) == 1))) {
                        // line 71
                        echo "        <li class=\"menu-item-title\">
          <h2 class=\"toolbar-menu__title\">
            <a href=\"";
                        // line 73
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["parent"] ?? null), "url", [])), "html", null, true));
                        echo "\">";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["parent"] ?? null), "title", [])), "html", null, true));
                        echo "</a>
          </h2>
        </li>
        ";
                        // line 76
                        if ((($context["toolbar_variant"] ?? null) == "vertical")) {
                            // line 77
                            echo "          <li class=\"menu-item\">
            <a href=\"";
                            // line 78
                            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["parent"] ?? null), "url", [])), "html", null, true));
                            echo "\" class=\"toolbar-icon\">";
                            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Overview")));
                            echo "</a>
          </li>
        ";
                        }
                        // line 81
                        echo "      ";
                    } elseif (((($context["menu_level"] ?? null) > 1) && ($this->getAttribute($context["loop"], "index", []) == 1))) {
                        // line 82
                        echo "        <li class=\"menu-item-title\">
          <h3 class=\"toolbar-menu__sub-title\">
            <a href=\"";
                        // line 84
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["parent"] ?? null), "url", [])), "html", null, true));
                        echo "\">";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["parent"] ?? null), "title", [])), "html", null, true));
                        echo "</a>
          </h3>
        </li>
        ";
                        // line 87
                        if ((($context["toolbar_variant"] ?? null) == "vertical")) {
                            // line 88
                            echo "          <li class=\"menu-item\">
            <a href=\"";
                            // line 89
                            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["parent"] ?? null), "url", [])), "html", null, true));
                            echo "\" class=\"toolbar-icon\">";
                            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Overview")));
                            echo "</a>
          </li>
        ";
                        }
                        // line 92
                        echo "      ";
                    }
                    // line 93
                    echo "
      <li";
                    // line 94
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($context["item"], "attributes", []), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true));
                    echo ">
        ";
                    // line 95
                    if (((($this->getAttribute($context["item"], "gin_id", []) == "admin_toolbar_tools-help") && (($context["icon_default"] ?? null) == false)) && (($context["icon_path"] ?? null) != ""))) {
                        // line 96
                        echo "          <a href=\"";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("<front>")));
                        echo "\" class=\"toolbar-logo\" data-drupal-link-system-path=\"<front>\">
            <img src=\"";
                        // line 97
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), [$this->sandbox->ensureToStringAllowed(($context["icon_path"] ?? null))]), "html", null, true));
                        echo "\" class=\"toolbar-icon-home\" />
          </a>
        ";
                    } elseif (($this->getAttribute(                    // line 99
$context["item"], "gin_id", []) == "admin_toolbar_tools-help")) {
                        // line 100
                        echo "          ";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getLink($this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "title", [])), $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "url", [])), ["class" => [0 => "toolbar-icon-default"]]), "html", null, true));
                        echo "
        ";
                    } else {
                        // line 102
                        echo "          ";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getLink($this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "title", [])), $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "url", [])), ["class" => [0 => (($this->getAttribute($context["item"], "in_active_trail", [])) ? ("is-active") : (""))]]), "html", null, true));
                        echo "
        ";
                    }
                    // line 104
                    echo "        ";
                    if ($this->getAttribute($context["item"], "below", [])) {
                        // line 105
                        echo "          ";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($context["menus"]->getmenu_links($this->getAttribute($context["item"], "below", []), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1), $context["item"], ($context["menu_name"] ?? null), ($context["icon_default"] ?? null), ($context["icon_path"] ?? null), ($context["toolbar_variant"] ?? null))));
                        echo "
        ";
                    }
                    // line 107
                    echo "      </li>
    ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 109
                echo "    </ul>
  ";
            }
            // line 111
            echo "
  ";
            // line 112
            if ((($context["menu_level"] ?? null) == 0)) {
                // line 113
                echo "    ";
                // line 114
                echo "    <a href=\"#\" class=\"toolbar-menu__trigger trigger\" role=\"button\" aria-pressed=\"false\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Close")));
                echo "</a>
  ";
            }
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "themes/contrib/gin/templates/navigation/menu--toolbar--gin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  307 => 114,  305 => 113,  303 => 112,  300 => 111,  296 => 109,  281 => 107,  275 => 105,  272 => 104,  266 => 102,  260 => 100,  258 => 99,  253 => 97,  248 => 96,  246 => 95,  242 => 94,  239 => 93,  236 => 92,  228 => 89,  225 => 88,  223 => 87,  215 => 84,  211 => 82,  208 => 81,  200 => 78,  197 => 77,  195 => 76,  187 => 73,  183 => 71,  180 => 70,  177 => 68,  173 => 66,  171 => 65,  168 => 64,  164 => 62,  158 => 59,  153 => 58,  147 => 55,  142 => 54,  140 => 53,  137 => 52,  134 => 51,  131 => 49,  129 => 46,  128 => 45,  127 => 44,  126 => 43,  125 => 41,  123 => 40,  105 => 39,  101 => 37,  95 => 35,  92 => 34,  89 => 33,  86 => 32,  67 => 31,  60 => 29,  57 => 24,  55 => 23,);
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
 * Default theme implementation to display a toolbar menu.
 *
 * Available variables:
 * - menu_name: The machine name of the menu.
 * - items: A nested list of menu items. Each menu item contains:
 *   - attributes: HTML attributes for the menu item.
 *   - below: The menu item child items.
 *   - title: The menu link title.
 *   - path: The menu link path.
 *   - localized_options: Menu link localized options.
 *   - is_expanded: TRUE if the link has visible children within the current
 *     menu tree.
 *   - is_collapsed: TRUE if the link has children within the current menu tree
 *     that are not currently visible.
 *   - in_active_trail: TRUE if the link is in the active trail.
 *
 * @ingroup themeable
 */
#}
{% import _self as menus %}

{#
  We call a macro which calls itself to render the full tree.
  @see https://twig.symfony.com/doc/1.x/tags/macro.html
#}
{{ menus.menu_links(items, attributes, 0, false, menu_name, icon_default, icon_path, toolbar_variant) }}

{% macro menu_links(items, attributes, menu_level, parent, menu_name, icon_default, icon_path, toolbar_variant) %}
  {% import _self as menus %}
  {% if items %}
    {% if menu_level == 0  %}
      <ul{{ attributes.addClass('toolbar-menu') }}>
    {% else %}
      <ul class=\"toolbar-menu\">
    {% endif %}
    {% for item in items %}
      {%
        set classes = [
          'menu-item',
          item.is_expanded ? 'menu-item--expanded',
          item.is_collapsed ? 'menu-item--collapsed',
          item.in_active_trail ? 'menu-item--active-trail',
          item.gin_id ? 'menu-item__' ~ item.gin_id
        ]
      %}

      {# Add Home if it doesn't exist #}
      {% if menu_level == 0 and loop.index == 1 and item.gin_id != 'admin_toolbar_tools-help' %}
        <li class=\"menu-item menu-item--expanded menu-item__tools\">
          {% if icon_default == false and icon_path != '' %}
            <a href=\"{{ path('<front>') }}\" class=\"toolbar-logo\" data-drupal-link-system-path=\"<front>\">
              <img src=\"{{ file_url(icon_path) }}\" class=\"toolbar-icon-home\" />
            </a>
          {% else %}
            <a href=\"{{ path('<front>') }}\" class=\"toolbar-icon toolbar-icon-admin-toolbar-tools-help toolbar-icon-default\" data-drupal-link-system-path=\"<front>\">
              {{ 'Home'|t }}
            </a>
          {% endif %}
        </li>
      {% endif %}

      {% if menu_level == 0 and item.gin_id == 'system-admin_reports' %}
        <li class=\"menu-item menu-item__spacer menu-item--no-link\"></li>
      {% endif %}

      {# Add Menu Titles #}
      {% if menu_level == 1 and loop.index == 1 %}
        <li class=\"menu-item-title\">
          <h2 class=\"toolbar-menu__title\">
            <a href=\"{{ parent.url }}\">{{ parent.title }}</a>
          </h2>
        </li>
        {% if toolbar_variant == 'vertical' %}
          <li class=\"menu-item\">
            <a href=\"{{ parent.url }}\" class=\"toolbar-icon\">{{ 'Overview'|t }}</a>
          </li>
        {% endif %}
      {% elseif menu_level > 1 and loop.index == 1 %}
        <li class=\"menu-item-title\">
          <h3 class=\"toolbar-menu__sub-title\">
            <a href=\"{{ parent.url }}\">{{ parent.title }}</a>
          </h3>
        </li>
        {% if toolbar_variant == 'vertical' %}
          <li class=\"menu-item\">
            <a href=\"{{ parent.url }}\" class=\"toolbar-icon\">{{ 'Overview'|t }}</a>
          </li>
        {% endif %}
      {% endif %}

      <li{{ item.attributes.addClass(classes) }}>
        {% if item.gin_id == 'admin_toolbar_tools-help' and icon_default == false and icon_path != '' %}
          <a href=\"{{ path('<front>') }}\" class=\"toolbar-logo\" data-drupal-link-system-path=\"<front>\">
            <img src=\"{{ file_url(icon_path) }}\" class=\"toolbar-icon-home\" />
          </a>
        {% elseif item.gin_id == 'admin_toolbar_tools-help' %}
          {{ link(item.title, item.url, {'class': ['toolbar-icon-default']}) }}
        {% else %}
          {{ link(item.title, item.url, {'class': [item.in_active_trail ? 'is-active']}) }}
        {% endif %}
        {% if item.below %}
          {{ menus.menu_links(item.below, attributes, menu_level + 1, item, menu_name, icon_default, icon_path, toolbar_variant) }}
        {% endif %}
      </li>
    {% endfor %}
    </ul>
  {% endif %}

  {% if menu_level == 0 %}
    {# Custom toggle for menu #}
    <a href=\"#\" class=\"toolbar-menu__trigger trigger\" role=\"button\" aria-pressed=\"false\">{{ 'Close'|t }}</a>
  {% endif %}
{% endmacro %}
", "themes/contrib/gin/templates/navigation/menu--toolbar--gin.html.twig", "C:\\xampp\\htdocs\\mukesh\\test\\drupal-news\\themes\\contrib\\gin\\templates\\navigation\\menu--toolbar--gin.html.twig");
    }
}
