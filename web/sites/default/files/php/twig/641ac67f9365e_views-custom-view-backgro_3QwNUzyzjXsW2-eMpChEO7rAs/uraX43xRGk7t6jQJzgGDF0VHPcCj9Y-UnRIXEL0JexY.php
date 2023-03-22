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

/* modules/custom/custom_view_background/templates/views-custom-view-background.html.twig */
class __TwigTemplate_f83030a91f607f2cdef1084207e380af extends Template
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
        echo "<div class=\"custom_view_background !bg-center !bg-no-repeat !bg-cover !w-full\" style=\"background-image: url(/sites/default/files/2023-03/saadfsdf.png) !important;\">
    <div class=\"grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 pt-10 pb-12 xl:pt-20 xl:pb-24 px-5 md:px-0 container mx-auto gap-3\">
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
            echo "            <a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("entity.node.canonical", ["node" => twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "nid", [], "any", false, false, true, 6)]), "html", null, true);
            echo "\" class=\"to-top show-on-scroll\">
                <div class=\"tag-hover relative rounded-xl min-h-[210px] xl:min-h-[250px] flex items-center justify-center\">
                    <div class=\"absolute inset-0 rounded-xl truncate\">
                        ";
            // line 9
            $context["imagestyle"] = ["#theme" => "image_style", "#style_name" => "convert_to_web", "#uri" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 12
($context["node"] ?? null), "_entity", [], "any", false, false, true, 12), "field_image_edu", [], "any", false, false, true, 12), "entity", [], "any", false, false, true, 12), "fileuri", [], "any", false, false, true, 12), "#alt" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 13
($context["node"] ?? null), "_entity", [], "any", false, false, true, 13), "field_image_edu", [], "any", false, false, true, 13), "alt", [], "any", false, false, true, 13), "#attributes" => ["class" => "w-full h-full transition-all !duration-1000 !ease-out"]];
            // line 16
            echo "                        ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["imagestyle"] ?? null), 16, $this->source), "html", null, true);
            echo "
                    </div>
                    <div class=\"relative w-full h-full flex items-center justify-center z-10\"><h1 class=\"text-xl text-white font-bold text-center\" style=\"inline-size: 80%;\">";
            // line 18
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "_entity", [], "any", false, false, true, 18), "getTranslation", [0 => ($context["langCode"] ?? null)], "method", false, false, true, 18), "title", [], "any", false, false, true, 18), "value", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
            echo "</h1></div>
                    <div class=\"overlay absolute inset-0 bg-black opacity-50 rounded-xl\"></div>
                </div>
            </a>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "modules/custom/custom_view_background/templates/views-custom-view-background.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 23,  70 => 18,  64 => 16,  62 => 13,  61 => 12,  60 => 9,  53 => 6,  50 => 5,  47 => 4,  43 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"custom_view_background !bg-center !bg-no-repeat !bg-cover !w-full\" style=\"background-image: url(/sites/default/files/2023-03/saadfsdf.png) !important;\">
    <div class=\"grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 pt-10 pb-12 xl:pt-20 xl:pb-24 px-5 md:px-0 container mx-auto gap-3\">
        {% for row in rows %}
            {% set node = row['#row'] %}
            {% set langCode = node.node_field_data_langcode %}
            <a href=\"{{  url('entity.node.canonical', {'node': node.nid})  }}\" class=\"to-top show-on-scroll\">
                <div class=\"tag-hover relative rounded-xl min-h-[210px] xl:min-h-[250px] flex items-center justify-center\">
                    <div class=\"absolute inset-0 rounded-xl truncate\">
                        {% set imagestyle = {
                            '#theme':      'image_style',
                            '#style_name': 'convert_to_web',
                            '#uri':        node._entity.field_image_edu.entity.fileuri,
                            '#alt':        node._entity.field_image_edu.alt,
                            '#attributes': { class: 'w-full h-full transition-all !duration-1000 !ease-out' },
                        } %}
                        {{ imagestyle }}
                    </div>
                    <div class=\"relative w-full h-full flex items-center justify-center z-10\"><h1 class=\"text-xl text-white font-bold text-center\" style=\"inline-size: 80%;\">{{node._entity.getTranslation(langCode).title.value}}</h1></div>
                    <div class=\"overlay absolute inset-0 bg-black opacity-50 rounded-xl\"></div>
                </div>
            </a>
        {% endfor %}
    </div>
</div>", "modules/custom/custom_view_background/templates/views-custom-view-background.html.twig", "C:\\Users\\Admin\\Desktop\\New folder\\saigon-academy\\web\\modules\\custom\\custom_view_background\\templates\\views-custom-view-background.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 3, "set" => 4);
        static $filters = array("escape" => 6);
        static $functions = array("url" => 6);

        try {
            $this->sandbox->checkSecurity(
                ['for', 'set'],
                ['escape'],
                ['url']
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
