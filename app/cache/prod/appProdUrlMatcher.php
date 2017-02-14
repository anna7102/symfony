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

        // blog_about
        if ($pathinfo === '/about') {
            return array (  '_controller' => 'Ania\\BlogBundle\\Controller\\PagesController::aboutAction',  '_route' => 'blog_about',);
        }

        // blog_contact
        if ($pathinfo === '/contact') {
            return array (  '_controller' => 'Ania\\BlogBundle\\Controller\\PagesController::contactAction',  '_route' => 'blog_contact',);
        }

        // blog_index
        if (preg_match('#^/(?P<page>\\d+)?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'blog_index')), array (  'page' => 1,  '_controller' => 'Ania\\BlogBundle\\Controller\\PostsController::indexAction',));
        }

        // blog_search
        if (0 === strpos($pathinfo, '/search') && preg_match('#^/search(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'blog_search')), array (  'page' => 1,  '_controller' => 'Ania\\BlogBundle\\Controller\\PostsController::searchAction',));
        }

        // blog_post
        if (0 === strpos($pathinfo, '/post') && preg_match('#^/post/(?P<slug>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'blog_post')), array (  '_controller' => 'Ania\\BlogBundle\\Controller\\PostsController::postAction',));
        }

        // blog_category
        if (0 === strpos($pathinfo, '/category') && preg_match('#^/category/(?P<slug>[^/]++)(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'blog_category')), array (  'page' => 1,  '_controller' => 'Ania\\BlogBundle\\Controller\\PostsController::categoryAction',));
        }

        // blog_tag
        if (0 === strpos($pathinfo, '/tag') && preg_match('#^/tag/(?P<slug>[^/]++)(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'blog_tag')), array (  'page' => 1,  '_controller' => 'Ania\\BlogBundle\\Controller\\PostsController::tagAction',));
        }

        // blog_login
        if ($pathinfo === '/login') {
            return array (  '_controller' => 'Common\\UserBundle\\Controller\\LoginController::loginAction',  '_route' => 'blog_login',);
        }

        // user_resetPassword
        if (0 === strpos($pathinfo, '/reset-password') && preg_match('#^/reset\\-password/(?P<actionToken>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_resetPassword')), array (  '_controller' => 'Common\\UserBundle\\Controller\\LoginController::resetPasswordAction',));
        }

        if (0 === strpos($pathinfo, '/log')) {
            // _check_path
            if ($pathinfo === '/login-check') {
                return array('_route' => '_check_path');
            }

            // _logout
            if ($pathinfo === '/logout') {
                return array('_route' => '_logout');
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
