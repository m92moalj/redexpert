<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_6d4e9d23d7447eef0af80ff119ae89edd453a628fe0d3ac0147c38c1b85ddde8 extends Twig_Template
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
        $__internal_ae4ca390bd39aa3b01c2b850350847570b6019bbcaa9026040adaba78956f1f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae4ca390bd39aa3b01c2b850350847570b6019bbcaa9026040adaba78956f1f7->enter($__internal_ae4ca390bd39aa3b01c2b850350847570b6019bbcaa9026040adaba78956f1f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_ed175a88ed6b9c988cbf60864a4c0567e72f2afb159790264743d67185c0c95e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed175a88ed6b9c988cbf60864a4c0567e72f2afb159790264743d67185c0c95e->enter($__internal_ed175a88ed6b9c988cbf60864a4c0567e72f2afb159790264743d67185c0c95e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_ae4ca390bd39aa3b01c2b850350847570b6019bbcaa9026040adaba78956f1f7->leave($__internal_ae4ca390bd39aa3b01c2b850350847570b6019bbcaa9026040adaba78956f1f7_prof);

        
        $__internal_ed175a88ed6b9c988cbf60864a4c0567e72f2afb159790264743d67185c0c95e->leave($__internal_ed175a88ed6b9c988cbf60864a4c0567e72f2afb159790264743d67185c0c95e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/var/www/redexpert/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
