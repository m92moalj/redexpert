<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_91f94593757f6e77ab1162e104585ca5e2f515278ad43a0702221ccb92417f6e extends Twig_Template
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
        $__internal_6d34d2c796993496017fe6df76c458e1b5437b602f04e639b044edbd999d270d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d34d2c796993496017fe6df76c458e1b5437b602f04e639b044edbd999d270d->enter($__internal_6d34d2c796993496017fe6df76c458e1b5437b602f04e639b044edbd999d270d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_edd6484646aecca134156186c1a1de663c15be225aa94a6930b11589532c2328 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edd6484646aecca134156186c1a1de663c15be225aa94a6930b11589532c2328->enter($__internal_edd6484646aecca134156186c1a1de663c15be225aa94a6930b11589532c2328_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_6d34d2c796993496017fe6df76c458e1b5437b602f04e639b044edbd999d270d->leave($__internal_6d34d2c796993496017fe6df76c458e1b5437b602f04e639b044edbd999d270d_prof);

        
        $__internal_edd6484646aecca134156186c1a1de663c15be225aa94a6930b11589532c2328->leave($__internal_edd6484646aecca134156186c1a1de663c15be225aa94a6930b11589532c2328_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/var/www/redexpert/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
