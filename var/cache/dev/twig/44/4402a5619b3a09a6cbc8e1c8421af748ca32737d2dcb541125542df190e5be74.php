<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_45cd61ee8074f1e381410470fad7dc9b5cca75314707b16a1064b53ae0c0599c extends Twig_Template
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
        $__internal_e2285a08f6ea83e8096ad27dcdb713ab53538a1b15dab8d5dedbf1a0ab0eca6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2285a08f6ea83e8096ad27dcdb713ab53538a1b15dab8d5dedbf1a0ab0eca6f->enter($__internal_e2285a08f6ea83e8096ad27dcdb713ab53538a1b15dab8d5dedbf1a0ab0eca6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_f231810ad04a4c0026cb8e5fd6db89e7a13e149686e544971b80d7bd7c47befd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f231810ad04a4c0026cb8e5fd6db89e7a13e149686e544971b80d7bd7c47befd->enter($__internal_f231810ad04a4c0026cb8e5fd6db89e7a13e149686e544971b80d7bd7c47befd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_e2285a08f6ea83e8096ad27dcdb713ab53538a1b15dab8d5dedbf1a0ab0eca6f->leave($__internal_e2285a08f6ea83e8096ad27dcdb713ab53538a1b15dab8d5dedbf1a0ab0eca6f_prof);

        
        $__internal_f231810ad04a4c0026cb8e5fd6db89e7a13e149686e544971b80d7bd7c47befd->leave($__internal_f231810ad04a4c0026cb8e5fd6db89e7a13e149686e544971b80d7bd7c47befd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/var/www/redexpert/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
