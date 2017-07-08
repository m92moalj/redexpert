<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_f5aed524df8e8284c5928a3d63e65be0cf34a058e339313490d857a3e6bb2488 extends Twig_Template
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
        $__internal_b0a8fbcbd7a3c1bd46d4a32ade11050ad590ee94539667449264ac29b83fb42d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0a8fbcbd7a3c1bd46d4a32ade11050ad590ee94539667449264ac29b83fb42d->enter($__internal_b0a8fbcbd7a3c1bd46d4a32ade11050ad590ee94539667449264ac29b83fb42d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_b2a5407b4a9eccc2d5c830628e11277fb4cc348d11e9baef19a4ce3075553949 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2a5407b4a9eccc2d5c830628e11277fb4cc348d11e9baef19a4ce3075553949->enter($__internal_b2a5407b4a9eccc2d5c830628e11277fb4cc348d11e9baef19a4ce3075553949_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_b0a8fbcbd7a3c1bd46d4a32ade11050ad590ee94539667449264ac29b83fb42d->leave($__internal_b0a8fbcbd7a3c1bd46d4a32ade11050ad590ee94539667449264ac29b83fb42d_prof);

        
        $__internal_b2a5407b4a9eccc2d5c830628e11277fb4cc348d11e9baef19a4ce3075553949->leave($__internal_b2a5407b4a9eccc2d5c830628e11277fb4cc348d11e9baef19a4ce3075553949_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/var/www/redexpert/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
