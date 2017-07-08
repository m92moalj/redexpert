<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_4921b9c08cee927877549f9ec36154e4113d0cde5455434e78a6489d209cb130 extends Twig_Template
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
        $__internal_6b668ad986d2bc2b442dabd9d5f05acc69a22af5d285f16fcbea5e1f12555114 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b668ad986d2bc2b442dabd9d5f05acc69a22af5d285f16fcbea5e1f12555114->enter($__internal_6b668ad986d2bc2b442dabd9d5f05acc69a22af5d285f16fcbea5e1f12555114_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_25fca0fc7dcc6295a18bb092b834e01dfb82a50e3f69d1da0a58d3170ec46de3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25fca0fc7dcc6295a18bb092b834e01dfb82a50e3f69d1da0a58d3170ec46de3->enter($__internal_25fca0fc7dcc6295a18bb092b834e01dfb82a50e3f69d1da0a58d3170ec46de3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_6b668ad986d2bc2b442dabd9d5f05acc69a22af5d285f16fcbea5e1f12555114->leave($__internal_6b668ad986d2bc2b442dabd9d5f05acc69a22af5d285f16fcbea5e1f12555114_prof);

        
        $__internal_25fca0fc7dcc6295a18bb092b834e01dfb82a50e3f69d1da0a58d3170ec46de3->leave($__internal_25fca0fc7dcc6295a18bb092b834e01dfb82a50e3f69d1da0a58d3170ec46de3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/var/www/redexpert/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}
