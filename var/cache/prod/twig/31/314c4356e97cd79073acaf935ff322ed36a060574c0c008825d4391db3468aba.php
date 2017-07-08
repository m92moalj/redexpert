<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_b526221f0bb39fca21dbb1ebf878a3043d101d1a25d71cedf0c521b0138d270b extends Twig_Template
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
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Framework/Form/form_end.html.php", "/var/www/REDEXPERT/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
