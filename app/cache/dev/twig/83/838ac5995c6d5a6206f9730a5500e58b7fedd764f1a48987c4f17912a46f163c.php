<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_95e6183e42cde0c70286f985781a22ba29674e11251a9a0b46bab0990e06cebe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e3446884e1b45c415ab2cbb233f36dca512e5c95eca45fcbb8c62760950a2f02 = $this->env->getExtension("native_profiler");
        $__internal_e3446884e1b45c415ab2cbb233f36dca512e5c95eca45fcbb8c62760950a2f02->enter($__internal_e3446884e1b45c415ab2cbb233f36dca512e5c95eca45fcbb8c62760950a2f02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e3446884e1b45c415ab2cbb233f36dca512e5c95eca45fcbb8c62760950a2f02->leave($__internal_e3446884e1b45c415ab2cbb233f36dca512e5c95eca45fcbb8c62760950a2f02_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_129c86dfa408d8e25c41e4887265d6a2611c4b96b2888dc900563866e523be13 = $this->env->getExtension("native_profiler");
        $__internal_129c86dfa408d8e25c41e4887265d6a2611c4b96b2888dc900563866e523be13->enter($__internal_129c86dfa408d8e25c41e4887265d6a2611c4b96b2888dc900563866e523be13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_129c86dfa408d8e25c41e4887265d6a2611c4b96b2888dc900563866e523be13->leave($__internal_129c86dfa408d8e25c41e4887265d6a2611c4b96b2888dc900563866e523be13_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
