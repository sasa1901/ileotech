<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_c6561034f6e9ec72269e7bb292baba4fa7cec2e231e49961083b08981eb48711 extends Twig_Template
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
        $__internal_6a2877a0afc955730cd49697e76e2466d452ac01db71d21f2fe3337a380ebb1e = $this->env->getExtension("native_profiler");
        $__internal_6a2877a0afc955730cd49697e76e2466d452ac01db71d21f2fe3337a380ebb1e->enter($__internal_6a2877a0afc955730cd49697e76e2466d452ac01db71d21f2fe3337a380ebb1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a2877a0afc955730cd49697e76e2466d452ac01db71d21f2fe3337a380ebb1e->leave($__internal_6a2877a0afc955730cd49697e76e2466d452ac01db71d21f2fe3337a380ebb1e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_af395dbd07a5c032d8215ff254db4044095ae63d2da5c8031523b9a35bd6a113 = $this->env->getExtension("native_profiler");
        $__internal_af395dbd07a5c032d8215ff254db4044095ae63d2da5c8031523b9a35bd6a113->enter($__internal_af395dbd07a5c032d8215ff254db4044095ae63d2da5c8031523b9a35bd6a113_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_af395dbd07a5c032d8215ff254db4044095ae63d2da5c8031523b9a35bd6a113->leave($__internal_af395dbd07a5c032d8215ff254db4044095ae63d2da5c8031523b9a35bd6a113_prof);

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
