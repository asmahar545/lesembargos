<?php

/* themes/bootstrap_mint/templates/layout/page.html.twig */
class __TwigTemplate_eea9d4215d198b77645dae10f81a04bf13bec566ac97fc76b2f060d461f22a98 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("if" => 72);
        $filters = array("date" => 518);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
                array('date'),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 68
        echo "
<!-- Header and Navbar -->
<header class=\"main-header\">
<!-- Sliding Header Widget -->
";
        // line 72
        if (($context["is_front"] ?? null)) {
            // line 73
            echo "  ";
            if (($this->getAttribute(($context["page"] ?? null), "sliding_header_one", array()) || $this->getAttribute(($context["page"] ?? null), "sliding_header_two", array()))) {
                // line 74
                echo "    <div class=\"slidewidget\">
\t<div class=\"wrapper\">
      <!-- start: Container -->
      <div class=\"container\">
        
        <div class=\"row\">
          <div id=\"sliding-header-wrap\">
          <!-- Slide first region -->
          
          ";
                // line 83
                if ($this->getAttribute(($context["page"] ?? null), "sliding_header_one", array())) {
                    // line 84
                    echo "            <div class = ";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["slidewidget_first"] ?? null), "html", null, true));
                    echo ">
              ";
                    // line 85
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sliding_header_one", array()), "html", null, true));
                    echo "
            </div>
          ";
                }
                // line 88
                echo "          
          <!-- End slide first region -->
          <!-- Slide second region -->
          
          ";
                // line 92
                if ($this->getAttribute(($context["page"] ?? null), "sliding_header_two", array())) {
                    // line 93
                    echo "            <div class = ";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["slidewidget_class"] ?? null), "html", null, true));
                    echo ">
              ";
                    // line 94
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sliding_header_two", array()), "html", null, true));
                    echo "
            </div>
          ";
                }
                // line 97
                echo "          
          <!-- End slide second region -->
          
\t\t  </div>
        </div>
      </div>
\t  <!-- end: Container -->
\t  </div>
\t  <div class=\"toggle-switch\"><div class=\"fa fa-gear fa-spin\"></div></div>
    </div>
  ";
            }
        }
        // line 109
        echo "<!--Sliding Header Widget -->
  <nav class=\"navbar topnav navbar-default\" role=\"navigation\">
    <div class=\"container\">
      <div class=\"row\">
      <div class=\"navbar-header col-md-3\">
        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#main-navigation\">
          <span class=\"sr-only\">Toggle navigation</span>
          <span class=\"icon-bar\"></span>
          <span class=\"icon-bar\"></span>
          <span class=\"icon-bar\"></span>
        </button>
        ";
        // line 120
        if ($this->getAttribute(($context["page"] ?? null), "header", array())) {
            // line 121
            echo "          ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header", array()), "html", null, true));
            echo "
        ";
        }
        // line 123
        echo "      </div>

      <!-- Navigation -->
      <div class=\"col-md-9\">
        ";
        // line 127
        if ($this->getAttribute(($context["page"] ?? null), "primary_menu", array())) {
            // line 128
            echo "          ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "primary_menu", array()), "html", null, true));
            echo "
        ";
        }
        // line 129
        echo "      
      </div>
      <!--End Navigation -->

      </div>
    </div>
  </nav>

  <!-- Banner -->


  ";
        // line 140
        if ((($context["is_front"] ?? null) && $this->getAttribute(($context["page"] ?? null), "slideshow", array()))) {
            echo "  
    <div class=\"container slideshow\">
      <div class=\"row\">
        <div class=\"col-md-12\">
            ";
            // line 144
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "slideshow", array()), "html", null, true));
            echo "
        </div>
      </div>
    </div>
  ";
        }
        // line 149
        echo "  <!-- End Banner -->

</header>
<!--End Header & Navbar -->


<!--Search-->
  ";
        // line 156
        if ((($context["is_front"] ?? null) && $this->getAttribute(($context["page"] ?? null), "search", array()))) {
            // line 157
            echo "    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "search", array()), "html", null, true));
            echo "
  ";
        }
        // line 159
        echo "<!--End Search-->


<!--Home page banner-->
  ";
        // line 163
        if ((($context["is_front"] ?? null) && $this->getAttribute(($context["page"] ?? null), "promo", array()))) {
            // line 164
            echo "    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          ";
            // line 167
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "promo", array()), "html", null, true));
            echo "
        </div>
      </div>
    </div>
  ";
        }
        // line 172
        echo "<!--End Home page banner-->



<!--Highlighted-->
  ";
        // line 177
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", array())) {
            // line 178
            echo "    <div class=\"container\">
      <div class=\"row\">
      <br>
      <br>

  <div class=\"col-md-12\">

  <div class=\"col-md-4\">
  <span class=\" fa-stack fa-5x has-badge\" data-count=\"3\">
    <i class=\" fa fa-circle fa-stack-2x\"></i>
    <i class=\"p3 fa fa-database fa-stack-1x fa-inverse\" data-count=\"5\"></i>
  </span>
  <br>
  </br>
     </br>
  <p>
  Ma base de données 
  </p>
  <p>
  Elle fournit pour chaque entreprise une fiche-profil qui reprend les données administratives et relatives à l'actionnariat ainsi que sept indicateurs socio-économiques et financiers et des informations sur ses activités.
  </p>
</div>
<div class=\"col-md-4\">
  <span class=\"p1 fa-stack fa-5x has-badge\" data-count=\"3\">
    <i class=\"p2 fa fa-circle fa-stack-2x\"></i>
    <i  class=\"p3 fa fa-book fa-stack-1x fa-inverse\" data-count=\"5\"></i>
  </span>
  </br>
  </br>
  <p>
Mes données détaillées
  <p>
</div>
<div class=\"col-md-4\">
  <span class=\" fa-stack fa-5x has-badge\" data-count=\"3\">
    <i class=\" fa fa-circle fa-stack-2x\"></i>
    <i  class=\"p3 fa fa-search fa-stack-1x fa-inverse\" data-count=\"5\"></i>
  </span>

  </br>
     </br>
  <p>
  Recherche facile
  <p>
</div>
</div>


<div class=\"col-md-12\">
<div class=\"col-md-4\">
<div class=\"card\" style=\"width: 18rem;\">
  <img class=\"card-img-top\" src=\"https://www.google.com/url?sa=i&source=images&cd=&cad=rja&uact=8&ved=2ahUKEwi3xLLtkNzfAhWCa1AKHUHVCQcQjRx6BAgBEAU&url=https%3A%2F%2Fwww.mondassur.com%2Fes%2Fexpatriation%2Fquelle-assurance-sante-expatrie-par-pays.html&psig=AOvVaw0zYFn_0BrnI6QzIiDsPHjw&ust=1546966300586792\" alt=\"Card image cap\">
  <div class=\"card-body\">
    <h5 class=\"card-title\">Nomnre de pays</h5>
    <p class=\"card-text\">Arménie,...,...</p>
    <a href=\"#\" class=\"btn btn-primary\">Go somewhere</a>
  </div>
</div>
</div>
<div class=\"col-md-4\">
<div class=\"card\" style=\"width: 18rem;\">
  <img class=\"card-img-top\" src=\"https://www.google.com/url?sa=i&source=images&cd=&cad=rja&uact=8&ved=2ahUKEwi3xLLtkNzfAhWCa1AKHUHVCQcQjRx6BAgBEAU&url=https%3A%2F%2Fwww.mondassur.com%2Fes%2Fexpatriation%2Fquelle-assurance-sante-expatrie-par-pays.html&psig=AOvVaw0zYFn_0BrnI6QzIiDsPHjw&ust=1546966300586792\" alt=\"Card image cap\">
  <div class=\"card-body\">
    <h5 class=\"card-title\">Organisations</h5>
    <p class=\"card-text\">ONE, UE, LEA,...</p>
    <a href=\"#\" class=\"btn btn-primary\">Go somewhere</a>
  </div>
</div>
</div>
<div class=\"col-md-4\">
<div class=\"card\" style=\"width: 18rem;\">
  <img class=\"card-img-top\" src=\".../100px180/\" alt=\"Card image cap\">
  <div class=\"card-body\">
    <h5 class=\"card-title\">...</h5>
    <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href=\"#\" class=\"btn btn-primary\">Go somewhere</a>
  </div>
</div>
</div>
</div>
<div class=\"col-md-12\">
 ";
            // line 259
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "highlighted", array()), "html", null, true));
            echo "
 </div>
 </div>
  </div>
  ";
        }
        // line 264
        echo "<!--End Highlighted-->

<!--Help-->
  ";
        // line 267
        if ($this->getAttribute(($context["page"] ?? null), "help", array())) {
            // line 268
            echo "    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          ";
            // line 271
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "help", array()), "html", null, true));
            echo "
        </div>
      </div>
    </div>
  ";
        }
        // line 276
        echo "<!--End Help-->

<!-- Start Top Widget -->
";
        // line 279
        if (($context["is_front"] ?? null)) {
            echo "  
  ";
            // line 280
            if ((($this->getAttribute(($context["page"] ?? null), "topwidget_left", array()) || $this->getAttribute(($context["page"] ?? null), "topwidget_middle", array())) || $this->getAttribute(($context["page"] ?? null), "topwidget_right", array()))) {
                // line 281
                echo "    <div class=\"topwidget\">
      <!-- start: Container -->
      <div class=\"container\">
        
        <div class=\"row\">

          <!-- Top widget left region -->
          
          ";
                // line 289
                if ($this->getAttribute(($context["page"] ?? null), "topwidget_left", array())) {
                    // line 290
                    echo "            <div class = ";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["topwidget_class"] ?? null), "html", null, true));
                    echo ">
              ";
                    // line 291
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "topwidget_left", array()), "html", null, true));
                    echo "
            </div>
          ";
                }
                // line 294
                echo "          
          <!-- End top widget left region -->\t\t  
          <!-- Top widget middle region -->
          
          ";
                // line 298
                if ($this->getAttribute(($context["page"] ?? null), "topwidget_middle", array())) {
                    // line 299
                    echo "            <div class = ";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["topwidget_class"] ?? null), "html", null, true));
                    echo ">
              ";
                    // line 300
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "topwidget_middle", array()), "html", null, true));
                    echo "
            </div>
          ";
                }
                // line 303
                echo "          
          <!-- End top widget middle region -->
          <!-- Top widget right region -->
          
          ";
                // line 307
                if ($this->getAttribute(($context["page"] ?? null), "topwidget_right", array())) {
                    // line 308
                    echo "            <div class = ";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["topwidget_class"] ?? null), "html", null, true));
                    echo ">
              ";
                    // line 309
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "topwidget_right", array()), "html", null, true));
                    echo "
            </div>
          ";
                }
                // line 312
                echo "          
          <!-- End top widget right region -->
        </div>
      </div>
    </div>
  ";
            }
        }
        // line 319
        echo "<!--End Top Widget -->


<!-- Page Title -->
";
        // line 323
        if (($this->getAttribute(($context["page"] ?? null), "page_title", array()) &&  !($context["is_front"] ?? null))) {
            // line 324
            echo "  <div id=\"page-title\">
    <div id=\"page-title-inner\">
      <!-- start: Container -->
      <div class=\"container-fluid\">
        ";
            // line 328
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "page_title", array()), "html", null, true));
            echo "
      </div>
    </div>
  </div>
";
        }
        // line 333
        echo "<!-- End Page Title -->


<!-- layout -->
<div id=\"wrapper\">
  <!-- start: Container -->
  <div class=\"container-fluid\">
    
    <!--Start Content Top-->
    ";
        // line 342
        if ($this->getAttribute(($context["page"] ?? null), "content_top", array())) {
            // line 343
            echo "    <div class=\"content-top\">
        <div class=\"row\">
\t\t  <div class=\"col-md-12\">
            ";
            // line 346
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content_top", array()), "html", null, true));
            echo "
\t\t  </div>
        </div>
\t</div>
    ";
        }
        // line 351
        echo "    <!--End Content Top-->
    
    <!--start:Breadcrumbs -->
\t";
        // line 354
        if ( !($context["is_front"] ?? null)) {
            // line 355
            echo "    <div class=\"row\">
      <div class=\"col-md-12\">";
            // line 356
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "breadcrumb", array()), "html", null, true));
            echo "</div>
    </div>
\t";
        }
        // line 359
        echo "    <!--End Breadcrumbs-->
\t
    <div class=\"row layout\">
      <!--- Start Left Sidebar -->
      ";
        // line 363
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", array())) {
            // line 364
            echo "          <div class = \"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["sidebarfirst"] ?? null), "html", null, true));
            echo " sidebar-first\">
            ";
            // line 365
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_first", array()), "html", null, true));
            echo "
          </div>
      ";
        }
        // line 368
        echo "      <!---End Left Sidebar -->

      <!--- Start content -->
      ";
        // line 371
        if ($this->getAttribute(($context["page"] ?? null), "content", array())) {
            // line 372
            echo "          <div class=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["contentlayout"] ?? null), "html", null, true));
            echo " content-layout\">
            ";
            // line 373
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
            echo "
          </div>
      ";
        }
        // line 376
        echo "      <!---End content -->

      <!--- Start Right Sidebar -->
      ";
        // line 379
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", array())) {
            // line 380
            echo "          <div class=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["sidebarsecond"] ?? null), "html", null, true));
            echo " sidebar-second\">
            ";
            // line 381
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_second", array()), "html", null, true));
            echo "
          </div>

      ";
        }
        // line 385
        echo "      <!---End Right Sidebar -->
      
    </div>
    <!--End Content -->

    <!--Start Content Bottom-->
    ";
        // line 391
        if ($this->getAttribute(($context["page"] ?? null), "content_bottom", array())) {
            // line 392
            echo "    <div class=\"content-bottom\">
        <div class=\"row\">
\t\t  <div class=\"col-md-12\">
            ";
            // line 395
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content_bottom", array()), "html", null, true));
            echo "
\t\t  </div>
        </div>
\t</div>
    ";
        }
        // line 400
        echo "    <!--End Content Bottom-->
  </div>
</div>
<!-- End layout -->

<!-- Start Footer -->
  ";
        // line 406
        if (((($this->getAttribute(($context["page"] ?? null), "footer_top_one", array()) || $this->getAttribute(($context["page"] ?? null), "footer_top_two", array())) || $this->getAttribute(($context["page"] ?? null), "footer_top_three", array())) || $this->getAttribute(($context["page"] ?? null), "footer_top_four", array()))) {
            // line 407
            echo "    <div class=\"footer-widgets\">
      <!-- Start Container -->
      <div class=\"container\">
        
        <div class=\"row\">

          <!-- Start Footer Top One Region -->
          
          ";
            // line 415
            if ($this->getAttribute(($context["page"] ?? null), "footer_top_one", array())) {
                // line 416
                echo "            <div class = ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_top_class"] ?? null), "html", null, true));
                echo ">
              ";
                // line 417
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_top_one", array()), "html", null, true));
                echo "
            </div>
          ";
            }
            // line 420
            echo "          
          <!-- End Footer Top One Region -->

          <!-- Start Footer Top Two Region -->
          ";
            // line 424
            if ($this->getAttribute(($context["page"] ?? null), "footer_top_two", array())) {
                // line 425
                echo "            <div class = ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_top_class"] ?? null), "html", null, true));
                echo ">
              ";
                // line 426
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_top_two", array()), "html", null, true));
                echo "
            </div>
          ";
            }
            // line 429
            echo "          
          <!-- End Footer Top Two Region -->

          <!-- Start Footer Top Three Region -->
          
          ";
            // line 434
            if ($this->getAttribute(($context["page"] ?? null), "footer_top_three", array())) {
                // line 435
                echo "            <div class = ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_top_class"] ?? null), "html", null, true));
                echo ">
              ";
                // line 436
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_top_three", array()), "html", null, true));
                echo "
            </div>
          ";
            }
            // line 439
            echo "          
          <!-- End Footer Top Three Region -->
\t\t  
\t\t  <!-- Start Footer Top Four Region -->

          ";
            // line 444
            if ($this->getAttribute(($context["page"] ?? null), "footer_top_four", array())) {
                // line 445
                echo "          <div class = ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_top_class"] ?? null), "html", null, true));
                echo ">
            ";
                // line 446
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_top_four", array()), "html", null, true));
                echo "
          </div>
          ";
            }
            // line 449
            echo "\t\t  
\t\t  <!-- End Footer Top Four Region -->

        </div>
      </div>
    </div>
  ";
        }
        // line 456
        echo "  <!-- Footer Region-->
  ";
        // line 457
        if ($this->getAttribute(($context["page"] ?? null), "footer", array())) {
            // line 458
            echo "    <div class=\"footer-space\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-12\">
            ";
            // line 462
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer", array()), "html", null, true));
            echo "
          </div>
      </div>
      </div>
\t</div>
  ";
        }
        // line 468
        echo "  <!-- End Footer Region-->
<!--End Footer -->

<!-- Start Footer Ribbon -->
";
        // line 472
        if ($this->getAttribute(($context["page"] ?? null), "footer_menu", array())) {
            // line 473
            echo "  <div class=\"footer-ribbon\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-sm-6\">
          ";
            // line 477
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_menu", array()), "html", null, true));
            echo "
        </div>
        ";
            // line 479
            if (($context["show_social_icon"] ?? null)) {
                // line 480
                echo "        <div class=\"col-sm-6\">
          <div class=\"social-media\">
            ";
                // line 482
                if (($context["facebook_url"] ?? null)) {
                    // line 483
                    echo "              <a href=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["facebook_url"] ?? null), "html", null, true));
                    echo "\" class=\"icon-facebook\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Facebook\"><i class=\"fa fa-facebook\"></i></a>
            ";
                }
                // line 485
                echo "            ";
                if (($context["google_plus_url"] ?? null)) {
                    // line 486
                    echo "              <a href=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["google_plus_url"] ?? null), "html", null, true));
                    echo "\" class=\"icon-gplus\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Google+\"><i class=\"fa fa-google-plus\"></i></a>
            ";
                }
                // line 488
                echo "            ";
                if (($context["twitter_url"] ?? null)) {
                    // line 489
                    echo "              <a href=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["twitter_url"] ?? null), "html", null, true));
                    echo "\" class=\"icon-twitter\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Twitter\"><i class=\"fa fa-twitter\"></i></a>
            ";
                }
                // line 491
                echo "            ";
                if (($context["linkedin_url"] ?? null)) {
                    // line 492
                    echo "              <a href=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["linkedin_url"] ?? null), "html", null, true));
                    echo "\" class=\"icon-linkedin\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"LinkedIn\"><i class=\"fa fa-linkedin\"></i></a>
            ";
                }
                // line 494
                echo "            ";
                if (($context["ytube_url"] ?? null)) {
                    // line 495
                    echo "              <a href=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["ytube_url"] ?? null), "html", null, true));
                    echo "\" class=\"icon-youtube\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"YouTube\"><i class=\"fa fa-youtube-play\"></i></a>
            ";
                }
                // line 497
                echo "          </div>
        </div>
        ";
            }
            // line 500
            echo "      </div>
    </div>
  </div>
";
        }
        // line 504
        echo "<!-- End Footer Ribbon -->


<!-- #footer-bottom -->
<div id=\"footer-bottom\">
    <div class=\"container\">
         <div class=\"row\">
\t\t <hr class=\"style-mint\">
         <div id=\"toTop\" class=\"col-md-12\">
          <a class=\"scrollUp\"><i class=\"fa fa-angle-up\"></i></a>
         </div>
        </div>
        <div class=\"row\">
        <div class=\"col-md-12 copy_credit\">
        <p class=\"copyright\">Copyright &copy; ";
        // line 518
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true));
        echo ". All rights reserved</p>
        ";
        // line 519
        if (($context["show_credit_link"] ?? null)) {
            // line 520
            echo "          <p class=\"credit\">Theme for <a href=\"https://www.drupal.org/8\" target=\"_blank\">Drupal 8</a></p>
        ";
        }
        // line 522
        echo "        </div>
\t\t</div>
    </div>
</div>
<!-- #footer-bottom ends here -->
";
    }

    public function getTemplateName()
    {
        return "themes/bootstrap_mint/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  783 => 522,  779 => 520,  777 => 519,  773 => 518,  757 => 504,  751 => 500,  746 => 497,  740 => 495,  737 => 494,  731 => 492,  728 => 491,  722 => 489,  719 => 488,  713 => 486,  710 => 485,  704 => 483,  702 => 482,  698 => 480,  696 => 479,  691 => 477,  685 => 473,  683 => 472,  677 => 468,  668 => 462,  662 => 458,  660 => 457,  657 => 456,  648 => 449,  642 => 446,  637 => 445,  635 => 444,  628 => 439,  622 => 436,  617 => 435,  615 => 434,  608 => 429,  602 => 426,  597 => 425,  595 => 424,  589 => 420,  583 => 417,  578 => 416,  576 => 415,  566 => 407,  564 => 406,  556 => 400,  548 => 395,  543 => 392,  541 => 391,  533 => 385,  526 => 381,  521 => 380,  519 => 379,  514 => 376,  508 => 373,  503 => 372,  501 => 371,  496 => 368,  490 => 365,  485 => 364,  483 => 363,  477 => 359,  471 => 356,  468 => 355,  466 => 354,  461 => 351,  453 => 346,  448 => 343,  446 => 342,  435 => 333,  427 => 328,  421 => 324,  419 => 323,  413 => 319,  404 => 312,  398 => 309,  393 => 308,  391 => 307,  385 => 303,  379 => 300,  374 => 299,  372 => 298,  366 => 294,  360 => 291,  355 => 290,  353 => 289,  343 => 281,  341 => 280,  337 => 279,  332 => 276,  324 => 271,  319 => 268,  317 => 267,  312 => 264,  304 => 259,  221 => 178,  219 => 177,  212 => 172,  204 => 167,  199 => 164,  197 => 163,  191 => 159,  185 => 157,  183 => 156,  174 => 149,  166 => 144,  159 => 140,  146 => 129,  140 => 128,  138 => 127,  132 => 123,  126 => 121,  124 => 120,  111 => 109,  97 => 97,  91 => 94,  86 => 93,  84 => 92,  78 => 88,  72 => 85,  67 => 84,  65 => 83,  54 => 74,  51 => 73,  49 => 72,  43 => 68,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/bootstrap_mint/templates/layout/page.html.twig", "C:\\wamp64\\www\\drupal-8.6.3\\themes\\bootstrap_mint\\templates\\layout\\page.html.twig");
    }
}
