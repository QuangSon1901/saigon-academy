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

/* modules/custom/custom_view_intro/templates/views-custom-view-intro.html.twig */
class __TwigTemplate_b85fb46ad10e402da00b34a2995b8fed extends Template
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
        echo "<div class=\"custom_view_intro\">
    <div>
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
            $context["image_url"] = $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "_entity", [], "any", false, false, true, 5), "field_background_image", [], "any", false, false, true, 5), "entity", [], "any", false, false, true, 5), "fileuri", [], "any", false, false, true, 5), 5, $this->source));
            // line 6
            echo "            <div class=\"!bg-center !bg-no-repeat !bg-cover !w-full pt-[400px] xl:!pt-[540px] relative\" style=\"background-image: url(";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["image_url"] ?? null), 6, $this->source), "html", null, true);
            echo ") !important;\">
                <div class=\"grid grid-cols-1 lg:grid-cols-2 absolute inset-0 z-10 px-5 md:px-0 py-8 xl:pt-20 xl:pb-24 container mx-auto\">
                    <div class=\"h-full flex flex-col justify-center to-right show-on-scroll\">
                        ";
            // line 9
            $context["langCode"] = twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "block_content_field_data_langcode", [], "any", false, false, true, 9);
            // line 10
            echo "                        <h1 class=\"text-2xl xl:text-4xl text-primary font-bold mb-6\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "_entity", [], "any", false, false, true, 10), "getTranslation", [0 => ($context["langCode"] ?? null)], "method", false, false, true, 10), "field_title", [], "any", false, false, true, 10), "value", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
            echo "</h1>
                        <p class=\"text-base xl:text-xl pl-8 border-l-4 border-primary\">";
            // line 11
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "_entity", [], "any", false, false, true, 11), "getTranslation", [0 => ($context["langCode"] ?? null)], "method", false, false, true, 11), "field_content", [], "any", false, false, true, 11), "value", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
            echo "</p>
                    </div>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "modules/custom/custom_view_intro/templates/views-custom-view-intro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 16,  67 => 11,  62 => 10,  60 => 9,  53 => 6,  50 => 5,  47 => 4,  43 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"custom_view_intro\">
    <div>
        {% for row in rows %}
            {% set node = row['#row'] %}
            {% set image_url = file_url(node._entity.field_background_image.entity.fileuri) %}
            <div class=\"!bg-center !bg-no-repeat !bg-cover !w-full pt-[400px] xl:!pt-[540px] relative\" style=\"background-image: url({{image_url}}) !important;\">
                <div class=\"grid grid-cols-1 lg:grid-cols-2 absolute inset-0 z-10 px-5 md:px-0 py-8 xl:pt-20 xl:pb-24 container mx-auto\">
                    <div class=\"h-full flex flex-col justify-center to-right show-on-scroll\">
                        {% set langCode = node.block_content_field_data_langcode %}
                        <h1 class=\"text-2xl xl:text-4xl text-primary font-bold mb-6\">{{ node._entity.getTranslation(langCode).field_title.value }}</h1>
                        <p class=\"text-base xl:text-xl pl-8 border-l-4 border-primary\">{{node._entity.getTranslation(langCode).field_content.value}}</p>
                    </div>
                </div>
            </div>
        {% endfor %}
    </div>
</div>", "modules/custom/custom_view_intro/templates/views-custom-view-intro.html.twig", "C:\\Users\\Admin\\Desktop\\New folder\\saigon-academy\\web\\modules\\custom\\custom_view_intro\\templates\\views-custom-view-intro.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 3, "set" => 4);
        static $filters = array("escape" => 6);
        static $functions = array("file_url" => 5);

        try {
            $this->sandbox->checkSecurity(
                ['for', 'set'],
                ['escape'],
                ['file_url']
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
