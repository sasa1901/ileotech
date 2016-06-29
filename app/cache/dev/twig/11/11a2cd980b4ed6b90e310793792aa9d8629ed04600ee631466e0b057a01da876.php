<?php

/* PresentationBundle::layout.html.twig */
class __TwigTemplate_0abca5564ac2dfa6eb3007251855a969d13844a4dbd8cfb08f5f9cb42cb8ae63 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8b2743b705f3727a2466f51933c94c7690e2bf7fca4283467b0f28260e7fa97c = $this->env->getExtension("native_profiler");
        $__internal_8b2743b705f3727a2466f51933c94c7690e2bf7fca4283467b0f28260e7fa97c->enter($__internal_8b2743b705f3727a2466f51933c94c7690e2bf7fca4283467b0f28260e7fa97c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PresentationBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\"/>
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\"
          href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap/dist/css/bootstrap.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\"
          href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap/dist/css/carousel.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\"
          href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap/dist/css/flow.css"), "html", null, true);
        echo "\">
</head>
<body>
";
        // line 16
        $this->displayBlock('body', $context, $blocks);
        // line 18
        $this->displayBlock('javascripts', $context, $blocks);
        // line 33
        echo "</body>
</html>";
        
        $__internal_8b2743b705f3727a2466f51933c94c7690e2bf7fca4283467b0f28260e7fa97c->leave($__internal_8b2743b705f3727a2466f51933c94c7690e2bf7fca4283467b0f28260e7fa97c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_0ef2b1a67f5a933ca2ed8902933130b11e6056dbb49cb103adbb29e31af933d1 = $this->env->getExtension("native_profiler");
        $__internal_0ef2b1a67f5a933ca2ed8902933130b11e6056dbb49cb103adbb29e31af933d1->enter($__internal_0ef2b1a67f5a933ca2ed8902933130b11e6056dbb49cb103adbb29e31af933d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_0ef2b1a67f5a933ca2ed8902933130b11e6056dbb49cb103adbb29e31af933d1->leave($__internal_0ef2b1a67f5a933ca2ed8902933130b11e6056dbb49cb103adbb29e31af933d1_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_79445b6a85da7fcd1ffa3a6c057a4aaefb4cd8ee9f0e5c978665e2b25bdcbeee = $this->env->getExtension("native_profiler");
        $__internal_79445b6a85da7fcd1ffa3a6c057a4aaefb4cd8ee9f0e5c978665e2b25bdcbeee->enter($__internal_79445b6a85da7fcd1ffa3a6c057a4aaefb4cd8ee9f0e5c978665e2b25bdcbeee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_79445b6a85da7fcd1ffa3a6c057a4aaefb4cd8ee9f0e5c978665e2b25bdcbeee->leave($__internal_79445b6a85da7fcd1ffa3a6c057a4aaefb4cd8ee9f0e5c978665e2b25bdcbeee_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_4da98e53ed93a1f83c539a90e7a68be88183a754d5932ca48a686449b578d671 = $this->env->getExtension("native_profiler");
        $__internal_4da98e53ed93a1f83c539a90e7a68be88183a754d5932ca48a686449b578d671->enter($__internal_4da98e53ed93a1f83c539a90e7a68be88183a754d5932ca48a686449b578d671_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_4da98e53ed93a1f83c539a90e7a68be88183a754d5932ca48a686449b578d671->leave($__internal_4da98e53ed93a1f83c539a90e7a68be88183a754d5932ca48a686449b578d671_prof);

    }

    // line 18
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_98fefaa46f93e0857c69cbd34b925dcf557c741be4d9bce57de3e9fcec482045 = $this->env->getExtension("native_profiler");
        $__internal_98fefaa46f93e0857c69cbd34b925dcf557c741be4d9bce57de3e9fcec482045->enter($__internal_98fefaa46f93e0857c69cbd34b925dcf557c741be4d9bce57de3e9fcec482045_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 19
        echo "
    <!-- Bootstrap core JavaScript
       ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js\"></script>
    <script>window.jQuery || document.write('<script src=\"../../assets/js/vendor/jquery.min.js\"><\\/script>')</script>


    <script src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\" ></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap/js/tests/vendor/holder.min.js"), "html", null, true);
        echo "\"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src=\"../../assets/js/ie10-viewport-bug-workaround.js\"></script>
";
        
        $__internal_98fefaa46f93e0857c69cbd34b925dcf557c741be4d9bce57de3e9fcec482045->leave($__internal_98fefaa46f93e0857c69cbd34b925dcf557c741be4d9bce57de3e9fcec482045_prof);

    }

    public function getTemplateName()
    {
        return "PresentationBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 29,  122 => 27,  112 => 19,  106 => 18,  95 => 16,  84 => 6,  72 => 5,  64 => 33,  62 => 18,  60 => 16,  54 => 13,  49 => 11,  44 => 9,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* <head>*/
/*     <meta charset="UTF-8"/>*/
/*     <title>{% block title %}Welcome!{% endblock %}</title>*/
/*     {% block stylesheets %}{% endblock %}*/
/*     <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}"/>*/
/*     <link rel="stylesheet"*/
/*           href="{{ asset('css/bootstrap/dist/css/bootstrap.min.css') }}">*/
/*     <link rel="stylesheet"*/
/*           href="{{ asset('css/bootstrap/dist/css/carousel.css') }}">*/
/*     <link rel="stylesheet"*/
/*           href="{{ asset('css/bootstrap/dist/css/flow.css') }}">*/
/* </head>*/
/* <body>*/
/* {% block body %}*/
/* {% endblock %}*/
/* {% block javascripts %}*/
/* */
/*     <!-- Bootstrap core JavaScript*/
/*        ================================================== -->*/
/*     <!-- Placed at the end of the document so the pages load faster -->*/
/*     <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>*/
/*     <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>*/
/* */
/* */
/*     <script src="{{ asset('css/bootstrap/dist/js/bootstrap.min.js') }}" ></script>*/
/*     <!-- Just to make our placeholder images work. Don't actually copy the next line! -->*/
/*     <script src="{{ asset('css/bootstrap/js/tests/vendor/holder.min.js') }}"></script>*/
/*     <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->*/
/*     <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>*/
/* {% endblock %}*/
/* </body>*/
/* </html>*/
