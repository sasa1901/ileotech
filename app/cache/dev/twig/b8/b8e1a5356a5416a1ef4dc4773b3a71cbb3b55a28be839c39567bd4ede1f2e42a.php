<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_8edc99930ca1f80082e5c4db2ebe1079662f961026286c652fdbe4af6a6ec572 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9dd3acf53a63553b48a729303515681b12d83f44d2fe08524369b91d3542f9b5 = $this->env->getExtension("native_profiler");
        $__internal_9dd3acf53a63553b48a729303515681b12d83f44d2fe08524369b91d3542f9b5->enter($__internal_9dd3acf53a63553b48a729303515681b12d83f44d2fe08524369b91d3542f9b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9dd3acf53a63553b48a729303515681b12d83f44d2fe08524369b91d3542f9b5->leave($__internal_9dd3acf53a63553b48a729303515681b12d83f44d2fe08524369b91d3542f9b5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_528cc46994b6ee01221fcc52d2090b2af7af8ac16c59d146d46bb0f7b09c5a2e = $this->env->getExtension("native_profiler");
        $__internal_528cc46994b6ee01221fcc52d2090b2af7af8ac16c59d146d46bb0f7b09c5a2e->enter($__internal_528cc46994b6ee01221fcc52d2090b2af7af8ac16c59d146d46bb0f7b09c5a2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_528cc46994b6ee01221fcc52d2090b2af7af8ac16c59d146d46bb0f7b09c5a2e->leave($__internal_528cc46994b6ee01221fcc52d2090b2af7af8ac16c59d146d46bb0f7b09c5a2e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_19fcab0d43990d5dead8f744079c54dd558e4438fec1864218bb70340c20b7ad = $this->env->getExtension("native_profiler");
        $__internal_19fcab0d43990d5dead8f744079c54dd558e4438fec1864218bb70340c20b7ad->enter($__internal_19fcab0d43990d5dead8f744079c54dd558e4438fec1864218bb70340c20b7ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_19fcab0d43990d5dead8f744079c54dd558e4438fec1864218bb70340c20b7ad->leave($__internal_19fcab0d43990d5dead8f744079c54dd558e4438fec1864218bb70340c20b7ad_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_e16092a0f3cf348e2a4cca6bc7f89791164a7f54c7305df690d783da7d40bedc = $this->env->getExtension("native_profiler");
        $__internal_e16092a0f3cf348e2a4cca6bc7f89791164a7f54c7305df690d783da7d40bedc->enter($__internal_e16092a0f3cf348e2a4cca6bc7f89791164a7f54c7305df690d783da7d40bedc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_e16092a0f3cf348e2a4cca6bc7f89791164a7f54c7305df690d783da7d40bedc->leave($__internal_e16092a0f3cf348e2a4cca6bc7f89791164a7f54c7305df690d783da7d40bedc_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
