<?php

/* base.html.twig */
class __TwigTemplate_c945e6bf93fe2887f0e36609f9ed131da3192348ea2dc31bef866f939b0ae24a extends Twig_Template
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
        $__internal_0ffc4eec7fdb6f3ce1d3887675f67ec230c50a5dad6498ed30fe1481644d76d8 = $this->env->getExtension("native_profiler");
        $__internal_0ffc4eec7fdb6f3ce1d3887675f67ec230c50a5dad6498ed30fe1481644d76d8->enter($__internal_0ffc4eec7fdb6f3ce1d3887675f67ec230c50a5dad6498ed30fe1481644d76d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
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
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("pn.ico"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\"
          href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap/dist/css/bootstrap.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\"
          href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap/dist/css/bootstrap-theme.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\"
          href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap/dist/css/carousel.css"), "html", null, true);
        echo "\">

    <link rel=\"stylesheet\"
          href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap/dist/css/flow.css"), "html", null, true);
        echo "\">

</head>
<body>


<div class=\"container\">
    <section class=\"row\">
        ";
        // line 24
        $context["url"] = "http://127.0.0.1/PersoNews/personews_website/web/app_dev.php/";
        // line 25
        echo "        <nav class=\"navbar navbar-fixed-top navbar-dark bg-inverse\">
            <a class=\"navbar-brand\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
        echo "\">PersoNews</a>
            <ul class=\"nav navbar-nav\">
                <li class=\"nav-item\">
                    <a class=\"nav-link\"
                       href=\"";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
        echo "\"><span
                                class=\"sr-only\">(current)</span></a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\"
                       href=\"";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
        echo "\">Accueil</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
        // line 38
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
        echo "offer\">Offres</a>
                </li>
                <li class=\"nav-item flow\">
                    <a class=\"nav-link\" href=\"";
        // line 41
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
        echo "flow\">Flux</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
        // line 44
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
        echo "login\">Compte</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\"
                       href=\"";
        // line 48
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
        echo "about\">Contact</a>
                </li>
            </ul>
        </nav>
</div>


";
        // line 55
        $this->displayBlock('body', $context, $blocks);
        // line 57
        echo "


";
        // line 60
        $this->displayBlock('javascripts', $context, $blocks);
        // line 74
        echo "</body>
</html>";
        
        $__internal_0ffc4eec7fdb6f3ce1d3887675f67ec230c50a5dad6498ed30fe1481644d76d8->leave($__internal_0ffc4eec7fdb6f3ce1d3887675f67ec230c50a5dad6498ed30fe1481644d76d8_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_5ba993428f32978b1a72bbadd29bfe4fb45c754a94e8af6f48884b5160bb3845 = $this->env->getExtension("native_profiler");
        $__internal_5ba993428f32978b1a72bbadd29bfe4fb45c754a94e8af6f48884b5160bb3845->enter($__internal_5ba993428f32978b1a72bbadd29bfe4fb45c754a94e8af6f48884b5160bb3845_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Personews";
        
        $__internal_5ba993428f32978b1a72bbadd29bfe4fb45c754a94e8af6f48884b5160bb3845->leave($__internal_5ba993428f32978b1a72bbadd29bfe4fb45c754a94e8af6f48884b5160bb3845_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_39702aa1a78966aa8fb9b453bd0688444d8cd1f5f417f6dbe4d775839231965f = $this->env->getExtension("native_profiler");
        $__internal_39702aa1a78966aa8fb9b453bd0688444d8cd1f5f417f6dbe4d775839231965f->enter($__internal_39702aa1a78966aa8fb9b453bd0688444d8cd1f5f417f6dbe4d775839231965f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_39702aa1a78966aa8fb9b453bd0688444d8cd1f5f417f6dbe4d775839231965f->leave($__internal_39702aa1a78966aa8fb9b453bd0688444d8cd1f5f417f6dbe4d775839231965f_prof);

    }

    // line 55
    public function block_body($context, array $blocks = array())
    {
        $__internal_4e80a04e51c2a03a6f013f44e29c85cbd591f83227087ce4a3743989248a0aab = $this->env->getExtension("native_profiler");
        $__internal_4e80a04e51c2a03a6f013f44e29c85cbd591f83227087ce4a3743989248a0aab->enter($__internal_4e80a04e51c2a03a6f013f44e29c85cbd591f83227087ce4a3743989248a0aab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_4e80a04e51c2a03a6f013f44e29c85cbd591f83227087ce4a3743989248a0aab->leave($__internal_4e80a04e51c2a03a6f013f44e29c85cbd591f83227087ce4a3743989248a0aab_prof);

    }

    // line 60
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_13f24673173cd23ef402907d1c84483cae33fa48fda22ec7ada0a81947b5355d = $this->env->getExtension("native_profiler");
        $__internal_13f24673173cd23ef402907d1c84483cae33fa48fda22ec7ada0a81947b5355d->enter($__internal_13f24673173cd23ef402907d1c84483cae33fa48fda22ec7ada0a81947b5355d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 61
        echo "    <!-- Bootstrap core JavaScript
       ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js\"></script>
    <script>window.jQuery || document.write('<script src=\"../../assets/js/vendor/jquery.min.js\"><\\/script>')</script>

    <script src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap/js/tests/vendor/holder.min.js"), "html", null, true);
        echo "\"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src=\"../../assets/js/ie10-viewport-bug-workaround.js\"></script>

";
        
        $__internal_13f24673173cd23ef402907d1c84483cae33fa48fda22ec7ada0a81947b5355d->leave($__internal_13f24673173cd23ef402907d1c84483cae33fa48fda22ec7ada0a81947b5355d_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 69,  191 => 67,  183 => 61,  177 => 60,  166 => 55,  155 => 6,  143 => 5,  135 => 74,  133 => 60,  128 => 57,  126 => 55,  116 => 48,  109 => 44,  103 => 41,  97 => 38,  91 => 35,  83 => 30,  76 => 26,  73 => 25,  71 => 24,  60 => 16,  54 => 13,  49 => 11,  44 => 9,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*     <meta charset="UTF-8"/>*/
/*     <title>{% block title %}Personews{% endblock %}</title>*/
/*     {% block stylesheets %}{% endblock %}*/
/*     <link rel="icon" type="image/x-icon" href="{{ asset('pn.ico') }}"/>*/
/*     <link rel="stylesheet"*/
/*           href="{{ asset('css/bootstrap/dist/css/bootstrap.min.css') }}">*/
/*     <link rel="stylesheet"*/
/*           href="{{ asset('css/bootstrap/dist/css/bootstrap-theme.css') }}">*/
/*     <link rel="stylesheet"*/
/*           href="{{ asset('css/bootstrap/dist/css/carousel.css') }}">*/
/* */
/*     <link rel="stylesheet"*/
/*           href="{{ asset('css/bootstrap/dist/css/flow.css') }}">*/
/* */
/* </head>*/
/* <body>*/
/* */
/* */
/* <div class="container">*/
/*     <section class="row">*/
/*         {% set url =  "http://127.0.0.1/PersoNews/personews_website/web/app_dev.php/" %}*/
/*         <nav class="navbar navbar-fixed-top navbar-dark bg-inverse">*/
/*             <a class="navbar-brand" href="{{ url }}">PersoNews</a>*/
/*             <ul class="nav navbar-nav">*/
/*                 <li class="nav-item">*/
/*                     <a class="nav-link"*/
/*                        href="{{ url }}"><span*/
/*                                 class="sr-only">(current)</span></a>*/
/*                 </li>*/
/*                 <li class="nav-item">*/
/*                     <a class="nav-link"*/
/*                        href="{{ url }}">Accueil</a>*/
/*                 </li>*/
/*                 <li class="nav-item">*/
/*                     <a class="nav-link" href="{{ url }}offer">Offres</a>*/
/*                 </li>*/
/*                 <li class="nav-item flow">*/
/*                     <a class="nav-link" href="{{ url }}flow">Flux</a>*/
/*                 </li>*/
/*                 <li class="nav-item">*/
/*                     <a class="nav-link" href="{{ url }}login">Compte</a>*/
/*                 </li>*/
/*                 <li class="nav-item">*/
/*                     <a class="nav-link"*/
/*                        href="{{ url }}about">Contact</a>*/
/*                 </li>*/
/*             </ul>*/
/*         </nav>*/
/* </div>*/
/* */
/* */
/* {% block body %}*/
/* {% endblock %}*/
/* */
/* */
/* */
/* {% block javascripts %}*/
/*     <!-- Bootstrap core JavaScript*/
/*        ================================================== -->*/
/*     <!-- Placed at the end of the document so the pages load faster -->*/
/*     <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>*/
/*     <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>*/
/* */
/*     <script src="{{ asset('css/bootstrap/dist/js/bootstrap.min.js') }}"></script>*/
/*     <!-- Just to make our placeholder images work. Don't actually copy the next line! -->*/
/*     <script src="{{ asset('css/bootstrap/js/tests/vendor/holder.min.js') }}"></script>*/
/*     <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->*/
/*     <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>*/
/* */
/* {% endblock %}*/
/* </body>*/
/* </html>*/
