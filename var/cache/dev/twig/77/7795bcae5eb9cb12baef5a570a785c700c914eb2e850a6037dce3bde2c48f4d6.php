<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_ea1eba626b721d5f2f2b54b1e4a553c84fdc8f20c6305b61e40a9951a6d8df25 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_65a03ceb99cea55e2b3b0bcd21db90291b3c086a2e32bf01cefe31188cecb60a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65a03ceb99cea55e2b3b0bcd21db90291b3c086a2e32bf01cefe31188cecb60a->enter($__internal_65a03ceb99cea55e2b3b0bcd21db90291b3c086a2e32bf01cefe31188cecb60a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_f1b15fb9cbd7f7edd4eff2a6e7bd6e4b15f9d243302ae765c552b8159243aa89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1b15fb9cbd7f7edd4eff2a6e7bd6e4b15f9d243302ae765c552b8159243aa89->enter($__internal_f1b15fb9cbd7f7edd4eff2a6e7bd6e4b15f9d243302ae765c552b8159243aa89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_65a03ceb99cea55e2b3b0bcd21db90291b3c086a2e32bf01cefe31188cecb60a->leave($__internal_65a03ceb99cea55e2b3b0bcd21db90291b3c086a2e32bf01cefe31188cecb60a_prof);

        
        $__internal_f1b15fb9cbd7f7edd4eff2a6e7bd6e4b15f9d243302ae765c552b8159243aa89->leave($__internal_f1b15fb9cbd7f7edd4eff2a6e7bd6e4b15f9d243302ae765c552b8159243aa89_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_85d79dec153901a424cef7728b5725104536df94d2dc05626fcd999a3f31a731 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85d79dec153901a424cef7728b5725104536df94d2dc05626fcd999a3f31a731->enter($__internal_85d79dec153901a424cef7728b5725104536df94d2dc05626fcd999a3f31a731_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_3203fbc98ebe32bb6ea7aa631306cbf5619c41407d10eaa76c11ea9cbf6f64bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3203fbc98ebe32bb6ea7aa631306cbf5619c41407d10eaa76c11ea9cbf6f64bd->enter($__internal_3203fbc98ebe32bb6ea7aa631306cbf5619c41407d10eaa76c11ea9cbf6f64bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_3203fbc98ebe32bb6ea7aa631306cbf5619c41407d10eaa76c11ea9cbf6f64bd->leave($__internal_3203fbc98ebe32bb6ea7aa631306cbf5619c41407d10eaa76c11ea9cbf6f64bd_prof);

        
        $__internal_85d79dec153901a424cef7728b5725104536df94d2dc05626fcd999a3f31a731->leave($__internal_85d79dec153901a424cef7728b5725104536df94d2dc05626fcd999a3f31a731_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b685083b9d578e550e8db103f856ebaf523be6acca99ad2eda9c07d99c8c8abb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b685083b9d578e550e8db103f856ebaf523be6acca99ad2eda9c07d99c8c8abb->enter($__internal_b685083b9d578e550e8db103f856ebaf523be6acca99ad2eda9c07d99c8c8abb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_e32f97f5a6c0934ad092b4d90f4cdee8990f06c202b3f4e4a3a2c6d5791fb9a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e32f97f5a6c0934ad092b4d90f4cdee8990f06c202b3f4e4a3a2c6d5791fb9a3->enter($__internal_e32f97f5a6c0934ad092b4d90f4cdee8990f06c202b3f4e4a3a2c6d5791fb9a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e32f97f5a6c0934ad092b4d90f4cdee8990f06c202b3f4e4a3a2c6d5791fb9a3->leave($__internal_e32f97f5a6c0934ad092b4d90f4cdee8990f06c202b3f4e4a3a2c6d5791fb9a3_prof);

        
        $__internal_b685083b9d578e550e8db103f856ebaf523be6acca99ad2eda9c07d99c8c8abb->leave($__internal_b685083b9d578e550e8db103f856ebaf523be6acca99ad2eda9c07d99c8c8abb_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9244e1c0b1a93cf75bf8b17801c67f17596cf3d435a115a96dbcd7bd62cb6ff2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9244e1c0b1a93cf75bf8b17801c67f17596cf3d435a115a96dbcd7bd62cb6ff2->enter($__internal_9244e1c0b1a93cf75bf8b17801c67f17596cf3d435a115a96dbcd7bd62cb6ff2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3ac40a1db23f87e656c73ac348220679745572db1bc24d6368f5837a9e9e161c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ac40a1db23f87e656c73ac348220679745572db1bc24d6368f5837a9e9e161c->enter($__internal_3ac40a1db23f87e656c73ac348220679745572db1bc24d6368f5837a9e9e161c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_3ac40a1db23f87e656c73ac348220679745572db1bc24d6368f5837a9e9e161c->leave($__internal_3ac40a1db23f87e656c73ac348220679745572db1bc24d6368f5837a9e9e161c_prof);

        
        $__internal_9244e1c0b1a93cf75bf8b17801c67f17596cf3d435a115a96dbcd7bd62cb6ff2->leave($__internal_9244e1c0b1a93cf75bf8b17801c67f17596cf3d435a115a96dbcd7bd62cb6ff2_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
", "@WebProfiler/Collector/router.html.twig", "/var/www/REDEXPERT/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
