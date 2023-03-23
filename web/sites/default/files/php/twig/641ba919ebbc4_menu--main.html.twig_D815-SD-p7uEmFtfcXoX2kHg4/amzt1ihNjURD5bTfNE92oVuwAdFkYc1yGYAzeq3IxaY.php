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

/* themes/custom_theme/templates/system/navigation/menu--main.html.twig */
class __TwigTemplate_19f1db7e927c944766e57eed0c0fdea6 extends Template
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
        // line 21
        $macros["menus"] = $this->macros["menus"] = $this;
        // line 22
        echo "
";
        // line 27
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [($context["items"] ?? null), ($context["attributes"] ?? null), 0], 27, $context, $this->getSourceContext()));
        echo "

";
    }

    // line 29
    public function macro_menu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 30
            echo "  ";
            $macros["menus"] = $this;
            // line 31
            echo "  ";
            if (($context["items"] ?? null)) {
                // line 32
                echo "    ";
                if ((($context["menu_level"] ?? null) == 0)) {
                    // line 33
                    echo "      <ul";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => "hidden menu xl:flex items-center !list-none space-x-6 h-full"], "method", false, false, true, 33), 33, $this->source), "html", null, true);
                    echo ">
    ";
                } else {
                    // line 35
                    echo "      <ul class=\"menu flex !list-none flex-col z-10 absolute w-max !ml-0 bg-primary text-secondary !p-[6px] rounded-md text-[18px] top-[120%] opacity-0 invisible transition-all\">
    ";
                }
                // line 37
                echo "    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 38
                    echo "      ";
                    // line 39
                    $context["classes"] = [0 => "menu-item !list-none text-lg font-normal h-full relative menu-collapse", 1 => ((twig_get_attribute($this->env, $this->source,                     // line 41
$context["item"], "is_expanded", [], "any", false, false, true, 41)) ? ("menu-item--expanded pr-[20px]") : ("")), 2 => ((twig_get_attribute($this->env, $this->source,                     // line 42
$context["item"], "is_collapsed", [], "any", false, false, true, 42)) ? ("menu-item--collapsed pr-[20px]") : ("")), 3 => ((twig_get_attribute($this->env, $this->source,                     // line 43
$context["item"], "in_active_trail", [], "any", false, false, true, 43)) ? ("menu-item--active-trail") : (""))];
                    // line 46
                    echo "      <li";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 46), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 46), 46, $this->source), "html", null, true);
                    echo ">
        ";
                    // line 48
                    $context["linkClasses"] = [0 => "block px-2 py-1 h-full flex items-center", 1 => (((                    // line 50
($context["menu_level"] ?? null) == 0)) ? ("justify-center after:absolute after:flex after:h-1 after:w-0 after:bg-primary after:bottom-0 hover:after:w-full after:transition-all after:duration-300 after:ease") : ("hover:text-secondary hover:bg-hover transition-all !text-white !inline-block !w-full")), 2 => ((twig_get_attribute($this->env, $this->source,                     // line 51
$context["item"], "is_collapsed", [], "any", false, false, true, 51)) ? ("pointer-events-none cursor-pointer") : ("")), 3 => ((twig_get_attribute($this->env, $this->source,                     // line 52
$context["item"], "is_expanded", [], "any", false, false, true, 52)) ? ("pointer-events-none cursor-pointer") : ("")), 4 => ((twig_get_attribute($this->env, $this->source,                     // line 53
$context["item"], "in_active_trail", [], "any", false, false, true, 53)) ? ("after:!w-full !text-primary") : (""))];
                    // line 56
                    echo "        ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 56), 56, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 56), 56, $this->source), ["class" => ($context["linkClasses"] ?? null)]), "html", null, true);
                    echo "
        ";
                    // line 57
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((twig_get_attribute($this->env, $this->source, $context["item"], "is_collapsed", [], "any", false, false, true, 57) || twig_get_attribute($this->env, $this->source, $context["item"], "is_expanded", [], "any", false, false, true, 57))) ? ("<div class=\"absolute top-[50%] translate-y-[-35%] right-[6px] \"><svg viewBox=\"0 0 330 512\" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" width=\"1em\" height=\"1em\"><path d=\"M305.913 197.085c0 2.266-1.133 4.815-2.833 6.514L171.087 335.593c-1.7 1.7-4.249 2.832-6.515 2.832s-4.815-1.133-6.515-2.832L26.064 203.599c-1.7-1.7-2.832-4.248-2.832-6.514s1.132-4.816 2.832-6.515l14.162-14.163c1.7-1.699 3.966-2.832 6.515-2.832 2.266 0 4.815 1.133 6.515 2.832l111.316 111.317 111.316-111.317c1.7-1.699 4.249-2.832 6.515-2.832s4.815 1.133 6.515 2.832l14.162 14.163c1.7 1.7 2.833 4.249 2.833 6.515z\"></path></svg></div>") : ("")));
                    echo "
        ";
                    // line 58
                    if (twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 58)) {
                        // line 59
                        echo "          ";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 59), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1)], 59, $context, $this->getSourceContext()));
                        echo "
        ";
                    }
                    // line 61
                    echo "      </li>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 63
                echo "    </ul>
  ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "themes/custom_theme/templates/system/navigation/menu--main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 63,  125 => 61,  119 => 59,  117 => 58,  113 => 57,  108 => 56,  106 => 53,  105 => 52,  104 => 51,  103 => 50,  102 => 48,  97 => 46,  95 => 43,  94 => 42,  93 => 41,  92 => 39,  90 => 38,  85 => 37,  81 => 35,  75 => 33,  72 => 32,  69 => 31,  66 => 30,  51 => 29,  44 => 27,  41 => 22,  39 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override to display a menu.
 *
 * Available variables:
 * - menu_name: The machine name of the menu.
 * - items: A nested list of menu items. Each menu item contains:
 *   - attributes: HTML attributes for the menu item.
 *   - below: The menu item child items.
 *   - title: The menu link title.
 *   - url: The menu link url, instance of \\Drupal\\Core\\Url
 *   - localized_options: Menu link localized options.
 *   - is_expanded: TRUE if the link has visible children within the current
 *     menu tree.
 *   - is_collapsed: TRUE if the link has children within the current menu tree
 *     that are not currently visible.
 *   - in_active_trail: TRUE if the link is in the active trail.
 */
#}
{% import _self as menus %}

{#
  We call a macro which calls itself to render the full tree.
  @see https://twig.symfony.com/doc/3.x/tags/macro.html
#}
{{ menus.menu_links(items, attributes, 0) }}

{% macro menu_links(items, attributes, menu_level) %}
  {% import _self as menus %}
  {% if items %}
    {% if menu_level == 0 %}
      <ul{{ attributes.addClass('hidden menu xl:flex items-center !list-none space-x-6 h-full') }}>
    {% else %}
      <ul class=\"menu flex !list-none flex-col z-10 absolute w-max !ml-0 bg-primary text-secondary !p-[6px] rounded-md text-[18px] top-[120%] opacity-0 invisible transition-all\">
    {% endif %}
    {% for item in items %}
      {%
        set classes = [
          'menu-item !list-none text-lg font-normal h-full relative menu-collapse',
          item.is_expanded ? 'menu-item--expanded pr-[20px]',
          item.is_collapsed ? 'menu-item--collapsed pr-[20px]',
          item.in_active_trail ? 'menu-item--active-trail',
        ]
      %}
      <li{{ item.attributes.addClass(classes) }}>
        {%
          set linkClasses = [
            'block px-2 py-1 h-full flex items-center',
            menu_level == 0 ? 'justify-center after:absolute after:flex after:h-1 after:w-0 after:bg-primary after:bottom-0 hover:after:w-full after:transition-all after:duration-300 after:ease' : 'hover:text-secondary hover:bg-hover transition-all !text-white !inline-block !w-full',
            item.is_collapsed ? 'pointer-events-none cursor-pointer',
            item.is_expanded ? 'pointer-events-none cursor-pointer',
            item.in_active_trail ? 'after:!w-full !text-primary',
          ]
        %}
        {{ link(item.title, item.url, { 'class':linkClasses }) }}
        {{ item.is_collapsed or item.is_expanded ? '<div class=\"absolute top-[50%] translate-y-[-35%] right-[6px] \"><svg viewBox=\"0 0 330 512\" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" width=\"1em\" height=\"1em\"><path d=\"M305.913 197.085c0 2.266-1.133 4.815-2.833 6.514L171.087 335.593c-1.7 1.7-4.249 2.832-6.515 2.832s-4.815-1.133-6.515-2.832L26.064 203.599c-1.7-1.7-2.832-4.248-2.832-6.514s1.132-4.816 2.832-6.515l14.162-14.163c1.7-1.699 3.966-2.832 6.515-2.832 2.266 0 4.815 1.133 6.515 2.832l111.316 111.317 111.316-111.317c1.7-1.699 4.249-2.832 6.515-2.832s4.815 1.133 6.515 2.832l14.162 14.163c1.7 1.7 2.833 4.249 2.833 6.515z\"></path></svg></div>' }}
        {% if item.below %}
          {{ menus.menu_links(item.below, attributes, menu_level + 1) }}
        {% endif %}
      </li>
    {% endfor %}
    </ul>
  {% endif %}
{% endmacro %}
", "themes/custom_theme/templates/system/navigation/menu--main.html.twig", "C:\\Users\\Admin\\Desktop\\New folder\\saigon-academy\\web\\themes\\custom_theme\\templates\\system\\navigation\\menu--main.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("import" => 21, "macro" => 29, "if" => 31, "for" => 37, "set" => 39);
        static $filters = array("escape" => 33);
        static $functions = array("link" => 56);

        try {
            $this->sandbox->checkSecurity(
                ['import', 'macro', 'if', 'for', 'set'],
                ['escape'],
                ['link']
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
