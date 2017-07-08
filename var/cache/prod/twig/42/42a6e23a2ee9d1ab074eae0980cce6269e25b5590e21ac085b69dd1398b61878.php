<?php

/* AppBundle:Losses:view_losses.html.twig */
class __TwigTemplate_d285ae1af5210cec83714b2dd8aa5925579cb82e0ec0ac53ea1992c041e3f066 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_styles($context, array $blocks = array())
    {
        // line 5
        echo "\t";
        $this->displayParentBlock("styles", $context, $blocks);
        echo "
\t<link href=\"https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css\" rel=\"stylesheet\" type=\"text/css\" media=\"screen\">

\t";
    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
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
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["pi_selected"] ?? null), "getId", array(), "method"), "html", null, true);
            echo "\">
\t\t\t\t\t\t\tOrder Code: ";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["pi_selected"] ?? null), "getOrderCode", array(), "method"), "html", null, true);
            echo " 
\t\t\t\t\t\t</option>
\t\t\t\t\t";
        }
        // line 34
        echo "
\t\t\t\t\t";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["powerInductors"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["powerInductor"]) {
            // line 36
            echo "\t\t\t\t\t\t";
            if (array_key_exists("pi_selected", $context)) {
                // line 37
                echo "\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["powerInductor"], "getId", array(), "method") == twig_get_attribute($this->env, $this->getSourceContext(), ($context["pi_selected"] ?? null), "getId", array(), "method"))) {
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
            $context['_seq'] = twig_ensure_traversable(($context["losses"] ?? null));
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
    }

    // line 84
    public function block_scripts($context, array $blocks = array())
    {
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
        return array (  196 => 85,  193 => 84,  186 => 79,  181 => 76,  174 => 74,  170 => 72,  166 => 71,  162 => 70,  159 => 69,  155 => 68,  150 => 65,  141 => 57,  139 => 56,  124 => 48,  118 => 45,  113 => 44,  110 => 43,  104 => 40,  99 => 39,  96 => 38,  93 => 37,  90 => 36,  86 => 35,  83 => 34,  77 => 31,  72 => 30,  70 => 29,  63 => 25,  52 => 17,  45 => 12,  42 => 11,  33 => 5,  30 => 4,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AppBundle:Losses:view_losses.html.twig", "/var/www/REDEXPERT/src/AppBundle/Resources/views/Losses/view_losses.html.twig");
    }
}
