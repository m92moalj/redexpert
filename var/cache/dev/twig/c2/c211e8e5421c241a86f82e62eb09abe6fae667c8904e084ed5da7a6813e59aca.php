<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_88a89db0065d4969db497921a22c67dacf9bcb83a0a8fab3da8ede090c9e84ff extends Twig_Template
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
        $__internal_4b9b36954733a813fd44344a4c095daf481298e9d2774f6aa70532e2fdd2da5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b9b36954733a813fd44344a4c095daf481298e9d2774f6aa70532e2fdd2da5d->enter($__internal_4b9b36954733a813fd44344a4c095daf481298e9d2774f6aa70532e2fdd2da5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_ed183c69c6e671577f3d86a1be9c4997fd0e92dd6a000478474239f597bebca2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed183c69c6e671577f3d86a1be9c4997fd0e92dd6a000478474239f597bebca2->enter($__internal_ed183c69c6e671577f3d86a1be9c4997fd0e92dd6a000478474239f597bebca2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_4b9b36954733a813fd44344a4c095daf481298e9d2774f6aa70532e2fdd2da5d->leave($__internal_4b9b36954733a813fd44344a4c095daf481298e9d2774f6aa70532e2fdd2da5d_prof);

        
        $__internal_ed183c69c6e671577f3d86a1be9c4997fd0e92dd6a000478474239f597bebca2->leave($__internal_ed183c69c6e671577f3d86a1be9c4997fd0e92dd6a000478474239f597bebca2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/var/www/redexpert/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
