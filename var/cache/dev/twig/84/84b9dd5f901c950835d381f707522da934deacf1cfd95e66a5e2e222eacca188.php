<?php

/* @WebProfiler/Collector/memory.html.twig */
class __TwigTemplate_c52efef9fe216be882ec098d6f398a70c530a9124c19f149008330801847b48a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/memory.html.twig", 1);
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
        $__internal_b50e1f57e84a33589007fc53d7f936c7e2848c5254601787ca7984b41182ade5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b50e1f57e84a33589007fc53d7f936c7e2848c5254601787ca7984b41182ade5->enter($__internal_b50e1f57e84a33589007fc53d7f936c7e2848c5254601787ca7984b41182ade5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/memory.html.twig"));

        $__internal_01442f6b59cf17d7221f4e45e27f933380b295835e2a80614c49c6a1652c0b22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01442f6b59cf17d7221f4e45e27f933380b295835e2a80614c49c6a1652c0b22->enter($__internal_01442f6b59cf17d7221f4e45e27f933380b295835e2a80614c49c6a1652c0b22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/memory.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b50e1f57e84a33589007fc53d7f936c7e2848c5254601787ca7984b41182ade5->leave($__internal_b50e1f57e84a33589007fc53d7f936c7e2848c5254601787ca7984b41182ade5_prof);

        
        $__internal_01442f6b59cf17d7221f4e45e27f933380b295835e2a80614c49c6a1652c0b22->leave($__internal_01442f6b59cf17d7221f4e45e27f933380b295835e2a80614c49c6a1652c0b22_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d5adb2227737c91614a8bc27a0ad5af83799d9a52875afab0e277f9a566fa8aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5adb2227737c91614a8bc27a0ad5af83799d9a52875afab0e277f9a566fa8aa->enter($__internal_d5adb2227737c91614a8bc27a0ad5af83799d9a52875afab0e277f9a566fa8aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_f8d7deca4ee1ad756b9f3b292d6ca5d9ca0163d9835bb35f30ca29d0b23d61ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8d7deca4ee1ad756b9f3b292d6ca5d9ca0163d9835bb35f30ca29d0b23d61ba->enter($__internal_f8d7deca4ee1ad756b9f3b292d6ca5d9ca0163d9835bb35f30ca29d0b23d61ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        $context["status_color"] = (((((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 5, $this->getSourceContext()); })()), "memory", array()) / 1024) / 1024) > 50)) ? ("yellow") : (""));
        // line 6
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/memory.svg");
        echo "
        <span class=\"sf-toolbar-value\">";
        // line 7
        echo twig_escape_filter($this->env, sprintf("%.1f", ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 7, $this->getSourceContext()); })()), "memory", array()) / 1024) / 1024)), "html", null, true);
        echo "</span>
        <span class=\"sf-toolbar-label\">MB</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 10
        echo "
    ";
        // line 11
        ob_start();
        // line 12
        echo "        <div class=\"sf-toolbar-info-piece\">
            <b>Peak memory usage</b>
            <span>";
        // line 14
        echo twig_escape_filter($this->env, sprintf("%.1f", ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 14, $this->getSourceContext()); })()), "memory", array()) / 1024) / 1024)), "html", null, true);
        echo " MB</span>
        </div>

        <div class=\"sf-toolbar-info-piece\">
            <b>PHP memory limit</b>
            <span>";
        // line 19
        echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 19, $this->getSourceContext()); })()), "memoryLimit", array()) ==  -1)) ? ("Unlimited") : (sprintf("%.0f MB", ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 19, $this->getSourceContext()); })()), "memoryLimit", array()) / 1024) / 1024)))), "html", null, true);
        echo "</span>
        </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 22
        echo "
    ";
        // line 23
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => (isset($context["profiler_url"]) || array_key_exists("profiler_url", $context) ? $context["profiler_url"] : (function () { throw new Twig_Error_Runtime('Variable "profiler_url" does not exist.', 23, $this->getSourceContext()); })()), "name" => "time", "status" => (isset($context["status_color"]) || array_key_exists("status_color", $context) ? $context["status_color"] : (function () { throw new Twig_Error_Runtime('Variable "status_color" does not exist.', 23, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_f8d7deca4ee1ad756b9f3b292d6ca5d9ca0163d9835bb35f30ca29d0b23d61ba->leave($__internal_f8d7deca4ee1ad756b9f3b292d6ca5d9ca0163d9835bb35f30ca29d0b23d61ba_prof);

        
        $__internal_d5adb2227737c91614a8bc27a0ad5af83799d9a52875afab0e277f9a566fa8aa->leave($__internal_d5adb2227737c91614a8bc27a0ad5af83799d9a52875afab0e277f9a566fa8aa_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/memory.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 23,  89 => 22,  83 => 19,  75 => 14,  71 => 12,  69 => 11,  66 => 10,  60 => 7,  55 => 6,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {% set status_color = (collector.memory / 1024 / 1024) > 50 ? 'yellow' : '' %}
        {{ include('@WebProfiler/Icon/memory.svg') }}
        <span class=\"sf-toolbar-value\">{{ '%.1f'|format(collector.memory / 1024 / 1024) }}</span>
        <span class=\"sf-toolbar-label\">MB</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b>Peak memory usage</b>
            <span>{{ '%.1f'|format(collector.memory / 1024 / 1024) }} MB</span>
        </div>

        <div class=\"sf-toolbar-info-piece\">
            <b>PHP memory limit</b>
            <span>{{ collector.memoryLimit == -1 ? 'Unlimited' : '%.0f MB'|format(collector.memoryLimit / 1024 / 1024) }}</span>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: profiler_url, name: 'time', status: status_color }) }}
{% endblock %}
", "@WebProfiler/Collector/memory.html.twig", "/var/www/REDEXPERT/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/memory.html.twig");
    }
}
