<?php include '../config/urls.php'; ?>
<script>


$(document).ready(function () {

$('#form_ajax').submit(function (event) {
  var form = $("#form_ajax");
  var barcode = $("#barcode").val();
  var url = "<?=$kargocontrol?>/iptal.php";
  // Stop the browser from submitting the form.
  event.preventDefault();
  // Serialize the form data.
  var formData = $("#form_ajax").serialize();
  // Submit the form using AJAX.
  $("#loader").css("display", "block");

  $.ajax({
    type: 'POST',
    url:url ,
    data: {
      barcode: barcode
    }
  }).done(function (data, status) {
    $("#loader").css("display", "none");
    if (data === '6') {
    $("#error").css("display", "block");
      document.getElementById("errors").play();
      setTimeout(function () {
        $("#error").css("display", "none");
      }, 1000);
      alert(" Sipariş Okutulmuş");
      $('#barcode').val('');
      $('#barcode').focus();
    }
    if (data === '5') {
      $("#error").css("display", "block");
  document.getElementById("errors").play();
      setTimeout(function () {
        $("#error").css("display", "none");
      }, 1000);
      alert("Sipariş İptal Edilmiş ");
      $('#barcode').val('');
      $('#barcode').focus();
    }


    if (data === '4') {
      $("#error").css("display", "block");
  document.getElementById("errors").play();
      setTimeout(function () {
        $("#error").css("display", "none");
      }, 1000);
      alert("İnternet Bağlantısı Yok");
      $('#barcode').val('');
      $('#barcode').focus();
    }

    if (data === '2') {
      $("#error").css("display", "block");
  document.getElementById("errors").play();
      setTimeout(function () {
        $("#error").css("display", "none");
      }, 1000);
      $('#barcode').val('');
      $('#barcode').focus();

    }
    if (data === '1') {


      $("#myNav").css("display", "block");
      setTimeout(function () {
        $("#myNav").css("display", "none");
      }, 1000);
      document.getElementById("ok").play();

      $('#barcode').val('');
      $('#barcode').focus();
    }
  })

});
});


</script>
