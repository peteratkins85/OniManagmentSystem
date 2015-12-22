<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_5a4d8dcbb31d00a8c302c912e4f84cbbf3835ff76780a4ce98dd5175afc42b94 extends Twig_Template
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
        $__internal_3cd3cfa6dfa155949c2bd7bb3d819f2ca7f2ac7e299e9a4935b03756daff7195 = $this->env->getExtension("native_profiler");
        $__internal_3cd3cfa6dfa155949c2bd7bb3d819f2ca7f2ac7e299e9a4935b03756daff7195->enter($__internal_3cd3cfa6dfa155949c2bd7bb3d819f2ca7f2ac7e299e9a4935b03756daff7195_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3cd3cfa6dfa155949c2bd7bb3d819f2ca7f2ac7e299e9a4935b03756daff7195->leave($__internal_3cd3cfa6dfa155949c2bd7bb3d819f2ca7f2ac7e299e9a4935b03756daff7195_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e266a6be84ae331f00a2f95f0e215d6747f3080d2700f29c00db223c631954c8 = $this->env->getExtension("native_profiler");
        $__internal_e266a6be84ae331f00a2f95f0e215d6747f3080d2700f29c00db223c631954c8->enter($__internal_e266a6be84ae331f00a2f95f0e215d6747f3080d2700f29c00db223c631954c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e266a6be84ae331f00a2f95f0e215d6747f3080d2700f29c00db223c631954c8->leave($__internal_e266a6be84ae331f00a2f95f0e215d6747f3080d2700f29c00db223c631954c8_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9068dc0b2d646596ef1a574fd95a7edd73487653cd00beeee494fe3fe5e90cbe = $this->env->getExtension("native_profiler");
        $__internal_9068dc0b2d646596ef1a574fd95a7edd73487653cd00beeee494fe3fe5e90cbe->enter($__internal_9068dc0b2d646596ef1a574fd95a7edd73487653cd00beeee494fe3fe5e90cbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9068dc0b2d646596ef1a574fd95a7edd73487653cd00beeee494fe3fe5e90cbe->leave($__internal_9068dc0b2d646596ef1a574fd95a7edd73487653cd00beeee494fe3fe5e90cbe_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5b95f3646a350c842aab0d2f267c0de29fee4a9f8a86f20afba027ee3926092a = $this->env->getExtension("native_profiler");
        $__internal_5b95f3646a350c842aab0d2f267c0de29fee4a9f8a86f20afba027ee3926092a->enter($__internal_5b95f3646a350c842aab0d2f267c0de29fee4a9f8a86f20afba027ee3926092a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_5b95f3646a350c842aab0d2f267c0de29fee4a9f8a86f20afba027ee3926092a->leave($__internal_5b95f3646a350c842aab0d2f267c0de29fee4a9f8a86f20afba027ee3926092a_prof);

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
