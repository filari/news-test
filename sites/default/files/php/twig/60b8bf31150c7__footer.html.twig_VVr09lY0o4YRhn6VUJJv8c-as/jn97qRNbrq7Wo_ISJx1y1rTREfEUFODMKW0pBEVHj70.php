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

/* @jbi_digital/layout/includes/_footer.html.twig */
class __TwigTemplate_af58995629aea282dc54c13eedd7eb98a2d17e11029439cc034e034d6de7d4d0 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = [];
        $filters = [];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
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
        // line 1
        echo "<!-- start footer Area -->
<footer class=\"footer-area py-5\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-5 col-md-6 col-sm-6\">
        <div class=\"single-footer-widget\">
          <h6>About Us</h6>
          <p>
            In the fast-paced and desk based (yes, quite ironical) lives of today, we often keep physical,
            mental and overall fitness on a backseat and get absorbed in the daily grind. We, at FITCEPT,<a
            href=\"#\">read more</a>
          </p>
          <p class=\"footer-text\">
            Copyright &copy; All rights reserved
          </p>
        </div>
      </div>
      <div class=\"col-lg-5  col-md-6 col-sm-6\">
        <div class=\"single-footer-widget\">
          <h6>Newsletter</h6>
          <p>Stay update with our latest</p>
          <div class=\"\" id=\"mc_embed_signup\">
            <form target=\"_blank\" action=\"#\" method=\"get\" class=\"form-inline\">
              <input class=\"form-control\" name=\"EMAIL\" placeholder=\"Enter Email\"
                     onfocus=\"this.placeholder = ''\" onblur=\"this.placeholder = 'Enter Email '\"
                     required=\"\" type=\"email\">
              <button class=\"click-btn btn btn-default\"><i class=\"fa fa-long-arrow-right\"
                                                           aria-hidden=\"true\"></i></button>
              <div style=\"position: absolute; left: -5000px;\">
                <input name=\"nan\" tabindex=\"-1\" value=\"\" type=\"text\">
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class=\"col-lg-2 col-md-6 col-sm-6 social-widget\">
        <div class=\"single-footer-widget\">
          <h6>Follow Us</h6>
          <p>Let us be social</p>
          <div class=\"footer-social d-flex align-items-center\">
            <a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
            <a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
            <a href=\"#\"><i class=\"fa fa-dribbble\"></i></a>
            <a href=\"#\"><i class=\"fa fa-behance\"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
<!-- End footer Area -->
";
    }

    public function getTemplateName()
    {
        return "@jbi_digital/layout/includes/_footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<!-- start footer Area -->
<footer class=\"footer-area py-5\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-5 col-md-6 col-sm-6\">
        <div class=\"single-footer-widget\">
          <h6>About Us</h6>
          <p>
            In the fast-paced and desk based (yes, quite ironical) lives of today, we often keep physical,
            mental and overall fitness on a backseat and get absorbed in the daily grind. We, at FITCEPT,<a
            href=\"#\">read more</a>
          </p>
          <p class=\"footer-text\">
            Copyright &copy; All rights reserved
          </p>
        </div>
      </div>
      <div class=\"col-lg-5  col-md-6 col-sm-6\">
        <div class=\"single-footer-widget\">
          <h6>Newsletter</h6>
          <p>Stay update with our latest</p>
          <div class=\"\" id=\"mc_embed_signup\">
            <form target=\"_blank\" action=\"#\" method=\"get\" class=\"form-inline\">
              <input class=\"form-control\" name=\"EMAIL\" placeholder=\"Enter Email\"
                     onfocus=\"this.placeholder = ''\" onblur=\"this.placeholder = 'Enter Email '\"
                     required=\"\" type=\"email\">
              <button class=\"click-btn btn btn-default\"><i class=\"fa fa-long-arrow-right\"
                                                           aria-hidden=\"true\"></i></button>
              <div style=\"position: absolute; left: -5000px;\">
                <input name=\"nan\" tabindex=\"-1\" value=\"\" type=\"text\">
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class=\"col-lg-2 col-md-6 col-sm-6 social-widget\">
        <div class=\"single-footer-widget\">
          <h6>Follow Us</h6>
          <p>Let us be social</p>
          <div class=\"footer-social d-flex align-items-center\">
            <a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
            <a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
            <a href=\"#\"><i class=\"fa fa-dribbble\"></i></a>
            <a href=\"#\"><i class=\"fa fa-behance\"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
<!-- End footer Area -->
", "@jbi_digital/layout/includes/_footer.html.twig", "C:\\xampp\\htdocs\\mukesh\\test\\drupal-news\\themes\\custom\\jbi_digital\\templates\\layout\\includes\\_footer.html.twig");
    }
}
