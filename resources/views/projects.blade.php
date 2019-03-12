@extends('layouts.app')

@section('content')

        <div id="app">
			<div class="site-content">
				<!-- Content -->
				<div class="content-area py-1">
					<project-component></project-component>
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
	   
		<!-- Mywork JS -->
		<script type="text/javascript" src="{{asset('back/js/app.js')}}"></script>
		<script type="text/javascript" src="{{asset('back/js/demo.js')}}"></script>
		<script type="text/javascript" src="{{asset('back/js/index.js')}}"></script>
@endsection