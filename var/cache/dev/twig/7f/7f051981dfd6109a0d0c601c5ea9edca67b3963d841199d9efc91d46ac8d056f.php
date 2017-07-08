<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_4a3eec48c24c45e2da7bcfb95dc494252db48792838c2f1f65df24dfecfe8b74 extends Twig_Template
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
        $__internal_e0dc4c8ef356bc8338bcaf8c901baf458c891883228a0776aaa6d45791d74b3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0dc4c8ef356bc8338bcaf8c901baf458c891883228a0776aaa6d45791d74b3a->enter($__internal_e0dc4c8ef356bc8338bcaf8c901baf458c891883228a0776aaa6d45791d74b3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_54369b5501a43087eae8deef8d5491362f4ad1395e850a2241c3afd64b88d594 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54369b5501a43087eae8deef8d5491362f4ad1395e850a2241c3afd64b88d594->enter($__internal_54369b5501a43087eae8deef8d5491362f4ad1395e850a2241c3afd64b88d594_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_e0dc4c8ef356bc8338bcaf8c901baf458c891883228a0776aaa6d45791d74b3a->leave($__internal_e0dc4c8ef356bc8338bcaf8c901baf458c891883228a0776aaa6d45791d74b3a_prof);

        
        $__internal_54369b5501a43087eae8deef8d5491362f4ad1395e850a2241c3afd64b88d594->leave($__internal_54369b5501a43087eae8deef8d5491362f4ad1395e850a2241c3afd64b88d594_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/var/www/redexpert/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
