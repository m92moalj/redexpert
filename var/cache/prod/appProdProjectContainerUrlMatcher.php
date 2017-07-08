<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        // app_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'app_homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'app_homepage',);
        }

        if (0 === strpos($pathinfo, '/losses')) {
            // app_losses
            if (rtrim($pathinfo, '/') === '/losses') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'app_losses');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\LossesController::indexCalculationAction',  '_route' => 'app_losses',);
            }

            // calculation
            if ($pathinfo === '/losses/get') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_calculation;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\LossesController::calculationAction',  '_route' => 'calculation',);
            }
            not_calculation:

        }

        // app_me
        if (rtrim($pathinfo, '/') === '/me') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'app_me');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\UserController::meAction',  '_route' => 'app_me',);
        }

        if (0 === strpos($pathinfo, '/view/losses')) {
            // app_view
            if (rtrim($pathinfo, '/') === '/view/losses') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'app_view');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\LossesController::viewAction',  '_route' => 'app_view',);
            }

            // get_losses
            if ($pathinfo === '/view/losses/get') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_get_losses;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\LossesController::getLossesAction',  '_route' => 'get_losses',);
            }
            not_get_losses:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
