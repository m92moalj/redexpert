<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_4d89b5b3f7b8b3c856395678aca4f3fd1a7111136e1da6877b2ac546b1a2c89b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_9364c9739520dd3a0b7ab0baf58fc78dad9c53f7b22640fa6dbe3ec593334b0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9364c9739520dd3a0b7ab0baf58fc78dad9c53f7b22640fa6dbe3ec593334b0a->enter($__internal_9364c9739520dd3a0b7ab0baf58fc78dad9c53f7b22640fa6dbe3ec593334b0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_84877191611ac19091f2c793fa0f184c3547db845110cfd091244fd5918505fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84877191611ac19091f2c793fa0f184c3547db845110cfd091244fd5918505fa->enter($__internal_84877191611ac19091f2c793fa0f184c3547db845110cfd091244fd5918505fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9364c9739520dd3a0b7ab0baf58fc78dad9c53f7b22640fa6dbe3ec593334b0a->leave($__internal_9364c9739520dd3a0b7ab0baf58fc78dad9c53f7b22640fa6dbe3ec593334b0a_prof);

        
        $__internal_84877191611ac19091f2c793fa0f184c3547db845110cfd091244fd5918505fa->leave($__internal_84877191611ac19091f2c793fa0f184c3547db845110cfd091244fd5918505fa_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_65ed461a4d2c0d6667338dfe9cd3076e20d2ad7c7c535b01992563a824dbc0ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65ed461a4d2c0d6667338dfe9cd3076e20d2ad7c7c535b01992563a824dbc0ac->enter($__internal_65ed461a4d2c0d6667338dfe9cd3076e20d2ad7c7c535b01992563a824dbc0ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_7b9cc0ed75bef6d53731248f346d5956d35d5f6a418c195478847d1912e5840f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b9cc0ed75bef6d53731248f346d5956d35d5f6a418c195478847d1912e5840f->enter($__internal_7b9cc0ed75bef6d53731248f346d5956d35d5f6a418c195478847d1912e5840f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_7b9cc0ed75bef6d53731248f346d5956d35d5f6a418c195478847d1912e5840f->leave($__internal_7b9cc0ed75bef6d53731248f346d5956d35d5f6a418c195478847d1912e5840f_prof);

        
        $__internal_65ed461a4d2c0d6667338dfe9cd3076e20d2ad7c7c535b01992563a824dbc0ac->leave($__internal_65ed461a4d2c0d6667338dfe9cd3076e20d2ad7c7c535b01992563a824dbc0ac_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_3f453a904d9bc7ccd32d4c7043a057268ed0eef721f460747560dfab2af211a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f453a904d9bc7ccd32d4c7043a057268ed0eef721f460747560dfab2af211a5->enter($__internal_3f453a904d9bc7ccd32d4c7043a057268ed0eef721f460747560dfab2af211a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0ec2ff911fce0ac947fa04e17f1cb5ea48be4182abb206f49856768766456c28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ec2ff911fce0ac947fa04e17f1cb5ea48be4182abb206f49856768766456c28->enter($__internal_0ec2ff911fce0ac947fa04e17f1cb5ea48be4182abb206f49856768766456c28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_0ec2ff911fce0ac947fa04e17f1cb5ea48be4182abb206f49856768766456c28->leave($__internal_0ec2ff911fce0ac947fa04e17f1cb5ea48be4182abb206f49856768766456c28_prof);

        
        $__internal_3f453a904d9bc7ccd32d4c7043a057268ed0eef721f460747560dfab2af211a5->leave($__internal_3f453a904d9bc7ccd32d4c7043a057268ed0eef721f460747560dfab2af211a5_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_32333e6724f2a3819edcc27adb71b0a57a53b5bff06a6031e5266f57b3f4b883 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32333e6724f2a3819edcc27adb71b0a57a53b5bff06a6031e5266f57b3f4b883->enter($__internal_32333e6724f2a3819edcc27adb71b0a57a53b5bff06a6031e5266f57b3f4b883_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f45053148b566f2de599360c549b431faf05f09448ec1ef6608a5ef9b25663d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f45053148b566f2de599360c549b431faf05f09448ec1ef6608a5ef9b25663d1->enter($__internal_f45053148b566f2de599360c549b431faf05f09448ec1ef6608a5ef9b25663d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_f45053148b566f2de599360c549b431faf05f09448ec1ef6608a5ef9b25663d1->leave($__internal_f45053148b566f2de599360c549b431faf05f09448ec1ef6608a5ef9b25663d1_prof);

        
        $__internal_32333e6724f2a3819edcc27adb71b0a57a53b5bff06a6031e5266f57b3f4b883->leave($__internal_32333e6724f2a3819edcc27adb71b0a57a53b5bff06a6031e5266f57b3f4b883_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "/var/www/redexpert/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
