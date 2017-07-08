<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_94e46a88f0a54d76fafc0b73b0cbb772d79380a345ad553001a23d0a6a4f7dfe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
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
        $__internal_1ec3c1a5579ba35fc3fc563a7f98953a7c51673a9f4bd2909c06fde120e33e9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ec3c1a5579ba35fc3fc563a7f98953a7c51673a9f4bd2909c06fde120e33e9d->enter($__internal_1ec3c1a5579ba35fc3fc563a7f98953a7c51673a9f4bd2909c06fde120e33e9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_553335be0e2287843d77b3037ff11d4fa24d0e3018ac4aca3a3b220847045f93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_553335be0e2287843d77b3037ff11d4fa24d0e3018ac4aca3a3b220847045f93->enter($__internal_553335be0e2287843d77b3037ff11d4fa24d0e3018ac4aca3a3b220847045f93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1ec3c1a5579ba35fc3fc563a7f98953a7c51673a9f4bd2909c06fde120e33e9d->leave($__internal_1ec3c1a5579ba35fc3fc563a7f98953a7c51673a9f4bd2909c06fde120e33e9d_prof);

        
        $__internal_553335be0e2287843d77b3037ff11d4fa24d0e3018ac4aca3a3b220847045f93->leave($__internal_553335be0e2287843d77b3037ff11d4fa24d0e3018ac4aca3a3b220847045f93_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_290ac0dab0a9f777e5fdceb3b99dc6ba934fa216e2b437c03ea7155c84abc60e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_290ac0dab0a9f777e5fdceb3b99dc6ba934fa216e2b437c03ea7155c84abc60e->enter($__internal_290ac0dab0a9f777e5fdceb3b99dc6ba934fa216e2b437c03ea7155c84abc60e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_5d68e3176638f3fdaaaae5d181e783b5f3efcd11e26454b72db2f2f48fa02928 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d68e3176638f3fdaaaae5d181e783b5f3efcd11e26454b72db2f2f48fa02928->enter($__internal_5d68e3176638f3fdaaaae5d181e783b5f3efcd11e26454b72db2f2f48fa02928_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_5d68e3176638f3fdaaaae5d181e783b5f3efcd11e26454b72db2f2f48fa02928->leave($__internal_5d68e3176638f3fdaaaae5d181e783b5f3efcd11e26454b72db2f2f48fa02928_prof);

        
        $__internal_290ac0dab0a9f777e5fdceb3b99dc6ba934fa216e2b437c03ea7155c84abc60e->leave($__internal_290ac0dab0a9f777e5fdceb3b99dc6ba934fa216e2b437c03ea7155c84abc60e_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
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
", "WebProfilerBundle:Collector:ajax.html.twig", "/var/www/redexpert/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
