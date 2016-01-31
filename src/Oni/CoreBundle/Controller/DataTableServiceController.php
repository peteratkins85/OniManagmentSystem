<?php

namespace Oni\CoreBundle\Controller;


class DataTableServiceController extends CoreController {

    /**
     *
     *
     * @return json
     *
     */
    public function getDataTableTrans()
    {

        $array = array(
            "sEmptyTable" => "No data available in table",
            "sInfo" => "Showing _START_ to _END_ of _TOTAL_ entries",
            "sInfoEmpty" => "Showing 0 to 0 of 0 entries",
            "sInfoFiltered" => '',
            "sInfoPostFix" => '',
            "sInfoThousands" => '',
            "sLengthMenu" => '',
            "sLoadingRecords" => '',
            "sProcessing" => '',
            "sSearch" => '',
            "sZeroRecords" => '',
            "oPaginate" => array(
                "sFirst" => '',
                "sLast" => '',
                "sNext" => '',
                "sPrevious" => ''
            ),
            "oAria" => array(
                "sSortAscending" => '',
                "sSortDescending" => ''
            )
        );



    }

}