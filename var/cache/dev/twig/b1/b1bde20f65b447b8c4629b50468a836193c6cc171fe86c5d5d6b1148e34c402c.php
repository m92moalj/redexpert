<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_30834e518634b5e35e502dcaedd296eda00d1ee3e86ac3004b16eee2e0ddbb7f extends Twig_Template
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
        $__internal_9aeea57566bf136c19be6e7d51cea7b5fd23a8f4c0bb75e51c4ad09c1bb1b24a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9aeea57566bf136c19be6e7d51cea7b5fd23a8f4c0bb75e51c4ad09c1bb1b24a->enter($__internal_9aeea57566bf136c19be6e7d51cea7b5fd23a8f4c0bb75e51c4ad09c1bb1b24a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_dfb5203af287c91937864f6df04972b67e250d33f2df2b412e8e6b75a0e7fe89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfb5203af287c91937864f6df04972b67e250d33f2df2b412e8e6b75a0e7fe89->enter($__internal_dfb5203af287c91937864f6df04972b67e250d33f2df2b412e8e6b75a0e7fe89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })()), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            $this->loadTemplate("@Twig/Exception/trace.txt.twig", "TwigBundle:Exception:traces.xml.twig", 4)->display(array("trace" => $context["trace"]));
            // line 5
            echo "
            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_9aeea57566bf136c19be6e7d51cea7b5fd23a8f4c0bb75e51c4ad09c1bb1b24a->leave($__internal_9aeea57566bf136c19be6e7d51cea7b5fd23a8f4c0bb75e51c4ad09c1bb1b24a_prof);

        
        $__internal_dfb5203af287c91937864f6df04972b67e250d33f2df2b412e8e6b75a0e7fe89->leave($__internal_dfb5203af287c91937864f6df04972b67e250d33f2df2b412e8e6b75a0e7fe89_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  37 => 5,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

            </trace>
{% endfor %}
        </traces>
", "TwigBundle:Exception:traces.xml.twig", "/var/www/redexpert/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}
