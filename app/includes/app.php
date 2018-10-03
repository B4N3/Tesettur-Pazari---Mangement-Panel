
<?php require  'app/config/urls.php'; ?>
<!DOCTYPE html>
<html lang="en" >
	<?php include ''.$inclueds.'Head.php' ?>
	<!-- begin::Body -->
	<body  style="background-image: url(<?=$assets?>assets/app/media/img/bg/bg-7.jpg)"  class="m-page--fluid m-page--loading-enabled m-page--loading m-header--fixed m-header--fixed-mobile m-footer--push m-aside--offcanvas-default"  >
		<?php include ''.$inclueds.'loader.php' ?>
		<!-- begin:: Page -->
		<div class="m-grid m-grid--hor m-grid--root m-page">
			<?php include ''.$inclueds.'Header.php' ?>
			<!-- begin::Body -->
			<div class="m-grid__item m-grid__item--fluid  m-grid m-grid--ver-desktop m-grid--desktop m-page__container m-body">
				<div class="m-grid__item m-grid__item--fluid m-wrapper">
					<?php include ''.$inclueds.'Subheader.php' ?>
					<div class="m-content">
						<div class="row">

								<!--Begin::Section-->
								<?php 	include 'app/config/web.php'; ?>
								<!--End::Section-->

						</div>
					</div>
				</div>
			</div>
			<!-- end::Body -->
			<?php include ''.$inclueds.'Footer.php' ?>
		</div>
		<!-- end:: Page -->
		<?php include ''.$inclueds.'Sidebar.php' ?>
		<!-- begin::Scroll Top -->
		<div id="m_scroll_top" class="m-scroll-top">
			<i class="la la-arrow-up"></i>
		</div>
		<!-- end::Scroll Top -->
		<!-- begin::Quick Nav -->
		<ul class="m-nav-sticky" style="margin-top: 30px;">
			<li class="m-nav-sticky__item" data-toggle="m-tooltip" title="Purchase" data-placement="left">
				<a href="https://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes" target="_blank"><i class="la la-cart-arrow-down"></i></a>
			</li>
			<li class="m-nav-sticky__item" data-toggle="m-tooltip" title="Documentation" data-placement="left">
				<a href="https://keenthemes.com/metronic/documentation.html" target="_blank"><i class="la la-code-fork"></i></a>
			</li>
			<li class="m-nav-sticky__item" data-toggle="m-tooltip" title="Support" data-placement="left">
				<a href="https://keenthemes.com/forums/forum/support/metronic5/" target="_blank"><i class="la la-life-ring"></i></a>
			</li>
		</ul>
		<!-- end::Quick Nav -->
		<input type="hidden" name="token" id="token" value="<?=$token?>">
		<?php include ''.$inclueds.'Scripts.php' ?>
	</body>
	<!-- end::Body -->
</html>
