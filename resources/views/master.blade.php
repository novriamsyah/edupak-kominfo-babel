<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="robots" content="" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Workload : Workload Project Management Admin  Bootstrap 5 Template" />
	<meta property="og:title" content="Workload : Workload Project Management Admin  Bootstrap 5 Template" />
	<meta property="og:description" content="Workload : Workload Project Management Admin  Bootstrap 5 Template" />
	<meta property="og:image" content="https:/workload.dexignlab.com/xhtml/social-image.png" />
	<meta name="format-detection" content="telephone=no">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	
	<title>Komisi Informasi</title>
	
	<!-- FAVICONS ICON -->
	<link rel="shortcut icon" type="image/png" href="{{ asset('assets/images/iconfav.png') }}" />
	<link href="{{ asset('dash_temp/assets/vendor/jquery-nice-select/css/nice-select.css')}}" rel="stylesheet">
	<link href="{{ asset('dash_temp/assets/vendor/owl-carousel/owl.carousel.css')}}" rel="stylesheet">
	
	<!-- Style css -->
    <link href="{{ asset('dash_temp/assets/css/style.css')}}" rel="stylesheet">
	
	@yield('css')
	
</head>
<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
		<div class="lds-ripple">
			<div></div>
			<div></div>
		</div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
		<div class="nav-header">
            <a href="index.html" class="brand-logo">
				<img src="{{ asset('icons/dupak2.png') }}" alt="logo KIP" width="50" height="50" >

				<div class="brand-title">
					<h2 class="">E-Dupak</h2>
					<span class="brand-sub-title">KOMINFO BABEL</span>
				</div>
            </a>
            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>

        <div class="header border-bottom">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
							<div class="dashboard_bar">
                                Dashboard
                            </div>
                        </div>
                        <ul class="navbar-nav header-right">
							{{-- <li class="nav-item d-flex align-items-center">
								<div class="input-group search-area">
									<input type="text" class="form-control" placeholder="Search here...">
									<span class="input-group-text"><a href="javascript:void(0)"><i class="flaticon-381-search-2"></i></a></span>
								</div>
							</li> --}}
							<li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown">
                                    <img src="{{ asset('assets/images/user.jpg')}}" width="20" alt=""/>
									<div class="header-info ms-3">
										<span class="fs-18 font-w500 mb-2">{{auth()->user()->role}}</span>
										<small class="fs-12 font-w400">{{auth()->user()->email}}</small>
									</div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="{{url('/logout')}}" class="dropdown-item ai-icon">
                                        <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                                        <span class="ms-2">Logout </span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
				</nav>
			</div>
		</div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="dlabnav">
            <div class="dlabnav-scroll">
				<ul class="metismenu" id="menu">
                    <li><a class="" href="{{url('/dashboard')}}" aria-expanded="false">
							<i class="fas fa-home"></i>
							<span class="nav-text">Dashboard</span>
						</a>
                    </li>
					@if (auth()->user()->role == "super_admin")
					<li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
						<i class="fas fa-info-circle"></i>
							<span class="nav-text">Kelola Data</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="{{url('/kelola_user')}}">Kelola User</a></li>
                        </ul>
                    </li>
					@endif
					@if (auth()->user()->role == "super_admin" || auth()->user()->role == "admin_ver")
					<li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
						<i class="fas fa-info-circle"></i>
							<span class="nav-text">Master Data</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="{{url('/kelola_pemohon')}}">Jenis Pemohon</a></li>
							<li><a href="{{url('/kelola_identitas')}}">Jenis Identitas</a></li>
							<li><a href="{{url('/kelola_pekerjaan')}}">Jenis Pekerjaan</a></li>
							<li><a href="{{url('/kelola_register')}}">Data Register User</a></li>
							<li><a href="{{url('/kelola_template')}}">Data Template</a></li>
                        </ul>
                    </li>
					@endif
                </ul>
			</div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->

		
		<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
			<div class="container-fluid">

				@yield('konten')

            </div>
        </div>

        <!--**********************************
            Content body end
        ***********************************-->

		
        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by <a href="https://dexignlab.com/" target="_blank">DexignLab</a> 2021</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->


	</div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="{{ asset('dash_temp/assets/vendor/global/global.min.js') }}"></script>
	<script src="{{ asset('dash_temp/assets/vendor/chart.js/Chart.bundle.min.js') }}"></script>
	{{-- <script src="{{ asset('dash_temp/asset/vendor/jquery-nice-select/js/jquery.nice-select.min.js') }}"></script> --}}
	
	<!-- Apex Chart -->
	<script src="{{ asset('dash_temp/assets/vendor/apexchart/apexchart.js') }}"></script>
	
	<script src="{{ asset('dash_temp/assets/vendor/chart.js/Chart.bundle.min.js') }}"></script>
	
	<!-- Chart piety plugin files -->
    <script src="{{ asset('dash_temp/assets/vendor/peity/jquery.peity.min.js') }}"></script>
	<!-- Dashboard 1 -->
	<script src="{{ asset('dash_temp/assets/js/dashboard/dashboard-1.js') }}"></script>
	
	<script src="{{ asset('dash_temp/assets/vendor/owl-carousel/owl.carousel.js') }}"></script>
	
    <script src="{{ asset('dash_temp/assets/js/custom.min.js') }}"></script>
	<script src="{{ asset('dash_temp/assets/js/dlabnav-init.js') }}"></script>
	
   
	<script>
		function cardsCenter()
		{
			
			/*  testimonial one function by = owl.carousel.js */
			
	
			
			jQuery('.card-slider').owlCarousel({
				loop:true,
				margin:10,
				nav:false,
				//center:true,
				slideSpeed: 3000,
				paginationSpeed: 3000,
				dots: false,
				navText: ['', ''],
				responsive:{
					0:{
						items:1
					},
					576:{
						items:2
					},	
					800:{
						items:2
					},			
					991:{
						items:2
					},
					1200:{
						items:3
					},
					1600:{
						items:4
					}
				}
			})
		}
		
		jQuery(window).on('load',function(){
			setTimeout(function(){
				cardsCenter();
			}, 1000); 
		});
		
	</script>
	@yield('script')
</body>
</html>