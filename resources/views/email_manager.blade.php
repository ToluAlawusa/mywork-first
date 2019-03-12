@extends('layouts.app')
@section('content')
	

		<div class="site-content">
				<!-- Content -->
			<div class="content-area py-1">
				<div class="container-fluid">
					<h4>Inbox</h4>
					<ol class="breadcrumb no-bg mb-1">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item"><a href="#">Apps</a></li>
						<li class="breadcrumb-item active">Inbox</li>
					</ol>
					<div class="row">
						<div class="col-md-2 mb-1 mb-md-0">
							<button class="btn btn-secondary hidden-sm-up" type="button" data-toggle="collapse" data-target="#nav-1"><i class="ti-menu"></i></button>
							<div class="collapse navbar-toggleable-sm mt-1 mt-md-0" id="nav-1">
								<ul class="nav nav-pills nav-stacked nav-8">
									<li class="nav-item active">

										<h1>{{ LaravelGmail::user() }}</h1>
										    @if(LaravelGmail::check())
										        <a href="{{ url('oauth/gmail/logout') }}">logout</a>
										    @else
										        <a href="{{ url('oauth/gmail') }}">login</a>
										    @endif
										<a class="nav-link" href="#">
											<i class="ti-email mr-0-5"></i> Inbox <span class="tag tag-danger float-xs-right">78</span>
										</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#"><i class="ti-star mr-0-5"></i> Starred</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#">
											<i class="ti-bookmark mr-0-5"></i> Important <span class="tag tag-danger float-xs-right">14</span>
										</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#"><i class="ti-folder mr-0-5"></i> Sent</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#"><i class="ti-archive mr-0-5"></i> Drafts</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#"><i class="ti-info-alt mr-0-5"></i> Spam</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#"><i class="ti-trash mr-0-5"></i> Trash</a>
									</li>
								</ul>
								<hr>
								<ul class="nav nav-pills nav-stacked nav-8">
									<li class="nav-item">
										<a class="nav-link" href="#"><i class="fa fa-circle text-danger mr-0-5"></i> Personal</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#"><i class="fa fa-circle text-primary mr-0-5"></i> Work</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#"><i class="fa fa-circle text-purple mr-0-5"></i> Clients</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#"><i class="fa fa-plus text-success mr-0-5"></i> Add new label</a>
									</li>
								</ul>
								<hr>
								<ul class="nav nav-pills nav-stacked nav-8">
									<li class="nav-item">
										<a class="nav-link" href="#"><i class="ti-settings mr-0-5"></i> Settings</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="col-md-10">
							<div class="mb-1">
								<div class="clearfix">
									<a href="{{ route('signin') }}"><button type="button" class="btn btn-success float-left mr-0-5 label-left waves-effect waves-light">
										<span class="btn-label"><i class="ti-pencil"></i></span>
										Compose
									</button></a>
									<button type="button" class="btn btn-outline-primary btn-icon float-left mr-0-5"><i class="ti-reload"></i></button>
									<button type="button" class="btn btn-outline-primary btn-icon float-left mr-0-5"><i class="ti-trash"></i></button>
									<div class="btn-group float-right" role="group">
										<button type="button" class="btn btn-outline-primary waves-effect dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											Filter
										</button>
										<div class="dropdown-menu dropdown-menu-right">
											<a class="dropdown-item" href="#">time</a>
											<a class="dropdown-item" href="#">importance</a>
										</div>
									</div>
								</div>
							</div>
							<div class="box bg-white">
								<div class="table-responsive">
									<table class="table table-hover mail-items mb-0">
										<tbody>
											<tr class="unread">
												<td class="mail-item-sender">
													<a class="mail-item-important" href="#">
														<i class="fa fa-bookmark fa-rotate-270"></i>
													</a>
													<a class="avatar box-32 mr-0-5" href="#">
														<img class="b-a-radius-circle" src="img/avatars/1.jpg" alt="">
													</a>
													<a href="#">Google Inc</a>
												</td>
												<td>
													<i class="fa fa-circle text-warning mr-0-5"></i>
													<a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</a>
												</td>
												<td class="mail-item-attachment">
													<i class="fa fa-paperclip"></i>
												</td>
												<td class="mail-item-time">
													07:23 AM
												</td>
												<td class="mail-item-checkbox">
													<label class="custom-control custom-checkbox">
														<input type="checkbox" class="custom-control-input">
														<span class="custom-control-indicator"></span>
													</label>
												</td>
											</tr>
											<tr class="important">
												<td class="mail-item-sender">
													<a class="mail-item-important" href="#">
														<i class="fa fa-bookmark fa-rotate-270"></i>
													</a>
													<a class="avatar box-32 mr-0-5" href="#">
														<img class="b-a-radius-circle" src="img/avatars/2.jpg" alt="">
													</a>
													<a href="#">John Doe</a>
												</td>
												<td>
													<i class="fa fa-circle text-success mr-0-5"></i>
													<a href="#">Dolor sit amet, consectetuer adipiscing</a>
												</td>
												<td class="mail-item-attachment">
													<i class="fa fa-paperclip"></i>
												</td>
												<td class="mail-item-time">
													03:00 AM
												</td>
												<td class="mail-item-checkbox">
													<label class="custom-control custom-checkbox">
														<input type="checkbox" class="custom-control-input">
														<span class="custom-control-indicator"></span>
													</label>
												</td>
											</tr>
											<tr>
												<td class="mail-item-sender">
													<a class="mail-item-important" href="#">
														<i class="fa fa-bookmark fa-rotate-270"></i>
													</a>
													<a class="avatar box-32 mr-0-5" href="#">
														<img class="b-a-radius-circle" src="img/avatars/3.jpg" alt="">
													</a>
													<a href="#">Google Inc</a>
												</td>
												<td>
													<i class="fa fa-circle text-warning mr-0-5"></i>
													<a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</a>
												</td>
												<td class="mail-item-attachment">
													<i class="fa fa-paperclip"></i>
												</td>
												<td class="mail-item-time">
													07:23 AM
												</td>
												<td class="mail-item-checkbox">
													<label class="custom-control custom-checkbox">
														<input type="checkbox" class="custom-control-input">
														<span class="custom-control-indicator"></span>
													</label>
												</td>
											</tr>
											<tr>
												<td class="mail-item-sender">
													<a class="mail-item-important" href="#">
														<i class="fa fa-bookmark fa-rotate-270"></i>
													</a>
													<a class="avatar box-32 mr-0-5" href="#">
														<img class="b-a-radius-circle" src="img/avatars/4.jpg" alt="">
													</a>
													<a href="#">Google Inc</a>
												</td>
												<td>
													<i class="fa fa-circle text-warning mr-0-5"></i>
													<a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</a>
												</td>
												<td class="mail-item-attachment">
													<i class="fa fa-paperclip"></i>
												</td>
												<td class="mail-item-time">
													07:23 AM
												</td>
												<td class="mail-item-checkbox">
													<label class="custom-control custom-checkbox">
														<input type="checkbox" class="custom-control-input" checked>
														<span class="custom-control-indicator"></span>
													</label>
												</td>
											</tr>
											<tr>
												<td class="mail-item-sender">
													<a class="mail-item-important" href="#">
														<i class="fa fa-bookmark fa-rotate-270"></i>
													</a>
													<a class="avatar box-32 mr-0-5" href="#">
														<img class="b-a-radius-circle" src="img/avatars/5.jpg" alt="">
													</a>
													<a href="#">Google Inc</a>
												</td>
												<td>
													<i class="fa fa-circle text-warning mr-0-5"></i>
													<a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</a>
												</td>
												<td class="mail-item-attachment">
													<i class="fa fa-paperclip"></i>
												</td>
												<td class="mail-item-time">
													07:23 AM
												</td>
												<td class="mail-item-checkbox">
													<label class="custom-control custom-checkbox">
														<input type="checkbox" class="custom-control-input">
														<span class="custom-control-indicator"></span>
													</label>
												</td>
											</tr>
											<tr>
												<td class="mail-item-sender">
													<a class="mail-item-important" href="#">
														<i class="fa fa-bookmark fa-rotate-270"></i>
													</a>
													<a class="avatar box-32 mr-0-5" href="#">
														<img class="b-a-radius-circle" src="img/avatars/6.jpg" alt="">
													</a>
													<a href="#">Google Inc</a>
												</td>
												<td>
													<i class="fa fa-circle text-warning mr-0-5"></i>
													<a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</a>
												</td>
												<td class="mail-item-attachment">
													<i class="fa fa-paperclip"></i>
												</td>
												<td class="mail-item-time">
													07:23 AM
												</td>
												<td class="mail-item-checkbox">
													<label class="custom-control custom-checkbox">
														<input type="checkbox" class="custom-control-input">
														<span class="custom-control-indicator"></span>
													</label>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							<div class="btn-group btn-group-sm mr-1">
								<button type="button" class="btn btn-secondary waves-effect waves-light"><i class="ti-angle-left"></i></button>
								<button type="button" class="btn btn-secondary waves-effect waves-light"><i class="ti-angle-right"></i></button>
							</div>
							<span class="text-muted">Showing 1 - 20 of 289</span>
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

        <!-- Neptune JS -->
        <script type="text/javascript" src="{{ asset('back/js/app.js')}}"></script>
        <script type="text/javascript" src="{{ asset('back/js/demo.js')}}"></script>
		



@endsection