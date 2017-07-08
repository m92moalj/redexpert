<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_a89693344d96502f932014a6d67b5b58980ce233c0ad6caf6ca30f595a467303 extends Twig_Template
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
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Framework/Form/password_widget.html.php", "/var/www/REDEXPERT/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
