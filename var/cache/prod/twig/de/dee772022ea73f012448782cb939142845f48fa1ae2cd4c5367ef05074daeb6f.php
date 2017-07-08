<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_0e5d235c153363be5943625b4bd8304e616b1cadc6716fe48cf000cf5a56610c extends Twig_Template
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
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Framework/Form/form_enctype.html.php", "/var/www/REDEXPERT/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
