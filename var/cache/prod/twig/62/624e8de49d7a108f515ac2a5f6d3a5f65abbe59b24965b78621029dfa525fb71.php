<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_ae05e25d3ae3e9ba70e54a9c3287514a93ff1ad9f714e90be424f28a7d009a44 extends Twig_Template
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
        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Framework/Form/reset_widget.html.php", "/var/www/REDEXPERT/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
