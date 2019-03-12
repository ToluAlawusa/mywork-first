@extends('layouts.app')
@section('content')

	<div class="site-content">
				<!-- Content -->
				<div class="content-area py-1">
					<div class="container-fluid">
						<h4>Assets</h4>
						<ol class="breadcrumb no-bg mb-1">
							<li class="breadcrumb-item"><a href="#">Home</a></li>
							<!-- <li class="breadcrumb-item"><a href="#">Widgets</a></li> -->
							<li class="breadcrumb-item active">Asset Management</li>
						</ol>
						<div class="row">
							<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
								<div class="box box-block bg-white tile tile-1 mb-2">
									<div class="t-icon right"><span class="bg-danger"></span><i class="ti-shopping-cart-full"></i></div>
									<div class="t-content">
										<h6 class="text-uppercase mb-1">All Assets</h6>
										<h1 class="mb-1">4</h1>
										<!-- <span class="text-muted">Lorem ipsum dolor sit amet</span> -->
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
								<div class="box box-block bg-white tile tile-1 mb-2">
									<div class="t-icon right"><span class="bg-success"></span><i class="ti-bar-chart"></i></div>
									<div class="t-content">
										<h6 class="text-uppercase mb-1">Asset Types</h6>
										<h1 class="mb-1">6</h1>
										<!-- <span class="text-muted">Lorem ipsum dolor sit amet</span> -->
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
								<div class="box box-block bg-white tile tile-1 mb-2">
									<div class="t-icon right"><span class="bg-primary"></span><i class="ti-package"></i></div>
									<div class="t-content">
										<h6 class="text-uppercase mb-1">Assets Assigned</h6>
										<h1 class="mb-1">8</h1>
										<!-- <span class="text-muted">Lorem ipsum dolor sit amet</span> -->
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
								<div class="box box-block bg-white tile tile-1 mb-2">
									<div class="t-icon right"><span class="bg-warning"></span><i class="ti-receipt"></i></div>
									<div class="t-content">
										<h6 class="text-uppercase mb-1">Unassigned Assets</h6>
										<h1 class="mb-1">1</h1>
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
										<h6 class="text-uppercase mb-1">Approved Assets</h6>
										<h1 class="mb-1">0</h1>
										<!-- <span class="text-muted">Lorem ipsum dolor sit amet</span> -->
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
								<div class="box box-block bg-white tile tile-1 mb-2">
									<div class="t-icon right"><span class="bg-success"></span><i class="ti-bar-chart"></i></div>
									<div class="t-content">
										<h6 class="text-uppercase mb-1">Assets pending Approval</h6>
										<h1 class="mb-1">14</h1>
										<!-- <span class="text-muted">Lorem ipsum dolor sit amet</span> -->
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
								<div class="box box-block bg-white tile tile-1 mb-2">
									<div class="t-icon right"><span class="bg-primary"></span><i class="ti-package"></i></div>
									<div class="t-content">
										<h6 class="text-uppercase mb-1">Total number of Employees</h6>
										<h1 class="mb-1">16</h1>
										<!-- <span class="text-muted">Lorem ipsum dolor sit amet</span> -->
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
								<div class="box box-block bg-white tile tile-1 mb-2">
									<div class="t-icon right"><span class="bg-warning"></span><i class="ti-receipt"></i></div>
									<div class="t-content">
										<h6 class="text-uppercase mb-1">Feedbacks</h6>
										<h1 class="mb-1">44</h1>
										<!-- <span class="text-muted">Lorem ipsum dolor sit amet</span> -->
									</div>
								</div>
							</div>
						</div>

						<div class="row row-md mb-2">
							<div class="col-md-4">
								<div class="box bg-white text-xs-center">
									<div class="box-block pb-1">
										<h5 class="mb-2">Assets Due for Return</h5>
										<div class="btn-group mb-1">
											<button type="button" class="btn btn-secondary active waves-effect waves-light">Week</button>
											<button type="button" class="btn btn-secondary waves-effect waves-light">Month</button>
											<button type="button" class="btn btn-secondary waves-effect waves-light">Year</button>
										</div>
										<div id="donut" class="chart-container demo-chart-2"></div>
									</div>
									<div class="box-block b-t">
										<span class="text-muted">Assigned on</span> <a class="text-primary" href="#"><span class="underline">today at 14:57</span></a>
									</div>
								</div>
							</div>
							
							<div class="col-md-8">
								<h5 style="margin: 20px;">Assigned Assets</h5>
								<div class="box bg-white">
									<table class="table table-grey-head mb-md-0">
										<thead>
											<tr>
												<th>#</th>
												<th>Employee</th>
												<th>Employee Department</th>
												<th>Asset Assigned</th>
												<th>Asset Code</th>
												<th>Date Assigned</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<th scope="row">1</th>
												<td>Tolulope Alawusa</td>
												<td>
													<a class="text-primary" href="#"><span class="underline">IT</span></a>
												</td>
												<td>
													<span class="text-muted">HP Pavilion Power</span>
												</td>
												<td>
													#0871
												</td>
												<td>
													14-02-2019
												</td>
											</tr>
											<tr>
												<th scope="row">1</th>
												<td>Tolulope Alawusa</td>
												<td>
													<a class="text-primary" href="#"><span class="underline">IT</span></a>
												</td>
												<td>
													<span class="text-muted">HP Pavilion Power</span>
												</td>
												<td>
													#0871
												</td>
												<td>
													14-02-2019
												</td>
											</tr>
											<tr>
												<th scope="row">1</th>
												<td>Tolulope Alawusa</td>
												<td>
													<a class="text-primary" href="#"><span class="underline">IT</span></a>
												</td>
												<td>
													<span class="text-muted">HP Pavilion Power</span>
												</td>
												<td>
													#0871
												</td>
												<td>
													14-02-2019
												</td>
											</tr>
											<tr>
												<th scope="row">1</th>
												<td>Tolulope Alawusa</td>
												<td>
													<a class="text-primary" href="#"><span class="underline">IT</span></a>
												</td>
												<td>
													<span class="text-muted">HP Pavilion Power</span>
												</td>
												<td>
													#0871
												</td>
												<td>
													14-02-2019
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

	    <!-- Neptune JS -->
	    <script type="text/javascript" src="{{ asset('back/js/app.js')}}"></script>
	    <script type="text/javascript" src="{{ asset('back/js/demo.js')}}"></script>
	    <script type="text/javascript" src="{{ asset('back/js/forms-upload.js')}}"></script>




@endsection