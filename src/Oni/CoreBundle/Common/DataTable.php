<?php
/**
 * Created by PhpStorm.
 * User: peteratkins
 * Date: 26/11/2016
 * Time: 18:51
 */

namespace Oni\CoreBundle\Common;


class DataTable
{

    /**
     * @var string
     */
    protected $search;

    /**
     * @var
     */
    protected $orderColumn;

    /**
     * @var string
     */
    protected $dir;

    /**
     * @var int
     */
    protected $length;

    /**
     * @var int
     */
    protected $start;

    /**
     * @var int
     */
    protected $draw;

    /**
     * @var array
     */
    protected $results;

    /**
     * @var int
     */
    protected $recordsTotal = 0;

    /**
     * @var int
     */
    protected $recordsFiltered = 0;

    /**
     * @var array
     */
    protected $response = [
        'data'            => [],
        'recordsTotal'    => 0,
        'recordsFiltered' => 0,
        'draw'            => 1
    ];


    public function __construct($dataTableRequest)
    {
        if (!empty($dataTableRequest['search']['value'])) {
            $this->search = trim($dataTableRequest['search']['value']);
        }

        if (isset($dataTableRequest['draw'])) {
            $this->draw = (int) $dataTableRequest['draw'];
        }

        $this->orderColumn = isset($dataTableRequest['order'][0]['column']) ? (int) $dataTableRequest['order'][0]['column'] : 0;
        $this->dir = isset($dataTableRequest['order'][0]['dir']) ? $dataTableRequest['order'][0]['dir'] : 'desc';
        $this->start = isset($dataTableRequest['start']) ? (int) $dataTableRequest['start'] : 0;
        $this->length = isset($dataTableRequest['length']) ? (int) $dataTableRequest['length'] : 10;
    }

    /**
     * @return array
     */
    public function getResponse()
    {
        $this->response['data'] = $this->results;
        $this->response['recordsTotal'] = $this->recordsTotal;
        $this->response['recordsFiltered'] = $this->recordsFiltered;
        $this->response['draw'] = $this->draw;

        return $this->response;
    }


    /**
     * @return string
     */
    public function getSearch()
    {
        return $this->search;
    }

    /**
     * @return mixed
     */
    public function getOrderColumn()
    {
        return $this->orderColumn;
    }

    /**
     * @return string
     */
    public function getDir()
    {
        return $this->dir;
    }

    /**
     * @return int
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * @return int
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * @return int
     */
    public function getDraw()
    {
        return $this->draw;
    }

    /**
     * @return mixed
     */
    public function getResults()
    {
        return $this->results;
    }

    /**
     * @param array $results
     */
    public function setResults($results)
    {
        $this->results = $results;

        return $this;
    }

    /**
     * @return int
     */
    public function getRecordsTotal()
    {
        return $this->recordsTotal;
    }

    /**
     * @param int $recordsTotal
     * @return DataTable
     */
    public function setRecordsTotal($recordsTotal)
    {
        $this->recordsTotal = (int) $recordsTotal;

        return $this;
    }

    /**
     * @return int
     */
    public function getRecordsFiltered()
    {
        return $this->recordsFiltered;
    }

    /**
     * @param int $recordsFiltered
     * @return DataTable
     */
    public function setRecordsFiltered($recordsFiltered)
    {
        $this->recordsFiltered = (int) $recordsFiltered;

        return $this;
    }

}