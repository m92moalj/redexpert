<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_4700bf5e1adc7fee23b0f5c7e9996ddbcf189d4ed78dd5b7cc3d57926ba126df extends Twig_Template
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
        $__internal_8594b596a95ad86ae481dd6504e51e44b2517dc75d23fb6fb5856629130ace93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8594b596a95ad86ae481dd6504e51e44b2517dc75d23fb6fb5856629130ace93->enter($__internal_8594b596a95ad86ae481dd6504e51e44b2517dc75d23fb6fb5856629130ace93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_077cb0fc155ed3627636852ddfdd08134af5b2b054b647a9b7b8cce2f15d9533 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_077cb0fc155ed3627636852ddfdd08134af5b2b054b647a9b7b8cce2f15d9533->enter($__internal_077cb0fc155ed3627636852ddfdd08134af5b2b054b647a9b7b8cce2f15d9533_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_8594b596a95ad86ae481dd6504e51e44b2517dc75d23fb6fb5856629130ace93->leave($__internal_8594b596a95ad86ae481dd6504e51e44b2517dc75d23fb6fb5856629130ace93_prof);

        
        $__internal_077cb0fc155ed3627636852ddfdd08134af5b2b054b647a9b7b8cce2f15d9533->leave($__internal_077cb0fc155ed3627636852ddfdd08134af5b2b054b647a9b7b8cce2f15d9533_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/var/www/redexpert/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
