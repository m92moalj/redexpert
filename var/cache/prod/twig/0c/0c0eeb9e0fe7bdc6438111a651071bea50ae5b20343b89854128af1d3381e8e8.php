<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_1594450a48c38d6da2ebe36f9e9e216d6b41d14decf034aaf952b0409c9155c7 extends Twig_Template
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
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Framework/Form/form_errors.html.php", "/var/www/REDEXPERT/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
