<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_cc535cb60eaa467f9f0e95f84b231f4648a589b4dd2379f265d3e9b98163f2ca extends Twig_Template
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
        $__internal_e34d750b08956d8b06d81c7cf2425b9bc92716bee8d2100b34bbbbd7851e9695 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e34d750b08956d8b06d81c7cf2425b9bc92716bee8d2100b34bbbbd7851e9695->enter($__internal_e34d750b08956d8b06d81c7cf2425b9bc92716bee8d2100b34bbbbd7851e9695_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        $__internal_01d965cc7db8675deb6a9ea0e996a7a5d2295dd2542ddc045aec743fc47230f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01d965cc7db8675deb6a9ea0e996a7a5d2295dd2542ddc045aec743fc47230f1->enter($__internal_01d965cc7db8675deb6a9ea0e996a7a5d2295dd2542ddc045aec743fc47230f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_e34d750b08956d8b06d81c7cf2425b9bc92716bee8d2100b34bbbbd7851e9695->leave($__internal_e34d750b08956d8b06d81c7cf2425b9bc92716bee8d2100b34bbbbd7851e9695_prof);

        
        $__internal_01d965cc7db8675deb6a9ea0e996a7a5d2295dd2542ddc045aec743fc47230f1->leave($__internal_01d965cc7db8675deb6a9ea0e996a7a5d2295dd2542ddc045aec743fc47230f1_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "WebProfilerBundle:Profiler:header.html.twig", "/var/www/redexpert/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
