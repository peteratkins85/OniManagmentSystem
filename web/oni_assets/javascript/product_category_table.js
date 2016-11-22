$(document).ready(function () {

    var ONI = {};
    ONI.ui || (ONI.ui = {});

    ONI.ui.productCategory = {

        tableSelector : ".data-table-oni-product-categories",
        tableConfig:{
            ajax: {
                url: "http://onisystem.local/app_dev.php/admin/ajax/product/categories",
                dataSrc: '',
            },
            columns: [
                {data: 'id'},
                {data: 'productCategoryName'},
                {data: 'productCategoryUrl'},
                {
                    data: null
                }
            ],
            createdRow: function (row, data, index) {

                if ($('template[data-table-oni-product-category-options]').length) {

                    debugger;
                    var tableHead = $(this.selector).children("thead");
                    tableHead.children('tr').find("th:last").after('<th></th>');
                    var lastTd = $(row).find("td:last");
                    var tableOptionsHtml = $('template[data-table-oni-product-category-options]').html();
                    tableOptionsHtml = tableOptionsHtml.toString().replace('{productCategoryId}', data['id']);
                    var tableOptionsElement = $(tableOptionsHtml);
                    lastTd.after(tableOptionsElement);

                }

            }
        },

        init: function (config) {
            this.buildDataTable()
        },
        buildDataTable: function () {
            $(this.tableSelector).dataTable(this.tableConfig);

        }
    };

    ONI.ui.productCategory.init();

});

