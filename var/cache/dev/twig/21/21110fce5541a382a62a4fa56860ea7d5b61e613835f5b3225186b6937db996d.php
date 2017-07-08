<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_33f45ccbe138cc208480c108189083c88dd3c64ef8cf6bef9d44a97c7dbc404c extends Twig_Template
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
        $__internal_32efab4cc13160b168a85028749175b66c94e5c020440d65577d1cc7d39c131c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32efab4cc13160b168a85028749175b66c94e5c020440d65577d1cc7d39c131c->enter($__internal_32efab4cc13160b168a85028749175b66c94e5c020440d65577d1cc7d39c131c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_5652883908aa64338f2a66fcc57b5b1fc35a2837de162d96ffdf9c187092e11b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5652883908aa64338f2a66fcc57b5b1fc35a2837de162d96ffdf9c187092e11b->enter($__internal_5652883908aa64338f2a66fcc57b5b1fc35a2837de162d96ffdf9c187092e11b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_32efab4cc13160b168a85028749175b66c94e5c020440d65577d1cc7d39c131c->leave($__internal_32efab4cc13160b168a85028749175b66c94e5c020440d65577d1cc7d39c131c_prof);

        
        $__internal_5652883908aa64338f2a66fcc57b5b1fc35a2837de162d96ffdf9c187092e11b->leave($__internal_5652883908aa64338f2a66fcc57b5b1fc35a2837de162d96ffdf9c187092e11b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/var/www/redexpert/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
