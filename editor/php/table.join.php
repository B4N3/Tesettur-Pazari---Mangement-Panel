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


/*
 * Example PHP implementation used for the join.html example
 */
Editor::inst( $db, 'giris' )
    ->field(
        Field::inst( 'giris.order_code' ),
        Field::inst( 'giris.a_tarih' ),
        Field::inst( 'giris.t_tarih' ),
				Field::inst( 'giris.status' ),
        Field::inst( 'giris.total' )
            ->options( Options::inst()
                ->table( 'cikis' )
                ->value( 'order_code' )
                ->label( 'order_code' )
            )
            ->validator( Validate::dbValues() ),
        Field::inst( 'cikis.order_code' )
    )
    ->leftJoin( 'cikis', 'cikis.order_code', '=', 'giris.order_code' )
    ->process($_POST)
    ->json();
