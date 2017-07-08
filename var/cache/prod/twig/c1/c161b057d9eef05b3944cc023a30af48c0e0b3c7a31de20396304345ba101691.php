<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_007f83748aedc78e93f807a1072167094a1b1494159f09f57f6bc168e1e471a8 extends Twig_Template
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
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Framework/Form/form_rows.html.php", "/var/www/REDEXPERT/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
