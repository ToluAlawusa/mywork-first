@extends('layouts.app')

@section('content')

        <div id="app">
			<div class="site-content">
				<!-- Content -->
				<div class="content-area py-1">
						<div class="container-fluid">
						<h4>All Employee</h4>
						<ol class="breadcrumb no-bg mb-1">
							<li class="breadcrumb-item"><a href="#">Home</a></li>
							<li class="breadcrumb-item"><a href="#">Apps</a></li>
							<li class="breadcrumb-item active">Employee</li>
						</ol>
						<div class="row row-sm">
                         @foreach ($employees as $emp)
                          	<div class="col-md-4">
								<div class="box box-block bg-white">
									<div class="row">
										<div class="col-md-4 col-sm-4 text-center">
											<img class="img-fluid b-a-radius-circle" src="http://placehold.it/250x250" alt="">
										</div>
										<div class="col-md-8 col-sm-8">
										  <h5>{{ $emp->first_name. " " .$emp->last_name }}</h5>
										  <span class="tag tag-success">{{ $emp->designation_id }}</span>
										  <p>
											<address>
												   {{ $emp->address }}<br>
												<abbr title="Phone">P:</abbr>  {{ $emp->phone_number }}
											</address>
										  </p>
                                          <button class="btn btn-outline-primary btn-rounded">Send email</button>
                                            <button class="btn btn-outline-info btn-rounded">Edit</button>
                                              <button class="btn btn-outline-danger btn-rounded">Delete</button>
										</div>
									</div>
								</div>
							</div>

                         @endforeach


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
		<script type="text/javascript" src="{{asset('back/vendor/dropify/dist/js/dropify.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('back/vendor/toastr/toastr.min.js')}}"></script>



		<!-- Mywork JS -->
		<script type="text/javascript" src="{{asset('back/js/app.js')}}"></script>
		<script type="text/javascript" src="{{asset('back/js/demo.js')}}"></script>
		<script type="text/javascript" src="{{asset('back/js/forms-upload.js')}}"></script>
		<script type="text/javascript" src="{{asset('back/js/ui-notifications.js')}}"></script>

@endsection
