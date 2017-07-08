<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_f67aed526491eb71f6bc3481660373c9cc515de435239f6163631eccf47f00aa extends Twig_Template
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
        $__internal_695b9c081c8b9283287bce31d85d047783acd4667e017249f99fef94278880f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_695b9c081c8b9283287bce31d85d047783acd4667e017249f99fef94278880f9->enter($__internal_695b9c081c8b9283287bce31d85d047783acd4667e017249f99fef94278880f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_92fa45d0d4d01b2626876d9223f6f32d18ad192afb210b43fcc08bcfecf40e52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92fa45d0d4d01b2626876d9223f6f32d18ad192afb210b43fcc08bcfecf40e52->enter($__internal_92fa45d0d4d01b2626876d9223f6f32d18ad192afb210b43fcc08bcfecf40e52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_695b9c081c8b9283287bce31d85d047783acd4667e017249f99fef94278880f9->leave($__internal_695b9c081c8b9283287bce31d85d047783acd4667e017249f99fef94278880f9_prof);

        
        $__internal_92fa45d0d4d01b2626876d9223f6f32d18ad192afb210b43fcc08bcfecf40e52->leave($__internal_92fa45d0d4d01b2626876d9223f6f32d18ad192afb210b43fcc08bcfecf40e52_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/var/www/redexpert/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
