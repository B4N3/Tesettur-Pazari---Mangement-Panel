
/*
 * Editor client script for DB table cikis
 * Created by http://editor.datatables.net/generator
 */

(function($){

$(document).ready(function() {
	var editor = new $.fn.dataTable.Editor( {
		ajax: 'editor/php/join.php',
		table: '#join',
		fields: [
			{
				"label": "order_code:",
				"name": "order_code"
			},
			{
				"label": "customer_name:",
				"name": "customer_name"
			},
			{
				"label": "a_tarih:",
				"name": "a_tarih"
			},
			{
				"label": "t_tarih:",
				"name": "t_tarih"
			},
			{
				"label": "th_tarih:",
				"name": "th_tarih"
			},
			{
				"label": "barcode:",
				"name": "barcode"
			},
			{
				"label": "grmaj:",
				"name": "grmaj"
			},
			{
				"label": "status:",
				"name": "status"
			},
			{
				"label": "total:",
				"name": "total"
			}
		]
	} );

	var table = $('#join').DataTable( {
		dom: 'Bfrtip',
		ajax: 'editor/php/join.php',
		columns: [
			{
                data: null,
                defaultContent: '',
                className: 'select-checkbox',
                orderable: false
            },
			{
				"data": "order_code"
			},
			{
				"data": "customer_name"
			},
			{
				"data": "barcode"
			},
			{
				"data": "a_tarih"
			},
			{
				"data": "t_tarih"
			},
			{
				"data": "th_tarih"
			},
			{
				"data": "status"
			},
			{
				"data": "kargo"
			},

			{
				"data": "grmaj"
			},
			{
				"data": "total"
			}
		],
		 select: {
            style:    'os',
            selector: 'td:first-child',
            blurable: true
        },
				keys: {
            columns: ':not(:first-child)',
            editor:  editor
        },
		lengthChange: false,
		buttons: [
			{ extend: 'create', editor: editor },
			{ extend: 'edit',   editor: editor },
			{ extend: 'remove', editor: editor },
			{
                extend: 'collection',
                text: 'Export',
                buttons: [
                    'copy',
                    'excel',
                    'csv',
                    'pdf',
                    'print'
                ]
            }
		]
	} );
} );

}(jQuery));
