<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_aade4f9c5ab139c877d267ef05338adec2af1dd47e4cab680b39b21e2dc021a7 extends Twig_Template
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
        $__internal_a6c2c352d42bf9bac61d63dd2170a4db131f9b94da98d7820167d2e2033087b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6c2c352d42bf9bac61d63dd2170a4db131f9b94da98d7820167d2e2033087b8->enter($__internal_a6c2c352d42bf9bac61d63dd2170a4db131f9b94da98d7820167d2e2033087b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_04e93fca25d928a1be9955a77ea1c57af3d7730061724579b7c1cd7b7c804110 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04e93fca25d928a1be9955a77ea1c57af3d7730061724579b7c1cd7b7c804110->enter($__internal_04e93fca25d928a1be9955a77ea1c57af3d7730061724579b7c1cd7b7c804110_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_a6c2c352d42bf9bac61d63dd2170a4db131f9b94da98d7820167d2e2033087b8->leave($__internal_a6c2c352d42bf9bac61d63dd2170a4db131f9b94da98d7820167d2e2033087b8_prof);

        
        $__internal_04e93fca25d928a1be9955a77ea1c57af3d7730061724579b7c1cd7b7c804110->leave($__internal_04e93fca25d928a1be9955a77ea1c57af3d7730061724579b7c1cd7b7c804110_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/var/www/redexpert/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
