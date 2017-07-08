<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_ffa8cbfb13e4097eaff186cd44d7bcd1693cc99d33f1fc55879d11b58ada4e1e extends Twig_Template
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
        $__internal_f4e273bdadafb4069b6312f90d21e059f2c17bd91b998ff9c5b200d449ed585a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4e273bdadafb4069b6312f90d21e059f2c17bd91b998ff9c5b200d449ed585a->enter($__internal_f4e273bdadafb4069b6312f90d21e059f2c17bd91b998ff9c5b200d449ed585a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_b4bbd338b0f3fec740a42314d3772743e4daf0d94e7e3dae420e081a37bca328 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4bbd338b0f3fec740a42314d3772743e4daf0d94e7e3dae420e081a37bca328->enter($__internal_b4bbd338b0f3fec740a42314d3772743e4daf0d94e7e3dae420e081a37bca328_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo "

*/
";
        
        $__internal_f4e273bdadafb4069b6312f90d21e059f2c17bd91b998ff9c5b200d449ed585a->leave($__internal_f4e273bdadafb4069b6312f90d21e059f2c17bd91b998ff9c5b200d449ed585a_prof);

        
        $__internal_b4bbd338b0f3fec740a42314d3772743e4daf0d94e7e3dae420e081a37bca328->leave($__internal_b4bbd338b0f3fec740a42314d3772743e4daf0d94e7e3dae420e081a37bca328_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
", "TwigBundle:Exception:error.js.twig", "/var/www/redexpert/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
