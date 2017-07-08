<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_ba0968477cd358c895ed39b0ccece15b10b29e1670622338be609174d7064c05 extends Twig_Template
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
        $__internal_207796b88fc1a1f31d4627b86f50fc469380ab3ba41d8b3878f56ac23b8de58a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_207796b88fc1a1f31d4627b86f50fc469380ab3ba41d8b3878f56ac23b8de58a->enter($__internal_207796b88fc1a1f31d4627b86f50fc469380ab3ba41d8b3878f56ac23b8de58a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_275982c9fbe82bcb70f460660a389a51b6638bdc1c6415676fa0f35b120c6e71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_275982c9fbe82bcb70f460660a389a51b6638bdc1c6415676fa0f35b120c6e71->enter($__internal_275982c9fbe82bcb70f460660a389a51b6638bdc1c6415676fa0f35b120c6e71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_207796b88fc1a1f31d4627b86f50fc469380ab3ba41d8b3878f56ac23b8de58a->leave($__internal_207796b88fc1a1f31d4627b86f50fc469380ab3ba41d8b3878f56ac23b8de58a_prof);

        
        $__internal_275982c9fbe82bcb70f460660a389a51b6638bdc1c6415676fa0f35b120c6e71->leave($__internal_275982c9fbe82bcb70f460660a389a51b6638bdc1c6415676fa0f35b120c6e71_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/var/www/redexpert/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
