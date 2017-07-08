<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_c59d1b15fdbbf49118cacb24a1349f5bca78f4904d1f7cf6828d9a537f8af59c extends Twig_Template
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
        $__internal_1c82b35aa361c0d1d5c774db0a5a0c69b5c3a9c81cc35cc9054f2e86134948d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c82b35aa361c0d1d5c774db0a5a0c69b5c3a9c81cc35cc9054f2e86134948d5->enter($__internal_1c82b35aa361c0d1d5c774db0a5a0c69b5c3a9c81cc35cc9054f2e86134948d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_fc09cd563c6ff73742d91681bfea64c8637673b91ee7ed3dcd576f13dd5a94d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc09cd563c6ff73742d91681bfea64c8637673b91ee7ed3dcd576f13dd5a94d2->enter($__internal_fc09cd563c6ff73742d91681bfea64c8637673b91ee7ed3dcd576f13dd5a94d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_1c82b35aa361c0d1d5c774db0a5a0c69b5c3a9c81cc35cc9054f2e86134948d5->leave($__internal_1c82b35aa361c0d1d5c774db0a5a0c69b5c3a9c81cc35cc9054f2e86134948d5_prof);

        
        $__internal_fc09cd563c6ff73742d91681bfea64c8637673b91ee7ed3dcd576f13dd5a94d2->leave($__internal_fc09cd563c6ff73742d91681bfea64c8637673b91ee7ed3dcd576f13dd5a94d2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/var/www/redexpert/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
