<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_9b45c43fdb10cee4db435ba0e28781fa76a4ffd4c54f09bade275776aea170ef extends Twig_Template
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
        $__internal_64901f394e20a80637d420fdfda0eb0d9d75a264af890537123e1c403e248f67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64901f394e20a80637d420fdfda0eb0d9d75a264af890537123e1c403e248f67->enter($__internal_64901f394e20a80637d420fdfda0eb0d9d75a264af890537123e1c403e248f67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_874450d6da57d2c212bbc2c0a24091379e65f3cfcdce5efacf93155bf1638e82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_874450d6da57d2c212bbc2c0a24091379e65f3cfcdce5efacf93155bf1638e82->enter($__internal_874450d6da57d2c212bbc2c0a24091379e65f3cfcdce5efacf93155bf1638e82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_64901f394e20a80637d420fdfda0eb0d9d75a264af890537123e1c403e248f67->leave($__internal_64901f394e20a80637d420fdfda0eb0d9d75a264af890537123e1c403e248f67_prof);

        
        $__internal_874450d6da57d2c212bbc2c0a24091379e65f3cfcdce5efacf93155bf1638e82->leave($__internal_874450d6da57d2c212bbc2c0a24091379e65f3cfcdce5efacf93155bf1638e82_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/var/www/redexpert/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
