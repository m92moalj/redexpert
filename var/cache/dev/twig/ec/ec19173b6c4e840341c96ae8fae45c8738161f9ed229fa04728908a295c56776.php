<?php

/* @Framework/Form/time_widget.html.php */
class __TwigTemplate_3333e863d8b50d311aae99c447b33d77c42eae81e989f3622d62fe09cfbe4fc8 extends Twig_Template
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
        $__internal_643d3d8cdc9b3ac4f8bcef2c15801392733d577322c1d8f5ba66b96761a8f195 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_643d3d8cdc9b3ac4f8bcef2c15801392733d577322c1d8f5ba66b96761a8f195->enter($__internal_643d3d8cdc9b3ac4f8bcef2c15801392733d577322c1d8f5ba66b96761a8f195_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/time_widget.html.php"));

        $__internal_887f591057dfaa48d717a1832404283fae382161cd89ef6bcc8934f8a2678776 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_887f591057dfaa48d717a1832404283fae382161cd89ef6bcc8934f8a2678776->enter($__internal_887f591057dfaa48d717a1832404283fae382161cd89ef6bcc8934f8a2678776_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/time_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <?php \$vars = \$widget == 'text' ? array('attr' => array('size' => 1)) : array() ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php
            // There should be no spaces between the colons and the widgets, that's why
            // this block is written in a single PHP tag
            echo \$view['form']->widget(\$form['hour'], \$vars);

            if (\$with_minutes) {
                echo ':';
                echo \$view['form']->widget(\$form['minute'], \$vars);
            }

            if (\$with_seconds) {
                echo ':';
                echo \$view['form']->widget(\$form['second'], \$vars);
            }
        ?>
    </div>
<?php endif ?>
";
        
        $__internal_643d3d8cdc9b3ac4f8bcef2c15801392733d577322c1d8f5ba66b96761a8f195->leave($__internal_643d3d8cdc9b3ac4f8bcef2c15801392733d577322c1d8f5ba66b96761a8f195_prof);

        
        $__internal_887f591057dfaa48d717a1832404283fae382161cd89ef6bcc8934f8a2678776->leave($__internal_887f591057dfaa48d717a1832404283fae382161cd89ef6bcc8934f8a2678776_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/time_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <?php \$vars = \$widget == 'text' ? array('attr' => array('size' => 1)) : array() ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php
            // There should be no spaces between the colons and the widgets, that's why
            // this block is written in a single PHP tag
            echo \$view['form']->widget(\$form['hour'], \$vars);

            if (\$with_minutes) {
                echo ':';
                echo \$view['form']->widget(\$form['minute'], \$vars);
            }

            if (\$with_seconds) {
                echo ':';
                echo \$view['form']->widget(\$form['second'], \$vars);
            }
        ?>
    </div>
<?php endif ?>
", "@Framework/Form/time_widget.html.php", "/var/www/redexpert/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/time_widget.html.php");
    }
}
