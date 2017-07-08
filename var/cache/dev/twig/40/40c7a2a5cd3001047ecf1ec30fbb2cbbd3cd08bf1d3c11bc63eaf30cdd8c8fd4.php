<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_cee74d96f26cec4c2a95b260959620cc919b04d031881c05862aa44dfe906006 extends Twig_Template
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
        $__internal_34186fa5b9f0e1fa5823f0b9d94b4366eabec562eb8a2f776b1157813b1ec680 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34186fa5b9f0e1fa5823f0b9d94b4366eabec562eb8a2f776b1157813b1ec680->enter($__internal_34186fa5b9f0e1fa5823f0b9d94b4366eabec562eb8a2f776b1157813b1ec680_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_a4bc4a162ef34f10fdb420ab651af9ce0f19ebbd5504798ac989fb7384ea1a9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4bc4a162ef34f10fdb420ab651af9ce0f19ebbd5504798ac989fb7384ea1a9a->enter($__internal_a4bc4a162ef34f10fdb420ab651af9ce0f19ebbd5504798ac989fb7384ea1a9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_34186fa5b9f0e1fa5823f0b9d94b4366eabec562eb8a2f776b1157813b1ec680->leave($__internal_34186fa5b9f0e1fa5823f0b9d94b4366eabec562eb8a2f776b1157813b1ec680_prof);

        
        $__internal_a4bc4a162ef34f10fdb420ab651af9ce0f19ebbd5504798ac989fb7384ea1a9a->leave($__internal_a4bc4a162ef34f10fdb420ab651af9ce0f19ebbd5504798ac989fb7384ea1a9a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/var/www/redexpert/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
