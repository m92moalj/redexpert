<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_417e60aefecdb105114bdfdc0efbca57ef6e95e2dacfefbe84d8285372cc0b65 extends Twig_Template
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
        $__internal_9c8ac53447130e77705f651b3dc9958efe49eaf0bedb91163aebfdd39f291699 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c8ac53447130e77705f651b3dc9958efe49eaf0bedb91163aebfdd39f291699->enter($__internal_9c8ac53447130e77705f651b3dc9958efe49eaf0bedb91163aebfdd39f291699_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_d45fbe805ce1369cd12ae553b5ba078d695bd5285fee76347cf24a34d62d6505 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d45fbe805ce1369cd12ae553b5ba078d695bd5285fee76347cf24a34d62d6505->enter($__internal_d45fbe805ce1369cd12ae553b5ba078d695bd5285fee76347cf24a34d62d6505_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })()))));
        // line 3
        echo "*/
";
        
        $__internal_9c8ac53447130e77705f651b3dc9958efe49eaf0bedb91163aebfdd39f291699->leave($__internal_9c8ac53447130e77705f651b3dc9958efe49eaf0bedb91163aebfdd39f291699_prof);

        
        $__internal_d45fbe805ce1369cd12ae553b5ba078d695bd5285fee76347cf24a34d62d6505->leave($__internal_d45fbe805ce1369cd12ae553b5ba078d695bd5285fee76347cf24a34d62d6505_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "TwigBundle:Exception:exception.js.twig", "/var/www/redexpert/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
