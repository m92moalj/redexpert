<?php

/* AppBundle:Losses:calculated_losses.html.twig */
class __TwigTemplate_65ee70a3ade2f7452dae89d46d6fb3974aba1e5c805670439efe516e1e052e2d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle:Layout:layout.html.twig", "AppBundle:Losses:calculated_losses.html.twig", 1);
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
        $__internal_e0b9e314dc4a4c90e11f4872761f39e2cf0960fe886adbe512cd5b210d575c71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0b9e314dc4a4c90e11f4872761f39e2cf0960fe886adbe512cd5b210d575c71->enter($__internal_e0b9e314dc4a4c90e11f4872761f39e2cf0960fe886adbe512cd5b210d575c71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Losses:calculated_losses.html.twig"));

        $__internal_6068de3e48974325a9348642ba8c59db8cc584c6a6858765d6ad94a3d13250c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6068de3e48974325a9348642ba8c59db8cc584c6a6858765d6ad94a3d13250c5->enter($__internal_6068de3e48974325a9348642ba8c59db8cc584c6a6858765d6ad94a3d13250c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Losses:calculated_losses.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e0b9e314dc4a4c90e11f4872761f39e2cf0960fe886adbe512cd5b210d575c71->leave($__internal_e0b9e314dc4a4c90e11f4872761f39e2cf0960fe886adbe512cd5b210d575c71_prof);

        
        $__internal_6068de3e48974325a9348642ba8c59db8cc584c6a6858765d6ad94a3d13250c5->leave($__internal_6068de3e48974325a9348642ba8c59db8cc584c6a6858765d6ad94a3d13250c5_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_af2d7390b7dd05e8fa63335417d734af6e441d4555de90ab3187acc85e824469 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af2d7390b7dd05e8fa63335417d734af6e441d4555de90ab3187acc85e824469->enter($__internal_af2d7390b7dd05e8fa63335417d734af6e441d4555de90ab3187acc85e824469_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_40ab01de0156147327e95be62781bee7884e4fdefc76d935ebabc0c1569309e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40ab01de0156147327e95be62781bee7884e4fdefc76d935ebabc0c1569309e9->enter($__internal_40ab01de0156147327e95be62781bee7884e4fdefc76d935ebabc0c1569309e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
<div class=\"divide60\"></div>
<div class=\"container\">

\t<nav class=\"breadcrumb\">
\t\t<a class=\"breadcrumb-item\" href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_homepage");
        echo "\">Inicio</a> / 
\t\t<a class=\"breadcrumb-item\" href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_losses");
        echo "\">Cálculo de pérdidas</a> / Pérdidas calculadas
\t</nav>

\t<center>
\t\t<h3>Pérdidas calculadas para el RF-Inductor ";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["inductor"]) || array_key_exists("inductor", $context) ? $context["inductor"] : (function () { throw new Twig_Error_Runtime('Variable "inductor" does not exist.', 14, $this->getSourceContext()); })()), "getOrderCode", array(), "method"), "html", null, true);
        echo "</h3><hr>
\t</center>

\t<div class=\"col-sm-8 col-sm-offset-2\" style=\"padding: 10px;\">
\t\t<p>Para una frecuencia <strong>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 18, $this->getSourceContext()); })()), "fc", array()), "html", null, true);
        echo "</strong> de la onda carrier y otra frecuencia <strong>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 18, $this->getSourceContext()); })()), "fr", array()), "html", null, true);
        echo "</strong> de la onda reference, para una señal <strong>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 18, $this->getSourceContext()); })()), "wave", array()), "html", null, true);
        echo "</strong> se obtienen los siguientes resultados: </p>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<p>- <strong>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 21, $this->getSourceContext()); })()), "numPulses", array()), "html", null, true);
        echo "</strong> pulsos:</p>
\t\t\t\t<ol>
\t\t\t\t\t";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 23, $this->getSourceContext()); })()), "pulseWidth", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 24
            echo "\t\t\t\t\t    <li>
\t\t\t\t\t    \t";
            // line 25
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "
\t\t\t\t\t    </li>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "\t\t\t\t</ol>
\t\t\t</div>
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<p>- <strong>";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 31, $this->getSourceContext()); })()), "numPulses", array()), "html", null, true);
        echo "</strong> pérdidas:</p>
\t\t\t\t<ol>
\t\t\t\t\t";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 33, $this->getSourceContext()); })()), "pulseLoss", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 34
            echo "\t\t\t\t\t    <li>
\t\t\t\t\t    \t";
            // line 35
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "
\t\t\t\t\t    </li>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "\t\t\t\t</ol>\t
\t\t\t</div>
\t\t</div>
\t</div>

";
        
        $__internal_40ab01de0156147327e95be62781bee7884e4fdefc76d935ebabc0c1569309e9->leave($__internal_40ab01de0156147327e95be62781bee7884e4fdefc76d935ebabc0c1569309e9_prof);

        
        $__internal_af2d7390b7dd05e8fa63335417d734af6e441d4555de90ab3187acc85e824469->leave($__internal_af2d7390b7dd05e8fa63335417d734af6e441d4555de90ab3187acc85e824469_prof);

    }

    // line 45
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_4fc806731bb4728762851e7f37924f08f1176e3a1a5da2d07743fc11796675d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4fc806731bb4728762851e7f37924f08f1176e3a1a5da2d07743fc11796675d0->enter($__internal_4fc806731bb4728762851e7f37924f08f1176e3a1a5da2d07743fc11796675d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_f604f38b52789e2e56a31d5fe885cc31efaa06550e1506a182d927c6ab3dd909 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f604f38b52789e2e56a31d5fe885cc31efaa06550e1506a182d927c6ab3dd909->enter($__internal_f604f38b52789e2e56a31d5fe885cc31efaa06550e1506a182d927c6ab3dd909_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 46
        echo "    ";
        $this->displayParentBlock("scripts", $context, $blocks);
        echo "
";
        
        $__internal_f604f38b52789e2e56a31d5fe885cc31efaa06550e1506a182d927c6ab3dd909->leave($__internal_f604f38b52789e2e56a31d5fe885cc31efaa06550e1506a182d927c6ab3dd909_prof);

        
        $__internal_4fc806731bb4728762851e7f37924f08f1176e3a1a5da2d07743fc11796675d0->leave($__internal_4fc806731bb4728762851e7f37924f08f1176e3a1a5da2d07743fc11796675d0_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Losses:calculated_losses.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 46,  147 => 45,  132 => 38,  123 => 35,  120 => 34,  116 => 33,  111 => 31,  106 => 28,  97 => 25,  94 => 24,  90 => 23,  85 => 21,  75 => 18,  68 => 14,  61 => 10,  57 => 9,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"AppBundle:Layout:layout.html.twig\" %}

{% block content %}

<div class=\"divide60\"></div>
<div class=\"container\">

\t<nav class=\"breadcrumb\">
\t\t<a class=\"breadcrumb-item\" href=\"{{path('app_homepage')}}\">Inicio</a> / 
\t\t<a class=\"breadcrumb-item\" href=\"{{path('app_losses')}}\">Cálculo de pérdidas</a> / Pérdidas calculadas
\t</nav>

\t<center>
\t\t<h3>Pérdidas calculadas para el RF-Inductor {{inductor.getOrderCode()}}</h3><hr>
\t</center>

\t<div class=\"col-sm-8 col-sm-offset-2\" style=\"padding: 10px;\">
\t\t<p>Para una frecuencia <strong>{{data.fc}}</strong> de la onda carrier y otra frecuencia <strong>{{data.fr}}</strong> de la onda reference, para una señal <strong>{{data.wave}}</strong> se obtienen los siguientes resultados: </p>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<p>- <strong>{{data.numPulses}}</strong> pulsos:</p>
\t\t\t\t<ol>
\t\t\t\t\t{% for item in data.pulseWidth %}
\t\t\t\t\t    <li>
\t\t\t\t\t    \t{{item}}
\t\t\t\t\t    </li>
\t\t\t\t\t{% endfor %}
\t\t\t\t</ol>
\t\t\t</div>
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<p>- <strong>{{data.numPulses}}</strong> pérdidas:</p>
\t\t\t\t<ol>
\t\t\t\t\t{% for item in data.pulseLoss %}
\t\t\t\t\t    <li>
\t\t\t\t\t    \t{{item}}
\t\t\t\t\t    </li>
\t\t\t\t\t{% endfor %}
\t\t\t\t</ol>\t
\t\t\t</div>
\t\t</div>
\t</div>

{% endblock %}

{% block scripts %}
    {{parent()}}
{% endblock %}", "AppBundle:Losses:calculated_losses.html.twig", "/var/www/redexpert/src/AppBundle/Resources/views/Losses/calculated_losses.html.twig");
    }
}
