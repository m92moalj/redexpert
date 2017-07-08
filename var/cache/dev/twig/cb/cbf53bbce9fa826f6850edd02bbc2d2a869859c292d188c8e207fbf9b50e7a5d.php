<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_1aee8c821394d693df86990ee26a862dd4075da7ba8f9ea60124043ba4aa9639 extends Twig_Template
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
        $__internal_0934ea5297fde893f1954ef8105bc40db3826d1fe820b1ed03d912d8365ed1d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0934ea5297fde893f1954ef8105bc40db3826d1fe820b1ed03d912d8365ed1d9->enter($__internal_0934ea5297fde893f1954ef8105bc40db3826d1fe820b1ed03d912d8365ed1d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_39d36ce26d9dcfa43896499a9ddab07e6f7ec4b05b8221d35ec146d0536f15df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39d36ce26d9dcfa43896499a9ddab07e6f7ec4b05b8221d35ec146d0536f15df->enter($__internal_39d36ce26d9dcfa43896499a9ddab07e6f7ec4b05b8221d35ec146d0536f15df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_0934ea5297fde893f1954ef8105bc40db3826d1fe820b1ed03d912d8365ed1d9->leave($__internal_0934ea5297fde893f1954ef8105bc40db3826d1fe820b1ed03d912d8365ed1d9_prof);

        
        $__internal_39d36ce26d9dcfa43896499a9ddab07e6f7ec4b05b8221d35ec146d0536f15df->leave($__internal_39d36ce26d9dcfa43896499a9ddab07e6f7ec4b05b8221d35ec146d0536f15df_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/var/www/redexpert/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
