<?php

/* AppBundle:Losses:calculated_losses.html.twig */
class __TwigTemplate_db60c783b884eeb8d08297252b1a92a0c26d764a4add346c2987b173380ec651 extends Twig_Template
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
        echo "\">Inicio</a> / 
\t\t<a class=\"breadcrumb-item\" href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_losses");
        echo "\">Cálculo de pérdidas</a> / Pérdidas calculadas
\t</nav>

\t<center>
\t\t<h3>Pérdidas calculadas para el RF-Inductor ";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["inductor"] ?? null), "getOrderCode", array(), "method"), "html", null, true);
        echo "</h3><hr>
\t</center>

\t<div class=\"col-sm-8 col-sm-offset-2\" style=\"padding: 10px;\">
\t\t<p>Para una frecuencia <strong>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "fc", array()), "html", null, true);
        echo "</strong> de la onda carrier y otra frecuencia <strong>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "fr", array()), "html", null, true);
        echo "</strong> de la onda reference, para una señal <strong>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "wave", array()), "html", null, true);
        echo "</strong> se obtienen los siguientes resultados: </p>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<p>- <strong>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "numPulses", array()), "html", null, true);
        echo "</strong> pulsos:</p>
\t\t\t\t<ol>
\t\t\t\t\t";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "pulseWidth", array()));
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "numPulses", array()), "html", null, true);
        echo "</strong> pérdidas:</p>
\t\t\t\t<ol>
\t\t\t\t\t";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "pulseLoss", array()));
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
    }

    // line 45
    public function block_scripts($context, array $blocks = array())
    {
        // line 46
        echo "    ";
        $this->displayParentBlock("scripts", $context, $blocks);
        echo "
";
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
        return array (  126 => 46,  123 => 45,  114 => 38,  105 => 35,  102 => 34,  98 => 33,  93 => 31,  88 => 28,  79 => 25,  76 => 24,  72 => 23,  67 => 21,  57 => 18,  50 => 14,  43 => 10,  39 => 9,  32 => 4,  29 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AppBundle:Losses:calculated_losses.html.twig", "/var/www/REDEXPERT/src/AppBundle/Resources/views/Losses/calculated_losses.html.twig");
    }
}
