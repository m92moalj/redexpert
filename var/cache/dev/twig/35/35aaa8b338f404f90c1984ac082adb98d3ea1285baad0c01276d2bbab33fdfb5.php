<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_97f607773e8a8eb7fa816f0c5cc2364620047ffdab87fda61c94b3f6bd09fa57 extends Twig_Template
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
        $__internal_3327e159b40f23a35cc150390fc3ed799cf1fcdf23f020691b68812f53abcb17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3327e159b40f23a35cc150390fc3ed799cf1fcdf23f020691b68812f53abcb17->enter($__internal_3327e159b40f23a35cc150390fc3ed799cf1fcdf23f020691b68812f53abcb17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_fb53b7320ffbb29c7a4de435e47605b79a42fb3649702acbfe05fe950826b113 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb53b7320ffbb29c7a4de435e47605b79a42fb3649702acbfe05fe950826b113->enter($__internal_fb53b7320ffbb29c7a4de435e47605b79a42fb3649702acbfe05fe950826b113_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_3327e159b40f23a35cc150390fc3ed799cf1fcdf23f020691b68812f53abcb17->leave($__internal_3327e159b40f23a35cc150390fc3ed799cf1fcdf23f020691b68812f53abcb17_prof);

        
        $__internal_fb53b7320ffbb29c7a4de435e47605b79a42fb3649702acbfe05fe950826b113->leave($__internal_fb53b7320ffbb29c7a4de435e47605b79a42fb3649702acbfe05fe950826b113_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/var/www/redexpert/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
