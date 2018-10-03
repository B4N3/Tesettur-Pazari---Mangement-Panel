<?php

/*
 * Editor server script for DB table cikis
 * Created by http://editor.datatables.net/generator
 */

// DataTables PHP library and database connection
include( "lib/DataTables.php" );

// Alias Editor classes so they are easy to use
use
	DataTables\Editor,
	DataTables\Editor\Field,
	DataTables\Editor\Format,
	DataTables\Editor\Mjoin,
	DataTables\Editor\Options,
	DataTables\Editor\Upload,
	DataTables\Editor\Validate,
	DataTables\Editor\ValidateOptions;

// The following statement can be removed after the first run (i.e. the database
// table has been created). It is a good idea to do this to help improve
// performance.
$db->sql( "CREATE TABLE IF NOT EXISTS `cikis` (
	`id` int(10) NOT NULL auto_increment,
	`order_code` varchar(255),
	`customer_name` varchar(255),
	PRIMARY KEY( `id` )
);" );

// Build our Editor instance and process the data coming from _POST
Editor::inst( $db, 'cikis', 'id' )
	->fields(
		Field::inst( 'order_code' ),
		Field::inst( 'customer_name' ),
		Field::inst( 'city' ),
		Field::inst( 'state' ),
		Field::inst( 'total' ),
		Field::inst( 'payment' ),
		Field::inst( 'phone' ),
		Field::inst( 'addres' )
	)
	->process( $_POST )
	->json();
