<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_b92c7bcf115da10a9259c5a63d60db840db050c5654d0fd4da5084902ce73e25 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "FOSUserBundle::layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_46cefa59b51be3b56157c344d90a5db878ef3b27d21b745cafa2b3a2ec28dcfe = $this->env->getExtension("native_profiler");
        $__internal_46cefa59b51be3b56157c344d90a5db878ef3b27d21b745cafa2b3a2ec28dcfe->enter($__internal_46cefa59b51be3b56157c344d90a5db878ef3b27d21b745cafa2b3a2ec28dcfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_46cefa59b51be3b56157c344d90a5db878ef3b27d21b745cafa2b3a2ec28dcfe->leave($__internal_46cefa59b51be3b56157c344d90a5db878ef3b27d21b745cafa2b3a2ec28dcfe_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_11eaadbc472e6cf4eb0f47637e47c26295fa7fadd41c0c716b6e02c1a7d75620 = $this->env->getExtension("native_profiler");
        $__internal_11eaadbc472e6cf4eb0f47637e47c26295fa7fadd41c0c716b6e02c1a7d75620->enter($__internal_11eaadbc472e6cf4eb0f47637e47c26295fa7fadd41c0c716b6e02c1a7d75620_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container_1\">

        <div class=\"container\">
            <section class=\"row\">


                <div>
                    ";
        // line 11
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 12
            echo "                        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
                        <a href=\"";
            // line 13
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
                            ";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                        </a>
                    ";
        } else {
            // line 17
            echo "                        <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
                    ";
        }
        // line 19
        echo "                </div>

                ";
        // line 21
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 22
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 23
                echo "                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 24
                    echo "                            <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                                ";
                    // line 25
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                            </div>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 28
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "                ";
        }
        // line 30
        echo "
                <div>
                    ";
        // line 32
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 34
        echo "                </div>
        </div>


        </section>
    </div>

";
        
        $__internal_11eaadbc472e6cf4eb0f47637e47c26295fa7fadd41c0c716b6e02c1a7d75620->leave($__internal_11eaadbc472e6cf4eb0f47637e47c26295fa7fadd41c0c716b6e02c1a7d75620_prof);

    }

    // line 32
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f16c40d9585fb4117dadbcc45355604fbf3f9fedb4ee085f686699f00a5103b6 = $this->env->getExtension("native_profiler");
        $__internal_f16c40d9585fb4117dadbcc45355604fbf3f9fedb4ee085f686699f00a5103b6->enter($__internal_f16c40d9585fb4117dadbcc45355604fbf3f9fedb4ee085f686699f00a5103b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 33
        echo "                    ";
        
        $__internal_f16c40d9585fb4117dadbcc45355604fbf3f9fedb4ee085f686699f00a5103b6->leave($__internal_f16c40d9585fb4117dadbcc45355604fbf3f9fedb4ee085f686699f00a5103b6_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 33,  134 => 32,  120 => 34,  118 => 32,  114 => 30,  111 => 29,  105 => 28,  96 => 25,  91 => 24,  86 => 23,  81 => 22,  79 => 21,  75 => 19,  67 => 17,  61 => 14,  57 => 13,  52 => 12,  50 => 11,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <div class="container_1">*/
/* */
/*         <div class="container">*/
/*             <section class="row">*/
/* */
/* */
/*                 <div>*/
/*                     {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/*                         {{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |*/
/*                         <a href="{{ path('fos_user_security_logout') }}">*/
/*                             {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}*/
/*                         </a>*/
/*                     {% else %}*/
/*                         <a href="{{ path('fos_user_security_login') }}">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a>*/
/*                     {% endif %}*/
/*                 </div>*/
/* */
/*                 {% if app.request.hasPreviousSession %}*/
/*                     {% for type, messages in app.session.flashbag.all() %}*/
/*                         {% for message in messages %}*/
/*                             <div class="flash-{{ type }}">*/
/*                                 {{ message }}*/
/*                             </div>*/
/*                         {% endfor %}*/
/*                     {% endfor %}*/
/*                 {% endif %}*/
/* */
/*                 <div>*/
/*                     {% block fos_user_content %}*/
/*                     {% endblock fos_user_content %}*/
/*                 </div>*/
/*         </div>*/
/* */
/* */
/*         </section>*/
/*     </div>*/
/* */
/* {% endblock %}*/
/* */
