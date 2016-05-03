<?php
/**
 * Created by PhpStorm.
 * User: peteratkins
 * Date: 23/12/2015
 * Time: 01:21
 */

namespace Oni\CoreBundle\Factory;

use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Doctrine\ORM\EntityRepository;

class RepositoryFactory extends CoreAbstractFactory
{

    /**
     *
     * Return Repository Class
     *
     * @param string $entityName
     * @return CoreRepository
     *
     */
    public function getRepository($entityName){

        //Get Repository
        $repository = $this->container->get('doctrine.orm.default_entity_manager')->getRepository($entityName);

        //Injects Dependencies
        $this->injectRepositoryDependencies($repository);

        return $repository;

    }

}