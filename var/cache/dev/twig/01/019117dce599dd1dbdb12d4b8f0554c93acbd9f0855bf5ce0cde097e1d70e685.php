<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_f973d0cfd4374b3240499204ca8542e36d0aadcb61949a62716f80061c383651 extends Twig_Template
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
        $__internal_fffde9f1c6b2df36e5549749ab6bc70ee48cd5f84818416111bda61763f5555a = $this->env->getExtension("native_profiler");
        $__internal_fffde9f1c6b2df36e5549749ab6bc70ee48cd5f84818416111bda61763f5555a->enter($__internal_fffde9f1c6b2df36e5549749ab6bc70ee48cd5f84818416111bda61763f5555a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fffde9f1c6b2df36e5549749ab6bc70ee48cd5f84818416111bda61763f5555a->leave($__internal_fffde9f1c6b2df36e5549749ab6bc70ee48cd5f84818416111bda61763f5555a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f9c5d2b9f55751ab32b02019f2df65f13008bef943551774885854553ec632fe = $this->env->getExtension("native_profiler");
        $__internal_f9c5d2b9f55751ab32b02019f2df65f13008bef943551774885854553ec632fe->enter($__internal_f9c5d2b9f55751ab32b02019f2df65f13008bef943551774885854553ec632fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f9c5d2b9f55751ab32b02019f2df65f13008bef943551774885854553ec632fe->leave($__internal_f9c5d2b9f55751ab32b02019f2df65f13008bef943551774885854553ec632fe_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ca51c334a29c0b6c58a1aa02192c8ea70f53f80b840606edb3df3b10d202ed01 = $this->env->getExtension("native_profiler");
        $__internal_ca51c334a29c0b6c58a1aa02192c8ea70f53f80b840606edb3df3b10d202ed01->enter($__internal_ca51c334a29c0b6c58a1aa02192c8ea70f53f80b840606edb3df3b10d202ed01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_ca51c334a29c0b6c58a1aa02192c8ea70f53f80b840606edb3df3b10d202ed01->leave($__internal_ca51c334a29c0b6c58a1aa02192c8ea70f53f80b840606edb3df3b10d202ed01_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_300c0ba28a60f20462cc1222991e8d45cf093cdc67b21619663c9f413b6873bd = $this->env->getExtension("native_profiler");
        $__internal_300c0ba28a60f20462cc1222991e8d45cf093cdc67b21619663c9f413b6873bd->enter($__internal_300c0ba28a60f20462cc1222991e8d45cf093cdc67b21619663c9f413b6873bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_300c0ba28a60f20462cc1222991e8d45cf093cdc67b21619663c9f413b6873bd->leave($__internal_300c0ba28a60f20462cc1222991e8d45cf093cdc67b21619663c9f413b6873bd_prof);

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
