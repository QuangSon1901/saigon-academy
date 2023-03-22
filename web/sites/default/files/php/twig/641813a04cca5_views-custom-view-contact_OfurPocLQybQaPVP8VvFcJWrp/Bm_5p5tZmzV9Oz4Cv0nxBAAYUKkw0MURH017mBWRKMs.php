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

/* modules/custom/custom_view_contact/templates/views-custom-view-contact.html.twig */
class __TwigTemplate_8953c39c7da4a5d613ae76ea1b6053df extends Template
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
        echo "<div class=\"custom_view_admissions py-[50px]\">
  <div class=\"grid grid-cols-1 gap-12\">
        ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 4
            echo "            ";
            $context["node"] = (($__internal_compile_0 = $context["row"]) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#row"] ?? null) : null);
            // line 5
            echo "            ";
            $context["langCode"] = twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "node_field_data_langcode", [], "any", false, false, true, 5);
            // line 6
            echo "            <div  class=\"box-shadow-style\">
                <div>
                    <div class=\"float-left relative\">
                        ";
            // line 9
            $context["imagestyle"] = ["#theme" => "image_style", "#style_name" => "convert_to_web", "#uri" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 12
($context["node"] ?? null), "_entity", [], "any", false, false, true, 12), "field_map_i", [], "any", false, false, true, 12), "entity", [], "any", false, false, true, 12), "fileuri", [], "any", false, false, true, 12), "#alt" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 13
($context["node"] ?? null), "_entity", [], "any", false, false, true, 13), "field_map_i", [], "any", false, false, true, 13), "alt", [], "any", false, false, true, 13), "#attributes" => ["class" => "h-[360px] md:w-[280px] lg:w-[680px] w-[680px] rounded-md object-cover"]];
            // line 16
            echo "                        ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["imagestyle"] ?? null), 16, $this->source), "html", null, true);
            echo "
                    </div>
                    <div class=\"p-5 overflow-hidden\">
                        <div>
                            <h1 class=\"text-xl font-medium mb-6\">";
            // line 20
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "_entity", [], "any", false, false, true, 20), "getTranslation", [0 => ($context["langCode"] ?? null)], "method", false, false, true, 20), "title", [], "any", false, false, true, 20), "value", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
            echo "</h1>
                        </div>
                        <div class=\"h-1 bg-thirst w-16 mb-2\"></div>
                        <div style=\"display: -webkit-box;-webkit-line-clamp: 2;-webkit-box-orient: vertical;\" class=\"text-black overflow-hidden font-normal mb-2\">";
            // line 23
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "_entity", [], "any", false, false, true, 23), "getTranslation", [0 => ($context["langCode"] ?? null)], "method", false, false, true, 23), "field_school_address", [], "any", false, false, true, 23), "value", [], "any", false, false, true, 23), 23, $this->source), "html", null, true);
            echo "</div>
                        <div style=\"display: -webkit-box;-webkit-line-clamp: 2;-webkit-box-orient: vertical;\" class=\"text-black overflow-hidden font-normal mb-2\"><strong>Phone:</strong> ";
            // line 24
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "_entity", [], "any", false, false, true, 24), "getTranslation", [0 => ($context["langCode"] ?? null)], "method", false, false, true, 24), "field_school_phone", [], "any", false, false, true, 24), "value", [], "any", false, false, true, 24), 24, $this->source), "html", null, true);
            echo "</div>
                    </div>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "modules/custom/custom_view_contact/templates/views-custom-view-contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 29,  80 => 24,  76 => 23,  70 => 20,  62 => 16,  60 => 13,  59 => 12,  58 => 9,  53 => 6,  50 => 5,  47 => 4,  43 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/custom/custom_view_contact/templates/views-custom-view-contact.html.twig", "D:\\Studying\\Laravel\\www\\saigon-academy\\web\\modules\\custom\\custom_view_contact\\templates\\views-custom-view-contact.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 3, "set" => 4);
        static $filters = array("escape" => 16);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for', 'set'],
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
