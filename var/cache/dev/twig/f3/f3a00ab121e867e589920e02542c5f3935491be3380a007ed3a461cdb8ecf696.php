<?php

/* ProductManagerBundle:ProductCategory:index.html.twig */
class __TwigTemplate_afe3a2657bf47f006bdfbd769df2097acb35b53d83a5b05f8f06629686e2de6a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("cms/base.html.twig", "ProductManagerBundle:ProductCategory:index.html.twig", 2);
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
        $__internal_f677325b21379f0142f9b048b6c747721ee348ef37538ba5ce0cbc4f3e824ddf = $this->env->getExtension("native_profiler");
        $__internal_f677325b21379f0142f9b048b6c747721ee348ef37538ba5ce0cbc4f3e824ddf->enter($__internal_f677325b21379f0142f9b048b6c747721ee348ef37538ba5ce0cbc4f3e824ddf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProductManagerBundle:ProductCategory:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f677325b21379f0142f9b048b6c747721ee348ef37538ba5ce0cbc4f3e824ddf->leave($__internal_f677325b21379f0142f9b048b6c747721ee348ef37538ba5ce0cbc4f3e824ddf_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_60c1cef1c4003c57f7d6bd1ba2420b57ae349d82db75ed7a2abe29b7a3a275db = $this->env->getExtension("native_profiler");
        $__internal_60c1cef1c4003c57f7d6bd1ba2420b57ae349d82db75ed7a2abe29b7a3a275db->enter($__internal_60c1cef1c4003c57f7d6bd1ba2420b57ae349d82db75ed7a2abe29b7a3a275db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_60c1cef1c4003c57f7d6bd1ba2420b57ae349d82db75ed7a2abe29b7a3a275db->leave($__internal_60c1cef1c4003c57f7d6bd1ba2420b57ae349d82db75ed7a2abe29b7a3a275db_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_afa00d35aa8b2dcd60c534e0df2df95591d9627cac3519e4ab6f3b7eee036634 = $this->env->getExtension("native_profiler");
        $__internal_afa00d35aa8b2dcd60c534e0df2df95591d9627cac3519e4ab6f3b7eee036634->enter($__internal_afa00d35aa8b2dcd60c534e0df2df95591d9627cac3519e4ab6f3b7eee036634_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <section id='content'>
        <div class='container-fluid'>
            <div class='row-fluid' id='content-wrapper'>
                <div class='span12'>
                    ";
        // line 10
        $this->loadTemplate("ProductManagerBundle:ProductCategory:index.html.twig", "ProductManagerBundle:ProductCategory:index.html.twig", 10, "1693669763")->display($context);
        // line 13
        echo "                    <div class='row-fluid'>
                        <div class=\"pull-right\">
                            <a class=\"btn btn-primary\" style=\"margin-bottom:8px\" href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getUrl("add_category");
        echo "\" > <i class=\"icon-plus\"></i> Add New Product Category </a>
                        </div>
                    </div>
                    <div class='row-fluid'>
                        <div class='span12 box bordered-box orange-border' style='margin-bottom:0;'>
                            <div class='box-header dark-background'>
                                <div class='title'>Data table with column filter in footer</div>
                                <div class='actions'>
                                    <a class=\"btn box-remove btn-mini btn-link\" href=\"#\"><i class='icon-remove'></i>
                                    </a>

                                    <a class=\"btn box-collapse btn-mini btn-link\" href=\"#\"><i></i>
                                    </a>
                                </div>
                            </div>
                            <div class='box-content box-no-padding'>
                                <div class='responsive-table'>
                                    <div class='scrollable-area'>
                                        <table class='data-table-column-filter table table-bordered table-striped' data='' style='margin-bottom:0;'>
                                            <thead>
                                                ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter((isset($context["titles"]) ? $context["titles"] : $this->getContext($context, "titles"))));
        foreach ($context['_seq'] as $context["_key"] => $context["title"]) {
            // line 36
            echo "                                                    <th><b>";
            echo twig_escape_filter($this->env, $context["title"], "html", null, true);
            echo "</b></th>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['title'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "                                                <td></td>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["productCategories"]) ? $context["productCategories"] : $this->getContext($context, "productCategories")));
        foreach ($context['_seq'] as $context["_key"] => $context["productCategory"]) {
            // line 43
            echo "                                                <tr>
                                                    ";
            // line 44
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["productCategory"]);
            foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
                // line 45
                echo "                                                        <td>";
                if ($this->getAttribute($context["value"], "date", array(), "any", true, true)) {
                    echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "date", array()), "html", null, true);
                } else {
                    echo " ";
                    echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                    echo " ";
                }
                echo " </td>
                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "                                                    <td>
                                                        <div class='text-right'>
                                                            <a class='btn btn-success btn-mini' href='#'>
                                                                <i class='icon-ok'></i>
                                                            </a>
                                                            <a class='btn btn-danger btn-mini' href='#'>
                                                                <i class='icon-remove'></i>
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['productCategory'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "                                            </tbody>
                                            <tfoot>
                                            <tr>
                                                ";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter((isset($context["titles"]) ? $context["titles"] : $this->getContext($context, "titles"))));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["title"]) {
            // line 63
            echo "                                                    ";
            if ($this->getAttribute($context["loop"], "last", array())) {
                // line 64
                echo "                                                        <th colspan='2'>";
                echo twig_escape_filter($this->env, $context["title"], "html", null, true);
                echo "</th>
                                                    ";
            } else {
                // line 66
                echo "                                                        <th>";
                echo twig_escape_filter($this->env, $context["title"], "html", null, true);
                echo "</th>
                                                    ";
            }
            // line 68
            echo "                                                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['title'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "
                                            </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

";
        
        $__internal_afa00d35aa8b2dcd60c534e0df2df95591d9627cac3519e4ab6f3b7eee036634->leave($__internal_afa00d35aa8b2dcd60c534e0df2df95591d9627cac3519e4ab6f3b7eee036634_prof);

    }

    public function getTemplateName()
    {
        return "ProductManagerBundle:ProductCategory:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 69,  186 => 68,  180 => 66,  174 => 64,  171 => 63,  154 => 62,  149 => 59,  132 => 47,  117 => 45,  113 => 44,  110 => 43,  106 => 42,  100 => 38,  91 => 36,  87 => 35,  64 => 15,  60 => 13,  58 => 10,  52 => 6,  46 => 5,  35 => 3,  11 => 2,);
    }
}


/* ProductManagerBundle:ProductCategory:index.html.twig */
class __TwigTemplate_afe3a2657bf47f006bdfbd769df2097acb35b53d83a5b05f8f06629686e2de6a_1693669763 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 10
        $this->parent = $this->loadTemplate("cms/content/content-header.html.twig", "ProductManagerBundle:ProductCategory:index.html.twig", 10);
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
        $__internal_625041ba1940c36c5d8b3f97b52742e4d0307a72ac1d83cb34eb19ce1e067800 = $this->env->getExtension("native_profiler");
        $__internal_625041ba1940c36c5d8b3f97b52742e4d0307a72ac1d83cb34eb19ce1e067800->enter($__internal_625041ba1940c36c5d8b3f97b52742e4d0307a72ac1d83cb34eb19ce1e067800_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProductManagerBundle:ProductCategory:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_625041ba1940c36c5d8b3f97b52742e4d0307a72ac1d83cb34eb19ce1e067800->leave($__internal_625041ba1940c36c5d8b3f97b52742e4d0307a72ac1d83cb34eb19ce1e067800_prof);

    }

    // line 11
    public function block_contentTitle($context, array $blocks = array())
    {
        $__internal_934d73478609d5985664337523cc35f044b2e89637884da0b4eafb670e13ab1e = $this->env->getExtension("native_profiler");
        $__internal_934d73478609d5985664337523cc35f044b2e89637884da0b4eafb670e13ab1e->enter($__internal_934d73478609d5985664337523cc35f044b2e89637884da0b4eafb670e13ab1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentTitle"));

        echo " Product Categories ";
        
        $__internal_934d73478609d5985664337523cc35f044b2e89637884da0b4eafb670e13ab1e->leave($__internal_934d73478609d5985664337523cc35f044b2e89637884da0b4eafb670e13ab1e_prof);

    }

    public function getTemplateName()
    {
        return "ProductManagerBundle:ProductCategory:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  268 => 11,  245 => 10,  200 => 69,  186 => 68,  180 => 66,  174 => 64,  171 => 63,  154 => 62,  149 => 59,  132 => 47,  117 => 45,  113 => 44,  110 => 43,  106 => 42,  100 => 38,  91 => 36,  87 => 35,  64 => 15,  60 => 13,  58 => 10,  52 => 6,  46 => 5,  35 => 3,  11 => 2,);
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
/*                         {% block contentTitle %} Product Categories {% endblock %}*/
/*                     {%  endembed %}*/
/*                     <div class='row-fluid'>*/
/*                         <div class="pull-right">*/
/*                             <a class="btn btn-primary" style="margin-bottom:8px" href="{{ url('add_category') }}" > <i class="icon-plus"></i> Add New Product Category </a>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class='row-fluid'>*/
/*                         <div class='span12 box bordered-box orange-border' style='margin-bottom:0;'>*/
/*                             <div class='box-header dark-background'>*/
/*                                 <div class='title'>Data table with column filter in footer</div>*/
/*                                 <div class='actions'>*/
/*                                     <a class="btn box-remove btn-mini btn-link" href="#"><i class='icon-remove'></i>*/
/*                                     </a>*/
/* */
/*                                     <a class="btn box-collapse btn-mini btn-link" href="#"><i></i>*/
/*                                     </a>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class='box-content box-no-padding'>*/
/*                                 <div class='responsive-table'>*/
/*                                     <div class='scrollable-area'>*/
/*                                         <table class='data-table-column-filter table table-bordered table-striped' data='' style='margin-bottom:0;'>*/
/*                                             <thead>*/
/*                                                 {% for title in titles|keys %}*/
/*                                                     <th><b>{{ title }}</b></th>*/
/*                                                 {% endfor %}*/
/*                                                 <td></td>*/
/*                                             </tr>*/
/*                                             </thead>*/
/*                                             <tbody>*/
/*                                             {% for productCategory in productCategories %}*/
/*                                                 <tr>*/
/*                                                     {% for value in productCategory %}*/
/*                                                         <td>{% if value.date is defined %}{{ value.date }}{% else %} {{ value }} {% endif %} </td>*/
/*                                                     {% endfor %}*/
/*                                                     <td>*/
/*                                                         <div class='text-right'>*/
/*                                                             <a class='btn btn-success btn-mini' href='#'>*/
/*                                                                 <i class='icon-ok'></i>*/
/*                                                             </a>*/
/*                                                             <a class='btn btn-danger btn-mini' href='#'>*/
/*                                                                 <i class='icon-remove'></i>*/
/*                                                             </a>*/
/*                                                         </div>*/
/*                                                     </td>*/
/*                                                 </tr>*/
/*                                             {% endfor %}*/
/*                                             </tbody>*/
/*                                             <tfoot>*/
/*                                             <tr>*/
/*                                                 {% for title in titles|keys %}*/
/*                                                     {% if loop.last %}*/
/*                                                         <th colspan='2'>{{ title }}</th>*/
/*                                                     {% else %}*/
/*                                                         <th>{{ title }}</th>*/
/*                                                     {% endif %}*/
/*                                                 {% endfor %}*/
/* */
/*                                             </tr>*/
/*                                             </tfoot>*/
/*                                         </table>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </section>*/
/* */
/* {% endblock %}*/
