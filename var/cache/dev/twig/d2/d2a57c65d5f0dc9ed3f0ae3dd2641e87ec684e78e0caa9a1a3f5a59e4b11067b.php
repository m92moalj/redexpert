<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_bca2694accee1e494bf4016902fb1a057bf12d86136f747a3e73966171970b62 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1f476c83354f921230bdfde0e0c3b83b00182ced522b3e1f7716e552432b9e78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f476c83354f921230bdfde0e0c3b83b00182ced522b3e1f7716e552432b9e78->enter($__internal_1f476c83354f921230bdfde0e0c3b83b00182ced522b3e1f7716e552432b9e78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_31560feba5d833e898a68340e4b494fb8466d5f61361fb7473d64b6373514e27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31560feba5d833e898a68340e4b494fb8466d5f61361fb7473d64b6373514e27->enter($__internal_31560feba5d833e898a68340e4b494fb8466d5f61361fb7473d64b6373514e27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1f476c83354f921230bdfde0e0c3b83b00182ced522b3e1f7716e552432b9e78->leave($__internal_1f476c83354f921230bdfde0e0c3b83b00182ced522b3e1f7716e552432b9e78_prof);

        
        $__internal_31560feba5d833e898a68340e4b494fb8466d5f61361fb7473d64b6373514e27->leave($__internal_31560feba5d833e898a68340e4b494fb8466d5f61361fb7473d64b6373514e27_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_09d72be419703159dcb7e1e04448c696be54b8cf81dc5d0d80537c305fbe3988 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09d72be419703159dcb7e1e04448c696be54b8cf81dc5d0d80537c305fbe3988->enter($__internal_09d72be419703159dcb7e1e04448c696be54b8cf81dc5d0d80537c305fbe3988_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_24fa6d7e57909698a24d21ed2a08096c17274c18be8041181a8d118ac99f0d85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24fa6d7e57909698a24d21ed2a08096c17274c18be8041181a8d118ac99f0d85->enter($__internal_24fa6d7e57909698a24d21ed2a08096c17274c18be8041181a8d118ac99f0d85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_24fa6d7e57909698a24d21ed2a08096c17274c18be8041181a8d118ac99f0d85->leave($__internal_24fa6d7e57909698a24d21ed2a08096c17274c18be8041181a8d118ac99f0d85_prof);

        
        $__internal_09d72be419703159dcb7e1e04448c696be54b8cf81dc5d0d80537c305fbe3988->leave($__internal_09d72be419703159dcb7e1e04448c696be54b8cf81dc5d0d80537c305fbe3988_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_f0e592d94463ce95294de667c6e60e08fa108c58b60779b961b595b3db33e66b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0e592d94463ce95294de667c6e60e08fa108c58b60779b961b595b3db33e66b->enter($__internal_f0e592d94463ce95294de667c6e60e08fa108c58b60779b961b595b3db33e66b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_644aa29810616dd46b8f92d9715ad3fe4d1944a6f2fc8798888ab8d216ee6984 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_644aa29810616dd46b8f92d9715ad3fe4d1944a6f2fc8798888ab8d216ee6984->enter($__internal_644aa29810616dd46b8f92d9715ad3fe4d1944a6f2fc8798888ab8d216ee6984_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new Twig_Error_Runtime('Variable "file" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) || array_key_exists("filename", $context) ? $context["filename"] : (function () { throw new Twig_Error_Runtime('Variable "filename" does not exist.', 15, $this->getSourceContext()); })()), (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 15, $this->getSourceContext()); })()),  -1);
        echo "
</div>
";
        
        $__internal_644aa29810616dd46b8f92d9715ad3fe4d1944a6f2fc8798888ab8d216ee6984->leave($__internal_644aa29810616dd46b8f92d9715ad3fe4d1944a6f2fc8798888ab8d216ee6984_prof);

        
        $__internal_f0e592d94463ce95294de667c6e60e08fa108c58b60779b961b595b3db33e66b->leave($__internal_f0e592d94463ce95294de667c6e60e08fa108c58b60779b961b595b3db33e66b_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "/var/www/redexpert/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
