<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_48bea09ebd00fb56f2a8703429db06968d6a07e8f872d1042d9213fcdeca6e03 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_84601a00c9b77daf3d75fa4af8bb766d1c8e34f8d9add937d3464cbd70128329 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84601a00c9b77daf3d75fa4af8bb766d1c8e34f8d9add937d3464cbd70128329->enter($__internal_84601a00c9b77daf3d75fa4af8bb766d1c8e34f8d9add937d3464cbd70128329_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_6d9a251167762c435d687fc6fd1bbcb7a48a604242ebf2ce2bd87a21428dca20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d9a251167762c435d687fc6fd1bbcb7a48a604242ebf2ce2bd87a21428dca20->enter($__internal_6d9a251167762c435d687fc6fd1bbcb7a48a604242ebf2ce2bd87a21428dca20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_84601a00c9b77daf3d75fa4af8bb766d1c8e34f8d9add937d3464cbd70128329->leave($__internal_84601a00c9b77daf3d75fa4af8bb766d1c8e34f8d9add937d3464cbd70128329_prof);

        
        $__internal_6d9a251167762c435d687fc6fd1bbcb7a48a604242ebf2ce2bd87a21428dca20->leave($__internal_6d9a251167762c435d687fc6fd1bbcb7a48a604242ebf2ce2bd87a21428dca20_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6ea58af4b4f1655a145a8c2c8e2cbef41274891ff31142e8287593d7e341ac8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ea58af4b4f1655a145a8c2c8e2cbef41274891ff31142e8287593d7e341ac8b->enter($__internal_6ea58af4b4f1655a145a8c2c8e2cbef41274891ff31142e8287593d7e341ac8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b2783a33943607dfa32d6f4f4480a1a3cbeb2674e78e8ead0e8cf7851405e7c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2783a33943607dfa32d6f4f4480a1a3cbeb2674e78e8ead0e8cf7851405e7c7->enter($__internal_b2783a33943607dfa32d6f4f4480a1a3cbeb2674e78e8ead0e8cf7851405e7c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_b2783a33943607dfa32d6f4f4480a1a3cbeb2674e78e8ead0e8cf7851405e7c7->leave($__internal_b2783a33943607dfa32d6f4f4480a1a3cbeb2674e78e8ead0e8cf7851405e7c7_prof);

        
        $__internal_6ea58af4b4f1655a145a8c2c8e2cbef41274891ff31142e8287593d7e341ac8b->leave($__internal_6ea58af4b4f1655a145a8c2c8e2cbef41274891ff31142e8287593d7e341ac8b_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_79c4583972eb1f5e2525f4493c0f32b1faafd25f1ae0c0bd0e72ea5d780dfd60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79c4583972eb1f5e2525f4493c0f32b1faafd25f1ae0c0bd0e72ea5d780dfd60->enter($__internal_79c4583972eb1f5e2525f4493c0f32b1faafd25f1ae0c0bd0e72ea5d780dfd60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_b857ee6b290631bac4a17e21359c89aac1fb7da7b277e0d875f7f4f952a47e37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b857ee6b290631bac4a17e21359c89aac1fb7da7b277e0d875f7f4f952a47e37->enter($__internal_b857ee6b290631bac4a17e21359c89aac1fb7da7b277e0d875f7f4f952a47e37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_b857ee6b290631bac4a17e21359c89aac1fb7da7b277e0d875f7f4f952a47e37->leave($__internal_b857ee6b290631bac4a17e21359c89aac1fb7da7b277e0d875f7f4f952a47e37_prof);

        
        $__internal_79c4583972eb1f5e2525f4493c0f32b1faafd25f1ae0c0bd0e72ea5d780dfd60->leave($__internal_79c4583972eb1f5e2525f4493c0f32b1faafd25f1ae0c0bd0e72ea5d780dfd60_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6ed5b7094980eec01d220926631bad00a43a4b2ae07e84eb786b46e259b502b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ed5b7094980eec01d220926631bad00a43a4b2ae07e84eb786b46e259b502b1->enter($__internal_6ed5b7094980eec01d220926631bad00a43a4b2ae07e84eb786b46e259b502b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1b3dbbc8c27bdf10f03558cc7e707d3a5f19a94104864246960a41d8b72e955c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b3dbbc8c27bdf10f03558cc7e707d3a5f19a94104864246960a41d8b72e955c->enter($__internal_1b3dbbc8c27bdf10f03558cc7e707d3a5f19a94104864246960a41d8b72e955c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_1b3dbbc8c27bdf10f03558cc7e707d3a5f19a94104864246960a41d8b72e955c->leave($__internal_1b3dbbc8c27bdf10f03558cc7e707d3a5f19a94104864246960a41d8b72e955c_prof);

        
        $__internal_6ed5b7094980eec01d220926631bad00a43a4b2ae07e84eb786b46e259b502b1->leave($__internal_6ed5b7094980eec01d220926631bad00a43a4b2ae07e84eb786b46e259b502b1_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/var/www/REDEXPERT/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
