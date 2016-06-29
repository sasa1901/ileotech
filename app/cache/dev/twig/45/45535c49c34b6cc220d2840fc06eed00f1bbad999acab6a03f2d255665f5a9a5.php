<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_e94c64a3b5b5f96b0e0e5438e207594ef274c361fdaf31b1a4dea12664df7fa3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_15ab47d429cca5e47bb47ef6f552cc6916b7ab23711cbf5020a97f4abb310e8c = $this->env->getExtension("native_profiler");
        $__internal_15ab47d429cca5e47bb47ef6f552cc6916b7ab23711cbf5020a97f4abb310e8c->enter($__internal_15ab47d429cca5e47bb47ef6f552cc6916b7ab23711cbf5020a97f4abb310e8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_15ab47d429cca5e47bb47ef6f552cc6916b7ab23711cbf5020a97f4abb310e8c->leave($__internal_15ab47d429cca5e47bb47ef6f552cc6916b7ab23711cbf5020a97f4abb310e8c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_cc98ed603e393fa4d2a65522ac129c9f900f160922bd3aff6c209263618d0164 = $this->env->getExtension("native_profiler");
        $__internal_cc98ed603e393fa4d2a65522ac129c9f900f160922bd3aff6c209263618d0164->enter($__internal_cc98ed603e393fa4d2a65522ac129c9f900f160922bd3aff6c209263618d0164_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_cc98ed603e393fa4d2a65522ac129c9f900f160922bd3aff6c209263618d0164->leave($__internal_cc98ed603e393fa4d2a65522ac129c9f900f160922bd3aff6c209263618d0164_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3176f5191e9ef589c3468c8baed158c0fecb454fc7c29eff758622000154c76f = $this->env->getExtension("native_profiler");
        $__internal_3176f5191e9ef589c3468c8baed158c0fecb454fc7c29eff758622000154c76f->enter($__internal_3176f5191e9ef589c3468c8baed158c0fecb454fc7c29eff758622000154c76f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_3176f5191e9ef589c3468c8baed158c0fecb454fc7c29eff758622000154c76f->leave($__internal_3176f5191e9ef589c3468c8baed158c0fecb454fc7c29eff758622000154c76f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8c94cfc722e89346b8258b4e5eb2414617a1a1fb24d9df386f18f13ff7abee10 = $this->env->getExtension("native_profiler");
        $__internal_8c94cfc722e89346b8258b4e5eb2414617a1a1fb24d9df386f18f13ff7abee10->enter($__internal_8c94cfc722e89346b8258b4e5eb2414617a1a1fb24d9df386f18f13ff7abee10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_8c94cfc722e89346b8258b4e5eb2414617a1a1fb24d9df386f18f13ff7abee10->leave($__internal_8c94cfc722e89346b8258b4e5eb2414617a1a1fb24d9df386f18f13ff7abee10_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
