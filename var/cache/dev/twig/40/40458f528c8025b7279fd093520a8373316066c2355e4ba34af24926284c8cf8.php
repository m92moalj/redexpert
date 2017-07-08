<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_c1932b0beab94b75ac8389612a929eb995f203d7ef572e3daa00a0b11ba613d0 extends Twig_Template
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
        $__internal_e2999e2d896e7b4ce97ee04aa64f95c6c39aef0790fa6308a2a9bf4a53f2aaa9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2999e2d896e7b4ce97ee04aa64f95c6c39aef0790fa6308a2a9bf4a53f2aaa9->enter($__internal_e2999e2d896e7b4ce97ee04aa64f95c6c39aef0790fa6308a2a9bf4a53f2aaa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_326f7d3e055e3ea3e6f27c6f8882fabe80f7a33fcee6d938db3ebec066ac4b96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_326f7d3e055e3ea3e6f27c6f8882fabe80f7a33fcee6d938db3ebec066ac4b96->enter($__internal_326f7d3e055e3ea3e6f27c6f8882fabe80f7a33fcee6d938db3ebec066ac4b96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_e2999e2d896e7b4ce97ee04aa64f95c6c39aef0790fa6308a2a9bf4a53f2aaa9->leave($__internal_e2999e2d896e7b4ce97ee04aa64f95c6c39aef0790fa6308a2a9bf4a53f2aaa9_prof);

        
        $__internal_326f7d3e055e3ea3e6f27c6f8882fabe80f7a33fcee6d938db3ebec066ac4b96->leave($__internal_326f7d3e055e3ea3e6f27c6f8882fabe80f7a33fcee6d938db3ebec066ac4b96_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/var/www/redexpert/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
