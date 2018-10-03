<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jqc-1.12.4/moment-2.18.1/jszip-2.5.0/pdfmake-0.1.36/dt-1.10.18/b-1.5.2/b-colvis-1.5.2/b-flash-1.5.2/b-html5-1.5.2/b-print-1.5.2/cr-1.5.0/fc-3.2.5/fh-3.1.4/kt-2.4.0/r-2.2.2/rg-1.0.3/rr-1.2.4/sc-1.5.0/sl-1.2.6/datatables.min.css">
<link rel="stylesheet" type="text/css" href="http://localhost/edit/editor/css/generator-base.css">
<link rel="stylesheet" type="text/css" href="http://localhost/edit/editor/css/editor.dataTables.min.css">

<script type="text/javascript" charset="utf-8" src="https://cdn.datatables.net/v/dt/jqc-1.12.4/moment-2.18.1/jszip-2.5.0/pdfmake-0.1.36/dt-1.10.18/b-1.5.2/b-colvis-1.5.2/b-flash-1.5.2/b-html5-1.5.2/b-print-1.5.2/cr-1.5.0/fc-3.2.5/fh-3.1.4/kt-2.4.0/r-2.2.2/rg-1.0.3/rr-1.2.4/sc-1.5.0/sl-1.2.6/datatables.min.js"></script>
<script type="text/javascript" charset="utf-8" src="http://localhost/edit/editor/js/dataTables.editor.min.js"></script>
<script type="text/javascript" charset="utf-8" src="http://localhost/edit/editor/js/table.cikis.js"></script>
<script type="text/javascript" charset="utf-8" src="http://localhost/edit/editor/js/table.giris.js"></script>
<script type="text/javascript" charset="utf-8" src="http://localhost/edit/editor/js/table.join.js"></script>
<script type="text/javascript" charset="utf-8" src="http://localhost/edit/editor/js/table.joini.js"></script>
<div class="col-xl-12">

	<!-- Modal -->
	<div class="modal fade" id="cikismodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">Çıkış Formu</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
					<form enctype="multipart/form-data" action="http://localhost/edit/app/control/kargo/convert.php" method="POST"  class="m-form m-form--fit m-form--label-align-right" id="cikisupload" >
				    <p>Dosya Yükle</p>
							<div class="form-group m-form__group">
				    <input type="file" class="form-control m-input m-input--air"  name="uploaded_file"></input>
					</div>


	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Kapat</button>
					 <input type="submit"  class="btn btn-primary" value="Upload"></input>

	      </div>
				</form>
	    </div>
	  </div>
	</div>


	<!-- Modal -->
	<div class="modal fade" id="girismodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Giriş Formu</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form enctype="multipart/form-data" action="http://localhost/edit/app/control/kargo/convertg.php" method="POST"  class="m-form m-form--fit m-form--label-align-right" id="girisupload" >
						<p>Dosya Yükle</p>
							<div class="form-group m-form__group">
						<input type="file" class="form-control m-input m-input--air" id="file"  name="uploaded_file"></input>
					</div>


				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Kapat</button>
					 <input type="submit"  class="btn btn-primary" value="Upload"></input>

				</div>
				</form>
			</div>
		</div>
	</div>


<ul class="nav nav-tabs m-tabs m-tabs-line m-tabs-line--brand" role="tablist">
		<li class="nav-item m-tabs__item">
				<a class="nav-link m-tabs__link active" data-toggle="tab" href="#topbar_notifications_notifications" onclick="change()" role="tab">
				Çıkış Tablosu <i  class="fa fa-chart-bar"></i>
				</a>
		</li>
		<li class="nav-item m-tabs__item">
				<a class="nav-link m-tabs__link" data-toggle="tab" onclick="changeg()" href="#topbar_notifications_events" role="tab">Giriş Tablosu <i   class="fa fa-chart-bar"></i> </a>
		</li>
		<li class="nav-item m-tabs__item">
				<a class="nav-link m-tabs__link" data-toggle="tab" onclick="changet()"  href="#topbar_notifications_logs" role="tab">Teslim Edilmiş <i style="color:green"   class="fa fa-check"></i> </a>
		</li>
		<li class="nav-item m-tabs__item">
				<a class="nav-link m-tabs__link" data-toggle="tab" onclick="changei()"  href="#topbar_notifications_logs" role="tab">İade Edilmiş <i style="color:red"   class="fa fa-ban"></i> </a>
		</li>
		<li class="nav-item m-tabs__item">
				<a class="nav-link m-tabs__link"  href="#"  data-toggle="modal" data-target="#girismodal">Giriş Dosya Yükle <i  style="color:green"  class="fa fa-arrow-up"></i> </a>
		</li>
		<li class="nav-item m-tabs__item">
				<a class="nav-link m-tabs__link" href="#"  data-toggle="modal" data-target="#cikismodal">Çıkış Dosya Yükle <i  style="color:green"  class="fa fa-arrow-up"></i> </a>
		</li>
</ul>
<div class="tab-content">


                                                        <div class="tab-pane active show" id="cikist" role="tabpanel">
                                                            <div class="m-stack m-stack--ver m-stack--general" style="min-height: 180px;">
                                                                <div class="m-stack__item m-stack__item--center m-stack__item--middle">
																																	<table cellpadding="0" cellspacing="0" border="0" class="display" id="cikis" width="100%">
																																		<thead>
																																			<tr>
																																				<th></th>
																																				<th>Sipariş Kodu</th>
																																				<th>Müşteri Adı</th>
																																				<th>İL</th>
																																				<th>İlçe</th>
																																				<th>Toplam</th>
																																				<th>Ödeme Şekli</th>
																																				<th>Telefon</th>
																																				<th>Adres</th>
																																			</tr>
																																		</thead>
																																	</table>
                                                                </div>
                                                            </div>
                                                        </div>
																												<div class="tab-pane"  id="girist" role="tabpanel">
																														<div class="m-stack m-stack--ver m-stack--general" style="min-height: 180px;">
																																<div class="m-stack__item m-stack__item--center m-stack__item--middle">
																																	<table cellpadding="0" cellspacing="0" border="0" class="display" id="giris" width="100%">
																																		<thead>
																																			<tr>
																																				<th></th>
																																				<th>Sipariş Kodu</th>
																																				<th>Barkodu</th>
																																				<th>Alış Tarihi</th>
																																				<th>Teslim Tarihi</th>
																																				<th>Tahsilat Tarihi</th>
																																				<th>Durum</th>
																																				<th>gramj</th>
																																				<th>Toplam</th>
																																				<th>Kargo parasi</th>

																																			</tr>
																																		</thead>
																																	</table>
																																</div>
																														</div>
																												</div>
																												<div class="tab-pane"  id="testa" role="tabpanel">
																														<div class="m-stack m-stack--ver m-stack--general" style="min-height: 180px;">
																																<div class="m-stack__item m-stack__item--center m-stack__item--middle">
																																	<table cellpadding="0" cellspacing="0" border="0" class="display" id="join" width="100%">
																																		<thead>
																																			<tr>
																																				<th></th>
																																				<th>Sipariş Kodu</th>
																																				<th>Müşteri Adı</th>
																																				<th>barkodu</th>
																																				<th>Alış Tarihi</th>
																																				<th>Teslim Tarihi</th>
																																				<th>Tahsilat Tarihi</th>
																																				<th>Durum</th>
																																				<th>kargo</th>
																																				<th>grmaj</th>
																																				<th>Toplam</th>

																																			</tr>
																																		</thead>
																																	</table>
																																</div>
																														</div>
																												</div>
																												<div class="tab-pane"  id="iade" role="tabpanel">
																														<div class="m-stack m-stack--ver m-stack--general" style="min-height: 180px;">
																																<div class="m-stack__item m-stack__item--center m-stack__item--middle">
																																	<table cellpadding="0" cellspacing="0" border="0" class="display" id="joini" width="100%">
																																		<thead>
																																			<tr>
																																				<th></th>
																																				<th>Sipariş Kodu</th>
																																				<th>Müşteri Adı</th>
																																				<th>Alış Tarihi</th>
																																				<th>Teslim Tarihi</th>
																																				<th>Durum</th>
																																				<th>Toplam</th>

																																			</tr>
																																		</thead>
																																	</table>
																																</div>
																														</div>
																												</div>
                                                    </div>


			</div>
			<script>
function change() {
	document.getElementById("cikist").className = "tab-pane active show";
	document.getElementById("girist").className = "tab-pane";
	document.getElementById("testa").className = "tab-pane";
    document.getElementById("iade").className = "tab-pane";
}
function changeg() {
	document.getElementById("girist").className = "tab-pane active show";
	document.getElementById("cikist").className = "tab-pane";
	document.getElementById("testa").className = "tab-pane";
    document.getElementById("iade").className = "tab-pane";
}
function changet() {
	document.getElementById("testa").className = "tab-pane active show";
	document.getElementById("cikist").className = "tab-pane";
	document.getElementById("girist").className = "tab-pane";
    document.getElementById("iade").className = "tab-pane";
}
function changei() {
	document.getElementById("iade").className = "tab-pane active show";
	document.getElementById("cikist").className = "tab-pane";
	document.getElementById("girist").className = "tab-pane";
    document.getElementById("testa").className = "tab-pane";
}

</script>
<?php include '../../config/urls.php'; ?>
