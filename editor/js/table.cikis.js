
/*
 * Editor client script for DB table cikis
 * Created by http://editor.datatables.net/generator
 */

(function($){

$(document).ready(function() {
	var editor = new $.fn.dataTable.Editor( {
		ajax: 'editor/php/table.cikis.php',
		table: '#cikis',
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
				"label": "city:",
				"name": "city"
			},
			{
				"label": "state:",
				"name": "state"
			},
			{
				"label": "total:",
				"name": "total"
			},
			{
				"label": "payment:",
				"name": "payment"
			},
			{
				"label": "phone:",
				"name": "phone"
			},
			{
				"label": "addres:",
				"name": "addres"
			}
		]
	} );

	var table = $('#cikis').DataTable( {
		dom: 'Bfrtip',
		ajax: 'editor/php/table.cikis.php',
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
				"data": "city"
			},
			{
				"data": "state"
			},
			{
				"data": "total"
			},
			{
				"data": "payment"
			},
			{
				"data": "phone"
			},
			{
				"data": "addres"
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
