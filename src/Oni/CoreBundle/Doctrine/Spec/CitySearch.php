<?php
/**
 * Created by PhpStorm.
 * User: peteratkins
 * Date: 22/05/2016
 * Time: 13:35
 */

namespace Oni\CoreBundle\Doctrine\Spec;

use Doctrine\ORM\Query;
use Doctrine\ORM\QueryBuilder;

class CitySearch implements Specification {

	protected $spec;

	public function __construct($cityName = 'paris')
	{
		$this->spec = new AsArrayLimit(
			new CityNameBeginsWith($cityName)
		);
	}

	public function match( QueryBuilder $qb, $dqlAlias )
	{
		return $this->spec->match($qb, $dqlAlias);
	}


	public function modifyQuery( Query $query )
	{
		return $this->spec->modifyQuery($query);
	}

	public function supports($className)
	{
		return ($className === 'Oni\CoreBundle\Entity\City');
	}

}