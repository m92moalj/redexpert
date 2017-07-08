<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_7afbe6afaa7d89c344245cec6cd0b4a1c29059b2b591272be6b277a08fc2fc5d extends Twig_Template
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
        $__internal_45eb4ca87f74e5c5ebf48715fc9883fd913fa74cd6259ae2f5b721b24caa8a29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45eb4ca87f74e5c5ebf48715fc9883fd913fa74cd6259ae2f5b721b24caa8a29->enter($__internal_45eb4ca87f74e5c5ebf48715fc9883fd913fa74cd6259ae2f5b721b24caa8a29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_4421096cbedd4c374ff03a60e975c317a58dfd1fae076b66c48fae036f784540 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4421096cbedd4c374ff03a60e975c317a58dfd1fae076b66c48fae036f784540->enter($__internal_4421096cbedd4c374ff03a60e975c317a58dfd1fae076b66c48fae036f784540_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_45eb4ca87f74e5c5ebf48715fc9883fd913fa74cd6259ae2f5b721b24caa8a29->leave($__internal_45eb4ca87f74e5c5ebf48715fc9883fd913fa74cd6259ae2f5b721b24caa8a29_prof);

        
        $__internal_4421096cbedd4c374ff03a60e975c317a58dfd1fae076b66c48fae036f784540->leave($__internal_4421096cbedd4c374ff03a60e975c317a58dfd1fae076b66c48fae036f784540_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/var/www/redexpert/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
