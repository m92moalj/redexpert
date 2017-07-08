<?php

/* @Framework/Form/form_start.html.php */
class __TwigTemplate_f2047e5652ea1d7087360a673aeca79c9b0eb77ddb4a4d017a9850bf29ad6c93 extends Twig_Template
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
        $__internal_912c1977fbdf95fce986121c3ab079198c4d8b80cc8786ec1c0d912079139053 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_912c1977fbdf95fce986121c3ab079198c4d8b80cc8786ec1c0d912079139053->enter($__internal_912c1977fbdf95fce986121c3ab079198c4d8b80cc8786ec1c0d912079139053_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        $__internal_6f0e7258ef55f34952661b1106a1cfac5647df7c04906bebdb16a26bf3ded28c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f0e7258ef55f34952661b1106a1cfac5647df7c04906bebdb16a26bf3ded28c->enter($__internal_6f0e7258ef55f34952661b1106a1cfac5647df7c04906bebdb16a26bf3ded28c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        // line 1
        echo "<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
";
        
        $__internal_912c1977fbdf95fce986121c3ab079198c4d8b80cc8786ec1c0d912079139053->leave($__internal_912c1977fbdf95fce986121c3ab079198c4d8b80cc8786ec1c0d912079139053_prof);

        
        $__internal_6f0e7258ef55f34952661b1106a1cfac5647df7c04906bebdb16a26bf3ded28c->leave($__internal_6f0e7258ef55f34952661b1106a1cfac5647df7c04906bebdb16a26bf3ded28c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_start.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
", "@Framework/Form/form_start.html.php", "/var/www/redexpert/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_start.html.php");
    }
}
