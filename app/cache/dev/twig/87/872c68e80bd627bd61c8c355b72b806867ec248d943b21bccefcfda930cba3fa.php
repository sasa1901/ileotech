<?php

/* FlowBundle:flow:Flow.html.twig */
class __TwigTemplate_914cec38e085a15867214e14a507f3f2570ddb5f4e5f717ec2b8793a819a88d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "FlowBundle:flow:Flow.html.twig", 2);
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
        $__internal_c950f2579e7f62e8124be9ef41e8b1fb1c0674f92ad2fe11fe7e47a4b10a4410 = $this->env->getExtension("native_profiler");
        $__internal_c950f2579e7f62e8124be9ef41e8b1fb1c0674f92ad2fe11fe7e47a4b10a4410->enter($__internal_c950f2579e7f62e8124be9ef41e8b1fb1c0674f92ad2fe11fe7e47a4b10a4410_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FlowBundle:flow:Flow.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c950f2579e7f62e8124be9ef41e8b1fb1c0674f92ad2fe11fe7e47a4b10a4410->leave($__internal_c950f2579e7f62e8124be9ef41e8b1fb1c0674f92ad2fe11fe7e47a4b10a4410_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_985594802f1b56adaf1ac9dc7371ef5a87295cc00a7fbf499336f4baed2e3950 = $this->env->getExtension("native_profiler");
        $__internal_985594802f1b56adaf1ac9dc7371ef5a87295cc00a7fbf499336f4baed2e3950->enter($__internal_985594802f1b56adaf1ac9dc7371ef5a87295cc00a7fbf499336f4baed2e3950_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "




    <div class=\"container_1\">

        <!-- Carousel
            ================================================== -->
        <div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\">
            ";
        // line 15
        $context["count_indicator"] = 0;
        // line 16
        echo "            <ol class=\"carousel-indicators\">
                ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")));
        foreach ($context['_seq'] as $context["_key"] => $context["y"]) {
            // line 18
            echo "                    <!-- Indicators -->

                    ";
            // line 20
            if (((isset($context["count_indicator"]) ? $context["count_indicator"] : $this->getContext($context, "count_indicator")) == 0)) {
                // line 21
                echo "                        <li class=\"active\" data-target=\"#myCarousel\" data-slide-to=\"";
                echo twig_escape_filter($this->env, (isset($context["count_indicator"]) ? $context["count_indicator"] : $this->getContext($context, "count_indicator")), "html", null, true);
                echo "\" class=\"\"></li>
                    ";
            }
            // line 23
            echo "                    ";
            if (((isset($context["count_indicator"]) ? $context["count_indicator"] : $this->getContext($context, "count_indicator")) > 0)) {
                // line 24
                echo "                        <li data-target=\"#myCarousel\" data-slide-to=\"";
                echo twig_escape_filter($this->env, (isset($context["count_indicator"]) ? $context["count_indicator"] : $this->getContext($context, "count_indicator")), "html", null, true);
                echo "\" </li>
                    ";
            }
            // line 26
            echo "                    ";
            $context["count_indicator"] = ((isset($context["count_indicator"]) ? $context["count_indicator"] : $this->getContext($context, "count_indicator")) + 1);
            // line 27
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['y'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "            </ol>
            <div class=\"container_carousel\">
                <div class=\"carousel-inner\" role=\"listbox\">

                    ";
        // line 32
        $context["b"] = 0;
        // line 33
        echo "                    ";
        $context["count_carousel"] = 0;
        // line 34
        echo "                    ";
        $context["name_slide"] = "";
        // line 35
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")));
        foreach ($context['_seq'] as $context["_key"] => $context["y"]) {
            // line 36
            echo "                        <!-- Indicators -->

                        ";
            // line 38
            $context["name_slide"] = ("Slide-" . (isset($context["name_slide"]) ? $context["name_slide"] : $this->getContext($context, "name_slide")));
            // line 39
            echo "                        ";
            if (((isset($context["count_carousel"]) ? $context["count_carousel"] : $this->getContext($context, "count_carousel")) == 0)) {
                // line 40
                echo "                            <div class=\"carousel-item active\">
                                <img class=\"";
                // line 41
                echo twig_escape_filter($this->env, (isset($context["name_slide"]) ? $context["name_slide"] : $this->getContext($context, "name_slide")), "html", null, true);
                echo "\" src=\"data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==\" alt=\"First slide\">
                                <div class=\"container\">
                                    <div class=\"carousel-caption\">
                                        <h1>";
                // line 44
                echo twig_escape_filter($this->env, $this->getAttribute($context["y"], "name", array()), "html", null, true);
                echo "</h1>
                                        <p>";
                // line 45
                echo twig_escape_filter($this->env, $this->getAttribute($context["y"], "description", array()), "html", null, true);
                echo "</p>
                                        <p><a class=\"btn btn-lg btn-primary\" href=\"#\" role=\"button\">lire plus</a></p>

                                        ";
                // line 92
                echo "


                                    </div>
                                </div>
                            </div>
                        ";
            }
            // line 99
            echo "                        ";
            if (((isset($context["count_carousel"]) ? $context["count_carousel"] : $this->getContext($context, "count_carousel")) > 0)) {
                // line 100
                echo "                            <div class=\"carousel-item\">
                                <img class=\"";
                // line 101
                echo twig_escape_filter($this->env, (isset($context["name_slide"]) ? $context["name_slide"] : $this->getContext($context, "name_slide")), "html", null, true);
                echo "\" src=\"data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==\" alt=\"Second slide\">
                                <div class=\"container\">
                                    <div class=\"carousel-caption\">
                                        <h1>";
                // line 104
                echo twig_escape_filter($this->env, $this->getAttribute($context["y"], "name", array()), "html", null, true);
                echo "</h1>
                                        <p>";
                // line 105
                echo twig_escape_filter($this->env, $this->getAttribute($context["y"], "description", array()), "html", null, true);
                echo "</p>
                                        <p><a class=\"btn btn-lg btn-primary\" href=\"#\" role=\"button\">Learn more</a></p>
                                    </div>
                                </div>
                            </div>
                        ";
            }
            // line 111
            echo "                        ";
            $context["count_carousel"] = ((isset($context["count_carousel"]) ? $context["count_carousel"] : $this->getContext($context, "count_carousel")) + 1);
            // line 112
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['y'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 113
        echo "                </div>
                <a class=\"left carousel-control\" href=\"#myCarousel\" role=\"button\" data-slide=\"prev\">
                    <span class=\"icon-prev\" aria-hidden=\"true\"></span>
                    <span class=\"sr-only\">Previous</span>
                </a>
                <a class=\"right carousel-control\" href=\"#myCarousel\" role=\"button\" data-slide=\"next\">
                    <span class=\"icon-next\" aria-hidden=\"true\"></span>
                    <span class=\"sr-only\">Next</span>
                </a>




                ";
        // line 136
        echo "
            </div>
        </div>
        <!-- /.carousel -->


        <div class=\"container\">
            <section class=\"row\">
                ";
        // line 144
        $context["b"] = 1;
        // line 145
        echo "                ";
        $context["d"] = 0;
        // line 146
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")));
        foreach ($context['_seq'] as $context["_key"] => $context["y"]) {
            // line 147
            echo "                    <div class=\"col-lg-4\">
                        <div class=\"thumbnail\">
                            <div class=\"caption\">
                                <div class=\"test\">
                                    <h3>";
            // line 151
            echo twig_escape_filter($this->env, $this->getAttribute($context["y"], "name", array()), "html", null, true);
            echo "</h3>
                                    <p>";
            // line 152
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["small_description"]) ? $context["small_description"] : $this->getContext($context, "small_description")), (isset($context["d"]) ? $context["d"] : $this->getContext($context, "d")), array(), "array"), "html", null, true);
            echo "</p>
                                    ";
            // line 153
            $context["c"] = ("myModal" . (isset($context["b"]) ? $context["b"] : $this->getContext($context, "b")));
            // line 154
            echo "                                    <button type=\"button\" class=\"btn btn-primary    \" data-toggle=\"modal\"
                                            data-target=\"#";
            // line 155
            echo twig_escape_filter($this->env, (isset($context["c"]) ? $context["c"] : $this->getContext($context, "c")), "html", null, true);
            echo "\">
                                        lire plus
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal -->
                    <div class=\"modal fade\" id=\"";
            // line 164
            echo twig_escape_filter($this->env, (isset($context["c"]) ? $context["c"] : $this->getContext($context, "c")), "html", null, true);
            echo "\" tabindex=\"-1\" role=\"dialog\"
                         aria-labelledby=\"myModalLabel\">
                        <div class=\"modal-dialog\" role=\"document\">
                            <div class=\"modal-content\">
                                <div class=\"modal-header\">
                                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                        <span aria-hidden=\"true\">&times;</span></button>
                                    <h4 class=\"modal-title\" id=\"myModalLabel\">";
            // line 171
            echo twig_escape_filter($this->env, $this->getAttribute($context["y"], "name", array()), "html", null, true);
            echo "</h4>
                                </div>
                                <div class=\"modal-body\">
                                    ";
            // line 174
            echo twig_escape_filter($this->env, $this->getAttribute($context["y"], "description", array()), "html", null, true);
            echo "
                                </div>
                                <div class=\"modal-footer\">
                                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Fermer
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    ";
            // line 183
            $context["d"] = ((isset($context["d"]) ? $context["d"] : $this->getContext($context, "d")) + 1);
            // line 184
            echo "                    ";
            $context["b"] = ((isset($context["b"]) ? $context["b"] : $this->getContext($context, "b")) + 1);
            // line 185
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['y'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 186
        echo "            </section>
        </div>
    </div>
";
        
        $__internal_985594802f1b56adaf1ac9dc7371ef5a87295cc00a7fbf499336f4baed2e3950->leave($__internal_985594802f1b56adaf1ac9dc7371ef5a87295cc00a7fbf499336f4baed2e3950_prof);

    }

    public function getTemplateName()
    {
        return "FlowBundle:flow:Flow.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  286 => 186,  280 => 185,  277 => 184,  275 => 183,  263 => 174,  257 => 171,  247 => 164,  235 => 155,  232 => 154,  230 => 153,  226 => 152,  222 => 151,  216 => 147,  211 => 146,  208 => 145,  206 => 144,  196 => 136,  181 => 113,  175 => 112,  172 => 111,  163 => 105,  159 => 104,  153 => 101,  150 => 100,  147 => 99,  138 => 92,  132 => 45,  128 => 44,  122 => 41,  119 => 40,  116 => 39,  114 => 38,  110 => 36,  105 => 35,  102 => 34,  99 => 33,  97 => 32,  91 => 28,  85 => 27,  82 => 26,  76 => 24,  73 => 23,  67 => 21,  65 => 20,  61 => 18,  57 => 17,  54 => 16,  52 => 15,  40 => 5,  34 => 4,  11 => 2,);
    }
}
/* {# app/Resources/views #}*/
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/* */
/* */
/* */
/* */
/*     <div class="container_1">*/
/* */
/*         <!-- Carousel*/
/*             ================================================== -->*/
/*         <div id="myCarousel" class="carousel slide" data-ride="carousel">*/
/*             {% set count_indicator = 0 %}*/
/*             <ol class="carousel-indicators">*/
/*                 {% for y in product %}*/
/*                     <!-- Indicators -->*/
/* */
/*                     {% if count_indicator == 0 %}*/
/*                         <li class="active" data-target="#myCarousel" data-slide-to="{{ count_indicator }}" class=""></li>*/
/*                     {% endif %}*/
/*                     {% if count_indicator > 0 %}*/
/*                         <li data-target="#myCarousel" data-slide-to="{{ count_indicator }}" </li>*/
/*                     {% endif %}*/
/*                     {% set count_indicator = count_indicator + 1 %}*/
/*                 {% endfor %}*/
/*             </ol>*/
/*             <div class="container_carousel">*/
/*                 <div class="carousel-inner" role="listbox">*/
/* */
/*                     {% set b = 0 %}*/
/*                     {% set count_carousel = 0 %}*/
/*                     {% set name_slide = '' %}*/
/*                     {% for y in product %}*/
/*                         <!-- Indicators -->*/
/* */
/*                         {% set name_slide = 'Slide-'  ~ name_slide %}*/
/*                         {% if count_carousel == 0 %}*/
/*                             <div class="carousel-item active">*/
/*                                 <img class="{{ name_slide }}" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="First slide">*/
/*                                 <div class="container">*/
/*                                     <div class="carousel-caption">*/
/*                                         <h1>{{ y.name }}</h1>*/
/*                                         <p>{{ y.description }}</p>*/
/*                                         <p><a class="btn btn-lg btn-primary" href="#" role="button">lire plus</a></p>*/
/* */
/*                                         {#*/
/*                                                                                 <section class="row">*/
/*                                                                                     <div class="test">*/
/*                                                                                         {% set b = 1 %}*/
/*                                                                                         {% set d = 0 %}*/
/*                                                                                         {% for y in product %}*/
/*                                                                                             <div class="col-lg-4">*/
/*                                                                                                 <div class="thumbnail">*/
/*                                                                                                     <div class="caption">*/
/*                                                                                                         {% set c = 'myCarousel'  ~ b %}*/
/*                                                                                                         <button type="button" class="btn btn-primary    " data-toggle="modal"*/
/*                                                                                                                 data-target="#{{ c }}">*/
/*                                                                                                             lire plus*/
/*                                                                                                         </button>*/
/*                                                                                                     </div>*/
/*                                                                                                 </div>*/
/* */
/*                                                                                                 <!-- Modal -->*/
/*                                                                                                 <div class="modal fade" id="{{ c }}" tabindex="-1" role="dialog"*/
/*                                                                                                      aria-labelledby="myCarouselLabel">*/
/*                                                                                                     <div class="modal-dialog" role="document">*/
/*                                                                                                         <div class="modal-content">*/
/*                                                                                                             <div class="modal-header">*/
/*                                                                                                                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">*/
/*                                                                                                                     <span aria-hidden="true">&times;</span></button>*/
/*                                                                                                                 <h4 class="modal-title" id="myCarouselLabel">{{ y.name }}</h4>*/
/*                                                                                                             </div>*/
/*                                                                                                             <div class="modal-body">*/
/*                                                                                                                 {{ y.description }}*/
/*                                                                                                             </div>*/
/*                                                                                                             <div class="modal-footer">*/
/*                                                                                                                 <button type="button" class="btn btn-default" data-dismiss="modal">Close*/
/*                                                                                                                 </button>*/
/*                                                                                                             </div>*/
/*                                                                                                         </div>*/
/*                                                                                                     </div>*/
/*                                                                                                 </div>*/
/*                                                                                             </div>*/
/*                                                                                             {% set d = d + 1 %}*/
/*                                                                                             {% set b = b + 1 %}*/
/*                                                                                         {% endfor %}*/
/*                                                                                     </div>*/
/*                                                                                 </section>*/
/*                                         #}*/
/* */
/* */
/* */
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         {% endif %}*/
/*                         {% if count_carousel > 0 %}*/
/*                             <div class="carousel-item">*/
/*                                 <img class="{{ name_slide }}" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Second slide">*/
/*                                 <div class="container">*/
/*                                     <div class="carousel-caption">*/
/*                                         <h1>{{ y.name }}</h1>*/
/*                                         <p>{{ y.description }}</p>*/
/*                                         <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         {% endif %}*/
/*                         {% set count_carousel = count_carousel + 1 %}*/
/*                     {% endfor %}*/
/*                 </div>*/
/*                 <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">*/
/*                     <span class="icon-prev" aria-hidden="true"></span>*/
/*                     <span class="sr-only">Previous</span>*/
/*                 </a>*/
/*                 <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">*/
/*                     <span class="icon-next" aria-hidden="true"></span>*/
/*                     <span class="sr-only">Next</span>*/
/*                 </a>*/
/* */
/* */
/* */
/* */
/*                 {#*/
/*                                 <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">*/
/*                                     <span class="icon-prev" aria-hidden="true"></span>*/
/*                                     <span class="sr-only">Previous</span>*/
/*                                 </a>*/
/*                                 <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">*/
/*                                     <span class="icon-next" aria-hidden="true"></span>*/
/*                                     <span class="sr-only">Next</span>*/
/*                                 </a>*/
/*                 #}*/
/* */
/*             </div>*/
/*         </div>*/
/*         <!-- /.carousel -->*/
/* */
/* */
/*         <div class="container">*/
/*             <section class="row">*/
/*                 {% set b = 1 %}*/
/*                 {% set d = 0 %}*/
/*                 {% for y in product %}*/
/*                     <div class="col-lg-4">*/
/*                         <div class="thumbnail">*/
/*                             <div class="caption">*/
/*                                 <div class="test">*/
/*                                     <h3>{{ y.name }}</h3>*/
/*                                     <p>{{ small_description[d] }}</p>*/
/*                                     {% set c = 'myModal'  ~ b %}*/
/*                                     <button type="button" class="btn btn-primary    " data-toggle="modal"*/
/*                                             data-target="#{{ c }}">*/
/*                                         lire plus*/
/*                                     </button>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <!-- Modal -->*/
/*                     <div class="modal fade" id="{{ c }}" tabindex="-1" role="dialog"*/
/*                          aria-labelledby="myModalLabel">*/
/*                         <div class="modal-dialog" role="document">*/
/*                             <div class="modal-content">*/
/*                                 <div class="modal-header">*/
/*                                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">*/
/*                                         <span aria-hidden="true">&times;</span></button>*/
/*                                     <h4 class="modal-title" id="myModalLabel">{{ y.name }}</h4>*/
/*                                 </div>*/
/*                                 <div class="modal-body">*/
/*                                     {{ y.description }}*/
/*                                 </div>*/
/*                                 <div class="modal-footer">*/
/*                                     <button type="button" class="btn btn-default" data-dismiss="modal">Fermer*/
/*                                     </button>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     {% set d = d + 1 %}*/
/*                     {% set b = b + 1 %}*/
/*                 {% endfor %}*/
/*             </section>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
