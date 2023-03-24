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

<<<<<<<< HEAD:web/sites/default/files/php/twig/641d0d13d9d21_menu-local-action.html.tw_7MwhouTRzQrJSQyx-F3B9tk44/0eVVvBAga4z37Mz1xGIxlCfnIz8_DIAW1K1Eiyu1u2U.php
/* core/modules/system/templates/menu-local-action.html.twig */
class __TwigTemplate_87991b8f3c22348a31b411fe33307ed8 extends Template
========
/* themes/custom_theme/templates/classy/field/time.html.twig */
class __TwigTemplate_401f47a558c465783e58ee353b18b0c1 extends Template
>>>>>>>> fix_bug:web/sites/default/files/php/twig/641d1266f14ba_time.html.twig_M8OZbfudkiURPjKRXmogObcTf/M0T3qtMZDso2uXRNmwAKHZcdWB57-QsfJvQVrv5gSos.php
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
        // line 22
        echo "<time";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => "datetime"], "method", false, false, true, 22), 22, $this->source), "html", null, true);
        echo ">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["text"] ?? null), 22, $this->source), "html", null, true);
        echo "</time>
";
    }

    public function getTemplateName()
    {
        return "themes/custom_theme/templates/classy/field/time.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 22,);
    }

    public function getSourceContext()
    {
<<<<<<<< HEAD:web/sites/default/files/php/twig/641d0d13d9d21_menu-local-action.html.tw_7MwhouTRzQrJSQyx-F3B9tk44/0eVVvBAga4z37Mz1xGIxlCfnIz8_DIAW1K1Eiyu1u2U.php
        return new Source("", "core/modules/system/templates/menu-local-action.html.twig", "C:\\Users\\Admin\\Desktop\\New folder\\saigon-academy\\web\\core\\modules\\system\\templates\\menu-local-action.html.twig");
========
        return new Source("", "themes/custom_theme/templates/classy/field/time.html.twig", "C:\\Users\\Admin\\Desktop\\New folder\\saigon-academy\\web\\themes\\custom_theme\\templates\\classy\\field\\time.html.twig");
>>>>>>>> fix_bug:web/sites/default/files/php/twig/641d1266f14ba_time.html.twig_M8OZbfudkiURPjKRXmogObcTf/M0T3qtMZDso2uXRNmwAKHZcdWB57-QsfJvQVrv5gSos.php
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 22);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
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
