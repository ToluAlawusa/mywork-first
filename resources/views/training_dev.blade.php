@extends('layouts.app')
@section('content')

		<div class="site-content">
				<!-- Content -->
				<div class="content-area py-1">
					<div class="container-fluid">
						<h4>Employee Training</h4>
						<ol class="breadcrumb no-bg mb-1">
							<li class="breadcrumb-item"><a href="#">Home</a></li>
							<!-- <li class="breadcrumb-item"><a href="#">Widgets</a></li> -->
							<li class="breadcrumb-item active">Training & Career Development</li>
						</ol>
						<div class="row">
							<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
								<div class="box box-block bg-white tile tile-1 mb-2">
									<div class="t-icon right"><span class="bg-danger"></span><i class="ti-shopping-cart-full"></i></div>
									<div class="t-content">
										<h6 class="text-uppercase mb-1">All Training Courses</h6>
										<h1 class="mb-1">{{ count($trainT)}}</h1>
										<!-- <span class="text-muted">Lorem ipsum dolor sit amet</span> -->
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
								<div class="box box-block bg-white tile tile-1 mb-2">
									<div class="t-icon right"><span class="bg-success"></span><i class="ti-bar-chart"></i></div>
									<div class="t-content">
										<h6 class="text-uppercase mb-1">All Scheduled Trainings</h6>
										<h1 class="mb-1">{{ count($trainR)}}</h1>
										<!-- <span class="text-muted">Lorem ipsum dolor sit amet</span> -->
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
								<div class="box box-block bg-white tile tile-1 mb-2">
									<div class="t-icon right"><span class="bg-primary"></span><i class="ti-package"></i></div>
									<div class="t-content">
										<h6 class="text-uppercase mb-1">Trainings Completed</h6>
										<h1 class="mb-1">{{ count($trainR_complete)}}</h1>
										<!-- <span class="text-muted">Lorem ipsum dolor sit amet</span> -->
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
								<div class="box box-block bg-white tile tile-1 mb-2">
									<div class="t-icon right"><span class="bg-warning"></span><i class="ti-receipt"></i></div>
									<div class="t-content">
										<h6 class="text-uppercase mb-1">Uncompleted Trainings</h6>
										<h1 class="mb-1">{{ count($trainR_uncomplete)}}</h1>
										<!-- <span class="text-muted">Lorem ipsum dolor sit amet</span> -->
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
								<div class="box box-block bg-white tile tile-1 mb-2">
									<div class="t-icon right"><span class="bg-danger"></span><i class="ti-shopping-cart-full"></i></div>
									<div class="t-content">
										<h6 class="text-uppercase mb-1">Approved Trainings</h6>
										<h1 class="mb-1">{{ count($trainR_approv)}}</h1>
										<!-- <span class="text-muted">Lorem ipsum dolor sit amet</span> -->
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
								<div class="box box-block bg-white tile tile-1 mb-2">
									<div class="t-icon right"><span class="bg-success"></span><i class="ti-bar-chart"></i></div>
									<div class="t-content">
										<h6 class="text-uppercase mb-1">Trainings pending Approval</h6>
										<h1 class="mb-1">{{ count($trainR_pen)}}</h1>
										<!-- <span class="text-muted">Lorem ipsum dolor sit amet</span> -->
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
								<div class="box box-block bg-white tile tile-1 mb-2">
									<div class="t-icon right"><span class="bg-primary"></span><i class="ti-package"></i></div>
									<div class="t-content">
										<h6 class="text-uppercase mb-1">Total number of Employees</h6>
										<h1 class="mb-1">{{ count($empL)}}</h1>
										<!-- <span class="text-muted">Lorem ipsum dolor sit amet</span> -->
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
								<div class="box box-block bg-white tile tile-1 mb-2">
									<div class="t-icon right"><span class="bg-warning"></span><i class="ti-receipt"></i></div>
									<div class="t-content">
										<h6 class="text-uppercase mb-1">Feedbacks</h6>
										<h1 class="mb-1">0</h1>
										<!-- <span class="text-muted">Lorem ipsum dolor sit amet</span> -->
									</div>
								</div>
							</div>
							<!-- <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
								<div class="box box-block bg-white tile tile-1 mb-2">
									<div class="t-icon right"><span class="bg-warning"></span><i class="ti-receipt"></i></div>
									<div class="t-content">
										<h6 class="text-uppercase mb-1">Feedbacks</h6>
										<h1 class="mb-1">1,682</h1>
										<span class="text-muted">Lorem ipsum dolor sit amet</span>
									</div>
								</div>
							</div> -->
						</div>
						<!-- <div class="box box-block bg-white">
							<h5>Internal Trainings</h5>
							<p class="font-90 text-muted mb-1">Modals are streamlined, but flexible, dialog prompts with the minimum required functionality and smart defaults.</p>
							<button type="button" class="btn btn-primary">Small modal</button>
						</div>
						<div class="box box-block bg-white">
							<h5>External Trainings</h5>
							<p class="font-90 text-muted mb-1">Modals are streamlined, but flexible, dialog prompts with the minimum required functionality and smart defaults.</p>
							<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".small-modal">Small modal</button>
						</div> -->
						
						<div class="row row-md mb-2">
							<!-- <div class="col-md-4">
								<div class="box bg-white text-xs-center">
									<div class="box-block pb-1">
										<h5 class="mb-2">Open projects</h5>
										<div class="btn-group mb-1">
											<button type="button" class="btn btn-secondary active waves-effect waves-light">Week</button>
											<button type="button" class="btn btn-secondary waves-effect waves-light">Month</button>
											<button type="button" class="btn btn-secondary waves-effect waves-light">Year</button>
										</div>
										<div id="donut" class="chart-container demo-chart-2"></div>
									</div>
									<div class="box-block b-t">
										<span class="text-muted">last contract signed</span> <a class="text-primary" href="#"><span class="underline">today at 14:57</span></a>
									</div>
								</div>
							</div> -->
							<h5 style="margin: 20px">Ongoing Trainings</h5>
							<div class="col-md-12">
								<div class="box bg-white">
									<table class="table table-grey-head mb-md-0">
										<thead>
											<tr>
												<th>#</th>
												<th>Employee</th>
												<th>Training Course</th>
												<th>Training Duration</th>
												<th>Progress</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<th scope="row">1</th>
												<td>Jonathan Mel</td>
												<td>
													<a class="text-primary" href="#"><span class="underline">First project</span></a>
												</td>
												<td>
													<span class="text-muted">5 minutes ago</span>
												</td>
												<td>
													<progress class="progress progress-success progress-sm d-inline-block mb-0" value="44" max="100">100%</progress>
												</td>
											</tr>
											<tr>
												<th scope="row">2</th>
												<td>Larry Hal</td>
												<td>
													<a class="text-primary" href="#"><span class="underline">Second project</span></a>
												</td>
												<td>
													<span class="text-muted">3 days ago</span>
												</td>
												<td>
													<progress class="progress progress-danger progress-sm d-inline-block mb-0" value="75" max="100">100%</progress>
												</td>
											</tr>
											<tr>
												<th scope="row">3</th>
												<td>Ron Carran</td>
												<td>
													<a class="text-primary" href="#"><span class="underline">Third project</span></a>
												</td>
												<td>
													<span class="text-muted">Last monday</span>
												</td>
												<td>
													<progress class="progress progress-warning progress-sm d-inline-block mb-0" value="20" max="100">100%</progress>
												</td>
											</tr>
											<tr>
												<th scope="row">4</th>
												<td>Carleton Josiah</td>
												<td>
													<a class="text-primary" href="#"><span class="underline">Another project</span></a>
												</td>
												<td>
													<span class="text-muted">5 minutes ago</span>
												</td>
												<td>
													<progress class="progress progress-primary progress-sm d-inline-block mb-0" value="10" max="100">100%</progress>
												</td>
											</tr>
											<tr>
												<th scope="row">5</th>
												<td>Wolfe Stevie</td>
												<td>
													<a class="text-primary" href="#"><span class="underline">Old project</span></a>
												</td>
												<td>
													<span class="text-muted">3 days ago</span>
												</td>
												<td>
													<progress class="progress progress-info progress-sm d-inline-block mb-0" value="90" max="100">100%</progress>
												</td>
											</tr>
											<tr>
												<th scope="row">6</th>
												<td>Vance Osborn</td>
												<td>
													<a class="text-primary" href="#"><span class="underline">Important project</span></a>
												</td>
												<td>
													<span class="text-muted">Last monday</span>
												</td>
												<td>
													<progress class="progress progress-warning progress-sm d-inline-block mb-0" value="35" max="100">100%</progress>
												</td>
											</tr>
											<tr>
												<th scope="row">7</th>
												<td>Jonathan Mel</td>
												<td>
													<a class="text-primary" href="#"><span class="underline">First project</span></a>
												</td>
												<td>
													<span class="text-muted">5 minutes ago</span>
												</td>
												<td>
													<progress class="progress progress-success progress-sm d-inline-block mb-0" value="44" max="100">100%</progress>
												</td>
											</tr>
											<tr>
												<th scope="row">8</th>
												<td>Larry Hal</td>
												<td>
													<a class="text-primary" href="#"><span class="underline">Second project</span></a>
												</td>
												<td>
													<span class="text-muted">3 days ago</span>
												</td>
												<td>
													<progress class="progress progress-danger progress-sm d-inline-block mb-0" value="75" max="100">100%</progress>
												</td>
											</tr>
											<tr>
												<th scope="row">9</th>
												<td>Ron Carran</td>
												<td>
													<a class="text-primary" href="#"><span class="underline">Third project</span></a>
												</td>
												<td>
													<span class="text-muted">Last monday</span>
												</td>
												<td>
													<progress class="progress progress-warning progress-sm d-inline-block mb-0" value="20" max="100">100%</progress>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>

				</div>
				<!-- Footer -->
				<footer class="footer">
					<div class="container-fluid">
						<div class="row text-xs-center">
							<div class="col-sm-4 text-sm-left mb-0-5 mb-sm-0">
								2016 © Neptune
							</div>
							<div class="col-sm-8 text-sm-right">
								<ul class="nav nav-inline l-h-2">
									<li class="nav-item"><a class="nav-link text-black" href="#">Privacy</a></li>
									<li class="nav-item"><a class="nav-link text-black" href="#">Terms</a></li>
									<li class="nav-item"><a class="nav-link text-black" href="#">Help</a></li>
								</ul>
							</div>
						</div>
					</div>
				</footer>
			
		</div>	

		<script type="text/javascript" src="{{ asset('back/vendor/jquery/jquery-1.12.3.min.js')}}"></script>
	    <script type="text/javascript" src="{{ asset('back/vendor/tether/js/tether.min.js')}}"></script>
	    <script type="text/javascript" src="{{ asset('back/vendor/bootstrap4/js/bootstrap.min.js')}}"></script>
	    <script type="text/javascript" src="{{ asset('back/vendor/detectmobilebrowser/detectmobilebrowser.js')}}"></script>
	    <script type="text/javascript" src="{{ asset('back/vendor/jscrollpane/jquery.mousewheel.js')}}"></script>
	    <script type="text/javascript" src="{{ asset('back/vendor/jscrollpane/mwheelIntent.js')}}"></script>
	    <script type="text/javascript" src="{{ asset('back/vendor/jscrollpane/jquery.jscrollpane.min.js')}}"></script>
	    <script type="text/javascript" src="{{ asset('back/vendor/jquery-fullscreen-plugin/jquery.fullscreen-min.js')}}"></script>
	    <script type="text/javascript" src="{{ asset('back/vendor/waves/waves.min.js')}}"></script>
	    <script type="text/javascript" src="{{ asset('back/vendor/switchery/dist/switchery.min.js')}}"></script>
	    <script type="text/javascript" src="{{ asset('back/vendor/dropify/dist/js/dropify.min.js')}}"></script>
	    <script type="text/javascript" src="{{asset('back/vendor/flot/jquery.flot.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('back/vendor/flot/jquery.flot.resize.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('back/vendor/flot.tooltip/js/jquery.flot.tooltip.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('back/vendor/CurvedLines/curvedLines.js')}}"></script>
		<script type="text/javascript" src="{{asset('back/vendor/TinyColor/tinycolor.js')}}"></script>
		<script type="text/javascript" src="{{asset('back/vendor/sparkline/jquery.sparkline.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('back/vendor/raphael/raphael.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('back/vendor/morris/morris.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('back/vendor/jvectormap/jquery-jvectormap-2.0.3.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('back/vendor/jvectormap/jquery-jvectormap-world-mill.js')}}"></script>
		<script type="text/javascript" src="{{asset('back/vendor/peity/jquery.peity.js')}}"></script>

	    <!-- Neptune JS -->
	    <script type="text/javascript" src="{{ asset('back/js/app.js')}}"></script>
	    <script type="text/javascript" src="{{ asset('back/js/demo.js')}}"></script>
	    <script type="text/javascript" src="{{ asset('back/js/forms-upload.js')}}"></script>
	    <script type="text/javascript" src="{{asset('back/js/index.js')}}"></script>





@endsection