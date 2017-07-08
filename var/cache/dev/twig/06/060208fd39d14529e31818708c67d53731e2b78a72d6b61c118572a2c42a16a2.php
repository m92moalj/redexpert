<?php

/* AppBundle:Losses:view_losses.html.twig */
class __TwigTemplate_bca89201f14fdc42b6018918a2e12c52a2e27e938a7ceded6aefbdb4e66871ac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle:Layout:layout.html.twig", "AppBundle:Losses:view_losses.html.twig", 1);
        $this->blocks = array(
            'styles' => array($this, 'block_styles'),
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
        $__internal_041a8366a68eb48c927ecc226cc8e2953fd7e13049cd807cc31bb05ccefdd1f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_041a8366a68eb48c927ecc226cc8e2953fd7e13049cd807cc31bb05ccefdd1f2->enter($__internal_041a8366a68eb48c927ecc226cc8e2953fd7e13049cd807cc31bb05ccefdd1f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Losses:view_losses.html.twig"));

        $__internal_2578f1ea713332a6e6ac94f8e52e58ccad6621c3960c6756c8c325a88d411bd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2578f1ea713332a6e6ac94f8e52e58ccad6621c3960c6756c8c325a88d411bd4->enter($__internal_2578f1ea713332a6e6ac94f8e52e58ccad6621c3960c6756c8c325a88d411bd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Losses:view_losses.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_041a8366a68eb48c927ecc226cc8e2953fd7e13049cd807cc31bb05ccefdd1f2->leave($__internal_041a8366a68eb48c927ecc226cc8e2953fd7e13049cd807cc31bb05ccefdd1f2_prof);

        
        $__internal_2578f1ea713332a6e6ac94f8e52e58ccad6621c3960c6756c8c325a88d411bd4->leave($__internal_2578f1ea713332a6e6ac94f8e52e58ccad6621c3960c6756c8c325a88d411bd4_prof);

    }

    // line 4
    public function block_styles($context, array $blocks = array())
    {
        $__internal_200b63cba1721e80619d92d6de2f2231a3325ddbf435023ffccff1d237475872 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_200b63cba1721e80619d92d6de2f2231a3325ddbf435023ffccff1d237475872->enter($__internal_200b63cba1721e80619d92d6de2f2231a3325ddbf435023ffccff1d237475872_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "styles"));

        $__internal_2ff6fc66dc2bab486b95d9a1d23a1165b352aa6df1dadf2b857b56877bb4a2c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ff6fc66dc2bab486b95d9a1d23a1165b352aa6df1dadf2b857b56877bb4a2c2->enter($__internal_2ff6fc66dc2bab486b95d9a1d23a1165b352aa6df1dadf2b857b56877bb4a2c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "styles"));

        // line 5
        echo "\t";
        $this->displayParentBlock("styles", $context, $blocks);
        echo "
\t<link href=\"https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css\" rel=\"stylesheet\" type=\"text/css\" media=\"screen\">

\t";
        
        $__internal_2ff6fc66dc2bab486b95d9a1d23a1165b352aa6df1dadf2b857b56877bb4a2c2->leave($__internal_2ff6fc66dc2bab486b95d9a1d23a1165b352aa6df1dadf2b857b56877bb4a2c2_prof);

        
        $__internal_200b63cba1721e80619d92d6de2f2231a3325ddbf435023ffccff1d237475872->leave($__internal_200b63cba1721e80619d92d6de2f2231a3325ddbf435023ffccff1d237475872_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_c996597a47dee5c51a7fad3af6ddfaa5b9c302a750d525b5d4761917c86a60f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c996597a47dee5c51a7fad3af6ddfaa5b9c302a750d525b5d4761917c86a60f2->enter($__internal_c996597a47dee5c51a7fad3af6ddfaa5b9c302a750d525b5d4761917c86a60f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_f09555e4f1dcf64d39c167777a9b5f2b8668bc162f92857f0afce93c7b58d2ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f09555e4f1dcf64d39c167777a9b5f2b8668bc162f92857f0afce93c7b58d2ea->enter($__internal_f09555e4f1dcf64d39c167777a9b5f2b8668bc162f92857f0afce93c7b58d2ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 12
        echo "
<div class=\"divide60\"></div>
<div class=\"container\">

\t<nav class=\"breadcrumb\">
\t\t<a class=\"breadcrumb-item\" href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_homepage");
        echo "\">Inicio</a> / Visualización de pérdidas
\t</nav>

\t<center>
\t\t<h3>Visualización de las pérdidas calculadas para cada uno de los componentes</h3><hr>
\t</center>

\t<div class=\"col-sm-4\" style=\"padding: 10px;\">
\t\t<form id=\"view_losses_for_component\" action=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("get_losses");
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
\t\t\t<label for=\"powerInductors\">Power Inductors disponibles:</label>
\t\t\t\t<select class=\"form-control\" id=\"powerInductors\" name=\"idPI\">

\t\t\t\t\t";
        // line 29
        if (array_key_exists("pi_selected", $context)) {
            // line 30
            echo "\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["pi_selected"]) || array_key_exists("pi_selected", $context) ? $context["pi_selected"] : (function () { throw new Twig_Error_Runtime('Variable "pi_selected" does not exist.', 30, $this->getSourceContext()); })()), "getId", array(), "method"), "html", null, true);
            echo "\">
\t\t\t\t\t\t\tOrder Code: ";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["pi_selected"]) || array_key_exists("pi_selected", $context) ? $context["pi_selected"] : (function () { throw new Twig_Error_Runtime('Variable "pi_selected" does not exist.', 31, $this->getSourceContext()); })()), "getOrderCode", array(), "method"), "html", null, true);
            echo " 
\t\t\t\t\t\t</option>
\t\t\t\t\t";
        }
        // line 34
        echo "
\t\t\t\t\t";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["powerInductors"]) || array_key_exists("powerInductors", $context) ? $context["powerInductors"] : (function () { throw new Twig_Error_Runtime('Variable "powerInductors" does not exist.', 35, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["powerInductor"]) {
            // line 36
            echo "\t\t\t\t\t\t";
            if (array_key_exists("pi_selected", $context)) {
                // line 37
                echo "\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["powerInductor"], "getId", array(), "method") == twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["pi_selected"]) || array_key_exists("pi_selected", $context) ? $context["pi_selected"] : (function () { throw new Twig_Error_Runtime('Variable "pi_selected" does not exist.', 37, $this->getSourceContext()); })()), "getId", array(), "method"))) {
                    // line 38
                    echo "\t\t\t\t\t\t\t";
                } else {
                    // line 39
                    echo "\t\t\t\t\t\t\t    <option value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["powerInductor"], "getId", array(), "method"), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t    \tOrder Code: ";
                    // line 40
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["powerInductor"], "getOrderCode", array(), "method"), "html", null, true);
                    echo "
\t\t\t\t\t\t\t    </option>
\t\t\t\t\t\t\t";
                }
                // line 43
                echo "\t\t\t\t\t\t";
            } else {
                // line 44
                echo "\t\t\t\t\t\t\t<option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["powerInductor"], "getId", array(), "method"), "html", null, true);
                echo "\">
\t\t\t\t\t\t    \tOrder Code: ";
                // line 45
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["powerInductor"], "getOrderCode", array(), "method"), "html", null, true);
                echo "
\t\t\t\t\t\t    </option>
\t\t\t\t\t    ";
            }
            // line 48
            echo "\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['powerInductor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "\t\t\t\t
\t\t\t\t</select>
\t\t\t<br>
\t\t\t<button type=\"submit\" class=\"btn btn-primary\" id=\"btn-obtener\">Obtener</button>
\t\t\t<br>
\t\t</form>
\t</div>\t
\t<div class=\"col-sm-6 col-sm-offset-1\" style=\"padding: 10px;\">
\t\t";
        // line 56
        if (array_key_exists("losses", $context)) {
            // line 57
            echo "\t\t\t<h3>Pérdidas calculadas:</h3><hr>
\t\t\t<table class=\"table table-striped table-bordered\" id=\"tableLosses\">
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Pérdidas</th>
\t\t\t\t\t\t<th>Voltaje del inductor</th>
\t\t\t\t\t\t<th>Fecha del cálculo</th>
\t\t\t\t\t\t";
            // line 65
            echo "\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t";
            // line 68
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["losses"]) || array_key_exists("losses", $context) ? $context["losses"] : (function () { throw new Twig_Error_Runtime('Variable "losses" does not exist.', 68, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["loss"]) {
                // line 69
                echo "\t\t\t\t\t<tr>
\t\t\t\t\t    <td>";
                // line 70
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["loss"], "getLosses", array(), "method"), "getLosses", array(), "method"), "html", null, true);
                echo "</td>
\t\t\t\t\t    <td>";
                // line 71
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["loss"], "getVoltageInductor", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t<td>";
                // line 72
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["loss"], "getLosses", array(), "method"), "getCalculatedAt", array(), "method"), "d-m-Y H:i:s"), "html", null, true);
                echo "</td>
\t\t\t\t\t\t";
                // line 74
                echo "\t\t\t\t\t</tr>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['loss'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 76
            echo "\t\t\t\t</tbody>
\t\t\t</table>
\t\t";
        }
        // line 79
        echo "\t</div>
</div>

";
        
        $__internal_f09555e4f1dcf64d39c167777a9b5f2b8668bc162f92857f0afce93c7b58d2ea->leave($__internal_f09555e4f1dcf64d39c167777a9b5f2b8668bc162f92857f0afce93c7b58d2ea_prof);

        
        $__internal_c996597a47dee5c51a7fad3af6ddfaa5b9c302a750d525b5d4761917c86a60f2->leave($__internal_c996597a47dee5c51a7fad3af6ddfaa5b9c302a750d525b5d4761917c86a60f2_prof);

    }

    // line 84
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_480e8c8be89512834d07589209f42a43f206e2e3c7cf84c8e9034f066434d1a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_480e8c8be89512834d07589209f42a43f206e2e3c7cf84c8e9034f066434d1a8->enter($__internal_480e8c8be89512834d07589209f42a43f206e2e3c7cf84c8e9034f066434d1a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_4ee2cab2ea03c19789d99564fc7b1e43eebaab37b16dd05540c4627b48e2402a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ee2cab2ea03c19789d99564fc7b1e43eebaab37b16dd05540c4627b48e2402a->enter($__internal_4ee2cab2ea03c19789d99564fc7b1e43eebaab37b16dd05540c4627b48e2402a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 85
        echo "    ";
        $this->displayParentBlock("scripts", $context, $blocks);
        echo "
\t<script type=\"text/javascript\" src=\"http://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js\"></script>

    <script type=\"text/javascript\">
\t    \$(document).ready(function() {
\t\t    \$('#tableLosses').DataTable({
\t\t    \t\"language\": {
                \"url\": \"https://cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json\"
            }
\t\t    });
\t\t} );
    </script>

";
        
        $__internal_4ee2cab2ea03c19789d99564fc7b1e43eebaab37b16dd05540c4627b48e2402a->leave($__internal_4ee2cab2ea03c19789d99564fc7b1e43eebaab37b16dd05540c4627b48e2402a_prof);

        
        $__internal_480e8c8be89512834d07589209f42a43f206e2e3c7cf84c8e9034f066434d1a8->leave($__internal_480e8c8be89512834d07589209f42a43f206e2e3c7cf84c8e9034f066434d1a8_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Losses:view_losses.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  238 => 85,  229 => 84,  216 => 79,  211 => 76,  204 => 74,  200 => 72,  196 => 71,  192 => 70,  189 => 69,  185 => 68,  180 => 65,  171 => 57,  169 => 56,  154 => 48,  148 => 45,  143 => 44,  140 => 43,  134 => 40,  129 => 39,  126 => 38,  123 => 37,  120 => 36,  116 => 35,  113 => 34,  107 => 31,  102 => 30,  100 => 29,  93 => 25,  82 => 17,  75 => 12,  66 => 11,  51 => 5,  42 => 4,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"AppBundle:Layout:layout.html.twig\" %}


{% block styles %}
\t{{parent()}}
\t<link href=\"https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css\" rel=\"stylesheet\" type=\"text/css\" media=\"screen\">

\t{# <link href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" rel=\"stylesheet\" type=\"text/css\" media=\"screen\"> #}
{% endblock %}

{% block content %}

<div class=\"divide60\"></div>
<div class=\"container\">

\t<nav class=\"breadcrumb\">
\t\t<a class=\"breadcrumb-item\" href=\"{{path('app_homepage')}}\">Inicio</a> / Visualización de pérdidas
\t</nav>

\t<center>
\t\t<h3>Visualización de las pérdidas calculadas para cada uno de los componentes</h3><hr>
\t</center>

\t<div class=\"col-sm-4\" style=\"padding: 10px;\">
\t\t<form id=\"view_losses_for_component\" action=\"{{path('get_losses')}}\" method=\"post\" enctype=\"multipart/form-data\">
\t\t\t<label for=\"powerInductors\">Power Inductors disponibles:</label>
\t\t\t\t<select class=\"form-control\" id=\"powerInductors\" name=\"idPI\">

\t\t\t\t\t{% if pi_selected is defined %}
\t\t\t\t\t\t<option value=\"{{pi_selected.getId()}}\">
\t\t\t\t\t\t\tOrder Code: {{pi_selected.getOrderCode()}} 
\t\t\t\t\t\t</option>
\t\t\t\t\t{% endif %}

\t\t\t\t\t{% for powerInductor in powerInductors %}
\t\t\t\t\t\t{% if pi_selected is defined %}
\t\t\t\t\t\t\t{% if powerInductor.getId() == pi_selected.getId() %}
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t    <option value=\"{{powerInductor.getId()}}\">
\t\t\t\t\t\t\t    \tOrder Code: {{powerInductor.getOrderCode()}}
\t\t\t\t\t\t\t    </option>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t<option value=\"{{powerInductor.getId()}}\">
\t\t\t\t\t\t    \tOrder Code: {{powerInductor.getOrderCode()}}
\t\t\t\t\t\t    </option>
\t\t\t\t\t    {% endif %}
\t\t\t\t\t{% endfor %}\t\t\t\t
\t\t\t\t</select>
\t\t\t<br>
\t\t\t<button type=\"submit\" class=\"btn btn-primary\" id=\"btn-obtener\">Obtener</button>
\t\t\t<br>
\t\t</form>
\t</div>\t
\t<div class=\"col-sm-6 col-sm-offset-1\" style=\"padding: 10px;\">
\t\t{% if losses is defined %}
\t\t\t<h3>Pérdidas calculadas:</h3><hr>
\t\t\t<table class=\"table table-striped table-bordered\" id=\"tableLosses\">
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Pérdidas</th>
\t\t\t\t\t\t<th>Voltaje del inductor</th>
\t\t\t\t\t\t<th>Fecha del cálculo</th>
\t\t\t\t\t\t{# <th>Tipo de onda</th> #}
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t{% for loss in losses %}
\t\t\t\t\t<tr>
\t\t\t\t\t    <td>{{loss.getLosses().getLosses()}}</td>
\t\t\t\t\t    <td>{{loss.getVoltageInductor}}</td>
\t\t\t\t\t\t<td>{{loss.getLosses().getCalculatedAt()|date('d-m-Y H:i:s')}}</td>
\t\t\t\t\t\t{# <td>{{loss.}}</td> #}
\t\t\t\t\t</tr>
\t\t\t\t\t{% endfor %}
\t\t\t\t</tbody>
\t\t\t</table>
\t\t{% endif %}
\t</div>
</div>

{% endblock %}

{% block scripts %}
    {{parent()}}
\t<script type=\"text/javascript\" src=\"http://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js\"></script>

    <script type=\"text/javascript\">
\t    \$(document).ready(function() {
\t\t    \$('#tableLosses').DataTable({
\t\t    \t\"language\": {
                \"url\": \"https://cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json\"
            }
\t\t    });
\t\t} );
    </script>

{% endblock %}", "AppBundle:Losses:view_losses.html.twig", "/var/www/redexpert/src/AppBundle/Resources/views/Losses/view_losses.html.twig");
    }
}
