<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_d257e0d2c4fe4b63579aba8975c2335a832514aedb17607fcae8691e5916a8bb extends Twig_Template
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
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Framework/Form/form_rest.html.php", "/var/www/REDEXPERT/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
