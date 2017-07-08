<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_c7b7aeb993456ee4106a6ea650ea9ea9e28f4f671b7c22dd00816ce13b014838 extends Twig_Template
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
        $__internal_d2f5b5158b8e2da2fbb7003ace1f2ed219fdd2c36c5cd7a7f4be522790d7dbe0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2f5b5158b8e2da2fbb7003ace1f2ed219fdd2c36c5cd7a7f4be522790d7dbe0->enter($__internal_d2f5b5158b8e2da2fbb7003ace1f2ed219fdd2c36c5cd7a7f4be522790d7dbe0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_1ef543f7cdc009d4f9bc076ed4fd0180200748a44002a5006972eda8ba1e72d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ef543f7cdc009d4f9bc076ed4fd0180200748a44002a5006972eda8ba1e72d5->enter($__internal_1ef543f7cdc009d4f9bc076ed4fd0180200748a44002a5006972eda8ba1e72d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_d2f5b5158b8e2da2fbb7003ace1f2ed219fdd2c36c5cd7a7f4be522790d7dbe0->leave($__internal_d2f5b5158b8e2da2fbb7003ace1f2ed219fdd2c36c5cd7a7f4be522790d7dbe0_prof);

        
        $__internal_1ef543f7cdc009d4f9bc076ed4fd0180200748a44002a5006972eda8ba1e72d5->leave($__internal_1ef543f7cdc009d4f9bc076ed4fd0180200748a44002a5006972eda8ba1e72d5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/var/www/redexpert/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
