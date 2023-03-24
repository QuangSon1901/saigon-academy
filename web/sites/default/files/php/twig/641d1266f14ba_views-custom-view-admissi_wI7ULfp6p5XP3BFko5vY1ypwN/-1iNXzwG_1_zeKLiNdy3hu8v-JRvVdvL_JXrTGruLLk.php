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

/* modules/custom/custom_view_admissions/templates/views-custom-view-admissions.html.twig */
class __TwigTemplate_e0e4ffd8808da40706bd4a36e711c587 extends Template
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
  <div class=\"grid grid-cols-1 xl:grid-cols-2 gap-8\">
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
            echo "\"  class=\"box-shadow-style cursor-pointer admissions-item\">
                <div>
                    <div class=\"float-left relative\">
                        ";
            // line 9
            $context["imagestyle"] = ["#theme" => "image_style", "#style_name" => "convert_to_web", "#uri" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 12
($context["node"] ?? null), "_entity", [], "any", false, false, true, 12), "field_image_admissions", [], "any", false, false, true, 12), "entity", [], "any", false, false, true, 12), "fileuri", [], "any", false, false, true, 12), "#alt" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 13
($context["node"] ?? null), "_entity", [], "any", false, false, true, 13), "field_image_admissions", [], "any", false, false, true, 13), "alt", [], "any", false, false, true, 13), "#attributes" => ["class" => "h-[260px] w-[410px] rounded-md object-cover"]];
            // line 16
            echo "                        ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["imagestyle"] ?? null), 16, $this->source), "html", null, true);
            echo "
                        <div class=\"absolute inset-0 bg-black opacity-50 rounded-md flex items-center justify-center transition-cubic-style\">
                            <div class=\"p-3 rounded-full border-2 border-thirst\">
                                <svg class=\"svg-icon\" style=\"width: 1.4rem; height: 1.4rem;vertical-align: middle;fill: #ffffff;overflow: hidden;\" viewBox=\"0 0 1025 1024\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M333.06186 733.061768c-58.347896 52.210106-97.040127 49.051159-136.467091 9.492188l-45.156456-48.462758c-39.427988-39.541575-39.427988-103.667058 0-143.226029l193.260585-193.848986c39.426965-39.558971 103.355973-39.558971 142.78396 0l35.679617 35.794228c30.457686 30.555923 37.398772 75.762521 20.801768 112.997564l86.286202 66.040089c59.149145-59.33027 59.149145-155.517983 0-214.830857L523.162476 249.600755c-59.133795-59.33027-155.010423-59.33027-214.160591 0L44.350342 515.071965c-59.133795 59.313897-59.133795 155.50161 0 214.830857l107.08797 107.415428c59.133795 59.313897 155.026796 59.313897 214.176964 0l102.161774-105.647155-72.980151-70.034053L333.06186 733.061768zM987.196021 285.394982 880.1234 177.979554c-59.149145-59.33027-155.026796-59.33027-214.176964 0 0 0 4.223185-1.064238-57.988716 61.343113l71.113641 68.167542 31.604812-34.877345c39.427988-39.541575 103.356996-39.541575 142.78396 0l35.69599 35.8106c39.427988 39.541575 39.427988 103.667058 0 143.226029L714.818517 632.847345c-39.427988 39.541575-103.340623 39.541575-142.768611 0l-29.395494-48.462758c-61.883419-46.25344-42.865273-57.317427-37.611619-88.544639L426.548044 418.130076c-59.150168 59.33027-59.150168 155.517983 0 214.830857l107.072621 107.432825c59.149145 59.312874 155.026796 59.312874 214.176964 0l239.398392-240.166895C1071.582967 402.924769 987.196021 285.394982 987.196021 285.394982z\"  /></svg>
                            </div>
                        </div>
                    </div>
                    <div class=\"p-5 overflow-hidden\">
                        <div>
                            <h1 class=\"text-xl font-medium mb-6\">";
            // line 25
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "_entity", [], "any", false, false, true, 25), "getTranslation", [0 => ($context["langCode"] ?? null)], "method", false, false, true, 25), "title", [], "any", false, false, true, 25), "value", [], "any", false, false, true, 25), 25, $this->source), "html", null, true);
            echo "</h1>
                        </div>
                        <span class=\"text-textColor font-medium flex items-center\">
                            <svg class=\"svg-icon mr-2\" style=\"width: 1rem; height: 1rem;vertical-align: middle;fill: #FDC800;overflow: hidden;\" viewBox=\"0 0 1024 1024\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M25.554944 971.99616c0 22.55872 27.7504 51.110912 51.110912 51.110912l868.87936 0c23.358464 0 51.110912-28.552192 51.110912-51.110912l0-664.41216L25.554944 307.584 25.554944 971.99616zM383.32928 460.915712l306.663424 0 0 102.196224L536.660992 920.860672l-102.221824 0L587.77088 563.111936 383.32928 563.111936 383.32928 460.915712zM945.545216 103.141376 792.213504 103.141376l0-102.247424-102.221824 0L689.99168 103.141376 332.218368 103.141376l0-102.247424-102.2208 0L229.997568 103.141376 76.665856 103.141376c-23.360512 0-51.110912 28.548096-51.110912 51.08224l0 102.224896 971.101184 0 0-92.015616C996.656128 141.923328 983.277568 103.141376 945.545216 103.141376z\"  /></svg>
                            ";
            // line 29
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "_entity", [], "any", false, false, true, 29), "field_admission_date_start", [], "any", false, false, true, 29), "value", [], "any", false, false, true, 29), 29, $this->source), "d-m-Y"), "html", null, true);
            echo "
                        </span>
                        <div style=\"display: -webkit-box;-webkit-line-clamp: 2;-webkit-box-orient: vertical;\" class=\"text-black overflow-hidden font-normal\">";
            // line 31
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "_entity", [], "any", false, false, true, 31), "getTranslation", [0 => ($context["langCode"] ?? null)], "method", false, false, true, 31), "field_intro", [], "any", false, false, true, 31), "value", [], "any", false, false, true, 31), 31, $this->source), "html", null, true);
            echo "</div>
                        <button class=\"relative mt-3 h-[42px] text-white flex items-center font-medium rounded-full p-[13px] bg-primary\">
                            ";
            // line 33
            if ((($context["langCode"] ?? null) == "vi")) {
                // line 34
                echo "                                Đăng ký ngay
                            ";
            } else {
                // line 36
                echo "                                Register now
                            ";
            }
            // line 38
            echo "                        </button>
                    </div>
                </div>
            </a>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "modules/custom/custom_view_admissions/templates/views-custom-view-admissions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 43,  104 => 38,  100 => 36,  96 => 34,  94 => 33,  89 => 31,  84 => 29,  77 => 25,  64 => 16,  62 => 13,  61 => 12,  60 => 9,  53 => 6,  50 => 5,  47 => 4,  43 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/custom/custom_view_admissions/templates/views-custom-view-admissions.html.twig", "C:\\Users\\Admin\\Desktop\\New folder\\saigon-academy\\web\\modules\\custom\\custom_view_admissions\\templates\\views-custom-view-admissions.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 3, "set" => 4, "if" => 33);
        static $filters = array("escape" => 6, "date" => 29);
        static $functions = array("url" => 6);

        try {
            $this->sandbox->checkSecurity(
                ['for', 'set', 'if'],
                ['escape', 'date'],
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
