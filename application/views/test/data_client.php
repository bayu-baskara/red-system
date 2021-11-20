<!DOCTYPE html>
<html lang="en" >
	<!-- begin::Head -->
	<head>
		<?php include 'include/head.php';?>
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
								<?php include 'include/horizontal_menu.php';?>
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
					<?php include 'include/sidemenu.php';?>
				</div>
				<!-- END: Left Aside -->
				
				<!-- Your Content -->
				<div class="m-grid__item m-grid__item--fluid m-wrapper">
					<div class="m-content">
						<div class="m-portlet m-portlet--mobile">
							<div class="m-portlet__head">
								<div class="m-portlet__head-caption">
									<div class="m-portlet__head-title">
										<h3 class="m-portlet__head-text">
											Master Data Calon Client
										</h3>
									</div>
								</div>
							</div>
							<div class="m-portlet__body">
								<!--begin: Search Form -->
								<div class="m-form m-form--label-align-right m--margin-top-20 m--margin-bottom-30">
									<div class="row align-items-center">
										<div class="col-xl-8 order-2 order-xl-1">
											<a href="<?php echo base_url('/test/tambah_client')?>" class="btn btn-accent m-btn m-btn--custom m-btn--icon m-btn--air m-btn--pill">
												<span>
													<i class="la la-cart-plus"></i>
													<span>
														Tambah Data
													</span>
												</span>
											</a>
											<div class="m-separator m-separator--dashed d-xl-none"></div>
										</div>
										<div class="col-xl-4 order-1 order-xl-2 m--align-right">
											<div class="form-group m-form__group row align-items-center">
												<div class="col-md-12">
													<div class="m-input-icon m-input-icon--left">
														<input type="text" class="form-control m-input m-input--solid" placeholder="Search..." id="generalSearch">
														<span class="m-input-icon__icon m-input-icon__icon--left">
															<span>
																<i class="la la-search"></i>
															</span>
														</span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!--end: Search Form -->
								<!--begin: Datatable -->
								<table class="m-datatable" id="html_table" width="100%">
									<thead>
										<tr>
											<th title="">No</th>
											<th title="">Kategori</th>
											<th title="">Nama Perusahaan</th>
											<th title="">Alamat</th>
											<th title="">Jenis Usaha</th>
											<th title="">No Tlp</th>
											<th title="">Sumber Data</th>
											<th title="">Keterangan</th>
											<th title="">PIC</th>
											<th title="">Tahap Kinerja</th>
											<th title="">Action</th>
										</tr>
									</thead>
									<tbody>
										<?php 
											$count=0;
											foreach ($queryClient as $value) {
												$count=$count+1;
										?>
										<tr>
											<td><?php echo $count?></td>
											<td><?php echo $value->kat_client?></td>
											<td><?php echo $value->nama_client?></td>
											<td><?php echo $value->alamat_client?></td>
											<td><?php echo $value->jenis_usaha?></td>
											<td><?php echo $value->telp_client?></td>
											<td><?php echo $value->sm_data?></td>
											<td><?php echo $value->keterangan?></td>
											<td><?php echo $value->pic_client?></td>
											<td><?php echo $value->thp_kinerja?></td>
											<td>
												<a href="<?php echo base_url('/test/edit_client')?>/<?php echo $value->id_client?>" class="btn btn-primary m-btn m-btn--icon m-btn--icon-only">
													<i class="la la-pencil"></i>
												</a>
												<a href="<?php echo base_url('/test/det_client')?>/<?php echo $value->id_client?>" class="btn btn-success m-btn m-btn--icon m-btn--icon-only">
													<i class="la la-eye"></i>
												</a>
												<a href="#" class="btn btn-danger m-btn m-btn--icon m-btn--icon-only">
													<i class="la la-trash"></i>
												</a>
											</td>
										</tr>
										<?php }?>
									</tbody>
								</table>
								<!--end: Datatable -->
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- end:: Body -->
		<!-- begin::Footer -->
			<?php include 'include/footer.php';?>
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
		<!--end::Base Scripts -->   
        <!--begin::Page Resources -->
		<script src="<?php echo base_url('assets')?>/demo/default/custom/components/datatables/base/html-table.js" type="text/javascript"></script>
		<!--end::Page Resources -->
	</body>
	<!-- end::Body -->
</html>
