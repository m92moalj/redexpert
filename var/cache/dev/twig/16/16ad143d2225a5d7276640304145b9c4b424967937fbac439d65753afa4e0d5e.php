<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_83b429004ca1dde39c2228f0fe824533e0b4f2b0988a4a617b3342893c308fbc extends Twig_Template
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
        $__internal_611afaccca5509056a34fd78839f608fb9b7a4cfcac93fd0af2237e39be43989 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_611afaccca5509056a34fd78839f608fb9b7a4cfcac93fd0af2237e39be43989->enter($__internal_611afaccca5509056a34fd78839f608fb9b7a4cfcac93fd0af2237e39be43989_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_f4a8cbf86912866686518ceb1d0256108ff1e8226ef1edeb37576cc6c1c1fd2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4a8cbf86912866686518ceb1d0256108ff1e8226ef1edeb37576cc6c1c1fd2c->enter($__internal_f4a8cbf86912866686518ceb1d0256108ff1e8226ef1edeb37576cc6c1c1fd2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()))));
        
        $__internal_611afaccca5509056a34fd78839f608fb9b7a4cfcac93fd0af2237e39be43989->leave($__internal_611afaccca5509056a34fd78839f608fb9b7a4cfcac93fd0af2237e39be43989_prof);

        
        $__internal_f4a8cbf86912866686518ceb1d0256108ff1e8226ef1edeb37576cc6c1c1fd2c->leave($__internal_f4a8cbf86912866686518ceb1d0256108ff1e8226ef1edeb37576cc6c1c1fd2c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
", "TwigBundle:Exception:exception.atom.twig", "/var/www/redexpert/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
