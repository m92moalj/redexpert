<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_fffb3ee89ad7415bace93e81b610a3644b2ea952ff9a3c3536e7bc72a3c352a5 extends Twig_Template
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
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Framework/Form/search_widget.html.php", "/var/www/REDEXPERT/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
