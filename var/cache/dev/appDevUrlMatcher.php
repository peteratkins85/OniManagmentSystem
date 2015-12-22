<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // core_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'core_homepage')), array (  '_controller' => 'CoreBundle:Default:index',));
        }

        if (0 === strpos($pathinfo, '/admin')) {
            if (0 === strpos($pathinfo, '/admin/product')) {
                if (0 === strpos($pathinfo, '/admin/products')) {
                    // add_product
                    if ($pathinfo === '/admin/products/add') {
                        return array (  '_controller' => 'product_controller:addAction',  '_route' => 'add_product',);
                    }

                    // product_list
                    if ($pathinfo === '/admin/products') {
                        return array (  '_controller' => 'product_controller:indexAction',  '_route' => 'product_list',);
                    }

                    // edit_product
                    if ($pathinfo === '/admin/products/edit') {
                        return array (  '_controller' => 'product_controller:Index:edit',  '_route' => 'edit_product',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/product/categor')) {
                    // add_category
                    if ($pathinfo === '/admin/product/category/add') {
                        return array (  '_controller' => 'product_categories_controller:addAction',  '_route' => 'add_category',);
                    }

                    // categories_list
                    if ($pathinfo === '/admin/product/categories') {
                        return array (  '_controller' => 'product_categories_controller:indexAction',  '_route' => 'categories_list',);
                    }

                    // edit_category
                    if ($pathinfo === '/admin/product/category/edit') {
                        return array (  '_controller' => 'ProductManagerBundle:ProductCategory:edit',  '_route' => 'edit_category',);
                    }

                }

            }

            // cms_home
            if (rtrim($pathinfo, '/') === '/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'cms_home');
                }

                return array (  '_controller' => 'Cms\\DashboardManagerBundle\\Controller\\DashboardController::indexAction',  '_route' => 'cms_home',);
            }

            // cms_home2
            if ($pathinfo === '/admin/dashboard') {
                return array (  '_controller' => 'Cms\\DashboardManagerBundle\\Controller\\DashboardController::indexAction',  '_route' => 'cms_home2',);
            }

        }

        if (0 === strpos($pathinfo, '/content')) {
            // content_manager_homepage
            if ($pathinfo === '/content') {
                return array (  '_controller' => 'content_controller:indexAction',  '_route' => 'content_manager_homepage',);
            }

            if (0 === strpos($pathinfo, '/content/add')) {
                // content_manager_edit_page
                if ($pathinfo === '/content/add') {
                    return array (  '_controller' => 'content_controller:addAction',  '_route' => 'content_manager_edit_page',);
                }

                // content_manager_add_page
                if ($pathinfo === '/content/add') {
                    return array (  '_controller' => 'content_controller:addAction',  '_route' => 'content_manager_add_page',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/admin/log')) {
            if (0 === strpos($pathinfo, '/admin/login')) {
                // cms_login
                if ($pathinfo === '/admin/login') {
                    return array (  '_controller' => 'Cms\\UserManagerBundle\\Controller\\SecurityController::loginAction',  '_route' => 'cms_login',);
                }

                // cms_login_check
                if ($pathinfo === '/admin/login_check') {
                    return array (  '_controller' => 'Cms\\UserManagerBundle\\Controller\\SecurityController::checkAction',  '_route' => 'cms_login_check',);
                }

            }

            // cms_login_out
            if ($pathinfo === '/admin/logout') {
                return array (  '_controller' => 'Cms\\UserManagerBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'cms_login_out',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
