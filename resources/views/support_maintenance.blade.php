@extends('layouts.app')
@section('content')

	<div class="site-content">
        <!-- Content -->
        <div class="content-area py-1">
            <div class="container-fluid">
                <h4>Support & Maintenance</h4>
                <ol class="breadcrumb no-bg mb-1">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <!-- <li class="breadcrumb-item"><a href="#">Payroll</a></li> -->
                    <li class="breadcrumb-item active">Support</li>
                </ol>


		        <div class="box box-block bg-white">
							<h5>Support Tickets</h5>
							<p class="font-90 text-muted mb-1">Do you have a question or problem? The support ticket system allows us to respond to your inquiries. Submit a ticket and we will get back to you</p>
							<div class="row">

								<div class="col-md-12">
									<ul class="nav nav-tabs nav-tabs-2">
										<li class="nav-item">
											<a class="nav-link active" data-toggle="tab" href="#home"><i class="ti-user text-muted mr-0-25"></i> All</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" data-toggle="tab" href="#profile"><i class="ti-package text-muted mr-0-25"></i> Open</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" data-toggle="tab" href="#dropdown1"><i class="ti-settings text-muted mr-0-25"></i> Answered</a>
										</li>
										<li class="nav-item">
											<!-- <a class="nav-link disabled" data-toggle="tab" href="#dropdown2"><i class="ti-alert text-muted mr-0-25"></i> Disabled</a> -->
											<!-- <a class="nav-link disabled" data-toggle="tab" href="#dropdown2"><i class="ti-settings text-muted mr-0-25"></i> Settings</a> -->
                                            <p>
                                              <button class="btn btn-rounded btn-primary" data-toggle="modal" data-target="#openSupportTicket"><b><i class="fa fa-pencil"></i></b> Create new</button>
                                            </p>
										</li>
									</ul>
									<br>
									<div class="tab-content">
										<div class="tab-pane active" id="home" role="tabpanel">
											<table class="table table-striped table-bordered dataTable" id="table-2">
			                                <thead>
			                                    <tr>
			                                        <th>S/N</th>
			                                        <th>Ticket ID</th>
			                                        <th>Subject</th>
			                                        <th>Status</th>
			                                        <th>Department</th>
			                                        <th>Priority</th>
			                                        <th>Date</th>
			                                        <th>Action</th>

			                                        <!-- <th>Change Status</th> -->

			                                    </tr>
			                                </thead>
			                                <tbody>
			                                	@foreach($tickets_list as $indexKey => $ticket_list)
			                                    <tr>
			                                        <td>{{$indexKey+1}}</td>
			                                        <td>{{$ticket_list->ticket_id}}</td>
			                                        <td>{{$ticket_list->subject}}</td>
			                                        <td>{{$ticket_list->status}}</td>
			                                        <td>{{$ticket_list->department}}</td>
			                                        <td>{{$ticket_list->priority}}</td>
			                                        <td>{{$ticket_list->created_at}}</td>
			                                        <td>
			                                        	<a href="{{ '/view_support_ticket/'.$ticket_list->ticket_id}}"><button class="btn btn-rounded btn-primary" ><b><i class="fa fa-view"></i></b> View Ticket</button></a>
			                                        </td>

			                                    </tr>
			                                    @endforeach
			                                </tbody>
			                            </table>
										</div>
										<div class="tab-pane" id="profile" role="tabpanel">
											<table class="table table-striped table-bordered dataTable" id="table-2">
			                                <thead>
                                                <tr>
                                                    <th>S/N</th>
                                                    <th>Subject</th>
                                                    <th>Status</th>
                                                    <th>Department</th>
                                                    <th>Priority</th>
                                                    <th>Date</th>
                                                    <th>Action</th>

                                                    <!-- <th>Change Status</th> -->

                                                </tr>
                                            </thead>
                                            <tbody>
												@foreach($open_tickets_list as $indexKey => $ticket_list)
			                                    <tr>
			                                        <td>{{$indexKey+1}}</td>
			                                        <td>{{$ticket_list->ticket_id}}</td>
			                                        <td>{{$ticket_list->subject}}</td>
			                                        <td>{{$ticket_list->status}}</td>
			                                        <td>{{$ticket_list->department}}</td>
			                                        <td>{{$ticket_list->priority}}</td>
			                                        <td>{{$ticket_list->created_at}}</td>
			                                        <td>
			                                        	<a href="{{ '/view_support_ticket/'.$ticket_list->ticket_id}}"><button class="btn btn-rounded btn-primary" ><b><i class="fa fa-view"></i></b> View Ticket</button></a>
			                                        </td>

			                                    </tr>
			                                    @endforeach
                                            </tbody>
			                            </table>
										</div>
										<div class="tab-pane" id="dropdown1" role="tabpanel">
											<table class="table table-striped table-bordered dataTable" id="table-2">
			                                <thead>
                                                <tr>
                                                    <th>S/N</th>
                                                    <th>Subject</th>
                                                    <th>Status</th>
                                                    <th>Department</th>
                                                    <th>Priority</th>
                                                    <th>Date</th>
                                                    <th>Action</th>

                                                    <!-- <th>Change Status</th> -->

                                                </tr>
                                            </thead>
                                            <tbody>
												@foreach($answered_tickets_list as $indexKey => $ticket_list)
			                                    <tr>
			                                        <td>{{$indexKey+1}}</td>
			                                        <td>{{$ticket_list->ticket_id}}</td>
			                                        <td>{{$ticket_list->subject}}</td>
			                                        <td>{{$ticket_list->status}}</td>
			                                        <td>{{$ticket_list->department}}</td>
			                                        <td>{{$ticket_list->priority}}</td>
			                                        <td>{{$ticket_list->created_at}}</td>
			                                        <td>
			                                        	<a href="{{ '/view_support_ticket/'.$ticket_list->ticket_id}}"><button class="btn btn-rounded btn-primary" ><b><i class="fa fa-view"></i></b> View Ticket</button></a>
			                                        </td>

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
        </div>
        </div>

        <!-- Modal -->
      @include('modals.support_ticket')

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

		<!-- Neptune JS -->
		<script type="text/javascript" src="{{ asset('back/js/app.js')}}"></script>
		<script type="text/javascript" src="{{ asset('back/js/demo.js')}}"></script>
        <script type="text/javascript" src="{{ asset('back/js/forms-upload.js')}}"></script>



@endsection
