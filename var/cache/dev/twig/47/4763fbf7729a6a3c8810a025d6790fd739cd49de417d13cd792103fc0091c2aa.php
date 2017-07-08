<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_7d081944996749f665c960d116572c3ead01dc96c1597332db129e2420304451 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_26c2ac2b2ea3cab5ed133e6389c6b54c1e59a3996d1d9cfc672f8b13a3367a4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26c2ac2b2ea3cab5ed133e6389c6b54c1e59a3996d1d9cfc672f8b13a3367a4b->enter($__internal_26c2ac2b2ea3cab5ed133e6389c6b54c1e59a3996d1d9cfc672f8b13a3367a4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_72a930db45de6b57bd938fa58a8473f1bea9df55817e0b188d84697cf2e9bb8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72a930db45de6b57bd938fa58a8473f1bea9df55817e0b188d84697cf2e9bb8e->enter($__internal_72a930db45de6b57bd938fa58a8473f1bea9df55817e0b188d84697cf2e9bb8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_26c2ac2b2ea3cab5ed133e6389c6b54c1e59a3996d1d9cfc672f8b13a3367a4b->leave($__internal_26c2ac2b2ea3cab5ed133e6389c6b54c1e59a3996d1d9cfc672f8b13a3367a4b_prof);

        
        $__internal_72a930db45de6b57bd938fa58a8473f1bea9df55817e0b188d84697cf2e9bb8e->leave($__internal_72a930db45de6b57bd938fa58a8473f1bea9df55817e0b188d84697cf2e9bb8e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_62d9f1ebc5c1f2d32d1f6bd8f3529d8801b47d2792ce72fa078bf3068be07c23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62d9f1ebc5c1f2d32d1f6bd8f3529d8801b47d2792ce72fa078bf3068be07c23->enter($__internal_62d9f1ebc5c1f2d32d1f6bd8f3529d8801b47d2792ce72fa078bf3068be07c23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_3cc9768b3137f9aa6718454c39f8503f4d57a7476a563441cdd2abc290d7f9e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cc9768b3137f9aa6718454c39f8503f4d57a7476a563441cdd2abc290d7f9e3->enter($__internal_3cc9768b3137f9aa6718454c39f8503f4d57a7476a563441cdd2abc290d7f9e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_3cc9768b3137f9aa6718454c39f8503f4d57a7476a563441cdd2abc290d7f9e3->leave($__internal_3cc9768b3137f9aa6718454c39f8503f4d57a7476a563441cdd2abc290d7f9e3_prof);

        
        $__internal_62d9f1ebc5c1f2d32d1f6bd8f3529d8801b47d2792ce72fa078bf3068be07c23->leave($__internal_62d9f1ebc5c1f2d32d1f6bd8f3529d8801b47d2792ce72fa078bf3068be07c23_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/var/www/redexpert/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
