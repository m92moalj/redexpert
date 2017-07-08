<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_558f5e9412b8be7ac6f80edf1171ba9fb2e41ca4314849a4b9559f6be8d864d6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c4ee786575c04bec674fe78b290b75e1b1eb140f882eb26f5eb5de70eedef4b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4ee786575c04bec674fe78b290b75e1b1eb140f882eb26f5eb5de70eedef4b4->enter($__internal_c4ee786575c04bec674fe78b290b75e1b1eb140f882eb26f5eb5de70eedef4b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_76e64d1c00033ca6bed39efd0422ba375bee1316eb97c0dafa46aa1c0822495b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76e64d1c00033ca6bed39efd0422ba375bee1316eb97c0dafa46aa1c0822495b->enter($__internal_76e64d1c00033ca6bed39efd0422ba375bee1316eb97c0dafa46aa1c0822495b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 11, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 12, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 12, $this->getSourceContext()); })()), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c4ee786575c04bec674fe78b290b75e1b1eb140f882eb26f5eb5de70eedef4b4->leave($__internal_c4ee786575c04bec674fe78b290b75e1b1eb140f882eb26f5eb5de70eedef4b4_prof);

        
        $__internal_76e64d1c00033ca6bed39efd0422ba375bee1316eb97c0dafa46aa1c0822495b->leave($__internal_76e64d1c00033ca6bed39efd0422ba375bee1316eb97c0dafa46aa1c0822495b_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_b16525bfeef5faaefe30823f4273df9101682442c365f218ae87455b01388995 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b16525bfeef5faaefe30823f4273df9101682442c365f218ae87455b01388995->enter($__internal_b16525bfeef5faaefe30823f4273df9101682442c365f218ae87455b01388995_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_2eaf9769a5db5d443006d173208d25820bc68802df85fbbede503eaa808fecdd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2eaf9769a5db5d443006d173208d25820bc68802df85fbbede503eaa808fecdd->enter($__internal_2eaf9769a5db5d443006d173208d25820bc68802df85fbbede503eaa808fecdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 27, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 27, $this->getSourceContext()); })()), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 29, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 29, $this->getSourceContext()); })()), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_2eaf9769a5db5d443006d173208d25820bc68802df85fbbede503eaa808fecdd->leave($__internal_2eaf9769a5db5d443006d173208d25820bc68802df85fbbede503eaa808fecdd_prof);

        
        $__internal_b16525bfeef5faaefe30823f4273df9101682442c365f218ae87455b01388995->leave($__internal_b16525bfeef5faaefe30823f4273df9101682442c365f218ae87455b01388995_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_86159705b896b3c7f3611a5ab84349de3397550637b4656d9487f22f960db73f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86159705b896b3c7f3611a5ab84349de3397550637b4656d9487f22f960db73f->enter($__internal_86159705b896b3c7f3611a5ab84349de3397550637b4656d9487f22f960db73f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c75219a6f1e792d0ffdda9a0db2ba203d66a95feed701f8b1d75d77904053840 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c75219a6f1e792d0ffdda9a0db2ba203d66a95feed701f8b1d75d77904053840->enter($__internal_c75219a6f1e792d0ffdda9a0db2ba203d66a95feed701f8b1d75d77904053840_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 35, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 35, $this->getSourceContext()); })()), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 36, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 36, $this->getSourceContext()); })()), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_c75219a6f1e792d0ffdda9a0db2ba203d66a95feed701f8b1d75d77904053840->leave($__internal_c75219a6f1e792d0ffdda9a0db2ba203d66a95feed701f8b1d75d77904053840_prof);

        
        $__internal_86159705b896b3c7f3611a5ab84349de3397550637b4656d9487f22f960db73f->leave($__internal_86159705b896b3c7f3611a5ab84349de3397550637b4656d9487f22f960db73f_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  84 => 35,  75 => 34,  61 => 29,  55 => 27,  46 => 26,  36 => 1,  34 => 12,  33 => 11,  32 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'purge' : {
        status:  'success',
        title:   'The profiler database was purged successfully',
        message: 'Now you need to browse some pages with the Symfony Profiler enabled to collect data.'
    },
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    },
    'upload_error' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'No file given or the file was not uploaded successfully.'
    },
    'already_exists' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'The token already exists in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "/var/www/redexpert/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
