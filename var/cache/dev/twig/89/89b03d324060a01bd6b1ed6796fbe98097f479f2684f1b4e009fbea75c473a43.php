<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_7e3b91edab7cc7eff1d929d045b405f0d8dcd64042dbcbecf29c8de2a8be448a extends Twig_Template
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
        $__internal_72674c66e7b9f679b8a358a84857480615abaf1742b18fe1c06b04d34628fc6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72674c66e7b9f679b8a358a84857480615abaf1742b18fe1c06b04d34628fc6c->enter($__internal_72674c66e7b9f679b8a358a84857480615abaf1742b18fe1c06b04d34628fc6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_a365b833303ed268045cb0e80fe458110f26bda78fa74d3ea44940b233ddf12b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a365b833303ed268045cb0e80fe458110f26bda78fa74d3ea44940b233ddf12b->enter($__internal_a365b833303ed268045cb0e80fe458110f26bda78fa74d3ea44940b233ddf12b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_72674c66e7b9f679b8a358a84857480615abaf1742b18fe1c06b04d34628fc6c->leave($__internal_72674c66e7b9f679b8a358a84857480615abaf1742b18fe1c06b04d34628fc6c_prof);

        
        $__internal_a365b833303ed268045cb0e80fe458110f26bda78fa74d3ea44940b233ddf12b->leave($__internal_a365b833303ed268045cb0e80fe458110f26bda78fa74d3ea44940b233ddf12b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/var/www/redexpert/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
