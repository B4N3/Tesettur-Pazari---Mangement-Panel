<?php
session_start();


   $sqlname="localhost";
   $username="root";
   $table="koko";
   $password="";
   $db="tesetturpazari";
   $file=$_FILES['file']['name'];
   $cons= mysqli_connect("$sqlname", "$username","$password","$db") or die(mysql_error());

   $result1=mysqli_query($cons,"select count(*) count from $table");
   $r1=mysqli_fetch_array($result1);
   $count1=(int)$r1['count'];
   //If the fields in CSV are not seperated by comma(,)  replace comma(,) in the below query with that  delimiting character
   //If each tuple in CSV are not seperated by new line.  replace \n in the below query  the delimiting character which seperates two tuples in csv
   // for more information about the query http://dev.mysql.com/doc/refman/5.1/en/load-data.html
   mysqli_query($cons, '
       LOAD DATA LOCAL INFILE "'.$file.'"
           INTO TABLE '.$table.'
           FIELDS TERMINATED by \',\'
           LINES TERMINATED BY \'\n\'
   ')or die(mysql_error());

   $result2=mysqli_query($cons,"select count(*) count from $table");
   $r2=mysqli_fetch_array($result2);
   $count2=(int)$r2['count'];

   $count=$count2-$count1;
   if($count>0){

     $servername = "localhost";
     $username = "root";
     $password = "";
     $dbname = "tesetturpazari";

     // Create connection
     $conn = new mysqli($servername, $username, $password, $dbname);
     // Check connection



     $sql = "SELECT TRIM(`siparis_no`) AS `siparis_no`,`kargo_no` FROM koko";
     $result = $conn->query($sql);

     if ($result->num_rows > 0) {


         while($row = $result->fetch_assoc()) {
           $url = "http://www.tesetturpazari.com/rest1/order2/updateOrderStatusAsSentToCargo";
                  $post['token']=$_SESSION['token'];
      $fields = array( 'token' => urlencode($post['token']),
      'data' => '[    {        "OrderCode": "'.urlencode($row['siparis_no']).'",
                              "CargoCode": "T2",
                            "CargoTrackingCode":'.$row['kargo_no'].'
                         }]');

      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, $url);
      curl_setopt($ch, CURLOPT_POST, 1);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

      $response = curl_exec($ch);
      curl_close($ch);


    //  print_r($response);

         }
         print_r($response);
         $arr = json_decode($response, true);
     foreach ($arr['message'] as $value){
          $value['code'];

         if ($value['code']=='ORI004') {
           // code...
           $sql1="truncate koko";
           $result1=$conn->query($sql1);
         echo "1";
       }
     }


   }}






   ?>
