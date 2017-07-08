<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_6bfd748e17568470d5629f56b4d66863794c376e3bbccf91d2810d77c40bbf9a extends Twig_Template
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
        $__internal_6e8b3d4d50fdcf9ce0fcd1c9b745d908212f9c5ad51e647c5f5574905d573247 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e8b3d4d50fdcf9ce0fcd1c9b745d908212f9c5ad51e647c5f5574905d573247->enter($__internal_6e8b3d4d50fdcf9ce0fcd1c9b745d908212f9c5ad51e647c5f5574905d573247_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_0cca5c20d0eaf20d188e8820645db3b18fed973bd0b7df0b7f9ae67a01f76b34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cca5c20d0eaf20d188e8820645db3b18fed973bd0b7df0b7f9ae67a01f76b34->enter($__internal_0cca5c20d0eaf20d188e8820645db3b18fed973bd0b7df0b7f9ae67a01f76b34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "\" />
";
        
        $__internal_6e8b3d4d50fdcf9ce0fcd1c9b745d908212f9c5ad51e647c5f5574905d573247->leave($__internal_6e8b3d4d50fdcf9ce0fcd1c9b745d908212f9c5ad51e647c5f5574905d573247_prof);

        
        $__internal_0cca5c20d0eaf20d188e8820645db3b18fed973bd0b7df0b7f9ae67a01f76b34->leave($__internal_0cca5c20d0eaf20d188e8820645db3b18fed973bd0b7df0b7f9ae67a01f76b34_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "/var/www/redexpert/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
