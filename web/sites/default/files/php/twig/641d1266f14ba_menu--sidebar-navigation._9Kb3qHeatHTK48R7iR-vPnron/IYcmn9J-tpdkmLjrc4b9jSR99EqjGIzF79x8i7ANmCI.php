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

/* themes/custom_theme/templates/system/navigation/menu--sidebar-navigation.html.twig */
class __TwigTemplate_9a1f431b5e89fc288f0cc88be9fce065 extends Template
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
        echo "<div id=\"sidebar-menu\" class=\"sidebar fixed top-0 bottom-0 left-[-100%] invisible px-3 w-[300px] overflow-y-auto text-center bg-white z-40 transition-all\">
    <div class=\"h-[100px] border-b border-bSame flex items-center mb-2\">
        <a href=\"/\" rel=\"home\" class=\"site-logo\">
            <img src=\"/themes/custom_theme/logo.svg\" alt=\"Home\">
        </a>
    </div>
    ";
        // line 33
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [($context["items"] ?? null), ($context["attributes"] ?? null), 0], 33, $context, $this->getSourceContext()));
        echo "
    
    ";
        // line 69
        echo "</div>
<div id=\"overlay-sidebar\" class=\"fixed inset-0 bg-black opacity-0 invisible z-30 transition-all\"></div>";
    }

    // line 35
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

        ob_start(function () { return ''; });
        try {
            // line 36
            echo "    ";
            $macros["menus"] = $this;
            // line 37
            echo "    ";
            if (($context["items"] ?? null)) {
                // line 38
                echo "    ";
                if ((($context["menu_level"] ?? null) == 0)) {
                    // line 39
                    echo "    <ul";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => "menu !ml-0 space-y-2"], "method", false, false, true, 39), 39, $this->source), "html", null, true);
                    echo ">
    ";
                } else {
                    // line 41
                    echo "    <ul class=\"menu space-y-2\">
        ";
                }
                // line 43
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 44
                    echo "            ";
                    // line 45
                    $context["classes"] = [0 => "menu-item !list-none", 1 => ((twig_get_attribute($this->env, $this->source,                     // line 47
$context["item"], "is_expanded", [], "any", false, false, true, 47)) ? ("menu-item--expanded") : ("")), 2 => ((twig_get_attribute($this->env, $this->source,                     // line 48
$context["item"], "is_collapsed", [], "any", false, false, true, 48)) ? ("menu-item--collapsed") : ("")), 3 => ((twig_get_attribute($this->env, $this->source,                     // line 49
$context["item"], "in_active_trail", [], "any", false, false, true, 49)) ? ("menu-item--active-trail") : (""))];
                    // line 52
                    echo "            ";
                    // line 53
                    $context["linkClasses"] = [0 => "block py-3 px-4 flex items-center text-base font-medium rounded hover:bg-primary hover:text-white transition-all relative", 1 => ((twig_get_attribute($this->env, $this->source,                     // line 55
$context["item"], "is_collapsed", [], "any", false, false, true, 55)) ? ("pointer-events-none cursor-pointer") : ("")), 2 => ((twig_get_attribute($this->env, $this->source,                     // line 56
$context["item"], "is_expanded", [], "any", false, false, true, 56)) ? ("pointer-events-none cursor-pointer") : (""))];
                    // line 59
                    echo "            <li";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 59), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 59), 59, $this->source), "html", null, true);
                    echo ">
                ";
                    // line 60
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 60), 60, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 60), 60, $this->source), ["class" => ($context["linkClasses"] ?? null)]), "html", null, true);
                    echo "
                ";
                    // line 61
                    if (twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 61)) {
                        // line 62
                        echo "                ";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 62), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1)], 62, $context, $this->getSourceContext()));
                        echo "
                ";
                    }
                    // line 64
                    echo "            </li>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 66
                echo "    </ul>
    ";
            }
            // line 68
            echo "    ";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "themes/custom_theme/templates/system/navigation/menu--sidebar-navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 68,  138 => 66,  131 => 64,  125 => 62,  123 => 61,  119 => 60,  114 => 59,  112 => 56,  111 => 55,  110 => 53,  108 => 52,  106 => 49,  105 => 48,  104 => 47,  103 => 45,  101 => 44,  96 => 43,  92 => 41,  86 => 39,  83 => 38,  80 => 37,  77 => 36,  62 => 35,  57 => 69,  52 => 33,  44 => 27,  41 => 22,  39 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom_theme/templates/system/navigation/menu--sidebar-navigation.html.twig", "C:\\Users\\Admin\\Desktop\\New folder\\saigon-academy\\web\\themes\\custom_theme\\templates\\system\\navigation\\menu--sidebar-navigation.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("import" => 21, "macro" => 35, "if" => 37, "for" => 43, "set" => 45);
        static $filters = array("escape" => 39);
        static $functions = array("link" => 60);

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
