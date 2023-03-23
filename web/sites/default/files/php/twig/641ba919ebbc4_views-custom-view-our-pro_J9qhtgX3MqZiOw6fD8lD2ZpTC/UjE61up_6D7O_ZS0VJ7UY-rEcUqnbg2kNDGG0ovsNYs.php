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

/* modules/custom/custom_view_our_programs/templates/views-custom-view-our-programs.html.twig */
class __TwigTemplate_f2b6b19c6331a2b88624607e32d500de extends Template
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
        echo "<div class=\"custom_view_our_programs py-[50px]\">
  <div class=\"grid grid-cols-1 lg:grid-cols-2 gap-x-8 gap-y-8 lg:gap-y-16\">
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
            echo "\">
                <div class=\"h-[200px] lg:h-[300px] flex box-shadow-style our-card cursor-pointer\">
                <div class=\"w-[40%]\">
                    ";
            // line 9
            $context["imagestyle"] = ["#theme" => "image_style", "#style_name" => "convert_to_web", "#uri" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 12
($context["node"] ?? null), "_entity", [], "any", false, false, true, 12), "field_image_edu", [], "any", false, false, true, 12), "entity", [], "any", false, false, true, 12), "fileuri", [], "any", false, false, true, 12), "#alt" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 13
($context["node"] ?? null), "_entity", [], "any", false, false, true, 13), "field_image_edu", [], "any", false, false, true, 13), "alt", [], "any", false, false, true, 13), "#attributes" => ["class" => "h-[200px] lg:h-[300px] w-[270px] rounded-md lg:translate-y-[-30px] transition-all object-cover"]];
            // line 16
            echo "                    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["imagestyle"] ?? null), 16, $this->source), "html", null, true);
            echo "
                </div>
                <div class=\"w-[60%] py-8 px-3\">
                    <div>
                    <h1 class=\"text-xl font-medium mb-6\">";
            // line 20
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "_entity", [], "any", false, false, true, 20), "getTranslation", [0 => ($context["langCode"] ?? null)], "method", false, false, true, 20), "title", [], "any", false, false, true, 20), "value", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
            echo "</h1>
                    </div>
                    <div style=\"overflow: hidden; display: -webkit-box;-webkit-line-clamp: 2;-webkit-box-orient: vertical;\">";
            // line 22
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "_entity", [], "any", false, false, true, 22), "getTranslation", [0 => ($context["langCode"] ?? null)], "method", false, false, true, 22), "field_intro_edu", [], "any", false, false, true, 22), "value", [], "any", false, false, true, 22), 22, $this->source));
            echo "</div>
                    <button class=\"hidden btn-more relative mt-14 h-[42px] bg-[#bfbfbf] text-white lg:flex items-center font-medium rounded-full pb-[7px] pt-[3px] pl-[13px] pr-[18px] text-2xl bg-[transparent] after:content-[''] after:absolute after:top-0 after:left-0 after:bottom-0 after:block after:w-[42px] after:bg-[#bfbfbf] after:rounded-full after:transition-all\"><span class=\"z-10\">+ <span class=\"btn-more-span text-base translate-x-[3px] translate-y-[-2px] inline-block transition-all opacity-0 invisible\">
                    ";
            // line 24
            if ((($context["langCode"] ?? null) == "vi")) {
                // line 25
                echo "                                Xem thêm
                            ";
            } else {
                // line 27
                echo "                                Read More
                            ";
            }
            // line 29
            echo "                    </span></span></button>
                </div>
                </div>
            </a>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "modules/custom/custom_view_our_programs/templates/views-custom-view-our-programs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 34,  92 => 29,  88 => 27,  84 => 25,  82 => 24,  77 => 22,  72 => 20,  64 => 16,  62 => 13,  61 => 12,  60 => 9,  53 => 6,  50 => 5,  47 => 4,  43 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"custom_view_our_programs py-[50px]\">
  <div class=\"grid grid-cols-1 lg:grid-cols-2 gap-x-8 gap-y-8 lg:gap-y-16\">
        {% for row in rows %}
            {% set node = row['#row'] %}
            {% set langCode = node.node_field_data_langcode %}
            <a href=\"{{  url('entity.node.canonical', {'node': node.nid})  }}\">
                <div class=\"h-[200px] lg:h-[300px] flex box-shadow-style our-card cursor-pointer\">
                <div class=\"w-[40%]\">
                    {% set imagestyle = {
                        '#theme':      'image_style',
                        '#style_name': 'convert_to_web',
                        '#uri':        node._entity.field_image_edu.entity.fileuri,
                        '#alt':        node._entity.field_image_edu.alt,
                        '#attributes': { class: 'h-[200px] lg:h-[300px] w-[270px] rounded-md lg:translate-y-[-30px] transition-all object-cover' },
                    } %}
                    {{ imagestyle }}
                </div>
                <div class=\"w-[60%] py-8 px-3\">
                    <div>
                    <h1 class=\"text-xl font-medium mb-6\">{{node._entity.getTranslation(langCode).title.value}}</h1>
                    </div>
                    <div style=\"overflow: hidden; display: -webkit-box;-webkit-line-clamp: 2;-webkit-box-orient: vertical;\">{{node._entity.getTranslation(langCode).field_intro_edu.value | raw}}</div>
                    <button class=\"hidden btn-more relative mt-14 h-[42px] bg-[#bfbfbf] text-white lg:flex items-center font-medium rounded-full pb-[7px] pt-[3px] pl-[13px] pr-[18px] text-2xl bg-[transparent] after:content-[''] after:absolute after:top-0 after:left-0 after:bottom-0 after:block after:w-[42px] after:bg-[#bfbfbf] after:rounded-full after:transition-all\"><span class=\"z-10\">+ <span class=\"btn-more-span text-base translate-x-[3px] translate-y-[-2px] inline-block transition-all opacity-0 invisible\">
                    {% if langCode == \"vi\" %}
                                Xem thêm
                            {% else %}
                                Read More
                            {% endif %}
                    </span></span></button>
                </div>
                </div>
            </a>
        {% endfor %}
  </div>
</div>
", "modules/custom/custom_view_our_programs/templates/views-custom-view-our-programs.html.twig", "C:\\Users\\Admin\\Desktop\\New folder\\saigon-academy\\web\\modules\\custom\\custom_view_our_programs\\templates\\views-custom-view-our-programs.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 3, "set" => 4, "if" => 24);
        static $filters = array("escape" => 6, "raw" => 22);
        static $functions = array("url" => 6);

        try {
            $this->sandbox->checkSecurity(
                ['for', 'set', 'if'],
                ['escape', 'raw'],
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
