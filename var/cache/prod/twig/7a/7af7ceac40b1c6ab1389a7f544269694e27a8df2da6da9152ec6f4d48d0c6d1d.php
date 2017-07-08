<?php

/* AppBundle:Layout:layout.html.twig */
class __TwigTemplate_cedbb76bfe8b55d8d16d213f3b2e9c6ef0d70fd4df8d56130f8e15964f34913d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'styles' => array($this, 'block_styles'),
            'navbar' => array($this, 'block_navbar'),
            'content' => array($this, 'block_content'),
            'scripts' => array($this, 'block_scripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
\t<meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"icon\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" type=\"image/x-icon\" />
    ";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        // line 11
        echo "    ";
        $this->displayBlock('styles', $context, $blocks);
        // line 47
        echo "</head>
<body>
";
        // line 49
        $this->displayBlock('navbar', $context, $blocks);
        // line 111
        echo "    ";
        $this->displayBlock('content', $context, $blocks);
        // line 194
        $this->displayBlock('scripts', $context, $blocks);
        // line 233
        echo "</body>
</html>";
    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        // line 9
        echo "    <title>REDEXPERT | BETA</title>
    ";
    }

    // line 11
    public function block_styles($context, array $blocks = array())
    {
        // line 12
        echo "    <!-- Bootstrap -->
    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/bootstrap/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/sweetalert/sweetalert.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- font awesome for icons -->
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- flex slider css -->
    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/flexslider.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"screen\">
    <!-- animated css  -->
    <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/animate.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"screen\"> 
    <!-- Revolution Style-sheet -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/sweetalert.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/magnific-popup.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/rev-style.css"), "html", null, true);
        echo "\">
    <!--owl carousel css-->
    <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/owl-carousel/assets/owl.carousel.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"screen\">
    <link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/owl-carousel/assets/owl.theme.default.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"screen\">
    <!--mega menu -->
    <link href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/yamm.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <!--cube css-->
    <link href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/cubeportfolio/css/cubeportfolio.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
     <link href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/video-background/background.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <!-- custom css-->
    <link href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"screen\">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
      <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->
    <style type=\"text/css\">
        html,body{
            height:100%;
        }
    </style>
    ";
    }

    // line 49
    public function block_navbar($context, array $blocks = array())
    {
        // line 50
        echo "    <!--navigation -->
    <div class=\"navbar-static-top top-bar-dark yamm sticky\">            
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-4 hidden-xs\">
                    
                </div>
                <div class=\"col-sm-8 text-right\">
                    <ul class=\"list-inline top-dark-right\"> 
                        <li class=\"hidden-sm hidden-xs\" ><a href=\"mailto:m92moalj@uco.es\" ><i class=\"fa fa-envelope\"></i> m92moalj@uco.es</a></li>
                        <li class=\"hidden-sm hidden-xs\" ><a href=\"mailto:jorge.molinaalba@we-online.com\" ><i class=\"fa fa-envelope\"></i> jorge.molinaalba@we-online.com</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div><!--top-bar-dark end here-->
    <!-- Static navbar -->
    <div class=\"navbar navbar-default navbar-static-top yamm sticky\" role=\"navigation\">
        <div class=\"container\">
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                
                    <div class=\"top-bar-socials\" style=\"margin-left:15px;padding:10px;\">
                        <a href=\"https://www.facebook.com/Wuerth.Elektronik.Karriere/\" target=\"_blank\" class=\"social-icon-sm si-dark si-gray-round si-colored-facebook\">
                            <i class=\"fa fa-facebook\"></i>
                            <i class=\"fa fa-facebook\"></i>
                        </a>
                        <a href=\"https://twitter.com/we_online?lang=es\" target=\"_blank\" class=\"social-icon-sm si-dark si-gray-round si-colored-twitter\">
                            <i class=\"fa fa-twitter\"></i>
                            <i class=\"fa fa-twitter\"></i>
                        </a>
                        <a href=\"https://www.youtube.com/user/WuerthElektronik\" target=\"_blank\" class=\"social-icon-sm si-dark si-gray-round si-colored-google-plus\">
                            <i class=\"fa fa-youtube\"></i>
                            <i class=\"fa fa-youtube\"></i>
                        </a>
                    </div>     
            </div>

            <div class=\"navbar-collapse collapse\">
                <ul class=\"nav navbar-nav\" align=\"center\">
                    <li>
                        <img style=\"width: 50%;height: auto;margin-left: 40px\" src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/WE-RED.jpg"), "html", null, true);
        echo "\" alt=\"Logo REDEXPERT y Würth Elektronik\">
                    </li>
                    <!-- <li>
                        <img style=\"width: 25%;height: auto;padding-left: 10px;\" src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/logo.png"), "html", null, true);
        echo "\" alt=\"Logo UCO\">
                    </li> -->
                </ul>
                <ul class=\"nav navbar-nav navbar-right\">
                    <li>
                        <a href=\"";
        // line 104
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_homepage");
        echo "\" >Inicio</a>
                    </li>    
                </ul>
            </div>
        </div>
    </div>
    ";
    }

    // line 111
    public function block_content($context, array $blocks = array())
    {
        // line 112
        echo "    \t<div class=\"divide80\"></div>
    \t<div class=\"container\">
            <div class=\"row\" align=\"center\">
                <div class=\"col-md-12 col-sm-12 margin20\">
\t\t\t\t\t<h3>Proyecto desarrollado para la Universidad de Córdoba y Würth Elektronik <p style=\"font-size: 12px;\">por Jorge Molina Alba</p></h3>
\t\t\t\t</div>
                <div class=\"col-md-12 col-sm-12 margin20\">
\t\t\t\t\t<h3>Cálculo de las pérdidas de corriente alterna del filtro inductor en inversores  </h3>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t    <div class=\"container\">
\t\t\t<div class=\"row special-feature\">
\t\t\t\t<hr>
\t            <div class=\"col-md-4 col-sm-6 col-xs-12\">
\t                <a href=\"";
        // line 127
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_losses");
        echo "\">
\t\t                <div class=\"s-feature-box text-center\">
\t\t                    <div class=\"mask-top\">
\t\t                        <!-- Icon -->
\t\t                        <i class=\"fa fa-calculator\"></i>
\t\t                        <!-- Title -->
\t\t                        <h4>Cálculo de las pérdidas</h4>
\t\t                    </div>
\t\t                    <div class=\"mask-bottom\">
\t\t                        <!-- Icon -->
\t\t                        <i class=\"fa fa-calculator\"></i>
\t\t                        <!-- Title -->
\t\t                        <h4>Cálculo de las pérdidas</h4>
\t\t                        <!-- Text -->
\t\t                        <p>Procederemos al cálculo de las pérdidas de corriente rellenando un formulario y eligiendo el inductor.</p>
\t\t                    </div>
\t\t                </div>
\t\t            </a>   
\t\t\t\t</div>
                <div class=\"col-md-4 col-sm-6 col-xs-12\">
                    <a href=\"";
        // line 147
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_view");
        echo "\">
                        <div class=\"s-feature-box text-center\">
                            <div class=\"mask-top\">
                                <!-- Icon -->
                                <i class=\"fa fa-eye\"></i>
                                <!-- Title -->
                                <h4>Visualización de pérdidas</h4>
                            </div>
                            <div class=\"mask-bottom\">
                                <!-- Icon -->
                                <i class=\"fa fa-eye\"></i>
                                <!-- Title -->
                                <h4>Visualización de pérdidas</h4>
                                <!-- Text -->
                                <p>Procederemos a la visualización de las pérdidas de corriente calculadas mediante la web.</p>
                            </div>
                        </div>
                    </a>   
                </div>
                <div class=\"col-md-4 col-sm-6 col-xs-12\">
                    <a href=\"";
        // line 167
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_me");
        echo "\">
                        <div class=\"s-feature-box text-center\">
                            <div class=\"mask-top\">
                                <!-- Icon -->
                                <i class=\"fa fa-user-circle\"></i>
                                <!-- Title -->
                                <h4>Sobre Nosotros</h4>
                            </div>
                            <div class=\"mask-bottom\">
                                <!-- Icon -->
                                <i class=\"fa fa-user-circle\"></i>
                                <!-- Title -->
                                <h4>Sobre Nosotros</h4>
                                <!-- Text -->
                                <p>En caso de que quiera saber algo acerca de los componentes del proyecto, acceda a esta ventana.</p>
                            </div>
                        </div>
                    </a>   
                </div>
\t\t\t</div>
\t\t</div>
\t</body>
\t



    ";
    }

    // line 194
    public function block_scripts($context, array $blocks = array())
    {
        // line 195
        echo "\t<!--scripts and plugins -->
    <!--must need plugin jquery-->
    <script src=\"";
        // line 197
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 198
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery-migrate.min.js"), "html", null, true);
        echo "\"></script> 
    <!--bootstrap js plugin-->
    <script src=\"";
        // line 200
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>       
    <!--easing plugin for smooth scroll-->
    <script src=\"";
        // line 202
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.easing.1.3.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!--sticky header-->
    <script type=\"text/javascript\" src=\"";
        // line 204
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.sticky.js"), "html", null, true);
        echo "\"></script>
    <!--flex slider plugin-->
    <script src=\"";
        // line 206
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.flexslider-min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!--parallax background plugin-->
    <script src=\"";
        // line 208
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.stellar.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!--digit countdown plugin-->
    <script src=\"";
        // line 210
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/waypoints.min.js"), "html", null, true);
        echo "\"></script>
    <!--digit countdown plugin-->
    <script src=\"";
        // line 212
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.counterup.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!--on scroll animation-->
    <script src=\"";
        // line 214
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/wow.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script> 
    <!--owl carousel slider-->
    <script src=\"";
        // line 216
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/owl-carousel/owl.carousel.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!--popup js-->
    <script src=\"";
        // line 218
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.magnific-popup.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    
            
    <!--customizable plugin edit according to your needs-->
    <script src=\"";
        // line 222
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/sweetalert/sweetalert.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 223
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/sweetalert/ui-sweetalert.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>    
    <script src=\"";
        // line 224
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.magnific-popup.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script> 
    <!--cube portfolio plugin-->
    <script src=\"";
        // line 226
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/cubeportfolio/js/jquery.cubeportfolio.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 227
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/cube-portfolio.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 228
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/pace.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
               <script src=\"";
        // line 229
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/video-background/core.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 230
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/video-background/transition.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 231
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/video-background/background.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "AppBundle:Layout:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  422 => 231,  418 => 230,  414 => 229,  410 => 228,  406 => 227,  402 => 226,  397 => 224,  393 => 223,  389 => 222,  382 => 218,  377 => 216,  372 => 214,  367 => 212,  362 => 210,  357 => 208,  352 => 206,  347 => 204,  342 => 202,  337 => 200,  332 => 198,  328 => 197,  324 => 195,  321 => 194,  290 => 167,  267 => 147,  244 => 127,  227 => 112,  224 => 111,  213 => 104,  205 => 99,  199 => 96,  151 => 50,  148 => 49,  131 => 34,  126 => 32,  122 => 31,  117 => 29,  112 => 27,  108 => 26,  103 => 24,  99 => 23,  95 => 22,  90 => 20,  85 => 18,  80 => 16,  75 => 14,  71 => 13,  68 => 12,  65 => 11,  60 => 9,  57 => 8,  52 => 233,  50 => 194,  47 => 111,  45 => 49,  41 => 47,  38 => 11,  36 => 8,  32 => 7,  24 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AppBundle:Layout:layout.html.twig", "/var/www/REDEXPERT/src/AppBundle/Resources/views/Layout/layout.html.twig");
    }
}
