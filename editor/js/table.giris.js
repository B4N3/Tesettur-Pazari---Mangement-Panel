
/*
 * Editor client script for DB table cikis
 * Created by http://editor.datatables.net/generator
 */

(function($){

$(document).ready(function() {
	var editor = new $.fn.dataTable.Editor( {
		ajax: 'editor/php/table.giris.php',
		table: '#giris',
		fields: [
			{
				"label": "order_code:",
				"name": "order_code"
			},
			{
				"label": "barcode:",
				"name": "barcode"
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

	var table = $('#giris').DataTable( {
		dom: 'Bfrtip',
		ajax: 'editor/php/table.giris.php',
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
				"data": "grmaj"
			},
			{
				"data": "total"
			},
			{
				"data": "kargo"
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
