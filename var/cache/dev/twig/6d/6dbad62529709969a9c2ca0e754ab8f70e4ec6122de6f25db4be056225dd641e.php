<?php

/* AppBundle:User:me.html.twig */
class __TwigTemplate_6969555b9db82f1f780430d0e68758afc90679c263174f29f797a8ca845177c9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle:Layout:layout.html.twig", "AppBundle:User:me.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle:Layout:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2d5f915e3c426d79b9834372ae6ebe800975c1bdf16c3022df24e324ff340b0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d5f915e3c426d79b9834372ae6ebe800975c1bdf16c3022df24e324ff340b0d->enter($__internal_2d5f915e3c426d79b9834372ae6ebe800975c1bdf16c3022df24e324ff340b0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:User:me.html.twig"));

        $__internal_4c54bd2e586413f2abcfea8dd8e7132648ed67322a8530fa8f2e1f6e2e94567c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c54bd2e586413f2abcfea8dd8e7132648ed67322a8530fa8f2e1f6e2e94567c->enter($__internal_4c54bd2e586413f2abcfea8dd8e7132648ed67322a8530fa8f2e1f6e2e94567c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:User:me.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2d5f915e3c426d79b9834372ae6ebe800975c1bdf16c3022df24e324ff340b0d->leave($__internal_2d5f915e3c426d79b9834372ae6ebe800975c1bdf16c3022df24e324ff340b0d_prof);

        
        $__internal_4c54bd2e586413f2abcfea8dd8e7132648ed67322a8530fa8f2e1f6e2e94567c->leave($__internal_4c54bd2e586413f2abcfea8dd8e7132648ed67322a8530fa8f2e1f6e2e94567c_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_b2caeb4e4dd732ead7f41d2ab4b035b6199a29e19de26e75084a3d3e417fc602 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2caeb4e4dd732ead7f41d2ab4b035b6199a29e19de26e75084a3d3e417fc602->enter($__internal_b2caeb4e4dd732ead7f41d2ab4b035b6199a29e19de26e75084a3d3e417fc602_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_4c41b7ebd2f7c62f92125a41b160a381348b99f5ba712beb5522584ac8c4d674 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c41b7ebd2f7c62f92125a41b160a381348b99f5ba712beb5522584ac8c4d674->enter($__internal_4c41b7ebd2f7c62f92125a41b160a381348b99f5ba712beb5522584ac8c4d674_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "<style type=\"text/css\">
\t.image-cropper {
\t    width: 300px;
\t    height: 300px;
\t    position: relative;
\t    overflow: hidden;
\t    border-radius: 50%;
\t}

\timg {
\t    display: inline;
\t    margin: 0 auto;
\t    height: 100%;
\t    width: auto;
\t}
</style>
<div class=\"divide60\"></div>
<div class=\"container\">

\t<nav class=\"breadcrumb\">
\t\t<a class=\"breadcrumb-item\" href=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_homepage");
        echo "\">Inicio</a> / Sobre Nosotros
\t</nav>

\t<h3>Proyectista: <strong>Jorge Molina Alba</strong></h3><hr>
\t<div class=\"row\">
\t    <div class=\"col-md-6 col-md-offset-3 margin20\">
\t        <div class=\"team-wrap\">
\t        <br>\t
\t        <center>
\t        \t<div class=\"image-cropper\">
\t            \t<img src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/me.jpg"), "html", null, true);
        echo "\" class=\"rounded\" alt=\"\">
\t            </div>
\t        </center>
\t            <h4>Jorge Molina Alba</h4><hr>
\t            <center>
\t            \t<strong>Estudiante de la Universidad de Córdoba</strong><br>
\t            \t<strong>Full-Stack Developer en Eurotransportcar</strong><br>
\t            \t<strong>Junior Programmer en Würth Elektronik eiSos Gmbh & CO. KG</strong>
\t            </center>
\t            <hr>
\t            <p align=\"justify\" style=\"padding: 10px;\">
\t                Comencé realizando este proyecto gracias a la oportunidad brindada por la Universidad de realizar un proyecto conjuntamente con una empresa. Gracias a ello he podido desarrollar más mis habilidades profesionales otorgándome las cualidades de poder pertenecer a un equipo de desarrollo con mayores conocimientos previos.
\t            </p>
\t            <ul class=\"list-inline\">
\t                <li>
\t                    <a href=\"https://www.facebook.com/jorge.molinaalba.9\" target=\"_blank\" class=\"social-icon-sm si-border si-facebook\">
\t                        <i class=\"fa fa-facebook\"></i>
\t                        <i class=\"fa fa-facebook\"></i>
\t                    </a>
\t                </li>
\t                <li>
\t                    <a href=\"https://www.linkedin.com/in/jorge-molina-alba/\" target=\"_blank\" class=\"social-icon-sm si-border si-linkedin\">
\t                        <i class=\"fa fa-linkedin\"></i>
\t                        <i class=\"fa fa-linkedin\"></i>
\t                    </a>
\t                </li>
\t            </ul><!--social-->
\t        </div><!--team-wrap-->
\t    </div><!--team col-->
\t</div>
\t    <br>
\t    <div class=\"row\" style=\"margin-top: 20px;\">
\t\t<div class=\"col-md-12 margin20\">
\t\t\t<h3>Directores: <strong>Prof. Dr. Cristóbal Romero </strong> y <strong>Prof. Dr. Alberto Cano Rojas</strong></h3><hr>
\t\t</div>
\t    <div class=\"col-md-6 margin20\">
\t        <div class=\"team-wrap\">
\t        <br>\t
\t        <center>
\t        \t<div class=\"image-cropper\">
\t            \t<img src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/cristobal_profile.jpg"), "html", null, true);
        echo "\" class=\"rounded\" alt=\"\">
\t            </div>
\t        </center>
\t            <h4>Cristóbal Romero Morales</h4><hr>
\t            <center>
\t            \t<strong>Catedrático de Ciencias de la Computación y Análisis Numérico de la Universidad de Córdoba</strong>
\t            </center>
\t            <hr>
\t            <p align=\"justify\" style=\"padding: 10px;\">\t                
\t\t\t\t\tCristobal Romero es (asociado) Catedrático de Ciencias de la Computación y Análisis Numérico de la Universidad de Córdoba. Su enseñanza se dedica a la programación de computadoras, inteligencia artificial, interfaces de computadora humana en la ingeniería informática. Su trabajo de investigación se desarrolla como miembro del grupo de investigación \"Descubrimiento del Conocimiento y Sistemas Inteligentes\" (KDIS), y se centra en la aplicación de la minería de datos en los sistemas de e-learning.

\t\t\t\t\tHa sido preseleccionado como Investigación Altamente Citada por Thomson Reuters en Informática (Docampo & Torres-Salinas, 2013)
\t            </p>
\t            <ul class=\"list-inline\">
\t                ";
        // line 94
        echo "\t                <li>
\t                    <a href=\"https://www.linkedin.com/in/cristobal-romero-63142b7/\" target=\"_blank\" class=\"social-icon-sm si-border si-linkedin\">
\t                        <i class=\"fa fa-linkedin\"></i>
\t                        <i class=\"fa fa-linkedin\"></i>
\t                    </a>
\t                </li>
\t            </ul><!--social-->
\t        </div><!--team-wrap-->
\t    </div><!--team col-->
\t    <div class=\"col-md-6 margin20\">
\t        <div class=\"team-wrap\">
\t        <br>\t
\t        <center>
\t        \t<div class=\"image-cropper\">
\t            \t<img src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/Alberto_profile.jpg"), "html", null, true);
        echo "\" class=\"rounded\" alt=\"\">
\t            </div>
\t        </center>
\t            <h4>Alberto Cano Rojas</h4><hr>
\t            <center>
\t            \t<strong>Profesor Asistente en el Departamento de Ciencias de la Computación de la Virginia Commonwealth University</strong><br>
\t            </center>
\t            <hr>
\t            <p align=\"justify\" style=\"padding: 10px;\">
\t                Alberto Cano es Profesor Asistente en el Departamento de Ciencias de la Computación de la Virginia Commonwealth University, Estados Unidos, donde dirige el Laboratorio de Minería de Datos de Alto Rendimiento. Anteriormente fue investigador en la Universidad de Córdoba, España, como miembro del grupo de investigación de Descubrimiento de Conocimientos y Sistemas Inteligentes. Su investigación se centra en la soft computing, el aprendizaje automático, la minería de datos, la computación de uso general en unidades de procesamiento gráfico (CUGUPG) y la computación paralela.
\t            </p>
\t            <br>
\t            <ul class=\"list-inline\">
\t                ";
        // line 127
        echo "\t                <li>
\t                    <a href=\"https://www.linkedin.com/in/albertocanorojas/\" target=\"_blank\" class=\"social-icon-sm si-border si-linkedin\">
\t                        <i class=\"fa fa-linkedin\"></i>
\t                        <i class=\"fa fa-linkedin\"></i>
\t                    </a>
\t                </li>
\t            </ul><!--social-->
\t        </div><!--team-wrap-->
\t    </div><!--team col-->
\t</div>
\t</div>



</div>

";
        
        $__internal_4c41b7ebd2f7c62f92125a41b160a381348b99f5ba712beb5522584ac8c4d674->leave($__internal_4c41b7ebd2f7c62f92125a41b160a381348b99f5ba712beb5522584ac8c4d674_prof);

        
        $__internal_b2caeb4e4dd732ead7f41d2ab4b035b6199a29e19de26e75084a3d3e417fc602->leave($__internal_b2caeb4e4dd732ead7f41d2ab4b035b6199a29e19de26e75084a3d3e417fc602_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:User:me.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 127,  160 => 108,  144 => 94,  127 => 74,  84 => 34,  71 => 24,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"AppBundle:Layout:layout.html.twig\" %}

{% block content %}
<style type=\"text/css\">
\t.image-cropper {
\t    width: 300px;
\t    height: 300px;
\t    position: relative;
\t    overflow: hidden;
\t    border-radius: 50%;
\t}

\timg {
\t    display: inline;
\t    margin: 0 auto;
\t    height: 100%;
\t    width: auto;
\t}
</style>
<div class=\"divide60\"></div>
<div class=\"container\">

\t<nav class=\"breadcrumb\">
\t\t<a class=\"breadcrumb-item\" href=\"{{path('app_homepage')}}\">Inicio</a> / Sobre Nosotros
\t</nav>

\t<h3>Proyectista: <strong>Jorge Molina Alba</strong></h3><hr>
\t<div class=\"row\">
\t    <div class=\"col-md-6 col-md-offset-3 margin20\">
\t        <div class=\"team-wrap\">
\t        <br>\t
\t        <center>
\t        \t<div class=\"image-cropper\">
\t            \t<img src=\"{{asset('assets/img/me.jpg')}}\" class=\"rounded\" alt=\"\">
\t            </div>
\t        </center>
\t            <h4>Jorge Molina Alba</h4><hr>
\t            <center>
\t            \t<strong>Estudiante de la Universidad de Córdoba</strong><br>
\t            \t<strong>Full-Stack Developer en Eurotransportcar</strong><br>
\t            \t<strong>Junior Programmer en Würth Elektronik eiSos Gmbh & CO. KG</strong>
\t            </center>
\t            <hr>
\t            <p align=\"justify\" style=\"padding: 10px;\">
\t                Comencé realizando este proyecto gracias a la oportunidad brindada por la Universidad de realizar un proyecto conjuntamente con una empresa. Gracias a ello he podido desarrollar más mis habilidades profesionales otorgándome las cualidades de poder pertenecer a un equipo de desarrollo con mayores conocimientos previos.
\t            </p>
\t            <ul class=\"list-inline\">
\t                <li>
\t                    <a href=\"https://www.facebook.com/jorge.molinaalba.9\" target=\"_blank\" class=\"social-icon-sm si-border si-facebook\">
\t                        <i class=\"fa fa-facebook\"></i>
\t                        <i class=\"fa fa-facebook\"></i>
\t                    </a>
\t                </li>
\t                <li>
\t                    <a href=\"https://www.linkedin.com/in/jorge-molina-alba/\" target=\"_blank\" class=\"social-icon-sm si-border si-linkedin\">
\t                        <i class=\"fa fa-linkedin\"></i>
\t                        <i class=\"fa fa-linkedin\"></i>
\t                    </a>
\t                </li>
\t            </ul><!--social-->
\t        </div><!--team-wrap-->
\t    </div><!--team col-->
\t</div>
\t    <br>
\t    <div class=\"row\" style=\"margin-top: 20px;\">
\t\t<div class=\"col-md-12 margin20\">
\t\t\t<h3>Directores: <strong>Prof. Dr. Cristóbal Romero </strong> y <strong>Prof. Dr. Alberto Cano Rojas</strong></h3><hr>
\t\t</div>
\t    <div class=\"col-md-6 margin20\">
\t        <div class=\"team-wrap\">
\t        <br>\t
\t        <center>
\t        \t<div class=\"image-cropper\">
\t            \t<img src=\"{{asset('assets/img/cristobal_profile.jpg')}}\" class=\"rounded\" alt=\"\">
\t            </div>
\t        </center>
\t            <h4>Cristóbal Romero Morales</h4><hr>
\t            <center>
\t            \t<strong>Catedrático de Ciencias de la Computación y Análisis Numérico de la Universidad de Córdoba</strong>
\t            </center>
\t            <hr>
\t            <p align=\"justify\" style=\"padding: 10px;\">\t                
\t\t\t\t\tCristobal Romero es (asociado) Catedrático de Ciencias de la Computación y Análisis Numérico de la Universidad de Córdoba. Su enseñanza se dedica a la programación de computadoras, inteligencia artificial, interfaces de computadora humana en la ingeniería informática. Su trabajo de investigación se desarrolla como miembro del grupo de investigación \"Descubrimiento del Conocimiento y Sistemas Inteligentes\" (KDIS), y se centra en la aplicación de la minería de datos en los sistemas de e-learning.

\t\t\t\t\tHa sido preseleccionado como Investigación Altamente Citada por Thomson Reuters en Informática (Docampo & Torres-Salinas, 2013)
\t            </p>
\t            <ul class=\"list-inline\">
\t                {# <li>
\t                    <a href=\"https://www.facebook.com/jorge.molinaalba.9\" target=\"_blank\" class=\"social-icon-sm si-border si-facebook\">
\t                        <i class=\"fa fa-facebook\"></i>
\t                        <i class=\"fa fa-facebook\"></i>
\t                    </a>
\t                </li> #}
\t                <li>
\t                    <a href=\"https://www.linkedin.com/in/cristobal-romero-63142b7/\" target=\"_blank\" class=\"social-icon-sm si-border si-linkedin\">
\t                        <i class=\"fa fa-linkedin\"></i>
\t                        <i class=\"fa fa-linkedin\"></i>
\t                    </a>
\t                </li>
\t            </ul><!--social-->
\t        </div><!--team-wrap-->
\t    </div><!--team col-->
\t    <div class=\"col-md-6 margin20\">
\t        <div class=\"team-wrap\">
\t        <br>\t
\t        <center>
\t        \t<div class=\"image-cropper\">
\t            \t<img src=\"{{asset('assets/img/Alberto_profile.jpg')}}\" class=\"rounded\" alt=\"\">
\t            </div>
\t        </center>
\t            <h4>Alberto Cano Rojas</h4><hr>
\t            <center>
\t            \t<strong>Profesor Asistente en el Departamento de Ciencias de la Computación de la Virginia Commonwealth University</strong><br>
\t            </center>
\t            <hr>
\t            <p align=\"justify\" style=\"padding: 10px;\">
\t                Alberto Cano es Profesor Asistente en el Departamento de Ciencias de la Computación de la Virginia Commonwealth University, Estados Unidos, donde dirige el Laboratorio de Minería de Datos de Alto Rendimiento. Anteriormente fue investigador en la Universidad de Córdoba, España, como miembro del grupo de investigación de Descubrimiento de Conocimientos y Sistemas Inteligentes. Su investigación se centra en la soft computing, el aprendizaje automático, la minería de datos, la computación de uso general en unidades de procesamiento gráfico (CUGUPG) y la computación paralela.
\t            </p>
\t            <br>
\t            <ul class=\"list-inline\">
\t                {# <li>
\t                    <a href=\"https://www.facebook.com/jorge.molinaalba.9\" target=\"_blank\" class=\"social-icon-sm si-border si-facebook\">
\t                        <i class=\"fa fa-facebook\"></i>
\t                        <i class=\"fa fa-facebook\"></i>
\t                    </a>
\t                </li> #}
\t                <li>
\t                    <a href=\"https://www.linkedin.com/in/albertocanorojas/\" target=\"_blank\" class=\"social-icon-sm si-border si-linkedin\">
\t                        <i class=\"fa fa-linkedin\"></i>
\t                        <i class=\"fa fa-linkedin\"></i>
\t                    </a>
\t                </li>
\t            </ul><!--social-->
\t        </div><!--team-wrap-->
\t    </div><!--team col-->
\t</div>
\t</div>



</div>

{% endblock %}
", "AppBundle:User:me.html.twig", "/var/www/REDEXPERT/src/AppBundle/Resources/views/User/me.html.twig");
    }
}
