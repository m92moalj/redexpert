<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_853d5d90e2d9c098859765337d004641bf0d9f6dd40b66c82d3e02245cadef9a extends Twig_Template
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
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Framework/FormTable/button_row.html.php", "/var/www/REDEXPERT/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
