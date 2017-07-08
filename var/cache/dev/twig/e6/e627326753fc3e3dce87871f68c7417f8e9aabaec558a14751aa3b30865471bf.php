<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_5b33bffeb066722a12020a6714838ad49595ffcacffbc83bf5fe50e47d54ccb5 extends Twig_Template
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
        $__internal_81a70526395ef9df6bda1a7413b8e2cf644a4c990bbb3534fc350e67bc478720 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81a70526395ef9df6bda1a7413b8e2cf644a4c990bbb3534fc350e67bc478720->enter($__internal_81a70526395ef9df6bda1a7413b8e2cf644a4c990bbb3534fc350e67bc478720_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_35abea4e359f03152e19c2c4b0e9c994935f2e686e6a0ddb201c467137e429d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35abea4e359f03152e19c2c4b0e9c994935f2e686e6a0ddb201c467137e429d0->enter($__internal_35abea4e359f03152e19c2c4b0e9c994935f2e686e6a0ddb201c467137e429d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_81a70526395ef9df6bda1a7413b8e2cf644a4c990bbb3534fc350e67bc478720->leave($__internal_81a70526395ef9df6bda1a7413b8e2cf644a4c990bbb3534fc350e67bc478720_prof);

        
        $__internal_35abea4e359f03152e19c2c4b0e9c994935f2e686e6a0ddb201c467137e429d0->leave($__internal_35abea4e359f03152e19c2c4b0e9c994935f2e686e6a0ddb201c467137e429d0_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0806efd508363ce8ed7fd319fe0dc7808ed5a06c79a73994fa1d2bc1740bf20e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0806efd508363ce8ed7fd319fe0dc7808ed5a06c79a73994fa1d2bc1740bf20e->enter($__internal_0806efd508363ce8ed7fd319fe0dc7808ed5a06c79a73994fa1d2bc1740bf20e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_60919ebcb5cdd17f8d8cd6f0ab6b45f62fa085a2b281b00f70fc8610944ecaca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60919ebcb5cdd17f8d8cd6f0ab6b45f62fa085a2b281b00f70fc8610944ecaca->enter($__internal_60919ebcb5cdd17f8d8cd6f0ab6b45f62fa085a2b281b00f70fc8610944ecaca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_60919ebcb5cdd17f8d8cd6f0ab6b45f62fa085a2b281b00f70fc8610944ecaca->leave($__internal_60919ebcb5cdd17f8d8cd6f0ab6b45f62fa085a2b281b00f70fc8610944ecaca_prof);

        
        $__internal_0806efd508363ce8ed7fd319fe0dc7808ed5a06c79a73994fa1d2bc1740bf20e->leave($__internal_0806efd508363ce8ed7fd319fe0dc7808ed5a06c79a73994fa1d2bc1740bf20e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_82cc3ad26be5f8ab9185910eb4271d49a27bcafc0c73522e07370b637e750d2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82cc3ad26be5f8ab9185910eb4271d49a27bcafc0c73522e07370b637e750d2c->enter($__internal_82cc3ad26be5f8ab9185910eb4271d49a27bcafc0c73522e07370b637e750d2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_2c3897b41c284dd5379fa128fc32c130f84ffbb808a08704531be2a8d64fcbd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c3897b41c284dd5379fa128fc32c130f84ffbb808a08704531be2a8d64fcbd1->enter($__internal_2c3897b41c284dd5379fa128fc32c130f84ffbb808a08704531be2a8d64fcbd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_2c3897b41c284dd5379fa128fc32c130f84ffbb808a08704531be2a8d64fcbd1->leave($__internal_2c3897b41c284dd5379fa128fc32c130f84ffbb808a08704531be2a8d64fcbd1_prof);

        
        $__internal_82cc3ad26be5f8ab9185910eb4271d49a27bcafc0c73522e07370b637e750d2c->leave($__internal_82cc3ad26be5f8ab9185910eb4271d49a27bcafc0c73522e07370b637e750d2c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ad82d8aa8618881dc897517e289a792d129891c7548d955690d102445fd41864 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad82d8aa8618881dc897517e289a792d129891c7548d955690d102445fd41864->enter($__internal_ad82d8aa8618881dc897517e289a792d129891c7548d955690d102445fd41864_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3bcada62d7f479c66c31afd27447140dbd83f187889ed93a629afb2fbce8a937 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bcada62d7f479c66c31afd27447140dbd83f187889ed93a629afb2fbce8a937->enter($__internal_3bcada62d7f479c66c31afd27447140dbd83f187889ed93a629afb2fbce8a937_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_3bcada62d7f479c66c31afd27447140dbd83f187889ed93a629afb2fbce8a937->leave($__internal_3bcada62d7f479c66c31afd27447140dbd83f187889ed93a629afb2fbce8a937_prof);

        
        $__internal_ad82d8aa8618881dc897517e289a792d129891c7548d955690d102445fd41864->leave($__internal_ad82d8aa8618881dc897517e289a792d129891c7548d955690d102445fd41864_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/var/www/redexpert/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
