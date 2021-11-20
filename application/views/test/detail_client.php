<!DOCTYPE html>
<html lang="en" >
	<!-- begin::Head -->
	<head>
		<?php include'include/head.php';?>
	</head>
	<!-- end::Head -->
    <!-- begin::Body -->
	<body class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default"  >
		<!-- begin:: Page -->
		<div class="m-grid m-grid--hor m-grid--root m-page">
			<!-- BEGIN: Header -->
			<header class="m-grid__item    m-header "  data-minimize-offset="200" data-minimize-mobile-offset="200" >
				<div class="m-container m-container--fluid m-container--full-height">
					<div class="m-stack m-stack--ver m-stack--desktop">
						<!-- BEGIN: Brand -->
						<div class="m-stack__item m-brand  m-brand--skin-dark ">
							<div class="m-stack m-stack--ver m-stack--general">
								<div class="m-stack__item m-stack__item--middle m-brand__logo">
									<a href="index.html" class="m-brand__logo-wrapper">
										<img alt="" src="assets/demo/default/media/img/logo/logo_default_dark.png"/>
									</a>
								</div>
								<div class="m-stack__item m-stack__item--middle m-brand__tools">
									<!-- BEGIN: Left Aside Minimize Toggle -->
									<a href="javascript:;" id="m_aside_left_minimize_toggle" class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-desktop-inline-block 
					 ">
										<span></span>
									</a>
									<!-- END -->
							<!-- BEGIN: Responsive Aside Left Menu Toggler -->
									<a href="javascript:;" id="m_aside_left_offcanvas_toggle" class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-tablet-and-mobile-inline-block">
										<span></span>
									</a>
									<!-- END -->
							<!-- BEGIN: Responsive Header Menu Toggler -->
									<a id="m_aside_header_menu_mobile_toggle" href="javascript:;" class="m-brand__icon m-brand__toggler m--visible-tablet-and-mobile-inline-block">
										<span></span>
									</a>
									<!-- END -->
							<!-- BEGIN: Topbar Toggler -->
									<a id="m_aside_header_topbar_mobile_toggle" href="javascript:;" class="m-brand__icon m--visible-tablet-and-mobile-inline-block">
										<i class="flaticon-more"></i>
									</a>
									<!-- BEGIN: Topbar Toggler -->
								</div>
							</div>
						</div>
						<!-- END: Brand -->
						<div class="m-stack__item m-stack__item--fluid m-header-head" id="m_header_nav">
							<!-- BEGIN: Horizontal Menu -->
							<button class="m-aside-header-menu-mobile-close  m-aside-header-menu-mobile-close--skin-dark " id="m_aside_header_menu_mobile_close_btn">
								<i class="la la-close"></i>
							</button>
							<div id="m_header_topbar" class="m-topbar  m-stack m-stack--ver m-stack--general">
								<?php include'include/horizontal_menu.php';?>
							</div>
						</div>
					</div>
				</div>
			</header>
			<!-- END: Header -->		
			<!-- begin::Body -->
			<div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">
				<!-- BEGIN: Left Aside -->
				<button class="m-aside-left-close  m-aside-left-close--skin-dark " id="m_aside_left_close_btn">
					<i class="la la-close"></i>
				</button>
				<div id="m_aside_left" class="m-grid__item	m-aside-left  m-aside-left--skin-dark ">
				<!-- BEGIN: Aside Menu -->
					<?php include'include/sidemenu.php';?>
				</div>
				<!-- END: Left Aside -->
				<!-- END: Left Aside -->
				<div class="m-grid__item m-grid__item--fluid m-wrapper">
					<!-- BEGIN: Subheader -->
					<!-- END: Subheader -->
					<div class="m-content">
						<div class="row">
							<div class="col-lg-12">
								<!--begin::Portlet-->
								<div class="m-portlet">
									<div class="m-portlet__head">
										<div class="m-portlet__head-caption">
											<h3 class="m--align-center m-portlet__head-text">View Data Client</h3>
										</div>
									</div>
									<!--begin::Form-->
									<form class="m-form m-form--label-align-right" action="" method="POST">
										<div class="m-portlet__body">
											<div class="m-form__section m-form__section--first">
												<div class="m-form__group form-group row">
													<label class="col-lg-2 col-form-label">
														Kategori
													</label>
													<div class="col-lg-10">
														<input type="text" class="form-control m-input" readonly placeholder="" value="<?php echo $queryView->kat_client?>" name=kat_client">														
														</select>
													</div>
												</div>
												<div class="form-group m-form__group row">
													<label class="col-lg-2 col-form-label">
														Nama Perusahaan
													</label>
													<div class="col-lg-10">
														<input type="text" class="form-control m-input" readonly placeholder="Masukkan Nama Perusahaan" value="<?php echo $queryView->nama_client?>" name="nama_client">
													</div>
												</div>
												<div class="form-group m-form__group row">
													<label class="col-lg-2 col-form-label">
														Alamat Perusahaan
													</label>
													<div class="col-lg-10">
														<input type="text" class="form-control m-input" readonly placeholder="Masukkan Alamat Perusahaan" value="<?php echo $queryView->alamat_client?>" name="alamat_client">
													</div>
												</div>
												<div class="form-group m-form__group row">
													<label class="col-lg-2 col-form-label">
														Jenis Usaha
													</label>
													<div class="col-lg-10">
														<input type="text" class="form-control m-input" readonly placeholder="Masukkan Jenis Usaha" value="<?php echo $queryView->jenis_usaha?>" name="jenis_usaha">
													</div>
												</div>
												<div class="form-group m-form__group row">
													<label class="col-lg-2 col-form-label">
														No. Telp
													</label>
													<div class="col-lg-10">
														<input type="number" required class="form-control m-input" readonly placeholder="Masukkan No. Telp" value="<?php echo $queryView->telp_client?>" name="telp_client">
													</div>
												</div>
												<div class="form-group m-form__group row">
													<label class="col-lg-2 col-form-label">
														Sumber Data
													</label>
													<div class="col-lg-4">
														<input type="text" required class="form-control m-input" readonly placeholder="" value="<?php echo $queryView->sm_data?>" name="sm_data">
													</div>
													<div class="col-lg-6">
														<input type="text" required class="form-control m-input" readonly placeholder="Keterangan" value="<?php echo $queryView->keterangan?>" name="keterangan">
													</div>
												</div>
												<div class="form-group m-form__group row">
													<label class="col-lg-2 col-form-label">
														Nama PIC
													</label>
													<div class="col-lg-10">
														<input type="text" required class="form-control m-input" readonly placeholder="Masukkan Nama PIC" value="<?php echo $queryView->pic_client?>" name="pic_client">
													</div>
												</div>
												<div class="m-form__group form-group row">
													<label class="col-lg-2 col-form-label">
														Tahap Kinerja
													</label>
													<div class="col-lg-10">
														<input type="text" required class="form-control m-input" readonly placeholder="Masukkan Nama PIC" value="<?php echo $queryView->thp_kinerja?>" name="thp_kinerja">
													</div>
												</div>
											</div>
										</div>
										<div class="m-portlet__foot m-portlet__foot--fit m--align-right">
											<div class="m-form__actions m-form__actions">
												<div class="row">
													<div class="col-lg-12">
														<button type="reset" class="btn btn-primary">
															Kembali
														</button>
													</div>
												</div>
											</div>
										</div>
									</form>
									<!--end::Form-->
								</div>
								<!--end::Portlet-->
		<!--begin::Portlet-->
									<!--end::Form-->
								</div>
								<!--end::Portlet-->
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- end:: Body -->
	<!-- begin::Footer -->
			<?php include'include/footer.php';?>
			<!-- end:: Footer -->	
		<!-- end:: Page -->		  

	    <!-- begin::Scroll Top -->
		<div class="m-scroll-top m-scroll-top--skin-top" data-toggle="m-scroll-top" data-scroll-offset="500" data-scroll-speed="300">
			<i class="la la-arrow-up"></i>
		</div>
		<!-- end::Scroll Top -->
    	<!--begin::Base Scripts -->
		<script src="<?php echo base_url('assets')?>/vendors/base/vendors.bundle.js" type="text/javascript"></script>
		<script src="<?php echo base_url('assets')?>/demo/default/base/scripts.bundle.js" type="text/javascript"></script>
		<script src="<?php echo base_url('assets')?>/app/js/w3-include-HTML.js"></script>
		<script src="<?php echo base_url('assets')?>/demo/default/custom/components/forms/widgets/select2.js" type="text/javascript"></script>
		<!--end::Base Scripts -->   
	</body>
	<!-- end::Body -->
</html>