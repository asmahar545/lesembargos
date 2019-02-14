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
        $tags = array("if" => 73);
        $filters = array("date" => 735);
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
        // line 73
        if (($context["is_front"] ?? null)) {
            // line 74
            echo "  ";
            if (($this->getAttribute(($context["page"] ?? null), "sliding_header_one", array()) || $this->getAttribute(($context["page"] ?? null), "sliding_header_two", array()))) {
                // line 75
                echo "      
    <div class=\"slidewidget\">
\t<div class=\"wrapper\">
      <!-- start: Container -->
      <div class=\"container\">
        
        <div class=\"row\">
          <div id=\"sliding-header-wrap\">
              
          <!-- Slide first region -->
          
          ";
                // line 86
                if ($this->getAttribute(($context["page"] ?? null), "sliding_header_one", array())) {
                    // line 87
                    echo "            <div class = ";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["slidewidget_first"] ?? null), "html", null, true));
                    echo ">
              ";
                    // line 88
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sliding_header_one", array()), "html", null, true));
                    echo "
            </div>
          ";
                }
                // line 91
                echo "          
          <!-- End slide first region -->
          <!-- Slide second region -->
          
          ";
                // line 95
                if ($this->getAttribute(($context["page"] ?? null), "sliding_header_two", array())) {
                    // line 96
                    echo "            <div class = ";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["slidewidget_class"] ?? null), "html", null, true));
                    echo ">
              ";
                    // line 97
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sliding_header_two", array()), "html", null, true));
                    echo "
            </div>
          ";
                }
                // line 100
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
        // line 112
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
        // line 125
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "header", array())) {
            // line 126
            echo "          ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header", array()), "html", null, true));
            echo "
        ";
        }
        // line 128
        echo "      </div>

      <!-- Navigation -->
      <div class=\"col-md-9\">
        ";
        // line 132
        if ($this->getAttribute(($context["page"] ?? null), "primary_menu", array())) {
            // line 133
            echo "          ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "primary_menu", array()), "html", null, true));
            echo "
        ";
        }
        // line 134
        echo "      
      </div>
      <!--End Navigation -->
      

      </div>
    </div>
  </nav>

  <!-- Banner -->


  ";
        // line 146
        if ((($context["is_front"] ?? null) && $this->getAttribute(($context["page"] ?? null), "slideshow", array()))) {
            echo "  
    <div class=\"container slideshow\">
      <div class=\"row\">
        <div class=\"col-md-12\">
            <img  src=\"http://embargo.grip.org/ban1.jpg\"HEIGHT=10000    >
          ";
            // line 152
            echo "        </div>
      </div>
    </div>
  ";
        }
        // line 156
        echo "  <!-- End Banner -->

</header>
<!--End Header & Navbar -->


<!--Search-->
  ";
        // line 163
        if ((($context["is_front"] ?? null) && $this->getAttribute(($context["page"] ?? null), "search", array()))) {
            // line 164
            echo "    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "search", array()), "html", null, true));
            echo "
  ";
        }
        // line 166
        echo "<!--End Search-->


<!--Home page banner-->
  ";
        // line 170
        if ((($context["is_front"] ?? null) && $this->getAttribute(($context["page"] ?? null), "promo", array()))) {
            // line 171
            echo "    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          ";
            // line 174
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "promo", array()), "html", null, true));
            echo "
        </div>
      </div>
    </div>
  ";
        }
        // line 179
        echo "<!--End Home page banner-->



<!--Highlighted-->
  ";
        // line 184
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", array())) {
            // line 185
            echo "    <div class=\"container\">
      <div class=\"row\">
      <br>
      <br>

  
<div class=\"col-md-12\">
 ";
            // line 192
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "highlighted", array()), "html", null, true));
            echo "
 </div>
 </div>
  </div>
  ";
        }
        // line 197
        echo "<!--End Highlighted-->

<!--Help-->
  ";
        // line 200
        if ($this->getAttribute(($context["page"] ?? null), "help", array())) {
            // line 201
            echo "    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          ";
            // line 204
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "help", array()), "html", null, true));
            echo "
        </div>
      </div>
    </div>
  ";
        }
        // line 209
        echo "<!--End Help-->

<!-- Start Top Widget -->
";
        // line 212
        if (($context["is_front"] ?? null)) {
            echo "  
  ";
            // line 213
            if ((($this->getAttribute(($context["page"] ?? null), "topwidget_left", array()) || $this->getAttribute(($context["page"] ?? null), "topwidget_middle", array())) || $this->getAttribute(($context["page"] ?? null), "topwidget_right", array()))) {
                // line 214
                echo "    <div class=\"topwidget\">
      <!-- start: Container -->
      <div class=\"container\">
        
        <div class=\"row\">

          <!-- Top widget left region -->
          
          ";
                // line 222
                if ($this->getAttribute(($context["page"] ?? null), "topwidget_left", array())) {
                    // line 223
                    echo "            <div class = ";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["topwidget_class"] ?? null), "html", null, true));
                    echo ">
              ";
                    // line 224
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "topwidget_left", array()), "html", null, true));
                    echo "
            </div>
          ";
                }
                // line 227
                echo "          
          <!-- End top widget left region -->\t\t  
          <!-- Top widget middle region -->
          
          ";
                // line 231
                if ($this->getAttribute(($context["page"] ?? null), "topwidget_middle", array())) {
                    // line 232
                    echo "            <div class = ";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["topwidget_class"] ?? null), "html", null, true));
                    echo ">
              ";
                    // line 233
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "topwidget_middle", array()), "html", null, true));
                    echo "
            </div>
          ";
                }
                // line 236
                echo "          
          <!-- End top widget middle region -->
          <!-- Top widget right region -->
          
          ";
                // line 240
                if ($this->getAttribute(($context["page"] ?? null), "topwidget_right", array())) {
                    // line 241
                    echo "            <div class = ";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["topwidget_class"] ?? null), "html", null, true));
                    echo ">
              ";
                    // line 242
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "topwidget_right", array()), "html", null, true));
                    echo "
            </div>
          ";
                }
                // line 245
                echo "          
          <!-- End top widget right region -->
        </div>
      </div>
    </div>
  ";
            }
        }
        // line 252
        echo "<!--End Top Widget -->


<!-- Page Title -->
";
        // line 256
        if (($this->getAttribute(($context["page"] ?? null), "page_title", array()) &&  !($context["is_front"] ?? null))) {
            // line 257
            echo "  <div id=\"page-title\">
    <div id=\"page-title-inner\">
      <!-- start: Container -->
      <div class=\"container-fluid\">
        ";
            // line 261
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "page_title", array()), "html", null, true));
            echo "
      </div>
    </div>
  </div>
";
        }
        // line 266
        echo "<!-- End Page Title -->


<!-- layout -->
<div id=\"wrapper\">
  <!-- start: Container -->
  <div class=\"container-fluid\">
    
    <!--Start Content Top-->
    ";
        // line 275
        if ($this->getAttribute(($context["page"] ?? null), "content_top", array())) {
            // line 276
            echo "    <div class=\"content-top\">
        <div class=\"row\">
\t\t  <div class=\"col-md-12\">
            ";
            // line 279
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content_top", array()), "html", null, true));
            echo "
\t\t  </div>
        </div>
\t</div>
    ";
        }
        // line 284
        echo "    <!--End Content Top-->
    
    <!--start:Breadcrumbs -->
\t";
        // line 287
        if ( !($context["is_front"] ?? null)) {
            // line 288
            echo "    <div class=\"row\">
      <div class=\"col-md-12\">";
            // line 289
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "breadcrumb", array()), "html", null, true));
            echo "</div>
    </div>
\t";
        }
        // line 292
        echo "    <!--End Breadcrumbs-->
\t
    <div class=\"row layout\">
      <!--- Start Left Sidebar -->
      ";
        // line 296
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", array())) {
            // line 297
            echo "          <div class = \"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["sidebarfirst"] ?? null), "html", null, true));
            echo " sidebar-first\">
            ";
            // line 298
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_first", array()), "html", null, true));
            echo "
          </div>
      ";
        }
        // line 301
        echo "      <!---End Left Sidebar -->
       ";
        // line 302
        if (($context["is_front"] ?? null)) {
            // line 303
            echo "       ";
            if (($this->getAttribute(($context["language"] ?? null), "getId", array(), "method") == "fr")) {
                // line 304
                echo "           <h1 class=\"text-center titrehome\">Les embargos sur les armes </h1
            ";
            } else {
                // line 306
                echo "           <h1 class=\"text-center titrehome\" >The arms embargoes</h1>
             
       ";
            }
            // line 308
            echo "  
       ";
        }
        // line 309
        echo "  
      <!--- Start content -->

    ";
        // line 312
        if ($this->getAttribute(($context["page"] ?? null), "content", array())) {
            // line 313
            echo "     <div class=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["contentlayout"] ?? null), "html", null, true));
            echo " content-layout\">
      ";
            // line 314
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
            echo "
      ";
            // line 315
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
                // line 329
                if (($this->getAttribute(($context["language"] ?? null), "getId", array(), "method") == "fr")) {
                    // line 330
                    echo " <p>
   
    Cette base de données fournit un aperçu le plus actuel possible des régimes d’embargos sur les armes. 
    L’information contenue est par conséquent régulièrement mise à jour, vérifiée et enrichie 
 </p>
 ";
                } else {
                    // line 336
                    echo " <p>
    
    This database aims to give an updated snapshot of the arms embargoes’ regimes. 
    The information contained herein is therefore regularly updated, checked and supplemented.
 </p>
 ";
                }
                // line 342
                echo "  
</div>
     <div class=\"col-md-3\">
    <span class=\" fa-stack fa-5x has-badge\" data-count=\"3\">
    <i class=\" fa fa-circle fa-stack-2x\"></i>
    <i  class=\"p3 fa fa-book fa-stack-1x fa-inverse\" data-count=\"5\"></i>
    </span>
  ";
                // line 349
                if (($this->getAttribute(($context["language"] ?? null), "getId", array(), "method") == "fr")) {
                    // line 350
                    echo "  <p>
     L’information contenue dans cette base de données est régulièrement mis à jour, enrichie et vérifiée par le GRIP. 
  </p>
  ";
                } else {
                    // line 354
                    echo "  <p>
     The information of this database is regularly updated, checked and supplemented.  
  </p>
  ";
                }
                // line 358
                echo "</div>
 
    
<div class=\"col-md-4\">
    
  <span class=\"p1 fa-stack fa-5x has-badge\" data-count=\"3\">
    <i class=\"p2 fa fa-circle fa-stack-2x\"></i>
    <i  class=\"p3 fa fa-institution fa-stack-1x fa-inverse\" data-count=\"5\"></i>
  </span>
   ";
                // line 367
                if (($this->getAttribute(($context["language"] ?? null), "getId", array(), "method") == "fr")) {
                    // line 368
                    echo "   <p>
   Les organisations internationales et régionales ayant adopté et / ou mis en œuvre des mesures des embargos sur les armes depuis 2000 sont les suivantes : la Communauté Économique des États d’Afrique de l’Ouest (CEDEAO), la Ligue des États Arabes (LEA), l’Organisation pour la Sécurité 
   et la Coopération en Europe (OSCE), l’Union européenne (UE) et les Nations unies. 
   <p>
    ";
                } else {
                    // line 372
                    echo "     
   <p>
   Regional or international organisations which have enacted and / or implemented arms embargoes since 2000 are the following : The African Union (AU), The Economic Community of African States (ECOWAS), the European Union (EU), the League of Arab States (LAS), 
   the Organisation for Security and Cooperation in Europe (OSCE) and the United Nations (UN).   
   </p>
   ";
                }
                // line 377
                echo " 
</div>


</div>

    <div class=\"row\">
        <div class=\"col-lg-12 \">
           <div class=\"col-lg-1 \">
                  </div>
                  
                  <div class=\"col-lg-11 \">
              
            ";
                // line 390
                if (($this->getAttribute(($context["language"] ?? null), "getId", array(), "method") == "fr")) {
                    // line 391
                    echo "            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<h1 class=\"soustitrehome\">Les embargos sur les armes en quelques chiffres :</h1>
        ";
                } else {
                    // line 393
                    echo "            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<h1 class=\"soustitrehome\">Key figures on arms embargoes :</h1>
        ";
                }
                // line 394
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
                // line 408
                if (($this->getAttribute(($context["language"] ?? null), "getId", array(), "method") == "fr")) {
                    // line 409
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
       <br>
    <br>
 ";
                } else {
                    // line 424
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
    <br>
    <br>
   ";
                }
                // line 441
                echo "  
</div>
<div class=\"col-lg-5\">
    <br>
    <br>
     <img src=\"http://embargo.grip.org/pays.jpg\" >
 <!-- <div id=\"imageembargo\"> </div>*-->
    <br>
    <br>
      <br>
    <br>
    
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
            // line 495
            echo "      ";
        }
        // line 496
        echo "      <!---End content -->

      <!--- Start Right Sidebar -->
      ";
        // line 499
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", array())) {
            // line 500
            echo "          <div class=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["sidebarsecond"] ?? null), "html", null, true));
            echo " sidebar-second\">
            ";
            // line 501
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_second", array()), "html", null, true));
            echo "
          </div>

      ";
        }
        // line 505
        echo "      <!---End Right Sidebar -->
      
    </div>
    <!--End Content -->

    <!--Start Content Bottom-->
    ";
        // line 511
        if ($this->getAttribute(($context["page"] ?? null), "content_bottom", array())) {
            // line 512
            echo "        
    <div class=\"content-bottom\">
        <div class=\"row\">
\t\t  <div class=\"col-md-12\">
                      
   
            ";
            // line 518
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content_bottom", array()), "html", null, true));
            echo "
\t\t  </div>
        </div>
\t</div>
    ";
        }
        // line 523
        echo "    <!--End Content Bottom-->
  </div>
</div>
<!-- End layout -->

<!-- Start Footer -->
  ";
        // line 529
        if (((($this->getAttribute(($context["page"] ?? null), "footer_top_one", array()) || $this->getAttribute(($context["page"] ?? null), "footer_top_two", array())) || $this->getAttribute(($context["page"] ?? null), "footer_top_three", array())) || $this->getAttribute(($context["page"] ?? null), "footer_top_four", array()))) {
            // line 530
            echo "    <div class=\"footer-widgets\">
      <!-- Start Container -->
      <div class=\"container\">
        
        <div class=\"row\">

          <!-- Start Footer Top One Region -->
          
          ";
            // line 538
            if ($this->getAttribute(($context["page"] ?? null), "footer_top_one", array())) {
                // line 539
                echo "            <div class = ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_top_class"] ?? null), "html", null, true));
                echo ">
              ";
                // line 540
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_top_one", array()), "html", null, true));
                echo "
            </div>
          ";
            }
            // line 543
            echo "          
          <!-- End Footer Top One Region -->

          <!-- Start Footer Top Two Region -->
          ";
            // line 547
            if ($this->getAttribute(($context["page"] ?? null), "footer_top_two", array())) {
                // line 548
                echo "            <div class = ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_top_class"] ?? null), "html", null, true));
                echo ">
              ";
                // line 549
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_top_two", array()), "html", null, true));
                echo "
            </div>
          ";
            }
            // line 552
            echo "          
          <!-- End Footer Top Two Region -->

          <!-- Start Footer Top Three Region -->
          
          ";
            // line 557
            if ($this->getAttribute(($context["page"] ?? null), "footer_top_three", array())) {
                // line 558
                echo "            <div class = ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_top_class"] ?? null), "html", null, true));
                echo ">
              ";
                // line 559
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_top_three", array()), "html", null, true));
                echo "
            </div>
          ";
            }
            // line 562
            echo "          
          <!-- End Footer Top Three Region -->
\t\t  
\t\t  <!-- Start Footer Top Four Region -->

          ";
            // line 567
            if ($this->getAttribute(($context["page"] ?? null), "footer_top_four", array())) {
                // line 568
                echo "          <div class = ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_top_class"] ?? null), "html", null, true));
                echo ">
            ";
                // line 569
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_top_four", array()), "html", null, true));
                echo "
          </div>
          ";
            }
            // line 572
            echo "\t\t  
\t\t  <!-- End Footer Top Four Region -->

        </div>
      </div>
    </div>
  ";
        }
        // line 579
        echo "  <!-- Footer Region-->
  ";
        // line 580
        if ($this->getAttribute(($context["page"] ?? null), "footer", array())) {
            // line 581
            echo "    <div class=\"footer-space\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-12\">
              
            ";
            // line 586
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer", array()), "html", null, true));
            echo "
          </div>
      </div>
      </div>
\t</div>
  ";
        }
        // line 592
        echo "  <!-- End Footer Region-->
<!--End Footer -->

<!-- Start Footer Ribbon -->
";
        // line 596
        if ($this->getAttribute(($context["page"] ?? null), "footer_menu", array())) {
            // line 597
            echo "    
     ";
            // line 598
            if (($context["is_front"] ?? null)) {
                // line 599
                echo "    <div style=\"background-color: #246F8C;\" class=\"panel-body\">
        <div class=\"col-lg-12\">
         
            <div style=\"color: #ffffff;\" class=\"col-lg-9\">
   ";
                // line 603
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
                    // line 616
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
                // line 627
                echo "        </div>
            <div style=\"color: #ffffff;\" class=\"col-lg-1\">
               <!--<div id=\"communautefr\"></div> -->
               <img src=\"http://embargo.grip.org/logo_mini.png\" >
     
     
       </div>
            <div style=\"color: #ffffff;\" class=\"col-lg-1\">
                
     <!--<div id=\"communautewalonnie\"> </div>-->
     <img src=\"http://embargo.grip.org/logowallonie.png\" >
       </div>
          <div style=\"color: #ffffff;\" class=\"col-lg-1\">
                
    <!-- <div id=\"unscarlogo\"> </div>-->
     <img src=\"http://embargo.grip.org/unscar_logo.png\" >
     
       </div>
        </div>
    </div>
        ";
            }
            // line 648
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
            // line 702
            if (($context["show_social_icon"] ?? null)) {
                // line 703
                echo "    
        ";
            }
            // line 705
            echo "    
            <div class=\"col-lg-5\"></div> 
        </div>
      </div>
    
    </div>
  </div>
";
        }
        // line 713
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
        // line 735
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true));
        echo " - Groupe de recherche et d'information sur la paix et la sécurité</p>
        <div class=\"col-md-12 \">
           <div class=\"social-media\">
            
              <a href=\"https://www.facebook.com/GRIP.1979\"class=\"icon-facebook\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Facebook\"><i class=\"fa fa-facebook\"></i></a>
            
              <a href=\"https://twitter.com/grip_org\" class=\"icon-twitter\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Twitter\"><i class=\"fa fa-twitter\"></i></a>
           
              <a href=\"https://www.linkedin.com/company/grip\" class=\"icon-linkedin\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"LinkedIn\"><i class=\"fa fa-linkedin\"></i></a>
         
           </div>
        </div>
       
        
        
        
         ";
        // line 751
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_menu", array()), "html", null, true));
        echo "
       
        ";
        // line 753
        if (($context["show_credit_link"] ?? null)) {
            // line 754
            echo "          <p class=\"credit\">Theme for <a href=\"https://www.drupal.org/8\" target=\"_blank\">Drupal 8</a></p>
        ";
        }
        // line 756
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
        return array (  1053 => 756,  1049 => 754,  1047 => 753,  1042 => 751,  1023 => 735,  999 => 713,  989 => 705,  985 => 703,  983 => 702,  927 => 648,  904 => 627,  891 => 616,  875 => 603,  869 => 599,  867 => 598,  864 => 597,  862 => 596,  856 => 592,  847 => 586,  840 => 581,  838 => 580,  835 => 579,  826 => 572,  820 => 569,  815 => 568,  813 => 567,  806 => 562,  800 => 559,  795 => 558,  793 => 557,  786 => 552,  780 => 549,  775 => 548,  773 => 547,  767 => 543,  761 => 540,  756 => 539,  754 => 538,  744 => 530,  742 => 529,  734 => 523,  726 => 518,  718 => 512,  716 => 511,  708 => 505,  701 => 501,  696 => 500,  694 => 499,  689 => 496,  686 => 495,  630 => 441,  610 => 424,  593 => 409,  591 => 408,  575 => 394,  571 => 393,  567 => 391,  565 => 390,  550 => 377,  542 => 372,  535 => 368,  533 => 367,  522 => 358,  516 => 354,  510 => 350,  508 => 349,  499 => 342,  491 => 336,  483 => 330,  481 => 329,  464 => 315,  460 => 314,  455 => 313,  453 => 312,  448 => 309,  444 => 308,  439 => 306,  435 => 304,  432 => 303,  430 => 302,  427 => 301,  421 => 298,  416 => 297,  414 => 296,  408 => 292,  402 => 289,  399 => 288,  397 => 287,  392 => 284,  384 => 279,  379 => 276,  377 => 275,  366 => 266,  358 => 261,  352 => 257,  350 => 256,  344 => 252,  335 => 245,  329 => 242,  324 => 241,  322 => 240,  316 => 236,  310 => 233,  305 => 232,  303 => 231,  297 => 227,  291 => 224,  286 => 223,  284 => 222,  274 => 214,  272 => 213,  268 => 212,  263 => 209,  255 => 204,  250 => 201,  248 => 200,  243 => 197,  235 => 192,  226 => 185,  224 => 184,  217 => 179,  209 => 174,  204 => 171,  202 => 170,  196 => 166,  190 => 164,  188 => 163,  179 => 156,  173 => 152,  165 => 146,  151 => 134,  145 => 133,  143 => 132,  137 => 128,  131 => 126,  128 => 125,  114 => 112,  100 => 100,  94 => 97,  89 => 96,  87 => 95,  81 => 91,  75 => 88,  70 => 87,  68 => 86,  55 => 75,  52 => 74,  50 => 73,  43 => 68,);
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
