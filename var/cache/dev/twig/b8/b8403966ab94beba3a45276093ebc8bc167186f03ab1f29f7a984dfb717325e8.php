<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_478e46c28f2b78799219a05f6fbde084bc1358393bd4fcefae71a4d42ad9181e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9a6e7e7ec9490fa82b94a97953ff686248c49c0150dd69ab58be0f63ca3311de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a6e7e7ec9490fa82b94a97953ff686248c49c0150dd69ab58be0f63ca3311de->enter($__internal_9a6e7e7ec9490fa82b94a97953ff686248c49c0150dd69ab58be0f63ca3311de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_0bed813ec82ec716764aa1240376967709cfeabe908076f52dccb417336e2712 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bed813ec82ec716764aa1240376967709cfeabe908076f52dccb417336e2712->enter($__internal_0bed813ec82ec716764aa1240376967709cfeabe908076f52dccb417336e2712_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()))));
        
        $__internal_9a6e7e7ec9490fa82b94a97953ff686248c49c0150dd69ab58be0f63ca3311de->leave($__internal_9a6e7e7ec9490fa82b94a97953ff686248c49c0150dd69ab58be0f63ca3311de_prof);

        
        $__internal_0bed813ec82ec716764aa1240376967709cfeabe908076f52dccb417336e2712->leave($__internal_0bed813ec82ec716764aa1240376967709cfeabe908076f52dccb417336e2712_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "TwigBundle:Exception:exception.rdf.twig", "/var/www/redexpert/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
