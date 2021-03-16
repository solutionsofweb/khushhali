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

/* themes/khushali/templates/layout/page.html.twig */
class __TwigTemplate_ed1193fd89bcfd3761d6f0e6d0fba358d0ab24ef599e1db4a513f5a2f89b5f23 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'featured' => [$this, 'block_featured'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 70
        echo "<div id=\"page-wrapper\">
    <div id=\"page\">
        <header id=\"header\" class=\"header\" role=\"banner\" aria-label=\"";
        // line 72
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Site header"));
        echo "\">
            ";
        // line 73
        $this->displayBlock('head', $context, $blocks);
        // line 115
        echo "        </header>
        ";
        // line 116
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 116)) {
            // line 117
            echo "        <div class=\"highlighted\">
            <aside class=\"";
            // line 118
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 118, $this->source), "html", null, true);
            echo " section clearfix\" role=\"complementary\">
                ";
            // line 119
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 119), 119, $this->source), "html", null, true);
            echo "
            </aside>
        </div>
        ";
        }
        // line 123
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_top", [], "any", false, false, true, 123)) {
            // line 124
            echo "        ";
            $this->displayBlock('featured', $context, $blocks);
            // line 131
            echo "        ";
        }
        // line 132
        echo "        <div id=\"main-wrapper\" class=\"layout-main-wrapper clearfix\">
            ";
        // line 133
        $this->displayBlock('content', $context, $blocks);
        // line 160
        echo "</div>
";
        // line 161
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_first", [], "any", false, false, true, 161) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_second", [], "any", false, false, true, 161)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_third", [], "any", false, false, true, 161))) {
            // line 162
            echo "<div class=\"featured-bottom\">
    <aside class=\"";
            // line 163
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 163, $this->source), "html", null, true);
            echo " clearfix\" role=\"complementary\">
        ";
            // line 164
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_first", [], "any", false, false, true, 164), 164, $this->source), "html", null, true);
            echo "
        ";
            // line 165
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_second", [], "any", false, false, true, 165), 165, $this->source), "html", null, true);
            echo "
        ";
            // line 166
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_third", [], "any", false, false, true, 166), 166, $this->source), "html", null, true);
            echo "
    </aside>
</div>
";
        }
        // line 170
        echo "<footer class=\"site-footer\">
    ";
        // line 171
        $this->displayBlock('footer', $context, $blocks);
        // line 218
        echo "</footer>
</div>
</div>";
    }

    // line 73
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 74
        echo "            ";
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "secondary_menu", [], "any", false, false, true, 74) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_header", [], "any", false, false, true, 74)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_header_form", [], "any", false, false, true, 74))) {
            // line 75
            echo "            <nav";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["navbar_top_attributes"] ?? null), 75, $this->source), "html", null, true);
            echo ">
                ";
            // line 76
            if (($context["container_navbar"] ?? null)) {
                // line 77
                echo "                <div class=\"container\">
                    ";
            }
            // line 79
            echo "                    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "secondary_menu", [], "any", false, false, true, 79), 79, $this->source), "html", null, true);
            echo "
                    ";
            // line 80
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_header", [], "any", false, false, true, 80), 80, $this->source), "html", null, true);
            echo "
                    ";
            // line 81
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_header_form", [], "any", false, false, true, 81)) {
                // line 82
                echo "                    <div class=\"form-inline navbar-form ml-auto\">
                        ";
                // line 83
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_header_form", [], "any", false, false, true, 83), 83, $this->source), "html", null, true);
                echo "
                    </div>
                    ";
            }
            // line 86
            echo "                    ";
            if (($context["container_navbar"] ?? null)) {
                // line 87
                echo "                </div>
                ";
            }
            // line 89
            echo "                </nav>
                ";
        }
        // line 91
        echo "                <nav";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["navbar_attributes"] ?? null), 91, $this->source), "html", null, true);
        echo ">
                    ";
        // line 92
        if (($context["container_navbar"] ?? null)) {
            // line 93
            echo "                    <div class=\"container\">
                        ";
        }
        // line 95
        echo "                        ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 95), 95, $this->source), "html", null, true);
        echo "
                        ";
        // line 96
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 96) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_form", [], "any", false, false, true, 96))) {
            // line 97
            echo "                        <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#CollapsingNavbar\" aria-controls=\"CollapsingNavbar\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"><span class=\"navbar-toggler-icon\"></span></button>
                        <div class=\"collapse navbar-collapse justify-content-center\" id=\"CollapsingNavbar\">
                            ";
            // line 99
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 99), 99, $this->source), "html", null, true);
            echo "
                            ";
            // line 100
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_form", [], "any", false, false, true, 100)) {
                // line 101
                echo "                            <div class=\"form-inline navbar-form justify-content-end\">
                                ";
                // line 102
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_form", [], "any", false, false, true, 102), 102, $this->source), "html", null, true);
                echo "
                            </div>
                            ";
            }
            // line 105
            echo "                        </div>
                        ";
        }
        // line 107
        echo "                        ";
        if (($context["sidebar_collapse"] ?? null)) {
            // line 108
            echo "                        <button class=\"navbar-toggler navbar-toggler-left collapsed\" type=\"button\" data-toggle=\"collapse\" data-target=\"#CollapsingLeft\" aria-controls=\"CollapsingLeft\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"></button>
                        ";
        }
        // line 110
        echo "                        ";
        if (($context["container_navbar"] ?? null)) {
            // line 111
            echo "                    </div>
                    ";
        }
        // line 113
        echo "                    </nav>
                    ";
    }

    // line 124
    public function block_featured($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 125
        echo "        <div class=\"featured-top\">
            <aside class=\"featured-top__inner section ";
        // line 126
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 126, $this->source), "html", null, true);
        echo " clearfix\" role=\"complementary\">
                ";
        // line 127
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_top", [], "any", false, false, true, 127), 127, $this->source), "html", null, true);
        echo "
            </aside>
        </div>
        ";
    }

    // line 133
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 134
        echo "            <div id=\"main\" class=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 134, $this->source), "html", null, true);
        echo "\">
                ";
        // line 135
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 135), 135, $this->source), "html", null, true);
        echo "
                <div class=\"row row-offcanvas row-offcanvas-left clearfix\">
                    <main";
        // line 137
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_attributes"] ?? null), 137, $this->source), "html", null, true);
        echo ">
                        <section class=\"section\">
                            <a id=\"main-content\" tabindex=\"-1\"></a>
                            ";
        // line 140
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 140), 140, $this->source), "html", null, true);
        echo "
                        </section>
                        </main>
                        ";
        // line 143
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 143)) {
            // line 144
            echo "                        <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_first_attributes"] ?? null), 144, $this->source), "html", null, true);
            echo ">
                            <aside class=\"section\" role=\"complementary\">
                                ";
            // line 146
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 146), 146, $this->source), "html", null, true);
            echo "
                            </aside>
                </div>
                ";
        }
        // line 150
        echo "                ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 150)) {
            // line 151
            echo "                <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_second_attributes"] ?? null), 151, $this->source), "html", null, true);
            echo ">
                    <aside class=\"section\" role=\"complementary\">
                        ";
            // line 153
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 153), 153, $this->source), "html", null, true);
            echo "
                    </aside>
            </div>
            ";
        }
        // line 157
        echo "        </div>
    </div>
    ";
    }

    // line 171
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 172
        echo "    <div class=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 172, $this->source), "html", null, true);
        echo "\">
        ";
        // line 173
        if ((((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 173) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 173)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 173)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 173)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fifth", [], "any", false, false, true, 173)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_sixth", [], "any", false, false, true, 173))) {
            // line 174
            echo "        <div class=\"site-footer__top clearfix row\">
            <div class=\"col-12 col-md-3\">
                ";
            // line 176
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 176), 176, $this->source), "html", null, true);
            echo "

            </div>
            <div class=\"col-12 col-md-9\">
                <div class=\"row row-cols-2 row-cols-md-5\">

                    <div class=\"col over-line\">
                        ";
            // line 183
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 183), 183, $this->source), "html", null, true);
            echo "

                    </div>
                    <div class=\"col over-line\">
                        ";
            // line 187
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 187), 187, $this->source), "html", null, true);
            echo "
                    </div>
                    <div class=\"col over-line\">
                        ";
            // line 190
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 190), 190, $this->source), "html", null, true);
            echo "
                    </div>
                    <div class=\"col over-line\">
                        ";
            // line 193
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fifth", [], "any", false, false, true, 193), 193, $this->source), "html", null, true);
            echo "
                    </div>
                    <div class=\"col\">
                        ";
            // line 196
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_sixth", [], "any", false, false, true, 196), 196, $this->source), "html", null, true);
            echo "
                    </div>

                </div>
            </div>

            ";
        }
        // line 203
        echo "
        </div>
    </div>
    ";
        // line 206
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_last", [], "any", false, false, true, 206)) {
            // line 207
            echo "    <div class=\"container-fluid p-0 m-0 bg-primary\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"site-footer__bottom col-12\">
                    ";
            // line 211
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_last", [], "any", false, false, true, 211), 211, $this->source), "html", null, true);
            echo "
                </div>
            </div>
        </div>
    </div>
    ";
        }
        // line 217
        echo "    ";
    }

    public function getTemplateName()
    {
        return "themes/khushali/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  397 => 217,  388 => 211,  382 => 207,  380 => 206,  375 => 203,  365 => 196,  359 => 193,  353 => 190,  347 => 187,  340 => 183,  330 => 176,  326 => 174,  324 => 173,  319 => 172,  315 => 171,  309 => 157,  302 => 153,  296 => 151,  293 => 150,  286 => 146,  280 => 144,  278 => 143,  272 => 140,  266 => 137,  261 => 135,  256 => 134,  252 => 133,  244 => 127,  240 => 126,  237 => 125,  233 => 124,  228 => 113,  224 => 111,  221 => 110,  217 => 108,  214 => 107,  210 => 105,  204 => 102,  201 => 101,  199 => 100,  195 => 99,  191 => 97,  189 => 96,  184 => 95,  180 => 93,  178 => 92,  173 => 91,  169 => 89,  165 => 87,  162 => 86,  156 => 83,  153 => 82,  151 => 81,  147 => 80,  142 => 79,  138 => 77,  136 => 76,  131 => 75,  128 => 74,  124 => 73,  118 => 218,  116 => 171,  113 => 170,  106 => 166,  102 => 165,  98 => 164,  94 => 163,  91 => 162,  89 => 161,  86 => 160,  84 => 133,  81 => 132,  78 => 131,  75 => 124,  72 => 123,  65 => 119,  61 => 118,  58 => 117,  56 => 116,  53 => 115,  51 => 73,  47 => 72,  43 => 70,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Bootstrap Barrio's theme implementation to display a single page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.html.twig template normally located in the
 * core/modules/system directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - base_path: The base URL path of the Drupal installation. Will usually be
 *   \"/\" unless you have installed Drupal in a sub-directory.
 * - is_front: A flag indicating if the current page is the front page.
 * - logged_in: A flag indicating if the user is registered and signed in.
 * - is_admin: A flag indicating if the user has permission to access
 *   administration pages.
 *
 * Site identity:
 * - front_page: The URL of the front page. Use this instead of base_path when
 *   linking to the front page. This includes the language domain or prefix.
 * - logo: The url of the logo image, as defined in theme settings.
 * - site_name: The name of the site. This is empty when displaying the site
 *   name has been disabled in the theme settings.
 * - site_slogan: The slogan of the site. This is empty when displaying the site
 *   slogan has been disabled in theme settings.

 * Page content (in order of occurrence in the default page.html.twig):
 * - node: Fully loaded node, if there is an automatically-loaded node
 *   associated with the page and the node ID is the second argument in the
 *   page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - page.top_header: Items for the top header region.
 * - page.top_header_form: Items for the top header form region.
 * - page.header: Items for the header region.
 * - page.header_form: Items for the header form region.
 * - page.highlighted: Items for the highlighted region.
 * - page.primary_menu: Items for the primary menu region.
 * - page.secondary_menu: Items for the secondary menu region.
 * - page.featured_top: Items for the featured top region.
 * - page.content: The main content of the current page.
 * - page.sidebar_first: Items for the first sidebar.
 * - page.sidebar_second: Items for the second sidebar.
 * - page.featured_bottom_first: Items for the first featured bottom region.
 * - page.featured_bottom_second: Items for the second featured bottom region.
 * - page.featured_bottom_third: Items for the third featured bottom region.
 * - page.footer_first: Items for the first footer column.
 * - page.footer_second: Items for the second footer column.
 * - page.footer_third: Items for the third footer column.
 * - page.footer_fourth: Items for the fourth footer column.
 * - page.footer_fifth: Items for the fifth footer column.
 * - page.breadcrumb: Items for the breadcrumb region.
 *
 * Theme variables:
 * - navbar_top_attributes: Items for the header region.
 * - navbar_attributes: Items for the header region.
 * - content_attributes: Items for the header region.
 * - sidebar_first_attributes: Items for the highlighted region.
 * - sidebar_second_attributes: Items for the primary menu region.
 * - sidebar_collapse: If the sidebar_first will collapse.
 *
 * @see template_preprocess_page()
 * @see bootstrap_barrio_preprocess_page()
 * @see html.html.twig
 */
#}
<div id=\"page-wrapper\">
    <div id=\"page\">
        <header id=\"header\" class=\"header\" role=\"banner\" aria-label=\"{{ 'Site header'|t}}\">
            {% block head %}
            {% if page.secondary_menu or page.top_header or page.top_header_form %}
            <nav{{ navbar_top_attributes }}>
                {% if container_navbar %}
                <div class=\"container\">
                    {% endif %}
                    {{ page.secondary_menu }}
                    {{ page.top_header }}
                    {% if page.top_header_form %}
                    <div class=\"form-inline navbar-form ml-auto\">
                        {{ page.top_header_form }}
                    </div>
                    {% endif %}
                    {% if container_navbar %}
                </div>
                {% endif %}
                </nav>
                {% endif %}
                <nav{{ navbar_attributes }}>
                    {% if container_navbar %}
                    <div class=\"container\">
                        {% endif %}
                        {{ page.header }}
                        {% if page.primary_menu or page.header_form %}
                        <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#CollapsingNavbar\" aria-controls=\"CollapsingNavbar\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"><span class=\"navbar-toggler-icon\"></span></button>
                        <div class=\"collapse navbar-collapse justify-content-center\" id=\"CollapsingNavbar\">
                            {{ page.primary_menu }}
                            {% if page.header_form %}
                            <div class=\"form-inline navbar-form justify-content-end\">
                                {{ page.header_form }}
                            </div>
                            {% endif %}
                        </div>
                        {% endif %}
                        {% if sidebar_collapse %}
                        <button class=\"navbar-toggler navbar-toggler-left collapsed\" type=\"button\" data-toggle=\"collapse\" data-target=\"#CollapsingLeft\" aria-controls=\"CollapsingLeft\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"></button>
                        {% endif %}
                        {% if container_navbar %}
                    </div>
                    {% endif %}
                    </nav>
                    {% endblock %}
        </header>
        {% if page.highlighted %}
        <div class=\"highlighted\">
            <aside class=\"{{ container }} section clearfix\" role=\"complementary\">
                {{ page.highlighted }}
            </aside>
        </div>
        {% endif %}
        {% if page.featured_top %}
        {% block featured %}
        <div class=\"featured-top\">
            <aside class=\"featured-top__inner section {{ container }} clearfix\" role=\"complementary\">
                {{ page.featured_top }}
            </aside>
        </div>
        {% endblock %}
        {% endif %}
        <div id=\"main-wrapper\" class=\"layout-main-wrapper clearfix\">
            {% block content %}
            <div id=\"main\" class=\"{{ container }}\">
                {{ page.breadcrumb }}
                <div class=\"row row-offcanvas row-offcanvas-left clearfix\">
                    <main{{ content_attributes }}>
                        <section class=\"section\">
                            <a id=\"main-content\" tabindex=\"-1\"></a>
                            {{ page.content }}
                        </section>
                        </main>
                        {% if page.sidebar_first %}
                        <div{{ sidebar_first_attributes }}>
                            <aside class=\"section\" role=\"complementary\">
                                {{ page.sidebar_first }}
                            </aside>
                </div>
                {% endif %}
                {% if page.sidebar_second %}
                <div{{ sidebar_second_attributes }}>
                    <aside class=\"section\" role=\"complementary\">
                        {{ page.sidebar_second }}
                    </aside>
            </div>
            {% endif %}
        </div>
    </div>
    {% endblock %}
</div>
{% if page.featured_bottom_first or page.featured_bottom_second or page.featured_bottom_third %}
<div class=\"featured-bottom\">
    <aside class=\"{{ container }} clearfix\" role=\"complementary\">
        {{ page.featured_bottom_first }}
        {{ page.featured_bottom_second }}
        {{ page.featured_bottom_third }}
    </aside>
</div>
{% endif %}
<footer class=\"site-footer\">
    {% block footer %}
    <div class=\"{{ container }}\">
        {% if page.footer_first or page.footer_second or page.footer_third or page.footer_fourth or page.footer_fifth or page.footer_sixth %}
        <div class=\"site-footer__top clearfix row\">
            <div class=\"col-12 col-md-3\">
                {{ page.footer_first }}

            </div>
            <div class=\"col-12 col-md-9\">
                <div class=\"row row-cols-2 row-cols-md-5\">

                    <div class=\"col over-line\">
                        {{ page.footer_second }}

                    </div>
                    <div class=\"col over-line\">
                        {{ page.footer_third }}
                    </div>
                    <div class=\"col over-line\">
                        {{ page.footer_fourth }}
                    </div>
                    <div class=\"col over-line\">
                        {{ page.footer_fifth }}
                    </div>
                    <div class=\"col\">
                        {{ page.footer_sixth }}
                    </div>

                </div>
            </div>

            {% endif %}

        </div>
    </div>
    {% if page.footer_last %}
    <div class=\"container-fluid p-0 m-0 bg-primary\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"site-footer__bottom col-12\">
                    {{ page.footer_last }}
                </div>
            </div>
        </div>
    </div>
    {% endif %}
    {% endblock %}
</footer>
</div>
</div>", "themes/khushali/templates/layout/page.html.twig", "D:\\xampp\\htdocs\\khushalbank\\web\\themes\\khushali\\templates\\layout\\page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("block" => 73, "if" => 116);
        static $filters = array("t" => 72, "escape" => 118);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['block', 'if'],
                ['t', 'escape'],
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
