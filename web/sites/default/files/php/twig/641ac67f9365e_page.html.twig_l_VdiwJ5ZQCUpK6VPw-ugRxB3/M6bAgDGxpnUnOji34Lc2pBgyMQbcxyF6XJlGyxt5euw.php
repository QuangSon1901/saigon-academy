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

/* themes/custom_theme/templates/system/page.html.twig */
class __TwigTemplate_5f49fbde743b0db678591f21b8a5717d extends Template
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
        echo "<div class=\"pt-100px\">
    <header role=\"banner\" class=\"fixed top-0 right-0 left-0 z-20 bg-white\">
        <div class=\"flex items-center bg-primary text-secondary h-[30px]\">
            <div class=\"px-3 md:px-0 container mx-auto\">
                <div class=\"pre-header flex items-center justify-between\">
                    <div>";
        // line 6
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "pre_header_left", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
        echo "</div>
                    <div>";
        // line 7
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "pre_header_center", [], "any", false, false, true, 7), 7, $this->source), "html", null, true);
        echo "</div>
                    <div class=\"flex items-center space-x-4\">
                        ";
        // line 9
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "pre_header_right", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
        echo "
                        ";
        // line 10
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "change_language", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
        echo "
                    </div>
                </div>
            </div>
        </div>
        <div class=\"px-3 md:px-0 container mx-auto\">
            ";
        // line 16
        if ( !twig_test_empty(twig_trim_filter(twig_striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 16)))))) {
            // line 17
            echo "            ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
            echo "
            ";
        }
        // line 19
        echo "        </div>
    </header>

    <div class=\"layout-highlighted\">
        <div class=\"px-3 md:px-0 container mx-auto\">
            ";
        // line 24
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 24), 24, $this->source), "html", null, true);
        echo "
        </div>
    </div>

    <div class=\"layout-tabs\">
        <div class=\"px-3 md:px-0 container mx-auto\">
            ";
        // line 30
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "tabs", [], "any", false, false, true, 30), 30, $this->source), "html", null, true);
        echo "
        </div>
    </div>

    <div class=\"layout-banner-top\">
        ";
        // line 35
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "banner_top", [], "any", false, false, true, 35), 35, $this->source), "html", null, true);
        echo "
    </div>

    <div class=\"layout-breadcrumbs\">
        <div class=\"px-3 md:px-0 container mx-auto\">
            ";
        // line 40
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumbs", [], "any", false, false, true, 40), 40, $this->source), "html", null, true);
        echo "
        </div>
    </div>

    <div class=\"layout-intro\">
        ";
        // line 45
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "intro", [], "any", false, false, true, 45), 45, $this->source), "html", null, true);
        echo "
    </div>

    <div class=\"layout-page-title\">
        ";
        // line 49
        if (($context["is_front"] ?? null)) {
            // line 50
            echo "        <div class=\"is-front container mx-auto\">
            ";
            // line 51
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "page_title", [], "any", false, false, true, 51), 51, $this->source), "html", null, true);
            echo "
        </div>
        ";
        } else {
            // line 54
            echo "        <div class=\"px-3 md:px-0 container mx-auto\">
            ";
            // line 55
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "page_title", [], "any", false, false, true, 55), 55, $this->source), "html", null, true);
            echo "
        </div>
        ";
        }
        // line 58
        echo "    </div>

    <main role=\"main\" class=\"main px-3 md:px-0 container mx-auto\">

        <div class=\"layout-content\">
            ";
        // line 64
        echo "            ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 64), 64, $this->source), "html", null, true);
        echo "
        </div>

        <aside class=\"layout-sidebar\" role=\"complementary\">
            ";
        // line 68
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar", [], "any", false, false, true, 68), 68, $this->source), "html", null, true);
        echo "
        </aside>

    </main>

    <div class=\"layout-content-bottom\">
        ";
        // line 74
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom", [], "any", false, false, true, 74), 74, $this->source), "html", null, true);
        echo "
    </div>

    <div class=\"layout-footer\">
        <footer class=\"footer\" role=\"contentinfo\">
            <div>
                ";
        // line 80
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 80), 80, $this->source), "html", null, true);
        echo "
            </div>
        </footer>
    </div>

    <div class=\"layout-bottom\">
        <div>
            ";
        // line 87
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom", [], "any", false, false, true, 87), 87, $this->source), "html", null, true);
        echo "
        </div>
    </div>

    <button id=\"scroll-to-top\">
        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"scroll-circle svg-content\" width=\"14\" height=\"14\" viewBox=\"0 0 14 14\" fill=\"#ffffff\"><path d=\"M13.1211 7.84766H1.8418L7.26172 13.2676L6.61719 13.9121L0.142578 7.4082L6.61719 0.933594L7.26172 1.54883L1.8418 6.96875H13.1211V7.84766Z\" fill=\"#ffffff\"/><script xmlns=\"\"/></svg>
    </button>

    ";
        // line 107
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "themes/custom_theme/templates/system/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 107,  186 => 87,  176 => 80,  167 => 74,  158 => 68,  150 => 64,  143 => 58,  137 => 55,  134 => 54,  128 => 51,  125 => 50,  123 => 49,  116 => 45,  108 => 40,  100 => 35,  92 => 30,  83 => 24,  76 => 19,  70 => 17,  68 => 16,  59 => 10,  55 => 9,  50 => 7,  46 => 6,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"pt-100px\">
    <header role=\"banner\" class=\"fixed top-0 right-0 left-0 z-20 bg-white\">
        <div class=\"flex items-center bg-primary text-secondary h-[30px]\">
            <div class=\"px-3 md:px-0 container mx-auto\">
                <div class=\"pre-header flex items-center justify-between\">
                    <div>{{ page.pre_header_left }}</div>
                    <div>{{ page.pre_header_center }}</div>
                    <div class=\"flex items-center space-x-4\">
                        {{ page.pre_header_right }}
                        {{ page.change_language }}
                    </div>
                </div>
            </div>
        </div>
        <div class=\"px-3 md:px-0 container mx-auto\">
            {% if page.header|render|striptags|trim is not empty %}
            {{ page.header }}
            {% endif %}
        </div>
    </header>

    <div class=\"layout-highlighted\">
        <div class=\"px-3 md:px-0 container mx-auto\">
            {{ page.highlighted }}
        </div>
    </div>

    <div class=\"layout-tabs\">
        <div class=\"px-3 md:px-0 container mx-auto\">
            {{ page.tabs }}
        </div>
    </div>

    <div class=\"layout-banner-top\">
        {{ page.banner_top }}
    </div>

    <div class=\"layout-breadcrumbs\">
        <div class=\"px-3 md:px-0 container mx-auto\">
            {{ page.breadcrumbs }}
        </div>
    </div>

    <div class=\"layout-intro\">
        {{ page.intro }}
    </div>

    <div class=\"layout-page-title\">
        {% if is_front %}
        <div class=\"is-front container mx-auto\">
            {{ page.page_title }}
        </div>
        {% else %}
        <div class=\"px-3 md:px-0 container mx-auto\">
            {{ page.page_title }}
        </div>
        {% endif %}
    </div>

    <main role=\"main\" class=\"main px-3 md:px-0 container mx-auto\">

        <div class=\"layout-content\">
            {# <a id=\"main-content\" tabindex=\"-1\"></a> #}
            {{ page.content }}
        </div>

        <aside class=\"layout-sidebar\" role=\"complementary\">
            {{ page.sidebar }}
        </aside>

    </main>

    <div class=\"layout-content-bottom\">
        {{ page.content_bottom }}
    </div>

    <div class=\"layout-footer\">
        <footer class=\"footer\" role=\"contentinfo\">
            <div>
                {{ page.footer }}
            </div>
        </footer>
    </div>

    <div class=\"layout-bottom\">
        <div>
            {{ page.bottom }}
        </div>
    </div>

    <button id=\"scroll-to-top\">
        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"scroll-circle svg-content\" width=\"14\" height=\"14\" viewBox=\"0 0 14 14\" fill=\"#ffffff\"><path d=\"M13.1211 7.84766H1.8418L7.26172 13.2676L6.61719 13.9121L0.142578 7.4082L6.61719 0.933594L7.26172 1.54883L1.8418 6.96875H13.1211V7.84766Z\" fill=\"#ffffff\"/><script xmlns=\"\"/></svg>
    </button>

    {# <div id=\"loadingPage\" class=\"fixed inset-0 z-20\">
        <div class=\"grid h-full w-full grid-cols-1\">
            <div class=\"line bg-white\"></div>
            <div class=\"line bg-white\"></div>
            <div class=\"line bg-white\"></div>
            <div class=\"line bg-white\"></div>
            <div class=\"line bg-white\"></div>
        </div>
        <div class=\"logo-loading absolute top-[50%] left-[50%] translate-x-[-50%] translate-y-[-50%]\">
            <img src=\"http://localhost:8888/themes/custom_theme/logo.svg\" alt=\"\" />
        </div>
    </div> #}

</div>", "themes/custom_theme/templates/system/page.html.twig", "C:\\Users\\Admin\\Desktop\\New folder\\saigon-academy\\web\\themes\\custom_theme\\templates\\system\\page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 16);
        static $filters = array("escape" => 6, "trim" => 16, "striptags" => 16, "render" => 16);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 'trim', 'striptags', 'render'],
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
