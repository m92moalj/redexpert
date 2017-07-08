<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_4c9bcec7318e8ebe965df65d13e56a00e5dd882216e8a21d360e723ac9053992 extends Twig_Template
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
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Framework/Form/url_widget.html.php", "/var/www/REDEXPERT/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
