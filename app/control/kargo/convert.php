<?php
if(!empty($_FILES['uploaded_file']))
{
  $path = "uploads/";
  $path = $path . basename( $_FILES['uploaded_file']['name']);
  if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $path)) {
    echo "The file ".  basename( $_FILES['uploaded_file']['name']).
    " has been uploaded";
  } else{
      echo "There was an error uploading the file, please try again!";
  }
}
require_once('PHPExcel/Classes/PHPExcel.php');

//Usage:
$file=$_FILES['uploaded_file']['name'];
$exfile=$_FILES['uploaded_file']['name'];
convertXLStoCSV("uploads/$file","$exfile.csv");



function convertXLStoCSV($infile,$outfile)
{
    $fileType = PHPExcel_IOFactory::identify($infile);
    $objReader = PHPExcel_IOFactory::createReader($fileType);

    $objReader->setReadDataOnly(true);
    $objPHPExcel = $objReader->load($infile);

    $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'CSV');
    $objWriter->save($outfile);
    echo '<script>window.location.href="http://localhost/edit/app/control/kargo/insert.php?file='.$outfile.'";</script>';


}



?>
