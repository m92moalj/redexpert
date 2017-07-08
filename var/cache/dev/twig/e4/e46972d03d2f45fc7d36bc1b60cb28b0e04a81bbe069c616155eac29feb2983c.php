<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_860c06b4b0d3f8a243360669ab0069872d32a9bb18fcefe97438940fc66a0213 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
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
        $__internal_1c5af57df70c0552a0e6a53916fe7fb71e09e74d13921a7a63ff6724f3f0f65d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c5af57df70c0552a0e6a53916fe7fb71e09e74d13921a7a63ff6724f3f0f65d->enter($__internal_1c5af57df70c0552a0e6a53916fe7fb71e09e74d13921a7a63ff6724f3f0f65d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_e26add948e0f8e8583057108b75495117aaafa4bca4aa19ae7dfd561b34d57e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e26add948e0f8e8583057108b75495117aaafa4bca4aa19ae7dfd561b34d57e8->enter($__internal_e26add948e0f8e8583057108b75495117aaafa4bca4aa19ae7dfd561b34d57e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1c5af57df70c0552a0e6a53916fe7fb71e09e74d13921a7a63ff6724f3f0f65d->leave($__internal_1c5af57df70c0552a0e6a53916fe7fb71e09e74d13921a7a63ff6724f3f0f65d_prof);

        
        $__internal_e26add948e0f8e8583057108b75495117aaafa4bca4aa19ae7dfd561b34d57e8->leave($__internal_e26add948e0f8e8583057108b75495117aaafa4bca4aa19ae7dfd561b34d57e8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_56e9e3f4219cf3ff35978d666b746c162c959368fa6e0b757aa7c2ce66450b89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56e9e3f4219cf3ff35978d666b746c162c959368fa6e0b757aa7c2ce66450b89->enter($__internal_56e9e3f4219cf3ff35978d666b746c162c959368fa6e0b757aa7c2ce66450b89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a7a3a81fcbf39a19ae966bc8eaae4f3a8449ab29b761e49aee820dd1c3d6f42a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7a3a81fcbf39a19ae966bc8eaae4f3a8449ab29b761e49aee820dd1c3d6f42a->enter($__internal_a7a3a81fcbf39a19ae966bc8eaae4f3a8449ab29b761e49aee820dd1c3d6f42a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_a7a3a81fcbf39a19ae966bc8eaae4f3a8449ab29b761e49aee820dd1c3d6f42a->leave($__internal_a7a3a81fcbf39a19ae966bc8eaae4f3a8449ab29b761e49aee820dd1c3d6f42a_prof);

        
        $__internal_56e9e3f4219cf3ff35978d666b746c162c959368fa6e0b757aa7c2ce66450b89->leave($__internal_56e9e3f4219cf3ff35978d666b746c162c959368fa6e0b757aa7c2ce66450b89_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d42a0ad9afba5fa92b025bf178831f43a0c8ca067542ef3bf8dbb2e2fd541728 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d42a0ad9afba5fa92b025bf178831f43a0c8ca067542ef3bf8dbb2e2fd541728->enter($__internal_d42a0ad9afba5fa92b025bf178831f43a0c8ca067542ef3bf8dbb2e2fd541728_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_1a34d6e49bfd227cda6df866a78192595a3061150ef3719c5c9eb29340646287 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a34d6e49bfd227cda6df866a78192595a3061150ef3719c5c9eb29340646287->enter($__internal_1a34d6e49bfd227cda6df866a78192595a3061150ef3719c5c9eb29340646287_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_1a34d6e49bfd227cda6df866a78192595a3061150ef3719c5c9eb29340646287->leave($__internal_1a34d6e49bfd227cda6df866a78192595a3061150ef3719c5c9eb29340646287_prof);

        
        $__internal_d42a0ad9afba5fa92b025bf178831f43a0c8ca067542ef3bf8dbb2e2fd541728->leave($__internal_d42a0ad9afba5fa92b025bf178831f43a0c8ca067542ef3bf8dbb2e2fd541728_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c3d0423e41c10302592d92d9acc42fe6020cfe9829b07d88e0e161f43771514f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3d0423e41c10302592d92d9acc42fe6020cfe9829b07d88e0e161f43771514f->enter($__internal_c3d0423e41c10302592d92d9acc42fe6020cfe9829b07d88e0e161f43771514f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_19b64905ced19d8a27d7e84831ab3bdeec2078df79f2331a73ce1b4e3f10c9cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19b64905ced19d8a27d7e84831ab3bdeec2078df79f2331a73ce1b4e3f10c9cb->enter($__internal_19b64905ced19d8a27d7e84831ab3bdeec2078df79f2331a73ce1b4e3f10c9cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_19b64905ced19d8a27d7e84831ab3bdeec2078df79f2331a73ce1b4e3f10c9cb->leave($__internal_19b64905ced19d8a27d7e84831ab3bdeec2078df79f2331a73ce1b4e3f10c9cb_prof);

        
        $__internal_c3d0423e41c10302592d92d9acc42fe6020cfe9829b07d88e0e161f43771514f->leave($__internal_c3d0423e41c10302592d92d9acc42fe6020cfe9829b07d88e0e161f43771514f_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
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
", "WebProfilerBundle:Collector:exception.html.twig", "/var/www/redexpert/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
