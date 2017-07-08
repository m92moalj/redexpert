<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_fae42c62eb74b36c58c7f4b9d01329f07fe2d359265318085ad9cd770857c2d6 extends Twig_Template
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
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Framework/Form/integer_widget.html.php", "/var/www/REDEXPERT/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
