<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_be03d7184c16f655ea4ae7f38d93ab851ee73316f4930be143912bc5945fb6b7 extends Twig_Template
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
        $__internal_cf339217a200e58852d3409effc1e57cb4a3942fe75d47e9b2e9d93fedaeefdd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf339217a200e58852d3409effc1e57cb4a3942fe75d47e9b2e9d93fedaeefdd->enter($__internal_cf339217a200e58852d3409effc1e57cb4a3942fe75d47e9b2e9d93fedaeefdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_526f3bcffaa1938b4ebe73c80118b23009033568a5e79e7a38349123bb940346 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_526f3bcffaa1938b4ebe73c80118b23009033568a5e79e7a38349123bb940346->enter($__internal_526f3bcffaa1938b4ebe73c80118b23009033568a5e79e7a38349123bb940346_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_cf339217a200e58852d3409effc1e57cb4a3942fe75d47e9b2e9d93fedaeefdd->leave($__internal_cf339217a200e58852d3409effc1e57cb4a3942fe75d47e9b2e9d93fedaeefdd_prof);

        
        $__internal_526f3bcffaa1938b4ebe73c80118b23009033568a5e79e7a38349123bb940346->leave($__internal_526f3bcffaa1938b4ebe73c80118b23009033568a5e79e7a38349123bb940346_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/var/www/redexpert/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
