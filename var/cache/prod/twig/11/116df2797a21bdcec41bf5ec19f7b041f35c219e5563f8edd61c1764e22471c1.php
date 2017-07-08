<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_569ee4772a06abb9e7615292583b89eca6d8a0872e2684184d06b2beb4efb6ec extends Twig_Template
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
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Framework/Form/radio_widget.html.php", "/var/www/REDEXPERT/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
