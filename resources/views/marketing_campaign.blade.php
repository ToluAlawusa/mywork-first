@extends('layouts.app')
@section('content')

	<div class="site-content">
				<!-- Content -->
				<div class="content-area py-1">
					<div class="container-fluid">
						<h4>Campaigns</h4>
						<ol class="breadcrumb no-bg mb-1">
							<li class="breadcrumb-item"><a href="#">Home</a></li>
							<li class="breadcrumb-item"><a href="#">Marketing Campaigns</a></li>
							<li class="breadcrumb-item active">Campaign Metrics</li>
						</ol>
						<div class="row">
							<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
								<div class="box box-block bg-white tile tile-1 mb-2">
									<div class="t-icon right"><span class="bg-danger"></span><i class="ti-shopping-cart-full"></i></div>
									<div class="t-content">
										<h6 class="text-uppercase mb-1">All Campaigns</h6>
										<h1 class="mb-1">4</h1>
										<!-- <span class="text-muted">Lorem ipsum dolor sit amet</span> -->
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
								<div class="box box-block bg-white tile tile-1 mb-2">
									<div class="t-icon right"><span class="bg-success"></span><i class="ti-bar-chart"></i></div>
									<div class="t-content">
										<h6 class="text-uppercase mb-1">Campaign Types</h6>
										<h1 class="mb-1">6</h1>
										<!-- <span class="text-muted">Lorem ipsum dolor sit amet</span> -->
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
								<div class="box box-block bg-white tile tile-1 mb-2">
									<div class="t-icon right"><span class="bg-primary"></span><i class="ti-package"></i></div>
									<div class="t-content">
										<h6 class="text-uppercase mb-1">Completed Campaigns</h6>
										<h1 class="mb-1">8</h1>
										<!-- <span class="text-muted">Lorem ipsum dolor sit amet</span> -->
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
								<div class="box box-block bg-white tile tile-1 mb-2">
									<div class="t-icon right"><span class="bg-warning"></span><i class="ti-receipt"></i></div>
									<div class="t-content">
										<h6 class="text-uppercase mb-1">Uncompleted Campaigns</h6>
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
										<h6 class="text-uppercase mb-1">Internal Campaigns</h6>
										<h1 class="mb-1">0</h1>
										<!-- <span class="text-muted">Lorem ipsum dolor sit amet</span> -->
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
								<div class="box box-block bg-white tile tile-1 mb-2">
									<div class="t-icon right"><span class="bg-success"></span><i class="ti-bar-chart"></i></div>
									<div class="t-content">
										<h6 class="text-uppercase mb-1">External Campaigns</h6>
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
						<div class="row row-md mb-2" style="margin-top:30px">
                            
                                <div class="col-md-3">
                                    <div class="card">
                                        <div class="card-header text-uppercase"><b># Latest Campaigns</b></div>
                                        <div class="card-block">
                                            <div class="form-group">
                                                <label class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input">
                                                    <span class="custom-control-indicator"></span>
                                                    <span class="custom-control-description">Adidas</span>
                                                </label>
                                            </div>
                                            <div class="form-group">
                                                <label class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" checked>
                                                    <span class="custom-control-indicator"></span>
                                                    <span class="custom-control-description">Lacoste</span>
                                                </label>
                                            </div>
                                            <div class="form-group">
                                                <label class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input">
                                                    <span class="custom-control-indicator"></span>
                                                    <span class="custom-control-description">Nike</span>
                                                </label>
                                            </div>
                                            <div class="form-group">
                                                <label class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" checked>
                                                    <span class="custom-control-indicator"></span>
                                                    <span class="custom-control-description">Puma</span>
                                                </label>
                                            </div>
                                            <div class="form-group mb-0">
                                                <label class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input">
                                                    <span class="custom-control-indicator"></span>
                                                    <span class="custom-control-description">Reebok</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            
                            <div class="box box-block bg-white col-md-5" style="margin-left:10px">
                                <!-- <h5 class="mb-1">Employee Payroll Data</h5> -->
                                <button style="margin-left: 10px; float: right; margin-bottom: 5px" class="btn btn-rounded btn-success" data-toggle="modal" data-target="#addCampaignType"><b>+</b>Add Campaign Type</button>
                                <br>
                                <table class="table table-striped table-bordered dataTable" id="table-2">
                                    <thead>
                                        <tr>
                                            <th>S/N</th>
                                            <th>Type</th>
                                            <th>Option</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($camp_type as $indexKey => $camp_types)
                                        <tr>
                                            
                                            <td>{{$indexKey+1}}</td>
                                            <td>{{$camp_types->type_name}}</td>
                                            <td><div class="clearfix">
                                                <div class="dropdown dropup float-xs-left mr-0-25">
                                        <button class="btn btn-primary dropdown-toggle btn-rounded" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Action
                                        </button>
                                        <div class="dropdown-menu animated flipInY" aria-labelledby="dropdownMenuButton">
                                            <button class="dropdown-item" data-toggle="modal" data-target="#editTrainingTypes" data-identity=""
                                        data-name="" data-duration="" data-cert="" data-loca="">Edit</button>
                                            <button class="dropdown-item" data-toggle="modal" data-target="#deleteTrainingTypeData" data-identity="" data-name="">Delete</button>
                                        </div>
                                    </div></div></td>
                                            
                                        </tr>
                                        @endforeach
                                            
                                    </tbody>
                                    <!-- <tfoot>
                                        <tr>
                                            <th>Rendering engine</th>
                                            <th>Browser</th>
                                            <th>Platform(s)</th>
                                            <th>Engine version</th>
                                            <th>CSS grade</th>
                                        </tr>
                                    </tfoot> -->
                                </table>
                            </div>
                            <div class="box box-block bg-white col-md-3" style="margin-left:30px">
                                <!-- <h5 class="mb-1">Employee Payroll Data</h5> -->
                                <button style="margin-left: 10px; float: right; margin-bottom: 5px" class="btn btn-rounded btn-success" data-toggle="modal" data-target="#addCampaignStatus"><b>+</b>Add Campaign Status</button>
                                <table class="table table-striped table-bordered dataTable" id="table-2">
                                    <thead>
                                        <tr>
                                            <th>S/N</th>
                                            <th>Status</th>
                                            <th>Option</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($camp_status as $indexKey => $camp_statuses)
                                        <tr>
                                            <td>{{$indexKey+1}}</td>
                                            <td>{{$camp_statuses->status_name}}</td>
                                            <td><div class="clearfix">
                                                <div class="dropdown dropup float-xs-left mr-0-25">
                                        <button class="btn btn-primary dropdown-toggle btn-rounded" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Action
                                        </button>
                                        <div class="dropdown-menu animated flipInY" aria-labelledby="dropdownMenuButton">
                                            <button class="dropdown-item" data-toggle="modal" data-target="#editTrainingLoc" data-identity=""
                                        data-name="">Edit</button>
                                            <button class="dropdown-item" data-toggle="modal" data-target="#deleteTrainingLoc" data-identity=""
                                        data-name="">Delete</button>
                                        </div>
                                    </div></div></td>

                                        </tr>
                                        
                                    @endforeach
                                    </tbody>
                                    <!-- <tfoot>
                                        <tr>
                                            <th>Rendering engine</th>
                                            <th>Browser</th>
                                            <th>Platform(s)</th>
                                            <th>Engine version</th>
                                            <th>CSS grade</th>
                                        </tr>
                                    </tfoot> -->
                                </table>
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
        
        <!-- Modals -->
        @include('modals.add_campaign_type')
        @include('modals.add_campaign_status')

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