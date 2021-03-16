<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/khushali/templates/blocks/block--sociallinktop.html.twig */
class __TwigTemplate_7a62944ec186241cd9c29fe555b84c240c07074f5bb52016478e8f1bdb9641db extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "  <div class=\"col-6 top-date d-flex align-items-center\">
  <p class=\"text-white\"> </p>
  </div>
    <div class=\"col-6 justify-content-end align-items-center d-flex social-top\">
        ";
        // line 5
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_social_links", [], "any", false, false, true, 5), 5, $this->source), "html", null, true);
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "themes/khushali/templates/blocks/block--sociallinktop.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 5,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("  <div class=\"col-6 top-date d-flex align-items-center\">
  <p class=\"text-white\"> </p>
  </div>
    <div class=\"col-6 justify-content-end align-items-center d-flex social-top\">
        {{ content.field_social_links }}
    </div>
", "themes/khushali/templates/blocks/block--sociallinktop.html.twig", "D:\\xampp\\htdocs\\khushalbank\\web\\themes\\khushali\\templates\\blocks\\block--sociallinktop.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 5);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

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
}
