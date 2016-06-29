<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_c2fdafe93d193d2b35eff6e57c70c63d65167d58bc3d438d853817e8f0f6ff34 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_b3a70c8fdc0a0f96aa7702f4597ef910abe42056493ae470b48bbd377664b0c5 = $this->env->getExtension("native_profiler");
        $__internal_b3a70c8fdc0a0f96aa7702f4597ef910abe42056493ae470b48bbd377664b0c5->enter($__internal_b3a70c8fdc0a0f96aa7702f4597ef910abe42056493ae470b48bbd377664b0c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b3a70c8fdc0a0f96aa7702f4597ef910abe42056493ae470b48bbd377664b0c5->leave($__internal_b3a70c8fdc0a0f96aa7702f4597ef910abe42056493ae470b48bbd377664b0c5_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7b730f608e352556aa28ff07c82c72374bb6db40aba225d00f20f7a30daff473 = $this->env->getExtension("native_profiler");
        $__internal_7b730f608e352556aa28ff07c82c72374bb6db40aba225d00f20f7a30daff473->enter($__internal_7b730f608e352556aa28ff07c82c72374bb6db40aba225d00f20f7a30daff473_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 7
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 9
        echo "




        <form action=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
            <div class=\"form-group\">
                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\"/>
            </div>

            <div class=\"form-group\">
                <label for=\"username\">";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                <input type=\"text\" class=\"form-control\" id=\"username\" name=\"_username\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\"
                       required=\"required\"/>
            </div>

            <div class=\"form-group\">
                <label for=\"password\">";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                <input type=\"password\" class=\"form-control\" id=\"password\" name=\"_password\" required=\"required\"/>
            </div>

            <div class=\"checkbox\">
                <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\"/>
                <label for=\"remember_me\">";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
            </div>

            <input type=\"submit\" class=\"btn btn-default\" id=\"_submit\" name=\"_submit\"
                   value=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\"/>
        </form>

";
        
        $__internal_7b730f608e352556aa28ff07c82c72374bb6db40aba225d00f20f7a30daff473->leave($__internal_7b730f608e352556aa28ff07c82c72374bb6db40aba225d00f20f7a30daff473_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 36,  88 => 32,  79 => 26,  71 => 21,  67 => 20,  60 => 16,  55 => 14,  48 => 9,  42 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* {% if error %}*/
/*     <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/* {% endif %}*/
/* */
/* */
/* */
/* */
/* */
/*         <form action="{{ path("fos_user_security_check") }}" method="post">*/
/*             <div class="form-group">*/
/*                 <input type="hidden" name="_csrf_token" value="{{ csrf_token }}"/>*/
/*             </div>*/
/* */
/*             <div class="form-group">*/
/*                 <label for="username">{{ 'security.login.username'|trans }}</label>*/
/*                 <input type="text" class="form-control" id="username" name="_username" value="{{ last_username }}"*/
/*                        required="required"/>*/
/*             </div>*/
/* */
/*             <div class="form-group">*/
/*                 <label for="password">{{ 'security.login.password'|trans }}</label>*/
/*                 <input type="password" class="form-control" id="password" name="_password" required="required"/>*/
/*             </div>*/
/* */
/*             <div class="checkbox">*/
/*                 <input type="checkbox" id="remember_me" name="_remember_me" value="on"/>*/
/*                 <label for="remember_me">{{ 'security.login.remember_me'|trans }}</label>*/
/*             </div>*/
/* */
/*             <input type="submit" class="btn btn-default" id="_submit" name="_submit"*/
/*                    value="{{ 'security.login.submit'|trans }}"/>*/
/*         </form>*/
/* */
/* {#*/
/* <form action="{{ path("fos_user_security_check") }}" method="post">*/
/*     <input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/* */
/*     <label for="username">{{ 'security.login.username'|trans }}</label>*/
/*     <input type="text" id="username" name="_username" value="{{ last_username }}" required="required" />*/
/* */
/*     <label for="password">{{ 'security.login.password'|trans }}</label>*/
/*     <input type="password" id="password" name="_password" required="required" />*/
/* */
/*     <input type="checkbox" id="remember_me" name="_remember_me" value="on" />*/
/*     <label for="remember_me">{{ 'security.login.remember_me'|trans }}</label>*/
/* */
/*     <input type="submit" id="_submit" name="_submit" value="{{ 'security.login.submit'|trans }}" />*/
/* </form>*/
/* #}*/
/* {% endblock fos_user_content %}*/
/* */
