<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_27121fbdca4b23f9ee2d34be40d3d2ca3179b49341e6f15b31f0b14abca1e090 extends Twig_Template
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
        $__internal_3e13ec6f9ca66fb04292e265d55c2c1fdd9eb6e772aa9120ba46193db423710d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e13ec6f9ca66fb04292e265d55c2c1fdd9eb6e772aa9120ba46193db423710d->enter($__internal_3e13ec6f9ca66fb04292e265d55c2c1fdd9eb6e772aa9120ba46193db423710d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        $__internal_1d33b29c28477e96166f3800160d4472cfef016edc898c938bcd2781bc46a8bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d33b29c28477e96166f3800160d4472cfef016edc898c938bcd2781bc46a8bd->enter($__internal_1d33b29c28477e96166f3800160d4472cfef016edc898c938bcd2781bc46a8bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })()), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "TwigBundle:Exception:traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_3e13ec6f9ca66fb04292e265d55c2c1fdd9eb6e772aa9120ba46193db423710d->leave($__internal_3e13ec6f9ca66fb04292e265d55c2c1fdd9eb6e772aa9120ba46193db423710d_prof);

        
        $__internal_1d33b29c28477e96166f3800160d4472cfef016edc898c938bcd2781bc46a8bd->leave($__internal_1d33b29c28477e96166f3800160d4472cfef016edc898c938bcd2781bc46a8bd_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "TwigBundle:Exception:traces.txt.twig", "/var/www/redexpert/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.txt.twig");
    }
}
