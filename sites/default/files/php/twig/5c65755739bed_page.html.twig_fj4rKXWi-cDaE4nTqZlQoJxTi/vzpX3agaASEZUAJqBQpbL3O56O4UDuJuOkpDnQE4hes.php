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
        $filters = array("date" => 718);
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
        // line 121
        if ($this->getAttribute(($context["page"] ?? null), "header", array())) {
            // line 122
            echo "          ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header", array()), "html", null, true));
            echo "
        ";
        }
        // line 124
        echo "      </div>

      <!-- Navigation -->
      <div class=\"col-md-9\">
        ";
        // line 128
        if ($this->getAttribute(($context["page"] ?? null), "primary_menu", array())) {
            // line 129
            echo "          ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "primary_menu", array()), "html", null, true));
            echo "
        ";
        }
        // line 130
        echo "      
      </div>
      <!--End Navigation -->

      </div>
    </div>
  </nav>

  <!-- Banner -->


  ";
        // line 141
        if ((($context["is_front"] ?? null) && $this->getAttribute(($context["page"] ?? null), "slideshow", array()))) {
            echo "  
    <div class=\"container slideshow\">
      <div class=\"row\">
        <div class=\"col-md-12\">
            ";
            // line 145
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "slideshow", array()), "html", null, true));
            echo "
        </div>
      </div>
    </div>
  ";
        }
        // line 150
        echo "  <!-- End Banner -->

</header>
<!--End Header & Navbar -->


<!--Search-->
  ";
        // line 157
        if ((($context["is_front"] ?? null) && $this->getAttribute(($context["page"] ?? null), "search", array()))) {
            // line 158
            echo "    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "search", array()), "html", null, true));
            echo "
  ";
        }
        // line 160
        echo "<!--End Search-->


<!--Home page banner-->
  ";
        // line 164
        if ((($context["is_front"] ?? null) && $this->getAttribute(($context["page"] ?? null), "promo", array()))) {
            // line 165
            echo "    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          ";
            // line 168
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "promo", array()), "html", null, true));
            echo "
        </div>
      </div>
    </div>
  ";
        }
        // line 173
        echo "<!--End Home page banner-->



<!--Highlighted-->
  ";
        // line 178
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", array())) {
            // line 179
            echo "    <div class=\"container\">
      <div class=\"row\">
      <br>
      <br>

  
<div class=\"col-md-12\">
 ";
            // line 186
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "highlighted", array()), "html", null, true));
            echo "
 </div>
 </div>
  </div>
  ";
        }
        // line 191
        echo "<!--End Highlighted-->

<!--Help-->
  ";
        // line 194
        if ($this->getAttribute(($context["page"] ?? null), "help", array())) {
            // line 195
            echo "    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          ";
            // line 198
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "help", array()), "html", null, true));
            echo "
        </div>
      </div>
    </div>
  ";
        }
        // line 203
        echo "<!--End Help-->

<!-- Start Top Widget -->
";
        // line 206
        if (($context["is_front"] ?? null)) {
            echo "  
  ";
            // line 207
            if ((($this->getAttribute(($context["page"] ?? null), "topwidget_left", array()) || $this->getAttribute(($context["page"] ?? null), "topwidget_middle", array())) || $this->getAttribute(($context["page"] ?? null), "topwidget_right", array()))) {
                // line 208
                echo "    <div class=\"topwidget\">
      <!-- start: Container -->
      <div class=\"container\">
        
        <div class=\"row\">

          <!-- Top widget left region -->
          
          ";
                // line 216
                if ($this->getAttribute(($context["page"] ?? null), "topwidget_left", array())) {
                    // line 217
                    echo "            <div class = ";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["topwidget_class"] ?? null), "html", null, true));
                    echo ">
              ";
                    // line 218
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "topwidget_left", array()), "html", null, true));
                    echo "
            </div>
          ";
                }
                // line 221
                echo "          
          <!-- End top widget left region -->\t\t  
          <!-- Top widget middle region -->
          
          ";
                // line 225
                if ($this->getAttribute(($context["page"] ?? null), "topwidget_middle", array())) {
                    // line 226
                    echo "            <div class = ";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["topwidget_class"] ?? null), "html", null, true));
                    echo ">
              ";
                    // line 227
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "topwidget_middle", array()), "html", null, true));
                    echo "
            </div>
          ";
                }
                // line 230
                echo "          
          <!-- End top widget middle region -->
          <!-- Top widget right region -->
          
          ";
                // line 234
                if ($this->getAttribute(($context["page"] ?? null), "topwidget_right", array())) {
                    // line 235
                    echo "            <div class = ";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["topwidget_class"] ?? null), "html", null, true));
                    echo ">
              ";
                    // line 236
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "topwidget_right", array()), "html", null, true));
                    echo "
            </div>
          ";
                }
                // line 239
                echo "          
          <!-- End top widget right region -->
        </div>
      </div>
    </div>
  ";
            }
        }
        // line 246
        echo "<!--End Top Widget -->


<!-- Page Title -->
";
        // line 250
        if (($this->getAttribute(($context["page"] ?? null), "page_title", array()) &&  !($context["is_front"] ?? null))) {
            // line 251
            echo "  <div id=\"page-title\">
    <div id=\"page-title-inner\">
      <!-- start: Container -->
      <div class=\"container-fluid\">
        ";
            // line 255
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "page_title", array()), "html", null, true));
            echo "
      </div>
    </div>
  </div>
";
        }
        // line 260
        echo "<!-- End Page Title -->


<!-- layout -->
<div id=\"wrapper\">
  <!-- start: Container -->
  <div class=\"container-fluid\">
    
    <!--Start Content Top-->
    ";
        // line 269
        if ($this->getAttribute(($context["page"] ?? null), "content_top", array())) {
            // line 270
            echo "    <div class=\"content-top\">
        <div class=\"row\">
\t\t  <div class=\"col-md-12\">
            ";
            // line 273
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content_top", array()), "html", null, true));
            echo "
\t\t  </div>
        </div>
\t</div>
    ";
        }
        // line 278
        echo "    <!--End Content Top-->
    
    <!--start:Breadcrumbs -->
\t";
        // line 281
        if ( !($context["is_front"] ?? null)) {
            // line 282
            echo "    <div class=\"row\">
      <div class=\"col-md-12\">";
            // line 283
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "breadcrumb", array()), "html", null, true));
            echo "</div>
    </div>
\t";
        }
        // line 286
        echo "    <!--End Breadcrumbs-->
\t
    <div class=\"row layout\">
      <!--- Start Left Sidebar -->
      ";
        // line 290
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", array())) {
            // line 291
            echo "          <div class = \"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["sidebarfirst"] ?? null), "html", null, true));
            echo " sidebar-first\">
            ";
            // line 292
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_first", array()), "html", null, true));
            echo "
          </div>
      ";
        }
        // line 295
        echo "      <!---End Left Sidebar -->
       ";
        // line 296
        if (($context["is_front"] ?? null)) {
            // line 297
            echo "       ";
            if (($this->getAttribute(($context["language"] ?? null), "getId", array(), "method") == "fr")) {
                // line 298
                echo "           <h1 class=\"text-center titrehome\">Les embargos sur les armes </h1
            ";
            } else {
                // line 300
                echo "           <h1 class=\"text-center titrehome\" >The arms embargoes</h1>
             
       ";
            }
            // line 302
            echo "  
       ";
        }
        // line 303
        echo "  
      <!--- Start content -->

    ";
        // line 306
        if ($this->getAttribute(($context["page"] ?? null), "content", array())) {
            // line 307
            echo "     <div class=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["contentlayout"] ?? null), "html", null, true));
            echo " content-layout\">
      ";
            // line 308
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
            echo "
      ";
            // line 309
            if (($context["is_front"] ?? null)) {
                echo " 
                
    
        
    <div class=\"col-md-12\">
        <div class=\"col-md-1\">
            
        </div>
        
         <div class=\"col-md-4\">
  <span class=\" fa-stack fa-5x has-badge\" data-count=\"3\">
    <i class=\" fa fa-circle fa-stack-2x\"></i>
    <i class=\"p3 fa fa-database fa-stack-1x fa-inverse\" data-count=\"5\"></i>
  </span>
  ";
                // line 323
                if (($this->getAttribute(($context["language"] ?? null), "getId", array(), "method") == "fr")) {
                    // line 324
                    echo " <p>
   
    Cette base de données fournit un aperçu le plus actuel possible des régimes d’embargos sur les armes. 
    L’information contenue est par conséquent régulièrement mise à jour, vérifiée et enrichie 
 </p>
 ";
                } else {
                    // line 330
                    echo " <p>
    
    This database aims to give an updated snapshot of the arms embargoes’ regimes. 
    The information contained herein is therefore regularly updated, checked and supplemented.
 </p>
 ";
                }
                // line 336
                echo "  
</div>
     <div class=\"col-md-3\">
    <span class=\" fa-stack fa-5x has-badge\" data-count=\"3\">
    <i class=\" fa fa-circle fa-stack-2x\"></i>
    <i  class=\"p3 fa fa-book fa-stack-1x fa-inverse\" data-count=\"5\"></i>
    </span>
  ";
                // line 343
                if (($this->getAttribute(($context["language"] ?? null), "getId", array(), "method") == "fr")) {
                    // line 344
                    echo "  <p>
     L’information contenue dans cette base de données est régulièrement mis à jour, enrichie et vérifiée par le GRIP. 
  </p>
  ";
                } else {
                    // line 348
                    echo "  <p>
     The information of this database is regularly updated, checked and supplemented.  
  </p>
  ";
                }
                // line 352
                echo "</div>
 
    
<div class=\"col-md-4\">
    
  <span class=\"p1 fa-stack fa-5x has-badge\" data-count=\"3\">
    <i class=\"p2 fa fa-circle fa-stack-2x\"></i>
    <i  class=\"p3 fa fa-institution fa-stack-1x fa-inverse\" data-count=\"5\"></i>
  </span>
   ";
                // line 361
                if (($this->getAttribute(($context["language"] ?? null), "getId", array(), "method") == "fr")) {
                    // line 362
                    echo "   <p>
   Les organisations internationales et régionales ayant adopté et / ou mis en œuvre des mesures des embargos sur les armes depuis 2000 sont les suivantes : la Communauté Économique des États d’Afrique de l’Ouest (CEDEAO), la Ligue des États Arabes (LEA), l’Organisation pour la Sécurité 
   et la Coopération en Europe (OSCE), l’Union européenne (UE) et les Nations unies. 
   <p>
    ";
                } else {
                    // line 366
                    echo "     
   <p>
   Regional or international organisations which have enacted and / or implemented arms embargoes since 2000 are the following : The African Union (AU), The Economic Community of African States (ECOWAS), the European Union (EU), the League of Arab States (LAS), 
   the Organisation for Security and Cooperation in Europe (OSCE) and the United Nations (UN).   
   </p>
   ";
                }
                // line 371
                echo " 
</div>


</div>

    <div class=\"row\">
        <div class=\"col-lg-12 \">
           <div class=\"col-lg-1 \">
                  </div>
                  
                  <div class=\"col-lg-11 \">
              
            ";
                // line 384
                if (($this->getAttribute(($context["language"] ?? null), "getId", array(), "method") == "fr")) {
                    // line 385
                    echo "            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<h1 class=\"soustitrehome\">Les embargos sur les armes en quelques chiffres :</h1>
        ";
                } else {
                    // line 387
                    echo "            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<h1 class=\"soustitrehome\">Key figures on arms embargoes :</h1>
        ";
                }
                // line 388
                echo " 
            </div>
        </div>
    </div>

    
   <!--chiffres embargos-->
    
  <div class=\"col-lg-12\">
       
      <div class=\"col-lg-2\"></div>
  <div class=\"col-lg-5\">
      <br>
    
 ";
                // line 402
                if (($this->getAttribute(($context["language"] ?? null), "getId", array(), "method") == "fr")) {
                    // line 403
                    echo "  
  <p>
   <i><h1><b>&nbsp;&nbsp;22</b></h1></i> 
  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nombre d’États ou territoires sous embargo </p> <br>
  </p>
  <p>
      <i><h1><b>&nbsp;&nbsp;5</b></h1> </i>   
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nombre d’entités non-étatiques sous embargos <br>   
  </p>
    <p>
        <i> <h1><b>&nbsp;&nbsp;6</b></h1> </i> 
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Nombre d’organisations mettant en œuvre un embargo <br>
 ";
                } else {
                    // line 416
                    echo "     
  <p>
   <i><h1><b>&nbsp;&nbsp;22</b></h1></i> 
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Number of States or territories currently under arms embargo
  </p>
   <p>
       <i>  <h1><b>&nbsp;&nbsp;5</b></h1></i>    
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Number of non-state entities currently under arms embargo   
  </p>
   
  <p>
      <i><h1><b>&nbsp;&nbsp;&nbsp;6</b></h1> </i>
   
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Number of multilateral organizations implementing arms embargoes 
  </p>
   ";
                }
                // line 431
                echo "  
</div>
<div class=\"col-lg-5\">
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
            // line 480
            echo "      ";
        }
        // line 481
        echo "      <!---End content -->

      <!--- Start Right Sidebar -->
      ";
        // line 484
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", array())) {
            // line 485
            echo "          <div class=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["sidebarsecond"] ?? null), "html", null, true));
            echo " sidebar-second\">
            ";
            // line 486
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_second", array()), "html", null, true));
            echo "
          </div>

      ";
        }
        // line 490
        echo "      <!---End Right Sidebar -->
      
    </div>
    <!--End Content -->

    <!--Start Content Bottom-->
    ";
        // line 496
        if ($this->getAttribute(($context["page"] ?? null), "content_bottom", array())) {
            // line 497
            echo "        
    <div class=\"content-bottom\">
        <div class=\"row\">
\t\t  <div class=\"col-md-12\">
                      
   
            ";
            // line 503
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content_bottom", array()), "html", null, true));
            echo "
\t\t  </div>
        </div>
\t</div>
    ";
        }
        // line 508
        echo "    <!--End Content Bottom-->
  </div>
</div>
<!-- End layout -->

<!-- Start Footer -->
  ";
        // line 514
        if (((($this->getAttribute(($context["page"] ?? null), "footer_top_one", array()) || $this->getAttribute(($context["page"] ?? null), "footer_top_two", array())) || $this->getAttribute(($context["page"] ?? null), "footer_top_three", array())) || $this->getAttribute(($context["page"] ?? null), "footer_top_four", array()))) {
            // line 515
            echo "    <div class=\"footer-widgets\">
      <!-- Start Container -->
      <div class=\"container\">
        
        <div class=\"row\">

          <!-- Start Footer Top One Region -->
          
          ";
            // line 523
            if ($this->getAttribute(($context["page"] ?? null), "footer_top_one", array())) {
                // line 524
                echo "            <div class = ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_top_class"] ?? null), "html", null, true));
                echo ">
              ";
                // line 525
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_top_one", array()), "html", null, true));
                echo "
            </div>
          ";
            }
            // line 528
            echo "          
          <!-- End Footer Top One Region -->

          <!-- Start Footer Top Two Region -->
          ";
            // line 532
            if ($this->getAttribute(($context["page"] ?? null), "footer_top_two", array())) {
                // line 533
                echo "            <div class = ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_top_class"] ?? null), "html", null, true));
                echo ">
              ";
                // line 534
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_top_two", array()), "html", null, true));
                echo "
            </div>
          ";
            }
            // line 537
            echo "          
          <!-- End Footer Top Two Region -->

          <!-- Start Footer Top Three Region -->
          
          ";
            // line 542
            if ($this->getAttribute(($context["page"] ?? null), "footer_top_three", array())) {
                // line 543
                echo "            <div class = ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_top_class"] ?? null), "html", null, true));
                echo ">
              ";
                // line 544
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_top_three", array()), "html", null, true));
                echo "
            </div>
          ";
            }
            // line 547
            echo "          
          <!-- End Footer Top Three Region -->
\t\t  
\t\t  <!-- Start Footer Top Four Region -->

          ";
            // line 552
            if ($this->getAttribute(($context["page"] ?? null), "footer_top_four", array())) {
                // line 553
                echo "          <div class = ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_top_class"] ?? null), "html", null, true));
                echo ">
            ";
                // line 554
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_top_four", array()), "html", null, true));
                echo "
          </div>
          ";
            }
            // line 557
            echo "\t\t  
\t\t  <!-- End Footer Top Four Region -->

        </div>
      </div>
    </div>
  ";
        }
        // line 564
        echo "  <!-- Footer Region-->
  ";
        // line 565
        if ($this->getAttribute(($context["page"] ?? null), "footer", array())) {
            // line 566
            echo "    <div class=\"footer-space\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-12\">
              
            ";
            // line 571
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer", array()), "html", null, true));
            echo "
          </div>
      </div>
      </div>
\t</div>
  ";
        }
        // line 577
        echo "  <!-- End Footer Region-->
<!--End Footer -->

<!-- Start Footer Ribbon -->
";
        // line 581
        if ($this->getAttribute(($context["page"] ?? null), "footer_menu", array())) {
            // line 582
            echo "    
     ";
            // line 583
            if (($context["is_front"] ?? null)) {
                // line 584
                echo "    <div style=\"background-color: #246F8C;\" class=\"panel-body\">
        <div class=\"col-lg-12\">
         
            <div style=\"color: #ffffff;\" class=\"col-lg-9\">
   ";
                // line 588
                if (($this->getAttribute(($context["language"] ?? null), "getId", array(), "method") == "fr")) {
                    echo " 
       <br>
       
  <p><i>
  Cette base de données est réalisée dans le cadre de la « Cellule de veille sur l’évolution de la production 
  et des transferts d’armes en Belgique, en Europe et dans le monde», financée par la Région wallonne, 
  et bénéficie du soutien financier de l’UNSCAR. Les informations contenues dans cette base de données 
  relèvent de la seule responsabilité du GRIP.
  Le GRIP, la Région wallonne et l’UNSCAR ne peuvent être tenus responsables 
  de l’utilisation qui en serait faite.   </i> </p>
  <p><i></i></p>
     
  ";
                } else {
                    // line 601
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
                // line 612
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
            // line 631
            echo "  <div class=\"footer-ribbon\"><!-- 
      <div style=\"background-color: #eee9e9;\" class=\"panel-body\">
    
         <div class=\"row\">
         <p style=\"color: #246F8C;\"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Contactez le GRIP</p>
         <a href=\"https://www.grip.org/fr/\" style=\"color: #246F8C;\">   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Visitez le site du Grip</a>
         </div>
        
      <div class=\"row\">
       
          
        <div class=\"col-lg-12\">
            <div class=\"col-lg-4\"></div> 
  
        
     
        <div class=\"col-lg-6\">
            <p style=\"color: #246F8C; font-size: 105%\"> <br> © Grip   Groupe de recherche et d'information sur la paix et la sécurité</p>
            
            <div class=\"social-media\">
               
           
           
          </div>
        </div>
        
         <div class=\"col-lg-2\">
          
             </br>
             <br/>

 
       
        </div>
        
        </div>
      </div>
    
    </div>
      <div style=\"background-color:#eee9e9;\" class=\"panel-body\">
    
         <div class=\"row\">
         <!-- <p style=\"color: #246F8C;\"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Contactez le GRIP</p>
         <a href=\"https://www.grip.org/fr/\" style=\"color: #246F8C;\">   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Visitez le site du Grip</a>--->
         </div>
        
      <div class=\"row\">
       
          
        <div class=\"col-lg-12\">
           <div class=\"col-lg-5\"></div> 
  
        
  
         ";
            // line 685
            if (($context["show_social_icon"] ?? null)) {
                // line 686
                echo "    
        ";
            }
            // line 688
            echo "    
            <div class=\"col-lg-5\"></div> 
        </div>
      </div>
    
    </div>
  </div>
";
        }
        // line 696
        echo "<!-- End Footer Ribbon -->


<!-- #footer-bottom -->
<div id=\"footer-bottom\">
   


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
        // line 718
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true));
        echo " - Groupe de recherche et d'information sur la paix et la sécurité</p>
        <div class=\"col-md-12 \">
           <div class=\"social-media\">
            
              <a href=\"https://www.facebook.com/GRIP.1979\"class=\"icon-facebook\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Facebook\"><i class=\"fa fa-facebook\"></i></a>
            
              <a href=\"https://twitter.com/grip_org\" class=\"icon-twitter\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Twitter\"><i class=\"fa fa-twitter\"></i></a>
           
              <a href=\"https://www.linkedin.com/company/grip\" class=\"icon-linkedin\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"LinkedIn\"><i class=\"fa fa-linkedin\"></i></a>
         
           </div>
        </div>
        <img src=\"https://www.chea.org/sites/default/files/2018-04/Institutions1_0.jpg\" >
        
        
        
         ";
        // line 734
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_menu", array()), "html", null, true));
        echo "
       
        ";
        // line 736
        if (($context["show_credit_link"] ?? null)) {
            // line 737
            echo "          <p class=\"credit\">Theme for <a href=\"https://www.drupal.org/8\" target=\"_blank\">Drupal 8</a></p>
        ";
        }
        // line 739
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
        return array (  1038 => 739,  1034 => 737,  1032 => 736,  1027 => 734,  1008 => 718,  984 => 696,  974 => 688,  970 => 686,  968 => 685,  912 => 631,  891 => 612,  878 => 601,  862 => 588,  856 => 584,  854 => 583,  851 => 582,  849 => 581,  843 => 577,  834 => 571,  827 => 566,  825 => 565,  822 => 564,  813 => 557,  807 => 554,  802 => 553,  800 => 552,  793 => 547,  787 => 544,  782 => 543,  780 => 542,  773 => 537,  767 => 534,  762 => 533,  760 => 532,  754 => 528,  748 => 525,  743 => 524,  741 => 523,  731 => 515,  729 => 514,  721 => 508,  713 => 503,  705 => 497,  703 => 496,  695 => 490,  688 => 486,  683 => 485,  681 => 484,  676 => 481,  673 => 480,  622 => 431,  604 => 416,  589 => 403,  587 => 402,  571 => 388,  567 => 387,  563 => 385,  561 => 384,  546 => 371,  538 => 366,  531 => 362,  529 => 361,  518 => 352,  512 => 348,  506 => 344,  504 => 343,  495 => 336,  487 => 330,  479 => 324,  477 => 323,  460 => 309,  456 => 308,  451 => 307,  449 => 306,  444 => 303,  440 => 302,  435 => 300,  431 => 298,  428 => 297,  426 => 296,  423 => 295,  417 => 292,  412 => 291,  410 => 290,  404 => 286,  398 => 283,  395 => 282,  393 => 281,  388 => 278,  380 => 273,  375 => 270,  373 => 269,  362 => 260,  354 => 255,  348 => 251,  346 => 250,  340 => 246,  331 => 239,  325 => 236,  320 => 235,  318 => 234,  312 => 230,  306 => 227,  301 => 226,  299 => 225,  293 => 221,  287 => 218,  282 => 217,  280 => 216,  270 => 208,  268 => 207,  264 => 206,  259 => 203,  251 => 198,  246 => 195,  244 => 194,  239 => 191,  231 => 186,  222 => 179,  220 => 178,  213 => 173,  205 => 168,  200 => 165,  198 => 164,  192 => 160,  186 => 158,  184 => 157,  175 => 150,  167 => 145,  160 => 141,  147 => 130,  141 => 129,  139 => 128,  133 => 124,  127 => 122,  125 => 121,  111 => 109,  97 => 97,  91 => 94,  86 => 93,  84 => 92,  78 => 88,  72 => 85,  67 => 84,  65 => 83,  54 => 74,  51 => 73,  49 => 72,  43 => 68,);
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
