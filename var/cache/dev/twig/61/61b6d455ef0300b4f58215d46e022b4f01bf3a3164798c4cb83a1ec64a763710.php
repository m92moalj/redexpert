<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_04103609c68c03540abe407dae612b920774d21308e893e812c8127625f97afb extends Twig_Template
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
        $__internal_010a5c3f503a8cfb03b14d2b01d5a8ca1d6ccfd7b7d47051daee188725507d76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_010a5c3f503a8cfb03b14d2b01d5a8ca1d6ccfd7b7d47051daee188725507d76->enter($__internal_010a5c3f503a8cfb03b14d2b01d5a8ca1d6ccfd7b7d47051daee188725507d76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_b90db12840678d88ac7db83c983596b91961f2d6cff64f61d8c4b71646874669 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b90db12840678d88ac7db83c983596b91961f2d6cff64f61d8c4b71646874669->enter($__internal_b90db12840678d88ac7db83c983596b91961f2d6cff64f61d8c4b71646874669_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })()))));
        // line 3
        echo "*/
";
        
        $__internal_010a5c3f503a8cfb03b14d2b01d5a8ca1d6ccfd7b7d47051daee188725507d76->leave($__internal_010a5c3f503a8cfb03b14d2b01d5a8ca1d6ccfd7b7d47051daee188725507d76_prof);

        
        $__internal_b90db12840678d88ac7db83c983596b91961f2d6cff64f61d8c4b71646874669->leave($__internal_b90db12840678d88ac7db83c983596b91961f2d6cff64f61d8c4b71646874669_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
", "TwigBundle:Exception:exception.css.twig", "/var/www/redexpert/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
