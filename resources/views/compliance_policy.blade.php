@extends('layouts.app')
@section('content')


		<div class="site-content">
        <!-- Content -->
        <div class="content-area py-1">
            <div class="container-fluid">
            	<!-- <h4>STicket Number</h4>
                <ol class="breadcrumb no-bg mb-1">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Payroll</a></li>
                    <li class="breadcrumb-item active">Support</li>
                </ol> -->


		        <div class="box box-block bg-white">
		        			<p>
                                <div class="dropdown dropup float-xs-right mr-0-25 pull-right" style="margin-bottom: 10px">
                                    <button class="btn btn-primary dropdown-toggle btn-rounded" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Create Policy
                                    </button>
                                    <div class="dropdown-menu animated flipInY" aria-labelledby="dropdownMenuButton">
                                        <!-- <button class="dropdown-item" data-toggle="modal" data-target="#createPolicyText">Insert Text</button> -->
                                        <button class="dropdown-item" data-toggle="modal" data-target="#createPolicyUpload">Upload docs</button>
                                    </div>
                                </div>
                            </p>
							<b><h5>Policies</h5></b>
							
							<p class="font-90 text-muted mb-1"></p>

            			<div class="row mb-1">
							<div class="col-md-3">
								<div class="card">
									<div class="card-header text-uppercase"><b></b></div>
									<div class="card-block">
										@foreach($compli as $compliance)
										@php Session::put('try_comp_id', $compliance->id) @endphp
										<a href="{{('/compliance_policy/'.Session::get('comp_or_bra_id').'/'.$compliance->id) }}"><button type="button" class="btn btn-outline-primary btn-block">{{$compliance->policy_name}}</button></a>
										@endforeach
									</div>
								</div>
							</div>
							<div class="col-md-8">
								<div class="card">
									<div class="card-header text-uppercase" style="background:#27569a; color:#fff"><b>File(s)</b></div>
									<button class="btn btn-success btn-rounded pull-right" style="margin: 5px" type="button" data-toggle="modal" data-target="#addPolicyUpload"><i class="fa fa-plus"></i>
                                        Add File
                                    </button>
                                    <br>
									<div class="card-block">
										<b><h4 style="margin-bottom: 20px"></h4></b>
										<hr style="border-top: 1px dotted">
										@foreach($compli_file as $compliance_file)
											<div class="col-xs-4">
												<a href="{{ asset('storage/images/PolicyFiles/' . $compliance_file->filename )}}" target="_blank">
													<img class="img-fluid" src="{{ asset('back/img/pdf_icon.png')}}" width="70" height="70" alt="">
													<br>
													<span style="text-align: center; margin-right: 30px">{{$compliance_file->filename}}</span>
												</a>
											</div>
										@endforeach
									</div>
									
								</div>
							</div>
						</div>
				</div>
            </div>
        </div>
    </div>

    <!-- Modals -->
    @include('modals.create_policy')

	


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
        <script type="text/javascript" src="{{ asset('back/vendor/dropify/dist/js/dropify.min.js')}}"></script>
        <script type="text/javascript" src="{{ asset('back/vendor/summernote/summernote.min.js')}}"></script>

        <!-- Neptune JS -->
        <script type="text/javascript" src="{{ asset('back/js/app.js')}}"></script>
        <script type="text/javascript" src="{{ asset('back/js/demo.js')}}"></script>
        <script type="text/javascript" src="{{ asset('back/js/forms-upload.js')}}"></script>
        <script type="text/javascript" src="{{ asset('back/js/forms-editors.js')}}"></script>
        @include('logic.policyjs')

@endsection