<div class="m-page-loader m-page-loader--base" id="loader">
    <div class="m-blockui" style="margin-left: 600px;margin-top: 260px;">
        <span>Yuklanior...</span>
        <span>
            <div class="m-loader m-loader--brand"></div>
        </span>
    </div>
</div>
<div class="col-xl-12">
<div class="m-portlet m-portlet--tab">

			<!--begin::Form-->
      <?php include '../../config/urls.php'; ?>
      <form id="OrderForm" method="">
				<div class="m-portlet__body">
            <h1>PTT Fatura</h1>
					<div class="form-group m-form__group">
											<p id="msg"></p>
                      <div class="form-group">
                        <label for="">Fatura Başlayan Numara :</label>
                        <input class="form-control m-input m-input--air" id="invoiceNumber" type="number" name="invoiceNumber" value="" placeholder="Fatura Numara Başlayan Numara Burda " required>
                      </div>
                      <div class="form-group">
                        <label for="">Fatura Seri :</label>
                        <select class="form-control m-input m-input--air" id="invoiceSeri" name="invoiceSeri" required>
                          <option value="">Burdan Seri Seç</option>
                          <option value="A">A</option>
                          <option value="B">B</option>
                          <option value="C">C</option>
                          <option value="D">D</option>
                          <option value="E">E</option>
                          <option value="F">F</option>
                          <option value="G">G</option>
                          <option value="H">H</option>
                          <option value="I">I</option>
                          <option value="J">J</option>
                          <option value="K">K</option>
                          <option value="L">L</option>
                          <option value="M">M</option>
                          <option value="N">N</option>
                          <option value="O">O</option>
                          <option value="P">P</option>
                          <option value="Q">Q</option>
                          <option value="R">R</option>
                          <option value="S">S</option>
                          <option value="T">T</option>
                          <option value="U">U</option>
                          <option value="V">V</option>
                          <option value="W">W</option>
                          <option value="X">X</option>
                          <option value="Z">Z</option>
                        </select>


                      </div>
                      <div class="form-group">
                        <label for="">Başlayan Tarih</label>
                        <input class="form-control m-input m-input--air" type="date" id="StartDate" name="StartDate" value="" required>

                      </div>
                      <div class="form-group">
                        <label for="">Başlayan Saat</label>
                        <input class="form-control m-input m-input--air" type="time" id="StartTime" name="StartTime" value="" required>

                      </div>

                           	<input name="submit" type="submit" value="İşlam Başlat" id="OrderClick" class="btn btn-primary form-contol inline m-input m-input--air">


					</div>

				</div>
				<div class="m-portlet__foot m-portlet__foot--fit">
					<div class="m-form__actions">



					</div>
				</div>
</form>
			<!--end::Form-->
    </div>
    <div class="modal fade" style="display: none;" id="Veri" tabindex="-1" role="dialog">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title">Dikkat!</h5>
      <button type="button" class="close" data-dismiss="modal" id="vericlose" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
      <p>Resault :</p>
      <p id="res"></p>
      <p>Faturalar yazdırıldıktan sonra bilgiler silinecektir.Bu işlemi onaylıyor musunuz ?
      </p>
    </div>
    <div class="modal-footer">
      <button type="button" id="veriAccept" class="btn btn-primary">Onaylıyorum</button>
      <button type="button" class="btn btn-secondary" id="vericlose2" data-dismiss="modal">Onaylamıyorum</button>
    </div>
  </div>
</div>
</div>

		</div>
		<?php include '../../config/urls.php'; ?>
				<script src="<?=$assets?>/assets/jquery.min.js"></script>
		<script type="text/javascript">

    $('#OrderForm').submit(function (event) {
      var form = $("#OrderForm");
      var invoiceNumber = $("#invoiceNumber").val();
      var invoiceSeri = $("#invoiceSeri").val();
      var StartDate = $("#StartDate").val();
      var StartTime = $("#StartTime").val();
      var url = "<?=$faturacontrol?>/index.php";
      // Stop the browser from submitting the form.
      event.preventDefault();
      // Serialize the form data.
      var formData = $("#OrderForm").serialize();
      // Submit the form using AJAX.
      $("#loader").css("display", "block");

      $.ajax({
        type: 'POST',
        url:url ,
        data: {
          invoiceNumber: invoiceNumber,
          invoiceSeri: invoiceSeri,
          StartDate: StartDate,
          StartTime: StartTime
        }
      }).done(function (response, status) {
        $("#loader").css("display", "none");
          if (response=="1") {
            $("#Veri").addClass("show");
            $("#Veri").css("display","block");
            
             $("#res").html("Tüm siparişler seçtiğin tarihler arasında faturalandırılmıştır.");
          }else{





        var link = 'http://www.tesetturpazari.com/srv/admin/order/invoice/display/';

         window.open(link+response+"/A4x3" ,"_blank","toolbar=no,resizeable=no,top=500,left=500,width=400,height=400");
         $("#Veri").addClass("show");
         $("#Veri").css("display","block");
         $("#res").html(link+response+"/A4x3" ,"_blank","toolbar=no,resizeable=no,top=500,left=500,width=400,height=400")

  }


      });

    });
    $("#vericlose").click(function(){
      $("#Veri").removeClass("show");
      $("#Veri").css("display","none");
    })
    $("#vericlose2").click(function(){
      $("#Veri").removeClass("show");
      $("#Veri").css("display","none");
    })
    $("#veriAccept").click(function(){
      $("#Veri").removeClass("show");
      $("#Veri").css("display","none");
      $("#loader").css("display", "block");
      $.post("<?=$faturacontrol?>/ClearData.php", function(data, status){
          $("#loader").css("display", "none");
        alert("Bu işlem başarı ile tamamlandı..");
        $("#Veri").removeClass("show");
        $("#Veri").css("display","none");

    });
    })

</script>
