<?php
session_start();
error_reporting(1);

include '../../config/Database.php';
 // print_r($_POST);
// $z=$_POST['invoiceSeri'];
// $x=$_POST['invoiceNumber'];
// $y=550;
// for ($i=$x; $i <=$y ; $i++) {
//   // echo "<br>";
//   // echo "The number is: $z$i <br>";
// }
$StartDate=$_POST['StartDate']."T".$_POST['StartTime'].":00Z";
// echo "<br>";
//
// echo $StartDate;
// echo "<br>";
// echo date("Y-m-d");
// echo "T";
// echo date("H:i:s");
// echo "Z";
$EndDate=date("Y-m-d")."T".date("H:i:s")."Z";
// echo $EndDate;
// echo "<br>";

$token=$_SESSION['token'];
$url = "http://tesetturpazari.com/rest1/order2/getOrders";

$fields = array( 'token' => $token,
'OrderDateTimeStart' => $StartDate,
'OrderDateTimeEnd' => $EndDate,
'FetchInvoiceDetails' => 'true',
'limit' => '5000',
'columns' => 'IsInvoiced ,OrderDate,InvoiceNumber,OrderCode,CargoId',
'f' => 'CargoId|10| equal');

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);
curl_close($ch);

 //print_r($response);
$jsArr=json_decode($response, true);

 // print_r($jsArr);
 $index = $_POST['invoiceSeri'].$_POST['invoiceNumber'];
foreach ($jsArr['data'] as $key => $value) {
  // echo $value['IsInvoiced'];
  // echo "<br>";
  // $no=1;
  if ($value['IsInvoiced']=='false') {
          $OrderCode=$value['OrderCode'];
          $InvoiceNumber=$index;
          $EndDate=date("Y-m-d")."T".date("H:i:s")."Z";
          $servername = "localhost";
          $username = "root";
          $password = "";
          $dbname = "tesetturpazari";

          // Create connection
          $conn = new mysqli($servername, $username, $password, $dbname);
          $EndDates = mysqli_real_escape_string($conn, $EndDate);
          $sql="INSERT INTO `fatura` (`id`, `OrderCode`, `InvoiceDate`, `InvoiceNumber`, `WaybillNumber`, `IsInvoiced`)
                VALUES               (NULL, '$OrderCode', '$EndDates', '$index', '$index', 0)";
                if ($conn->query($sql) === TRUE) {
                    $index++;
    // echo "New record created successfully";
    include 'GetOrdersAndUpdate.php';
} else {
    // echo "Error: " . $sql . "<br>" . $conn->error;
}



      // print_r($value);
      // echo "<hr>";
      // sizeof($value);
    //   echo "Index is $index\n";
    //   $index++; echo " *** Order Date : ";  echo $value['OrderDate'];echo " ***Is Invoiced :"; echo $value['IsInvoiced'];echo " *** Order Code :"; echo $value['OrderCode'];
    // echo "<br>";



  }

}

$codes= implode(",",$codes);
$codes1=trim($codes,"");
if ($codes1==null) {
  echo "1";
}
echo "$codes1";
 ?>
