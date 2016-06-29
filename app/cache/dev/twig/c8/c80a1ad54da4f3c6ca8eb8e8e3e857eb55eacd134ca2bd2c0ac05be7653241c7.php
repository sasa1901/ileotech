<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_42cbfeca2ec6686f27ebcb85bfa5e2c928ad04a43bf96fd561b077c630a290b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_88631777b51f4c823b9826e6c57220a08f3791200c29b1669ef7e0eff343f21d = $this->env->getExtension("native_profiler");
        $__internal_88631777b51f4c823b9826e6c57220a08f3791200c29b1669ef7e0eff343f21d->enter($__internal_88631777b51f4c823b9826e6c57220a08f3791200c29b1669ef7e0eff343f21d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_88631777b51f4c823b9826e6c57220a08f3791200c29b1669ef7e0eff343f21d->leave($__internal_88631777b51f4c823b9826e6c57220a08f3791200c29b1669ef7e0eff343f21d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e05dd434377542ab0fd23f36b9888a191b58799b3aae2a0a474d532da18b4095 = $this->env->getExtension("native_profiler");
        $__internal_e05dd434377542ab0fd23f36b9888a191b58799b3aae2a0a474d532da18b4095->enter($__internal_e05dd434377542ab0fd23f36b9888a191b58799b3aae2a0a474d532da18b4095_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_e05dd434377542ab0fd23f36b9888a191b58799b3aae2a0a474d532da18b4095->leave($__internal_e05dd434377542ab0fd23f36b9888a191b58799b3aae2a0a474d532da18b4095_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
