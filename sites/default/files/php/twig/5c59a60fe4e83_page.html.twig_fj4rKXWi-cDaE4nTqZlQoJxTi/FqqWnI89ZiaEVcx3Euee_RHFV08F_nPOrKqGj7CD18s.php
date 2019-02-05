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
        $filters = array("date" => 659);
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
          
\t</div>
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
  <nav     class=\"navbar topnav navbar-default\" role=\"navigation\">
    <div class=\"container\">
      <div class=\"row\">
      <div class=\"navbar-header col-md-3\">
        <button  type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#main-navigation\">
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
 ";
            // line 185
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "highlighted", array()), "html", null, true));
            echo "
 </div>
 </div>
  </div>
  ";
        }
        // line 190
        echo "<!--End Highlighted-->

<!--Help-->
  ";
        // line 193
        if ($this->getAttribute(($context["page"] ?? null), "help", array())) {
            // line 194
            echo "    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          ";
            // line 197
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "help", array()), "html", null, true));
            echo "
        </div>
      </div>
    </div>
  ";
        }
        // line 202
        echo "<!--End Help-->

<!-- Start Top Widget -->
";
        // line 205
        if (($context["is_front"] ?? null)) {
            echo "  
  ";
            // line 206
            if ((($this->getAttribute(($context["page"] ?? null), "topwidget_left", array()) || $this->getAttribute(($context["page"] ?? null), "topwidget_middle", array())) || $this->getAttribute(($context["page"] ?? null), "topwidget_right", array()))) {
                // line 207
                echo "    <div class=\"topwidget\">
      <!-- start: Container -->
      <div class=\"container\">
        
        <div class=\"row\">

          <!-- Top widget left region -->
          
          ";
                // line 215
                if ($this->getAttribute(($context["page"] ?? null), "topwidget_left", array())) {
                    // line 216
                    echo "            <div class = ";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["topwidget_class"] ?? null), "html", null, true));
                    echo ">
              ";
                    // line 217
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "topwidget_left", array()), "html", null, true));
                    echo "
            </div>
          ";
                }
                // line 220
                echo "          
          <!-- End top widget left region -->\t\t  
          <!-- Top widget middle region -->
          
          ";
                // line 224
                if ($this->getAttribute(($context["page"] ?? null), "topwidget_middle", array())) {
                    // line 225
                    echo "            <div class = ";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["topwidget_class"] ?? null), "html", null, true));
                    echo ">
              ";
                    // line 226
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "topwidget_middle", array()), "html", null, true));
                    echo "
            </div>
          ";
                }
                // line 229
                echo "          
          <!-- End top widget middle region -->
          <!-- Top widget right region -->
          
          ";
                // line 233
                if ($this->getAttribute(($context["page"] ?? null), "topwidget_right", array())) {
                    // line 234
                    echo "            <div class = ";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["topwidget_class"] ?? null), "html", null, true));
                    echo ">
              ";
                    // line 235
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "topwidget_right", array()), "html", null, true));
                    echo "
            </div>
          ";
                }
                // line 238
                echo "          
          <!-- End top widget right region -->
        </div>
      </div>
    </div>
  ";
            }
        }
        // line 245
        echo "<!--End Top Widget -->


<!-- Page Title -->
";
        // line 249
        if (($this->getAttribute(($context["page"] ?? null), "page_title", array()) &&  !($context["is_front"] ?? null))) {
            // line 250
            echo "  <div id=\"page-title\">
    <div id=\"page-title-inner\">
      <!-- start: Container -->
      <div class=\"container-fluid\">
        ";
            // line 254
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "page_title", array()), "html", null, true));
            echo "
      </div>
    </div>
  </div>
";
        }
        // line 259
        echo "<!-- End Page Title -->


<!-- layout -->
<div id=\"wrapper\">
  <!-- start: Container -->
  <div class=\"container-fluid\">
    
    <!--Start Content Top-->
    ";
        // line 268
        if ($this->getAttribute(($context["page"] ?? null), "content_top", array())) {
            // line 269
            echo "    <div class=\"content-top\">
        <div class=\"row\">
\t\t  <div class=\"col-md-12\">
            ";
            // line 272
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content_top", array()), "html", null, true));
            echo "
\t\t  </div>
        </div>
\t</div>
    ";
        }
        // line 277
        echo "    <!--End Content Top-->
    
    <!--start:Breadcrumbs -->
\t";
        // line 280
        if ( !($context["is_front"] ?? null)) {
            // line 281
            echo "    <div class=\"row\">
      <div class=\"col-md-12\">";
            // line 282
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "breadcrumb", array()), "html", null, true));
            echo "</div>
    </div>
\t";
        }
        // line 285
        echo "    <!--End Breadcrumbs-->
\t
    <div class=\"row layout\">
      <!--- Start Left Sidebar -->
      ";
        // line 289
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", array())) {
            // line 290
            echo "          <div class = \"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["sidebarfirst"] ?? null), "html", null, true));
            echo " sidebar-first\">
            ";
            // line 291
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_first", array()), "html", null, true));
            echo "
          </div>
      ";
        }
        // line 294
        echo "      <!---End Left Sidebar -->
       ";
        // line 295
        if (($context["is_front"] ?? null)) {
            // line 296
            echo "       ";
            if (($this->getAttribute(($context["language"] ?? null), "getId", array(), "method") == "fr")) {
                // line 297
                echo "           <h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Les embargos sur les armes </h1
            ";
            } else {
                // line 299
                echo "           <h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The arms embargoes</h1>
             
       ";
            }
            // line 301
            echo "  
       ";
        }
        // line 302
        echo "  
      <!--- Start content -->

    ";
        // line 305
        if ($this->getAttribute(($context["page"] ?? null), "content", array())) {
            // line 306
            echo "     <div class=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["contentlayout"] ?? null), "html", null, true));
            echo " content-layout\">
      ";
            // line 307
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
            echo "
      ";
            // line 308
            if (($context["is_front"] ?? null)) {
                echo " 
                
    
        
    <div class=\"col-md-12\">
     <div class=\"col-md-4\">
    <span class=\" fa-stack fa-5x has-badge\" data-count=\"3\">
    <i class=\" fa fa-circle fa-stack-2x\"></i>
    <i  class=\"p3 fa fa-book fa-stack-1x fa-inverse\" data-count=\"5\"></i>
    </span>
  ";
                // line 318
                if (($this->getAttribute(($context["language"] ?? null), "getId", array(), "method") == "fr")) {
                    // line 319
                    echo "  <p>
     L’information contenue dans cette base de données est régulièrement mis à jour, enrichie et vérifiée par le GRIP. 
  </p>
  ";
                } else {
                    // line 323
                    echo "  <p>
     The information of this database is regularly updated, checked and supplemented.  
  </p>
  ";
                }
                // line 327
                echo "</div>
  <div class=\"col-md-4\">
  <span class=\" fa-stack fa-5x has-badge\" data-count=\"3\">
    <i class=\" fa fa-circle fa-stack-2x\"></i>
    <i class=\"p3 fa fa-database fa-stack-1x fa-inverse\" data-count=\"5\"></i>
  </span>
  ";
                // line 333
                if (($this->getAttribute(($context["language"] ?? null), "getId", array(), "method") == "fr")) {
                    // line 334
                    echo " <p>
    Cette base de données répertorie l’ensemble des embargos adoptés à partir de 2000 ou déjà en cours cette année-là. 
 </p>
 ";
                } else {
                    // line 338
                    echo " <p>
    This database covers all arms embargoes either decided from or already implemented as of 2000.
 </p>
 ";
                }
                // line 342
                echo "  
</div>
    
<div class=\"col-md-4\">
    
  <span class=\"p1 fa-stack fa-5x has-badge\" data-count=\"3\">
    <i class=\"p2 fa fa-circle fa-stack-2x\"></i>
    <i  class=\"p3 fa fa-institution fa-stack-1x fa-inverse\" data-count=\"5\"></i>
  </span>
   ";
                // line 351
                if (($this->getAttribute(($context["language"] ?? null), "getId", array(), "method") == "fr")) {
                    // line 352
                    echo "   <p>
   Les organisations internationales et régionales ayant adopté et / ou mis en œuvre des mesures des embargos sur les armes depuis 2000 sont les suivantes : la Communauté Économique des États d’Afrique de l’Ouest (CEDEAO), la Ligue des États Arabes (LEA), l’Organisation pour la Sécurité 
   et la Coopération en Europe (OSCE), l’Union européenne (UE) et les Nations unies. 
   <p>
    ";
                } else {
                    // line 356
                    echo "     
   <p>
   Regional or international organisations which have enacted and / or implemented arms embargoes since 2000 are the following : The African Union (AU), The Economic Community of African States (ECOWAS), the European Union (EU), the League of Arab States (LAS), 
   the Organisation for Security and Cooperation in Europe (OSCE) and the United Nations (UN).   
   </p>
   ";
                }
                // line 361
                echo " 
</div>

</div>
   

    
   <!--chiffres embargos-->
    
  <div class=\"col-lg-12\">
  <div class=\"col-lg-6\">
      <br>
      
 ";
                // line 374
                if (($this->getAttribute(($context["language"] ?? null), "getId", array(), "method") == "fr")) {
                    // line 375
                    echo "
  <p>
   <i><h1><b>22</b></h1></i> 
   Nombre d’États ou territoires sous embargo  <br>
  </p>
  <p>
     <h1><b>5</b></h1>    
      Nombre d’entités non-étatiques sous embargos <br>   
  </p>
    <p>
      <h1><b>6</b></h1>  
      Nombre d’organisations mettant en œuvre un embargo <br>
 ";
                } else {
                    // line 388
                    echo "   
  <p>
   <i><h1><b>22</b></h1></i> 
     Number of States or territories currently under arms embargo
  </p>
   <p>
     <h1><b>5</b></h1>    
      Number of non-state entities currently under arms embargo   
  </p>
   
  <p>
      <h1><b>6</b></h1>  
   
      Number of multilateral organizations implementing arms embargoes 
  </p>
   ";
                }
                // line 403
                echo "  
</div>
<div class=\"col-lg-6\">
    <br>
    <br>
  <div id=\"imageembargo\"> </div>
  
</div>

</div>
</div>

<!--
<div class=\"col-md-12\">
<div class=\"col-md-4\">
<div class=\"card\" style=\"width: 18rem;\">
  <img class=\"card-img-top\" src=\"https://www.populationdata.net/wp-content/uploads/monde-politique.gif\" alt=\"Card image cap\">
  <div class=\"card-body\">
    <h5 class=\"card-title\">Nombre  de pays</h5>
    <p class=\"card-text\">Arménie,...,...</p>
    <a href=\"http://localhost/drupal-8.6.3/fr/viewslist\" class=\"btn btn-primary\">Plus d'infos</a>
  </div>
</div>
</div>

<div class=\"col-md-4\">
<div class=\"card\" style=\"width: 18rem;\">
  <img class=\"card-img-top\" src=\"https://pngimage.net/wp-content/uploads/2018/06/icono-buscar-png-9.png\" alt=\"Card image cap\">
  <div class=\"card-body\">
    <h5 class=\"card-title\">...</h5>
    <p class=\"card-text\">Recherche</p>
    <a href=\"#\" class=\"btn btn-primary\">Plus d'infos</a>
  </div>
</div>
</div>
<div class=\"col-md-4\">
<div class=\"card\" style=\"width: 18rem;\">
  <img class=\"card-img-top\" src=\"https://www.chea.org/sites/default/files/2018-04/Institutions1_0.jpg\" alt=\"Card image cap\">
  <div class=\"card-body\">
    <h5 class=\"card-title\">Organisations</h5>
    <p class=\"card-text\">ONE, UE, LEA,...</p>
    <a href=\"#\" class=\"btn btn-primary\">Plus d'infos</a>
  </div>
</div>
</div>
</div>-->
          </div>
  
      ";
            }
            // line 452
            echo "      ";
        }
        // line 453
        echo "      <!---End content -->

      <!--- Start Right Sidebar -->
      ";
        // line 456
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", array())) {
            // line 457
            echo "          <div class=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["sidebarsecond"] ?? null), "html", null, true));
            echo " sidebar-second\">
            ";
            // line 458
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_second", array()), "html", null, true));
            echo "
          </div>

      ";
        }
        // line 462
        echo "      <!---End Right Sidebar -->
      
    </div>
    <!--End Content -->

    <!--Start Content Bottom-->
    ";
        // line 468
        if ($this->getAttribute(($context["page"] ?? null), "content_bottom", array())) {
            // line 469
            echo "        
    <div class=\"content-bottom\">
        <div class=\"row\">
\t\t  <div class=\"col-md-12\">
                      
   
            ";
            // line 475
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content_bottom", array()), "html", null, true));
            echo "
\t\t  </div>
        </div>
\t</div>
    ";
        }
        // line 480
        echo "    <!--End Content Bottom-->
  </div>
</div>
<!-- End layout -->

<!-- Start Footer -->
  ";
        // line 486
        if (((($this->getAttribute(($context["page"] ?? null), "footer_top_one", array()) || $this->getAttribute(($context["page"] ?? null), "footer_top_two", array())) || $this->getAttribute(($context["page"] ?? null), "footer_top_three", array())) || $this->getAttribute(($context["page"] ?? null), "footer_top_four", array()))) {
            // line 487
            echo "    <div class=\"footer-widgets\">
      <!-- Start Container -->
      <div class=\"container\">
        
        <div class=\"row\">

          <!-- Start Footer Top One Region -->
          
          ";
            // line 495
            if ($this->getAttribute(($context["page"] ?? null), "footer_top_one", array())) {
                // line 496
                echo "            <div class = ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_top_class"] ?? null), "html", null, true));
                echo ">
              ";
                // line 497
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_top_one", array()), "html", null, true));
                echo "
            </div>
          ";
            }
            // line 500
            echo "          
          <!-- End Footer Top One Region -->

          <!-- Start Footer Top Two Region -->
          ";
            // line 504
            if ($this->getAttribute(($context["page"] ?? null), "footer_top_two", array())) {
                // line 505
                echo "            <div class = ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_top_class"] ?? null), "html", null, true));
                echo ">
              ";
                // line 506
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_top_two", array()), "html", null, true));
                echo "
            </div>
          ";
            }
            // line 509
            echo "          
          <!-- End Footer Top Two Region -->

          <!-- Start Footer Top Three Region -->
          
          ";
            // line 514
            if ($this->getAttribute(($context["page"] ?? null), "footer_top_three", array())) {
                // line 515
                echo "            <div class = ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_top_class"] ?? null), "html", null, true));
                echo ">
              ";
                // line 516
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_top_three", array()), "html", null, true));
                echo "
            </div>
          ";
            }
            // line 519
            echo "          
          <!-- End Footer Top Three Region -->
\t\t  
\t\t  <!-- Start Footer Top Four Region -->

          ";
            // line 524
            if ($this->getAttribute(($context["page"] ?? null), "footer_top_four", array())) {
                // line 525
                echo "          <div class = ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_top_class"] ?? null), "html", null, true));
                echo ">
            ";
                // line 526
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_top_four", array()), "html", null, true));
                echo "
          </div>
          ";
            }
            // line 529
            echo "\t\t  
\t\t  <!-- End Footer Top Four Region -->

        </div>
      </div>
    </div>
  ";
        }
        // line 536
        echo "  <!-- Footer Region-->
  ";
        // line 537
        if ($this->getAttribute(($context["page"] ?? null), "footer", array())) {
            // line 538
            echo "    <div class=\"footer-space\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-12\">
              
            ";
            // line 543
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer", array()), "html", null, true));
            echo "
          </div>
      </div>
      </div>
\t</div>
  ";
        }
        // line 549
        echo "  <!-- End Footer Region-->
<!--End Footer -->

<!-- Start Footer Ribbon -->
";
        // line 553
        if ($this->getAttribute(($context["page"] ?? null), "footer_menu", array())) {
            // line 554
            echo "  <div class=\"footer-ribbon\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-sm-6\">
            
            <div class=\"panel panel-default\">
  <div class=\"panel-body\">Panel Content</div>
  <div class=\"panel-footer\">Panel Footer</div>
</div>
      ";
            // line 563
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_menu", array()), "html", null, true));
            echo "
        </div>
        ";
            // line 565
            if (($context["show_social_icon"] ?? null)) {
                // line 566
                echo "        <div class=\"col-sm-6\">
          <div class=\"social-media\">
            ";
                // line 568
                if (($context["facebook_url"] ?? null)) {
                    // line 569
                    echo "              <a href=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["facebook_url"] ?? null), "html", null, true));
                    echo "\" class=\"icon-facebook\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Facebook\"><i class=\"fa fa-facebook\"></i></a>
            ";
                }
                // line 571
                echo "            ";
                if (($context["google_plus_url"] ?? null)) {
                    // line 572
                    echo "              <a href=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["google_plus_url"] ?? null), "html", null, true));
                    echo "\" class=\"icon-gplus\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Google+\"><i class=\"fa fa-google-plus\"></i></a>
            ";
                }
                // line 574
                echo "            ";
                if (($context["twitter_url"] ?? null)) {
                    // line 575
                    echo "              <a href=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["twitter_url"] ?? null), "html", null, true));
                    echo "\" class=\"icon-twitter\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Twitter\"><i class=\"fa fa-twitter\"></i></a>
            ";
                }
                // line 577
                echo "            ";
                if (($context["linkedin_url"] ?? null)) {
                    // line 578
                    echo "              <a href=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["linkedin_url"] ?? null), "html", null, true));
                    echo "\" class=\"icon-linkedin\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"LinkedIn\"><i class=\"fa fa-linkedin\"></i></a>
            ";
                }
                // line 580
                echo "            ";
                if (($context["ytube_url"] ?? null)) {
                    // line 581
                    echo "              <a href=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["ytube_url"] ?? null), "html", null, true));
                    echo "\" class=\"icon-youtube\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"YouTube\"><i class=\"fa fa-youtube-play\"></i></a>
            ";
                }
                // line 583
                echo "          </div>
        </div>
        ";
            }
            // line 586
            echo "      </div>
    </div>
  </div>
";
        }
        // line 590
        echo "<!-- End Footer Ribbon -->


<!-- #footer-bottom -->
<div id=\"footer-bottom\">
    ";
        // line 595
        if (($context["is_front"] ?? null)) {
            // line 596
            echo "    <div style=\"background-color: #246F8C;\" class=\"panel-body\">
        <div class=\"col-lg-12\">
         
            <div style=\"color: #ffffff;\" class=\"col-lg-9\">
   ";
            // line 600
            if (($this->getAttribute(($context["language"] ?? null), "getId", array(), "method") == "fr")) {
                echo " 
       <br>
       
  <p><i>
  Cette base de données est réalisée dans le cadre de la « Cellule de veille sur l’évolution de la production 
  et des transferts d’armes en Belgique, en Europe et dans le monde », financée par la Région wallonne, 
  et bénéficie du soutien financier de l’UNSCAR. Les informations contenues dans cette base de données 
  relèvent de la seule responsabilité du GRIP.
  Le GRIP, la Région wallonne et l’UNSCAR ne peuvent être tenus responsables 
  de l’utilisation qui en serait faite.   </i> </p>
  <p><i></i></p>
     
  ";
            } else {
                // line 613
                echo "      <br>
      
  <p><i>
    This database has been initially developped as part of 
  
    the project « Cellule de veille sur l’évolution de la
    production et des transferts d’armes en Belgique, en Europe et
    dans le monde », funded by the Walloon Region, and then benefitted from the support of the UNSCAR. All the materials and information compiled in this database are of the sole responsibility of GRIP. GRIP, the Walloon 
    Region and the UNSCAR can not be held responsible for any use which may be made of the information contained therein. </i>  
    </p>
  ";
            }
            // line 624
            echo "        </div>
            <div style=\"color: #ffffff;\" class=\"col-lg-1\">
               <div id=\"communautefr\"></div> 
     
     
       </div>
            <div style=\"color: #ffffff;\" class=\"col-lg-1\">
                
     <div id=\"communautewalonnie\"> </div>
     
       </div>
          <div style=\"color: #ffffff;\" class=\"col-lg-1\">
                
     <div id=\"unscarlogo\"> </div>
     
       </div>
        </div>
    </div>
        ";
        }
        // line 643
        echo "

    <br>
    <br>
    <br> 
    <div class=\"container\">
        
         <div class=\"row\">
\t\t <hr class=\"style-mint\">
         <div id=\"toTop\" class=\"col-md-12\">
          <a class=\"scrollUp\"><i class=\"fa fa-angle-up\"></i></a>
         </div>
        </div>
        <div class=\"row\">
            
        <div class=\"col-md-12 copy_credit\">
        <p class=\"copyright\">© Grip ";
        // line 659
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true));
        echo " - Groupe de recherche et d'information sur la paix et la sécurité</p>
        <div class=\"col-md-12 \">
           <!--<div class=\"social-media\">-->
            
              <a href=\"https://www.facebook.com/GRIP.1979\"class=\"icon-facebook\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Facebook\"><i class=\"fa fa-facebook\"></i></a>
            
              <a href=\"https://twitter.com/grip_org\" class=\"icon-twitter\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Twitter\"><i class=\"fa fa-twitter\"></i></a>
           
              <a href=\"https://www.linkedin.com/company/grip\" class=\"icon-linkedin\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"LinkedIn\"><i class=\"fa fa-linkedin\"></i></a>
         
           
         
       <!-- </div>-->
            </div>
       
        ";
        // line 674
        if (($context["show_credit_link"] ?? null)) {
            // line 675
            echo "          <p class=\"credit\">Theme for <a href=\"https://www.drupal.org/8\" target=\"_blank\">Drupal 8</a></p>
        ";
        }
        // line 677
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
        return array (  999 => 677,  995 => 675,  993 => 674,  975 => 659,  957 => 643,  936 => 624,  923 => 613,  907 => 600,  901 => 596,  899 => 595,  892 => 590,  886 => 586,  881 => 583,  875 => 581,  872 => 580,  866 => 578,  863 => 577,  857 => 575,  854 => 574,  848 => 572,  845 => 571,  839 => 569,  837 => 568,  833 => 566,  831 => 565,  826 => 563,  815 => 554,  813 => 553,  807 => 549,  798 => 543,  791 => 538,  789 => 537,  786 => 536,  777 => 529,  771 => 526,  766 => 525,  764 => 524,  757 => 519,  751 => 516,  746 => 515,  744 => 514,  737 => 509,  731 => 506,  726 => 505,  724 => 504,  718 => 500,  712 => 497,  707 => 496,  705 => 495,  695 => 487,  693 => 486,  685 => 480,  677 => 475,  669 => 469,  667 => 468,  659 => 462,  652 => 458,  647 => 457,  645 => 456,  640 => 453,  637 => 452,  586 => 403,  568 => 388,  553 => 375,  551 => 374,  536 => 361,  528 => 356,  521 => 352,  519 => 351,  508 => 342,  502 => 338,  496 => 334,  494 => 333,  486 => 327,  480 => 323,  474 => 319,  472 => 318,  459 => 308,  455 => 307,  450 => 306,  448 => 305,  443 => 302,  439 => 301,  434 => 299,  430 => 297,  427 => 296,  425 => 295,  422 => 294,  416 => 291,  411 => 290,  409 => 289,  403 => 285,  397 => 282,  394 => 281,  392 => 280,  387 => 277,  379 => 272,  374 => 269,  372 => 268,  361 => 259,  353 => 254,  347 => 250,  345 => 249,  339 => 245,  330 => 238,  324 => 235,  319 => 234,  317 => 233,  311 => 229,  305 => 226,  300 => 225,  298 => 224,  292 => 220,  286 => 217,  281 => 216,  279 => 215,  269 => 207,  267 => 206,  263 => 205,  258 => 202,  250 => 197,  245 => 194,  243 => 193,  238 => 190,  230 => 185,  221 => 178,  219 => 177,  212 => 172,  204 => 167,  199 => 164,  197 => 163,  191 => 159,  185 => 157,  183 => 156,  174 => 149,  166 => 144,  159 => 140,  146 => 129,  140 => 128,  138 => 127,  132 => 123,  126 => 121,  124 => 120,  111 => 109,  97 => 97,  91 => 94,  86 => 93,  84 => 92,  78 => 88,  72 => 85,  67 => 84,  65 => 83,  54 => 74,  51 => 73,  49 => 72,  43 => 68,);
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
