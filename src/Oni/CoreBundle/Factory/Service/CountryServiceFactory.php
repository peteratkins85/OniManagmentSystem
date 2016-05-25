<?php
/**
 * Created by PhpStorm.
 * User: peteratkins
 * Date: 14/05/2016
 * Time: 02:07
 */

namespace Oni\CoreBundle\Factory\Service;


use Oni\CoreBundle\Entity\City;
use Oni\CoreBundle\Entity\Country;
use Oni\CoreBundle\Service\CountryService;
use Symfony\Component\DependencyInjection\ContainerInterface;

class CountryServiceFactory  {

	public function getService(ContainerInterface $serviceContainer){

		$objectManager  = $serviceContainer->get('doctrine.orm.entity_manager');
		$countryRepository = $objectManager->getRepository(Country::class);
		$cityRepository = $objectManager->getRepository(City::class);

		return new CountryService(
			$countryRepository,
			$cityRepository
		);

	}

}