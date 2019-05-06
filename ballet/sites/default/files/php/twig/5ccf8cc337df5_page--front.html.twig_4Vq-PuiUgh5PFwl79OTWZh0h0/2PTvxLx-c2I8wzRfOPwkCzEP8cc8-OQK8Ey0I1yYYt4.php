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

/* themes/gmx/templates/layout/page--front.html.twig */
class __TwigTemplate_8229df8620bacb03b3465ad08406e2887abda92278be41b29ac2866f4af1cea7 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 11];
        $filters = ["escape" => 13];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
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
        echo "<div id=\"page-wrapper\">
  <div id=\"page\">


  <!--Start: Branding and Menu -->
<div id=\"stick\">
  <div class=\"menu\">
    <div class=\"container\">
      <div class=\"row\">
       <div class=\"branding\">
        ";
        // line 11
        if ($this->getAttribute(($context["page"] ?? null), "header", [])) {
            // line 12
            echo "          <div class=\"col-xs-6 col-md-3\">
            ";
            // line 13
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header", [])), "html", null, true);
            echo "
          </div>
        ";
        }
        // line 16
        echo "        <!-- Navigation -->
        ";
        // line 17
        if ($this->getAttribute(($context["page"] ?? null), "menu", [])) {
            // line 18
            echo "          <div class=\"col-xs-6 col-md-9\">
            ";
            // line 19
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "menu", [])), "html", null, true);
            echo " 
          </div>
        ";
        }
        // line 22
        echo "        <!--End Navigation -->
       </div>
      </div>
    </div>
  </div>
</div>

      <!--- Start Slider -->
      ";
        // line 30
        if ($this->getAttribute(($context["page"] ?? null), "slider", [])) {
            // line 31
            echo "        <div class=\"container-fluid sliderbg\">
          <div class=\"row\">
            <div class=\"container\">
              <div class=\"col-md-12\">
                <div class=\"sliderbgrow\">
                 ";
            // line 36
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "slider", [])), "html", null, true);
            echo "
                </div>
              </div>
            </div>
          </div>
        </div>
      ";
        }
        // line 43
        echo "      <!---End Slider -->

      <!--- Start Proyecto -->
      ";
        // line 46
        if ($this->getAttribute(($context["page"] ?? null), "proyecto", [])) {
            // line 47
            echo "        <div class=\"container-fluid proyecto\">
          <div class=\"row\">
            <div class=\"container\">
              <div class=\"col-md-12\">
                <div class=\"proyectorow\">
                  ";
            // line 52
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "messages", [])), "html", null, true);
            echo "
                  ";
            // line 53
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "proyecto", [])), "html", null, true);
            echo "
                </div>
              </div>
            </div>
          </div>
        </div>
      ";
        }
        // line 60
        echo "      <!---End Proyecto -->

      <!--- Start Equipo -->
      ";
        // line 63
        if ($this->getAttribute(($context["page"] ?? null), "equipo", [])) {
            // line 64
            echo "        <div class=\"container-fluid equipo \">
          <div class=\"row\">
            <div class=\"container\">
              <div class=\"col-md-12\">
                <div class=\"equiporow\">
                 ";
            // line 69
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "balleta", [])), "html", null, true);
            echo "
                </div>
              </div>
            </div>
          </div>
        </div>
      ";
        }
        // line 76
        echo "      <!---End Equipo -->

      <!--- Start Tienda -->
      ";
        // line 79
        if ($this->getAttribute(($context["page"] ?? null), "tienda", [])) {
            // line 80
            echo "        <div class=\"container-fluid tienda box\">
          <div class=\"row\">
            <div class=\"col-md-12\">
                ";
            // line 83
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "tienda", [])), "html", null, true);
            echo "
            </div>
          </div>
        </div>
      ";
        }
        // line 88
        echo "      <!---End Tienda -->

      <!--- Start Galería -->
      ";
        // line 91
        if ($this->getAttribute(($context["page"] ?? null), "galeria", [])) {
            // line 92
            echo "        <div class=\"container-fluid galeria box\">
          <div class=\"row\">
            <div class=\"col-md-8 col-md-offset-2\">
                ";
            // line 95
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "galeria", [])), "html", null, true);
            echo "
            </div>
          </div>
        </div>
      ";
        }
        // line 100
        echo "      <!---End Galería -->

<!--Start: Footer -->
  <div class=\"footer\">
    <div class=\"container\">
        <div class=\"col-md-12\">
            <div class=\"logogobierno\">
              ";
        // line 107
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "logogobierno", [])), "html", null, true);
        echo "
            </div>
            <div>
              ";
        // line 110
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footera", [])), "html", null, true);
        echo "
            </div>
            <div class=\"social\">
                <ul class=\"social\">
\t\t\t\t\t\t\t\t\t<li><a href=\"https://facebook.com/balletconsciente/\" class=\"icon fa-facebook\"><span></span></a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"https://www.instagram.com/balletconsciente/\" class=\"icon fa-instagram\"><span>Twitter</span></a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<a href=\"https://jasnapardo.cl/diseno\">Diseño Albumina Estudio</a>
            </div>
        </div>
    </div>
  </div>
<!--End: Footer -->

  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "themes/gmx/templates/layout/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  228 => 110,  222 => 107,  213 => 100,  205 => 95,  200 => 92,  198 => 91,  193 => 88,  185 => 83,  180 => 80,  178 => 79,  173 => 76,  163 => 69,  156 => 64,  154 => 63,  149 => 60,  139 => 53,  135 => 52,  128 => 47,  126 => 46,  121 => 43,  111 => 36,  104 => 31,  102 => 30,  92 => 22,  86 => 19,  83 => 18,  81 => 17,  78 => 16,  72 => 13,  69 => 12,  67 => 11,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/gmx/templates/layout/page--front.html.twig", "/Users/translector/balletconsciente/ballet/themes/gmx/templates/layout/page--front.html.twig");
    }
}
