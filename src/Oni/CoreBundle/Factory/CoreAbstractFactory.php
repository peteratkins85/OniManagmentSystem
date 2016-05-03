<?php
/**
 * Created by PhpStorm.
 * User: peteratkins
 * Date: 24/12/2015
 * Time: 15:37
 */

namespace Oni\CoreBundle\Factory;
use Doctrine\ORM\EntityRepository;
use Oni\CoreBundle\Controller\CoreController;
use Oni\CoreBundle\Entity\TranslatorAwareInterface;
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


    /**
     *
     * Set container and translator
     *
     * @param CoreController $controller
     *
     * @return CoreController
     *
     */
    protected function injectControllerDependencies(CoreController $controller){

        $bundles = $this->container->getParameter('kernel.bundles');

        $controller = $this->injectCommonDependencies($controller);

        if ($this->container->hasParameter('oni_travel_connect.theme')){
            $controller->setTravelPortTheme($this->container->getParameter('oni_travel_connect.theme'));
        }

        return $controller;

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
    protected function injectRepositoryDependencies(EntityRepository $repository){

        $repository = $this->injectCommonDependencies($repository);

        return $repository;

    }

    protected function injectCommonDependencies($class){

        if ($class instanceof TranslatorAwareInterface) {
            $class->setTranslator($this->container->get('translator'));
        }

        if ($class instanceof ContainerAwareInterface) {
            $class->setContainer($this->container);
        }

        return $class;

    }


}