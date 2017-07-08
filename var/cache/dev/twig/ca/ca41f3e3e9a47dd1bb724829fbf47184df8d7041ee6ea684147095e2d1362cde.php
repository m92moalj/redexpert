<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_a377f5bc6fbb7a9524aaf22f462505a6e2cac89b637c8064980643c8d7d442d0 extends Twig_Template
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
        $__internal_cb58f8d3c0d7a9e21cb72011faf3f9c3c9055a78921eb2fba5da88d9cff11aaa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb58f8d3c0d7a9e21cb72011faf3f9c3c9055a78921eb2fba5da88d9cff11aaa->enter($__internal_cb58f8d3c0d7a9e21cb72011faf3f9c3c9055a78921eb2fba5da88d9cff11aaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_c3bfe6f1ac572caa84bd889e391f64a7ed7d7c4827e0581928362d2f212de994 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3bfe6f1ac572caa84bd889e391f64a7ed7d7c4827e0581928362d2f212de994->enter($__internal_c3bfe6f1ac572caa84bd889e391f64a7ed7d7c4827e0581928362d2f212de994_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_cb58f8d3c0d7a9e21cb72011faf3f9c3c9055a78921eb2fba5da88d9cff11aaa->leave($__internal_cb58f8d3c0d7a9e21cb72011faf3f9c3c9055a78921eb2fba5da88d9cff11aaa_prof);

        
        $__internal_c3bfe6f1ac572caa84bd889e391f64a7ed7d7c4827e0581928362d2f212de994->leave($__internal_c3bfe6f1ac572caa84bd889e391f64a7ed7d7c4827e0581928362d2f212de994_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "/var/www/redexpert/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_widget.html.php");
    }
}
