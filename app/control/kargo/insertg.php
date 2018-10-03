<?php

$sqlname="localhost";
$username="root";
$table="giris";
$password="";
$db="tesetturpazari";
$file=$_GET['file'];
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
  echo '<script>window.location.href="http://localhost/edit/index.php?p=K";</script>';

 ?>
