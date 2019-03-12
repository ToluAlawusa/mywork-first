@extends('layouts.app')

@section('content')

        <div id="app">
			<div class="site-content">
                <!-- Content -->
                <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
                <link rel="stylesheet" href="/resources/demos/style.css">
                <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
                <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
				<div class="content-area py-1">



					<div class="container-fluid">
						<h4>Employee Form</h4>
						<ol class="breadcrumb no-bg mb-1">
							<li class="breadcrumb-item"><a href="#">Home</a></li>
							<li class="breadcrumb-item"><a href="#">Employee</a></li>
							<li class="breadcrumb-item active">New Employee</li>
						</ol>
						<div class="box bg-white">
							<div class="row no-gutter">
								<div class="col-md-12">
									<div class="box-block b-b">
										<h5 class="mb-1">Employee Informations</h5>

                                    </div>

                                    @if(count($errors) > 0)

                                  <ul class="list-group">
                                     @foreach ($errors->all() as $error)

                                     <li class="list-group-item">
                                      {{ $error }}
                                            </li>

                                  @endforeach
                            </ul>

                               @endif

                               @if (Session::has('success'))

                               <div class="alert alert-success" role="alert">
                                  {{Session::get('success')}}
                                    </div>

                                @endif



                                    <div class="page-wrapper">
                                            <div class="content container-fluid">

                                                <form action="{{ route('submit_employee') }}" method="POST" enctype="multipart/form-data">
                                                        {{ csrf_field() }}

                                                    <div class="card-box">
                                                        {{--  <h3 class="card-title">Basic Informations</h3>  --}}
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="profile-basic">
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                                <input  name="company_id" type="hidden" class="form-control floating" value="1"  />
                                                                                <input  name="branch_id" type="hidden" class="form-control floating"  value="1" />
                                                                            <div class="form-group form-focus">
                                                                                <label class="control-label">First Name</label>
                                                                                <input  name="first_name" type="text" class="form-control floating"  />
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group form-focus">
                                                                                <label class="control-label">Last Name</label>
                                                                                <input  name="last_name" type="text" class="form-control floating" />
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group form-focus">
                                                                                <label class="control-label">Birth Date</label>
                                                                                <div class="cal-icon"><input name="birth_date" id="datepicker" class="form-control floating datetimepicker" type="text"></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <div class="form-group form-focus select-focus">
                                                                                <label class="control-label">Gendar</label>
                                                                                <select class="select form-control floating" name="gendar">
                                                                                    <option value="">Select Gendar</option>
                                                                                    <option value="Male">Male</option>
                                                                                    <option value="Female">Female</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>


                                                                        <div class="col-md-3">
                                                                                <div class="form-group form-focus select-focus">
                                                                                    <label class="control-label">Picture</label>
                                                                                    <div class="cal-icon"><input name="image" class="form-control" type="file"></div>

                                                                                </div>
                                                                            </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-box">
                                                        <h3 class="card-title">Contact Informations</h3>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group form-focus">
                                                                    <label class="control-label">Address</label>
                                                                    <input name="address" type="text" class="form-control floating" />
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group form-focus">
                                                                    <label class="control-label">State</label>
                                                                    <input name="state" type="text" class="form-control floating" />
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group form-focus">
                                                                    <label class="control-label">Country</label>
                                                                    <input name="country" type="text" class="form-control floating" />
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group form-focus">
                                                                    <label class="control-label">Pin Code</label>
                                                                    <input name="pin_code" type="number" class="form-control floating" />
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-group form-focus">
                                                                    <label class="control-label">Phone Number</label>
                                                                    <input name="phone_number" type="number" class="form-control floating" />
                                                                </div>
                                                            </div>

                                                            <div class="col-md-3">
                                                                <div class="form-group form-focus">
                                                                    <label class="control-label">Email Address</label>
                                                                    <input name="email_address" type="text" class="form-control floating" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-box">
                                                        <h3 class="card-title">Education Informations</h3>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group form-focus">
                                                                    <label class="control-label">Institution</label>
                                                                    <input name="institution" type="text" class="form-control floating" />
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group form-focus">
                                                                    <label class="control-label">Course </label>
                                                                    <input name="course" type="text" class="form-control floating" />
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group form-focus">
                                                                    <label class="control-label">Starting Date</label>
                                                                    <input name="starting_date" type="text" class="form-control floating" />
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group form-focus">
                                                                    <label class="control-label">Complete Date</label>
                                                                    <input name="complete_date" type="text" class="form-control floating" />
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group form-focus">
                                                                    <label class="control-label">Degree</label>
                                                                    <input name="degree" type="text" class="form-control floating" />
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group form-focus">
                                                                    <label class="control-label">Grade</label>
                                                                    <input name="grade" type="text" class="form-control floating" />
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="card-box">
                                                        <h3 class="card-title">Experience Informations</h3>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group form-focus">
                                                                    <label class="control-label">Company Name</label>
                                                                    <input name="company_name" type="text" class="form-control floating" />
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group form-focus">
                                                                    <label class="control-label">Location</label>
                                                                    <input name="location" type="text" class="form-control floating" />
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group form-focus">
                                                                    <label class="control-label">Job Position</label>
                                                                    <input name="job_position" type="text" class="form-control floating" />
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group form-focus">
                                                                    <label class="control-label">Period From</label>
                                                                    <input name="period_from" type="text" class="form-control floating" />
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group form-focus">
                                                                    <label class="control-label">Period To</label>
                                                                    <input name="period_to" type="text" class="form-control floating" />
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="text-center m-t-20">
                                                        <button class="btn btn-primary btn-lg btn-rounded" type="submit">Save</button>
                                                    </div>
                                                </form>
                                            </div>

                                        </div>






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
								2018 © Mywork
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
        </div>
		</div>

		<!-- Vendor JS -->
		<script type="text/javascript" src="{{asset('back/vendor/jquery/jquery-1.12.3.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('back/vendor/tether/js/tether.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('back/vendor/bootstrap4/js/bootstrap.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('back/vendor/detectmobilebrowser/detectmobilebrowser.js')}}"></script>
		<script type="text/javascript" src="{{asset('back/vendor/jscrollpane/jquery.mousewheel.js')}}"></script>
		<script type="text/javascript" src="{{asset('back/vendor/jscrollpane/mwheelIntent.js')}}"></script>
		<script type="text/javascript" src="{{asset('back/vendor/jscrollpane/jquery.jscrollpane.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('back/vendor/jquery-fullscreen-plugin/jquery.fullscreen-min.js')}}"></script>
		<script type="text/javascript" src="{{asset('back/vendor/waves/waves.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('back/vendor/switchery/dist/switchery.min.js')}}"></script>

        <script type="text/javascript" src="{{asset('back/vendor/clockpicker/dist/jquery-clockpicker.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('back/vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('back/vendor/moment/moment.js')}}"></script>
        <script type="text/javascript" src="{{asset('back/vendor/bootstrap-daterangepicker/daterangepicker.js')}}"></script>

        <script>
                $( function() {
                  $( "#datepicker" ).datepicker();
                } );
                </script>

		<!-- Mywork JS -->
		<script type="text/javascript" src="{{asset('back/js/app.js')}}"></script>
		<script type="text/javascript" src="{{asset('back/js/demo.js')}}"></script>
		<script type="text/javascript" src="{{asset('back/js/index.js')}}"></script>
@endsection
