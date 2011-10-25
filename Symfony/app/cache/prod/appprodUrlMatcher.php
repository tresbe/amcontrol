<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appprodUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appprodUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
        $pathinfo = urldecode($pathinfo);

        // AmcontrolBundle_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]+?)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Amcontrol\\AmcontrolBundle\\Controller\\DefaultController::indexAction',)), array('_route' => 'AmcontrolBundle_homepage'));
        }

        // lista
        if ($pathinfo === '/lista') {
            return array (  '_controller' => 'Amcontrol\\AmcontrolBundle\\Controller\\ListaController::indexAction',  '_route' => 'lista',);
        }

        if (0 === strpos($pathinfo, '/listas')) {
            // listas
            if (rtrim($pathinfo, '/') === '/listas') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'listas');
                }
                return array (  '_controller' => 'Amcontrol\\AmcontrolBundle\\Controller\\ListasController::indexAction',  '_route' => 'listas',);
            }

            // listas_show
            if (preg_match('#^/listas/(?P<id>[^/]+?)/show$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Amcontrol\\AmcontrolBundle\\Controller\\ListasController::showAction',)), array('_route' => 'listas_show'));
            }

            // listas_new
            if ($pathinfo === '/listas/new') {
                return array (  '_controller' => 'Amcontrol\\AmcontrolBundle\\Controller\\ListasController::newAction',  '_route' => 'listas_new',);
            }

            // listas_create
            if ($pathinfo === '/listas/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_listas_create;
                }
                return array (  '_controller' => 'Amcontrol\\AmcontrolBundle\\Controller\\ListasController::createAction',  '_route' => 'listas_create',);
            }
            not_listas_create:

            // listas_edit
            if (preg_match('#^/listas/(?P<id>[^/]+?)/edit$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Amcontrol\\AmcontrolBundle\\Controller\\ListasController::editAction',)), array('_route' => 'listas_edit'));
            }

            // listas_update
            if (preg_match('#^/listas/(?P<id>[^/]+?)/update$#xs', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_listas_update;
                }
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Amcontrol\\AmcontrolBundle\\Controller\\ListasController::updateAction',)), array('_route' => 'listas_update'));
            }
            not_listas_update:

            // listas_delete
            if (preg_match('#^/listas/(?P<id>[^/]+?)/delete$#xs', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_listas_delete;
                }
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Amcontrol\\AmcontrolBundle\\Controller\\ListasController::deleteAction',)), array('_route' => 'listas_delete'));
            }
            not_listas_delete:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
