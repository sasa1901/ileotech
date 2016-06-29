<?php

/* OfferBundle:offer:Offer.html.twig */
class __TwigTemplate_f63ece45ea33d71ef13904f424cc5fb4ab2dfd79df92bdf20c6c36c1f18f369d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "OfferBundle:offer:Offer.html.twig", 2);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2ec67fff09eb4aea1f46c0e0ea24b1738a386000d77c2f06ab8de30ea899bd97 = $this->env->getExtension("native_profiler");
        $__internal_2ec67fff09eb4aea1f46c0e0ea24b1738a386000d77c2f06ab8de30ea899bd97->enter($__internal_2ec67fff09eb4aea1f46c0e0ea24b1738a386000d77c2f06ab8de30ea899bd97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OfferBundle:offer:Offer.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2ec67fff09eb4aea1f46c0e0ea24b1738a386000d77c2f06ab8de30ea899bd97->leave($__internal_2ec67fff09eb4aea1f46c0e0ea24b1738a386000d77c2f06ab8de30ea899bd97_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_417ef05526da0b3c72f629586739ed1f9f861de07a116f2c7bd43a79f72dc19f = $this->env->getExtension("native_profiler");
        $__internal_417ef05526da0b3c72f629586739ed1f9f861de07a116f2c7bd43a79f72dc19f->enter($__internal_417ef05526da0b3c72f629586739ed1f9f861de07a116f2c7bd43a79f72dc19f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
";
        // line 40
        echo "
";
        // line 64
        echo "    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class=\"jumbotron\">
        <div class=\"container\">
            <h1 class=\"display-3\">Hello, world!</h1>
            <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
            <p><a class=\"btn btn-primary btn-lg\" href=\"#\" role=\"button\">Learn more &raquo;</a></p>
        </div>
    </div>

    <div class=\"container\">
        <!-- Example row of columns -->
        <div class=\"row\">
            <div class=\"col-md-4\">
                <h2>Heading</h2>
                <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                <p><a class=\"btn btn-secondary\" href=\"#\" role=\"button\">View details &raquo;</a></p>
            </div>
            <div class=\"col-md-4\">
                <h2>Heading</h2>
                <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                <p><a class=\"btn btn-secondary\" href=\"#\" role=\"button\">View details &raquo;</a></p>
            </div>
            <div class=\"col-md-4\">
                <h2>Heading</h2>
                <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                <p><a class=\"btn btn-secondary\" href=\"#\" role=\"button\">View details &raquo;</a></p>
            </div>
        </div>

        <hr>

        <footer>
            <p>&copy; Company 2015</p>
        </footer>
    </div> <!-- /container -->
";
        
        $__internal_417ef05526da0b3c72f629586739ed1f9f861de07a116f2c7bd43a79f72dc19f->leave($__internal_417ef05526da0b3c72f629586739ed1f9f861de07a116f2c7bd43a79f72dc19f_prof);

    }

    public function getTemplateName()
    {
        return "OfferBundle:offer:Offer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 64,  43 => 40,  40 => 4,  34 => 3,  11 => 2,);
    }
}
/* {# app/Resources/views/homepage/Homepage.html.twig #}*/
/* {% extends 'base.html.twig' %}*/
/* {% block body %}*/
/* */
/* {#    <!-- Fixed navbar -->*/
/*     <nav class="navbar navbar-inverse navbar-fixed-top">*/
/*         <div class="container">*/
/*             <div class="navbar-header">*/
/*                 <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"*/
/*                         data-target="#navbar"*/
/*                         aria-expanded="false" aria-controls="navbar">*/
/*                     <span class="sr-only">Toggle navigation</span>*/
/*                     <span class="icon-bar">test 1</span>*/
/*                     <span class="icon-bar">test 2</span>*/
/*                     <span class="icon-bar">test 3</span>*/
/*                 </button>*/
/*                 <a class="navbar-brand" href="#">Bootstrap theme</a>*/
/*             </div>*/
/*             <div id="navbar" class="navbar-collapse collapse">*/
/*                 <ul class="nav navbar-nav">*/
/*                     <li class="active"><a href="#">Home</a></li>*/
/*                     <li><a href="http://127.0.0.1/symfony_personews/web/app_dev.php/flow">Account</a></li>*/
/*                     <li><a href="#contact">Contact</a></li>*/
/*                     <li class="dropdown">*/
/*                         <a href="http://127.0.0.1/symfony_personews/web/app_dev.php/flow"*/
/*                            class="dropdown-toggle"*/
/*                            data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Our*/
/*                             Offers<span class="caret"></span></a>*/
/*                         <ul class="dropdown-menu">*/
/*                             <li><a href="#">Free</a></li>*/
/*                             <li role="separator" class="divider"></li>*/
/*                             <li class="dropdown-header"></li>*/
/*                             <li><a href="#">Premium</a></li>*/
/*                         </ul>*/
/*                     </li>*/
/*                 </ul>*/
/*             </div><!--/.nav-collapse -->*/
/*         </div>*/
/*     </nav>#}*/
/* */
/* {#*/
/*     <nav class="navbar navbar-static-top navbar-dark bg-inverse">*/
/*         <a class="navbar-brand" href="http://127.0.0.1/symfony_personews/web/app_dev.php/homepage">PersoNews</a>*/
/*         <ul class="nav navbar-nav">*/
/*             <li class="nav-item">*/
/*                 <a class="nav-link" href="http://127.0.0.1/symfony_personews/web/app_dev.php/homepage">Home <span class="sr-only">(current)</span></a>*/
/*             </li>*/
/*             <li class="nav-item active">*/
/*                 <a class="nav-link" href="http://127.0.0.1/symfony_personews/web/app_dev.php/offer">Our Offers</a>*/
/*             </li>*/
/*             <li class="nav-item">*/
/*                 <a class="nav-link" href="http://127.0.0.1/symfony_personews/web/app_dev.php/flow">Flows</a>*/
/*             </li>*/
/*             <li class="nav-item">*/
/*                 <a class="nav-link" href="http://127.0.0.1/symfony_personews/web/app_dev.php/about">About</a>*/
/*             </li>*/
/*             <li class="nav-item">*/
/*                 <a class="nav-link" href="http://127.0.0.1/symfony_personews/web/app_dev.php/contact">Contact</a>*/
/*             </li>*/
/*         </ul>*/
/*     </nav>*/
/* */
/* #}*/
/*     <!-- Main jumbotron for a primary marketing message or call to action -->*/
/*     <div class="jumbotron">*/
/*         <div class="container">*/
/*             <h1 class="display-3">Hello, world!</h1>*/
/*             <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>*/
/*             <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <div class="container">*/
/*         <!-- Example row of columns -->*/
/*         <div class="row">*/
/*             <div class="col-md-4">*/
/*                 <h2>Heading</h2>*/
/*                 <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>*/
/*                 <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>*/
/*             </div>*/
/*             <div class="col-md-4">*/
/*                 <h2>Heading</h2>*/
/*                 <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>*/
/*                 <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>*/
/*             </div>*/
/*             <div class="col-md-4">*/
/*                 <h2>Heading</h2>*/
/*                 <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>*/
/*                 <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <hr>*/
/* */
/*         <footer>*/
/*             <p>&copy; Company 2015</p>*/
/*         </footer>*/
/*     </div> <!-- /container -->*/
/* {% endblock %}*/
