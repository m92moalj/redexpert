<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_58b2893f75abe320071f331ba3b66aa6f131cd54831969c0d1cc9f6e272e14ca extends Twig_Template
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
        $__internal_cd613e3d90e56621784e02e06912b52443f7cd900b88790f2eb0c9e0d6205bab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd613e3d90e56621784e02e06912b52443f7cd900b88790f2eb0c9e0d6205bab->enter($__internal_cd613e3d90e56621784e02e06912b52443f7cd900b88790f2eb0c9e0d6205bab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_2c00ab3478901daff1e718c03d4c98c509fda18103c810ec5cf7e82c9abc0b78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c00ab3478901daff1e718c03d4c98c509fda18103c810ec5cf7e82c9abc0b78->enter($__internal_2c00ab3478901daff1e718c03d4c98c509fda18103c810ec5cf7e82c9abc0b78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_cd613e3d90e56621784e02e06912b52443f7cd900b88790f2eb0c9e0d6205bab->leave($__internal_cd613e3d90e56621784e02e06912b52443f7cd900b88790f2eb0c9e0d6205bab_prof);

        
        $__internal_2c00ab3478901daff1e718c03d4c98c509fda18103c810ec5cf7e82c9abc0b78->leave($__internal_2c00ab3478901daff1e718c03d4c98c509fda18103c810ec5cf7e82c9abc0b78_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/var/www/redexpert/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
