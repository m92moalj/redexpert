<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_34513a4ae342ed3bf82b5944cb432bfc348aa96f4c46ec57b0662c15c246b5a6 extends Twig_Template
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
        $__internal_7788d165c1e1a5a17e82cf2658c100991260c44c81f4af85b8f8b3aa05b8f489 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7788d165c1e1a5a17e82cf2658c100991260c44c81f4af85b8f8b3aa05b8f489->enter($__internal_7788d165c1e1a5a17e82cf2658c100991260c44c81f4af85b8f8b3aa05b8f489_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_1d95b23321dac5ca6d0f958d0d1c714f494d7134e3987f6d2ebd43fe92f7cda6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d95b23321dac5ca6d0f958d0d1c714f494d7134e3987f6d2ebd43fe92f7cda6->enter($__internal_1d95b23321dac5ca6d0f958d0d1c714f494d7134e3987f6d2ebd43fe92f7cda6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 1, $this->getSourceContext()); })()), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_7788d165c1e1a5a17e82cf2658c100991260c44c81f4af85b8f8b3aa05b8f489->leave($__internal_7788d165c1e1a5a17e82cf2658c100991260c44c81f4af85b8f8b3aa05b8f489_prof);

        
        $__internal_1d95b23321dac5ca6d0f958d0d1c714f494d7134e3987f6d2ebd43fe92f7cda6->leave($__internal_1d95b23321dac5ca6d0f958d0d1c714f494d7134e3987f6d2ebd43fe92f7cda6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/var/www/redexpert/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
