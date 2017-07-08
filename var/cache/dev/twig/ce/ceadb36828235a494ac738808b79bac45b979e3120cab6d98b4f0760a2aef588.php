<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_73263acf8232f0af8ec500d92ba537ca21c01b7208f4115b78e2194ea1757fc6 extends Twig_Template
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
        $__internal_3148987bbf503db733174fae2926ebb64e951023118cc2f3dd1d60c535dac35b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3148987bbf503db733174fae2926ebb64e951023118cc2f3dd1d60c535dac35b->enter($__internal_3148987bbf503db733174fae2926ebb64e951023118cc2f3dd1d60c535dac35b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_0ced57d9555bd6b7e573ac45fe6665bf0fe077c515e21f8dbf75826af11c74b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ced57d9555bd6b7e573ac45fe6665bf0fe077c515e21f8dbf75826af11c74b8->enter($__internal_0ced57d9555bd6b7e573ac45fe6665bf0fe077c515e21f8dbf75826af11c74b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_3148987bbf503db733174fae2926ebb64e951023118cc2f3dd1d60c535dac35b->leave($__internal_3148987bbf503db733174fae2926ebb64e951023118cc2f3dd1d60c535dac35b_prof);

        
        $__internal_0ced57d9555bd6b7e573ac45fe6665bf0fe077c515e21f8dbf75826af11c74b8->leave($__internal_0ced57d9555bd6b7e573ac45fe6665bf0fe077c515e21f8dbf75826af11c74b8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.rdf.twig", "/var/www/redexpert/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
