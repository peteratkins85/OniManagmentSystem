<?php

/* ProductManagerBundle:ProductCategory:add.html.twig */
class __TwigTemplate_eb70467353802cab1ee1c80b73b71f16623ecb5b5784c7b9053fea233a8aca65 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("cms/base.html.twig", "ProductManagerBundle:ProductCategory:add.html.twig", 2);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "cms/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6c80011a677a42875d25a56ce99777d10f8906c96746736d1235ff3efb0915b7 = $this->env->getExtension("native_profiler");
        $__internal_6c80011a677a42875d25a56ce99777d10f8906c96746736d1235ff3efb0915b7->enter($__internal_6c80011a677a42875d25a56ce99777d10f8906c96746736d1235ff3efb0915b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProductManagerBundle:ProductCategory:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6c80011a677a42875d25a56ce99777d10f8906c96746736d1235ff3efb0915b7->leave($__internal_6c80011a677a42875d25a56ce99777d10f8906c96746736d1235ff3efb0915b7_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4c099af6c10948a6b0a6fdec67eec8650d13f67e86bade18d30449b4ab60f448 = $this->env->getExtension("native_profiler");
        $__internal_4c099af6c10948a6b0a6fdec67eec8650d13f67e86bade18d30449b4ab60f448->enter($__internal_4c099af6c10948a6b0a6fdec67eec8650d13f67e86bade18d30449b4ab60f448_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_4c099af6c10948a6b0a6fdec67eec8650d13f67e86bade18d30449b4ab60f448->leave($__internal_4c099af6c10948a6b0a6fdec67eec8650d13f67e86bade18d30449b4ab60f448_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_035ddee9d7766fe8696b4f32fc8ac494802e13588b1bb9f7f626e0c3beffdb48 = $this->env->getExtension("native_profiler");
        $__internal_035ddee9d7766fe8696b4f32fc8ac494802e13588b1bb9f7f626e0c3beffdb48->enter($__internal_035ddee9d7766fe8696b4f32fc8ac494802e13588b1bb9f7f626e0c3beffdb48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <section id='content'>
        <div class='container-fluid'>
            <div class='row-fluid' id='content-wrapper'>
                <div class='span12'>
                    ";
        // line 10
        $this->loadTemplate("ProductManagerBundle:ProductCategory:add.html.twig", "ProductManagerBundle:ProductCategory:add.html.twig", 10, "2138909729")->display($context);
        // line 13
        echo "                    <div class=\"row-fluid\">
                        <div class=\"span12 box\">
                            <div class=\"box-header blue-background\">
                                <div class=\"title\">
                                    <div class=\"icon-edit\"></div>
                                    Product Info
                                </div>
                                <div class=\"actions\">
                                    ";
        // line 22
        echo "                                    ";
        // line 23
        echo "
                                    <a id=\"product-form\" class=\"btn box-collapse btn-mini btn-link\" href=\"#\"><i></i>
                                    </a>
                                </div>
                            </div>
                            <div class=\"box-content\">
                                <form class=\"form form-horizontal\" style=\"margin-bottom: 0;\" method=\"post\" action=\"#\" accept-charset=\"UTF-8\">
                                    <input name=\"authenticity_token\" type=\"hidden\">
                                    <div class=\"control-group\">
                                        <label class=\"control-label\" for=\"inputText1\">Text field</label>
                                        <div class=\"controls\">
                                            <input id=\"inputText1\" placeholder=\"Text field\" type=\"text\">
                                        </div>
                                    </div>
                                    <div class=\"control-group\">
                                        <label class=\"control-label\" for=\"inputPassword4\">Password field</label>
                                        <div class=\"controls\">
                                            <input id=\"inputPassword4\" placeholder=\"Password field\" type=\"password\" value=\"Top secret!\">
                                        </div>
                                    </div>
                                    <div class=\"control-group\">
                                        <label class=\"control-label\" for=\"inputTextArea1\">Textarea</label>
                                        <div class=\"controls\">
                                            <textarea id=\"inputTextArea1\" placeholder=\"Textarea\" rows=\"3\"></textarea>
                                        </div>
                                    </div>
                                    <div class=\"control-group\">
                                        <label class=\"control-label\">Uneditable input</label>
                                        <div class=\"controls\">
                                            <span class=\"input-xlarge uneditable-input\">Some value here</span>
                                        </div>
                                    </div>
                                    <div class=\"control-group\">
                                        <label class=\"control-label\" for=\"disabledInput1\">Disabled input</label>
                                        <div class=\"controls\">
                                            <input class=\"input-xlarge\" disabled=\"\" id=\"disabledInput1\" placeholder=\"Disabled input here...\" type=\"text\">
                                        </div>
                                    </div>
                                    <hr class=\"hr-normal\">
                                    <div class=\"control-group\">
                                        <label class=\"control-label\">Checkboxes</label>
                                        <div class=\"controls\">
                                            <label class=\"checkbox\">
                                                <input type=\"checkbox\" value=\"\">
                                                est
                                            </label>
                                            <label class=\"checkbox\">
                                                <input type=\"checkbox\" value=\"\">
                                                et et amet omnis expedita necessitatibus et
                                            </label>
                                            <label class=\"checkbox\">
                                                <input type=\"checkbox\" value=\"\">
                                                distinctio sapiente tenetur inventore aut vel non qui nemo
                                            </label>
                                        </div>
                                    </div>
                                    <div class=\"control-group\">
                                        <label class=\"control-label\">Inline checkboxes</label>
                                        <div class=\"controls\">
                                            <label class=\"checkbox inline\">
                                                <input type=\"checkbox\" value=\"\">
                                                Tenetur
                                            </label>
                                            <label class=\"checkbox inline\">
                                                <input type=\"checkbox\" value=\"\">
                                                Illo
                                            </label>
                                            <label class=\"checkbox inline\">
                                                <input type=\"checkbox\" value=\"\">
                                                Earum
                                            </label>
                                        </div>
                                    </div>
                                    <hr class=\"hr-normal\">
                                    <div class=\"control-group\">
                                        <label class=\"control-label\">Radios</label>
                                        <div class=\"controls\">
                                            <label class=\"radio\">
                                                <input type=\"radio\" value=\"\">
                                                sed doloremque ut in eos aliquid voluptates
                                            </label>
                                            <label class=\"radio\">
                                                <input type=\"radio\" value=\"\">
                                                delectus vel et inventore quia corrupti fuga
                                            </label>
                                            <label class=\"radio\">
                                                <input type=\"radio\" value=\"\">
                                                dolore maxime nulla dolorum tempore occaecati
                                            </label>
                                        </div>
                                    </div>
                                    <div class=\"control-group\">
                                        <label class=\"control-label\">Inline radios</label>
                                        <div class=\"controls\">
                                            <label class=\"radio inline\">
                                                <input type=\"radio\" value=\"\">
                                                Neque
                                            </label>
                                            <label class=\"radio inline\">
                                                <input type=\"radio\" value=\"\">
                                                Ut
                                            </label>
                                            <label class=\"radio inline\">
                                                <input type=\"radio\" value=\"\">
                                                Est
                                            </label>
                                        </div>
                                    </div>
                                    <hr class=\"hr-normal\">
                                    <div class=\"control-group\">
                                        <label class=\"control-label\" for=\"inputSelect\">Select</label>
                                        <div class=\"controls\">
                                            <select id=\"inputSelect\">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class=\"control-group\">
                                        <label class=\"control-label\" for=\"inputSelectMulti\">Multiple select</label>
                                        <div class=\"controls\">
                                            <select id=\"inputSelectMulti\" multiple=\"multiple\">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>
                                    </div>
                                    <hr class=\"hr-normal\">
                                    <div class=\"control-group warning\">
                                        <label class=\"control-label\" for=\"inputWarning\">Input with warning</label>
                                        <div class=\"controls\">
                                            <input id=\"inputWarning\" type=\"text\">
                                            <span class=\"help-inline\">Something may have gone wrong</span>
                                        </div>
                                    </div>
                                    <div class=\"control-group error\">
                                        <label class=\"control-label\" for=\"inputError\">Input with error</label>
                                        <div class=\"controls\">
                                            <input id=\"inputError\" type=\"text\">
                                            <span class=\"help-inline\">Please correct the error</span>
                                        </div>
                                    </div>
                                    <div class=\"control-group info\">
                                        <label class=\"control-label\" for=\"inputInfo\">Input with info</label>
                                        <div class=\"controls\">
                                            <input id=\"inputInfo\" type=\"text\">
                                            <span class=\"help-inline\">Username is already taken</span>
                                        </div>
                                    </div>
                                    <div class=\"control-group success\">
                                        <label class=\"control-label\" for=\"inputSuccess\">Input with success</label>
                                        <div class=\"controls\">
                                            <input id=\"inputSuccess\" type=\"text\">
                                            <span class=\"help-inline\">Woohoo!</span>
                                        </div>
                                    </div>
                                    <div class=\"form-actions\">
                                        <button class=\"btn btn-primary\" type=\"submit\">
                                            <i class=\"icon-save\"></i>
                                            Save
                                        </button>
                                        <button class=\"btn\" type=\"submit\">Cancel</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class=\"row\">
        <div class=\"col-md-12 bread-crum-bar\">

        </div>
    </div>
    <div class=\"row top-row-content\">
        <div class=\"col-md-6\">

        </div>
        <div class=\"col-md-6\" style=\"text-align: right\">
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-12 container\">
            <div >

                ";
        // line 218
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "

                ";
        // line 221
        echo "                    ";
        // line 222
        echo "                ";
        // line 223
        echo "
                ";
        // line 225
        echo "            </div>
        </div>
    </div>
";
        
        $__internal_035ddee9d7766fe8696b4f32fc8ac494802e13588b1bb9f7f626e0c3beffdb48->leave($__internal_035ddee9d7766fe8696b4f32fc8ac494802e13588b1bb9f7f626e0c3beffdb48_prof);

    }

    public function getTemplateName()
    {
        return "ProductManagerBundle:ProductCategory:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  281 => 225,  278 => 223,  276 => 222,  274 => 221,  269 => 218,  72 => 23,  70 => 22,  60 => 13,  58 => 10,  52 => 6,  46 => 5,  35 => 3,  11 => 2,);
    }
}


/* ProductManagerBundle:ProductCategory:add.html.twig */
class __TwigTemplate_eb70467353802cab1ee1c80b73b71f16623ecb5b5784c7b9053fea233a8aca65_2138909729 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 10
        $this->parent = $this->loadTemplate("cms/content/content-header.html.twig", "ProductManagerBundle:ProductCategory:add.html.twig", 10);
        $this->blocks = array(
            'contentTitle' => array($this, 'block_contentTitle'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "cms/content/content-header.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_600bfdd008bc2be4342db6218d94e7cdb8bd5134916e5d51fa9200a025fd1d45 = $this->env->getExtension("native_profiler");
        $__internal_600bfdd008bc2be4342db6218d94e7cdb8bd5134916e5d51fa9200a025fd1d45->enter($__internal_600bfdd008bc2be4342db6218d94e7cdb8bd5134916e5d51fa9200a025fd1d45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProductManagerBundle:ProductCategory:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_600bfdd008bc2be4342db6218d94e7cdb8bd5134916e5d51fa9200a025fd1d45->leave($__internal_600bfdd008bc2be4342db6218d94e7cdb8bd5134916e5d51fa9200a025fd1d45_prof);

    }

    // line 11
    public function block_contentTitle($context, array $blocks = array())
    {
        $__internal_8a3c5221e7ac6683a9a8cae6f17f646dbf45138dad08a15afd28ff0af4bd8421 = $this->env->getExtension("native_profiler");
        $__internal_8a3c5221e7ac6683a9a8cae6f17f646dbf45138dad08a15afd28ff0af4bd8421->enter($__internal_8a3c5221e7ac6683a9a8cae6f17f646dbf45138dad08a15afd28ff0af4bd8421_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentTitle"));

        echo " New Category ";
        
        $__internal_8a3c5221e7ac6683a9a8cae6f17f646dbf45138dad08a15afd28ff0af4bd8421->leave($__internal_8a3c5221e7ac6683a9a8cae6f17f646dbf45138dad08a15afd28ff0af4bd8421_prof);

    }

    public function getTemplateName()
    {
        return "ProductManagerBundle:ProductCategory:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  338 => 11,  315 => 10,  281 => 225,  278 => 223,  276 => 222,  274 => 221,  269 => 218,  72 => 23,  70 => 22,  60 => 13,  58 => 10,  52 => 6,  46 => 5,  35 => 3,  11 => 2,);
    }
}
/* {# src/Atk/CmsBundle/Resources/views/security/login.html.twig #}*/
/* {% extends 'cms/base.html.twig' %}*/
/* {% block stylesheets %}*/
/* {% endblock %}*/
/* {% block body %}*/
/*     <section id='content'>*/
/*         <div class='container-fluid'>*/
/*             <div class='row-fluid' id='content-wrapper'>*/
/*                 <div class='span12'>*/
/*                     {% embed 'cms/content/content-header.html.twig' %}*/
/*                         {% block contentTitle %} New Category {% endblock %}*/
/*                     {%  endembed %}*/
/*                     <div class="row-fluid">*/
/*                         <div class="span12 box">*/
/*                             <div class="box-header blue-background">*/
/*                                 <div class="title">*/
/*                                     <div class="icon-edit"></div>*/
/*                                     Product Info*/
/*                                 </div>*/
/*                                 <div class="actions">*/
/*                                     {#<a class="btn box-remove btn-mini btn-link" href="#"><i class="icon-remove"></i>#}*/
/*                                     {#</a>#}*/
/* */
/*                                     <a id="product-form" class="btn box-collapse btn-mini btn-link" href="#"><i></i>*/
/*                                     </a>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="box-content">*/
/*                                 <form class="form form-horizontal" style="margin-bottom: 0;" method="post" action="#" accept-charset="UTF-8">*/
/*                                     <input name="authenticity_token" type="hidden">*/
/*                                     <div class="control-group">*/
/*                                         <label class="control-label" for="inputText1">Text field</label>*/
/*                                         <div class="controls">*/
/*                                             <input id="inputText1" placeholder="Text field" type="text">*/
/*                                         </div>*/
/*                                     </div>*/
/*                                     <div class="control-group">*/
/*                                         <label class="control-label" for="inputPassword4">Password field</label>*/
/*                                         <div class="controls">*/
/*                                             <input id="inputPassword4" placeholder="Password field" type="password" value="Top secret!">*/
/*                                         </div>*/
/*                                     </div>*/
/*                                     <div class="control-group">*/
/*                                         <label class="control-label" for="inputTextArea1">Textarea</label>*/
/*                                         <div class="controls">*/
/*                                             <textarea id="inputTextArea1" placeholder="Textarea" rows="3"></textarea>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                     <div class="control-group">*/
/*                                         <label class="control-label">Uneditable input</label>*/
/*                                         <div class="controls">*/
/*                                             <span class="input-xlarge uneditable-input">Some value here</span>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                     <div class="control-group">*/
/*                                         <label class="control-label" for="disabledInput1">Disabled input</label>*/
/*                                         <div class="controls">*/
/*                                             <input class="input-xlarge" disabled="" id="disabledInput1" placeholder="Disabled input here..." type="text">*/
/*                                         </div>*/
/*                                     </div>*/
/*                                     <hr class="hr-normal">*/
/*                                     <div class="control-group">*/
/*                                         <label class="control-label">Checkboxes</label>*/
/*                                         <div class="controls">*/
/*                                             <label class="checkbox">*/
/*                                                 <input type="checkbox" value="">*/
/*                                                 est*/
/*                                             </label>*/
/*                                             <label class="checkbox">*/
/*                                                 <input type="checkbox" value="">*/
/*                                                 et et amet omnis expedita necessitatibus et*/
/*                                             </label>*/
/*                                             <label class="checkbox">*/
/*                                                 <input type="checkbox" value="">*/
/*                                                 distinctio sapiente tenetur inventore aut vel non qui nemo*/
/*                                             </label>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                     <div class="control-group">*/
/*                                         <label class="control-label">Inline checkboxes</label>*/
/*                                         <div class="controls">*/
/*                                             <label class="checkbox inline">*/
/*                                                 <input type="checkbox" value="">*/
/*                                                 Tenetur*/
/*                                             </label>*/
/*                                             <label class="checkbox inline">*/
/*                                                 <input type="checkbox" value="">*/
/*                                                 Illo*/
/*                                             </label>*/
/*                                             <label class="checkbox inline">*/
/*                                                 <input type="checkbox" value="">*/
/*                                                 Earum*/
/*                                             </label>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                     <hr class="hr-normal">*/
/*                                     <div class="control-group">*/
/*                                         <label class="control-label">Radios</label>*/
/*                                         <div class="controls">*/
/*                                             <label class="radio">*/
/*                                                 <input type="radio" value="">*/
/*                                                 sed doloremque ut in eos aliquid voluptates*/
/*                                             </label>*/
/*                                             <label class="radio">*/
/*                                                 <input type="radio" value="">*/
/*                                                 delectus vel et inventore quia corrupti fuga*/
/*                                             </label>*/
/*                                             <label class="radio">*/
/*                                                 <input type="radio" value="">*/
/*                                                 dolore maxime nulla dolorum tempore occaecati*/
/*                                             </label>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                     <div class="control-group">*/
/*                                         <label class="control-label">Inline radios</label>*/
/*                                         <div class="controls">*/
/*                                             <label class="radio inline">*/
/*                                                 <input type="radio" value="">*/
/*                                                 Neque*/
/*                                             </label>*/
/*                                             <label class="radio inline">*/
/*                                                 <input type="radio" value="">*/
/*                                                 Ut*/
/*                                             </label>*/
/*                                             <label class="radio inline">*/
/*                                                 <input type="radio" value="">*/
/*                                                 Est*/
/*                                             </label>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                     <hr class="hr-normal">*/
/*                                     <div class="control-group">*/
/*                                         <label class="control-label" for="inputSelect">Select</label>*/
/*                                         <div class="controls">*/
/*                                             <select id="inputSelect">*/
/*                                                 <option>1</option>*/
/*                                                 <option>2</option>*/
/*                                                 <option>3</option>*/
/*                                                 <option>4</option>*/
/*                                                 <option>5</option>*/
/*                                             </select>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                     <div class="control-group">*/
/*                                         <label class="control-label" for="inputSelectMulti">Multiple select</label>*/
/*                                         <div class="controls">*/
/*                                             <select id="inputSelectMulti" multiple="multiple">*/
/*                                                 <option>1</option>*/
/*                                                 <option>2</option>*/
/*                                                 <option>3</option>*/
/*                                                 <option>4</option>*/
/*                                                 <option>5</option>*/
/*                                             </select>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                     <hr class="hr-normal">*/
/*                                     <div class="control-group warning">*/
/*                                         <label class="control-label" for="inputWarning">Input with warning</label>*/
/*                                         <div class="controls">*/
/*                                             <input id="inputWarning" type="text">*/
/*                                             <span class="help-inline">Something may have gone wrong</span>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                     <div class="control-group error">*/
/*                                         <label class="control-label" for="inputError">Input with error</label>*/
/*                                         <div class="controls">*/
/*                                             <input id="inputError" type="text">*/
/*                                             <span class="help-inline">Please correct the error</span>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                     <div class="control-group info">*/
/*                                         <label class="control-label" for="inputInfo">Input with info</label>*/
/*                                         <div class="controls">*/
/*                                             <input id="inputInfo" type="text">*/
/*                                             <span class="help-inline">Username is already taken</span>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                     <div class="control-group success">*/
/*                                         <label class="control-label" for="inputSuccess">Input with success</label>*/
/*                                         <div class="controls">*/
/*                                             <input id="inputSuccess" type="text">*/
/*                                             <span class="help-inline">Woohoo!</span>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                     <div class="form-actions">*/
/*                                         <button class="btn btn-primary" type="submit">*/
/*                                             <i class="icon-save"></i>*/
/*                                             Save*/
/*                                         </button>*/
/*                                         <button class="btn" type="submit">Cancel</button>*/
/*                                     </div>*/
/*                                 </form>*/
/* */
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </section>*/
/* */
/*     <div class="row">*/
/*         <div class="col-md-12 bread-crum-bar">*/
/* */
/*         </div>*/
/*     </div>*/
/*     <div class="row top-row-content">*/
/*         <div class="col-md-6">*/
/* */
/*         </div>*/
/*         <div class="col-md-6" style="text-align: right">*/
/*         </div>*/
/*     </div>*/
/*     <div class="row">*/
/*         <div class="col-md-12 container">*/
/*             <div >*/
/* */
/*                 {{ form(form) }}*/
/* */
/*                 {#{% for definition in form.definitions %}#}*/
/*                     {#<li>{{ form_row(definition.productCategoryName) }}</li>#}*/
/*                 {#{% endfor %}#}*/
/* */
/*                 {#{{ form_widget(form.definitions.vars.prototype.productCategoryName)|e }}#}*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
