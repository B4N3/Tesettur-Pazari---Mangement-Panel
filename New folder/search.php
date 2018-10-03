<?php
$q=$_POST['q'];

$connected = fopen("http://www.google.com:80/", "r");
if($connected):


$url = "http://tesetturpazari.com/rest1/product/getProductBySupplierProductCode/$q";

$fields = array( 'token' => 'gdg4igltlrgj7ra369337b1gk7');

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);


$response = curl_exec($ch);
curl_close($ch);
$arr = json_decode($response, true);
foreach ($arr['data'] as $value):  ?>
<form method="post" action="file.php">
  <input type="hidden" name="url" value="http://www.tesetturpazari.com/Data/O/<?=$value['ImageUrl']?>">
  <input type="hidden" name="folder" value="<?=$q?>">
   <button type="submit">Download!</button>
</form>
<a href="http://www.tesetturpazari.com/Data/O/<?=$value['ImageUrl']?>" download="w3logo.jpg">
  <img src="http://www.tesetturpazari.com/Data/O/<?=$value['ImageUrl']?>" style="width: 25%"></a>
  <?=$value['ImageUrl']?>
  <br>
 cizgili   <?=floatval($value['SellingPriceVatIncludedNoDiscount'])?>
  <br>
  inirimli <?=$value['SellingPriceVatIncluded']?>
    <br>
  <input type="text" name="" id="myInput" value="https://www.tesetturpazari.com/arama?q=<?=$q?>"><button onclick="myFunction()">Copy</button>

  <?php endforeach; ?>
<?php endif; ?>
<script type="text/javascript">
    var slowLoad = window.setTimeout( function() {
        alert( "the page is taking its sweet time loading" );
    }, 10 );

    window.addEventListener( 'load', function() {
        window.clearTimeout( slowLoad );
    }, false );
</script>
<script>
function myFunction() {
  var copyText = document.getElementById("myInput");
  copyText.select();
  document.execCommand("copy");
  alert("Copied the text: " + copyText.value);
}
</script>
