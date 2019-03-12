@extends('layouts.app')
@section('content')

            <div class="site-content">
                <!-- Content -->
                <div class="content-area py-1">
                    <div class="container-fluid">
                        <h4>Training Recommendations</h4>
                        <ol class="breadcrumb no-bg mb-1">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Training & Career Development </a></li>
                            <li class="breadcrumb-item active">Training Recommendations</li>
                        </ol>
                        <br>
                        <div class="box box-block bg-white">
                        <h5 style="">Outbound Recommendations</h5>
                            <!-- <h5 class="mb-1">Employee Payroll Data</h5> -->
                             <button style="margin-left: 10px; float: right;" class="btn btn-rounded btn-success" data-toggle="modal" data-target="#createRecomm"><b>+</b>Create Recommdation</button>
                            <table class="table table-striped table-bordered dataTable" id="table-2">
                                <thead>
                                    <tr>
                                        <th>S/N</th>
                                        <th>Employee</th>
                                        <th>Designation</th>
                                        <th>Course</th>
                                        <th>Course Duration</th>
                                        <th>Recommdation Note</th>
                                        <th>Recommended By</th>
                                        <th>Date Recommended</th>
                                        <th>Awaiting Approval From</th>
                                        <th>Options</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($OutBreco as $indexKey => $OutBoundReco)
                                    <tr>
                                    	
                                        <td>{{$indexKey+1}}</td>
                                        <td>{{$OutBoundReco->Employee->User->name}}</td>
                                        <td>{{$OutBoundReco->Employee->designation->name}}</td>
                                        <td>{{$OutBoundReco->training_type->name}}</td>
                                        <td>{{$OutBoundReco->training_type->duration}}</td>
                                        <td>{{$OutBoundReco->recommendation_note}}</td>
                                        <td>{{$OutBoundReco->recommended_by}}</td>
                                        <td>{{$OutBoundReco->date_of_recommendation}}</td>
                                        <td>{{$OutBoundReco->awaiting_approval_from}}</td>
                                        <td><div class="clearfix">
                                            <div class="dropdown dropup float-xs-left mr-0-25">
                                    <button class="btn btn-primary dropdown-toggle btn-rounded" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Action
                                    </button>
                                    <div class="dropdown-menu animated flipInY" aria-labelledby="dropdownMenuButton">
                                        <button class="dropdown-item" data-toggle="modal" data-target="#editTrainingRecomm" data-identity="{{$OutBoundReco->id}}"
                                    data-empcourse="{{$OutBoundReco->training_type_id}}" data-recnote="{{$OutBoundReco->recommendation_note}}" data-awapproval="{{$OutBoundReco->awaiting_approval_from}}">Edit</button>
                                    <button class="dropdown-item" data-toggle="modal" data-target="#" data-identity="" data-recnote="" data-awapproval="}">Approve</button>
                                        <button class="dropdown-item" data-toggle="modal" data-target="#deleteTrainingRecomm" data-identity="{{$OutBoundReco->id}}">Delete</button>
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
                        <br>
                        <div class="row row-md mb-2">
							
							<div class="col-md-12">
                            <h5 style="margin: 10px">Inbound Recommendations</h5>
								<div class="box bg-white">
									<table class="table table-grey-head mb-md-0">
										<thead>
											<tr>
												<th>#</th>
												<th>Employee</th>
                                                <th>Designation</th>
                                                <th>Course</th>
                                                <th>Course Duration</th>
                                                <th>Recommdation Note</th>
                                                <th>Recommended By</th>
                                                <th>Date Recommended</th>
                                                <th>Awaiting Approval From</th>
                                                <th>Options</th>
											</tr>
										</thead>
										<tbody>
                                        @foreach($InBreco as $indexKey => $InBoundReco)
											<tr>
												<td scope="row">{{$indexKey+1}}</td>
												<td>{{$InBoundReco->Employee->User->name}}</td>
                                                <td>{{$InBoundReco->Employee->designation->name}}</td>
												<td>
													<a class="text-primary" href="#"><span class="underline">{{$InBoundReco->training_type->name}}</span></a>
												</td>
												<td>
													<span class="text-muted">{{$InBoundReco->training_type->duration}}</span>
												</td>
												<!-- <td>
													<progress class="progress progress-success progress-sm d-inline-block mb-0" value="44" max="100">100%</progress>
												</td> -->
                                                <td style="font-style:italics" data-container="body" data-toggle="popover" data-placement="top" title="Recommendation Note" data-content="{{$InBoundReco->recommendation_note}}">
                                                @if(strlen($InBoundReco->recommendation_note) > 30)

                                                {{mb_substr($InBoundReco->recommendation_note, 0, 30)}}...
                                                @else
                                                    {{mb_substr($InBoundReco->recommendation_note, 0, 30)}}
                                                @endif
                                                </td>
                                                <td>{{$InBoundReco->recommended_by}}</td>
                                                <td>{{$InBoundReco->date_of_recommendation}}</td>
                                                <td>{{$InBoundReco->awaiting_approval_from}}</td>
                                                <td><div class="clearfix">
                                            <div class="dropdown dropup float-xs-left mr-0-25">
                                    <button class="btn btn-primary dropdown-toggle btn-rounded" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Action
                                    </button>
                                    <div class="dropdown-menu animated flipInY" aria-labelledby="dropdownMenuButton">
                                        <button class="dropdown-item" data-toggle="modal" data-target="#" data-identity="" data-recnote="" data-awapproval="}">Approve</button>
                                        <button class="dropdown-item" data-toggle="modal" data-target="#deleteTrainingRecomm" data-identity="{{$OutBoundReco->id}}">Delete</button>
                                    </div>
                                </div></div></td>
											</tr>
										@endforeach	
										</tbody>
									</table>
								</div>
							</div>
						</div>


                    </div>
                </div>

            </div>

            <!-- Modal -->
        	@include('modals.create_recommendations')
            @include('modals.edit_recommendation')
            @include('modals.delete_training_recomm')
        


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
        <script type="text/javascript" src="{{ asset('back/vendor/DataTables/js/jquery.dataTables.min.js')}}"></script>
        <script type="text/javascript" src="{{ asset('back/vendor/DataTables/js/dataTables.bootstrap4.min.js')}}"></script>
        <script type="text/javascript" src="{{ asset('back/vendor/DataTables/Responsive/js/dataTables.responsive.min.js')}}"></script>
        <script type="text/javascript" src="{{ asset('back/vendor/DataTables/Responsive/js/responsive.bootstrap4.min.js')}}"></script>
        <script type="text/javascript" src="{{ asset('back/vendor/DataTables/Buttons/js/dataTables.buttons.min.js')}}"></script>
        <script type="text/javascript" src="{{ asset('back/vendor/DataTables/Buttons/js/buttons.bootstrap4.min.js')}}"></script>
        <script type="text/javascript" src="{{ asset('back/vendor/DataTables/JSZip/jszip.min.js')}}"></script>
        <script type="text/javascript" src="{{ asset('back/vendor/DataTables/pdfmake/build/pdfmake.min.js')}}"></script>
        <script type="text/javascript" src="{{ asset('back/vendor/DataTables/pdfmake/build/vfs_fonts.js')}}"></script>
        <script type="text/javascript" src="{{ asset('back/vendor/DataTables/Buttons/js/buttons.html5.min.js')}}"></script>
        <script type="text/javascript" src="{{ asset('back/vendor/DataTables/Buttons/js/buttons.print.min.js')}}"></script>
        <script type="text/javascript" src="{{ asset('back/vendor/DataTables/Buttons/js/buttons.colVis.min.js')}}"></script>

        <!-- Neptune JS -->
        <script type="text/javascript" src="{{ asset('back/js/app.js')}}"></script>
        <script type="text/javascript" src="{{ asset('back/js/demo.js')}}"></script>
        <script type="text/javascript" src="{{ asset('back/js/tables-datatable.js')}}"></script>

        @include('logic.trainingjs')
        


@endsection
