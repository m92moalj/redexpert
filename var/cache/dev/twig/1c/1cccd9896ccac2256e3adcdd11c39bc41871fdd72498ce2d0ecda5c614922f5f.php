<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_ee67b91f77d6cdc7ddce1631a7395d6a264c1b369d6c62024ecf1462216ea241 extends Twig_Template
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
        $__internal_b6d1b2bd8a6c09d8767db1caff32d8c346820412686555c2327cc0b16efaa4d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6d1b2bd8a6c09d8767db1caff32d8c346820412686555c2327cc0b16efaa4d2->enter($__internal_b6d1b2bd8a6c09d8767db1caff32d8c346820412686555c2327cc0b16efaa4d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_8394c475ffa409a32ca2273b5bd741086349c295a15a3108cf140a183d905a2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8394c475ffa409a32ca2273b5bd741086349c295a15a3108cf140a183d905a2b->enter($__internal_8394c475ffa409a32ca2273b5bd741086349c295a15a3108cf140a183d905a2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_b6d1b2bd8a6c09d8767db1caff32d8c346820412686555c2327cc0b16efaa4d2->leave($__internal_b6d1b2bd8a6c09d8767db1caff32d8c346820412686555c2327cc0b16efaa4d2_prof);

        
        $__internal_8394c475ffa409a32ca2273b5bd741086349c295a15a3108cf140a183d905a2b->leave($__internal_8394c475ffa409a32ca2273b5bd741086349c295a15a3108cf140a183d905a2b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/var/www/redexpert/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
