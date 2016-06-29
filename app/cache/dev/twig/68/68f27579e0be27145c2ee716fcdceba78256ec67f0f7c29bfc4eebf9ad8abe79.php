<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_1ad55efd965c9bc92df17b1a28d1dbbe0fe3c667a96c87e788edbbe0f484dc30 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_6e5e9e5110517d3ee3e84d46297dc9ff792c634237dd8774023d8c9e3f3a384c = $this->env->getExtension("native_profiler");
        $__internal_6e5e9e5110517d3ee3e84d46297dc9ff792c634237dd8774023d8c9e3f3a384c->enter($__internal_6e5e9e5110517d3ee3e84d46297dc9ff792c634237dd8774023d8c9e3f3a384c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6e5e9e5110517d3ee3e84d46297dc9ff792c634237dd8774023d8c9e3f3a384c->leave($__internal_6e5e9e5110517d3ee3e84d46297dc9ff792c634237dd8774023d8c9e3f3a384c_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6dd4aa8bc7e9cf78cf7281c1ba7cf3fa4fb12768f2a4d38b3be6d3ff7ea88277 = $this->env->getExtension("native_profiler");
        $__internal_6dd4aa8bc7e9cf78cf7281c1ba7cf3fa4fb12768f2a4d38b3be6d3ff7ea88277->enter($__internal_6dd4aa8bc7e9cf78cf7281c1ba7cf3fa4fb12768f2a4d38b3be6d3ff7ea88277_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_6dd4aa8bc7e9cf78cf7281c1ba7cf3fa4fb12768f2a4d38b3be6d3ff7ea88277->leave($__internal_6dd4aa8bc7e9cf78cf7281c1ba7cf3fa4fb12768f2a4d38b3be6d3ff7ea88277_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 8,  45 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>*/
/*     {% if targetUrl %}*/
/*     <p><a href="{{ targetUrl }}">{{ 'registration.back'|trans }}</a></p>*/
/*     {% endif %}*/
/* {% endblock fos_user_content %}*/
/* */
