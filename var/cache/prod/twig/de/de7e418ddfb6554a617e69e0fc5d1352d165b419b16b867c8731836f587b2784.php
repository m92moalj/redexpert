<?php

/* AppBundle:Losses:calculatePulses.html.twig */
class __TwigTemplate_a641f34071b2e5042a2cf9f42c3b3c20dec06bda68acbc3214f7a2e315cb048e extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
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
        $context['_seq'] = twig_ensure_traversable(($context["powerInductors"] ?? null));
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
    }

    // line 57
    public function block_scripts($context, array $blocks = array())
    {
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
        if ((($context["status"] ?? null) != "")) {
            // line 83
            echo "\t<script type=\"text/javascript\">
\t\tsweetAlert(\"";
            // line 84
            echo twig_escape_filter($this->env, ($context["status"] ?? null), "html", null, true);
            echo "\", \"";
            echo twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true);
            echo "\", \"\", false);
\t</script>
";
        }
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
        return array (  144 => 84,  141 => 83,  139 => 82,  112 => 58,  109 => 57,  72 => 22,  63 => 20,  58 => 19,  54 => 18,  47 => 14,  39 => 9,  32 => 4,  29 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AppBundle:Losses:calculatePulses.html.twig", "/var/www/REDEXPERT/src/AppBundle/Resources/views/Losses/calculatePulses.html.twig");
    }
}
