<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_491d5853a96629e58d52ecc633bb16e5a88480f3bee41d89b781a0d49240981a extends Twig_Template
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
        $__internal_9d92321c8afb6b89cf977625b43546e058c23b7d4103085741668d113a01556c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d92321c8afb6b89cf977625b43546e058c23b7d4103085741668d113a01556c->enter($__internal_9d92321c8afb6b89cf977625b43546e058c23b7d4103085741668d113a01556c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_8ac957f649f3dc5981110ed9a9bf4aa2bc10adc01cd9bf67e240949b22a93bb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ac957f649f3dc5981110ed9a9bf4aa2bc10adc01cd9bf67e240949b22a93bb7->enter($__internal_8ac957f649f3dc5981110ed9a9bf4aa2bc10adc01cd9bf67e240949b22a93bb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9d92321c8afb6b89cf977625b43546e058c23b7d4103085741668d113a01556c->leave($__internal_9d92321c8afb6b89cf977625b43546e058c23b7d4103085741668d113a01556c_prof);

        
        $__internal_8ac957f649f3dc5981110ed9a9bf4aa2bc10adc01cd9bf67e240949b22a93bb7->leave($__internal_8ac957f649f3dc5981110ed9a9bf4aa2bc10adc01cd9bf67e240949b22a93bb7_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4f4be176eb02a1e27eba6099d40ae7e13ec31e26bf649e668e18d64bb7c6568b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f4be176eb02a1e27eba6099d40ae7e13ec31e26bf649e668e18d64bb7c6568b->enter($__internal_4f4be176eb02a1e27eba6099d40ae7e13ec31e26bf649e668e18d64bb7c6568b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_19ef5c95e9fe6e813bad4538ed0675dc60ca12a23ebbab49e33466cea20470fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19ef5c95e9fe6e813bad4538ed0675dc60ca12a23ebbab49e33466cea20470fb->enter($__internal_19ef5c95e9fe6e813bad4538ed0675dc60ca12a23ebbab49e33466cea20470fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_19ef5c95e9fe6e813bad4538ed0675dc60ca12a23ebbab49e33466cea20470fb->leave($__internal_19ef5c95e9fe6e813bad4538ed0675dc60ca12a23ebbab49e33466cea20470fb_prof);

        
        $__internal_4f4be176eb02a1e27eba6099d40ae7e13ec31e26bf649e668e18d64bb7c6568b->leave($__internal_4f4be176eb02a1e27eba6099d40ae7e13ec31e26bf649e668e18d64bb7c6568b_prof);

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
", "@WebProfiler/Collector/ajax.html.twig", "/var/www/REDEXPERT/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
