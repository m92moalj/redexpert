<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_9acaeeb4e6ce9ea8bf4f3b313e5ed39c09bcb547b951ff22913d764db11a9793 extends Twig_Template
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
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Framework/Form/submit_widget.html.php", "/var/www/REDEXPERT/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
