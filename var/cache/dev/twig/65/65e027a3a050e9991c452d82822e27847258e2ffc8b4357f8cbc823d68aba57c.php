<?php

/* AppBundle:Losses:calculatePulses.html.twig */
class __TwigTemplate_afdd8da1cc993c33882b5463d667f9b388d0ce8d22d612a1be24501f9c976c46 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle:Layout:layout.html.twig", "AppBundle:Losses:calculatePulses.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'scripts' => array($this, 'block_scripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle:Layout:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_861268e4cb632a5e93f8c9616c80a1d27baa5a2098e084abe98b1753f41c2399 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_861268e4cb632a5e93f8c9616c80a1d27baa5a2098e084abe98b1753f41c2399->enter($__internal_861268e4cb632a5e93f8c9616c80a1d27baa5a2098e084abe98b1753f41c2399_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Losses:calculatePulses.html.twig"));

        $__internal_1ef3782f0ad0276d31dc5f283b16bf194df009a7edc9f19d5fe23311f87530d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ef3782f0ad0276d31dc5f283b16bf194df009a7edc9f19d5fe23311f87530d8->enter($__internal_1ef3782f0ad0276d31dc5f283b16bf194df009a7edc9f19d5fe23311f87530d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Losses:calculatePulses.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_861268e4cb632a5e93f8c9616c80a1d27baa5a2098e084abe98b1753f41c2399->leave($__internal_861268e4cb632a5e93f8c9616c80a1d27baa5a2098e084abe98b1753f41c2399_prof);

        
        $__internal_1ef3782f0ad0276d31dc5f283b16bf194df009a7edc9f19d5fe23311f87530d8->leave($__internal_1ef3782f0ad0276d31dc5f283b16bf194df009a7edc9f19d5fe23311f87530d8_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_e5a55eb42905eaf34f617c08b38923bee63791c7b20e9184790f7596c7a907e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5a55eb42905eaf34f617c08b38923bee63791c7b20e9184790f7596c7a907e9->enter($__internal_e5a55eb42905eaf34f617c08b38923bee63791c7b20e9184790f7596c7a907e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_e889507bd7184d3d30374a4720f522af05b276cfa7d00e709bc362950b88a6ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e889507bd7184d3d30374a4720f522af05b276cfa7d00e709bc362950b88a6ed->enter($__internal_e889507bd7184d3d30374a4720f522af05b276cfa7d00e709bc362950b88a6ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
<div class=\"divide60\"></div>
<div class=\"container\">

\t<nav class=\"breadcrumb\">
\t\t<a class=\"breadcrumb-item\" href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_homepage");
        echo "\">Inicio</a> / Cálculo de pérdidas
\t</nav>

\t<h3>Rellene el formulario para el cáculo</h3><hr>
\t<div class=\"row\">
\t\t<form action=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("calculation");
        echo "\" method=\"post\">
\t\t\t<div class=\"col-md-4 col-sm-12\">
\t\t\t\t<label for=\"powerInductors\">Power Inductor:</label>
\t\t\t\t<select class=\"form-control\" id=\"powerInductors\" name=\"idPI\">
\t\t\t\t\t";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["powerInductors"]) || array_key_exists("powerInductors", $context) ? $context["powerInductors"] : (function () { throw new Twig_Error_Runtime('Variable "powerInductors" does not exist.', 18, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["powerInductor"]) {
            // line 19
            echo "\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["powerInductor"], "getId", array(), "method"), "html", null, true);
            echo "\">
\t\t\t\t\t    \tOrder Code: ";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["powerInductor"], "getOrderCode", array(), "method"), "html", null, true);
            echo "
\t\t\t\t\t    </option>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['powerInductor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "\t\t\t\t
\t\t\t\t</select>
\t    \t</div>
\t    \t<div class=\"col-md-4 col-sm-12\">
\t\t\t\t<label for=\"form-vind\">Voltage Inductor (V):</label>
\t\t\t\t<input type=\"number\" class=\"form-vind form-control\" min=\"1\" name=\"form-vind\" onchange=\"validate(this, 'number');\">
\t    \t</div>
\t    \t<div class=\"col-md-4 col-sm-12\">
\t\t\t\t<label for=\"form-fc\">Frequency Carrier (Normaliced):</label>
\t\t\t\t<input type=\"number\" class=\"form-fc form-control\" min=\"1\" name=\"form-fc\" onchange=\"validate(this, 'number');\">
\t    \t</div>
\t    \t<div class=\"col-md-4 col-sm-12\">
\t\t\t\t<label for=\"form-fr\">Frequency Reference (Normaliced):</label>
\t\t\t\t<input type=\"number\" class=\"form-fr form-control\" min=\"1\" name=\"form-fr\" onchange=\"validate(this, 'number');\">
\t    \t</div>
\t    \t<div class=\"col-md-4 col-sm-12\">
\t\t\t\t<label for=\"form-wavestype\">Wave's type:</label>
\t\t\t\t<select class=\"form-wavestype form-control\" id=\"form-wavestype\" name=\"form-wavestype\">
\t\t\t\t\t<option value=\"1\">
\t\t\t\t    \tTriangle
\t\t\t\t    </option>
\t\t\t\t\t<option value=\"2\">
\t\t\t\t    \tTriangle Pulsatory\t
\t\t\t\t    </option>
\t\t\t\t</select>
\t    \t</div>
\t    \t<div class=\"col-md-12 col-sm-12\" style=\"margin-top: 10px;\">
\t    \t\t<button type=\"submit\" class=\"btn btn-primary\"> Calcular </button>
\t    \t</div>
\t\t</form>
\t</div>
</div>

";
        
        $__internal_e889507bd7184d3d30374a4720f522af05b276cfa7d00e709bc362950b88a6ed->leave($__internal_e889507bd7184d3d30374a4720f522af05b276cfa7d00e709bc362950b88a6ed_prof);

        
        $__internal_e5a55eb42905eaf34f617c08b38923bee63791c7b20e9184790f7596c7a907e9->leave($__internal_e5a55eb42905eaf34f617c08b38923bee63791c7b20e9184790f7596c7a907e9_prof);

    }

    // line 57
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_794313e544acd0d9c5f184f0496362ae629877c91a82533029db3cabf898c17f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_794313e544acd0d9c5f184f0496362ae629877c91a82533029db3cabf898c17f->enter($__internal_794313e544acd0d9c5f184f0496362ae629877c91a82533029db3cabf898c17f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_e88fd6052e62450853e964b0e2c7ee0ab6c62d4ac18591e365b82ae9e78502bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e88fd6052e62450853e964b0e2c7ee0ab6c62d4ac18591e365b82ae9e78502bc->enter($__internal_e88fd6052e62450853e964b0e2c7ee0ab6c62d4ac18591e365b82ae9e78502bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 58
        $this->displayParentBlock("scripts", $context, $blocks);
        echo "
<script TYPE=\"text/JavaScript\">
    function validate(inputField, type) {
    \tvar isValid = \"\";

    \tswitch(type){
    \t\tcase 'number':
    \t\t\tisValid = /(?:\\d*\\.)?\\d+\$/.test(inputField.value);
    \t\t\tbreak;
    \t\tcase 'email':
    \t\t\tisValid = /[a-z1-9]+[_a-z1-9\\.-]*[a-z1-9]+@[a-z1-9-]+(\\.[a-z1-9-]+)*(\\.[a-z]{2,4})\$/.test(inputField.value);
    \t\t\tbreak;
    \t\tcase 'text':
    \t\t\tbreak;
    \t}
        if (isValid) {
            inputField.style.backgroundColor = '#bfa';
        } else {
            inputField.style.backgroundColor = '#fba';
        }

        return isValid;
    }
</script>
";
        // line 82
        if (((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new Twig_Error_Runtime('Variable "status" does not exist.', 82, $this->getSourceContext()); })()) != "")) {
            // line 83
            echo "\t<script type=\"text/javascript\">
\t\tsweetAlert(\"";
            // line 84
            echo twig_escape_filter($this->env, (isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new Twig_Error_Runtime('Variable "status" does not exist.', 84, $this->getSourceContext()); })()), "html", null, true);
            echo "\", \"";
            echo twig_escape_filter($this->env, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new Twig_Error_Runtime('Variable "message" does not exist.', 84, $this->getSourceContext()); })()), "html", null, true);
            echo "\", \"\", false);
\t</script>
";
        }
        
        $__internal_e88fd6052e62450853e964b0e2c7ee0ab6c62d4ac18591e365b82ae9e78502bc->leave($__internal_e88fd6052e62450853e964b0e2c7ee0ab6c62d4ac18591e365b82ae9e78502bc_prof);

        
        $__internal_794313e544acd0d9c5f184f0496362ae629877c91a82533029db3cabf898c17f->leave($__internal_794313e544acd0d9c5f184f0496362ae629877c91a82533029db3cabf898c17f_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Losses:calculatePulses.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 84,  171 => 83,  169 => 82,  142 => 58,  133 => 57,  90 => 22,  81 => 20,  76 => 19,  72 => 18,  65 => 14,  57 => 9,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"AppBundle:Layout:layout.html.twig\" %}

{% block content %}

<div class=\"divide60\"></div>
<div class=\"container\">

\t<nav class=\"breadcrumb\">
\t\t<a class=\"breadcrumb-item\" href=\"{{path('app_homepage')}}\">Inicio</a> / Cálculo de pérdidas
\t</nav>

\t<h3>Rellene el formulario para el cáculo</h3><hr>
\t<div class=\"row\">
\t\t<form action=\"{{path('calculation')}}\" method=\"post\">
\t\t\t<div class=\"col-md-4 col-sm-12\">
\t\t\t\t<label for=\"powerInductors\">Power Inductor:</label>
\t\t\t\t<select class=\"form-control\" id=\"powerInductors\" name=\"idPI\">
\t\t\t\t\t{% for powerInductor in powerInductors %}
\t\t\t\t\t\t<option value=\"{{powerInductor.getId()}}\">
\t\t\t\t\t    \tOrder Code: {{powerInductor.getOrderCode()}}
\t\t\t\t\t    </option>
\t\t\t\t\t{% endfor %}\t\t\t\t
\t\t\t\t</select>
\t    \t</div>
\t    \t<div class=\"col-md-4 col-sm-12\">
\t\t\t\t<label for=\"form-vind\">Voltage Inductor (V):</label>
\t\t\t\t<input type=\"number\" class=\"form-vind form-control\" min=\"1\" name=\"form-vind\" onchange=\"validate(this, 'number');\">
\t    \t</div>
\t    \t<div class=\"col-md-4 col-sm-12\">
\t\t\t\t<label for=\"form-fc\">Frequency Carrier (Normaliced):</label>
\t\t\t\t<input type=\"number\" class=\"form-fc form-control\" min=\"1\" name=\"form-fc\" onchange=\"validate(this, 'number');\">
\t    \t</div>
\t    \t<div class=\"col-md-4 col-sm-12\">
\t\t\t\t<label for=\"form-fr\">Frequency Reference (Normaliced):</label>
\t\t\t\t<input type=\"number\" class=\"form-fr form-control\" min=\"1\" name=\"form-fr\" onchange=\"validate(this, 'number');\">
\t    \t</div>
\t    \t<div class=\"col-md-4 col-sm-12\">
\t\t\t\t<label for=\"form-wavestype\">Wave's type:</label>
\t\t\t\t<select class=\"form-wavestype form-control\" id=\"form-wavestype\" name=\"form-wavestype\">
\t\t\t\t\t<option value=\"1\">
\t\t\t\t    \tTriangle
\t\t\t\t    </option>
\t\t\t\t\t<option value=\"2\">
\t\t\t\t    \tTriangle Pulsatory\t
\t\t\t\t    </option>
\t\t\t\t</select>
\t    \t</div>
\t    \t<div class=\"col-md-12 col-sm-12\" style=\"margin-top: 10px;\">
\t    \t\t<button type=\"submit\" class=\"btn btn-primary\"> Calcular </button>
\t    \t</div>
\t\t</form>
\t</div>
</div>

{% endblock %}

{% block scripts %}
{{parent()}}
<script TYPE=\"text/JavaScript\">
    function validate(inputField, type) {
    \tvar isValid = \"\";

    \tswitch(type){
    \t\tcase 'number':
    \t\t\tisValid = /(?:\\d*\\.)?\\d+\$/.test(inputField.value);
    \t\t\tbreak;
    \t\tcase 'email':
    \t\t\tisValid = /[a-z1-9]+[_a-z1-9\\.-]*[a-z1-9]+@[a-z1-9-]+(\\.[a-z1-9-]+)*(\\.[a-z]{2,4})\$/.test(inputField.value);
    \t\t\tbreak;
    \t\tcase 'text':
    \t\t\tbreak;
    \t}
        if (isValid) {
            inputField.style.backgroundColor = '#bfa';
        } else {
            inputField.style.backgroundColor = '#fba';
        }

        return isValid;
    }
</script>
{% if status != \"\" %}
\t<script type=\"text/javascript\">
\t\tsweetAlert(\"{{status}}\", \"{{message}}\", \"\", false);
\t</script>
{% endif %}
{% endblock %}", "AppBundle:Losses:calculatePulses.html.twig", "/var/www/redexpert/src/AppBundle/Resources/views/Losses/calculatePulses.html.twig");
    }
}
