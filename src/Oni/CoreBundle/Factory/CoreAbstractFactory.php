<?php
/**
 * Created by PhpStorm.
 * User: peteratkins
 * Date: 24/12/2015
 * Time: 15:37
 */

namespace Oni\CoreBundle\Factory;
use Oni\CoreBundle\Controller\CoreController;
use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;


abstract class CoreAbstractFactory implements ContainerAwareInterface
{
    /**
     * @var ContainerInterface
     */
    protected $container;

    /**
     *
     *
     * @param ContainerInterface|null $container
     *
     */
    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    public function get(){


    }


    /**
     *
     * Set container and translator
     *
     * @param CoreController $controller
     *
     * @return CoreController
     *
     */
    protected function prepareController(CoreController $controller){

        $bundles = $this->container->getParameter('kernel.bundles');
        $controller->setTranslator($this->container->get('translator'));
        $controller->setContainer($this->container);

        if ($this->container->hasParameter('oni_travel_connect.theme')){
            $controller->setTravelConnectTheme($this->container->getParameter('oni_travel_connect.theme'));
        }

        return $controller;

    }


}