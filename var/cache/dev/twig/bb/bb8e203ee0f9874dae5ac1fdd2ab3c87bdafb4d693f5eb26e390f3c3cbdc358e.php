<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_3b15c7a2c3d55f6387aa00378f27d10532aa5d91f4113ce4a767c330cc8f2e10 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e6492c70d7566db0fef0282276d36a3cbec8ebc84aec476332687752ad9bb7cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6492c70d7566db0fef0282276d36a3cbec8ebc84aec476332687752ad9bb7cf->enter($__internal_e6492c70d7566db0fef0282276d36a3cbec8ebc84aec476332687752ad9bb7cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_6f27c16ad53cdb3cced9773aeccd8a0ef9ce14d2b727d685e8eca6f7c1c09314 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f27c16ad53cdb3cced9773aeccd8a0ef9ce14d2b727d685e8eca6f7c1c09314->enter($__internal_6f27c16ad53cdb3cced9773aeccd8a0ef9ce14d2b727d685e8eca6f7c1c09314_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_e6492c70d7566db0fef0282276d36a3cbec8ebc84aec476332687752ad9bb7cf->leave($__internal_e6492c70d7566db0fef0282276d36a3cbec8ebc84aec476332687752ad9bb7cf_prof);

        
        $__internal_6f27c16ad53cdb3cced9773aeccd8a0ef9ce14d2b727d685e8eca6f7c1c09314->leave($__internal_6f27c16ad53cdb3cced9773aeccd8a0ef9ce14d2b727d685e8eca6f7c1c09314_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_7615c90390cfd34da0f4b3bb2739e18b8372df008ede2fc66012cd033c5b6399 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7615c90390cfd34da0f4b3bb2739e18b8372df008ede2fc66012cd033c5b6399->enter($__internal_7615c90390cfd34da0f4b3bb2739e18b8372df008ede2fc66012cd033c5b6399_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a09c5682725cb10187212048241fc8e0bfb4cb61915f7b4cad178f5560072cfd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a09c5682725cb10187212048241fc8e0bfb4cb61915f7b4cad178f5560072cfd->enter($__internal_a09c5682725cb10187212048241fc8e0bfb4cb61915f7b4cad178f5560072cfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_a09c5682725cb10187212048241fc8e0bfb4cb61915f7b4cad178f5560072cfd->leave($__internal_a09c5682725cb10187212048241fc8e0bfb4cb61915f7b4cad178f5560072cfd_prof);

        
        $__internal_7615c90390cfd34da0f4b3bb2739e18b8372df008ede2fc66012cd033c5b6399->leave($__internal_7615c90390cfd34da0f4b3bb2739e18b8372df008ede2fc66012cd033c5b6399_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/var/www/redexpert/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
