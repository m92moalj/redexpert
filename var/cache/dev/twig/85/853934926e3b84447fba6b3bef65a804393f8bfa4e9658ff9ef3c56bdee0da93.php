<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_19df9fe9cc52bff13a5acfdff0aa364f6abb4a6aa33f38ca76848938b8ff2c4b extends Twig_Template
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
        $__internal_b67d9927a7a4e130dd2d7e54e12b0993b0cd61607ce13c5de50687593137e05d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b67d9927a7a4e130dd2d7e54e12b0993b0cd61607ce13c5de50687593137e05d->enter($__internal_b67d9927a7a4e130dd2d7e54e12b0993b0cd61607ce13c5de50687593137e05d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_801c58623062d9c9a2892cf422c8570c6623ddc3116637ef1342d10e6d9f6974 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_801c58623062d9c9a2892cf422c8570c6623ddc3116637ef1342d10e6d9f6974->enter($__internal_801c58623062d9c9a2892cf422c8570c6623ddc3116637ef1342d10e6d9f6974_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_b67d9927a7a4e130dd2d7e54e12b0993b0cd61607ce13c5de50687593137e05d->leave($__internal_b67d9927a7a4e130dd2d7e54e12b0993b0cd61607ce13c5de50687593137e05d_prof);

        
        $__internal_801c58623062d9c9a2892cf422c8570c6623ddc3116637ef1342d10e6d9f6974->leave($__internal_801c58623062d9c9a2892cf422c8570c6623ddc3116637ef1342d10e6d9f6974_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.atom.twig", "/var/www/redexpert/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
