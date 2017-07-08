<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_d3bae6160b2b33f7af007218c0130f088f7bb5b2c9b0a41dfe969229592b64fe extends Twig_Template
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
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Framework/Form/form.html.php", "/var/www/REDEXPERT/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
