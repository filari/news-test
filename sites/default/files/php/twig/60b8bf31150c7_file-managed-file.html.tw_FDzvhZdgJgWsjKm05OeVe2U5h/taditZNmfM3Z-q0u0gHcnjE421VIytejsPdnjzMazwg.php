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

/* @claro/content-edit/file-managed-file.html.twig */
class __TwigTemplate_71c20f9f0223d16e12dbb6aa3c720765e20826e78cd59705c337f0bff825be34 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 25, "if" => 40];
        $filters = ["escape" => 34, "without" => 37];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape', 'without'],
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
        // line 25
        $context["classes"] = [0 => "js-form-managed-file", 1 => "form-managed-file", 2 => ((        // line 28
($context["multiple"] ?? null)) ? ("is-multiple") : ("is-single")), 3 => ((        // line 29
($context["upload"] ?? null)) ? ("has-upload") : ("no-upload")), 4 => ((        // line 30
($context["has_value"] ?? null)) ? ("has-value") : ("no-value")), 5 => ((        // line 31
($context["has_meta"] ?? null)) ? ("has-meta") : ("no-meta"))];
        // line 34
        echo "<div";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method"), "removeClass", [0 => "clearfix"], "method")), "html", null, true));
        echo ">
  <div class=\"form-managed-file__main\">
    ";
        // line 36
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["main_items"] ?? null), "filename", [])), "html", null, true));
        echo "
    ";
        // line 37
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->withoutFilter($this->sandbox->ensureToStringAllowed(($context["main_items"] ?? null)), "filename"), "html", null, true));
        echo "
  </div>

  ";
        // line 40
        if ((($context["has_meta"] ?? null) || $this->getAttribute(($context["data"] ?? null), "preview", []))) {
            // line 41
            echo "  <div class=\"form-managed-file__meta-wrapper\">
    <div class=\"form-managed-file__meta\">
      ";
            // line 43
            if ($this->getAttribute(($context["data"] ?? null), "preview", [])) {
                // line 44
                echo "        <div class=\"form-managed-file__image-preview image-preview\">
          <div class=\"image-preview__img-wrapper\">
            ";
                // line 46
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["data"] ?? null), "preview", [])), "html", null, true));
                echo "
          </div>
        </div>
      ";
            }
            // line 50
            echo "
      ";
            // line 51
            if (((($this->getAttribute(($context["data"] ?? null), "description", []) || ($context["display"] ?? null)) || $this->getAttribute(($context["data"] ?? null), "alt", [])) || $this->getAttribute(($context["data"] ?? null), "title", []))) {
                // line 52
                echo "        <div class=\"form-managed-file__meta-items\">
          ";
                // line 53
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["data"] ?? null), "description", [])), "html", null, true));
                echo "
          ";
                // line 54
                if (($context["display"] ?? null)) {
                    // line 55
                    echo "            ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["data"] ?? null), "display", [])), "html", null, true));
                    echo "
          ";
                }
                // line 57
                echo "          ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["data"] ?? null), "alt", [])), "html", null, true));
                echo "
          ";
                // line 58
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["data"] ?? null), "title", [])), "html", null, true));
                echo "
        </div>
      ";
            }
            // line 61
            echo "    </div>
  </div>
  ";
        }
        // line 64
        echo "
  ";
        // line 66
        echo "  ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->withoutFilter($this->sandbox->ensureToStringAllowed(($context["data"] ?? null)), "preview", "alt", "title", "description", "display"), "html", null, true));
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "@claro/content-edit/file-managed-file.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 66,  132 => 64,  127 => 61,  121 => 58,  116 => 57,  110 => 55,  108 => 54,  104 => 53,  101 => 52,  99 => 51,  96 => 50,  89 => 46,  85 => 44,  83 => 43,  79 => 41,  77 => 40,  71 => 37,  67 => 36,  61 => 34,  59 => 31,  58 => 30,  57 => 29,  56 => 28,  55 => 25,);
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
 * Theme override to display a file form widget.
 *
 * Available variables:
 * - main_items: Main render elements of the file or image widget:
 *   file name, upload input, upload and remove buttons and hidden inputs.
 * - data: Other render elements of the image widget like preview, alt or title,
 *   or the description input and the display checkbox of the file widget.
 * - display: A flag indicating whether the display field is visible.
 * - attributes: HTML attributes for the containing element.
 * - multiple: Whether this widget is the part of a multi-value file widget or
 *   not.
 * - upload: Whether the file upload input is displayed or not.
 * - has_value: true if the widget already contains a file.
 * - has_meta: true when the display checkbox or the description, alt or title
 *   inputs are enabled and at least one of them is visible.
 *
 * @see template_preprocess_file_managed_file()
 * @see claro_preprocess_file_managed_file()
 */
#}
{%
  set classes = [
    'js-form-managed-file',
    'form-managed-file',
    multiple ? 'is-multiple' : 'is-single',
    upload ? 'has-upload' : 'no-upload',
    has_value ? 'has-value' : 'no-value',
    has_meta ? 'has-meta' : 'no-meta',
  ]
%}
<div{{ attributes.addClass(classes).removeClass('clearfix') }}>
  <div class=\"form-managed-file__main\">
    {{ main_items.filename }}
    {{ main_items|without('filename') }}
  </div>

  {% if has_meta or data.preview %}
  <div class=\"form-managed-file__meta-wrapper\">
    <div class=\"form-managed-file__meta\">
      {% if data.preview %}
        <div class=\"form-managed-file__image-preview image-preview\">
          <div class=\"image-preview__img-wrapper\">
            {{ data.preview }}
          </div>
        </div>
      {% endif %}

      {% if data.description or display or data.alt or data.title %}
        <div class=\"form-managed-file__meta-items\">
          {{ data.description }}
          {% if display %}
            {{ data.display }}
          {% endif %}
          {{ data.alt }}
          {{ data.title }}
        </div>
      {% endif %}
    </div>
  </div>
  {% endif %}

  {# Every third-party addition will be rendered here. #}
  {{ data|without('preview', 'alt', 'title', 'description', 'display') }}
</div>
", "@claro/content-edit/file-managed-file.html.twig", "C:\\xampp\\htdocs\\mukesh\\test\\drupal-news\\core\\themes\\claro\\templates\\content-edit\\file-managed-file.html.twig");
    }
}
