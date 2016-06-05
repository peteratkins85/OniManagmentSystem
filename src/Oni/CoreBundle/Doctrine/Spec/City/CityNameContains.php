<?php
/**
 * Created by PhpStorm.
 * User: peteratkins
 * Date: 22/05/2016
 * Time: 13:06
 */

namespace Oni\CoreBundle\Doctrine\Spec\City;


use Doctrine\ORM\Query;
use Doctrine\ORM\QueryBuilder;
use Oni\CoreBundle\Doctrine\Spec\Specification;

class CityNameContains implements Specification
{


	private $cityName;

	public function __construct($cityName)
	{
		$this->cityName = $cityName;
	}

	/**
	 * @param \Doctrine\ORM\QueryBuilder $qb
	 * @param string $dqlAlias
	 *
	 * @return \Doctrine\ORM\Query\Expr
	 */
	public function match( QueryBuilder $qb, $dqlAlias ) {
		
		$qb->setParameter('cityName', '%'.$this->cityName.'%');
		return $qb->expr()->like($dqlAlias . '.cityName', ':cityName');
		
	}

	/**
	 * @param \Doctrine\ORM\Query $query
	 ***/
	public function modifyQuery( Query $query ) { /* empty ***/ }

}