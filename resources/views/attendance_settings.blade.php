@extends('layouts.app')
@section('content')

	        <div class="site-content">
				<!-- Content -->
				<div class="content-area py-1">
					@if(Session::has('fail'))
                    <div class="form-group">
                        <div class="alert alert-danger">

                                <section class="info-box danger">
                                    {{ Session::get('fail') }}
                                </section>

                        </div>
                    </div>
                    <hr/>
                    @endif
					<div class="container-fluid">
                        @if($attendance_info != null)
						<input type="hidden" id="chk_att_resump" value="{{$resumptime}}">
						<input type="hidden" id="chk_att_grace" value="{{$resumpgrace}}">
                        <input type="hidden" id="chk_att_id" value="{{$att_sett_id}}">
                        @endif
						<h4>Attendance Settings</h4>
						<ol class="breadcrumb no-bg mb-1">
							<li class="breadcrumb-item"><a href="#">Home</a></li>
							<li class="breadcrumb-item"><a href="#">Attendance</a></li>
							<li class="breadcrumb-item active">Settings</li>
						</ol>

						<!-- <h5>Sizing</h5> -->
						<p class="font-90 text-muted mb-1">Please set your Resumption time and Grace Period</p>
						<div class="row mb-1">
							<div class="col-sm-4" style="margin-left: 50px">
								<div class="card card-block" id="initiate_insert_time">
									<div class="alert alert-warning-fill alert-dismissible fade in" role="alert">

										<strong> Please set your Company's Resumptions time and Grace Period to activate your Attendance Settings.</strong>
									</div>
									<br/>
									<button type="submit" class="btn btn-primary btn-rounded pull-right" id="submit1">Set Time</button>
						        </div>
						        <div class="card card-block" id="insert_time">
								<form action="{{ route('attendance_settings') }}" method="POST" id="clientsendemail">
										@csrf
									<h6>Resumption Time</h6>
									<div class="input-group clockpicker" data-placement="left" data-align="top" data-autoclose="true">
									    <input type="text" class="form-control" name="resumption_time" value="00:00" required>
									    <span class="input-group-addon">
											<i class="ti ti-time"></i>
									    </span>
									</div>
									<br>
									<h6>Resumption Grace Time</h6>
									<div class="input-group clockpicker" data-placement="left" data-align="top" data-autoclose="true">
									    <input type="text" class="form-control" name="grace_period" value="00:00" required>
									    <span class="input-group-addon">
											<i class="ti ti-time"></i>
									    </span>
									</div>
									<br/>
									<button type="submit" class="btn btn-success btn-rounded pull-right" id="submit2">Set</button>
								</form>
						        </div>
						        <div class="card card-block" id="edit_time">
								<form action="@if($attendance_info != null){{'update_attendance_settings/'.$att_sett_id}}@endif" method="POST" id="clientsendemail" class="form-material">
									<button type="submit" class="btn btn-primary btn-rounded pull-right" id="submit3">Edit</button>
									<br>

                                    @csrf
                                    <h6>Resumption Time</h6>
                                    <div class="input-group clockpicker" data-placement="left" data-align="top" data-autoclose="true">
                                        <input type="text" class="form-control" name="resumption_time" value="@if($attendance_info != null){{$resumptime}}@endif">
                                        <span class="input-group-addon">
                                            <i class="ti ti-time"></i>
                                        </span>
                                    </div>
                                    <br>
                                    <h6>Resumption Grace Time</h6>
                                    <div class="input-group clockpicker" data-placement="left" data-align="top" data-autoclose="true">
                                        <input type="text" class="form-control" name="grace_period" value="@if($attendance_info != null){{$resumpgrace}}@endif">
                                        <span class="input-group-addon">
                                            <i class="ti ti-time"></i>
                                        </span>
                                    </div>

								</form>
						        </div>
							</div>
							<div class="col-sm-6">
								<div class="card">


									<img class="card-img-top img-fluid" src="{{ asset('back/img/cross-functional-teams.jpg')}}" alt="Card image cap">



								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Vendor JS -->
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
		<script type="text/javascript" src="{{ asset('back/vendor/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js')}}"></script>
		<script type="text/javascript" src="{{ asset('back/vendor/clockpicker/dist/jquery-clockpicker.min.js')}}"></script>
		<script type="text/javascript" src="{{ asset('back/vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
		<script type="text/javascript" src="{{ asset('back/vendor/moment/moment.js')}}"></script>
		<script type="text/javascript" src="{{ asset('back/vendor/bootstrap-daterangepicker/daterangepicker.js')}}"></script>

		<!-- Neptune JS -->
		<script type="text/javascript" src="{{ asset('back/js/app.js')}}"></script>
		<script type="text/javascript" src="{{ asset('back/js/demo.js')}}"></script>
		<script type="text/javascript" src="{{ asset('back/js/forms-pickers.js')}}"></script>
		@include('logic.attendancejs')


@endsection
