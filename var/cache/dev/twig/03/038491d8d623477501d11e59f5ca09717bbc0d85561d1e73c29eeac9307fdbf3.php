<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_0e47889cd21f3030e24d33bf07c2026b6eeb494c06bcc3116375aa67112b9e8d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_265c8f5edc8692977eff569c05717cd8fe6ac6148cf25f71b1ad09086ea93eea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_265c8f5edc8692977eff569c05717cd8fe6ac6148cf25f71b1ad09086ea93eea->enter($__internal_265c8f5edc8692977eff569c05717cd8fe6ac6148cf25f71b1ad09086ea93eea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_5d019343276511ec885b0c5deef35b25f0688618f9f1fad0707dbabd67ce796e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d019343276511ec885b0c5deef35b25f0688618f9f1fad0707dbabd67ce796e->enter($__internal_5d019343276511ec885b0c5deef35b25f0688618f9f1fad0707dbabd67ce796e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_265c8f5edc8692977eff569c05717cd8fe6ac6148cf25f71b1ad09086ea93eea->leave($__internal_265c8f5edc8692977eff569c05717cd8fe6ac6148cf25f71b1ad09086ea93eea_prof);

        
        $__internal_5d019343276511ec885b0c5deef35b25f0688618f9f1fad0707dbabd67ce796e->leave($__internal_5d019343276511ec885b0c5deef35b25f0688618f9f1fad0707dbabd67ce796e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e321114a3c6b1bd7a04b264a046796147001c0bb8ff6584f1e49f29943879556 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e321114a3c6b1bd7a04b264a046796147001c0bb8ff6584f1e49f29943879556->enter($__internal_e321114a3c6b1bd7a04b264a046796147001c0bb8ff6584f1e49f29943879556_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_45350004254b01347fc5a326d8177919604250e2abda2baba12336ae38b2c05b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45350004254b01347fc5a326d8177919604250e2abda2baba12336ae38b2c05b->enter($__internal_45350004254b01347fc5a326d8177919604250e2abda2baba12336ae38b2c05b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_45350004254b01347fc5a326d8177919604250e2abda2baba12336ae38b2c05b->leave($__internal_45350004254b01347fc5a326d8177919604250e2abda2baba12336ae38b2c05b_prof);

        
        $__internal_e321114a3c6b1bd7a04b264a046796147001c0bb8ff6584f1e49f29943879556->leave($__internal_e321114a3c6b1bd7a04b264a046796147001c0bb8ff6584f1e49f29943879556_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_088581e5b0efe54d82376fc168b8ffbe4623b72ab45ba937921d2dfa7957ef4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_088581e5b0efe54d82376fc168b8ffbe4623b72ab45ba937921d2dfa7957ef4d->enter($__internal_088581e5b0efe54d82376fc168b8ffbe4623b72ab45ba937921d2dfa7957ef4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_bbc0e28a469c968427889fddab31d0831c5eb08db4f74417527cf1fc1ce026b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbc0e28a469c968427889fddab31d0831c5eb08db4f74417527cf1fc1ce026b5->enter($__internal_bbc0e28a469c968427889fddab31d0831c5eb08db4f74417527cf1fc1ce026b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_bbc0e28a469c968427889fddab31d0831c5eb08db4f74417527cf1fc1ce026b5->leave($__internal_bbc0e28a469c968427889fddab31d0831c5eb08db4f74417527cf1fc1ce026b5_prof);

        
        $__internal_088581e5b0efe54d82376fc168b8ffbe4623b72ab45ba937921d2dfa7957ef4d->leave($__internal_088581e5b0efe54d82376fc168b8ffbe4623b72ab45ba937921d2dfa7957ef4d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_facfd168f0550b38cda2958040fe99c060e39b270867715e3277e72c5e9909c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_facfd168f0550b38cda2958040fe99c060e39b270867715e3277e72c5e9909c6->enter($__internal_facfd168f0550b38cda2958040fe99c060e39b270867715e3277e72c5e9909c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_2b29d1a98c2a6b4643a102cc96b09a02f315e6359bbf0c5a0bcd8c476eab4118 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b29d1a98c2a6b4643a102cc96b09a02f315e6359bbf0c5a0bcd8c476eab4118->enter($__internal_2b29d1a98c2a6b4643a102cc96b09a02f315e6359bbf0c5a0bcd8c476eab4118_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_2b29d1a98c2a6b4643a102cc96b09a02f315e6359bbf0c5a0bcd8c476eab4118->leave($__internal_2b29d1a98c2a6b4643a102cc96b09a02f315e6359bbf0c5a0bcd8c476eab4118_prof);

        
        $__internal_facfd168f0550b38cda2958040fe99c060e39b270867715e3277e72c5e9909c6->leave($__internal_facfd168f0550b38cda2958040fe99c060e39b270867715e3277e72c5e9909c6_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "/var/www/redexpert/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
