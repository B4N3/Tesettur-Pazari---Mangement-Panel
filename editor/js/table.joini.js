
/*
 * Editor client script for DB table cikis
 * Created by http://editor.datatables.net/generator
 */

(function($){

$(document).ready(function() {
	var editor = new $.fn.dataTable.Editor( {
		ajax: 'editor/php/joini.php',
		table: '#joini',
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
				"label": "status:",
				"name": "status"
			},
			{
				"label": "total:",
				"name": "total"
			}
		]
	} );

	var table = $('#joini').DataTable( {
		dom: 'Bfrtip',
		ajax: 'editor/php/joini.php',
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
				"data": "a_tarih"
			},
			{
				"data": "t_tarih"
			},
			{
				"data": "status"
			},
			{
				"data": "total"
			},
		],
		select: true,
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
