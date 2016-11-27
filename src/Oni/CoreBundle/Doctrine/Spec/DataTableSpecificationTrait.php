<?php
/**
 * Created by PhpStorm.
 * User: peteratkins
 * Date: 26/11/2016
 * Time: 19:40
 */

namespace Oni\CoreBundle\Doctrine\Spec;

use Oni\CoreBundle\Common\DataTable;
use Symfony\Component\VarDumper\Cloner\Data;


trait DataTableSpecificationTrait
{

    /**
     * @var DataTable
     */
    protected $dataTable;

    /**
     * @var string
     */
    protected $order;

    /**
     * @var string
     */
    protected $orderBy;

    /**
     * @var bool
     */
    protected $getRecordCount;

    /**
     * @var bool
     */
    protected $includeFilter;

    protected function setup($config)
    {
        if ($this->dataTable && !$this->dataTable instanceof DataTable)
            throw new \RuntimeException('DataTable property invalid must be set and an instance of '. DataTable::class);

        $this->getRecordCount = isset($config['getRecordCount']) ? $config['getRecordCount'] : false;
        $this->includeFilter = isset($config['includeFilter']) ? $config['includeFilter'] : true;
        $this->order = $this->dataTable->getDir();
        $this->orderBy = $this->fields[$this->dataTable->getOrderColumn()];
    }

}