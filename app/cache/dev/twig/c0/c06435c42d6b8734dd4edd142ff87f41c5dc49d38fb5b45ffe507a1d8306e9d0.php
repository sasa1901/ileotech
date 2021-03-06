<?php

/* PresentationBundle:presentation:Presentation.html.twig */
class __TwigTemplate_a29504d706e8e7caad8a5250ed1ea616245523b9fb8c3a04be23149c9459e619 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "PresentationBundle:presentation:Presentation.html.twig", 2);
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
        $__internal_fc2e55124d3f28666747b63a4506cf203ddc44d71b274fd5cba91d367e4f6a9f = $this->env->getExtension("native_profiler");
        $__internal_fc2e55124d3f28666747b63a4506cf203ddc44d71b274fd5cba91d367e4f6a9f->enter($__internal_fc2e55124d3f28666747b63a4506cf203ddc44d71b274fd5cba91d367e4f6a9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PresentationBundle:presentation:Presentation.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fc2e55124d3f28666747b63a4506cf203ddc44d71b274fd5cba91d367e4f6a9f->leave($__internal_fc2e55124d3f28666747b63a4506cf203ddc44d71b274fd5cba91d367e4f6a9f_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_51a0f3b1d0cfd9b16790d89031c703e5cff15b4f1d58a6634ea890e49d1026cb = $this->env->getExtension("native_profiler");
        $__internal_51a0f3b1d0cfd9b16790d89031c703e5cff15b4f1d58a6634ea890e49d1026cb->enter($__internal_51a0f3b1d0cfd9b16790d89031c703e5cff15b4f1d58a6634ea890e49d1026cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "

";
        // line 27
        echo "

    <div class=\"container\">
        <section class=\"row\">
            ";
        // line 31
        $context["url"] = "http://127.0.0.1/PersoNews/personews_website/web/app_dev.php/";
        // line 32
        echo "            <nav class=\"navbar navbar-fixed-top navbar-dark bg-inverse\">
                <a class=\"navbar-brand\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
        echo "homepage\">PersoNews</a>
                <ul class=\"nav navbar-nav\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link\"
                           href=\"";
        // line 37
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
        echo "/homepage\"><span
                                    class=\"sr-only\">(current)</span></a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\"
                           href=\"";
        // line 42
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
        echo "homepage\">Accueil</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
        // line 45
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
        echo "offer\">Offres</a>
                    </li>
                    <li class=\"nav-item flow\">
                        <a class=\"nav-link\" href=\"";
        // line 48
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
        echo "flow\">Fluxs</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
        // line 51
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
        echo "about\">Compte</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\"
                           href=\"";
        // line 55
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
        echo "contact\">Contact</a>
                    </li>
                </ul>
            </nav>
    </div>




    <!-- Carousel
    ================================================== -->
    <div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\">
        <!-- Indicators -->
        <ol class=\"carousel-indicators\">
            <li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"></li>
            <li data-target=\"#myCarousel\" data-slide-to=\"1\"></li>
            <li data-target=\"#myCarousel\" data-slide-to=\"2\"></li>
        </ol>
        <div class=\"carousel-inner\" role=\"listbox\">
            <div class=\"carousel-item active\">
                <img class=\"first-slide\" src=\"data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==\" alt=\"First slide\">
                <div class=\"container\">
                    <div class=\"carousel-caption text-xs-left\">
                        <h1>Example headline.</h1>
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                        <p><a class=\"btn btn-lg btn-primary\" href=\"#\" role=\"button\">Inscrivez vous !</a></p>
                    </div>
                </div>
            </div>
            <div class=\"carousel-item\">
                <img class=\"second-slide\" src=\"data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==\" alt=\"Second slide\">
                <div class=\"container\">
                    <div class=\"carousel-caption\">
                        <h1>Another example headline.</h1>
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                        <p><a class=\"btn btn-lg btn-primary\" href=\"#\" role=\"button\">Learn more</a></p>
                    </div>
                </div>
            </div>
            <div class=\"carousel-item\">
                <img class=\"third-slide\" src=\"data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==\" alt=\"Third slide\">
                <div class=\"container\">
                    <div class=\"carousel-caption text-xs-right\">
                        <h1>One more for good measure.</h1>
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                        <p><a class=\"btn btn-lg btn-primary\" href=\"#\" role=\"button\">Browse gallery</a></p>
                    </div>
                </div>
            </div>
        </div>
        <a class=\"left carousel-control\" href=\"#myCarousel\" role=\"button\" data-slide=\"prev\">
            <span class=\"glyphicon glyphicon-chevron-left\" aria-hidden=\"true\"></span>
            <span class=\"sr-only\">Previous</span>
        </a>
        <a class=\"right carousel-control\" href=\"#myCarousel\" role=\"button\" data-slide=\"next\">
            <span class=\"glyphicon glyphicon-chevron-right\" aria-hidden=\"true\"></span>
            <span class=\"sr-only\">Next</span>
        </a>
    </div><!-- /.carousel -->


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class=\"container marketing\">


        <!-- START THE FEATURETTES -->


        <div class=\"row featurette\">
            <div class=\"col-md-7\">
                <h2 class=\"featurette-heading\">Veille de l'information. <span class=\"text-muted\">Ne ratez plus rien !</span></h2>
                <p class=\"lead\">Grace à notre système de surveillance vous serez informé au moindre changement opérant sur vos sites préférés.</p>
            </div>
            <div class=\"col-md-5\">
                <img class=\"featurette-image img-fluid center-block\" data-src=\"holder.js/500x500/auto\" alt=\"Generic placeholder image\">
            </div>
        </div>

        <hr class=\"featurette-divider\">

        <div class=\"row featurette\">
            <div class=\"col-md-12\">
                <h2 class=\"featurette-heading\">User friendly, <span class=\"text-muted\">disponible sur :</span></h2>
                ";
        // line 142
        echo "            </div>
";
        // line 148
        echo "        </div>


        <!-- Three columns of text below the carousel -->
        <div class=\"row\">
            <div class=\"col-lg-4 col-pu\">
                <img class=\"img-circle\" src=\"data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==\" alt=\"Generic placeholder image\" width=\"140\" height=\"140\">
                <h2>IOS</h2>
                <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
                <p><a class=\"btn btn-secondary\" href=\"#\" role=\"button\">En savoir plus</a></p>
            </div><!-- /.col-lg-4 -->
            <div class=\"col-lg-4\">
                <img class=\"img-circle\" src=\"data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==\" alt=\"Generic placeholder image\" width=\"140\" height=\"140\">
                <h2>Android</h2>
                <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
                <p><a class=\"btn btn-secondary\" href=\"#\" role=\"button\">En savoir plus</a></p>
            </div><!-- /.col-lg-4 -->
            <div class=\"col-lg-4\">
                <img class=\"img-circle\" src=\"data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==\" alt=\"Generic placeholder image\" width=\"140\" height=\"140\">
                <h2>Windows Phone</h2>
                <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                <p><a class=\"btn btn-secondary\" href=\"#\" role=\"button\">En savoir plus</a></p>
            </div><!-- /.col-lg-4 -->
            <div class=\"col-lg-4 col-lg-offset-1\">
                <img class=\"img-circle\" src=\"data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==\" alt=\"Generic placeholder image\" width=\"140\" height=\"140\">
                <h2>Windows</h2>
                <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                <p><a class=\"btn btn-secondary\" href=\"#\" role=\"button\">En savoir plus</a></p>
            </div><!-- /.col-lg-4 -->
            <div class=\"col-lg-4 col-lg-offset-1\">
                <img class=\"img-circle\" src=\"data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==\" alt=\"Generic placeholder image\" width=\"140\" height=\"140\">
                <h2>Notre site !</h2>
                <p>Accédez à un site dédié à vos news !</p>
                <a href=\"#\">www.personews.com</a>
                <p><a class=\"btn btn-secondary\" href=\"#\" role=\"button\">En savoir plus</a></p>
            </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->


        <hr class=\"featurette-divider\">

        <div class=\"row featurette\">
            <div class=\"col-md-7\">
                <h2 class=\"featurette-heading\">Syncrhonisez vos données <span class=\"text-muted\">sur tous vos appareils.</span></h2>
                <p class=\"lead\">Quelque soit l'appareil sur lequel vous vous trouvez accéder à vos données en temps réel.</p>
            </div>
            <div class=\"col-md-5\">
                <img class=\"featurette-image img-fluid center-block\" data-src=\"holder.js/500x500/auto\" alt=\"Generic placeholder image\">
            </div>
        </div>




        <hr class=\"featurette-divider\">

        <!-- /END THE FEATURETTES -->





        <!-- FOOTER -->
        <footer>
            <p class=\"pull-xs-right\"><a href=\"#\">Back to top</a></p>
            <p>&copy; 2016 Personews. &middot; <a href=\"#\">Privacy</a> &middot; <a href=\"#\">Terms</a></p>
        </footer>

    </div><!-- /.container -->
";
        
        $__internal_51a0f3b1d0cfd9b16790d89031c703e5cff15b4f1d58a6634ea890e49d1026cb->leave($__internal_51a0f3b1d0cfd9b16790d89031c703e5cff15b4f1d58a6634ea890e49d1026cb_prof);

    }

    public function getTemplateName()
    {
        return "PresentationBundle:presentation:Presentation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 148,  184 => 142,  95 => 55,  88 => 51,  82 => 48,  76 => 45,  70 => 42,  62 => 37,  55 => 33,  52 => 32,  50 => 31,  44 => 27,  40 => 5,  34 => 4,  11 => 2,);
    }
}
/* {# app/Resources/views/homepage/Homepage.html.twig #}*/
/* {% extends 'base.html.twig' %}*/
/* {#{% extends 'PresentationBundle::layout.html.twig' %}#}*/
/* {% block body %}*/
/* */
/* */
/* {#*/
/*     <nav class="navbar navbar-static-top navbar-light bg-faded">*/
/*         <a href="#" class="navbar-brand">Carousel</a>*/
/*         <ul class="nav navbar-nav">*/
/*             <li class="nav-item active">*/
/*                 <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>*/
/*             </li>*/
/*             <li class="nav-item">*/
/*                 <a class="nav-link" href="#">Features</a>*/
/*             </li>*/
/*             <li class="nav-item">*/
/*                 <a class="nav-link" href="#">Pricing</a>*/
/*             </li>*/
/*             <li class="nav-item">*/
/*                 <a class="nav-link" href="#">About</a>*/
/*             </li>*/
/*         </ul>*/
/*     </nav>*/
/* */
/* #}*/
/* */
/* */
/*     <div class="container">*/
/*         <section class="row">*/
/*             {% set url =  "http://127.0.0.1/PersoNews/personews_website/web/app_dev.php/"%}*/
/*             <nav class="navbar navbar-fixed-top navbar-dark bg-inverse">*/
/*                 <a class="navbar-brand" href="{{ url }}homepage">PersoNews</a>*/
/*                 <ul class="nav navbar-nav">*/
/*                     <li class="nav-item">*/
/*                         <a class="nav-link"*/
/*                            href="{{ url }}/homepage"><span*/
/*                                     class="sr-only">(current)</span></a>*/
/*                     </li>*/
/*                     <li class="nav-item">*/
/*                         <a class="nav-link"*/
/*                            href="{{ url }}homepage">Accueil</a>*/
/*                     </li>*/
/*                     <li class="nav-item">*/
/*                         <a class="nav-link" href="{{ url }}offer">Offres</a>*/
/*                     </li>*/
/*                     <li class="nav-item flow">*/
/*                         <a class="nav-link" href="{{ url }}flow">Fluxs</a>*/
/*                     </li>*/
/*                     <li class="nav-item">*/
/*                         <a class="nav-link" href="{{ url }}about">Compte</a>*/
/*                     </li>*/
/*                     <li class="nav-item">*/
/*                         <a class="nav-link"*/
/*                            href="{{ url }}contact">Contact</a>*/
/*                     </li>*/
/*                 </ul>*/
/*             </nav>*/
/*     </div>*/
/* */
/* */
/* */
/* */
/*     <!-- Carousel*/
/*     ================================================== -->*/
/*     <div id="myCarousel" class="carousel slide" data-ride="carousel">*/
/*         <!-- Indicators -->*/
/*         <ol class="carousel-indicators">*/
/*             <li data-target="#myCarousel" data-slide-to="0" class="active"></li>*/
/*             <li data-target="#myCarousel" data-slide-to="1"></li>*/
/*             <li data-target="#myCarousel" data-slide-to="2"></li>*/
/*         </ol>*/
/*         <div class="carousel-inner" role="listbox">*/
/*             <div class="carousel-item active">*/
/*                 <img class="first-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="First slide">*/
/*                 <div class="container">*/
/*                     <div class="carousel-caption text-xs-left">*/
/*                         <h1>Example headline.</h1>*/
/*                         <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>*/
/*                         <p><a class="btn btn-lg btn-primary" href="#" role="button">Inscrivez vous !</a></p>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="carousel-item">*/
/*                 <img class="second-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Second slide">*/
/*                 <div class="container">*/
/*                     <div class="carousel-caption">*/
/*                         <h1>Another example headline.</h1>*/
/*                         <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>*/
/*                         <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="carousel-item">*/
/*                 <img class="third-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Third slide">*/
/*                 <div class="container">*/
/*                     <div class="carousel-caption text-xs-right">*/
/*                         <h1>One more for good measure.</h1>*/
/*                         <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>*/
/*                         <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">*/
/*             <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>*/
/*             <span class="sr-only">Previous</span>*/
/*         </a>*/
/*         <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">*/
/*             <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>*/
/*             <span class="sr-only">Next</span>*/
/*         </a>*/
/*     </div><!-- /.carousel -->*/
/* */
/* */
/*     <!-- Marketing messaging and featurettes*/
/*     ================================================== -->*/
/*     <!-- Wrap the rest of the page in another container to center all the content. -->*/
/* */
/*     <div class="container marketing">*/
/* */
/* */
/*         <!-- START THE FEATURETTES -->*/
/* */
/* */
/*         <div class="row featurette">*/
/*             <div class="col-md-7">*/
/*                 <h2 class="featurette-heading">Veille de l'information. <span class="text-muted">Ne ratez plus rien !</span></h2>*/
/*                 <p class="lead">Grace à notre système de surveillance vous serez informé au moindre changement opérant sur vos sites préférés.</p>*/
/*             </div>*/
/*             <div class="col-md-5">*/
/*                 <img class="featurette-image img-fluid center-block" data-src="holder.js/500x500/auto" alt="Generic placeholder image">*/
/*             </div>*/
/*         </div>*/
/* */
/*         <hr class="featurette-divider">*/
/* */
/*         <div class="row featurette">*/
/*             <div class="col-md-12">*/
/*                 <h2 class="featurette-heading">User friendly, <span class="text-muted">disponible sur :</span></h2>*/
/*                 {#<p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>#}*/
/*             </div>*/
/* {#*/
/*             <div class="col-md-5 col-md-pull-7">*/
/*                 <img class="featurette-image img-fluid center-block" data-src="holder.js/500x500/auto" alt="Generic placeholder image">*/
/*             </div>*/
/* #}*/
/*         </div>*/
/* */
/* */
/*         <!-- Three columns of text below the carousel -->*/
/*         <div class="row">*/
/*             <div class="col-lg-4 col-pu">*/
/*                 <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">*/
/*                 <h2>IOS</h2>*/
/*                 <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>*/
/*                 <p><a class="btn btn-secondary" href="#" role="button">En savoir plus</a></p>*/
/*             </div><!-- /.col-lg-4 -->*/
/*             <div class="col-lg-4">*/
/*                 <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">*/
/*                 <h2>Android</h2>*/
/*                 <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>*/
/*                 <p><a class="btn btn-secondary" href="#" role="button">En savoir plus</a></p>*/
/*             </div><!-- /.col-lg-4 -->*/
/*             <div class="col-lg-4">*/
/*                 <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">*/
/*                 <h2>Windows Phone</h2>*/
/*                 <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>*/
/*                 <p><a class="btn btn-secondary" href="#" role="button">En savoir plus</a></p>*/
/*             </div><!-- /.col-lg-4 -->*/
/*             <div class="col-lg-4 col-lg-offset-1">*/
/*                 <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">*/
/*                 <h2>Windows</h2>*/
/*                 <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>*/
/*                 <p><a class="btn btn-secondary" href="#" role="button">En savoir plus</a></p>*/
/*             </div><!-- /.col-lg-4 -->*/
/*             <div class="col-lg-4 col-lg-offset-1">*/
/*                 <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">*/
/*                 <h2>Notre site !</h2>*/
/*                 <p>Accédez à un site dédié à vos news !</p>*/
/*                 <a href="#">www.personews.com</a>*/
/*                 <p><a class="btn btn-secondary" href="#" role="button">En savoir plus</a></p>*/
/*             </div><!-- /.col-lg-4 -->*/
/*         </div><!-- /.row -->*/
/* */
/* */
/*         <hr class="featurette-divider">*/
/* */
/*         <div class="row featurette">*/
/*             <div class="col-md-7">*/
/*                 <h2 class="featurette-heading">Syncrhonisez vos données <span class="text-muted">sur tous vos appareils.</span></h2>*/
/*                 <p class="lead">Quelque soit l'appareil sur lequel vous vous trouvez accéder à vos données en temps réel.</p>*/
/*             </div>*/
/*             <div class="col-md-5">*/
/*                 <img class="featurette-image img-fluid center-block" data-src="holder.js/500x500/auto" alt="Generic placeholder image">*/
/*             </div>*/
/*         </div>*/
/* */
/* */
/* */
/* */
/*         <hr class="featurette-divider">*/
/* */
/*         <!-- /END THE FEATURETTES -->*/
/* */
/* */
/* */
/* */
/* */
/*         <!-- FOOTER -->*/
/*         <footer>*/
/*             <p class="pull-xs-right"><a href="#">Back to top</a></p>*/
/*             <p>&copy; 2016 Personews. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>*/
/*         </footer>*/
/* */
/*     </div><!-- /.container -->*/
/* {% endblock %}*/
