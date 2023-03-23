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

/* modules/custom/custom_view_news/templates/views-custom-view-news.html.twig */
class __TwigTemplate_685d0aa53a7bded788b82d270ee3b6a6 extends Template
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
        echo "<div class=\"custom_view_news py-[50px]\">
  <div class=\"grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-4 gap-8\">
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
            echo "\"  class=\"box-shadow-style cursor-pointer\">
                <div>
                    <div class=\"relative\">
                        ";
            // line 9
            $context["imagestyle"] = ["#theme" => "image_style", "#style_name" => "convert_to_web", "#uri" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 12
($context["node"] ?? null), "_entity", [], "any", false, false, true, 12), "field_image_news", [], "any", false, false, true, 12), "entity", [], "any", false, false, true, 12), "fileuri", [], "any", false, false, true, 12), "#alt" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 13
($context["node"] ?? null), "_entity", [], "any", false, false, true, 13), "field_image_news", [], "any", false, false, true, 13), "alt", [], "any", false, false, true, 13), "#attributes" => ["class" => "w-full h-[360px] rounded-md object-cover"]];
            // line 16
            echo "                        ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["imagestyle"] ?? null), 16, $this->source), "html", null, true);
            echo "
                    </div>
                    <div class=\"p-5\">
                        <div>
                            <h1 class=\"h-[56px] text-xl font-medium mb-6\" style=\"display: -webkit-box; -webkit-line-clamp: 2; overflow: hidden; -webkit-box-orient: vertical;\">";
            // line 20
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "_entity", [], "any", false, false, true, 20), "getTranslation", [0 => ($context["langCode"] ?? null)], "method", false, false, true, 20), "title", [], "any", false, false, true, 20), "value", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
            echo "</h1>
                        </div>
                        <div class=\"h-1 bg-thirst w-16 mb-2\"></div>
                        <div style=\"display: -webkit-box;-webkit-line-clamp: 2;-webkit-box-orient: vertical;\" class=\"text-black overflow-hidden font-normal\">";
            // line 23
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "_entity", [], "any", false, false, true, 23), "getTranslation", [0 => ($context["langCode"] ?? null)], "method", false, false, true, 23), "field_intro_news", [], "any", false, false, true, 23), "value", [], "any", false, false, true, 23), 23, $this->source), "html", null, true);
            echo "</div>
                        <button class=\"relative mt-3 h-[42px] text-white flex items-center font-medium rounded-full p-[13px] bg-primary\">
                            ";
            // line 25
            if ((($context["langCode"] ?? null) == "vi")) {
                // line 26
                echo "                                Xem thêm
                            ";
            } else {
                // line 28
                echo "                                Read More
                            ";
            }
            // line 30
            echo "                        </button>
                    </div>
                </div>
            </a>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "modules/custom/custom_view_news/templates/views-custom-view-news.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 35,  93 => 30,  89 => 28,  85 => 26,  83 => 25,  78 => 23,  72 => 20,  64 => 16,  62 => 13,  61 => 12,  60 => 9,  53 => 6,  50 => 5,  47 => 4,  43 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"custom_view_news py-[50px]\">
  <div class=\"grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-4 gap-8\">
        {% for row in rows %}
            {% set node = row['#row'] %}
            {% set langCode = node.node_field_data_langcode %}
            <a href=\"{{  url('entity.node.canonical', {'node': node.nid})  }}\"  class=\"box-shadow-style cursor-pointer\">
                <div>
                    <div class=\"relative\">
                        {% set imagestyle = {
                            '#theme':      'image_style',
                            '#style_name': 'convert_to_web',
                            '#uri':        node._entity.field_image_news.entity.fileuri,
                            '#alt':        node._entity.field_image_news.alt,
                            '#attributes': { class: 'w-full h-[360px] rounded-md object-cover' },
                        } %}
                        {{ imagestyle }}
                    </div>
                    <div class=\"p-5\">
                        <div>
                            <h1 class=\"h-[56px] text-xl font-medium mb-6\" style=\"display: -webkit-box; -webkit-line-clamp: 2; overflow: hidden; -webkit-box-orient: vertical;\">{{node._entity.getTranslation(langCode).title.value}}</h1>
                        </div>
                        <div class=\"h-1 bg-thirst w-16 mb-2\"></div>
                        <div style=\"display: -webkit-box;-webkit-line-clamp: 2;-webkit-box-orient: vertical;\" class=\"text-black overflow-hidden font-normal\">{{node._entity.getTranslation(langCode).field_intro_news.value}}</div>
                        <button class=\"relative mt-3 h-[42px] text-white flex items-center font-medium rounded-full p-[13px] bg-primary\">
                            {% if langCode == \"vi\" %}
                                Xem thêm
                            {% else %}
                                Read More
                            {% endif %}
                        </button>
                    </div>
                </div>
            </a>
        {% endfor %}
  </div>
</div>
", "modules/custom/custom_view_news/templates/views-custom-view-news.html.twig", "C:\\Users\\Admin\\Desktop\\New folder\\saigon-academy\\web\\modules\\custom\\custom_view_news\\templates\\views-custom-view-news.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 3, "set" => 4, "if" => 25);
        static $filters = array("escape" => 6);
        static $functions = array("url" => 6);

        try {
            $this->sandbox->checkSecurity(
                ['for', 'set', 'if'],
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
