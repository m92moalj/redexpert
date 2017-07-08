<?php

/* ::base.html.twig */
class __TwigTemplate_594ff0454d1188fbf197c4aead44d40ace18b3a2bb540229c0ef34792723b48c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1b54b3e987d6932d0df8aa170de58346cb960a138748b9e2a6a4603873160a67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b54b3e987d6932d0df8aa170de58346cb960a138748b9e2a6a4603873160a67->enter($__internal_1b54b3e987d6932d0df8aa170de58346cb960a138748b9e2a6a4603873160a67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_be65172051b377c36b582ff393f290228556de5b27af013955cee115565a3542 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be65172051b377c36b582ff393f290228556de5b27af013955cee115565a3542->enter($__internal_be65172051b377c36b582ff393f290228556de5b27af013955cee115565a3542_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_1b54b3e987d6932d0df8aa170de58346cb960a138748b9e2a6a4603873160a67->leave($__internal_1b54b3e987d6932d0df8aa170de58346cb960a138748b9e2a6a4603873160a67_prof);

        
        $__internal_be65172051b377c36b582ff393f290228556de5b27af013955cee115565a3542->leave($__internal_be65172051b377c36b582ff393f290228556de5b27af013955cee115565a3542_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d56bf4b47307fdfb83ca3cc3886e9a93e75e6956b4eebf702020d20568aff344 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d56bf4b47307fdfb83ca3cc3886e9a93e75e6956b4eebf702020d20568aff344->enter($__internal_d56bf4b47307fdfb83ca3cc3886e9a93e75e6956b4eebf702020d20568aff344_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_22ae0877cbc4ba90d5aeacd13edf4f2aa60c3bab48bdb01b79669819933063b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22ae0877cbc4ba90d5aeacd13edf4f2aa60c3bab48bdb01b79669819933063b2->enter($__internal_22ae0877cbc4ba90d5aeacd13edf4f2aa60c3bab48bdb01b79669819933063b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_22ae0877cbc4ba90d5aeacd13edf4f2aa60c3bab48bdb01b79669819933063b2->leave($__internal_22ae0877cbc4ba90d5aeacd13edf4f2aa60c3bab48bdb01b79669819933063b2_prof);

        
        $__internal_d56bf4b47307fdfb83ca3cc3886e9a93e75e6956b4eebf702020d20568aff344->leave($__internal_d56bf4b47307fdfb83ca3cc3886e9a93e75e6956b4eebf702020d20568aff344_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_83bb2c1a16770efe5fad37bb15510be95db0fc230551d0c87a63c2301b59b995 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83bb2c1a16770efe5fad37bb15510be95db0fc230551d0c87a63c2301b59b995->enter($__internal_83bb2c1a16770efe5fad37bb15510be95db0fc230551d0c87a63c2301b59b995_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_ce6f208c48d619139fbccda015a5c4aa7e7751b72df3ed83cfd8f32c17a9f32f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce6f208c48d619139fbccda015a5c4aa7e7751b72df3ed83cfd8f32c17a9f32f->enter($__internal_ce6f208c48d619139fbccda015a5c4aa7e7751b72df3ed83cfd8f32c17a9f32f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_ce6f208c48d619139fbccda015a5c4aa7e7751b72df3ed83cfd8f32c17a9f32f->leave($__internal_ce6f208c48d619139fbccda015a5c4aa7e7751b72df3ed83cfd8f32c17a9f32f_prof);

        
        $__internal_83bb2c1a16770efe5fad37bb15510be95db0fc230551d0c87a63c2301b59b995->leave($__internal_83bb2c1a16770efe5fad37bb15510be95db0fc230551d0c87a63c2301b59b995_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_0fa6dfd433acb50a7174600f432413d557fc9fc5b33b23e7d67ae1af0b3801fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fa6dfd433acb50a7174600f432413d557fc9fc5b33b23e7d67ae1af0b3801fa->enter($__internal_0fa6dfd433acb50a7174600f432413d557fc9fc5b33b23e7d67ae1af0b3801fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_634074b86ad794c9ec3de67346d3699716848628a87ccdc23ba1439292e13e9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_634074b86ad794c9ec3de67346d3699716848628a87ccdc23ba1439292e13e9a->enter($__internal_634074b86ad794c9ec3de67346d3699716848628a87ccdc23ba1439292e13e9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_634074b86ad794c9ec3de67346d3699716848628a87ccdc23ba1439292e13e9a->leave($__internal_634074b86ad794c9ec3de67346d3699716848628a87ccdc23ba1439292e13e9a_prof);

        
        $__internal_0fa6dfd433acb50a7174600f432413d557fc9fc5b33b23e7d67ae1af0b3801fa->leave($__internal_0fa6dfd433acb50a7174600f432413d557fc9fc5b33b23e7d67ae1af0b3801fa_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_11c76c5109d2c5e61f986aa41593d0d892bffd4cbff360203caf95bbd189ce25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11c76c5109d2c5e61f986aa41593d0d892bffd4cbff360203caf95bbd189ce25->enter($__internal_11c76c5109d2c5e61f986aa41593d0d892bffd4cbff360203caf95bbd189ce25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_d6d5d5b960b6663c813cde2c91b0c695c955fa8ce900f1a7b6d32aff597ef819 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6d5d5b960b6663c813cde2c91b0c695c955fa8ce900f1a7b6d32aff597ef819->enter($__internal_d6d5d5b960b6663c813cde2c91b0c695c955fa8ce900f1a7b6d32aff597ef819_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_d6d5d5b960b6663c813cde2c91b0c695c955fa8ce900f1a7b6d32aff597ef819->leave($__internal_d6d5d5b960b6663c813cde2c91b0c695c955fa8ce900f1a7b6d32aff597ef819_prof);

        
        $__internal_11c76c5109d2c5e61f986aa41593d0d892bffd4cbff360203caf95bbd189ce25->leave($__internal_11c76c5109d2c5e61f986aa41593d0d892bffd4cbff360203caf95bbd189ce25_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "/var/www/redexpert/app/Resources/views/base.html.twig");
    }
}
