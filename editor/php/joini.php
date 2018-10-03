<?php
// DataTables PHP library and database connection
include( "lib/DataTables.php" );

// Alias Editor classes so they are easy to use
use
DataTables\Database,
DataTables\Database\Query,
DataTables\Database\Result;

$RAW_SQL_QUERY="SELECT cikis.order_code, cikis.customer_name,giris.a_tarih,giris.total,giris.t_tarih,giris.status FROM cikis INNER JOIN giris ON cikis.order_code = giris.order_code WHERE giris.status = ' ?ade ' ";

$r=$db->sql($RAW_SQL_QUERY)->fetchAll();
$arr=array("data"=>$r,"options"=>'',"files"=>'');//DATATABLE CLIENT SIDE PARSES
echo json_encode($arr);
exit();
