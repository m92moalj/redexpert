<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_3f7d5ecfe9cb97e1573ce79180a2261d94540e4831c8572e28105aa88f47693c extends Twig_Template
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
        $__internal_f27fc687bfe6fac61db9381e31045aefe8f8a4d70f932c8684f691a3f086a762 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f27fc687bfe6fac61db9381e31045aefe8f8a4d70f932c8684f691a3f086a762->enter($__internal_f27fc687bfe6fac61db9381e31045aefe8f8a4d70f932c8684f691a3f086a762_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_dfe49bfc61d79dabf7d463ecf12c18c285046cf62d4a1076e17aab7a2a277d5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfe49bfc61d79dabf7d463ecf12c18c285046cf62d4a1076e17aab7a2a277d5b->enter($__internal_dfe49bfc61d79dabf7d463ecf12c18c285046cf62d4a1076e17aab7a2a277d5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()), "exception" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()), "toarray", array()))));
        echo "
";
        
        $__internal_f27fc687bfe6fac61db9381e31045aefe8f8a4d70f932c8684f691a3f086a762->leave($__internal_f27fc687bfe6fac61db9381e31045aefe8f8a4d70f932c8684f691a3f086a762_prof);

        
        $__internal_dfe49bfc61d79dabf7d463ecf12c18c285046cf62d4a1076e17aab7a2a277d5b->leave($__internal_dfe49bfc61d79dabf7d463ecf12c18c285046cf62d4a1076e17aab7a2a277d5b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "/var/www/redexpert/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
