<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_3c95f35d36e67324df54be3dff7802e2ef098829dcb86544666fb0e79b22a53c extends Twig_Template
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
        $__internal_cccd8d3ab7cbb29b671c6d1c8a121b5dccd3a4d0eafbe840ad7890918344010d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cccd8d3ab7cbb29b671c6d1c8a121b5dccd3a4d0eafbe840ad7890918344010d->enter($__internal_cccd8d3ab7cbb29b671c6d1c8a121b5dccd3a4d0eafbe840ad7890918344010d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_29b04517742848c1502d94807fd0307f313bbf91c5c673eeaf6a4724c834db5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29b04517742848c1502d94807fd0307f313bbf91c5c673eeaf6a4724c834db5c->enter($__internal_29b04517742848c1502d94807fd0307f313bbf91c5c673eeaf6a4724c834db5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 4, $this->getSourceContext()); })());
        echo " ";
        echo (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 4, $this->getSourceContext()); })());
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_cccd8d3ab7cbb29b671c6d1c8a121b5dccd3a4d0eafbe840ad7890918344010d->leave($__internal_cccd8d3ab7cbb29b671c6d1c8a121b5dccd3a4d0eafbe840ad7890918344010d_prof);

        
        $__internal_29b04517742848c1502d94807fd0307f313bbf91c5c673eeaf6a4724c834db5c->leave($__internal_29b04517742848c1502d94807fd0307f313bbf91c5c673eeaf6a4724c834db5c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "/var/www/redexpert/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
