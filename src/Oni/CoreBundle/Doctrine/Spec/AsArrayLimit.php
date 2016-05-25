<?php
/**
 * Created by PhpStorm.
 * User: peteratkins
 * Date: 07/05/2016
 * Time: 10:12
 */

namespace Oni\CoreBundle\Doctrine\Spec;

use Doctrine\ORM\Query;
use Doctrine\ORM\QueryBuilder;
use Oni\CoreBundle\Doctrine\Spec\Specification;

class AsArrayLimit implements Specification
{
	private $parent;

	private $maxResults;

	public function __construct(Specification $parent, $maxResults = 10)
	{
		$this->parent = $parent;
		$this->maxResults = $maxResults;
	}

	public function modifyQuery(Query $query)
	{
		$query->setHydrationMode(Query::HYDRATE_ARRAY)
			->setMaxResults($this->maxResults);
	}

	public function match(QueryBuilder $qb, $dqlAlias)
	{
		return $this->parent->match($qb, $dqlAlias);
	}
}