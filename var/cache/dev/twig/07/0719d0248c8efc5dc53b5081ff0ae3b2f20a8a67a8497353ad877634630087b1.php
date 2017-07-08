<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_c5d45096299d5410a72c8ca6e642ffa964301053d5f3e5629f3948dd24858d61 extends Twig_Template
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
        $__internal_a4b182b03550afdfb82e08d240490d551a4e141c298aa0d26092f709f1fd62ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4b182b03550afdfb82e08d240490d551a4e141c298aa0d26092f709f1fd62ca->enter($__internal_a4b182b03550afdfb82e08d240490d551a4e141c298aa0d26092f709f1fd62ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_9bd3df5e5fae0a0a820a705f8ceb8683a1c944889717a6b2d2379376f884da56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bd3df5e5fae0a0a820a705f8ceb8683a1c944889717a6b2d2379376f884da56->enter($__internal_9bd3df5e5fae0a0a820a705f8ceb8683a1c944889717a6b2d2379376f884da56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo "

*/
";
        
        $__internal_a4b182b03550afdfb82e08d240490d551a4e141c298aa0d26092f709f1fd62ca->leave($__internal_a4b182b03550afdfb82e08d240490d551a4e141c298aa0d26092f709f1fd62ca_prof);

        
        $__internal_9bd3df5e5fae0a0a820a705f8ceb8683a1c944889717a6b2d2379376f884da56->leave($__internal_9bd3df5e5fae0a0a820a705f8ceb8683a1c944889717a6b2d2379376f884da56_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.css.twig", "/var/www/redexpert/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
