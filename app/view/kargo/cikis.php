<?php include '../../config/urls.php'; ?>
<!-- begin::Page loader -->
<div class="m-page-loader m-page-loader--base" id="loader">
    <div class="m-blockui">
        <span>Yuklanior...</span>
        <span>
            <div class="m-loader m-loader--brand"></div>
        </span>
    </div>
</div>


<div class="m-page-loader m-page-loader--base" id="error" style="display: none;background-color:#d52b2b">
  <div class="m-blockui" style="margin-left: 600px;margin-top: 260px;">
        <p style="font-size:5rem; color:#6f727d;"> <span>Hata...</span> </p>
        <span>
            <i style="font-size:5rem" class="flaticon-warning-2 "></i>
        </span>
    </div>
</div>
<div class="m-page-loader m-page-loader--base" id="myNav" style="display: none;background-color:green">
  <div class="m-blockui" style="margin-left: 600px;margin-top: 260px;">
        <p style="font-size:5rem; color:#6f727d;"> <span>Tamam...</span> </p>
        <span>
            <i style="font-size:5rem" class="flaticon-warning-2 "></i>
        </span>
    </div>
</div>
<!-- end::Page Loader -->
<audio id="errors" >

<source src="<?=$assets?>/assets/error.mp3" type="audio/mpeg">

</audio>
<audio id="ok" >

<source src="<?=$assets?>/assets/ok.mp3" type="audio/mpeg">

</audio>
<!-- end::Page Loader -->

<div class="col-xl-12">
<div class="m-portlet m-portlet--tab">
			<div class="m-portlet__head">
				<div class="m-portlet__head-caption">
					<div class="m-portlet__head-title">
						<span class="m-portlet__head-icon m--hide">
						<i class="la la-gear"></i>
						</span>
						<h3 class="m-portlet__head-text">
							KARGO ÇİKİŞ FORMU
						</h3>

					</div>
				</div>
			</div>
			<!--begin::Form-->
			<form class="m-form m-form--fit m-form--label-align-right" id="form_ajax">
				<div class="m-portlet__body">
					<div class="form-group m-form__group m--margin-top-10">
						<div class="alert m-alert m-alert--default" role="alert">
							Burda Sipariş Iptal İşlam
						</div>
					</div>
					<div class="form-group m-form__group">
						<label for="">Bar kodu</label>
						<input class="form-control m-input m-input--air" id="barcode" placeholder=">Bar kodu" type="text">

					</div>

				</div>
				<div class="m-portlet__foot m-portlet__foot--fit">

				</div>
			</form>
			<!--end::Form-->
    </div>
    <div class="row">
      <table class="table table-striped- table-bordered table-hover table-checkable dataTable no-footer dtr-inline" id="m_table_1" role="grid" aria-describedby="m_table_1_info" style="width: 1313px;">
		  							<thead>
                      <button type="button" name="button" id="deleteLogs"  class="btn btn-danger">Sil</button>
			  						<tr role="row"><th class="dt-right sorting_disabled sorting_asc" rowspan="1" colspan="1" style="width: 37.45px;" aria-label="



                    : activate to sort column descending" tabindex="0" aria-controls="m_table_1" aria-sort="ascending">
                    <label class="m-checkbox m-checkbox--single m-checkbox--solid m-checkbox--brand">
                        <input value="" class="m-group-checkable" type="checkbox">
                        <span></span>
                    </label>
                  </th>
                  <th class="sorting" tabindex="0" aria-controls="m_table_1" rowspan="1" colspan="1" style="width: 62.45px;" aria-label="OrderID: activate to sort column ascending">BarCode</th>
                  <th class="sorting" tabindex="0" aria-controls="m_table_1" rowspan="1" colspan="1" style="width: 69.45px;" aria-label="Country: activate to sort column ascending">Date</th>


						</thead>

								<tbody>
									<?php include '../../quaries/cikisSQ.php';
									if (mysqli_num_rows($result) > 0)
									{

									while($row = $result->fetch_assoc()) {



									  ?>

								<tr role="row" class="odd">
				  									<td class="dt-right sorting_1" tabindex="0">
                        <label class="m-checkbox m-checkbox--single m-checkbox--solid m-checkbox--brand">
                            <input value="" class="m-checkable" type="checkbox">
                            <span></span>
                        </label></td>
				  									<td class="sorting_1"><?=$row['code']?></td>
				  									<td>07/24/2018</td>

				  						</tr>
												<?php 				}
											}; ?>
										</tbody>

					</table>
    </div>
		</div>
		<script src="<?=$assets?>/assets/jquery.min.js"></script>
		<?php include ''.$assets.'assets/cikisscript.php' ?>
