<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_ae0f6a2983d685d525398849fde42ca55a2c6d575115ae022c882579a66d3817 extends Twig_Template
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
        $__internal_acea7353c93de588046086779cc57b1552dcd905c5ab66d9b18e3c0e156c16f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_acea7353c93de588046086779cc57b1552dcd905c5ab66d9b18e3c0e156c16f5->enter($__internal_acea7353c93de588046086779cc57b1552dcd905c5ab66d9b18e3c0e156c16f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_c4b8cb7922405cd4d06c04bf1ab757ddd9f1d8ec723e3adc03bc0d75b0065237 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4b8cb7922405cd4d06c04bf1ab757ddd9f1d8ec723e3adc03bc0d75b0065237->enter($__internal_c4b8cb7922405cd4d06c04bf1ab757ddd9f1d8ec723e3adc03bc0d75b0065237_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_acea7353c93de588046086779cc57b1552dcd905c5ab66d9b18e3c0e156c16f5->leave($__internal_acea7353c93de588046086779cc57b1552dcd905c5ab66d9b18e3c0e156c16f5_prof);

        
        $__internal_c4b8cb7922405cd4d06c04bf1ab757ddd9f1d8ec723e3adc03bc0d75b0065237->leave($__internal_c4b8cb7922405cd4d06c04bf1ab757ddd9f1d8ec723e3adc03bc0d75b0065237_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/var/www/redexpert/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
