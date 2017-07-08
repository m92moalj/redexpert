<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_9cccd4540089f3ec23470b621e29e2842e69a86fd87142a4e430cf187bad579f extends Twig_Template
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
        $__internal_b1c002a28ac33c3ed69afe02e42537420b5d3bacc72c98a3eb52a3114050302e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1c002a28ac33c3ed69afe02e42537420b5d3bacc72c98a3eb52a3114050302e->enter($__internal_b1c002a28ac33c3ed69afe02e42537420b5d3bacc72c98a3eb52a3114050302e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_975a432c2d3972b8252a1f351b1995e3e80535360419b45d6d4421468d4c1a42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_975a432c2d3972b8252a1f351b1995e3e80535360419b45d6d4421468d4c1a42->enter($__internal_975a432c2d3972b8252a1f351b1995e3e80535360419b45d6d4421468d4c1a42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_b1c002a28ac33c3ed69afe02e42537420b5d3bacc72c98a3eb52a3114050302e->leave($__internal_b1c002a28ac33c3ed69afe02e42537420b5d3bacc72c98a3eb52a3114050302e_prof);

        
        $__internal_975a432c2d3972b8252a1f351b1995e3e80535360419b45d6d4421468d4c1a42->leave($__internal_975a432c2d3972b8252a1f351b1995e3e80535360419b45d6d4421468d4c1a42_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/var/www/redexpert/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
