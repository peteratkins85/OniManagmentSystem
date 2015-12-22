<?php

/* cms/navigation.html.twig */
class __TwigTemplate_ede446c95c298c343aa7d52f37b53bd9e62f93e50a82966f5ee82c4da861e337 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c3d201c9e4d317b17f9dc6d080dfde5cda59cfb9406e2d3d84c2ebcbd8fafbda = $this->env->getExtension("native_profiler");
        $__internal_c3d201c9e4d317b17f9dc6d080dfde5cda59cfb9406e2d3d84c2ebcbd8fafbda->enter($__internal_c3d201c9e4d317b17f9dc6d080dfde5cda59cfb9406e2d3d84c2ebcbd8fafbda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "cms/navigation.html.twig"));

        // line 1
        echo "<div id='main-nav-bg'></div>
<nav id='main-nav'>
    <div class='navigation'>
        <div class='search'>
            <form action='search_results.html' method='get'>
                <div class='search-wrapper'>
                    <input value=\"\" class=\"search-query\" placeholder=\"Search...\" autocomplete=\"off\" name=\"q\" type=\"text\" />
                    <button class='btn btn-link icon-search' name='button' type='submit'></button>
                </div>
            </form>
        </div>
        <ul class='nav nav-stacked'>
            <li class='active'>
                <a href='index.html'>
                    <i class='icon-dashboard'></i>
                    <span>";
        // line 16
        if (array_key_exists("pageName", $context)) {
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["pageName"]) ? $context["pageName"] : $this->getContext($context, "pageName")), "html", null, true);
            echo " ";
        }
        echo "</span>
                </a>
            </li>
            <li class=''>
                <a class=\"dropdown-collapse\" href=\"#\"><i class='icon-edit'></i>
                    <span>Product Manager</span>
                    <i class='icon-angle-down angle-down'></i>
                </a>

                <ul class='nav nav-stacked'>
                    <li class=''>
                        <a href='";
        // line 27
        echo $this->env->getExtension('routing')->getUrl("product_list");
        echo "'>
                            <i class='icon-caret-right'></i>
                            <span>Products</span>
                        </a>
                    </li>
                    <li class=''>
                        <a href='";
        // line 33
        echo $this->env->getExtension('routing')->getUrl("categories_list");
        echo "'>
                            <i class='icon-caret-right'></i>
                            <span>Product Categories</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a class='dropdown-collapse ' href='#'>
                    <i class='icon-tint'></i>
                    <span>Administration</span>
                    <i class='icon-angle-down angle-down'></i>
                </a>
                <ul class='nav nav-stacked'>
                    <li class=''>
                        <a href='ui_elements.html'>
                            <i class='icon-caret-right'></i>
                            <span>Users</span>
                        </a>
                    </li>
                    <li class=''>
                        <a href='widgets.html'>
                            <i class='icon-caret-right'></i>
                            <span>Preferences</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class=''>
                <a href='buttons_and_icons.html'>
                    <i class='icon-star'></i>
                    <span>Buttons & Icons</span>
                </a>
            </li>
            <li>
                <a class='dropdown-collapse ' href='#'>
                    <i class='icon-cogs'></i>
                    <span>Components</span>
                    <i class='icon-angle-down angle-down'></i>
                </a>
                <ul class='nav nav-stacked'>
                    <li class=''>
                        <a href='charts.html'>
                            <i class='icon-bar-chart'></i>
                            <span>Charts</span>
                        </a>
                    </li>
                    <li class=''>
                        <a href='address_book.html'>
                            <i class='icon-envelope'></i>
                            <span>Address book</span>
                        </a>
                    </li>
                    <li class=''>
                        <a href='chats.html'>
                            <i class='icon-comments'></i>
                            <span>Chats</span>
                        </a>
                    </li>
                    <li class=''>
                        <a href='inplace_editing.html'>
                            <i class='icon-pencil'></i>
                            <span>In-place editing</span>
                        </a>
                    </li>
                    <li class=''>
                        <a href='filetrees.html'>
                            <i class='icon-list-ul'></i>
                            <span>File trees</span>
                        </a>
                    </li>
                    <li class=''>
                        <a href='fileupload.html'>
                            <i class='icon-file'></i>
                            <span>Fileupload</span>
                        </a>
                    </li>
                    <li class=''>
                        <a href='todo.html'>
                            <i class='icon-list-alt'></i>
                            <span>Todo list</span>
                        </a>
                    </li>
                    <li class=''>
                        <a href='wysiwyg.html'>
                            <i class='icon-paste'></i>
                            <span>WYSIWYG</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class=''>
                <a href='tables.html'>
                    <i class='icon-table'></i>
                    <span>Tables</span>
                </a>
            </li>
            <li class=''>
                <a href='grid.html'>
                    <i class='icon-th'></i>
                    <span>Grid</span>
                </a>
            </li>
            <li class=''>
                <a href='type.html'>
                    <i class='icon-font'></i>
                    <span>Typography</span>
                </a>
            </li>
            <li class=''>
                <a href='calendar.html'>
                    <i class='icon-calendar'></i>
                    <span>Calendar</span>
                </a>
            </li>
            <li>
                <a class='dropdown-collapse ' href='#'>
                    <i class='icon-book'></i>
                    <span>Example pages</span>
                    <i class='icon-angle-down angle-down'></i>
                </a>
                <ul class='nav nav-stacked'>
                    <li class=''>
                        <a href='invoice.html'>
                            <i class='icon-money'></i>
                            <span>Invoice</span>
                        </a>
                    </li>
                    <li class=''>
                        <a href='gallery.html'>
                            <i class='icon-picture'></i>
                            <span>Gallery</span>
                        </a>
                    </li>
                    <li class=''>
                        <a href='timeline.html'>
                            <i class='icon-time'></i>
                            <span>Timeline</span>
                        </a>
                    </li>
                    <li class=''>
                        <a href='pricing_tables.html'>
                            <i class='icon-table'></i>
                            <span>Pricing tables</span>
                        </a>
                    </li>
                    <li class=''>
                        <a href='user_profile.html'>
                            <i class='icon-user'></i>
                            <span>User profile</span>
                        </a>
                    </li>
                    <li class=''>
                        <a href='err404.html' target='_blank'>
                            <i class='icon-question-sign'></i>
                            <span>404 Error</span>
                        </a>
                    </li>
                    <li class=''>
                        <a href='err500.html' target='_blank'>
                            <i class='icon-cogs'></i>
                            <span>500 Error</span>
                        </a>
                    </li>
                    <li class=''>
                        <a href='sign_in.html' target='_blank'>
                            <i class='icon-signin'></i>
                            <span>Sign in</span>
                        </a>
                    </li>
                    <li class=''>
                        <a href='faq.html'>
                            <i class='icon-bullhorn'></i>
                            <span>FAQ</span>
                        </a>
                    </li>
                    <li class=''>
                        <a href='orders.html'>
                            <i class='icon-inbox'></i>
                            <span>Orders</span>
                        </a>
                    </li>
                    <li class=''>
                        <a href='search_results.html'>
                            <i class='icon-search'></i>
                            <span>Search results</span>
                        </a>
                    </li>
                    <li class=''>
                        <a href='blank.html'>
                            <i class='icon-circle-blank'></i>
                            <span>Blank page</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a class='dropdown-collapse ' href='#'>
                    <i class='icon-cog'></i>
                    <span>Layouts</span>
                    <i class='icon-angle-down angle-down'></i>
                </a>
                <ul class='nav nav-stacked'>
                    <li class=''>
                        <a href='closed_navigation.html'>
                            <i class='icon-caret-right'></i>
                            <span>Closed navigation</span>
                        </a>
                    </li>
                    <li class=''>
                        <a href='fixed_header.html'>
                            <i class='icon-caret-right'></i>
                            <span>Fixed header</span>
                        </a>
                    </li>
                    <li class=''>
                        <a href='fixed_navigation.html'>
                            <i class='icon-caret-right'></i>
                            <span>Fixed navigation</span>
                        </a>
                    </li>
                    <li class=''>
                        <a href='fixed_navigation_and_header.html'>
                            <i class='icon-caret-right'></i>
                            <span>Fixed navigation & header</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class=''>
                <a href='email_templates.html'>
                    <i class='icon-mail-reply'></i>
                    <span>Email templates</span>
                </a>
            </li>
            <li>
                <a class='dropdown-collapse' href='#'>
                    <i class='icon-folder-open-alt'></i>
                    <span>Four level dropdown</span>
                    <i class='icon-angle-down angle-down'></i>
                </a>
                <ul class='nav nav-stacked'>
                    <li>
                        <a class='dropdown-collapse' href='#'>
                            <i class='icon-caret-right'></i>
                            <span>Second level</span>
                            <i class='icon-angle-down angle-down'></i>
                        </a>
                        <ul class='nav nav-stacked'>
                            <li>
                                <a class='dropdown-collapse' href='#'>
                                    <i class='icon-caret-right'></i>
                                    <span>Third level</span>
                                    <i class='icon-angle-down angle-down'></i>
                                </a>
                                <ul class='nav nav-stacked'>
                                    <li>
                                        <a href='#'>
                                            <i class='icon-caret-right'></i>
                                            <span>Fourth level</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href='#'>
                                            <i class='icon-caret-right'></i>
                                            <span>Another fourth level</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</nav>";
        
        $__internal_c3d201c9e4d317b17f9dc6d080dfde5cda59cfb9406e2d3d84c2ebcbd8fafbda->leave($__internal_c3d201c9e4d317b17f9dc6d080dfde5cda59cfb9406e2d3d84c2ebcbd8fafbda_prof);

    }

    public function getTemplateName()
    {
        return "cms/navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 33,  57 => 27,  39 => 16,  22 => 1,);
    }
}
/* <div id='main-nav-bg'></div>*/
/* <nav id='main-nav'>*/
/*     <div class='navigation'>*/
/*         <div class='search'>*/
/*             <form action='search_results.html' method='get'>*/
/*                 <div class='search-wrapper'>*/
/*                     <input value="" class="search-query" placeholder="Search..." autocomplete="off" name="q" type="text" />*/
/*                     <button class='btn btn-link icon-search' name='button' type='submit'></button>*/
/*                 </div>*/
/*             </form>*/
/*         </div>*/
/*         <ul class='nav nav-stacked'>*/
/*             <li class='active'>*/
/*                 <a href='index.html'>*/
/*                     <i class='icon-dashboard'></i>*/
/*                     <span>{% if pageName is defined %} {{ pageName }} {%  endif %}</span>*/
/*                 </a>*/
/*             </li>*/
/*             <li class=''>*/
/*                 <a class="dropdown-collapse" href="#"><i class='icon-edit'></i>*/
/*                     <span>Product Manager</span>*/
/*                     <i class='icon-angle-down angle-down'></i>*/
/*                 </a>*/
/* */
/*                 <ul class='nav nav-stacked'>*/
/*                     <li class=''>*/
/*                         <a href='{{ url('product_list') }}'>*/
/*                             <i class='icon-caret-right'></i>*/
/*                             <span>Products</span>*/
/*                         </a>*/
/*                     </li>*/
/*                     <li class=''>*/
/*                         <a href='{{ url('categories_list') }}'>*/
/*                             <i class='icon-caret-right'></i>*/
/*                             <span>Product Categories</span>*/
/*                         </a>*/
/*                     </li>*/
/*                 </ul>*/
/*             </li>*/
/*             <li>*/
/*                 <a class='dropdown-collapse ' href='#'>*/
/*                     <i class='icon-tint'></i>*/
/*                     <span>Administration</span>*/
/*                     <i class='icon-angle-down angle-down'></i>*/
/*                 </a>*/
/*                 <ul class='nav nav-stacked'>*/
/*                     <li class=''>*/
/*                         <a href='ui_elements.html'>*/
/*                             <i class='icon-caret-right'></i>*/
/*                             <span>Users</span>*/
/*                         </a>*/
/*                     </li>*/
/*                     <li class=''>*/
/*                         <a href='widgets.html'>*/
/*                             <i class='icon-caret-right'></i>*/
/*                             <span>Preferences</span>*/
/*                         </a>*/
/*                     </li>*/
/*                 </ul>*/
/*             </li>*/
/*             <li class=''>*/
/*                 <a href='buttons_and_icons.html'>*/
/*                     <i class='icon-star'></i>*/
/*                     <span>Buttons & Icons</span>*/
/*                 </a>*/
/*             </li>*/
/*             <li>*/
/*                 <a class='dropdown-collapse ' href='#'>*/
/*                     <i class='icon-cogs'></i>*/
/*                     <span>Components</span>*/
/*                     <i class='icon-angle-down angle-down'></i>*/
/*                 </a>*/
/*                 <ul class='nav nav-stacked'>*/
/*                     <li class=''>*/
/*                         <a href='charts.html'>*/
/*                             <i class='icon-bar-chart'></i>*/
/*                             <span>Charts</span>*/
/*                         </a>*/
/*                     </li>*/
/*                     <li class=''>*/
/*                         <a href='address_book.html'>*/
/*                             <i class='icon-envelope'></i>*/
/*                             <span>Address book</span>*/
/*                         </a>*/
/*                     </li>*/
/*                     <li class=''>*/
/*                         <a href='chats.html'>*/
/*                             <i class='icon-comments'></i>*/
/*                             <span>Chats</span>*/
/*                         </a>*/
/*                     </li>*/
/*                     <li class=''>*/
/*                         <a href='inplace_editing.html'>*/
/*                             <i class='icon-pencil'></i>*/
/*                             <span>In-place editing</span>*/
/*                         </a>*/
/*                     </li>*/
/*                     <li class=''>*/
/*                         <a href='filetrees.html'>*/
/*                             <i class='icon-list-ul'></i>*/
/*                             <span>File trees</span>*/
/*                         </a>*/
/*                     </li>*/
/*                     <li class=''>*/
/*                         <a href='fileupload.html'>*/
/*                             <i class='icon-file'></i>*/
/*                             <span>Fileupload</span>*/
/*                         </a>*/
/*                     </li>*/
/*                     <li class=''>*/
/*                         <a href='todo.html'>*/
/*                             <i class='icon-list-alt'></i>*/
/*                             <span>Todo list</span>*/
/*                         </a>*/
/*                     </li>*/
/*                     <li class=''>*/
/*                         <a href='wysiwyg.html'>*/
/*                             <i class='icon-paste'></i>*/
/*                             <span>WYSIWYG</span>*/
/*                         </a>*/
/*                     </li>*/
/*                 </ul>*/
/*             </li>*/
/*             <li class=''>*/
/*                 <a href='tables.html'>*/
/*                     <i class='icon-table'></i>*/
/*                     <span>Tables</span>*/
/*                 </a>*/
/*             </li>*/
/*             <li class=''>*/
/*                 <a href='grid.html'>*/
/*                     <i class='icon-th'></i>*/
/*                     <span>Grid</span>*/
/*                 </a>*/
/*             </li>*/
/*             <li class=''>*/
/*                 <a href='type.html'>*/
/*                     <i class='icon-font'></i>*/
/*                     <span>Typography</span>*/
/*                 </a>*/
/*             </li>*/
/*             <li class=''>*/
/*                 <a href='calendar.html'>*/
/*                     <i class='icon-calendar'></i>*/
/*                     <span>Calendar</span>*/
/*                 </a>*/
/*             </li>*/
/*             <li>*/
/*                 <a class='dropdown-collapse ' href='#'>*/
/*                     <i class='icon-book'></i>*/
/*                     <span>Example pages</span>*/
/*                     <i class='icon-angle-down angle-down'></i>*/
/*                 </a>*/
/*                 <ul class='nav nav-stacked'>*/
/*                     <li class=''>*/
/*                         <a href='invoice.html'>*/
/*                             <i class='icon-money'></i>*/
/*                             <span>Invoice</span>*/
/*                         </a>*/
/*                     </li>*/
/*                     <li class=''>*/
/*                         <a href='gallery.html'>*/
/*                             <i class='icon-picture'></i>*/
/*                             <span>Gallery</span>*/
/*                         </a>*/
/*                     </li>*/
/*                     <li class=''>*/
/*                         <a href='timeline.html'>*/
/*                             <i class='icon-time'></i>*/
/*                             <span>Timeline</span>*/
/*                         </a>*/
/*                     </li>*/
/*                     <li class=''>*/
/*                         <a href='pricing_tables.html'>*/
/*                             <i class='icon-table'></i>*/
/*                             <span>Pricing tables</span>*/
/*                         </a>*/
/*                     </li>*/
/*                     <li class=''>*/
/*                         <a href='user_profile.html'>*/
/*                             <i class='icon-user'></i>*/
/*                             <span>User profile</span>*/
/*                         </a>*/
/*                     </li>*/
/*                     <li class=''>*/
/*                         <a href='err404.html' target='_blank'>*/
/*                             <i class='icon-question-sign'></i>*/
/*                             <span>404 Error</span>*/
/*                         </a>*/
/*                     </li>*/
/*                     <li class=''>*/
/*                         <a href='err500.html' target='_blank'>*/
/*                             <i class='icon-cogs'></i>*/
/*                             <span>500 Error</span>*/
/*                         </a>*/
/*                     </li>*/
/*                     <li class=''>*/
/*                         <a href='sign_in.html' target='_blank'>*/
/*                             <i class='icon-signin'></i>*/
/*                             <span>Sign in</span>*/
/*                         </a>*/
/*                     </li>*/
/*                     <li class=''>*/
/*                         <a href='faq.html'>*/
/*                             <i class='icon-bullhorn'></i>*/
/*                             <span>FAQ</span>*/
/*                         </a>*/
/*                     </li>*/
/*                     <li class=''>*/
/*                         <a href='orders.html'>*/
/*                             <i class='icon-inbox'></i>*/
/*                             <span>Orders</span>*/
/*                         </a>*/
/*                     </li>*/
/*                     <li class=''>*/
/*                         <a href='search_results.html'>*/
/*                             <i class='icon-search'></i>*/
/*                             <span>Search results</span>*/
/*                         </a>*/
/*                     </li>*/
/*                     <li class=''>*/
/*                         <a href='blank.html'>*/
/*                             <i class='icon-circle-blank'></i>*/
/*                             <span>Blank page</span>*/
/*                         </a>*/
/*                     </li>*/
/*                 </ul>*/
/*             </li>*/
/*             <li>*/
/*                 <a class='dropdown-collapse ' href='#'>*/
/*                     <i class='icon-cog'></i>*/
/*                     <span>Layouts</span>*/
/*                     <i class='icon-angle-down angle-down'></i>*/
/*                 </a>*/
/*                 <ul class='nav nav-stacked'>*/
/*                     <li class=''>*/
/*                         <a href='closed_navigation.html'>*/
/*                             <i class='icon-caret-right'></i>*/
/*                             <span>Closed navigation</span>*/
/*                         </a>*/
/*                     </li>*/
/*                     <li class=''>*/
/*                         <a href='fixed_header.html'>*/
/*                             <i class='icon-caret-right'></i>*/
/*                             <span>Fixed header</span>*/
/*                         </a>*/
/*                     </li>*/
/*                     <li class=''>*/
/*                         <a href='fixed_navigation.html'>*/
/*                             <i class='icon-caret-right'></i>*/
/*                             <span>Fixed navigation</span>*/
/*                         </a>*/
/*                     </li>*/
/*                     <li class=''>*/
/*                         <a href='fixed_navigation_and_header.html'>*/
/*                             <i class='icon-caret-right'></i>*/
/*                             <span>Fixed navigation & header</span>*/
/*                         </a>*/
/*                     </li>*/
/*                 </ul>*/
/*             </li>*/
/*             <li class=''>*/
/*                 <a href='email_templates.html'>*/
/*                     <i class='icon-mail-reply'></i>*/
/*                     <span>Email templates</span>*/
/*                 </a>*/
/*             </li>*/
/*             <li>*/
/*                 <a class='dropdown-collapse' href='#'>*/
/*                     <i class='icon-folder-open-alt'></i>*/
/*                     <span>Four level dropdown</span>*/
/*                     <i class='icon-angle-down angle-down'></i>*/
/*                 </a>*/
/*                 <ul class='nav nav-stacked'>*/
/*                     <li>*/
/*                         <a class='dropdown-collapse' href='#'>*/
/*                             <i class='icon-caret-right'></i>*/
/*                             <span>Second level</span>*/
/*                             <i class='icon-angle-down angle-down'></i>*/
/*                         </a>*/
/*                         <ul class='nav nav-stacked'>*/
/*                             <li>*/
/*                                 <a class='dropdown-collapse' href='#'>*/
/*                                     <i class='icon-caret-right'></i>*/
/*                                     <span>Third level</span>*/
/*                                     <i class='icon-angle-down angle-down'></i>*/
/*                                 </a>*/
/*                                 <ul class='nav nav-stacked'>*/
/*                                     <li>*/
/*                                         <a href='#'>*/
/*                                             <i class='icon-caret-right'></i>*/
/*                                             <span>Fourth level</span>*/
/*                                         </a>*/
/*                                     </li>*/
/*                                     <li>*/
/*                                         <a href='#'>*/
/*                                             <i class='icon-caret-right'></i>*/
/*                                             <span>Another fourth level</span>*/
/*                                         </a>*/
/*                                     </li>*/
/*                                 </ul>*/
/*                             </li>*/
/*                         </ul>*/
/*                     </li>*/
/*                 </ul>*/
/*             </li>*/
/*         </ul>*/
/*     </div>*/
/* </nav>*/
