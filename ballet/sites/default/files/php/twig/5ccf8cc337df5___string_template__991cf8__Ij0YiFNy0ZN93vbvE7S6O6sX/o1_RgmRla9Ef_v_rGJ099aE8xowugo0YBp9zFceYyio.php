<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* __string_template__991cf826f24bfb016e2e9a10f436b7a05187abc906f014c2590c1c7d57e6ad3b */
class __TwigTemplate_869699885ee21b3ca909961f6d92755b9ddb3cb27ac478f4597596d690ea874d extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = [];
        $filters = ["escape" => 4];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

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

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<div class=\"container-fluid\">
   <div class=\"row\">
        <strong>Dirección</strong><br />
        ";
        // line 4
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_direccion"] ?? null)), "html", null, true);
        echo "<br />
        <strong>Correo electrónico</strong><br />
        ";
        // line 6
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_correo_electronico"] ?? null)), "html", null, true);
        echo "<br />
   </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "__string_template__991cf826f24bfb016e2e9a10f436b7a05187abc906f014c2590c1c7d57e6ad3b";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 6,  60 => 4,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__991cf826f24bfb016e2e9a10f436b7a05187abc906f014c2590c1c7d57e6ad3b", "");
    }
}
