<?php

/* AppBundle:Layout:layout.html.twig */
class __TwigTemplate_a6899851591b35458ef8a6df4da8f2b8bb4325fa8392a7a02950a43fd18675fb extends Twig_Template
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
        $__internal_9dc17292e2caf081d50a80a87d1400c672c07ed8c6c7b8a3cb9f1d439d19d687 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9dc17292e2caf081d50a80a87d1400c672c07ed8c6c7b8a3cb9f1d439d19d687->enter($__internal_9dc17292e2caf081d50a80a87d1400c672c07ed8c6c7b8a3cb9f1d439d19d687_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Layout:layout.html.twig"));

        $__internal_1ad3bc7657e9372be415314781185443d9593b822892202a9de5afe25b028939 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ad3bc7657e9372be415314781185443d9593b822892202a9de5afe25b028939->enter($__internal_1ad3bc7657e9372be415314781185443d9593b822892202a9de5afe25b028939_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Layout:layout.html.twig"));

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
        
        $__internal_9dc17292e2caf081d50a80a87d1400c672c07ed8c6c7b8a3cb9f1d439d19d687->leave($__internal_9dc17292e2caf081d50a80a87d1400c672c07ed8c6c7b8a3cb9f1d439d19d687_prof);

        
        $__internal_1ad3bc7657e9372be415314781185443d9593b822892202a9de5afe25b028939->leave($__internal_1ad3bc7657e9372be415314781185443d9593b822892202a9de5afe25b028939_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_97523e25f5f2ba6d0760ee78d21cba2e1411a7e8dc3cf42cb37be1336515df38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97523e25f5f2ba6d0760ee78d21cba2e1411a7e8dc3cf42cb37be1336515df38->enter($__internal_97523e25f5f2ba6d0760ee78d21cba2e1411a7e8dc3cf42cb37be1336515df38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e3a1082ce3c716ff7c073fd9b6b2efb2fa53fa7556c25429a572a63a7f133d89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3a1082ce3c716ff7c073fd9b6b2efb2fa53fa7556c25429a572a63a7f133d89->enter($__internal_e3a1082ce3c716ff7c073fd9b6b2efb2fa53fa7556c25429a572a63a7f133d89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 9
        echo "    <title>REDEXPERT | BETA</title>
    ";
        
        $__internal_e3a1082ce3c716ff7c073fd9b6b2efb2fa53fa7556c25429a572a63a7f133d89->leave($__internal_e3a1082ce3c716ff7c073fd9b6b2efb2fa53fa7556c25429a572a63a7f133d89_prof);

        
        $__internal_97523e25f5f2ba6d0760ee78d21cba2e1411a7e8dc3cf42cb37be1336515df38->leave($__internal_97523e25f5f2ba6d0760ee78d21cba2e1411a7e8dc3cf42cb37be1336515df38_prof);

    }

    // line 11
    public function block_styles($context, array $blocks = array())
    {
        $__internal_f7150811b23a647bcd9ad163450e793f00f01d0c9c32282dfaef50ec50f471b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7150811b23a647bcd9ad163450e793f00f01d0c9c32282dfaef50ec50f471b3->enter($__internal_f7150811b23a647bcd9ad163450e793f00f01d0c9c32282dfaef50ec50f471b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "styles"));

        $__internal_ef5f763428d89c93cb95de47599fee26470e9f6929dcc23dda9c4c6015a49b99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef5f763428d89c93cb95de47599fee26470e9f6929dcc23dda9c4c6015a49b99->enter($__internal_ef5f763428d89c93cb95de47599fee26470e9f6929dcc23dda9c4c6015a49b99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "styles"));

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
        
        $__internal_ef5f763428d89c93cb95de47599fee26470e9f6929dcc23dda9c4c6015a49b99->leave($__internal_ef5f763428d89c93cb95de47599fee26470e9f6929dcc23dda9c4c6015a49b99_prof);

        
        $__internal_f7150811b23a647bcd9ad163450e793f00f01d0c9c32282dfaef50ec50f471b3->leave($__internal_f7150811b23a647bcd9ad163450e793f00f01d0c9c32282dfaef50ec50f471b3_prof);

    }

    // line 49
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_c7abe5bd6aac9fface585147d56466cb96de9a48ba8f02a14e800081c9fc09f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7abe5bd6aac9fface585147d56466cb96de9a48ba8f02a14e800081c9fc09f2->enter($__internal_c7abe5bd6aac9fface585147d56466cb96de9a48ba8f02a14e800081c9fc09f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_c14210ca244a75c4cbe6df8ad47c24a2c0c6d678482bbfb920e757c3cf002ee4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c14210ca244a75c4cbe6df8ad47c24a2c0c6d678482bbfb920e757c3cf002ee4->enter($__internal_c14210ca244a75c4cbe6df8ad47c24a2c0c6d678482bbfb920e757c3cf002ee4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

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
        
        $__internal_c14210ca244a75c4cbe6df8ad47c24a2c0c6d678482bbfb920e757c3cf002ee4->leave($__internal_c14210ca244a75c4cbe6df8ad47c24a2c0c6d678482bbfb920e757c3cf002ee4_prof);

        
        $__internal_c7abe5bd6aac9fface585147d56466cb96de9a48ba8f02a14e800081c9fc09f2->leave($__internal_c7abe5bd6aac9fface585147d56466cb96de9a48ba8f02a14e800081c9fc09f2_prof);

    }

    // line 111
    public function block_content($context, array $blocks = array())
    {
        $__internal_d79b01a43620393772222db981abb6b2c53140017a6918a944f34525bf3c6968 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d79b01a43620393772222db981abb6b2c53140017a6918a944f34525bf3c6968->enter($__internal_d79b01a43620393772222db981abb6b2c53140017a6918a944f34525bf3c6968_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_3e62072959a346a4417e308d5028e31d515fd78d05397bc687ffb651f1b995ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e62072959a346a4417e308d5028e31d515fd78d05397bc687ffb651f1b995ba->enter($__internal_3e62072959a346a4417e308d5028e31d515fd78d05397bc687ffb651f1b995ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_3e62072959a346a4417e308d5028e31d515fd78d05397bc687ffb651f1b995ba->leave($__internal_3e62072959a346a4417e308d5028e31d515fd78d05397bc687ffb651f1b995ba_prof);

        
        $__internal_d79b01a43620393772222db981abb6b2c53140017a6918a944f34525bf3c6968->leave($__internal_d79b01a43620393772222db981abb6b2c53140017a6918a944f34525bf3c6968_prof);

    }

    // line 194
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_9a5d5e588981352221910f31453a46c188af3aa2bc93b340a01181993a0f0689 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a5d5e588981352221910f31453a46c188af3aa2bc93b340a01181993a0f0689->enter($__internal_9a5d5e588981352221910f31453a46c188af3aa2bc93b340a01181993a0f0689_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_fe20cfd77b76787d7dd4df2704d16d230173b4f5206aa7a59fcb35834844c83d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe20cfd77b76787d7dd4df2704d16d230173b4f5206aa7a59fcb35834844c83d->enter($__internal_fe20cfd77b76787d7dd4df2704d16d230173b4f5206aa7a59fcb35834844c83d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

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
        
        $__internal_fe20cfd77b76787d7dd4df2704d16d230173b4f5206aa7a59fcb35834844c83d->leave($__internal_fe20cfd77b76787d7dd4df2704d16d230173b4f5206aa7a59fcb35834844c83d_prof);

        
        $__internal_9a5d5e588981352221910f31453a46c188af3aa2bc93b340a01181993a0f0689->leave($__internal_9a5d5e588981352221910f31453a46c188af3aa2bc93b340a01181993a0f0689_prof);

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
        return array (  488 => 231,  484 => 230,  480 => 229,  476 => 228,  472 => 227,  468 => 226,  463 => 224,  459 => 223,  455 => 222,  448 => 218,  443 => 216,  438 => 214,  433 => 212,  428 => 210,  423 => 208,  418 => 206,  413 => 204,  408 => 202,  403 => 200,  398 => 198,  394 => 197,  390 => 195,  381 => 194,  344 => 167,  321 => 147,  298 => 127,  281 => 112,  272 => 111,  255 => 104,  247 => 99,  241 => 96,  193 => 50,  184 => 49,  161 => 34,  156 => 32,  152 => 31,  147 => 29,  142 => 27,  138 => 26,  133 => 24,  129 => 23,  125 => 22,  120 => 20,  115 => 18,  110 => 16,  105 => 14,  101 => 13,  98 => 12,  89 => 11,  78 => 9,  69 => 8,  58 => 233,  56 => 194,  53 => 111,  51 => 49,  47 => 47,  44 => 11,  42 => 8,  38 => 7,  30 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
\t<meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"icon\" href=\"{{ asset('favicon.ico') }}\" type=\"image/x-icon\" />
    {% block title %}
    <title>REDEXPERT | BETA</title>
    {% endblock %}
    {% block styles %}
    <!-- Bootstrap -->
    <link href=\"{{ asset('assets/bootstrap/css/bootstrap.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('assets/plugins/sweetalert/sweetalert.css') }}\" rel=\"stylesheet\">
    <!-- font awesome for icons -->
    <link href=\"{{ asset('assets/font-awesome/css/font-awesome.min.css') }}\" rel=\"stylesheet\">
    <!-- flex slider css -->
    <link href=\"{{ asset('assets/css/flexslider.css') }}\" rel=\"stylesheet\" type=\"text/css\" media=\"screen\">
    <!-- animated css  -->
    <link href=\"{{ asset('assets/css/animate.css') }}\" rel=\"stylesheet\" type=\"text/css\" media=\"screen\"> 
    <!-- Revolution Style-sheet -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/css/sweetalert.css')}}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/css/magnific-popup.css')}}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/css/rev-style.css')}}\">
    <!--owl carousel css-->
    <link href=\"{{ asset('assets/owl-carousel/assets/owl.carousel.css') }}\" rel=\"stylesheet\" type=\"text/css\" media=\"screen\">
    <link href=\"{{ asset('assets/owl-carousel/assets/owl.theme.default.css') }}\" rel=\"stylesheet\" type=\"text/css\" media=\"screen\">
    <!--mega menu -->
    <link href=\"{{ asset('assets/css/yamm.css') }}\" rel=\"stylesheet\" type=\"text/css\">
    <!--cube css-->
    <link href=\"{{ asset('assets/cubeportfolio/css/cubeportfolio.min.css') }}\" rel=\"stylesheet\" type=\"text/css\">
     <link href=\"{{ asset('assets/video-background/background.css') }}\" rel=\"stylesheet\" type=\"text/css\">
    <!-- custom css-->
    <link href=\"{{ asset('assets/css/style.css') }}\" rel=\"stylesheet\" type=\"text/css\" media=\"screen\">
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
    {% endblock %}
</head>
<body>
{% block navbar %}
    <!--navigation -->
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
                        <img style=\"width: 50%;height: auto;margin-left: 40px\" src=\"{{ asset('assets/img/WE-RED.jpg') }}\" alt=\"Logo REDEXPERT y Würth Elektronik\">
                    </li>
                    <!-- <li>
                        <img style=\"width: 25%;height: auto;padding-left: 10px;\" src=\"{{ asset('assets/img/logo.png') }}\" alt=\"Logo UCO\">
                    </li> -->
                </ul>
                <ul class=\"nav navbar-nav navbar-right\">
                    <li>
                        <a href=\"{{ path('app_homepage') }}\" >Inicio</a>
                    </li>    
                </ul>
            </div>
        </div>
    </div>
    {% endblock %}
    {% block content %}
    \t<div class=\"divide80\"></div>
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
\t                <a href=\"{{path('app_losses')}}\">
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
                    <a href=\"{{path('app_view')}}\">
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
                    <a href=\"{{path('app_me')}}\">
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



    {% endblock %}
{% block scripts %}
\t<!--scripts and plugins -->
    <!--must need plugin jquery-->
    <script src=\"{{ asset('assets/js/jquery.min.js') }}\"></script>
    <script src=\"{{ asset('assets/js/jquery-migrate.min.js') }}\"></script> 
    <!--bootstrap js plugin-->
    <script src=\"{{ asset('assets/bootstrap/js/bootstrap.min.js') }}\" type=\"text/javascript\"></script>       
    <!--easing plugin for smooth scroll-->
    <script src=\"{{ asset('assets/js/jquery.easing.1.3.min.js') }}\" type=\"text/javascript\"></script>
    <!--sticky header-->
    <script type=\"text/javascript\" src=\"{{ asset('assets/js/jquery.sticky.js') }}\"></script>
    <!--flex slider plugin-->
    <script src=\"{{ asset('assets/js/jquery.flexslider-min.js') }}\" type=\"text/javascript\"></script>
    <!--parallax background plugin-->
    <script src=\"{{ asset('assets/js/jquery.stellar.min.js') }}\" type=\"text/javascript\"></script>
    <!--digit countdown plugin-->
    <script src=\"{{ asset('assets/js/waypoints.min.js') }}\"></script>
    <!--digit countdown plugin-->
    <script src=\"{{ asset('assets/js/jquery.counterup.min.js') }}\" type=\"text/javascript\"></script>
    <!--on scroll animation-->
    <script src=\"{{ asset('assets/js/wow.min.js') }}\" type=\"text/javascript\"></script> 
    <!--owl carousel slider-->
    <script src=\"{{ asset('assets/owl-carousel/owl.carousel.min.js') }}\" type=\"text/javascript\"></script>
    <!--popup js-->
    <script src=\"{{ asset('assets/js/jquery.magnific-popup.min.js') }}\" type=\"text/javascript\"></script>
    
            
    <!--customizable plugin edit according to your needs-->
    <script src=\"{{ asset('assets/plugins/sweetalert/sweetalert.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('assets/plugins/sweetalert/ui-sweetalert.js') }}\" type=\"text/javascript\"></script>    
    <script src=\"{{ asset('assets/js/jquery.magnific-popup.min.js') }}\" type=\"text/javascript\"></script> 
    <!--cube portfolio plugin-->
    <script src=\"{{ asset('assets/cubeportfolio/js/jquery.cubeportfolio.min.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('assets/js/cube-portfolio.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('assets/js/pace.min.js') }}\" type=\"text/javascript\"></script>
               <script src=\"{{ asset('assets/video-background/core.js') }}\"></script>
    <script src=\"{{ asset('assets/video-background/transition.js') }}\"></script>
    <script src=\"{{ asset('assets/video-background/background.js') }}\"></script>
{% endblock %}
</body>
</html>", "AppBundle:Layout:layout.html.twig", "/var/www/redexpert/src/AppBundle/Resources/views/Layout/layout.html.twig");
    }
}
