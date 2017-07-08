<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_a9749ac8f490b676cf9fb1f7a55d6f5b6f6554f689fdd803869766e9269de8fe extends Twig_Template
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
        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "TwigBundle:Exception:error.atom.twig", "/var/www/REDEXPERT/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
