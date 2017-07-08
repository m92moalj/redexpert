<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_81ac371cbbd11b228e3b7f7abf79de702c2e42a45120b69c89fef83edf503da2 extends Twig_Template
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
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Framework/Form/email_widget.html.php", "/var/www/REDEXPERT/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
