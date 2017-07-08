<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_35cf3c42ea9653a281155d9811782f7127b449a6b077e121fbca7b3b8bdcadac extends Twig_Template
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
        $__internal_877e06352c65eadbed07e0c40d10470a8e45b182f68e895604f740e58ad233d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_877e06352c65eadbed07e0c40d10470a8e45b182f68e895604f740e58ad233d8->enter($__internal_877e06352c65eadbed07e0c40d10470a8e45b182f68e895604f740e58ad233d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_6146241edb4017500505c21fe90e3f0513cc1b565e1069f49ea4535954b63dab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6146241edb4017500505c21fe90e3f0513cc1b565e1069f49ea4535954b63dab->enter($__internal_6146241edb4017500505c21fe90e3f0513cc1b565e1069f49ea4535954b63dab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_877e06352c65eadbed07e0c40d10470a8e45b182f68e895604f740e58ad233d8->leave($__internal_877e06352c65eadbed07e0c40d10470a8e45b182f68e895604f740e58ad233d8_prof);

        
        $__internal_6146241edb4017500505c21fe90e3f0513cc1b565e1069f49ea4535954b63dab->leave($__internal_6146241edb4017500505c21fe90e3f0513cc1b565e1069f49ea4535954b63dab_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/var/www/redexpert/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
