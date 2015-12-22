<?php

/* UserManagerBundle:Security:login.html.twig */
class __TwigTemplate_89b8ec5e94713969dad4f0c1b7af3490b133e4aa55779afda4d1b74a06acefdc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("cms/base.html.twig", "UserManagerBundle:Security:login.html.twig", 2);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'title' => array($this, 'block_title'),
            'bodyClass' => array($this, 'block_bodyClass'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "cms/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a5196337bb2c8196604d8cb91fa916686075ce2dcaa3aa7b5dc3224d02c5aeb1 = $this->env->getExtension("native_profiler");
        $__internal_a5196337bb2c8196604d8cb91fa916686075ce2dcaa3aa7b5dc3224d02c5aeb1->enter($__internal_a5196337bb2c8196604d8cb91fa916686075ce2dcaa3aa7b5dc3224d02c5aeb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserManagerBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a5196337bb2c8196604d8cb91fa916686075ce2dcaa3aa7b5dc3224d02c5aeb1->leave($__internal_a5196337bb2c8196604d8cb91fa916686075ce2dcaa3aa7b5dc3224d02c5aeb1_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ad25c0d91c0bfc090dd5eab3deab2974c019847fed913d9507e0ac1ab99818fe = $this->env->getExtension("native_profiler");
        $__internal_ad25c0d91c0bfc090dd5eab3deab2974c019847fed913d9507e0ac1ab99818fe->enter($__internal_ad25c0d91c0bfc090dd5eab3deab2974c019847fed913d9507e0ac1ab99818fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo " ";
        
        $__internal_ad25c0d91c0bfc090dd5eab3deab2974c019847fed913d9507e0ac1ab99818fe->leave($__internal_ad25c0d91c0bfc090dd5eab3deab2974c019847fed913d9507e0ac1ab99818fe_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_5bb986d0bafb6bdf01c55f9de7dae20beffe48d3d9481d86b0608f606ade106d = $this->env->getExtension("native_profiler");
        $__internal_5bb986d0bafb6bdf01c55f9de7dae20beffe48d3d9481d86b0608f606ade106d->enter($__internal_5bb986d0bafb6bdf01c55f9de7dae20beffe48d3d9481d86b0608f606ade106d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "CMS Login";
        
        $__internal_5bb986d0bafb6bdf01c55f9de7dae20beffe48d3d9481d86b0608f606ade106d->leave($__internal_5bb986d0bafb6bdf01c55f9de7dae20beffe48d3d9481d86b0608f606ade106d_prof);

    }

    // line 6
    public function block_bodyClass($context, array $blocks = array())
    {
        $__internal_d4cb2af9cb9fc9bdd491eab15a80de2bed31fbf60a2d85d3f65ec21da6679f22 = $this->env->getExtension("native_profiler");
        $__internal_d4cb2af9cb9fc9bdd491eab15a80de2bed31fbf60a2d85d3f65ec21da6679f22->enter($__internal_d4cb2af9cb9fc9bdd491eab15a80de2bed31fbf60a2d85d3f65ec21da6679f22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyClass"));

        echo " sign-in contrast-background ";
        
        $__internal_d4cb2af9cb9fc9bdd491eab15a80de2bed31fbf60a2d85d3f65ec21da6679f22->leave($__internal_d4cb2af9cb9fc9bdd491eab15a80de2bed31fbf60a2d85d3f65ec21da6679f22_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_bdf80d2b148dd06d9f7a247889e18037d6bb6c8217dea0faaccb545f7f08846c = $this->env->getExtension("native_profiler");
        $__internal_bdf80d2b148dd06d9f7a247889e18037d6bb6c8217dea0faaccb545f7f08846c->enter($__internal_bdf80d2b148dd06d9f7a247889e18037d6bb6c8217dea0faaccb545f7f08846c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "     <div id='wrapper'>
         <div class='application'>
             <div class='application-content'>
                 <a href='sign_in.html'>
                     <div class='icon-heart'></div>
                     <span>Oni System</span>
                 </a>
             </div>
         </div>
         <div class='controls'>
             <div class='caret'></div>
             <div class='form-wrapper'>
                 <h1 class='text-center'>Sign in</h1>
                 <form action=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("cms_login_check");
        echo "\" method=\"post\">
                     <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
                     <div class='row-fluid'>
                         <div class='span12 icon-over-input'>
                             <input value=\"";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" placeholder=\"Username\" class=\"span12\" name=\"_username\" type=\"text\" />
                             <i class='icon-user muted'></i>
                         </div>
                     </div>
                     <div class='row-fluid'>
                         <div class='span12 icon-over-input'>
                             <input value=\"\" placeholder=\"Password\" class=\"span12\" name=\"_password\" type=\"password\" />
                             <i class='icon-lock muted'></i>
                         </div>
                     </div>
                     <label class='checkbox' for='remember_me'>
                         <input id='remember_me' name='_remember_me' type='checkbox' value='1'>
                         Remember me
                     </label>
                     <input type=\"submit\" class=\"btn btn-block\" id=\"_submit\" name=\"_submit\" value=\"Sign in\" />
                 </form>
                 ";
        // line 43
        echo "                     ";
        // line 44
        echo "                     ";
        // line 45
        echo "                 ";
        // line 46
        echo "             </div>
         </div>
         ";
        // line 49
        echo "             ";
        // line 50
        echo "                 ";
        // line 51
        echo "                 ";
        // line 52
        echo "                 ";
        // line 53
        echo "             ";
        // line 54
        echo "         ";
        // line 55
        echo "     </div>



        ";
        // line 60
        echo "            ";
        // line 61
        echo "                ";
        // line 62
        echo "            ";
        // line 63
        echo "            ";
        // line 64
        echo "                ";
        // line 65
        echo "                    ";
        // line 66
        echo "                ";
        // line 67
        echo "                ";
        // line 68
        echo "                    ";
        // line 69
        echo "                    ";
        // line 70
        echo "                        ";
        // line 71
        echo "                        ";
        // line 72
        echo "                    ";
        // line 73
        echo "                    ";
        // line 74
        echo "                        ";
        // line 75
        echo "                        ";
        // line 76
        echo "                    ";
        // line 77
        echo "                    ";
        // line 78
        echo "                        ";
        // line 79
        echo "                            ";
        // line 80
        echo "                            ";
        // line 81
        echo "                        ";
        // line 82
        echo "                    ";
        // line 83
        echo "                    ";
        // line 84
        echo "                        ";
        // line 85
        echo "                    ";
        // line 86
        echo "                ";
        // line 87
        echo "            ";
        // line 88
        echo "        ";
        // line 89
        echo " ";
        
        $__internal_bdf80d2b148dd06d9f7a247889e18037d6bb6c8217dea0faaccb545f7f08846c->leave($__internal_bdf80d2b148dd06d9f7a247889e18037d6bb6c8217dea0faaccb545f7f08846c_prof);

    }

    public function getTemplateName()
    {
        return "UserManagerBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 89,  208 => 88,  206 => 87,  204 => 86,  202 => 85,  200 => 84,  198 => 83,  196 => 82,  194 => 81,  192 => 80,  190 => 79,  188 => 78,  186 => 77,  184 => 76,  182 => 75,  180 => 74,  178 => 73,  176 => 72,  174 => 71,  172 => 70,  170 => 69,  168 => 68,  166 => 67,  164 => 66,  162 => 65,  160 => 64,  158 => 63,  156 => 62,  154 => 61,  152 => 60,  146 => 55,  144 => 54,  142 => 53,  140 => 52,  138 => 51,  136 => 50,  134 => 49,  130 => 46,  128 => 45,  126 => 44,  124 => 43,  105 => 26,  99 => 23,  95 => 22,  80 => 9,  74 => 8,  62 => 6,  50 => 5,  43 => 4,  37 => 3,  11 => 2,);
    }
}
/*  {# src/Atk/CmsBundle/Resources/views/security/login.html.twig #}*/
/*  {% extends 'cms/base.html.twig' %}*/
/*  {% block stylesheets %}*/
/*  {% endblock %}*/
/*  {% block title %}CMS Login{% endblock %}*/
/*  {% block bodyClass %} sign-in contrast-background {% endblock %}*/
/*  {#{% trans_default_domain 'FOSUserBundle' %}#}*/
/*  {% block body %}*/
/*      <div id='wrapper'>*/
/*          <div class='application'>*/
/*              <div class='application-content'>*/
/*                  <a href='sign_in.html'>*/
/*                      <div class='icon-heart'></div>*/
/*                      <span>Oni System</span>*/
/*                  </a>*/
/*              </div>*/
/*          </div>*/
/*          <div class='controls'>*/
/*              <div class='caret'></div>*/
/*              <div class='form-wrapper'>*/
/*                  <h1 class='text-center'>Sign in</h1>*/
/*                  <form action="{{ path("cms_login_check") }}" method="post">*/
/*                      <input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/*                      <div class='row-fluid'>*/
/*                          <div class='span12 icon-over-input'>*/
/*                              <input value="{{ last_username }}" placeholder="Username" class="span12" name="_username" type="text" />*/
/*                              <i class='icon-user muted'></i>*/
/*                          </div>*/
/*                      </div>*/
/*                      <div class='row-fluid'>*/
/*                          <div class='span12 icon-over-input'>*/
/*                              <input value="" placeholder="Password" class="span12" name="_password" type="password" />*/
/*                              <i class='icon-lock muted'></i>*/
/*                          </div>*/
/*                      </div>*/
/*                      <label class='checkbox' for='remember_me'>*/
/*                          <input id='remember_me' name='_remember_me' type='checkbox' value='1'>*/
/*                          Remember me*/
/*                      </label>*/
/*                      <input type="submit" class="btn btn-block" id="_submit" name="_submit" value="Sign in" />*/
/*                  </form>*/
/*                  {#<div class='text-center'>#}*/
/*                      {#<hr class='hr-normal'>#}*/
/*                      {#<a href='forgot_password.html'>Forgot your password?</a>#}*/
/*                  {#</div>#}*/
/*              </div>*/
/*          </div>*/
/*          {#<div class='login-action text-center'>#}*/
/*              {#<a href='sign_up.html'>#}*/
/*                  {#<i class='icon-user'></i>#}*/
/*                  {#New to Flatty?#}*/
/*                  {#<strong>Sign up</strong>#}*/
/*              {#</a>#}*/
/*          {#</div>#}*/
/*      </div>*/
/* */
/* */
/* */
/*         {#<div class="Box">#}*/
/*             {#<div class="logo">#}*/
/*                 {#Atk Cms#}*/
/*             {#</div>#}*/
/*             {#<div class="center-block cent">#}*/
/*                 {#{% if error %}#}*/
/*                     {#<div>{{ error|trans }}</div>#}*/
/*                 {#{% endif %}#}*/
/*                 {#<form action="{{ path("cms_login_check") }}" method="post">#}*/
/*                     {#<input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />#}*/
/*                     {#<div class="form-group">#}*/
/*                         {#<label for="username">Username</label>#}*/
/*                         {#<input type="text" id="username" name="_username" class="form-control login" value="{{ last_username }}" required="required" />#}*/
/*                     {#</div>#}*/
/*                     {#<div class="form-group">#}*/
/*                         {#<label for="password">Password</label>#}*/
/*                         {#<input type="password" id="password" class="form-control login" name="_password" required="required" />#}*/
/*                     {#</div>#}*/
/*                     {#<div class="form-group">#}*/
/*                         {#<div class="checkbox">#}*/
/*                             {#<input type="checkbox" id="remember_me" name="_remember_me" value="on" />#}*/
/*                             {#<label for="remember_me">Remember Me</label>#}*/
/*                         {#</div>#}*/
/*                     {#</div>#}*/
/*                     {#<div class="form-group">#}*/
/*                         {#<input type="submit" class="btn btn-default" id="_submit" name="_submit" value="Login" />#}*/
/*                     {#</div>#}*/
/*                 {#</form><!--FORM END-->#}*/
/*             {#</div><!--center-block END-->#}*/
/*         {#</div><!--Box END-->#}*/
/*  {% endblock %}*/
