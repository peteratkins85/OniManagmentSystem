<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        // core_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'core_homepage')), array (  '_controller' => 'CoreBundle:Default:index',));
        }

        if (0 === strpos($pathinfo, '/admin')) {
            if (0 === strpos($pathinfo, '/admin/product')) {
                if (0 === strpos($pathinfo, '/admin/products')) {
                    // add_product
                    if ($pathinfo === '/admin/products/add') {
                        return array (  '_controller' => 'product_controller:Index:add',  '_route' => 'add_product',);
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
