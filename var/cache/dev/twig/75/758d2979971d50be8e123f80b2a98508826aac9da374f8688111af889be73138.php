<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_6852030e72bf32314a5dbc2eb352af5a3bf15551a7c7648d224f63439e3337f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d1a88a30b4f3129bb8132694b096eb3c0985afb84a27bdbe8571e70d1ae2adb9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1a88a30b4f3129bb8132694b096eb3c0985afb84a27bdbe8571e70d1ae2adb9->enter($__internal_d1a88a30b4f3129bb8132694b096eb3c0985afb84a27bdbe8571e70d1ae2adb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_508e78d11f63ebe509f444eaa1a997c9e02ec79886d98868e72c1a47f79c27ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_508e78d11f63ebe509f444eaa1a997c9e02ec79886d98868e72c1a47f79c27ae->enter($__internal_508e78d11f63ebe509f444eaa1a997c9e02ec79886d98868e72c1a47f79c27ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d1a88a30b4f3129bb8132694b096eb3c0985afb84a27bdbe8571e70d1ae2adb9->leave($__internal_d1a88a30b4f3129bb8132694b096eb3c0985afb84a27bdbe8571e70d1ae2adb9_prof);

        
        $__internal_508e78d11f63ebe509f444eaa1a997c9e02ec79886d98868e72c1a47f79c27ae->leave($__internal_508e78d11f63ebe509f444eaa1a997c9e02ec79886d98868e72c1a47f79c27ae_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_383bea61ae1d361a5f5d0f91bf52230b3e7068f638b4d9d19743e49de81481ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_383bea61ae1d361a5f5d0f91bf52230b3e7068f638b4d9d19743e49de81481ac->enter($__internal_383bea61ae1d361a5f5d0f91bf52230b3e7068f638b4d9d19743e49de81481ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f585b4b4000ec24641d67e351eb342d567f6ba3efbb9c0057642a7203d27e923 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f585b4b4000ec24641d67e351eb342d567f6ba3efbb9c0057642a7203d27e923->enter($__internal_f585b4b4000ec24641d67e351eb342d567f6ba3efbb9c0057642a7203d27e923_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_f585b4b4000ec24641d67e351eb342d567f6ba3efbb9c0057642a7203d27e923->leave($__internal_f585b4b4000ec24641d67e351eb342d567f6ba3efbb9c0057642a7203d27e923_prof);

        
        $__internal_383bea61ae1d361a5f5d0f91bf52230b3e7068f638b4d9d19743e49de81481ac->leave($__internal_383bea61ae1d361a5f5d0f91bf52230b3e7068f638b4d9d19743e49de81481ac_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ed9fba878a0f98fe5dc2cff0db6b4cee99e5a3f3307bde38d8db7407192783da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed9fba878a0f98fe5dc2cff0db6b4cee99e5a3f3307bde38d8db7407192783da->enter($__internal_ed9fba878a0f98fe5dc2cff0db6b4cee99e5a3f3307bde38d8db7407192783da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3e44cb1e7351643c140c301ed207a8869526ebe9bd5f5733b1abb6450ec0beba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e44cb1e7351643c140c301ed207a8869526ebe9bd5f5733b1abb6450ec0beba->enter($__internal_3e44cb1e7351643c140c301ed207a8869526ebe9bd5f5733b1abb6450ec0beba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_3e44cb1e7351643c140c301ed207a8869526ebe9bd5f5733b1abb6450ec0beba->leave($__internal_3e44cb1e7351643c140c301ed207a8869526ebe9bd5f5733b1abb6450ec0beba_prof);

        
        $__internal_ed9fba878a0f98fe5dc2cff0db6b4cee99e5a3f3307bde38d8db7407192783da->leave($__internal_ed9fba878a0f98fe5dc2cff0db6b4cee99e5a3f3307bde38d8db7407192783da_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/var/www/redexpert/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
