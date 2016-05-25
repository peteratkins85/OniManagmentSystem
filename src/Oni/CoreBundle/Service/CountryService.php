<?php
/**
 * Created by PhpStorm.
 * User: peteratkins
 * Date: 10/05/2016
 * Time: 23:18
 */

namespace Oni\CoreBundle\Service;


use Doctrine\Common\Persistence\ObjectRepository;

class CountryService {
	
	/**
	 * @var \Doctrine\Common\Persistence\ObjectRepository
	 */
	protected $countryRepository;

	/**
	 * @var \Doctrine\Common\Persistence\ObjectRepository
	 */
	protected $cityRepository;

	/**
	 * @var string
	 */
	protected $class;

	public function __construct(ObjectRepository $countryRepository,ObjectRepository $cityRepository)
	{
		$this->countryRepository = $countryRepository;
		$this->cityRepository = $cityRepository;
	}

	public function findCountryBy($criteria){

		

	}

	public function findCountryByIso($iso){



	}

	public function findCountryByIso3($iso3){



	}

	public function findCountryByName($name){



	}

	public function getNationalities(){


	}

	public function getCountries(){

		return $this->countryRepository->findAll();

	}

	public function getCities(){

		return $this->cityRepository->findAll();

	}

}