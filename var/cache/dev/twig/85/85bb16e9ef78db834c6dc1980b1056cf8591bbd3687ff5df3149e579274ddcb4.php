<?php

/* cms/base.html.twig */
class __TwigTemplate_9b74cfb08c188a808f63096b0a8f68bdf6e4f5448cc04274e7653d8cbf3c3a45 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'bodyClass' => array($this, 'block_bodyClass'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_129fcac582d09dacddd72d0a41cd7b7cbd323d1b2485f25456f8078b1b2a8de3 = $this->env->getExtension("native_profiler");
        $__internal_129fcac582d09dacddd72d0a41cd7b7cbd323d1b2485f25456f8078b1b2a8de3->enter($__internal_129fcac582d09dacddd72d0a41cd7b7cbd323d1b2485f25456f8078b1b2a8de3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "cms/base.html.twig"));

        // line 2
        echo "<!DOCTYPE html>
<html>
    <head>
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <meta content='text/html;charset=utf-8' http-equiv='content-type'>
        <meta content='Flat administration template for Twitter Bootstrap.' name='description'>
        <link rel=\"shortcut icon\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        ";
        // line 10
        echo twig_include($this->env, $context, "cms/head.html.twig");
        echo "
    </head>
    <body class=\"contrast-dark ";
        // line 12
        $this->displayBlock('bodyClass', $context, $blocks);
        echo "\">
    ";
        // line 13
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 14
            echo "        ";
            echo twig_include($this->env, $context, "cms/header.html.twig");
            echo "
    ";
        }
        // line 16
        echo "    <div id='wrapper'>
        ";
        // line 17
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 18
            echo "            ";
            echo twig_include($this->env, $context, "cms/navigation.html.twig");
            echo "
        ";
        }
        // line 20
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 22
        echo "    </div>
        ";
        // line 23
        $this->displayBlock('javascripts', $context, $blocks);
        // line 24
        echo "        ";
        echo twig_include($this->env, $context, "cms/javascript-include.html.twig");
        echo "
    </body>
</html>";
        
        $__internal_129fcac582d09dacddd72d0a41cd7b7cbd323d1b2485f25456f8078b1b2a8de3->leave($__internal_129fcac582d09dacddd72d0a41cd7b7cbd323d1b2485f25456f8078b1b2a8de3_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_3100c5fab5e57a5f648f4d3b486b32423ab384f21723a37f97d52b776f2ec736 = $this->env->getExtension("native_profiler");
        $__internal_3100c5fab5e57a5f648f4d3b486b32423ab384f21723a37f97d52b776f2ec736->enter($__internal_3100c5fab5e57a5f648f4d3b486b32423ab384f21723a37f97d52b776f2ec736_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_3100c5fab5e57a5f648f4d3b486b32423ab384f21723a37f97d52b776f2ec736->leave($__internal_3100c5fab5e57a5f648f4d3b486b32423ab384f21723a37f97d52b776f2ec736_prof);

    }

    // line 12
    public function block_bodyClass($context, array $blocks = array())
    {
        $__internal_be51a0d48e105472539a276348e65d050c8eb454d37d4ed213a5ce527baf8960 = $this->env->getExtension("native_profiler");
        $__internal_be51a0d48e105472539a276348e65d050c8eb454d37d4ed213a5ce527baf8960->enter($__internal_be51a0d48e105472539a276348e65d050c8eb454d37d4ed213a5ce527baf8960_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyClass"));

        
        $__internal_be51a0d48e105472539a276348e65d050c8eb454d37d4ed213a5ce527baf8960->leave($__internal_be51a0d48e105472539a276348e65d050c8eb454d37d4ed213a5ce527baf8960_prof);

    }

    // line 20
    public function block_body($context, array $blocks = array())
    {
        $__internal_1f9a1e89bb3d91956e65725d69ab2fffa6092c1f13b2dea7bb4d9ba075b999cb = $this->env->getExtension("native_profiler");
        $__internal_1f9a1e89bb3d91956e65725d69ab2fffa6092c1f13b2dea7bb4d9ba075b999cb->enter($__internal_1f9a1e89bb3d91956e65725d69ab2fffa6092c1f13b2dea7bb4d9ba075b999cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 21
        echo "        ";
        
        $__internal_1f9a1e89bb3d91956e65725d69ab2fffa6092c1f13b2dea7bb4d9ba075b999cb->leave($__internal_1f9a1e89bb3d91956e65725d69ab2fffa6092c1f13b2dea7bb4d9ba075b999cb_prof);

    }

    // line 23
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_283350bc759231462777083a8e22581371d47f7977157d1ae89d78a4b3c856a4 = $this->env->getExtension("native_profiler");
        $__internal_283350bc759231462777083a8e22581371d47f7977157d1ae89d78a4b3c856a4->enter($__internal_283350bc759231462777083a8e22581371d47f7977157d1ae89d78a4b3c856a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_283350bc759231462777083a8e22581371d47f7977157d1ae89d78a4b3c856a4->leave($__internal_283350bc759231462777083a8e22581371d47f7977157d1ae89d78a4b3c856a4_prof);

    }

    public function getTemplateName()
    {
        return "cms/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 23,  117 => 21,  111 => 20,  100 => 12,  89 => 5,  78 => 24,  76 => 23,  73 => 22,  70 => 20,  64 => 18,  62 => 17,  59 => 16,  53 => 14,  51 => 13,  47 => 12,  42 => 10,  38 => 9,  31 => 5,  26 => 2,);
    }
}
/* {# app/Resources/views/base.html.twig #}*/
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <title>{% block title %}{% endblock %}</title>*/
/*         <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>*/
/*         <meta content='text/html;charset=utf-8' http-equiv='content-type'>*/
/*         <meta content='Flat administration template for Twitter Bootstrap.' name='description'>*/
/*         <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" />*/
/*         {{ include('cms/head.html.twig') }}*/
/*     </head>*/
/*     <body class="contrast-dark {% block bodyClass %}{% endblock %}">*/
/*     {% if is_granted('IS_AUTHENTICATED_FULLY') %}*/
/*         {{ include('cms/header.html.twig') }}*/
/*     {% endif %}*/
/*     <div id='wrapper'>*/
/*         {% if is_granted('IS_AUTHENTICATED_FULLY') %}*/
/*             {{ include('cms/navigation.html.twig') }}*/
/*         {% endif %}*/
/*         {% block body %}*/
/*         {% endblock %}*/
/*     </div>*/
/*         {% block javascripts %}{% endblock %}*/
/*         {{ include('cms/javascript-include.html.twig') }}*/
/*     </body>*/
/* </html>*/
