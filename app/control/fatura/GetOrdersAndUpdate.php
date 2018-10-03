<?php



// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM fatura  ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
   // output data of each row
   $codes=[];
   while($row = $result->fetch_assoc()) {
       // echo "Order Code: " . $row["OrderCode"]. " - Invoice Date : " . $row["InvoiceDate"]. "- Invoice Number : " . $row["InvoiceNumber"]. "<br>";
       $GorderCode=$row["OrderCode"];
       $GInvoiceDate=$row["InvoiceDate"];
       $GInvoiceNumber=$row["InvoiceNumber"];
       $GWaybillNumber=$row["WaybillNumber"];
       $url = "http://tesetturpazari.com/rest1/order2/updateInvoiceDetails";

       $fields = array( 'token' => $token,
       'data' => '[    {        "OrderCode": "'.$GorderCode.'",
                                "InvoiceDate": "'.$GInvoiceDate.'",
                                "InvoiceNumber": "'.$GInvoiceNumber.'",
                                "WaybillNumber": "'.$GWaybillNumber.'",
                                "IsInvoiced": "1"    }]');

       $ch = curl_init();
       curl_setopt($ch, CURLOPT_URL, $url);
       curl_setopt($ch, CURLOPT_POST, 1);
       curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
       curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

       $response = curl_exec($ch);
       curl_close($ch);

       // //print_r($response);
       //
       $codesarray=array_push($codes,$GorderCode);


   }
   ?>


   <?php
   // print_r($codes);
   // echo implode(",",$codes);
} else {
   echo "0 results";
}
$conn->close();
