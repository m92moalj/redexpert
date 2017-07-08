<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_bef0e64175edcbec56f88d2e5bfa807ec1ed4fc960a6e2fd3aaf2e1772379f9b extends Twig_Template
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
        $__internal_aaba979ced37e1f509a29a90c73219def81b743cbe72b5e19797be08ac753867 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aaba979ced37e1f509a29a90c73219def81b743cbe72b5e19797be08ac753867->enter($__internal_aaba979ced37e1f509a29a90c73219def81b743cbe72b5e19797be08ac753867_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_2dde8fd42040a0ddedad512ca813010dfa0ce0c410c5d1608f38f2b6272b4b76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2dde8fd42040a0ddedad512ca813010dfa0ce0c410c5d1608f38f2b6272b4b76->enter($__internal_2dde8fd42040a0ddedad512ca813010dfa0ce0c410c5d1608f38f2b6272b4b76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aaba979ced37e1f509a29a90c73219def81b743cbe72b5e19797be08ac753867->leave($__internal_aaba979ced37e1f509a29a90c73219def81b743cbe72b5e19797be08ac753867_prof);

        
        $__internal_2dde8fd42040a0ddedad512ca813010dfa0ce0c410c5d1608f38f2b6272b4b76->leave($__internal_2dde8fd42040a0ddedad512ca813010dfa0ce0c410c5d1608f38f2b6272b4b76_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e0572e49b1d2e8971230db9d3b6bbf5438ffb2b44ccaf633592304bb19673f10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0572e49b1d2e8971230db9d3b6bbf5438ffb2b44ccaf633592304bb19673f10->enter($__internal_e0572e49b1d2e8971230db9d3b6bbf5438ffb2b44ccaf633592304bb19673f10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_9a928cf89f11457789406afe04ac8b14b58391a211b273ba2aecd706b2bb310a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a928cf89f11457789406afe04ac8b14b58391a211b273ba2aecd706b2bb310a->enter($__internal_9a928cf89f11457789406afe04ac8b14b58391a211b273ba2aecd706b2bb310a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_9a928cf89f11457789406afe04ac8b14b58391a211b273ba2aecd706b2bb310a->leave($__internal_9a928cf89f11457789406afe04ac8b14b58391a211b273ba2aecd706b2bb310a_prof);

        
        $__internal_e0572e49b1d2e8971230db9d3b6bbf5438ffb2b44ccaf633592304bb19673f10->leave($__internal_e0572e49b1d2e8971230db9d3b6bbf5438ffb2b44ccaf633592304bb19673f10_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_402528a386818a362093e3ebfcf55837a621a022e2b22e619447225e54a593bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_402528a386818a362093e3ebfcf55837a621a022e2b22e619447225e54a593bf->enter($__internal_402528a386818a362093e3ebfcf55837a621a022e2b22e619447225e54a593bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_b9e9535baea22ebacb1fe7fa907650be06aaa152a010940ed91ac72914c304af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9e9535baea22ebacb1fe7fa907650be06aaa152a010940ed91ac72914c304af->enter($__internal_b9e9535baea22ebacb1fe7fa907650be06aaa152a010940ed91ac72914c304af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_b9e9535baea22ebacb1fe7fa907650be06aaa152a010940ed91ac72914c304af->leave($__internal_b9e9535baea22ebacb1fe7fa907650be06aaa152a010940ed91ac72914c304af_prof);

        
        $__internal_402528a386818a362093e3ebfcf55837a621a022e2b22e619447225e54a593bf->leave($__internal_402528a386818a362093e3ebfcf55837a621a022e2b22e619447225e54a593bf_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e376ae03fc9477eafba9f952d4d85e980a338a86d3d0637167cadd4227691bee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e376ae03fc9477eafba9f952d4d85e980a338a86d3d0637167cadd4227691bee->enter($__internal_e376ae03fc9477eafba9f952d4d85e980a338a86d3d0637167cadd4227691bee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6062fc86e1bbd9b1d3602a5eab849738265184f827e6dcca75ee51257f556bdb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6062fc86e1bbd9b1d3602a5eab849738265184f827e6dcca75ee51257f556bdb->enter($__internal_6062fc86e1bbd9b1d3602a5eab849738265184f827e6dcca75ee51257f556bdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_6062fc86e1bbd9b1d3602a5eab849738265184f827e6dcca75ee51257f556bdb->leave($__internal_6062fc86e1bbd9b1d3602a5eab849738265184f827e6dcca75ee51257f556bdb_prof);

        
        $__internal_e376ae03fc9477eafba9f952d4d85e980a338a86d3d0637167cadd4227691bee->leave($__internal_e376ae03fc9477eafba9f952d4d85e980a338a86d3d0637167cadd4227691bee_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "/var/www/redexpert/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
