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

/* themes/gmx/templates/layout/page--node--15.html.twig */
class __TwigTemplate_258723752deba1017ee23d266c4c3eb0baf3f6d9a33b402b7211efea2d2898b8 extends \Twig\Template
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

<!--- Start content -->
    <div class=\"container-fluid contenido \">
      <div class=\"row\">
        <div class=\"container\">
          <div class=\"col-md-12\">
            <div class=\"contenidorow\">
                  ";
        // line 35
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "messages", [])), "html", null, true);
        echo "
                  ";
        // line 36
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "contactotitle", [])), "html", null, true);
        echo "
              <div class=\"container-fluid\">
                <div class=\"row\">
                      <div class=\"col-md-8\">
                          ";
        // line 40
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "contactoform", [])), "html", null, true);
        echo "
                      </div>
                      <div class=\"col-md-4\">
                          ";
        // line 43
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "contacto", [])), "html", null, true);
        echo "
                      </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
<!---End content -->

      <!--- Start Equipo -->
      ";
        // line 55
        if ($this->getAttribute(($context["page"] ?? null), "equipo", [])) {
            // line 56
            echo "        <div class=\"container-fluid equipo \">
          <div class=\"row\">
            <div class=\"container\">
              <div class=\"col-md-12\">
                <div class=\"equiporow\">
                 ";
            // line 61
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "balleta", [])), "html", null, true);
            echo "
                </div>
              </div>
            </div>
          </div>
        </div>
      ";
        }
        // line 68
        echo "      <!---End Equipo -->

      <!--- Start Tienda -->
      ";
        // line 71
        if ($this->getAttribute(($context["page"] ?? null), "tienda", [])) {
            // line 72
            echo "        <div class=\"container-fluid tienda box\">
          <div class=\"row\">
            <div class=\"col-md-12\">
                ";
            // line 75
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "tienda", [])), "html", null, true);
            echo "
            </div>
          </div>
        </div>
      ";
        }
        // line 80
        echo "      <!---End Tienda -->

      <!--- Start Galería -->
      ";
        // line 83
        if ($this->getAttribute(($context["page"] ?? null), "galeria", [])) {
            // line 84
            echo "        <div class=\"container-fluid galeria box\">
          <div class=\"row\">
            <div class=\"col-md-8 col-md-offset-2\">
                ";
            // line 87
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "galeria", [])), "html", null, true);
            echo "
            </div>
          </div>
        </div>
      ";
        }
        // line 92
        echo "      <!---End Galería -->


<!--Start: Footer -->
  <div class=\"footer\">
    <div class=\"container\">
        <div class=\"col-md-12\">
            <div class=\"logogobierno\">
              ";
        // line 100
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "logogobierno", [])), "html", null, true);
        echo "
            </div>
            <div>
              ";
        // line 103
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
        return "themes/gmx/templates/layout/page--node--15.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  214 => 103,  208 => 100,  198 => 92,  190 => 87,  185 => 84,  183 => 83,  178 => 80,  170 => 75,  165 => 72,  163 => 71,  158 => 68,  148 => 61,  141 => 56,  139 => 55,  124 => 43,  118 => 40,  111 => 36,  107 => 35,  92 => 22,  86 => 19,  83 => 18,  81 => 17,  78 => 16,  72 => 13,  69 => 12,  67 => 11,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/gmx/templates/layout/page--node--15.html.twig", "/Users/translector/balletconsciente/ballet/themes/gmx/templates/layout/page--node--15.html.twig");
    }
}
