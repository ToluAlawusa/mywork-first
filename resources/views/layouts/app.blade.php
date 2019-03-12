<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
		<!-- Meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="description" content="">
		<meta name="author" content="">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
		<!-- Title -->
		<title>{{ config('app.name', 'Mywork') }}</title>

        

        <!-- Styles -->
       {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}


		<!-- Vendor CSS -->
		<link rel="stylesheet" href="{{asset('back/vendor/bootstrap4/css/bootstrap.min.css')}}">
		<link rel="stylesheet" href="{{asset('back/vendor/themify-icons/themify-icons.css')}}">
		<link rel="stylesheet" href="{{asset('back/vendor/font-awesome/css/font-awesome.min.css')}}">
		<link rel="stylesheet" href="{{asset('back/vendor/animate.css/animate.min.css')}}">
		<link rel="stylesheet" href="{{asset('back/vendor/jscrollpane/jquery.jscrollpane.css')}}">
		<link rel="stylesheet" href="{{asset('back/vendor/waves/waves.min.css')}}">
		<link rel="stylesheet" href="{{asset('back/vendor/switchery/dist/switchery.min.css')}}">
		<link rel="stylesheet" href="{{asset('back/vendor/morris/morris.css')}}">
        <link rel="stylesheet" href="{{asset('back/vendor/jvectormap/jquery-jvectormap-2.0.3.css')}}">

        <link rel="stylesheet" href="{{asset('back/vendor/clockpicker/dist/bootstrap-clockpicker.min.css')}}">
		<link rel="stylesheet" href="{{asset('back/vendor/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">
        <link rel="stylesheet" href="{{asset('back/vendor/bootstrap-daterangepicker/daterangepicker.css')}}">

        <link rel="stylesheet" href="{{asset('back/vendor/DataTables/css/dataTables.bootstrap4.min.css')}}">
		<link rel="stylesheet" href="{{asset('back/vendor/DataTables/Responsive/css/responsive.bootstrap4.min.css')}}">
		<link rel="stylesheet" href="{{asset('back/vendor/DataTables/Buttons/css/buttons.dataTables.min.css')}}">
		<link rel="stylesheet" href="{{asset('back/vendor/DataTables/Buttons/css/buttons.bootstrap4.min.css')}}">

		@if(Request::path() === 'Company_setting' || Request::path() === 'client' || Request::path() === 'support_maintenance' || strpos(Request::url(),'view_support_ticket') || strpos(Request::url(),'compliance_policy'))
		  <link rel="stylesheet" href="{{asset('back/vendor/dropify/dist/css/dropify.min.css')}}">
        @endif

        @if(strpos(Request::url(),'compliance_policy'))
        	<link rel="stylesheet" href="{{asset('back/vendor/summernote/summernote.css')}}">
        @endif


		<!-- Mywork CSS -->
		<link rel="stylesheet" href="{{asset('back/css/core.css')}}">

		<!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js')}}"></script>
		<![endif]-->
		
	</head>
	<body class="fixed-sidebar fixed-header skin-default content-appear">
		<div class="wrapper">
			<input type="hidden" name="" id="addr_lat" value="{{Session::get('latitude')}}">
			<input type="hidden" name="" id="addr_long" value="{{Session::get('longitude')}}">
			<input type="hidden" name="" id="resumptime" value="{{Session::get('resumption_time')}}">
			<input type="hidden" name="" id="resumpgrace" value="{{Session::get('grace_period')}}">
			<input type="hidden" name="" id="emp_curr_time" value="{{Session::get('employee_curr_time')}}">
			<input type="hidden" name="" id="chk_att_list" value="{{Session::get('chk_attendance_list')}}">
			<input type="hidden" name="" id="chk_att_location" value="{{Session::get('chk_attendance_location')}}">
			<input type="hidden" name="" id="all_att_check" value="{{Session::get('all_att_check')}}">
			<input type="hidden" name="" id="polic_id" value="{{Session::get('polID')}}">


			<!-- Preloader -->
			<div class="preloader"></div>

			<!-- Sidebar -->
			@include('layouts/navbar')

			<!-- Template options -->
			<div class="template-options">
				<div class="to-toggle"><i class="ti-settings"></i></div>
				<div class="custom-scroll custom-scroll-dark">
					<div class="to-content">
						<a class="btn btn-info btn-block waves-effect waves-light mb-2" href="https://themeforest.net/item/neptune-dashboard-ui-kit-for-web-application-development/18519415?ref=demo" target="_blank">BUY NOW $24</a>
						<h6>Layouts</h6>
						<div class="row mb-2 text-xs-center">
							<div class="col-xs-6 mb-2">
								<div class="to-item">
									<a href="{{url('home')}}">
										<img src="{{asset('img/layouts/default.png')}}" class="img-fluid">
									</a>
									<div class="text-muted">Default</div>
								</div>
							</div>
							<div class="col-xs-6 mb-2">
								<div class="to-item">
									<label>
										<input name="compact-sidebar" type="checkbox">
										<div class="to-icon"><i class="ti-check"></i></div>
										<img src="{{url('img/layouts/compact-sidebar.png')}}" class="img-fluid">
									</label>
									<div class="text-muted">Compact Sidebar</div>
								</div>
							</div>
							<div class="col-xs-6 mb-2">
								<div class="to-item">
									<label>
										<input name="fixed-header" type="checkbox" checked>
										<div class="to-icon"><i class="ti-check"></i></div>
										<img src="img/layouts/fixed-header.png" class="img-fluid">
									</label>
									<div class="text-muted">Fixed Header</div>
								</div>
							</div>
							<div class="col-xs-6 mb-2">
								<div class="to-item">
									<label>
										<input name="fixed-sidebar" type="checkbox" checked>
										<div class="to-icon"><i class="ti-check"></i></div>
										<img src="img/layouts/sticky-sidebar.png" class="img-fluid">
									</label>
									<div class="text-muted">Sticky Sidebar</div>
								</div>
							</div>
							<div class="col-xs-6 mb-2">
								<div class="to-item">
									<label>
										<input name="boxed-wrapper" type="checkbox">
										<div class="to-icon"><i class="ti-check"></i></div>
										<img src="img/layouts/boxed-wrapper.png" class="img-fluid">
									</label>
									<div class="text-muted">Boxed Wrapper</div>
								</div>
							</div>
							<div class="col-xs-6 mb-2">
								<div class="to-item">
									<label>
										<input name="static" type="checkbox">
										<div class="to-icon"><i class="ti-check"></i></div>
										<img src="img/layouts/static.png" class="img-fluid">
									</label>
									<div class="text-muted">Static</div>
								</div>
							</div>
						</div>
						<h6>Skins</h6>
						<div class="row">
							<div class="col-xs-3 mb-2">
								<label class="skin-label">
									<input name="skin" value="skin-default" type="radio" checked>
									<div class="to-icon"><i class="ti-check"></i></div>
									<div class="to-skin">
										<span class="skin-dark-blue"></span>
										<span class="skin-white"></span>
										<span class="skin-dark-blue"></span>
									</div>
								</label>
							</div>
							<div class="col-xs-3 mb-2">
								<label class="skin-label">
									<input name="skin" value="skin-1" type="radio">
									<div class="to-icon"><i class="ti-check"></i></div>
									<div class="to-skin">
										<span class="skin-dark-blue-2"></span>
										<span class="skin-dark-blue-2"></span>
										<span class="bg-white"></span>
									</div>
								</label>
							</div>
							<div class="col-xs-3 mb-2">
								<label class="skin-label">
									<input name="skin" value="skin-2" type="radio">
									<div class="to-icon"><i class="ti-check"></i></div>
									<div class="to-skin">
										<span class="bg-danger"></span>
										<span class="bg-white"></span>
										<span class="bg-black"></span>
									</div>
								</label>
							</div>
							<div class="col-xs-3 mb-2">
								<label class="skin-label">
									<input name="skin" value="skin-3" type="radio">
									<div class="to-icon"><i class="ti-check"></i></div>
									<div class="to-skin">
										<span class="bg-white"></span>
										<span class="bg-white"></span>
										<span class="bg-white"></span>
									</div>
								</label>
							</div>
							<div class="col-xs-3 mb-2">
								<label class="skin-label">
									<input name="skin" value="skin-4" type="radio">
									<div class="to-icon"><i class="ti-check"></i></div>
									<div class="to-skin">
										<span class="bg-white"></span>
										<span class="skin-dark-blue-2"></span>
										<span class="bg-white"></span>
									</div>
								</label>
							</div>
							<div class="col-xs-3 mb-2">
								<label class="skin-label">
									<input name="skin" value="skin-5" type="radio">
									<div class="to-icon"><i class="ti-check"></i></div>
									<div class="to-skin">
										<span class="bg-primary"></span>
										<span class="bg-primary"></span>
										<span class="bg-white"></span>
									</div>
								</label>
							</div>
							<div class="col-xs-3 mb-2">
								<label class="skin-label">
									<input name="skin" value="skin-6" type="radio">
									<div class="to-icon"><i class="ti-check"></i></div>
									<div class="to-skin">
										<span class="bg-black"></span>
										<span class="bg-info"></span>
										<span class="bg-black"></span>
									</div>
								</label>
							</div>
						</div>
						<div class="to-material">
							<div class="tom-checkbox"><input name="material-design" type="checkbox" class="js-switch" data-size="small" data-color="#20b9ae"></div>
							<div class="text-truncate">Material design</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Header -->
			<div class="site-header">
				<nav class="navbar navbar-light">
					<div class="navbar-left">
						<a class="navbar-brand" href="{{url('home')}}">
							<div class="logo"></div>
						</a>
						<div class="toggle-button dark sidebar-toggle-first float-xs-left hidden-md-up">
							<span class="hamburger"></span>
						</div>
						<div class="toggle-button-second dark float-xs-right hidden-md-up">
							<i class="ti-arrow-left"></i>
						</div>
						<div class="toggle-button dark float-xs-right hidden-md-up" data-toggle="collapse" data-target="#collapse-1">
							<span class="more"></span>
						</div>
					</div>
					<div class="navbar-right navbar-toggleable-sm collapse" id="collapse-1">
						<div class="toggle-button light sidebar-toggle-second float-xs-left hidden-sm-down">
							<span class="hamburger"></span>
						</div>
						<div class="toggle-button-second light float-xs-right hidden-sm-down">
							<i class="ti-arrow-left"></i>
						</div>
						<ul class="nav navbar-nav float-md-right">
							<li class="nav-item dropdown">
								<a class="nav-link" href="#" data-toggle="dropdown" aria-expanded="false">
									<i class="ti-flag-alt"></i>
									<span class="hidden-md-up ml-1">Tasks</span>
									<span class="tag tag-success top">3</span>
								</a>
								<div class="dropdown-tasks dropdown-menu dropdown-menu-right animated fadeInUp">
									<div class="t-item">
										<div class="mb-0-5">
											<a class="text-black" href="#">First Task</a>
											<span class="float-xs-right text-muted">75%</span>
										</div>
										<progress class="progress progress-danger progress-sm" value="75" max="100">100%</progress>
										<span class="avatar box-32">
											<img src="{{asset('back/img/avatars/2.jpg')}}" alt="">
										</span>
										<a class="text-black" href="#">John Doe</a>, <span class="text-muted">5 min ago</span>
									</div>
									<div class="t-item">
										<div class="mb-0-5">
											<a class="text-black" href="#">Second Task</a>
											<span class="float-xs-right text-muted">40%</span>
										</div>
										<progress class="progress progress-purple progress-sm" value="40" max="100">100%</progress>
										<span class="avatar box-32">
											<img src="{{asset('back/img/avatars/3.jpg')}}" alt="">
										</span>
										<a class="text-black" href="#">John Doe</a>, <span class="text-muted">15:07</span>
									</div>
									<div class="t-item">
										<div class="mb-0-5">
											<a class="text-black" href="#">Third Task</a>
											<span class="float-xs-right text-muted">100%</span>
										</div>
										<progress class="progress progress-warning progress-sm" value="100" max="100">100%</progress>
										<span class="avatar box-32">
											<img src="{{asset('back/img/avatars/4.jpg')}}" alt="">
										</span>
										<a class="text-black" href="#">John Doe</a>, <span class="text-muted">yesterday</span>
									</div>
									<div class="t-item">
										<div class="mb-0-5">
											<a class="text-black" href="#">Fourth Task</a>
											<span class="float-xs-right text-muted">60%</span>
										</div>
										<progress class="progress progress-success progress-sm" value="60" max="100">100%</progress>
										<span class="avatar box-32">
											<img src="{{asset('back/img/avatars/5.jpg')}}" alt="">
										</span>
										<a class="text-black" href="#">John Doe</a>, <span class="text-muted">3 days ago</span>
									</div>
									<a class="dropdown-more" href="#">
										<strong>View all tasks</strong>
									</a>
								</div>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link" href="#" data-toggle="dropdown" aria-expanded="false">
									<i class="ti-email"></i>
									<span class="hidden-md-up ml-1">Notifications</span>
									<span class="tag tag-danger top">12</span>
								</a>
								<div class="dropdown-messages dropdown-tasks dropdown-menu dropdown-menu-right animated fadeInUp">
									<div class="m-item">
										<div class="mi-icon bg-info"><i class="ti-comment"></i></div>
										<div class="mi-text"><a class="text-black" href="#">John Doe</a> <span class="text-muted">commented post</span> <a class="text-black" href="#">Lorem ipsum dolor</a></div>
										<div class="mi-time">5 min ago</div>
									</div>
									<div class="m-item">
										<div class="mi-icon bg-danger"><i class="ti-heart"></i></div>
										<div class="mi-text"><a class="text-black" href="#">John Doe</a> <span class="text-muted">liked post</span> <a class="text-black" href="#">Lorem ipsum dolor</a></div>
										<div class="mi-time">15:07</div>
									</div>
									<div class="m-item">
										<div class="mi-icon bg-purple"><i class="ti-user"></i></div>
										<div class="mi-text"><a class="text-black" href="#">John Doe</a> <span class="text-muted">followed</span> <a class="text-black" href="#">Kate Doe</a></div>
										<div class="mi-time">yesterday</div>
									</div>
									<div class="m-item">
										<div class="mi-icon bg-danger"><i class="ti-heart"></i></div>
										<div class="mi-text"><a class="text-black" href="#">John Doe</a> <span class="text-muted">liked post</span> <a class="text-black" href="#">Lorem ipsum dolor</a></div>
										<div class="mi-time">3 days ago</div>
									</div>
									<a class="dropdown-more" href="#">
										<strong>View all notifications</strong>
									</a>
								</div>
							</li>
							<li class="nav-item dropdown hidden-sm-down">
								<a href="#" data-toggle="dropdown" aria-expanded="false">
									<span class="avatar box-32">
										<img src="{{asset('back/img/avatars/1.jpg')}}" alt="">
									</span>
								</a>
								<div class="dropdown-menu dropdown-menu-right animated fadeInUp">
									<a class="dropdown-item" href="#">
										<i class="ti-email mr-0-5"></i> Inbox
									</a>
									<a class="dropdown-item" href="#">
										<i class="ti-user mr-0-5"></i> Profile
									</a>
									<a class="dropdown-item" href="#">
										<i class="ti-settings mr-0-5"></i> Settings
									</a>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="#"><i class="ti-help mr-0-5"></i> Help</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                     <i class="ti-power-off mr-0-5"></i>
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
								</div>
							</li>
						</ul>
						<ul class="nav navbar-nav">
							<li class="nav-item hidden-sm-down">
								<a class="nav-link toggle-fullscreen" href="#">
									<i class="ti-fullscreen"></i>
								</a>
							</li>
							<li class="nav-item dropdown hidden-sm-down">
								<a class="nav-link" href="#" data-toggle="dropdown" aria-expanded="false">
									<i class="ti-layout-grid3"></i>
								</a>
								<div class="dropdown-apps dropdown-menu animated fadeInUp">
									<div class="a-grid">
										<div class="row row-sm">
											<div class="col-xs-4">
												<div class="a-item">
													<a href="#">
														<div class="ai-icon"><img class="img-fluid" src="img/brands/dropbox.png" alt=""></div>
														<div class="ai-title">Dropbox</div>
													</a>
												</div>
											</div>
											<div class="col-xs-4">
												<div class="a-item">
													<a href="#">
														<div class="ai-icon"><img class="img-fluid" src="img/brands/github.png" alt=""></div>
														<div class="ai-title">Github</div>
													</a>
												</div>
											</div>
											<div class="col-xs-4">
												<div class="a-item">
													<a href="#">
														<div class="ai-icon"><img class="img-fluid" src="img/brands/wordpress.png" alt=""></div>
														<div class="ai-title">Wordpress</div>
													</a>
												</div>
											</div>
											<div class="col-xs-4">
												<div class="a-item">
													<a href="#">
														<div class="ai-icon"><img class="img-fluid" src="img/brands/gmail.png" alt=""></div>
														<div class="ai-title">Gmail</div>
													</a>
												</div>
											</div>
											<div class="col-xs-4">
												<div class="a-item">
													<a href="#">
														<div class="ai-icon"><img class="img-fluid" src="img/brands/drive.png" alt=""></div>
														<div class="ai-title">Drive</div>
													</a>
												</div>
											</div>
											<div class="col-xs-4">
												<div class="a-item">
													<a href="#">
														<div class="ai-icon"><img class="img-fluid" src="img/brands/dribbble.png" alt=""></div>
														<div class="ai-title">Dribbble</div>
													</a>
												</div>
											</div>
										</div>
									</div>
									<a class="dropdown-more" href="#">
										<strong>View all apps</strong>
									</a>
								</div>
							</li>
						</ul>
						<div class="header-form float-md-left ml-md-2">
							<form>
								<input type="text" class="form-control b-a" placeholder="Search for...">
								<button type="submit" class="btn bg-white b-a-0">
									<i class="ti-search"></i>
								</button>
							</form>
						</div>
					</div>
				</nav>
			</div>



        <main class="py-4">
            @include('sweetalert::alert')
            @yield('content')
        </main>
        <!-- Scripts -->
        	@include('modals.location_reason')
        	@include('modals.lateness_reason')
        <script src="{{ asset('js/app.js') }}" defer></script>
        @include('logic.attendancejs')

</body>
</html>
