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
			<div class="m-portlet__head">
				<div class="m-portlet__head-caption">
					<div class="m-portlet__head-title">
						<span class="m-portlet__head-icon m--hide">
						<i class="la la-gear"></i>
						</span>
						<h3 class="m-portlet__head-text">
							KARGO TAKİP FORMU
						</h3>
					</div>
				</div>
			</div>
			<!--begin::Form-->

				<div class="m-portlet__body">
					<div class="form-group m-form__group m--margin-top-10">
						<div class="alert m-alert m-alert--default" role="alert">
							Burda Sipariş Iptal İşlam
						</div>
					</div>
					<div class="form-group m-form__group">
											<p id="msg"></p>
						<input type="file" id="file" class="form-control m-input m-input--air" name="file" />


					</div>

				</div>
				<div class="m-portlet__foot m-portlet__foot--fit">
					<div class="m-form__actions">
						<button id="upload" class="btn btn-primary form-contol inline m-input m-input--air">Upload</button>
					<button id="bto" class="btn btn-danger form-contol inline m-input m-input--air" style="display:none;margin-left: 100px;margin-top: -40px;">okey</button>

					</div>
				</div>

			<!--end::Form-->
    </div>
    <div class="row">
      <table class="table table-striped- table-bordered table-hover table-checkable dataTable no-footer dtr-inline" id="m_table_1" role="grid" aria-describedby="m_table_1_info" style="width: 1313px;">
		  							<thead>
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

								<tr role="row" class="odd">
				  									<td class="dt-right sorting_1" tabindex="0">
                        <label class="m-checkbox m-checkbox--single m-checkbox--solid m-checkbox--brand">
                            <input value="" class="m-checkable" type="checkbox">
                            <span></span>
                        </label></td>
				  									<td class="sorting_1">75862-001</td>
				  									<td>07/24/2018</td>

				  						</tr></tbody>

					</table>
    </div>
		</div>
		<?php include '../../config/urls.php'; ?>
				<script src="<?=$assets?>/assets/jquery.min.js"></script>
		<script type="text/javascript">
            $(document).ready(function (e) {
                $('#upload').on('click', function () {
                    var file_data = $('#file').prop('files')[0];
                    var form_data = new FormData();
                    form_data.append('file', file_data);
                    $.ajax({
                        url: 'http://localhost/edit/app/control/kargo/upload.php', // point to server-side PHP script
                        dataType: 'text', // what to expect back from the PHP script
                        cache: false,
                        contentType: false,
                        processData: false,
                        data: form_data,
                        type: 'post',
                        success: function (response) {

                            $('#msg').html(response); // display success response from the PHP script
														$("#bto").css("display", "block");
                        },
                        error: function (response) {
                            $('#msg').html(response); // display error response from the PHP script
                        }
                    });
                });

								$('#bto').on('click', function () {
									  $("#loader").css("display", "block");
                    var file_data = $('#file').prop('files')[0];
                    var form_data = new FormData();
                    form_data.append('file', file_data);
                    $.ajax({
                        url: 'http://localhost/edit/app/control/kargo/takip.php', // point to server-side PHP script
                        dataType: 'text', // what to expect back from the PHP script
                        cache: false,
                        contentType: false,
                        processData: false,
                        data: form_data,
                        type: 'post',
                        success: function (response) {
													$("#loader").css("display", "none");
                            alert(response);
                        },
                        error: function (response) {
                            $('#msg').html(response); // display error response from the PHP script
                        }
                    });
                });

            });
</script>
