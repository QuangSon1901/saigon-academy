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

/* modules/custom/custom_slide/templates/views-custom-slide.html.twig */
class __TwigTemplate_674b71c184d6a775d5deb427a438832b extends Template
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
        echo "<div class=\"relative\">
    <button type=\"button\" class=\"custom-prev\" aria-label=\"button-prev\"><svg viewBox=\"-2 -2 12 16\" ư style=\"position:absolute;top:0;left:0;width:100%;height:100%;\">
            <path d=\"M5 2 L6 2 L3 6 L6 10 L5 10 L2 6 Z\" fill=\"#fff\"></path>
        </svg></button>
    <button type=\"button\" class=\"custom-next\" aria-label=\"button-next\"><svg viewBox=\"-2 -2 12 16\" style=\"position:absolute;top:0;left:0;width:100%;height:100%;\">
            <path d=\"M3 2 L2 2 L5 6 L2 10 L3 10 L6 6 Z\" fill=\"#fff\"></path>
        </svg></button>
    <div class=\"single-item\">
        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 10
            echo "            <div class=\"\">
                ";
            // line 11
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["row"], 11, $this->source), "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "modules/custom/custom_slide/templates/views-custom-slide.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 14,  56 => 11,  53 => 10,  49 => 9,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/custom/custom_slide/templates/views-custom-slide.html.twig", "D:\\Studying\\Laravel\\www\\saigon-academy\\web\\modules\\custom\\custom_slide\\templates\\views-custom-slide.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 9);
        static $filters = array("escape" => 11);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for'],
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
