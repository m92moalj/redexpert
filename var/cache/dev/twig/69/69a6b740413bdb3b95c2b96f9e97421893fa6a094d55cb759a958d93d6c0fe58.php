<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_a1813586093fe0857366ea4ec4e43e7b2b2adf746edaaa2fd4a50a680ffdc65c extends Twig_Template
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
        $__internal_d4b77e28b903dbebbca0a8ca5e4c2408086b865c70396992eda163c5969ee0ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4b77e28b903dbebbca0a8ca5e4c2408086b865c70396992eda163c5969ee0ec->enter($__internal_d4b77e28b903dbebbca0a8ca5e4c2408086b865c70396992eda163c5969ee0ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_969d79b2bb1fe4e69ddbab6c18dc064fe6d1dd7cb799083534b62d9d09690ac8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_969d79b2bb1fe4e69ddbab6c18dc064fe6d1dd7cb799083534b62d9d09690ac8->enter($__internal_969d79b2bb1fe4e69ddbab6c18dc064fe6d1dd7cb799083534b62d9d09690ac8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_d4b77e28b903dbebbca0a8ca5e4c2408086b865c70396992eda163c5969ee0ec->leave($__internal_d4b77e28b903dbebbca0a8ca5e4c2408086b865c70396992eda163c5969ee0ec_prof);

        
        $__internal_969d79b2bb1fe4e69ddbab6c18dc064fe6d1dd7cb799083534b62d9d09690ac8->leave($__internal_969d79b2bb1fe4e69ddbab6c18dc064fe6d1dd7cb799083534b62d9d09690ac8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/var/www/redexpert/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
