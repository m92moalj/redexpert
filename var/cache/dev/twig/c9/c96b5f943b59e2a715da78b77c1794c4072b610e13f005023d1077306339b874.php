<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_dc51d7cba997ec8f34b9c3502ce3e03fb5cbac726967bfefc6b067bc4036cc74 extends Twig_Template
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
        $__internal_2ec75608e2c60112de241882f3a8647efdd84f29310cdaaf153521ddcd27e614 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ec75608e2c60112de241882f3a8647efdd84f29310cdaaf153521ddcd27e614->enter($__internal_2ec75608e2c60112de241882f3a8647efdd84f29310cdaaf153521ddcd27e614_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_2de5c6506215c50d995fc92ef32640cc5cf88a6fbc692141ffd87cbe74415fe7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2de5c6506215c50d995fc92ef32640cc5cf88a6fbc692141ffd87cbe74415fe7->enter($__internal_2de5c6506215c50d995fc92ef32640cc5cf88a6fbc692141ffd87cbe74415fe7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_2ec75608e2c60112de241882f3a8647efdd84f29310cdaaf153521ddcd27e614->leave($__internal_2ec75608e2c60112de241882f3a8647efdd84f29310cdaaf153521ddcd27e614_prof);

        
        $__internal_2de5c6506215c50d995fc92ef32640cc5cf88a6fbc692141ffd87cbe74415fe7->leave($__internal_2de5c6506215c50d995fc92ef32640cc5cf88a6fbc692141ffd87cbe74415fe7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/var/www/redexpert/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
