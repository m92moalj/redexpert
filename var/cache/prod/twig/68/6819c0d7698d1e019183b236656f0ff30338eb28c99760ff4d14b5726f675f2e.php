<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_e2ff08aae3dd2f6f30bd5c04255f9c476bdc84bbf30b2b91be557c0129ed48de extends Twig_Template
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
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Framework/Form/hidden_widget.html.php", "/var/www/REDEXPERT/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
