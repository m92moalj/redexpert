<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_60b30129ecabcde4ee9a1429374fe1c072fdbd9d6662bf3b2435b6957f43c438 extends Twig_Template
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
        $__internal_5f06498c112dc16c6935925860ac123d27674992d5fc5c9c2129202b66a0c5a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f06498c112dc16c6935925860ac123d27674992d5fc5c9c2129202b66a0c5a0->enter($__internal_5f06498c112dc16c6935925860ac123d27674992d5fc5c9c2129202b66a0c5a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_e772f867662a9f8e1704298c15951ec5b3c889af4e4a5260da1f0aea7eb9e5f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e772f867662a9f8e1704298c15951ec5b3c889af4e4a5260da1f0aea7eb9e5f4->enter($__internal_e772f867662a9f8e1704298c15951ec5b3c889af4e4a5260da1f0aea7eb9e5f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_5f06498c112dc16c6935925860ac123d27674992d5fc5c9c2129202b66a0c5a0->leave($__internal_5f06498c112dc16c6935925860ac123d27674992d5fc5c9c2129202b66a0c5a0_prof);

        
        $__internal_e772f867662a9f8e1704298c15951ec5b3c889af4e4a5260da1f0aea7eb9e5f4->leave($__internal_e772f867662a9f8e1704298c15951ec5b3c889af4e4a5260da1f0aea7eb9e5f4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "/var/www/redexpert/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
