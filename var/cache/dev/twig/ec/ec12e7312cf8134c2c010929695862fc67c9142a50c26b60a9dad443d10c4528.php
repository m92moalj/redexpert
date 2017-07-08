<?php

/* @Framework/Form/form_label.html.php */
class __TwigTemplate_f503c64072af3debd2d7dfa64ea6d60b2c918e96df6dd62a092f324ad685ac98 extends Twig_Template
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
        $__internal_fce5a18ee3eaadc9ff80ce480d492a5ed62ce9fe72fe492dfbc928fc7c18b4ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fce5a18ee3eaadc9ff80ce480d492a5ed62ce9fe72fe492dfbc928fc7c18b4ec->enter($__internal_fce5a18ee3eaadc9ff80ce480d492a5ed62ce9fe72fe492dfbc928fc7c18b4ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        $__internal_051c8d051c64408646486d06dc6a9a32abd29d47f219891aaa1286d3fc8120f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_051c8d051c64408646486d06dc6a9a32abd29d47f219891aaa1286d3fc8120f1->enter($__internal_051c8d051c64408646486d06dc6a9a32abd29d47f219891aaa1286d3fc8120f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        // line 1
        echo "<?php if (false !== \$label): ?>
<?php if (\$required) { \$label_attr['class'] = trim((isset(\$label_attr['class']) ? \$label_attr['class'] : '').' required'); } ?>
<?php if (!\$compound) { \$label_attr['for'] = \$id; } ?>
<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<label <?php foreach (\$label_attr as \$k => \$v) { printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)); } ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></label>
<?php endif ?>
";
        
        $__internal_fce5a18ee3eaadc9ff80ce480d492a5ed62ce9fe72fe492dfbc928fc7c18b4ec->leave($__internal_fce5a18ee3eaadc9ff80ce480d492a5ed62ce9fe72fe492dfbc928fc7c18b4ec_prof);

        
        $__internal_051c8d051c64408646486d06dc6a9a32abd29d47f219891aaa1286d3fc8120f1->leave($__internal_051c8d051c64408646486d06dc6a9a32abd29d47f219891aaa1286d3fc8120f1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_label.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (false !== \$label): ?>
<?php if (\$required) { \$label_attr['class'] = trim((isset(\$label_attr['class']) ? \$label_attr['class'] : '').' required'); } ?>
<?php if (!\$compound) { \$label_attr['for'] = \$id; } ?>
<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<label <?php foreach (\$label_attr as \$k => \$v) { printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)); } ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></label>
<?php endif ?>
", "@Framework/Form/form_label.html.php", "/var/www/redexpert/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_label.html.php");
    }
}
