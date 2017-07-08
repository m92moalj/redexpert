<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_dc77fccf7c16e027f0fbef7d4441aefb10f5630f1ded6ed797bab109048360c1 extends Twig_Template
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
        $__internal_aaa4b9031b307f404723d1f9b22cacfc114d28c429d77cfa01b9ec13b864850c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aaa4b9031b307f404723d1f9b22cacfc114d28c429d77cfa01b9ec13b864850c->enter($__internal_aaa4b9031b307f404723d1f9b22cacfc114d28c429d77cfa01b9ec13b864850c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_f7fc7ee362a2209ada7016807d3882151beef678caf2118d39d6564ed9d7227e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7fc7ee362a2209ada7016807d3882151beef678caf2118d39d6564ed9d7227e->enter($__internal_f7fc7ee362a2209ada7016807d3882151beef678caf2118d39d6564ed9d7227e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_aaa4b9031b307f404723d1f9b22cacfc114d28c429d77cfa01b9ec13b864850c->leave($__internal_aaa4b9031b307f404723d1f9b22cacfc114d28c429d77cfa01b9ec13b864850c_prof);

        
        $__internal_f7fc7ee362a2209ada7016807d3882151beef678caf2118d39d6564ed9d7227e->leave($__internal_f7fc7ee362a2209ada7016807d3882151beef678caf2118d39d6564ed9d7227e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/var/www/redexpert/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
