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

/* themes/contrib/star_zymphonies_theme/templates/layout/page.html.twig */
class __TwigTemplate_b07970f399f6a32ce56996f49e90e2b8fb8e69c620dc2fb4cdf92961627b895d extends \Twig\Template
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
        // line 60
        echo "

<div class=\"header\">
  <div class=\"container\">
    <div class=\"row\">

      <!-- Start: Header -->
      <div class=\"navbar-header col-md-3\">
        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#main-navigation\">
          <i class=\"fas fa-bars\"></i>
        </button>
        ";
        // line 71
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 71)) {
            // line 72
            echo "          ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 72), 72, $this->source), "html", null, true);
            echo "
        ";
        }
        // line 74
        echo "      </div>
      <!-- End: Header -->

      ";
        // line 77
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 77)) {
            // line 78
            echo "        <div class=\"col-md-9\">
          ";
            // line 79
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 79)) {
                // line 80
                echo "            ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 80), 80, $this->source), "html", null, true);
                echo "
          ";
            }
            // line 82
            echo "        </div>
      ";
        }
        // line 84
        echo "
      </div>

    </div>
  </div>
</div>


";
        // line 92
        if ((($context["is_front"] ?? null) && ($context["show_slideshow"] ?? null))) {
            // line 93
            echo "  <div class=\"container-\">
    <div class=\"flexslider\">
      <ul class=\"slides\">
        ";
            // line 96
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["slider_content"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["slider_contents"]) {
                // line 97
                echo "          ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed($context["slider_contents"], 97, $this->source));
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slider_contents'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 99
            echo "      </ul>
    </div>
  </div>
";
        }
        // line 103
        echo "

<!-- Start: Top widget -->
";
        // line 106
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_first", [], "any", false, false, true, 106) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_second", [], "any", false, false, true, 106)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_third", [], "any", false, false, true, 106))) {
            // line 107
            echo "  <div class=\"topwidget\" id=\"topwidget\">
    <div class=\"container\">

      ";
            // line 110
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_title", [], "any", false, false, true, 110)) {
                // line 111
                echo "        <div class=\"custom-block-title\" >
          ";
                // line 112
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_title", [], "any", false, false, true, 112), 112, $this->source), "html", null, true);
                echo "
        </div>
      ";
            }
            // line 115
            echo "
        <div class=\"row topwidget-list clearfix\">

          <!-- Start: Top widget first -->
          ";
            // line 119
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_first", [], "any", false, false, true, 119)) {
                // line 120
                echo "            <div class=\"col-sm\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_first", [], "any", false, false, true, 120), 120, $this->source), "html", null, true);
                echo "</div>
          ";
            }
            // line 122
            echo "          <!-- End: Top widget first -->

          <!-- Start: Top widget second -->
          ";
            // line 125
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_second", [], "any", false, false, true, 125)) {
                // line 126
                echo "            <div class=\"col-sm\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_second", [], "any", false, false, true, 126), 126, $this->source), "html", null, true);
                echo "</div>
          ";
            }
            // line 128
            echo "          <!-- End: Top widget second -->

          <!-- Start: Top widget third -->
          ";
            // line 131
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_third", [], "any", false, false, true, 131)) {
                // line 132
                echo "            <div class=\"col-sm\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_third", [], "any", false, false, true, 132), 132, $this->source), "html", null, true);
                echo "</div>
          ";
            }
            // line 134
            echo "          <!-- End: Top widget third -->

        </div>
    </div>
  </div>
";
        }
        // line 140
        echo "<!--End: widget -->


<!--Start: Highlighted -->
";
        // line 144
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 144)) {
            // line 145
            echo "  <div class=\"highlighted\">
    <div class=\"container\">
      ";
            // line 147
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 147), 147, $this->source), "html", null, true);
            echo "
    </div>
  </div>
";
        }
        // line 151
        echo "<!--End: Highlighted -->


<!--Start: Top Message -->
";
        // line 155
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topmessage", [], "any", false, false, true, 155)) {
            // line 156
            echo "  <div class=\"top-message\">
    <div class=\"container\">
      ";
            // line 158
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topmessage", [], "any", false, false, true, 158), 158, $this->source), "html", null, true);
            echo "
    </div>
  </div>
";
        }
        // line 162
        echo "<!--End: widget -->


<!--Start: Title -->
";
        // line 166
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "page_title", [], "any", false, false, true, 166) &&  !($context["is_front"] ?? null))) {
            // line 167
            echo "  <div id=\"page-title\">
    <div id=\"page-title-inner\">
      <div class=\"container\">
        ";
            // line 170
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "page_title", [], "any", false, false, true, 170), 170, $this->source), "html", null, true);
            echo "
      </div>
    </div>
  </div>
";
        }
        // line 175
        echo "<!--End: Title -->

<div class=\"main-content\">
  <div class=\"container\">
    <div class=\"\">

      <!--Start: Breadcrumb -->
      ";
        // line 182
        if ( !($context["is_front"] ?? null)) {
            // line 183
            echo "        <div class=\"row\">
          <div class=\"col-md-12\">";
            // line 184
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 184), 184, $this->source), "html", null, true);
            echo "</div>
        </div>
      ";
        }
        // line 187
        echo "      <!--End: Breadcrumb -->

      <div class=\"row layout\">

        <!--- Start: Left SideBar -->
        ";
        // line 192
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 192)) {
            // line 193
            echo "          <div class=";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarfirst"] ?? null), 193, $this->source), "html", null, true);
            echo ">
            <div class=\"sidebar\">
              ";
            // line 195
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 195), 195, $this->source), "html", null, true);
            echo "
            </div>
          </div>
        ";
        }
        // line 199
        echo "        <!-- End Left SideBar -->

        <!--- Start Content -->
        ";
        // line 202
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 202)) {
            // line 203
            echo "          <div class=";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["contentlayout"] ?? null), 203, $this->source), "html", null, true);
            echo ">
            <div class=\"content_layout\">
              ";
            // line 205
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 205), 205, $this->source), "html", null, true);
            echo "
            </div>
          </div>
        ";
        }
        // line 209
        echo "        <!-- End: Content -->

        <!-- Start: Right SideBar -->
        ";
        // line 212
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 212)) {
            // line 213
            echo "          <div class=";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarsecond"] ?? null), 213, $this->source), "html", null, true);
            echo ">
            <div class=\"sidebar\">
              ";
            // line 215
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 215), 215, $this->source), "html", null, true);
            echo "
            </div>
          </div>
        ";
        }
        // line 219
        echo "        <!-- End: Right SideBar -->

      </div>

    </div>
  </div>
</div>
<!-- End: Main content -->


<!-- Start: Features -->
";
        // line 230
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_first", [], "any", false, false, true, 230) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_second", [], "any", false, false, true, 230)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_third", [], "any", false, false, true, 230))) {
            // line 231
            echo "  <div class=\"features\">
    <div class=\"container\">

      ";
            // line 234
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_title", [], "any", false, false, true, 234)) {
                // line 235
                echo "        <div class=\"custom-block-title\" >
          ";
                // line 236
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_title", [], "any", false, false, true, 236), 236, $this->source), "html", null, true);
                echo "
        </div>
      ";
            }
            // line 239
            echo "
      <div class=\"row\">

        ";
            // line 242
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_first", [], "any", false, false, true, 242)) {
                // line 243
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["features_first_class"] ?? null), 243, $this->source), "html", null, true);
                echo ">
            ";
                // line 244
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_first", [], "any", false, false, true, 244), 244, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 247
            echo "
        ";
            // line 248
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_second", [], "any", false, false, true, 248)) {
                // line 249
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["features_class"] ?? null), 249, $this->source), "html", null, true);
                echo ">
            ";
                // line 250
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_second", [], "any", false, false, true, 250), 250, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 253
            echo "
        ";
            // line 254
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_third", [], "any", false, false, true, 254)) {
                // line 255
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["features_class"] ?? null), 255, $this->source), "html", null, true);
                echo ">
            ";
                // line 256
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_third", [], "any", false, false, true, 256), 256, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 259
            echo "
      </div>
    </div>
  </div>
";
        }
        // line 264
        echo "<!--End: Features -->


<!-- Start: Clients -->
";
        // line 268
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "clients", [], "any", false, false, true, 268)) {
            // line 269
            echo "  <div class=\"clients\" id=\"clients\">

    ";
            // line 271
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "clients_title", [], "any", false, false, true, 271)) {
                // line 272
                echo "      <div class=\"custom-block-title\" >
        ";
                // line 273
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "clients_title", [], "any", false, false, true, 273), 273, $this->source), "html", null, true);
                echo "
      </div>
    ";
            }
            // line 276
            echo "
    <div class=\"container\">
      ";
            // line 278
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "clients", [], "any", false, false, true, 278), 278, $this->source), "html", null, true);
            echo "
    </div>
  </div>
";
        }
        // line 282
        echo "<!--End: Clients -->


<!-- Start: Updates widgets -->
";
        // line 286
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_first", [], "any", false, false, true, 286) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_second", [], "any", false, false, true, 286)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_third", [], "any", false, false, true, 286))) {
            // line 287
            echo "
  <div class=\"updates\" id=\"updates\">
    <div class=\"container\">

      ";
            // line 291
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_title", [], "any", false, false, true, 291)) {
                // line 292
                echo "        <div class=\"custom-block-title\" >
          ";
                // line 293
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_title", [], "any", false, false, true, 293), 293, $this->source), "html", null, true);
                echo "
        </div>
      ";
            }
            // line 296
            echo "
      <div class=\"row\">

        ";
            // line 299
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_first", [], "any", false, false, true, 299)) {
                // line 300
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["updates_class"] ?? null), 300, $this->source), "html", null, true);
                echo ">
            ";
                // line 301
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_first", [], "any", false, false, true, 301), 301, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 304
            echo "
        ";
            // line 305
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_second", [], "any", false, false, true, 305)) {
                // line 306
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["updates_class"] ?? null), 306, $this->source), "html", null, true);
                echo ">
            ";
                // line 307
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_second", [], "any", false, false, true, 307), 307, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 310
            echo "
        ";
            // line 311
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_third", [], "any", false, false, true, 311)) {
                // line 312
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["updates_class"] ?? null), 312, $this->source), "html", null, true);
                echo ">
            ";
                // line 313
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_third", [], "any", false, false, true, 313), 313, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 316
            echo "
        ";
            // line 317
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_forth", [], "any", false, false, true, 317)) {
                // line 318
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["updates_class"] ?? null), 318, $this->source), "html", null, true);
                echo ">
            ";
                // line 319
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_forth", [], "any", false, false, true, 319), 319, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 322
            echo "
      </div>
    </div>
  </div>

";
        }
        // line 328
        echo "<!--End: widgets -->


<!-- Start: Services widgets -->
";
        // line 332
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "services_first", [], "any", false, false, true, 332) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "services_second", [], "any", false, false, true, 332)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "services_third", [], "any", false, false, true, 332)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "services_forth", [], "any", false, false, true, 332))) {
            // line 333
            echo "
  <div class=\"services\" id=\"services\">
    <div class=\"container\">

      ";
            // line 337
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "services_title", [], "any", false, false, true, 337)) {
                // line 338
                echo "        <div class=\"custom-block-title\" >
          ";
                // line 339
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "services_title", [], "any", false, false, true, 339), 339, $this->source), "html", null, true);
                echo "
        </div>
      ";
            }
            // line 342
            echo "
      <div class=\"row team-list\">

        ";
            // line 345
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "services_first", [], "any", false, false, true, 345)) {
                // line 346
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["services_class"] ?? null), 346, $this->source), "html", null, true);
                echo ">
            ";
                // line 347
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "services_first", [], "any", false, false, true, 347), 347, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 350
            echo "
        ";
            // line 351
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "services_second", [], "any", false, false, true, 351)) {
                // line 352
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["services_class"] ?? null), 352, $this->source), "html", null, true);
                echo ">
            ";
                // line 353
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "services_second", [], "any", false, false, true, 353), 353, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 356
            echo "
        ";
            // line 357
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "services_third", [], "any", false, false, true, 357)) {
                // line 358
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["services_class"] ?? null), 358, $this->source), "html", null, true);
                echo ">
            ";
                // line 359
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "services_third", [], "any", false, false, true, 359), 359, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 362
            echo "
        ";
            // line 363
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "services_forth", [], "any", false, false, true, 363)) {
                // line 364
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["services_class"] ?? null), 364, $this->source), "html", null, true);
                echo ">
            ";
                // line 365
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "services_forth", [], "any", false, false, true, 365), 365, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 368
            echo "
      </div>
    </div>
  </div>

";
        }
        // line 374
        echo "<!--End: widgets -->


<!-- Start: Bottom widgets -->
";
        // line 378
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_first", [], "any", false, false, true, 378) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_second", [], "any", false, false, true, 378)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_third", [], "any", false, false, true, 378)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_forth", [], "any", false, false, true, 378))) {
            // line 379
            echo "
  <div class=\"bottom-widget\" id=\"bottom-widget\">
    <div class=\"container\">

      ";
            // line 383
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_title", [], "any", false, false, true, 383)) {
                // line 384
                echo "        <div class=\"custom-block-title\" >
          ";
                // line 385
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_title", [], "any", false, false, true, 385), 385, $this->source), "html", null, true);
                echo "
        </div>
      ";
            }
            // line 388
            echo "
      <div class=\"row\">

        ";
            // line 391
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_first", [], "any", false, false, true, 391)) {
                // line 392
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null), 392, $this->source), "html", null, true);
                echo ">
            ";
                // line 393
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_first", [], "any", false, false, true, 393), 393, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 396
            echo "
        ";
            // line 397
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_second", [], "any", false, false, true, 397)) {
                // line 398
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null), 398, $this->source), "html", null, true);
                echo ">
            ";
                // line 399
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_second", [], "any", false, false, true, 399), 399, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 402
            echo "
        ";
            // line 403
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_third", [], "any", false, false, true, 403)) {
                // line 404
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null), 404, $this->source), "html", null, true);
                echo ">
            ";
                // line 405
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_third", [], "any", false, false, true, 405), 405, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 408
            echo "
        ";
            // line 409
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_forth", [], "any", false, false, true, 409)) {
                // line 410
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null), 410, $this->source), "html", null, true);
                echo ">
            ";
                // line 411
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_forth", [], "any", false, false, true, 411), 411, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 414
            echo "
      </div>
    </div>
  </div>

";
        }
        // line 420
        echo "<!--End: widgets -->


<!-- Start: Footer widgets -->
";
        // line 424
        if ((((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 424) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 424)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 424)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "search", [], "any", false, false, true, 424)) || ($context["show_social_icon"] ?? null)) || ($context["show_credit_link"] ?? null))) {
            // line 425
            echo "  <div class=\"footer\" id=\"footer\">
    <div class=\"container\">

      ";
            // line 428
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_title", [], "any", false, false, true, 428)) {
                // line 429
                echo "        <div class=\"custom-block-title\" >
          ";
                // line 430
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_title", [], "any", false, false, true, 430), 430, $this->source), "html", null, true);
                echo "
        </div>
      ";
            }
            // line 433
            echo "
      <div class=\"row\">

        ";
            // line 436
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 436)) {
                // line 437
                echo "          <div class=\"col-sm\">
            ";
                // line 438
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 438), 438, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 441
            echo "
        ";
            // line 442
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 442)) {
                // line 443
                echo "          <div class=\"col-sm\">
            ";
                // line 444
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 444), 444, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 447
            echo "
        ";
            // line 448
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 448)) {
                // line 449
                echo "          <div class=\"col-sm\">
            ";
                // line 450
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 450), 450, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 453
            echo "
        ";
            // line 454
            if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "search", [], "any", false, false, true, 454) || ($context["show_social_icon"] ?? null)) || ($context["show_credit_link"] ?? null))) {
                // line 455
                echo "          <div class=\"col-sm\">

            ";
                // line 457
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "search", [], "any", false, false, true, 457)) {
                    // line 458
                    echo "              ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "search", [], "any", false, false, true, 458), 458, $this->source), "html", null, true);
                    echo "
            ";
                }
                // line 460
                echo "
            ";
                // line 461
                if (($context["show_social_icon"] ?? null)) {
                    // line 462
                    echo "              ";
                    // line 463
                    echo "              <p class=\"social-media\">
                ";
                    // line 464
                    if (($context["vk_url"] ?? null)) {
                        // line 465
                        echo "                  <a href=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["vk_url"] ?? null), 465, $this->source), "html", null, true);
                        echo "\" class=\"vk\" target=\"_blank\" ><i class=\"fa-brands fa-vk\"></i></a>
                ";
                    }
                    // line 467
                    echo "\t\t\t\t";
                    if (($context["telegram_url"] ?? null)) {
                        // line 468
                        echo "                  <a href=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["telegram_url"] ?? null), 468, $this->source), "html", null, true);
                        echo "\" class=\"telegram\" target=\"_blank\" ><i class=\"fa-brands fa-telegram\"></i></a>
                ";
                    }
                    // line 470
                    echo "\t\t\t\t";
                    if (($context["viber_url"] ?? null)) {
                        // line 471
                        echo "                  <a href=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["viber_url"] ?? null), 471, $this->source), "html", null, true);
                        echo "\" class=\"viber\" target=\"_blank\" ><i class=\"fa-brands fa-viber\"></i></a>
                ";
                    }
                    // line 473
                    echo "                ";
                    if (($context["credly_url"] ?? null)) {
                        // line 474
                        echo "                  <a href=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["credly_url"] ?? null), 474, $this->source), "html", null, true);
                        echo "\" class=\"credly\" target=\"_blank\" ><i class=\"fa-solid fa-certificate\"></i></a>
                ";
                    }
                    // line 476
                    echo "                ";
                    if (($context["linkedin_url"] ?? null)) {
                        // line 477
                        echo "                  <a href=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["linkedin_url"] ?? null), 477, $this->source), "html", null, true);
                        echo "\" class=\"linkedin\" target=\"_blank\"><i class=\"fab fa-linkedin-in\"></i></a>
                ";
                    }
                    // line 479
                    echo "                ";
                    if (($context["instagram_url"] ?? null)) {
                        // line 480
                        echo "                  <a href=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["instagram_url"] ?? null), 480, $this->source), "html", null, true);
                        echo "\" class=\"instagram\" target=\"_blank\" ><i class=\"fab fa-instagram\"></i></a>
                ";
                    }
                    // line 482
                    echo "                ";
                    if (($context["rss_url"] ?? null)) {
                        // line 483
                        echo "                  <a href=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rss_url"] ?? null), 483, $this->source), "html", null, true);
                        echo "\" class=\"rss\" target=\"_blank\" ><i class=\"fa fa-rss\"></i></a>
                ";
                    }
                    // line 485
                    echo "              </p>
            ";
                }
                // line 487
                echo "          </div>
        ";
            }
            // line 489
            echo "
      </div>
    </div>
  </div>
";
        }
        // line 494
        echo "<!--End: widgets -->


<!-- Start: Copyright -->
<div class=\"copyright\">
    <div class=\"container\">
      ";
        // line 501
        echo "      <span>Copyright © ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo ".</span>
      ";
        // line 502
        if (($context["show_credit_link"] ?? null)) {
            // line 503
            echo "        <span class=\"credit-link\">Designed By <a href=\"https://www.zymphonies.com\" target=\"_blank\">Zymphonies</a></span>
      ";
        }
        // line 505
        echo "  </div>
</div>
<!-- End: Copyright -->
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/star_zymphonies_theme/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  940 => 505,  936 => 503,  934 => 502,  929 => 501,  921 => 494,  914 => 489,  910 => 487,  906 => 485,  900 => 483,  897 => 482,  891 => 480,  888 => 479,  882 => 477,  879 => 476,  873 => 474,  870 => 473,  864 => 471,  861 => 470,  855 => 468,  852 => 467,  846 => 465,  844 => 464,  841 => 463,  839 => 462,  837 => 461,  834 => 460,  828 => 458,  826 => 457,  822 => 455,  820 => 454,  817 => 453,  811 => 450,  808 => 449,  806 => 448,  803 => 447,  797 => 444,  794 => 443,  792 => 442,  789 => 441,  783 => 438,  780 => 437,  778 => 436,  773 => 433,  767 => 430,  764 => 429,  762 => 428,  757 => 425,  755 => 424,  749 => 420,  741 => 414,  735 => 411,  730 => 410,  728 => 409,  725 => 408,  719 => 405,  714 => 404,  712 => 403,  709 => 402,  703 => 399,  698 => 398,  696 => 397,  693 => 396,  687 => 393,  682 => 392,  680 => 391,  675 => 388,  669 => 385,  666 => 384,  664 => 383,  658 => 379,  656 => 378,  650 => 374,  642 => 368,  636 => 365,  631 => 364,  629 => 363,  626 => 362,  620 => 359,  615 => 358,  613 => 357,  610 => 356,  604 => 353,  599 => 352,  597 => 351,  594 => 350,  588 => 347,  583 => 346,  581 => 345,  576 => 342,  570 => 339,  567 => 338,  565 => 337,  559 => 333,  557 => 332,  551 => 328,  543 => 322,  537 => 319,  532 => 318,  530 => 317,  527 => 316,  521 => 313,  516 => 312,  514 => 311,  511 => 310,  505 => 307,  500 => 306,  498 => 305,  495 => 304,  489 => 301,  484 => 300,  482 => 299,  477 => 296,  471 => 293,  468 => 292,  466 => 291,  460 => 287,  458 => 286,  452 => 282,  445 => 278,  441 => 276,  435 => 273,  432 => 272,  430 => 271,  426 => 269,  424 => 268,  418 => 264,  411 => 259,  405 => 256,  400 => 255,  398 => 254,  395 => 253,  389 => 250,  384 => 249,  382 => 248,  379 => 247,  373 => 244,  368 => 243,  366 => 242,  361 => 239,  355 => 236,  352 => 235,  350 => 234,  345 => 231,  343 => 230,  330 => 219,  323 => 215,  317 => 213,  315 => 212,  310 => 209,  303 => 205,  297 => 203,  295 => 202,  290 => 199,  283 => 195,  277 => 193,  275 => 192,  268 => 187,  262 => 184,  259 => 183,  257 => 182,  248 => 175,  240 => 170,  235 => 167,  233 => 166,  227 => 162,  220 => 158,  216 => 156,  214 => 155,  208 => 151,  201 => 147,  197 => 145,  195 => 144,  189 => 140,  181 => 134,  175 => 132,  173 => 131,  168 => 128,  162 => 126,  160 => 125,  155 => 122,  149 => 120,  147 => 119,  141 => 115,  135 => 112,  132 => 111,  130 => 110,  125 => 107,  123 => 106,  118 => 103,  112 => 99,  103 => 97,  99 => 96,  94 => 93,  92 => 92,  82 => 84,  78 => 82,  72 => 80,  70 => 79,  67 => 78,  65 => 77,  60 => 74,  54 => 72,  52 => 71,  39 => 60,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/star_zymphonies_theme/templates/layout/page.html.twig", "/web/sites/www.bochinskii.in/www/themes/contrib/star_zymphonies_theme/templates/layout/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 71, "for" => 96);
        static $filters = array("escape" => 72, "raw" => 97, "date" => 501);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape', 'raw', 'date'],
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
