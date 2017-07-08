<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_e2ae116226e85241db6b400c3b5901d951edc77c106f732f1ce5424b09cd8806 extends Twig_Template
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
        $__internal_c23609950717fef843f909747e3115126f040a57981a6faed3fd50bd24094b2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c23609950717fef843f909747e3115126f040a57981a6faed3fd50bd24094b2d->enter($__internal_c23609950717fef843f909747e3115126f040a57981a6faed3fd50bd24094b2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_6ab6d723711a3eba43582dbc96261d77a59c9bd3d0d03debe66b671235a7e215 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ab6d723711a3eba43582dbc96261d77a59c9bd3d0d03debe66b671235a7e215->enter($__internal_6ab6d723711a3eba43582dbc96261d77a59c9bd3d0d03debe66b671235a7e215_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_c23609950717fef843f909747e3115126f040a57981a6faed3fd50bd24094b2d->leave($__internal_c23609950717fef843f909747e3115126f040a57981a6faed3fd50bd24094b2d_prof);

        
        $__internal_6ab6d723711a3eba43582dbc96261d77a59c9bd3d0d03debe66b671235a7e215->leave($__internal_6ab6d723711a3eba43582dbc96261d77a59c9bd3d0d03debe66b671235a7e215_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/var/www/redexpert/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
