<?php
$ur=$_POST['url'];
$folder=$_POST['folder'];
$url = "$ur" ;
if (!file_exists("./$folder")) {
  // code...
  mkdir("./$folder");
}


$ch = curl_init($url);

$my_save_dir = "./$folder/";
$filename = basename($url);
$complete_save_loc = $my_save_dir . $filename;

$fp = fopen($complete_save_loc, 'wb');

curl_setopt($ch, CURLOPT_FILE, $fp);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_exec($ch);
curl_close($ch);
fclose($fp);



$dir = "./";

// Open a known directory, and proceed to read its contents
if (is_dir($dir)) {
    if ($dh = opendir($dir)) {
        while (($file = readdir($dh)) !== false) {
            echo "filename: $file : filetype: " . filetype($dir . $file) . "\n";

            echo "<br>";
        }
        closedir($dh);
    }
}
?>
